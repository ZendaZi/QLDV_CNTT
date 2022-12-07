@php
use Illuminate\Support\Facades\Auth;
$role=Auth::user()->role;
@endphp



<div class="2xl:container 2xl:mx-auto">
  {{-- <div class="bg-white dark:bg-white-800 rounded shadow-lg py-5 px-7"> --}}
    <nav class="flex justify-between">
     
      <!-- For medium and plus sized devices -->
      <ul class="hidden md:flex flex-auto space-x-0">

        <button style="text-decoration: none" href="dichvu"><li onclick="selected()" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full min-h-min">TRA CỨU DỊCH VỤ</li></button>
        <button style="text-decoration: none" href="canhbaohopdong"><li onclick="selected()" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 max-w-full max-h-min">CẢNH BÁO HỢP ĐỒNG</li></button>
        <button style="text-decoration: none" href="thongke"><li onclick="selected()" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 max-w-full max-h-min">BÁO CÁO THỐNG KÊ</li></button>

        <a style="text-decoration: none" href="phanhoi"><li onclick="selected()" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full min-h-min">QUẢN LÝ PHẢN HỒI KHÁCH HÀNG</li></a>
        <a style="text-decoration: none" href="hopdong"> <li onclick="selected()" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full min-h-min">QUẢN LÝ HỢP ĐỒNG</li></a>
        <a style="text-decoration: none" href="khachhang"><li onclick="selected()" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full min-h-min">QUẢN LÝ KHÁCH HÀNG</li></a>
        <a style="text-decoration: none" href="khachhangtiemnang"><li onclick="selected()" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full min-h-min">QUẢN LÝ KHÁCH HÀNG TIỀM NĂNG</li></a>
        @if ($role==1)
        <a style="text-decoration: none" href="qldanhmuc"><li onclick="selected()" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full min-h-min">QUẢN LÝ DANH MỤC</li></a>
        <a style="text-decoration: none" href="qldichvu"><li onclick="selected()" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full min-h-min">QUẢN LÝ DỊCH VỤ</li></a>
        <a style="text-decoration: none" href="qlnhanvien"><li onclick="selected()" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full min-h-min">QUẢN LÝ NHÂN SỰ</li></a>
        <a style="text-decoration: none" href="xetduyet"><li onclick="selected()" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full min-h-min">XÉT DUYỆT HỢP ĐỒNG</li></a>
        <a style="text-decoration: none" href="khuyenmai"><li onclick="selected()" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 min-w-full min-h-min">QUẢN LÝ KHUYẾN MÃI</li></a>
        
        @endif
        
      </ul>
    
    </nav>
    <!-- for smaller devcies -->

    <div class="block md:hidden w-full mt-5">
     
      <div class="relative">
        <ul id="list" class="hidden font-normal text-base leading-4 absolute top-2 w-full rounded shadow-md z-20">
         
      
          <a style="text-decoration: none" href="dichvu"><li onclick="selectedSmall()" class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-xs leading-3 font-normal focus:text-black">TRA CỨU DỊCH VỤ</li></a>
          <a style="text-decoration: none" href="canhbaohopdong"><li onclick="selectedSmall()" class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-xs leading-3 font-normal focus:text-black">CẢNH BÁO HỢP ĐỒNG</li></a>
          <a style="text-decoration: none" href="hopdong"> <li onclick="selectedSmall()" class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-xs leading-3 font-normal focus:text-black">QUẢN LÝ HỢP ĐỒNG</li></a>
          <a style="text-decoration: none" href="khachhang"><li onclick="selectedSmall()" class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-xs leading-3 font-normal focus:text-black">QUẢN LÝ KHÁCH HÀNG</li></a>
          <a style="text-decoration: none" href="khachhangtiemnang"><li onclick="selectedSmall()" class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-xs leading-3 font-normal focus:text-black">QUẢN LÝ KHÁCH HÀNG TIỀM NĂNG</li></a>
          <a style="text-decoration: none" href="phanhoi"><li onclick="selectedSmall()" class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-xs leading-3 font-normal focus:text-black">QUẢN LÝ PHẢN HỒI KHÁCH HÀNG</li></a>

          @if ($role==1)
          <a style="text-decoration: none" href="qldanhmuc"><li onclick="selectedSmall()" class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-xs leading-3 font-normal focus:text-black">QUẢN LÝ DANH MỤC</li></a>
          <a style="text-decoration: none" href="qldichvu"><li onclick="selectedSmall()" class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-xs leading-3 font-normal focus:text-black">QUẢN LÝ DỊCH VỤ</li></a>
          <a style="text-decoration: none" href="qlnhanvien"><li onclick="selectedSmall()" class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-xs leading-3 font-normal focus:text-black">QUẢN LÝ NHÂN SỰ</li></a>
          <a style="text-decoration: none" href="xetduyet"><li onclick="selectedSmall()" class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-xs leading-3 font-normal focus:text-black">XÉT DUYỆT HỢP ĐỒNG</li></a>
          <a style="text-decoration: none" href="khuyenmai"><li onclick="selectedSmall()" class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-xs leading-3 font-normal focus:text-black">QUẢN LÝ KHUYẾN MÃI</li></a>
          
          @endif
      
      
        </ul>
      </div>
    </div>
  {{-- </div> --}}
</div>


<script>
    function selected() {
  var targeted = event.target;
  var clicked = targeted.parentElement;
  var child = clicked.children;
  console.log(child);

  for (let i = 0; i < child.length; i++) {
    if (child[i].classList.contains("text-white")) {
      console.log(child[i]);
      child[i].classList.remove("text-white", "bg-indigo-600");
      child[i].classList.add("text-gray-600", "bg-gray-50", "border", "border-white");
    }
  }

  targeted.classList.remove("text-gray-600", "bg-gray-50", "border", "border-white");
  targeted.classList.add("text-white", "bg-indigo-600");
}



function selectedSmall() {
  var targeted = event.target;
  var clicked = targeted.parentElement;

  var child = clicked.children;

  for (let i = 0; i < child.length; i++) {
    if (child[i].classList.contains("text-white")) {
      child[i].classList.remove("bg-indigo-600");
      child[i].classList.add("text-gray-600", "bg-gray-50", "border", "border-white");
    }
  }

  targeted.classList.remove("text-gray-600", "bg-gray-50", "border", "border-white");

  document.getElementById("s1").classList.add("hidden");
  document.getElementById("textClick).innerHTML = targeted.innerHTML;
  // close dropdown
  var newL = document.getElementById("list");
  newL.classList.toggle("hidden");
  document.getElementById("ArrowSVG").classList.toggle("rotate-180");
}

</script>




<style>
  a{
    text-decoration: none !important;
    color: #fff !important;
  }
  thead{
   /* background-color:  rgb(16 132 72); */
   width: 100%;
   --tw-bg-opacity: 1;
   background-color: rgb(67 56 202 / var(--tw-bg-opacity));
} 
th{
  font-size: large;
  font-style:normal !important;
  text-transform: uppercase;
  
}
label{
  color: black !important;
  font-size:medium !important;
}
legend{
  color: rgb(0, 0, 0) !important;
  text-transform: uppercase !important;
}
label{
  display: block;
  margin-bottom: 0.5rem/* 8px */;
  font-weight: 500;
  --tw-text-opacity: 1;
  color: rgb(17 24 39 / var(--tw-text-opacity));
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
  font-size: 1.25rem/* 20px */;
  line-height: 1.75rem/* 28px */
}
input{
  --tw-bg-opacity: 1  ;
    background-color: rgb(249 250 251 / var(--tw-bg-opacity)) !important;
    border-width: 1px !important;
    --tw-border-opacity: 1;
    border-color: rgb(209 213 219 / var(--tw-border-opacity)) !important;
    --tw-text-opacity: 1;
    color: rgb(17 24 39 / var(--tw-text-opacity)) !important;
    font-size: 1.25rem/* 20px */ !important;
    line-height: 1.75rem/* 28px */ !important;
    border-radius: 0.5rem/* 8px */ !important;
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(59 130 246 / var(--tw-ring-opacity));
    --tw-border-opacity: 1;
    border-color: rgb(59 130 246 / var(--tw-border-opacity)) !important;
    display: block !important;
    width: 100% !important;
    
}
textarea{
  --tw-bg-opacity: 1  ;
    background-color: rgb(249 250 251 / var(--tw-bg-opacity)) !important;
    border-width: 1px !important;
    --tw-border-opacity: 1;
    border-color: rgb(209 213 219 / var(--tw-border-opacity)) !important;
    --tw-text-opacity: 1;
    color: rgb(17 24 39 / var(--tw-text-opacity)) !important;
    font-size: 1.25rem/* 20px */ !important;
    line-height: 1.75rem/* 28px */ !important;
    border-radius: 0.5rem/* 8px */ !important;
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(59 130 246 / var(--tw-ring-opacity));
    --tw-border-opacity: 1;
    border-color: rgb(59 130 246 / var(--tw-border-opacity)) !important;
    display: block !important;
    width: 100% !important;
}
select{
  --tw-bg-opacity: 1  ;
    background-color: rgb(249 250 251 / var(--tw-bg-opacity)) !important;
    border-width: 1px !important;
    --tw-border-opacity: 1;
    border-color: rgb(209 213 219 / var(--tw-border-opacity)) !important;
    --tw-text-opacity: 1;
    color: rgb(17 24 39 / var(--tw-text-opacity)) !important;
    font-size: 1.25rem/* 20px */ !important;
    line-height: 1.75rem/* 28px */ !important;
    border-radius: 0.5rem/* 8px */ !important;
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(59 130 246 / var(--tw-ring-opacity));
    --tw-border-opacity: 1;
    border-color: rgb(59 130 246 / var(--tw-border-opacity)) !important;
    display: block !important;
    width: 100% !important;
}
p{
  font-size: 1.25rem/* 20px */ !important;
    line-height: 1.75rem/* 28px */ !important;
    /* text-align: center !important; */
    font-weight: 500 !important;
    line-height: 1 !important;
    --tw-text-opacity: 1;
    /* color: rgb(31 41 55 / var(--tw-text-opacity)) !important;
    color: rgb(255 255 255 / var(--tw-text-opacity)) !important; */
}
</style>
