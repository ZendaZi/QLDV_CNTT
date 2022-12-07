<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class Feedback extends Controller
{
    public function FeedbackAddRequest(Request $request){
        $request->validate([
            'IDVersion'=>'required',
            'IDCustomer'=>'required',
            'id'=>'required',
            'Content'=>'required',
            'Rate'=>'required',
            'Created_at'=>'required',
        ]);
            $IDVersion =$request->IDVersion;
            $IDCustomer =$request->IDCustomer;
            $id =$request->id;
            $Content =$request->Content;
            $Rate =$request->Rate;
            $Created_at =$request->Created_at;
            DB::insert('INSERT INTO `product_feedback`( `IDVersion`, `IDCustomer`, `id`, `Content`, `Rate`, `Created_at`)
             VALUES ( ?, ?, ?, ?, ?, ?)',
             [$IDVersion, $IDCustomer,$id,$Content,$Rate,$Created_at]);
             return redirect()->route('phanhoi');       
    }

    public function FeedbackEditRequest(Request $request2){
        $request2->validate([
            'IDFeedback'=>'required',
            'IDVersion'=>'required',
            'IDCustomer'=>'required',
            'id'=>'required',
            'Content'=>'required',
            'Rate'=>'required',
            'Created_at'=>'required',
        ]);
            $IDFeedback =$request2->IDFeedback;
            // $IDVersion =$request2->IDVersion;
            // $IDCustomer =$request2->IDCustomer;
            // $id =$request2->id;
            $Content =$request2->Content;
            $Rate =$request2->Rate;
            $Created_at =$request2->Created_at;
            DB::update('UPDATE
            `product_feedback`
        SET
           
            
            
            
            `Content` = ?,
            `Rate` = ?,
            `Created_at` = ?
        WHERE
            `IDFeedback` = ?', [$Content,$Rate,$Created_at,$IDFeedback]);
             return redirect()->route('phanhoi');
    }

    public function FeedbackDeleteRequest(Request $request3){
        $request3->validate([
            'IDFeedback'=>'required'
           
        ]);
            $IDFeedback =$request3->IDFeedback;
            DB::delete('delete from product_feedback where IDFeedback = ?', [$IDFeedback]);
             return redirect()->route('phanhoi');
    }


    public function Search_Feedback(Request $request_Search_Feedback)
    {

        if ($request_Search_Feedback->ajax()) {
            $CustomerContract = DB::table('contract')
                ->select('customer_infomation.*')
                ->join('customer_infomation','contract.IDCustomer','=','customer_infomation.IDCustomer')
                ->where('TypeOfCustomer', '!=', 'Potential')
                ->where('CustomerName', 'LIKE', '%'.$request_Search_Feedback->Search_Contract.'%')
                ->groupBy('IDCustomer')
                ->get(); 
           
                $role=Auth::user()->role;
                $ProductFeedback=DB::table('product_feedback') 
                ->join('Product_version','product_feedback.IDVersion','=','Product_version.IDVersion')
                ->join('Products','Product_version.IDProduct','=','Products.IDProduct')
                ->get(); 
                // $CustomerContract = DB::table('contract')
                // ->select('contract.IDCustomer', 'customer_infomation.*')
                // ->join('customer_infomation','contract.IDCustomer','=','customer_infomation.IDCustomer')
                // ->groupBy('customer_infomation.IDCustomer')
                // ->get(); 
                $getCustomerName=DB::table('customer_infomation')
                ->select('*')
                ->where('CustomerName', 'LIKE', '%'.$request_Search_Feedback->Search_Contract.'%')
                ->get();
                $Contract=DB::table('contract')
                ->select('contract.*', 'products.ProductName')
                ->join('products','contract.IDProduct','=','products.IDProduct')
                ->get();
                $id = Auth::id(); 
                $Created_at = Carbon::now();
                return view('BladeAjax.Feedback_Ajax', compact('CustomerContract','ProductFeedback','getCustomerName','Contract','id','Created_at','role'))->render();
                
           
        }
       
    }
}
