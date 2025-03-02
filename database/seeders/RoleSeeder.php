<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create roles
        $adminRole = Role::create(['name' => 'Admin']);
        $userRole = Role::create(['name' => 'User']);
    
        // Create permissions (optional)
        $createProduct = Permission::create(['name' => 'create-product']);
        $editProduct = Permission::create(['name' => 'edit-product']);
        $deleteProduct = Permission::create(['name' => 'delete-product']);
    
        // Assign permissions to roles (optional)
        $adminRole->givePermissionTo([$createProduct, $editProduct, $deleteProduct]);
    }
}
