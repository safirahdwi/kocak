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
        DB::table('users')->insert([
            'name' => str_random(10).'Admin Kopikoe',
            'email' => str_random(10).'adminkop@gmail.com',
            'password' => bcrypt('adminkop123'),
        ]);
    }
}