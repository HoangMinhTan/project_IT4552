<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Bill;
use App\Models\Detail_bill;

class billController extends Controller
{
    public function bill(){
        $user = Auth::user();
        $bills = Bill::all();
        return view('admin.bill.bill', ['user'=> $user, 'bills' => $bills]);
    }

    public function detail($id){
        $user = Auth::user();
        $details = Detail_bill::where('bill_id', $id)->get();
        return view('admin.bill.detail', ['id'=> $id, 'user' => $user, 'details' => $details]);
    }
}
