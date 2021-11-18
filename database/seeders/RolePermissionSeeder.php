<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //pour la création des permissions concernant les utilisateurs
        DB::table('permissions')->insert([
            "id" => 1,
            "name" => "add_user",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            "id" => 2,
            "name" => "modify_user",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            "id" => 3,
            "name" => "active_user",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            "id" => 4,
            "name" => "deactive_user",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            "id" => 5,
            "name" => "view_user",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            "id" => 6,
            "name" => "change_user_password",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);


        //création des permissions concernant les rôles
        DB::table('permissions')->insert([
            "id" => 7,
            "name" => "add_role",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            "id" => 8,
            "name" => "modify_role",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            "id" => 9,
            "name" => "delete_role",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            "id" => 10,
            "name" => "view_role",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        //création des permissions pour les type d'email
        DB::table('permissions')->insert([
            "id" => 11,
            "name" => "add_notification_type",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            "id" => 12,
            "name" => "delete_notification_type",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            "id" => 13,
            "name" => "modify_notification_type",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            "id" => 14,
            "name" => "view_notification_type",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        //création des permissions pour les email template
        DB::table('permissions')->insert([
            "id" => 15,
            "name" => "add_notification_template",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            "id" => 16,
            "name" => "view_notification_template",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            "id" => 17,
            "name" => "modify_notification_template",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        //création des permissions pour changer le profile
        DB::table('permissions')->insert([
            "id" => 18,
            "name" => "change_profile",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        //création des permissions pour visualiser le dashboard
        DB::table('permissions')->insert([
            "id" => 19,
            "name" => "view_dashboard",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        //création des permissions pour changer la langue
        DB::table('permissions')->insert([
            "id" => 20,
            "name" => "change_language",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

         //création des permissions pour se déconnecter
         DB::table('permissions')->insert([
            "id" => 21,
            "name" => "logout",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

         //création des permissions pour se déconnecter
         DB::table('permissions')->insert([
            "id" => 22,
            "name" => "view_logging",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        //pour la création des permissions concernant les clients
        DB::table('permissions')->insert([
            "id" => 23,
            "name" => "add_custumer",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        DB::table('permissions')->insert([
            "id" => 24,
            "name" => "modify_custumer",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        DB::table('permissions')->insert([
            "id" => 26,
            "name" => "delete_custumer",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        DB::table('permissions')->insert([
            "id" => 25,
            "name" => "view_custumer",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        //Permissions concernant les services
        Permission::create([
            "id" => 27,
            "name" => "add_service",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        Permission::create([
            "id" => 28,
            "name" => "modify_service",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        Permission::create([
            "id" => 29,
            "name" => "view_service",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        Permission::create([
            "id" => 30,
            "name" => "delete_service",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        //Permissions concernant les prestations
        Permission::create([
            "id" => 31,
            "name" => "add_prestation",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        Permission::create([
            "id" => 32,
            "name" => "modify_prestation",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        Permission::create([
            "id" => 33,
            "name" => "view_all_prestation",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        Permission::create([
            "id" => 34,
            "name" => "view_only_prestation",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        Permission::create([
            "id" => 35,
            "name" => "delete_prestation",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        //création du role user
         DB::table('roles')->insert([
            "id" => 1,
            "name" => "user",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        //création du role admin
        DB::table('roles')->insert([
            "id" => 2,
            "name" => "admin",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);


        //attribution des permissions au role admin
        foreach(Permission::all() as $perm){
            DB::table('role_has_permissions')->insert([
                "permission_id" => $perm->id,
                "role_id"  => 2,
            ]);
        }

        //attribution des permissions au role user
        foreach(array(18, 20, 21, 31, 34) as $perm){
            DB::table('role_has_permissions')->insert([
                "permission_id" => $perm,
                "role_id"  => 1,
            ]);
        }

    }
}
