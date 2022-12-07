
    <form action="{{ url('CategoryAdd') }}" method="POST" role="form" class="uk-form-stacked">
        {{ csrf_field()}}
        <legend class="uk-legend">Thêm mới danh mục dịch vụ</legend>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Tên danh mục</label>
            <div class="uk-inline">
              
                <input class="uk-input" type="text" name="CategoryName">
            </div>
        </div>
    
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Chi tiết danh mục</label>
            <div class="uk-inline" style="width: -webkit-fill-available; ">
                <textarea class="uk-textarea"  rows="5" name="CategoryDetails"  aria-label="Textarea"></textarea>
        </div>
        </div>
        <div class="uk-margin">
            <button type="submit" class="uk-button uk-button-default" style="background-color: #0657ed; color:white">Xác nhận</button>
        </div>
        
    </form>