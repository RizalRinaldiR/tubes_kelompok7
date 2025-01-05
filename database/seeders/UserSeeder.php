<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
           'name' => 'Jayusman',
                'email' => 'admin@jayusman.com',
                'password' => Hash::make('password'),
                'role' => 'owner',
                'branch_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
        
        ])->assignRole('owner');
        
        //branch 1
        User::factory()->create([
            'name' => 'Manager Jakarta',
            'email' => 'manager.jakarta@jayusman.com',
            'password' => Hash::make('password'),
            'role' => 'manager',
            'branch_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('manager');

         User::factory()->create([
            'name' => 'Supervisor Jakarta',
            'email' => 'supervisor.jakarta@jayusman.com',
            'password' => Hash::make('password'),
            'role' => 'supervisor',
            'branch_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('supervisor');

         User::factory()->create([
            'name' => 'Gudang Jakarta',
            'email' => 'gudang.jakarta@jayusman.com',
            'password' => Hash::make('password'),
            'role' => 'pegawai gudang',
            'branch_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('pegawai-gudang');

         User::factory()->create([
            'name' => 'Kasir Jakarta',
            'email' => 'kasir.jakarta@jayusman.com',
            'password' => Hash::make('password'),
            'role' => 'kasir',
            'branch_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('kasir');


         //branch 2
        User::factory()->create([
            'name' => 'Manager Surabaya',
            'email' => 'manager.surabaya@jayusman.com',
            'password' => Hash::make('password'),
            'role' => 'manager',
            'branch_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('manager');

         User::factory()->create([
            'name' => 'Supervisor Surabaya',
            'email' => 'supervisor.surabaya@jayusman.com',
            'password' => Hash::make('password'),
            'role' => 'supervisor',
            'branch_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('supervisor');

         User::factory()->create([
            'name' => 'Gudang Surabaya',
            'email' => 'gudang.surabaya@jayusman.com',
            'password' => Hash::make('password'),
            'role' => 'pegawai gudang',
            'branch_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('pegawai-gudang');

         User::factory()->create([
            'name' => 'Kasir Surabaya',
            'email' => 'kasir.surabaya@jayusman.com',
            'password' => Hash::make('password'),
            'role' => 'kasir',
            'branch_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('kasir');


          //branch 3
        User::factory()->create([
            'name' => 'Manager Bandung',
            'email' => 'manager.bandung@jayusman.com',
            'password' => Hash::make('password'),
            'role' => 'manager',
            'branch_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('manager');

         User::factory()->create([
            'name' => 'Supervisor Bandung',
            'email' => 'supervisor.bandung@jayusman.com',
            'password' => Hash::make('password'),
            'role' => 'supervisor',
            'branch_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('supervisor');

         User::factory()->create([
            'name' => 'Gudang Bandung',
            'email' => 'gudang.bandung@jayusman.com',
            'password' => Hash::make('password'),
            'role' => 'pegawai gudang',
            'branch_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('pegawai-gudang');

         User::factory()->create([
            'name' => 'Kasir Bandung',
            'email' => 'kasir.bandung@jayusman.com',
            'password' => Hash::make('password'),
            'role' => 'kasir',
            'branch_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('kasir');


          //branch 4
        User::factory()->create([
            'name' => 'Manager Medan',
            'email' => 'manager.medan@jayusman.com',
            'password' => Hash::make('password'),
            'role' => 'manager',
            'branch_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('manager');

         User::factory()->create([
            'name' => 'Supervisor Medan',
            'email' => 'supervisor.medan@jayusman.com',
            'password' => Hash::make('password'),
            'role' => 'supervisor',
            'branch_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('supervisor');

         User::factory()->create([
            'name' => 'Gudang Medan',
            'email' => 'gudang.medan@jayusman.com',
            'password' => Hash::make('password'),
            'role' => 'pegawai gudang',
            'branch_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('pegawai-gudang');

         User::factory()->create([
            'name' => 'Kasir Medan',
            'email' => 'kasir.medan@jayusman.com',
            'password' => Hash::make('password'),
            'role' => 'kasir',
            'branch_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('kasir');


          //branch 5
        User::factory()->create([
            'name' => 'Manager Makassar',
            'email' => 'manager.makassar@jayusman.com',
            'password' => Hash::make('password'),
            'role' => 'manager',
            'branch_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('manager');

         User::factory()->create([
            'name' => 'Supervisor Makassar',
            'email' => 'supervisor.makassar@jayusman.com',
            'password' => Hash::make('password'),
            'role' => 'supervisor',
            'branch_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('supervisor');

         User::factory()->create([
            'name' => 'Gudang Makassar',
            'email' => 'gudang.makassar@jayusman.com',
            'password' => Hash::make('password'),
            'role' => 'pegawai gudang',
            'branch_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('pegawai-gudang');

         User::factory()->create([
            'name' => 'Kasir Makassar',
            'email' => 'kasir.makassar@jayusman.com',
            'password' => Hash::make('password'),
            'role' => 'kasir',
            'branch_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('kasir');
    }
}
