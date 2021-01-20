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
            'name' => 'Operator',
            'role' => 1,
            'email' => 'operator@gmail.com',
            'jabatan' => 'Operator',
            'password' => Hash::make('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Kasi',
            'role' => 2,
            'email' => 'kasi@gmail.com',
            'jabatan' => 'Kasi',
            'password' => Hash::make('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Sekretaris Lurah',
            'role' => 3,
            'email' => 'seklur@gmail.com',
            'jabatan' => 'Sekretaris Lurah',
            'password' => Hash::make('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Lurah',
            'role' => 4,
            'email' => 'lurah@gmail.com',
            'jabatan' => 'Lurah',
            'password' => Hash::make('secret'),
        ]);
    }
}
