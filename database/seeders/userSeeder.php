<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use Illuminate\support\facades\Hash;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
        'name'=>'sugan',
        'email'=>'sugan@gmail.com',
        'password'=>Hash::make('12345')
       ]);
    }
}
