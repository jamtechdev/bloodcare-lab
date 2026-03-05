// Admin Panel JavaScript

// Login functionality
const loginForm = document.getElementById('loginForm');
const loginSection = document.getElementById('loginSection');
const dashboardSection = document.getElementById('dashboardSection');
const loginError = document.getElementById('loginError');

// Demo credentials
const ADMIN_CREDENTIALS = {
    username: 'admin',
    password: 'admin123'
};

// Check if already logged in
if (getFromLocalStorage('adminLoggedIn')) {
    showDashboard();
}

// Handle login
if (loginForm) {
    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const username = document.getElementById('username').value.trim();
        const password = document.getElementById('password').value;
        
        if (username === ADMIN_CREDENTIALS.username && password === ADMIN_CREDENTIALS.password) {
            saveToLocalStorage('adminLoggedIn', true);
            saveToLocalStorage('adminUsername', username);
            loginError.classList.add('hidden');
            showDashboard();
        } else {
            loginError.classList.remove('hidden');
        }
    });
}

// Show dashboard
function showDashboard() {
    loginSection.classList.add('hidden');
    dashboardSection.classList.remove('hidden');
    
    const adminName = getFromLocalStorage('adminUsername') || 'Admin';
    document.getElementById('adminName').textContent = adminName;
    
    // Load data
    loadPatients();
    loadReports();
    loadAppointments();
}

// Logout
function logout() {
    localStorage.removeItem('adminLoggedIn');
    localStorage.removeItem('adminUsername');
    loginSection.classList.remove('hidden');
    dashboardSection.classList.add('hidden');
    loginForm.reset();
}

// Tab switching
function showTab(tabName) {
    // Hide all tabs
    document.querySelectorAll('.tab-content').forEach(tab => {
        tab.classList.remove('active');
    });
    
    // Remove active class from all buttons
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    
    // Show selected tab
    document.getElementById(tabName + 'Tab').classList.add('active');
    
    // Add active class to clicked button
    event.target.closest('.tab-btn').classList.add('active');
}

// Load Patients
function loadPatients() {
    const patients = getFromLocalStorage('patients') || [];
    const tbody = document.getElementById('patientsTableBody');
    
    if (patients.length === 0) {
        tbody.innerHTML = '<tr><td colspan="6" class="text-center">No patients found</td></tr>';
        return;
    }
    
    tbody.innerHTML = patients.map(patient => `
        <tr>
            <td>${patient.id}</td>
            <td>${patient.name}</td>
            <td>${patient.mobile}</td>
            <td>${patient.age}</td>
            <td>${patient.gender}</td>
            <td>
                <div class="action-btns">
                    <button class="btn btn-primary btn-sm" onclick="editPatient('${patient.id}')">Edit</button>
                    <button class="btn btn-danger btn-sm" onclick="deletePatient('${patient.id}')">Delete</button>
                </div>
            </td>
        </tr>
    `).join('');
}

// Load Reports
function loadReports() {
    const reports = getFromLocalStorage('reports') || [];
    const tbody = document.getElementById('reportsTableBody');
    
    if (reports.length === 0) {
        tbody.innerHTML = '<tr><td colspan="6" class="text-center">No reports found</td></tr>';
        return;
    }
    
    tbody.innerHTML = reports.map(report => `
        <tr>
            <td>${report.patientId}</td>
            <td>${report.patientName}</td>
            <td>${report.testName}</td>
            <td>${report.testDate}</td>
            <td><span class="status-badge status-${report.status.toLowerCase()}">${report.status}</span></td>
            <td>
                <div class="action-btns">
                    <button class="btn btn-primary btn-sm" onclick="viewReport('${report.patientId}')">View</button>
                    <button class="btn btn-success btn-sm" onclick="downloadReportAdmin('${report.patientId}')">Download</button>
                </div>
            </td>
        </tr>
    `).join('');
}

// Load Appointments
function loadAppointments() {
    const appointments = getFromLocalStorage('appointments') || [];
    const tbody = document.getElementById('appointmentsTableBody');
    
    if (appointments.length === 0) {
        tbody.innerHTML = '<tr><td colspan="7" class="text-center">No appointments found</td></tr>';
        return;
    }
    
    tbody.innerHTML = appointments.map((apt, index) => `
        <tr>
            <td>${apt.name}</td>
            <td>${apt.mobile}</td>
            <td>${apt.testType}</td>
            <td>${apt.date}</td>
            <td>${apt.time}</td>
            <td>${apt.collection}</td>
            <td>
                <div class="action-btns">
                    <button class="btn btn-success btn-sm" onclick="confirmAppointment(${index})">Confirm</button>
                    <button class="btn btn-danger btn-sm" onclick="cancelAppointment(${index})">Cancel</button>
                </div>
            </td>
        </tr>
    `).join('');
}

// Add Patient Form
function showAddPatientForm() {
    document.getElementById('addPatientForm').classList.remove('hidden');
}

function hideAddPatientForm() {
    document.getElementById('addPatientForm').classList.add('hidden');
    document.getElementById('patientForm').reset();
}

// Handle Add Patient
const patientForm = document.getElementById('patientForm');
if (patientForm) {
    patientForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const newPatient = {
            id: document.getElementById('newPatientId').value.trim().toUpperCase(),
            name: document.getElementById('newPatientName').value.trim(),
            mobile: document.getElementById('newPatientMobile').value.trim(),
            age: document.getElementById('newPatientAge').value,
            gender: document.getElementById('newPatientGender').value
        };
        
        // Validate
        if (!validatePhone(newPatient.mobile)) {
            alert('Please enter a valid 10-digit mobile number');
            return;
        }
        
        // Check if patient ID already exists
        const patients = getFromLocalStorage('patients') || [];
        if (patients.some(p => p.id === newPatient.id)) {
            alert('Patient ID already exists. Please use a different ID.');
            return;
        }
        
        // Add patient
        patients.push(newPatient);
        saveToLocalStorage('patients', patients);
        
        // Reload table
        loadPatients();
        hideAddPatientForm();
        alert('Patient added successfully!');
    });
}

// Delete Patient
function deletePatient(patientId) {
    if (confirm('Are you sure you want to delete this patient?')) {
        let patients = getFromLocalStorage('patients') || [];
        patients = patients.filter(p => p.id !== patientId);
        saveToLocalStorage('patients', patients);
        loadPatients();
        alert('Patient deleted successfully!');
    }
}

// Upload Report Form
function showUploadReportForm() {
    document.getElementById('uploadReportForm').classList.remove('hidden');
}

function hideUploadReportForm() {
    document.getElementById('uploadReportForm').classList.add('hidden');
    document.getElementById('reportUploadForm').reset();
}

// Handle Upload Report
const reportUploadForm = document.getElementById('reportUploadForm');
if (reportUploadForm) {
    reportUploadForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const patientId = document.getElementById('reportPatientId').value.trim().toUpperCase();
        const testName = document.getElementById('reportTestName').value.trim();
        const status = document.getElementById('reportStatus').value;
        
        // Find patient
        const patients = getFromLocalStorage('patients') || [];
        const patient = patients.find(p => p.id === patientId);
        
        if (!patient) {
            alert('Patient ID not found. Please add the patient first.');
            return;
        }
        
        // Add report
        const reports = getFromLocalStorage('reports') || [];
        reports.push({
            patientId: patientId,
            patientName: patient.name,
            mobile: patient.mobile,
            testName: testName,
            testDate: new Date().toISOString().split('T')[0],
            status: status
        });
        saveToLocalStorage('reports', reports);
        
        // Reload table
        loadReports();
        hideUploadReportForm();
        alert('Report uploaded successfully!');
    });
}

// View Report
function viewReport(patientId) {
    const reports = getFromLocalStorage('reports') || [];
    const report = reports.find(r => r.patientId === patientId);
    if (report) {
        alert(`Report Details:\n\nPatient ID: ${report.patientId}\nPatient Name: ${report.patientName}\nTest: ${report.testName}\nDate: ${report.testDate}\nStatus: ${report.status}`);
    }
}

// Download Report (Admin)
function downloadReportAdmin(patientId) {
    alert(`Downloading report for Patient ID: ${patientId}`);
}

// Confirm Appointment
function confirmAppointment(index) {
    if (confirm('Confirm this appointment?')) {
        const appointments = getFromLocalStorage('appointments') || [];
        appointments[index].status = 'Confirmed';
        saveToLocalStorage('appointments', appointments);
        alert('Appointment confirmed! Patient will be notified.');
        loadAppointments();
    }
}

// Cancel Appointment
function cancelAppointment(index) {
    if (confirm('Cancel this appointment?')) {
        let appointments = getFromLocalStorage('appointments') || [];
        appointments.splice(index, 1);
        saveToLocalStorage('appointments', appointments);
        alert('Appointment cancelled.');
        loadAppointments();
    }
}

// Edit Patient (placeholder)
function editPatient(patientId) {
    alert('Edit functionality - Patient ID: ' + patientId);
}
