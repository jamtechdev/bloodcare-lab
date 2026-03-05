// Report Status Check
const reportForm = document.getElementById('reportForm');
const reportResult = document.getElementById('reportResult');
const downloadSection = document.getElementById('downloadSection');

if (reportForm) {
    reportForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const patientId = document.getElementById('patientId').value.trim().toUpperCase();
        const mobile = document.getElementById('mobile').value.trim();
        
        // Validate inputs
        if (!patientId || !mobile) {
            alert('Please fill in all required fields');
            return;
        }
        
        if (!validatePhone(mobile)) {
            alert('Please enter a valid 10-digit mobile number');
            return;
        }
        
        // Get reports from local storage
        const reports = getFromLocalStorage('reports') || [];
        
        // Find matching report
        const report = reports.find(r => 
            r.patientId.toUpperCase() === patientId && r.mobile === mobile
        );
        
        if (report) {
            // Display report details
            document.getElementById('resultPatientId').textContent = report.patientId;
            document.getElementById('resultPatientName').textContent = report.patientName;
            document.getElementById('resultTestName').textContent = report.testName;
            document.getElementById('resultTestDate').textContent = report.testDate;
            document.getElementById('resultMobile').textContent = report.mobile;
            
            // Set status with badge
            const statusElement = document.getElementById('resultStatus');
            if (report.status === 'Completed') {
                statusElement.innerHTML = '<span class="status-badge status-completed">Completed</span>';
                downloadSection.classList.remove('hidden');
            } else {
                statusElement.innerHTML = '<span class="status-badge status-processing">Processing</span>';
                downloadSection.classList.add('hidden');
            }
            
            reportResult.classList.remove('hidden');
            
            // Scroll to result
            reportResult.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        } else {
            alert('No report found with the provided Patient ID and Mobile Number. Please check your details and try again.');
            reportResult.classList.add('hidden');
        }
    });
}

// Download Report Function
function downloadReport() {
    const patientId = document.getElementById('resultPatientId').textContent;
    const patientName = document.getElementById('resultPatientName').textContent;
    const testName = document.getElementById('resultTestName').textContent;
    
    // In a real application, this would download the actual PDF
    // For demo purposes, we'll show an alert
    alert(`Downloading report for:\nPatient: ${patientName}\nPatient ID: ${patientId}\nTest: ${testName}\n\nNote: In production, this would download the actual PDF report.`);
    
    // Simulate download
    console.log('Report download initiated for Patient ID:', patientId);
}

// Auto-format Patient ID input
const patientIdInput = document.getElementById('patientId');
if (patientIdInput) {
    patientIdInput.addEventListener('input', function(e) {
        this.value = this.value.toUpperCase();
    });
}
