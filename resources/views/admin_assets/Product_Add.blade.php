
    <form action="{{ url('ProductAdd') }}" method="POST" role="form" enctype="multipart/form-data" class="uk-form-stacked uk-form-width-large">
        {{ csrf_field()}}
        <legend class="uk-legend">Thêm mới dịch vụ</legend>
        <div class="uk-margin">
            <label class="uk-form-label " for="form-stacked-text">Thuộc danh mục</label>
            <div class="uk-inline">
                <select name="IDCategory" id="" class="uk-form-width-large">
                    @foreach ($getCategory as $_getCategory )
                        <option value="{{$_getCategory->IDCategory}}">{{$_getCategory->CategoryName}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Tên dịch vụ</label>
            <div class="uk-inline">
                
                <input class="uk-input uk-form-width-large" type="text" name="ProductName">
                <input class="uk-input" type="hidden" value="{{$countProduct}}" name="IDProduct">
            </div>
        </div>
    
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Tổng quan dịch vụ</label>
            <div class="uk-inline" style="width: -webkit-fill-available; ">
                <textarea class="uk-textarea"  rows="5" name="ProductDetails"  aria-label="Textarea"></textarea>
        </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Tên phiên bản</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="text" name="IDVersion">
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Miêu tả phiên bản</label>
            <div class="uk-inline"  style="width: -webkit-fill-available; ">
                <textarea class="uk-textarea"   rows="5" name="VersionDetails"  aria-label="Textarea"></textarea>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Đơn giá trên tháng</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="text" name="Price">
                <input class="uk-input" type="hidden" name="CurrencyUnit" value="VND">
                <input class="uk-input" type="hidden" name="TimeCycle" value="Tháng">
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Hình ảnh dịch vụ</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="file" name="Link">
            </div>
        </div>
        <div class="uk-margin">
            
            <div class="uk-inline">
                <input class="uk-input" type="hidden" name="ImageDetails" value="Hình ảnh dịch vụ số {{$countProduct}}">
            </div>
        </div>

        <div class="uk-margin">
            <button class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 "
            >Xác nhận</button>
        </div>
        
    </form>