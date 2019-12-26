<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\User;
use App\Models\Role;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Models\User::class, function (Faker $faker) {
   
    $role = Role::orderBy('id', 'ASC')->pluck('id')->all(); // se trae todo de la base de datos tabla People la ordena

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'status'=>$faker->randomElement($array = array ('1','0')),
        'role'=>$faker->randomElement($role),

    ];

});