@include('staff_assets.header')
<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
         <div class="max-w-full mx-auto sm:px-1 lg:px-1">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @include('staff_assets.switchermenu')
                <div class="uk-text-center" style="margin-top: 150;" uk-grid>
                    <div class="uk-width-1-3">
                        <div class="uk-card uk-card-default uk-card-body">   
                               
                            <div class="uk-form-controls">                
                                <button class="uk-button uk-button-default uk-margin-small-right"
                                style="background-color: #48c78e; color:white"  type="button"
                                 uk-toggle="target: #modalAdd">Thêm </button>
                                 <div id="modalAdd" class="uk-modal"  uk-modal>
                                    <div class="uk-modal-dialog uk-modal-body " >
                                        <button class="uk-modal-close-default" type="button" uk-close></button>
                                      @include('admin_assets.Product_Add')
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3">
                        <div class="uk-card uk-card-default uk-card-body">   
                               
                            <div class="uk-form-controls">                
                               <select class="uk-select" id="CategoryProductSelect">
                                <option value="">Tất cả</option>
                                @foreach ($getCategory as $_getCategory )
                                <option value="{{$_getCategory->CategoryName}}">{{$_getCategory->CategoryName}}</option>
                                @endforeach
                               </select>
                                
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3">
                        <div class="uk-card uk-card-default uk-card-body">   
                            @include('alert')
                        </div>
                    </div>
                {{-- thanhtimkiem --}}
              
                </div>
                <table class="uk-table uk-table-hover uk-table-divider">
                    <thead>
                        <tr>
                           
                            <th>Tên dịch vụ</th>
                            <th>Phiên bản</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody class="tbox">
                        @foreach ($getProduct as $_getProduct )
                         
                            <tr>
                                <td>{{$_getProduct->ProductName}}</td>
                                <td>{{$_getProduct->IDVersion}}</td>
                                <td><button class="uk-button uk-button-default uk-margin-small-right"
                                     style="background-color: #48c78e; color:white"  type="button"
                                      uk-toggle="target: #modal_Category{{$_getProduct->IDProduct}}">Cập nhật </button>
                                      <div id="modal_Category{{$_getProduct->IDProduct}}" class="uk-modal"  uk-modal>
                                        <div class="uk-modal-dialog uk-modal-body " >
                                            <button class="uk-modal-close-default" type="button" uk-close></button>
                                            
                                          @include('admin_assets.Product_Update')
                                           
                                        </div>
                                    </div> 
                                </td>
    
                                <td><button class="uk-button uk-button-default uk-margin-small-right"
                                    style="background-color: #c8202e; color:white"  type="button"
                                     uk-toggle="target: #modal_CategoryDelete{{$_getProduct->IDProduct}}">Xóa </button>
                                     <div id="modal_CategoryDelete{{$_getProduct->IDProduct}}" class="uk-modal"  uk-modal>
                                       <div class="uk-modal-dialog uk-modal-body " >
                                           <button class="uk-modal-close-default" type="button" uk-close></button>
                                           
                                           @include('admin_assets.Product_Delete')
                                       </div>
                                   </div> 
                               </td>
                            </tr>
                        
                       
                        @endforeach
                    </tbody>
                </table>    

                
                <div class="bg-white dark:bg-gray-800  shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
                    <table class="w-full whitespace-nowrap">
                        <thead>
                           
                                
                            
                            <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 dark:text-white ">
                                <th class="font-normal text-left pl-4">Tên dịch vụ</th>
                                <th class="font-normal text-left pl-12">Phiên bản</th>
                                <th class="font-normal text-left pl-12">Thao tác</th>
                               
                     
                            </tr>
                        </thead>
                        <tbody class="w-full">
                            @foreach ($getProduct as $_getProduct )
                            <tr tabindex="0" class="focus:outline-none h-20 text-sm leading-none text-gray-800 dark:text-white  bg-white dark:bg-gray-800  hover:bg-gray-100 dark:hover:bg-gray-900  border-b border-t border-gray-100 dark:border-gray-700 ">
                                <td class="pl-4 cursor-pointer">
                                    <div class="flex items-center">
                                        <div class="pl-4">
                                            <p class="font-medium">{{$_getProduct->ProductName}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="pl-4 cursor-pointer">
                                    <div class="flex items-center">
                                        <div class="pl-4">
                                            <p class="font-medium">{{$_getProduct->IDVersion}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="pl-12">
                                    <button class="uk-button uk-button-default uk-margin-small-right"
                                     style="background-color: #48c78e; color:white"  type="button"
                                      uk-toggle="target: #modal_Category{{$_getProduct->IDProduct}}">Cập nhật </button>
                                      <div id="modal_Category{{$_getProduct->IDProduct}}" class="uk-modal"  uk-modal>
                                        <div class="uk-modal-dialog uk-modal-body " >
                                            <button class="uk-modal-close-default" type="button" uk-close></button>
                                            
                                          @include('admin_assets.Product_Update')
                                           
                                        </div>
                                    </div> 
                                </td>
                               
                                
                               
                             
                               
                                <td class="pl-12"><button class="uk-button uk-button-default uk-margin-small-right"
                                    style="background-color: #c8202e; color:white"  type="button"
                                     uk-toggle="target: #modal_CategoryDelete{{$_getProduct->IDProduct}}">Xóa </button>
                                     <div id="modal_CategoryDelete{{$_getProduct->IDProduct}}" class="uk-modal"  uk-modal>
                                       <div class="uk-modal-dialog uk-modal-body " >
                                           <button class="uk-modal-close-default" type="button" uk-close></button>
                                           
                                           @include('admin_assets.Product_Delete')
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
                $('tbody.tbox').html(data);
            }
        });
    })
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>