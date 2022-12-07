@foreach ($getInfoUser as $_getInfoUser)
@if ($_getInfoUser->ID == $_getUser->id)
    <form action="{{ url('MemberDelete') }}" method="POST" role="form" class="uk-form-stacked">
        {{ csrf_field()}}
        <legend class="uk-legend">THU HỒI QUYỀN TRUY CẬP VÀ TÀI KHOẢN</legend>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Bạn có chắc chắn sẽ thu hồi tài khoản của nhân sự <b>{{$_getInfoUser->Fullname}}</b> ?</label> <br>
            <div class="uk-inline">
                <input class="uk-input" type="hidden" value="{{$_getInfoUser->ID}}" name="id" readonly >
            </div>
        </div>
        <div class="uk-margin">
            <button class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 "
            >Xác nhận</button>
        </div>
        
    </form>
    @endif
@endforeach