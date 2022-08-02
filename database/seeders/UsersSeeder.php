<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Kevin',
            'role' => 'admin',
            'email' => 'kevinsuryaperdana@gmail.com', 
            'password' => bcrypt('211096')
        ]);
        DB::table('users')->insert([
            'name' => 'Fenny',
            'role' => 'admin',
            'email' => 'fennyresav18@gmail.com', 
            'password' => bcrypt('fenny18')
        ]);
        DB::table('users')->insert([
            'id_sales' => 1,
            'name' => 'Edi',
            'role' => 'sales',
            'email' => 'edi123@gmail.com', 
            'password' => bcrypt('adminedi')
        ]);
        DB::table('users')->insert([
            'name' => 'Ilyas',
            'role' => 'sales',
            'id_sales' => 2,
            'email' => 'ilyas456@gmail.com', 
            'password' => bcrypt('adminilyas')
        ]);
        DB::table('users')->insert([
            'name' => 'Rochman',
            'role' => 'sales',
            'id_sales' => 3,
            'email' => 'rochman789@gmail.com', 
            'password' => bcrypt('adminrochman')
        ]);
        DB::table('users')->insert([
            'name' => 'Dwiono',
            'role' => 'sales',
            'id_sales' => 4,
            'email' => 'gdwiono@gmail.com', 
            'password' => bcrypt('250471')
        ]);
    }
}
