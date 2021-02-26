<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formulario de contacto') }}
        </h2>
    </x-slot>   

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" action="{{ route("contact.send") }}">
                    @csrf
                    <div class="block mt-4">
                        <x-form-input name="subject" label="Escribe el motivo de tu mensaje"></x-form-input>
                    </div>
                    <div class="block mt-4">
                        <x-form-textarea name="message" label="Escribe tu mensaje aquí"></x-form-input>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-form-submit>Enviar mensaje</x-form-submit>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>