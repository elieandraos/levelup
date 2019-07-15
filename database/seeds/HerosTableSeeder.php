<?php

use App\Models\Hero;
use Illuminate\Database\Seeder;

class HerosTableSeeder extends Seeder
{
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
        
        factory(Hero::class)->create([
            'name' => 'Alchemist',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/f/fe/Alchemist_icon.png?version=a7c13bea85d68e59c5400c1bd99d1cfb',
        ]);
        
        factory(Hero::class)->create([
            'name' => 'Ancient Apparition',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/6/67/Ancient_Apparition_icon.png?version=4ca8ab4fcec9d410c544a9938b521d50',
        ]);

        factory(Hero::class)->create([
            'name' => 'Antimage',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/8/8e/Anti-Mage_icon.png?version=f55b1d31df2c842ebd3e6121f4dc513d',
        ]);
          
        factory(Hero::class)->create([
            'name' => 'Arc Warden',
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
            'name' => 'Beast Master',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/d/d9/Beastmaster_icon.png?version=5aa86ba5bbaca098fe5f9e86bbe132f4',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Blood Seeker',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/5/56/Bloodseeker_icon.png?version=13fa81ed7d1bf313049de902c91def21',
        ]);
          
        factory(Hero::class)->create([
            'name' => 'Bounty Hunter',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/a/a6/Bounty_Hunter_icon.png?version=4a8be8d7f90be0936164013d63f17670',
        ]);
          factory(Hero::class)->create([
         'name' => 'Brew Master',
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
            'name' => 'Centaur Warrunner',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/e/ed/Centaur_Warrunner_icon.png?version=0ebbf51ef4b45ddd509450ac454a0dfa',
        ]);
          
        factory(Hero::class)->create([
            'name' => 'Chaos Knight',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/f/fe/Chaos_Knight_icon.png?version=b321a84d401423e904159e6a380abe12',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Chen',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/6/61/Chen_icon.png?version=0f827938b63d647d266ce8f613c832ed',
        ]);
          
        factory(Hero::class)->create([
            'name' => 'Clinkz',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/c/cb/Clinkz_icon.png?version=1764f0e7f6b084058f8e417891e3135e',
        ]);
        
        factory(Hero::class)->create([
            'name' => 'Clockwerk',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/d/d8/Clockwerk_icon.png?version=079dcb0e7d50a1aba6c833753da60bcf',
        ]);
        
        factory(Hero::class)->create([
            'name' => 'Crystal Maiden',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/2/27/Crystal_Maiden_icon.png?version=1fe64eb25bb59c8f5f9b916a8ee5f378',
        ]);
          
        factory(Hero::class)->create([
            'name' => 'Dark Seer',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/c/c5/Dark_Seer_icon.png?version=9b81b657518099522d6a36b5cdd51e7e',
        ]);
          
        factory(Hero::class)->create([
            'name' => 'Dark Willow',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/3/3c/Dark_Willow_icon.png?version=a4ef3ff9c27f1f5510f20e8dec1f15a9',
        ]);
        
        factory(Hero::class)->create([
            'name' => 'Dazzle',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/e/e6/Dazzle_icon.png?version=12e839c1ea458185e87dcf7a7c02c0e6',
        ]);
        
        factory(Hero::class)->create([
            'name' => 'Death Prophet',
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
            'name' => 'Dragon Knight',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/5/59/Dragon_Knight_icon.png?version=8f081d5debb0efc6f95282c7a1c52c68',
        ]);
          
        factory(Hero::class)->create([
            'name' => 'Drow Ranger',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/8/80/Drow_Ranger_icon.png?version=53f9bde6e8f3c953a752c1358175309a',
        ]);
          
        factory(Hero::class)->create([
            'name' => 'Earth Spirit',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/b/be/Earth_Spirit_icon.png?version=6358ee2b1e31c856ff16cb7fb5e23f46',
        ]);
          
        factory(Hero::class)->create([
            'name' => 'Earth Shaker',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/a/a5/Earthshaker_icon.png?version=7f16a63e5ed6a7ec7a3889dd4aea354d',
        ]);
          
        factory(Hero::class)->create([
            'name' => 'Elder Titan',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/1/1a/Elder_Titan_icon.png?version=e2649f981d5f6dcc1d16bbaefadc2324',
        ]);  

        factory(Hero::class)->create([
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
        ]);  

        factory(Hero::class)->create([
            'name' => 'Faceless Void',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/7/73/Faceless_Void_icon.png?version=af7f98a0de5e29bc73b662a27670aa9e',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Grimstroke',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/d/d7/Grimstroke_icon.png?version=615a597828869dbf570f7993c3f927bc',
        ]);  
        
        factory(Hero::class)->create([
            'name' => 'Gyrocopter',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/4/4f/Gyrocopter_icon.png?version=f24686d2d018218824e5dc17c3e4dca1',
        ]);  
        
        factory(Hero::class)->create([
            'name' => 'Huskar',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/d/d3/Huskar_icon.png?version=310e94592950b90783d934a87591e05d',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Invoker',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/0/00/Invoker_icon.png?version=fb7516f0b780535fa8acfa9e8cb99266',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Io',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/8/8d/Io_icon.png?version=94a7476345faa617842c26f446a26ec4',
        ]);  
        
        factory(Hero::class)->create([
            'name' => 'Jakiro',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/2/2f/Jakiro_icon.png?version=c4f2df2b9c444557b75aee31f289f8cf',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Juggernaut',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/0/03/Juggernaut_icon.png?version=728e72d86473fed502ade52c7326d544',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Keeper of the light',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/b/b9/Keeper_of_the_Light_icon.png?version=134e16d0dd565e2763fd2111fe83f439',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Kunkka',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/c/c0/Kunkka_icon.png?version=f64791660d48f854ce9ce85eb233af3b',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Legion Commander',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/a/a2/Legion_Commander_icon.png?version=82c151a5cd968eba51cfb442831f94af',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Leshrac',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/2/26/Leshrac_icon.png?version=fa8d18a43365db435910db186eb985d5',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Lich',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/b/bb/Lich_icon.png?version=7cb34de5d2bb15610cda9474d6c1b306',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Life Stealer',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/2/2b/Lifestealer_icon.png?version=2fd62b82d2c618c9b6f1b69ba6b8d509',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Lina',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/3/35/Lina_icon.png?version=2bc137c161b17cd86674d29d0a0ed261',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Lion',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/b/b8/Lion_icon.png?version=7d730dc2fc5c3b86db8f84f9e09d1de2',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Lone Druid',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/5/5d/Lone_Druid_icon.png?version=f9e25298afe665f5bcb1cbd3f22b828c',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Luna',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/7/7d/Luna_icon.png?version=b1d1b20a5c17defc097201e30e83ff98',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Lycan',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/d/d6/Lycan_icon.png?version=8174f47b42eaebb44f401927252765cb',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Magnus',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/b/ba/Magnus_icon.png?version=a59de522b23eddce524eec08e6598a9b',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Mars',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/9/9d/Mars_icon.png?version=52c12b93be5c87fe1345fdb20b24fb5d',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Medusa',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/c/cc/Medusa_icon.png?version=3d9ae4d87d7dd18473b0077c6d51d3d3',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Meepo',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/8/85/Meepo_icon.png?version=06970686c2620e4899376b9ee7e17d47',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Mirana',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/1/12/Mirana_icon.png?version=a80affcf57d37d4fe5d898cd7e3f4e0a',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Monkey King',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/7/7b/Monkey_King_icon.png?version=abe10431bbc2211c3e4f931534bd3d27',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Morphling',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/7/7b/Morphling_icon.png?version=d1015dea93a88152e3fef62e9b64ad6e',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Naga Siren',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/6/60/Naga_Siren_icon.png?version=a64bc31b30d125ba993f6498b68f9a0b',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Natures Prophet',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/c/c4/Nature%27s_Prophet_icon.png?version=3d5a7a42e57a7e43f058e8d0874cda03',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Necrophos',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/a/a6/Necrophos_icon.png?version=ddc8b2eab62f4e578045623bfc74bd0b',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Night Stalker',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/1/15/Night_Stalker_icon.png?version=89360dbfb748a26ff50bcb475feb9d5b',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Nyx Assassain',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/f/fa/Nyx_Assassin_icon.png?version=82c807740fa60d9ab486e0bf0e4153c2',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Ogre Magi',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/e/e0/Ogre_Magi_icon.png?version=3fa5ac15939733f3cfddc00aba633795',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Omni Knight',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/e/e2/Omniknight_icon.png?version=69fb42b317ef5d5495fd566090baec8f',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Oracle',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/7/72/Oracle_icon.png?version=50cfbd6e98b026808a9f8ad253605cfa',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Outworld Devourer',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/9/99/Outworld_Devourer_icon.png?version=bb656970d69f3027d26943bc24b03610',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Pangolier',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/4/4e/Pangolier_icon.png?version=0ca9284b8283c2fbd8550b2be5fd9c3a',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Phantom Assassin',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/8/8e/Phantom_Assassin_icon.png?version=fcf1444e78efa7c35c74f98e934c271d',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Phantom Lancer',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/8/81/Phantom_Lancer_icon.png?version=a78af53d50a56dff0aede90622eb3511',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Phoenix',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/1/14/Phoenix_icon.png?version=db8f4ec5840022a97ce532d138af8f13',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Puck',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/1/13/Puck_icon.png?version=07290c7498433bde0a87c330a51081c1',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Pudge',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/c/c0/Pudge_icon.png?version=fee1223645079c94aacce19357e9a416',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Pugna',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/c/cd/Pugna_icon.png?version=6e8e11c6c2013546664a8251d52e0e97',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Razor',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/6/66/Razor_icon.png?version=0146a218be9881bb9d75b19ed14d35be',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Riki',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/7/7d/Riki_icon.png?version=85a963fecc5bdfc702aa22d6314eb728',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Rubick',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/8/8a/Rubick_icon.png?version=069f44c919f07acd1dec09aa71330568',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Sand King',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/7/79/Sand_King_icon.png?version=eda0d31413598822d2190b790f56a0a5',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Shadow Demon',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/f/f3/Shadow_Demon_icon.png?version=d4f43f79f2752f89c5d1177dae20c2d2',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Shadow Fiend',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/3/36/Shadow_Fiend_icon.png?version=aead4589c97b4c486ca808225004b114',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Shadow Shaman',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/9/96/Shadow_Shaman_icon.png?version=412ef19dc4b14ec00e5be48a2f3ffa58',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Silencer',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/9/9f/Silencer_icon.png?version=987250b53e9d354e7385f2b30263730d',
        ]); 
        
        factory(Hero::class)->create([
            'name' => 'Skeleton King',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/0/07/Skeleton_King_icon.png?version=6d76e858913091130867d09ddbb83a71',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Skywrath Mage',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/b/bf/Skywrath_Mage_icon.png?version=e80bcf3140a08fd474e4ae959c68b5bd',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Slardar',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/7/7e/Slardar_icon.png?version=a47d98fe72c0976d67582f3bc223c069',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Slark',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/a/aa/Slark_icon.png?version=18b68c91671452beab47ca1813e1366e',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Sniper',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/5/51/Sniper_icon.png?version=6429ecb9ebbc59abed6b846ac0af6f0d',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Spectre',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/f/ff/Spectre_icon.png?version=8af2c21961605d25cfa1be31725d7422',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Spirit Breaker',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/d/df/Spirit_Breaker_icon.png?version=166d65dd74ef0676fd3a12d1a1504e5d',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Templar Assassin',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/9/9c/Templar_Assassin_icon.png?version=e531fd05354743719c1b8dd48dc108d5',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Techies',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/f/fa/Techies_icon.png?version=156b828f72a516c4327906e03e0c3a0e',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Sven',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/1/1b/Sven_icon.png?version=6afeb3577b8d3e602f7b9cc769cd0be6',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Storm Spirit',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/1/13/Storm_Spirit_icon.png?version=c9eb4d9152a61c7663cefaa20bc1a8e8',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Terror Blade',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/5/52/Terrorblade_icon.png?version=77a3768fe6b0ad17bb407b12d6479d1d',
        ]);  

        factory(Hero::class)->create([
            'name' => 'Tidehunter',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/d/d5/Tidehunter_icon.png?version=72d689d15e1011f9668c546af5f19f00',
        ]);
         
        factory(Hero::class)->create([
            'name' => 'Timbersaw',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/9/9a/Timbersaw_icon.png?version=8cdae5ee791dccd7b4dd8cf5db327bdd',
        ]);
        
        factory(Hero::class)->create([
            'name' => 'Tinker',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/d/d1/Tinker_icon.png?version=e904d8e318ae448d4639a6ca85303fe6',
        ]);
         
        factory(Hero::class)->create([
            'name' => 'Tusk',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/c/ce/Tusk_icon.png?version=147fb449a87e1067c85f21f186132092',
        ]);
        
        factory(Hero::class)->create([
            'name' => 'Troll',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/f/f0/Troll_Warlord_icon.png?version=43c7aadede7bd18591b0c6dbb7dbd027',
        ]);
        
        factory(Hero::class)->create([
            'name' => 'Treant Protector',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/3/3f/Treant_Protector_icon.png?version=d4d85450f31c83aea8266dfd419b70d7',
        ]);
         
        factory(Hero::class)->create([
            'name' => 'Tiny',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/5/55/Tiny_icon.png?version=042adfa9c45fb68093cc6fb4cbe06ea8',
        ]);
        
        factory(Hero::class)->create([
            'name' => 'Underlord',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/1/18/Underlord_icon.png?version=608e265d917a1cb3ecbdb479ca17cfe9',
        ]);
        
        factory(Hero::class)->create([
            'name' => 'Venomancer',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/2/25/Venomancer_icon.png?version=52d85a454dde46581873c15b7a072237',
        ]);
        
        factory(Hero::class)->create([
            'name' => 'Undying',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/6/61/Undying_icon.png?version=60d8f84491097a3128b7bb2a3de26bf7',
        ]);
        
        factory(Hero::class)->create([
            'name' => 'Viper',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/5/5f/Viper_icon.png?version=2a8187ea6747e352093e1e54bc2606ff',
        ]);
        
        factory(Hero::class)->create([
            'name' => 'Ursa',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/4/40/Ursa_icon.png?version=6a015dc9739ae708a62230a0cea9ffa6',
        ]);
        
        factory(Hero::class)->create([
            'name' => 'Visage',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/9/9e/Visage_icon.png?version=737c2387430a431a85ffd08b7252fb6e',
        ]);
        
        factory(Hero::class)->create([
            'name' => 'Vengeful Spirit',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/2/20/Vengeful_Spirit_icon.png?version=f7b24acba1c0bf726248ca1dd4620c7c',
        ]);
        
        factory(Hero::class)->create([
            'name' => 'Warlock',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/3/3f/Warlock_icon.png?version=553c91bae27fe106872f09f7c5da3878',
        ]);
        
        factory(Hero::class)->create([
            'name' => 'Weaver',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/0/09/Weaver_icon.png?version=09f9240a75d1045d5d403385c61db35c',
        ]);
        
        factory(Hero::class)->create([
            'name' => 'Windranger',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/6/60/Windranger_icon.png?version=85593ee15f958babcf2f2d1ceb7a3940',
        ]);
        
        factory(Hero::class)->create([
            'name' => 'Winter Wyvern',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/4/4a/Winter_Wyvern_icon.png?version=708c1aac73eef23b9b9183d47484e7b2',
        ]);
        
        factory(Hero::class)->create([
            'name' => 'Witch Doctor',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/3/33/Witch_Doctor_icon.png?version=73b2ab9afd2990f49faf54f4e8bd66aa',
        ]);
        
        factory(Hero::class)->create([
            'name' => 'Zeus',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/3/3f/Zeus_icon.png?version=f80d75c5a638f7d875e49dc179b5143b',
        ]);
        
        factory(Hero::class)->create([
            'name' => 'Wraith King',
            'avatar' => 'https://gamepedia.cursecdn.com/dota2_gamepedia/1/1e/Wraith_King_icon.png?version=52212107e602b6a17dfc1d7515086216',
        ]);
    }
}
