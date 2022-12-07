<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Promotion extends Controller
{
     public function PromotionAdd(Request $request){
        // $request->validate([
        //     'id'=>'required',
        //     'name'=>'required',
        //     'Email'=>'required',
        //     'Password'=>'required',
        //     'Created_at'=>'required',
        //     'Birthday'=>'required',
        //     'Address'=>'required',
        //     'IDCardNumber'=>'required',
        //     'PhoneNumber'=>'required',
        //     'Competence'=>'required',
        //     'Link'=>'required',
            
            
        // ]);
        $str=' 00:00:00';
        $Promotion =$request->Promotion;
        $PromotionName =$request->PromotionName;
        $PromotionDetails =$request->PromotionDetails;
        
        $RemainingUsage =$request->RemainingUsage;
        $Created_at =$request->Created_at;
        $Created_at=$Created_at.$str;
        $Expired_at =$request->Expired_at;
        $Expired_at=$Expired_at.$str;
        $ForCategoryID =$request->ForCategoryID;
        $ForProductID =$request->ForProductID;
        $ForVersionID =$request->ForVersionID;
        $Discount =$request->Discount;

        $Discount=$Discount/100;
        
      
       
        $post=DB::insert('insert into promotion (Promotion, PromotionName, PromotionDetails, 
        RemainingUsage, Created_at, Expired_at, ForCategoryID, ForProductID, ForVersionID,Discount) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?,?)',
         [$Promotion, $PromotionName, $PromotionDetails,$RemainingUsage,$Created_at,$Expired_at,$ForCategoryID,$ForProductID,$ForVersionID,$Discount]);

         



         if ($post) {
            return redirect()->back()->with('success', 'Thêm   '.$PromotionName.' thành công.'); 
        } else {
           
            return redirect()->back()->with('failed', 'Thêm  '.$PromotionName.' thất bại.'); 
        }  
         return redirect()->route('khuyenmai');       
}
public function PromotionUpdate(Request $request){
    // $request->validate([
    //     'id'=>'required',
    //     'name'=>'required',
    //     'Email'=>'required',
    //     'Password'=>'required',
    //     'Created_at'=>'required',
    //     'Birthday'=>'required',
    //     'Address'=>'required',
    //     'IDCardNumber'=>'required',
    //     'PhoneNumber'=>'required',
    //     'Competence'=>'required',
    //     'Link'=>'required',
    // ]);
    $str=' 00:00:00';
    $IDPromotion =$request->IDPromotion;
    $Promotion =$request->Promotion;
    $PromotionName =$request->PromotionName;
    $PromotionDetails =$request->PromotionDetails;
    
    $RemainingUsage =$request->RemainingUsage;
    $Created_at =$request->Created_at;
    $Created_at=$Created_at.$str;
    $Expired_at =$request->Expired_at;
    $Expired_at=$Expired_at.$str;
    $ForCategoryID =$request->ForCategoryID;
    $ForProductID =$request->ForProductID;
    $ForVersionID =$request->ForVersionID;
    $Discount =$request->Discount;

    $Discount=$Discount/100;
    
  
   
    $post=DB::update('update promotion set Promotion = ?,
    PromotionName =?,
    PromotionDetails = ?,
    RemainingUsage = ?,
    Created_at = ?,
    Expired_at = ?,
    ForCategoryID = ?,
    ForProductID = ?,
    ForVersionID = ?,
    Discount = ?
     where IDPromotion = ? ',
     [$Promotion, $PromotionName, $PromotionDetails,$RemainingUsage,$Created_at,$Expired_at,$ForCategoryID,$ForProductID,$ForVersionID,$Discount,$IDPromotion]);
    
    

     if ($post) {
        return redirect()->back()->with('success', 'Cập nhật   '.$PromotionName.' thành công.'); 
    } else {
       
        return redirect()->back()->with('failed', 'Cập nhật  '.$PromotionName.' thất bại.'); 
    }  
     return redirect()->route('khuyenmai');       
}
}