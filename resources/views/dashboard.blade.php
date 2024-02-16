<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow sm:rounded-lg">
                <div class="p-5">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Domains</h3>
                </div>
                <table class="table-fixed min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3" style="width: 1%;">
                            <span class="sr-only">Status</span>
                        </th>
                        <th scope="col" class="w-2/12 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th scope="col" class="w-2/12 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Registrar
                        </th>
                        <th scope="col" class="w-2/12 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Expires
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($domains as $domain)
                    <tr>
                        <td class="pl-6 py-4">
                            @if($domain->status === 0 || $domain->expiration->isPast())
                                <span class="flex h-2 w-2 relative mr-2">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                                    <span class="inline-flex rounded-full h-2 w-2 bg-red-500"></span>
                                </span>
                            @else
                                <span class="flex h-2 w-2 relative mr-2">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                    <span class="inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $domain->name }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <a href="{{ $domain->registrar_url }}" target="_blank">
                                {{ $domain->registrar }}
                            </a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $domain->expiration->diffForHumans() }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300 text-right">
                            edit
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</x-app-layout>
