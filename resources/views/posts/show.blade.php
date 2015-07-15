@extends('templates.default')

@section('title')
{{ $post->title }}
@stop

@section('content')
    <article>
        <h2>{{$post->title}}</h2>
        <p>Published: </p>
        <p>{{$post->body}}</p>
    </article>
@stop