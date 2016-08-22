<?php

use Illuminate\Database\Seeder;
use Cinema\User;
use Cinema\Roles;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Roles::create(array('name'=>'Administrador'));
    	Roles::create(array('name'=>'Prueba'));
        User::create(array('name'=>'Luis', 'email'=>'blink242@outlook.com', 'password'=>'1234', 'roles_id'=>'1'));
    }
}
