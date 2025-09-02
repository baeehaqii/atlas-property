@section('title', 'Tentang Atlas')

<x-superduper.main>
    <section class="py-12 lg:py-40 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">

            {{-- Header Section --}}
            <div class="text-center mb-8 lg:mb-12">
                <h2
                    class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-gray-900 leading-tight max-w-5xl mx-auto">
                    Atlas Property
                </h2>
            </div>

            {{-- Hero Image Section --}}
            <div class="mb-12 lg:mb-16">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('storage/sites/casadia.jpg') }}" alt="Professional team of real estate experts"
                        class="w-full h-[400px] sm:h-[500px] lg:h-[600px] xl:h-[700px] object-cover">

                    {{-- Optional overlay for better text readability if needed --}}
                    <div class="absolute inset-0 bg-black/10"></div>
                </div>
            </div>

            {{-- Statistics Section --}}
            <div class="bg-[#B19244] rounded-3xl p-8 lg:p-12">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 lg:gap-12">

                    {{-- Statistic 1: Employees --}}
                    <div class="text-center">
                        <div class="text-4xl lg:text-5xl xl:text-6xl font-bold text-amber-900 mb-2">
                            100+
                        </div>
                        <p class="text-amber-800 font-medium text-sm lg:text-base">
                            Rumah Terbangun
                        </p>
                    </div>

                    {{-- Statistic 2: Countries --}}
                    <div class="text-center">
                        <div class="text-4xl lg:text-5xl xl:text-6xl font-bold text-amber-900 mb-2">
                            3+
                        </div>
                        <p class="text-amber-800 font-medium text-sm lg:text-base">
                            Wilayah
                        </p>
                    </div>

                    {{-- Statistic 3: Projects Done --}}
                    <div class="text-center">
                        <div class="text-4xl lg:text-5xl xl:text-6xl font-bold text-amber-900 mb-2">
                            100+
                        </div>
                        <p class="text-amber-800 font-medium text-sm lg:text-base">
                            Teman Atlas Property
                        </p>
                    </div>

                    {{-- Statistic 4: Offices --}}
                    <div class="text-center">
                        <div class="text-4xl lg:text-5xl xl:text-6xl font-bold text-amber-900 mb-2">
                            30+
                        </div>
                        <p class="text-amber-800 font-medium text-sm lg:text-base">
                            Marketing
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- Jurneey --}}
    <section class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">

            {{-- Header Section --}}
            <div class="text-center mb-12 lg:mb-16">
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-8">
                    Journey Of Atlas Property
                </h2>

                {{-- Introduction Paragraph --}}
                <p class="text-gray-600 text-lg lg:text-xl leading-relaxed max-w-5xl mx-auto">
                    Perjalanan Atlas Property dimulai dengan visi sederhana namun kuat: untuk mentransformasi
                    lanskap manajemen properti dengan menggabungkan inovasi, keahlian, dan integritas. Didirikan oleh
                    sekelompok veteran industri yang penuh semangat, Atlas Property dengan cepat membangun reputasi
                    sebagai nama terpercaya di sektor real estat.
                </p>
            </div>

            {{-- Content Blocks --}}
            <div class="space-y-16 lg:space-y-24">

                {{-- Block 1: Inception Vision (Image Left, Text Right) --}}
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                    <div class="order-2 lg:order-1">
                        <div class="rounded-3xl overflow-hidden shadow-xl">
                            <img src="{{ asset('storage/sites/arcadia-1.jpg') }}"
                                alt="Modern skyscrapers representing our vision"
                                class="w-full h-64 lg:h-80 object-cover">
                        </div>
                    </div>
                    <div class="order-1 lg:order-2">
                        <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-4">
                            Langkah Pertama:
                        </h3>
                        <p class="text-gray-600 text-base lg:text-lg leading-relaxed">
                            Atlas Property didirikan atas visi kolektif yang dibagikan di antara para profesional
                            berpengalaman
                            yang ingin mendefinisikan kembali keunggulan dalam industri manajemen properti. Dengan
                            pengalaman
                            puluhan tahun, para pendiri kami mendirikan perusahaan yang mengutamakan inovasi,
                            integritas, dan
                            dedikasi yang tak tergoyahkan untuk kepuasan klien.
                        </p>
                    </div>
                </div>

                {{-- Block 2: Evolutionary Journey (Text Left, Image Right) --}}
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                    <div>
                        <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-4">
                            Berawal Dari Anda
                        </h3>
                        <p class="text-gray-600 text-base lg:text-lg leading-relaxed">
                            Dari awal yang sederhana sebagai startup hingga posisi kami saat ini sebagai pemimpin
                            industri yang dihormati,
                            Atlas Property telah menjalani perjalanan evolusi yang luar biasa. Sepanjang proses ini,
                            kami tetap teguh dalam menjunjung tinggi nilai-nilai inti kami sambil terus merangkul
                            peluang untuk pertumbuhan dan perbaikan.
                        </p>
                    </div>
                    <div>
                        <div class="rounded-3xl overflow-hidden shadow-xl">
                            <img src="{{ asset('storage/sites/majestic.jpg') }}"
                                alt="Architectural excellence and growth" class="w-full h-64 lg:h-80 object-cover">
                        </div>
                    </div>
                </div>

                {{-- Block 3: Commitment to Excellence (Image Left, Text Right) --}}
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                    <div class="order-2 lg:order-1">
                        <div class="rounded-3xl overflow-hidden shadow-xl">
                            <img src="{{ asset('storage/sites/casadia.jpg') }}"
                                alt="Professional construction team at work" class="w-full h-64 lg:h-80 object-cover">
                        </div>
                    </div>
                    <div class="order-1 lg:order-2">
                        <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-4">
                            Komitmen Terhadap Keunggulan:
                        </h3>
                        <p class="text-gray-600 text-base lg:text-lg leading-relaxed">
                            Di Atlas Property, keunggulan bukan sekadar tujuan, tetapi aspek mendasar dari budaya
                            perusahaan kami.
                            Setiap anggota tim kami sangat berkomitmen untuk memberikan kualitas dan kerajinan yang luar
                            biasa dalam setiap proyek yang kami jalankan, memastikan kami melebihi harapan klien.
                        </p>
                    </div>
                </div>

                {{-- Block 4: Client-Centric Approach (Text Left, Image Right) --}}
                {{-- <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                    <div>
                        <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-4">
                            Client-Centric Approach:
                        </h3>
                        <p class="text-gray-600 text-base lg:text-lg leading-relaxed">
                            Central to our success is our unwavering focus on our clients. We understand that each
                            project is unique, and we take the time to listen, understand, and tailor our services to
                            meet specific needs. Building lasting relationships based on trust and transparency is at
                            the heart of everything we do.
                        </p>
                    </div>
                    <div>
                        <div class="rounded-3xl overflow-hidden shadow-xl">
                            <img src="{{ asset('storage/sites/client-meeting.jpg') }}"
                                alt="Professional client consultation meeting" class="w-full h-64 lg:h-80 object-cover">
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    {{-- Section 3 --}}
    <section class="py-16 lg:py-24 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">

            {{-- Header Section --}}
            <div class="text-center mb-12 lg:mb-16">
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-8">
                    Misi Atlas Property
                </h2>

                {{-- Introduction Paragraph --}}
                <p class="text-gray-600 text-lg lg:text-xl leading-relaxed max-w-5xl mx-auto">
                    Di Atlas Property, misi kami adalah untuk mendefinisikan kembali keunggulan dalam industri manajemen
                    properti dengan
                    memberikan solusi yang inovatif, berkelanjutan, dan berkualitas tinggi yang melebihi harapan klien
                    kami.
                    Kami berkomitmen untuk membangun hubungan jangka panjang yang didasarkan pada kepercayaan,
                    integritas, dan
                    layanan yang luar biasa, sambil berusaha untuk memberikan dampak positif pada komunitas yang kami
                    layani.
                </p>
            </div>

            {{-- Values Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">

                {{-- Value 1: Integrity --}}
                <div class="bg-white rounded-2xl p-6 lg:p-8 shadow-sm hover:shadow-md transition-shadow duration-300">
                    {{-- Icon --}}
                    <div class="mb-6">
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.031 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                    </div>

                    {{-- Content --}}
                    <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-4">
                        Integritas
                    </h3>
                    <p class="text-gray-600 text-base leading-relaxed mb-6">
                        Kami percaya pada kejujuran, transparansi, dan praktik etis dalam setiap aspek pekerjaan kami.
                        Integritas adalah fondasi di mana kami membangun kepercayaan dengan klien dan mitra kami.
                    </p>

                    {{-- Read More Link --}}
                    {{-- <a href="#"
                        class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium text-sm transition-colors duration-300">
                        <span>Read more</span>
                        <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a> --}}
                </div>

                {{-- Value 2: Excellence --}}
                <div class="bg-white rounded-2xl p-6 lg:p-8 shadow-sm hover:shadow-md transition-shadow duration-300">
                    {{-- Icon --}}
                    <div class="mb-6">
                        <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                    </div>

                    {{-- Content --}}
                    <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-4">
                        Keunggulan
                    </h3>
                    <p class="text-gray-600 text-base leading-relaxed mb-6">
                        Kami berkomitmen untuk memberikan kualitas dan kerajinan yang luar biasa dalam semua proyek
                        kami. Dari
                        konsep hingga penyelesaian, kami berusaha untuk mencapai keunggulan dalam setiap detail untuk
                        memastikan kualitas tertinggi.
                    </p>

                    {{-- Read More Link --}}
                    {{-- <a href="#"
                        class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium text-sm transition-colors duration-300">
                        <span>Read more</span>
                        <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a> --}}
                </div>

                {{-- Value 3: Collaboration --}}
                <div class="bg-white rounded-2xl p-6 lg:p-8 shadow-sm hover:shadow-md transition-shadow duration-300">
                    {{-- Icon --}}
                    <div class="mb-6">
                        <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                    </div>

                    {{-- Content --}}
                    <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-4">
                        Kolaborasi
                    </h3>
                    <p class="text-gray-600 text-base leading-relaxed mb-6">
                        Kami menghargai kolaborasi dan kerja tim, baik secara internal dalam organisasi kami maupun
                        secara eksternal dengan
                        klien dan mitra kami. Dengan mendorong komunikasi terbuka dan saling menghormati.
                    </p>

                    {{-- Read More Link --}}
                    {{-- <a href="#"
                        class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium text-sm transition-colors duration-300">
                        <span>Read more</span>
                        <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a> --}}
                </div>

                {{-- Value 4: Innovation --}}
                <div class="bg-white rounded-2xl p-6 lg:p-8 shadow-sm hover:shadow-md transition-shadow duration-300">
                    {{-- Icon --}}
                    <div class="mb-6">
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                    </div>

                    {{-- Content --}}
                    <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-4">
                        Inovasi
                    </h3>
                    <p class="text-gray-600 text-base leading-relaxed mb-6">
                        Kami mengadopsi inovasi dan kreativitas untuk tetap berada di garis depan industri real estat.
                        Terus mencari ide dan teknologi baru, kami bertujuan untuk memberikan solusi yang inovatif.
                    </p>

                    {{-- Read More Link --}}
                    {{-- <a href="#"
                        class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium text-sm transition-colors duration-300">
                        <span>Read more</span>
                        <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a> --}}
                </div>

            </div>
        </div>
    </section>

    {{-- Section Video --}}
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">

            {{-- Header Section --}}
            <div class="text-center mb-12 lg:mb-16">

                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-8">
                    Perjalanan Atlas Property
                </h2>

                {{-- Introduction Paragraph --}}
                <p class="text-gray-600 text-lg lg:text-xl leading-relaxed max-w-4xl mx-auto">
                    Tonton video profil perusahaan kami untuk mempelajari perjalanan kami, bertemu tim kami, dan
                    menemukan apa yang menjadikan Wonder Real Estate pilihan tepercaya untuk keunggulan manajemen
                    properti.
                </p>
            </div>

            {{-- Video Card --}}
            <div class="max-w-5xl mx-auto">
                <div class="bg-white rounded-3xl p-6 lg:p-8 shadow-lg">
                    <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 lg:gap-8 items-center">

                        {{-- Video Thumbnail (Left Side - 2 columns) --}}
                        <div class="lg:col-span-2">
                            <div class="relative rounded-2xl overflow-hidden">
                                <img src="{{ asset('storage/sites/company-profile-video.jpg') }}"
                                    alt="Wonder Real Estate Company Profile" class="w-full h-48 lg:h-64 object-cover">

                                {{-- Dark Overlay --}}
                                <div class="absolute inset-0 bg-black/50"></div>

                                {{-- Play Button and Text --}}
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="text-center">
                                        <div
                                            class="bg-white/20 backdrop-blur-sm rounded-full p-4 mb-3 mx-auto w-16 h-16 flex items-center justify-center">
                                            <svg class="w-6 h-6 text-white ml-1" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path d="M8 5v14l11-7z" />
                                            </svg>
                                        </div>
                                        <p class="text-white font-medium text-sm lg:text-base">
                                            Watch the video
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Video Content (Right Side - 3 columns) --}}
                        <div class="lg:col-span-3 space-y-4">

                            <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 leading-tight">
                                Membangun Keunggulan dalam Property Bersama Kami
                            </h3>

                            {{-- Video Description --}}
                            <p class="text-gray-600 text-base lg:text-lg leading-relaxed">
                                Di Atlas Property, kami percaya bahwa setiap proyek adalah kesempatan untuk menciptakan
                                sesuatu yang luar biasa.
                                Dari konsep hingga penyelesaian, tim kami berkomitmen untuk memberikan kualitas dan
                                kerajinan yang tak tertandingi.
                                Saksikan perjalanan kami dalam video ini dan temukan bagaimana kami membangun masa depan
                                properti yang lebih baik.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="py-16 lg:py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">

            {{-- CTA Container with Gradient Background --}}
            <div
                class="bg-gradient-to-r from-primary-200 via-primary-50 to-[#b1924481] rounded-[3rem] p-8 sm:p-12 lg:p-16 text-center">

                {{-- Main Heading --}}
                <h2
                    class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold text-gray-900 leading-tight mb-6 lg:mb-8">
                    Dapatkan Promo Terbaru
                </h2>

                {{-- Description --}}
                <p class="text-gray-600 text-lg lg:text-xl leading-relaxed max-w-4xl mx-auto mb-8 lg:mb-12">
                    Daftar untuk newsletter kami agar tetap mendapatkan informasi tentang berita terbaru, pembaruan, dan
                    penawaran eksklusif dari Wonder Real Estate. Dengan berlangganan, Anda akan menerima email reguler
                    yang menampilkan sorotan proyek, wawasan industri, dan tips untuk kebutuhan manajemen properti Anda.
                </p>

                {{-- Email Subscription Form --}}
                <form action="#" method="POST" class="max-w-2xl mx-auto mb-6">
                    @csrf
                    <div class="flex flex-col sm:flex-row gap-4 sm:gap-0">
                        {{-- Email Input --}}
                        <div class="flex-1 relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <input type="email" name="email" id="email" required
                                placeholder="Enter your email"
                                class="w-full pl-12 pr-4 py-4 bg-white border-0 rounded-full sm:rounded-r-none focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-900 placeholder-gray-500 text-base lg:text-lg shadow-sm">
                        </div>

                        {{-- Subscribe Button --}}
                        <button type="submit"
                            class="bg-primary-900 hover:bg-[#B19244] text-white font-semibold px-8 py-4 rounded-full sm:rounded-l-none transition-colors duration-300 text-base lg:text-lg shadow-sm hover:shadow-md transform hover:scale-105 sm:hover:scale-100">
                            Subscribe
                        </button>
                    </div>
                </form>

                {{-- Privacy Notice --}}
                <p class="text-gray-500 text-sm lg:text-base">
                    We care about the protection of your data. Read our
                    <a href="#"
                        class="text-blue-600 hover:text-blue-700 underline transition-colors duration-300">
                        Privacy Policy
                    </a>.
                </p>

            </div>

        </div>
    </section>

    {{-- Optional: Success/Error Messages --}}
    @if (session('newsletter_success'))
        <div class="fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                {{ session('newsletter_success') }}
            </div>
        </div>
    @endif

    @if (session('newsletter_error'))
        <div class="fixed top-4 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg z-50">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
                {{ session('newsletter_error') }}
            </div>
        </div>
    @endif

    {{-- Auto-hide success/error messages --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const messages = document.querySelectorAll('.fixed.top-4.right-4');
            messages.forEach(function(message) {
                setTimeout(function() {
                    message.style.opacity = '0';
                    setTimeout(function() {
                        message.remove();
                    }, 300);
                }, 5000);
            });
        });
    </script>

</x-superduper.main>
