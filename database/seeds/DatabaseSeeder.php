<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Start seeding user table');
        $this->call(UsersTableSeeder::class);
        $this->command->info('End seeding user table ');
    }

}
