@extends('layouts.app')

@section('header', 'Список статей')

@section('content')
    @foreach ($articles as $article)
        <h2>
            <a href="{{ route('articles.show', $article->id) }}">{{ $article->name }}</a>
            (
                <a href="{{ route('articles.edit', $article->id) }}">Отредактировать</a>
                <a href="{{ route('articles.destroy', $article->id )}}"
                    data-confirm="Вы уверены?"
                    data-method="delete"
                    rel="nofollow">Удалить</a>
            )
        </h2>
        <div>
            {{Str::limit($article->body, 200)}}
        </div>
    @endforeach
@endsection
