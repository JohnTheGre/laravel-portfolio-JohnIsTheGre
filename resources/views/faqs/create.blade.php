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

        <form action="{{ route('faqs.store') }}" method="POST">
            @csrf
            <h1 class="title is-4">What is your question?</h1>
            <br>
            <h2 class="subtitle is-6 is-italic">
                Please fill out all the form fields and click 'Submit'
            </h2>

            {{-- Form fields --}}
            <div class="form-control">
                <label for="question" class="label">Question</label>
                <div class="control">
                    <input type="text" name="question" class="input" value="{{ old('question') }}" required minlength="5" maxlength="255" autofocus>
                    @error('question')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        Please provide a valid question (5-255 characters).
                    </div>
                </div>
            </div>

            <div class="form-control">
                <label for="answer" class="label">Answer</label>
                <div class="control">
                    <textarea name="answer" class="textarea" required minlength="10">{{ old('answer') }}</textarea>
                    @error('answer')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        Please provide a valid answer (at least 10 characters).
                    </div>
                </div>
            </div>

            <div class="form-control">
                <label for="link" class="label">Link</label>
                <div class="control">
                    <input type="url" name="link" class="input" value="{{ old('link') }}">
                    @error('link')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        Please provide a valid URL.
                    </div>
                </div>
            </div>

            <div class="form-control">
                <button type="submit" class="button is-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
