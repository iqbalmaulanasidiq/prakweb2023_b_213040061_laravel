@extends('layouts.main')
@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            
                <h1 class="mb-3">{{ $post->title }}</h1>
                {{-- <p>By. Iqbal Maulana Sidiq {{ $post->category->name }}</p> --}}
                <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top img-fluid" alt="{{ $post->category->name }}">

                <article class="my-3 fs-5">

               {!! $post->body !!}
               
            </article>
            <a href="/posts" class="d-block mt-3">Back to posts</a>
        </div>
    </div>
</div>


@endsection