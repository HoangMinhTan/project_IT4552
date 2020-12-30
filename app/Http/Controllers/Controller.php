<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;

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
        if (Session::has('products')) {
            $products = Session::get('products');
            $quantity = Session::get('quantity');
            $total_item = Session::get('total_item');
            return view('home.checkout',['products' => $products, 'quantity' => $quantity, 'total_item' => $total_item]);
        }
        else return redirect('home');
    }

    public function Pcheckout(Request $request){
        $total_item = $request->total_item;
        for ($i = 1; $i <= $request->total_item; $i++){
            $products[$i] = Product::where('name', $request->{'shoe_item_'.$i})->first();
            $quantity[$i] = $request->{'quantity_'.$i};
        }
        Session::put('products', $products);
        Session::put('quantity', $quantity);
        Session::put('total_item', $total_item);
        return redirect()->route('checkout');
    }

    public function Psinglecheckout(Request $request){
        $total_item = $request->total_item;
        for ($i = 1; $i <= $request->total_item; $i++){
            $products[$i] = Product::where('name', $request->{'shoe_item_'.$i})->first();
            $quantity[$i] = $request->{'quantity_'.$i};
        }
        Session::put('products', $products);
        Session::put('quantity', $quantity);
        Session::put('total_item', $total_item);
        return redirect()->route('checkout');
    }


    public function payment(){
        return view('home.payment');
    }
}
