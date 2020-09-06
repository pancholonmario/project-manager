<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        //
        'id_city' => rand(1, 80),
        'id_company' => rand(1, 20),
        'id_user' => rand(1, 3),
        'budget' => rand(15000, 90000),
        //El faker sentence le estoy indicando que cree estrictamente 2 palabras colocando el 2 y el false
        'name' => $faker->sentence(2, false),
        'execution_date' => $faker->date(),
        'is_active' => $faker->boolean()

    ];
});
