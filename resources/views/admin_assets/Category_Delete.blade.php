
 
    @php
        $count=0;
    @endphp
    @foreach ($getProduct as $_getProduct )
        @if ( $_getCategory->IDCategory == $_getProduct->IDCategory )
        @php
            $count=$count+1;
        @endphp
        @endif
    @endforeach

    @if ($count==0)
    <form action="{{ url('CategoryDelete') }}" method="post">
        {{ csrf_field()}}
        <div class="uk-margin">
            <legend class="uk-legend text-center"><span class="dark:text-red-600 text-right" > CẢNH BÁO </span></legend>
            <p class="text-sm font-medium leading-none text-gray-800 dark:text-gray-800 mb-2  text-left ">Bạn thật sự muốn xóa danh mục <span class="dark:text-red-600 text-right" >{{$_getCategory->CategoryName}}</span>?</label>
            <div class="uk-inline">
                <input class="uk-input" value="{{$_getCategory->IDCategory}}" type="hidden" name="IDCategory">
            </div>
        </div>
        <button type="submit" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Xác nhận</button>
    </form>
    @else
    <legend class="uk-legend text-center"><span class="dark:text-red-600 text-right" > CẢNH BÁO </span></legend>
        <p class="text-sm font-medium leading-none text-gray-800 dark:text-gray-800 mb-2  text-left ">Bạn không thể xóa danh mục <span class="dark:text-red-600 text-right" > {{$_getCategory->CategoryName}}</span> vì tồn tại dịch vụ thuộc danh mục này. </p> 
    <p class="text-sm font-medium leading-none text-gray-800 dark:text-gray-800 mb-2  text-left ">Vui lòng xóa hoặc chuyển danh mục khác cho các dịch vụ thuộc danh mục <span class="dark:text-red-600 text-right" > {{$_getCategory->CategoryName}}</span> rồi thực hiện lại thao tác. </p>
    @endif
 

