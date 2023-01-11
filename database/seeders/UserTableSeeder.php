<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            ['name' => 'dorian', 'email' => 'dorian.mayamba@gmail.com', 'password' => Hash::make('dodoetienne01'), 'role_id' =>1]
        );
    }
}
