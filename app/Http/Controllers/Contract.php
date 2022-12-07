<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class Contract extends Controller
{
    public function Search_Contract(Request $request_Search_Contract)
    {

        if ($request_Search_Contract->ajax()) {
            $CustomerContract = DB::table('contract')
                ->select('contract.IDCustomer', 'customer_infomation.CustomerName')
                ->join('customer_infomation', 'contract.IDCustomer', '=', 'customer_infomation.IDCustomer')
                ->where('TypeOfCustomer', '!=', 'Potential')
                ->where('CustomerName', 'LIKE', '%' . $request_Search_Contract->Search_Contract . '%')
                ->groupBy('IDCustomer')
                ->get();
            $Contract = DB::table('Contract')
                ->join('Customer_Infomation', 'Contract.IDCustomer', '=', 'Customer_Infomation.IDCustomer')
                ->join('Products', 'Contract.IDProduct', '=', 'Products.IDProduct')
                ->join('Users', 'Contract.ID', '=', 'Users.ID')
                ->join('Contract_Image', 'Contract.IDContract', '=', 'Contract_Image.IDContract')
                ->select('Contract.*', 'Customer_Infomation.*', 'Products.ProductName', 'Users.name', 'Contract_Image.Link')
                ->get();
            $role = $role = Auth::user()->role;
            $CountPending = DB::table('contract')
                ->select('IDCustomer', DB::raw("COUNT(ContractStatus) as count"))
                ->where('ContractStatus', '=', 'Pending')
                ->groupBy('IDCustomer')
                ->get();
            $ContractPending = DB::table('Contract')
                ->join('Customer_Infomation', 'Contract.IDCustomer', '=', 'Customer_Infomation.IDCustomer')
                ->join('Products', 'Contract.IDProduct', '=', 'Products.IDProduct')
                ->join('Users', 'Contract.ID', '=', 'Users.ID')
                ->join('Contract_Image', 'Contract.IDContract', '=', 'Contract_Image.IDContract')
                ->select('Contract.*', 'Customer_Infomation.*', 'Products.ProductName', 'Users.name', 'Contract_Image.Link')
                ->where('ContractStatus', '=', 'Pending')
                ->get();
        }
        return view('BladeAjax.ContractManagement_Ajax', compact('CustomerContract', 'Contract', 'role', 'CountPending', 'ContractPending'));
    }
    public function Search_CustomerName(Request $request_SearchCustomerName)
    {

        if ($request_SearchCustomerName->ajax()) {
            $outputSearch_CustomerName = '';
            $CustomerNames = DB::table('customer_infomation')
                ->select('*')
                ->where('CustomerName', 'LIKE', '%' . $request_SearchCustomerName->Search_CustomerName . '%')
                ->get();



            if ($CustomerNames) {
                foreach ($CustomerNames as $key => $_CustomerName) {
                    if ($_CustomerName->CustomerName == $request_SearchCustomerName->Search_CustomerName) {
                        $outputSearch_CustomerName .= '
                    <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Địa chỉ:</label>
                    <div class="uk-form-controls">
                        <label class="uk-form-label" style="width: auto" for="form-horizontal-text">' . $_CustomerName->Address . '</label> <br>
                        
                        </div>
                </div>
            
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Số điện thoại:</label>
                    <div class="uk-form-controls">
                        <label class="uk-form-label" style="width: auto" for="form-horizontal-text">' . $_CustomerName->PhoneNumber . '</label> <br>
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Email:</label>
                    <div class="uk-form-controls">
                        <label class="uk-form-label" style="width: auto" for="form-horizontal-text">' . $_CustomerName->Email . '</label> <br>
                    </div>
                </div>
                <input class="uk-input uk-form-width-large" value="' . $_CustomerName->IDCustomer . '" id="IDCustomer" name="IDCustomer" type="hidden">
                <input class="uk-input uk-form-width-large" value="' . $_CustomerName->TypeOfCustomer . '"  name="TypeOfCustomer" type="hidden">
                ';
                    }
                }


                return Response($outputSearch_CustomerName);
            }
        }
    }

    public function Search_ProductCategory(Request $request_Search_ProductC)
    {

        if ($request_Search_ProductC->ajax()) {
            $outputSearch_Product = '';
            $outputSearch_Productpre = '';
            $returnvalue = '';
            $getProduct = DB::table('products')
                ->select('*')
                ->where('IDCategory', 'LIKE', '%' . $request_Search_ProductC->valueID . '%')
                ->get();

            if ($getProduct) {
                $outputSearch_Productpre .= ' <option value="">Vui lòng chọn dịch vụ</option>';
                foreach ($getProduct as $key => $_getProduct) {
                    $outputSearch_Product .= '
                <option value="' . $_getProduct->IDProduct . '"> ' . $_getProduct->ProductName . '</option>
                ';
                }
                $returnvalue = $outputSearch_Productpre . $outputSearch_Product;
                return Response($returnvalue);
            }
        }
    }

    public function Search_Version(Request $request_Search_Version)
    {

        if ($request_Search_Version->ajax()) {
            $outputSearch_Version = '';
            $getVersion = DB::table('product_version')
                ->select('*')
                // ->join('Product_price','product_version.IDVersion','=','Product_price.IDVersion')
                ->where('IDProduct', 'LIKE', '%' . $request_Search_Version->valueID . '%')
                ->get();
            if ($getVersion) {
                foreach ($getVersion as $key => $_getVersion) {
                    $outputSearch_Version .= '
                <option value="' . $_getVersion->IDVersion . '">Phiên bản ' . $_getVersion->IDVersion . '</option>
                ';
                }
                return Response($outputSearch_Version);
            }
        }
    }


    public function Search_ContractPrice(Request $request_Search_ContractPrice)
    {

        if ($request_Search_ContractPrice->ajax()) {
            $outputSearch_VersionPrice = '';
            $checkPromotion = DB::table('promotion')
                ->where('promotion.Promotion', 'LIKE', '%' . $request_Search_ContractPrice->checkpromotion . '%', 'AND', 'promotion.ForVersionID', 'LIKE', '%' . $request_Search_ContractPrice->VersionPrice . '%')
                ->Orwhere('promotion.Promotion', 'LIKE', '%' . $request_Search_ContractPrice->checkpromotion . '%', 'AND', 'promotion.ForVersionID', 'LIKE', '%' . $request_Search_ContractPrice->getProductSearch . '%')
                ->Orwhere('promotion.Promotion', 'LIKE', '%' . $request_Search_ContractPrice->checkpromotion . '%', 'AND', 'promotion.ForVersionID', 'LIKE', '%' . $request_Search_ContractPrice->getIDCategory . '%')
                ->get();
            foreach ($checkPromotion as $_checkPromotion) {
                $valuePromotion = $_checkPromotion->Discount;
            }
            $getVersionPrice = DB::table('product_version')
                ->select('*')
                ->where('product_version.IDVersion', 'LIKE', '%' . $request_Search_ContractPrice->VersionPrice . '%')
                ->get();

            if (isset($valuePromotion)) {
                $now = Carbon::now();
                $now2 = Carbon::now();
                $now->toDateTimeString();
                $valueTimeContract = round(abs($request_Search_ContractPrice->getTimeContract));
                settype($valueTimeContract, "float");
                $valueadd = $now->addMonths($valueTimeContract);

                if ($getVersionPrice && $request_Search_ContractPrice->VersionPrice != null) {
                    foreach ($getVersionPrice as $_getVersionPrice) {
                        $getPrice = $_getVersionPrice->Price;
                        settype($getPrice, "float");
                        settype($totalmoney, "float");

                        $totalmoney = ($getPrice * $valueTimeContract) - ($getPrice * $valueTimeContract * $valuePromotion);
                        $valuePromotion2 = $valuePromotion * 100;
                        $outputSearch_VersionPrice .= ' <p class="font-medium text-green-500" >
                        Mã khuyến mãi hợp lệ. Hợp đồng được giảm ' . $valuePromotion2 . '% </p> <br> 

                        <p class="font-medium text-gray-800" >Giá trị hợp đồng là: 
                        ' . $totalmoney . ' ' . $_getVersionPrice->CurrencyUnit . '</p>
                        <input type="hidden" name="Expired_at" value="' . $valueadd . '">
                        <input type="hidden" name="created_at" value="' . $now2 . '">
                        <input type="hidden" name="ContractPrice" value="' . $totalmoney . '">
                        <input type="hidden" name="RemainingUsage" value="' .$_checkPromotion->RemainingUsage  . '">
                        ';
                    }
                }
                return Response($outputSearch_VersionPrice);
            } else {
                $now = Carbon::now();
                $now2 = Carbon::now();
                $now->toDateTimeString();
                $valueTimeContract = round(abs($request_Search_ContractPrice->getTimeContract));
                settype($valueTimeContract, "float");
                $valueadd = $now->addMonths($valueTimeContract);

                if ($getVersionPrice && $request_Search_ContractPrice->VersionPrice != null) {
                    foreach ($getVersionPrice as $_getVersionPrice) {
                        $getPrice = $_getVersionPrice->Price;
                        settype($getPrice, "float");
                        settype($totalmoney, "float");

                        $totalmoney = $getPrice * $valueTimeContract;
                        $outputSearch_VersionPrice .= ' <p class="font-medium text-red-500" >
                        Mã khuyến mãi không áp dụng cho dịch vụ này hoặc đã hết hiệu lực.</p> <br> 

                        <p class="font-medium text-gray-800" >Giá trị hợp đồng là: 
                        ' . $totalmoney . ' ' . $_getVersionPrice->CurrencyUnit . '</p>
                        <input type="hidden" name="Expired_at" value="' . $valueadd . '">
                        <input type="hidden" name="created_at" value="' . $now2 . '">
                        <input type="hidden" name="ContractPrice" value="' . $totalmoney . '">
                        ';
                    }
                }
                return Response($outputSearch_VersionPrice);
            }
        }
    }


    public function AddContract(Request $requestAddContract)
    {
        // $requestAddContract->validate([
        //     'IDCustomer'=>'required',
        //     'id'=>'required',
        //     'IDProduct'=>'required',
        //     'IDVersion'=>'required',
        //     'Created_at'=>'required',
        //     'Expired_at'=>'required',
        //     'ContractPrice'=>'required',
        //     'ContractStatus'=>'required',
        // ]);
        $TypeOfCustomer = $requestAddContract->TypeOfCustomer;
        $IDContract = $requestAddContract->IDContract;
        $IDCustomer = $requestAddContract->IDCustomer;
        $id = $requestAddContract->ID;
        $IDProduct = $requestAddContract->IDProduct;
        $IDVersion = $requestAddContract->IDVersion;
        $created_at = $requestAddContract->created_at;
        $expired_at = $requestAddContract->Expired_at;
        $ContractPrice = $requestAddContract->ContractPrice;
        $ContractStatus = $requestAddContract->ContractStatus;
        // $Name = $requestAddContract->imageupload;
        // $Storage = '~/public/storage/contract-image/';
        $Link = $requestAddContract->imageupload;
        $image = $requestAddContract->file('imageupload');
        $storedPath = $image->move('image/contract', $image->getClientOriginalName());
        $ContractImgageDetails = null;
        $RulesContractDetails = null;
        $promotion = $requestAddContract->checkpromotion;
        $RemainingUsage=$requestAddContract->RemainingUsage;
        $RemainingUsage2=$RemainingUsage-1;
        if ($TypeOfCustomer == 'Enterprise') {
            DB::insert(
                'INSERT INTO `contract`(
            `IDContract`,
            `IDCustomer`,
            `id`,
            `IDProduct`,
            `IDVersion`,
            `created_at`,
            `Expired_at`,
            `ContractPrice`,
            `ContractStatus`
        ) values ( ?,?, ?, ?, ?, ?, ?, ?, ?)',
                [$IDContract, $IDCustomer, $id, $IDProduct, $IDVersion, $created_at, $expired_at, $ContractPrice, $ContractStatus]
            );
            DB::insert(
                'INSERT INTO `contract_image`( 
            `IDContract`,
            `Link`,
            `ContractImgageDetails`,
            `Created_at`
            
        ) values ( ?, ?, ?, ?)',
                [$IDContract, $storedPath, $ContractImgageDetails, $created_at]
            );
            return redirect()->route('hopdong');
        } elseif ($TypeOfCustomer != 'Enterprise') {
            DB::update('UPDATE `customer_infomation` SET `RemainingUsage`='.$RemainingUsage2.' WHERE Promotion=' . $promotion .'');
            DB::insert(
                'INSERT INTO `contract`(
                `IDContract`,
                `IDCustomer`,
                `id`,
                `IDProduct`,
                `IDVersion`,
                `created_at`,
                `Expired_at`,
                `ContractPrice`,
                `ContractStatus`
            ) values ( ?,?, ?, ?, ?, ?, ?, ?, ?)',
                [$IDContract, $IDCustomer, $id, $IDProduct, $IDVersion, $created_at, $expired_at, $ContractPrice, $ContractStatus]
            );
            DB::insert(
                'INSERT INTO `contract_image`( 
                `IDContract`,
                `Link`,
                `ContractImgageDetails`,
                `Created_at`
                
            ) values ( ?, ?, ?, ?)',
                [$IDContract, $storedPath, $ContractImgageDetails, $created_at]
            );
            DB::insert(
                'INSERT INTO `term_of_contract`(
                `IDContract`,
                `RulesContractDetails`,
                `Created_at`
            
                
            ) values (?, ?, ?)',
                [$IDContract, $RulesContractDetails, $created_at]
            );
            DB::update('UPDATE `promotion` SET `TypeOfCustomer`="Enterprise" WHERE IDCustomer=' . $IDCustomer . '');
            return redirect()->route('hopdong');
        }
    }


    public function ContractApproval(Request $requestApproval)
    {
        // $requestApproval->validate([
        //     'IDContract'=>'required',

        // ]);
        $IDContract = $requestApproval->IDContract;
        $approval = DB::update('UPDATE `contract` SET `ContractStatus`="Active" WHERE IDContract=' . $IDContract . '');
        if ($approval) {
            return redirect()->route('hopdong')->with('success', 'Xét duyệt hợp đồng số ' . $IDContract . ' thành công.');
        } else {

            return redirect()->route('hopdong')->with('failed', 'Xét duyệt hợp đồng số ' . $IDContract . ' thất bại.');
        }
    }

    public function WarningContract(Request $requestTime)
    {
        if ($requestTime->ajax()) {
           
           
            $Contract = DB::table('Contract')
            ->join('Customer_Infomation', 'Contract.IDCustomer', '=', 'Customer_Infomation.IDCustomer')
            ->join('Products', 'Contract.IDProduct', '=', 'Products.IDProduct')
            ->join('Users', 'Contract.ID', '=', 'Users.ID')
            ->join('Product_Version', 'Contract.IDProduct', '=', 'Product_Version.IDProduct')
            ->join('Contract_Image', 'Contract.IDContract', '=', 'Contract_Image.IDContract')
            ->orderBy('Expired_at','DESC')
           ->distinct()->get();
           $StatusTime=$requestTime->Time;
          $now=Carbon::now();
            if ($StatusTime==1) {
                $valueStatus=1;
                return view('BladeAjax.ContractExpired_Ajax',compact('Contract','now','valueStatus'));
            }
            elseif($StatusTime==0){
               
                    $valueStatus=0;
                    return view('BladeAjax.ContractExpired_Ajax',compact('Contract','now','valueStatus'));
               
            }elseif($StatusTime==null)
            {
                return view('BladeAjax.ContractExpired_Ajax_All',compact('Contract','now'));
            }
        }
    }
}
