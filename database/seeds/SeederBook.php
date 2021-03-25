<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Book;

class SeederBook extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
            $newBook = new Book();
            $newBook->slang = $faker->name;
            $newBook->tipologia = $faker->name;
            $newBook->descrizione = $faker->text;
            $newBook->prodotto = $faker->name;
            $newBook->save();
        }
    }
}
