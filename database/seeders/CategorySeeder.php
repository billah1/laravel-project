<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seedCount =(int)$this->command->ask('how many fake data do you want me to seed?',20);

        $categories = category::factory($seedCount)->create();
    }
}
