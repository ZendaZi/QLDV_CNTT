<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Products')->insert([      
            'ProductName' => 'Máy chủ ảo - Smart Cloud',
            'ProductDetails' => 'SmartCloud là dịch vụ cho phép khách hàng chủ động khởi tạo các máy ảo với tài nguyên CPU, RAM và lưu trữ tùy ý.',
            'IDCategory' => '2',
        
        ]);
        DB::table('Product_Image')->insert([     
            'IDProduct' => '1', 
            'Link' => 'https://onesme.vn/resources/upload/file/services/images/03082021/2021080320482a24fc28-daa6-4eba-b8be-b4ae91ba6156.PNG',
            'ImageDetails' => 'Máy chủ ảo - Smart Cloud',
        ]);

        DB::table('Products')->insert([      
            'ProductName' => 'Tên miền Việt Nam',
            'ProductDetails' => 'Tên miền (Domain name) là định danh của website trên Internet. Tên miền thường gắn với tên công ty và thương hiệu của doanh nghiệp. Tên miền là duy nhất và được ưu tiên cấp phát cho chủ thể nào đăng ký trước.',
            'IDCategory' => '2',
        
        ]);
        DB::table('Product_Image')->insert([     
            'IDProduct' => '2', 
            'Link' => 'https://onesme.vn/resources/upload/file/services/images/03082021/2021080321461156dc44-9b3d-407c-9558-3dd2ab56004d.PNG',
            'ImageDetails' => 'Tên miền Việt Nam',
        ]);


        DB::table('Products')->insert([      
            'ProductName' => 'Cổng thông tin điện tử vnPortal',
            'ProductDetails' => 'vnPortal cung cấp những tiện ích ứng dụng công nghệ thông tin, tạo ra môi trường làm việc hiện đại, nhanh chóng, hiệu quả, tiết kiệm thời gian và kinh phí cho người dùng.',
            'IDCategory' => '1',
        
        ]);
        DB::table('Product_Image')->insert([     
            'IDProduct' => '3', 
            'Link' => 'https://onesme.vn/resources/upload/file/services/images/17082022/202208171520bf11d9f4-24ae-43ff-8456-e7a763183253.JPG',
            'ImageDetails' => 'Cổng thông tin điện tử vnPortal',
        ]);
    }
}
