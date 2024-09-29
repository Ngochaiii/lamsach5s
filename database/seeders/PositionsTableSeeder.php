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
    }
}
