<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Product;


$factory->define(Product::class, function (Faker $faker) {
    return [
        'barcode'           => $faker->ean13, //barcode
        'code'              => "GUA-".$faker->randomNumber(4),
        'name'              => $faker->name,
        'price'             => $faker->randomFloat(2,20,100),
        'sales_price'       => $faker->randomFloat(2,30,250),
    ];
});
