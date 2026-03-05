<x-layouts.app title="About Us - BLOOD CARE DIAGNOSTIC CENTRE">
    <x-hero-section heading="About BLOOD CARE DIAGNOSTIC CENTRE"
        subtitle="Your Trusted Healthcare Partner Since Inception">
    </x-hero-section>

    <section class="about-section">
        <div class="container">
            <div class="about-grid">
                <div class="about-content">
                    <h2>Who We Are</h2>
                    <p>BLOOD CARE DIAGNOSTIC CENTRE is a premier pathology laboratory located at ANNPURNA COMPLEX, Pal
                        Colony, Ring Road, Budheshwar, Lucknow, Uttar Pradesh. We are dedicated to providing accurate,
                        reliable, and timely diagnostic services to our patients 24 hours a day, 7 days a week.</p>
                    <p>With state-of-the-art equipment and a team of highly qualified lab technicians, we ensure that
                        every test is conducted with the utmost precision and care. Our commitment to quality has earned
                        us a perfect 5.0 Google rating from our satisfied patients.</p>
                </div>
                <div class="about-image">
                    <div class="image-placeholder">
                        <i class="fas fa-hospital"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section">
        <div class="container">
            <div class="section-header">
                <h2>Our Mission</h2>
                <p>Committed to Excellence in Healthcare Diagnostics</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>To be the most trusted diagnostic center in Lucknow, providing world-class pathology services
                        accessible to everyone.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Quality Standards</h3>
                    <p>We maintain the highest quality standards with NABL accreditation and regular quality control
                        measures.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Patient First</h3>
                    <p>Every decision we make is centered around patient care, comfort, and satisfaction.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section" style="background: var(--white);">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Us</h2>
                <p>What Makes Us Different</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>24/7 Service</h3>
                    <p>We are open round the clock to serve you anytime you need diagnostic services.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Certified Lab Technicians</h3>
                    <p>Our team consists of highly qualified and experienced laboratory professionals.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Advanced Equipment</h3>
                    <p>We use the latest technology and equipment for accurate test results.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Quick Reports</h3>
                    <p>Fast turnaround time for test results without compromising accuracy.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>Home Collection</h3>
                    <p>Convenient sample collection from the comfort of your home.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Hygiene & Safety</h3>
                    <p>Strict adherence to hygiene protocols and safety standards.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="container">
            <div class="section-header">
                <h2>Our Accreditations</h2>
                <p>Certified for Quality & Excellence</p>
            </div>
            <ul class="features-list" style="max-width: 800px; margin: 0 auto;">
                <li><i class="fas fa-check-circle"></i> NABL Accredited Laboratory</li>
                <li><i class="fas fa-check-circle"></i> ISO 9001:2015 Certified</li>
                <li><i class="fas fa-check-circle"></i> CAP (College of American Pathologists) Certified</li>
                <li><i class="fas fa-check-circle"></i> Regular External Quality Assessment</li>
                <li><i class="fas fa-check-circle"></i> Trained & Certified Staff</li>
                <li><i class="fas fa-check-circle"></i> State-of-the-Art Infrastructure</li>
            </ul>
        </div>
    </section>
    <x-cta-section heading="Ready to Get Started?" title="Book your appointment today and experience quality healthcare"
        url="{{ route('book-appointment') }}" ctaText="Book Appointment Now" />
</x-layouts.app>
