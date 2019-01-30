@extends('layouts.app')

@section('content')
    <h1>포럼 글 목록</h1>    
    <hr/>

    <ul>
     
      
        @forelse ($articles as $article)
        <li>{{ $article->content }}  </li>    
        <small>
          by {{ $article->user->name}} <i>{{ $article->created_at }}</i>  
        </small>
   
        @empty
            <p>글이없습니다</p>    
        @endforelse
    </ul>

    @if ($articles->count())
        <div class="text-center">
            {!! $articles->render() !!}
        </div>
    @endif




@endsection