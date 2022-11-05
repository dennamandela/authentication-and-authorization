<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class UsersTableSeeder extends Seeder
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
               'name' => 'Denna Mandela',
               'email' => 'denna.mandela1@gmail.com',
               'email_verified_at' => now(),
               'password' => bcrypt('password'),
               'remember_token' => Str::random(10),
               'role' => 'admin',
            ],
            [    
                'name' => 'editor',
                'email' => 'editor@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'role' => 'editor',
             ],
             [    
                'name' => 'author',
                'email' => 'author@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'role' => 'author',
             ],
            ];
        DB::table('users')->insert($users);
    }
}
