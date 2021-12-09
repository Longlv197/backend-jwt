<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::create([
            "sizeName" => "S"
        ]);
        Size::create([
            "sizeName" => "M"
        ]);
        Size::create([
            "sizeName" => "L"
        ]);
        Size::create([
            "sizeName" => "XL"
        ]);
        Size::create([
            "sizeName" => "XXL"
        ]);
    }
}
