<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * @param Request $request
     */
    function login(Request $request){

        $login=User::where("email",$request->email)->first();
        if (!$login or !Hash::check($request->password,$login->password)){
            echo "Kullanıcı adı veya şifre hatalı";
        }else{
            $request->session()->put("login",$login);
            return redirect(route("product"));
        }


    }
}
