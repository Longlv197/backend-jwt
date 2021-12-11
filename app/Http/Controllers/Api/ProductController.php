<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product;

class ProductController extends Controller
{
    public function list()
    {
        $paginate = 10;
        $products = Product::paginate($paginate)->toArray();
        $data = [
            "message" => "Lấy các sản phẩm thành công",
            "data" => [
                "products" => $products['data'],
                "pagination" => [
                    "page" => $products['current_page'],
                    "limit" => $products['per_page'],
                    "page_size" => $products['last_page']
                ]
            ]
        ];
        return response()->json($data, 200);
    }

    public function getProductById($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product = $product->toArray();
            $product['images'] = json_decode($product['images'], true);
            $product['unit_id'] = json_decode($product['unit_id'], true);
            $data = [
                "message" => "Lấy thông tin sản phẩm thành công",
                "data" => $product
            ];
            return response()->json($data, 200);
        } else {
            $data = [
                "message" => "Sản phẩm không tồn tại",
                "data" => null
            ];
            return response()->json($data, 200);
        }

    } 
}
