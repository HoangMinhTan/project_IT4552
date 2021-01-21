<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product;
use App\Models\Rate;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Session;
use App\Models\Category;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home(){
        return view('home.home');
    }

    public function shop(){
        $products = Product::paginate(9);
        $category = Category::all();
        foreach ($products as $product){
            $count = DB::table('rate')->where('product_id', $product->id)->count();
            $product->count = $count;
        }
        return view('home.shop', ['products'=> $products, 'categories'=>$category]);
    }

    public function about(){
        return view('home.about');
    }

    public function contact(){
        return view('home.contact');
    }

    public function single($id){
        $single = Product::find($id);
        $review = Rate::where('product_id', $id)->get();
        $count = DB::table('rate')->where('product_id', $single->id)->count();
        return view('home.single', ['single' => $single, 'count' => $count, 'reviews' => $review]);
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
            if ($product->quantity < $request->{'quantity'.$i}) return redirect('shop');
            \DB::table('detail_bill')->insert([
                'bill_id' => $bill->id,
                'product_id' => $product->id,
                'quantity' => $request->{'quantity'.$i},
                'price' => $product->out_price,
                'total' => $request->{'quantity'.$i}*($product->out_price),
                'created_at' => $bill->created_at
            ]);
            echo ($product->quantity - $request->{'quantity'.$i});
            \DB::table('product')->where('name',$request->{'product'.$i})->update(['quantity'=> ($product->quantity - $request->{'quantity'.$i})]);
        }


        return redirect('shop');


        
    }


    public function payment(){
        return view('home.payment');
    }


    public function rate($id, $rate){
        $user = Auth::user();
        $product = DB::table('product')->where('id', $id)->first();
        $bought = DB::table('bill')
                        ->join('detail_bill', 'detail_bill.bill_id', '=', 'bill.id')
                        ->where('bill.user_id', $user->id)
                        ->where('detail_bill.product_id', $id)
                        ->first();
        if ($bought != null)
        {
            $rating = DB::table('rate')->where('user_id', $user->id)->where('product_id', $product->id)->first();
            if ($rating == null)
            {
                \DB::table('rate')->insert([
                    'user_id'=>$user->id,
                    'product_id'=>$product->id,
                    'rate'=>$rate
                ]);
            }
            else
            {
                DB::table('rate')->where('user_id', $user->id)->where('product_id', $product->id)->update(['rate' => $rate]);
            }
        }
        //Tinh toan rate
        $rate =0;
        $counts = DB::table('rate')->where('product_id', $id)->get();
        foreach ($counts as $count){
            $rate+=$count->rate;
        }
        if (count($counts)!=0)
            $rate = $rate/count($counts);
        else $rate = 0;

        //Luu vao DB
        DB::table('product')->where('id', $id)->update(['rate' => $rate]);
        return redirect()->back();
    }

    public function review(Request $request){
        $user = Auth::user();
        $review = Rate::where('user_id', $user->id)->where('product_id', $request->product_id)->first();
        if ($review == null){
            
        }
        else{
            $review->review = $request->Message;
            $review->save();
        }
        return redirect()->back();
    }

    public function search_rate($rate){
        $rate = $rate/10;
        $products = DB::table('product')->where('rate','>=', $rate)->paginate(9);
        $category = Category::all();
        foreach ($products as $product){
            $count = DB::table('rate')->where('product_id', $product->id)->count();
            $product->count = $count;
        }
        return view('home.shop', ['products'=> $products, 'categories'=>$category]);
    }

    public function search(Request $request){
        $products = DB::table('product')->where('name', 'like', '%'.$request->search.'%')->get();
        if ($request->range != null){
            
            $start1 = 1;
            $end2 = strlen($request->range) -1 ;
            for ($i =0; $i<strlen($request->range); $i++){
                if ($request->range[$i] == '$') $start2 = $i+1;
                if ($request->range[$i] == '-') $end1 = $i-2;
            }
    
            $min = (int)substr($request->range, $start1, $end1);
            $max = (int)substr($request->range, $start2, $end2);

            $products = DB::table('product')->where('name', 'like', '%'.$request->search.'%')
                                            ->where('out_price', '>=', $min)
                                            ->where('out_price', '<=', $max)
                                            ->paginate(9);
            echo $products;
        }
        else{
            $products = DB::table('product')->where('name', 'like', '%'.$request->search.'%')->paginate(9);
        }
        
        $category = Category::all();
        foreach ($products as $product){
            $count = DB::table('rate')->where('product_id', $product->id)->count();
            $product->count = $count;
        }
        return view('home.shop', ['products'=> $products, 'categories'=>$category]);
    }
}
