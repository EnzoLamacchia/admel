<div class="w-2/12 ml-2">
    <nav class="flex-grow bg-gray-100 px-0 pb-4 md:block md:pb-0 md:overflow-y-auto">
        @if ($menDx != 'modificaUser')
        <a class="flex flex-row block px-4 py-1 text-sm text-left font-semibold text-gray-900" href="{{ route('editutente', ['id' => $userid]) }}">
            <svg class="h-6 w-6 pr-2"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
            </svg>Scheda utente
        </a>
        @endif
        @if ($menDx != 'modificaPw')
        <a class="flex flex-row block px-4 py-1 text-sm text-left font-semibold text-gray-900" href="{{route('editapassword',['id'=> $userid])}}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 pr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
            </svg>Cambia password
        </a>
        @endif
        @if ($menDx != 'modificaRuoli')
        <a class="flex flex-row block px-4 py-1 text-sm text-left font-semibold text-gray-900" href="{{route('editaruoli',['id'=> $userid])}}">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pr-2" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 326.62">
                <path d="m380.81 99.57 18.06.35c8.44.17 15.2 7.21 15.05 15.66l-.32 16.72a95.733 95.733 0 0 1 22.85 10.85l12.68-12.19c6.08-5.85 15.85-5.66 21.7.43l12.53 13.02c5.85 6.09 5.66 15.86-.43 21.71l-13.61 13.09a95.386 95.386 0 0 1 8.35 22.31l19.28.38c8.43.16 15.21 7.2 15.05 15.64l-.35 18.06c-.17 8.46-7.21 15.22-15.66 15.05l-19.44-.38a95.573 95.573 0 0 1-9.28 21.74l13.33 13.85c5.86 6.1 5.67 15.86-.42 21.71l-13.02 12.53c-6.09 5.85-15.86 5.65-21.71-.42l-12.59-13.1c-6.81 4-14.14 7.18-21.87 9.43-.77-17.84-3.52-32.46-7.89-44.56 19.48-6.46 33.69-24.64 34.12-46.33.53-27.49-21.34-50.23-48.83-50.77-24.23-.47-44.75 16.44-49.67 39.27-8.82-3.24-18.07-6.12-27.53-9.06-6.69-2.08-13.57-4.2-20.3-6.68l.8.02c2.59-9.32 6.56-18.04 11.66-25.98l-9.13-9.48c-5.85-6.08-5.65-15.86.42-21.7l13.02-12.53c6.1-5.85 15.86-5.66 21.71.42l9.86 10.25a96.2 96.2 0 0 1 25.63-9.22l.3-15.04c.16-8.43 7.2-15.21 15.65-15.05zm-238.09 91.74c-8.91-7.93-15.95-13.65-17.45-30.11l-.95.02c-2.21-.03-4.34-.54-6.33-1.67-3.19-1.82-5.43-4.93-6.95-8.45-3.21-7.37-5.75-26.76 2.33-32.32l-1.52-1-.17-2.15c-.31-3.9-.4-8.62-.46-13.58-.3-18.23-.67-32.01-15.33-36.45l-6.3-1.9 4.15-5.12c11.85-14.64 24.23-27.45 36.71-37.28C144.57 10.18 158.92 2.78 172.97.64c14.44-2.18 28.43 1.13 41.35 11.58 3.82 3.08 7.52 6.78 11.09 11.12 13.79 1.34 25.06 8.76 33.11 19.36 18.53 24.41 19.43 55.9-3.51 78.07 1.93.07 3.74.51 5.35 1.37 6.11 3.27 6.31 10.37 4.7 16.33-1.59 4.98-3.61 10.76-5.5 15.61-2.32 6.55-5.7 7.77-12.23 7.07-.34 16.19-7.82 20.64-17.89 30.16-1.12 24.86-85.47 21.58-86.72 0zm-3.85 15.47 26.09 68.49 13.11-37.33-6.43-7.03c-4.83-7.06-3.18-15.07 5.78-16.53 3.02-.48 6.42-.18 9.71-.18 3.49 0 7.36-.32 10.66.4 8.31 1.84 9.18 9.9 5.04 16.31l-6.43 7.03 13.11 37.33 23.59-68.49c55.98 50.38 141.27 19.22 141.27 119.84H0c0-96.53 80.79-67.55 138.87-119.84z"/>
            </svg>Assegna ruoli
        </a>
        @endif
        @if ($menDx != 'modificaPermessi')
        <a class="flex flex-row block px-4 py-1 text-sm text-left font-semibold text-gray-900" href="{{route('editapermessi',['id'=> $userid])}}">
            <svg class="w-6 h-6 pr-2" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 10H6C4.89543 10 4 10.8954 4 12V38C4 39.1046 4.89543 40 6 40H42C43.1046 40 44 39.1046 44 38V29.5" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10 23H20" stroke="black" stroke-width="4" stroke-linecap="round"/>
                <path d="M10 31H38" stroke="black" stroke-width="4" stroke-linecap="round"/>
                <circle cx="34" cy="16" r="6" fill="#2F88FF" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M44.0001 28.4187C42.0469 24.6023 38.153 22 33.6682 22C28.2313 22 23.663 25.8243 22.3677 31" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>Assegna permessi
        </a>
        @endif
    </nav>
</div>
