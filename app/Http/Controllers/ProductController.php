<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        // return $products;
        return view('pages.products.index')
                ->with(['products' => $products]);
    }

    public function edit($id) {
        $product = Product::where('id', $id)->get();
        // return $product;
        return view('pages.products.edit')
                ->with(['product' => $product]);
    }

    public function delete($id) {
        $product = Product::findOrFail($id);
        $data = [
            "message" => 'Xóa sản phẩm thành công',
            "id" => $product->id
        ];
        return response()->json($data);
        // $product->delete();
        return redirect()->route('product.index')->with('success', 'Delete Succesfully');
    }



    public function add() {
        return view('pages.products.add');
    }

    public function store(StoreRequest $req)
    {
        // dd($req->all());
        $product = [
            'name' => $req->name,
            'image' => $this->getMainImage($req->file('image')),
            'images' => $this->getSubImage($req->file('image_list')),
            'description' => $req->description,
            'quantity' => $req->quantity,
            'price' => $req->price ?? 0,
            'price_sale' => $req->price_sale ?? 0,
            'view' => 0,
            'unit_id' => json_encode($req->size, true),
            'color_id' => json_encode($req->favcolor, true),
            'category_id' => $req->category_id,
            'state_id' => $req->status ?? 2,
        ];
        if (Product::create($product)) {
            return redirect()->route('product.index')->with('success', __('Create new product successfully.'));
        } else {
            return redirect()->route('product.index')->with('error', __('Have error when create new product, try again.'));
        }
    }

    public function getMainImage($file)
    {
        $fullName = $file->getClientOriginalName();
        $extension = $file->extension();
        $onlyName = explode('.'.$extension, $fullName);
        $newName = $onlyName[0] . "-main-" . strtotime(date('Y-m-d H:i:s')). "." . $extension;

        return $file->storeAs('public/products', $newName);
    }

    public function getSubImage($files)
    {
        $imgArr = [];
        foreach ($files as $item) {
            $fullName = $item->getClientOriginalName();
            $extension = $item->extension();
            $onlyName = explode('.'.$extension, $fullName);
            $newName = $onlyName[0] . "-sub-" . strtotime(date('Y-m-d H:i:s')). "." . $extension;
            $imgArr[] = $item->storeAs('public/products', $newName);
        }

        return json_encode($imgArr, true);
    }
}
