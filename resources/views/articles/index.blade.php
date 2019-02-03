@extends('layouts.app')

@section('content')
    <h1>포럼 글 목록</h1>    
    <hr/>
        <a href="{{ route('articles.create')}}" class="btn btm-primary btn-block">
            글쓰기
        </a>

    <ul>
     
      
        @forelse ($articles as $article)
        <h3>{{ $article->title }}</h3>
        <li>{{ $article->content }} &nbsp&nbsp
            <small>
                    by {{ $article->user->name}} <i>{{ $article->created_at }}</i>  
              </small>
        </li>    
       
        <br/>
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