<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'supplier';

    public function product()
    {
        return $this->hasMany(Product::class, 'supplier_id', 'id');
    }
}
