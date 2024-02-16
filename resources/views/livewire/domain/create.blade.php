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
    </div>
</div>
