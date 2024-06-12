@extends('components.layout.layout')

@section('content')
    <div class="navbar mb-3">
        <div class="navbar-start">
            <div class="block">
                <h1 class="title is-4">{{ $post->title }}</h1>
                <h2 class="subtitle is-6 is-italic">
                    {!! $post->slug !!}
                </h2>
            </div>
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a href="/post/{{ $post->id }}/edit" class="button is-primary">Edit Question</a>
                    <a href="/post/{{ $post->id }}/delete" class="button is-primary">Delete Question</a>
                </div>
            </div>
        </div>
    </div>
    <div class="block">
        {!! $post->body !!}
    </div>
@endsection
