<div class="bg-white overflow-hidden shadow sm:rounded-lg">
    <div class="p-5 flex justify-between items-center">
        <h3 class="text-lg leading-6 font-medium text-gray-900">Domains</h3>
        <div>
            <input wire:model.live.debounce.500ms="search" type="search" placeholder="Search..." class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" />
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
            <livewire:domain.index-item :$domain wire:key="{{ $domain->id }}" />
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
