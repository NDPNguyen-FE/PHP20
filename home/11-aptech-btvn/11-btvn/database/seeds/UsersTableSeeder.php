<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i =  0; $i  < 20;$i++){
            DB::table('users')->insert([
                'name' =>$faker->name($gender = null),
                'gmail'=>$faker->safeEmail,
                'password'=>bcrypt('123456')

            ]);
        }
    }
}
