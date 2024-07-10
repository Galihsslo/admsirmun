<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //admin
        Permission ::create(['name'=>'tambah-user']);
        Permission ::create(['name'=>'ubah-user']);
        Permission ::create(['name'=>'hapus-user']);
        Permission ::create(['name'=>'lihat-user']);
        //bendahara
        Permission ::create(['name'=>'tambah-inventaris']);
        Permission ::create(['name'=>'ubah-inventaris']);
        Permission ::create(['name'=>'hapus-inventaris']);
        Permission ::create(['name'=>'lihat-inventaris']);
        //operator
        Permission ::create(['name'=>'tambah-kegiatan']);
        Permission ::create(['name'=>'ubah-kegiatan']);
        Permission ::create(['name'=>'hapus-kegiatan']);
        Permission ::create(['name'=>'lihat-kegiatan']);


        //role
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'bendahara']);
        Role::create(['name'=>'operator']);


        //admin
        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('tambah-user');
        $roleAdmin->givePermissionTo('ubah-user');
        $roleAdmin->givePermissionTo('hapus-user');
        $roleAdmin->givePermissionTo('lihat-user');

        //bendahara
        $roleAdmin = Role::findByName('bendahara');
        $roleAdmin->givePermissionTo('tambah-inventaris');
        $roleAdmin->givePermissionTo('ubah-inventaris');
        $roleAdmin->givePermissionTo('hapus-inventaris');
        $roleAdmin->givePermissionTo('lihat-inventaris');

        //operator
        $roleAdmin = Role::findByName('operator');
        $roleAdmin->givePermissionTo('tambah-kegiatan');
        $roleAdmin->givePermissionTo('ubah-kegiatan');
        $roleAdmin->givePermissionTo('hapus-kegiatan');
        $roleAdmin->givePermissionTo('lihat-kegiatan');
    }
}
