@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>새 글 쓰기</h1>
        <hr/>

        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('title') }}</label>

            <div class="form-group" {{ $errors->has('title') ? 'has-error' : '' }}>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                <strong>{{ $errors->first('title') }}</strong>

            </div>
                                                                            {{-- 다국어에 대해서 지원 --}}
            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('content') }}</label>
            <div class="form-group" {{ $errors->has('content') ? 'has-error' : '' }}>
                {{-- old 전에입력햇던 값을 이용 --}}
                    <input type="text" class="form-control" name="content" id="title" value="{{ old('content') }}">
                    {{-- is set 없이 사용가능 --}}
                    <strong>{{ $errors->first('content') }}</strong>
            </div>

            <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        저장하기
                    </button>
            </div>
        </form>


    </div>
@endsection