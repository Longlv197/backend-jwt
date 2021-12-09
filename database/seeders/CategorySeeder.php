<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'categoryName' => 'Nam',
            'parentID' => null,
            'status' => 1,
        ]);
        Category::create([
            'categoryName' => 'Nữ',
            'parentID' => null,
            'status' => 1,
        ]);
    }
}
