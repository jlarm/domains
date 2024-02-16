<div class="py-12">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <form wire:submit.prevent="create" class="space-y-6">

                    <!-- domain Name -->
                    <div class="relative">
                        <x-input-label for="name" :value="__('Domain Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" wire:model.live="form.name" :value="old('name')" autofocus />
                        <div class="absolute -bottom-5 left-0">@error('form.name') <span class="mt-2 text-sm text-red-500">{{ $message }}</span> @enderror</div>
                    </div>

                    <!-- Registrar -->
                    <div class="relative">
                        <x-input-label for="registrar" :value="__('Registrar')" />
                        <x-text-input id="registrar" class="block mt-1 w-full" type="text" wire:model.livew="form.registrar" :value="old('registrar')" />
                        <div class="absolute -bottom-5 left-0">@error('form.registrar') <span class="mt-2 text-sm text-red-500">Registrar name is required.</span> @enderror</div>
                    </div>

                    <!-- Registrar URL -->
                    <div class="relative">
                        <x-input-label for="registrar_url" :value="__('Registrar Url')" />
                        <x-text-input id="registrar_url" class="block mt-1 w-full" type="url" wire:model.live="form.registrar_url" :value="old('form.registrar_url')" />
                        <div class="absolute -bottom-5 left-0">@error('form.registrar_url') <span class="mt-2 text-sm text-red-500">Registrar url is required.</span> @enderror</div>
                    </div>

                    <!-- Expires -->
                    <div class="relative">
                        <x-input-label for="expiration" :value="__('Expires')" />
                        <x-text-input id="expiration" class="block mt-1 w-full" type="date" wire:model.live="form.expiration" :value="old('form.expiration')" />
                        <div class="absolute -bottom-5 left-0">@error('form.expiration') <span class="mt-2 text-sm text-red-500">Expiration date is required.</span> @enderror</div>
                    </div>

                    <!-- Status -->
                    <div class="relative">
                        <fieldset class="mt-4">
                            <legend class="sr-only">Status</legend>
                            <div class="space-y-4 sm:flex sm:items-center sm:space-x-10 sm:space-y-0">
                                <div class="flex items-center">
                                    <input value="1" id="active" wire:model.live="form.status" type="radio" checked class="h-4 w-4 border-gray-300 text-cyan-600 focus:ring-cyan-600">
                                    <label for="active" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Active</label>
                                </div>
                                <div class="flex items-center">
                                    <input value="0" id="inactive" wire:model.live="form.status" type="radio" class="h-4 w-4 border-gray-300 text-cyan-600 focus:ring-cyan-600">
                                    <label for="inactive" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Inactive</label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="absolute -bottom-5 left-0">@error('form.status') <span class="mt-2 text-sm text-red-500">Status is required.</span> @enderror</div>
                    </div>

                    <div>
                        <x-primary-button class="disabled:cursor-not-allowed disabled:opacity-75">Submit</x-primary-button>
                        <a
                            wire:navigate
                            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-slate-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150"
                            href="{{ route('dashboard') }}"
                        >
                            Cancel
                        </a>
                    </div>

                </form>
            </div>
        </div>
            <div
                x-cloak
                x-show="$wire.showSuccessIndicator"
                x-transition.out.opacity.duration.1000ms
                x-effect="if($wire.showSuccessIndicator) setTimeout(() => $wire.showSuccessIndicator = false, 3000)"
                aria-live="assertive" class="pointer-events-none fixed inset-0 flex items-end px-4 py-6 sm:items-start sm:p-6">
                <div class="flex w-full flex-col items-center space-y-4 sm:items-end">
                    <div class="pointer-events-auto w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                        <div class="p-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div class="ml-3 w-0 flex-1 pt-0.5">
                                    <p class="text-sm font-medium text-gray-900">Domain Successfully Created!</p>
                                </div>
                                <div class="ml-4 flex flex-shrink-0">
                                    <button type="button" class="inline-flex rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                        <span class="sr-only">Close</span>
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</div>
