<?php

namespace Database\Seeders;

use App\Models\Element;
use Illuminate\Database\Seeder;

class ElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //刪除既有資料
        Element::truncate();
        //建立商品資料
        Element::factory()->times(10)->create();
    }
}
