<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(
            [
                'name' => 'Web Desing',
                'slug' => Str::slug('Web Desing')
            ],
            [
                'name' => 'Web Dev',
                'slug' => Str::slug('Web Dev')
            ],
            [
                'name' => 'Programming',
                'slug' => Str::slug('Programming')
            ],
            [
                'name' => 'Mobille Apps',
                'slug' => Str::slug('Mobille Apps')
            ],
            [
                'name' => 'Flliter',
                'slug' => Str::slug('Flliter')
            ],
        );
    }
}
