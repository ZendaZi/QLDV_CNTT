<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class InformationUserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Information_User')->insert([      
            'ID' => '1',
            'FullName' => 'Nguyễn Danh Hưng',
            'Birthday' => '2000-06-06',
            'Address'=> 'Vị Thanh, Hậu Giang',
            'IDCardNumber'=>'364012666',
            'PhoneNumber'=>'0333358883',
            'Email'=>'hung2000hg@gmail.com',
            'Competence'=>'Sales',
            'Link'=>'Enterprise',
            'token'=>'Null',
        ]);
    }
}
