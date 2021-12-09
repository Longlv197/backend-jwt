<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create([
            "stageName" => "Đang bán"
        ]);
        State::create([
            "stageName" => "Ngừng kinh doanh"
        ]);
        State::create([
            "stageName" => "Ẩn sản phẩm"
        ]);
        State::create([
            "stageName" => "Hết hàng"
        ]);
    }
}
