
    @foreach ($PotentialCustomer as $_PoCustomer)
    <tr tabindex="0" class="focus:outline-none h-20 text-sm leading-none text-gray-800 dark:text-white  bg-white dark:bg-gray-800  hover:bg-gray-100 dark:hover:bg-gray-900  border-b border-t border-gray-100 dark:border-gray-700 ">
        <td class="pl-4 cursor-pointer">
            <div class="flex items-center">
                <div class="pl-4">
                    <p class="font-medium">{{$_PoCustomer->IDCustomer}}</p>
                </div>
            </div>
        </td>
        <td class="pl-12">
            <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$_PoCustomer->CustomerName}}</p>
            
        </td>
    <div class="inline-flex rounded-md shadow-sm">
        {{-- <td class="pl-12">
            <p class="font-medium">{{$_PoCustomer->Address}}</p>
        </td> --}}
        {{-- <td class="pl-20">
            <p class="font-medium">{{$_PoCustomer->TypeOfCustomer}}</p>
        </td> --}}
        <td class="pl-24">
            <button class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
             value="{{$_PoCustomer->IDCustomer}}" type="button" 
                uk-toggle="target: #modal_Read{{$_PoCustomer->IDCustomer}}">Xem
            </button>
            <div id="modal_Read{{$_PoCustomer->IDCustomer}}" uk-modal>
                <div class="uk-modal-dialog uk-modal-body">
                    <h3 style="color: black">Chi tiết thông tin khách hàng</h3>
                                <p>Mã số khách hàng:  {{$_PoCustomer->IDCustomer}}</p>
                                <p>Tên khách hàng:  {{$_PoCustomer->CustomerName}}</p>
                                <p>Địa chỉ:  {{$_PoCustomer->Address}}</p>
                                <p>Số điện thoại:  {{$_PoCustomer->PhoneNumber}}</p>
                                <p>Email :  {{$_PoCustomer->Email}}</p>
                                <p>Nhóm khách hàng:  {{$_PoCustomer->TypeOfCustomer}}</p> 
                </div>
            </div>
        {{-- </td> --}}
        {{-- <td class="pr-4"> --}}
           
            <button class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 "

                     uk-toggle="target: #modal_Edit{{$_PoCustomer->IDCustomer}}">Sửa
                 </button>
            <div id="modal_Edit{{$_PoCustomer->IDCustomer}}" uk-modal>
                <div class="uk-modal-dialog uk-modal-body">
                    @include('staff_assets.PotentialCustomer_Edit')
                </div>
            </div>
        {{-- </td> --}}
        {{-- <td class="pr-60"> --}}
            
            <button class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 "
                value="{{$_PoCustomer->IDCustomer}}"
                 type="button" uk-toggle="target: #modal_Delete{{$_PoCustomer->IDCustomer}}">Xóa
            </button>
            <div id="modal_Delete{{$_PoCustomer->IDCustomer}}" uk-modal>
                <div class="uk-modal-dialog uk-modal-body">
                    @include('staff_assets.PotentialCustomer_Delete')
                </div>
            </div>

        </td>
    </div>
    </tr>
 @endforeach
