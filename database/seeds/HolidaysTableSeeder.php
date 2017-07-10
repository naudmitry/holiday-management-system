<?php

use Illuminate\Database\Seeder;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Holiday::truncate();
        
        factory(App\Models\Holiday::class, 100)->create();
    }
}