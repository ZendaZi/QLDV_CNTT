 @include('staff_assets.header')
<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
         <div class="max-w-full mx-auto sm:px-1 lg:px-1">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- @include('staff_assets.switchermenu') --}}
              
   
        <div class="w-full sm:px-0" style="margin-top: 50px">
                    <div class="px-4 md:px-10 py-4 md:py-7 bg-gray-100 dark:bg-gray-700 rounded-tl-lg rounded-tr-lg">
                        {{-- @include('alert') --}}
                        <div class="sm:flex items-center justify-between">
                            <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 dark:text-white ">Quản lý phản hồi</p>
                           
                            <div>
                                    <div class="flex justify-start items-center py-7 relative">
                                      <input
                                        class="text-sm leading-none text-left text-gray-600 px-4 py-3 w-full border rounded border-gray-300 outline-none"
                                        type="text"
                                        placeholder="Tìm kiếm"
                                        id="ContractSearch" 
                                        name="ContractSearch"
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
                    <div class="bg-white dark:bg-gray-800  shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
                        <table class="w-full whitespace-nowrap">
                            <thead>
                                <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 dark:text-white ">
                                    <th class="font-large text-left pl-4" style="font-size: large;font-style: oblique;">Mã số khách hàng</th>
                                    <th class="font-large text-left pl-12" style="font-size: large;font-style: oblique;">Tên khách hàng</th>
                                    <th class="font-large text-left pl-12" style="font-size: large;font-style: oblique;">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody class="w-full">
                                @foreach ($CustomerContract as $_CustomerContract  )
                                <tr tabindex="0" class="focus:outline-none h-20 text-sm leading-none text-gray-800 dark:text-white  bg-white dark:bg-gray-800  hover:bg-gray-100 dark:hover:bg-gray-900  border-b border-t border-gray-100 dark:border-gray-700 ">
                                    <td class="pl-4 cursor-pointer">
                                        <div class="flex items-center">
                                            <div class="pl-4">
                                                <p class="font-medium">{{$_CustomerContract->IDCustomer}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="pl-12">
                                        <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">
                                            <a href="#modalc-infocustomer{{$_CustomerContract->IDCustomer}}" uk-toggle>{{$_CustomerContract->CustomerName}}</a>
                                        </p>
                                        @foreach ($getCustomerName as $_getCustomerName)
                                        @if ($_CustomerContract->IDCustomer==$_getCustomerName->IDCustomer)
                                            <div id="modalc-infocustomer{{$_getCustomerName->IDCustomer}}" uk-modal>
                                                <div class="uk-modal-dialog uk-modal-body">
                                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                                            <div class="uk-card uk-card-default uk-width-1-1">
                                                                <div class="uk-card-header">
                                                                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                                        
                                                                        <div class="uk-width-expand">
                                                                            <h3 class="uk-card-title uk-margin-remove-bottom">{{$_getCustomerName->CustomerName}}</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="uk-card-body">
                                                                    <p class="text-sm font-medium leading-none text-gray-800 dark:text-black ">MSKH: {{$_getCustomerName->IDCustomer}}</p>
                                                            {{-- <p class="text-sm font-medium leading-none text-gray-800 dark:text-black ">Tên KH: {{$_Contract->CustomerName}}</p> --}}
                                                            <p class="text-sm font-medium leading-none text-gray-800 dark:text-black ">Địa chỉ: {{$_getCustomerName->Address}}</p>
                                                            <p class="text-sm font-medium leading-none text-gray-800 dark:text-black ">Số điện thoại: {{$_getCustomerName->PhoneNumber}}</p>
                                                            <p class="text-sm font-medium leading-none text-gray-800 dark:text-black ">Email: {{$_getCustomerName->Email}}</p>
                                                                </div>
                                                            </div>
                                                            
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach 
                                    </td>
                                    <td class="pl-12">
                                        
                                        {{-- code --}}
                                        <button class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                                        type="button" uk-toggle="target: #modal_feedback{{$_CustomerContract->IDCustomer}}">Quản lý phản hồi khách hàng </button>
                                                <div id="modal_feedback{{$_CustomerContract->IDCustomer}}" class="uk-modal-full"  uk-modal>
                                                <div class="uk-modal-dialog uk-modal-body " style="height: 100%;">
                                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                                    <h3 style="color: black">Chi tiết thông tin khách hàng</h3>
                                                    <p>Mã số khách hàng:  {{$_CustomerContract->IDCustomer}}</p>
                                                    <p>Tên khách hàng:  {{$_CustomerContract->CustomerName}}</p>
                                                
                                                        
                                                    <div class="w-full sm:px-0" style="margin-top: 50px">
                                                        <div class="px-6 md:px-10 py-4 md:py-7 bg-gray-100 dark:bg-gray-700 rounded-tl-lg rounded-tr-lg">
                                                             @include('alert')
                                                                <div class="sm:flex items-center justify-between">
                                                                        <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 dark:text-white ">Quản lý phản hồi của {{$_CustomerContract->CustomerName}}</p><br>
                                                                </div>
                                                                 <div>
                                                                    <button class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                                                                        type="button" 
                                                                        uk-toggle="target: #modalAdd{{$_CustomerContract->IDCustomer}}">Thêm phản hồi
                                                                    </button>
                                                                    <div id="modalAdd{{$_CustomerContract->IDCustomer}}" class="uk-modal"  uk-modal>
                                                                    <div class="uk-modal-dialog uk-modal-body " >
                                                                            <button class="uk-modal-close-default" type="button" uk-close></button>
                                                                        @include('staff_assets.feedback_add')
                                                                    </div>
                                                                    </div> 
                                                                 </div>
                                                        </div>
                                                        <div class="bg-white dark:bg-gray-800  shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
                                                        <table class="w-full whitespace-nowrap">
                                                            <thead class="">
                                                                <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 dark:text-white ">
                                                                                {{-- <th class="font-large text-center pl-4">Mã số phản hồi</th>
                                                                                <th class="font-large text-center pl-4">Mã dịch vụ</th> --}}
                                                                                <th class="font-large text-center pl-12">Tên dịch vụ</th>  
                                                                                {{-- <th class="font-large text-center pl-12">Phiên bản</th> --}}
                                                                                <th class="font-large text-center pl-20">Điểm đánh giá</th>
                                                                                <th class="font-large text-center pl-12">Nội dung</th>
                                                                                <th class="font-large text-center pl-12">Ngày đánh giá</th>
                                                                                <th class="font-large text-center pl-24">Thao tác</th>
                                                                                <th class="font-large text-center pl-24"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="w-full2">
                                                                @foreach ($ProductFeedback as $_ProductFeedback)
                                                                @if ($_ProductFeedback->IDCustomer==$_CustomerContract->IDCustomer)
                                                                <tr tabindex="0" class="focus:outline-none h-20 text-sm leading-none text-gray-800 dark:text-white  bg-white dark:bg-gray-800  hover:bg-gray-100 dark:hover:bg-gray-900  border-b border-t border-gray-100 dark:border-gray-700 ">
                                                                    {{-- <td class="pl-4 cursor-pointer">
                                                                        <div class="flex items-center">
                                                                            <div class="pl-4">
                                                                                <p class="font-medium">{{$_ProductFeedback->IDFeedback}}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-4">
                                                                        <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$_ProductFeedback->IDProduct}}</p>
                                                                    </td> --}}
                                                                    <td class="pl-12">
                                                                        <p class="font-medium">{{$_ProductFeedback->ProductName}} phiên bản {{$_ProductFeedback->IDVersion}}</p>
                                                                    </td>
                                                                    {{-- <td class="pl-12">
                                                                        <p class="font-medium">{{$_ProductFeedback->IDVersion}}</p>
                                                                    </td> --}}
                                                                    <td class="pl-20">
                                                                        <p class="font-medium">{{$_ProductFeedback->Rate}}</p>
                                                                    </td>
                                                                    <td class="pl-12">
                                                                        <p class="font-medium">{{$_ProductFeedback->Content}}</p>
                                                                    </td>
                                                                    <td class="pl-12">
                                                                        <p class="font-medium">{{$_ProductFeedback->Created_at}}</p>
                                                                    </td>
                                                                    <td class="pl-12">
                                                                        <button class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full"

                                                                        uk-toggle="target: #modal-editFeedback{{$_CustomerContract->IDCustomer}}">Cập nhật</button>
                                                                        <div id="modal-editFeedback{{$_CustomerContract->IDCustomer}}" uk-modal>
                                                                            <div class="uk-modal-dialog uk-modal-body">
                                                                                <button class="uk-modal-close-default" type="button" uk-close></button>
                                                                            @include('staff_assets.feedback_edit')
                                                                                
                                                                            </div>
                                                                        </div>
                                                                </td>
                                                                <td class="pl-12">
                                                                    <button class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full"

                                                                    uk-toggle="target: #modal-deleteFeedback{{$_CustomerContract->IDCustomer}}">Xóa</button>
                                                                    <div id="modal-deleteFeedback{{$_CustomerContract->IDCustomer}}" uk-modal>
                                                                        <div class="uk-modal-dialog uk-modal-body">
                                                                            <button class="uk-modal-close-default" type="button" uk-close></button>
                                                                        @include('staff_assets.feedback_delete')
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                </tr>
                                                                @endif
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                            </div> 
                                        </div> 
                                        
                                        
                                        {{-- code --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>





                <script>
                    ContractSearch.addEventListener("keyup", function() {
                        $valueContractSearch = $(ContractSearch).val();
                        $.ajax({
                            type: 'get',
                            url: '{{ URL::to('Search_Feedback') }}',
                            data: {
                                'Search_Contract': $valueContractSearch
                            },
                            success:function(data){
                                $('tbody.w-full').html(data);
                            }
                        });
                    })
                    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
                </script> 
            </div>
        </div>
    </div>
</x-app-layout>










