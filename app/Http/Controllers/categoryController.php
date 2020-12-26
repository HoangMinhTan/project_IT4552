<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Category;

class categoryController extends Controller
{
    public function category(){
        $user = Auth:: user();
        $category = Category::paginate(15);
        return view('admin.category.category', ['user'=>$user, 'categories'=>$category]);
    }

    public function add(){
        $user = Auth::user();
        return view('admin.category.add', ['user' =>$user]);
    }

    public function Padd(Request $request){
        \DB::table('category')->insert([
            'category'=> $request->category
        ]);
        return redirect('category');
    }

    public function edit($id){
        $user = Auth::user();
        $edit = Category::find($id);
        return view('admin.category.edit', ['user'=>$user, 'edit'=>$edit]);
    }

    public function Pedit(Request $request,$id){
        $edit = Category::find($id);
        $edit->category = $request->category;
        $edit->save();
        return redirect('category');
    }

    public function delete($id){
        $edit = Category::find($id);
        $edit->delete();
        return redirect('category');
    }
}
