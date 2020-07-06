<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['description'];


    /**
     * [users description]
     * relationship many to many with Pricing model
     * @return [array] [description]
     */
     public function pricings()
     {
         return $this->belongsToMany('App\Pricing');
     }
}
