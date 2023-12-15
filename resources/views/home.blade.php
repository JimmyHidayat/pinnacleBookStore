@extends('layouts.main')

@section('container')
<!-- Carousel -->
<div id="default-carousel" class="relative h-full w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item>
            <img src="img/carousel.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="circle">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item>
            <img src="img/Groot.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="groot">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item="active">
            <img src="img/panther.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="panther">
        </div>
    </div>
{{-- Carousel Akhir --}}
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
{{-- Akhir Slider Controls --}}


<section class="mx-5 my-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 home">
    {{-- @foreach ($menus as $menu) --}}
    <div class="w-full max-w-[125%] bg-gray-50 border border-black rounded-lg shadow">

        <img class="p-8 rounded-t-lg w-[100%]" src="img/laskarPelangi.jpg" alt="image" />
        {{-- <div class="p-8 rounded-t-lg w-[100%]" style="background-image: url('register/panther.jpg'); background-size: cover; background-position: center center;"> --}}
        <div class="px-5 pb-5">
            <a href="#">
                <h5 class="text-xl font-sans hover:font-serif tracking-tight text-gray-900">Laskar Pelangi</h5>
            </a>
            <a href="">
                <h3 class="text-xl font-sans hover:font-serif tracking-tight text-gray-900">Novel</h3>
            </a>
            <div class="flex items-center mt-2.5 mb-5">
                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                    {{-- {{ Str::ucfirst($menu->category) }} --}}
                </div>
            </div>
            <div class="flex items-center justify-between">
                <small class="text-2xl font-bold text-gray-900">Rp. 50.000</small>
                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5
                 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
            </div>
        </div>
    </div>

    <!-- card 2 -->
    <div class="w-full max-w-[125%] bg-gray-50 border border-black rounded-lg shadow">
        <img class="p-8 rounded-t-lg w-[100%]" src="img/dikta.jpg" alt="image" />
        {{-- <div class="p-8 rounded-t-lg w-[100%]" style="background-image: url('register/panther.jpg'); background-size: cover; background-position: center center;"> --}}
        <div class="px-5 pb-5">
            <a href="#">
                <h5 class="text-xl font-sans hover:font-serif tracking-tight text-gray-900">dikta & hukum</h5>
            </a>
            <a href="">
                <h3 class="text-xl font-sans hover:font-serif tracking-tight text-gray-900">Novel</h3>
            </a>
            <div class="flex items-center mt-2.5 mb-5">
                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                    {{-- {{ Str::ucfirst($menu->category) }} --}}
                </div>
            </div>
            <div class="flex items-center justify-between">
                <small class="text-2xl font-bold text-gray-900">Rp. 50.000</small>
                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5
                 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
            </div>
        </div>
    </div>

    <!-- card 3 -->
    <div class="w-full max-w-[125%] bg-gray-50 border border-black rounded-lg shadow">
        <img class="p-8 rounded-t-lg w-[100%]" src="img/pulang.jpg" alt="image" />
        {{-- <div class="p-8 rounded-t-lg w-[100%]" style="background-image: url('register/panther.jpg'); background-size: cover; background-position: center center;"> --}}
        <div class="px-5 pb-5">
            <a href="#">
                <h5 class="text-xl font-sans hover:font-serif tracking-tight text-gray-900">Pulang</h5>
            </a>
            <a href="">
                <h3 class="text-xl font-sans hover:font-serif tracking-tight text-gray-900">Novel</h3>
            </a>
            <div class="flex items-center mt-2.5 mb-5">
                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                    {{-- {{ Str::ucfirst($menu->category) }} --}}
                </div>
            </div>
            <div class="flex items-center justify-between">
                <small class="text-2xl font-bold text-gray-900">Rp. 50.000</small>
                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5
                 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
            </div>
        </div>
    </div>

    <!-- card 4 -->
    <div class="w-full max-w-[125%] bg-gray-50 border border-black rounded-lg shadow">
        <img class="p-8 rounded-t-lg w-[100%]" src="img/hujan.jpg" alt="image" />
        {{-- <div class="p-8 rounded-t-lg w-[100%]" style="background-image: url('register/panther.jpg'); background-size: cover; background-position: center center;"> --}}
        <div class="px-5 pb-5">
            <a href="#">
                <h5 class="text-xl font-sans hover:font-serif tracking-tight text-gray-900">Hujan</h5>
            </a>
            <a href="">
                <h3 class="text-xl font-sans hover:font-serif tracking-tight text-gray-900">Novel</h3>
            </a>
            <div class="flex items-center mt-2.5 mb-5">
                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                    {{-- {{ Str::ucfirst($menu->category) }} --}}
                </div>
            </div>
            <div class="flex items-center justify-between">
                <small class="text-2xl font-bold text-gray-900">Rp. 50.000</small>
                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5
                 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
            </div>
        </div>
    </div>
    {{-- @endforeach --}}
</section>
@endsection
