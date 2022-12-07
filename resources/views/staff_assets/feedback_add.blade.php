<form action="{{ url('Addfeedback') }}" method="post">
    {{ csrf_field()}}
    <div class="uk-margin">
        <legend for="form-horizontal-text">Khách hàng:</legend>
        <div class="uk-form-controls">
            <legend class="uk-form-label" style="width: auto" for="form-horizontal-text">{{$_CustomerContract->CustomerName}}</legend>
            <legend class="uk-form-label" style="width: auto" for="form-horizontal-text">{{$_CustomerContract->Address}}</legend> <br>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Địa chỉ:</label>
        <div class="uk-form-controls">
            <select class="uk-select" aria-label="Select" name="IDVersion">
                @foreach ($Contract as $_Contract)
                @if ($_Contract->IDCustomer==$_CustomerContract->IDCustomer)
                <option value="{{$_Contract->IDVersion}}">{{$_Contract->ProductName}} phiên bản {{$_Contract->IDVersion}}</option>  
                @endif
                @endforeach
                
                
            </select>
        </div>
    </div>
    <div class="uk-margin">
        <div class="uk-form-controls">
           <input type="hidden" name="IDCustomer" value="{{$_CustomerContract->IDCustomer}}">
           <input type="hidden" name="id" value="{{$id}}">
           <input type="hidden" name="Created_at" value="{{$Created_at}}">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Điểm</label>
        <div class="uk-form-controls">
            <select class="uk-select" aria-label="Select" name="Rate">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
               </select>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Nội dung phản hồi</label>
        <div class="uk-form-controls">
            <textarea class="uk-textarea" rows="5" name="Content" placeholder="Nội dung phản hồi" aria-label="Textarea"></textarea>
        </div>
    </div>
    <button class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Xác nhận</button>
</form>