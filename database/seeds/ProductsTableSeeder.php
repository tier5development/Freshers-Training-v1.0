<?php

use Illuminate\Database\Seeder;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            DB::beginTransaction();
            $product_item = new Product();
            $product_item->name = "ouija board";
            $product_item->save();
        } catch (\Exception $e) {
            DB::rollback();
        } finally {
            DB::commit();
        }

    }
}
