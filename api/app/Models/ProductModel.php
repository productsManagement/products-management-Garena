<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\BaseModels\Product;

use Illuminate\Database\Query\Builder as QueryBuilder;

class ProductModel extends Product
{
    public static function getProductList($columns = ['*']){
    	return ProductModel::all($columns);
    }

    public static function getProductById($id, $columns = ['*']){
    	return ProductModel::find($id)->get($columns);
    }

    public static function getProductBySKU($sku, $columns = ['*']){
    	$product = ProductModel::select($columns)->where('SKU', '=', $sku)->get();
    	return $product;
    }

    public static function createNewProduct($product){
    	return ProductModel::save($product);
    }    

    public static function updateProduct($id, $attributes, $options){
    	$product = ProductModel::find($id);
    	return $product->update($attributes, $options);
    }

    public static function destroyProduct($id){
    	return ProductModel::destroy($id);
    }

}
