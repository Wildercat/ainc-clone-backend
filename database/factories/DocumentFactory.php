<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Document;
use Faker\Generator as Faker;

$factory->define(Document::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomElement([1,2]), // ALWAYS owned by the first user
        'title' => $faker->words(2, true),
        'content' => $faker->paragraph()
    ];
});
