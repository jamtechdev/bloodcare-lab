<x-layouts.app>
    <x-hero-section heading="Contact Us" subtitle="Get in touch with us for any queries or assistance">
    </x-hero-section>

    <section class="quick-info">
        <div class="container">
            <div class="info-grid">
                <div class="info-card">
                    <i class="fas fa-phone-alt"></i>
                    <h3>Call Us</h3>
                    <p><a href="tel:+919876543210" style="color: var(--text-color); text-decoration: none;">+91
                            9876543210</a></p>
                    <p style="font-size: 0.9rem; color: var(--gray);">Available 24/7</p>
                </div>
                <div class="info-card">
                    <i class="fas fa-envelope"></i>
                    <h3>Email Us</h3>
                    <p><a href="mailto:info@bloodcare.com"
                            style="color: var(--text-color); text-decoration: none;">info@bloodcare.com</a></p>
                    <p style="font-size: 0.9rem; color: var(--gray);">We'll respond within 24 hours</p>
                </div>
                <div class="info-card">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Visit Us</h3>
                    <p>ANNPURNA COMPLEX, Pal Colony</p>
                    <p style="font-size: 0.9rem; color: var(--gray);">Ring Road, Budheshwar, Lucknow</p>
                </div>
                <div class="info-card">
                    <i class="fas fa-clock"></i>
                    <h3>Working Hours</h3>
                    <p>Open 24 Hours</p>
                    <p style="font-size: 0.9rem; color: var(--gray);">All Days of the Week</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section" style="background: var(--white);">
        <div class="container">
            <div class="about-grid">
                <div class="form-container" style="max-width: 100%;">
                    <h2 class="mb-2">Send Us a Message</h2>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" placeholder="Enter your name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" placeholder="your.email@example.com"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" placeholder="10-digit mobile number"
                                pattern="[0-9]{10}" required>
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <select id="subject" name="subject" required>
                                <option value="">Select Subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="appointment">Appointment Related</option>
                                <option value="report">Report Related</option>
                                <option value="test">Test Information</option>
                                <option value="feedback">Feedback</option>
                                <option value="complaint">Complaint</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" placeholder="Write your message here..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                    </form>

                    <div id="contactSuccess" class="alert alert-success hidden mt-2">
                        <i class="fas fa-check-circle"></i> Thank you for contacting us! We will get back to you soon.
                    </div>
                </div>

                <div>
                    <h2 class="mb-2">Our Location</h2>
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.8!2d80.9!3d26.85!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjbCsDUxJzAwLjAiTiA4MMKwNTQnMDAuMCJF!5e0!3m2!1sen!2sin!4v1234567890"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="mt-2">
                        <h3>Address Details</h3>
                        <p style="line-height: 1.8; margin-top: 1rem;">
                            <strong>BLOOD CARE DIAGNOSTIC CENTRE</strong><br>
                            ANNPURNA COMPLEX, Pal Colony<br>
                            Ring Road, Budheshwar<br>
                            Lucknow, Uttar Pradesh 226017<br>
                            India
                        </p>
                        <a href="https://maps.google.com/?q=ANNPURNA+COMPLEX+Pal+Colony+Ring+Road+Budheshwar+Lucknow"
                            target="_blank" class="btn btn-primary mt-1">
                            <i class="fas fa-directions"></i> Get Directions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section">
        <div class="container">
            <div class="section-header">
                <h2>Connect With Us</h2>
                <p>Follow us on social media for health tips and updates</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon" style="background: #1877f2;">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <h3>Facebook</h3>
                    <p>Follow us for health tips and updates</p>
                    <a href="#" class="service-link">Visit Page <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service-card">
                    <div class="service-icon" style="background: #25d366;">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h3>WhatsApp</h3>
                    <p>Chat with us for quick assistance</p>
                    <a href="https://wa.me/919876543210" class="service-link">Start Chat <i
                            class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service-card">
                    <div class="service-icon" style="background: #e4405f;">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <h3>Instagram</h3>
                    <p>Stay updated with our latest posts</p>
                    <a href="#" class="service-link">Follow Us <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <x-cta-section heading="Need Immediate Assistance?" title="Call us now for urgent queries or emergency services"
        url="tel:+919876543210" ctaText="Call +91 9876543210" />
</x-layouts.app>
