<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'id' => 1,
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'rol_id'=>1,
            'password' => Hash::make('password')
            ],
            [
            'id' => 2,
            'name' => 'Escuela',
            'email' => 'escuela@gmail.com',
            'email_verified_at' => now(),
            'rol_id'=>2,
            'password' => Hash::make('password')
            ],
            [
            'id' => 3,
            'name' => 'Docente',
            'email' => 'docente@gmail.com',
            'email_verified_at' => now(),
            'rol_id'=>3,
            'password' => Hash::make('password')
            ],
            [
            'id' => 4,
            'name' => 'Alumno',
            'email' => 'alumno@gmail.com',
            'email_verified_at' => now(),
            'rol_id'=>4,
            'password' => Hash::make('password')
            ],
            
        ]);
    }
}
