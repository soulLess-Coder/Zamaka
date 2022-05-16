<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit listings']);
        Permission::create(['name' => 'delete listings']);
        Permission::create(['name' => 'publish listings']);
        Permission::create(['name' => 'unpublish listings']);
        Permission::create(['name' => 'create listings']);
        Permission::create(['name' => 'add property']);
        Permission::create(['name' => 'edit property']);
        Permission::create(['name' => 'delete property']);
    }
}
