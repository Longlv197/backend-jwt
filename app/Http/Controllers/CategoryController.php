<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        // return $products;
        return view('pages.categories.index')
                ->with(['categories' => $categories]);
    }

    public function create() {
        $categories = Category::all();
        return view('pages.categories.create')
                ->with(['categories' => $categories]);
    }

    public function edit($id) {
        $categories = Category::where('id', $id)->first();
        return view('pages.categories.edit')
                ->with(['categories' => $categories]);
    }

    public function update(StoreCategoryRequest $req, $id) {
        dd($req);
        return;
    }

    public function store(StoreCategoryRequest $req){
        $categories = [
            'categoryName' => $req->name,
            'parentID' => $req->category_id,
            'status' => $req->status ?? null,
        ];

        if (Category::create($categories)) {
            return redirect()->route('category.index')->with(['success', __('Create new product successfully.'), ]);
        } else {
            return redirect()->route('category.index')->with('error', __('Have error when create new product, try again.'));
        }
    }

    public function save(Request $req){
        return dd($req);
    }
}
