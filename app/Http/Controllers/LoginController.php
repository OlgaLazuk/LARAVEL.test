<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Http\Requests\UserRegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    public function register()
    {
        return view('auth.register');
    }

    public function registration(UserRegistrationRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect()->route('catalog');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function checkLogin(Request $request)
    {
        $credentials = Auth::attempt($request->only(['email', 'password']));
        if ($credentials) {
            // аутентификация пройдена ...
            return back()->with('success', 'Авторизация прошла успешно!');
        } else {
            return back()->with('error', 'Пользователь не найден!');
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        $items = User::create($request->all());
//        return back()->with('success','Product successfully added.');
    }
}
