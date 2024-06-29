<section class="bg-white shadow-md border border-black border-solid max-w-2xl w-full relative">
    <div class="flex overflow-hidden">
        <a
        href="{{route('home', ['tab' => 'notice'])}}"
        wire:navigate
        class="text-center bg-[#41b6e6] text-white font-bold py-2 hover:bg-[#1b98ca] transition-colors duration-300 text-sm"
        @style(['flex: 3' => $tab == 'notice', 'flex: 2' => $tab != 'notice'])
        >
        Notice
        </a>
        <a
        href="{{route('home', ['tab' => 'news'])}}"
        wire:navigate
        class="text-center bg-[#ff5050] text-white font-bold py-2  hover:bg-[#e61919] transition-colors duration-300 text-sm"
        @style(['flex: 3' => $tab == 'news', 'flex: 2' => $tab != 'news'])
        >
        News
        </a>
    </div>
    {{--Lists should show at the left alligned with numbers--}}
    <div class="p-6">
        @if($tab == 'notice')
            <div id="notices-content" class="">
                <ul class="text-sm text-gray-800 leading-relaxed space-y-3 text-left list-disc">
                    @forelse($notices as $notice)
                        <li>{{ $notice->content }}</li>
                    @empty
                        <li>No notices available.</li>
                    @endforelse
                </ul>
            </div>
        @endif
        @if($tab == 'news')
            <div id="news-content" class="" style="">
                <ul class="text-sm text-gray-800 leading-relaxed space-y-3 text-left list-disc">
                    @forelse($news as $newsItem)
                        <li>{{ $newsItem->content }}</li>
                    @empty
                        <li>No news available.</li>
                    @endforelse
                </ul>
            </div>
        @endif
    </div>
</section>
