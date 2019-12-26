<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name[1]= 'Admin';
        $slug[1]= 'admin';
        $description[1]= 'Admininstrator Role';     
 
        $name[2]= 'Study';
        $slug[2]= 'study';
        $description[2]= 'Study Role';     
 
        $name[3]= 'Sub-study';
        $slug[3]= 'sub-study';
        $description[3]= 'Sub-Study Role';

        $name[4]= 'Manager';
        $slug[4]= 'manager';
        $description[4]= 'Manager Role';

        $name[5]= 'Accounts';
        $slug[5]= 'accounts';
        $description[5]= 'Accounts Role';

        $name[6]= 'Monitor';
        $slug[6]= 'monitor';
        $description[6]= 'Monitor Role';

        $name[7]= 'Model';
        $slug[7]= 'model';
        $description[7]= 'Model Role';

        $name[8]= 'Design';
        $slug[8]= 'design';
        $description[8]= 'Design Role';

        $name[9]= 'Shop';
        $slug[9]= 'shop';
        $description[9]= 'Shop Role';

                 for ($i=1;$i<=9; $i++){
                     DB::table('roles')->insert([

                        'id' => $i,
                        'name' => $name[$i],
                        'slug' => $slug[$i],
                        'description'=> $description[$i],

                      ]);

                  }        
    }
}
