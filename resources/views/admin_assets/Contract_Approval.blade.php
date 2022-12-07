@if ($role==1)
@include('staff_assets.header')
<x-app-layout>
    <div class="py-12">
     <div class="max-w-full mx-auto sm:px-1 lg:px-1">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- @include('staff_assets.switchermenu') --}}
                {{-- code --}}
        <div class="w-full sm:px-6" style="margin-top: 50px">
            <div class="px-4 md:px-10 py-4 md:py-7 bg-gray-100 dark:bg-gray-700 rounded-tl-lg rounded-tr-lg">
                <div class="sm:flex items-center justify-between">
                    <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 dark:text-white ">XÉT DUYỆT HỢP ĐỒNG</p>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800  shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
                <table class="w-full whitespace-nowrap">
                    <thead>
                        <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 dark:text-white ">
                            {{-- <th class="font-normal text-left pl-4">MÃ SỐ HỢP ĐỒNG</th> --}}
                            <th class="font-large text-left pl-12">TÊN DỊCH VỤ</th>
                            <th class="font-large text-left pl-12">HÌNH ẢNH HỢP ĐỒNG</th>
                            <th class="font-large text-left pl-20">GIÁ TRỊ HỢP ĐỒNG</th>
                            <th class="font-large text-left pl-12">NHÂN VIÊN CHỊU TRÁCH NHIỆM KÝ</th>
                            <th class="font-large text-left pl-4">TRẠNG THÁI HỢP ĐỒNG</th>
                            <th class="font-large text-left pl-12">THAO TÁC</th>
                        </tr>
                    </thead>
                    <tbody class="w-full">
                        @foreach ($ContractPending as $_ContractPending )
                        <tr tabindex="0" class="focus:outline-none h-20 text-sm leading-none text-gray-800 dark:text-white  bg-white dark:bg-gray-800  hover:bg-gray-100 dark:hover:bg-gray-900  border-b border-t border-gray-100 dark:border-gray-700 ">
                            {{-- <td class="pl-4 cursor-pointer">
                                <div class="flex items-center">
                                    <div class="pl-4">
                                        <p class="font-medium">{{$_ContractPending->IDContract}}</p>
                                    </div>
                                </div>
                            </td> --}}
                            <td class="pl-12">
                                <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$_ContractPending->ProductName}}</p>
                            </td>
                            <td class="pl-12">
                                {{-- <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$_ContractPending->Link}}</p> --}}
                                <button class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full"
                                href="#modal-linkimg{{$_ContractPending->IDContract}}" 
                                    uk-toggle>Xem hợp đồng</button>
                                <div id="modal-linkimg{{$_ContractPending->IDContract}}" class="uk-flex-top"  uk-modal>
                                    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical" >
                                        <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="{{$_ContractPending->Link}}" >
                                    </div>
                                </div>
                            </td>
                            <td class="pl-16">
                                <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$_ContractPending->ContractPrice}} VND</p>
                            </td>
                            <td class="pl-12">
                                <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$_ContractPending->name}}</p>
                            </td>
                            <td class="pl-4">
                                <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$_ContractPending->ContractStatus}}</p>
                            </td>
                            <td class="pl-12">
                               
                                <form action="{{ url('ContractApproval') }}" method="post">
                                    {{ csrf_field()}}
                                    <input type="hidden" name="IDContract" value="{{$_ContractPending->IDContract}}">
                                    <button class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full"
                                        >Xét duyệt</button>
                                   </form>
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
@endif
      
    