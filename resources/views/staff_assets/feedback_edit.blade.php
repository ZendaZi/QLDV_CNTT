<form action="{{ url('Editfeedback') }}" method="post">
    {{ csrf_field()}}
    <div class="uk-margin">
        <legend for="form-horizontal-text">Khách hàng:</legend>
        <div class="uk-form-controls">
            <legend class="uk-form-label" style="width: auto" for="form-horizontal-text">{{$_CustomerContract->CustomerName}}</legend>
            <legend class="uk-form-label" style="width: auto" for="form-horizontal-text">{{$_CustomerContract->Address}}</legend> <br>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Tên phiên bản dịch vụ</label>
        <div class="uk-form-controls">
               <input type="hidden" name="IDVersion" value="{{$_ProductFeedback->IDVersion}}">
               <label class="uk-form-label" style="width: auto" for="form-horizontal-text">{{$_ProductFeedback->ProductName}} phiên bản {{$_ProductFeedback->IDVersion}}</label> <br>
        </div>
    </div>
    <div class="uk-margin">
        <div class="uk-form-controls">
           <input type="hidden" name="IDCustomer" value="{{$_CustomerContract->IDCustomer}}">
           <input type="hidden" name="id" value="{{$id}}">
           <input type="hidden" name="IDFeedback" value="{{$_ProductFeedback->IDFeedback}}">
           <input type="hidden" name="Created_at" value="{{$Created_at}}">
        </div>
    </div>
    <div class="uk-margin">
        <label class="block mb-2 text-xl font-medium text-gray-900 dark:text-white" for="form-horizontal-text">Điểm</label>
        <div class="uk-form-controls">
            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
             aria-label="Select" name="Rate">
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
               </select>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Nội dung phản hồi</label>
        <div class="uk-form-controls">
            <textarea class="bg-gray-50 border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" rows="5" name="Content" placeholder="Nội dung phản hồi" aria-label="Textarea">{{$_ProductFeedback->Content}}</textarea>
        </div>
    </div>
    <button class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Xác nhận</button>
</form>