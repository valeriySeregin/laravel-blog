@extends('layouts.app')

@section('header', 'Список статей')

@section('content')
    @foreach ($articles as $article)
        <a href="{{ route('articles.show', $article->id) }}">
            <h2>{{ $article->name }}</h2>
        </a>
        <div>
            {{Str::limit($article->body, 200)}}
        </div>
        <a href="{{ route('articles.edit', $article->id) }}">Отредактировать</a>
    @endforeach

    {{$articles->links()}}
@endsection
