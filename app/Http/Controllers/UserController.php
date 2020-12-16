<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * @param Request $request
     */
   public function login(Request $request){

        $login=User::where("email",$request->email)->first();
        if (!$login or !Hash::check($request->password,$login->password)){
            echo "Kullanıcı adı veya şifre hatalı";
        }else{
            $request->session()->put("login",$login);
            return redirect(route("product"));
        }



    }

    public function register(){

    return view("register");
    }

    public function add_user(Request $request)
    {
        $request->validate([
            "name"=>"required",
            "email"=>"required",
            "password"=>"required"
        ]);
       $user=User::insert([
           "name"=>$request->name,
           "email"=>$request->email,
           "password"=>Hash::make($request->password)
       ]);

       if ($user){
           return redirect(route("product"));
       }
    }

    public function logout(){
       \Illuminate\Support\Facades\Session::forget("login");
       return redirect(route("product"));

    }

}
