<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class phoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i < 6; $i++){
        DB::table('phones')->insert([
            "phone_number"=>$faker->phoneNumber,
            "users_id"=>$i + 1,
        ]);
        }
    }
}
