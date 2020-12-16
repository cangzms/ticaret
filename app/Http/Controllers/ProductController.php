<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index(){
        $products=Product::all();
        return view("product",compact("products"));
    }

    public function detail($id)
    {
        $detail= Product::find($id);
        return view("detail",compact("detail"));

    }

    public function search(Request $request){

        $searchs=Product::where("name","like","%".$request->input("search")."%")->get();

        return view("search",compact("searchs"));

    }

    public function card(Request $request){
        if ($request->session()->has("login"))
        {

            $card=new Card;
            $card->user_id=$request->session()->get("login")["id"];
            $card->product_id=$request->product_id;
            $card->save();
            return redirect(route("card"));
        }
        else
        {
            return redirect(route("login"));
        }



    }

    static function cardItem(){
        $userId=Session::get("login")["id"];
        return Card::where("user_id",$userId)->count();

    }


    public function basket(){
    $userId=Session::get("login")["id"];
        $baskets=DB::table("card")
            ->join("products","card.product_id","=","products.id")
            ->where("card.user_id",$userId)
            ->select("products.*","card.id as card_id")
            ->get();

        return view("card",compact("baskets"));

    }

    public function remove($id){
        Card::destroy($id);
        return redirect(route("card"));


    }

    public function payment(){
        $userId=Session::get("login")["id"];
        $payments=DB::table("card")
            ->join("products","card.product_id","=","products.id")
            ->where("card.user_id",$userId)
            ->sum("products.price");

        return view("payment",compact("payments"));
    }



}
