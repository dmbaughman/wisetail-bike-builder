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
        // $this->call(UsersTableSeeder::class);
       $this->call(BikeTableSeeder::class);
       $this->call(FramesTableSeeder::class);
       $this->call(WheelsTableSeeder::class);
       $this->call(SeatsTableSeeder::class);
    }
}
