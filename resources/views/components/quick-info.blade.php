@props(['items'])
<section class="quick-info">
    <div class="container">
        <div class="info-grid">
            @foreach($items as $item)
            <div class="info-card">
                <i class="{{ $item['icon'] }}"></i>
                <h3>{{ $item['heading'] }}</h3>
                <p>{{ $item['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
