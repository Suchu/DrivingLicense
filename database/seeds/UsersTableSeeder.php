<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'suchu',
            'email' => 'sulochana@gmail.com',
            'password' => bcrypt('suchu1992'),
        ]);
    }
    }

