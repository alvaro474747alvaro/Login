<x-app-layout>
    <x-slot name="header">
    
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <form method="POST" action="{{ route('documentar') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="Tarjeta" :value="__('Tarjeta')" />
            <x-text-input id="Tarjeta" class="block mt-1 w-full" type="text" name="Tarjeta" :value="old('Tarjeta')"  />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="Nombre" :value="__('Nombre')" />
            <x-text-input id="Nombre" class="block mt-1 w-full" type="text" name="Nombre" :value="old('Nombre')"  />
            <x-input-error :messages="$errors->get('Nombre')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="Apellidos" :value="__('Apellidos')" />

            <x-text-input id="Apellidos" class="block mt-1 w-full"
                            type="text"
                            name="Apellidos"
                           />

            <x-input-error :messages="$errors->get('apellidos')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        

                <div>
            <x-input-label for="Fecha" :value="__('Fecha expiracion')" />
            <x-text-input id="Fecha" class="block mt-1 w-full" type="text" name="Fecha" :value="old('Fecha')" placeholder="MM/AA dos digitos signo barra (/) dos digitos" minlength="4" maxlength="5"  />
            <x-input-error :messages="$errors->get('Fecha')" class="mt-2" />
        </div>

<div class="mt-4">
            <x-input-label for="CCV" :value="__('CCV')" />

        <x-text-input 
        id="CCV" class="block mt-1 w-full"
        type="text"
        name="CCV" required autocomplete="new-CCV"                 placeholder="ingresa los tres digitos de la parte trasera de tu tarjeta" 
        maxlength="3"/>

            <x-input-error :messages="$errors->get('CCV')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
         
            <x-primary-button class="ml-4">
                {{ __('pagar') }}
            </x-primary-button>
        </div>
        <h3>Paga por tiempo limitado $0 CERO PESOS por tres meses gratis </h3>
    </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

