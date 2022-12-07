<form action="{{ url('Deletefeedback') }}" method="post">
    {{ csrf_field()}}
    <div class="uk-margin">
        <legend for="form-horizontal-text">Xác nhận xóa phản hồi số {{$_ProductFeedback->IDFeedback}} này?  </legend>
        <div class="uk-form-controls">
            <input type="hidden" name="IDFeedback" value="{{$_ProductFeedback->IDFeedback}}">
            <button class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Xác nhận</button>
        </div>
    </div>
    
    
    
   
    
</form>