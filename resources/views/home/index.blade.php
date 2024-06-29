<x-app-layout>
    <div class="flex flex-col items-center gap-8 bg-gray-100 py-12">
        <main class="flex flex-col items-center gap-8 max-w-4xl w-full px-4 text-center">
            @auth('web')
            @else
                @include('home.partials.login-section')
            @endauth


            @livewire('common.notice-news')


            @include('home.partials.home-menu')


        </main>
    </div>
</x-app-layout>
