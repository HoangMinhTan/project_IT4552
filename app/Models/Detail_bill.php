<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bill;
use Illuminate\Support\Facades\DB;

class Detail_bill extends Model
{
    use HasFactory;
    protected $table = 'detail_bill';

    public function getbill($id){
        $details = DB::table('detail_bill')->where('bill_id', $id)->get();
        return $details;
    }

    public function bill()
    {
        return $this->belongsTo(Bill::class);
    }

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
