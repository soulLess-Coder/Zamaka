<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create roles and assign existing permissions
        //Users permissions
        $role1 = Role::create(['name' => 'user']);

        //Admin's permissions
        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('publish listings');
        $role2->givePermissionTo('unpublish listings');
        $role2->givePermissionTo('edit listings');
        $role2->givePermissionTo('delete listings');

        //Tenant's permissions
        $role3 = Role::create(['name' => 'tenant']);

        //Owner's permissions
        $role4 = Role::create(['name' => 'owner']);


        $role5 = Role::create(['name' => 'Super-Admin']);

        // create demo users
        $user = User::factory()->count(5)->create();

        //Assign roles to users
        $user[0]->assignRole($role1);
        $user[1]->assignRole($role2);
        $user[2]->assignRole($role3);
        $user[3]->assignRole($role4);
        $user[4]->assignRole($role5);
    }
}
