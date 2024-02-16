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
            <a wire:navigate href="{{ route('domains.edit', $domain) }}" class="text-cyan-600 hover:text-cyan-900">Edit</a>
        </td>
    </tr>
</div>
