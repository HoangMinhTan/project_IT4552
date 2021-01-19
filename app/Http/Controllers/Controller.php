<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product;
use Illuminate\Http\Request;

use Carbon\Carbon;
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
            $total = Session::get('total');
            return view('home.checkout',['products' => $products, 'quantity' => $quantity, 'total_item' => $total_item, 'total' =>$total]);
        }
        else return redirect('home');
    }

    public function Pcheckout(Request $request){
        $total =0 ;
        $total_item = $request->total_item;
        for ($i = 1; $i <= $request->total_item; $i++){
            $products[$i] = Product::where('name', $request->{'shoe_item_'.$i})->first();
            $quantity[$i] = $request->{'quantity_'.$i};
            $total += $products[$i]->out_price*$quantity[$i];
        }
        Session::put('products', $products);
        Session::put('quantity', $quantity);
        Session::put('total_item', $total_item);
        Session::put('total', $total);
        return redirect()->route('checkout');
    }

    public function Psinglecheckout(Request $request){
        $total =0 ;
        $total_item = $request->total_item;
        for ($i = 1; $i <= $request->total_item; $i++){
            $products[$i] = Product::where('name', $request->{'shoe_item_'.$i})->first();
            $quantity[$i] = $request->{'quantity_'.$i};
            $total += $products[$i]->out_price*$quantity[$i];
        }
        Session::put('products', $products);
        Session::put('quantity', $quantity);
        Session::put('total_item', $total_item);
        Session::put('total', $total);
        return redirect()->route('checkout');
    }

    public function Ppayment(Request $request){
        $user = \DB::table('users')->where('email', $request->email)->first();
        if ($user == null){
            \DB::table('users')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'role' => 2,
                'phone' => $request->phone,
                'address' =>$request->address,
                'password' => bcrypt(-1),
                'created_at' => Carbon::now()
            ]);
            $user = \DB::table('users')->where('email', $request->email)->first();

            echo $user->id;
        }


        \DB::table('bill')->insert([
            'user_id' => $user->id,
            'total' => $request->total,
            'created_at' => Carbon::now()
        ]);

        $bill = \DB::table('bill')->where('user_id', $user->id)->orderByDesc('created_at')->first();
        for ( $i = 0 ; $i<$request->len; $i++)
        {
            $product = \DB::table('product')->where('name',$request->{'product'.$i})->first();
            echo $product->id;
            \DB::table('detail_bill')->insert([
                'bill_id' => $bill->id,
                'product_id' => $product->id,
                'quantity' => $request->{'quantity'.$i},
                'price' => $product->out_price,
                'total' => $request->{'quantity'.$i}*($product->out_price),
                'created_at' => $bill->created_at
            ]);
        }


        return redirect('/');


        
    }


    public function payment(){
        return view('home.payment');
    }
}
