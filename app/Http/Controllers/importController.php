<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Product;
use Auth;
use Illuminate\Support\Facades\DB;

class importController extends Controller
{
    public function import(){
        $user = Auth::user();
        return view('admin.import.import', ['user'=>$user]);
    }

    public function add(){
        $user = Auth::user();
        $suppliers = Supplier::all();
        $products = Product::all();
        return view('admin.import.add', ['user'=>$user, 'suppliers' => $suppliers, 'products' => $products]);
    }

    public function Padd(Request $request){
        DB::table('import')->insert([
            'supplier_id' => $request->supplier_id,
            'product_id' =>$request->product_id,
            'quantity' => $request->quantity,
            'in_price' => $request->in_price
        ]);
        $product = Product::find($request->product_id);
        $product->quantity += $request->quantity;
        $product->save();
        return redirect('import');
    }
}
