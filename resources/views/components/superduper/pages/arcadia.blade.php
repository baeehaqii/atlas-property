@section('title', 'Atlas Arcadia')

<x-superduper.main>
    <div class="relative min-h-screen bg-gradient-to-br from-amber-50 to-stone-100 overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/v1755847807/arcadia-1_u7guoe.jpg" alt="Arcadia Architecture"
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
                <!-- Top Label -->
                <div class="mb-6">
                    <p class="text-base md:text-lg font-light tracking-wider text-white/80 mb-4">
                        Investasi Properti Mudah & Menguntungkan<br>
                        Pertama Di Purwokerto
                    </p>
                </div>

                <!-- Brand Name with ATLAS smaller -->
                <div class="mb-8">
                    <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756523674/arcadia_b1lxcj.png"
                        alt="Arcadia" class="mx-auto w-full max-w-xl h-auto">
                </div>

                <!-- Description -->
                <div class="mb-12">
                    <p class="text-lg md:text-xl text-white/90 mb-8 max-w-3xl mx-auto leading-relaxed font-light">
                        Kesempatan investasi di Rukos pertama di Purwokerto dengan pengelolaan
                        kawasan secara penuh - pemasukan bulanan, dekat dengan kampus, fasilitas &
                        kawasan terlengkap, dengan model transparan.
                    </p>
                </div>

                <!-- Feature Pills -->
                <div class="flex flex-wrap justify-center gap-4 mb-12">
                    <div
                        class="relative z-10 hidden rounded-full border-2 border-black bg-[#DDC692] px-6 py-2 text-sm font-semibold text-black transition-all duration-300 hover:bg-[#C9B480] sm:inline-block">
                        <span class="text-black text-sm font-medium">Investasi Bebas Resiko</span>
                    </div>
                    <div
                        class="relative z-10 hidden rounded-full border-2 border-black bg-[#DDC692] px-6 py-2 text-sm font-semibold text-black transition-all duration-300 hover:bg-[#C9B480] sm:inline-block">
                        <span class="text-black text-sm font-medium">Fasilitas Terlengkap</span>
                    </div>
                    <div
                        class="relative z-10 hidden rounded-full border-2 border-black bg-[#DDC692] px-6 py-2 text-sm font-semibold text-black transition-all duration-300 hover:bg-[#C9B480] sm:inline-block">
                        <span class="text-black text-sm font-medium">Pengelolaan Kawasan</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Info Bar -->
        {{-- <div class="absolute bottom-0 left-0 right-0 z-20">
            <div class="bg-gradient-to-r from-stone-800 to-stone-900 bg-opacity-90 backdrop-blur-sm">
                <div class="container mx-auto px-6 py-6">
                    <div class="flex flex-col md:flex-row justify-between items-center text-white">
                        <div class="mb-4 md:mb-0">
                            <h3 class="text-xl font-light text-[#B19244]">Arcadia Atlas Property</h3>
                            <p class="text-sm text-gray-300">Premium Residential Development</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm text-gray-300">Jl. Ledug Raya, Purwokerto, Jawa Tengah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    <!-- City Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <!-- Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Purwokerto <br>Hidden Gem Jawa Tengah
                </h2>
            </div>

            <!-- Grid Layout for 3 Instagram Reels Embeds -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">

                <!-- Reel 1: Sorotan Publik Figur -->
                <div class="text-center">
                    <div class="aspect-[9/16] rounded-2xl overflow-hidden shadow-lg mb-6">
                        <iframe src="https://www.instagram.com/reel/embed/PLACEHOLDER1/" width="100%" height="100%"
                            frameborder="0" scrolling="no" allowtransparency="true" allow="encrypted-media">
                        </iframe>
                    </div>
                    <h3 class="font-bold text-xl text-gray-900 mb-2">Menjadi Sorotan</h3>
                    <p class="text-gray-600 text-base">Publik Figur Indonesia</p>
                </div>

                <!-- Reel 2: Pelajar -->
                <div class="text-center">
                    <div class="aspect-[9/16] rounded-2xl overflow-hidden shadow-lg mb-6">
                        <iframe src="https://www.instagram.com/reel/embed/PLACEHOLDER2/" width="100%" height="100%"
                            frameborder="0" scrolling="no" allowtransparency="true" allow="encrypted-media">
                        </iframe>
                    </div>
                    <h3 class="font-bold text-xl text-gray-900 mb-2">Memiliki 25.000</h3>
                    <p class="text-gray-600 text-base">Pelajar Setiap Tahun</p>
                </div>

                <!-- Reel 3: Transportasi -->
                <div class="text-center">
                    <div class="aspect-[9/16] rounded-2xl overflow-hidden shadow-lg mb-6">
                        <iframe src="https://www.instagram.com/reel/embed/PLACEHOLDER3/" width="100%" height="100%"
                            frameborder="0" scrolling="no" allowtransparency="true" allow="encrypted-media">
                        </iframe>
                    </div>
                    <h3 class="font-bold text-xl text-gray-900 mb-2">Menjadi Titik</h3>
                    <p class="text-gray-600 text-base">Kereta Lajur Cepat</p>
                </div>

            </div>
        </div>
    </section>
    <section class="bg-[#ab8b66] relative flex items-center justify-center p-8 sm:p-12 lg:p-16 xl:p-20"
        style="background-image: url('https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756522516/pattern_arcadia_d6fv7s.png'); background-size: 1920px 1080px; background-repeat: repeat;">
        <div class="absolute inset-0 bg-[#1b1a19]/10"></div>

        <div class="container mx-auto px-4 relative z-10">

            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    Besarnya Kesempatan,
                </h2>
                <p class="text-2xl md:text-3xl font-bold text-white/90">
                    Minimnya Hunian Strategis
                </p>
            </div>
            <div class="text-center mt-12">
                <button
                    class="inline-block bg-[#DDC692] hover:bg-[#C9B480] text-black px-8 py-4 text-lg font-semibold tracking-wide rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl border-2 border-black">
                    Mulai Berinvestasi Sekarang
                </button>
            </div>
    </section>

    <!-- Investment Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <!-- Main Investment Hero -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Memulai Investasi Properti <br> di Purwokerto
                </h2>
            </div>

            <!-- Investment Overview with Image -->
            <div class="bg-white rounded-2xl overflow-hidden mb-16">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <!-- Left - Image -->
                    <div class="p-8">
                        <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/v1755847807/arcadia-1_u7guoe.jpg" alt="Atlas Arcadia Property Investment"
                            class="w-full h-auto rounded-lg">
                    </div>

                    <!-- Right - Content -->
                    <div class="p-8">
                        <div class="text-center lg:text-left">
                            <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/v1756663475/logo-arcadia-coklat_geygf6.png"
                                alt="Arcadia" class="mb-6 w-90 h-20 max-w-sm md:max-w-md mx-auto lg:mx-0">

                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Atlas Arcadia menghadirkan kompleks kost mahasiswa dengan fasilitas terintegrasi:
                                laundry, food corner, Wi-Fi, keamanan, parkir, hingga pengelola on-site.
                            </p>

                            <p class="text-gray-600 leading-relaxed">
                                Desain modern menarik bagi student renters— membuat okupansi lebih stabil dan tarif sewa
                                lebih kuat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Investment Benefits Title -->
            <div class="text-center mb-12">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Investasi Rukost Bebas Resiko <br> Pertama di Purwokerto
                </h3>
            </div>

            <!-- Investment Benefits Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="bg-white rounded-xl border-2 border-[#D3C19C] p-6 text-left shadow-lg">
                    <div class="bg-[#D3C19C] rounded-t-xl -mt-6 -mx-6 mb-4 p-4 text-center">
                        <h4 class="text-lg font-bold text-gray-800">Garansi 7% Per Tahun</h4>
                    </div>
                    <ul class="text-left text-gray-700 space-y-2 text-lg">
                        <li>• Min. per Bulan 9jt</li>
                        <li>• Kenaikan harga property 5% pertahun</li>
                        <li>• Blablabla</li>
                    </ul>
                </div>

                <div class="bg-white rounded-xl border-2 border-[#D3C19C] p-6 text-left shadow-lg">
                    <div class="bg-[#D3C19C] rounded-t-xl -mt-6 -mx-6 mb-4 p-4 text-center">
                        <h4 class="text-lg font-bold text-gray-800">Fasilitas Terlengkap</h4>
                        <p class="text-base font-semibold text-gray-700"></p>
                    </div>
                    <ul class="text-left text-gray-700 space-y-2 text-lg">
                        <li>• CCTV</li>
                        <li>• Blablabla</li>
                        <li>• Parkira</li>
                        <li>• One gate system</li>
                    </ul>
                </div>

                <div class="bg-white rounded-xl border-2 border-[#D3C19C] p-6 text-left shadow-lg">
                    <div class="bg-[#D3C19C] rounded-t-xl -mt-6 -mx-6 mb-4 p-4 text-center">
                        <h4 class="text-lg font-bold text-gray-800">Lokasi Strategis</h4>
                        <p class="text-base font-semibold text-gray-700"></p>
                    </div>
                    <ul class="text-left text-gray-700 space-y-2 text-lg">
                        <li>• 5 menit dari UMP</li>
                        <li>• 12 Menit dari Unsoed</li>
                        <li>• etc etc</li>
                    </ul>
                </div>

                <div class="bg-white rounded-xl border-2 border-[#D3C19C] p-6 text-left shadow-lg">
                    <div class="bg-[#D3C19C] rounded-t-xl -mt-6 -mx-6 mb-4 p-4 text-center">
                        <h4 class="text-lg font-bold text-gray-800">Konsep Hunian Modern</h4>
                    </div>
                    <ul class="text-left text-gray-700 space-y-2 text-lg">
                        <li>• Property management</li>
                        <li>• Konsep minimalis modern</li>
                        <li>• Blabla</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#ab8b66] relative flex items-center justify-center p-8 sm:p-12 lg:p-16 xl:p-20"
        style="background-image: url('https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756522516/pattern_arcadia_d6fv7s.png'); background-size: 1920px 1080px; background-repeat: repeat;">
        <div class="absolute inset-0 bg-[#1b1a19]/10"></div>

        <div class="container mx-auto px-4 relative z-10">

            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    Miliki Investasi Rukost
                </h2>
                <p class="text-2xl md:text-3xl font-bold text-white/90">
                    Rendah Resiko
                </p>
            </div>
            <div class="text-center mt-12">
                <button
                    class="inline-block bg-[#DDC692] hover:bg-[#C9B480] text-black px-8 py-4 text-lg font-semibold tracking-wide rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl border-2 border-black">
                    Mulai Berinvestasi Sekarang
                </button>
            </div>
    </section>

    <!-- Comparison Section -->
    <section class="py-16 lg:py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Pengelolaan Properti Tanpa Ribet
                </h2>
            </div>

            <div class="max-w-6xl mx-auto">
                <div class="border border-gray-300 rounded-2xl overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm">
                            <thead class="bg-[#D3C19C]">
                                <tr>
                                    <th scope="col"
                                        class="p-6 text-center text-xl md:text-2xl font-bold text-gray-800">
                                        <div class="font-3xl">Tanpa Estate Management</div>
                                    </th>
                                    <th scope="col"
                                        class="p-6 text-center text-xl md:text-2xl font-bold text-gray-800">
                                        <div class="font-3xl">Dengan Estate Management</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr class="bg-white">
                                    <td class="p-6 border-r border-gray-200">
                                        <div class="flex items-start">
                                            <span class="text-red-500 font-bold text-2xl mr-3 mt-[-2px]">✗</span>
                                            <div>
                                                <h4 class="font-bold text-lg text-gray-900 mb-1">Okupansi</h4>
                                                <p class="text-gray-600">Cari penyewa sendiri; listing lambat, masa
                                                    kosong panjang.</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-6">
                                        <div class="flex items-start">
                                            <span class="text-green-500 font-bold text-2xl mr-3 mt-[-2px]">✓</span>
                                            <div>
                                                <h4 class="font-bold text-lg text-gray-900 mb-1">Okupansi</h4>
                                                <p class="text-gray-600">Kami bantu cari; listing lebih cepat, masa
                                                    kosong singkat.</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="bg-white">
                                    <td class="p-6 border-r border-gray-200">
                                        <div class="flex items-start">
                                            <span class="text-red-500 font-bold text-2xl mr-3 mt-[-2px]">✗</span>
                                            <div>
                                                <h4 class="font-bold text-lg text-gray-900 mb-1">Penagihan Bulanan</h4>
                                                <p class="text-gray-600">Harus follow-up sendiri; rawan telat & salah
                                                    catat.</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-6">
                                        <div class="flex items-start">
                                            <span class="text-green-500 font-bold text-2xl mr-3 mt-[-2px]">✓</span>
                                            <div>
                                                <h4 class="font-bold text-lg text-gray-900 mb-1">Penagihan Bulanan</h4>
                                                <p class="text-gray-600">Penagihan terjadwal & tercatat; Anda tidak
                                                    perlu hadir!</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="bg-white">
                                    <td class="p-6 border-r border-gray-200">
                                        <div class="flex items-start">
                                            <span class="text-red-500 font-bold text-2xl mr-3 mt-[-2px]">✗</span>
                                            <div>
                                                <h4 class="font-bold text-lg text-gray-900 mb-1">Perawatan Bangunan
                                                </h4>
                                                <p class="text-gray-600">Menjadi biaya dadakan untuk Anda, urus
                                                    teknisi.</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-6">
                                        <div class="flex items-start">
                                            <span class="text-green-500 font-bold text-2xl mr-3 mt-[-2px]">✓</span>
                                            <div>
                                                <h4 class="font-bold text-lg text-gray-900 mb-1">Perawatan Bangunan
                                                </h4>
                                                <p class="text-gray-600">Rutin terjadwal oleh kami, tanpa biaya
                                                    tambahan.</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="bg-white">
                                    <td class="p-6 border-r border-gray-200">
                                        <div class="flex items-start">
                                            <span class="text-red-500 font-bold text-2xl mr-3 mt-[-2px]">✗</span>
                                            <div>
                                                <h4 class="font-bold text-lg text-gray-900 mb-1">Laporan Keuangan</h4>
                                                <p class="text-gray-600">Catat sendiri di spreadsheet; repot & tidak
                                                    rapi.</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-6">
                                        <div class="flex items-start">
                                            <span class="text-green-500 font-bold text-2xl mr-3 mt-[-2px]">✓</span>
                                            <div>
                                                <h4 class="font-bold text-lg text-gray-900 mb-1">Laporan Keuangan</h4>
                                                <p class="text-gray-600">Disediakan laporan bulanan.</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="bg-white">
                                    <td class="p-6 border-r border-gray-200">
                                        <div class="flex items-start">
                                            <span class="text-red-500 font-bold text-2xl mr-3 mt-[-2px]">✗</span>
                                            <div>
                                                <h4 class="font-bold text-lg text-gray-900 mb-1">Taat Lingkungan</h4>
                                                <p class="text-gray-600">Aturan sulit ditegakkan, risiko komplain
                                                    tinggi.</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-6">
                                        <div class="flex items-start">
                                            <span class="text-green-500 font-bold text-2xl mr-3 mt-[-2px]">✓</span>
                                            <div>
                                                <h4 class="font-bold text-lg text-gray-900 mb-1">Taat Lingkungan</h4>
                                                <p class="text-gray-600">Screening, penegakan & sanksi oleh manajemen.
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Arcadia Section -->
    <section class="py-0">
        <div class="grid grid-cols-1 lg:grid-cols-2 min-h-[600px] lg:min-h-[700px]">

            {{-- Left Column - Content with Brown Background --}}
            <div class="bg-[#ab8b66] relative flex items-center justify-center p-8 sm:p-12 lg:p-16 xl:p-20"
                style="background-image: url('https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756522516/pattern_arcadia_d6fv7s.png'); background-size: 1920px 1080px; background-repeat: repeat;">
                <div class="absolute inset-0 bg-[#1b1a19]/10"></div> {{-- tambahkan transparansi (70%) --}}
                <div class="max-w-lg relative z-10">
                    <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/v1756523674/arcadia_b1lxcj.png"
                        alt="Arcadia" class="mb-6 w-full h-auto max-w-sm md:max-w-md mx-auto lg:mx-0">

                    <p class="text-white/90 text-base lg:text-lg xl:text-xl leading-relaxed mb-6 lg:mb-8 font-light">
                        Atlas Arcadia adalah sebuah properti yang mengusung konsep hunian modern dengan sentuhan
                        arsitektur yang elegan dan fungsional.
                    </p>

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
                <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/v1755847807/arcadia-1_u7guoe.jpg"
                    alt="Modern residential complex showcasing architectural excellence"
                    class="w-full h-full object-cover">

                {{-- Optional: Subtle overlay for better contrast if needed --}}
                <div class="absolute inset-0 bg-black/5"></div>
            </div>

        </div>
    </section>

    <section class="py-16 lg:py-20 bg-white">
        <div x-data="{ showModal: false, modalImage: '' }" class="container mx-auto px-4">

            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Konsep Rukost Modern Minimalis
                </h2>
                <p class="text-lg text-gray-600">
                    Di Purwokerto
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">

                {{-- Ulangi blok ini untuk setiap gambar. Ganti path gambar sesuai kebutuhan. --}}
                <div class="group">
                    <a href="#"
                        @click.prevent="showModal = true; modalImage = '{{ asset('storage/sites/arcadia-1.jpg') }}'"
                        class="block w-full h-full rounded-2xl overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
                        <img src="{{ asset('storage/sites/arcadia-1.jpg') }}" alt="Konsep Rukost Modern Minimalis 1"
                            class="w-full h-full object-cover">
                    </a>
                </div>

                <div class="group">
                    <a href="#"
                        @click.prevent="showModal = true; modalImage = '{{ asset('storage/sites/arcadia-1.jpg') }}'"
                        class="block w-full h-full rounded-2xl overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
                        <img src="{{ asset('storage/sites/arcadia-1.jpg') }}" alt="Konsep Rukost Modern Minimalis 2"
                            class="w-full h-full object-cover">
                    </a>
                </div>

                <div class="group">
                    <a href="#"
                        @click.prevent="showModal = true; modalImage = '{{ asset('storage/sites/arcadia-1.jpg') }}'"
                        class="block w-full h-full rounded-2xl overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
                        <img src="{{ asset('storage/sites/arcadia-1.jpg') }}" alt="Konsep Rukost Modern Minimalis 3"
                            class="w-full h-full object-cover">
                    </a>
                </div>

                <div class="group">
                    <a href="#"
                        @click.prevent="showModal = true; modalImage = '{{ asset('storage/sites/arcadia-1.jpg') }}'"
                        class="block w-full h-full rounded-2xl overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
                        <img src="{{ asset('storage/sites/arcadia-1.jpg') }}" alt="Konsep Rukost Modern Minimalis 4"
                            class="w-full h-full object-cover">
                    </a>
                </div>

                <div class="group">
                    <a href="#"
                        @click.prevent="showModal = true; modalImage = '{{ asset('storage/sites/arcadia-1.jpg') }}'"
                        class="block w-full h-full rounded-2xl overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
                        <img src="{{ asset('storage/sites/arcadia-1.jpg') }}" alt="Konsep Rukost Modern Minimalis 5"
                            class="w-full h-full object-cover">
                    </a>
                </div>

                <div class="group">
                    <a href="#"
                        @click.prevent="showModal = true; modalImage = '{{ asset('storage/sites/arcadia-1.jpg') }}'"
                        class="block w-full h-full rounded-2xl overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
                        <img src="{{ asset('storage/sites/arcadia-1.jpg') }}" alt="Konsep Rukost Modern Minimalis 6"
                            class="w-full h-full object-cover">
                    </a>
                </div>

            </div>

            <div x-show="showModal" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-75 p-4"
                style="display: none;">

                <div @click.away="showModal = false" class="relative max-w-4xl max-h-[90vh] mx-auto">
                    <img :src="modalImage" alt="Image Preview"
                        class="w-full h-auto object-contain max-h-[90vh] rounded-lg">

                    <button @click="showModal = false"
                        class="absolute -top-4 -right-4 md:-top-6 md:-right-6 w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-800 hover:bg-gray-200 transition-colors duration-300 shadow-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </section>

    <section class="py-16 lg:py-20 bg-gray-50">
        <div class="container mx-auto px-4">

            <div class="text-center mb-12 lg:mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Hunian Rukost Modern Pertama
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Aman, Nyaman, dan Tinggi Peminat
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center max-w-7xl mx-auto">

                <div class="w-full flex justify-center">
                    <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/v1755847805/Denah-Arcadia_mvjo2g.jpg"
                        alt="Denah Unit Rukost Arcadia" class="w-full max-w-2xl h-auto rounded-lg shadow-lg">
                </div>

                <div class="w-full">
                    <h3 class="text-3xl font-bold text-gray-800 mb-8">
                        Detail Setiap Unit
                    </h3>

                    <div class="grid grid-cols-2 gap-x-8 gap-y-6 mb-10">

                        <div class="flex items-center gap-4">
                            <div class="bg-amber-100 text-amber-700 p-3 rounded-lg">
                                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 12l.75 8.25A2.25 2.25 0 005.25 22.5h13.5a2.25 2.25 0 002.25-2.25l.75-8.25M2.25 12V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121.75 7.5v4.5m-19.5 0h19.5" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">6 Kamar Tidur</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="bg-amber-100 text-amber-700 p-3 rounded-lg">
                                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.125-.504 1.125-1.125V14.25m-17.25 4.5h10.5m-10.5-4.5v-4.5c0-.92.75-1.668 1.668-1.668h12.164c.918 0 1.668.748 1.668 1.668v4.5" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Carport</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="bg-amber-100 text-amber-700 p-3 rounded-lg">
                                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 12.75v-2.625c0-1.581 1.294-2.875 2.875-2.875h13.5c1.581 0 2.875 1.294 2.875 2.875v2.625m-19.5 0A2.625 2.625 0 004.875 15h14.25a2.625 2.625 0 002.625-2.25m-19.5 0v-2.625c0-1.581 1.294-2.875 2.875-2.875h13.5c1.581 0 2.875 1.294 2.875 2.875v2.625" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">6 Kamar Mandi</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="bg-amber-100 text-amber-700 p-3 rounded-lg">
                                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6.75a5.25 5.25 0 016.384 4.522l.433 2.596a.375.375 0 01-.365.456H5.548a.375.375 0 01-.365-.456l.433-2.596A5.25 5.25 0 0112 6.75z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 14.25v6.75" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 16.5H8.25" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Pantry</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="bg-amber-100 text-amber-700 p-3 rounded-lg">
                                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h7.5" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">LB: 105 m<sup class="text-xs">2</sup></p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="bg-amber-100 text-amber-700 p-3 rounded-lg">
                                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 7.5l-2.25-1.313M21 7.5v2.25m0-2.25l-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3l2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75v-1.5M12 21.75H9.75m1.125-1.125l-2.25-1.313M18.75 16.5l-2.25-1.313M18.75 16.5V19.5m0-3l-2.25 1.313M5.25 16.5l2.25-1.313M5.25 16.5V19.5m0-3l2.25 1.313M12 12.75v-1.5m0 0l-2.25-1.313M12 11.25l2.25-1.313" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">LT: 72 m<sup class="text-xs">2</sup></p>
                            </div>
                        </div>
                    </div>

                    <div class="border-2 border-gray-800 rounded-lg p-6 text-center bg-white shadow-sm">
                        <p class="text-gray-600 tracking-wider text-sm mb-1">SEMUA UNIT</p>
                        <p class="text-2xl font-bold text-gray-900 tracking-wide">FULL FURNISH</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#ab8b66] relative flex items-center justify-center p-8 sm:p-12 lg:p-16 xl:p-20"
        style="background-image: url('https://res.cloudinary.com/dtt9ajgi3/image/upload/q_30/v1756522516/pattern_arcadia_d6fv7s.png'); background-size: 1920px 1080px; background-repeat: repeat;">
        <div class="absolute inset-0 bg-[#1b1a19]/10"></div>

        <div class="container mx-auto px-4 relative z-10">

            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    Simulasikan Pendapatan
                </h2>
                <p class="text-2xl md:text-3xl font-bold text-white/90">
                    Anda Sekarang
                </p>
            </div>
            <div class="text-center mt-12">
                <button
                    class="inline-block bg-[#DDC692] hover:bg-[#C9B480] text-black px-8 py-4 text-lg font-semibold tracking-wide rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl border-2 border-black">
                    Hubungi Kami Segera
                </button>
            </div>
    </section>

    <section class="py-16 lg:py-20" style="background-color: #E8E1D4;">
        <div class="container mx-auto px-4">

            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900">
                    Fasilitas Terlengkap
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 max-w-5xl mx-auto">

                <div
                    class="bg-white border-2 border-black rounded-lg aspect-square flex items-center justify-center p-4 text-center">
                    <span class="text-xl font-semibold text-gray-800">
                        Club House
                    </span>
                </div>

                <div
                    class="bg-white border-2 border-black rounded-lg aspect-square flex items-center justify-center p-4 text-center">
                    <span class="text-xl font-semibold text-gray-800">
                        One Gate System
                    </span>
                </div>

                <div
                    class="bg-white border-2 border-black rounded-lg aspect-square flex items-center justify-center p-4 text-center">
                    <span class="text-xl font-semibold text-gray-800">
                        Laundry
                    </span>
                </div>

                <div
                    class="bg-white border-2 border-black rounded-lg aspect-square flex items-center justify-center p-4 text-center">
                    <span class="text-xl font-semibold text-gray-800">
                        Gym
                    </span>
                </div>

            </div>

        </div>
    </section>

    <section class="py-16 lg:py-20 bg-white">
        <div class="container mx-auto px-4">

            <div class="text-center mb-12 lg:mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900">
                    Lokasi Strategis
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center max-w-7xl mx-auto">

                <div class="w-full flex justify-center lg:justify-end">
                    <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/v1756666077/image_32_oj7wxi.png"
                        alt="Peta Lokasi Strategis Atlas Arcadia"
                        class="rounded-lg max-w-md w-full h-auto object-contain">
                </div>

                <div class="space-y-8">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Universitas</h3>
                        <ul class="list-disc list-inside text-gray-600 space-y-2">
                            <li>5 Menit ke UMP (Muhammadiyah Purwokerto)</li>
                            <li>7 Menit ke Fakultas Kedokteran UNSOED</li>
                            <li>7 Menit ke Universitas Harapan Bangsa</li>
                            <li>10 Menit ke Universitas Telkom</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Rumah Sakit</h3>
                        <ul class="list-disc list-inside text-gray-600 space-y-2">
                            <li>6 Menit ke RSUD Margono</li>
                            <li>7 Menit ke RS Orthopedi Purwokerto</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Pusat Niaga</h3>
                        <ul class="list-disc list-inside text-gray-600 space-y-2">
                            <li>5 Menit ke Hanna Meatshop</li>
                            <li>12 Menit ke Rita Mall</li>
                            <li>12 Menit ke Alun Alun Purwokerto</li>
                            <li>13 Menit ke Bank Mandiri Pusat Banyumas</li>
                            <li>13 Menit ke BSI Pusat Banyumas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- siteplan --}}
    {{-- <section class="bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="bg-[#B19244] flex items-center justify-center p-8 sm:p-12 lg:p-16 xl:p-20">
                <div class="max-w-lg">
                    <h2
                        class="text-white font-serif font-bold text-6xl sm:text-5xl lg:text-6xl xl:text-7xl leading-tight mb-8 lg:mb-12">
                        Denah Arcadia
                    </h2>
                    <p class="text-white/90 text-base lg:text-lg xl:text-xl leading-relaxed mb-6 lg:mb-8 font-light">
                        "Excellence" is a term rooted in superior quality and outstanding performance, symbolizing a
                        commitment to the highest standards, precision, and exceptional service delivery.
                    </p>
                    <p class="text-white/90 text-base lg:text-lg xl:text-xl leading-relaxed font-light">
                        Wonder Real Estate, developed under the Wonder Group, is more than just a property management
                        company, it is a vision of exceptional service and unparalleled expertise.
                    </p>
                </div>
            </div>
            <div class="relative overflow-hidden min-h-[400px] lg:min-h-[600px]">
                <img src="{{ asset('storage/sites/arcadia-1.jpg') }}" alt="Arcadia Siteplan"
                    class="w-full h-full object-cover">
                <img src="{{ asset('storage/sites/arcadia-1.jpg') }}" alt="Arcadia Siteplan Placeholder"
                    class="w-full h-full object-cover absolute inset-0 -z-10" onerror="this.style.display='none'">
            </div>
        </div>
    </section> --}}



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
    {{-- <section class="bg-white py-20 md:py-24">
        <div class="container mx-auto px-4">
            <div class="bg-white rounded-2xl overflow-hidden">
                <div class="p-8 md:p-12 flex justify-center">
                    <div class="text-center max-w-4xl">
                        <img src="{{ asset('storage/sites/Denah-Arcadia.jpeg') }}" alt="Denah Lantai 1"
                            class="w-full h-auto rounded-lg border border-gray-200">
                        <p class="mt-3 text-sm font-semibold text-gray-500 tracking-wider">1st Floor</p>
                    </div>
                </div>
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
    </section> --}}

    {{-- <section class="bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="bg-[#B19244] flex items-center justify-center p-8 sm:p-12 lg:p-16 xl:p-20">
                <div class="max-w-lg">
                    <h2
                        class="text-white font-serif font-bold text-6xl sm:text-5xl lg:text-6xl xl:text-7xl leading-tight mb-8 lg:mb-12">
                        Siteplan Arcadia
                    </h2>

                    <p class="text-white/90 text-base lg:text-lg xl:text-xl leading-relaxed mb-6 lg:mb-8 font-light">
                        "Excellence" is a term rooted in superior quality and outstanding performance, symbolizing a
                        commitment to the highest standards, precision, and exceptional service delivery.
                    </p>
                    <p class="text-white/90 text-base lg:text-lg xl:text-xl leading-relaxed font-light">
                        Wonder Real Estate, developed under the Wonder Group, is more than just a property management
                        company, it is a vision of exceptional service and unparalleled expertise.
                    </p>
                </div>
            </div>

            <div class="relative overflow-hidden min-h-[400px] lg:min-h-[600px]">
                <img src="{{ asset('storage/sites/arcadia-siteplan.jpg') }}" alt="Arcadia Siteplan"
                    class="w-full h-full object-cover">
                <img src="https://placehold.co/800x600/e2e8f0/4a5568?text=Siteplan+Image"
                    alt="Arcadia Siteplan Placeholder" class="w-full h-full object-cover absolute inset-0 -z-10"
                    onerror="this.style.display='none'">
            </div>

        </div>
    </section> --}}

    <!-- CTA Section -->
    {{-- <section class="py-16 lg:py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">

            <div
                class="bg-gradient-to-r from-primary-200 via-primary-50 to-[#b1924481] rounded-[3rem] p-8 sm:p-12 lg:p-16 text-center">

                <h2
                    class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold text-gray-900 leading-tight mb-6 lg:mb-8">
                    Dapatkan Promo Terbaru
                </h2>

                <p class="text-gray-600 text-lg lg:text-xl leading-relaxed max-w-4xl mx-auto mb-8 lg:mb-12">
                    Daftar untuk newsletter kami agar tetap mendapatkan informasi tentang berita terbaru, pembaruan, dan
                    penawaran eksklusif dari Wonder Real Estate. Dengan berlangganan, Anda akan menerima email reguler
                    yang menampilkan sorotan proyek, wawasan industri, dan tips untuk kebutuhan manajemen properti Anda.
                </p>

                <form action="#" method="POST" class="max-w-2xl mx-auto mb-6">
                    @csrf
                    <div class="flex flex-col sm:flex-row gap-4 sm:gap-0">
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

                        <button type="submit"
                            class="bg-primary-900 hover:bg-[#B19244] text-white font-semibold px-8 py-4 rounded-full sm:rounded-l-none transition-colors duration-300 text-base lg:text-lg shadow-sm hover:shadow-md transform hover:scale-105 sm:hover:scale-100">
                            Subscribe
                        </button>
                    </div>
                </form>
                <p class="text-gray-500 text-sm lg:text-base">
                    We care about the protection of your data. Read our
                    <a href="#"
                        class="text-blue-600 hover:text-blue-700 underline transition-colors duration-300">
                        Privacy Policy
                    </a>.
                </p>

            </div>

        </div>
    </section> --}}

</x-superduper.main>

<script>
    $(document).ready(function() {
        $("#leftPaneButton").click(function() {
            $("#leftPane").animate({
                width: 0
            }, 1000);
            $("#rightPane").animate({
                width: "100%"
            }, 1000);
        });

        $("#rightPaneButton").click(function() {
            $("#leftPane").animate({
                width: "100%"
            }, 1000);
            $("#rightPane").animate({
                width: 0
            }, 1000);
        });
    });

    window.instgrm || (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://www.instagram.com/embed.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'instagram-wjs'));
</script>

