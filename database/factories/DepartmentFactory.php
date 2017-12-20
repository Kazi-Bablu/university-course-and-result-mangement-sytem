<?php

$factory->define(App\Departments::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'code' => $faker->randomDigit(),
        'name' => $faker->lastName  ,

    ];
});

?>