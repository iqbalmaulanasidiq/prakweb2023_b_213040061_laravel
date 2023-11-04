@extends('layouts.main')
@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    {{-- <p>By. Iqbal Maulana Sidiq {{ $post->category->name }}</p> --}}
    <p>By. <a href="" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
   {!! $post->body !!}
</article>
<a href="/posts" class="d-block mt-3">Back to posts</a>
@endsection