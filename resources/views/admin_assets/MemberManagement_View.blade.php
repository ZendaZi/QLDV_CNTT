@foreach ($getInfoUser as $_getInfoUser)
@if ($_getInfoUser->ID == $_getUser->id)
<div class="uk-card uk-card-default uk-width-1-1">
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <img class="uk-border-circle" src="{{$_getInfoUser->Link}}" style="width: 400px; height:400px" alt="Avatar">
            </div>
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom">{{$_getInfoUser->Fullname}}</h3>
                <p class="uk-text-meta uk-margin-remove-top">{{$_getInfoUser->Competence}}</p>
            </div>
        </div>
    </div>
    <div class="uk-card-body">
        <p><b>MSNV:</b> {{$_getInfoUser->ID}}</p> <br>
        <p><b>Địa chỉ:</b> {{$_getInfoUser->Address}}</p> <br>
        <p><b>Ngày sinh:</b> {{$_getInfoUser->Birthday}}</p> <br>
        <p><b>CCCD/CMND/ Hộ chiếu:</b> {{$_getInfoUser->IDCardNumber}}</p> <br>
        <p><b>Số điện thoại:</b> {{$_getInfoUser->PhoneNumber}}</p> <br>
        <p><b>Email: </b> {{$_getInfoUser->Email}}</p> <br>
       
    </div>
    {{-- <div class="uk-card-footer">
        <a href="#" class="uk-button uk-button-text">Read more</a>
    </div> --}}
</div>

@endif
@endforeach
