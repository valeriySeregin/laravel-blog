@extends('layouts.app')

@section('header', 'Список статей')

@section('content')
    @foreach ($articles as $article)
        <a href="articles/{{ $article->id }}"><h2>{{$article->name}}</h2></a>
        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach

    {{$articles->links()}}
@endsection
