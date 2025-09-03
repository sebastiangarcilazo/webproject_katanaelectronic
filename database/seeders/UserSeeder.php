<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
DB::table('users')->insert([
    [
        'id'        => 1,
        'name'      => 'admin',
        'email'     => 'admin@gmail.com',
        'password'  => Hash::make('admin'),
        'role'      => 'admin',
        'created_at'=> now(),
        'updated_at'=> now()
    ],
    [
        'id'        => 2,
        'name'      => 'juan',
        'email'     => 'juan@gmail.com',
        'password'  => Hash::make('123'),
        'role'      => 'user',
        'created_at'=> now(),
        'updated_at'=> now()
    ],
    [
        'id'        => 3,
        'name'      => 'maria',
        'email'     => 'maria@gmail.com',  
        'password'  => Hash::make('123'),
        'role'      => 'user',
        'created_at'=> now(),
        'updated_at'=> now()
    ],
    [
        'id'        => 4,
        'name'      => 'carlos',
        'email'     => 'carlos@gmail.com',
        'password'  => Hash::make('123'),
        'role'      => 'user',
        'created_at'=> now(),
        'updated_at'=> now()
    ],
]);
    }
}
