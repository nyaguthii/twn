<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $adminRole=Role::create([
        	'name'=>'ADMIN',
        	'permissions'=>json_encode([
        		'create-user'=>true,
        	])


        ]);

        $memberRole=Role::create([
        	'name'=>'MEMBER',
        	'permissions'=>json_encode([
        		'view-user'=>true,
        	])


        ]);

        $admin=User::create([
         'name'=>'Martin Nganga Nyaguthii',
         'email'=>'admin@twn.com',
         'password'=>bcrypt('password'),
         'contact'=>'+25413592581',
         'is_staff'=>true,
         'is_member'=>false,
         'is_active'=>true


        ]);

        $admin->roles()->attach($adminRole->id);
    }
}
