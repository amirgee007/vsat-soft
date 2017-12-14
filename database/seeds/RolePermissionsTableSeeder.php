<?php

use App\Models\Permission;
use App\Models\Role;
use App\User;
use Illuminate\Database\Seeder;

class RolePermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'User Administrator'; // optional
        $admin->description  = 'User is allowed to manage and edit other users'; // optional
        $admin->save();

        $user = User::where('username', '=', 'seersol')->first();

// role attach alias
        $user->attachRole($admin); // parameter can be an Role object, array, or id

        $all_perms = Permission::permissionsByRouteGroups();
        foreach ($all_perms as $all_perm){
            $editPerm = new Permission();
            $editPerm->name = $all_perm;
            $editPerm->save();
            $admin->attachPermission($editPerm); // parameter can be an Role object, array, or id
        }

        echo $user->hasRole('owner');   // false
        echo $user->hasRole('admin');   // true
        echo $user->can('edit-user');   // false
        echo $user->can('create-post'); // true

    }
}
