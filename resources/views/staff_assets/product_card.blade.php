        <div>
            @foreach ($Products as $key =>$product)
            <div class="uk-card uk-card-default uk-card-body">

                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img src="{{$product->Link}}" width="300px" height="300px" alt="">
                    </div>
                    <div class="uk-card-body">
                        <legend class="uk-card-title">{{$product->ProductName}}</legend>
                        @if ($role==1)
                        <button>Sửa</button>
                        @endif
                        
                    </div>
                </div>

                
            </div>
            @endforeach
        </div>