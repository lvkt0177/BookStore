<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::insert(
            [
                ['name' => 'Fiction','image'=> 'fiction.jpg'],
                ['name' => 'Non-fiction','image'=> 'Non-fiction.jpg'],
                ['name' => 'Science','image'=> 'Science.jpg'],
                ['name' => 'Technology','image'=> 'technology.jpg'],
                ['name' => 'History','image'=> 'History.jpg'],
                ['name' => 'Biography','image'=> 'Biography.jpg'],
                ['name' => 'Fantasy','image'=> 'Fantasy.jpg'],
                ['name' => 'Mystery','image'=> 'Mystery.jpg'],
                ['name' => 'Horror','image'=> 'Horror.jpeg'],
                ['name' => 'Romance','image'=> 'Romance.jpg'],
            ]
        );
    }
}
