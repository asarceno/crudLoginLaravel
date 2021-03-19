<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Product;
use App\Models\Customer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // $this->call(UserSeeder::class);


        factory( User::class,1)->create([
            'name'              => 'asarceno',
            'email'             => 'asarceno@mintrabajo.gob.gt',
            'email_verified_at' => now(),
            'password'          => bcrypt('12345678')
//            'remember_token'    => Str::random(10)

        ]);

        factory(User::class, 100)->create();
        factory(Product::class, 100)->create();
        factory(Customer::class, 100)->create();
    }
}
