<head>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="print.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css">
</head>
    <form action="{{ url('AddContract_form') }}" method="POST" role="form" id="form_signcontract" class="uk-form-horizontal uk-margin-large">
        {{ csrf_field()}}
        <div class="uk-text-center" uk-grid>
            <div class="uk-width-1-1">
                <div class="uk-card uk-card-default uk-card-body">
                    <div class="uk-clearfix">
                        <div class="uk-float-right">
                            <div class="uk-card uk-card-default uk-card-body">
                                <legend>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</legend>
                                <H3>Độc lập-Tự do-Hạnh Phúc</H3>
                            </div>
                        </div>
                        <div class="uk-float-left">
                            <div class="uk-card uk-card-default uk-card-body">
                               
                                <legend>DOANH NGHIỆP GIẢI PHÁP PHẦN MỀM HTECH</legend>
                            </div>
                        </div>
                    </div>
<br><br>

<input type="hidden" value="{{$getIDContract}}" name="IDContract">

<b><h1 style="padding-right: 100px;"> HỢP ĐỒNG CUNG CẤP VÀ SỬ DỤNG DỊCH VỤ</h1></b>
<br>
<label class="uk-form-label" for="form-horizontal-text">Chúng tôi gồm:</label> <br>
<div class="uk-align-left" style="border: solid; width: -webkit-fill-available;">
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Bên sử dụng dịch vụ (Bên A):</label> <br>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Người đại diện: </label>
        <div class="uk-form-controls">
            {{-- <input class="uk-input uk-form-width-large" id="CustomerNameSearch"  type="text" required> --}}
            <select class="uk-select uk-form-width-large "  id="CustomerNameSearch" onchange="getCustomerName()"  style="height: 40px" name="state">
                <option value="null">Vui lòng chọn dịch vụ</option>  
                @foreach ($getCustomerName as $_getCustomerName )
            <option value="{{$_getCustomerName->CustomerName}}">{{$_getCustomerName->CustomerName}}</option>
            @endforeach
              </select>
        </div>
    </div>
<div class="CustomerNameSpan">
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Địa chỉ:</label>
        <div class="uk-form-controls">
            <label class="uk-form-label" style="width: auto" for="form-horizontal-text"></label> <br>
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Số điện thoại:</label>
        <div class="uk-form-controls">
            <label class="uk-form-label" style="width: auto" for="form-horizontal-text"></label> <br>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Email:</label>
        <div class="uk-form-controls">
            <label class="uk-form-label" style="width: auto" for="form-horizontal-text"></label> <br>
        </div>
    </div>
</div>
   

</div>
<div class="uk-align-left" style="border: solid; width: -webkit-fill-available;">
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Bên cung cấp dịch vụ ( Bên B): </label><br>
    </div>
    <div class="uk-margin">
        @foreach ($getStaff as $_getStaff )
        <label class="uk-form-label" for="form-horizontal-text">Người đại diện:</label> 
        <div class="uk-form-controls">
            <label class="uk-form-label" style="width: auto" for="form-horizontal-text">{{$_getStaff->Fullname}}</label> <br>
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Chức vụ:</label>
        <div class="uk-form-controls">
            <label class="uk-form-label" style="width: auto" for="form-horizontal-text"> {{$_getStaff->Competence}}</label> <br>
        </div>
    </div>
    <input type="hidden" name="ID" id="ID" value="{{$_getStaff->ID}}">
    @endforeach
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Theo giấy ủy quyền số:</label>
        <div class="uk-form-controls">
            <label class="uk-form-label" style="width: auto" for="form-horizontal-text"> 1/UQNV ký ngày 01/01/2022 của Tổng giám đốc doanh nghiệp</label> <br>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Địa chỉ trụ sở chính:</label>
        <div class="uk-form-controls">
            <label class="uk-form-label" style="width: auto" for="form-horizontal-text"> Số 99 đường Triệu Thị Trinh, Khu Vực 3, phường 1, thành phố Vị Thanh, tỉnh Hậu Giang</label> <br>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Địa chỉ giao dịch</label>
        <div class="uk-form-controls">
            <label class="uk-form-label" style="width: auto" for="form-horizontal-text"> Số 99 đường Triệu Thị Trinh, Khu Vực 3, phường 1, thành phố Vị Thanh, tỉnh Hậu Giang</label> <br>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Số điện thoại:</label>
        <div class="uk-form-controls">
            <label class="uk-form-label" style="width: auto" for="form-horizontal-text"> 0334358888</label> <br>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Mã số thuế:</label>
        <div class="uk-form-controls">
            <label class="uk-form-label" style="width: auto" for="form-horizontal-text"> 1/UQNV ký ngày 01/01/2022 của Tổng giám đốc doanh nghiệp</label> <br>
        </div>
    </div>

</div>
<label class="uk-form-label" style="width: auto" for="form-horizontal-text">Hai Bên thỏa thuận ký kết hợp đồng với các điều khoản sau: </label> <br><br>
<div class="uk-align-left" style="border: solid; width: -webkit-fill-available;">
        <label class="uk-form-label" style="width: auto" for="form-horizontal-text"> <b> ĐIỀU 1: NỘI DUNG CUNG CẤP DỊCH VỤ </b> </label> <br>
        <div class="uk-margin">
            <label class="uk-form-label" style="width: auto" for="form-horizontal-text"><b> 1.1</b> Bên B đồng ý cung cấp, Bên A đồng ý sử dụng dịch vụ cụ thể như sau:  </label><br>
        </div>   

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Tên dịch vụ:  </label>
            <div class="uk-form-controls">
                    <select class="uk-select uk-form-width-large " onchange="getIDProduct()" id="getProductSearch" name="IDProduct" style="height: 40px" name="state">
                        <option value="null">Vui lòng chọn dịch vụ</option>  
                        @foreach ($getProduct as $_getProduct )
                    <option value="{{$_getProduct->IDProduct}}">{{$_getProduct->ProductName}}</option>
                    @endforeach
                      </select>
                  
            </div>
        </div> 
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Phiên bản:  </label>
            <div class="uk-form-controls">
                <select class="getVersion uk-select uk-form-width-large" id="VersionPrice" name="IDVersion"  >                 
                </select>
            </div>
        </div> 
        
        <div class="uk-margin">
            <label class="uk-form-label" style="width: auto" for="form-horizontal-text"> <b>1.2</b> 
                Trong quá trình sử dụng dịch vụ nếu bên A có nhu cầu nâng cấp/chuyển đổi gói dịch vụ tại điều 1.1, hai Bên thống nhất việc nâng cấp chuyển đổi được thực hiện theo quy định của bên B.
            </label><br>
        </div> 

        <div class="uk-margin">
            <label class="uk-form-label" style="width: auto" for="form-horizontal-text"> <b>1.3</b> 
                Hợp đồng này có giá trị
            </label>
            <input type="number" class="uk-input uk-form-width-small" id="getTimeContract" onchange="getContractValue()" required> tháng. Bắt đầu từ 
            {{$created_at}}     
        </div> 
        <div class="uk-margin">
            <label class="returnContractPrice uk-form-label" style="width: auto" for="form-horizontal-text"> <b>1.3</b> 
               Giá trị hợp đồng:         
            </label>
        </div> 

        <input type="hidden" name="ContractStatus" value="Pending">
        
    

</div>

<div class="uk-align-left" style="border: solid; width: -webkit-fill-available;">
    <label class="uk-form-label" style="width: auto" for="form-horizontal-text"> <b> ĐIỀU 2: GIÁ CẢ VÀ PHƯƠNG THỨC THANH TOÁN </b> </label> <br>
    <div class="uk-margin">
        <label class="uk-form-label" style="width: auto" for="form-horizontal-text"><b> 2.1</b> Bên A đồng ý thanh toán cho bên B các phí ban đầu như: triển khai, cài đặt (nếu có).  </label><br>
    </div>   
    <div class="uk-margin">
        <label class="uk-form-label" style="width: auto" for="form-horizontal-text"> <b>1.2</b> Bên B phải cung cấp dịch vụ <b> Máy chủ ảo - Smart Cloud </b> với phiên bản <b> 1.1.0 </b> 
            cho bên A kể từ ngày kí kết hợp đồng.  </label><br>
    </div> 
    <div class="uk-margin">
        <label class="uk-form-label" style="width: auto" for="form-horizontal-text"> <b>1.3</b> 
            Trong quá trình sử dụng dịch vụ nếu bên A có nhu cầu nâng cấp/chuyển đổi gói dịch vụ tại điều 1.1, 
            hai Bên thống nhất việc nâng cấp chuyển đổi được thực hiện theo quy định của bên B.
        </label><br>
    </div> 

</div>



</div>
            </div>
        </div>
      
        <button class="uk-button uk-button-primary">Xác nhận</button>
    </form>
    <button type="button" onclick="printJS({ printable: 'form_signcontract', type: 'html' })">
        Print Form with Header
     </button>
       
    <script>
       function getCustomerName(){
            $valueCustomerName = $(CustomerNameSearch).val();
            $.ajax({
                type: 'get',
                url: '{{ URL::to('Search_CustomerName') }}',
                data: {
                    'Search_CustomerName': $valueCustomerName
                },
                success:function(data){
                    $('div.CustomerNameSpan').html(data);
                }
            });
        }
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>
  
 

  <script>
    $(".uk-select").select2({
});
  </script>

 

<script>
   function getIDProduct(){
        $valueID = $(getProductSearch).val();    
        $.ajax({
            type: 'get',
            url: '{{ URL::to('Search_Version') }}',
            data: {
                'valueID': $valueID
            },
            success:function(data){
                $('select.getVersion').html(data);
            }
        });
    }
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>

<script>
    function getContractValue (){
         $VersionPrice = $(VersionPrice).val();   
         $getTimeContract = $(getTimeContract).val();   
        //  $timeCreated_at = $(timeCreated_at).val(); 
        //  $timeExpired_at = $(timeExpired_at).val(); 
         $.ajax({
             type: 'get',
             url: '{{ URL::to('Search_ContractPrice') }}',
             data: {
                 'VersionPrice': $VersionPrice,
                 'getTimeContract': $getTimeContract
                //  'timeCreated_at': $timeCreated_at,
                //  'timeExpired_at': $timeExpired_at
             },
             success:function(data){
                 $('label.returnContractPrice').html(data);
             }
         });
     }
     $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
 </script>



<style>
    .uk-card-default{
        background-color: #ffffff !important; 
        color: black !important;
        box-shadow: 0 0px 0px rgb(0 0 0 / 8%) !important;
    }
</style>

