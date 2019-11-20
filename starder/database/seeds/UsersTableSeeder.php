<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 15)->create()->each(function($user){
            $user->assignRole('C3PO');
        });
        factory(App\User::class, 15)->create()->each(function($user){
            $user->assignRole('Padme_Amidala');
        });
        factory(App\User::class, 15)->create()->each(function($user){
            $user->assignRole('Yoda');
        });

        factory(App\User::class, 15)->create()->each(function($user){
            $user->assignRole('Kaylo_Ren');
        });
        factory(App\User::class, 15)->create()->each(function($user){
            $user->assignRole('Dark_Vador');
        });
        factory(App\User::class, 15)->create()->each(function($user){
            $user->assignRole('Palpatine');
        });
    }
}
