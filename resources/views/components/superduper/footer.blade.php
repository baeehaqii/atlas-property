@php
    use Datlechin\FilamentMenuBuilder\Models\Menu;
    $mainMenu = Menu::where('name', 'main')->first();
    $items = $mainMenu ? $mainMenu->menuItems()->orderBy('order')->get() : [];
@endphp
<footer class="bg-[#042849] text-gray-300 rounded-t-2xl mt-12">
    <div class="container mx-auto px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
            <!-- Logo & Address -->
            <div class="md:col-span-4">
                <div>
                    <a href="{{ route('home') }}" class="relative z-10 flex-shrink-0">
                        <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/v1756831080/logoAtlas_uojdux.png"
                            alt="Atlas Property" class="w-auto h-10 md:h-12" />
                    </a>
                </div>
                <p class="text-sm">
                    Jl. Jend. Sudirman No.5-7, Purwokerto, <br>
                    Kabupaten Banyumas, Jawa Tengah 53116 <br>
                    Indonesia
                </p>
                <p class="mt-4 text-sm">6285169934058</p>
                <p class="text-sm">info@atlasproperty.co.id</p>
            </div>

            <!-- Navigation Links -->
            <div class="md:col-span-2">
                <h3 class="font-bold text-white mb-4">Navigasi</h3>
                <ul class="space-y-2 text-sm">
                    @foreach ($items as $item)
                        <li>
                            <a href="{{ $item->url }}" class="hover:text-white">{{ $item->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="md:col-span-2">
                <h3 class="font-bold text-white mb-4">Partner</h3>
                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="#" class="hover:text-white">Mandiri</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-white">BNI</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-white">BRI</a>
                    </li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="md:col-span-4 md:col-start-9">
                <h3 class="font-bold text-white mb-4">Daftar untuk Info Terbaru</h3>
                <form action="#" method="POST">
                    <div class="relative">
                        <input type="email" placeholder="Alamat email Anda"
                            class="w-full bg-gray-800 text-white rounded-full py-3 px-5 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-[#DDC692]">
                        <button type="submit"
                            class="absolute right-1 top-1/2 -translate-y-1/2 bg-[#DDC692] rounded-full p-2">
                            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div
            class="border-t border-[#DDC692] mt-12 pt-8 flex flex-col md:flex-row justify-between items-center text-sm">
            <p class="text-gray-400 mb-4 md:mb-0">Copyright &copy; 2025 Atlas Properties. All rights reserved.</p>
            <div class="flex space-x-4">
                <a href="#" class="text-gray-400 hover:text-white">
                    <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/v1756787443/whatsapp_be9fcu.png"
                        alt="WhatsApp" class="w-5 h-5" />
                </a>
                <a href="#" class="text-gray-400 hover:text-white">
                    <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/v1756837212/tik-tok_h3g44t.png"
                        alt="TikTok" class="w-5 h-5" />
                </a>
                <a href="#" class="text-gray-400 hover:text-white">
                    <img src="https://res.cloudinary.com/dtt9ajgi3/image/upload/v1756837212/instagram_tfwnwo.png"
                        alt="Instagram" class="w-5 h-5" />
                </a>
            </div>
        </div>
    </div>
</footer>
