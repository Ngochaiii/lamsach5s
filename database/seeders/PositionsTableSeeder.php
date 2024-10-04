<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Position::create([
            'id' => 1,
            'name' => 'Dịch vụ',
            'position' => Position::TYPE_SERVICE
        ]);

        Position::create([
            'id' => 2,
            'name' => 'Blog làm sạch',
            'position' => Position::TYPE_CLEANING_BLOG
        ]);

        Position::create([
            'id' => 3,
            'name' => 'Tuyển dụng',
            'position' => Position::TYPE_RECRUITMENT
        ]);

        Position::create([
            'id' => 4,
            'name' => 'Cam kết',
            'position' => Position::TYPE_COMMITMENT
        ]);

        Position::create([
            'id' => 5,
            'name' => 'Giới thiệu',
            'position' => Position::TYPE_INTRODUCE
        ]);
    }
}
