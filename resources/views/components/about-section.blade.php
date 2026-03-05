@props(['heading', 'subtitle', 'description', 'features', 'buttonText', 'buttonUrl', 'icon'])
<section class="about-section">
    <div class="container">
        <div class="section-header">
            <h2>{{ $heading }}</h2>
            <p>{{ $subtitle }}</p>
        </div>
        <div class="about-grid">
            <div class="about-content">
                <p>{{ $description }}</p>
                <ul class="features-list">
                    @foreach($features as $feature)
                    <li><i class="fas fa-check-circle"></i> {{ $feature }}</li>
                    @endforeach
                </ul>
                <a href="{{ $buttonUrl }}" class="btn btn-primary">{{ $buttonText }}</a>
            </div>
            <div class="about-image">
                <div class="image-placeholder">
                    <i class="{{ $icon }}"></i>
                </div>
            </div>
        </div>
    </div>
</section>
