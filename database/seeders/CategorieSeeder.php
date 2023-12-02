<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorie::create(['name'=>'Book 1']);
        Categorie::create(['name'=>'Book 2']);
        Categorie::create(['name'=>'Book 3']);
        Categorie::create(['name'=>'Book 4']);
        Categorie::create(['name'=>'Book 5']);

    }
}
