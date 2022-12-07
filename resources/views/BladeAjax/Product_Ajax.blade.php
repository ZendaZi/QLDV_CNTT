
    @foreach ($getProduct as $_getProduct )
    <tr tabindex="0" class="focus:outline-none h-20 text-sm leading-none text-gray-800 dark:text-white  bg-white dark:bg-gray-800  hover:bg-gray-100 dark:hover:bg-gray-900  border-b border-t border-gray-100 dark:border-gray-700 ">
        <td class="pl-4 cursor-pointer">
            <div class="flex items-center">
                <div class="pl-4">
                   <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$_getProduct->ProductName}}</p>
                </div>
            </div>
        </td>
        <td class="pl-4 cursor-pointer">
            <div class="flex items-center">
                <div class="pl-4">
                   <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$_getProduct->IDVersion}}</p>
                </div>
            </div>
        </td>
        <div class="inline-flex rounded-md shadow-sm">
        <td class="pl-12"> 
            <button class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 "

            uk-toggle="target: #modal_Category{{$_getProduct->IDProduct}}">Cập nhật</button>
              <div id="modal_Category{{$_getProduct->IDProduct}}" class="uk-modal"  uk-modal>
                <div class="uk-modal-dialog uk-modal-body " >
                    <button class="uk-modal-close-default" type="button" uk-close></button>
                  @include('admin_assets.Product_Update')
                </div>
            </div> 
        {{-- </td>              
        <td class="pl-4"> --}}
            <button class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 "

             uk-toggle="target: #modal_CategoryDelete{{$_getProduct->IDProduct}}">Xóa</button>
             <div id="modal_CategoryDelete{{$_getProduct->IDProduct}}" class="uk-modal"  uk-modal>
               <div class="uk-modal-dialog uk-modal-body " >
                   <button class="uk-modal-close-default" type="button" uk-close></button>
                   @include('admin_assets.Product_Delete')
               </div>
           </div> 
       </td>
       </div>
    </tr>
 @endforeach
