<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function admin(){
        return $this->belongsTo('App\Admin');
    }
    public function inventor(){
        return $this->hasOne('App\Inventor');
    }
    public function proposal(){
        return $this->hasOne('App\Inventor');
    }
    public function kuesinventor(){
        return $this->hasOne('App\Inventor');
    }
}
