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

        factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/2/26/Abaddon_icon.png',
       ]);
          factory(Hero::class)->create([
         'name' => 'Alchemist',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/f/fe/Alchemist_icon.png?version=a7c13bea85d68e59c5400c1bd99d1cfb',
       ]);
          factory(Hero::class)->create([
         'name' => 'Ancient Apparition',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/6/67/Ancient_Apparition_icon.png?version=4ca8ab4fcec9d410c544a9938b521d50',
       ]);
          factory(Hero::class)->create([
         'name' => 'Anti-Mage',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/8/8e/Anti-Mage_icon.png?version=f55b1d31df2c842ebd3e6121f4dc513d',
       ]);
          factory(Hero::class)->create([
         'name' => 'Arc-Warden',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/0/07/Arc_Warden_icon.png?version=7ef22642fb6a42d09bc39601f19818ab',
       ]);
          factory(Hero::class)->create([
         'name' => 'Axe',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/2/23/Axe_icon.png?version=e684255614f57796dc1a65df620c5191',
       ]);
          factory(Hero::class)->create([
         'name' => 'Bane',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/c/c3/Bane_icon.png?version=377fefe5af50310f8cff4fe94a093261',
       ]);
          factory(Hero::class)->create([
         'name' => 'Batrider',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/f/f2/Batrider_icon.png?version=9bcaca9957e859c2aa8656b2dad2ef1c',
       ]);
          factory(Hero::class)->create([
         'name' => 'BeastMaster',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/d/d9/Beastmaster_icon.png?version=5aa86ba5bbaca098fe5f9e86bbe132f4',
       ]);  factory(Hero::class)->create([
         'name' => 'BloodSeeker',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/5/56/Bloodseeker_icon.png?version=13fa81ed7d1bf313049de902c91def21',
       ]);
          factory(Hero::class)->create([
         'name' => 'Bounty-Hunter',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/a/a6/Bounty_Hunter_icon.png?version=4a8be8d7f90be0936164013d63f17670',
       ]);
          factory(Hero::class)->create([
         'name' => 'Brewmaster',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/1/1e/Brewmaster_icon.png?version=c0906f71595d5e6917c14b54cd1821d3',
       ]);
          factory(Hero::class)->create([
         'name' => 'Bristleback',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/4/4d/Bristleback_icon.png?version=77ce3fefc668df38a8c90268dc5bcd8b',
       ]);
          factory(Hero::class)->create([
         'name' => 'Broodmother',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/d/df/Broodmother_icon.png?version=e5fc8a51578011186b3517e1b64cc72a',
       ]);
          factory(Hero::class)->create([
         'name' => 'Centaur-Warrunner',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/e/ed/Centaur_Warrunner_icon.png?version=0ebbf51ef4b45ddd509450ac454a0dfa',
       ]);
          factory(Hero::class)->create([
         'name' => 'Chaos-Knight',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/f/fe/Chaos_Knight_icon.png?version=b321a84d401423e904159e6a380abe12',
       ]);  factory(Hero::class)->create([
         'name' => 'Chen',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/6/61/Chen_icon.png?version=0f827938b63d647d266ce8f613c832ed',
       ]);
          factory(Hero::class)->create([
         'name' => 'Clinkz',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/c/cb/Clinkz_icon.png?version=1764f0e7f6b084058f8e417891e3135e',
       ]);
          factory(Hero::class)->create([
         'name' => 'ClockWerk',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/d/d8/Clockwerk_icon.png?version=079dcb0e7d50a1aba6c833753da60bcf',
       ]);
          factory(Hero::class)->create([
         'name' => 'Crystal-Maiden',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/2/27/Crystal_Maiden_icon.png?version=1fe64eb25bb59c8f5f9b916a8ee5f378',
       ]);
          factory(Hero::class)->create([
         'name' => 'Dark-Seer',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/c/c5/Dark_Seer_icon.png?version=9b81b657518099522d6a36b5cdd51e7e',
       ]);
          factory(Hero::class)->create([
         'name' => 'Dark-Willow',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/3/3c/Dark_Willow_icon.png?version=a4ef3ff9c27f1f5510f20e8dec1f15a9',
       ]);
          factory(Hero::class)->create([
         'name' => 'Dazzle',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/e/e6/Dazzle_icon.png?version=12e839c1ea458185e87dcf7a7c02c0e6',
       ]);
          factory(Hero::class)->create([
         'name' => 'Death-Prophet',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/d/d7/Death_Prophet_icon.png?version=4010d86b2e5761cac55c24b259696f34',
       ]);
          factory(Hero::class)->create([
         'name' => 'Disruptor',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/9/97/Disruptor_icon.png?version=075011a1621b2d1750e4919e09c25b0e',
       ]);
          factory(Hero::class)->create([
         'name' => 'Doom',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/4/40/Doom_icon.png?version=2240f491fb558e9ea1b0619b53517c82',
       ]);
          factory(Hero::class)->create([
         'name' => 'Dragon-Knight',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/5/59/Dragon_Knight_icon.png?version=8f081d5debb0efc6f95282c7a1c52c68',
       ]);
          factory(Hero::class)->create([
         'name' => 'Drow-Ranger',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/8/80/Drow_Ranger_icon.png?version=53f9bde6e8f3c953a752c1358175309a',
       ]);
          factory(Hero::class)->create([
         'name' => 'Earth-Spirit',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/b/be/Earth_Spirit_icon.png?version=6358ee2b1e31c856ff16cb7fb5e23f46',
       ]);
          factory(Hero::class)->create([
         'name' => 'Earth Shaker',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/a/a5/Earthshaker_icon.png?version=7f16a63e5ed6a7ec7a3889dd4aea354d',
       ]);
          factory(Hero::class)->create([
         'name' => 'Elder Titan',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/1/1a/Elder_Titan_icon.png?version=e2649f981d5f6dcc1d16bbaefadc2324',
       ]);  factory(Hero::class)->create([
         'name' => 'Ember Spirit',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/9/91/Ember_Spirit_icon.png?version=d457d8fe38d1aae31d81f6e177d5f802',
       ]);
          factory(Hero::class)->create([
         'name' => 'Enchantress',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/4/41/Enchantress_icon.png?version=098b08695e2d972fb667dd4509e74ed5',
       ]);
          factory(Hero::class)->create([
         'name' => 'Enigma',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/f/f7/Enigma_icon.png?version=cd786d109fe3b9bbf88f82ad48c8723b',
       ]);  factory(Hero::class)->create([
         'name' => 'Faceless-Void',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/7/73/Faceless_Void_icon.png?version=af7f98a0de5e29bc73b662a27670aa9e',
       ]);  factory(Hero::class)->create([
         'name' => 'Grimstroke',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/d/d7/Grimstroke_icon.png?version=615a597828869dbf570f7993c3f927bc',
       ]);  factory(Hero::class)->create([
         'name' => 'Gyrocopter',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/4/4f/Gyrocopter_icon.png?version=f24686d2d018218824e5dc17c3e4dca1',
       ]);  factory(Hero::class)->create([
         'name' => 'Huskar',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/d/d3/Huskar_icon.png?version=310e94592950b90783d934a87591e05d',
       ]);  factory(Hero::class)->create([
         'name' => 'Invoker',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/0/00/Invoker_icon.png?version=fb7516f0b780535fa8acfa9e8cb99266',
       ]);  factory(Hero::class)->create([
         'name' => 'Io',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/8/8d/Io_icon.png?version=94a7476345faa617842c26f446a26ec4',
       ]);  factory(Hero::class)->create([
         'name' => 'Jakiro',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/2/2f/Jakiro_icon.png?version=c4f2df2b9c444557b75aee31f289f8cf',
       ]);  factory(Hero::class)->create([
         'name' => 'Juggernaut',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/0/03/Juggernaut_icon.png?version=728e72d86473fed502ade52c7326d544',
       ]);  factory(Hero::class)->create([
         'name' => 'Keeper of the Light',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/b/b9/Keeper_of_the_Light_icon.png?version=134e16d0dd565e2763fd2111fe83f439',
       ]);  factory(Hero::class)->create([
         'name' => 'Kunkka',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/c/c0/Kunkka_icon.png?version=f64791660d48f854ce9ce85eb233af3b',
       ]);  factory(Hero::class)->create([
         'name' => 'Legion-Commander',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/a/a2/Legion_Commander_icon.png?version=82c151a5cd968eba51cfb442831f94af',
       ]);  factory(Hero::class)->create([
         'name' => 'Leshrac',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/2/26/Leshrac_icon.png?version=fa8d18a43365db435910db186eb985d5',
       ]);  factory(Hero::class)->create([
         'name' => 'Lich',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/b/bb/Lich_icon.png?version=7cb34de5d2bb15610cda9474d6c1b306',
       ]);  factory(Hero::class)->create([
         'name' => 'LifeStealer',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/2/2b/Lifestealer_icon.png?version=2fd62b82d2c618c9b6f1b69ba6b8d509',
       ]);  factory(Hero::class)->create([
         'name' => 'Lina',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/3/35/Lina_icon.png?version=2bc137c161b17cd86674d29d0a0ed261',
       ]);  factory(Hero::class)->create([
         'name' => 'Lion',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/b/b8/Lion_icon.png?version=7d730dc2fc5c3b86db8f84f9e09d1de2',
       ]);  factory(Hero::class)->create([
         'name' => 'Lone-Druid',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/5/5d/Lone_Druid_icon.png?version=f9e25298afe665f5bcb1cbd3f22b828c',
       ]);  factory(Hero::class)->create([
         'name' => 'Luna',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/7/7d/Luna_icon.png?version=b1d1b20a5c17defc097201e30e83ff98',
       ]);  factory(Hero::class)->create([
         'name' => 'Lycan',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/d/d6/Lycan_icon.png?version=8174f47b42eaebb44f401927252765cb',
       ]);  factory(Hero::class)->create([
         'name' => 'Magnus',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/b/ba/Magnus_icon.png?version=a59de522b23eddce524eec08e6598a9b',
       ]);  factory(Hero::class)->create([
         'name' => 'Mars',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/9/9d/Mars_icon.png?version=52c12b93be5c87fe1345fdb20b24fb5d',
       ]);  factory(Hero::class)->create([
         'name' => 'Medusa',
          'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/c/cc/Medusa_icon.png?version=3d9ae4d87d7dd18473b0077c6d51d3d3',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);  factory(Hero::class)->create([
         'name' => 'Abaddon',
          'avatar' => 'https://dota2.gamepedia.com/File:Abaddon_icon.png',
       ]);
    }
}
