<!-- resources/views/errors/500.blade.php -->
@extends('components.layout.layout')

@section('content')
    <div class="error-page">
        <h1>500 - Internal Server Error</h1>
        <p>Sorry, something went wrong on our end.</p>
        <a href="{{ url('/') }}" class="button is-primary">Go to Homepage</a>
        <p>Or use the search bar below to find what you are looking for.</p>
        <form action="{{ url('/search') }}" method="get">
            <input type="text" name="q" placeholder="Search..." />
            <button type="submit">Search</button>
        </form>
        <p>Here are some useful links:</p>
        <ul>
            <li><a href="{{ url('/about') }}">About Us</a></li>
            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
            <li><a href="{{ url('/blog') }}">Blog</a></li>
        </ul>
    </div>
@endsection
