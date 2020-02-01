<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $primaryKey = 'package_id';
    public $table="packages";
    public function place(){
        return $this->belongsTo('App\Order');
    }
}
