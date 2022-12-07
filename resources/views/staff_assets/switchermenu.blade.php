  @php
      use Illuminate\Support\Facades\Auth;
      $role=Auth::user()->role;
  @endphp
  

    

    
   {{-- <code> --}}

    

    <nav class="bg-white px-2  pt-2.5 dark:bg-white fixed w-full z-20 top-0 left-0  border-gray-200 dark:border-gray-600">
      <div class="container flex flex-wrap items-center justify-between mx-auto sm:min-w-full md:min-w-full lg:min-w-full">
      <a href="{{ route('dashboard') }}" class="flex items-center">
          <img src="logo.png" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo">
          <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-black">Services Management</span>
      </a>
      <div class="flex md:order-2">
        
          <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul class="flex flex-col p-4 mt-4  border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gradient-to-br from-purple-600 to-blue-500 dark:border-gray-700">
          <li>
            <a href="dichvu" class="block py-2 pl-3 pr-4  text-center text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tra cứu dịch vụ</a>
          </li>
          <li>
            <a href="canhbaohopdong" class="block py-2 pl-3 pr-4 text-center text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Cảnh báo hợp đồng</a>
          </li>
          <li>
            <a href="thongke" class="block py-2 pl-3 pr-4 text-center text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Thống kê báo cáo</a>
          </li>
          <li>
            <a href="hopdong" class="block py-2 pl-3 pr-4 text-center text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Quản lý hợp đồng</a>
          </li>
          <li>
            <a href="khachhang" class="block py-2 pl-3 pr-4 text-center text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Quản lý khách hàng</a>
          </li>
          <li>
            <a href="khachhangtiemnang" class="block py-2 pl-3 pr-4 text-center text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Quản lý khách hàng tiềm năng</a>
          </li>
          <li>
            <a href="phanhoi" class="block py-2 pl-3 pr-4 text-center text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Quản lý phản hồi</a>
          </li>
          @if ($role==1)
          <li>
            <a href="qldanhmuc" class="block py-2 pl-3 pr-4 text-center text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Quản lý danh mục</a>
          </li>
          <li>
            <a href="qldichvu" class="block py-2 pl-3 pr-4 text-center text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Quản lý dịch vụ</a>
          </li>
          <li>
            <a href="qlnhanvien" class="block py-2 pl-3 pr-4 text-center text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Quản lý nhân viên</a>
          </li>
          <li>
            <a href="xetduyet" class="block py-2 pl-3 pr-4 text-center text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Xét duyệt hợp đồng</a>
          </li>
          <li>
            <a href="khuyenmai" class="block py-2 pl-3 pr-4 text-center text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Quản lý khuyến mãi</a>
          </li>
          @endif
        </ul>
      </div>
      {{-- <code> --}}
        <div class="hidden sm:flex sm:items-center sm:ml-0">
          <!-- Teams Dropdown -->
          @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
              <div class="ml-3 relative uk-position-top-right">
                  <x-jet-dropdown align="right" width="60">
                      <x-slot name="trigger">
                          <span class="inline-flex rounded-md">
                              <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                  {{ Auth::user()->currentTeam->name }}
    
                                  <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                      <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                  </svg>
                              </button>
                          </span>
                      </x-slot>
    
                      <x-slot name="content">
                          <div class="w-60">
                              <!-- Team Management -->
                              <div class="block px-4 py-2 text-xs text-gray-400">
                                  {{ __('Quản lý nhóm') }}
                              </div>
    
                              <!-- Team Settings -->
                              <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                  {{ __('Cài đặt nhóm') }}
                              </x-jet-dropdown-link>
    
                              @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                  <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                      {{ __('Tạo nhóm mới') }}
                                  </x-jet-dropdown-link>
                              @endcan
    
                              <div class="border-t border-gray-100"></div>
    
                              <!-- Team Switcher -->
                              <div class="block px-4 py-2 text-xs text-gray-400">
                                  {{ __('Chuyển nhóm') }}
                              </div>
    
                              @foreach (Auth::user()->allTeams() as $team)
                                  <x-jet-switchable-team :team="$team" />
                              @endforeach
                          </div>
                      </x-slot>
                  </x-jet-dropdown>
              </div>
          @endif
    
          <!-- Settings Dropdown -->
          <div class=" relative">
              <x-jet-dropdown align="right" width="48">
                  <x-slot name="trigger">
                      @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                          <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                              <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                          </button>
                      @else
                          <span class="inline-flex rounded-md">
                              <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                  {{ Auth::user()->name }}
    
                                  <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                      <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                  </svg>
                              </button>
                          </span>
                      @endif
                  </x-slot>
    
                  <x-slot name="content">
                      <!-- Account Management -->
                      <div class="block px-4 py-2 text-xs text-gray-400">
                          {{ __('Quản lý tài khoản') }}
                      </div>
    
                      <a style="color: black !important" href="{{ route('profile.show') }}">
                          {{ __('Hồ sơ') }}
                      </a>
    
                      @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                          <a style="color: black !important" href="{{ route('api-tokens.index') }}">
                              {{ __('API Tokens') }}
                          </a>
                      @endif
    
                      <div class="border-t border-gray-100"></div>
    
                      <!-- Authentication -->
                      <form method="POST" action="{{ route('logout') }}" x-data>
                          @csrf
    
                          <a style="color: black !important" href="{{ route('logout') }}"
                                   @click.prevent="$root.submit();">
                              {{ __('Đăng xuất') }}
                          </a>
                      </form>
                  </x-slot>
              </x-jet-dropdown>
          </div>
      </div>
      {{-- </code> --}}
      </div>
    </nav>

   
    
 
  
   {{-- </code> --}}

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
