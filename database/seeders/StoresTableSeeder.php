<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Store;
class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Store::truncate();
        factory(App\Store::class,20)->create();
    }
}
