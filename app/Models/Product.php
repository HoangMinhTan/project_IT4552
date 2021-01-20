<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Detail_bill;
use App\Models\Manufacturer;
use App\Models\Import;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function detail()
    {
        return $this->belongsTo(Detail_bill::class);
    }

    public function import()
    {
        return $this->hasMany(Import::class, 'product_id', 'id');
    }

}
