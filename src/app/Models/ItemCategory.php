<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemCategory extends Model
{
    use HasFactory;
    protected $fillable=[
        'categories_id',
        'myitem_id',
        'comment'
    ];

    public function category()
{
return $this->belongsTo(Category::class);
}
}
