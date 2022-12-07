<form action="{{ url('PotentialCustomer-detele') }}" method="post">
    {{ csrf_field()}}
    <legend>Bạn có thực sự muốn xóa khách hàng tiềm năng  <b>{{$_PoCustomer->CustomerName}}</b>?</legend>
    <h3>Lưu ý: Thực hiện việc này sẽ ảnh hưởng dữ liệu hệ thống, cần xác nhận!!!</h3>
    <input type="hidden" value="{{$_PoCustomer->IDCustomer}}" name="IDCustomer">
    <button type="submit" class="text-white bg-gradient-to-br from-pink-400 to-red-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 " style="background-color: #ed0606; color:white">Xác nhận</button>
</form>
<button type="submit"class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 " style="background-color: #0657ed; color:white">Hủy</button>