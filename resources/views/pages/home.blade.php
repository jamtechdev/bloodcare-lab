<x-layouts.app>
    <x-hero-section heading="BLOOD CARE DIAGNOSTIC CENTRE" subtitle="Your Trusted Partner in Health Diagnostics">
        <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <span>5.0 Google Rating</span>
        </div>
        <div class="hero-badges">
            <span class="badge"><i class="fas fa-clock"></i> Open 24 Hours</span>
            <span class="badge"><i class="fas fa-certificate"></i> Certified Lab</span>
            <span class="badge"><i class="fas fa-user-md"></i> Expert Technicians</span>
        </div>
        <div class="hero-buttons">
            <a href="{{ route('book-appointment') }}" class="btn btn-primary">Book Appointment</a>
            <a href="{{ route('check-report') }}" class="btn btn-secondary">Check Report Status</a>
        </div>
    </x-hero-section>

    <x-quick-info :items="[
        ['icon' => 'fas fa-phone-alt', 'heading' => 'Call Us', 'text' => '+91 9876543210'],
        ['icon' => 'fas fa-clock', 'heading' => 'Working Hours', 'text' => '24 Hours Open'],
        ['icon' => 'fas fa-map-marker-alt', 'heading' => 'Location', 'text' => 'Ring Road, Lucknow'],
        ['icon' => 'fas fa-envelope', 'heading' => 'Email', 'text' => 'info@bloodcare.com'],
    ]" />

    <x-about-section heading="About BLOOD CARE DIAGNOSTIC CENTRE" subtitle="Leading Pathology Lab in Lucknow"
        description="BLOOD CARE DIAGNOSTIC CENTRE is a state-of-the-art pathology laboratory located in Lucknow, providing comprehensive diagnostic services 24/7. We are committed to delivering accurate and timely test results with the highest standards of quality."
        :features="[
            'NABL Accredited Laboratory',
            'Advanced Testing Equipment',
            'Experienced Lab Technicians',
            'Quick Report Delivery',
            'Home Sample Collection',
        ]" buttonText="Learn More" buttonUrl=" {{ route('about') }}" icon="fas fa-microscope" />

    @php
        $services = [
            [
                'icon' => 'fas fa-vial',
                'title' => 'Blood Test',
                'description' => 'Complete blood analysis with accurate results',
                'url' => route('book-appointment'),
            ],
            [
                'icon' => 'fas fa-heartbeat',
                'title' => 'CBC Test',
                'description' => 'Complete Blood Count for overall health check',
                'url' => route('book-appointment'),
            ],
            [
                'icon' => 'fas fa-thermometer',
                'title' => 'Thyroid Test',
                'description' => 'Comprehensive thyroid function testing',
                'url' => route('book-appointment'),
            ],
            [
                'icon' => 'fas fa-tint',
                'title' => 'Sugar Test',
                'description' => 'Blood glucose level monitoring',
                'url' => route('book-appointment'),
            ],
            [
                'icon' => 'fas fa-flask',
                'title' => 'Urine Test',
                'description' => 'Complete urine analysis and screening',
                'url' => route('book-appointment'),
            ],
            [
                'icon' => 'fas fa-user-md',
                'title' => 'Full Body Checkup',
                'description' => 'Comprehensive health screening packages',
                'url' => route('book-appointment'),
            ],
        ];
    @endphp

    <x-services-section heading="Our Key Services" subtitle="Comprehensive Diagnostic Solutions" :services="$services" />
    <x-cta-section heading="Need to Check Your Report?" title="Access your test reports online anytime, anywhere"
        url="{{ route('home') }}" ctaText="Check Report Status" />
</x-layouts.app>
