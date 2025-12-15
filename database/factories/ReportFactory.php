<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReportFactory extends Factory
{
    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        return [
<<<<<<< HEAD
            'number' => $faker -> numerify('aaa-###'),
            'description' => $faker -> paragraph,
            'created_at' => $faker -> dateTimeBetween('-1 week', 'now'),
=======
            'number' => $faker->unique()->numerify('aaa-###'),
            'description' => $faker->paragraph,
            'created_at' => $faker->dateTimeBetween('-1 week', 'now'),
>>>>>>> f90c7e098f3444578514822755aa4928ea8c0a4e
            'status_id' => 1
        ];
    }
}