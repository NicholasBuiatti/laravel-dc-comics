<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//IMPORTO IL MODELLO
use App\Models\Comic;
//IMPORTO FAKER
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //POPOLO LA TABELLA CON QUESTO SEEDER
        $newComic = new Comic();

        $newComic->title = "Sofia";
        $newComic->descritpion = "Lorem";
        $newComic->thumb = "ciao";
        $newComic->price = "12.99";
        $newComic->series = "salve";
        $newComic->type = "giallo";
        $newComic->save();
    }
}
