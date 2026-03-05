// Contact Form Handler
const contactForm = document.getElementById('contactForm');
const contactSuccess = document.getElementById('contactSuccess');

if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = {
            name: document.getElementById('name').value.trim(),
            email: document.getElementById('email').value.trim(),
            phone: document.getElementById('phone').value.trim(),
            subject: document.getElementById('subject').value,
            message: document.getElementById('message').value.trim(),
            submittedAt: new Date().toISOString()
        };
        
        // Validate phone number
        if (!validatePhone(formData.phone)) {
            alert('Please enter a valid 10-digit mobile number');
            return;
        }
        
        // Validate email
        if (!validateEmail(formData.email)) {
            alert('Please enter a valid email address');
            return;
        }
        
        // Save to local storage
        let contacts = getFromLocalStorage('contacts') || [];
        contacts.push(formData);
        saveToLocalStorage('contacts', contacts);
        
        // Show success message
        contactSuccess.classList.remove('hidden');
        contactForm.reset();
        
        // Scroll to success message
        contactSuccess.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        
        // Hide success message after 5 seconds
        setTimeout(() => {
            contactSuccess.classList.add('hidden');
        }, 5000);
        
        // Log submission (in real app, this would be an API call)
        console.log('Contact form submitted:', formData);
    });
}

// Phone number formatting for contact form
const phoneInput = document.getElementById('phone');
if (phoneInput) {
    phoneInput.addEventListener('input', function(e) {
        // Remove non-numeric characters
        this.value = this.value.replace(/\D/g, '');
        // Limit to 10 digits
        if (this.value.length > 10) {
            this.value = this.value.slice(0, 10);
        }
    });
}
