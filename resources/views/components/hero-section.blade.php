@props(['heading', 'subtitle'])
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>{{ $heading }}</h1>
            <p class="hero-subtitle">{{ $subtitle }}</p>
            {{ $slot }}
        </div>
    </div>
</section>
