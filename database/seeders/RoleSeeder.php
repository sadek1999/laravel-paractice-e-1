<?php

namespace Database\Seeders;

use App\Enum\PermissionsEnum;
use App\Enum\RolesEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => RolesEnum::admin->value]);
        $vendorRole = Role::create(['name' => RolesEnum::vendor->value]);
        $userRole = Role::create(['name' => RolesEnum::user->value]);


        $vendorApprovePermission = Permission::create(['name' => PermissionsEnum::approveVendor->value]);
        $sellProductsPermission = Permission::create(['name' => PermissionsEnum::sellProducts->value]);
        $buyProductsPermission = Permission::create(['name' => PermissionsEnum::buyProducts->value]);


        $userRole->syncPermissions([$buyProductsPermission]);
        $vendorRole->syncPermissions([$buyProductsPermission, $sellProductsPermission]);
        $adminRole->syncPermissions([$buyProductsPermission, $sellProductsPermission, $vendorApprovePermission]);
    }
}
