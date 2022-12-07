<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Category')->insert([      
            'CategoryName' => 'Hạ Tầng',
            'CategoryDetails' => 'Các dịch vụ về hạ tầng',
            'CategoryImage' => 'https://onesme.vn/resources/upload/file/services/images/17082022/202208171407972e6b6e-2769-4ec9-8d8c-356d6e8c15dd.JPG',
        ]);
        DB::table('Category')->insert([      
            'CategoryName' => 'Quản trị Doanh nghiệp',
            'CategoryDetails' => 'Các dịch vụ về quản trị Doanh nghiệp',
            'CategoryImage' => 'https://onesme.vn/resources/upload/file/services/images/17082022/202208171407972e6b6e-2769-4ec9-8d8c-356d6e8c15dd.JPG',
        ]);
      
    }
}
