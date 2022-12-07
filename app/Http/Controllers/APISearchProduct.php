<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class APISearchProduct extends Controller
{
    public function ajaxsearch()
    {
        $products = DB::table('products')->get();
        return view('search', compact('products'));
    }
    public function search(Request $request1)
    {

        if ($request1->ajax()) {

            $Products = DB::table('products')
                ->join('Category', 'Products.IDCategory', '=', 'Category.IDCategory')
                // ->join('Product_image', 'Products.IDProduct', '=', 'Product_image.IDProduct')
                ->where('ProductName', 'LIKE', '%' . $request1->search . '%')->get();
            $VersionPrice = DB::table('Products')
                ->join('Product_version', 'Products.IDProduct', '=', 'Product_version.IDProduct')
                // ->join('Product_price', 'Product_version.IDVersion', '=', 'Product_price.IDVersion')
                ->select('Products.*', 'Product_version.*')
                ->get();
            $Feedback = DB::table('Product_version')
                ->join('Product_feedback', 'Product_version.IDVersion', '=', 'Product_feedback.IDVersion')
                ->join('customer_infomation', 'Product_feedback.IDCustomer', '=', 'customer_infomation.IDCustomer')
                ->select('Product_version.*', 'Product_feedback.*', 'customer_infomation.CustomerName')
                ->Paginate(2);
                $Category = DB::table('Category')->get();
                $slideshow=DB::table('Product_image')->get();
            return view('BladeAjax.ServicesManagement_Ajax', compact('Products','VersionPrice','Feedback','slideshow'));
        }
    }


    public function CategoryProduct_search(Request $request2)
    {
        if ($request2->ajax()) {
            $Products = DB::table('products')
                ->join('Category', 'Products.IDCategory', '=', 'Category.IDCategory')
                // ->join('Product_image', 'Products.IDProduct', '=', 'Product_image.IDProduct')
                ->where('category.CategoryName', 'LIKE', '%' . $request2->CategoryProduct_search . '%')->get();
            $VersionPrice = DB::table('Products')
                ->join('Product_version', 'Products.IDProduct', '=', 'Product_version.IDProduct')
                // ->join('Product_price', 'Product_version.IDVersion', '=', 'Product_price.IDVersion')
                ->select('Products.*', 'Product_version.*')
                ->get();

            $Feedback = DB::table('Product_version')
                ->join('Product_feedback', 'Product_version.IDVersion', '=', 'Product_feedback.IDVersion')
                ->join('customer_infomation', 'Product_feedback.IDCustomer', '=', 'customer_infomation.IDCustomer')
                ->select('Product_version.*', 'Product_feedback.*', 'customer_infomation.CustomerName')
                ->Paginate(5);
                $slideshow=DB::table('Product_image')->get();
            return view('BladeAjax.ServicesManagement_Ajax', compact('Products','VersionPrice','Feedback','slideshow'));
            }
        }
        
}