<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function dashboard(){
        $user = Auth::user();
        return view('admin.dashboard', ['user' => $user]);
    }

    public function profile(){
        $user = Auth::user();
        return view('admin.profile',['user'=> $user]);
    }

    public function test(){
        $user = Auth::user();
        return view('admin.table_list',['user'=>$user]);
    }

    public function account(){
        $user = Auth::user();
        $users = User::orderBy('role', 'asc')->get();
        return view('admin.account.account',['user'=> $user, 'users'=>$users]);
    }

    public function add_account(){
        $user = Auth::user();
        return view('admin.account.add_account',['user'=>$user]);
    }

    public function Padd_account(Request $request){
        \DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'phone' => $request->phone,
            'address' =>$request->address,
            'password' => bcrypt($request->password),
            'created_at' => Carbon::now()
        ]);
        return redirect('account');
    }

    public function edit($id){
        $user = Auth::user();
        $edit = User::find($id);
        if ($user->role < $edit->role)
            return view('admin.account.edit', ['user'=>$user, 'edit'=>$edit]);
        else
            return redirect('account');
    }

    public function Pedit(Request $request, $id){
        $edit = User::find($id);
        $edit->name = $request->name;
        $edit->email = $request->email;
        $edit->phone = $request->phone;
        $edit->address = $request->address;
        $edit->role = $request->role;
        $edit->save();
        return redirect('account');
    }

    public function delete($id){
        $user = Auth::user();
        $edit = User::find($id);
        if ($user->role < $edit->role)
            $edit->delete();
        return redirect('account');
    }

    public function update_infor(Request $request){
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();
        return redirect('profile')->with('thongbao', 'Cập nhật thông tin thành công');
    }

    
}
