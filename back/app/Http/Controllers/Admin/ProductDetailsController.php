<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductDetails;

class ProductDetailsController extends Controller
{
    public function ProductDetails(Request $request) {
        $id = $request->id;

        $productDetails = ProductDetails::where('product_id', $id)->get();
        $product = Product::where('id', $id)->get();

        $item = [
            'productDetails' => $productDetails,
            'product' => $product,
        ];

        return $item;
    }
}
