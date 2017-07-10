<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            ['key' => 'ORGANIZATION_NAME', 'name' => 'Название организации', 'value' => 'ОАО Стрит'],
            ['key' =>'DIRECTOR', 'name' => 'Директор', 'value' => 'Иванов Иван Иванович'],
            ['key' => 'MAX_HOLIDAY_DAYS', 'name' => 'Максимальная длительность отпуска', 'value' => '30'],
            ['key' => 'MIN_HOLIDAY_DAYS', 'name' => 'Минимальная длительность отпуска', 'value' => '5']
        ];

        \App\Models\Setting::truncate();

        \App\Models\Setting::insert($settings); 
    }
}