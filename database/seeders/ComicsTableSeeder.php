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
        for ($i = 0; $i < 10; $i++) {
            $newComic = new Comic();

            $newComic->title = $faker->name();
            $newComic->descritpion = $faker->paragraph(3);
            $newComic->thumb = "ciao";
            $newComic->price = "12.99";
            $newComic->series = "salve";
            $newComic->type = $faker->name();
            $newComic->save();
        }
    }
}
