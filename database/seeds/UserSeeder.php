<?php

use Illuminate\Database\Seeder;

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
            'name' => 'admin',
            'role' => 0,
            'email' => 'admin@gmail.com',
            'jabatan' => 'Admin',
            'password' => Hash::make('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Staff Administrasi',
            'role' => 1,
            'email' => 'administrasi@gmail.com',
            'jabatan' => 'Staff Administrasi',
            'password' => Hash::make('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Sekretaris Camat',
            'role' => 2,
            'email' => 'sekcam@gmail.com',
            'jabatan' => 'Sekretaris Camat',
            'password' => Hash::make('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Kepala Camat',
            'role' => 3,
            'email' => 'kepcam@gmail.com',
            'jabatan' => 'Kepala Camat',
            'password' => Hash::make('secret'),
        ]);
    }
}
