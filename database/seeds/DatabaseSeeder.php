<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $faker = Faker::create('id_ID');


        for($i=0;$i<20;$i++){
        	User::create([
                'name' => $faker->name,
        		'email' => $faker->email,
        		'job' => $faker->jobTitle,
        		'age' => $faker->numberBetween(25,40),
                'address' => $faker->address,
            ]);
        }
    }
}
