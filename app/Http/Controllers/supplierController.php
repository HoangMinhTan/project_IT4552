<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Supplier;

class supplierController extends Controller
{
    public function supplier(){
        $user = Auth:: user();
        $supplier = Supplier::paginate(15);
        return view('admin.supplier.supplier', ['user'=>$user, 'suppliers'=>$supplier]);
    }

    public function add(){
        $user = Auth::user();
        return view('admin.supplier.add', ['user' =>$user]);
    }

    public function Padd(Request $request){
        \DB::table('supplier')->insert([
            'supplier'=> $request->supplier,
            'phone'=>$request->phone,
            'address'=>$request->address
        ]);
        return redirect('supplier');
    }

    public function edit($id){
        $user = Auth::user();
        $edit = Supplier::find($id);
        return view('admin.supplier.edit', ['user'=>$user, 'edit'=>$edit]);
    }

    public function Pedit(Request $request,$id){
        $edit = Supplier::find($id);
        $edit->supplier = $request->supplier;
        $edit->phone = $request->phone;
        $edit->address = $request->address;
        $edit->save();
        return redirect('supplier');
    }

    public function delete($id){
        $edit = Supplier::find($id);
        $edit->delete();
        return redirect('supplier');
    }
}
