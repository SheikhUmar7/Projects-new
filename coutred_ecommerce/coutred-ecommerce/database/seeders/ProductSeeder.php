<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $products = [
            [
                'name' => 'Yellow Jump Suit',
                'price' => 300,
                'description' => 'The jumpsuit features a stylish design that is suitable for girls. It may have a sleeveless or short-sleeved top with a round or V-neckline, allowing freedom of movement for the arms. The top part of the jumpsuit is connected to the bottom portion, creating a seamless and cohesive look.',
                'image' => 'images/catogoriesPage/img-2.jpg',
                'size-s' => 'S',
                'size-m' => 'M'


            ],
            [
                'name' => 'White Dress',
                'price' => 200,
                'description' => 'White Dress  come in a wide range of styles and designs to suit different preferences and occasions.',
                'image' => 'images/catogoriesPage/img-3.jpg',
                'size-s' => 'S',
                'size-m' => 'M'

            ],
            [
                'name' => 'Pink New Cotton',
                'price' => 150,
                'description' => 'A pink printed dress is a garment that features a pink color as its base and is adorned with various printed patterns or designs.',
                'image' => 'images/catogoriesPage/img-1.jpg',
                'size-s' => 'S',
                'size-m' => 'M'

            ],
            [
                'name' => 'Black Undergarments',
                'price' => 300,
                'description' => 'Black',
                'image' => 'images/catogoriesPage/img-4.jpg',
                'size-s' => 'S',
                'size-m' => 'M'



            ]
        ];
        Product::insert($products);
    }
}
