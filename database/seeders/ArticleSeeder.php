<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::query()->truncate();
        $articles = [
            [
                'title' => 'Lorem ipsum dolor sit amet'
            ],
            [
                'title' => 'Onsectetur adipiscing elit'
            ],
            [
                'title' => 'Sed do eiusmod tempor incididunt ut'
            ],
            [
                'title' => 'Ut enim ad minim veniam'
            ],
            [
                'title' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum'
            ],
            [
                'title' => 'Excepteur sint occaecat cupidatat non proident'
            ],
            [
                'title' => 'Sed ut perspiciatis unde omnis iste natus error'
            ]
        ];

        foreach ($articles as $key => $item) {
            Article::create($item); 
        }
    }
}
