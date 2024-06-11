@extends('components.layout.layout')

@section('content')
    <style>
        .alert {
            padding: 15px;
            background-color: #f44336;
            color: white;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        .text-danger {
            color: #f44336;
            font-size: 0.875em;
        }
        .form-control {
            margin-bottom: 10px;
        }
    </style>

    <div class="box">
        {{-- Error Handling --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{  route('faqs.update', $faq) }}" method="POST">
            @csrf
            @method('PUT')
            <h1 class="title is-4">Alter question</h1>
            <br>
            <h2 class="subtitle is-6 is-italic">
                Please update the form fields and click 'Alter Question'
            </h2>

            {{-- Form fields --}}
            <div class="form-control">
                <label for="question" class="label">Question</label>
                <div class="control">
                    <input type="text" name="question" class="input" value="{{ old('question', $faq->question) }}" autofocus>
                    @error('question')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-control">
                <label for="answer" class="label">Answer</label>
                <div class="control">
                    <input type="text" name="answer" class="input" value="{{ old('answer', $faq->answer) }}">
                    @error('answer')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-control">
                <label for="link" class="label">Link</label>
                <div class="control">
                    <textarea name="link" class="textarea">{{ old('link', $faq->link) }}</textarea>
                    @error('link')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-control">
                <button type="submit" class="button is-primary">Alter Question</button>
            </div>
        </form>
    </div>
@endsection
