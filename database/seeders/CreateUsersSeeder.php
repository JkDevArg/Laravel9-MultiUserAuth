<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'type' => 1,
                'password' => bcrypt('admin'),

            ],
            [
                'name' => 'Manager',
                'email' => 'manager@manager.com',
                'type' => 2,
                'password' => bcrypt('manager'),
            ],
            [
                'name' => 'User',
                'email' => 'user@user.com',
                'type' => 0,
                'password' => bcrypt('user'),
            ],
        ];
        foreach($users as $key => $user){
            User::create($user);
        }
    }
}
