@extends('layouts.main')

@section('container')

            <style>
                /* .search-label,
                .search-icon {
                    color: #ffffff; 
                } */

                .search input {
                    color: #000000; /* Warna teks gelap */
                }

                .search {
                    width: 80%; /* Lebar formulir 80% dari lebar layar */
                    margin: auto; /* Pusatkan formulir di tengah layar */
                    padding: 18px; /* Beri jarak antara tulisan dengan form */
                    /* background-color: #736356; */
                }
            </style>



    {{-- Carusel --}}
            <section class="max-w-screen justify-center">
                <div id="default-carousel" class="relative h-100 mx-20 my-200" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative  h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://source.unsplash.com/1200x400?Books" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Books">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://source.unsplash.com/1200x400?Books" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Books">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://source.unsplash.com/1200x400?Books" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Books">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://source.unsplash.com/1200x400?Books" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Books">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center  h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
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
            </section>
    
    {{-- Akhir Carousel --}}

    {{-- Search --}}
            <section class="search">
                <form>   
                    <label for="default-search" class="mb-2 text-sm font-medium sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm rounded-lg" placeholder="Search....." required>
                        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>   
            </section>
    {{-- Akhir Search --}}

            <div class="mt-8 container mx-auto">
                <div class="flex items-center justify-between">
                    <h1 class="font-bold text-2xl ml-8">Rekomendasi Untukmu</h1>
                    <a href="/categories" class="with-banner inline-block py-2 px-4 bg-[#736356] text-white rounded-md transition duration-300 ease-in-out hover:bg-[#a28160]">Lihat Semua</a>
                </div>
            </div>



            <!-- card 1 -->
            <section class="mx-5 my-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 home ml-6">
                @foreach ($posts as $post)
                <div class="w-full max-w-[125%] border border-black rounded-lg shadow">
                    @if ($post->image)
                    <div class="max-h-475px max-w-303px overflow-hidden">
                        <img class="p-8 rounded-t-lg w-[100%]" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" />
                    </div>
                    @else
                    <img class="p-8 rounded-t-lg w-[100%]" src="https://cdn.gramedia.com/uploads/items/9786020523316_Melangkah_UV_Spot_R4-1.jpg?{{ $post->title }}" alt="{{ $post->title }}" />
                    @endif
                    <div class="px-5 pb-5">
                        <ul>
                            <li>
                                <a href="">
                                    <h5 class="text-xl font-sans hover:font-serif tracking-tight text-gray-900">{{ $post->author }}</h5>
                                </a>
                            </li>
                            <li>
                                <h3 class="text-xl font-sans tracking-tight text-gray-900">{{ $post->title }}</h3>  
                            </li>
                            <li>
                                <a href="">
                                    <h3 class="text-xl font-sans hover:font-serif tracking-tight text-gray-900">{{ $post->category->name }}</h3>
                                </a>
                            </li>
                        </ul>
                        <div class="flex items-center justify-between">
                            <small class="text-2xl font-bold text-gray-900">Rp. {{ $post->price }}</small>
                            <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5
                            text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </section>
@endsection
