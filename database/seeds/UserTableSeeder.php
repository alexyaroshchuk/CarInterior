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
        $admin->email = 'admin@admin.com';
        $admin->password = bcrypt('admin');
        $admin->id_role = 1;
        $admin->save();
        $admin->roles()->associate($role_admin);

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
            'name' => 'Елена Строгова',
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

        ///////////////////////////////

        DB::table('users')->insert([
            'name' => 'Константин Есипович',
            'email' => 'Константин Есипович@gmail.com',
            'password' => bcrypt('employee'),
            'id_role' => 2,
        ]);

        DB::table('users')->insert([
            'name' => 'Елизавета Андреева',
            'email' => 'Елизавета Андреева@gmail.com',
            'password' => bcrypt('employee'),
            'id_role' => 2,
        ]);

        DB::table('users')->insert([
            'name' => 'Василий Белый',
            'email' => 'Василий Белый@gmail.com',
            'password' => bcrypt('employee'),
            'id_role' => 2,
        ]);

        DB::table('users')->insert([
            'name' => 'Евгений Ступко',
            'email' => 'Евгений Ступко@gmail.com',
            'password' => bcrypt('employee'),
            'id_role' => 2,
        ]);

        DB::table('users')->insert([
            'name' => 'Богдан Сидоров',
            'email' => 'Богдан Сидоров@gmail.com',
            'password' => bcrypt('employee'),
            'id_role' => 2,
        ]);

        DB::table('users')->insert([
            'name' => 'Алексей Кукишев',
            'email' => 'Алексей Кукишев@gmail.com',
            'password' => bcrypt('employee'),
            'id_role' => 2,
        ]);

        DB::table('users')->insert([
            'name' => 'Артем Лиска',
            'email' => 'Артем Лиска@gmail.com',
            'password' => bcrypt('employee'),
            'id_role' => 2,
        ]);

        DB::table('users')->insert([
            'name' => 'Римма Лукачинская',
            'email' => 'Римма Лукачинская@gmail.com',
            'password' => bcrypt('employee'),
            'id_role' => 2,
        ]);

    }
}
