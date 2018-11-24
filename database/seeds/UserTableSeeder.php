<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('role','admin')->first();
        $role_manager  = Role::where('role', 'manager')->first();
        $role_client = Role::where('role', 'client')->first();

        $admin = new User();
        $admin->name = 'Admin Name';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('secret');
        $admin->id_role = 1;
        $admin->save();
        $admin->roles()->associate($role_admin);

        $manager = new User();
        $manager->name = 'Manager Name';
        $manager->email = 'manager@example.com';
        $manager->password = bcrypt('secret');
        $manager->id_role = 2;
        $manager->save();
        $manager->roles()->associate($role_manager);

        $client = new User();
        $client->name = 'Client1 Name';
        $client->email = 'client1@example.com';
        $client->password = bcrypt('1');
        $client->id_role = 3;
        $client->save();
        $client->roles()->associate($role_client);

        DB::table('users')->insert([
            'name' => 'Александр Костыркин',
            'email' => 'Александр Костыркин@gmail.com',
            'password' => bcrypt('1'),
            'id_role' => 3,
        ]);

        DB::table('users')->insert([
            'name' => 'Максим Свиридов',
            'email' => 'Максим Свиридов@gmail.com',
            'password' => bcrypt('1'),
            'id_role' => 3,
        ]);

        DB::table('users')->insert([
            'name' => 'Максим Голуб',
            'email' => 'Максим Голуб@gmail.com',
            'password' => bcrypt('1'),
            'id_role' => 3,
        ]);

        DB::table('users')->insert([
            'name' => 'Елена Павлыш',
            'email' => 'Елена Павлыш@gmail.com',
            'password' => bcrypt('1'),
            'id_role' => 3,
        ]);

        DB::table('users')->insert([
            'name' => 'Ольга Духневич',
            'email' => 'Ольга Духневич@gmail.com',
            'password' => bcrypt('1'),
            'id_role' => 3,
        ]);

        DB::table('users')->insert([
            'name' => 'Александр Ярощук',
            'email' => 'Александр Ярощук@gmail.com',
            'password' => bcrypt('1'),
            'id_role' => 3,
        ]);

        DB::table('users')->insert([
            'name' => 'Валерий Гвоздев',
            'email' => 'Валерий Гвоздев@gmail.com',
            'password' => bcrypt('1'),
            'id_role' => 3,
        ]);

        DB::table('users')->insert([
            'name' => '	Елена Строгова',
            'email' => 'Елена Строгова@gmail.com',
            'password' => bcrypt('1'),
            'id_role' => 3,
        ]);

        DB::table('users')->insert([
            'name' => 'Юлия Белая',
            'email' => 'Юлия Белая@gmail.com',
            'password' => bcrypt('1'),
            'id_role' => 3,
        ]);


        DB::table('users')->insert([
            'name' => 'Сергей Притула',
            'email' => 'Сергей Притула@gmail.com',
            'password' => bcrypt('1'),
            'id_role' => 3,
        ]);

        DB::table('users')->insert([
            'name' => 'Анастасия Кудрашова',
            'email' => 'Анастасия Кудрашова@gmail.com',
            'password' => bcrypt('1'),
            'id_role' => 3,
        ]);


        DB::table('users')->insert([
            'name' => 'Андрей Потемкин',
            'email' => 'Андрей Потемкин@gmail.com',
            'password' => bcrypt('1'),
            'id_role' => 3,
        ]);
    }
}
