<section id="sluzby" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-blue-600 uppercase tracking-wider mb-3">Vsetky sluzby</h2>
            <h3 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                125+ funkcii. Vsetko v jednej aplikacii.
            </h3>
            <p class="max-w-2xl mx-auto text-gray-600">
                Kompletny ekosystem nastrojov pre komunikaciu, spolupracu, dizajn, marketing a riadenie vasej organizacie.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($coreServices as $service)
                <div class="bg-white rounded-2xl p-6 border border-gray-100 hover:border-blue-200 hover:shadow-lg transition-all group">
                    <div class="flex items-start gap-4 mb-4">
                        <span class="text-3xl">{{ $service->icon }}</span>
                        <h4 class="text-lg font-bold text-gray-900 pt-1">{{ $service->name }}</h4>
                    </div>
                    <p class="text-sm text-gray-600 mb-4 leading-relaxed">{{ $service->description }}</p>
                    <ul class="space-y-2">
                        @foreach($service->features as $feature)
                            <li class="flex items-start gap-2 text-sm text-gray-500">
                                <svg class="w-4 h-4 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                {{ $feature }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>

        @if($addons->count() > 0)
            <div class="mt-16">
                @foreach($addons as $addon)
                    <div class="relative bg-gradient-to-br from-purple-50 via-indigo-50 to-blue-50 rounded-3xl p-8 md:p-12 border border-purple-100 overflow-hidden">
                        <div class="absolute top-4 right-4 bg-purple-100 text-purple-700 text-xs font-semibold px-3 py-1 rounded-full">Add-on</div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                            <div>
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="text-4xl">{{ $addon->icon }}</span>
                                    <h4 class="text-2xl font-bold text-gray-900">{{ $addon->name }}</h4>
                                </div>
                                <p class="text-gray-600 mb-6 leading-relaxed">{{ $addon->description }}</p>

                                <div class="grid grid-cols-2 gap-4">
                                    @foreach($addon->features as $feature)
                                        <div class="flex items-center gap-2 text-sm text-gray-600">
                                            <svg class="w-4 h-4 text-purple-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                            </svg>
                                            {{ $feature }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="grid grid-cols-3 gap-4 text-center">
                                <div class="bg-white/80 rounded-xl p-4">
                                    <div class="text-2xl font-bold text-purple-700">73%</div>
                                    <div class="text-xs text-gray-500 mt-1">Pokles vyhorenia</div>
                                </div>
                                <div class="bg-white/80 rounded-xl p-4">
                                    <div class="text-2xl font-bold text-purple-700">2.5x</div>
                                    <div class="text-xs text-gray-500 mt-1">Vyssia produktivita</div>
                                </div>
                                <div class="bg-white/80 rounded-xl p-4">
                                    <div class="text-2xl font-bold text-purple-700">&euro;6-9</div>
                                    <div class="text-xs text-gray-500 mt-1">Cena/osoba/mes</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
