<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = 'Biet thu loai 1';
        $product->image = '';
        $product->thong_tin = 'la mot can nha co view bien dep';
        $product->save();
    }
}
