    @include('staff_assets.header')
    <x-app-layout>
        <div class="py-12">
             <div class="max-w-full mx-auto sm:px-1 lg:px-1">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    {{-- @include('staff_assets.switchermenu') --}}
    
                                
                                 
        <div class="2xl:container 2xl:mx-auto pt-11">
            <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 lg:gap-y-12 lg:gap-x-8 sm:gap-y-10 sm:gap-x-6 gap-y-6 lg:mt-12 mt-10">
                <div class="relative">
                    
                    <label class="text-black-100  text-sm font-bold leading-tight tracking-normal mb-10">Tìm theo danh mục</label>
                    <select class="dropdown-one w-full rounded outline-none bg-white relative  shadow-md" 
                    id="CategoryProductSelect" name="CategoryProductSelect">
                        <option value="">Tất cả</option>
                        @foreach ($Category as $_category )
                        <option value="{{$_category->CategoryName}}">{{$_category->CategoryName}}</option>                   
                        @endforeach 
                    </select>
                </div>
                <div class="relative">
                 
                    <label for="email" class="text-black-100  text-sm font-bold leading-tight tracking-normal mb-10">Tìm theo tên sản phẩm</label>
                <input id="search2" autocomplete="off" class="text-gray-600 dark:text-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 dark:focus:border-indigo-700 dark:border-gray-700 bg-white font-normal w-64 h-10 flex items-center pl-3 text-sm border-gray-500 rounded border shadow" placeholder="Nhập..." />
                </div>
            </div>



                {{-- ENDCODE --}}
            <div class="py-6 lg:px-20 md:px-6 px-4">
                <div class="tbox grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 lg:gap-y-12 lg:gap-x-8 sm:gap-y-10 sm:gap-x-6 gap-y-6 lg:mt-12 mt-10">
    
                    @foreach ($Products as $product )
                    <div class="relative">
                        <div class="relative group">
                            <div class="flex justify-center items-center opacity-0 bg-gradient-to-t from-gray-800 via-gray-800 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full"></div>
                            {{-- <img class="w-full" src={{$product->Link}} > --}}
                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="autoplay: true" style="margin-top: 50px">

                                <ul class="uk-slideshow-items">
                                    @foreach ($slideshow as $_slideshow)
                                    @if ($_slideshow->IDProduct==$product->IDProduct)
                                    <li>
                                        <img src="{{$_slideshow->Link}}" class="w-full"   uk-cover>
                                    </li>
                                    @endif
                                    @endforeach
                                    
                                </ul>
                    
                                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                    
                            </div>
                         
                            <div class="absolute bottom-0 p-8 w-full opacity-0 group-hover:opacity-100">
                               
                                <button class="dark:bg-gray-800 dark:text-gray-300 font-medium text-base leading-4 text-gray-800 bg-white py-3 w-full"
                                uk-toggle="target: #modal-product{{$product->IDProduct}}">Xem chi tiết</button>
                                <div id="modal-product{{$product->IDProduct}}" class="uk-modal-full" uk-modal>
                                    <div class="uk-modal-dialog uk-modal-body" style="height: max-content">
                                        <button class="uk-modal-close-default" type="button" uk-close></button>
                                        @include('staff_assets.productdetails')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="font-normal dark:text-black text-xl leading-5 text-gray-800 md:mt-6 mt-4">{{$product->ProductName}}</p>
                        
                    </div>
                    @endforeach
                
                </div>
    
                
            </div>
        </div>
    
                            
                <script>
                    search2.addEventListener("keyup", function() {
                        $value = $(search2).val();
                        
                        $.ajax({
                            type: 'get',
                            url: '{{ URL::to('search') }}',
                            data: {
                                'search': $value
                            },
                            success:function(data){
                                $('div.tbox').html(data);
                            }
                        }); 

                    })
                    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
                </script>
        
        <script>
            CategoryProductSelect.addEventListener("change", function() {
                $value2 = $(CategoryProductSelect).val();
                $.ajax({
                    type: 'get',
                    url: '{{ URL::to('CategoryProduct_search') }}',
                    data: {
                        'CategoryProduct_search': $value2
                    },
                    success:function(data){
                        $('div.tbox').html(data);
                    }
                });
            })
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        </script>
        
        
        
                </div>
            </div>
        </div>
    </x-app-layout>
    


                                 
          