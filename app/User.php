<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    const ADMIN_TYPE = 'admin';
    const ENTREPRENEUR_TYPE = 'entrepreneur';
    const INVESTOR_TYPE = 'investor';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'first_name',
        'last_name',
        'city',
        'country',
        'phone',
        'bio',
        'type',
        'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {
        return $this->type === self::ADMIN_TYPE;
    }

    public function isEntrepreneur()
    {
        return $this->type === self::ENTREPRENEUR_TYPE;
    }

    public function isInvestor()
    {
        return $this->type === self::INVESTOR_TYPE;
    }

    /**
     * [users description]
     * relationship many to many with Annonce model
     * @return [array] [description]
     */
     public function annoncesOne()
     {
         return $this->hasMany('App\Annonce');
     }

     /**
      * [users description]
      * relationship many to many with Annonce model
      * @return [array] [description]
      */
      public function annonces()
      {
          return $this->belongsToMany('App\Annonce')->withPivot(['investing', 'interest', 'saved']);
      }


}
