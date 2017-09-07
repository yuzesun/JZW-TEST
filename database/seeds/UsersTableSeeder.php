<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

//        User::create(['name' => 'Admin', 'password' => '$2y$10$fQ4X3gFDRKQ4HNLwDL4I2el5.98ZEAFjCPfRl5QbTCcbJL9M8uuxS',
//            'email' => 'admin@gmail.com', 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create(['name' => 'Yuze Sun', 'password' => bcrypt('password1234'), 'email' => 'yuzesun16@gmail.com',
            'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create(['name' => 'admin', 'password' => bcrypt('password1234'), 'email' => 'admin@gmail.com',
            'created_at' => date_create(), 'updated_at' => date_create()]);
    }
}
