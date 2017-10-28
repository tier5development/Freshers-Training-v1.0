<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The shops that belong to the product.
     * with this kind of relation  between shop and product laravel assumes pivot table name product_shop (alphabetical order p first) if it's different you can pass it as second param like return $this->belongsToMany('App\Shop', 'my_custom_pivot_name');
     * Moreover, you can specify the actual field names of that pivot table, if they are different than default product_id and shop_id. Then just add two more parameters – first, the current model field, and then the field of the model being joined:  return $this->belongsToMany('App\Products', 'products_shops',
    'shops_id', 'products_id');
     */
    public function shops()
    {
        return $this->belongsToMany('App\Shop');
    }
}
