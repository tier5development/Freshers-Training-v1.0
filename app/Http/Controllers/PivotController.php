<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Product;
use Mockery\Exception;
use Illuminate\Support\Facades\DB;

class PivotController extends Controller
{
    public function getShopProduct() {
        //dd('test');
        $products =  Product::with('shops')->get();
        $data = array(
            'products' => $products
        );
        return view('welcome', $data);
    }
    public function postShop(Request $request) {
        //dd($request);
        try {
            DB::beginTransaction();
            $product = new Product();
            $product->name = $request->product_name;
            $product->save();
            $product->shops()->attach(1); //in attach shop id should be there
        } catch (\Exception $e) {
            DB::rollback();
        } finally {
            DB::commit();
            return redirect()->back();
        }
    }
}
