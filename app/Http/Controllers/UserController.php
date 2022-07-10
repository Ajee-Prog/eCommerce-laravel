<?php

namespace App\Http\Controllers;
//amespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    //
    public function login(Request $req){
        $user = User::where(['email'=>$req->email])->first();
        // return $user->password;
        if (!$user || !Hash::check($req->password, $user->password)) {
            # code...
            return 'Hoooops! Something went wrong!';
        } else {
            # code...
             $req->session()->put('user', $user);
            return redirect('/');
        }

        // return $req->input();

    }
}
