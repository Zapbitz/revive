<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->guard_name = 'api';
        $role_admin->save();

        $role_admin = new Role();
        $role_admin->name = 'client';
        $role_admin->guard_name = 'api';
        $role_admin->save();

        $role_admin = new Role();
        $role_admin->name = 'doctor';
        $role_admin->guard_name = 'api';
        $role_admin->save();
      
    }
}
