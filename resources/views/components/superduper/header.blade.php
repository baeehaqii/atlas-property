<header class="w-full border-b-2 border-black bg-white py-3">
    <div class="container-default mx-auto flex items-center justify-between gap-x-8 px-4">
        <!-- Header Logo -->
        <div>
            <a href="{{ route('home') }}" class="relative z-10 flex-shrink-0">
                @php
                    $brandLogo = $generalSettings->brand_logo ?? null;
                    $brandName = $generalSettings->brand_name ?? config('app.name', 'Atlas Property');
                @endphp

                @if ($brandLogo)
                    <img src="{{ Storage::url($brandLogo) }}" alt="{{ $brandName }}" class="h-10 w-auto md:h-12" />
                @else
                    <div class="flex items-center">
                        <span
                            class="text-xl font-bold text-black md:text-2xl">{{ $brandName }}</span>
                    </div>
                @endif
            </a>
        </div>

        <!-- Header Navigation -->
        <div class="menu-block-wrapper lg:static lg:z-[9998]">
            <div class="menu-overlay fixed inset-0 z-40 bg-primary-900/70 backdrop-blur-sm lg:hidden"
                style="display: none;"></div>
            <nav class="menu-block fixed bottom-0 right-0 top-0 z-50 w-[280px] transform overflow-y-auto shadow-2xl transition-transform duration-300 translate-x-full md:w-[320px] lg:static lg:w-auto lg:translate-x-0 lg:bg-transparent lg:shadow-none lg:overflow-visible"
    style="background-color: #042849;"
                id="append-menu-header">
                <!-- Mobile Menu Header -->
                <div class="flex items-center justify-between p-4 lg:hidden border-b border-white/20">
                    <div class="go-back flex items-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-5 w-5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 19l-7-7 7-7" />
                        </svg>
                        <span>Back</span>
                    </div>
                    <div class="current-menu-title font-medium text-white"></div>
                    <div class="mobile-menu-close cursor-pointer text-2xl text-white">&times;
                    </div>
                </div>

                @php
                    use Datlechin\FilamentMenuBuilder\Models\Menu;
                    $menu = Menu::location('header');
                @endphp

                <!-- Desktop Menu -->
                <ul class="site-menu-main hidden p-4 text-lg lg:flex lg:items-center lg:divide-x-2 lg:divide-black lg:p-0">
                    @if ($menu)
                        @foreach ($menu->menuItems as $index => $item)
                            @php
                                $hasChildren = count($item->children) > 0;
                                $menuId = 'submenu-' . ($index + 1);
                            @endphp

                            <li
                                class="nav-item mb-3 lg:relative lg:mb-0 {{ $hasChildren ? 'nav-item-has-children' : '' }}">
                                <a href="{{ $item->url }}"
                                    class="nav-link-item group flex items-center justify-between py-2 font-extrabold text-black transition-colors hover:text-primary-700 lg:px-6 {{ $hasChildren ? 'drop-trigger' : '' }}"
                                    @if ($item->target) target="{{ $item->target }}" @endif>
                                    <span>{{ $item->title }}</span>
                                    @if ($hasChildren)
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4 transition-transform group-hover:rotate-180 lg:h-5 lg:w-5 text-black group-hover:text-primary-700"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    @endif
                                </a>

                                @if ($hasChildren)
                                    <ul class="sub-menu mt-2 pl-4 lg:absolute lg:left-0 lg:top-full lg:mt-1 lg:min-w-[200px] lg:translate-y-2 lg:transform lg:rounded-md lg:bg-white lg:shadow-lg lg:opacity-0 lg:invisible lg:transition-all lg:z-[9999] lg:pl-0"
                                        id="{{ $menuId }}">
                                        @foreach ($item->children as $childIndex => $childItem)
                                            @php
                                                $hasGrandchildren = count($childItem->children) > 0;
                                                $submenuId = $menuId . '-' . ($childIndex + 1);
                                            @endphp

                                            <li
                                                class="sub-menu--item group/submenu mb-2 lg:relative lg:mb-0 {{ $hasGrandchildren ? 'nav-item-has-children' : '' }}">
                                                <a href="{{ $childItem->url }}"
                                                    class="drop-trigger flex items-center justify-between rounded px-3 py-2 text-black transition-colors hover:bg-gray-100 hover:text-primary-700"
                                                    @if ($childItem->target) target="{{ $childItem->target }}" @endif>
                                                    <span>{{ $childItem->title }}</span>
                                                    @if ($hasGrandchildren)
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4 text-black"
                                                            fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M9 5l7 7-7 7" />
                                                        </svg>
                                                    @endif
                                                </a>

                                                @if ($hasGrandchildren)
                                                    <ul class="sub-menu mt-2 pl-4 lg:absolute lg:left-full lg:top-0 lg:mt-0 lg:min-w-[200px] lg:translate-x-2 lg:transform lg:rounded-md lg:bg-white lg:shadow-lg lg:opacity-0 lg:invisible lg:transition-all lg:z-[9999] lg:pl-0"
                                                        id="{{ $submenuId }}">
                                                        @foreach ($childItem->children as $grandchildItem)
                                                            <li class="sub-menu--item mb-2 lg:mb-0">
                                                                <a href="{{ $grandchildItem->url }}"
                                                                    class="block rounded px-3 py-2 text-black transition-colors hover:bg-gray-100 hover:text-primary-700"
                                                                    @if ($grandchildItem->target) target="{{ $grandchildItem->target }}" @endif>
                                                                    {{ $grandchildItem->title }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    @endif
                </ul>
                
                <!-- Mobile Menu -->
                <ul class="site-menu-main block p-4 text-lg lg:hidden">
                    @if ($menu)
                        @foreach ($menu->menuItems as $index => $item)
                            @php
                                $hasChildren = count($item->children) > 0;
                                $menuId = 'mobile-submenu-' . ($index + 1);
                            @endphp
                            <li class="nav-item mb-3 {{ $hasChildren ? 'nav-item-has-children' : '' }}">
                                <a href="{{ $item->url }}"
                                    class="nav-link-item flex items-center justify-between rounded-lg py-3 px-4 font-extrabold text-white transition-colors hover:bg-white/10 hover:text-[#DDC692] {{ $hasChildren ? 'drop-trigger' : '' }}"
                                    @if ($item->target) target="{{ $item->target }}" @endif>
                                    <span>{{ $item->title }}</span>
                                    @if ($hasChildren)
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    @endif
                                </a>
                                @if ($hasChildren)
                                    <ul class="sub-menu mt-2 pl-4 bg-white/5 rounded-xl" id="{{ $menuId }}">
                                        @foreach ($item->children as $childItem)
                                            <li class="sub-menu--item mb-2">
                                                <a href="{{ $childItem->url }}" 
                                                   class="block rounded px-3 py-2 text-white/80 transition-colors hover:bg-white/10 hover:text-white" 
                                                   @if ($childItem->target) target="{{ $childItem->target }}" @endif>
                                                    {{ $childItem->title }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    @endif
                </ul>
            </nav>
        </div>

        <!-- Header Action Button -->
        <div class="flex items-center gap-4 md:gap-6">
            <!-- Desktop Button -->
            <a href="https://wa.me/6285169934058" class="relative z-10 hidden rounded-full border-2 border-black bg-[#DDC692] px-6 py-2 text-sm font-semibold text-black transition-all duration-300 hover:bg-[#C9B480] sm:inline-block">
                Hubungi Kami
            </a>

            <!-- Mobile Menu Trigger -->
            <div class="block lg:hidden">
                <button id="openBtn"
                    class="mobile-menu-trigger hamburger-menu flex h-10 w-10 flex-col items-center justify-center rounded-md focus:outline-none focus:ring-2 focus:ring-primary-600">
                    <span
                        class="hamburger-line mb-1.5 block h-0.5 w-6 bg-black transition-transform"></span>
                    <span
                        class="hamburger-line mb-1.5 block h-0.5 w-6 bg-black transition-opacity"></span>
                    <span class="hamburger-line block h-0.5 w-6 bg-black transition-transform"></span>
                </button>
            </div>
        </div>
    </div>
</header>

@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuTrigger = document.querySelector('.mobile-menu-trigger');
            const menuOverlay = document.querySelector('.menu-overlay');
            const menuBlock = document.querySelector('.menu-block');
            const menuClose = document.querySelector('.mobile-menu-close');
            const dropTriggers = document.querySelectorAll('.drop-trigger');
            const goBack = document.querySelector('.go-back');
            const currentMenuTitle = document.querySelector('.current-menu-title');

            function toggleMenu() {
                const nav = menuBlock;
                nav.classList.toggle('translate-x-full');
                document.body.classList.toggle('overflow-hidden');
                menuOverlay.style.display = nav.classList.contains('translate-x-full') ? 'none' : 'block';

                const spans = menuTrigger.querySelectorAll('span');
                if (!nav.classList.contains('translate-x-full')) {
                    spans[0].classList.add('rotate-45', 'translate-y-2');
                    spans[1].classList.add('opacity-0');
                    spans[2].classList.add('-rotate-45', '-translate-y-2');
                } else {
                    spans[0].classList.remove('rotate-45', 'translate-y-2');
                    spans[1].classList.remove('opacity-0');
                    spans[2].classList.remove('-rotate-45', '-translate-y-2');
                }
            }

            if (menuTrigger) menuTrigger.addEventListener('click', toggleMenu);
            if (menuOverlay) menuOverlay.addEventListener('click', toggleMenu);
            if (menuClose) menuClose.addEventListener('click', toggleMenu);

            function setupDesktopHover() {
                const navItems = document.querySelectorAll('.nav-item-has-children');
                
                navItems.forEach(navItem => {
                    const submenu = navItem.querySelector('.sub-menu');
                    let hoverTimeout;

                    if (submenu && window.innerWidth >= 1024) {
                        navItem.addEventListener('mouseenter', function() {
                            clearTimeout(hoverTimeout);
                            submenu.classList.remove('lg:opacity-0', 'lg:invisible', 'lg:translate-y-2');
                            submenu.classList.add('lg:opacity-100', 'lg:visible', 'lg:translate-y-0');
                        });

                        navItem.addEventListener('mouseleave', function() {
                            hoverTimeout = setTimeout(() => {
                                submenu.classList.add('lg:opacity-0', 'lg:invisible', 'lg:translate-y-2');
                                submenu.classList.remove('lg:opacity-100', 'lg:visible', 'lg:translate-y-0');
                            }, 100);
                        });
                    }
                });

                const submenuItems = document.querySelectorAll('.sub-menu--item.nav-item-has-children');
                submenuItems.forEach(submenuItem => {
                    const nestedSubmenu = submenuItem.querySelector('.sub-menu');
                    let nestedTimeout;

                    if (nestedSubmenu && window.innerWidth >= 1024) {
                        submenuItem.addEventListener('mouseenter', function() {
                            clearTimeout(nestedTimeout);
                            nestedSubmenu.classList.remove('lg:opacity-0', 'lg:invisible', 'lg:translate-x-2');
                            nestedSubmenu.classList.add('lg:opacity-100', 'lg:visible', 'lg:translate-x-0');
                        });

                        submenuItem.addEventListener('mouseleave', function() {
                            nestedTimeout = setTimeout(() => {
                                nestedSubmenu.classList.add('lg:opacity-0', 'lg:invisible', 'lg:translate-x-2');
                                nestedSubmenu.classList.remove('lg:opacity-100', 'lg:visible', 'lg:translate-x-0');
                            }, 100);
                        });
                    }
                });
            }

            function setupMobileMenu() {
                if (window.innerWidth < 1024) {
                    document.querySelectorAll('.sub-menu').forEach(menu => {
                        menu.style.display = 'none';
                    });

                    const mainMenu = document.querySelector('.menu-block nav .site-menu-main.lg\\:hidden');
                    if (mainMenu) mainMenu.style.display = 'block';

                    if (goBack) goBack.style.display = 'none';
                    if (currentMenuTitle) currentMenuTitle.textContent = '';

                    dropTriggers.forEach(trigger => {
                        const newTrigger = trigger.cloneNode(true);
                        trigger.parentNode.replaceChild(newTrigger, trigger);

                        newTrigger.addEventListener('click', function(e) {
                            if (window.innerWidth < 1024) {
                                e.preventDefault();
                                const parent = this.parentElement;
                                const submenu = parent.querySelector('.sub-menu');
                                const title = this.querySelector('span').textContent;

                                if (submenu) {
                                    submenu.style.display = 'block';
                                    if(currentMenuTitle) currentMenuTitle.textContent = title;
                                    
                                    const parentMenu = parent.closest('ul');
                                    if(parentMenu) parentMenu.style.display = 'none';
                                    
                                    if(goBack) goBack.style.display = 'flex';
                                }
                            }
                        });
                    });

                    if (goBack) {
                        const newGoBack = goBack.cloneNode(true);
                        goBack.parentNode.replaceChild(newGoBack, goBack);
                        newGoBack.addEventListener('click', function() {
                            const activeSubmenu = document.querySelector('.sub-menu[style*="display: block"]');
                            if (activeSubmenu) {
                                activeSubmenu.style.display = 'none';
                                const parentMenu = activeSubmenu.parentElement.closest('ul');
                                if(parentMenu) {
                                    parentMenu.style.display = 'none';
                                }
                                
                                const grandParentMenu = activeSubmenu.parentElement.parentElement;
                                if(grandParentMenu && grandParentMenu.tagName === 'UL'){
                                     grandParentMenu.style.display = 'block';
                                }

                                if (grandParentMenu.classList.contains('site-menu-main')) {
                                    if(currentMenuTitle) currentMenuTitle.textContent = '';
                                    this.style.display = 'none';
                                } else {
                                    const parentTrigger = grandParentMenu.closest('li.nav-item-has-children').querySelector('.drop-trigger');
                                    if (parentTrigger && currentMenuTitle) {
                                        currentMenuTitle.textContent = parentTrigger.querySelector('span').textContent;
                                    }
                                }
                            }
                        });
                    }
                } else {
                    setupDesktopHover();
                }
            }

            setupMobileMenu();
            window.addEventListener('resize', function() {
                setupMobileMenu();
            });
        });
    </script>
@endpush