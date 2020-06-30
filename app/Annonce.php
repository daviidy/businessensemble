<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['title',
                           'user_id',
                           'website',
                           'country',
                           'phone',
                           'stage',
                           'investor_role',
                           'previous_raising_amount',
                           'raising_amount',
                           'min_investor_amount',
                           'short_description',
                           'company_description',
                           'market_description',
                           'proof_description',
                           'goals_description',
                           'team_description',
                           'logo',
                           'video',
                           'banner',
                           'category_id',
                           'status',
                         ];




       /**
        * [users description]
        * relationship one to many with User model
        * @return [array] [description]
        */
        public function user()
        {
            return $this->belongsTo('App\User');
        }

        /**
         * [users description]
         * relationship many to many with User model
         * @return [array] [description]
         */
         public function users()
         {
             return $this->belongsToMany('App\User')->withPivot(['investing', 'interest', 'saved']);
         }

         /**
          * [users description]
          * relationship one to many with Multimedia model
          * @return [array] [description]
          */
          public function multimedias()
          {
              return $this->hasMany('App\Multimedia');
          }


          /**
           * [users description]
           * relationship one to many with Category model
           * @return [array] [description]
           */
           public function category()
           {
               return $this->belongsTo('App\Category');
           }

           /**
            * [users description]
            * relationship one to many with Team model
            * @return [array] [description]
            */
            public function teams()
            {
                return $this->hasMany('App\Team');
            }
}
