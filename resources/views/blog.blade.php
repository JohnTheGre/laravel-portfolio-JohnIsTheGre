@extends('layout.layout')

@section('content')
<body class="blog">
<main>
    <h2>Welcome to my Blog page</h2>
    <p>open the posts and click/tap the link to view the write-ups</p>

    <section class="document">
        <details>
            <summary>my study</summary>
            <div>Click <a href="{{ route('my-study') }}">here</a> to view why I choose ICT</div>
        </details>
    </section>
    <section class="document">
        <details>
            <summary>SWOT analysis</summary>
            <div>Once more click <a href="{{ route('SWOT-analysis') }}">here</a> to view my SWOT analysis</div>
        </details>
    </section>
    <section class="document">
        <details>
            <summary>Programming experience</summary>
            <div>Click <a href="{{ route('programming-experience') }}">here</a> to discover my programming experience</div>
        </details>
    </section>
    <section class="document">
        <details>
            <summary>ICT field of work</summary>
            <div> I will explain the job I choose to pursue after the HBO-ICT programme <a href="{{ route('ICT-field-of-work') }}">here</a>.</div>
        </details>
    </section>
</main>
</body>
@endsection
