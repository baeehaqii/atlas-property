<x-superduper.main>
    <div class="relative min-h-screen bg-gradient-to-br from-amber-50 to-stone-100 overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="{{ asset('storage/sites/hero.jpeg') }}" alt="Arcadia Architecture"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-40"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-60"></div>
        </div>

        <!-- Geometric Wood Pattern Overlay -->
        <div class="absolute inset-0 opacity-20">
            <div class="w-full h-full"
                style="background-image: repeating-linear-gradient(45deg, transparent, transparent 2px, rgba(139, 69, 19, 0.1) 2px, rgba(139, 69, 19, 0.1) 4px)">
            </div>
        </div>

        <!-- Main Content -->
        <div class="relative z-10 flex items-center justify-center min-h-screen px-4">
            <div class="text-center text-white max-w-4xl mx-auto">
                <!-- Brand Name -->
                <div class="mb-6">
                    <p class="text-lg md:text-xl font-light tracking-widest uppercase text-[#B19244] mb-2">ATLAS</p>
                    <h1 class="font-serif font-bold text-6xl md:text-8xl lg:text-9xl text-white">
                        Arcadia
                    </h1>
                </div>

                <!-- Decorative Line -->
                <div class="w-24 h-px bg-amber-300 mx-auto mb-8"></div>

                <!-- Subtitle -->
                <p class="text-xl md:text-2xl font-light text-gray-200 mb-12 max-w-2xl mx-auto leading-relaxed">
                    Modern Townhouse Living Redefined
                </p>

                <!-- CTA Button -->
                <div class="mb-16">
                    <a href="#explore"
                        class="inline-block bg-[#B19244] hover:bg-[#c7a141] text-white px-8 py-2 text-lg font-medium tracking-wide rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Selengkapnya
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom Info Bar -->
        <div class="absolute bottom-0 left-0 right-0 z-20">
            <div class="bg-gradient-to-r from-stone-800 to-stone-900 bg-opacity-90 backdrop-blur-sm">
                <div class="container mx-auto px-6 py-6">
                    <div class="flex flex-col md:flex-row justify-between items-center text-white">
                        <div class="mb-4 md:mb-0">
                            <h3 class="text-xl font-light text-[#B19244]">Arcadia Atlas Property</h3>
                            <p class="text-sm text-gray-300">Premium Residential Development</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm text-gray-300">Jl. Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Arcadia Section -->
    <section class="py-0">
        <div class="grid grid-cols-1 lg:grid-cols-2 min-h-[600px] lg:min-h-[700px]">

            {{-- Left Column - Content with Brown Background --}}
            <div class="bg-[#B19244] flex items-center justify-center p-8 sm:p-12 lg:p-16 xl:p-20">
                <div class="max-w-lg">
                    <h1 class="font-serif font-bold text-6xl md:text-8xl mb-8 lg:mb-12 lg:text-9xl text-white">
                        Arcadia
                    </h1>

                    {{-- First Paragraph --}}
                    <p class="text-white/90 text-base lg:text-lg xl:text-xl leading-relaxed mb-6 lg:mb-8 font-light">
                        Arcadia Property adalah sebuah properti yang mengusung konsep hunian modern dengan sentuhan
                        arsitektur yang elegan dan fungsional.
                    </p>

                    {{-- Second Paragraph --}}
                    <p class="text-white/90 text-base lg:text-lg xl:text-xl leading-relaxed font-light">
                        Dengan desain yang mengutamakan kenyamanan dan keindahan, Arcadia menawarkan pengalaman tinggal
                        yang tak tertandingi.
                        Dengan fasilitas modern dan lingkungan yang asri, Arcadia adalah pilihan ideal bagi Anda yang
                        menginginkan hunian berkualitas.
                        Harga yang kompetitif dan lokasi strategis menjadikan Arcadia sebagai investasi properti yang
                        menguntungkan.
                    </p>
                </div>
            </div>

            {{-- Right Column - Image --}}
            <div class="relative overflow-hidden">
                <img src="{{ asset('storage/sites/arcadia-1.jpg') }}"
                    alt="Modern residential complex showcasing architectural excellence"
                    class="w-full h-full object-cover">

                {{-- Optional: Subtle overlay for better contrast if needed --}}
                <div class="absolute inset-0 bg-black/5"></div>
            </div>

        </div>
    </section>

    <!-- Location Section -->
    <section class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="bg-white p-8 md:p-12 rounded-2xl">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center">

                    <!-- Kolom Kiri: Judul dan Deskripsi -->
                    <div class="text-left">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                            Peta Lokasi
                        </h2>
                        <p class="text-gray-600 mb-6">
                            Arcadia berlokasi strategis di pusat kota, memberikan Anda akses mudah ke berbagai fasilitas
                            penting dan hiburan.
                        </p>
                        <div class="space-y-3 text-gray-700">
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-amber-600 mr-3 mt-1 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><b>Pusat Perbelanjaan:</b> Hanya 5 menit ke Mega Mall.</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-amber-600 mr-3 mt-1 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><b>Akses Tol:</b> 10 menit dari Gerbang Tol Utama.</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-amber-600 mr-3 mt-1 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><b>Rumah Sakit:</b> Dekat dengan RS Internasional.</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-amber-600 mr-3 mt-1 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><b>Sekolah:</b> Berbagai pilihan sekolah negeri dan swasta ternama.</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-amber-600 mr-3 mt-1 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><b>Bandara:</b> 30 menit menuju bandara.</span>
                            </div>
                        </div>
                        <div class="flex justify-center mt-8">
                            <a href="https://www.google.com/maps/place/Arcadia+Atlas+Property/@-7.4239839946459,109.2332150147758,15z/data=!4m5!3m4!1s0x2e655e6022131367:0x66e9225f445a3345!8m2!3d-7.4239839946459!4d109.2332150147758"
                                target="_blank"
                                class="bg-[#B19244] hover:bg-[#c7a141] text-white px-6 py-2 rounded-lg transition-colors duration-300">
                                Kunjungi Lokasi Proyek Arcadia
                            </a>
                        </div>
                    </div>

                    <!-- Kolom Kanan: Peta Interaktif -->
                    <div class="w-full h-[450px] rounded-2xl overflow-hidden shadow-lg">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.376918804495!2d109.2332150147758!3d-7.4239839946459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655e6022131367%3A0x66e9225f445a3345!2sAlun-Alun%20Purwokerto!5e0!3m2!1sen!2sid!4v1678886400000!5m2!1sen!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- siteplan --}}
    <section class="bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-2">

            {{-- Left Column - Content --}}
            <div class="bg-[#B19244] flex items-center justify-center p-8 sm:p-12 lg:p-16 xl:p-20">
                <div class="max-w-lg">
                    <h2
                        class="text-white font-serif font-bold text-6xl sm:text-5xl lg:text-6xl xl:text-7xl leading-tight mb-8 lg:mb-12">
                        Siteplan Arcadia
                    </h2>

                    {{-- First Paragraph --}}
                    <p class="text-white/90 text-base lg:text-lg xl:text-xl leading-relaxed mb-6 lg:mb-8 font-light">
                        "Excellence" is a term rooted in superior quality and outstanding performance, symbolizing a
                        commitment to the highest standards, precision, and exceptional service delivery.
                    </p>

                    {{-- Second Paragraph --}}
                    <p class="text-white/90 text-base lg:text-lg xl:text-xl leading-relaxed font-light">
                        Wonder Real Estate, developed under the Wonder Group, is more than just a property management
                        company, it is a vision of exceptional service and unparalleled expertise.
                    </p>
                </div>
            </div>

            {{-- Right Column - Image --}}
            <div class="relative overflow-hidden min-h-[400px] lg:min-h-[600px]">
                <img src="{{ asset('storage/sites/arcadia-1.jpg') }}" alt="Arcadia Siteplan"
                    class="w-full h-full object-cover">
                {{-- Fallback image --}}
                <img src="{{ asset('storage/sites/arcadia-1.jpg') }}"
                    alt="Arcadia Siteplan Placeholder" class="w-full h-full object-cover absolute inset-0 -z-10"
                    onerror="this.style.display='none'">
            </div>

        </div>
    </section>



    {{-- <section class="relative bg-amber-900 text-white py-20 md:py-32">
        <!-- Pattern Overlay -->
        <div class="absolute inset-0 opacity-10"
            style="background-image: repeating-linear-gradient(45deg, transparent, transparent 15px, rgba(255, 255, 255, 0.1) 15px, rgba(255, 255, 255, 0.1) 17px), repeating-linear-gradient(-45deg, transparent, transparent 15px, rgba(255, 255, 255, 0.1) 15px, rgba(255, 255, 255, 0.1) 17px);">
        </div>

        <div
            class="relative container mx-auto px-4 text-center flex flex-col items-center justify-center min-h-[400px]">
            <div class="max-w-3xl">
                <h2 class="text-5xl md:text-6xl font-bold mb-6">
                    Layout
                </h2>
                <p class="text-lg md:text-xl text-white/80 font-light leading-relaxed">
                    Each layout is designed to flow seamlessly, offering a harmonious balance between personal space and
                    shared comfort.
                </p>
            </div>
        </div>
    </section> --}}

    <!-- Floor Plan Section -->
    <section class="bg-white py-20 md:py-24">
        <div class="container mx-auto px-4">
            <div class="bg-white rounded-2xl overflow-hidden">
                <!-- Floor plans images -->
                <div class="p-8 md:p-12 flex justify-center">
                    <div class="text-center max-w-4xl">
                        <img src="{{ asset('storage/sites/Denah-Arcadia.jpeg') }}" alt="Denah Lantai 1"
                            class="w-full h-auto rounded-lg border border-gray-200">
                        <p class="mt-3 text-sm font-semibold text-gray-500 tracking-wider">1st Floor</p>
                    </div>
                </div>

                <!-- Specifications Bar -->
                <div class="bg-[#B19244] text-white p-6">
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-6 text-center">
                        <div class="flex items-center justify-center gap-3">
                            <svg class="w-8 h-8 opacity-80 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h7.5" />
                            </svg>
                            <span class="font-bold text-lg">90 m²</span>
                        </div>
                        <div class="flex items-center justify-center gap-3">
                            <svg class="w-8 h-8 opacity-80 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6h1.5m-1.5 3h1.5m-1.5 3h1.5M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                            </svg>
                            <span class="font-bold text-lg">65 m²</span>
                        </div>
                        <div class="flex items-center justify-center gap-3">
                            <svg class="w-8 h-8 opacity-80 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h6m-3-3.75l-3.75-3.75v-1.5a3.375 3.375 0 0 1 3.375-3.375h9.75a3.375 3.375 0 0 1 3.375 3.375v1.5L16.5 12M21.75 12h-19.5" />
                            </svg>
                            <span class="font-bold text-lg">2+1 Bedroom</span>
                        </div>
                        <div class="flex items-center justify-center gap-3">
                            <svg class="w-8 h-8 opacity-80 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 12.75v-2.625c0-1.581 1.294-2.875 2.875-2.875h13.5c1.581 0 2.875 1.294 2.875 2.875v2.625m-19.5 0A2.625 2.625 0 0 0 4.875 15h14.25a2.625 2.625 0 0 0 2.625-2.25m-19.5 0v-2.625c0-1.581 1.294-2.875 2.875-2.875h13.5c1.581 0 2.875 1.294 2.875 2.875v2.625m-16.5 3.375a2.25 2.25 0 0 1-2.25-2.25v-1.5a2.25 2.25 0 0 1 2.25-2.25H21a2.25 2.25 0 0 1 2.25 2.25v1.5a2.25 2.25 0 0 1-2.25 2.25m-18.375-3.375a2.25 2.25 0 0 0-2.25 2.25v1.5a2.25 2.25 0 0 0 2.25 2.25H21a2.25 2.25 0 0 0 2.25-2.25v-1.5a2.25 2.25 0 0 0-2.25-2.25" />
                            </svg>
                            <span class="font-bold text-lg">1+1 Bathroom</span>
                        </div>
                        <div class="flex items-center justify-center gap-3 col-span-2 md:col-span-1">
                            <svg class="w-8 h-8 opacity-80 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.125-.504 1.125-1.125V14.25m-17.25 4.5h10.5m-10.5-4.5v-4.5c0-.92.75-1.668 1.668-1.668h12.164c.918 0 1.668.748 1.668 1.668v4.5m-15.332-4.5c-.44-1.32.162-2.822 1.488-3.464l4.246-2.123a3.375 3.375 0 0 1 3.464 0l4.246 2.123c1.326.642 1.928 2.144 1.488 3.464M4.5 18.75h15" />
                            </svg>
                            <span class="font-bold text-lg">1 Carport</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-2">

            {{-- Left Column - Content --}}
            <div class="bg-amber-900 flex items-center justify-center p-8 sm:p-12 lg:p-16 xl:p-20">
                <div class="max-w-lg">
                    {{-- Small Label --}}
                    <p class="text-[#B19244] font-semibold text-sm lg:text-base mb-4 tracking-widest uppercase">
                        WONDER
                    </p>

                    {{-- Main Heading --}}
                    <h2
                        class="text-white text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-light leading-tight mb-8 lg:mb-12">
                        EXCELLENCE
                    </h2>

                    {{-- First Paragraph --}}
                    <p class="text-white/90 text-base lg:text-lg xl:text-xl leading-relaxed mb-6 lg:mb-8 font-light">
                        "Excellence" is a term rooted in superior quality and outstanding performance, symbolizing a
                        commitment to the highest standards, precision, and exceptional service delivery.
                    </p>

                    {{-- Second Paragraph --}}
                    <p class="text-white/90 text-base lg:text-lg xl:text-xl leading-relaxed font-light">
                        Wonder Real Estate, developed under the Wonder Group, is more than just a property management
                        company, it is a vision of exceptional service and unparalleled expertise.
                    </p>
                </div>
            </div>

            {{-- Right Column - Image --}}
            <div class="relative overflow-hidden min-h-[400px] lg:min-h-[600px]">
                <img src="{{ asset('storage/sites/arcadia-siteplan.jpg') }}" alt="Arcadia Siteplan"
                    class="w-full h-full object-cover">
                {{-- Fallback image --}}
                <img src="https://placehold.co/800x600/e2e8f0/4a5568?text=Siteplan+Image"
                    alt="Arcadia Siteplan Placeholder" class="w-full h-full object-cover absolute inset-0 -z-10"
                    onerror="this.style.display='none'">
            </div>

        </div>
    </section>

    <section class="w-full bg-white">
        <div class="flex flex-col">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="h-[60vh] md:h-[80vh]">
                    <img src="https://placehold.co/800x1000/e0e0e0/555?text=Living+Room" alt="Living Room Interior"
                        class="w-full h-full object-cover">
                </div>
                <div class="h-[60vh] md:h-[80vh]">
                    <img src="https://placehold.co/800x1000/f0f0f0/555?text=Kitchen" alt="Kitchen Interior"
                        class="w-full h-full object-cover">
                </div>
            </div>
            <div class="bg-stone-800 text-white w-full">
                <div class="container mx-auto px-6 py-4 flex justify-between items-center">
                    <h3 class="text-lg font-semibold tracking-wide">Living Room & Kitchen</h3>
                    <p class="font-bold text-lg tracking-widest">ARCADIA</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-stone-50">
        <div class="container mx-auto px-4">
            <div
                class="relative bg-gradient-to-br from-blue-200 via-teal-100 to-yellow-100 rounded-3xl p-12 md:p-16 text-center overflow-hidden">
                <div class="relative z-10">
                    <h2 class="text-3xl md:text-4xl font-bold text-stone-800 mb-4">Tetap Terhubung dengan Arcadia</h2>
                    <p class="max-w-2xl mx-auto text-gray-700 mb-8">
                        Daftarkan diri Anda untuk mendapatkan berita terbaru, pembaruan progres, dan penawaran eksklusif
                        dari Arcadia. Jadilah yang pertama tahu tentang setiap perkembangan proyek kami.
                    </p>
                    <form action="#" method="POST" class="max-w-lg mx-auto">
                        <div
                            class="flex flex-col sm:flex-row items-center gap-4 bg-white/50 p-2 rounded-xl shadow-inner">
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                    </svg>
                                </div>
                                <input type="email" name="email" id="email"
                                    class="w-full pl-10 pr-4 py-3 rounded-lg border-none focus:ring-2 focus:ring-blue-500 transition duration-300"
                                    placeholder="Masukkan email Anda">
                            </div>
                            <button type="submit"
                                class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition-transform transform hover:scale-105">
                                Berlangganan
                            </button>
                        </div>
                    </form>
                    <p class="text-xs text-gray-600 mt-4">Kami peduli dengan privasi Anda. Baca <a href="#"
                            class="underline hover:text-blue-700">Kebijakan Privasi</a> kami.</p>
                </div>
            </div>
        </div>
    </section>

</x-superduper.main>
