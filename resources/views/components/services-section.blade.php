@props(['heading', 'subtitle', 'services'])
<section class="services-section">
    <div class="container">
        <div class="section-header">
            <h2>{{ $heading }}</h2>
            <p>{{ $subtitle }}</p>
        </div>
        <div class="services-grid">
            @foreach($services as $service)
            <div class="service-card">
                <div class="service-icon">
                    <i class="{{ $service['icon'] }}"></i>
                </div>
                <h3>{{ $service['title'] }}</h3>
                <p>{{ $service['description'] }}</p>
                <a href="{{ $service['url'] }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            @endforeach
        </div>
    </div>
</section>
