@include('staff_assets.header')
<x-app-layout>
  

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-10 lg:px-4">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- @include('staff_assets.switchermenu') --}}
    
                <div class="px-4 md:px-10 py-4 md:py-7 bg-gray-100 dark:bg-gray-700 rounded-tl-lg rounded-tr-lg"style="margin-top: 50px;">
                    <div class="sm:flex items-center justify-between">
                        <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 dark:text-white ">Quản lý danh mục</p>
                        <div>
                            @include('alert')
                        </div>
                        <div>
                           

                            <button class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"

                              type="button"
                             uk-toggle="target: #modalAdd">Thêm danh mục </button>
                             
                        <div id="modalAdd" class="uk-modal"  uk-modal>
                            <div class="uk-modal-dialog uk-modal-body " >
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                  @include('admin_assets.Category_Add')
                            </div>
                        </div> 
                        </div>
                       
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800  shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
                    <table class="w-full whitespace-nowrap">
                        <thead class="Ztitletable" >
                            <tr tabindex="0" class=" focus:outline-none h-16 w-full text-sm leading-none text-gray-800 dark:text-white ">
                                <th class="font-large text-left pl-4" style="font-size: large;font-style: oblique;">Mã số danh mục</th>
                                <th class="font-large text-left pl-12" style="font-size: large;font-style: oblique;">Tên danh mục</th>
                                <th class="font-large text-left pl-12" style="font-size: large;font-style: oblique;">Chi tiết danh mục</th>
                                <th class="font-large text-left pl-24" style="font-size: large;font-style: oblique;">Thao tác</th>
                                <th class="font-large text-left pl-24" style="font-size: large;font-style: oblique;"></th>
                     
                            </tr>
                        </thead>
                        <tbody class="w-full">
                            @foreach ($getCategory as $_getCategory )
                            <tr tabindex="0" class="focus:outline-none h-20 text-sm leading-none text-gray-800 dark:text-white  bg-white dark:bg-gray-800  hover:bg-gray-100 dark:hover:bg-gray-900  border-b border-t border-gray-100 dark:border-gray-700 ">
                                <td class="pl-4 cursor-pointer">
                                    <div class="flex items-center">
                                        <div class="pl-4">
                                            <p class="font-medium">{{$_getCategory->IDCategory}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="pl-12">
                                    <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$_getCategory->CategoryName}}</p>     
                                </td>
                                <td class="pl-12">
                                    <p class="font-medium">{{$_getCategory->CategoryDetails}}</p>
                                </td>
                                <td class="pl-12">
                                    <button class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full"

                                     uk-toggle="target: #modal_UserView{{$_getCategory->IDCategory}}">Cập nhật danh mục </button>
                                     <div id="modal_UserView{{$_getCategory->IDCategory}}" class="uk-modal" uk-modal>
                                       <div class="uk-modal-dialog uk-modal-body">
                                           <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                       
                                           @include('admin_assets.Category_Update')
                                          
                                       </div>
                                   </div> 
                               </td>
            
                               <td class="pl-12">
                                <button class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full"
                                    uk-toggle="target: #modal_UserUpdate{{$_getCategory->IDCategory}}">Xóa danh mục </button>
                                    <div id="modal_UserUpdate{{$_getCategory->IDCategory}}" class="uk-modal"  uk-modal>
                                      <div class="uk-modal-dialog uk-modal-body " >
                                          <button class="uk-modal-close-default" type="button" uk-close></button>
                                          
                                          @include('admin_assets.Category_Delete')
                                      </div>
                                  </div> 
                              </td>
                              
                              
                            </tr>
                         @endforeach
                          
                        </tbody>
                    </table>
                </div>
              
 </div>
        </div>
    </div>
</x-app-layout>
