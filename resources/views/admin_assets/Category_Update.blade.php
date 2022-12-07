
    <form action="{{ url('CategoryUpdate') }}" method="POST" role="form" class="uk-form-stacked">
        {{ csrf_field()}}
        <legend class="uk-legend">Cập nhật danh mục dịch vụ</legend>
        <input class="uk-input" value="{{$_getCategory->IDCategory}}" type="hidden" name="IDCategory">
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Tên danh mục</label>
            <div class="uk-inline">
                
                <input class="uk-input uk-form-width-large" value="{{$_getCategory->CategoryName}}" type="text" name="CategoryName">
            </div>
        </div>
    
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Chi tiết danh mục</label>
            <div class="uk-inline" style="width: -webkit-fill-available; ">
                <textarea class="uk-textarea"  rows="5" name="CategoryDetails"  aria-label="Textarea">{{$_getCategory->CategoryDetails}}</textarea>
        </div>
        </div>
        <div class="uk-margin">
            <button type="submit" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Xác nhận</button>
        </div>
        
    </form>