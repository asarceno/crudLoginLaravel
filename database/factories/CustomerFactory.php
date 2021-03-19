<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;
use App\Models\Customer;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name'          => $faker->name,
        'address'       => $faker->address,
        'email'         => $faker->email,
        'contact_phone' => $faker->phoneNumber,
        'taxes_id'      => $faker->randomNumber(8)

    ];
});
