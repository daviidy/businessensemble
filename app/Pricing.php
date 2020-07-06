<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['name', 'price'];


    /**
     * [users description]
     * relationship one to many with Purchase model
     * @return [array] [description]
     */
     public function purchases()
     {
         return $this->hasMany('App\Purchase');
     }

     /**
      * [users description]
      * relationship many to many with Characteristic model
      * @return [array] [description]
      */
      public function characteristics()
      {
          return $this->belongsToMany('App\Characteristic');
      }
}
