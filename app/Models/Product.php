<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'desc', 'image', 'image_cover', 'details', 'price', 'category_id'];
    public $casts = [
        'details' => AsCollection::class
    ];


    public function category () {
        return $this->belongsTo(Category::class);
    }
}
