{{-- @if (Session::has('success'))
<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>{{ session('success')}}</p>
</div>
@endif

@if (Session::has('error'))
<div class="uk-alert-warning" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>{{ session('failed')}}</p>
</div>
@endif --}}
@if (Session::has('success'))
<div role="alert" class="sm:mr-6 xl:w-5/12 mx-auto absolute left-0 sm:left-auto right-0 sm:w-6/12 md:w-3/5 justify-between w-11/12 bg-white dark:bg-gray-800 shadow-lg rounded flex sm:flex-row flex-col transition duration-150 ease-in-out" id="notification">
    <div class="sm:px-6 p-2 flex mt-4 sm:mt-0 ml-4 sm:ml-0 items-center justify-center bg-green-700 sm:rounded-tl sm:rounded-bl w-12 h-12 sm:h-auto sm:w-auto text-white">
       <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/coloured_multiple_with_separator-svg1.svg" alt="check icon"/>
    </div>
    <div class="flex flex-col justify-center xl:-ml-4 pl-4 xl:pl-1 sm:w-3/5 pt-4 sm:pb-4 pb-2">
        <h1 class="text-lg text-gray-800 dark:text-gray-100 font-semibold pb-1">{{ session('success')}}</h1>
    </div>
    <div class="flex sm:flex-col sm:justify-center sm:border-l dark:border-gray-700 items-center border-gray-300 sm:w-1/6 pl-4 sm:pl-0">
        <a href="javascript:void(0)" class="sm:pt-4 pb-4 flex sm:justify-center w-full cursor-pointer" onclick="closeModal()">
            <span class="sm:text-sm text-xs text-gray-600 dark:text-gray-400 cursor-pointer">Bỏ qua</span>
        </a>
    </div>
</div>
@endif

@if (Session::has('error'))
<div role="alert" class="sm:mr-6 xl:w-5/12 mx-auto absolute left-0 sm:left-auto right-0 sm:w-6/12 md:w-3/5 justify-between w-11/12 bg-white dark:bg-gray-800 shadow-lg rounded flex sm:flex-row flex-col transition duration-150 ease-in-out" id="notification">
    <div class="sm:px-6 p-2 flex mt-4 sm:mt-0 ml-4 sm:ml-0 items-center justify-center bg-green-700 sm:rounded-tl sm:rounded-bl w-12 h-12 sm:h-auto sm:w-auto text-white">
       <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/coloured_multiple_with_separator-svg1.svg" alt="check icon"/>
    </div>
    <div class="flex flex-col justify-center xl:-ml-4 pl-4 xl:pl-1 sm:w-3/5 pt-4 sm:pb-4 pb-2">
        <h1 class="text-lg text-gray-800 dark:text-gray-100 font-semibold pb-1">{{ session('failed')}}</h1>
    </div>
    <div class="flex sm:flex-col sm:justify-center sm:border-l dark:border-gray-700 items-center border-gray-300 sm:w-1/6 pl-4 sm:pl-0">
        <a href="javascript:void(0)" class="sm:pt-4 pb-4 flex sm:justify-center w-full cursor-pointer" onclick="closeModal()">
            <span class="sm:text-sm text-xs text-gray-600 dark:text-gray-400 cursor-pointer">Bỏ qua</span>
        </a>
    </div>
</div>
@endif



<script>
    var Notification = document.getElementById("notification");
Notification.style.transform = "translateX(150%)";
Notification.classList.remove("hidden");
Notification.style.transform = "translateX(0%)";
function closeModal() {
    Notification.style.transform = "translateX(150%)";
    Notification.classList.remove("hidden");
    // setTimeout(function () {
    //     Notification.style.transform = "translateX(0%)";
    // }, 1000);
}
</script>


