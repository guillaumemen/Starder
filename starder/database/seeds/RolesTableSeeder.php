<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Light Side */
        Role::create(['name' => 'C3PO']);
        Role::create(['name' => 'Padme_Amidala']);
        Role::create(['name' => 'Yoda']);

        /* Dark Side */
        Role::create(['name' => 'Kaylo_Ren']);
        Role::create(['name' => 'Dark_Vador']);
        Role::create(['name' => 'Palpatine']);
    }
}
