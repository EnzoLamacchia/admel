<div class="w-2/12 ml-2">
    <nav class="flex-grow bg-gray-100 px-0 pb-4 md:block md:pb-0 md:overflow-y-auto">
        @if ($menDx != 'modificaVocabolario')
            <a class="flex flex-row block px-4 py-1 text-sm text-left font-semibold text-gray-900" href="{{ route('editvocabolario', ['id' => $roleid]) }}">
                <svg class="w-6 h-6 pr-2" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" id="edit">
                    <path d="M3.5,24h15A3.51,3.51,0,0,0,22,20.487V12.95a1,1,0,0,0-2,0v7.537A1.508,1.508,0,0,1,18.5,22H3.5A1.508,1.508,0,0,1,2,20.487V5.513A1.508,1.508,0,0,1,3.5,4H11a1,1,0,0,0,0-2H3.5A3.51,3.51,0,0,0,0,5.513V20.487A3.51,3.51,0,0,0,3.5,24Z"></path>
                    <path d="M9.455,10.544l-.789,3.614a1,1,0,0,0,.271.921,1.038,1.038,0,0,0,.92.269l3.606-.791a1,1,0,0,0,.494-.271l9.114-9.114a3,3,0,0,0,0-4.243,3.07,3.07,0,0,0-4.242,0l-9.1,9.123A1,1,0,0,0,9.455,10.544Zm10.788-8.2a1.022,1.022,0,0,1,1.414,0,1.009,1.009,0,0,1,0,1.413l-.707.707L19.536,3.05Zm-8.9,8.914,6.774-6.791,1.4,1.407-6.777,6.793-1.795.394Z"></path>
                </svg>
                Edit vocabolario
            </a>
        @endif
        @if ($menDx != 'modificaVoce')
            <a class="flex flex-row block px-4 py-1 text-sm text-left font-semibold text-gray-900" href="{{ route('creavoce', ['id' => $roleid]) }}">
{{--                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" class="w-6 h-6 pr-2" version="1.1" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"--}}
{{--                     viewBox="0 0 512 512"><path fill="black" fill-rule="nonzero" d="M423.51 61.53c-5.02,-5.03 -10.92,-7.51 -17.75,-7.51 -6.82,0 -12.8,2.48 -17.75,7.51l-27.05 26.97c-7.25,-4.7 -14.93,-8.8 -22.95,-12.47 -8.02,-3.67 -16.22,-6.82 -24.5,-9.55l0 -41.48c0,-7 -2.38,-12.89 -7.25,-17.75 -4.86,-4.86 -10.75,-7.25 -17.75,-7.25l-52.05 0c-6.66,0 -12.45,2.39 -17.49,7.25 -4.95,4.86 -7.43,10.75 -7.43,17.75l0 37.98c-8.7,2.04 -17.15,4.6 -25.26,7.76 -8.19,3.16 -15.95,6.74 -23.29,10.75l-29.96 -29.53c-4.69,-4.94 -10.4,-7.5 -17.32,-7.5 -6.83,0 -12.71,2.56 -17.75,7.5l-36.43 36.54c-5.03,5.03 -7.51,10.92 -7.51,17.73 0,6.83 2.48,12.81 7.51,17.75l26.97 27.06c-4.7,7.26 -8.79,14.93 -12.46,22.95 -3.68,8.02 -6.83,16.22 -9.56,24.49l-41.47 0c-7.01,0 -12.9,2.39 -17.76,7.26 -4.86,4.86 -7.25,10.75 -7.25,17.75l0 52.05c0,6.65 2.39,12.46 7.25,17.5 4.86,4.94 10.75,7.42 17.76,7.42l37.97 0c2.04,8.7 4.6,17.15 7.76,25.25 3.17,8.2 6.75,16.13 10.75,23.81l-29.52 29.44c-4.95,4.7 -7.51,10.41 -7.51,17.33 0,6.82 2.56,12.71 7.51,17.75l36.53 36.95c5.03,4.69 10.92,7 17.75,7 6.82,0 12.79,-2.31 17.75,-7l27.04 -27.48c7.26,4.69 14.94,8.78 22.96,12.46 8.02,3.66 16.21,6.83 24.49,9.55l0 41.48c0,7 2.39,12.88 7.25,17.74 4.86,4.87 10.76,7.26 17.75,7.26l52.05 0c6.66,0 12.46,-2.39 17.5,-7.26 4.94,-4.86 7.42,-10.74 7.42,-17.74l0 -37.98c8.7,-2.04 17.15,-4.6 25.25,-7.76 8.2,-3.16 16.14,-6.74 23.81,-10.75l29.44 29.53c4.7,4.95 10.49,7.5 17.51,7.5 7.07,0 12.87,-2.55 17.57,-7.5l36.95 -36.53c4.69,-5.04 7,-10.92 7,-17.75 0,-6.82 -2.31,-12.8 -7,-17.75l-27.48 -27.05c4.7,-7.26 8.79,-14.93 12.46,-22.96 3.66,-8.01 6.83,-16.21 9.56,-24.49l41.47 0c7,0 12.88,-2.4 17.74,-7.25 4.87,-4.87 7.26,-10.75 7.26,-17.75l0 -52.05c0,-6.66 -2.39,-12.45 -7.26,-17.5 -4.86,-4.95 -10.74,-7.42 -17.74,-7.42l-37.98 0c-2.04,-8.36 -4.6,-16.73 -7.76,-25 -3.16,-8.37 -6.74,-16.21 -10.75,-23.56l29.53 -29.95c4.95,-4.69 7.5,-10.41 7.5,-17.32 0,-6.83 -2.55,-12.71 -7.5,-17.75l-36.53 -36.43zm-48.41 257.98c-22.72,42.52 -67.54,71.44 -119.1,71.44 -51.58,0 -96.37,-28.92 -119.09,-71.42 2.66,-11.61 7.05,-21.74 19.9,-28.84 17.76,-9.89 48.34,-9.15 62.89,-22.24l20.1 52.78 10.1 -28.77 -4.95 -5.42c-3.72,-5.44 -2.44,-11.62 4.46,-12.74 2.33,-0.37 4.95,-0.14 7.47,-0.14 2.69,0 5.68,-0.25 8.22,0.32 6.41,1.41 7.07,7.62 3.88,12.56l-4.95 5.42 10.11 28.77 18.18 -52.78c13.12,11.8 48.43,14.18 62.88,22.24 12.89,7.22 17.26,17.24 19.9,28.82zm-159.11 -86.45c-1.82,0.03 -3.31,-0.2 -4.93,-1.1 -2.15,-1.19 -3.67,-3.24 -4.7,-5.55 -2.17,-4.86 -3.89,-17.63 1.57,-21.29l-1.02 -0.66 -0.11 -1.41c-0.21,-2.57 -0.26,-5.68 -0.32,-8.95 -0.2,-12 -0.45,-26.56 -10.37,-29.47l-4.25 -1.26 2.81 -3.38c8.01,-9.64 16.38,-18.07 24.82,-24.54 9.55,-7.33 19.26,-12.2 28.75,-13.61 9.77,-1.44 19.23,0.75 27.97,7.62 2.57,2.03 5.08,4.48 7.5,7.33 9.31,0.88 16.94,5.77 22.38,12.75 3.24,4.16 5.71,9.09 7.29,14.33 1.56,5.22 2.24,10.77 1.95,16.23 -0.53,9.8 -4.2,19.35 -11.61,26.33 1.3,0.04 2.53,0.33 3.61,0.91 4.14,2.15 4.27,6.82 3.19,10.75 -1.08,3.28 -2.44,7.08 -3.73,10.28 -1.56,4.31 -3.85,5.12 -8.27,4.65 -9.93,43.45 -69.98,44.93 -82.53,0.04zm40.01 -135.69c87.64,0 158.63,71.04 158.63,158.63 0,87.64 -71.04,158.63 -158.63,158.63 -87.63,0 -158.63,-71.04 -158.63,-158.63 0,-87.64 71.04,-158.63 158.63,-158.63z"/>--}}
{{--                    </svg>--}}
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pr-2" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 498.93"><path d="M389.76 0c33.74 0 64.31 13.69 86.42 35.8C498.31 57.92 512 88.5 512 122.24c0 33.75-13.69 64.33-35.8 86.44-22.13 22.12-52.7 35.82-86.44 35.82-33.71 0-64.27-13.68-86.4-35.82-22.19-22.2-35.86-52.76-35.86-86.44 0-33.74 13.69-64.32 35.82-86.44C325.43 13.69 356.01 0 389.76 0zM127.13 93.07 45.4 179.44h81.73V93.07zM0 195.82c0-1.15.15-2.27.41-3.35.13-3.14 1.36-6.27 3.69-8.73L128.47 52.32c2.31-4.18 6.78-7.01 11.9-7.01h113.41c-4.87 8.6-8.97 17.7-12.16 27.2h-87.3v120.52c0 7.5-6.09 13.59-13.59 13.59H27.2v265.11h392.02V275.68c9.4-1.8 18.49-4.44 27.21-7.83V471.9c0 7.39-3.05 14.15-7.93 19.05-4.96 4.94-11.72 7.98-19.11 7.98H27.04c-7.43 0-14.21-3.06-19.09-7.94C3.07 486.1 0 479.32 0 471.9V195.82zm324.89 79.39c7.53 0 13.66 6.05 13.66 13.52s-6.13 13.52-13.66 13.52H121.54c-7.54 0-13.66-6.05-13.66-13.52s6.12-13.52 13.66-13.52h203.35zm0 91.23c7.53 0 13.66 6.05 13.66 13.52s-6.13 13.52-13.66 13.52H121.54c-7.54 0-13.66-6.05-13.66-13.52s6.12-13.52 13.66-13.52h203.35zm53.26-302.36h23.25c4.48 0 8.15 3.75 8.15 8.14v30.27h30.24c4.49 0 8.15 3.79 8.15 8.14v23.24c0 4.4-3.75 8.15-8.15 8.15h-30.24v30.27c0 4.38-3.75 8.13-8.15 8.13h-23.25c-4.39 0-8.14-3.64-8.14-8.13v-30.27h-30.29c-4.4 0-8.15-3.66-8.15-8.15v-23.24c0-4.49 3.66-8.14 8.15-8.14h30.29V72.22c0-4.48 3.65-8.14 8.14-8.14z"/>
                </svg>Aggiungi voce
            </a>
        @endif
{{--        @if ($menDx != 'assegnaUtenti')--}}
{{--        <a class="flex flex-row block px-4 py-1 text-sm text-left font-semibold text-gray-900" href="{{route('utenti2ruolo',['id'=> $roleid])}}">--}}
{{--            <svg class="h-6 w-6 pr-2"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="9" cy="7" r="4" />  <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />  <path d="M16 11l2 2l4 -4" />--}}
{{--            </svg>Aggiungi voce--}}
{{--        </a>--}}
{{--        @endif--}}
{{--        @if ($menDx != 'assegnaPermessi')--}}
{{--        <a class="flex flex-row block px-4 py-1 text-sm text-left font-semibold text-gray-900" href="{{route('permessi2ruolo',['id'=> $roleid])}}">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pr-2" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 326.62">--}}
{{--                <path d="m380.81 99.57 18.06.35c8.44.17 15.2 7.21 15.05 15.66l-.32 16.72a95.733 95.733 0 0 1 22.85 10.85l12.68-12.19c6.08-5.85 15.85-5.66 21.7.43l12.53 13.02c5.85 6.09 5.66 15.86-.43 21.71l-13.61 13.09a95.386 95.386 0 0 1 8.35 22.31l19.28.38c8.43.16 15.21 7.2 15.05 15.64l-.35 18.06c-.17 8.46-7.21 15.22-15.66 15.05l-19.44-.38a95.573 95.573 0 0 1-9.28 21.74l13.33 13.85c5.86 6.1 5.67 15.86-.42 21.71l-13.02 12.53c-6.09 5.85-15.86 5.65-21.71-.42l-12.59-13.1c-6.81 4-14.14 7.18-21.87 9.43-.77-17.84-3.52-32.46-7.89-44.56 19.48-6.46 33.69-24.64 34.12-46.33.53-27.49-21.34-50.23-48.83-50.77-24.23-.47-44.75 16.44-49.67 39.27-8.82-3.24-18.07-6.12-27.53-9.06-6.69-2.08-13.57-4.2-20.3-6.68l.8.02c2.59-9.32 6.56-18.04 11.66-25.98l-9.13-9.48c-5.85-6.08-5.65-15.86.42-21.7l13.02-12.53c6.1-5.85 15.86-5.66 21.71.42l9.86 10.25a96.2 96.2 0 0 1 25.63-9.22l.3-15.04c.16-8.43 7.2-15.21 15.65-15.05zm-238.09 91.74c-8.91-7.93-15.95-13.65-17.45-30.11l-.95.02c-2.21-.03-4.34-.54-6.33-1.67-3.19-1.82-5.43-4.93-6.95-8.45-3.21-7.37-5.75-26.76 2.33-32.32l-1.52-1-.17-2.15c-.31-3.9-.4-8.62-.46-13.58-.3-18.23-.67-32.01-15.33-36.45l-6.3-1.9 4.15-5.12c11.85-14.64 24.23-27.45 36.71-37.28C144.57 10.18 158.92 2.78 172.97.64c14.44-2.18 28.43 1.13 41.35 11.58 3.82 3.08 7.52 6.78 11.09 11.12 13.79 1.34 25.06 8.76 33.11 19.36 18.53 24.41 19.43 55.9-3.51 78.07 1.93.07 3.74.51 5.35 1.37 6.11 3.27 6.31 10.37 4.7 16.33-1.59 4.98-3.61 10.76-5.5 15.61-2.32 6.55-5.7 7.77-12.23 7.07-.34 16.19-7.82 20.64-17.89 30.16-1.12 24.86-85.47 21.58-86.72 0zm-3.85 15.47 26.09 68.49 13.11-37.33-6.43-7.03c-4.83-7.06-3.18-15.07 5.78-16.53 3.02-.48 6.42-.18 9.71-.18 3.49 0 7.36-.32 10.66.4 8.31 1.84 9.18 9.9 5.04 16.31l-6.43 7.03 13.11 37.33 23.59-68.49c55.98 50.38 141.27 19.22 141.27 119.84H0c0-96.53 80.79-67.55 138.87-119.84z"/>--}}
{{--            </svg>Set Permessi->Ruolo--}}
{{--        </a>--}}
{{--        @endif--}}
    </nav>
</div>
