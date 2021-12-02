<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $req)
    {
        // dd($req->all());
        $product = [
            'name' => $req->name,
            'image' => $this->getMainImage($req->file('image')),
            'images' => $this->getSubImage($req->file('image_list')),
            'description' => $req->description,
            'price' => $req->price ?? 0,
            'price_sale' => $req->price_sale ?? 0,
            'view' => 0,
            'unit_id' => json_encode($req->size, true),
            'color_id' => json_encode($req->favcolor, true),
            'category_id' => $req->category_id,
            'state_id' => $req->status ?? 2,
        ];
        if (Product::create($product)) {
            return redirect()->route('list')->with('success', __('Create new product successfully.'));
        } else {
            return redirect()->route('list')->with('error', __('Have error when create new product, try again.'));
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
