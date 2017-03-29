<?php

use Illuminate\Database\Seeder;

class BikeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            factory(App\Bike::class, 10)->create()->each(function($bike){
                    $frames = factory(App\Frame::class, 1)->create();
                    $wheels = factory(App\Wheel::class, 1)->create();
                    $seats = factory(App\Seat::class, 1)->create();

                    $bike->frame_id = $frames->first()->id;
                    $bike->wheel_id = $wheels->first()->id;
                    $bike->seat_id = $seats->first()->id;
                    $bike->update();
            }); 
    }
}
