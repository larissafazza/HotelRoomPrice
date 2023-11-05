<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $roomTypes = [
            (object)['type' => 'single', 'price' => 100],
            (object)['type' => 'double', 'price' => 150],
            (object)['type' => 'suite', 'price' => 200],
        ];

        $hotels = DB::table('hotels')->get();

        foreach ($hotels as $hotel) {
            foreach ($roomTypes as $roomType) {
                $roomId = DB::table('rooms')
                    ->where('hotel_id', $hotel->id)
                    ->where('type', $roomType->type)
                    ->value('id');

                if ($roomId) {
                    DB::table('prices')->insert([
                        'room_id' => $roomId,
                        'start_date' => '2023-01-01',
                        'end_date' => '2023-12-31',
                        'price' => $roomType->price,
                    ]);
                }
            }
        }
    }

}
