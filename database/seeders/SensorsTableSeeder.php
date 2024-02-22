<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Sensor; //ORM eloquent orm model clase que mapea a la tabla

class SensorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=1; $i<10; $i++){
            Sensor::create([
                'name' => $faker -> unique()->userName,
                'type' => $faker->randomElement(['Temp', 'Hum', 'Pres']),
                'value' => $faker->randomFloat(2,0,100),
                'date' => $faker->dateTimeThisYear(),
                'user_id' => rand(1,10),
    
            ]);
        }
    }
}
