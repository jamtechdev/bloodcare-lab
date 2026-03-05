// Test data
const availableTests = [
    { id: 'cbc', name: 'Complete Blood Count (CBC)' },
    { id: 'sugar', name: 'Blood Sugar Test' },
    { id: 'thyroid', name: 'Thyroid Profile' },
    { id: 'lipid', name: 'Lipid Profile' },
    { id: 'lft', name: 'Liver Function Test (LFT)' },
    { id: 'kft', name: 'Kidney Function Test (KFT)' },
    { id: 'urine', name: 'Urine Analysis' },
    { id: 'dengue', name: 'Dengue Test' },
    { id: 'typhoid', name: 'Typhoid Test' },
    { id: 'covid', name: 'COVID-19 RT-PCR' },
    { id: 'vitamin-d', name: 'Vitamin D Test' },
    { id: 'vitamin-b12', name: 'Vitamin B12 Test' },
    { id: 'basic-checkup', name: 'Basic Health Checkup' },
    { id: 'full-body', name: 'Full Body Checkup' },
    { id: 'cardiac', name: 'Cardiac Health Package' },
    { id: 'women', name: "Women's Health Package" },
    { id: 'executive', name: 'Executive Health Checkup' },
    { id: 'senior', name: 'Senior Citizen Package' }
];

let selectedTests = [];

// Multi-select test functionality
const testSearch = document.getElementById('testSearch');
const testDropdown = document.getElementById('testDropdown');
const selectedTestsContainer = document.getElementById('selectedTests');
const testTypeHidden = document.getElementById('testType');

if (testSearch) {
    testSearch.addEventListener('focus', () => {
        renderTestDropdown('');
        testDropdown.classList.remove('hidden');
    });

    testSearch.addEventListener('input', (e) => {
        renderTestDropdown(e.target.value);
    });

    document.addEventListener('click', (e) => {
        if (!testSearch.contains(e.target) && !testDropdown.contains(e.target)) {
            testDropdown.classList.add('hidden');
        }
    });
}

function renderTestDropdown(searchTerm) {
    const filtered = availableTests.filter(test => 
        test.name.toLowerCase().includes(searchTerm.toLowerCase()) &&
        !selectedTests.includes(test.id)
    );

    testDropdown.innerHTML = filtered.map(test => 
        `<div class="test-option" onclick="addTest('${test.id}', '${test.name}')">${test.name}</div>`
    ).join('') || '<div class="test-option" style="color: var(--gray);">No tests found</div>';
}

function addTest(id, name) {
    if (!selectedTests.includes(id)) {
        selectedTests.push(id);
        renderSelectedTests();
        testSearch.value = '';
        renderTestDropdown('');
        updateHiddenInput();
    }
}

function removeTest(id) {
    selectedTests = selectedTests.filter(testId => testId !== id);
    renderSelectedTests();
    renderTestDropdown(testSearch.value);
    updateHiddenInput();
}

function renderSelectedTests() {
    selectedTestsContainer.innerHTML = selectedTests.map(id => {
        const test = availableTests.find(t => t.id === id);
        return `<div class="test-tag">
            ${test.name}
            <span class="remove-test" onclick="removeTest('${id}')">&times;</span>
        </div>`;
    }).join('');
}

function updateHiddenInput() {
    testTypeHidden.value = selectedTests.join(',');
}

// Appointment Booking Form
const appointmentForm = document.getElementById('appointmentForm');
const successMessage = document.getElementById('successMessage');
const collectionType = document.getElementById('collectionType');
const addressGroup = document.getElementById('addressGroup');

// Show/hide address field based on collection type
if (collectionType) {
    collectionType.addEventListener('change', function() {
        if (this.value === 'home') {
            addressGroup.style.display = 'block';
            document.getElementById('address').required = true;
        } else {
            addressGroup.style.display = 'none';
            document.getElementById('address').required = false;
        }
    });
}

// Handle appointment form submission
if (appointmentForm) {
    appointmentForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = {
            fullName: document.getElementById('fullName').value.trim(),
            age: document.getElementById('age').value,
            gender: document.getElementById('gender').value,
            mobile: document.getElementById('mobile').value.trim(),
            email: document.getElementById('email').value.trim(),
            selectedTests: selectedTests,
            testNames: selectedTests.map(id => availableTests.find(t => t.id === id).name),
            appointmentDate: document.getElementById('appointmentDate').value,
            appointmentTime: document.getElementById('appointmentTime').value,
            collectionType: document.getElementById('collectionType').value,
            address: document.getElementById('address').value.trim(),
            message: document.getElementById('message').value.trim(),
            bookingDate: new Date().toISOString()
        };
        
        // Validate tests selected
        if (selectedTests.length === 0) {
            alert('Please select at least one test');
            return;
        }
        
        // Validate phone number
        if (!validatePhone(formData.mobile)) {
            alert('Please enter a valid 10-digit mobile number');
            return;
        }
        
        // Validate email if provided
        if (formData.email && !validateEmail(formData.email)) {
            alert('Please enter a valid email address');
            return;
        }
        
        // Validate date is not in the past
        const selectedDate = new Date(formData.appointmentDate);
        const today = new Date();
        today.setHours(0, 0, 0, 0);
        
        if (selectedDate < today) {
            alert('Please select a future date for your appointment');
            return;
        }
        
        // Save to local storage
        let appointments = getFromLocalStorage('appointments') || [];
        appointments.push({
            name: formData.fullName,
            age: formData.age,
            gender: formData.gender,
            mobile: formData.mobile,
            email: formData.email,
            testType: formData.testNames.join(', '),
            tests: formData.selectedTests,
            date: formData.appointmentDate,
            time: formData.appointmentTime,
            collection: formData.collectionType === 'home' ? 'Home Collection' : 'Visit Lab',
            address: formData.address,
            message: formData.message,
            status: 'Pending',
            bookingDate: formData.bookingDate
        });
        saveToLocalStorage('appointments', appointments);
        
        // Show success message
        successMessage.classList.remove('hidden');
        appointmentForm.reset();
        selectedTests = [];
        renderSelectedTests();
        addressGroup.style.display = 'none';
        
        // Scroll to success message
        successMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        
        // Hide success message after 5 seconds
        setTimeout(() => {
            successMessage.classList.add('hidden');
        }, 5000);
        
        // Send confirmation (in real app, this would be an API call)
        console.log('Appointment booked:', formData);
    });
}

// Helper function to get test name from value
function getTestName(value) {
    const testNames = {
        'cbc': 'Complete Blood Count (CBC)',
        'sugar': 'Blood Sugar Test',
        'thyroid': 'Thyroid Profile',
        'lipid': 'Lipid Profile',
        'lft': 'Liver Function Test (LFT)',
        'kft': 'Kidney Function Test (KFT)',
        'urine': 'Urine Analysis',
        'dengue': 'Dengue Test',
        'typhoid': 'Typhoid Test',
        'covid': 'COVID-19 RT-PCR',
        'vitamin-d': 'Vitamin D Test',
        'vitamin-b12': 'Vitamin B12 Test',
        'basic-checkup': 'Basic Health Checkup',
        'full-body': 'Full Body Checkup',
        'cardiac': 'Cardiac Health Package',
        'women': "Women's Health Package",
        'executive': 'Executive Health Checkup',
        'senior': 'Senior Citizen Package',
        'other': 'Other'
    };
    return testNames[value] || value;
}

// Phone number formatting
const mobileInput = document.getElementById('mobile');
if (mobileInput) {
    mobileInput.addEventListener('input', function(e) {
        // Remove non-numeric characters
        this.value = this.value.replace(/\D/g, '');
        // Limit to 10 digits
        if (this.value.length > 10) {
            this.value = this.value.slice(0, 10);
        }
    });
}

// Age validation
const ageInput = document.getElementById('age');
if (ageInput) {
    ageInput.addEventListener('input', function(e) {
        if (this.value < 1) this.value = 1;
        if (this.value > 120) this.value = 120;
    });
}
