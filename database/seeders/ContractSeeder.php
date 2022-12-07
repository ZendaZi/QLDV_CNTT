<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current = Carbon::now();
        $current2 = Carbon::now();
        $ExpiredTime = $current2->addMonth(1);
        DB::table('contract')->insert([      
           
            'IDCustomer' => '1',
            'id' => '1',
            'IDProduct'=> '1',
            'Created_at'=>$current,
            'Expired_at'=>$ExpiredTime,
            'ContractPrice'=>'20000000',
            'ContractStatus'=>'Active'
        ]);
    }
}
