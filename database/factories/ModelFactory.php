<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
   /* return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];*/

    // 집계 함수를 이용해 id의 최솟값과 최댓값을 가져옴

    $min = App\User::min('id');
    $max = App\User::max('id');

    return [
        'user_id' => $faker->numberBetween($min,$max),
        'name' => substr($faker->word, 0, 20),
        'description' => $faker->sentence,
        'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),
        'update_at' => $faker->dateTimeBetween($startDate = '-1 yers', $endDate = 'now'),
    ];
});

$factory->define(App\Task::class, function (Faker\Generator $faker){
    $min = App\Project::mind('id');
    $max = App\Project::max('id');

    $dt = $faker->dateTimeBetween($startDate = '-1 months', $endDate= 'now');

    return [
        'project_id' => $faker->numberBetween($min,$max),
        'name' => substr($faker->sentence,0,20),
        'description' => $faker->text,
        'due_date' => $faker->dateTimeBetween($startDate = '-1 months', $endDate = '+1 months'),
        'created_at' => $dt,
        'update_at' => $dt,
    ];
});
