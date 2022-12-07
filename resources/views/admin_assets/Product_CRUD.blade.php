@include('staff_assets.header')
<x-app-layout>
   

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-10 lg:px-4">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- @include('staff_assets.switchermenu') --}}
                <div class="px-4 md:px-10 py-4 md:py-7 bg-gray-100 dark:bg-gray-700 rounded-tl-lg rounded-tr-lg" style="margin-top: 50px;">
                    <div class="sm:flex items-center justify-between">
                        <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 dark:text-white ">Quản lý dịch vụ và phiên bản dịch vụ</p>
                        <div>
                            @include('alert')
                        </div>
                        <div>
                            <select class="uk-select" id="CategoryProductSelect">
                                <option value="">Tất cả</option>
                                @foreach ($getCategory as $_getCategory )
                                <option value="{{$_getCategory->CategoryName}}">{{$_getCategory->CategoryName}}</option>
                                @endforeach
                               </select>
                               
                        </div>
                        <div>
                            <button class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 "
                            type="button"
                             uk-toggle="target: #modalAdd">Thêm dịch vụ </button>
                             
                        <div id="modalAdd" class="uk-modal"  uk-modal>
                            <div class="uk-modal-dialog uk-modal-body " >
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                  @include('admin_assets.Product_Add')
                            </div>
                        </div> 
                        </div>
                       
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800  shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
                    <table class="w-full whitespace-nowrap">
                        <thead>
                            <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 dark:text-white ">
                                <th class="font-large text-left pl-4" style="font-size: large;font-style: oblique;">Tên dịch vụ</th>
                                 <th class="font-large text-left pl-12" style="font-size: large;font-style: oblique;">Phiên bản</th>
                                 <th class="font-large text-left pl-12" style="font-size: large;font-style: oblique;">Thao tác</th>
                                 {{-- <th class="font-large text-left pl-12" style="font-size: large;font-style: oblique;"></th> --}}
                            </tr>
                        </thead>
                        <tbody class="w-full">
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
                        </tbody>
                    </table>
                </div>
 </div>
        </div>
    </div>
</x-app-layout>
<script>
    CategoryProductSelect.addEventListener("change", function() {
        $value2 = $(CategoryProductSelect).val();
        $.ajax({
            type: 'get',
            url: '{{ URL::to('PMCateSearch') }}',
            data: {
                'CategoryProduct_search': $value2
            },
            success:function(data){
                $('tbody.w-full').html(data);
            }
        });
    })
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>