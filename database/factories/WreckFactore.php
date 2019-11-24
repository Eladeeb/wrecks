<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Wrecks;
use Faker\Generator as Faker;

$factory->define(Wrecks::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'wrecks_count' => $faker->numberBetween(2,250),
        'image_url' =>  $faker->imageUrl(),

    ];
});
