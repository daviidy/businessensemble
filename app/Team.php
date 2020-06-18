<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['name',
                           'url',
                           'image',
                           'bio',

                         ];

       /**
        * [users description]
        * relationship one to many with Annonce model
        * @return [array] [description]
        */
        public function annonce()
        {
            return $this->belongsTo('App\Annonce');
        }
}
