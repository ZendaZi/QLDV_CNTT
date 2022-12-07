@include('staff_assets.header')
<x-app-layout>
  

    <div class="py-12">
         <div class="max-w-full mx-auto sm:px-1 lg:px-1">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- @include('staff_assets.switchermenu') --}}
    
                <div class="px-4 md:px-10 py-4 md:py-7 bg-gray-100 dark:bg-gray-700 rounded-tl-lg rounded-tr-lg"style="margin-top: 50px;">
                    <div class="sm:flex items-center justify-between">
                        <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 dark:text-white ">Quản lý khuyến mãi</p>
                        <div>
                            @include('alert')
                        </div>
                        <div>
                            <button class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 "
                              type="button"
                             uk-toggle="target: #modalAdd">Tạo mã giảm giá </button>
                             
                        <div id="modalAdd" class="uk-modal"  uk-modal>
                            <div class="uk-modal-dialog uk-modal-body " >
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                  @include('admin_assets.PromotionManagement_Add')
                            </div>
                        </div> 
                        </div>
                       
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800  shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
                    <table class="w-full whitespace-nowrap">
                        <thead >
                            <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 dark:text-white ">
                               
                                <th class="font-large text-center pl-12" style="font-size: large;font-style: oblique;">Tên chương trình khuyến mãi</th>
                                <th class="font-large text-center pl-12" style="font-size: large;font-style: oblique;">Mã giảm giá</th>
                                {{-- <th class="font-large text-center pl-12" style="font-size: large;font-style: oblique;">Chi tiết khuyến mãi</th> --}}
                                <th class="font-large text-left pl-12" style="font-size: large;font-style: oblique;">Thao tác</th>
                                <th class="font-large text-left pl-12" style="font-size: large;font-style: oblique;"></th>
                                
                     
                            </tr>
                        </thead>
                        <tbody class="w-full">
                            @foreach ($Promotion as $_Promotion )
                            <tr tabindex="0" class="focus:outline-none h-20 text-sm leading-none text-gray-800 dark:text-white  bg-white dark:bg-gray-800  hover:bg-gray-100 dark:hover:bg-gray-900  border-b border-t border-gray-100 dark:border-gray-700 ">
                               
                                <td class="pl-12">
                                    <p class="text-xl text-center font-medium leading-none text-gray-800 dark:text-white ">{{$_Promotion->PromotionName}}</p>     
                                </td>
                                <td class="pl-12">
                                    <p class="text-sm  text-center font-medium leading-none text-gray-800 dark:text-white ">{{$_Promotion->Promotion}}</p>     
                                </td>
                               
                                {{-- <td class="pl-12">
                                    <p class="text-sm  text-center font-medium leading-none text-gray-800 dark:text-white ">{{$_Promotion->PromotionDetails}}</p>
                                </td> --}}
                                <td class="pl-12">
                                    <button class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full"
                                      type="button"
                                     uk-toggle="target: #modalDetails{{$_Promotion->IDPromotion}}">Chi tiết </button>
                                    <div id="modalDetails{{$_Promotion->IDPromotion}}" class="uk-modal"  uk-modal>
                                    <div class="uk-modal-dialog uk-modal-body  bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center text-gray-800 ">
                                            <button class="uk-modal-close-default" type="button" uk-close></button>
                                        <div class="uk-card uk-card-default uk-width-1-1 ">
                                            <div class="uk-card-header">
                                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                    <div class="uk-width-expand">
                                                        <h3 class="uk-card-title uk-margin-remove-bottom">{{$_Promotion->PromotionName}}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-card-body">
                                        <p class="text-sm font-medium leading-none text-gray-800 dark:text-gray-800 mb-2  text-left "> <b>Mã khuyến mãi:</b> <span class="dark:text-red-600 text-right" >{{$_Promotion->Promotion}} </span> </p>
                                        <p class="text-sm font-medium leading-none text-gray-800 dark:text-gray-800 mb-2  text-left "> <b>Chi tiết khuyến mãi:</b> <span class="dark:text-red-600 text-right"> {{$_Promotion->PromotionDetails}}</p>
                                        <p class="text-sm font-medium leading-none text-gray-800 dark:text-gray-800 mb-2  text-left "> <b>Lượt sử dụng còn lại:</b> <span class="dark:text-red-600 text-right"> {{$_Promotion->RemainingUsage}}</p>
                                        <p class="text-sm font-medium leading-none text-gray-800 dark:text-gray-800 mb-2  text-left "> <b>Tạo ngày:</b> <span class="dark:text-red-600 text-right"> {{$_Promotion->Created_at}}</p>
                                        <p class="text-sm font-medium leading-none text-gray-800 dark:text-gray-800 mb-2  text-left "> <b>Hết hạn ngày:</b> <span class="dark:text-red-600 text-right"> {{$_Promotion->Expired_at}}</p>
                                        <p class="text-sm font-medium leading-none text-gray-800 dark:text-gray-800 mb-2  text-left "> <b>Phần trăm giảm:</b> <span class="dark:text-red-600 text-right"> {{$_Promotion->Discount*100}}%</p>
                                        <p class="text-sm font-medium leading-none text-gray-800 dark:text-gray-800 mb-2  text-left "> <b>Dành cho danh mục:</b> <span class="dark:text-red-600 text-right"> {{$_Promotion->ForCategoryID}}</p>
                                        <p class="text-sm font-medium leading-none text-gray-800 dark:text-gray-800 mb-2  text-left "> <b>Dành cho dịch vụ:</b> <span class="dark:text-red-600 text-right"> {{$_Promotion->ForProductID}}</p>
                                        <p class="text-sm font-medium leading-none text-gray-800 dark:text-gray-800 mb-2  text-left "> <b>Dành cho phiên bản:</b> <span class="dark:text-red-600 text-right"> {{$_Promotion->ForVersionID}}</p>
                                            </div>
                                        </div>
                                     </div> 
                                </td>
                                <td class="pl-12">
                                    <button class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full"
                                    type="button"
                                    uk-toggle="target: #modalUpdate{{$_Promotion->IDPromotion}}">Cập nhật </button>
                                    <div id="modalUpdate{{$_Promotion->IDPromotion}}" class="uk-modal"  uk-modal>
                                    <div class="uk-modal-dialog uk-modal-body   font-medium rounded-lg text-sm px-5 py-2.5  text-gray-800 ">
                                        <button class="uk-modal-close-default" type="button" uk-close></button>
                                        @include('admin_assets.PromotionManagement_Update')
                                    </div> 
                                </td>
                            </tr>
                         @endforeach
                        </tbody>
                    </table>
                </div>
              
 </div>
        </div>
    </div>
</x-app-layout>
