<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Evaluador']);
        $role3 = Role::create(['name' => 'Gestor']);


        // PERMISSIONS OF BOTH
        Permission::create(['name' => 'dashboard'])->syncRoles([$role1, $role2, $role3]);


        // ADMIN PERMISSIONS
        Permission::create(['name' => 'create.companies'])->assignRole([$role1]);
        Permission::create(['name' => 'edit.delete.procceses'])->assignRole([$role1]);
        Permission::create(['name' => 'process.activity.task.create'])->assignRole([$role1]);
        Permission::create(['name' => 'edit.delete.activities'])->assignRole([$role1]);
        Permission::create(['name' => 'administrator'])->assignRole([$role1]);
        Permission::create(['name' => 'admin'])->assignRole([$role1]);


    }
}
