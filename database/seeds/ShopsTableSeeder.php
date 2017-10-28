<?php

use Illuminate\Database\Seeder;
use App\Shop;
use Illuminate\Support\Facades\DB;

class ShopsTableSeeder extends Seeder
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
            $shop_name = new Shop();
            $shop_name->name = "illuminati";
            $shop_name->save();
        } catch (\Exception $e) {
            DB::rollback();
        } finally {
            DB::commit();
        }
    }
}
