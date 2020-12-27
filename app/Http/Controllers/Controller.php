<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home(){
        return view('home.home');
    }

    public function shop(){
        $products = Product::paginate(9);
        return view('home.shop', ['products'=> $products]);
    }

    public function about(){
        return view('home.about');
    }

    public function contact(){
        return view('home.contact');
    }

    public function single($id){
        $single = Product::find($id);
        return view('home.single', ['single' => $single]);
    }

    public function checkout(){
        return view('home.checkout');
    }

    public function Pcheckout(Request $request){
        for ($i = 1; $i <= $request->total_item; $i++){
            $products[$i] = Product::where('name', $request->{'shoe_item_'.$i})->first();
            $quantity[$i] = $request->{'quantity_'.$i};
        }
        return view('home.checkout', ['products' => $products, 'quantity' => $quantity, 'total_item' => $request->total_item]);
    }


    public function payment(){
        return view('home.payment');
    }
}
