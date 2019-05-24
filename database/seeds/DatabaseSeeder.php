<?php

use Illuminate\Database\Seeder;
use

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
		User::create([
            'email' =>'chiennup@gmail.com',
            'password' => bcrypt('123'),
            'birthday' => '1992-02-04',
            'perrmissions' => 'admin',
            'first_name' => 'Chien nup',
            'last_name' => 'Chien nup',
            'address' => 'Chien nup',
            'phone' => 123456789,
            'sdt' =>987654321,
            'images' =>'1',
            'type' => '1',
            'status' => '1',

        ]);
        User::create([
            'email' =>'chienga@gmail.com',
            'password' => bcrypt('123'),
            'birthday' => '1992-02-04',
            'perrmissions' => 'admin',
            'first_name' => 'Chien ga',
            'last_name' => 'Chien qua ga',
            'address' => 'Chien ga',
            'phone' => 123456789,
            'sdt' =>987654321,
            'images' =>'chien ga',
            'type' => 'Chien nup',
            'status' => 'Chien nup',

        ]);
    }
}
