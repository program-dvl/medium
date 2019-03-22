<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
	$factory->define(App\User::class, function (Faker $faker) {
	    return [
	        'name' => 'admin',
	        'email' => 'mindvalley@admin.com',
	        'password' => '$2y$10$IhLGW5lclsoml3EB5JWly.PjQqACld371ikbSregp0B35aPPh8I4C',
	    ];
	});

	$factory->define(App\Post::class, function (Faker $faker) {
		$title = $faker->name;
	    return [
	        'title' => $title,
	        'body' => $faker->randomHtml(6,10),
	        'slug' => slugify($title)
	    ];
	});	

	function slugify($text)
	{
	  // replace non letter or digits by -
	  $text = preg_replace('~[^\pL\d]+~u', '-', $text);

	  // transliterate
	  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

	  // remove unwanted characters
	  $text = preg_replace('~[^-\w]+~', '', $text);

	  // trim
	  $text = trim($text, '-');

	  // remove duplicate -
	  $text = preg_replace('~-+~', '-', $text);

	  // lowercase
	  $text = strtolower($text);

	  if (empty($text)) {
	    return 'n-a';
	  }

	  return $text;
	}
