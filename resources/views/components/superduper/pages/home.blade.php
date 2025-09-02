<x-superduper.main>
    {{-- Link untuk Swiper.js CSS --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <div class="page-wrapper relative z-[1]">
        <main class="relative overflow-hidden main-wrapper">
            {{-- Hero Section --}}


            <section class="relative min-h-screen overflow-hidden">
                <div class="absolute inset-0 z-0">
                    <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_40/hero-bg_okioxm.jpg"
                        alt="Atlas Property" class="w-full h-full object-cover">
                </div>

                <!-- Gradient overlay from bottom to top -->
                <div class="absolute inset-0 z-10 bg-gradient-to-t from-white via-white/50 to-transparent"></div>

                <div class="relative z-20 h-screen flex flex-col justify-end pb-20 lg:pb-32">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 w-full">
                        <div class="max-w-4xl">
                            <h1
                                class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-black leading-tight mb-6">
                                Hunian Untuk Semua
                                <span class="block">Dari Purwokerto, Untuk Indonesia</span>
                            </h1>

                            <p
                                class="text-lg sm:text-xl lg:text-2xl text-black/70 font-normal leading-relaxed max-w-3xl">
                                Membangun hunian berkualitas di Jawa Tengah dengan standar transparansi,
                                kualitas hunian modern, dan komitmen layanan jangka panjang.
                            </p>
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
                                Kenal Kami Lebih Dekat
                            </h2>

                            <p class="text-gray-600 text-base lg:text-lg leading-relaxed mb-6">
                               Modern, ramah keluarga, layanan nyata, dan tim profesional dibangun dari Purwokerto.
                            </p>

                            <p class="text-gray-600 text-base lg:text-lg leading-relaxed mb-8">
                                Kami merancang hunian yang fungsional dan nyaman untuk berbagai tahap kehidupan—dengan tata ruang efisien, cahaya alami, dan kesiapan konektivitas. Layanan purna jual kami sigap, dan tim lapangan bisa Anda temui.
                            </p>

                            <!-- Button sesuai referensi - satu kesatuan dengan border -->
                            {{-- <div class="flex items-start">
                                <a href="https://wa.me/6285169934058"
                                    class="relative z-10 hidden rounded-full border-2 border-black bg-[#DDC692] px-6 py-4 text-sm font-semibold text-black transition-all duration-300 hover:bg-[#C9B480] sm:inline-block">
                                    Hubungi Kami
                                </a>
                            </div> --}}
                        </div>

                        <!-- Right Content - Image -->
                        <div class="relative">
                            <div class="relative">
                                <div class="rounded-2xl overflow-hidden shadow-2xl">
                                    <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_20/v1755847807/arcadia-1_u7guoe.jpg"
                                        alt="Atlas Arcadia"
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
            <section class="py-16 lg:py-24 bg-[#042849] rounded-xl">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
                    <div class="text-center mb-12">
                        <h2 class="text-4xl lg:text-5xl font-bold text-white">Prinsip Kerja Kami</h2>
                    </div>

                    <!-- Grid Layout -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                        <!-- Card 1: Home for Everyone -->
                        <div class="max-w-md mx-auto">
                            <div
                                class="relative h-64 rounded-2xl overflow-hidden group cursor-pointer transform hover:scale-105 transition-all duration-300">
                                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_20/v1756519505/modern-fungsional_h1prfo.jpg"
                                    alt="Arcadia Property" alt="Modern Houses"
                                    class="absolute inset-0 w-full h-full object-cover">
                                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                                <div class="relative z-10 p-6 h-full flex flex-col justify-end">
                                    <div>
                                        <h3 class="text-2xl font-bold text-white mb-2">Modern & Fungsional</h3>
                                        <p class="text-white text-sm mb-4 opacity-90">Rancangan yang mengikuti kebiasaan hidup: cahaya alami, sirkulasi, storage, dan konektivitas.</p>
                                        <a href="https://wa.me/6285169934058" target="_blank" rel="noopener noreferrer"
                                            class="relative z-10 hidden rounded-full border-2 border-black bg-[#DDC692] px-6 py-2 text-sm font-semibold text-black transition-all duration-300 hover:bg-[#C9B480] sm:inline-block">
                                            Selengkapnya
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2: Modern & Fungsional -->
                        <div class="max-w-md mx-auto">
                            <div
                                class="relative h-64 rounded-2xl overflow-hidden group cursor-pointer transform hover:scale-105 transition-all duration-300">
                                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_20/v1756519505/home_for_everyone_xl8kqs.jpg"
                                    alt="Arcadia Property" alt="Modern Houses"
                                    class="absolute inset-0 w-full h-full object-cover">
                                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                                <div class="relative z-10 p-6 h-full flex flex-col justify-end">
                                    <div>
                                        <h3 class="text-2xl font-bold text-white mb-2">Home for Everyone</h3>
                                        <p class="text-white text-sm mb-4 opacity-90">Opsi hunian untuk berbagai tahap hidup—dari hunian mandiri, keluarga, hingga investasi.</p>
                                        <a href="https://wa.me/6285169934058" target="_blank" rel="noopener noreferrer"
                                            class="relative z-10 hidden rounded-full border-2 border-black bg-[#DDC692] px-6 py-2 text-sm font-semibold text-black transition-all duration-300 hover:bg-[#C9B480] sm:inline-block">
                                            Selengkapnya
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3: Atlas Care & Service -->
                        <div class="max-w-md mx-auto">
                            <div
                                class="relative h-64 rounded-2xl overflow-hidden group cursor-pointer transform hover:scale-105 transition-all duration-300">
                                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_20/v1756544149/WhatsApp_Image_2025-08-30_at_11.32.35_apblwt.jpg"
                                    alt="Arcadia Property" alt="Modern Houses"
                                    class="absolute inset-0 w-full h-full object-cover">
                                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                                <div class="relative z-10 p-6 h-full flex flex-col justify-end">
                                    <div>
                                        <h3 class="text-2xl font-bold text-white mb-2">Membawa Inovasi</h3>
                                        <p class="text-white text-sm mb-4 opacity-90">Inovasi terbaru di dunian properti
                                            dalam bangunan hingga model kerjasama</p>
                                        <a href="https://wa.me/6285169934058" target="_blank" rel="noopener noreferrer"
                                            class="relative z-10 hidden rounded-full border-2 border-black bg-[#DDC692] px-6 py-2 text-sm font-semibold text-black transition-all duration-300 hover:bg-[#C9B480] sm:inline-block">
                                            Selengkapnya
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4: Tim Profesional -->
                        <div class="max-w-md mx-auto">
                            <div
                                class="relative h-64 rounded-2xl overflow-hidden group cursor-pointer transform hover:scale-105 transition-all duration-300">
                                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_20/v1756519503/Atlas_Care_-_Service_yzu5yq.jpg"
                                    alt="Arcadia Property" alt="Modern Houses"
                                    class="absolute inset-0 w-full h-full object-cover">
                                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                                <div class="relative z-10 p-6 h-full flex flex-col justify-end">
                                    <div>
                                        <h3 class="text-2xl font-bold text-white mb-2">Atlas Care & Service</h3>
                                        <p class="text-white text-sm mb-4 opacity-90">Layanan yang hadir ketika
                                            dibutuhkan, bukan sekadar janji.</p>
                                        <a href="https://wa.me/6285169934058" target="_blank" rel="noopener noreferrer"
                                            class="relative z-10 hidden rounded-full border-2 border-black bg-[#DDC692] px-6 py-2 text-sm font-semibold text-black transition-all duration-300 hover:bg-[#C9B480] sm:inline-block">
                                            Selengkapnya
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 5: Progres Transparan -->
                        <div class="max-w-md mx-auto">
                            <div
                                class="relative h-64 rounded-2xl overflow-hidden group cursor-pointer transform hover:scale-105 transition-all duration-300">
                                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_20/v1756519503/Tim_Profesional_fuor2g.jpg"
                                    alt="Arcadia Property" alt="Modern Houses"
                                    class="absolute inset-0 w-full h-full object-cover">
                                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                                <div class="relative z-10 p-6 h-full flex flex-col justify-end">
                                    <div>
                                        <h3 class="text-2xl font-bold text-white mb-2">Tim Profesional</h3>
                                        <p class="text-white text-sm mb-4 opacity-90">Didukung dari kami yang sudah
                                            berpengalaman dibidang properti Purwokerto dan sekitarnya.</p>
                                        <a href="https://wa.me/6285169934058" target="_blank"
                                            rel="noopener noreferrer"
                                            class="relative z-10 hidden rounded-full border-2 border-black bg-[#DDC692] px-6 py-2 text-sm font-semibold text-black transition-all duration-300 hover:bg-[#C9B480] sm:inline-block">
                                            Selengkapnya
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="max-w-md mx-auto">
                            <div
                                class="relative h-64 rounded-2xl overflow-hidden group cursor-pointer transform hover:scale-105 transition-all duration-300">
                                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_20/v1756519503/Progres_Transparan_fs0sfp.jpg"
                                    alt="Arcadia Property" alt="Modern Houses"
                                    class="absolute inset-0 w-full h-full object-cover">
                                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                                <div class="relative z-10 p-6 h-full flex flex-col justify-end">
                                    <div>
                                        <h3 class="text-2xl font-bold text-white mb-2">Progres Transparan</h3>
                                        <p class="text-white text-sm mb-4 opacity-90">Perkembangan proyek yang bisa
                                            diikuti dengan tanggal dan catatan singkat.</p>
                                        <a href="https://wa.me/6285169934058" target="_blank"
                                            rel="noopener noreferrer"
                                            class="relative z-10 hidden rounded-full border-2 border-black bg-[#DDC692] px-6 py-2 text-sm font-semibold text-black transition-all duration-300 hover:bg-[#C9B480] sm:inline-block">
                                            Selengkapnya
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Our Services Section --}}
            <section class="py-16 lg:py-16 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
                    <div class="flex justify-between items-end mb-12">
                        <div>
                            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mt-2">Hunian Atlas</h2>
                        </div>
                        <div class="flex items-center gap-4">
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
                                    <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_20/v1755847807/arcadia-1_u7guoe.jpg"
                                        alt="Rental Management" class="absolute inset-0 w-full h-full object-cover">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-black/0"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                        <h3 class="text-2xl font-bold text-white hover:text-secondary-800">Atlas
                                            Arcadia</h3>
                                        <div
                                            class="service-details max-h-0 opacity-0 transition-all duration-500 ease-in-out mt-2">
                                            <p class="text-gray-200">Ledug, Purwokerto Jawa Tengah</p>
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
                                        <h3 class="text-2xl font-bold text-white hover:text-secondary-800">Atlas
                                            Casadia</h3>
                                        <div
                                            class="service-details max-h-0 opacity-0 transition-all duration-500 ease-in-out mt-2">
                                            <p class="text-gray-200">Ledug, Purwokerto Jawa Tengah</p>
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
                                        <h3 class="text-2xl font-bold text-white hover:text-secondary-800">Atlas
                                            Majestic</h3>
                                        <div
                                            class="service-details max-h-0 opacity-0 transition-all duration-500 ease-in-out mt-2">
                                            <p class="text-gray-200">Wiradadi, Purwokerto Jawa Tengah</p>
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
                                    <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_20/v1755847807/arcadia-1_u7guoe.jpg"
                                        alt="Rental Management" class="absolute inset-0 w-full h-full object-cover">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-black/0"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                        <h3 class="text-2xl font-bold text-white hover:text-secondary-800">Pemalang
                                        </h3>
                                        <div
                                            class="service-details max-h-0 opacity-0 transition-all duration-500 ease-in-out mt-2">
                                            <p class="text-gray-200">Coming Soon</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide service-card-slide">
                                <div
                                    class="service-card relative w-full h-full rounded-2xl overflow-hidden cursor-pointer">
                                    <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_20/v1755847807/arcadia-1_u7guoe.jpg"
                                        alt="Rental Management" class="absolute inset-0 w-full h-full object-cover">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-black/0"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                        <h3 class="text-2xl font-bold text-white hover:text-secondary-800">Majenang
                                        </h3>
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

            <section class="py-16 lg:py-24 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
                    <div class="flex justify-between items-end mb-12">
                        <div>
                            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900">Perkembangan Progress</h2>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="flex gap-2">
                                <button id="progress-prev"
                                    class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-gray-100 transition disabled:opacity-50 disabled:cursor-not-allowed">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                </button>
                                <button id="progress-next"
                                    class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-gray-100 transition disabled:opacity-50 disabled:cursor-not-allowed">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Progress Container -->
                    <div class="max-w-6xl mx-auto">
                        <!-- Progress Rows Container -->
                        <div class="space-y-8">

                            <!-- Row 1: Atlas Arcadia -->
                            <div class="flex gap-6">
                                <!-- Main Property Card -->
                                <div
                                    class="bg-gray-100 rounded-xl border-2 border-gray-300 aspect-[4/3] w-80 flex-shrink-0 flex flex-col">
                                    <div class="flex-1 overflow-hidden rounded-t-xl">
                                        <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/v1755847807/arcadia-1_u7guoe.jpg"
                                            alt="Atlas Arcadia" class="w-full h-full object-cover">
                                    </div>
                                    <div class="p-4">
                                        <h3 class="font-bold text-lg text-gray-900">Atlas Arcadia</h3>
                                        <p class="text-gray-600 text-sm">Purwokerto, Ledug</p>
                                    </div>
                                </div>

                                <!-- Scrollable Progress Cards -->
                                <div class="flex-1 overflow-hidden">
                                    <div class="flex gap-4 overflow-x-auto pb-4 scrollbar-hide"
                                        style="scroll-behavior: smooth;">
                                        <div
                                            class="bg-gray-50 rounded-xl border border-gray-200 aspect-square w-48 flex-shrink-0 flex flex-col">
                                            <div class="p-1 border-b border-gray-200">
                                                <span class="text-sm ml-4 font-medium text-gray-700">Agustus
                                                    2025</span>
                                            </div>
                                            <button type="button"
                                                class="flex-1 w-full h-full overflow-hidden rounded-b-xl focus:outline-none focus:ring-2 focus:ring-primary-500 cursor-zoom-in"
                                                data-preview-src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544152/WhatsApp_Image_2025-08-30_at_12.47.38_m45t7j.jpg">
                                                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544152/WhatsApp_Image_2025-08-30_at_12.47.38_m45t7j.jpg"
                                                    alt="Progress Image" class="w-full h-full object-cover">
                                            </button>
                                        </div>
                                        <div
                                            class="bg-gray-50 rounded-xl border border-gray-200 aspect-square w-48 flex-shrink-0 flex flex-col">
                                            <div class="p-1 border-b border-gray-200">
                                                <span class="text-sm ml-4 font-medium text-gray-700">Agustus
                                                    2025</span>
                                            </div>
                                            <button type="button"
                                                class="flex-1 w-full h-full overflow-hidden rounded-b-xl focus:outline-none focus:ring-2 focus:ring-primary-500 cursor-zoom-in"
                                                data-preview-src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544152/WhatsApp_Image_2025-08-30_at_12.47.25_1_st3fnl.jpg">
                                                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544152/WhatsApp_Image_2025-08-30_at_12.47.25_1_st3fnl.jpg"
                                                    alt="Progress Image" class="w-full h-full object-cover">
                                            </button>
                                        </div>
                                        <div
                                            class="bg-gray-50 rounded-xl border border-gray-200 aspect-square w-48 flex-shrink-0 flex flex-col">
                                            <div class="p-1 border-b border-gray-200">
                                                <span class="text-sm ml-4 font-medium text-gray-700">Juli 2025</span>
                                            </div>
                                            <button type="button"
                                                class="flex-1 w-full h-full overflow-hidden rounded-b-xl focus:outline-none focus:ring-2 focus:ring-primary-500 cursor-zoom-in"
                                                data-preview-src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544151/WhatsApp_Image_2025-08-30_at_12.47.23_pzq9rr.jpg">
                                                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544151/WhatsApp_Image_2025-08-30_at_12.47.23_pzq9rr.jpg"
                                                    alt="Progress Image" class="w-full h-full object-cover">
                                            </button>
                                        </div>
                                        <div
                                            class="bg-gray-50 rounded-xl border border-gray-200 aspect-square w-48 flex-shrink-0 flex flex-col">
                                            <div class="p-1 border-b border-gray-200">
                                                <span class="text-sm ml-4 font-medium text-gray-700">Juni 2025</span>
                                            </div>
                                            <button type="button"
                                                class="flex-1 w-full h-full overflow-hidden rounded-b-xl focus:outline-none focus:ring-2 focus:ring-primary-500 cursor-zoom-in"
                                                data-preview-src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544152/WhatsApp_Image_2025-08-30_at_12.47.24_iwkagk.jpg">
                                                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544152/WhatsApp_Image_2025-08-30_at_12.47.24_iwkagk.jpg"
                                                    alt="Progress Image" class="w-full h-full object-cover">
                                            </button>
                                        </div>
                                        <div
                                            class="bg-gray-50 rounded-xl border border-gray-200 aspect-square w-48 flex-shrink-0 flex flex-col">
                                            <div class="p-1 border-b border-gray-200">
                                                <span class="text-sm ml-4 font-medium text-gray-700">Mei 2025</span>
                                            </div>
                                            <button type="button"
                                                class="flex-1 w-full h-full overflow-hidden rounded-b-xl focus:outline-none focus:ring-2 focus:ring-primary-500 cursor-zoom-in"
                                                data-preview-src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544154/WhatsApp_Image_2025-08-30_at_12.47.25_tcg83p.jpg">
                                                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544154/WhatsApp_Image_2025-08-30_at_12.47.25_tcg83p.jpg"
                                                    alt="Progress Image" class="w-full h-full object-cover">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Row 2: Atlas Casavida -->
                            <div class="flex gap-6">
                                <!-- Main Property Card -->
                                <div
                                    class="bg-gray-100 rounded-xl border-2 border-gray-300 aspect-[4/3] w-80 flex-shrink-0 flex flex-col">
                                    <div class="flex-1 overflow-hidden rounded-t-xl">
                                        <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1755847808/hero-bg_okioxm.jpg"
                                            alt="Atlas Arcadia" class="w-full h-full object-cover">
                                    </div>
                                    <div class="p-4">
                                        <h3 class="font-bold text-lg text-gray-900">Atlas Casavida</h3>
                                        <p class="text-gray-600 text-sm">Purwokerto, Ledug</p>
                                    </div>
                                </div>

                                <!-- Scrollable Progress Cards -->
                                <div class="flex-1 overflow-hidden">
    <div class="flex gap-4 overflow-x-auto pb-4 scrollbar-hide" style="scroll-behavior: smooth;">
        <div class="bg-gray-50 rounded-xl border border-gray-200 aspect-square w-48 flex-shrink-0 flex flex-col">
            <div class="p-1 border-b border-gray-200">
                <span class="text-sm ml-4 font-medium text-gray-700">Agustus 2025</span>
            </div>
            <button type="button"
                class="flex-1 w-full h-full overflow-hidden rounded-b-xl focus:outline-none focus:ring-2 focus:ring-primary-500 cursor-zoom-in"
                data-preview-src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544149/WhatsApp_Image_2025-08-30_at_11.37.18_wydsyn.jpg">
                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544149/WhatsApp_Image_2025-08-30_at_11.37.18_wydsyn.jpg"
                    alt="Progress Image" class="w-full h-full object-cover">
            </button>
        </div>
        <div class="bg-gray-50 rounded-xl border border-gray-200 aspect-square w-48 flex-shrink-0 flex flex-col">
            <div class="p-1 border-b border-gray-200">
                <span class="text-sm ml-4 font-medium text-gray-700">Juli 2025</span>
            </div>
            <button type="button"
                class="flex-1 w-full h-full overflow-hidden rounded-b-xl focus:outline-none focus:ring-2 focus:ring-primary-500 cursor-zoom-in"
                data-preview-src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544149/WhatsApp_Image_2025-08-30_at_11.37.19_1_hyvw1f.jpg">
                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544149/WhatsApp_Image_2025-08-30_at_11.37.19_1_hyvw1f.jpg"
                    alt="Progress Image" class="w-full h-full object-cover">
            </button>
        </div>
        <div class="bg-gray-50 rounded-xl border border-gray-200 aspect-square w-48 flex-shrink-0 flex flex-col">
            <div class="p-1 border-b border-gray-200">
                <span class="text-sm ml-4 font-medium text-gray-700">Juni 2025</span>
            </div>
            <button type="button"
                class="flex-1 w-full h-full overflow-hidden rounded-b-xl focus:outline-none focus:ring-2 focus:ring-primary-500 cursor-zoom-in"
                data-preview-src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544150/WhatsApp_Image_2025-08-30_at_11.37.20_tn7e66.jpg">
                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544150/WhatsApp_Image_2025-08-30_at_11.37.20_tn7e66.jpg"
                    alt="Progress Image" class="w-full h-full object-cover">
            </button>
        </div>
        <div class="bg-gray-50 rounded-xl border border-gray-200 aspect-square w-48 flex-shrink-0 flex flex-col">
            <div class="p-1 border-b border-gray-200">
                <span class="text-sm ml-4 font-medium text-gray-700">Mei 2025</span>
            </div>
            <button type="button"
                class="flex-1 w-full h-full overflow-hidden rounded-b-xl focus:outline-none focus:ring-2 focus:ring-primary-500 cursor-zoom-in"
                data-preview-src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544150/WhatsApp_Image_2025-08-30_at_11.37.20_1_tqjo75.jpg">
                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544150/WhatsApp_Image_2025-08-30_at_11.37.20_1_tqjo75.jpg"
                    alt="Progress Image" class="w-full h-full object-cover">
            </button>
        </div>
        <div class="bg-gray-50 rounded-xl border border-gray-200 aspect-square w-48 flex-shrink-0 flex flex-col">
            <div class="p-1 border-b border-gray-200">
                <span class="text-sm ml-4 font-medium text-gray-700">April 2025</span>
            </div>
            <button type="button"
                class="flex-1 w-full h-full overflow-hidden rounded-b-xl focus:outline-none focus:ring-2 focus:ring-primary-500 cursor-zoom-in"
                data-preview-src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544149/WhatsApp_Image_2025-08-30_at_11.37.19_nkmp1k.jpg">
                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544149/WhatsApp_Image_2025-08-30_at_11.37.19_nkmp1k.jpg"
                    alt="Progress Image" class="w-full h-full object-cover">
            </button>
        </div>
    </div>
</div>
                            </div>

                            <!-- Row 3: Atlas Majestic -->
                            <div class="flex gap-6">
                                <!-- Main Property Card -->
                                <div
                                    class="bg-gray-100 rounded-xl border-2 border-gray-300 aspect-[4/3] w-80 flex-shrink-0 flex flex-col">
                                    <div class="flex-1 overflow-hidden rounded-t-xl">
                                        <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1755847813/majestic_dazdbg.jpg"
                                            alt="Atlas Arcadia" class="w-full h-full object-cover">
                                    </div>
                                    <div class="p-4">
                                        <h3 class="font-bold text-lg text-gray-900">Atlas Majestic</h3>
                                        <p class="text-gray-600 text-sm">Purwokerto, Wiradadi</p>
                                    </div>
                                </div>

                                <!-- Scrollable Progress Cards -->
                                <div class="flex-1 overflow-hidden">
    <div class="flex gap-4 overflow-x-auto pb-4 scrollbar-hide" style="scroll-behavior: smooth;">
        <div class="bg-gray-50 rounded-xl border border-gray-200 aspect-square w-48 flex-shrink-0 flex flex-col">
            <div class="p-1 border-b border-gray-200">
                <span class="text-sm ml-4 font-medium text-gray-700">Agustus 2025</span>
            </div>
            <button type="button"
                class="flex-1 w-full h-full overflow-hidden rounded-b-xl focus:outline-none focus:ring-2 focus:ring-primary-500 cursor-zoom-in"
                data-preview-src="https://res.cloudinary.com/dtt9ajgi3/image/upload/v1756544151/WhatsApp_Image_2025-08-30_at_12.08.15_hqzjrw.jpg">
                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544151/WhatsApp_Image_2025-08-30_at_12.08.15_hqzjrw.jpg"
                    alt="Progress Image" class="w-full h-full object-cover">
            </button>
        </div>
        <div class="bg-gray-50 rounded-xl border border-gray-200 aspect-square w-48 flex-shrink-0 flex flex-col">
            <div class="p-1 border-b border-gray-200">
                <span class="text-sm ml-4 font-medium text-gray-700">Juli 2025</span>
            </div>
            <button type="button"
                class="flex-1 w-full h-full overflow-hidden rounded-b-xl focus:outline-none focus:ring-2 focus:ring-primary-500 cursor-zoom-in"
                data-preview-src="https://res.cloudinary.com/dtt9ajgi3/image/upload/v1756544151/WhatsApp_Image_2025-08-30_at_12.08.15_1_a81vrg.jpg">
                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544151/WhatsApp_Image_2025-08-30_at_12.08.15_1_a81vrg.jpg"
                    alt="Progress Image" class="w-full h-full object-cover">
            </button>
        </div>
        <div class="bg-gray-50 rounded-xl border border-gray-200 aspect-square w-48 flex-shrink-0 flex flex-col">
            <div class="p-1 border-b border-gray-200">
                <span class="text-sm ml-4 font-medium text-gray-700">Juni 2025</span>
            </div>
            <button type="button"
                class="flex-1 w-full h-full overflow-hidden rounded-b-xl focus:outline-none focus:ring-2 focus:ring-primary-500 cursor-zoom-in"
                data-preview-src="https://res.cloudinary.com/dtt9ajgi3/image/upload/v1756544151/WhatsApp_Image_2025-08-30_at_12.08.16_1_wxkftv.jpg">
                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544151/WhatsApp_Image_2025-08-30_at_12.08.16_1_wxkftv.jpg"
                    alt="Progress Image" class="w-full h-full object-cover">
            </button>
        </div>
        <div class="bg-gray-50 rounded-xl border border-gray-200 aspect-square w-48 flex-shrink-0 flex flex-col">
            <div class="p-1 border-b border-gray-200">
                <span class="text-sm ml-4 font-medium text-gray-700">Mei 2025</span>
            </div>
            <button type="button"
                class="flex-1 w-full h-full overflow-hidden rounded-b-xl focus:outline-none focus:ring-2 focus:ring-primary-500 cursor-zoom-in"
                data-preview-src="https://res.cloudinary.com/dtt9ajgi3/image/upload/v1756544151/WhatsApp_Image_2025-08-30_at_12.08.16_xigcgd.jpg">
                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756544151/WhatsApp_Image_2025-08-30_at_12.08.16_xigcgd.jpg"
                    alt="Progress Image" class="w-full h-full object-cover">
            </button>
        </div>
        <div class="bg-gray-50 rounded-xl border border-gray-200 aspect-square w-48 flex-shrink-0 flex flex-col">
            <div class="p-1 border-b border-gray-200">
                <span class="text-sm ml-4 font-medium text-gray-700">April 2025</span>
            </div>
            <button type="button"
                class="flex-1 w-full h-full overflow-hidden rounded-b-xl focus:outline-none focus:ring-2 focus:ring-primary-500 cursor-zoom-in"
                data-preview-src="https://res.cloudinary.com/dtt9ajgi3/image/upload/v1756544151/WhatsApp_Image_2025-08-30_at_12.08.14_j613bc.jpg">
                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/v1756544151/WhatsApp_Image_2025-08-30_at_12.08.14_j613bc.jpg"
                    alt="Progress Image" class="w-full h-full object-cover">
            </button>
        </div>
    </div>
</div>
                            </div>

                        </div>
                    </div>

                </div>
            </section>
            <div id="imagePreviewModal"
                class="fixed inset-0 bg-black/70 hidden items-center justify-center z-[100] p-4">
                <div class="relative max-w-5xl w-full">
                    <button type="button"
                        class="absolute -top-3 -right-3 w-10 h-10 rounded-full bg-white/90 text-black grid place-items-center"
                        data-close-modal>&times;</button>
                    <img id="imagePreviewImg" src="" alt="Preview"
                        class="w-full h-auto rounded-2xl shadow-2xl">
                </div>
            </div>

            <!-- Promotional Page Break Section -->
            <section class="py-16 lg:py-24 bg-white">
                <!-- Promotional Page Break - Full Width -->
                {{-- <div class="bg-gradient-to-r from-yellow-400 to-yellow-500 p-8 text-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 tracking-wide">PROMOTIONAL PAGE BREAK</h2>
                </div> --}}

                <!-- Proses Pembelian Section with Container -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
                    <div class="flex justify-between items-end mb-8">
                        <h2 class="text-4xl lg:text-5xl font-bold text-gray-900">Proses Pembelian</h2>
                    </div>
                    <!-- content steps -->
                    <div class="bg-gray-50 rounded-xl border border-gray-200 p-8">
                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div
                                    class="bg-black text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold flex-shrink-0">
                                    1
                                </div>
                                <div class="pt-1">
                                    <h3 class="font-bold text-lg text-gray-900 mb-1">Booking</h3>
                                    <p class="text-gray-600 text-sm">Tanda jadi + form pemesanan</p>
                                </div>
                                {{-- <a href="#"
                                    class="relative z-10 hidden lg:ml-20 rounded-full border-2 border-black bg-[#DDC692] px-6 py-2 text-sm font-semibold text-black transition-all duration-300 hover:bg-[#C9B480] sm:inline-block">
                                    Hubungi Kami
                                </a> --}}
                            </div>

                            <!-- Step 2: DP / KPR -->
                            <div class="flex items-start gap-4">
                                <div
                                    class="bg-black text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold flex-shrink-0">
                                    2
                                </div>
                                <div class="pt-1">
                                    <h3 class="font-bold text-lg text-gray-900 mb-1">DP / KPR</h3>
                                    <p class="text-gray-600 text-sm">Skema sesuai pilihan (cash bertahap/KPR)</p>
                                </div>
                            </div>

                            <!-- Step 3: Akad -->
                            <div class="flex items-start gap-4">
                                <div
                                    class="bg-black text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold flex-shrink-0">
                                    3
                                </div>
                                <div class="pt-1">
                                    <h3 class="font-bold text-lg text-gray-900 mb-1">Akad</h3>
                                    <p class="text-gray-600 text-sm">Dokumen legal & notaris/PPAT</p>
                                </div>
                            </div>

                            <!-- Step 4: Progress Payment -->
                            <div class="flex items-start gap-4">
                                <div
                                    class="bg-black text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold flex-shrink-0">
                                    4
                                </div>
                                <div class="pt-1">
                                    <h3 class="font-bold text-lg text-gray-900 mb-1">Progress Payment</h3>
                                    <p class="text-gray-600 text-sm">Jika ada (berdasar milestone konstruksi)</p>
                                </div>
                            </div>

                            <!-- Step 5: Serah Terima -->
                            <div class="flex items-start gap-4">
                                <div
                                    class="bg-black text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold flex-shrink-0">
                                    5
                                </div>
                                <div class="pt-1">
                                    <h3 class="font-bold text-lg text-gray-900 mb-1">Serah Terima</h3>
                                    <p class="text-gray-600 text-sm">QC bersama + dokumen garansi</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="py-16 lg:py-24 bg-[#042849] relative overflow-hidden rounded-t-xl">
                <!-- Background Pattern -->
                <div class="absolute inset-0 opacity-10">
                    <div
                        class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-transparent via-white/5 to-transparent transform -skew-y-1">
                    </div>
                    <div
                        class="absolute bottom-0 right-0 w-full h-full bg-gradient-to-l from-transparent via-white/5 to-transparent transform skew-y-1">
                    </div>
                </div>

                <div class="relative z-10">
                    <!-- Section Header -->
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 text-center mb-12">
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-4">
                            Partner Terpercaya Kami
                        </h2>
                        <p class="text-lg text-white/80 max-w-2xl mx-auto">
                            Bekerja sama dengan institusi keuangan dan partner terbaik untuk memberikan solusi properti
                            terpercaya
                        </p>
                    </div>

                    <!-- Marquee Container -->
                    <div class="marquee-container">
                        <div class="marquee-content marquee">
                            <!-- First Set of Logos -->
                            <div class="partner-logo">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a0/Bank_Syariah_Indonesia.svg"
                                    alt="BSI Bank" />
                            </div>
                            <div class="partner-logo">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/a/ad/Bank_Mandiri_logo_2016.svg"
                                    alt="Bank Mandiri" />
                            </div>
                            <div class="partner-logo">
                                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/v1756517337/BNI_2004_szmbbk.svg"
                                    alt="Bank BNI" />
                            </div>
                            <div class="partner-logo">
                                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/v1756517614/180886_jdv3oh.svg"
                                    alt="Mowilex" />
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
                            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900">Belajar Property</h2>
                        </div>

                        {{-- View All Button sesuai referensi --}}
                        <div class="flex items-center gap-4">
                            <a href="#"
                                class="relative z-10 hidden rounded-full border-2 border-black bg-[#DDC692] px-6 py-2 text-sm font-semibold text-black transition-all duration-300 hover:bg-[#C9B480] sm:inline-block">
                                Lihat Semua Artikel
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
                                            class="bg-white rounded-2xl border-2 border-[#3e3215] overflow-hidden h-full flex flex-col group hover:shadow-lg transition-all duration-300 mx-2">
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
                                                        class="relative z-10 hidden rounded-full border-2 border-black bg-[#DDC692] px-6 py-2 text-sm font-semibold text-black transition-all duration-300 hover:bg-[#C9B480] sm:inline-block">
                                                        <span>Baca Selengkapnya</span>
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
            {{-- <section class="py-16 lg:py-24 bg-white">
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
            </section> --}}
        </main>
    </div>

    {{-- Script untuk Swiper.js --}}
    <script src="[https://unpkg.com/swiper/swiper-bundle.min.js](https://unpkg.com/swiper/swiper-bundle.min.js)"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi Swiper untuk Services
            const servicesSwiper = new Swiper('.services-slider', {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 16,
    navigation: {
        nextEl: '#services-next',
        prevEl: '#services-prev',
    },
    observer: true,
    observeParents: true,
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 16
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 24
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 24
        }
    }
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
        document.addEventListener('DOMContentLoaded', function() {
            const content = document.querySelector('.marquee-content');
            if (!content) return;

            function setupMarquee() {
                if (content.dataset.cloned) return;
                content.innerHTML += content.innerHTML;
                content.dataset.cloned = 'true';
            }

            const imgs = content.querySelectorAll('img');
            let loadedCount = 0;

            function checkAllLoaded() {
                loadedCount++;
                if (loadedCount === imgs.length) {
                    setupMarquee();
                }
            }

            imgs.forEach(img => {
                if (img.complete) {
                    checkAllLoaded();
                } else {
                    img.addEventListener('load', checkAllLoaded);
                }
            });
        });

        //imageModal
        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('imagePreviewModal');
            if (!modal) return;
            const modalImg = document.getElementById('imagePreviewImg');
            const closeBtn = modal.querySelector('[data-close-modal]');
            const open = (src) => {
                modalImg.src = src;
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.classList.add('overflow-hidden');
            };
            const close = () => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                modalImg.src = '';
                document.body.classList.remove('overflow-hidden');
            };
            document.addEventListener('click', (e) => {
                const trigger = e.target.closest('[data-preview-src]');
                if (trigger) {
                    e.preventDefault();
                    open(trigger.getAttribute('data-preview-src'));
                } else if (e.target === modal) {
                    close();
                }
            });
            closeBtn?.addEventListener('click', close);
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && !modal.classList.contains('hidden')) close();
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

        

        @keyframes marquee {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .marquee-container {
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        .marquee-content {
            display: flex;
            align-items: center;
            gap: 4rem;
            animation: marquee 20s linear infinite;
            white-space: nowrap;
        }

        .marquee-content:hover {
            animation-play-state: paused;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .partner-logo {
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            height: 80px;
            width: 200px;
            transition: transform .25s ease, background .25s ease;
        }

        .partner-logo:hover {
            transform: scale(1.05);
            background: rgba(255, 255, 255, 0.12);
        }

        .partner-logo img {
            max-height: 60px;
            max-width: 160px;
            object-fit: contain;
            filter: brightness(0) invert(1);
        }
    </style>
</x-superduper.main>
