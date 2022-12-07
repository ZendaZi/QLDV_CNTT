
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
            <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$_CustomerContract->CustomerName}}</p>
        </td>
        <td class="pl-12">
            <button class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full"
             type="button" uk-toggle="target: #modal_expired{{$_CustomerContract->IDCustomer}}">Quản lý hợp đồng </button>
            <div id="modal_expired{{$_CustomerContract->IDCustomer}}" class="uk-modal-full"  uk-modal>
                <div class="uk-modal-dialog uk-modal-body " style="height: 100%;">
                    <button class="uk-modal-close-default" type="button" uk-close></button>
                    <h3 style="color: black">Chi tiết thông tin khách hàng</h3>
                    <p>Mã số khách hàng:  {{$_CustomerContract->IDCustomer}}</p>
                    <p>Tên khách hàng:  {{$_CustomerContract->CustomerName}}</p>  
                    <div class="px-4 md:px-10 py-4 md:py-7 bg-gray-100 dark:bg-gray-700 rounded-tl-lg rounded-tr-lg">
                        @include('alert')
                        <div class="sm:flex items-center justify-between">
                            <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 dark:text-white ">Quản lý hợp đồng của {{$_CustomerContract->CustomerName}}</p>
                           
                           
                            
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800  shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
                        <table class="w-full whitespace-nowrap">
                        <thead>
                            <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 dark:text-white ">
                                <th class="font-large text-left pl-4" style="font-size: large;font-style: oblique;">Mã số hợp đồng</th>
                                <th class="font-large text-left pl-4" style="font-size: large;font-style: oblique;">Mã dịch vụ</th>
                                <th class="font-large text-left pl-12" style="font-size: large;font-style: oblique;">Tên dịch vụ</th>
                                <th class="font-large text-left pl-12" style="font-size: large;font-style: oblique;">Hình ảnh hợp đồng</th>
                                <th class="font-large text-left pl-12" style="font-size: large;font-style: oblique;">Giá trị hợp đồng</th>
                                {{-- <th class="font-large text-left pl-12" style="font-size: large;font-style: oblique;">Nhân viên chịu trách nhiệm ký</th> --}}
                                <th class="font-large text-left pl-12" style="font-size: large;font-style: oblique;">Trạng thái hợp đồng</th>
                                <th style="
                               background-color: #ededac;color: #e30303;">Cảnh báo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Contract as $_Contract)
                            @if ($_CustomerContract->IDCustomer==$_Contract->IDCustomer)
                                 @include('staff_assets.ContractExpired')
                                 @endif
                                 @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
        </td>
        @if ($role==1)
            <td class="pl-20">
                <button class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full"
                value="{{$_CustomerContract->IDCustomer}}" type="button"
                    uk-toggle="target: #modal_count{{$_CustomerContract->IDCustomer}}">Xét duyệt hợp đồng 
                    @foreach ($CountPending as $_CountPending)
                        @if ($_CustomerContract->IDCustomer == $_CountPending->IDCustomer)
                        <span class="uk-badge">{{$_CountPending->count}}</span>
                        @endif
                    @endforeach
                </button>

                <div id="modal_count{{$_CustomerContract->IDCustomer}}" class="uk-modal-full"  uk-modal>
                    <div class="uk-modal-dialog uk-modal-body " style="height: 100%;">
                        <button class="uk-modal-close-default" type="button" uk-close></button>
                        <h3 style="color: black">Chi tiết thông tin khách hàng</h3>
                        <p>Mã số khách hàng:  {{$_CustomerContract->IDCustomer}}</p>
                        <p>Tên khách hàng:  {{$_CustomerContract->CustomerName}}</p>  
                        <table class="uk-table uk-table-hover uk-table-divider">
                            <thead>
                                <tr>
                                    <th class="font-large text-left pl-4" style="font-size: large;font-style: oblique;">Mã số hợp đồng</th>
                                    <th class="font-large text-left pl-4" style="font-size: large;font-style: oblique;">Mã dịch vụ</th>
                                    <th class="font-large text-left pl-4" style="font-size: large;font-style: oblique;">Tên dịch vụ</th>
                                    <th class="font-large text-left pl-4" style="font-size: large;font-style: oblique;">Hình ảnh hợp đồng</th>
                                    <th class="font-large text-left pl-4" style="font-size: large;font-style: oblique;">Giá trị hợp đồng</th>
                                    <th class="font-large text-left pl-4" style="font-size: large;font-style: oblique;">Nhân viên chịu trách nhiệm ký</th>
                                    <th class="font-large text-left pl-4" style="font-size: large;font-style: oblique;">Trạng thái hợp đồng</th>
                                    <th style="
                                    background-color: #ededac;color: #e30303;">Chờ duyệt</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ContractPending as $_ContractPending)
                                @if ($_CustomerContract->IDCustomer==$_ContractPending->IDCustomer)
                                        @include('staff_assets.ContractPending')
                                        @endif
                                        @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> 
            </td>
        @endif

    </tr>
 @endforeach
