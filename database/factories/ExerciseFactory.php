<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Exercise;
use Faker\Generator as Faker;

$factory->define(Exercise::class, function (Faker $faker) {
    return [
            'title'=> $faker->name,
            'description' => $faker->sentence,
            'img' => $faker->randomElement(
                ['https://firebasestorage.googleapis.com/v0/b/tutoriales-e4830.appspot.com/o/exercise.png?alt=media&token=b9c4b236-16a9-4a56-bba2-90c9660a0f06',
                'https://firebasestorage.googleapis.com/v0/b/tutoriales-e4830.appspot.com/o/exercises02.png?alt=media&token=a5d55381-5f3e-4f25-92dd-560775f96aa2',
                'https://firebasestorage.googleapis.com/v0/b/tutoriales-e4830.appspot.com/o/exercise03.png?alt=media&token=8e5301c0-151e-415d-bd2c-655235d9c916']),
            'leftColor' => $faker->randomElement(['#17EAD9','#4A00E0','#FAD961']) ,
            'rightColor' =>$faker->randomElement(['#8E2DE2','#617BFB','#F76B1C']),
        ];
});
