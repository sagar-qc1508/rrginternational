<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
               'name'=>'Super Admin User',
               'email'=>'superadmin@rrginternational.com',
               'type'=>'superadmin',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Admin User',
               'email'=>'admin@rrginternational.com',
               'type'=> 'admin',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Staff User',
               'email'=>'staff@rrginternational.com',
               'type'=>'staff',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Student User',
               'email'=>'student@rrginternational.com',
               'type'=>'student',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'University User',
               'email'=>'university@rrginternational.com',
               'type'=>'university',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Agent User',
               'email'=>'agent@rrginternational.com',
               'type'=>'agent',
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
