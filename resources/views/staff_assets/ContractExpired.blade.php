<tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 dark:text-white ">
           <td class="pl-12">{{$_Contract->IDContract}}</td>
           <td class="pl-12">{{$_Contract->IDProduct}}</td>
           <td class="pl-12">{{$_Contract->ProductName}}</td>
           <td class="pl-12">

                    <a class="mx-2 my-2 bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-8 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-indigo-600" 
                     href="#modal-linkimg{{$_Contract->IDContract}}" uk-toggle>Xem hình ảnh hợp đồng</a>
                        <div id="modal-linkimg{{$_Contract->IDContract}}" class="uk-flex-top"  uk-modal>
                            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical" >
                                <button class="uk-modal-close-default" type="button" uk-close></button>
                               <img src="{{$_Contract->Link}}" >
                            </div>
                        </div>

            </td>
           <td class="pl-12">{{$_Contract->ContractPrice}}</td>
           {{-- <td class="pl-12">{{$_Contract->name}} (MSNV:{{$_Contract->id}})</td> --}}
           <td class="pl-12">{{$_Contract->ContractStatus}}</td>
           <td class="pl-12"> 
            @php
                use Carbon\Carbon;
                $now=Carbon::now();
                $now->toDateTimeString();
                $expired=$_Contract->Expired_at;
                $valuediff=$now->diffInDays($expired,false);
                $valuediff2=abs($valuediff);
                if ($valuediff <=15 && $valuediff>=1) {
                   
                   echo  '<p style=" background-color: yellow; color: red;"> Còn '.$valuediff2.' ngày nữa là hết hạn </p>';
                }
                elseif ($valuediff <=0) {
                    echo  '<p style=" background-color: red; color: yellow;"> Hợp đồng đã hết hạn  '.$valuediff2.' ngày </p>';
                }
             @endphp
            </td>
       
        </tr>
        
        
  

