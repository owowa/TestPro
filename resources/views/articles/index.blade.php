@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>게시판 글 목록</h1>
        <hr>
        <ul>
            @forelse($articles as $article)
                <li>
                    <a href="{{ route('articles.create') }}">{{$article->title}}</a>
                </li>
            @empty
                <p>글이 없습니다</p>
            @endforelse
        </ul>
        <button class="btn btn-primary"><a href="{{ route('articles.create') }}">{{ __('Create') }}</a></button>
    </div>

    @if($articles ?? ''->count())
    <div class="text-center">
        {!! $articles ?? ''->render() !!}
    </div>
    @endif
@stop