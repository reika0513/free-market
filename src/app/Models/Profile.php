<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'user_id' => 'required',
        'name' => 'required',
        'address' => 'required',
        'post' => 'required',
        'building' => 'required',
    );

    public function getProfile(){
        return 'ID'.$this->id . ':' . $this->profile;
    }
}
