<x-superduper.main>
    <section class="py-24 bg-white min-h-screen flex flex-col items-center justify-center">
        <div class="max-w-xl mx-auto px-4 text-center">
            <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/v1757606648/Screenshot_11-9-2025_23333_dribbble.com_b1evsy.jpg" alt="404" class="w-full max-w-xs mx-auto mb-8 rounded-3xl sobject-cover">
            <h3 class="text-1xl sm:text-4xl lg:text-3xl font-bold text-gray-900 mb-4">
                maaf {{ $title ?? 'halaman' }} sedang disiapkan
            </h3>
            <p class="text-gray-600 text-lg mb-8">
                Halaman yang Anda cari belum tersedia atau sedang dalam proses pengembangan. Silakan cek secara berkala, terimakasih.
            </p>
            <a href="{{ route('home') }}" class="inline-block bg-[#B19244] text-white font-semibold px-6 py-3 rounded-full hover:bg-[#a18136] border-2 border-black transition-colors duration-300">
                Kembali ke Beranda
            </a>
        </div>
    </section>
</x-superduper.main>