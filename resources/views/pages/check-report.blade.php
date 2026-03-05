<x-layouts.app>
    <x-hero-section heading="Check Your Report Status" subtitle="Enter your details to view your test reports">
    </x-hero-section>
    <section class="about-section" style="background: var(--white);">
        <div class="container">
            <div class="form-container">
                <h2 class="text-center mb-2">Report Status Lookup</h2>
                <form id="reportForm">
                    <div class="form-group">
                        <label for="patientId">Patient ID *</label>
                        <input type="text" id="patientId" name="patientId"
                            placeholder="Enter your Patient ID (e.g., BC001)" required>
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile Number *</label>
                        <input type="tel" id="mobile" name="mobile"
                            placeholder="Enter your registered mobile number" pattern="[0-9]{10}" required>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%;">Check Report Status</button>
                </form>

                <div id="reportResult" class="report-result hidden">
                    <h3 style="margin-bottom: 1.5rem; color: var(--primary-color);">
                        <i class="fas fa-file-medical"></i> Report Details
                    </h3>
                    <div class="report-info">
                        <div class="report-info-item">
                            <strong>Patient ID</strong>
                            <span id="resultPatientId">-</span>
                        </div>
                        <div class="report-info-item">
                            <strong>Patient Name</strong>
                            <span id="resultPatientName">-</span>
                        </div>
                        <div class="report-info-item">
                            <strong>Test Name</strong>
                            <span id="resultTestName">-</span>
                        </div>
                        <div class="report-info-item">
                            <strong>Test Date</strong>
                            <span id="resultTestDate">-</span>
                        </div>
                        <div class="report-info-item">
                            <strong>Report Status</strong>
                            <span id="resultStatus">-</span>
                        </div>
                        <div class="report-info-item">
                            <strong>Mobile Number</strong>
                            <span id="resultMobile">-</span>
                        </div>
                    </div>
                    <div id="downloadSection" class="hidden">
                        <button class="btn btn-success" style="width: 100%;" onclick="downloadReport()">
                            <i class="fas fa-download"></i> Download Report PDF
                        </button>
                    </div>
                </div>
            </div>

            <div class="info-grid mt-2">
                <div class="info-card">
                    <i class="fas fa-info-circle"></i>
                    <h3>Need Help?</h3>
                    <p>Contact us at +91 9876543210 for assistance</p>
                </div>
                <div class="info-card">
                    <i class="fas fa-clock"></i>
                    <h3>Report Timing</h3>
                    <p>Most reports are ready within 24 hours</p>
                </div>
                <div class="info-card">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Secure Access</h3>
                    <p>Your reports are protected and confidential</p>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section">
        <div class="container">
            <div class="section-header">
                <h2>How to Check Your Report</h2>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-id-card"></i>
                    </div>
                    <h3>Step 1</h3>
                    <p>Enter your Patient ID provided at the time of sample collection</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Step 2</h3>
                    <p>Enter your registered mobile number for verification</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-download"></i>
                    </div>
                    <h3>Step 3</h3>
                    <p>View your report status and download PDF if ready</p>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
