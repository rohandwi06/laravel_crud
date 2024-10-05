<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;


class LoginController extends Controller
{

    public function login() {
        return view('login');
    }

    public function postlogin(Request $request): RedirectResponse
    {
        // dd($request->all());

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if(auth()->attempt($data)) {

            $request->session()->regenerate();

            if(auth()->user()->id_role == 1) {

                return redirect('/home');

            } else if(auth()->user()->id_role == 2) {


                return redirect('/home');

            } else {

                return redirect('/');
            }

        } else {

            return redirect('/');

        }

    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }

}
