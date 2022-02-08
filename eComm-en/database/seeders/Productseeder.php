<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [

                [
                    'name' => 'Smartphone',
                    'price' => 200,
                    'description' => 'Smartphone is a magic weapon',
                    'category' => 'mobile',
                    'gallery' => 'smartpon.jpg',
                ],
                [
                    'name' => 'Tivi',
                    'price' => 100,
                    'description' => 'Tivi is a unless weapon',
                    'category' => 'tv',
                    'gallery' => 'tivi.jpg',
                ],
                [
                    'name' => 'Kolkas',
                    'price' => 2000,
                    'description' => 'Kolkas is a super power weapon',
                    'category' => 'frigde',
                    'gallery' => 'kolkas.jpg',
                ]
            ]
        );
    }
}
