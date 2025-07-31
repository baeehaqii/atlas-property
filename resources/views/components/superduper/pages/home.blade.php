<x-superduper.main>
    {{-- Link untuk Swiper.js CSS --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <div class="page-wrapper relative z-[1]">
        <main class="relative overflow-hidden main-wrapper">
            {{-- Hero Section --}}
            <section class="relative min-h-screen overflow-hidden">
                <div class="absolute inset-0 z-0">
                    <img src="{{ asset('storage/sites/hero-bg.jpg') }}" alt="Luxury Real Estate Properties"
                        class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/30"></div>
                </div>
                <div class="relative z-10 h-screen flex flex-col justify-end pb-16 lg:pb-20">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 w-full">
                        <div class="flex justify-between items-end">
                            <div class="flex-1 max-w-4xl">
                                <h1
                                    class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-bold text-white leading-tight mb-4 lg:mb-6">
                                    Hunian Ternyaman Hanya Di<br>
                                    Atlas Property
                                </h1>
                                <p
                                    class="text-lg sm:text-xl md:text-2xl lg:text-2xl text-white font-light leading-relaxed max-w-2xl">
                                    Jl. Jend. Sudirman No.5-7, Purwokerto, Kabupaten Banyumas, Jawa Tengah 53116
                                </p>
                            </div>
                            {{-- <div class="flex-shrink-0 ml-8">
                                <a href="#"
                                    class="group bg-white hover:bg-gray-100 text-gray-800 px-6 py-3 lg:px-8 lg:py-4 rounded-full flex items-center space-x-3 transition-all duration-300 transform hover:scale-105 shadow-xl font-semibold text-sm lg:text-base">
                                    <svg class="w-4 h-4 lg:w-5 lg:h-5 rotate-45 group-hover:rotate-90 transition-transform duration-300"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 17L17 7M17 7H7m10 0v10" />
                                    </svg>
                                    <span>Explore Now</span>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </section>

            {{-- About Section --}}
            <section class="py-16 lg:py-24 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                        <!-- Left Content -->
                        <div class="flex flex-col">
                            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">
                                Lebih Dekat Dengan Atlas Property
                            </h2>

                            <p class="text-gray-600 text-base lg:text-lg leading-relaxed mb-6">
                                Kami mengkhususkan diri dalam memberikan manajemen tanpa stres untuk properti residensial dan komersial. Dari penyaringan penyewa hingga pemeliharaan, kami menangani semuanya—jadi Anda tidak perlu.
                            </p>

                            <p class="text-gray-600 text-base lg:text-lg leading-relaxed mb-8">
                                Didorong oleh hasrat kami terhadap real estat dan komitmen terhadap layanan, kami memberikan
                                manajemen properti yang menjaga kepuasan penyewa dan memaksimalkan nilai investasi Anda.
                            </p>

                            <!-- Button sesuai referensi - satu kesatuan dengan border -->
                            <div class="flex items-start">
                                <a href="/tentang-kami"
                                    class="group inline-flex items-center bg-white hover:bg-gray-50 border-2 border-gray-200 hover:border-secondary-700 rounded-full px-2 py-2 pr-6 transition-all duration-300 shadow-sm hover:shadow-md">
                                    <!-- Green Circle dengan Arrow di dalam button -->
                                    <div
                                        class="flex-shrink-0 w-10 h-10 bg-primary-800 group-hover:bg-secondary-700 rounded-full flex items-center justify-center transition-colors duration-300 mr-3">
                                        <svg class="w-4 h-4 text-white transform group-hover:translate-x-0.5 transition-transform duration-300"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </div>

                                    <!-- Text di dalam button yang sama -->
                                    <span
                                        class="text-gray-700 group-hover:text-gray font-medium text-base transition-colors duration-300">
                                        Detail Selengkapnya
                                    </span>
                                </a>
                            </div>
                        </div>

                        <!-- Right Content - Image -->
                        <div class="relative">
                            <div class="relative">
                                <div class="rounded-2xl overflow-hidden shadow-2xl">
                                    <img src="{{ asset('storage/sites/arcadia-1.jpg') }}"
                                        alt="Modern Property Management - Luxury Residential Building"
                                        class="w-full h-auto object-cover transform hover:scale-105 transition-transform duration-700">
                                </div>

                                <!-- Optional: Decorative element -->
                                <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-green-800/10 rounded-full -z-10">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Why Wonder Section --}}
            <section class="py-16 lg:py-24 bg-primary-900 rounded-xl ">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
                    <div class="text-center mb-12">
                        
                        <h2 class="text-4xl lg:text-5xl font-bold text-white">Kenapa Memilih Kami?</h2>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        {{-- Feature Cards --}}
                        <div class="bg-white p-8 rounded-2xl shadow-lg text-center flex flex-col items-center">
                            <div class="bg-primary-50 p-4 rounded-full mb-4">
                                <svg class="w-8 h-8 text-primary-700" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Legalitas Terjamin</h3>
                            <p class="text-gray-600">Kami memastikan semua dokumen dan izin properti Anda lengkap dan sesuai hukum, sehingga Anda dapat tenang berinvestasi.</p>
                            </p>
                        </div>
                        <div class="bg-white p-8 rounded-2xl shadow-lg text-center flex flex-col items-center">
                            <div class="bg-primary-50 p-4 rounded-full mb-4">
                                <svg class="w-8 h-8 text-primary-700" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Perawatan Properti Lengkap</h3>
                            <p class="text-gray-600">Dari penyewaan hingga perbaikan, kami mengelola setiap detail di bawah satu atap.</p>
                        </div>
                        <div class="bg-white p-8 rounded-2xl shadow-lg text-center flex flex-col items-center">
                            <div class="bg-primary-50 p-4 rounded-full mb-4">
                                <svg class="w-8 h-8 text-primary-700" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                    <path
                                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-5.998 12.078 12.078 0 01.665-6.479L12 14z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-5.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222 4 2.222V20M12 12L8 9.778 4 12l4 2.222L12 12z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Pengetahuan Ahli</h3>
                            <p class="text-gray-600">Tim kami yang berpengalaman mengetahui pasar dan menawarkan solusi yang
                                efektif.</p>
                        </div>
                        <div class="bg-white p-8 rounded-2xl shadow-lg text-center flex flex-col items-center">
                            <div class="bg-primary-50 p-4 rounded-full mb-4">
                                <svg class="w-8 h-8 text-primary-700" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 21v-2a4 4 0 014-4h10a4 4 0 014 4v2"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 11a4 4 0 110-8 4 4 0 010 8z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Untuk Semua Ukuran Properti</h3>
                            <p class="text-gray-600">Kami melayani baik portofolio besar maupun pemilik properti individu.</p>
                        </div>
                        <div class="bg-white p-8 rounded-2xl shadow-lg text-center flex flex-col items-center">
                            <div class="bg-primary-50 p-4 rounded-full mb-4">
                                <svg class="w-8 h-8 text-primary-700" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Akses Online 24/7</h3>
                            <p class="text-gray-600">Tetap kendalikan 24/7 dengan portal aman kami—lacak pembaruan,
                                dokumen, dan pembayaran kapan saja.</p>
                        </div>
                        <div class="bg-white p-8 rounded-2xl shadow-lg text-center flex flex-col items-center">
                            <div class="bg-primary-50 p-4 rounded-full mb-4">
                                <svg class="w-8 h-8 text-primary-700" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Portal Online</h3>
                            <p class="text-gray-600">Akses semua informasi melalui portal online kami—perjanjian sewa,
                                faktur, ikhtisar properti, dan banyak lagi.</p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Our Services Section --}}
            <section class="py-16 lg:py-24 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
                    <div class="flex justify-between items-end mb-12">
                        <div>
                            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mt-2">Property Atlas</h2>
                        </div>
                        <div class="flex items-center gap-4">
                            <p class="hidden lg:block max-w-md text-gray-600">
                                Discover our full range of property management solutions tailored to your needs.
                            </p>
                            <div class="flex gap-2">
                                <button id="services-prev"
                                    class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-gray-100 transition disabled:opacity-50 disabled:cursor-not-allowed">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                </button>
                                <button id="services-next"
                                    class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-gray-100 transition disabled:opacity-50 disabled:cursor-not-allowed">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pl-4 sm:pl-6 lg:pl-12">
                    <div class="swiper-container services-slider h-[500px] overflow-hidden">
                        <div class="swiper-wrapper">
                            {{-- Service Cards --}}
                            <div class="swiper-slide service-card-slide">
                                <div
                                    class="service-card relative w-full h-full rounded-2xl overflow-hidden cursor-pointer">
                                    <img src="{{ asset('storage/sites/arcadia-1.jpg') }}" alt="Rental Management"
                                        class="absolute inset-0 w-full h-full object-cover">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-black/0"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                        <h3 class="text-2xl font-bold text-white hover:text-secondary-800">Arcadia
                                            Property</h3>
                                        <div
                                            class="service-details max-h-0 opacity-0 transition-all duration-500 ease-in-out mt-2">
                                            <p class="text-gray-200">Jl. Loremipsum no.6 Purwokerto</p>
                                            <a href="/arcadia"
                                                class="inline-flex items-center mt-4 font-semibold text-white-800 hover:text-primary-300">
                                                Selengkapnya <svg class="w-4 h-4 ml-2" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M13 7l5 5-5 5M6 12h12"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide service-card-slide">
                                <div
                                    class="service-card relative w-full h-full rounded-2xl overflow-hidden cursor-pointer">
                                    <img src="{{ asset('storage/sites/casadia.jpg') }}" alt="Rental Management"
                                        class="absolute inset-0 w-full h-full object-cover">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-black/0"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                        <h3 class="text-2xl font-bold text-white hover:text-secondary-800">Casadia
                                            Property</h3>
                                        <div
                                            class="service-details max-h-0 opacity-0 transition-all duration-500 ease-in-out mt-2">
                                            <p class="text-gray-200">Jl. Loremipsum no.6 Purwokerto</p>
                                            <a href="#"
                                                class="inline-flex items-center mt-4 font-semibold text-white-800 hover:text-primary-300">
                                                Selengkapnya <svg class="w-4 h-4 ml-2" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M13 7l5 5-5 5M6 12h12"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide service-card-slide">
                                <div
                                    class="service-card relative w-full h-full rounded-2xl overflow-hidden cursor-pointer">
                                    <img src="{{ asset('storage/sites/majestic.jpg') }}" alt="Rental Management"
                                        class="absolute inset-0 w-full h-full object-cover">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-black/0"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                        <h3 class="text-2xl font-bold text-white hover:text-secondary-800">Magestic
                                            Property</h3>
                                        <div
                                            class="service-details max-h-0 opacity-0 transition-all duration-500 ease-in-out mt-2">
                                            <p class="text-gray-200">Jl. Loremipsum no.6 Purwokerto</p>
                                            <a href="#"
                                                class="inline-flex items-center mt-4 font-semibold text-white-800 hover:text-primary-300">
                                                Selengkapnya <svg class="w-4 h-4 ml-2" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M13 7l5 5-5 5M6 12h12"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide service-card-slide">
                                <div
                                    class="service-card relative w-full h-full rounded-2xl overflow-hidden cursor-pointer">
                                    <img src="{{ asset('storage/sites/arcadia-1.jpg') }}" alt="Rental Management"
                                        class="absolute inset-0 w-full h-full object-cover">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-black/0"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                        <h3 class="text-2xl font-bold text-white hover:text-secondary-800">Soon
                                            Project</h3>
                                        <div
                                            class="service-details max-h-0 opacity-0 transition-all duration-500 ease-in-out mt-2">
                                            <p class="text-gray-200">Coming Soon</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Popular Articles Section --}}
            <section class="py-16 lg:py-24 bg-white">
                <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-12">
                    {{-- Section Header --}}
                    <div class="flex justify-between items-end mb-12">
                        <div>
                            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900">Artikel Populer</h2>
                        </div>

                        {{-- View All Button sesuai referensi --}}
                        <div class="flex items-center gap-4">
                            <a href="#"
                                class="group bg-primary-800 hover:bg-primary-700 text-white px-6 py-3 rounded-full inline-flex items-center space-x-3 transition-all duration-300 transform hover:scale-105 font-semibold text-sm">
                                <span>Lihat Semua</span>
                                <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    {{-- Articles Grid --}}
                    <div class="swiper-container articles-slider overflow-hidden">
                        <div class="swiper-wrapper">
                            {{-- Article Cards --}}
                            @if (isset($posts))
                                @foreach ($posts as $post)
                                    <div class="swiper-slide">
                                        <div
                                            class="bg-white rounded-2xl border border-gray-200 overflow-hidden h-full flex flex-col group hover:shadow-lg transition-all duration-300 mx-2">
                                            {{-- Article Image --}}
                                            <div class="overflow-hidden">
                                                <img class="w-full h-48 lg:h-56 object-cover group-hover:scale-105 transition-transform duration-500"
                                                    src="{{ $post->getFeaturedImageUrl('large') ?? asset('storage/sites/article-1.jpeg') }}"
                                                    alt="{{ $post->title }}">
                                            </div>

                                            {{-- Article Content --}}
                                            <div class="p-6 lg:p-8 flex flex-col flex-grow">
                                                <h3
                                                    class="text-xl lg:text-2xl font-bold text-gray-900 mb-1 leading-tight">
                                                    {{ $post->title }}
                                                </h3>
                                                <p class="text-gray-600 text-base leading-relaxed flex-grow mb-2">
                                                    {{ $post->content_overview }}
                                                </p>

                                                {{-- Learn More Button dengan background rounded --}}
                                                <div class="mt-2">
                                                    <a href="{{ route('blog.show', $post->slug) }}"
                                                        class="group inline-flex items-center bg-gray-50 hover:bg-green-800 text-gray-700 hover:text-white px-4 py-2 rounded-full transition-all duration-300 font-medium text-sm">
                                                        <span>Learn More</span>
                                                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300"
                                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </section>

            {{-- Testimonials Section --}}
            <section class="py-16 lg:py-24 bg-white">
                <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
                    <!-- Container dengan background rounded sesuai referensi -->
                    <div class="bg-gray-50 rounded-3xl p-6 sm:p-8 lg:p-16">
                        <!-- Header Section -->
                        <div class="flex justify-between items-end mb-12">
                            <div>
                                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900">Testimoni Atlas Property</h2>
                            </div>

                            <!-- Navigation Buttons -->
                            <div class="flex items-center gap-4">
                                <div class="flex gap-2">
                                    <button id="testimonials-prev"
                                        class="w-12 h-12 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-white hover:border-green-800 hover:text-green-800 transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                    <button id="testimonials-next"
                                        class="w-12 h-12 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-white hover:border-green-800 hover:text-green-800 transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonials Slider -->
                        <div class="swiper-container testimonials-slider overflow-hidden">
                            <div class="swiper-wrapper">
                                <!-- Testimonial 1 -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white p-8 lg:p-10 rounded-2xl border border-gray-200 h-full flex flex-col relative shadow-sm hover:shadow-md transition-shadow duration-300 mx-2">
                                        <p class="text-lg lg:text-xl text-gray-800 flex-grow leading-relaxed mb-8">
                                            "Working With This Team Has Been Amazing—Responsive, Professional, And Truly
                                            Helpful At Every Step."
                                        </p>

                                        <div class="flex items-center mt-auto">
                                            <img class="h-14 w-14 rounded-full object-cover border-2 border-gray-100"
                                                src="{{ asset('storage/sites/avatar-1.jpeg') }}" alt="Freedy Kan">
                                            <div class="ml-4">
                                                <p class="font-semibold text-gray-900 text-lg">Freedy Kan</p>
                                                <p class="text-gray-500">Property Owner</p>
                                            </div>
                                        </div>

                                        <!-- Large quotation mark -->
                                        <div
                                            class="absolute bottom-8 right-8 text-gray-100 text-6xl lg:text-8xl font-serif opacity-30 select-none">
                                            "
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonial 2 -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white p-8 lg:p-10 rounded-2xl border border-gray-200 h-full flex flex-col relative shadow-sm hover:shadow-md transition-shadow duration-300 mx-2">
                                        <p class="text-lg lg:text-xl text-gray-800 flex-grow leading-relaxed mb-8">
                                            "Fantastic Experience From Start To Finish. The Team Was Highly Responsive,
                                            Professional, And Supportive Throughout The Entire Process."
                                        </p>

                                        <div class="flex items-center mt-auto">
                                            <img class="h-14 w-14 rounded-full object-cover border-2 border-gray-100"
                                                src="{{ asset('storage/sites/avatar-3.jpeg') }}" alt="Tom Croop">
                                            <div class="ml-4">
                                                <p class="font-semibold text-gray-900 text-lg">Tom Croop</p>
                                                <p class="text-gray-500">Property Owner</p>
                                            </div>
                                        </div>

                                        <!-- Large quotation mark -->
                                        <div
                                            class="absolute bottom-8 right-8 text-gray-100 text-6xl lg:text-8xl font-serif opacity-30 select-none">
                                            "
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonial 3 -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white p-8 lg:p-10 rounded-2xl border border-gray-200 h-full flex flex-col relative shadow-sm hover:shadow-md transition-shadow duration-300 mx-2">
                                        <p class="text-lg lg:text-xl text-gray-800 flex-grow leading-relaxed mb-8">
                                            "They made the process of managing my properties incredibly simple and
                                            efficient. I couldn't be happier with their service."
                                        </p>

                                        <div class="flex items-center mt-auto">
                                            <img class="h-14 w-14 rounded-full object-cover border-2 border-gray-100"
                                                src="{{ asset('storage/sites/avatar-4.jpeg') }}" alt="Jane Doe">
                                            <div class="ml-4">
                                                <p class="font-semibold text-gray-900 text-lg">Jane Doe</p>
                                                <p class="text-gray-500">Investor</p>
                                            </div>
                                        </div>

                                        <!-- Large quotation mark -->
                                        <div
                                            class="absolute bottom-8 right-8 text-gray-100 text-6xl lg:text-8xl font-serif opacity-30 select-none">
                                            "
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonial 4 -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white p-8 lg:p-10 rounded-2xl border border-gray-200 h-full flex flex-col relative shadow-sm hover:shadow-md transition-shadow duration-300 mx-2">
                                        <p class="text-lg lg:text-xl text-gray-800 flex-grow leading-relaxed mb-8">
                                            "The best property management company I've ever worked with. Their attention
                                            to detail is second to none."
                                        </p>

                                        <div class="flex items-center mt-auto">
                                            <img class="h-14 w-14 rounded-full object-cover border-2 border-gray-100"
                                                src="{{ asset('storage/sites/avatar-5.jpeg') }}" alt="John Smith">
                                            <div class="ml-4">
                                                <p class="font-semibold text-gray-900 text-lg">John Smith</p>
                                                <p class="text-gray-500">Landlord</p>
                                            </div>
                                        </div>

                                        <!-- Large quotation mark -->
                                        <div
                                            class="absolute bottom-8 right-8 text-gray-100 text-6xl lg:text-8xl font-serif opacity-30 select-none">
                                            "
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonial 5 -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white p-8 lg:p-10 rounded-2xl border border-gray-200 h-full flex flex-col relative shadow-sm hover:shadow-md transition-shadow duration-300 mx-2">
                                        <p class="text-lg lg:text-xl text-gray-800 flex-grow leading-relaxed mb-8">
                                            "Professional, reliable, and always available. Wonder Real Estate has taken
                                            all the stress out of property ownership."
                                        </p>

                                        <div class="flex items-center mt-auto">
                                            <img class="h-14 w-14 rounded-full object-cover border-2 border-gray-100"
                                                src="{{ asset('storage/sites/avatar-6.jpeg') }}" alt="Emily White">
                                            <div class="ml-4">
                                                <p class="font-semibold text-gray-900 text-lg">Emily White</p>
                                                <p class="text-gray-500">Property Owner</p>
                                            </div>
                                        </div>

                                        <!-- Large quotation mark -->
                                        <div
                                            class="absolute bottom-8 right-8 text-gray-100 text-6xl lg:text-8xl font-serif opacity-30 select-none">
                                            "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    {{-- Script untuk Swiper.js --}}
    <script src="[https://unpkg.com/swiper/swiper-bundle.min.js](https://unpkg.com/swiper/swiper-bundle.min.js)"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi Swiper untuk Services
            const servicesSwiper = new Swiper('.services-slider', {
                loop: false,
                slidesPerView: 'auto',
                spaceBetween: 16,
                navigation: {
                    nextEl: '#services-next',
                    prevEl: '#services-prev',
                },
                observer: true,
                observeParents: true,
                allowTouchMove: false,
            });

            const serviceSlides = document.querySelectorAll('.service-card-slide');

            function resetServiceSlides() {
                serviceSlides.forEach(s => {
                    s.classList.remove('expanded');
                    const details = s.querySelector('.service-details');
                    if (details) {
                        details.classList.add('opacity-0', 'max-h-0');
                        details.classList.remove('opacity-100', 'max-h-40');
                    }
                });
            }
            serviceSlides.forEach((slide) => {
                slide.addEventListener('click', () => {
                    const isAlreadyExpanded = slide.classList.contains('expanded');
                    resetServiceSlides();
                    if (!isAlreadyExpanded) {
                        slide.classList.add('expanded');
                        const details = slide.querySelector('.service-details');
                        if (details) {
                            details.classList.remove('opacity-0', 'max-h-0');
                            details.classList.add('opacity-100', 'max-h-40');
                        }
                    }
                    // Update Swiper after a short delay to allow DOM changes
                    setTimeout(() => servicesSwiper.update(), 50);
                });
            });
            const firstServiceSlide = serviceSlides[0];
            if (firstServiceSlide) {
                firstServiceSlide.classList.add('expanded');
                const firstDetails = firstServiceSlide.querySelector('.service-details');
                if (firstDetails) {
                    firstDetails.classList.remove('opacity-0', 'max-h-0');
                    firstDetails.classList.add('opacity-100', 'max-h-40');
                }
                // Update Swiper after initial expansion
                setTimeout(() => servicesSwiper.update(), 50);
            }

            // Inisialisasi Swiper untuk Testimonials
            const testimonialsSwiper = new Swiper('.testimonials-slider', {
                loop: false,
                slidesPerView: 1,
                spaceBetween: 16,
                navigation: {
                    nextEl: '#testimonials-next',
                    prevEl: '#testimonials-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 24
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 24
                    }
                }
            });

            // Inisialisasi Swiper untuk Articles
            const articlesSwiper = new Swiper('.articles-slider', {
                loop: false,
                slidesPerView: 1,
                spaceBetween: 16,
                navigation: {
                    nextEl: '#articles-next',
                    prevEl: '#articles-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 24
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 24
                    },
                    1280: {
                        slidesPerView: 4,
                        spaceBetween: 24
                    }
                }
            });
        });
    </script>
    <style>
        /* Custom style untuk slider services */
        .services-slider .swiper-slide {
            width: 22%;
            /* Lebar default untuk slide compact */
            transition: width 0.7s ease-in-out;
        }

        .services-slider .swiper-slide.expanded {
            width: 45%;
            /* Lebar untuk slide yang di-expand */
        }

        @media (max-width: 1024px) {
            .services-slider .swiper-slide {
                width: 30%;
            }

            .services-slider .swiper-slide.expanded {
                width: 60%;
            }
        }

        @media (max-width: 768px) {
            .services-slider .swiper-slide {
                width: 45%;
            }

            .services-slider .swiper-slide.expanded {
                width: 80%;
            }
        }
    </style>
</x-superduper.main>
