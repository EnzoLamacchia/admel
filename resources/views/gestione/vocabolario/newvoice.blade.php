<x-gestione-layout>

    <!-- component -->
    <div class="w-full bg-white px-6 py-8 rounded ">
        <x-header.header title="Voce vocabolario" urlCerca="" nomeBtnNuovo="Lista Vocabolari" urlNuovo="{{route('vocabolari')}}">
        </x-header.header>
        <div class="bg-gray-100 rounded shadow-lg p-4">
        <x-header.subheader title="Aggiunta voce al vocabolario '{{$vocabolario['name']}}'" urlCerca="" nomeBtnNuovo="Nuova Voce"
                            urlNuovo="{{route('creavoce',['id'=>$vocabolario['id']])}}">
        </x-header.subheader>

        <x-forms.newvoice :vocabolario="$vocabolario"></x-forms.newvoice>
        </div>
    </div>

</x-gestione-layout>
