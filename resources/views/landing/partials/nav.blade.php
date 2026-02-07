<nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-gray-100" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <span class="text-xl font-bold text-gray-900">Webtovaren</span>
                <span class="text-xs font-medium bg-blue-100 text-blue-700 px-2 py-0.5 rounded-full">Cloud</span>
            </a>

            <div class="hidden md:flex items-center gap-8">
                <a href="#problemy" class="text-sm text-gray-600 hover:text-gray-900 transition-colors">Problemy</a>
                <a href="#riesenie" class="text-sm text-gray-600 hover:text-gray-900 transition-colors">Riesenie</a>
                <a href="#sluzby" class="text-sm text-gray-600 hover:text-gray-900 transition-colors">Sluzby</a>
                <a href="#cennik" class="text-sm text-gray-600 hover:text-gray-900 transition-colors">Cennik</a>
                <a href="#porovnanie" class="text-sm text-gray-600 hover:text-gray-900 transition-colors">Porovnanie</a>
            </div>

            <div class="flex items-center gap-4">
                <a href="#cennik" class="hidden sm:inline-flex items-center gap-1 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg transition-colors">
                    Vyskusat zadarmo
                </a>
                <button id="mobile-menu-btn" class="md:hidden p-2 text-gray-600 hover:text-gray-900">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden border-t border-gray-100 bg-white">
        <div class="px-4 py-3 space-y-2">
            <a href="#problemy" class="block text-sm text-gray-600 hover:text-gray-900 py-2">Problemy</a>
            <a href="#riesenie" class="block text-sm text-gray-600 hover:text-gray-900 py-2">Riesenie</a>
            <a href="#sluzby" class="block text-sm text-gray-600 hover:text-gray-900 py-2">Sluzby</a>
            <a href="#cennik" class="block text-sm text-gray-600 hover:text-gray-900 py-2">Cennik</a>
            <a href="#porovnanie" class="block text-sm text-gray-600 hover:text-gray-900 py-2">Porovnanie</a>
            <a href="#cennik" class="block text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg text-center">
                Vyskusat zadarmo
            </a>
        </div>
    </div>
</nav>
