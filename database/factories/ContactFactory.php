<?php          

use Faker\Generator as Faker;          

$factory->define(App\Contact::class, function (Faker $faker) {         
    // generate 3 random colors         
    $colors = collect(range(1, 3))->map(function() use ($faker) { return $faker->colorName; })->toArray();              
    
    return [             
        'name' => $faker->name, 
        'email' => $faker->email,               
        'phone' => $faker->e164PhoneNumber,
        'country' => $faker->country,             
        'favorites' => ['colors' => $colors],         
    ];     
});