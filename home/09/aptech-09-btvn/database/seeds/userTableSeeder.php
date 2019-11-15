<?php

use Illuminate\Database\Seeder;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker  = Faker\Factory::create();
        for($i = 0;$i < 20;$i++){
            DB::table('users')->insert([
                'name'=>$faker->name($gender= null),
                'email'=>$faker->safeEmail,
                'password'=>bcrypt('secret'),
            ]);
        }
    }
}
