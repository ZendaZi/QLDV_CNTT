
    @foreach ($Contract as $_Contract  )
    @php                              
    $expired=$_Contract->Expired_at;
    $valuediff=$now->diffInDays($expired,false);
    $valuediff2=abs($valuediff);
    if ($valuediff <=30 && $valuediff>=1 ) {
       
       $check=1;
    }
    elseif ($valuediff <=0) {
        $check=0;
    }
    elseif ($valuediff >30) {
        $check=2;
    }
 @endphp
 @if ($check==1 && $valueStatus==1)
   <tr  class="focus:outline-none h-20 text-sm leading-none text-gray-800 dark:text-white  bg-white dark:bg-gray-800  hover:bg-gray-100 dark:hover:bg-gray-900  border-b border-t border-gray-100 dark:border-gray-700 ">
           {{-- <td class="pl-4 cursor-pointer">
               <div class="flex items-center">
                   <div class="pl-4">
                       <p class="font-medium">{{$_Contract->IDContract}}</p>
                   </div>
               </div>
           </td> --}}
           <td class="pl-12">
            <button class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full"                    href="#modal-info{{$_Contract->IDContract}}" uk-toggle>{{$_Contract->CustomerName}}</button>
                   <div id="modal-info{{$_Contract->IDContract}}" class="uk-flex-top"  uk-modal>
                       <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical" >
                           <button class="uk-modal-close-default" type="button" uk-close></button>
                           <div class="uk-card uk-card-default uk-width-1-1">
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                    
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom">{{$_Contract->CustomerName}}</h3>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <p class="text-sm font-medium leading-none text-gray-800 dark:text-black ">MSKH: {{$_Contract->IDCustomer}}</p>
                        {{-- <p class="text-sm font-medium leading-none text-gray-800 dark:text-black ">Tên KH: {{$_Contract->CustomerName}}</p> --}}
                        <p class="text-sm font-medium leading-none text-gray-800 dark:text-black ">Địa chỉ: {{$_Contract->Address}}</p>
                        <p class="text-sm font-medium leading-none text-gray-800 dark:text-black ">Số điện thoại: {{$_Contract->PhoneNumber}}</p>
                        <p class="text-sm font-medium leading-none text-gray-800 dark:text-black ">Email: {{$_Contract->Email}}</p>
                            </div>
                        </div>
                       </div>
                   </div> 
           </td>
           <td class="pl-12">
               <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$_Contract->ProductName}} ( Phiên bản: {{$_Contract->IDVersion}})</p>
           </td>
           <td class="pl-12">
            <button class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full"
                href="#modal-linkimg{{$_Contract->IDContract}}" uk-toggle>Xem hợp đồng</button>
               <div id="modal-linkimg{{$_Contract->IDContract}}" class="uk-modal-full"  uk-modal>
                   <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"  >
                       <button class="uk-modal-close-default" type="button" uk-close></button>
                               <div class="mt-3 md:mt-4 lg:mt-0 flex flex-col lg:flex-row items-strech justify-center lg:space-x-8">
                                   <div class="lg:w-1/2 flex justify-between items-strech bg-gray-50  px-2 py-20 md:py-6 md:px-6 lg:py-24">
                                       <div class="flex items-center">
                                           <button onclick="goPrev()" aria-label="slide back" class="focus:outline-none focus:ring-2 focus:ring-gray-800 hover:bg-gray-100">
                                               <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/quick-view-2-svg2.svg" alt="previous">
                                           </button>
                                       </div>
                                       <div class="slider" style="width: 50%;height: 100%;">
                                           <div class="slide-ana lg:relative">
                                               <div class="flex" style="transform: translateX(-100%)">
                                                   <img src="{{$_Contract->Link}}"   class="w-full h-full" />
                                               </div>
                                               <div class="flex" style="transform: translateX(0%)">
                                                   <img src="{{$_Contract->Link}}"   class="w-full h-full" />
                                               </div>
                                               <div class="flex" style="transform: translateX(100%)">
                                                   <img src="{{$_Contract->Link}}"   class="w-full h-full" />
                                               </div>
                                           </div>
                                       </div>
                                       <div class="flex items-center">
                                           <button onclick="goNext()" aria-label="slide forward" class="focus:outline-none focus:ring-2 focus:ring-gray-800 hover:bg-gray-100">
                                               <img class="transform -rotate-180" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/quick-view-2-svg2.svg" alt="next">
                                           </button>
                                       </div>
                                   </div>
                                   <div class="lg:w-1/2 flex flex-col justify-center mt-7 md:mt-8 lg:mt-0 pb-8 lg:pb-0 lg:p-10 md:p-6 p-4 bg-white dark:bg-white">
                                       <h1 class="text-xl lg:text-2xl font-semibold text-gray-800 dark:text-black">Mã số hợp đồng: {{$_Contract->IDContract}}</h1>
                                       <h1 class="text-xl lg:text-2xl font-semibold text-gray-800 dark:text-black">{{$_Contract->ProductName}} ( Phiên bản: {{$_Contract->IDVersion}})</h1>
                                       <h1 class="text-xl lg:text-2xl font-semibold text-gray-800 dark:text-black">Giá trị hợp đồng: {{$_Contract->ContractPrice}} {{$_Contract->CurrencyUnit}}</h1>
                                   </div>
                               </div>
                   </div>
               </div>
           </td>
         
           <td class="pl-12">
               <p class="text-sm font-medium leading-none text-yellow-100 dark:text-yellow "> Còn {{$valuediff2}} ngày nữa là hết hạn</p>
           </td>
   </tr>
       
   @elseif ($check==0 && $valueStatus==0 )
   <tr  class="focus:outline-none h-20 text-sm leading-none text-gray-800 dark:text-white  bg-white dark:bg-gray-800  hover:bg-gray-100 dark:hover:bg-gray-900  border-b border-t border-gray-100 dark:border-gray-700 ">
       {{-- <td class="pl-4 cursor-pointer">
           <div class="flex items-center">
               <div class="pl-4">
                   <p class="font-medium">{{$_Contract->IDContract}}</p>
               </div>
           </div>
       </td> --}}
       <td class="pl-12">
        <button class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full"
                href="#modal-info{{$_Contract->IDContract}}" uk-toggle>{{$_Contract->CustomerName}}</button>
               <div id="modal-info{{$_Contract->IDContract}}" class="uk-flex-top"  uk-modal>
                   <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical" >
                       <button class="uk-modal-close-default" type="button" uk-close></button>
                       <div class="uk-card uk-card-default uk-width-1-1">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">{{$_Contract->CustomerName}}</h3>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <p class="text-sm font-medium leading-none text-gray-800 dark:text-black ">MSKH: {{$_Contract->IDCustomer}}</p>
                    {{-- <p class="text-sm font-medium leading-none text-gray-800 dark:text-black ">Tên KH: {{$_Contract->CustomerName}}</p> --}}
                    <p class="text-sm font-medium leading-none text-gray-800 dark:text-black ">Địa chỉ: {{$_Contract->Address}}</p>
                    <p class="text-sm font-medium leading-none text-gray-800 dark:text-black ">Số điện thoại: {{$_Contract->PhoneNumber}}</p>
                    <p class="text-sm font-medium leading-none text-gray-800 dark:text-black ">Email: {{$_Contract->Email}}</p>
                        </div>
                    </div>
                   </div>
               </div> 
       </td>
       <td class="pl-12">
           <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$_Contract->ProductName}} ( Phiên bản: {{$_Contract->IDVersion}})</p>
       </td>
       <td class="pl-12">
        <button class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full"
            href="#modal-linkimg{{$_Contract->IDContract}}" uk-toggle>Xem hợp đồng</button>
           <div id="modal-linkimg{{$_Contract->IDContract}}" class="uk-modal-full"  uk-modal>
               <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"  >
                   <button class="uk-modal-close-default" type="button" uk-close></button>
                           <div class="mt-3 md:mt-4 lg:mt-0 flex flex-col lg:flex-row items-strech justify-center lg:space-x-8">
                               <div class="lg:w-3/4 flex justify-between items-strech bg-gray-50  px-2 py-20 md:py-6 md:px-6 lg:py-24">
                                   <div class="flex items-center">
                                       <button onclick="goPrev()" aria-label="slide back" class="focus:outline-none focus:ring-2 focus:ring-gray-800 hover:bg-gray-100">
                                           <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/quick-view-2-svg2.svg" alt="previous">
                                       </button>
                                   </div>
                                   <div class="slider" style="width: 50%;height: 100%;">
                                       <div class="slide-ana lg:relative">
                                           <div class="flex" style="transform: translateX(-100%)">
                                               <img src="{{$_Contract->Link}}"   class="w-full h-full" />
                                           </div>
                                           <div class="flex" style="transform: translateX(0%)">
                                               <img src="{{$_Contract->Link}}"   class="w-full h-full" />
                                           </div>
                                           <div class="flex" style="transform: translateX(100%)">
                                               <img src="{{$_Contract->Link}}"   class="w-full h-full" />
                                           </div>
                                       </div>
                                      
                                   </div>

                                   </div>
                                   <div class="flex items-center">
                                       <button onclick="goNext()" aria-label="slide forward" class="focus:outline-none focus:ring-2 focus:ring-gray-800 hover:bg-gray-100">
                                           <img class="transform -rotate-180" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/quick-view-2-svg2.svg" alt="next">
                                       </button>
                                   </div>
                               </div>
                               <div class="lg:w-1/4 flex flex-col justify-center mt-7 md:mt-8 lg:mt-0 pb-8 lg:pb-0 lg:p-10 md:p-6 p-4 bg-white dark:bg-white">
                                   <h1 class="text-xl lg:text-2xl font-semibold text-gray-800 dark:text-black">Mã số hợp đồng: {{$_Contract->IDContract}}</h1>
                                   <h1 class="text-xl lg:text-2xl font-semibold text-gray-800 dark:text-black">{{$_Contract->ProductName}} ( Phiên bản: {{$_Contract->IDVersion}})</h1>
                                   <h1 class="text-xl lg:text-2xl font-semibold text-gray-800 dark:text-black">Giá trị hợp đồng: {{$_Contract->ContractPrice}} {{$_Contract->CurrencyUnit}}</h1>
                               </div>
                           </div>
               </div>
           </div>
       </td>
           <td class="pl-12">
               <p class="text-sm font-medium leading-none text-red-500 dark:text-red ">Hợp đồng đã hết hạn {{$valuediff2}} ngày</p>
           </td>
       </tr>
   
 @endif
     
@endforeach
