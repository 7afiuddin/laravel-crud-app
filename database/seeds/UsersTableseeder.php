<?php

use Illuminate\Database\Seeder;

class UsersTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Shafi',
            'emial' => '7afiuddin@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
