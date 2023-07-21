<?php

use Illuminate\Database\Seeder;

class MarketplaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profilemarketpalces')->insert([
            [
                'id'=>1,
                  'title'=>'Sistem Teknisi Komputer',
                'diskripsi'=>'by Hasanarofid',
                'address'=>'dukuh pakis,surabaya',
                'zipcode'=>3055,
                'email'=>'hasanarofid@gmail.com',
                'telpon'=>'0813242424',
                'social1'=>'facebok.com/hasanarofid',
                'social2'=>'instagram.com/hasanarofid',
                'social3'=>'theards.com/hasanarofid',
                'social4'=>'twitter.com/hasanarofid',
                'kota'=>'Surabaya'

            ],
          

        ]);
    }
}
