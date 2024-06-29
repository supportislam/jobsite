<?php

namespace App\Livewire\Common;

use Livewire\Attributes\Url;
use Livewire\Component;
use App\Models\Notice;
use App\Models\News;

class NoticeNews extends Component
{
    #[Url]
    public string $tab = 'notice';

    public function mount()
    {
    }

    public function render()
    {
        $notices = Notice::latest()->take(5)->get();
        $news = News::latest()->take(5)->get();

        return view('livewire.common.notice-news', [
            'notices' => $notices,
            'news' => $news,
        ]);
    }
}
