<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //

    function decentralization($userid)
    {
        if (get_user_role($userid) <= 1) {
            return view('admin.dashbroad');
        }
        return redirect("/");
    }

    function dashboard()
    {
        return $this->decentralization(Auth::id());
    }
    //
    function logins(Request $request)
    {
        $request->validate([
            'user_email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('user_email', 'password');
        if (Auth::attempt($credentials)) {
            return $this->dashboard();
        }
        return redirect("/")->withSuccess('Login details are not valid');
    }
    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }

    public function customerRegister(Request $request, User $users)
    {
        if ($users->CustomerRegister($request) == true) {
            return $this->logins($request);
        } 
        return redirect("/")->withSuccess('Login details are not valid');
    }
}
