<?php

namespace App\Listeners;

// use App\Events\article.created;
use App\Article;
use App\Events\ArticlesEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ArticleEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Event\ArticlesEvent  $event
     * @return void
     */
    public function handle(ArticlesEvent $event)
    {
            // var_dump('이벤트를 받았습니다. 받으데이터(상태)는 다음과 같습니다');
            // var_dump($article->toArray());
            if ($event->action === 'created') {
                # code...
                \Log::info(
                    sprintf('새로운 포럼 글이 등록되었습니다 " %s', $event->article->title)
                );
            }
    }
}
