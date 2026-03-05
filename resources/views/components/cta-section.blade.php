@props(['heading', 'title', 'url', 'ctaText'])
<section class="cta-section">
    <div class="container">
        <h2>{{ $heading }}</h2>
        <p>{{ $title }}</p>
        <a href="{{ $url }}" class="btn btn-light">{{ $ctaText }}</a>
    </div>
</section>
