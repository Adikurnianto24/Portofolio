<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::create([
            'title' => 'Recyclerview App',
            'description' => 'Description for Recyclerview App',
            'image' => 'images/portfolio-1.jpg',
            'category' => 'mobile',
        ]);

        Portfolio::create([
            'title' => 'Github App',
            'description' => 'Description for Github App',
            'image' => 'images/portfolio-2.jpg',
            'category' => 'mobile',
        ]);

        Portfolio::create([
            'title' => 'Cancer Scan',
            'description' => 'Description for Cancer Scan',
            'image' => 'images/portfolio-3.jpg',
            'category' => 'mobile',
        ]);

        Portfolio::create([
            'title' => 'Story Scape',
            'description' => 'Description for Story Scape',
            'image' => 'images/portfolio-5.jpg',
            'category' => 'mobile',
        ]);

        Portfolio::create([
            'title' => 'Rukun Warga Bersatu',
            'description' => 'Description for Rukun Warga Bersatu',
            'image' => 'images/portfolio-6.jpg',
            'category' => 'community',
        ]);

        // Tambahkan data dummy lainnya sesuai kebutuhan
    }
}