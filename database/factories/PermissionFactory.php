<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Permission;
use Faker\Generator as Faker;

$factory->define(Permission::class, function (Faker $faker) {
    $arr = [1,2];
    $role = $faker->randomElement($arr);
    return [
        'user_id' => factory(App\User::class),
        'document_id' => factory(App\Document::class),
        'role_id' => $role,
    ];
});
