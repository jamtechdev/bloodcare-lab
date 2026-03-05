<x-layouts.app>
    <x-hero-section heading="Our Diagnostic Services" subtitle="Comprehensive Pathology & Laboratory Tests">
    </x-hero-section>
    <section class="services-section" style="background: var(--white);">
        <div class="container">
            <div class="section-header">
                <h2>Complete Blood Tests</h2>
                <p>Accurate Blood Analysis Services</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-vial"></i>
                    </div>
                    <h3>Complete Blood Count (CBC)</h3>
                    <p>Comprehensive blood test measuring red cells, white cells, hemoglobin, and platelets.</p>
                    <div class="service-price">₹300</div>
                    <a href="{{ route('book-appointment') }}" class="btn btn-primary btn-sm mt-1">Book Now</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Blood Sugar Test</h3>
                    <p>Fasting and post-meal glucose level testing for diabetes monitoring.</p>
                    <div class="service-price">₹150</div>
                    <a href="{{ route('book-appointment') }}" class="btn btn-primary btn-sm mt-1">Book Now</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Lipid Profile</h3>
                    <p>Cholesterol and triglyceride levels for heart health assessment.</p>
                    <div class="service-price">₹500</div>
                    <a href="{{ route('book-appointment') }}" class="btn btn-primary btn-sm mt-1">Book Now</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-procedures"></i>
                    </div>
                    <h3>Liver Function Test (LFT)</h3>
                    <p>Complete liver enzyme and function analysis.</p>
                    <div class="service-price">₹600</div>
                    <a href="{{ route('book-appointment') }}" class="btn btn-primary btn-sm mt-1">Book Now</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-kidneys"></i>
                    </div>
                    <h3>Kidney Function Test (KFT)</h3>
                    <p>Creatinine, urea, and other kidney markers testing.</p>
                    <div class="service-price">₹550</div>
                    <a href="{{ route('book-appointment') }}" class="btn btn-primary btn-sm mt-1">Book Now</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-thermometer"></i>
                    </div>
                    <h3>Thyroid Profile</h3>
                    <p>T3, T4, and TSH testing for thyroid function assessment.</p>
                    <div class="service-price">₹450</div>
                    <a href="{{ route('book-appointment') }}" class="btn btn-primary btn-sm mt-1">Book Now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section">
        <div class="container">
            <div class="section-header">
                <h2>Specialized Tests</h2>
                <p>Advanced Diagnostic Services</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3>Urine Analysis</h3>
                    <p>Complete urine examination for infection and kidney health.</p>
                    <div class="service-price">₹200</div>
                    <a href="{{ route('book-appointment') }}" class="btn btn-primary btn-sm mt-1">Book Now</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-virus"></i>
                    </div>
                    <h3>Dengue Test</h3>
                    <p>NS1 Antigen and IgG/IgM antibody testing for dengue.</p>
                    <div class="service-price">₹800</div>
                    <a href="{{ route('book-appointment') }}" class="btn btn-primary btn-sm mt-1">Book Now</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-disease"></i>
                    </div>
                    <h3>Typhoid Test</h3>
                    <p>Widal test for typhoid fever detection.</p>
                    <div class="service-price">₹350</div>
                    <a href="{{ route('book-appointment') }}" class="btn btn-primary btn-sm mt-1">Book Now</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-lungs"></i>
                    </div>
                    <h3>COVID-19 RT-PCR</h3>
                    <p>Real-time PCR test for coronavirus detection.</p>
                    <div class="service-price">₹500</div>
                    <a href="{{ route('book-appointment') }}" class="btn btn-primary btn-sm mt-1">Book Now</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-syringe"></i>
                    </div>
                    <h3>Vitamin D Test</h3>
                    <p>25-Hydroxy Vitamin D level measurement.</p>
                    <div class="service-price">₹1200</div>
                    <a href="{{ route('book-appointment') }}" class="btn btn-primary btn-sm mt-1">Book Now</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-bone"></i>
                    </div>
                    <h3>Vitamin B12 Test</h3>
                    <p>Serum B12 level testing for deficiency detection.</p>
                    <div class="service-price">₹900</div>
                    <a href="{{ route('book-appointment') }}" class="btn btn-primary btn-sm mt-1">Book Now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section" style="background: var(--white);">
        <div class="container">
            <div class="section-header">
                <h2>Health Checkup Packages</h2>
                <p>Comprehensive Health Screening</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3>Basic Health Checkup</h3>
                    <p>CBC, Blood Sugar, Lipid Profile, Urine Analysis</p>
                    <div class="service-price">₹999</div>
                    <a href="{{ route('book-appointment') }}" class="btn btn-primary btn-sm mt-1">Book Now</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-hospital-user"></i>
                    </div>
                    <h3>Full Body Checkup</h3>
                    <p>CBC, LFT, KFT, Thyroid, Lipid Profile, Sugar, Urine Test</p>
                    <div class="service-price">₹2499</div>
                    <a href="{{ route('book-appointment') }}" class="btn btn-primary btn-sm mt-1">Book Now</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Cardiac Health Package</h3>
                    <p>Lipid Profile, ECG, Cardiac Enzymes, Blood Pressure</p>
                    <div class="service-price">₹1999</div>
                    <a href="{{ route('book-appointment') }}" class="btn btn-primary btn-sm mt-1">Book Now</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-venus-mars"></i>
                    </div>
                    <h3>Women's Health Package</h3>
                    <p>CBC, Thyroid, Vitamin D, Iron, Calcium, Hormones</p>
                    <div class="service-price">₹2999</div>
                    <a href="{{ route('book-appointment') }}" class="btn btn-primary btn-sm mt-1">Book Now</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Executive Health Checkup</h3>
                    <p>Complete body screening with 50+ parameters</p>
                    <div class="service-price">₹4999</div>
                    <a href="{{ route('book-appointment') }}" class="btn btn-primary btn-sm mt-1">Book Now</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <h3>Senior Citizen Package</h3>
                    <p>Age-specific tests including bone, heart, and kidney health</p>
                    <div class="service-price">₹3499</div>
                    <a href="{{ route('book-appointment') }}" class="btn btn-primary btn-sm mt-1">Book Now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Our Services</h2>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3>Accurate Results</h3>
                    <p>State-of-the-art equipment ensures precise test results</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Quick Turnaround</h3>
                    <p>Most reports delivered within 24 hours</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>Home Collection</h3>
                    <p>Free sample collection from your doorstep</p>
                </div>
            </div>
        </div>
    </section>

    <x-cta-section heading="Need to Check Your Report?" title="Access your test reports online anytime, anywhere"
        url="{{ route('home') }}" ctaText="Check Report Status" />
</x-layouts.app>
