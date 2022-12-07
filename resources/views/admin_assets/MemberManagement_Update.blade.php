@foreach ($getInfoUser as $_getInfoUser)
@if ($_getInfoUser->ID == $_getUser->id)
    <form action="{{ url('MemberUpdate') }}" method="POST" role="form" enctype="multipart/form-data" class="uk-form-stacked">
        {{ csrf_field()}}
        <legend class="uk-legend">Cập nhật nhân sự</legend>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Mã nhân sự</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" type="text" value="{{$_getInfoUser->ID}}" name="id" readonly >
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Tên nhân sự</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" value="{{$_getInfoUser->Fullname}}" type="text" name="name">
            </div>
        </div>
    
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Email</label>
            <div class="uk-inline">
               
                <input class="uk-input uk-form-width-large" value="{{$_getInfoUser->Email}}" type="text" name="Email">
        </div>
        </div>
       
       
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Ngày sinh</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" value="{{$_getInfoUser->Birthday}}" type="date" name="Birthday">
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Địa chỉ</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" value="{{$_getInfoUser->Address}}" type="text" name="Address">
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Số định danh công dân</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" value="{{$_getInfoUser->IDCardNumber}}" type="text" name="IDCardNumber">
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Số điện thoại</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" value="{{$_getInfoUser->PhoneNumber}}" type="text" name="PhoneNumber">
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Chức vụ</label>
            <div class="uk-inline">
                <select name="role" aria-valuetext="{{$_getInfoUser->Competence}}" class="uk-select uk-form-width-large">
                    <option value="0">Nhân viên bán hàng</option>
                    <option value="1">Quản trị viên</option>
                </select>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Ảnh chân dung</label>
            <div class="uk-inline">
                <input class="uk-input uk-form-width-large" value="{{$_getInfoUser->Link}}" type="file" name="Link">
            </div>
        </div>
        <div class="uk-margin">
            <button class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Xác nhận</button>
        </div>
        
    </form>
    @endif
@endforeach