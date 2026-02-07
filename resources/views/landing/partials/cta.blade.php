<section class="py-20 bg-gradient-to-br from-blue-600 to-indigo-700">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
            Pripraveni prestat prepinat medzi aplikaciami?
        </h2>
        <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">
            Napisite nam na <a href="mailto:request@webtovaren.cloud" class="underline text-white hover:text-blue-200">request@webtovaren.cloud</a>
            a my vam pripravime personalizovanu ponuku pre vas tim. Setup trva 48 hodin.
        </p>

        <a href="mailto:request@webtovaren.cloud"
           class="inline-flex items-center gap-2 bg-white text-blue-700 font-semibold px-8 py-4 rounded-xl text-lg hover:bg-blue-50 transition-all shadow-xl">
            Objednat cloud
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h3 class="text-2xl font-bold text-gray-900 text-center mb-8">Mate otazky? Napisite nam.</h3>

        @if(session('success'))
            <div class="bg-green-50 border border-green-200 text-green-700 rounded-xl p-4 mb-6 text-center">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Meno *</label>
                    <input type="text" name="name" id="name" required
                           class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none transition-all"
                           value="{{ old('name') }}">
                    @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">E-mail *</label>
                    <input type="email" name="email" id="email" required
                           class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none transition-all"
                           value="{{ old('email') }}">
                    @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="organization" class="block text-sm font-medium text-gray-700 mb-1">Organizacia</label>
                    <input type="text" name="organization" id="organization"
                           class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none transition-all"
                           value="{{ old('organization') }}">
                </div>
                <div>
                    <label for="team_size" class="block text-sm font-medium text-gray-700 mb-1">Velkost timu</label>
                    <input type="number" name="team_size" id="team_size" min="1"
                           class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none transition-all"
                           value="{{ old('team_size') }}">
                </div>
            </div>
            <div>
                <label for="plan_interest" class="block text-sm font-medium text-gray-700 mb-1">Zaujima ma plan</label>
                <select name="plan_interest" id="plan_interest"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none transition-all">
                    <option value="">Vyberte plan...</option>
                    <option value="starter" {{ old('plan_interest') == 'starter' ? 'selected' : '' }}>Starter (&euro;49/mes)</option>
                    <option value="professional" {{ old('plan_interest') == 'professional' ? 'selected' : '' }}>Professional (&euro;99/mes)</option>
                    <option value="enterprise" {{ old('plan_interest') == 'enterprise' ? 'selected' : '' }}>Enterprise (&euro;299/mes)</option>
                </select>
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Sprava</label>
                <textarea name="message" id="message" rows="4"
                          class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none transition-all resize-none">{{ old('message') }}</textarea>
            </div>
            <div class="text-center">
                <button type="submit"
                        class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-8 py-3 rounded-xl transition-all">
                    Odoslat spravu
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </button>
            </div>
        </form>
    </div>
</section>
