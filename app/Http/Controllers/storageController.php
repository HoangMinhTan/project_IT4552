<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Product;
use App\Models\Category;
use App\Models\Manufacturer;

class storageController extends Controller
{
    public function storage(){
        $user = Auth:: user();
        $product = Product::paginate(15);
        return view('admin.storage.storage', ['user'=>$user, 'products'=>$product]);
    }

    public function add(){
        $user = Auth::user();
        $category = Category::all();
        $manufacturers = Manufacturer::all();
        return view('admin.storage.add', ['user' =>$user, 'categories'=>$category, 'manufacturers'=>$manufacturers]);
    }

    public function Padd(Request $request){
        \DB::table('product')->insert([
            'name'=> $request->name,
            'quantity' => 0,
            'category_id'=> $request->category_id,
            'manufacturer_id' => $request->manufacturer_id,
            'in_price' => 0,
            'out_price'=>$request->out_price,
            'note'=> $request->note
        ]);
        return redirect('storage');
    }

    public function edit($id){
        $user = Auth::user();
        $edit = Product::find($id);
        $category = Category::all();
        $manufacturers = Manufacturer::all();
        return view('admin.storage.edit', ['user'=>$user, 'edit'=>$edit,'categories'=>$category, 'manufacturers'=>$manufacturers]);
    }

    public function Pedit(Request $request,$id){
        $edit = Product::find($id);
        $edit->name = $request->name;
        $edit->category_id = $request->category_id;
        $edit->manufacturer_id = $request->manufacturer_id;
        $edit->out_price = $request->out_price;
        $edit->note = $request->note;
        $edit->save();
        return redirect('storage');
    }

    public function delete($id){
        $edit = Product::find($id);
        $edit->delete();
        return redirect('storage');
    }
}
