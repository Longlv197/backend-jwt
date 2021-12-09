<?php

namespace Database\Seeders;

use App\Models\OrderProgress;
use Illuminate\Database\Seeder;

class OrderProgressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderProgress::create([
            'status' => -1,
            'progressName' => 'Đang trong giỏ hàng'
        ]);
        OrderProgress::create([
            'status' => 0,
            'progressName' => 'Tất cả sản phẩm'
        ]);
        OrderProgress::create([
            'status' => 1,
            'progressName' => 'Đang đợi xác nhận'
        ]);
        OrderProgress::create([
            'status' => 2,
            'progressName' => 'Đang được lấy hàng'
        ]);
        OrderProgress::create([
            'status' => 3,
            'progressName' => 'Đang vận chuyển'
        ]);
        OrderProgress::create([
            'status' => 4,
            'progressName' => 'Đã giao'
        ]);
        OrderProgress::create([
            'status' => 5,
            'progressName' => 'Đã bị hủy'
        ]);
    }
}
