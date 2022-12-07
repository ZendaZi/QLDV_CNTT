<?php

use Database\Seeders\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Psy\Command\WhereamiCommand;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('login', function () {
//     return view('form.login');
// });
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('redirects',  'App\Http\Controllers\HomeController@index');
});




Route::get('khachhangtiemnang',function(){
    $Products = DB::table('Products')
            ->join('Category', 'Products.IDCategory', '=', 'Category.IDCategory')
            ->join('Product_image', 'Products.IDProduct', '=', 'Product_image.IDProduct')
            ->select('Products.*', 'Category.IDCategory', 'Product_Image.Link')
            ->get();

            $PotentialCustomer = DB::table('Customer_Infomation')
           
            ->where('TypeOfCustomer', 'LIKE', 'Potential')
            ->Paginate(2);
    return view('staff_assets.PotentialCustomer_Read', compact('Products','PotentialCustomer'))->render();
    });
Route::get('khachhang',function(){
    $Contract = DB::table('Contract')
    ->join('Customer_Infomation', 'Contract.IDCustomer', '=', 'Customer_Infomation.IDCustomer')
    ->join('Products', 'Contract.IDProduct', '=', 'Products.IDProduct')
    ->join('Users', 'Contract.ID', '=', 'Users.ID')
    ->select('Contract.*', 'Customer_Infomation.*', 'Products.*', 'Users.*')
    ->get();
    $getCustomerNameKH=DB::table('Customer_Infomation')
    ->get();
    $getPotentialServices=DB::table('product_version')
    
    ->get();
    $getPotentialServicesContract=DB::table('contract')
   
    ->get();
    return view('staff_assets.Read_CustomerInfo', compact('Contract','getCustomerNameKH','getPotentialServices','getPotentialServicesContract'))->render();
    });

Route::get('dichvu',function(){
    $role=Auth::user()->role;
    $Category = DB::table('Category')->get();
    $Customer = DB::table('customer_infomation')->get();
    //Bien Product de xuat list product
    $Products = DB::table('Products')
        ->join('Category', 'Products.IDCategory', '=', 'Category.IDCategory')
        // ->join('Product_image', 'Products.IDProduct', '=', 'Product_image.IDProduct')
        ->select('Products.*', 'Category.IDCategory')
        ->get(); 
       
    // Bien VersionPrice de xuat gia cua tung phien ban
    $VersionPrice = DB::table('Products')
        ->join('Product_version', 'Products.IDProduct', '=', 'Product_version.IDProduct')
        ->select('Products.*', 'Product_version.*')
        ->orderByDesc('IDVersion')
        ->get();
      
        // Bien VersionPrice de xuat gia cua tung phien ban
    $Feedback = DB::table('Product_version')
    ->join('Product_feedback', 'Product_version.IDVersion', '=', 'Product_feedback.IDVersion')
    ->join('customer_infomation', 'Product_feedback.IDCustomer', '=', 'customer_infomation.IDCustomer')
    ->select( 'Product_version.*', 'Product_feedback.*','customer_infomation.CustomerName')
    ->Paginate(5);
   $slideshow=DB::table('Product_image')->get();

    return view('search', compact('Category','Customer','Products','VersionPrice','Feedback','role','slideshow'))->render();
    });


Route::get('hopdong',function(){
    
    $Contract = DB::table('Contract')
    ->join('Customer_Infomation', 'Contract.IDCustomer', '=', 'Customer_Infomation.IDCustomer')
    ->join('Products', 'Contract.IDProduct', '=', 'Products.IDProduct')
    ->join('Users', 'Contract.ID', '=', 'Users.ID')
    ->join('Contract_Image', 'Contract.IDContract', '=', 'Contract_Image.IDContract')
    ->select('Contract.*', 'Customer_Infomation.*', 'Products.ProductName', 'Users.name','Contract_Image.Link')
    ->get();

    $ContractPending = DB::table('Contract')
    ->join('Customer_Infomation', 'Contract.IDCustomer', '=', 'Customer_Infomation.IDCustomer')
    ->join('Products', 'Contract.IDProduct', '=', 'Products.IDProduct')
    ->join('Users', 'Contract.ID', '=', 'Users.ID')
    ->join('Contract_Image', 'Contract.IDContract', '=', 'Contract_Image.IDContract')
    ->select('Contract.*', 'Customer_Infomation.*', 'Products.ProductName', 'Users.name','Contract_Image.Link')
    ->where('ContractStatus','=','Pending')
    ->get();
    
    $CustomerContract = DB::table('contract')
    ->select('contract.IDCustomer', 'customer_infomation.CustomerName')
    ->join('customer_infomation','contract.IDCustomer','=','customer_infomation.IDCustomer')
    ->groupBy('IDCustomer')
    ->get(); 
    $id = Auth::id(); 
     $getStaff=DB::table('information_user')
    ->select('*')
    ->where('ID','=',''.$id.'')
    ->get();
    $getProduct= DB::table('Products')
    ->select('*')
    ->get();
    $getCategory= DB::table('Category')
    ->get();
    $getIDContract= DB::table('Contract')->count()+1;
    $getCustomerName=DB::table('customer_infomation')
    ->select('*')
    ->get();
    $ProductFeedback=DB::table('product_feedback') 
    ->join('Product_version','product_feedback.IDVersion','=','Product_version.IDVersion')
    ->join('Products','Product_version.IDProduct','=','Products.IDProduct')
    ->get(); 
    $created_at = Carbon::now();

    $CountPending =DB::table('contract')
    ->select('IDCustomer', DB::raw("COUNT(ContractStatus) as count"))
    ->where('ContractStatus','=','Pending')
    ->groupBy('IDCustomer')
    ->get();
    $role= $role=Auth::user()->role; 
    return view('staff_assets.ContractManagement_Read', compact('Contract','CustomerContract','getStaff','getProduct','created_at','getIDContract','getCustomerName','ProductFeedback','CountPending','role','ContractPending','getCategory'))->render();
    })->name('hopdong');


Route::get('phanhoi',function(){
    $role=Auth::user()->role;
    $ProductFeedback=DB::table('product_feedback') 
    ->join('Product_version','product_feedback.IDVersion','=','Product_version.IDVersion')
    ->join('Products','Product_version.IDProduct','=','Products.IDProduct')
    ->get(); 
    $CustomerContract = DB::table('contract')
    ->select('contract.IDCustomer', 'customer_infomation.*')
    ->join('customer_infomation','contract.IDCustomer','=','customer_infomation.IDCustomer')
    ->groupBy('customer_infomation.IDCustomer')
    ->get(); 
    $getCustomerName=DB::table('customer_infomation')
    ->select('*')
    ->get();
    $Contract=DB::table('contract')
    ->select('contract.*', 'products.ProductName')
    ->join('products','contract.IDProduct','=','products.IDProduct')
    ->get();
    $id = Auth::id(); 
    $Created_at = Carbon::now();
    return view('staff_assets.feedback', compact('CustomerContract','ProductFeedback','getCustomerName','Contract','id','Created_at','role'))->render();
    })->name('phanhoi');

Route::get('qldanhmuc',function(){
    $role=Auth::user()->role;
    $getCategory = DB::table('category')
    ->get();
    $getProduct = DB::table('products')
    ->get();
    if($role==1){
        return view('admin_assets.Category_CRUD',compact('getCategory','role','getProduct'));
    }else{
        return redirect()->route('dashboard'); 
    }
   
    })->name('qldanhmuc');

Route::get('qldichvu',function(){
    $role=Auth::user()->role;
    $getCategory = DB::table('category')
    ->get();
    $countProduct= DB::table('products')
    ->count('IDProduct')+1;

    $getProduct = DB::table('Products')
    ->join('Product_version', 'Products.IDProduct', '=', 'Product_version.IDProduct')
    // ->join('Product_image', 'Products.IDProduct', '=', 'Product_image.IDProduct')
    // ->select('Products.*', 'Product_version.*', 'Product_image.*')
    ->get();

    $getProductVersion= DB::table('Product_Version')
    ->get();
 if($role==1){
    return view('admin_assets.Product_CRUD',compact('getCategory','role','getProduct','countProduct','getProductVersion'));
 }else{
    return redirect()->route('dashboard'); 
 }
    
    })->name('qldichdvu');
    

    Route::get('thongke',function(){
        $role=Auth::user()->role;
        $getProduct= DB::table('Products')
        ->get();
            return view('staff_assets.Chart',compact('role','getProduct'));
        })->name('thongke');
        

Route::get('qlnhanvien',function(){
        $role=Auth::user()->role;
        $getUser= DB::table('users')
        // ->join('information_user', 'users.id', '=', 'information_user.ID')
        ->select('users.id','users.name','users.email','users.role')
        ->get();
        $getInfoUser=DB::table('information_user')
        ->get();
        $countUser= DB::table('users')
        ->count('id')+1;
       
  $created_at=Carbon::now();    
        if($role==1){
            return view('admin_assets.MemberManagement_CRUD',compact('role','getUser','getInfoUser','countUser','created_at'));
        } else{
            return redirect()->route('dashboard'); 
        }
})->name('qlnhanvien');

Route::get('/CompetenceFilter',  'App\Http\Controllers\MemberManagement@CompetenceFilter');


    
    

 Route::get('xetduyet',function(){
    
            $role=Auth::user()->role;
        
            $ContractPending = DB::table('Contract')
            ->join('Customer_Infomation', 'Contract.IDCustomer', '=', 'Customer_Infomation.IDCustomer')
            ->join('Products', 'Contract.IDProduct', '=', 'Products.IDProduct')
            ->join('Users', 'Contract.ID', '=', 'Users.ID')
            ->join('Contract_Image', 'Contract.IDContract', '=', 'Contract_Image.IDContract')
            ->select('Contract.*', 'Customer_Infomation.*', 'Products.ProductName', 'Users.name','Contract_Image.Link')
            ->where('ContractStatus','=','Pending')
            ->get();
            
            $CountPending =DB::table('contract')
            ->select('IDCustomer', DB::raw("COUNT(ContractStatus) as count"))
            ->where('ContractStatus','=','Pending')
            ->groupBy('IDCustomer')
            ->get();
            $role= $role=Auth::user()->role; 
            return view('admin_assets.Contract_Approval', compact('CountPending','role','ContractPending'))->render();
})->name('xetduyet');


Route::get('canhbaohopdong',function(){
    $now=Carbon::now();
    $now->toDateTimeString();
    $Contract = DB::table('Contract')
    ->join('Customer_Infomation', 'Contract.IDCustomer', '=', 'Customer_Infomation.IDCustomer')
    ->join('Products', 'Contract.IDProduct', '=', 'Products.IDProduct')
    ->join('Users', 'Contract.ID', '=', 'Users.ID')
    ->join('Product_Version', 'Contract.IDProduct', '=', 'Product_Version.IDProduct')
    ->join('Contract_Image', 'Contract.IDContract', '=', 'Contract_Image.IDContract')
    // ->select ('Contract.*', 'Customer_Infomation.*', 'Products.ProductName', 'Users.name','Contract_Image.Link')
    ->orderBy('Expired_at','DESC')
   ->distinct()->get();
   
  
    $CustomerContract = DB::table('contract')
    ->select('contract.IDCustomer', 'customer_infomation.CustomerName')
    ->join('customer_infomation','contract.IDCustomer','=','customer_infomation.IDCustomer')
    ->groupBy('IDCustomer')
    ->get(); 
   

    return view('staff_assets.View_ContractExpired',compact('Contract','CustomerContract','now'));
})->name('canhbaohopdong');
Route::get('/WarningContract',  'App\Http\Controllers\Contract@WarningContract');

Route::get('khuyenmai',function(){
    $now=Carbon::now();
    $now->toDateTimeString();
  
   
  
    $Promotion = DB::table('promotion')
    ->get(); 
    $Category=DB::table('category')
    ->get(); 
    $Product=DB::table('products')
    ->get(); 
    $ProductVersion=DB::table('product_version')
    ->join('Products', 'product_version.IDProduct', '=', 'Products.IDProduct')
    ->get(); 

    return view('admin_assets.PromotionManagement_CRUD',compact('Promotion','Category','Product','ProductVersion','now'));
})->name('khuyenmai');
Route::post('/PromotionAdd', 'App\Http\Controllers\Promotion@PromotionAdd');
Route::post('/PromotionUpdate', 'App\Http\Controllers\Promotion@PromotionUpdate');

Route::get('thongke',function(){
    
    $role=Auth::user()->role;

  $CountHotVersion=DB::table('contract')
  ->join('product_version', 'contract.IDVersion', '=', 'product_version.IDVersion')
  ->groupBy('contract.IDVersion')
  ->select('product_version.IDVersion','product_version.IDProduct',DB::raw("COUNT(contract.IDVersion) as countIDVersion"))
  ->orderByDesc('countIDVersion')
  ->get();
  $ListProduct=DB::table('products')
  ->join('product_version', 'products.IDProduct', '=', 'product_version.IDProduct')
  ->distinct()
  ->get();
  $CountCustomerUse=DB::table('contract')
  ->join('customer_infomation', 'contract.IDCustomer', '=', 'customer_infomation.IDCustomer')
  ->groupBy('contract.IDCustomer')
  ->select('customer_infomation.CustomerName',DB::raw("COUNT(contract.IDCustomer) as countIDCustomer"))
  ->get();
    return view('admin_assets.Statistic_CRUD', compact('CountHotVersion','role','ListProduct','CountCustomerUse'))->render();
})->name('xetduyet');

        // List Route Controller




        //KH tiem nang

Route::post('/PotentialCustomer-form', 'App\Http\Controllers\PotentialCustomerRequest@PotentialCustomerRequest');
Route::post('/PotentialCustomer-edit', 'App\Http\Controllers\PotentialCustomerRequest@PotentialCustomerRequest_Edit');
Route::post('/PotentialCustomer-detele', 'App\Http\Controllers\PotentialCustomerRequest@PotentialCustomerRequest_Delete');

//Feedback
Route::post('/Addfeedback', 'App\Http\Controllers\Feedback@FeedbackAddRequest');
Route::post('/Editfeedback', 'App\Http\Controllers\Feedback@FeedbackEditRequest');
Route::post('/Deletefeedback', 'App\Http\Controllers\Feedback@FeedbackDeleteRequest');
Route::get('/Search_Feedback',  'App\Http\Controllers\Feedback@Search_Feedback');

//Dich Vu
Route::get('/searchproduct',  'App\Http\Controllers\APISearchProduct@ajaxsearch');
Route::get('/search', 'App\Http\Controllers\APISearchProduct@search');
Route::get('/CategoryProduct_search', 'App\Http\Controllers\APISearchProduct@CategoryProduct_search');

Route::get('/searchc',  'App\Http\Controllers\SearchCustomer@fetchCustomer');
Route::get('/Search_Customer',  'App\Http\Controllers\SearchCustomer@Search_Customer');

Route::get('/Search_PotentialCustomer',  'App\Http\Controllers\SearchCustomer@Search_PotentialCustomer');

//Contract
Route::get('/Search_Contract',  'App\Http\Controllers\Contract@Search_Contract');
Route::get('/Search_Contract2',  'App\Http\Controllers\Contract@Search_ContractData');
Route::get('/Search_ProductCategory',  'App\Http\Controllers\Contract@Search_ProductCategory');

//Them hop dong
Route::get('/Search_CustomerName',  'App\Http\Controllers\Contract@Search_CustomerName');
Route::get('/Search_Version',  'App\Http\Controllers\Contract@Search_Version');
Route::get('/Search_ContractPrice',  'App\Http\Controllers\Contract@Search_ContractPrice');

Route::post('/AddContract_form', 'App\Http\Controllers\Contract@AddContract');

Route::post('/ContractApproval',  'App\Http\Controllers\Contract@ContractApproval');
//

//Danh Muc
Route::post('/CategoryAdd', 'App\Http\Controllers\CategoryManagement@CategoryAdd');
Route::post('/CategoryUpdate', 'App\Http\Controllers\CategoryManagement@CategoryUpdate');
Route::post('/CategoryDelete', 'App\Http\Controllers\CategoryManagement@CategoryDelete');


//QLDichVu
Route::get('/PMCateSearch',  'App\Http\Controllers\ProductManagement@CategoryProduct_search');
Route::post('/ProductAdd', 'App\Http\Controllers\ProductManagement@ProductAdd');
Route::post('/ProductUpdate', 'App\Http\Controllers\ProductManagement@ProductUpdate');
Route::post('/ProductDelete', 'App\Http\Controllers\ProductManagement@ProductDelete');
Route::post('/ProductDeleteAll', 'App\Http\Controllers\ProductManagement@ProductDeleteAll');

//QLNhanVien
Route::post('/MemberAdd', 'App\Http\Controllers\MemberManagement@MemberAdd');
Route::post('/MemberUpdate', 'App\Http\Controllers\MemberManagement@MemberUpdate');
Route::post('/MemberDelete', 'App\Http\Controllers\MemberManagement@MemberDelete');
Route::post('/MemberAllow', 'App\Http\Controllers\MemberManagement@MemberAllow');

