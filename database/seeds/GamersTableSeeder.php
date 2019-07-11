<?php

use App\Models\Gamer;
use Illuminate\Database\Seeder;

class GamersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Gamer::class)->create([
            'name' => 'Elie Andraos',
            'nickname' => 'Andzilla',
            'avatar' => '',
            'steam_id' => '',
        ]);

        factory(Gamer::class)->create([
            'name' => 'Moe Khraiss',
            'nickname' => 'Toxic Mozzi',
            'avatar' => '',
            'steam_id' => '',
        ]);

        factory(Gamer::class)->create([
            'name' => 'Alain Chahine',
            'nickname' => 'Cobrazilla',
            'avatar' => '',
            'steam_id' => '',
        ]);

        factory(Gamer::class)->create([
            'name' => 'Anthony Korkomaz',
            'nickname' => 'AntounZeus',
            'avatar' => '',
            'steam_id' => '',
        ]);

        factory(Gamer::class)->create([
            'name' => 'Daniel Bou Maachar',
            'nickname' => 'Toxic Danzi',
            'avatar' => '',
            'steam_id' => '',
        ]);

        factory(Gamer::class)->create([
            'name' => 'Elie-Georges Hatem',
            'nickname' => 'EGG',
            'avatar' => '',
            'steam_id' => '',
        ]);

        factory(Gamer::class)->create([
            'name' => 'Elie Harb',
            'nickname' => '@sh@',
            'avatar' => '',
            'steam_id' => '',
        ]);

        factory(Gamer::class)->create([
            'name' => 'Elie Tarabay',
            'nickname' => 'Turbzy',
            'avatar' => '',
            'steam_id' => '',
        ]);

        factory(Gamer::class)->create([
            'name' => 'Jean-Louis Jammous',
            'nickname' => 'J-Brother',
            'avatar' => '',
            'steam_id' => '',
        ]);

        factory(Gamer::class)->create([
            'name' => 'Mario Khoury',
            'nickname' => 'Ninja-Brother',
            'avatar' => '',
            'steam_id' => '',
        ]);

        factory(Gamer::class)->create([
            'name' => 'Pascal Achkar',
            'nickname' => 'pacozTheWize',
            'avatar' => '',
            'steam_id' => '',
        ]);
    }
}
