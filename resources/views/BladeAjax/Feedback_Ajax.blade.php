
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
                                {{-- <p class="text-sm font-medium leading-none text-gray-800 dark:text-black ">T??n KH: {{$_Contract->CustomerName}}</p> --}}
                                <p class="text-sm font-medium leading-none text-gray-800 dark:text-black ">?????a ch???: {{$_getCustomerName->Address}}</p>
                                <p class="text-sm font-medium leading-none text-gray-800 dark:text-black ">S??? ??i???n tho???i: {{$_getCustomerName->PhoneNumber}}</p>
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
            type="button" uk-toggle="target: #modal_feedback{{$_CustomerContract->IDCustomer}}">Qu???n l?? ph???n h???i kh??ch h??ng </button>
                    <div id="modal_feedback{{$_CustomerContract->IDCustomer}}" class="uk-modal-full"  uk-modal>
                    <div class="uk-modal-dialog uk-modal-body " style="height: 100%;">
                        <button class="uk-modal-close-default" type="button" uk-close></button>
                        <h3 style="color: black">Chi ti???t th??ng tin kh??ch h??ng</h3>
                        <p>M?? s??? kh??ch h??ng:  {{$_CustomerContract->IDCustomer}}</p>
                        <p>T??n kh??ch h??ng:  {{$_CustomerContract->CustomerName}}</p>
                    
                            
                        <div class="w-full sm:px-0" style="margin-top: 50px">
                            <div class="px-6 md:px-10 py-4 md:py-7 bg-gray-100 dark:bg-gray-700 rounded-tl-lg rounded-tr-lg">
                                 @include('alert')
                                    <div class="sm:flex items-center justify-between">
                                            <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 dark:text-white ">Qu???n l?? ph???n h???i c???a {{$_CustomerContract->CustomerName}}</p><br>
                                    </div>
                                     <div>
                                        <button class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"                                                                    uk-toggle="target: #modalAdd">Th??m ph???n h???i </button>
                                        <div id="modalAdd" class="uk-modal"  uk-modal>
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
                                                    {{-- <th class="font-large text-center pl-4">M?? s??? ph???n h???i</th>
                                                    <th class="font-large text-center pl-4">M?? d???ch v???</th> --}}
                                                    <th class="font-large text-center pl-12">T??n d???ch v???</th>  
                                                    {{-- <th class="font-large text-center pl-12">Phi??n b???n</th> --}}
                                                    <th class="font-large text-center pl-20">??i???m ????nh gi??</th>
                                                    <th class="font-large text-center pl-12">N???i dung</th>
                                                    <th class="font-large text-center pl-12">Ng??y ????nh gi??</th>
                                                    <th class="font-large text-center pl-24">Thao t??c</th>
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
                                            <p class="font-medium">{{$_ProductFeedback->ProductName}} phi??n b???n {{$_ProductFeedback->IDVersion}}</p>
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

                                            uk-toggle="target: #modal-editFeedback{{$_CustomerContract->IDCustomer}}">C???p nh???t</button>
                                            <div id="modal-editFeedback{{$_CustomerContract->IDCustomer}}" uk-modal>
                                                <div class="uk-modal-dialog uk-modal-body">
                                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                                @include('staff_assets.feedback_edit')
                                                    
                                                </div>
                                            </div>
                                    </td>
                                    <td class="pl-12">
                                        <button class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full"

                                        uk-toggle="target: #modal-deleteFeedback{{$_CustomerContract->IDCustomer}}">X??a</button>
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
