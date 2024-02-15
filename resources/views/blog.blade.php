<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
{{--    <link href="styles.css" rel="stylesheet">--}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--    <script src="https://kit.fontawesome.com/074263b914.js" crossorigin="anonymous"></script>--}}
    <title>Document</title>
    @include('navbar')
</head>
<body class="blog">
<main>
    <h2>Welcome to my Blog page</h2>
    <p>open the posts and click/tap the link to view the write-ups</p>
    <section class="document">
        <details>
            <summary>my study</summary>
            <div>Click <a href="{{route('/my-study')}}">here</a> to view why I choose ICT</div>
        </details>
    </section>
    <section class="document">
        <details>
            <summary>SWOT analysis</summary>
            <div>Once more click <a href="{{route('/SWOT-analysis')}}">here</a> to view my SWOT analysis</div>
        </details>
    </section>
    <section class="document">
        <details>
            <summary>Programming experience</summary>
            <div>Click <a href="{{route('/programming-experience')}}">here</a> to discover my programming experience</div>
        </details>
    </section>
    <section class="document">
        <details>
            <summary>ICT field of work</summary>
            <div> I will explain the job I choose to purse after the HBO-ICT programme <a href="{{route('/ICT-field-of-work')}}">here</a>.</div>
        </details>
    </section>
</main>
</body>
<footer>
    <h2>WELCOME TO MY WEBSITE.</h2>
    <div class="icons">
        <a href="https://whatsapp.com">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
        <a href="https://twitter.com">
            <i class="fa-brands fa-twitter"></i>
        </a>
        <a href="https://instagram.com">
            <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="https://facebook.com">
            <i class="fa-brands fa-facebook"></i>
        </a>
    </div>
</footer>
</html>




