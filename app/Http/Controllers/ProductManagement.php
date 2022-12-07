<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ProductManagement extends Controller
{
    public function CategoryProduct_search(Request $request)
    {
        if ($request->ajax()) {
            $_outputresult = '';
            $cate='';
            $getProduct = DB::table('products')
                ->join('Category', 'Products.IDCategory', '=', 'Category.IDCategory')
                // ->join('Product_image', 'Products.IDProduct', '=', 'Product_image.IDProduct')
                ->join('Product_version', 'Products.IDProduct', '=', 'Product_Version.IDProduct')
                // ->join('Product_price', 'Product_version.IDVersion', '=', 'Product_price.IDVersion')
                ->where('category.CategoryName', 'LIKE', '%' . $request->CategoryProduct_search . '%')->get();
                
            $role=Auth::user()->role;
            $getCategory = DB::table('category')
            ->get();
            $countProduct= DB::table('products')
            ->count('IDProduct')+1;
            $getProductVersion= DB::table('Product_Version')
            ->get();  
                }
            return view('BladeAjax.Product_Ajax',compact('getCategory','role','getProduct','countProduct','getProductVersion'));

    }
    


        public function ProductAdd(Request $request){
            $request->validate([
                'IDProduct'=>'required',
                'IDCategory'=>'required',
                'IDProduct'=>'required',
                'ProductName'=>'required',
                'ProductDetails'=>'required',
                'IDVersion'=>'required',
                'VersionDetails'=>'required',
                'Price'=>'required',
                'CurrencyUnit'=>'required',
                'TimeCycle'=>'required',
                'Link'=>'required',
                'ImageDetails'=>'required',
                
            ]);
                $IDProduct =$request->IDProduct;
                $IDCategory =$request->IDCategory;
                $IDProduct =$request->IDProduct;
                $ProductName =$request->ProductName;
                $ProductDetails =$request->ProductDetails;
                $IDVersion =$request->IDVersion;
                $VersionDetails =$request->VersionDetails;
                $Price =$request->Price;
                $CurrencyUnit =$request->CurrencyUnit;
                $TimeCycle =$request->TimeCycle;
                $Link =$request->Link;
                $ImageDetails =$request->ImageDetails;
                $image = $request->file('Link');
                $storedPath = $image->move('image/product', $image->getClientOriginalName());
                $post=DB::insert('insert into products ( IDProduct, ProductName, ProductDetails,IDCategory) values ( ?,?, ?, ?)',
                 [$IDProduct, $ProductName, $ProductDetails,$IDCategory]);


                 $post2=DB::insert('insert into product_version ( IDProduct, IDVersion, VersionDetails, Price, CurrencyUnit,TimeCycle) values ( ?, ?, ?, ?, ?, ?)',
                 [$IDProduct, $IDVersion,$VersionDetails ,$Price,$CurrencyUnit,$TimeCycle]);

                 $post4=DB::insert('insert into product_image ( IDProduct, Link, ImageDetails) values ( ?, ?, ?)',
                 [$IDProduct, $storedPath,$ImageDetails]);


                 if ($post && $post2  && $post4) {
                    return redirect()->back()->with('success', 'Thêm dịch vụ '.$ProductName.' thành công.'); 
                } else {
                   
                    return redirect()->back()->with('failed', 'Thêm dịch vụ '.$ProductName.' thất bại.'); 
                }  
                 return redirect()->route('qldichvu');       
        }
    
        public function ProductUpdate(Request $request_Edit){
            $request_Edit->validate([
                'IDProduct'=>'required',
                'IDCategory'=>'required',
                'IDProduct'=>'required',
                'ProductName'=>'required',
                'ProductDetails'=>'required',
                'IDVersion'=>'required',
                'VersionDetails'=>'required',
                'Price'=>'required',
                'CurrencyUnit'=>'required',
                'TimeCycle'=>'required',
                'Link'=>'required',
                'ImageDetails'=>'required',
            ]);
            $IDProduct =$request_Edit->IDProduct;
            $IDCategory =$request_Edit->IDCategory;
            $IDProduct =$request_Edit->IDProduct;
            $ProductName =$request_Edit->ProductName;
            $ProductDetails =$request_Edit->ProductDetails;
            $IDVersion =$request_Edit->IDVersion;
            $RootIDVersion =$request_Edit->RootIDVersion;
            $VersionDetails =$request_Edit->VersionDetails;
            $Price =$request_Edit->Price;
            $CurrencyUnit =$request_Edit->CurrencyUnit;
            $TimeCycle =$request_Edit->TimeCycle;
            $Link =$request_Edit->Link;
            $ImageDetails =$request_Edit->ImageDetails;
            $image = $request_Edit->file('Link');
            $storedPath = $image->move('image/product', $image->getClientOriginalName());
                $update=DB::update('update products set 
                 ProductName=?
                , ProductDetails=? 
                , IDCategory=?
                 where IDProduct = ?', [$ProductName,$ProductDetails,$IDCategory,$IDProduct]);

                 $update2=DB::update('update product_version set 
                 IDVersion=?
                , VersionDetails=? 
                , Price=?
                 where IDVersion = ?', [$IDVersion,$VersionDetails, $Price ,$RootIDVersion]);

                 $update4=DB::update('update product_image set 
                 Link=?
                 where IDProduct = ?', [$storedPath,$IDProduct]);

                 
                 if ($update || $update2  || $update4) {
                    return redirect()->back()->with('success', 'Cập nhật dịch vụ '.$ProductName.' thành công.'); 
                } else {
                   
                    return redirect()->back()->with('failed', 'Cập nhật dịch vụ '.$ProductName.' thất bại.'); 
                }  
                 return redirect()->route('qldichvu');       
        }
    
    
    
        public function ProductDelete(Request $request_Delete){
            $request_Delete->validate([
                'IDVersion'=>'required',
                'ProductName'=>'required'
                
            ]);
                $IDVersion =$request_Delete->IDVersion;
                $ProductName =$request_Delete->ProductName;

                // $delete=DB::delete('delete from product_price where IDVersion = ?', [$IDVersion]);
                $delete=DB::delete('delete from product_feedback where IDVersion = ?', [$IDVersion]);
                $delete2=DB::delete('delete from product_version where IDVersion = ?', [$IDVersion]);
                
                if ( $delete || $delete2 ) {
                    return redirect()->back()->with('success', 'Xóa phiên bản '.$IDVersion.' của  dịch vụ '.$ProductName.' thành công.'); 
                } else {
                   
                    return redirect()->back()->with('failed', 'Xóa phiên bản '.$IDVersion.' của  dịch vụ '.$ProductName.' thất bại.'); 
                }  
                 return redirect()->route('qldichvu');       
        }

        public function ProductDeleteAll(Request $request_DeleteAll){
            $request_DeleteAll->validate([
                'IDVersion'=>'required',
                'ProductName'=>'required',
                'IDProduct'=>'required'
                
            ]);
                $IDVersion =$request_DeleteAll->IDVersion;
                $ProductName =$request_DeleteAll->ProductName;
                $IDProduct =$request_DeleteAll->IDProduct;

                // $delete=DB::delete('delete from product_price where IDVersion = ?', [$IDVersion]);
                $delete1=DB::delete('delete from product_feedback where IDVersion = ?', [$IDVersion]);
                $delete2=DB::delete('delete from product_version where IDVersion = ?', [$IDVersion]);
                $delete3=DB::delete('delete from product_image where IDProduct = ?', [$IDProduct]);
                $delete4=DB::delete('delete from products where IDProduct = ?', [$IDProduct]);
                if ($delete1 || $delete2 || $delete3 || $delete4 ) {
                    return redirect()->back()->with('success', 'Xóa phiên bản '.$IDVersion.' của  dịch vụ '.$ProductName.' thành công.'); 
                } else {
                   
                    return redirect()->back()->with('failed', 'Xóa phiên bản '.$IDVersion.' của  dịch vụ '.$ProductName.' thất bại.'); 
                }  
                 return redirect()->route('qldichvu');       
        }
    }
