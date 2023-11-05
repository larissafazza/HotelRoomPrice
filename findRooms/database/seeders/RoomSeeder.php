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
                'hotel_id' => 1,
                'description' => "Comfort and simplicity, room with one simple bathroom and one single bed"
            ],
            [
                'type' => 'double',
                'number_of_rooms' => 10,
                'hotel_id' => 1,
                'description' => "Comfort and peace for a weekend with you significant other, room with a couples bed and a private room"
            ],
            [
                'type' => 'suite',
                'number_of_rooms' => 30,
                'hotel_id' => 1,
                'description' => "Luxury and Comfort, suite room with a king size bed and a jacuzzi"
            ],
            [
                'type' => 'single',
                'number_of_rooms' => 8,
                'hotel_id' => 2,
                'description' => "Comfort and simplicity, room with one simple bathroom and one single bed"
            ],
            [
                'type' => 'double',
                'number_of_rooms' => 22,
                'hotel_id' => 2,
                'description' => "Comfort and peace for a weekend with you significant other, room with a couples bed and a private room"
            ],
            [
                'type' => 'single',
                'number_of_rooms' => 12,
                'hotel_id' => 3,
                'description' => "Comfort and simplicity, room with one simple bathroom and one single bed"
            ],
            [
                'type' => 'double',
                'number_of_rooms' => 4,
                'hotel_id' => 3,
                'description' => "Comfort and peace for a weekend with you significant other, room with a couples bed and a private room"
            ],
            [
                'type' => 'suite',
                'number_of_rooms' => 18,
                'hotel_id' => 3,
                'description' => "Luxury and Comfort, suite room with a king size bed and a jacuzzi"
            ],
            [
                'type' => 'double',
                'number_of_rooms' => 16,
                'hotel_id' => 4,
                'description' => "Comfort and peace for a weekend with you significant other, room with a couples bed and a private room"
            ],
            [
                'type' => 'suite',
                'number_of_rooms' => 32,
                'hotel_id' => 4,
                'description' => "Luxury and Comfort, suite room with a king size bed and a jacuzzi"
            ],
            [
                'type' => 'single',
                'number_of_rooms' => 12,
                'hotel_id' => 5,
                'description' => "Comfort and simplicity, room with one simple bathroom and one single bed"
            ],
            [
                'type' => 'double',
                'number_of_rooms' => 24,
                'hotel_id' => 5,
                'description' => "Comfort and peace for a weekend with you significant other, room with a couples bed and a private room"
            ],
            [
                'type' => 'suite',
                'number_of_rooms' => 32,
                'hotel_id' => 5,
                'description' => "Luxury and Comfort, suite room with a king size bed and a jacuzzi"
            ],
            [
                'type' => 'single',
                'number_of_rooms' => 10,
                'hotel_id' => 6,
                'description' => "Comfort and simplicity, room with one simple bathroom and one single bed"
            ],
            [
                'type' => 'double',
                'number_of_rooms' => 20,
                'hotel_id' => 6,
                'description' => "Comfort and peace for a weekend with you significant other, room with a couples bed and a private room"
            ],
            [
                'type' => 'suite',
                'number_of_rooms' => 4,
                'hotel_id' => 6,
                'description' => "Luxury and Comfort, suite room with a king size bed and a jacuzzi"
            ],
            [
                'type' => 'double',
                'number_of_rooms' => 18,
                'hotel_id' => 7,
                'description' => "Comfort and peace for a weekend with you significant other, room with a couples bed and a private room"
            ],
            [
                'type' => 'suite',
                'number_of_rooms' => 22,
                'hotel_id' => 7,
                'description' => "Luxury and Comfort, suite room with a king size bed and a jacuzzi"
            ]
        ]);
    }
}
