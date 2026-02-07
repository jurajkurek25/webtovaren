<section id="riesenie" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-blue-600 uppercase tracking-wider mb-3">Nase riesenie</h2>
            <h3 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                Jeden system. Vsetky nastroje. Bez kompromisov.
            </h3>
            <p class="max-w-2xl mx-auto text-gray-600">
                Webtovaren Cloud je postaveny specialne pre male timy, obcianske zdruzenia, neziskovky a event agentury. Vsetko co potrebujete, nic co nepotrebujete.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($solutions as $solution)
                <div class="relative bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 border border-blue-100 hover:shadow-lg transition-all">
                    <div class="text-3xl mb-4">{{ $solution['icon'] }}</div>
                    <h4 class="text-lg font-bold text-gray-900 mb-3">{{ $solution['title'] }}</h4>
                    <p class="text-sm text-gray-600 leading-relaxed">{{ $solution['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
