<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Role;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Models\Role::class, function (Faker $faker) {
   
    return [
            'name' => $faker->name,
            'slug' => $faker->name,
            'description' => $faker->name,
       
    ];
});