@extends('layout.app')
@section('content')

    <body class="bg-slate-100 box-border antialiased">

        <!-- Hero Section -->
        <header class="text-gray-800 py-10 px-4 sm:px-8 md:px-16 lg:px-24"">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12">
                <div class="container mx-auto text-center">
                    <div class="text-[#55c097] text-lg font-bold text-left">#KeepLearning</div>
                    <h1
                        class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl mt-4 sm:mt-6 md:mt-8 font-bold leading-tight text-left">
                        Your Dream Career Starts With Us
                    </h1>
                    <div class="text-gray-400 text-base sm:text-lg md:text-xl text-left mt-4 sm:mt-6 md:mt-8 xl:w-[25rem]">
                        LearnWithAzhar menyediakan kelas UI/UX design, Prototyping untuk pemula.
                    </div>

                    <div class="w-full md:w-[16rem] mt-6 sm:mt-8 md:mt-10">
                        <a href="{{ route('login') }}"
                            class="text-left font-bold inline-block bg-blue-500 hover:bg-blue-600 text-white py-2 px-6 sm:px-8 rounded-full text-base sm:text-lg md:text-base lg:text-lg xl:text-base transition duration-300">
                            Login
                        </a>
                        <a href="{{ route('register') }}"
                            class="ml-4 sm:ml-5 text-left font-bold inline-block bg-gray-200 hover:bg-gray-300 text-gray-900 py-2 px-4 sm:px-6 rounded-full text-base sm:text-lg md:text-base lg:text-lg xl:text-base transition duration-300">
                            Register
                        </a>
                    </div>
                </div>

                <div class="hidden md:block md:relative">
                    <div
                        class="absolute top-0 -left-4 w-80 h-80 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob">
                    </div>
                    <div
                        class="absolute top-0 -right-4 w-80 h-80 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000">
                    </div>
                    <div
                        class="absolute -bottom-8 left-20 w-80 h-80 bg-pink-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000">
                    </div>
                    <img class="rounded-xl relative p-7" src="{{ asset('img/section.png') }}" alt="">
                </div>
            </div>

            <div class="col-lg-12 col-12 text-center mt-40">
                <img src="{{ asset('img/brands.png') }}" alt="">
            </div>

            @include('components.step')
        </header>

        <!-- Features Section -->

        @include('components.scroll')
        @include('components.infinite-scroll')
        @include('components.footer')



        {{-- script untuk show more --}}
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const mapelItems = document.querySelectorAll(".mapel-item");
                const showMoreBtn = document.getElementById("showMoreBtn");
                const lessMoreBtn = document.getElementById("lessMoreBtn");
                const seacrhBtn = document.getElementById("seacrhBtn");

                // Semua elemen dengan indeks lebih besar dari 7 akan disembunyikan
                mapelItems.forEach((item, index) => {
                    if (index > 7) {
                        item.style.display = "none";
                    }
                });

                // Tambahkan event listener pada tombol "Show More"
                showMoreBtn.addEventListener("click", function() {
                    mapelItems.forEach((item, index) => {
                        item.style.display = "block";
                    });
                    // Sembunyikan tombol "Show More" dan tampilkan tombol "Less More"
                    showMoreBtn.style.display = "none";
                    lessMoreBtn.style.display = "block";
                });

                // Tambahkan event listener pada tombol "Less More"
                lessMoreBtn.addEventListener("click", function() {
                    // Semua elemen dengan indeks lebih besar dari 7 akan disembunyikan
                    mapelItems.forEach((item, index) => {
                        if (index > 7) {
                            item.style.display = "none";
                        }
                    });
                    // Tampilkan tombol "Show More" dan sembunyikan tombol "Less More"
                    showMoreBtn.style.display = "block";
                    lessMoreBtn.style.display = "none";
                    seacrhBtn.style.display = "none";
                });

                // Tambahkan event listener pada tombol "Seach"
                seacrhBtn.addEventListener("click", function() {
                    // Tampilkan tombol "Show More" dan sembunyikan tombol "Less More"
                    showMoreBtn.style.display = "block";
                    lessMoreBtn.style.display = "none";
                });
            });
        </script>

    </body>
    
@endsection
