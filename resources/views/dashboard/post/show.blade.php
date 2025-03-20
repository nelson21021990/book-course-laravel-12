@extends('dashboard/master')

@section('content')

<h1>{{ $post->title}}</h1>

<span>{{ $post->posted }}</span>
<span>{{ $post->category->title }}</span>

<div>
    {{ $post->description }}
</div>
<div>
    {{ $post->content }}
</div>

<img src="/uploads/posts/{{ $post->image}}" style="width: 400px; height: 400px;" alt="{{ $post->title}}">
<span>{{ $post->image }}</span>
@endsection