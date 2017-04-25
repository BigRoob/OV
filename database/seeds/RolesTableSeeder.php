<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'Admin'],
            ['name' => 'Local Admin'],
            ['name' => 'Dentist'],
            ['name' => 'Professor'],
            ['name' => 'Investor'],
            ['name' => 'Consultant'],
            ['name' => 'Receptionist'],
        ]);
    }
}
