
 
    @php
    $count=0;
@endphp
@foreach ($getProductVersion as $_getProductVersion )
    @if ( $_getProduct->IDProduct == $_getProductVersion->IDProduct )
    @php
        $count=$count+1;
    @endphp
    @endif
@endforeach

@if ($count!=1)
<form action="{{ url('CategoryDelete') }}" method="post">
    {{ csrf_field()}}
    <div class="uk-margin">
        <legend class="uk-legend"> Cảnh báo</legend>
        <label class="uk-form-label" for="form-stacked-text">Bạn thật sự muốn xóa phiên bản <b>{{$_getProduct->IDVersion}}</b>
            của dịch vụ <b>{{$_getProduct->ProductName}}</b> ?</label>
        <div class="uk-inline">
            <input class="uk-input" value="{{$_getProduct->IDVersion}}" type="hidden" name="IDVersion">
            <input class="uk-input" value="{{$_getProduct->ProductName}}" type="hidden" name="ProductName">
        </div>
    </div>
    <button type="submit" class="uk-button uk-button-default" style="background-color: #0657ed; color:white">Xác nhận</button>
</form>
@else
<form action="{{ url('ProductDeleteAll') }}" method="post">
    {{ csrf_field()}}
    <div class="uk-margin">
        <legend class="uk-legend"> Cảnh báo</legend>
        <label class="uk-form-label" for="form-stacked-text">Đây là phiên bản duy nhất của  <b>{{$_getProduct->ProductName}}</b>. Nếu bạn xóa phiên bản này, thì dịch vụ sẽ bị xóa theo, bạn thật sự muốn xóa dịch vụ 
            <b>{{$_getProduct->ProductName}}</b> phiên bản <b>{{$_getProduct->IDVersion}}</b> ?</label>
        <div class="uk-inline">
            <input class="uk-input" value="{{$_getProduct->IDVersion}}" type="hidden" name="IDVersion">
            <input class="uk-input" value="{{$_getProduct->ProductName}}" type="hidden" name="ProductName">
            <input class="uk-input" value="{{$_getProduct->IDProduct}}" type="hidden" name="IDProduct">
        </div>
    </div>
    <button type="submit" class="uk-button uk-button-default" style="background-color: #0657ed; color:white">Xác nhận</button>
</form>
@endif


