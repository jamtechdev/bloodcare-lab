// Page Loading Effect
function showLoader() {
    const loader = document.getElementById('pageLoader');
    if (loader) loader.classList.remove('hidden');
}

function hideLoader() {
    const loader = document.getElementById('pageLoader');
    if (loader) {
        setTimeout(() => {
            loader.classList.add('hidden');
        }, 500);
    }
}

// Show loader on page load
window.addEventListener('load', hideLoader);

// Show loader on navigation
document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('a[href$=".html"]');
    links.forEach(link => {
        link.addEventListener('click', (e) => {
            if (link.href !== window.location.href) {
                showLoader();
            }
        });
    });
});

// Mobile Navigation Toggle
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('navMenu');

if (hamburger) {
    hamburger.addEventListener('click', () => {
        navMenu.classList.toggle('active');
        hamburger.classList.toggle('active');
    });
}

// Close mobile menu when clicking on a link
document.querySelectorAll('.nav-menu a').forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.remove('active');
        hamburger.classList.remove('active');
    });
});

// Set minimum date for appointment booking
const appointmentDateInput = document.getElementById('appointmentDate');
if (appointmentDateInput) {
    const today = new Date().toISOString().split('T')[0];
    appointmentDateInput.setAttribute('min', today);
}

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Form validation helper
function validatePhone(phone) {
    const phoneRegex = /^[0-9]{10}$/;
    return phoneRegex.test(phone);
}

function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Show/hide loading spinner
function showLoading(button) {
    button.disabled = true;
    button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
}

function hideLoading(button, originalText) {
    button.disabled = false;
    button.innerHTML = originalText;
}

// Local Storage Helper Functions
function saveToLocalStorage(key, data) {
    localStorage.setItem(key, JSON.stringify(data));
}

function getFromLocalStorage(key) {
    const data = localStorage.getItem(key);
    return data ? JSON.parse(data) : null;
}

// Initialize local storage with sample data if empty
function initializeData() {
    if (!getFromLocalStorage('patients')) {
        const samplePatients = [
            { id: 'BC001', name: 'Rajesh Kumar', mobile: '9876543210', age: 35, gender: 'Male' },
            { id: 'BC002', name: 'Priya Sharma', mobile: '9876543211', age: 28, gender: 'Female' },
            { id: 'BC003', name: 'Amit Singh', mobile: '9876543212', age: 42, gender: 'Male' }
        ];
        saveToLocalStorage('patients', samplePatients);
    }

    if (!getFromLocalStorage('reports')) {
        const sampleReports = [
            {
                patientId: 'BC001',
                patientName: 'Rajesh Kumar',
                mobile: '9876543210',
                testName: 'CBC Test',
                testDate: '2024-01-15',
                status: 'Completed'
            },
            {
                patientId: 'BC002',
                patientName: 'Priya Sharma',
                mobile: '9876543211',
                testName: 'Thyroid Profile',
                testDate: '2024-01-16',
                status: 'Processing'
            },
            {
                patientId: 'BC003',
                patientName: 'Amit Singh',
                mobile: '9876543212',
                testName: 'Full Body Checkup',
                testDate: '2024-01-17',
                status: 'Completed'
            }
        ];
        saveToLocalStorage('reports', sampleReports);
    }

    if (!getFromLocalStorage('appointments')) {
        const sampleAppointments = [
            {
                name: 'Amit Singh',
                mobile: '9876543212',
                testType: 'Full Body Checkup',
                date: '2024-01-20',
                time: '08:00-10:00',
                collection: 'Home Collection'
            },
            {
                name: 'Neha Gupta',
                mobile: '9876543213',
                testType: 'Thyroid Test',
                date: '2024-01-21',
                time: '10:00-12:00',
                collection: 'Visit Lab'
            }
        ];
        saveToLocalStorage('appointments', sampleAppointments);
    }
}

// Initialize data on page load
initializeData();

// Scroll to top button
window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        document.body.classList.add('scrolled');
    } else {
        document.body.classList.remove('scrolled');
    }
});

console.log('BLOOD CARE DIAGNOSTIC CENTRE - Website Loaded Successfully');
