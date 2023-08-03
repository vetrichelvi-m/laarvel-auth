<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $req){
        // echo"<bre>";print_r($req);exit();
        $this->validate(request(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        $email = $req->input('email');
        $password = $req->input('password');

        if(Auth::attempt(['email'=>$email,'password'=>$password])){

            $user = User::where('email',$email)->first();
            Auth::login($user);
            return redirect('/home');
        }else{
            return back()->withErrors(['Invaild data']);
        }

    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
