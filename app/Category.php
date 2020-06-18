<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['name',
                           'icon_color',
                           'icon',

                         ];




       /**
        * [users description]
        * relationship one to many with Annonce model
        * @return [array] [description]
        */
        public function annonces()
        {
            return $this->hasMany('App\Annonce');
        }
}
