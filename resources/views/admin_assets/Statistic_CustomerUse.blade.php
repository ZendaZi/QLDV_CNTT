<div class="bg-white dark:bg-gray-800  shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
    <table class="w-full whitespace-nowrap">
        <thead>
            <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 dark:text-white ">
                 <th class="font-large text-center pl-4" style="font-size: large;font-style: oblique;">Tên khách hàng</th>
                 <th class="font-large text-center pl-0" style="font-size: large;font-style: oblique;">Số hợp đồng đã ký</th>
               
            </tr>
        </thead>
        <tbody class="w-full">
            @foreach ($CountCustomerUse as $_CountCustomerUse)
            
                    
                
           
            <tr tabindex="0" class="focus:outline-none h-20 text-sm leading-none text-gray-800 dark:text-white  bg-white dark:bg-gray-800  hover:bg-gray-100 dark:hover:bg-gray-900  border-b border-t border-gray-100 dark:border-gray-700 ">
                <td class="pl-4">
                    <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$_CountCustomerUse->CustomerName}}</p>     
                </td>
                <td class="pl-4">
                      
                    <div tabindex="0" aria-label="green background badge" class=" focus:outline-none bg-green-700 h-8 w-20 mb-4 md:mb-0 rounded-full flex items-center justify-center">
                        <span class="text-xs text-white text-center font-normal">{{$_CountCustomerUse->countIDCustomer}} hợp đồng</span>
                    </div>
                </td>
                
                </tr>
                
                @endforeach
            <tbody>
        </table>
</div>   
