
    <form action="{{ url('PotentialCustomer-form') }}" method="POST" role="form" class="uk-form-stacked">
    {{ csrf_field()}}
    <legend class="uk-legend">Thêm mới khách hàng tiềm năng</legend>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Tên khách hàng</label>
        <div class="uk-inline">
            
            <input class="uk-input uk-form-width-large" type="text" name="CustomerName">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Địa chỉ khách hàng</label>
        <div class="uk-inline">
           
            <input class="uk-input uk-form-width-large" type="text" name="Address">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Số điện thoại khách hàng</label>
        <div class="uk-inline">
            
            <input class="uk-input uk-form-width-large" type="text" name="PhoneNumber">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Email khách hàng</label>
        <div class="uk-inline">
            
            <input class="uk-input uk-form-width-large" type="text" name="Email">
        </div>
    </div>


    <input class="uk-input uk-form-width-large" type="hidden" value="Potential" name="TypeOfCustomer">

    <div class="uk-margin">
        <button type="submit" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 " style="background-color: #3661b0; color:white">Xác nhận</button>
    </div>
    
</form>