<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryManagement extends Controller
{
    public function CategoryAdd(Request $request){
        $request->validate([
            'CategoryName'=>'required',
            'CategoryDetails'=>'required',
        ]);
            $CategoryName =$request->CategoryName;
            $CategoryDetails =$request->CategoryDetails;
            $post=DB::insert('insert into category ( CategoryName, CategoryDetails) values ( ?, ?)',
             [$CategoryName, $CategoryDetails]);
             if ($post && $CategoryName!=null && $CategoryDetails!=null) {
                return redirect()->back()->with('success', 'Thêm danh mục '.$CategoryName.' thành công.'); 
            } else {
               
                return redirect()->back()->with('failed', 'Thêm danh mục '.$CategoryName.' thất bại.'); 
            }      
    }

    public function CategoryUpdate(Request $request_Edit){
        $request_Edit->validate([
            'CategoryName'=>'required',
            'CategoryDetails'=>'required',
            'IDCategory'=>'required',
        ]);
        $CategoryName =$request_Edit->CategoryName;
        $CategoryDetails =$request_Edit->CategoryDetails;
        $IDCategory =$request_Edit->IDCategory;
           
          
            $post2=DB::update('update category set CategoryName = ? 
            , CategoryDetails=? 
             where IDCategory = ?', [$CategoryName,$CategoryDetails,$IDCategory]);
             if ($post2) {
                return redirect()->back()->with('success', 'Cập nhật danh mục '.$CategoryName.' thành công.'); 
            } else {
               
                return redirect()->back()->with('failed', 'Cập nhật danh mục  '.$CategoryName.'  thất bại.'); 
            }         
    }



    public function CategoryDelete(Request $request_Delete){
        $request_Delete->validate([
            'IDCategory'=>'required',
        ]);
            $IDCategory =$request_Delete->IDCategory;
            $post3=DB::delete('delete from category where IDCategory = ?', [$IDCategory]);
            if ($post3) {
                return redirect()->back()->with('success', 'Xóa danh mục thành công.'); 
            } else {
               
                return redirect()->back()->with('failed', 'Xóa nhật danh mục thất bại.');
            }       
    }
   
}