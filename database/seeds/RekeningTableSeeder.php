<?php

use Illuminate\Database\Seeder;

class RekeningTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rekening_m')->insert([
            [
                'id'=>1,
                'atas_nama'=>'Hasan Marketplace V1',
                'no_rekening'=>'67232424',
                'bank'=>'BCA',
                'status'=>'aktif',
            ],
          

        ]);
    }
}
