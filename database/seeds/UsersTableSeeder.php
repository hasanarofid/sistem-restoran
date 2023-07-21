<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id'=>1,
                'name'=>'HRD',
                'email'=>'hrd@teknisikomputer.com',
                'password'=>Hash::make('hrd123'),
                'role'=>'HRD'
            ],
            [
                'id'=>2,
                'name'=>'Teknisi',
                'email'=>'teknisi@teknisikomputer.com',
                'password'=>Hash::make('teknisi123'),
                'role'=>'Teknisi'
            ],
            [
                'id'=>3,
                'name'=>'Marketing',
                'email'=>'marketing@teknisikomputer.com',
                'password'=>Hash::make('marketing123'),
                'role'=>'Marketing'
            ],
            [
                'id'=>4,
                'name'=>'User',
                'email'=>'user@teknisikomputer.com',
                'password'=>Hash::make('user123'),
                'role'=>'User'
            ],
             [
                'id'=>5,
                'name'=>'Admin',
                'email'=>'admin@teknisikomputer.com',
                'password'=>Hash::make('admin123'),
                'role'=>'Admin'
            ],
        ]);
    }
}