@extends('components.layout.layout')

@section('content')
    <div class="box">
        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <h1 class="title-is-4">Delete this post?</h1>
            <br>
            <h2 class="subtitle is-6 is-italic">
                Are you sure you want to delete this post?
                <button type="submit" class="button-is-primary">DELETE</button>
            </h2>
        </form>
        <a href="{{ route('posts.index') }}" class="button-is-primary">CANCEL</a>
    </div>
@endsection
