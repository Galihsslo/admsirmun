<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name'=>'Galih',
            'email'=>'galih@gmail.com',
            'alamat'=>'Lampung',
            'telpon'=>'08993253242',
            'password'=>bcrypt('galih')
        ]);
        $admin->assignRole('admin');

        $bendahara = User::create([
            'name'=>'Nidaul',
            'email'=>'nidaul@gmail.com',
            'alamat'=>'Purbalingga',
            'telpon'=>'0899334352',
            'password'=>bcrypt('nidaul')
        ]);
        $bendahara->assignRole('bendahara');

        $operator = User::create([
            'name'=>'Silvia',
            'email'=>'silvia@gmail.com',
            'alamat'=>'Purbalingga',
            'telpon'=>'08993253242',
            'password'=>bcrypt('silvia')
        ]);
        $operator->assignRole('operator');
    }
}
