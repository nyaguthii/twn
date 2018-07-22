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
        $admin=Role::create([
        	'name'=>'ADMIN',
        	'permissions'=>json_encode([
        		'create-user'=>true,
        	])


        ]);

        $member=Role::create([
        	'name'=>'MEMBER',
        	'permissions'=>json_encode([
        		'view-user'=>true,
        	])


        ]);
    }
}
