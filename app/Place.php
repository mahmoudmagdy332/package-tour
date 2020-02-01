<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public $table="places";
    public function packages(){
        return $this->hasMany('App\Package');
    }
}
