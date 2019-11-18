<?php

/**var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use App\Book;
use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
	'name'=> $faker->name,
	'code'=> Str::random(10),
	'num' => $faker->numberBetween(1,10000)
    ];
});
