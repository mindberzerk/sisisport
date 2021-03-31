<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('nowplayings')->insert([
                'GameId' => $faker->unique(20)->randomDigit,
                'team_a' => $faker->unique()->colorName,
                'team_b' => $faker->unique()->colorName,
                /*'odds' => $faker->randomElement(['1'=>'', 'x'=>'', '2'=>'']),*/
                /*'odds' => array('1'=>'2.0','2'=>'1.0','3'=>'2.5'),*/
                'odds' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 9),
                'league' => $faker->unique()->monthName,
                'tournament' => $faker->domainName,
                'country' => $faker->country,
                'date' => $faker->date(),
                'time' => $faker->time(),
            ]);
        }

        foreach (range(1, 20) as $index) {
            DB::table('tournaments')->insert([
                'tournament_id' => $faker->unique(20)->randomDigit,
                'name' => $faker->safeColorName,
                'country' => $faker->country,
                'league' => $faker->unique()->monthName,
            ]);
        }

        foreach (range(1, 20) as $index) {
            DB::table('topteams')->insert([
                'team_id' => $faker->unique(20)->randomDigit,
                'team' => $faker->colorName,
                'league' => $faker->unique()->monthName,
                'country' => $faker->monthName,
                'pts' => $faker->randomDigit,
            ]);
        }
    }
}
