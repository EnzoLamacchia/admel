<x-gestione-layout>

    <!-- component -->
    <div class="w-full bg-white px-6 py-8 rounded ">
        <x-header.header title="Vocabolari" urlCerca="" nomeBtnNuovo="Lista Vocabolari" urlNuovo="{{route('vocabolari')}}">
        </x-header.header>
        <div class="bg-gray-100 rounded shadow-lg p-4">
        <x-header.subheader title="Modifica Vocabolario" urlCerca="" nomeBtnNuovo="Nuovo Vocabolario" urlNuovo="{{route('creavocabolario')}}">
        </x-header.subheader>
{{--{{dd($stati)}}--}}
        <x-forms.modify-vocabolario :vocabolario="$vocabolario"></x-forms.modify-vocabolario>
        </div>
    </div>

</x-gestione-layout>
