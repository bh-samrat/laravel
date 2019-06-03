<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		 DB::table('samrats')->insert([
           
            'email' => str_random(10).'@gmail.com',
           
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
