<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'code' => 'L1',
            'name' => 'Teayasong Lipstick',
            'price' => '34900',
        ]);
        Product::create([
            'code' => 'L2',
            'name' => 'Teayasong Liptint',
            'price' => '26000',
        ]);
        Product::create([
            'code' => 'L3',
            'name' => 'Teayasong Eyebrush',
            'price' => '24000',
        ]);
        Product::create([
            'code' => 'L4',
            'name' => 'Teayasong Cosmetic',
            'price' => '74000',
        ]);
        Product::create([
            'code' => 'L5',
            'name' => 'Teayasong Cosmetic',
            'price' => '74000',
        ]);
        Product::create([
            'code' => 'L6',
            'name' => 'Teayasong Eyebrush',
            'price' => '24000',
        ]);
        Product::create([
            'code' => 'L7',
            'name' => 'Teayasong Liptint',
            'price' => '26000',
        ]);
        Product::create([
            'code' => 'L8',
            'name' => 'Teayasong Lipstick',
            'price' => '34900',
        ]);
    }
}
