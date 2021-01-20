<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Rate extends Model
{
    use HasFactory;
    protected $table='rate';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
