<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Manufacturer extends Model
{
    protected $table = 'manufacturer';
    use HasFactory;

    public function product()
    {
        return $this->hasMany(Product::class, 'manufacturer_id', 'id');
    }
}
