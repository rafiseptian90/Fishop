<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Web Application'],
            ['name' => 'Mobile Application'],
            ['name' => 'Desktop Application'],
        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
