<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin"  uk-grid>
    <div class="uk-card-media-left uk-cover-container" style="height: 300 !important;width: 300 !important;">
        <img src="https://onesme.vn/resources/upload/file/services/images/03082021/20210803202267d8c114-9055-4e9c-b02c-bfefa292f75b.PNG" style="height: 300 !important;width: 300 !important;" alt="" uk-cover>
        <canvas width="300" height="200"></canvas>
    </div>
    <div>
        <div class="uk-card-body">
            <input class="uk-input uk-width-1-2" value="{{$product->ProductName}}"
             type="text" placeholder="uk-width-1-2" aria-label="uk-width-1-2">
        </div>
    </div>
</div>

{{-- Tổng quan --}}
    <div class="uk-child-width-1-1@s uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-hover uk-card-body">
            <h3 class="uk-card-title">Tổng quan</h3>
            <textarea class="uk-textarea" rows="5"  aria-label="Textarea">{{$product->ProductDetails}}</textarea>
        </div>
    </div>
</div>
{{--Phien ban va gia tien --}}
<div class="uk-child-width-1-1@s uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-hover uk-card-body">
<div class="uk-flex uk-flex-center">
    <h3 class="uk-card-title">Bảng giá</h3> 
@foreach ($VersionPrice as $_VersionPrice )
        @if ($product->IDProduct==$_VersionPrice->IDProduct)
        <div class="uk-card uk-card-default uk-card-body uk-margin-left">
                <div class="uk-padding uk-grid-small uk-child-width-expand@s" uk-grid style="min-width: 600;">
                <div>
                <div class="uk-card uk-card-default uk-card-body uk-padding-remove" style="border-bottom: 8px solid #dae0e7;">
                <div class="uk-text-center uk-background-primary uk-light uk-padding-small">
                    <h5>{{$_VersionPrice->IDVersion}}</h5>
                </div>
                
                <div class="uk-text-center uk-padding-small">
                    <p>{{$_VersionPrice->VersionDetails}}</p>
                    <h1 class="uk-text-bold">{{$_VersionPrice->Price}} <span class="uk-text-small">{{$_VersionPrice->CurrencyUnit}}</span></h1>
                </div>
                </div>
                </div>
            </div>
            </div>
        @endif

@endforeach

</div>
</div>
</div>
</div>
{{-- Đánh giá --}}
<div class="uk-child-width-1-1@s uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-hover uk-card-body">
            <h3 class="uk-card-title">Đánh giá</h3>
            @foreach ($VersionPrice as $_VersionPrice )
        @if ($product->IDProduct==$_VersionPrice->IDProduct)
            @foreach ($Feedback as $_Feedback )
                @if ($_VersionPrice->IDVersion==$_Feedback->IDVersion)
              <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
                <legend>Phiên bản {{$_VersionPrice->IDVersion}}</legend>
                <div class="uk-card-badge uk-label">{{$_Feedback->Rate}}<span class="fa fa-star checked"></span></div>
                <h3 class="uk-card-title">{{$_Feedback->CustomerName}}</h3>
                <p>{{$_Feedback->Content}}</p>
            </div>   
              @endif
            @endforeach
         @endif 
         @endforeach
         
        </div>
    </div>
</div>

