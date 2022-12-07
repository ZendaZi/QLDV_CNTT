<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CustomerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Customer_infomation')->insert([      
            'CustomerName' => 'Đại học Cần Thơ',
            'Address' => '3/2 street, Ninh Kieu district, Can Tho city',
            'PhoneNumber' => '842923832663',
            'Email'=> 'dhct@ctu.edu.vn',
            'TypeOfCustomer'=>'Enterprise',
        ]);
        DB::table('Customer_infomation')->insert([      
            'CustomerName' => 'Đại học Nam Cần Thơ',
            'Address' => 'Nguyen Van Cu noi dai street, Ninh Kieu district, Can Tho city',
            'PhoneNumber' => '12345678',
            'Email'=> 'namCT@DNC.edu.vn',
            'TypeOfCustomer'=>'Potential',
        ]);
    }
}
