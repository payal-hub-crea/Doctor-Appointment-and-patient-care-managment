// ========================================
// MIT Hospital - Complete JavaScript
// ========================================

// ========================================
// Data Store
// ========================================
const doctorsData = [
    {
        id: 1,
        name: "Dr. S. P. Kulkarni",
        specialty: "Senior Cardiologist",
        department: "cardiology",
        image: "https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?auto=format&fit=crop&w=400&q=80",
        info: "Expert in interventional cardiology, bypass recovery, and structural heart care management.",
        schedule: "Mon - Sat (10:00 AM - 4:00 PM)",
        available: true,
        experience: "25+ years",
        education: "MD (Cardiology), FACC",
        languages: ["English", "Hindi", "Marathi"],
        consultationFee: 800
    },
    {
        id: 2,
        name: "Dr. Meera Deshmukh",
        specialty: "Neurology Specialist",
        department: "neurology",
            image: "https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&w=400&q=80",
        info: "Specializes in advanced neuro-trauma treatment, chronic migraines, and stroke rehabilitation.",
        schedule: "Tue - Fri (11:00 AM - 5:00 PM)",
        available: true,
        experience: "18+ years",
        education: "DM (Neurology), MBBS",
        languages: ["English", "Hindi", "Marathi"],
        consultationFee: 700
    },
    {
        id: 3,
        name: "Dr. R. A. Joshi",
        specialty: "Orthopedic Surgeon",
        department: "orthopedics",
        image: "https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=400&q=80",
        info: "Expert in complex joint replacements, robotic arthroscopy, and spine corrective surgeries.",
        schedule: "In Surgery Today",
        available: false,
        experience: "20+ years",
        education: "MS (Orthopedics), DNB",
        languages: ["English", "Hindi", "Marathi"],
        consultationFee: 750
    },
    {
        id: 4,
        name: "Dr. Anil Shinde",
        specialty: "Consultant Pediatrician",
        department: "pediatrics",
        image: "https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=400&q=80",
        info: "20+ years managing critical neonatological care, growth metrics, and childhood immunizations.",
        schedule: "Mon - Sat (9:00 AM - 1:00 PM)",
        available: true,
        experience: "22+ years",
        education: "MD (Pediatrics), DCH",
        languages: ["English", "Hindi", "Marathi"],
        consultationFee: 500
    },
    {
        id: 5,
        name: "Dr. Sunita Patil",
        specialty: "Obstetrics & Gynecology",
        department: "gynecology",
           image: "https://images.unsplash.com/photo-1594824476967-48c8b964273f?auto=format&fit=crop&w=400&q=80",
        info: "Expert in high-risk pregnancy deliveries, laparoscopic procedures, and maternal healthcare wellness.",
        schedule: "Mon - Fri (2:00 PM - 7:00 PM)",
        available: true,
        experience: "15+ years",
        education: "MD (OB-GYN), DGO",
        languages: ["English", "Hindi", "Marathi"],
        consultationFee: 600
    },
    {
        id: 6,
        name: "Dr. Vivek Shah",
        specialty: "General & Laparoscopic Surgeon",
        department: "surgery",
        image: "https://images.unsplash.com/photo-1618498082410-b4aa22193b38?auto=format&fit=crop&w=400&q=80",
        info: "Specializes in laser keyhole surgeries, hernia repair designs, and emergency abdominal procedures.",
        schedule: "Mon - Sat (4:00 PM - 8:00 PM)",
        available: true,
        experience: "16+ years",
        education: "MS (General Surgery), FMAS",
        languages: ["English", "Hindi", "Gujarati"],
        consultationFee: 650
    }
];

const galleryData = [
{ id: 1, category: "icu", image: "https://images.unsplash.com/photo-1551076805-e1869033e561?auto=format&fit=crop&w=500&q=80", title: "ICU", desc: "Critical care unit" },
{ id: 2, category: "diagnostic", image: "https://images.unsplash.com/photo-1581594693702-fbdc51b2763b?auto=format&fit=crop&w=500&q=80", title: "Lab", desc: "Diagnostics lab" },
{ id: 3, category: "ot", image: "https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=500&q=80", title: "Operation Theatre", desc: "Surgery room" },
{ id: 4, category: "rooms", image: "https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=500&q=80", title: "OPD", desc: "Waiting area" },
{ id: 5, category: "rooms", image: "https://images.unsplash.com/photo-1586773860418-d37222d8fce3?auto=format&fit=crop&w=500&q=500&q=80", title: "Rooms", desc: "Patient rooms" },
{ id: 6, category: "icu", image: "https://images.unsplash.com/photo-1551601651-2a8555f1a136?auto=format&fit=crop&w=500&q=80", title: "NICU", desc: "Newborn care" }
];

let internalReviews = [
    { author: "Rahul Deshpande", stars: 5, department: "Orthopedics", content: "The orthopedic team handled my father's hip replacement expertly. Post-op nursing support was remarkably careful.", date: "2026-05-25" },
    { author: "Pooja Jadhav", stars: 4, department: "Gynecology", content: "Dr. Sunita Patil's consultation was very detailed and reassuring. Slight wait time but worth it.", date: "2026-05-22" },
    { author: "Amit Sharma", stars: 5, department: "Cardiology", content: "Dr. Kulkarni saved my life. The cardiac care team is exceptional. Forever grateful!", date: "2026-05-20" }
];

let appointments = [];
let contactMessages = [];
let currentUser = null;
let currentAdmin = null;

// ========================================
// Initialization
// ========================================
document.addEventListener("DOMContentLoaded", () => {
    initializeSlider();
    initializeCounters();
    renderDoctors('all');
    renderGallery('all');
    loadSavedReviews();
    calculateAndDisplayRating();
    initializeDatePicker();
    initializeStarRating();
    loadFromLocalStorage();
    initializeSliderDots();
});

// ========================================
// Hero Slider
// ========================================
let currentSlide = 0;
let slideInterval;

function initializeSlider() {
    const slides = document.querySelectorAll('.slide');
    if (slides.length === 0) return;
    
    initializeSliderDots();
    startSlideShow();
}

function initializeSliderDots() {
    const slides = document.querySelectorAll('.slide');
    const dotsContainer = document.getElementById('sliderDots');
    if (!dotsContainer) return;
    
    dotsContainer.innerHTML = '';
    slides.forEach((_, index) => {
        const dot = document.createElement('span');
        dot.className = `dot ${index === 0 ? 'active' : ''}`;
        dot.onclick = () => goToSlide(index);
        dotsContainer.appendChild(dot);
    });
}

function startSlideShow() {
    slideInterval = setInterval(() => {
        changeSlide(1);
    }, 5000);
}

function changeSlide(direction) {
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.slider-dots .dot');
    
    slides[currentSlide].classList.remove('active');
    dots[currentSlide]?.classList.remove('active');
    
    currentSlide = (currentSlide + direction + slides.length) % slides.length;
    
    slides[currentSlide].classList.add('active');
    dots[currentSlide]?.classList.add('active');
    
    // Reset interval
    clearInterval(slideInterval);
    startSlideShow();
}

function goToSlide(index) {
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.slider-dots .dot');
    
    slides[currentSlide].classList.remove('active');
    dots[currentSlide]?.classList.remove('active');
    
    currentSlide = index;
    
    slides[currentSlide].classList.add('active');
    dots[currentSlide]?.classList.add('active');
    
    clearInterval(slideInterval);
    startSlideShow();
}

// ========================================
// Counter Animation
// ========================================
function initializeCounters() {
    const counters = document.querySelectorAll('.stat-number');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => observer.observe(counter));
}

function animateCounter(element) {
    const target = parseInt(element.dataset.count);
    const duration = 2000;
    const step = target / (duration / 16);
    let current = 0;
    
    const timer = setInterval(() => {
        current += step;
        if (current >= target) {
            element.textContent = target.toLocaleString();
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(current).toLocaleString();
        }
    }, 16);
}

// ========================================
// Mobile Menu
// ========================================
function toggleMobileMenu() {
    const mobileNav = document.getElementById('mobileNav');
    mobileNav.classList.toggle('active');
}

function closeMobileMenu() {
    const mobileNav = document.getElementById('mobileNav');
    mobileNav.classList.remove('active');
}

// ========================================
// Doctors Section
// ========================================
function renderDoctors(filter) {
    const container = document.getElementById('doctorContainer');
    if (!container) return;
    
    const filtered = filter === 'all' 
        ? doctorsData 
        : doctorsData.filter(d => d.department === filter);
    
    container.innerHTML = filtered.map(doctor => `
        <div class="dr-card" data-department="${doctor.department}">
            <div class="dr-image">
                <img src="${doctor.image}" alt="${doctor.name}">
                <div class="dr-social">
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="mailto:"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
            <div class="dr-info">
                <h3>${doctor.name}</h3>
                <p class="specialty">${doctor.specialty}</p>
                <p class="info">${doctor.info}</p>
                <div class="status ${doctor.available ? 'available' : 'unavailable'}">
                    ${doctor.schedule}
                </div>
                <button class="view-profile-btn" onclick="showDoctorDetails(${doctor.id})">
                    View Profile
                </button>
            </div>
        </div>
    `).join('');
}

function filterDoctors(filter) {
    // Update active button
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.classList.remove('active');
        if (btn.textContent.toLowerCase().includes(filter) || (filter === 'all' && btn.textContent === 'All')) {
            btn.classList.add('active');
        }
    });
    
    renderDoctors(filter);
}

function showDoctorDetails(id) {
    const doctor = doctorsData.find(d => d.id === id);
    if (!doctor) return;
    
    const modal = document.getElementById('doctorModal');
    const details = document.getElementById('doctorDetails');
    
    details.innerHTML = `
        <div class="doctor-detail-layout">
            <div class="doctor-detail-image">
                <img src="${doctor.image}" alt="${doctor.name}">
            </div>
            <div class="doctor-detail-info">
                <h2>${doctor.name}</h2>
                <p class="specialty">${doctor.specialty}</p>
                <div class="detail-grid">
                    <div class="detail-item">
                        <i class="fas fa-briefcase"></i>
                        <div>
                            <strong>Experience</strong>
                            <span>${doctor.experience}</span>
                        </div>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-graduation-cap"></i>
                        <div>
                            <strong>Education</strong>
                            <span>${doctor.education}</span>
                        </div>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <strong>Schedule</strong>
                            <span>${doctor.schedule}</span>
                        </div>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-rupee-sign"></i>
                        <div>
                            <strong>Consultation Fee</strong>
                            <span>₹${doctor.consultationFee}</span>
                        </div>
                    </div>
                </div>
                <p class="doctor-bio">${doctor.info}</p>
                <div class="languages">
                    <strong>Languages:</strong> ${doctor.languages.join(', ')}
                </div>
                <a href="#appointment" class="btn" onclick="closeDoctorModal(); prefillDoctor('${doctor.name}', '${doctor.department}');">
                    <i class="fas fa-calendar-check"></i> Book Appointment
                </a>
            </div>
        </div>
    `;
    
    modal.classList.add('active');
}

function closeDoctorModal() {
    document.getElementById('doctorModal').classList.remove('active');
}

function prefillDoctor(name, dept) {
    document.getElementById('apt-department').value = dept;
    loadDepartmentDoctors();
    setTimeout(() => {
        document.getElementById('apt-doctor').value = name;
    }, 100);
}

// ========================================
// Department Modal
// ========================================
const departmentInfo = {
    cardiology: {
        title: "Cardiology Department",
        description: "Our cardiology department offers comprehensive heart care services including preventive cardiology, interventional procedures, cardiac surgery, and rehabilitation programs.",
        services: ["ECG & Echo", "Angiography & Angioplasty", "Pacemaker Implantation", "Cardiac Surgery", "Heart Failure Management"]
    },
    neurology: {
        title: "Neurology Department",
        description: "Expert diagnosis and treatment of neurological disorders including stroke, epilepsy, Parkinson's disease, and neuromuscular conditions.",
        services: ["EEG & EMG", "Stroke Treatment", "Epilepsy Management", "Movement Disorders", "Neurorehabilitation"]
    },
    orthopedics: {
        title: "Orthopedics Department",
        description: "Advanced bone and joint care including joint replacements, sports medicine, trauma care, and spine surgery.",
        services: ["Joint Replacement", "Arthroscopy", "Spine Surgery", "Sports Medicine", "Fracture Management"]
    },
    pediatrics: {
        title: "Pediatrics Department",
        description: "Comprehensive child healthcare from newborn care to adolescent medicine with specialized pediatric ICU.",
        services: ["Well Baby Clinic", "Vaccination", "Neonatal Care", "Pediatric ICU", "Growth Monitoring"]
    },
    gynecology: {
        title: "Gynecology & Obstetrics",
        description: "Complete women's health services including maternity care, gynecological surgeries, and fertility treatments.",
        services: ["Prenatal Care", "High-Risk Pregnancy", "Laparoscopic Surgery", "Fertility Treatment", "Menopause Care"]
    },
    surgery: {
        title: "General Surgery",
        description: "Minimally invasive and advanced surgical procedures for various conditions with quick recovery times.",
        services: ["Laparoscopic Surgery", "Hernia Repair", "Gallbladder Surgery", "Appendectomy", "Trauma Surgery"]
    }
};

function showDepartmentDetails(dept) {
    const info = departmentInfo[dept];
    if (!info) return;
    
    const modal = document.getElementById('departmentModal');
    const details = document.getElementById('departmentDetails');
    
    details.innerHTML = `
        <h2>${info.title}</h2>
        <p>${info.description}</p>
        <h4>Our Services:</h4>
        <ul class="dept-services-list">
            ${info.services.map(s => `<li><i class="fas fa-check-circle"></i> ${s}</li>`).join('')}
        </ul>
        <a href="#appointment" class="btn" onclick="closeDepartmentModal()">
            <i class="fas fa-calendar-check"></i> Book Appointment
        </a>
    `;
    
    modal.classList.add('active');
}

function closeDepartmentModal() {
    document.getElementById('departmentModal').classList.remove('active');
}

// ========================================
// Gallery Section
// ========================================
let currentLightboxIndex = 0;

function renderGallery(filter) {
    const container = document.getElementById('galleryGrid');
    if (!container) return;
    
    const filtered = filter === 'all' 
        ? galleryData 
        : galleryData.filter(g => g.category === filter);
    
    container.innerHTML = filtered.map((item, index) => `
        <div class="gallery-item" onclick="openLightbox(${index}, '${filter}')">
            <img src="${item.image}" alt="${item.title}">
            <div class="gallery-overlay">
                <i class="fas fa-search-plus"></i>
                <h4>${item.title}</h4>
            </div>
        </div>
    `).join('');
}

function filterGallery(filter) {
    document.querySelectorAll('.gallery-tab').forEach(tab => {
        tab.classList.remove('active');
        if (tab.textContent.toLowerCase().includes(filter) || (filter === 'all' && tab.textContent === 'All')) {
            tab.classList.add('active');
        }
    });
    
    renderGallery(filter);
}

function openLightbox(index, filter) {
    const filtered = filter === 'all' 
        ? galleryData 
        : galleryData.filter(g => g.category === filter);
    
    currentLightboxIndex = index;
    const item = filtered[index];
    
    document.getElementById('lightboxImage').src = item.image;
    document.getElementById('lightboxCaption').textContent = item.title;
    document.getElementById('lightbox').classList.add('active');
}

function closeLightbox() {
    document.getElementById('lightbox').classList.remove('active');
}

function navigateLightbox(direction) {
    const items = galleryData;
    currentLightboxIndex = (currentLightboxIndex + direction + items.length) % items.length;
    const item = items[currentLightboxIndex];
    
    document.getElementById('lightboxImage').src = item.image;
    document.getElementById('lightboxCaption').textContent = item.title;
}

// ========================================
// Appointment Booking
// ========================================
function initializeDatePicker() {
    const dateInput = document.getElementById('apt-date');
    if (dateInput) {
        const today = new Date();
        const maxDate = new Date();
        maxDate.setMonth(maxDate.getMonth() + 2);
        
        dateInput.min = today.toISOString().split('T')[0];
        dateInput.max = maxDate.toISOString().split('T')[0];
    }
}

function loadDepartmentDoctors() {
    const dept = document.getElementById('apt-department').value;
    const doctorSelect = document.getElementById('apt-doctor');
    
    const deptDoctors = doctorsData.filter(d => d.department === dept);
    
    doctorSelect.innerHTML = '<option value="">Select Doctor</option>';
    deptDoctors.forEach(doctor => {
        doctorSelect.innerHTML += `<option value="${doctor.name}">${doctor.name} - ${doctor.specialty}</option>`;
    });
}

function bookAppointment(event) {
    event.preventDefault();
    
    const appointment = {
        id: 'APT-' + Date.now().toString().slice(-6),
        patientName: document.getElementById('apt-name').value,
        phone: document.getElementById('apt-phone').value,
        email: document.getElementById('apt-email').value,
        age: document.getElementById('apt-age').value,
        gender: document.getElementById('apt-gender').value,
        department: document.getElementById('apt-department').value,
        doctor: document.getElementById('apt-doctor').value,
        date: document.getElementById('apt-date').value,
        time: document.getElementById('apt-time').value,
        type: document.getElementById('apt-type').value,
        symptoms: document.getElementById('apt-symptoms').value,
        status: 'pending',
        createdAt: new Date().toISOString()
    };
    
    appointments.push(appointment);
    saveToLocalStorage();
    
    showToast(`Appointment booked successfully! ID: ${appointment.id}`, 'success');
    document.getElementById('appointmentForm').reset();
}

// ========================================
// Reviews System
// ========================================
function initializeStarRating() {
    const stars = document.querySelectorAll('#starRating i');
    stars.forEach(star => {
        star.addEventListener('click', function() {
            const rating = this.dataset.rating;
            document.getElementById('review-stars').value = rating;
            
            stars.forEach((s, index) => {
                if (index < rating) {
                    s.classList.remove('far');
                    s.classList.add('fas', 'active');
                } else {
                    s.classList.remove('fas', 'active');
                    s.classList.add('far');
                }
            });
        });
        
        star.addEventListener('mouseenter', function() {
            const rating = this.dataset.rating;
            stars.forEach((s, index) => {
                if (index < rating) {
                    s.classList.add('hover');
                }
            });
        });
        
        star.addEventListener('mouseleave', function() {
            stars.forEach(s => s.classList.remove('hover'));
        });
    });
}

function loadSavedReviews() {
    const savedData = localStorage.getItem("mit_hospital_reviews");
    if (savedData) {
        internalReviews = JSON.parse(savedData);
    }
    renderReviewsStream();
}

function renderReviewsStream() {
    const listContainer = document.getElementById("reviews-display-list");
    if (!listContainer) return;
    
    listContainer.innerHTML = internalReviews.map(review => `
        <div class="patient-review-node">
            <div class="node-meta">
                <span class="node-author">${review.author}</span>
                <span class="node-stars">${'★'.repeat(review.stars)}${'☆'.repeat(5 - review.stars)}</span>
            </div>
            ${review.department ? `<p class="node-dept"><i class="fas fa-hospital"></i> ${review.department}</p>` : ''}
            <p class="node-content">${review.content}</p>
        </div>
    `).join('');
}

function calculateAndDisplayRating() {
    if (internalReviews.length === 0) return;
    
    const totalScore = internalReviews.reduce((sum, rev) => sum + parseInt(rev.stars), 0);
    const average = (totalScore / internalReviews.length).toFixed(1);
    
    const avgDisplay = document.getElementById("average-rating-display");
    if (avgDisplay) avgDisplay.textContent = average;
    
    const totalDisplay = document.getElementById("totalReviews");
    if (totalDisplay) totalDisplay.textContent = internalReviews.length;
    
    // Update rating bars
    for (let i = 1; i <= 5; i++) {
        const count = internalReviews.filter(r => r.stars === i).length;
        const percentage = (count / internalReviews.length) * 100;
        
        const bar = document.getElementById(`bar${i}`);
        const countEl = document.getElementById(`count${i}`);
        
        if (bar) bar.style.width = `${percentage}%`;
        if (countEl) countEl.textContent = count;
    }
}

function addPatientReview(event) {
    event.preventDefault();
    
    const stars = parseInt(document.getElementById("review-stars").value);
    if (stars === 0) {
        showToast("Please select a star rating", "error");
        return;
    }
    
    const freshReview = {
        author: document.getElementById("review-author").value,
        stars: stars,
        department: document.getElementById("review-department").value,
        content: document.getElementById("review-text").value,
        date: new Date().toISOString().split('T')[0]
    };
    
    internalReviews.unshift(freshReview);
    localStorage.setItem("mit_hospital_reviews", JSON.stringify(internalReviews));
    
    renderReviewsStream();
    calculateAndDisplayRating();
    
    document.getElementById("review-submission-form").reset();
    document.querySelectorAll('#starRating i').forEach(s => {
        s.classList.remove('fas', 'active');
        s.classList.add('far');
    });
    document.getElementById("review-stars").value = 0;
    
    showToast("Thank you for your review!", "success");
}

// ========================================
// Contact Form
// ========================================
function submitContactForm(event) {
    event.preventDefault();
    
    const message = {
        id: 'MSG-' + Date.now().toString().slice(-6),
        name: document.getElementById('contact-name').value,
        email: document.getElementById('contact-email').value,
        phone: document.getElementById('contact-phone').value,
        subject: document.getElementById('contact-subject').value,
        message: document.getElementById('contact-message').value,
        status: 'unread',
        createdAt: new Date().toISOString()
    };
    
    contactMessages.push(message);
    saveToLocalStorage();
    
    showToast("Message sent successfully! We'll get back to you soon.", "success");
    document.getElementById('contactForm').reset();
}

// ========================================
// Patient Portal - Auth
// ========================================
function switchTab(tab) {
    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');
    const loginBtn = document.getElementById('tab-login-btn');
    const registerBtn = document.getElementById('tab-register-btn');

    if (tab === 'login') {
        loginForm.classList.remove('hidden');
        registerForm.classList.add('hidden');
        loginBtn.classList.add('active-tab');
        registerBtn.classList.remove('active-tab');
    } else {
        loginForm.classList.add('hidden');
        registerForm.classList.remove('hidden');
        loginBtn.classList.remove('active-tab');
        registerBtn.classList.add('active-tab');
    }
}

function handleRegister(event) {
    event.preventDefault();
    
    const password = document.getElementById('reg-pass').value;
    const confirm = document.getElementById('reg-confirm').value;
    
    if (password !== confirm) {
        showToast("Passwords do not match!", "error");
        return;
    }
    
    const email = document.getElementById('reg-email').value;
    
    if (localStorage.getItem(`patient_${email}`)) {
        showToast("An account with this email already exists!", "error");
        return;
    }
    
    const userData = {
        id: 'MIT-' + Date.now().toString().slice(-6),
        name: document.getElementById('reg-name').value,
        email: email,
        phone: document.getElementById('reg-phone').value,
        password: password,
        dob: '',
        gender: '',
        bloodGroup: '',
        address: '',
        city: '',
        state: '',
        pincode: '',
        emergencyName: '',
        emergencyRelation: '',
        emergencyPhone: '',
        createdAt: new Date().toISOString()
    };
    
    localStorage.setItem(`patient_${email}`, JSON.stringify(userData));
    showToast("Registration successful! Please login.", "success");
    switchTab('login');
    document.getElementById('register-form').reset();
}

function handleLogin(event) {
    event.preventDefault();
    
    const email = document.getElementById('login-email').value;
    const password = document.getElementById('login-pass').value;
    const storedUser = localStorage.getItem(`patient_${email}`);
    
    if (storedUser) {
        const userData = JSON.parse(storedUser);
        if (userData.password === password) {
            currentUser = userData;
            showToast("Login successful!", "success");
            showDashboard(userData);
        } else {
            showToast("Incorrect password!", "error");
        }
    } else {
        showToast("No account found with this email!", "error");
    }
}

function showDashboard(user) {
    document.getElementById('auth-container').classList.add('hidden');
    document.getElementById('profile-container').classList.remove('hidden');
    
    // Update sidebar
    document.getElementById('sidebar-patient-name').textContent = user.name;
    document.getElementById('sidebar-patient-id').textContent = `ID: ${user.id}`;
    
    // Update profile form
    document.getElementById('prof-name').value = user.name;
    document.getElementById('prof-email').value = user.email;
    document.getElementById('prof-phone').value = user.phone || '';
    document.getElementById('prof-dob').value = user.dob || '';
    document.getElementById('prof-gender').value = user.gender || '';
    document.getElementById('prof-blood').value = user.bloodGroup || '';
    document.getElementById('prof-address').value = user.address || '';
    document.getElementById('prof-city').value = user.city || '';
    document.getElementById('prof-state').value = user.state || '';
    document.getElementById('prof-pincode').value = user.pincode || '';
    document.getElementById('prof-emergency-name').value = user.emergencyName || '';
    document.getElementById('prof-emergency-relation').value = user.emergencyRelation || '';
    document.getElementById('prof-emergency-phone').value = user.emergencyPhone || '';
    
    // Load user appointments
    loadUserAppointments();
}

function showDashboardTab(tab) {
    document.querySelectorAll('.dashboard-tab').forEach(t => t.classList.remove('active'));
    document.querySelectorAll('.dashboard-nav a').forEach(a => a.classList.remove('active'));
    
    document.getElementById(`tab-${tab}`).classList.add('active');
    event.target.classList.add('active');
}

function loadUserAppointments() {
    const userAppointments = appointments.filter(a => 
        currentUser && a.email === currentUser.email
    );
    
    document.getElementById('total-appointments').textContent = userAppointments.length;
    document.getElementById('upcoming-appointments').textContent = 
        userAppointments.filter(a => a.status !== 'completed' && a.status !== 'cancelled').length;
}

function saveProfile(event) {
    event.preventDefault();
    
    if (!currentUser) return;
    
    currentUser.name = document.getElementById('prof-name').value;
    currentUser.phone = document.getElementById('prof-phone').value;
    currentUser.dob = document.getElementById('prof-dob').value;
    currentUser.gender = document.getElementById('prof-gender').value;
    currentUser.bloodGroup = document.getElementById('prof-blood').value;
    currentUser.address = document.getElementById('prof-address').value;
    currentUser.city = document.getElementById('prof-city').value;
    currentUser.state = document.getElementById('prof-state').value;
    currentUser.pincode = document.getElementById('prof-pincode').value;
    currentUser.emergencyName = document.getElementById('prof-emergency-name').value;
    currentUser.emergencyRelation = document.getElementById('prof-emergency-relation').value;
    currentUser.emergencyPhone = document.getElementById('prof-emergency-phone').value;
    
    localStorage.setItem(`patient_${currentUser.email}`, JSON.stringify(currentUser));
    document.getElementById('sidebar-patient-name').textContent = currentUser.name;
    
    showToast("Profile updated successfully!", "success");
}

function logout() {
    currentUser = null;
    document.getElementById('profile-container').classList.add('hidden');
    document.getElementById('auth-container').classList.remove('hidden');
    document.getElementById('login-form').reset();
    showToast("Logged out successfully!", "success");
}

// ========================================
// Admin Portal
// ========================================
function handleAdminLogin(event) {
    event.preventDefault();
    
    const username = document.getElementById('admin-username').value;
    const password = document.getElementById('admin-password').value;
    
    // Default admin credentials (in production, this should be server-side)
    if (username === 'admin' && password === 'admin123') {
        currentAdmin = { username: 'admin' };
        showToast("Admin login successful!", "success");
        showAdminDashboard();
    } else {
        showToast("Invalid admin credentials!", "error");
    }
}

function showAdminDashboard() {
    document.getElementById('admin-auth-container').classList.add('hidden');
    document.getElementById('admin-dashboard').classList.remove('hidden');
    
    loadAdminStats();
    loadAdminTables();
}

function loadAdminStats() {
    // Count patients
    let patientCount = 0;
    for (let key in localStorage) {
        if (key.startsWith('patient_')) patientCount++;
    }
    
    document.getElementById('admin-total-patients').textContent = patientCount;
    document.getElementById('admin-total-appointments').textContent = appointments.length;
    document.getElementById('admin-total-reviews').textContent = internalReviews.length;
    
    // Today's appointments
    const today = new Date().toISOString().split('T')[0];
    const todayApts = appointments.filter(a => a.date === today);
    document.getElementById('admin-today-appointments').textContent = todayApts.length;
}

function loadAdminTables() {
    loadPatientsTable();
    loadAppointmentsTable();
    loadDoctorsTable();
    loadAdminReviews();
    loadAdminContacts();
}

function loadPatientsTable() {
    const tbody = document.getElementById('patients-tbody');
    if (!tbody) return;
    
    tbody.innerHTML = '';
    for (let key in localStorage) {
        if (key.startsWith('patient_')) {
            const patient = JSON.parse(localStorage.getItem(key));
            tbody.innerHTML += `
                <tr>
                    <td>${patient.id}</td>
                    <td>${patient.name}</td>
                    <td>${patient.email}</td>
                    <td>${patient.phone || '-'}</td>
                    <td>${patient.bloodGroup || '-'}</td>
                    <td>
                        <div class="action-btns">
                            <button class="action-btn view" onclick="viewPatient('${patient.email}')">View</button>
                            <button class="action-btn delete" onclick="deletePatient('${patient.email}')">Delete</button>
                        </div>
                    </td>
                </tr>
            `;
        }
    }
}

function loadAppointmentsTable() {
    const tbody = document.getElementById('appointments-tbody');
    if (!tbody) return;
    
    tbody.innerHTML = appointments.map(apt => `
        <tr>
            <td>${apt.id}</td>
            <td>${apt.patientName}</td>
            <td>${apt.doctor}</td>
            <td>${apt.department}</td>
            <td>${apt.date} ${apt.time}</td>
            <td><span class="status-badge ${apt.status}">${apt.status}</span></td>
            <td>
                <div class="action-btns">
                    <button class="action-btn edit" onclick="updateAppointmentStatus('${apt.id}', 'confirmed')">Confirm</button>
                    <button class="action-btn delete" onclick="updateAppointmentStatus('${apt.id}', 'cancelled')">Cancel</button>
                </div>
            </td>
        </tr>
    `).join('');
}

function loadDoctorsTable() {
    const tbody = document.getElementById('doctors-tbody');
    if (!tbody) return;
    
    tbody.innerHTML = doctorsData.map(doc => `
        <tr>
            <td>${doc.id}</td>
            <td>${doc.name}</td>
            <td>${doc.specialty}</td>
            <td>${doc.department}</td>
            <td>${doc.schedule}</td>
            <td><span class="status-badge ${doc.available ? 'confirmed' : 'cancelled'}">${doc.available ? 'Available' : 'Unavailable'}</span></td>
            <td>
                <div class="action-btns">
                    <button class="action-btn view">View</button>
                    <button class="action-btn edit">Edit</button>
                </div>
            </td>
        </tr>
    `).join('');
}

function loadAdminReviews() {
    const container = document.getElementById('admin-reviews-list');
    if (!container) return;
    
    container.innerHTML = internalReviews.map(review => `
        <div class="patient-review-node">
            <div class="node-meta">
                <span class="node-author">${review.author}</span>
                <span class="node-stars">${'★'.repeat(review.stars)}${'☆'.repeat(5 - review.stars)}</span>
            </div>
            ${review.department ? `<p class="node-dept">${review.department}</p>` : ''}
            <p class="node-content">${review.content}</p>
            <p class="node-date" style="font-size:12px;color:#999;margin-top:10px;">${review.date}</p>
        </div>
    `).join('');
}

function loadAdminContacts() {
    const container = document.getElementById('admin-contacts-list');
    if (!container) return;
    
    if (contactMessages.length === 0) {
        container.innerHTML = '<p class="no-data">No messages yet</p>';
        return;
    }
    
    container.innerHTML = contactMessages.map(msg => `
        <div class="contact-message-card" style="background:#f8f9fa;padding:20px;margin-bottom:15px;border-radius:8px;border-left:4px solid ${msg.status === 'unread' ? 'var(--primary-color)' : '#ccc'};">
            <div style="display:flex;justify-content:space-between;margin-bottom:10px;">
                <strong>${msg.name}</strong>
                <span style="font-size:12px;color:#999;">${msg.createdAt.split('T')[0]}</span>
            </div>
            <p style="font-size:13px;color:#666;margin-bottom:5px;">${msg.email} | ${msg.phone || 'No phone'}</p>
            <p style="font-size:14px;font-weight:600;color:var(--secondary-color);margin-bottom:10px;">${msg.subject}</p>
            <p style="font-size:14px;color:#555;">${msg.message}</p>
        </div>
    `).join('');
}

function showAdminTab(tab) {
    document.querySelectorAll('.admin-tab').forEach(t => t.classList.remove('active'));
    document.querySelectorAll('.admin-nav-btn').forEach(b => b.classList.remove('active'));
    
    document.getElementById(`admin-tab-${tab}`).classList.add('active');
    event.target.classList.add('active');
}

function updateAppointmentStatus(id, status) {
    const apt = appointments.find(a => a.id === id);
    if (apt) {
        apt.status = status;
        saveToLocalStorage();
        loadAppointmentsTable();
        showToast(`Appointment ${status}!`, 'success');
    }
}

function deletePatient(email) {
    if (confirm('Are you sure you want to delete this patient?')) {
        localStorage.removeItem(`patient_${email}`);
        loadPatientsTable();
        loadAdminStats();
        showToast('Patient deleted!', 'success');
    }
}

function searchPatients() {
    const search = document.getElementById('patient-search').value.toLowerCase();
    const rows = document.querySelectorAll('#patients-tbody tr');
    
    rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(search) ? '' : 'none';
    });
}

function filterAdminAppointments() {
    const status = document.getElementById('admin-apt-filter').value;
    const date = document.getElementById('admin-apt-date').value;
    
    let filtered = appointments;
    if (status !== 'all') {
        filtered = filtered.filter(a => a.status === status);
    }
    if (date) {
        filtered = filtered.filter(a => a.date === date);
    }
    
    const tbody = document.getElementById('appointments-tbody');
    tbody.innerHTML = filtered.map(apt => `
        <tr>
            <td>${apt.id}</td>
            <td>${apt.patientName}</td>
            <td>${apt.doctor}</td>
            <td>${apt.department}</td>
            <td>${apt.date} ${apt.time}</td>
            <td><span class="status-badge ${apt.status}">${apt.status}</span></td>
            <td>
                <div class="action-btns">
                    <button class="action-btn edit" onclick="updateAppointmentStatus('${apt.id}', 'confirmed')">Confirm</button>
                    <button class="action-btn delete" onclick="updateAppointmentStatus('${apt.id}', 'cancelled')">Cancel</button>
                </div>
            </td>
        </tr>
    `).join('');
}

function adminLogout() {
    currentAdmin = null;
    document.getElementById('admin-dashboard').classList.add('hidden');
    document.getElementById('admin-auth-container').classList.remove('hidden');
    document.getElementById('admin-login-form').reset();
    showToast("Admin logged out!", "success");
}

// ========================================
// Utility Functions
// ========================================
function showToast(message, type = 'success') {
    const toast = document.getElementById('toast');
    toast.textContent = message;
    toast.className = `toast ${type} show`;
    
    setTimeout(() => {
        toast.classList.remove('show');
    }, 3000);
}

function showLoading() {
    document.getElementById('loading').classList.remove('hidden');
}

function hideLoading() {
    document.getElementById('loading').classList.add('hidden');
}

function saveToLocalStorage() {
    localStorage.setItem('mit_appointments', JSON.stringify(appointments));
    localStorage.setItem('mit_contacts', JSON.stringify(contactMessages));
}

function loadFromLocalStorage() {
    const savedAppointments = localStorage.getItem('mit_appointments');
    const savedContacts = localStorage.getItem('mit_contacts');
    
    if (savedAppointments) appointments = JSON.parse(savedAppointments);
    if (savedContacts) contactMessages = JSON.parse(savedContacts);
}

// Close modals on outside click
window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
        event.target.classList.remove('active');
    }
    if (event.target.classList.contains('lightbox')) {
        closeLightbox();
    }
};

// Keyboard navigation
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeLightbox();
        closeDoctorModal();
        closeDepartmentModal();
    }
    if (document.getElementById('lightbox').classList.contains('active')) {
        if (e.key === 'ArrowLeft') navigateLightbox(-1);
        if (e.key === 'ArrowRight') navigateLightbox(1);
    }
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (href !== '#') {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    });
});
function logoutUser() {
    // Clear session / storage (if used)
    localStorage.clear();
    sessionStorage.clear();

    // Redirect to login page or home
    window.location.href = "login.php"; // किंवा "index.html"
}
function loadPatients()
{
    fetch("get_patients.php")
    .then(res => res.text())
    .then(data => {
        document.getElementById("patients-tbody").innerHTML = data;
    });
}

window.onload = function(){
    loadPatients();
}
function loadAppointments()
{
    fetch("get_appointments.php")
    .then(res => res.text())
    .then(data => {
        document.getElementById("appointments-tbody").innerHTML = data;
    });
}

window.onload = function()
{
    loadPatients();
    loadAppointments();
}


