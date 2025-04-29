<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Myitem extends Model
{
    use HasFactory;
    protected $fillable=[
        'image',
        'name',
        'brand_name',
        'quality',
        'content',
        'price',
    ];
}
