<article class="media">
    <div class="media-content">
        <div class="content">
            <a class="is-size-5" href="{{ route('faqs.show', $faqs) }}">
                {{ $faqs->question }}
            </a>
            <br>
            <div class="is-size-7">
                {!! $faqs->answer !!}
            </div>
        </div>
    </div>
</article>
