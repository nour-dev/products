<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'video_cover',
        'avatar',
        'reviews', // list : image , name , comment
        'gallery', // list : images
        'description',
    ];

    public $casts = [
        'gallery' => AsCollection::class,
        'reviews' => AsCollection::class,
    ];
}
