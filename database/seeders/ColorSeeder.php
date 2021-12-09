<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::create([
            "colorName" => "Đen",
            "colorCode" => "#000"
        ]);
        Color::create([
            "colorName" => "Trắng",
            "colorCode" => "#fff"
        ]);
    }
}
