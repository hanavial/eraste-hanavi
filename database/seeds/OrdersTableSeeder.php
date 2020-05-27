<?php

use Illuminate\Database\Seeder;
use App\Orders;
use App\Product;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Orders::create([
            'order_code' => '00001',
            'id_product' => '1',
            'total' => '34900'
        ]);
        Orders::create([
            'order_code' => '00002',
            'id_product' => '2',
            'total' => '34900'
        ]);
    }
}
