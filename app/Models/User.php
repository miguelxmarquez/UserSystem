<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;



class User extends Authenticatable
{
    use Notifiable;
  
    protected $fillable = [
        'id', 'name', 'email', 'password', 'status', 'role'
    ];
   
    protected $hidden = [
        array('password'), 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime', 'status' => 'boolean',
    ];
    


    
    /*****************  Relationships  *****************/
    
    public function roles()//m a m
    {
        return $this->belongsToMany('App\Models\Role');
    }

}
