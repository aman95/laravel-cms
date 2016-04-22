<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'name' => 'Aman',
                'email' => 'aman@gmail.com',
                'password' => bcrypt('secret')
            ],
            [
                'name' => 'Nitin',
                'email' => 'nitin@gmail.com',
                'password' => bcrypt('qwerty')
            ]

        ]);
    }
}
