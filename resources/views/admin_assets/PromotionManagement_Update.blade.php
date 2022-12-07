
    <form action="{{ url('PromotionUpdate') }}" method="POST" role="form" class="uk-form-stacked">
        {{ csrf_field()}}
        <legend class="uk-legend">Thêm mới mã giảm giá</legend>
        <div class="uk-margin">
            
            
                <input class="uk-input uk-form-width-large" type="hidden" value="{{$_Promotion->IDPromotion}}" name="IDPromotion">
           
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Tên chương trình khuyến mãi</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="text" value="{{$_Promotion->PromotionName}}" name="PromotionName">
            </div>
        </div>
    
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Mã khuyến mãi</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="text" value="{{$_Promotion->Promotion}}" name="Promotion">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Chi tiết mã khuyến mãi</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="text" value="{{$_Promotion->PromotionDetails}}" name="PromotionDetails">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Lượt sử dụng</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="number" value="{{$_Promotion->RemainingUsage}}" name="RemainingUsage">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Ngày tạo</label>
            <div class="uk-inline">
               
                <input class="uk-input uk-form-width-large" type="date" value="{{$_Promotion->Created_at}}" name="Created_at">
            </div>
        </div>
       
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Ngày hết hạn</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="date" value="{{$_Promotion->Expired_at}}" name="Expired_at">
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Phần trăm giảm</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="number" value="{{$_Promotion->Discount*100}}" name="Discount">
            </div>
        </div>
         <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Dành cho danh mục: </label>
            <div class="uk-inline">
                <select id="select-beast" name="ForCategoryID"  class="uk-select uk-form-width-large" autocomplete="off" style="width: 100% !important">
                    <option value="{{$_Promotion->ForCategoryID}}">{{$_Promotion->ForCategoryID}}</option>
                    @foreach ($Category as $_Category)
                    @if ($_Category->CategoryName!=$_Promotion->ForCategoryID)
                    <option value="{{$_Category->CategoryName}}">{{$_Category->CategoryName}}</option>
                    @endif
                   
                    @endforeach
                </select>
            </div>
        </div>
         <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Dành cho dịch vụ: </label>
            <div class="uk-inline">
                    <select id="select-beast" name="ForProductID" class="uk-select uk-form-width-large"  autocomplete="off" style="width: 100% !important">
                        <option value="{{$_Promotion->ForProductID}}">{{$_Promotion->ForProductID}}</option>
                        @foreach ($Product as $_Product)
                        @if ($_Product->ProductName!=$_Promotion->ForProductID)
                        <option value="{{$_Product->ProductName}}">{{$_Product->ProductName}}</option>
                        @endif
                        @endforeach
                    </select>
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Dành cho phiên bản: </label>
            <div class="uk-inline">
                <select id="select-beast" name="ForVersionID" class="uk-select uk-form-width-large"  autocomplete="off" style="width: 100% !important">
                    {{-- @foreach ($ProductVersion as $_ProductVersion)
                    @if ($_ProductVersion->IDVersion==$_Promotion->ForVersionID)
                    <option value="{{$_Promotion->ForVersionID}}">{{$_ProductVersion->ProductName}} phiên bảns {{$_Promotion->ForVersionID}}</option>
                    @endif
                    @endforeach --}}
                    {{-- @foreach ($ProductVersion as $_ProductVersion)
                    @if ($_ProductVersion->IDVersion==$_Promotion->ForVersionID)
                    <option value="{{$_ProductVersion->IDVersion}}">{{$_ProductVersion->ProductName}} phiên bản {{$_ProductVersion->IDVersion}}</option>
                    @elseif ($_ProductVersion->IDVersion!=$_Promotion->ForVersionID)
                    <option value="{{$_ProductVersion->IDVersion}}">{{$_ProductVersion->ProductName}} phiên bản {{$_ProductVersion->IDVersion}}</option>
                    @endif
                    @endforeach --}}

                    @if ($_Promotion->ForVersionID!=null){
                    @foreach ($ProductVersion as $_ProductVersion)
                    @if ($_ProductVersion->IDVersion==$_Promotion->ForVersionID)
                    <option value="{{$_Promotion->ForVersionID}}">{{$_ProductVersion->ProductName}} phiên bản {{$_Promotion->ForVersionID}}</option>
                    @endif
                        @if ($_ProductVersion->IDVersion!=$_Promotion->ForVersionID)
                        <option value="{{$_ProductVersion->IDVersion}}">{{$_ProductVersion->ProductName}} phiên bản {{$_ProductVersion->IDVersion}}</option>
                        @endif
                    @endforeach
                    } @elseif ($_Promotion->ForVersionID==null)
                        <option value="">Chọn (Mặc định sẽ bỏ trống)</option>
                        @foreach ($ProductVersion as $_ProductVersion)
                        <option value="{{$_ProductVersion->IDVersion}}">{{$_ProductVersion->ProductName}} phiên bản {{$_ProductVersion->IDVersion}}</option>
                        @endforeach
                    </select>
                    @endif
                </select>
            </div>
        </div> 
        <div class="uk-margin">
            <button type="submit" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Xác nhận</button>
        </div>
        
    </form>

    