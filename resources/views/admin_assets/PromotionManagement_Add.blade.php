
    <form action="{{ url('PromotionAdd') }}" method="POST" role="form" class="uk-form-stacked">
        {{ csrf_field()}}
        <legend class="uk-legend">Thêm mới mã giảm giá</legend>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Tên chương trình khuyến mãi</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="text" name="PromotionName">
            </div>
        </div>
    
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Mã khuyến mãi</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="text" name="Promotion">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Chi tiết mã khuyến mãi</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="text" name="PromotionDetails">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Lượt sử dụng</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="number" name="RemainingUsage">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Ngày tạo</label>
            <div class="uk-inline">
               
                <input class="uk-input uk-form-width-large" type="date" name="Created_at">
            </div>
        </div>
       
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Ngày hết hạn</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="date" name="Expired_at">
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Phần trăm giảm</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="number" name="Discount">
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Dành cho danh mục: </label>
            <div class="uk-inline">
                <select id="select-beast" name="ForCategoryID"  class="uk-select uk-form-width-large" autocomplete="off" style="width: 100% !important">
                    <option value="">Chọn (Mặc định sẽ bỏ trống)</option>
                    @foreach ($Category as $_Category)
                    <option value="{{$_Category->CategoryName}}">{{$_Category->CategoryName}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Dành cho dịch vụ: </label>
            <div class="uk-inline">
                    <select id="select-beast" name="ForProductID" class="uk-select uk-form-width-large"  autocomplete="off" style="width: 100% !important">
                        <option value="">Chọn (Mặc định sẽ bỏ trống)</option>
                        @foreach ($Product as $_Product)
                        <option value="{{$_Product->ProductName}}">{{$_Product->ProductName}}</option>
                        @endforeach
                    </select>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Dành cho phiên bản: </label>
            <div class="uk-inline">
                <select id="select-beast" name="ForVersionID" class="uk-select uk-form-width-large"  autocomplete="off" style="width: 100% !important">
                    <option value="">Chọn (Mặc định sẽ bỏ trống)</option>
                    @foreach ($ProductVersion as $_ProductVersion)
                    <option value="{{$_ProductVersion->IDVersion}}">{{$_ProductVersion->ProductName}} phiên bản {{$_ProductVersion->IDVersion}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="uk-margin">
            <button type="submit" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Xác nhận</button>
        </div>
        
    </form>

    {{-- <script>
        new TomSelect("#select-beast",{
	create: true,
	sortField: {
		field: "text",
		direction: "asc"
	}
});
    </script> --}}