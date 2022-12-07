@include('staff_assets.header')
<x-app-layout>
    

    <div class="py-12 md:flex" style="padding-top: revert !important;">
         <div class="max-w-full mx-auto sm:px-1 lg:px-1">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- @include('staff_assets.switchermenu') --}}
            {{-- code --}}
            <div class="w-full sm:px-0" style="margin-top: 50px">
                <div class="px-4 md:px-10 py-4 md:py-7 bg-gray-100 dark:bg-gray-700 rounded-tl-lg rounded-tr-lg">
                    @include('alert')
                    <div class="sm:flex items-center justify-between">
                        <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 dark:text-white ">Quản lý khách hàng</p>
                        <div>
                                <div class="flex justify-start items-center py-7 relative">
                                  <input
                                    class="text-sm leading-none text-left text-gray-600 px-4 py-3 w-full border rounded border-gray-300 outline-none"
                                    type="text"
                                    placeholder="Tìm kiếm"
                                    id="CustomerSearch" 
                                    name="CustomerSearch"
                                  />
                                  <svg
                                    class="absolute right-3 z-10 cursor-pointer" width="24"height="24"viewBox="0 0 24 24"fill="none"xmlns="http://www.w3.org/2000/svg" >
                                    <path d="M10 17C13.866 17 17 13.866 17 10C17 6.13401 13.866 3 10 3C6.13401 3 3 6.13401 3 10C3 13.866 6.13401 17 10 17Z"stroke="#4B5563" stroke-width="1.66667"stroke-linecap="round"stroke-linejoin="round"/>
                                    <path d="M21 21L15 15" stroke="#4B5563"stroke-width="1.66667"stroke-linecap="round"stroke-linejoin="round"/>
                                  </svg>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto bg-white dark:bg-gray-800  shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
                    <table class="table-fixed  relative w-full whitespace-nowrap">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-indigo-700 dark:text-gray-400">
                            <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 dark:text-white ">
                                {{-- <th class="font-large text-left pl-4" style="font-size: large;font-style: oblique;">Mã số khách hàng</th> --}}
                                <th class="pl-4">Mã số khách hàng</th>
                                 <th class="pl-12">Tên khách hàng</th>
                                 {{-- <th class="pl-12">Địa chỉ khách hàng</th> --}}
                                {{-- <th class="font-large text-left pl-20" style="font-size: large;font-style: oblique;">Loại khách hàng</th> --}}
                                <th class="font-large text-left pl-20" style="font-size: large;font-style: oblique;">Thao tác</th>
                                <th class="font-large text-left pl-20" style="font-size: large;font-style: oblique;"></th>
                            </tr>
                        </thead>
                        <tbody class="w-full">
                            @foreach ($getCustomerNameKH as $_getCustomerNameKH)
                            <tr tabindex="0" class="focus:outline-none h-20 text-sm leading-none text-gray-800 dark:text-white  bg-white dark:bg-gray-800  hover:bg-gray-100 dark:hover:bg-gray-900  border-b border-t border-gray-100 dark:border-gray-700 ">
                                <td class="pl-4 cursor-pointer">
                                    <div class="flex items-center">
                                        <div class="pl-4">
                                            <p class="font-medium">{{$_getCustomerNameKH->IDCustomer}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="pl-12">
                                    <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$_getCustomerNameKH->CustomerName}}</p>
                                </td>
                                {{-- <td class="pl-12">
                                    <p class="font-medium">{{$_getCustomerNameKH->PhoneNumber}}</p>
                                </td> --}}
                                {{-- <td class="pl-20">
                                    <p class="font-medium">{{$_getCustomerNameKH->TypeOfCustomer}}</p>
                                </td> --}}
                                <td class="pl-12">
                                    <button class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                                    href="#modal-info{{$_getCustomerNameKH->IDCustomer}}" uk-toggle >Thông tin khách hàng</button>
                       
                                        <div id="modal-info{{$_getCustomerNameKH->IDCustomer}}" class="uk-modal" uk-modal>
                                            <div class="uk-modal-dialog uk-modal-body  bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center text-gray-800 " style="height: max-content; ">
                                                <button class="uk-modal-close-full " type="button" uk-close></button>


                                                         <div class="uk-card uk-card-default uk-width-1-1">
                                                            <div class="uk-card-header">
                                                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                                    
                                                                    <div class="uk-width-expand">
                                                                        <h3 class="uk-card-title uk-margin-remove-bottom">{{$_getCustomerNameKH->CustomerName}}</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="uk-card-body">
                                                                <p class="text-sm font-medium leading-none text-gray-800 dark:text-gray-800 mb-2  text-left "> <b>MSKH:</b> <span class="dark:text-red-600 text-right" > {{$_getCustomerNameKH->IDCustomer}} </span> </p>
                                                                <p class="text-sm font-medium leading-none text-gray-800 dark:text-gray-800 mb-2  text-left "> <b>Địa chỉ:</b> <span class="dark:text-red-600 text-right" > {{$_getCustomerNameKH->Address}} </span> </p>
                                                                <p class="text-sm font-medium leading-none text-gray-800 dark:text-gray-800 mb-2  text-left "> <b>Số điện thoại:</b> <span class="dark:text-red-600 text-right" > {{$_getCustomerNameKH->PhoneNumber}} </span> </p>
                                                                <p class="text-sm font-medium leading-none text-gray-800 dark:text-gray-800 mb-2  text-left "> <b>Email:</b> <span class="dark:text-red-600 text-right" > {{$_getCustomerNameKH->Email}} </span> </p>
       
                                                            </div>
                                                        </div>
                                        </div>
                                        </div>
                                </td>

                                <td class="pl-12">
                                    <button  class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                                    href="#modal-dvsd{{$_getCustomerNameKH->IDCustomer}}" uk-toggle >Các dịch vụ đang sử dụng</button>
                       
                                        <div id="modal-dvsd{{$_getCustomerNameKH->IDCustomer}}" class="uk-modal-full" uk-modal>
                                            <div class="uk-modal-dialog" style="height: -webkit-fill-available; ">
                                                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                                                <div class="px-4 md:px-10 py-4 md:py-7 bg-gray-100 dark:bg-gray-700 rounded-tl-lg rounded-tr-lg">
                                                    @include('alert')
                                                    <div class="sm:flex items-center justify-between">
                                                        <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 dark:text-white ">Các dịch vụ khách hàng {{$_getCustomerNameKH->CustomerName}} đang sử dụng</p>
                                                       
                                                    </div>
                                                </div>
                                                        <div class="overflow-x-auto bg-white dark:bg-gray-800  shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
                                                            <table class="table-fixed  relative w-full whitespace-nowrap">
                                                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-indigo-700 dark:text-gray-400">
                                                                    <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 dark:text-white ">                                    
                                                                    <th class="pl-12">Tên dịch vụ</th>
                                                                    <th class="pl-12">Phiên bản</th>
                                                                    <th class="pl-12">Nhân viên ký hợp đồng</th>
                                                                    <th class="pl-12">Ngày ký</th>
                                                                    <th class="pl-12">Ngày hết hạn</th>
                                                                    <th class="pl-12">Trạng thái</th>                                     
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($Contract as $_contract)
                                                                @if ($_contract->IDCustomer==$_getCustomerNameKH->IDCustomer)
                                                                <tr tabindex="0" class="focus:outline-none h-20 text-sm leading-none text-gray-800 dark:text-white  bg-white dark:bg-gray-800  hover:bg-gray-100 dark:hover:bg-gray-900  border-b border-t border-gray-100 dark:border-gray-700 ">
                                                                    <td class="pl-12">{{$_contract->ProductName}}</td>
                                                                    <td class="pl-12">{{$_contract->IDVersion}}</td>
                                                                    <td class="pl-12">{{$_contract->id}}---{{$_contract->name}}</td>
                                                                    <td class="pl-12">{{$_contract->created_at}}</td>
                                                                    <td class="pl-12">{{$_contract->Expired_at}}</td>
                                                                    <td class="pl-12">{{$_contract->ContractStatus}}</td>
                                                                </tr>    
                                                                @endif
                                                                @endforeach
                                                            </tbody>
                                                        </table> 
                                                        </div>
                                        </div>
                                        </div>
                                </td>
                            </tr>
                         @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- code --}}
                        </div>
                    </div>
                </div>
            </x-app-layout>
            <script>
                CustomerSearch.addEventListener("keyup", function() {
                    $valueCustomerSearch = $(CustomerSearch).val();
                    $.ajax({
                        type: 'get',
                        url: '{{ URL::to('Search_Customer') }}',
                        data: {
                            'Search_Customer': $valueCustomerSearch
                        },
                        success:function(data){
                            $('tbody.w-full').html(data);
                        }
                    });
                })
                $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
            </script>





