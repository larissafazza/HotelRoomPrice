<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rooms')->insert([
            [
                'type' => 'single',
                'number_of_rooms' => 5,
                'hotel_id' => 1
            ],
            [
                'type' => 'double',
                'number_of_rooms' => 10,
                'hotel_id' => 1
            ],
            [
                'type' => 'suite',
                'number_of_rooms' => 30,
                'hotel_id' => 1
            ],
            [
                'type' => 'single',
                'number_of_rooms' => 8,
                'hotel_id' => 2
            ],
            [
                'type' => 'double',
                'number_of_rooms' => 22,
                'hotel_id' => 2
            ],
            [
                'type' => 'single',
                'number_of_rooms' => 12,
                'hotel_id' => 3
            ],
            [
                'type' => 'double',
                'number_of_rooms' => 4,
                'hotel_id' => 3
            ],
            [
                'type' => 'suite',
                'number_of_rooms' => 18,
                'hotel_id' => 3
            ],
            [
                'type' => 'double',
                'number_of_rooms' => 16,
                'hotel_id' => 4
            ],
            [
                'type' => 'suite',
                'number_of_rooms' => 32,
                'hotel_id' => 4
            ],
            [
                'type' => 'single',
                'number_of_rooms' => 12,
                'hotel_id' => 5
            ],
            [
                'type' => 'double',
                'number_of_rooms' => 24,
                'hotel_id' => 5
            ],
            [
                'type' => 'suite',
                'number_of_rooms' => 32,
                'hotel_id' => 5
            ],
            [
                'type' => 'single',
                'number_of_rooms' => 10,
                'hotel_id' => 6
            ],
            [
                'type' => 'double',
                'number_of_rooms' => 20,
                'hotel_id' => 6
            ],
            [
                'type' => 'suite',
                'number_of_rooms' => 4,
                'hotel_id' => 6
            ],
            [
                'type' => 'double',
                'number_of_rooms' => 18,
                'hotel_id' => 1
            ],
            [
                'type' => 'suite',
                'number_of_rooms' => 22,
                'hotel_id' => 1
            ]
        ]);
    }
}
