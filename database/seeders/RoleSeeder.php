<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $superAdmin = Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);

        // $manageFinance = Permission::create(['name' => 'manage-finances']);
        // $manageOrder = Permission::create(['name' => 'manage-orders']);
        // $manageCustomer = Permission::create(['name' => 'manage-customers']);
        // $manageUser = Permission::create(['name' => 'manage-users']);

        // $superAdmin->givePermissionTo($manageFinance);
        // $superAdmin->givePermissionTo($manageOrder);
        // $superAdmin->givePermissionTo($manageCustomer);
        // $superAdmin->givePermissionTo($manageUser);

        // $admin->givePermissionTo($manageCustomer);
        // $admin->givePermissionTo($manageOrder);

        $manageCrud = Permission::create(['name' => 'manage-crud']);

        $superAdmin->givePermissionTo($manageCrud);
    }
}