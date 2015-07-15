@extends('templates.default')

@section('title')
Home
@stop

@section('content')
@foreach($posts as $post)
    <article>
        <h2>{{$post->title}}</h2>
        <p>Published: {{ $post->created_at->format('l jS \of F Y') }}</p>
        <p>{{str_limit($post->body, 2)}}</p>
        <a href="{{ route('post-show', $post->slug) }}">Read more</a>
    </article>
@endforeach
@stop