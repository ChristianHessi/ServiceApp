<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //création d'un utilisateur avec le rôle admin
        DB::table('users')->insert([
            "id" => 1,
            "name" => " HESSI",
            "surname" => "Christian",
            "birthday" => "2000-10-22",
            "phone_number" => "+237680500120",
            "email" => "hessisan@gmail.com",
            "sexe" => "m",
            "password" => Hash::make("root"),
            "is_active" => 1,
            "url_avatar" => "avatar1.png",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);

        $role = Role::findById(2);
        User::find(1)->assignRole($role);

         //création d'un utilisateur avec le rôle user
         DB::table('users')->insert([
            "id" => 2,
            "name" => "Tchoudenou koueta",
            "surname" => "sorel",
            "birthday" => "1998-10-22",
            "phone_number" => "+237651000680",
            "email" => "kouetalaurie@gmail.com",
            "sexe" => "f",
            "password" => Hash::make("Doduse@2020"),
            "is_active" => 1,
            "url_avatar" => "avatar1.png",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);

        $role = Role::findById(1);
        User::find(2)->assignRole($role);

    }
}
