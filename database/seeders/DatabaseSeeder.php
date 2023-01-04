<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\User;
use App\Models\Author;
use App\Models\BookType;
use App\Models\category;
use App\Models\Publisher;
use Illuminate\Support\Str;
use App\Models\subcatergory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     $this->call([
    UserSeeder::class,
    CategorySeeder::class,
    SubCategorySeeder::class,
     ]);
    // $categories = Category::factory(10)->create();

    // $subcategories = subcatergory::factory(10)->make()->each(function ($subcategory)use($categories){
    //      $subcategory->category_id = $categories->random()->id;
    //      $subcategory->save();
    //     });

    }
}
