<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('users')->truncate();

        DB::table('users')->insert([
            'name' => 'Cristina',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin@mail.com')
        ]);
    }
}
