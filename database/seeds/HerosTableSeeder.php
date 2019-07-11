<?php

use App\Models\Hero;
use Illuminate\Database\Seeder;

class HerosTableSeeder extends Seeder
{
    // @asha: All list of heroes are available here https://dota2.gamepedia.com/Category:Hero_icons
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Hero::class)->create([
            'name' => 'Abaddon',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/2/26/Abaddon_icon.png',
        ]);

        // @asha: uncomment the below 3 lines and replace with new values
        // do it repeatedly till we have all heroes :D

//        factory(Hero::class)->create([
//            'name' => 'Abaddon',
//            'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
//        ]);
    }
}
