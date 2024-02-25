<div class="bg-white overflow-hidden shadow sm:rounded-lg">
    <div class="p-5 flex justify-between items-center">
        <h3 class="text-lg leading-6 font-medium text-gray-900">Domains</h3>
        <div>
            <div class="relative text-sm text-gray-800 col-span-3">
                <div class="absolute pl-2 left-0 top-0 bottom-0 flex items-center pointer-events-none text-gray-500">
                    <x-icon.magnifying-glass />
                </div>

                <label>
                    <input wire:model.live="search" type="text" placeholder="Search..." class="block w-full rounded-lg border-0 py-1.5 pl-10 text-gray-900 ring-1 ring-inset ring-gray-200 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6">
                </label>
            </div>
        </div>
    </div>
    <table class="table-fixed min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3" style="width: 1%;">
                <span class="sr-only">Status</span>
            </th>
            <th scope="col">
                <x-domain.index.sortable column="name" :$sortCol :$sortAsc>
                    <div>Name</div>
                </x-domain.index.sortable>
            </th>
            <th scope="col">
                <x-domain.index.sortable column="registrar" :$sortCol :$sortAsc>
                    <div>Registrar</div>
                </x-domain.index.sortable>
            </th>
            <th scope="col">
                <x-domain.index.sortable column="expiration" :$sortCol :$sortAsc>
                    <div>Expires</div>
                </x-domain.index.sortable>
            </th>
            <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
            </th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
        @foreach($domains as $domain)
            <div>
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
                        @if ($domain->expiration->isPast())
                            <span class="text-red-500">Expired</span>
                        @else
                            {{ $domain->expiration->format('F d, Y') }}
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300 text-right">
                        <x-menu>
                            <x-menu.button class="rounded hover:bg-gray-100 p-1">
                                <x-icon.ellipsis-vertical />
                            </x-menu.button>

                            <x-menu.items>
                                <x-menu.close>
                                    <a href="{{ route('domains.edit', $domain) }}">
                                        <x-menu.item type="link" href="test">
                                            Edit
                                        </x-menu.item>
                                    </a>
                                </x-menu.close>
                            </x-menu.items>
                        </x-menu>
                    </td>
                </tr>
            </div>

        @endforeach
        </tbody>
    </table>
    <div class="p-5">
        <div class="flex justify-between items-center">
            <div class="text-gray-700 text-sm">Results: {{ \Illuminate\Support\Number::format($domains->total()) }}</div>
            {{ $domains->links('livewire.domain.pagination') }}
        </div>
    </div>
</div>
