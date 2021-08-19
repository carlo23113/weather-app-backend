<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
                'name' => 'Kyoto',
                'image_path' => 'images/kyoto.jpg'
            ],
            [
                'name' => 'Nagoya',
                'image_path' => 'images/nagoya.jpg'
            ],
            [
                'name' => 'Osaka',
                'image_path' => 'images/osaka.jpg'
            ],
            [
                'name' => 'Sapporo',
                'image_path' => 'images/sapporo.jpg'
            ],
            [
                'name' => 'Tokyo',
                'image_path' => 'images/tokyo.jpg'
            ],
            [
                'name' => 'Yokohama',
                'image_path' => 'images/yokohama.jpg'
            ]
        ];

        foreach($cities as $city) {
            $item = City::create($city);

            for($i = 1; $i <= 8; $i++) {
                $item->gallery()->create([
                    'image_path' => 'images/'.strtolower($city['name']).$i.'.jpg',
                ]);
            }
        }
    }
}