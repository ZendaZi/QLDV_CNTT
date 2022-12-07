<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PotentialCustomerRequest extends Controller
{
    public function PotentialCustomerRequest(Request $request){
        $request->validate([
            'CustomerName'=>'required',
            'Address'=>'required|min:8|max:255',
            'PhoneNumber'=>'required|min:10|max:11',
            'Email'=>'required|email',
            'TypeOfCustomer'=>'required',
        ]);
            $CustomerName =$request->CustomerName;
            $Address =$request->Address;
            $PhoneNumber =$request->PhoneNumber;
            $Email =$request->Email;
            $TypeOfCustomer =$request->TypeOfCustomer;
            DB::insert('insert into customer_infomation ( CustomerName, Address, PhoneNumber, Email, TypeOfCustomer) values ( ?, ?, ?, ?, ?)',
             [$CustomerName, $Address,$PhoneNumber,$Email,$TypeOfCustomer]);
             return redirect()->route('dashboard');       
    }

    public function PotentialCustomerRequest_Edit(Request $request_Edit){
        $request_Edit->validate([
            'IDCustomer'=>'required',
            'CustomerName'=>'required',
            'Address'=>'required|min:8|max:255',
            'PhoneNumber'=>'required|min:10|max:11',
            'Email'=>'required|email',
            'TypeOfCustomer'=>'required',
        ]);
            $IDCustomer =$request_Edit->IDCustomer;
            $CustomerName =$request_Edit->CustomerName;
            $Address =$request_Edit->Address;
            $PhoneNumber =$request_Edit->PhoneNumber;
            $Email =$request_Edit->Email;
            $TypeOfCustomer =$request_Edit->TypeOfCustomer;
          
            DB::update('update customer_infomation set CustomerName = ? 
            , Address=?
            , PhoneNumber=? 
            , Email=?
             where IDCustomer = ?', [$CustomerName,$Address,$PhoneNumber,$Email,$IDCustomer]);
             return redirect()->route('dashboard');       
    }



    public function PotentialCustomerRequest_Delete(Request $request_Delete){
        $request_Delete->validate([
            'IDCustomer'=>'required',
            
        ]);
            $IDCustomer =$request_Delete->IDCustomer;
            
            DB::delete('delete from customer_infomation where IDCustomer = ?', [$IDCustomer]);
             return redirect()->route('dashboard');       
    }
   
}
