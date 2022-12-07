

<div class="lg:flex items-center justify-between">
    <div class="lg:w-1/2 w-full">
        <h1 role="heading" class="md:text-5xl text-3xl font-bold leading-10 mt-3 text-gray-800 dark:text-black">{{$product->ProductName}}</h1>
        <p role="contentinfo" class="text-2xl leading-5 mt-5 text-gray-900 dark:text-black-400">{{$product->ProductDetails}}</p>
        
        

        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="autoplay: true" style="margin-top: 50px">

            <ul class="uk-slideshow-items">
                @foreach ($slideshow as $_slideshow)
                @if ($_slideshow->IDProduct==$product->IDProduct)
                <li>
                    <img src="{{$_slideshow->Link}}" class="w-full"  style="width: 70%;height: 50%;" uk-cover>
                </li>
                @endif
                @endforeach
                
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

        </div>

    </div>
    <div class="xl:w-1/2 lg:w-7/12 relative w-full lg:mt-0 mt-12 md:px-8" role="list">
        <img src="https://i.ibb.co/0n6DSS3/bgimg.png" class="absolute w-full -ml-12 mt-24" alt="background circle images" />
        @foreach ($VersionPrice as $_VersionPrice )
        @if ($product->IDProduct==$_VersionPrice->IDProduct)
        <div role="listitem" class="bg-white dark:bg-gray-800 cursor-pointer shadow rounded-lg p-8 relative z-30 mt-7">
            <div class="md:flex items-center justify-between">
                <h2 class="text-2xl font-semibold leading-6 text-gray-800 dark:text-white">{{$_VersionPrice->IDVersion}}</h2>
                <p class="text-2xl font-semibold md:mt-0 mt-4 leading-6 text-gray-800 dark:text-white">{{$_VersionPrice->Price}} {{$_VersionPrice->CurrencyUnit}}/{{$_VersionPrice->TimeCycle}}</p>
            </div>
            <p class="md:w-80 text-base leading-6 mt-4 text-gray-600 dark:text-gray-200">{{$_VersionPrice->VersionDetails}}</p>
        </div>
        @endif
        @endforeach
        
    </div>
</div>
<div class="py-12 px-4 md:px-6 2xl:px-0 2xl:container 2xl:mx-auto flex justify-center items-center">
    <div class="flex flex-col justify-start items-start w-full space-y-8">
        <div class="flex justify-start items-start">
            <p class="text-3xl lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800 dark:text-black ">Đánh giá</p>
        </div>
        @foreach ($VersionPrice as $_VersionPrice )
        @if ($product->IDProduct==$_VersionPrice->IDProduct)
            @foreach ($Feedback as $_Feedback )
            @if ($_VersionPrice->IDVersion==$_Feedback->IDVersion)
        <div class="w-full flex justify-start items-start flex-col bg-gray-50 dark:bg-gray-800 p-8">
            <div class="flex flex-col md:flex-row justify-between w-full">
                <div class="flex flex-row justify-between items-start">
                    <p class="text-xl md:text-2xl font-medium leading-normal text-gray-800 dark:text-white">{{$_VersionPrice->IDVersion}}</p>
                    
                </div>
                <div class="cursor-pointer mt-2 md:mt-0">
                    @if ($_Feedback->Rate==1)
                    <img class="dark:hidden" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/1_stars.svg/535px-1_stars.svg.png?20060930161123" style="width: 150px" alt="stars"/>
                    <img class="hidden dark:block" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/1_stars.svg/535px-1_stars.svg.png?20060930161123" style="width: 150px" alt="stars"/>
                    @elseif ($_Feedback->Rate==2)
                    <img class="dark:hidden" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/2_stars.svg/535px-2_stars.svg.png?20060930161329" style="width: 150px" alt="stars"/>
                    <img class="hidden dark:block" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/2_stars.svg/535px-2_stars.svg.png?20060930161329" style="width: 150px" alt="stars"/>
                    @elseif ($_Feedback->Rate==3)
                    <img class="dark:hidden" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/3_stars.svg/535px-3_stars.svg.png?20071114200725" style="width: 150px" alt="stars"/>
                    <img class="hidden dark:block" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/3_stars.svg/535px-3_stars.svg.png?20071114200725" style="width: 150px" alt="stars"/>
                    @elseif ($_Feedback->Rate==4)
                    <img class="dark:hidden" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/4_stars.svg/535px-4_stars.svg.png?20200318064200" style="width: 150px" alt="stars"/>
                    <img class="hidden dark:block" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/4_stars.svg/535px-4_stars.svg.png?20200318064200" style="width: 150px" alt="stars"/>
                    @elseif ($_Feedback->Rate==5)
                    <img class="dark:hidden" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/5_stars.svg/535px-5_stars.svg.png?20200318055220" style="width: 150px" alt="stars"/>
                    <img class="hidden dark:block" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/5_stars.svg/535px-5_stars.svg.png?20200318055220" style="width: 150px" alt="stars"/>
                    @endif
                   
                </div>
            </div>
            <div id="menu" class="md:block">
                <p class="mt-3 text-base leading-normal text-gray-600 dark:text-white w-full md:w-9/12 xl:w-5/6">{{$_Feedback->Content}}</p>
                <div class="mt-6 flex justify-start items-center flex-row space-x-2.5">
                    <div class="flex flex-col justify-start items-start space-y-2">
                        <p class="text-base font-medium leading-none text-gray-800 dark:text-white">{{$_Feedback->CustomerName}}</p>
                        <p class="text-sm leading-none text-gray-600 dark:text-white">{{$_Feedback->Created_at}}</p>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
     @endif 
     @endforeach
    </div>
</div>
        
{{-- code --}}


       
      
    

