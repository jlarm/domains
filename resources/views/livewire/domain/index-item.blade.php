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
            {{ $domain->expiration->diffForHumans() }}
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
