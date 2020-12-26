<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Manufacturer;

class manufacturerController extends Controller
{
    public function manufacturer(){
        $user = Auth:: user();
        $manufacturer = Manufacturer::paginate(15);
        return view('admin.manufacturer.manufacturer', ['user'=>$user, 'manufacturers'=>$manufacturer]);
    }

    public function add(){
        $user = Auth::user();
        return view('admin.manufacturer.add', ['user' =>$user]);
    }

    public function Padd(Request $request){
        \DB::table('manufacturer')->insert([
            'manufacturer'=> $request->manufacturer
        ]);
        return redirect('manufacturer');
    }

    public function edit($id){
        $user = Auth::user();
        $edit = Manufacturer::find($id);
        return view('admin.manufacturer.edit', ['user'=>$user, 'edit'=>$edit]);
    }

    public function Pedit(Request $request,$id){
        $edit = Manufacturer::find($id);
        $edit->manufacturer = $request->manufacturer;
        $edit->save();
        return redirect('manufacturer');
    }

    public function delete($id){
        $edit = Manufacturer::find($id);
        $edit->delete();
        return redirect('manufacturer');
    }
}