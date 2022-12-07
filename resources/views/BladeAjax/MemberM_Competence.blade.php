
    @foreach ($getUser as $_getUser )
    <tr tabindex="0" class="focus:outline-none h-20 text-sm leading-none text-gray-800 dark:text-white  bg-white dark:bg-gray-800  hover:bg-gray-100 dark:hover:bg-gray-900  border-b border-t border-gray-100 dark:border-gray-700 ">
        <td class="pl-4 cursor-pointer">
            <div class="flex items-center">
                <div class="pl-4">
                    <p class="font-medium">{{$_getUser->id}}</p>
                </div>
            </div>
        </td>
        <td class="pl-12">
            <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$_getUser->name}}</p>
            
        </td>
        <td class="pl-12">
            <p class="font-medium">{{$_getUser->email}}</p>
        </td>
        
       
     
       
        <td class="pl-12">
            <button class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
            type="button"
             uk-toggle="target: #modal_UserView{{$_getUser->id}}">Thông tin chi tiết </button>
             <div id="modal_UserView{{$_getUser->id}}" class="uk-modal-full" uk-modal>
               <div class="uk-modal-dialog" style="height: 100%">
                   <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>

                 @include('admin_assets.MemberManagement_View')
                  
               </div>
           </div> 
       </td>

       <td class="pl-12">
        <button class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full"
           type="button"
            uk-toggle="target: #modal_UserUpdate{{$_getUser->id}}">Chỉnh sửa thông tin </button>
            <div id="modal_UserUpdate{{$_getUser->id}}" class="uk-modal"  uk-modal>
              <div class="uk-modal-dialog uk-modal-body " >
                  <button class="uk-modal-close-default" type="button" uk-close></button>
                  
                  @include('admin_assets.MemberManagement_Update')
              </div>
          </div> 
      </td>
      
      @if ( $_getUser->role==0 )
      <td class="pl-12">
        <button class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full"
           type="button"
            uk-toggle="target: #modal_UserDelete{{$_getUser->id}}">Thu hồi tài khoản </button>
            <div id="modal_UserDelete{{$_getUser->id}}" class="uk-modal"  uk-modal>
              <div class="uk-modal-dialog uk-modal-body " >
                  <button class="uk-modal-close-default" type="button" uk-close></button>
                  
                  @include('admin_assets.MemberManagement_Delete')
              </div>
          </div> 
      </td>
      @elseif ($_getUser->role==-1)
      <td class="pl-12">
        <button class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full" type="button"
            uk-toggle="target: #modal_UserAllow{{$_getUser->id}}">Cấp lại tài khoản </button>
            <div id="modal_UserAllow{{$_getUser->id}}" class="uk-modal"  uk-modal>
              <div class="uk-modal-dialog uk-modal-body " >
                  <button class="uk-modal-close-default" type="button" uk-close></button>
                  
                  @include('admin_assets.MemberManagement_Allow')
              </div>
          </div> 
      </td>
      @endif
    </tr>
 @endforeach
