@extends('components.layout.layout')

@section('content')
    <style>
        .error-messages {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        .error-messages ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .error-messages li {
            margin-bottom: 5px;
        }
    </style>
    <div class="box">
        @if ($errors->any())
            <div class="error-messages ">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <h1 class="title is-4">Create a New Blog Post</h1>
            <br>
            <h2 class="subtitle is-6 is-italic">
                Please fill out all the form fields and click 'Submit'
            </h2>

            {{-- Here are all the form fields --}}
            <div class="field">
                <label for="title" class="label">Title</label>
                <div class="control has-icons-right">
                    <input type="text" name="title" placeholder="Enter the post's title..."
                           class="input @error('title') is-danger @enderror"
                           value="{{ old('title') }}" autocomplete="title" autofocus>
                    @error('title')
                    <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    @enderror
                </div>
                @error('title')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label for="slug" class="label">Slug</label>
                <div class="control has-icons-right">
                    <x-ui.wysiwyg name="slug" height="120" class="@error('slug') is-danger @enderror"
                                  placeholder="Enter the blog post's summary..."
                                  value="{{ old('slug') }}"></x-ui.wysiwyg>
                    @error('slug')
                    <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    @enderror
                </div>
                @error('slug')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label for="body" class="label">Body</label>
                <div class="control has-icons-right">
                    <x-ui.wysiwyg name="body" rows="15" class="@error('body') is-danger @enderror"
                                  placeholder="Enter the blog post's content..."
                                  value="{{ old('body') }}" maxlength="225"></x-ui.wysiwyg>
                    @error('body')
                    <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    @enderror
                </div>
                @error('body')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-primary">Save</button>
                </div>
                <div class="control">
                    <a type="button" href="{{ url()->previous() }}" class="button is-light">Cancel</a>
                </div>
                <button type="reset" id="reset-button" class="button is-warning">Reset</button>
            </div>
            <script>
                // Get the reset button element
                const resetButton = document.getElementById('reset-button');

                // Add event listener for click event
                resetButton.addEventListener('click', function() {
                    // Get all input elements in the form
                    const inputs = document.querySelectorAll('input, textarea');

                    // Reset the value of each input element
                    inputs.forEach(input => {
                        input.value = '';
                    });
                });
            </script>

        </form>
    </div>
@endsection
