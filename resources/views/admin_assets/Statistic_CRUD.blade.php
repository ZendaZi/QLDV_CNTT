@include('staff_assets.header')
<x-app-layout>
    

    <div class="py-12">
         <div class="max-w-full mx-auto sm:px-1 lg:px-1">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
           
{{-- <code> --}}
   

    <div class="text-sm font-medium text-center text-gray-500  border-purple-600 dark:text-gray-400 dark:border-gray-700">
    <ul class="uk-subnav uk-subnav-pill flex flex-wrap -mb-px bg-gradient-to-br from-purple-600 to-blue-500" style="margin-left: 40%;margin-top: 100px;width: 550px;" uk-switcher="animation: uk-animation-fade">
        <li class="mr-2"><a class="inline-block p-4 rounded-t-lg   hover:text-purple-600 hover:border-gray-800 dark:hover:text-gray-800" href="#">Thống kê dịch vụ hot sales </a></li>
        <li class="mr-2"><a class="inline-block p-4 rounded-t-lg   hover:text-purple-600 hover:border-gray-800 dark:hover:text-gray-800" href="#">Thống kê hợp đồng khách hàng </a></li>
    </ul>
    
    <ul class="uk-switcher uk-margin">
        <li>@include('admin_assets.Statistic_HotServices')</li>
        <li>@include('admin_assets.Statistic_CustomerUse')</li>
       
    </ul>
</div>

    
   


{{-- </code> --}}



               
            </div>
        </div>
    </div>
</x-app-layout>


<script>
    function activeTab(element) {
    let siblings = element.parentNode.querySelectorAll("button");
    for (let item of siblings) {
        item.children[1].classList.add("hidden");
        item.classList.add("text-gray-600");
        item.classList.remove("text-indigo-700");
        item.children[0].children[1].innerHTML = "Inactive";
    }
    element.children[1].classList.remove("hidden");
    element.classList.remove("text-gray-600");
    element.classList.add("text-indigo-700");
    element.children[0].children[1].innerHTML = "Active";
}
</script>





