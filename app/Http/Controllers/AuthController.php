<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index($lang=null)
    {
        if ($lang=='en')
            return view('auth.loginEn');

        return view('auth.login');
    }

    public function registration($lang=null)
    {
        if ($lang=='en')
            return view('auth.registrationEn');

        return view('auth.registration');
    }

    public function postLogin(Request $request, $lang=null)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if ($lang=='en') {
            if (Auth::attempt($credentials)) {
                return redirect('/en');
            }

            return redirect("wrongCredentials/en")->withSuccess('Opps! You have entered invalid credentials');
        }

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                ->withSuccess('You have Successfully loggedin');
        }

        return redirect("/wrongCredentials");
    }

    public function wrongCredentials($lang=null) {
        if ($lang=='en')
            return view('auth.wrongCredentialsEn');

        return view('auth.wrongCredentials');
    }

    public function postRegistration(Request $request, $lang=null)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        $this->postLogin($request, $lang);

        return redirect("/" . $lang);
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function logout($lang=null) {
        Session::flush();
        Auth::logout();
        if ($lang == 'en')
            return Redirect('/en');
        return Redirect('/');
    }
}
