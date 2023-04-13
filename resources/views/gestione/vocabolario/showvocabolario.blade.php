<x-gestione-layout>

    <!-- component -->
    <div class="w-full bg-white px-6 py-8 rounded ">
        <x-header.header title="Vocabolari" urlCerca="" nomeBtnNuovo="Lista Vocabolari" urlNuovo="{{route('vocabolari')}}">
        </x-header.header>
        <div class="bg-gray-100 rounded shadow-lg p-4">
        <x-header.subheader title="Dettagli Vocabolario" urlCerca="" nomeBtnNuovo="" urlNuovo="">
        </x-header.subheader>
{{--{{dd($stati)}}--}}
        <x-forms.show-vocabolario :vocabolario="$vocabolario"></x-forms.show-vocabolario>
            <div class="flex flex-row px-2">
                <div class="w-10/12 text-xl text-center text-gray-900 font-bold mt-5 py-2 px-2 border rounded bg-gray-200">
                    Elenco voci del vocabolario "{{$vocabolario['name']}}"</div>
                <div class="w-2/12"></div>
            </div>
            <div class="flex flex-row px-2">
                <div class="w-10/12">
                    <x-table.table :intestazioni="[['NomCol'=>'Voci vocabolario','LarghCol'=>'w-6/12'],
        ['NomCol'=>'Sottovoci vocabolario','LarghCol'=>'w-6/12']]" idTable="PermTable"
                                   class="border">
{{--                                            {{dd($vocabolario->voices)}}--}}
                        @if (count($vocabolario->voices)>0)
                            @foreach($vocabolario->voicesnotchildren as $voice)
                                <tr class="border-b">
                                    <x-table.td class="border bg-white text-left text-md font-semibold ">{{$voice['id']}} - {{$voice['name']}}</x-table.td>
                                    <x-table.td class="bg-white text-left text-md font-semibold">
                                        @foreach($voice->children as $item) {{$item['id']}} - {{$item['name']}} </br> @endforeach
                                    </x-table.td>
                                    </td>
                                </tr>

                            @endforeach
                        @else
                            <x-table.td class="border bg-white text-left text-md font-semibold ">&nbsp;</x-table.td>
                            <x-table.td class="bg-white text-left text-md font-semibold"></x-table.td>
                        @endif
                    </x-table.table>
                    <div></div></div>
            </div>
        </div>
    </div>


</x-gestione-layout>
