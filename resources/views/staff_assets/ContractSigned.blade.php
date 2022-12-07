<div class="bg-white dark:bg-gray-800  shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
<table class="w-full whitespace-nowrap">
        <thead>
            <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 dark:text-white ">
                <th class="font-large text-left pl-4" style="font-size: large;font-style: oblique;">Mã số hợp đồng</th>
                <th class="font-large text-left pl-4" style="font-size: large;font-style: oblique;">Mã dịch vụ</th>
                <th class="font-large text-left pl-4" style="font-size: large;font-style: oblique;">Tên dịch vụ</th>
                <th class="font-large text-left pl-4" style="font-size: large;font-style: oblique;">Hình ảnh hợp đồng</th>
                <th class="font-large text-left pl-4" style="font-size: large;font-style: oblique;">Giá trị hợp đồng</th>
                <th class="font-large text-left pl-4" style="font-size: large;font-style: oblique;">Nhân viên chịu trách nhiệm ký</th>
                <th class="font-large text-left pl-4" style="font-size: large;font-style: oblique;">Trạng thái hợp đồng</th>
            </tr>
        </thead>
        <tbody>
           
            <tr>
                <td class="pl-12">{{$_Contract->IDContract}}</td>
                <td class="pl-12">{{$_Contract->IDProduct}}</td>
                <td class="pl-12">{{$_Contract->ProductName}}</td>
                <td class="pl-12">
    
                        <a class="uk-button uk-button-default" href="#modal-linkimg{{$_Contract->IDContract}}" uk-toggle>Xem hợp đồng</a>
                            <div id="modal-linkimg{{$_Contract->IDContract}}" class="uk-flex-top"  uk-modal>
                                <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical" >
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                   <img src="{{$_Contract->Link}}" >
                                </div>
                            </div>
    
                </td>
                <td class="pl-12">{{$_Contract->ContractPrice}}</td>
                <td class="pl-12">{{$_Contract->name}}--{{$_Contract->id}}</td>
                <td class="pl-12">{{$_Contract->ContractStatus}}</td>
            </tr>
            
            
        </tbody>
    </table>
</div>


