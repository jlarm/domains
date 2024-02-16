@props(['column', 'sortCol', 'sortAsc'])

<button wire:click="sortBy('{{ $column }}')" {{ $attributes->merge(['class' => 'flex items-center gap-2 group px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider']) }}>
    {{ $slot }}

    @if ($sortCol === $column)
        <div>
            @if ($sortAsc)
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.875 9.375L8.75 9.37492" stroke="#ABABAB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1.875 5.625H6.25" stroke="#ABABAB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1.875 13.125H11.875" stroke="#ABABAB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11.5625 1.875V9.375M11.5625 1.875C11.1249 1.875 10.3072 3.12144 10 3.4375M11.5625 1.875C12.0001 1.875 12.8178 3.12144 13.125 3.4375" stroke="#ABABAB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            @else
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.875 5.625L8.75 5.62508" stroke="#ABABAB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1.875 9.375H6.25" stroke="#ABABAB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1.875 1.875H11.875" stroke="#ABABAB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11.5625 13.125V5.625M11.5625 13.125C11.1249 13.125 10.3072 11.8786 10 11.5625M11.5625 13.125C12.0001 13.125 12.8178 11.8786 13.125 11.5625" stroke="#ABABAB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            @endif
        </div>
    @else
        <div class="opacity-0 group-hover:opacity-100">
            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.875 6.25L11.25 6.25005" stroke="#ABABAB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.875 8.75H10" stroke="#ABABAB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.875 11.25H8.75" stroke="#ABABAB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.875 3.75H13.125" stroke="#ABABAB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4.375 11.7578C4.12924 12.0344 3.47511 13.125 3.125 13.125M1.875 11.7578C2.12076 12.0344 2.77489 13.125 3.125 13.125M3.125 13.125L3.125 9.375" stroke="#ABABAB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M1.875 3.24219C2.12076 2.96563 2.77489 1.875 3.125 1.875M4.375 3.24219C4.12924 2.96563 3.47511 1.875 3.125 1.875M3.125 1.875L3.125 5.625" stroke="#ABABAB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

        </div>
    @endif
</button>
