<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i<50; $i++) {
        $train = new Train;

        $train->azienda = $faker->company();
        $train->stazione_partenza = $faker->city();
        $train->stazione_arrivo = $faker->city();
        $train->orario_partenza = $faker->date() . " " . $faker->time();
        $train->orario_arrivo = $faker->date() . " " . $faker->time();
        $codice_treno = "";
        for ($x = 0; $x < 6; $x++) {
            $codice_treno .= $faker->randomLetter();
        }
        $train->codice_treno = $codice_treno;
        $train->numero_carrozza = $faker->numberBetween(1,18);
        $train->prezzo_biglietto = $faker->numberBetween(1,180);
        $train->save();


}
}
}