<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductVersionPrice extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Product_version')->insert([     
            'IDProduct' => '1', 
            'IDVersion' => '1.1.0',
            'VersionDetails' => 'Phiên bản giới hạn bộ nhớ ram 8GB, sử dụng HDD',
        ]);
        DB::table('Product_price')->insert([ 
            'IDVersion' => '1.1.0',
            'Price' => '10',
            'PriceDetails' => '$',
        ]);
        DB::table('Product_version')->insert([     
            'IDProduct' => '1', 
            'IDVersion' => '1.2.0',
            'VersionDetails' => 'Phiên bản giới hạn bộ nhớ ram 16GB, sử dụng SSD',
        ]);
        DB::table('Product_price')->insert([ 
            'IDVersion' => '1.2.0',
            'Price' => '50',
            'PriceDetails' => '$',
        ]);
        DB::table('Product_version')->insert([     
            'IDProduct' => '2', 
            'IDVersion' => '2.1.0',
            'VersionDetails' => 'Tên miền .NET.VN',
        ]);
        DB::table('Product_price')->insert([ 
            'IDVersion' => '2.1.0',
            'Price' => '250000',
            'PriceDetails' => 'VND',
        ]);


        DB::table('Product_version')->insert([     
            'IDProduct' => '3', 
            'IDVersion' => '3.1.0',
            'VersionDetails' => 'Cơ bản',
        ]);
        DB::table('Product_price')->insert([ 
            'IDVersion' => '3.1.0',
            'Price' => '175000',
            'PriceDetails' => 'VND',
        ]);
        
    }
}
