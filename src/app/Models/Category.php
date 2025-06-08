<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $guarded = array('id');
    public static $rules = array(
        'myitem_id' => 'required',
        'category' => 'required',
    );

    public function getCategory(){
        return 'ID'.$this->id . ':' . $this->title;
    }

    public function products()
    {
        return $this->belongsToMany(ItemCategory::class);
    }
}