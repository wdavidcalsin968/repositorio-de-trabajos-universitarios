<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  \App\Models\User;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    


    public function run(): void
    {

        $this->call(RoleSeeder::class);
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Administrador');


        User::create([
            'name' => 'Estudiante',
            'email' => 'estudiante@example.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Estudiante');


        User::create([
            'name' => 'Docente',
            'email' => 'docente@example.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Docente');


        User::create([
            'name' => 'Invitado',
            'email' => 'invitado@example.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Invitado');





        




    }
}
