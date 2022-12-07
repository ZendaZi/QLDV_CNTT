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