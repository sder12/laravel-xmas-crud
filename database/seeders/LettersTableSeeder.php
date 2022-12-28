<?php

namespace Database\Seeders;

use App\Models\Letter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class LettersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 15; $i++) {
            $newLetter = new Letter();
            $newLetter->name = $faker->firstName();
            $newLetter->surname = $faker->lastName();
            $newLetter->address = $faker->address();
            $newLetter->city = $faker->city();
            $newLetter->arrival_date = $faker->dateTimeInInterval('-1 week', '+2 months');;
            $newLetter->present =  $faker->sentence(3);
            $newLetter->letter_text = $faker->paragraph(4);
            $newLetter->goodness_rating = $faker->numberBetween(1, 5);
            $newLetter->present_was_delivered = $faker->numberBetween(0, 1);
            $newLetter->save();
        }
    }
}
