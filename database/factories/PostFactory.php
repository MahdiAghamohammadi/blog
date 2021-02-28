<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;
use Carbon\Carbon;


$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return factory(User::class)->create()->id;
        },
        'title' => $faker->text,
        'body' => $faker->text,
        'started_at' => Carbon::now(),
    ];
});
