@foreach ($getInfoUser as $_getInfoUser)
@if ($_getInfoUser->ID == $_getUser->id)
    <form action="{{ url('MemberAllow') }}" method="POST" role="form" class="uk-form-stacked">
        {{ csrf_field()}}
        <legend class="uk-legend">Cấp lại tài khoản nhân sự</legend>
        <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text"><b>Mã nhân sự :</b> {{$_getInfoUser->ID}}  </label>
                <input class="uk-input" type="hidden" value="{{$_getInfoUser->ID}}" name="id" readonly >
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text"><b>Tên nhân sự :</b> {{$_getInfoUser->Fullname}}  </label>
            <input class="uk-input" value="{{$_getInfoUser->Fullname}}" type="hidden" name="name">
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text"><b>Email :</b> {{$_getInfoUser->Email}}  </label>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text"><b>Ngày sinh :</b> {{$_getInfoUser->Birthday}}  </label>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text"><b>Địa chỉ :</b> {{$_getInfoUser->Address}}  </label>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text"><b>Số định danh công dân :</b> {{$_getInfoUser->IDCardNumber}}  </label>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text"><b>Số điện thoại :</b> {{$_getInfoUser->PhoneNumber}}  </label>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text"><b>Chức vụ :</b> {{$_getInfoUser->Competence}}  </label>
            <input class="uk-input" value="{{$_getInfoUser->Competence}}" type="hidden" name="Competence">
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Mật khẩu</label>

            <div class="uk-inline">
                <input class="uk-input" type="Password" name="Password">
            </div>
            </div>
    
        
        <div class="uk-margin">
            <button class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                >Xác nhận</button>
        </div>
        
    </form>
    @endif
@endforeach