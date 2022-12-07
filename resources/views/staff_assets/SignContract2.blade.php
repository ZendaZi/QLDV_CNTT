<head>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="print.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css">
</head>

    <form action="{{ url('AddContract_form') }}" method="POST" enctype="multipart/form-data" role="form" id="form_signcontract" class="uk-form-horizontal uk-margin-large">
        {{ csrf_field()}}
        <div class="uk-text-center" uk-grid>
            <div class="uk-width-1-1">
<input type="hidden" value="{{$getIDContract}}" name="IDContract">

<legend class="uk-legend">THÔNG TIN HỢP ĐỒNG ĐÃ KÝ</legend>
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
</div>
<div class="uk-align-left" style="border: solid; width: -webkit-fill-available;">
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Tên danh mục:  </label>
        <div class="uk-form-controls">
                <select class="uk-select uk-form-width-large " onchange="getIDCategorySearch()" id="getIDCategory" name="IDCategory" style="height: 40px" name="state">
                        <option value="null">Vui lòng chọn danh mục</option>  
                    @foreach ($getCategory as $_getCategory )
                        <option value="{{$_getCategory->IDCategory}}">{{$_getCategory->CategoryName}}</option>
                     @endforeach
                </select>
        </div>
    </div> 

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Tên dịch vụ:  </label>
            <div class="uk-form-controls">
                    <select class="getProduct uk-select uk-form-width-large " onchange="getIDProduct()" id="getProductSearch" name="IDProduct" style="height: 40px" name="state">
                 
                    </select>
            </div>
        </div> 
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Phiên bản:  </label>
            <div class="uk-form-controls">
                <select class="getVersion uk-select uk-form-width-large" id="VersionPrice" name="IDVersion"  >                 
                    <option value="">Vui lòng chọn dịch vụ</option>
                </select>
            </div>
        </div> 
        
       
        <div class="uk-margin">
            <label class="uk-form-label"  for="form-horizontal-text"> Nhập mã khuyến mãi (nếu có)</label>
            <div class="uk-form-controls">
            <input type="text" class="uk-input  uk-form-width-large" id="checkpromotion" name="checkpromotion" >
        </div> 
        </div>

        <div class="returnPromotion">
            <input type="hidden" class="uk-input  uk-form-width-large" id="promotion" name="promotion">
        </div>
        
        <div class="uk-margin">
            <label class="uk-form-label"  for="form-horizontal-text"> Hợp đồng này có giá trị </label>
            <div class="uk-form-controls">
            <input type="number" class="uk-input  uk-form-width-large" id="getTimeContract"  required> 
            {{-- tháng. Bắt đầu từ 
            {{$created_at}}      --}}
        </div> 
         </div>
         <div class="uk-margin">
            <a class="uk-button uk-button-primary uk-margin-small" onclick="getContractValue()"> Tính toán</a>
         </div>
        <div class="uk-margin">
            <div class="returnContractPrice" > 
            </div> 
        </div>
        <input type="hidden" name="ContractStatus" value="Pending">

          
</div>
    <div class="uk-align-left" style="border: solid; width: -webkit-fill-available;">
        <div class="uk-margin">
            <label class="uk-form-label"  for="form-horizontal-text"> 
                Hình ảnh hợp đồng đã ký:
            </label>
            <div class="uk-margin" uk-margin>
                {{-- <div uk-form-custom="target: true"> --}}
                    {{-- <input type="text" name="imageupload" aria-label="Custom controls"> --}}
                    <input class="uk-input uk-form-width-small" name="imageupload" type="file" placeholder="Chọn ảnh" aria-label="Custom controls" >
                {{-- </div> --}}
               
            </div>   
        </div> 
    </div>
</div>
</div>
<button class="uk-button uk-button-primary" style="margin-top: 50px">Xác nhận</button>
    </form>
   
       
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
  
 

  {{-- <script>
    $(".uk-select").select2({
});
  </script> --}}

  <script>
    function getIDCategorySearch(){
         $valueIDCategory = $(getIDCategory).val(); 
        console.log($valueIDCategory);   
         $.ajax({
             type: 'get',
             url: '{{ URL::to('Search_ProductCategory') }}',
             data: {
                 'valueID': $valueIDCategory
             },
             success:function(data){
                 $('select.getProduct').html(data);
             }
         });
     }
     $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
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
         $checkpromotion = $(checkpromotion).val();
         $getProductSearch= $(getProductSearch).val();
         $getIDCategory= $(getIDCategory).val();
         $.ajax({
             type: 'get',
             url: '{{ URL::to('Search_ContractPrice') }}',
             data: {
                 'VersionPrice': $VersionPrice,
                 'getTimeContract': $getTimeContract,
                 'checkpromotion': $checkpromotion,
                 'getProductSearch': $getProductSearch,
                 'getIDCategory': $getIDCategory
             },
             success:function(data){
                 $('div.returnContractPrice').html(data);
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

