<?php

namespace Database\Factories;

use App\Models\category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCategory>
 */
class subcatergoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categories = category::factory(10)->create();
        $subcategory_name = $this->faker->name;
        return [
            'category_id'=>1,
            'name'=>$subcategory_name,
            'slug'=>Str::slug($subcategory_name),
            'is_active'=>1
        ];
    }
}
