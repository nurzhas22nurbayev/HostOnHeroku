<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Article::class, 100)->create(); incorrect one
        \App\Models\Article::factory()->count(100)->create(); 
    }
}
