<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Toastr Toast -->
    @flasher_render
    <link
        rel="stylesheet"
        href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
    >
    <script
        src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js">
    </script>


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="font-sans antialiased">
<div class="bg-gray-100">
    <header class="flex flex-col md:flex-row justify-between items-center py-4 px-4 bg-cover bg-center"
            style="background-image: url('https://cdn.builder.io/api/v1/image/assets/TEMP/e6cb9a905fd3d194c8116c7b798dd14b715865b55980a6125aaba4212c44cc03?apiKey=bc17dd780d42423db91092514bd68f87&');">
        <div class="bg-white bg-opacity-80 rounded-lg p-4 mb-4 md:mb-0">
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="text-blue-700 hover:text-blue-600">
                    <img
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/8c486ba04494e022a0829a4c66116c483090d16e1baeeb8483c4ad804e52cd30?apiKey=bc17dd780d42423db91092514bd68f87&"
                        alt="Company logo" class="h-10 mr-4"/>
                </a>
                <div>
                    <h1 class="text-xl md:text-2xl font-bold text-gray-800">Metaverse Employment Support</h1>
                    <p class="text-sm md:text-base text-gray-600">We support employment in Japan with specific
                        skills</p>
                </div>
            </div>
        </div>

        <div id="google_translate_element"></div>

    </header>
    @auth('web')
        @include('home.partials.admin-nav')
    @endauth
    <!-- Page Content -->
    <main>
        {{ $slot }}

        <div
            x-data="{ show: false, message: '' }"
            x-on:show-toast.window="show = true; message = $event.detail; setTimeout(() => { show = false }, 3000)"
            x-show="show"
            x-transition
            class="fixed bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg"
        >
            <p x-text="message"></p>
        </div>
    </main>
</div>
<footer class="gap-0 mt-64 w-full bg-zinc-300 min-h-[169px] max-md:flex-wrap max-md:mt-10 max-md:max-w-full"></footer>
{{-- Toastr Toasts--}}}
@if (Session::has('toast_message'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.dispatchEvent(new CustomEvent('show-toast', {
                detail: "{{ Session::get('toast_message') }}"
            }));
        });
    </script>
@endif
</body>


{{--    // google translate--}}
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>
{{--        google translate--}}
<script type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</html>
