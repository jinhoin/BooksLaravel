{{-- <h1>hello Laravel</h1> --}}

{{-- 기존 php 문법 --}}



{{-- <h1>{{ $greeting or 'Hello ' }} {{ $name or 'hello' }} </h1> --}}
{{-- 블레이드 주석안에서 {{ $name }} 을 출력합ㄴ디ㅏ --}}
{{-- <h1>{{  }}</h1> --}}


@if ($itemCount = count($items))
    <p>{{ $itemCount }}가 있습니다</p>
@else
    <p>아무것도 없어용 </p>
@endif

<ul>
    @foreach ($items as $item)
        <li>
            <h2>{{ $item }}</h2>
        </li>
    @endforeach
</ul>


<ul>
    @forelse ($items as $item)
        <li><h1>{{ $item }} 이 있네요</h1></li>
    @empty
        <li><h1 style="color:black">아무것도 없네요 ^^ 자식께 우선시하는 부모마음이네요</h1></li>
    @endforelse

</ul>


@extends('layouts.master')

{{-- 단순히 여기에서만 있는다고 적응안된다 부모에게가서적어줘야된다 --}}
@section('style')
<style>
    body{
        background-color: brown;
        color: wheat;
    }
</style>
@endsection

@section('content')
    <p>
        저는 자식 뷰의 'content' 입니다
    </p>


    @include('partials.footer')
@endsection



@section('script')
    <script>
     alert('저는 자식 뷰의 "script" 섹션입니다');
    </script>
@endsection

{{-- 지저분하게 호출되네요 --}}
