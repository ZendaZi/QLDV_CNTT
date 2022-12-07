<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchCustomer extends Controller
{
    public function fetchCustomer(){
        $Customer = DB::table('customer_infomation')->get();

        return view('staff_assets.Read_CustomerInfo', compact('Customer'));
    }

    public function Search_Customer(Request $request_SearchCustomer)
    {
       
        if ($request_SearchCustomer->ajax()) {
          
            
            $Contract = DB::table('Customer_Infomation')
            ->join('Contract', 'Customer_Infomation.IDCustomer', '=', 'Contract.IDCustomer')
            ->join('Products', 'Contract.IDProduct', '=', 'Products.IDProduct')
            ->join('Users', 'Contract.ID', '=', 'Users.ID')
            //  ->where('CustomerName', 'LIKE', '%' . $request_SearchCustomer->Search_Customer . '%')
             ->get();
             $getCustomerNameKH=DB::table('Customer_Infomation')
             ->where('CustomerName', 'LIKE', '%' . $request_SearchCustomer->Search_Customer . '%')
             ->get();
             $getPotentialServices=DB::table('product_version')
             ->get();
             $getPotentialServicesContract=DB::table('contract')
             ->get();
          
        }
        return view('BladeAjax.CustomerInfo_Ajax',compact('Contract','getCustomerNameKH','getPotentialServices','getPotentialServicesContract'));
}
//
//
//              HAM TIM KIEM KH TIEM NANG
//
//
public function Search_PotentialCustomer(Request $request_SearchPotentialCustomer)
{
   
    if ($request_SearchPotentialCustomer->ajax()) {
        $outputSearchPotentialCustomer = '';
        
        $PotentialCustomer = DB::table('Customer_Infomation')      
         ->where('CustomerName', 'LIKE', '%' . $request_SearchPotentialCustomer->Search_PotentialCustomer . '%' )
         ->where('TypeOfCustomer', '=', 'Potential')
         ->get();
        return view('BladeAjax.PotentialCustomer_Ajax',compact('PotentialCustomer'));
    }
}





}
