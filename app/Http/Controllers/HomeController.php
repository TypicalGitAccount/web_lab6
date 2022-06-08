<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Email;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function indexEn() {
        return view('indexEng');
    }

    public function aboutUs($lang=null) {
        if ($lang == 'en') {
            return view('aboutUsEng');
        }
        return view('aboutUs');
    }

    public function services($lang=null) {
        $params = ['services' => Service::all()];
        if (!Auth::guest()) {
            $params['user_id'] = (int)auth()->user()->getAuthIdentifier();
        }

        if ($lang == 'en') {
            return view('servicesEng', $params);
        }
        return view('services', $params);
    }

    public function postOrderService(Request $request, $lang=null) {
        $new_order = array('user_id' =>$request->input('user_id'),
            'service_id' => $request->input('service_id'));
        DB::table('orders')->insert($new_order);
        return redirect('/services');
    }

    public function email($lang=null) {
        $isGuest = Auth::guest();

        if ($lang == 'en') {
            if ($isGuest)
                return redirect('login/en');
            return view('emailUsEng', ['email' => new Email()]);
        }
        if ($isGuest)
            return redirect('login');
        return view('emailUs', ['email' => new Email()]);
    }

    public function emailConfirmed(Request $request, $lang=null) {
        $id = (int)auth()->user()->getAuthIdentifier();
        $name = User::find($id)->name;
        $data=array('user_id'=>$id, 'text'=>$request->input('comment'));
        DB::table('comments')->insert($data);

        if ($lang == 'en') {
            return view('emailedEn', ['name' => $name]);
        }
        return view('emailed', ['name' => $name]);
    }

    private function fetch_comments(&$array, $delimiter) {
        foreach (Comment::all() as $comment) {
            $array[] = User::find((int)$comment->getAttribute('user_id'))->name
                . $delimiter . $comment->getAttribute('text');
        }
    }

    public function comments($lang=null) {
        $delimiter = "";
        $comments = array();
        if ($lang=='en') {
            $delimiter .= " says : ";
            $this->fetch_comments($comments, $delimiter);

            return view('commentsEn', ['comments' => $comments] );
        }
        $delimiter .= " коментує : ";
        $this->fetch_comments($comments, $delimiter);

        return view('comments', ['comments' => $comments] );
    }
}
