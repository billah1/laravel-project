<?php

namespace Database\Seeders;

use App\Models\subcatergory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seedCount =(int)$this->command->ask('how many fake data do you want me to seed?',20);
        subcatergory::factory($seedCount)->create();
    }
}
