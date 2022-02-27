<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert(
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@luzes.pt',
                'phone' => Str::random(10),
                'country' => Str::random(10),
            ]
        );
    }
}