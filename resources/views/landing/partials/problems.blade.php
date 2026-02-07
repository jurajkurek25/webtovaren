<section id="problemy" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-red-600 uppercase tracking-wider mb-3">Problemy ktore riesime</h2>
            <h3 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                Preco existujuce riesenia nefunguju pre male timy
            </h3>
            <p class="max-w-2xl mx-auto text-gray-600">
                Google a Microsoft vytvorili nastroje pre velke korporacie. Vy platite za funkcie, ktore nikdy nepouzijete, a trpite chaotickym prepinanim medzi aplikaciami.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($problems as $problem)
                <div class="bg-white rounded-2xl p-6 border border-gray-100 hover:border-red-200 hover:shadow-lg transition-all group">
                    <div class="text-3xl mb-4">{{ $problem['icon'] }}</div>
                    <h4 class="text-lg font-bold text-gray-900 mb-2">{{ $problem['title'] }}</h4>
                    <p class="text-sm text-gray-600 leading-relaxed">{{ $problem['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
