<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::where('name','Book 1')->first()->books()->createMany([
            [
                'name'=>'Book abc',
                'description'=>'sách cũng dược như không hay lắm',
                'publish_date'=>2-2-2022,
                'price'=>90000,
                'quality'=>5
            ],
            [
                'name'=>'Book abc',
                'description'=>'sách cũng dược như không hay lắm',
                'publish_date'=>2-2-2022,
                'price'=>90000,
                'quality'=>5
            ],
            [
                'name'=>'Book abc',
                'description'=>'sách cũng dược như không hay lắm',
                'publish_date'=>2-2-2022,
                'price'=>90000,
                'quality'=>5
            ],
            [
                'name'=>'Book abc',
                'description'=>'sách cũng dược như không hay lắm',
                'publish_date'=>2-2-2022,
                'price'=>90000,
                'quality'=>5
            ],
            [
                'name'=>'Book abc',
                'description'=>'sách cũng dược như không hay lắm',
                'publish_date'=>2-2-2022,
                'price'=>90000,
                'quality'=>5
            ]
        ]);
    }
}
