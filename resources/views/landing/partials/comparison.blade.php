<section id="porovnanie" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-blue-600 uppercase tracking-wider mb-3">Porovnanie</h2>
            <h3 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                Ako sa porovnavame s konkurenciou
            </h3>
            <p class="max-w-2xl mx-auto text-gray-600">
                Realne porovnanie pre 25-clenovy tim. Nezabudnite, ze Google a Microsoft ponukaju len cast funkcii &ndash; ostatne sluzby musite platit zvlast.
            </p>
        </div>

        <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-200">
                            <th class="text-left py-4 px-6 font-semibold text-gray-900">Funkcia</th>
                            <th class="text-center py-4 px-6 font-semibold text-gray-500">Google Workspace</th>
                            <th class="text-center py-4 px-6 font-semibold text-gray-500">Microsoft 365</th>
                            <th class="text-center py-4 px-6 font-semibold text-blue-700 bg-blue-50">Webtovaren Cloud</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach($comparisons as $row)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="py-3 px-6 font-medium text-gray-900">{{ $row['feature'] }}</td>
                                <td class="py-3 px-6 text-center">
                                    @if($row['google'] === true)
                                        <svg class="w-5 h-5 text-green-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    @elseif($row['google'] === false)
                                        <svg class="w-5 h-5 text-red-400 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                                    @else
                                        <span class="text-gray-500">{{ $row['google'] }}</span>
                                    @endif
                                </td>
                                <td class="py-3 px-6 text-center">
                                    @if($row['microsoft'] === true)
                                        <svg class="w-5 h-5 text-green-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    @elseif($row['microsoft'] === false)
                                        <svg class="w-5 h-5 text-red-400 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                                    @else
                                        <span class="text-gray-500">{{ $row['microsoft'] }}</span>
                                    @endif
                                </td>
                                <td class="py-3 px-6 text-center bg-blue-50/50">
                                    @if($row['webtovaren'] === true)
                                        <svg class="w-5 h-5 text-green-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    @else
                                        <span class="font-medium text-blue-700">{{ $row['webtovaren'] }}</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        @foreach($pricingComparison as $row)
                            <tr class="{{ $loop->last ? 'bg-gray-50 font-bold' : '' }} border-t border-gray-200">
                                <td class="py-3 px-6 {{ $loop->last ? 'text-gray-900 font-bold' : 'font-medium text-gray-900' }}">{{ $row['label'] }}</td>
                                <td class="py-3 px-6 text-center {{ $loop->last ? 'text-red-600' : 'text-gray-600' }}">{{ $row['google'] }}</td>
                                <td class="py-3 px-6 text-center {{ $loop->last ? 'text-red-600' : 'text-gray-600' }}">{{ $row['microsoft'] }}</td>
                                <td class="py-3 px-6 text-center bg-blue-50/50 {{ $loop->last ? 'text-green-600 font-bold' : 'text-blue-700 font-medium' }}">{{ $row['webtovaren'] }}</td>
                            </tr>
                        @endforeach
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</section>
