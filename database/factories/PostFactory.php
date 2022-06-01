<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'nom_name' =>$this->faker->sentences,
        'nomc_name'=>$this ->faker->sentences,
        'date_name'=>$this ->faker->paragraph,
        'mail_name'=>$this ->faker->paragraph,
        'mdp_name'=>$this ->faker->paragraph,

        'created_at' => now()
    ];
});
