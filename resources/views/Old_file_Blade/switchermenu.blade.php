  @php
      use Illuminate\Support\Facades\Auth;
      $role=Auth::user()->role;
  @endphp
    <ul class="uk-subnav uk-subnav-pill uk-position-top-center" style="z-index: 2; position: relative !important">
        <li><a href="dichvu">Tra cứu dịch vụ</a></li>
        <li><a href="thongke">Thống kê</a></li>
        <li><a href="hopdong">Quản lý hợp đồng</a></li>
                   


        <li>
                <div class="uk-inline">
                    <a href="#">Quản lý khách hàng</a>
                    <div uk-dropdown="pos: bottom-center">
                        <ul class="uk-nav uk-dropdown-nav">
                            <li><a href="khachhang">Quản lý khách hàng</a></li>
                            <li><a href="khachhangtiemnang">Quản lý khách hàng tiềm năng</a></li>
                        </ul>
                    </div>
                </div>
        </li>

        <li><a href="phanhoi">Quản lý phản hồi khách hàng</a></li>
      @if ($role==1)
      <li><a href="qldanhmuc">Quản lý danh mục</a></li>
      <li><a href="qldichvu">Quản lý dịch vụ</a></li>
      <li><a href="qlnhanvien">Quản lý nhân viên</a></li>
      @endif
        
      
    </ul>


    
   
