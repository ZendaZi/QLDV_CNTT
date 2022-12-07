@include('staff_assets.header')
<x-app-layout>
    <div class="py-12">
         <div class="max-w-full mx-auto sm:px-1 lg:px-1">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- @include('staff_assets.switchermenu') --}}

                <div class="w-full sm:px-0" style="margin-top: 50px">
                    <div class="px-4 md:px-10 py-4 md:py-7 bg-gray-100 dark:bg-gray-700 rounded-tl-lg rounded-tr-lg">
                        @include('alert')
                        <div class="sm:flex items-center justify-between">
                            <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 dark:text-white ">Quản lý khách hàng tiềm năng</p>
                            <div>
                                    <div class="flex justify-start items-center py-7 relative">
                                      <input
                                        class="text-sm leading-none text-left text-gray-600 px-4 py-3 w-full border rounded border-gray-300 outline-none"
                                        type="text"
                                        placeholder="Tìm kiếm"
                                        id="PotentialCustomerSearch" 
                                        name="PotentialCustomerSearch"
                                      />
                                      <svg
                                        class="absolute right-3 z-10 cursor-pointer" width="24"height="24"viewBox="0 0 24 24"fill="none"xmlns="http://www.w3.org/2000/svg" >
                                        <path d="M10 17C13.866 17 17 13.866 17 10C17 6.13401 13.866 3 10 3C6.13401 3 3 6.13401 3 10C3 13.866 6.13401 17 10 17Z"stroke="#4B5563" stroke-width="1.66667"stroke-linecap="round"stroke-linejoin="round"/>
                                        <path d="M21 21L15 15" stroke="#4B5563"stroke-width="1.66667"stroke-linecap="round"stroke-linejoin="round"/>
                                      </svg>
                                    </div>
                            </div>
                           
                            <div>
                                <button class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                                    type="button"
                                 uk-toggle="target: #modalAdd">Thêm khách hàng tiềm năng </button>
                                <div id="modalAdd" class="uk-modal"  uk-modal>
                                    <div class="uk-modal-dialog uk-modal-body " >
                                        <button class="uk-modal-close-default" type="button" uk-close></button>
                                      @include('staff_assets.PotentialCustomer_Add')
                                    </div>
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
                                  
                                   <th class="font-large text-left pl-20" style="font-size: large;font-style: oblique;">Thao tác</th>
                                  
                                </tr>
                            </thead>
                            <tbody class="w-full">
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
                                  
                                    <td class="pl-24">
                                        <button class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                                         value="{{$_PoCustomer->IDCustomer}}" type="button" 
                                            uk-toggle="target: #modal_Read{{$_PoCustomer->IDCustomer}}">Xem
                                        </button>
                                        <div id="modal_Read{{$_PoCustomer->IDCustomer}}" uk-modal>
                                            <div class="uk-modal-dialog uk-modal-body uk-modal-dialog uk-modal-body  bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center text-gray-800 ">
                                                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                                                <div class="uk-card uk-card-default uk-width-1-1">
                                                    <div class="uk-card-header">
                                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                            
                                                            <div class="uk-width-expand">
                                                                <h3 class="uk-card-title uk-margin-remove-bottom">{{$_PoCustomer->CustomerName}}</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-card-body">
                                                        
                                                         <p class="text-sm font-medium leading-none text-gray-800 dark:text-gray-800 mb-2  text-left "> <b>MSKH:</b> <span class="dark:text-red-600 text-right" > {{$_PoCustomer->IDCustomer}} </span> </p>
                                                         <p class="text-sm font-medium leading-none text-gray-800 dark:text-gray-800 mb-2  text-left "> <b>Địa chỉ:</b> <span class="dark:text-red-600 text-right" > {{$_PoCustomer->Address}} </span> </p>
                                                         <p class="text-sm font-medium leading-none text-gray-800 dark:text-gray-800 mb-2  text-left "> <b>Số điện thoại:</b> <span class="dark:text-red-600 text-right" > {{$_PoCustomer->PhoneNumber}} </span> </p>
                                                         <p class="text-sm font-medium leading-none text-gray-800 dark:text-gray-800 mb-2  text-left "> <b>Email:</b> <span class="dark:text-red-600 text-right" > {{$_PoCustomer->Email}} </span> </p>

                                                
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                   
                                       
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
                            </tbody>
                        </table>
                    </div>
                </div>
               
                
                
                
                <script>
                    PotentialCustomerSearch.addEventListener("keyup", function() {
                        $valuePotentialCustomerSearch = $(PotentialCustomerSearch).val();
                        $.ajax({
                            type: 'get',
                            url: '{{ URL::to('Search_PotentialCustomer') }}',
                            data: {
                                'Search_PotentialCustomer': $valuePotentialCustomerSearch
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





