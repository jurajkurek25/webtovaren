<section id="cennik" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-blue-600 uppercase tracking-wider mb-3">Cennik</h2>
            <h3 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                Transparentne ceny. Ziadne skryte poplatky.
            </h3>
            <p class="max-w-2xl mx-auto text-gray-600">
                Vyberte si balik podla velkosti timu. Vsetky ceny zahrnu vsetky sluzby, setup, migraciu dat a technicku podporu.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            @foreach($plans as $plan)
                <div class="relative bg-white rounded-2xl border-2 {{ $plan->is_popular ? 'border-blue-500 shadow-xl shadow-blue-500/10' : 'border-gray-200' }} p-8 flex flex-col">
                    @if($plan->is_popular)
                        <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-blue-600 text-white text-xs font-semibold px-4 py-1.5 rounded-full">
                            Najpopularnejsie
                        </div>
                    @endif

                    <div class="mb-6">
                        <h4 class="text-xl font-bold text-gray-900">{{ $plan->name }}</h4>
                        <div class="mt-4 flex items-baseline gap-1">
                            <span class="text-4xl font-extrabold text-gray-900">&euro;{{ $plan->price }}</span>
                            <span class="text-gray-500">/{{ $plan->period }}</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-2">{{ $plan->team_size }}</p>
                    </div>

                    <ul class="space-y-3 mb-8 flex-1">
                        @foreach($plan->features as $feature)
                            <li class="flex items-start gap-2 text-sm {{ $feature->is_inherited ? 'font-semibold text-blue-700' : 'text-gray-600' }}">
                                <svg class="w-4 h-4 {{ $feature->is_inherited ? 'text-blue-500' : 'text-green-500' }} mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                {{ $feature->feature }}
                            </li>
                        @endforeach
                    </ul>

                    <a href="mailto:request@webtovaren.cloud?subject=Objednavka {{ $plan->name }}"
                       class="block w-full text-center font-semibold py-3 rounded-xl transition-all
                              {{ $plan->is_popular
                                  ? 'bg-blue-600 hover:bg-blue-700 text-white shadow-lg shadow-blue-600/25'
                                  : 'bg-gray-100 hover:bg-gray-200 text-gray-900' }}">
                        Objednat {{ $plan->name }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
