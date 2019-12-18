<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'id', 'name', 'slug', 'description',
    ];
   
    protected $casts = [
        'created_at' => 'datetime', 'updated_at' => 'datetime', 
    ];


    /*****************  Relationships  *****************/

    public function users()//1 a m
    {
        return $this->hasMany('App\Models\User');
    }

    
    
}
