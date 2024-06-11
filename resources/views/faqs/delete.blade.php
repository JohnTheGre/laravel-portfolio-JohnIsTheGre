@extends('components.layout.layout')

@section('content')
    <div class="box">
        <form action="{{ route('faqs.destroy', $faq) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <h1 class="title-is-4">Delete this Question?</h1>
            <br>
            <h2 class="subtitle is-6 is-italic">
                Are you sure you want to delete this question?
                <button type="submit" class="button-is-primary">DELETE</button>
            </h2>
        </form>
        <a href="{{ route('faqs.index') }}" class="button-is-primary">CANCEL</a>
    </div>
@endsection
