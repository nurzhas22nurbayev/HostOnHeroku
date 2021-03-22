<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    //protected $model = Article::class;    incorrect one
    protected $model = \App\Models\Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            /*
            'title'=>$faker->text(50),
            'body'=>$faker->text(200)
            */ // might be wrong

            'title' => $this->faker->text(50),
            'body' => $this->faker->text(200)
        ];
    }
}
/*  Teacher's code
$factory->define(App\Article::class, function(Faker $faker
    ){
        return [
            'title'=>$faker->text(50),
            'body'=>$faker->text(200)
        ];
    });
*/