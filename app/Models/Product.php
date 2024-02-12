<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $gaurded = ['id', 'created_at', 'updated_at'];
    public $casts = [
        'details' => AsCollection::class
    ];


    public function category () {
        return $this->belongsTo(Category::class);
    }
}
