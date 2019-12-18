<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

// use Caffeinated\Shinobi\Concerns\HasRolesAndPermissions;
// use Cviebrock\EloquentSluggable\Sluggable;

class User extends Authenticatable
{
  
    protected $fillable = [
        'id', 'name', 'email', 'password', 'status', 'type'
    ];
   
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime', 'status' => 'boolean',
    ];
    



    /*****************  Relationships  *****************/
    
    // public function company(){
    //     return $this->hasOne('App\Models\Company');
    // }

    public function roles()//1 a m
    {
        return $this->hasMany('App\Models\Role');
    }

}
