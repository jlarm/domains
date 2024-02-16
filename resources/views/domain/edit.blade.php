<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('domains.update', $domain) }}" method="POST" class="space-y-5">
                        @csrf
                        @method('patch')
                        <!-- domain Name -->
                        <div>
                            <x-input-label for="name" :value="__('Domain Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $domain->name }}" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Registrar -->
                        <div>
                            <x-input-label for="registrar" :value="__('Registrar')" />
                            <x-text-input id="registrar" class="block mt-1 w-full" type="text" name="registrar" value="{{ $domain->registrar }}" required />
                            <x-input-error :messages="$errors->get('registrar')" class="mt-2" />
                        </div>

                        <!-- Registrar URL -->
                        <div>
                            <x-input-label for="registrar_url" :value="__('Registrar Url')" />
                            <x-text-input id="registrar_url" class="block mt-1 w-full" type="url" name="registrar_url" value="{{ $domain->registrar_url }}" required />
                            <x-input-error :messages="$errors->get('registrar_url')" class="mt-2" />
                        </div>

                        <!-- Expires -->
                        <div>
                            <x-input-label for="expiration" :value="__('Expires')" />
                            <x-text-input id="expiration" class="block mt-1 w-full" type="date" name="expiration" value="{{ $domain->expiration->format('Y-m-d') }}" required />
                            <x-input-error :messages="$errors->get('expiration')" class="mt-2" />
                        </div>

                        <!-- Status -->
                        <div>
                            <fieldset class="mt-4">
                                <legend class="sr-only">Status</legend>
                                <div class="space-y-4 sm:flex sm:items-center sm:space-x-10 sm:space-y-0">
                                    <div class="flex items-center">
                                        <input value="1" id="active" name="status" type="radio" {{ old('status', $domain->status) == '1' ? 'checked' : '' }} class="h-4 w-4 border-gray-300 text-cyan-600 focus:ring-cyan-600">
                                        <label for="active" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Active</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input value="0" id="inactive" name="status" type="radio" {{ old('status', $domain->status) == '0' ? 'checked' : '' }} class="h-4 w-4 border-gray-300 text-cyan-600 focus:ring-cyan-600">
                                        <label for="inactive" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Inactive</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>


                        <x-primary-button>Submit</x-primary-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
