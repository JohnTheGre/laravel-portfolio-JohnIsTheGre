<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">

    <title>HZ HBO-ICT</title>

    {{-- Compiled assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
{{-- Navigation bar --}}
<nav class="navbar is-primary has-text-white">
    <div class="container">
        <div class="navbar-brand">
            <a href="/" class="navbar-item">
                <strong><i class="fas fa-graduation-cap"></i> HZ</strong>
            </a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">
                <a href="{{ route('index') }}"
                   class="navbar-item {{ Request::route()?->getName() === 'index' ? "is-active" : "" }}">
                    Index
                </a>
                <a href="{{ route('faqs.index') }}"
                   class="navbar-item {{ Request::route()?->getName() === 'faqs.index' ? "is-active" : "" }}">
                    FAQ
                </a>
                <a href="{{ route('posts.index') }}"
                   class="navbar-item {{ Request::route()?->getName() === 'posts.index' ? "is-active" : "" }}">
                    Blog
                </a>
                <a href="{{ route('dashboard') }}"
                   class="navbar-item {{ Request::route()?->getName() === 'dashboard' ? "is-active" : "" }}">
                    Dashboard
                </a>
            </div>
        </div>
    </div>
</nav>

<div class="container py-4">
    {{--content goes here--}}
    @yield('content')
</div>

{{-- Footer --}}
<footer class="footer">
    <div class="container">
        <div class="columns is-multiline">

            <div class="column has-text-centered">
                <div>
                    <a href="/" class="link">Home</a>
                </div>
            </div>

            <div class="column has-text-centered">
                <div>
                    <a href="https://opensource.org/licenses/MIT" class="link">
                        <i class="fa fa-balance-scale" aria-hidden="true"></i> License: MIT
                    </a>
                </div>
            </div>

        </div>

        <div class="content is-small has-text-centered">
            <p class="">Theme built by <a href="https://www.csrhymes.com">C.S. Rhymes</a> | adapted by <a href="https://github.com/dwaard">BugSlayer</a></p>
            <p>PROJECT FOOTER HERE</p>
        </div>
    </div>
</footer>

</body>
</html>
