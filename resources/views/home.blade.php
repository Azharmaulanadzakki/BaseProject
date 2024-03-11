@extends('layout.app')
@section('content')
<style>
   @keyframes fadeInAndSlide {
    0% {
        opacity: 0;
        transform: translateY(-100px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
    @include('components.navbar-user')


    <body id="home-page" class="bg-slate-100 box-border antialiased">

        <!-- Hero Section -->
        <header class="text-gray-800 py-10 px-4 sm:px-8 md:px-16 lg:px-24">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- Bagian Teks -->
                <div id="animated-text" class="md:col-span-1 opacity-0 animate__animated animate__fadeIn duration-1000 transition-transform transform translate-x-[50px]">
                    <p class="text-[#55c097] text-lg font-semibold text-left">#KeepLearning</p>
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl mt-5 font-bold leading-tight text-left sm:w-[30rem]">
                        Hello {{ Auth::user()->name }}
                    </h1>
                    <p class="text-gray-400 text-lg text-left mt-5">
                        Kelas online kami menawarkan pengalaman pembelajaran yang mendalam dan interaktif untuk para calon desainer
                        UI/UX, <br> terutama mereka yang baru memulai perjalanan mereka dalam dunia desain antarmuka pengguna.
                        <br>
                    </p>
                
                    <div class="my-12">
                        <button onclick="scrollToCard()"
                            class="text-left font-bold inline-block bg-blue-500 hover:bg-blue-600 text-white py-2 px-6 sm:px-8 rounded-full text-base sm:text-lg md:text-base lg:text-lg xl:text-base transition duration-300">
                            Get Started
                        </button>
                    </div>
                </div>
                


                <!-- Bagian Gambar -->
                <div class="relative hidden md:block col-span-1">
                    <div
                        class="absolute top-0 -left-4 w-[22rem] h-[22rem] bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-100 animate-blob">
                    </div>
                    <div
                        class="absolute top-0 -right-4 w-[22rem] h-[22rem] bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl opacity-100 animate-blob animation-delay-2000">
                    </div>
                    <div
                        class="absolute -bottom-8 left-20 w-[22rem] h-[22rem] bg-pink-300 rounded-full mix-blend-multiply filter blur-xl opacity-100 animate-blob animation-delay-4000">
                    </div>
                    <img src="{{ asset('img/section.png') }}" class="img-fluid z-10 relative p-5" alt="">
                </div>
            </div>

            <div class="col-lg-12 col-12 text-center mt-40">
                <img src="{{ asset('img/brands.png') }}" alt="">
            </div>

            @include('components.step')

        </header>



        @include('components.scroll')
        @include('components.infinite-scroll')
        @include('components.footer')

        {{-- script show dan less more --}}
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

        {{-- Script untuk scroll to ... --}}
        <script>
            function scrollToCard() {
                const aboutSection = document.getElementById('card-section');

                if (aboutSection) {
                    // Gunakan fungsi scrollIntoView untuk melakukan scroll ke elemen tersebut
                    aboutSection.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }

            function scrollToContact() {
                const aboutSection = document.getElementById('contact-section');

                if (aboutSection) {
                    // Gunakan fungsi scrollIntoView untuk melakukan scroll ke elemen tersebut
                    aboutSection.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }

            function scrollToAbout() {
                const aboutSection = document.getElementById('about-section');

                if (aboutSection) {
                    // Gunakan fungsi scrollIntoView untuk melakukan scroll ke elemen tersebut
                    aboutSection.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }

            function scrollToFaq() {
                const aboutSection = document.getElementById('faq-section');

                if (aboutSection) {
                    // Gunakan fungsi scrollIntoView untuk melakukan scroll ke elemen tersebut
                    aboutSection.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }
        </script>

        <script>
            window.onload = function() {
                // Cek apakah terdapat parameter search pada URL
                const searchParam = new URLSearchParams(window.location.search).get('search');

                if (searchParam) {
                    // Jika parameter search ada, gulirkan halaman ke hasil pencarian
                    const resultsSection = document.getElementById('results-section');

                    if (resultsSection) {
                        resultsSection.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                }
            };
        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const animatedText = document.getElementById('animated-text');
                animatedText.classList.remove('opacity-0');
                animatedText.classList.remove('translate-x-10');
                animatedText.classList.add('translate-x-0');
            });
        </script>

    </body>
@endsection
