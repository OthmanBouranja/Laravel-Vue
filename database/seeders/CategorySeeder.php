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
            ]);
            Category::create(
            [
                'name' => 'Web Dev',
                'slug' => Str::slug('Web Dev')
            ]);
            Category::create(
            [
                'name' => 'Programming',
                'slug' => Str::slug('Programming')
            ]);
            Category::create(
            [
                'name' => 'Mobille Apps',
                'slug' => Str::slug('Mobille Apps')
            ]);
            Category::create(
            [
                'name' => 'Flliter',
                'slug' => Str::slug('Flliter')
            ]);
            
    }
}
