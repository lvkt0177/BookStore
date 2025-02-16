<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::insert(
            [
                [
                    'title' => 'The Great Gatsby',
                    'author' => 'F. Scott Fitzgerald',
                    'price' => 150000,
                    'image' => 'gatsby.jpg',
                    'category_id' => 1,
                ],
                [
                    'title' => 'To Kill a Mockingbird',
                    'author' => 'Harper Lee',
                    'price' => 120000,
                    'image' => 'mockingbird.jpg',
                    'category_id' => 2,
                ],
                [
                    'title' => '1984',
                    'author' => 'George Orwell',
                    'price' => 135000,
                    'image' => '1984.jpg',
                    'category_id' => 3,
                ],
                [
                    'title' => 'Moby-Dick',
                    'author' => 'Herman Melville',
                    'price' => 180000,
                    'image' => 'moby_dick.jpg',
                    'category_id' => 1,
                ],
                [
                    'title' => 'Pride and Prejudice',
                    'author' => 'Jane Austen',
                    'price' => 140000,
                    'image' => 'pride_prejudice.jpg',
                    'category_id' => 2,
                ],
                [
                    'title' => 'The Catcher in the Rye',
                    'author' => 'J.D. Salinger',
                    'price' => 125000,
                    'image' => 'catcher_rye.jpg',
                    'category_id' => 3,
                ],
                [
                    'title' => 'The Lord of the Rings',
                    'author' => 'J.R.R. Tolkien',
                    'price' => 250000,
                    'image' => 'lotr.jpg',
                    'category_id' => 4,
                ],
                [
                    'title' => 'Harry Potter and the Sorcerer’s Stone',
                    'author' => 'J.K. Rowling',
                    'price' => 220000,
                    'image' => 'harry_potter.jpg',
                    'category_id' => 4,
                ],
                [
                    'title' => 'The Hobbit',
                    'author' => 'J.R.R. Tolkien',
                    'price' => 200000,
                    'image' => 'hobbit.jpg',
                    'category_id' => 4,
                ],
                [
                    'title' => 'War and Peace',
                    'author' => 'Leo Tolstoy',
                    'price' => 300000,
                    'image' => 'war_peace.jpg',
                    'category_id' => 5,
                ],
            ]
            );
    }
}
