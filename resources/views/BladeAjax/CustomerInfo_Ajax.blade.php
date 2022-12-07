
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
                    <div class="uk-modal-dialog" style="height: max-content; ">
                        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                                 <div class="uk-card uk-card-default uk-width-1-1">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">{{$_getCustomerNameKH->CustomerName}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body">
                                        <p class="text-sm font-medium leading-none text-gray-800 dark:text-black ">MSKH: {{$_getCustomerNameKH->IDCustomer}}</p>
                                {{-- <p class="text-sm font-medium leading-none text-gray-800 dark:text-black ">Tên KH: {{$_Contract->CustomerName}}</p> --}}
                                <p class="text-sm font-medium leading-none text-gray-800 dark:text-black ">Địa chỉ: {{$_getCustomerNameKH->Address}}</p>
                                <p class="text-sm font-medium leading-none text-gray-800 dark:text-black ">Số điện thoại: {{$_getCustomerNameKH->PhoneNumber}}</p>
                                <p class="text-sm font-medium leading-none text-gray-800 dark:text-black ">Email: {{$_getCustomerNameKH->Email}}</p>
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
