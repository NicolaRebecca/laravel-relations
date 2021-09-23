<?php

use Illuminate\Database\Seeder;
use App\Article;
use App\Author;
use Faker\Generator as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
            $article = new Article();
            $article-> title = $faker-> words(3, true);
            $article-> article = $faker-> paragraph(5);
            $article -> picture = $faker -> imageUrl(600,400, 'article', true);
            $article -> save();
        }

        for ($i = 0; $i < 10; $i++){
            $author = new Author();
            $author -> name = $faker-> words(2, true);
            $author -> surname = $faker-> words(2, true);
            $author -> age = $faker -> randomFloat (2);
            $author -> save();
        }
    }
}
