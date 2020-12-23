<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Detail_bill;
use App\Models\User;

class Bill extends Model
{
    use HasFactory;
    protected $table = 'bill';

    public function detail(){
        return $this->hasMany(Detail_bill::class, 'bill_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
