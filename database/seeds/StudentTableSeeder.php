<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,10) as $index){

            DB::table('students')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
            ]);

        }
        
    }

    /* public function run()
    {
            DB::table('students')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
            ]);
    } */
}
