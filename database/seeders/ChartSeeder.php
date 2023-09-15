<?php

namespace Database\Seeders;

use App\Models\Association;
use App\Models\Image;
use App\Models\Plan;
use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $association = Association::query()->create([
            'primary_title' => 'chart',
            'title' => 'الهيكل التنظيمي',
        ]);

        $images = [
            [
                'association_id' => $association->id,
                'path' => '',
            ],
        ];

        foreach ($images as $image) {
            Image::query()->create($image);
        }
    }
}
