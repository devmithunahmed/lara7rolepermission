<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Create Roles
        $roleSuperAdmin = Role::create(['name' => 'superadmin','guard_name' => 'admin']);
        $roleAdmin = Role::create(['name' => 'admin','guard_name' => 'admin']);
        $roleEditor = Role::create(['name' => 'editor','guard_name' => 'admin']);
        $roleUser = Role::create(['name' => 'user','guard_name' => 'admin']);

        // Permission List as array
        $permissions = [

            // Dashboard Permisions group
            [
                'group_name' => 'dashboard',
                'permissions' => [
                    'dashboard.view',
                    'dashboard.edit',
                ]
            ],

            // Blog Permissions group
            [
                'group_name' => 'blog',
                'permissions' => [
                    'blog.create',
                    'blog.view',
                    'blog.edit',
                    'blog.delete',
                    'blog.approve',
                ]
            ],

            // Admin permissions group
            [
                'group_name' => 'admin',
                'permissions' => [
                    'admin.create',
                    'admin.view',
                    'admin.edit',
                    'admin.delete',
                    'admin.approve',
                ]
            ],

            // Role permissions group
            [
                'group_name' => 'role',
                'permissions' => [
                    'role.create',
                    'role.view',
                    'role.edit',
                    'role.delete',
                    'role.approve',
                ]
            ],

            // User permissions group
            [
                'group_name' => 'user',
                'permissions' => [
                    'user.create',
                    'user.view',
                    'user.edit',
                    'user.delete',
                    'user.approve',
                ]
            ],

            // Reporter permissions group
            [
                'group_name' => 'reporter',
                'permissions' => [
                    'reporter.create',
                    'reporter.view',
                    'reporter.edit',
                    'reporter.delete',
                    'reporter.approve',
                ]
            ],

            // News permissions group
            [
                'group_name' => 'news',
                'permissions' => [
                    'news.create',
                    'news.view',
                    'news.edit',
                    'news.delete',
                    'news.approve',
                ]
            ],

            // Category permissions group
            [
                'group_name' => 'category',
                'permissions' => [
                    'category.create',
                    'category.view',
                    'category.edit',
                    'category.delete',
                    'category.approve',
                ]
            ],

            // Subcategory permissions group
            [
                'group_name' => 'subcategory',
                'permissions' => [
                    'subcategory.create',
                    'subcategory.view',
                    'subcategory.edit',
                    'subcategory.delete',
                    'subcategory.approve',
                ]
            ],

            // district permissions group
            [
                'group_name' => 'district',
                'permissions' => [
                    'district.create',
                    'district.view',
                    'district.edit',
                    'district.delete',
                    'district.approve',
                ]
            ],

            // subdistrict permissions group
            [
                'group_name' => 'subdistrict',
                'permissions' => [
                    'subdistrict.create',
                    'subdistrict.view',
                    'subdistrict.edit',
                    'subdistrict.delete',
                    'subdistrict.approve',
                ]
            ],


            // Profile permissions group
            [
                'group_name' => 'profile',
                'permissions' => [
                    'profile.create',
                    'profile.view',
                    'profile.edit',
                    'profile.delete',
                    'profile.approve',
                ]
            ],

        ];

        // Create and Assign Permissions
        foreach ($permissions as $permissionGroup) {
            $group = $permissionGroup['group_name'];

            foreach ($permissionGroup['permissions'] as $permissionName) {
                $permission = Permission::create([
                    'name' => $permissionName,
                    'guard_name' => 'admin',
                    'group_name' => $group,
                ]);
                // Assign Permissions to Roles
                $roleSuperAdmin->givePermissionTo($permission);
                $permission->assignRole($roleSuperAdmin);
            }
        }
    }
}
