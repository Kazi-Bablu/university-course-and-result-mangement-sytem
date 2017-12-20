<?php

$factory->define(App\Course::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'code' => $faker->randomDigit(),
        'name' => $faker->Name  ,
        'credit'=>$faker->randomFloat(0.5-5.0),
        'description'=>$faker->paragraph,
        'department'=>$faker->Name,
        'semester'=>$faker->numberBetween(1-12),

    ];
});

?>