
    <form action="{{ url('MemberAdd') }}" method="POST" role="form" enctype="multipart/form-data" class="uk-form-stacked">
        {{ csrf_field()}}
        <legend class="uk-legend">Thêm mới nhân sự</legend>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Mã nhân sự</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="text" value="{{$countUser}}" name="id"  readonly>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Tên nhân sự</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="text" name="name">
            </div>
        </div>
    
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Email</label>
            <div class="uk-inline">
               
                <input class="uk-input uk-form-width-large" type="text" name="Email">
        </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Mật khẩu</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="password" name="Password">
                <input class="uk-input uk-form-width-large" type="hidden" value="{{$created_at}}" name="Created_at">
            </div>
        </div>
       
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Ngày sinh</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="date" name="Birthday">
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Địa chỉ</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="text" name="Address">
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Số định danh công dân</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="text" name="IDCardNumber">
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Số điện thoại</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="text" name="PhoneNumber">
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Chức vụ</label>
            <div class="uk-inline">
                <select name="role" class="uk-select uk-form-width-large">
                    <option value="0">Nhân viên bán hàng</option>
                    <option value="1">Quản trị viên</option>
                </select>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Ảnh chân dung</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="file" name="Link">
            </div>
        </div>
        <div class="uk-margin">
            <button class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 "
            >Xác nhận</button>
        </div>
        
    </form>