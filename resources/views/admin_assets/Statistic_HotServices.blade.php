<div class="bg-white dark:bg-gray-800  shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
    <table class="table-auto w-full whitespace-nowrap">
        <thead>
            <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 dark:text-white ">
                 <th class="font-large text-center pl-4" style="font-size: large;font-style: oblique;">Phiên bản</th>
                 <th class="font-large text-center pl-4" style="font-size: large;font-style: oblique;">Số khách hàng sử dụng</th>
                 
                 
                 
     
            </tr>
        </thead>
        <tbody class="w-full">
            @foreach ($CountHotVersion as $_CountHotVersion)
            @foreach ($ListProduct as $_ListProduct )
                @if ($_ListProduct->IDProduct==$_CountHotVersion->IDProduct)
                
            <tr tabindex="0" class="focus:outline-none h-20 text-sm leading-none text-gray-800 dark:text-white  bg-white dark:bg-gray-800  hover:bg-gray-100 dark:hover:bg-gray-900  border-b border-t border-gray-100 dark:border-gray-700 ">
                <td class="pl-12">
                    <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$_ListProduct->ProductName}} phiên bản {{$_CountHotVersion->IDVersion}}</p>     
                </td>
                <td class="pl-12">
                    <div tabindex="0" aria-label="green background badge" class="focus:outline-none bg-green-700 h-6 w-20 mb-4 md:mb-0 rounded-full flex items-center justify-center">
                        <span class="text-xs text-white font-normal">{{$_CountHotVersion->countIDVersion}} khách hàng</span>
                    </div>
                </td>
                </tr>
                @endif
                @endforeach
                @endforeach
            <tbody>
        </table>
</div>   

{{-- 
<div class="flex items-center justify-center py-8 px-4">
    <div class="w-11/12 lg:w-2/3">
        <div class="flex flex-col justify-between h-full">
           
            <div class="mt-6">
                <canvas id="myChart" width="1025" height="400" role="img" ></canvas>
            </div>
        </div>
    </div>
</div>


<script>
    const chart = new Chart(document.getElementById("myChart"), {
    type: "line",
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July", "Aug", "Sep", "Nov", "Dec"],
        datasets: [
            {
                label: "BIỂU ĐỒ DỊCH VỤ BÁN CHẠY",
                borderColor: "#4A5568",
                data: [800, 400, 620, 300, 200, 600, 230, 300, 200, 200, 100, 1200],
                fill: false,
                pointBackgroundColor: "#4A5568",
                borderWidth: "3",
                pointBorderWidth: "4",
                pointHoverRadius: "6",
                pointHoverBorderWidth: "8",
                pointHoverBorderColor: "rgb(74,85,104,0.2)",
            },
        ],
    },
    options: {
        legend: {
            position: false,
        },
        scales: {
            yAxes: [
                {
                    gridLines: {
                        display: false,
                    },
                    display: false,
                },
            ],
        },
    },
});

</script>

 --}}
