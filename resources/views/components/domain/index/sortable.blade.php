@props(['column', 'sortCol', 'sortAsc'])

<button wire:click="sortBy('{{ $column }}')" {{ $attributes->merge(['class' => 'flex items-center gap-2 group px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider']) }}>
    {{ $slot }}

    @if ($sortCol === $column)
        <div>
            @if ($sortAsc)
                <x-icon.arrow-long-up />
            @else
                <x-icon.arrow-long-down />
            @endif
        </div>
    @else
        <div class="opacity-0 group-hover:opacity-100">
            <x-icon.arrows-up-down />
        </div>
    @endif
</button>
