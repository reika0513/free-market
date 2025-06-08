<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    use HasFactory;
    protected $fillable=[
        'user_id',
        'name',
        'image',
        'address',
        'post',
        'building',
    ];

    public function getProfile(){
        return 'ID'.$this->id . ':' . $this->profile;
    }

    public function author(){ 
        return $this->belongsTo(User::class);
    }
}
