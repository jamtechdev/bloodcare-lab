 <x-layouts.app>
     <x-hero-section heading="Book Your Appointment" subtitle="Schedule your diagnostic test with us">
     </x-hero-section>

     <section class="about-section" style="background: var(--white);">
         <div class="container">
             <div class="form-container">
                 <h2 class="text-center mb-2">Appointment Booking Form</h2>
                 <p class="text-center" style="color: var(--gray); margin-bottom: 2rem;">Fill in your details and we'll
                     confirm your appointment shortly</p>

                 <form id="appointmentForm">
                     <div class="form-group">
                         <label for="fullName">Full Name *</label>
                         <input type="text" id="fullName" name="fullName" placeholder="Enter your full name"
                             required>
                     </div>

                     <div class="form-group">
                         <label for="age">Age *</label>
                         <input type="number" id="age" name="age" placeholder="Enter your age" min="1"
                             max="120" required>
                     </div>

                     <div class="form-group">
                         <label for="gender">Gender *</label>
                         <select id="gender" name="gender" required>
                             <option value="">Select Gender</option>
                             <option value="male">Male</option>
                             <option value="female">Female</option>
                             <option value="other">Other</option>
                         </select>
                     </div>

                     <div class="form-group">
                         <label for="mobile">Mobile Number *</label>
                         <input type="tel" id="mobile" name="mobile" placeholder="10-digit mobile number"
                             pattern="[0-9]{10}" required>
                     </div>

                     <div class="form-group">
                         <label for="email">Email Address</label>
                         <input type="email" id="email" name="email" placeholder="your.email@example.com">
                     </div>

                     <div class="form-group">
                         <label for="testSearch">Tests Required * <span
                                 style="font-size: 0.85rem; color: var(--gray);">(Select multiple)</span></label>
                         <input type="text" id="testSearch" placeholder="Search tests..." autocomplete="off">
                         <div id="testDropdown" class="test-dropdown hidden"></div>
                         <div id="selectedTests" class="selected-tests"></div>
                         <input type="hidden" id="testType" name="testType" required>
                     </div>

                     <div class="form-group">
                         <label for="appointmentDate">Preferred Date *</label>
                         <input type="date" id="appointmentDate" name="appointmentDate" required>
                     </div>

                     <div class="form-group">
                         <label for="appointmentTime">Preferred Time *</label>
                         <select id="appointmentTime" name="appointmentTime" required>
                             <option value="">Select Time</option>
                             <option value="06:00-08:00">06:00 AM - 08:00 AM</option>
                             <option value="08:00-10:00">08:00 AM - 10:00 AM</option>
                             <option value="10:00-12:00">10:00 AM - 12:00 PM</option>
                             <option value="12:00-14:00">12:00 PM - 02:00 PM</option>
                             <option value="14:00-16:00">02:00 PM - 04:00 PM</option>
                             <option value="16:00-18:00">04:00 PM - 06:00 PM</option>
                             <option value="18:00-20:00">06:00 PM - 08:00 PM</option>
                             <option value="20:00-22:00">08:00 PM - 10:00 PM</option>
                         </select>
                     </div>

                     <div class="form-group">
                         <label for="collectionType">Sample Collection *</label>
                         <select id="collectionType" name="collectionType" required>
                             <option value="">Select Collection Type</option>
                             <option value="lab">Visit Lab</option>
                             <option value="home">Home Collection</option>
                         </select>
                     </div>

                     <div class="form-group" id="addressGroup" style="display: none;">
                         <label for="address">Home Address *</label>
                         <textarea id="address" name="address" placeholder="Enter your complete address for home collection"></textarea>
                     </div>

                     <div class="form-group">
                         <label for="message">Additional Message</label>
                         <textarea id="message" name="message"
                             placeholder="Any special requirements or medical conditions we should know about"></textarea>
                     </div>

                     <button type="submit" class="btn btn-primary" style="width: 100%;">Book Appointment</button>
                 </form>

                 <div id="successMessage" class="alert alert-success hidden mt-2">
                     <i class="fas fa-check-circle"></i> Your appointment has been booked successfully! We will contact
                     you shortly to confirm.
                 </div>
             </div>

             <div class="info-grid mt-2">
                 <div class="info-card">
                     <i class="fas fa-home"></i>
                     <h3>Home Collection</h3>
                     <p>Free sample collection from your home</p>
                 </div>
                 <div class="info-card">
                     <i class="fas fa-clock"></i>
                     <h3>Flexible Timing</h3>
                     <p>Book appointments 24/7 at your convenience</p>
                 </div>
                 <div class="info-card">
                     <i class="fas fa-phone-alt"></i>
                     <h3>Quick Confirmation</h3>
                     <p>Get instant confirmation via SMS/Call</p>
                 </div>
             </div>
         </div>
     </section>

     <section class="services-section">
         <div class="container">
             <div class="section-header">
                 <h2>Why Book With Us?</h2>
             </div>
             <div class="services-grid">
                 <div class="service-card">
                     <div class="service-icon">
                         <i class="fas fa-user-md"></i>
                     </div>
                     <h3>Expert Technicians</h3>
                     <p>Certified and experienced lab professionals</p>
                 </div>
                 <div class="service-card">
                     <div class="service-icon">
                         <i class="fas fa-shield-alt"></i>
                     </div>
                     <h3>Safe & Hygienic</h3>
                     <p>Strict hygiene protocols followed</p>
                 </div>
                 <div class="service-card">
                     <div class="service-icon">
                         <i class="fas fa-bolt"></i>
                     </div>
                     <h3>Quick Reports</h3>
                     <p>Fast turnaround time for results</p>
                 </div>
             </div>
         </div>
     </section>
     @push('scripts')
         <script src="{{ asset('js/appointment.js') }}"></script>
     @endpush
 </x-layouts.app>
