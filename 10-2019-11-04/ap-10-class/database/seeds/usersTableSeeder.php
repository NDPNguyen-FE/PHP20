<?php

use Illuminate\Database\Eloquent\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i < 6;$i++){
            DB::table('users')->insert([
                'name'=>$faker->name($gender= null),
                
               
            ]);
        }

    }

}
