<tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 dark:text-white ">
    <td class="pl-4">
        <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$_ContractPending->IDContract}} </p></td>
    {{-- <td class="pl-4">
        <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$_ContractPending->IDProduct}}</p></td> --}}
    <td class="pl-4">
        <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$_ContractPending->ProductName}}</p></td>
    <td class="pl-4">
            <a class="uk-button uk-button-default" href="#modal-linkimg{{$_ContractPending->IDContract}}" uk-toggle>Xem hợp đồng</a>
                <div id="modal-linkimg{{$_ContractPending->IDContract}}" class="uk-flex-top"  uk-modal>
                    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical" >
                        <button class="uk-modal-close-default" type="button" uk-close></button>
                       <img src="{{$_ContractPending->Link}}" >
                    </div>
                </div>

    </td>
    <td class="pl-4">
        <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$_ContractPending->ContractPrice}}</td>
    <td class="pl-4">
        <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$_ContractPending->name}} (MSNV:{{$_ContractPending->id}})</td>
    <td class="pl-4">
        <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$_ContractPending->ContractStatus}}</td>
    <td class="pl-4">
   <form action="{{ url('ContractApproval') }}" method="post">
    {{ csrf_field()}}
    <input type="hidden" name="IDContract" value="{{$_ContractPending->IDContract}}">
    <button class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 "
    >Xét duyệt</button>
   </form>
    </td>

</tr>




