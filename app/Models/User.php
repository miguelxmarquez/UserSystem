<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Caffeinated\Shinobi\Concerns\HasRolesAndPermissions;
// use Cviebrock\EloquentSluggable\Sluggable;

class User extends Model
{
    // use Notifiable;
    // use HasRolesAndPermissions;
    // use Sluggable;

    // public function sluggable(){// el slug para url amigables tienen vista al usuario visitante todos los slug
    //     return [
    //         'slug' => [
    //             'source' => 'name'
    //         ]
    //     ];
    // }



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

}
