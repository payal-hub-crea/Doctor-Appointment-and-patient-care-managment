<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIT Hospital | Chhatrapati Sambhajinagar</title>
    <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <a href="#" class="emergency-float" onclick="callEmergency()">
    <i class="fas fa-phone-alt"></i>
    <span>Emergency</span>
</a>

<script>
function callEmergency() {
    if(confirm("Call Emergency Number: +91 2402 473399 ?")) {
        window.location.href = "tel:+912402473399";
    }
}
</script>
<!-- Top Info Bar -->
<div class="top-bar">

    <div class="top-info-left">
        <span><i class="fas fa-ambulance"></i> Emergency: +91 (240) 2473399</span>
        <span><i class="fas fa-envelope"></i> info@mithospital.com</span>
        <span><i class="fas fa-clock"></i> 24/7 Emergency | OPD: 9 AM - 8 PM</span>
    </div>

    <div class="top-info-right">

        <!-- Language -->
        <select class="lang-dropdown">
            <option>EN</option>
            <option>MR</option>
            <option>HI</option>
        </select>

        <!-- Admin Button -->
        <a href="#admin-login" class="admin-link">
            <i class="fas fa-user-shield"></i> Admin
        </a>

        <!-- Logout Button -->
        <button class="logout-btn" onclick="logoutUser()">
            <i class="fas fa-sign-out-alt"></i> Logout
        </button>

    </div>

</div>


    <!-- Main Navigation Header -->
    <!-- Main Navigation Header -->
<header class="main-header">
    <div class="header-left">
        <div class="logo">
            <i class="fas fa-hospital"></i>
            MIT<span>Hospital</span>
        </div>

        <nav class="nav-links" id="navLinks">
            <a href="#home"><i class="fas fa-home"></i> Home</a>
            <a href="#about"><i class="fas fa-info-circle"></i> About</a>
            <a href="#departments"><i class="fas fa-sitemap"></i> Departments</a>
            <a href="#doctors"><i class="fas fa-user-md"></i> Doctors</a>
            <a href="#services"><i class="fas fa-ambulance"></i> Services</a>
            <a href="#gallery"><i class="fas fa-images"></i> Gallery</a>
            <a href="#feedback"><i class="fas fa-star"></i> Reviews</a>
            <a href="#contact"><i class="fas fa-map-marker-alt"></i> Contact</a>

            <!-- FIX: Book Appointment -->
            <a href="#appointment" class="nav-booking-btn">
                <i class="fas fa-calendar-check"></i> Book Appointment
            </a>
        </nav>
    </div>
</header>

    <!-- Mobile Navigation -->
    <nav class="mobile-nav" id="mobileNav">
        <a href="#home" onclick="closeMobileMenu()">Home</a>
        <a href="#about" onclick="closeMobileMenu()">About</a>
        <a href="#departments" onclick="closeMobileMenu()">Departments</a>
        <a href="#doctors" onclick="closeMobileMenu()">Doctors</a>
        <a href="#services" onclick="closeMobileMenu()">Services</a>
        <a href="#gallery" onclick="closeMobileMenu()">Gallery</a>
        <a href="#feedback" onclick="closeMobileMenu()">Reviews</a>
        <a href="#contact" onclick="closeMobileMenu()">Contact</a>
        <a href="#appointment" onclick="closeMobileMenu()">Book Appointment</a>
        
    </nav>

    <!-- Hero Section with Auto Slider -->
    <section id="home" class="hero-slider">
        <div class="slider-container">
            <div class="slide active" style="background-image: url('[images.unsplash.com](https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=1200&q=80)');">
                <div class="slide-content">
                    <h1 class="animate-fadeInUp">Advanced Healthcare, Trusted Excellence</h1>
                    <p class="animate-fadeInUp delay-1">MIT Hospital & Research Institute — Providing compassionate medical services in Chhatrapati Sambhajinagar.</p>
                    <a href="#appointment" class="btn animate-fadeInUp delay-2">Book Appointment</a>
                </div>
            </div>
            <div class="slide" style="background-image: url('[images.unsplash.com](https://images.unsplash.com/photo-1551076805-e1869033e561?auto=format&fit=crop&w=1200&q=80)');">
                <div class="slide-content">
                    <h1 class="animate-fadeInUp">World-Class Medical Facilities</h1>
                    <p class="animate-fadeInUp delay-1">State-of-the-art equipment and technology for precise diagnosis and treatment.</p>
                    <a href="#departments" class="btn animate-fadeInUp delay-2">Our Departments</a>
                </div>
            </div>
            <div class="slide" style="background-image: url('[images.unsplash.com](https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=1200&q=80)');">
                <div class="slide-content">
                    <h1 class="animate-fadeInUp">Expert Medical Professionals</h1>
                    <p class="animate-fadeInUp delay-1">Highly qualified specialists dedicated to your health and recovery.</p>
                    <a href="#doctors" class="btn animate-fadeInUp delay-2">Meet Our Doctors</a>
                </div>
            </div>
            <div class="slide" style="background-image: url('[images.unsplash.com](https://images.unsplash.com/photo-1516549655169-df83a0774514?auto=format&fit=crop&w=1200&q=80)');">
                <div class="slide-content">
                    <h1 class="animate-fadeInUp">24/7 Emergency Services</h1>
                    <p class="animate-fadeInUp delay-1">Round-the-clock emergency care with rapid response ambulance services.</p>
                    <a href="#services" class="btn animate-fadeInUp delay-2">Emergency Services</a>
                </div>
            </div>
        </div>
        <div class="slider-controls">
            <button class="slider-btn prev" onclick="changeSlide(-1)"><i class="fas fa-chevron-left"></i></button>
            <div class="slider-dots" id="sliderDots"></div>
            <button class="slider-btn next" onclick="changeSlide(1)"><i class="fas fa-chevron-right"></i></button>
        </div>
    </section>

    <!-- Quick Stats Section -->
    <section class="quick-stats">
        <div class="stat-card">
            <i class="fas fa-user-md"></i>
            <div class="stat-number" data-count="50">0</div>
            <p>Expert Doctors</p>
        </div>
        <div class="stat-card">
            <i class="fas fa-procedures"></i>
            <div class="stat-number" data-count="200">0</div>
            <p>Hospital Beds</p>
        </div>
        <div class="stat-card">
            <i class="fas fa-award"></i>
            <div class="stat-number" data-count="25">0</div>
            <p>Years Experience</p>
        </div>
        <div class="stat-card">
            <i class="fas fa-smile"></i>
            <div class="stat-number" data-count="50000">0</div>
            <p>Happy Patients</p>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <h2 class="section-title">About MIT Hospital & Research Institute</h2>
        <div class="about-container">
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?auto=format&fit=crop&w=600&q=80" 
alt="MIT Hospital Building">
<div class="experience-badge">
                    <span class="years">25+</span>
                    <span class="text">Years of Excellence</span>
                </div>
            </div>
            <div class="about-content">
                <h3>Leading Healthcare Provider in Marathwada</h3>
                <p>MIT Hospital, located in Chhatrapati Sambhajinagar, stands as a premier healthcare provider dedicated to delivering premium clinical standards and accessible treatment models. Equipped with highly trained consultants, specialized surgical technology, and comprehensive diagnostic wings, we strive to elevate community wellness across Marathwada.</p>
                <p>Our commitment to excellence is reflected in our state-of-the-art facilities, compassionate care approach, and continuous medical education programs that keep our staff updated with the latest medical advancements.</p>
                <div class="about-features">
                    <div class="feature-box">
                        <i class="fas fa-heartbeat"></i>
                        <strong>Level-1</strong>
                        <span>Trauma Care</span>
                    </div>
                    <div class="feature-box">
                        <i class="fas fa-hospital"></i>
                        <strong>State-of-the-Art</strong>
                        <span>ICU Units</span>
                    </div>
                    <div class="feature-box">
                        <i class="fas fa-microscope"></i>
                        <strong>Comprehensive</strong>
                        <span>Diagnostics</span>
                    </div>
                </div>
                <div class="about-highlights">
                    <div class="highlight"><i class="fas fa-check-circle"></i> NABH Accredited Hospital</div>
                    <div class="highlight"><i class="fas fa-check-circle"></i> 24/7 Emergency Services</div>
                    <div class="highlight"><i class="fas fa-check-circle"></i> Advanced Surgical Suites</div>
                    <div class="highlight"><i class="fas fa-check-circle"></i> Cashless Insurance Facility</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Vision Values -->
    <section class="mvv-section">
        <div class="mvv-card">
            <div class="mvv-icon"><i class="fas fa-bullseye"></i></div>
            <h3>Our Mission</h3>
            <p>To provide accessible, affordable, and quality healthcare services to all sections of society while maintaining the highest standards of medical ethics and patient care.</p>
        </div>
        <div class="mvv-card">
            <div class="mvv-icon"><i class="fas fa-eye"></i></div>
            <h3>Our Vision</h3>
            <p>To be the most trusted healthcare institution in the region, recognized for clinical excellence, innovation, and compassionate patient-centered care.</p>
        </div>
        <div class="mvv-card">
            <div class="mvv-icon"><i class="fas fa-heart"></i></div>
            <h3>Our Values</h3>
            <p>Integrity, Compassion, Excellence, Innovation, and Teamwork form the foundation of everything we do at MIT Hospital.</p>
        </div>
    </section>

    <!-- Departments Section -->
    <section id="departments" class="section gray-bg">
        <h2 class="section-title">Our Departments</h2>
        <p class="section-subtitle">Comprehensive medical care across all specialties</p>
        <div class="departments-grid">
            <div class="dept-card" onclick="showDepartmentDetails('cardiology')">
                <div class="dept-icon"><i class="fas fa-heartbeat"></i></div>
                <h3>Cardiology</h3>
                <p>Complete heart care including diagnostics, interventional procedures, and cardiac surgery.</p>
                <span class="dept-link">Learn More <i class="fas fa-arrow-right"></i></span>
            </div>
            <div class="dept-card" onclick="showDepartmentDetails('neurology')">
                <div class="dept-icon"><i class="fas fa-brain"></i></div>
                <h3>Neurology</h3>
                <p>Expert diagnosis and treatment of neurological disorders and brain-related conditions.</p>
                <span class="dept-link">Learn More <i class="fas fa-arrow-right"></i></span>
            </div>
            <div class="dept-card" onclick="showDepartmentDetails('orthopedics')">
                <div class="dept-icon"><i class="fas fa-bone"></i></div>
                <h3>Orthopedics</h3>
                <p>Advanced bone and joint care including replacements, sports medicine, and trauma care.</p>
                <span class="dept-link">Learn More <i class="fas fa-arrow-right"></i></span>
            </div>
            <div class="dept-card" onclick="showDepartmentDetails('pediatrics')">
                <div class="dept-icon"><i class="fas fa-baby"></i></div>
                <h3>Pediatrics</h3>
                <p>Comprehensive child healthcare from newborn care to adolescent medicine.</p>
                <span class="dept-link">Learn More <i class="fas fa-arrow-right"></i></span>
            </div>
            <div class="dept-card" onclick="showDepartmentDetails('gynecology')">
                <div class="dept-icon"><i class="fas fa-female"></i></div>
                <h3>Gynecology & Obstetrics</h3>
                <p>Complete women's health services including maternity care and gynecological surgeries.</p>
                <span class="dept-link">Learn More <i class="fas fa-arrow-right"></i></span>
            </div>
            <div class="dept-card" onclick="showDepartmentDetails('surgery')">
                <div class="dept-icon"><i class="fas fa-procedures"></i></div>
                <h3>General Surgery</h3>
                <p>Minimally invasive and advanced surgical procedures for various conditions.</p>
                <span class="dept-link">Learn More <i class="fas fa-arrow-right"></i></span>
            </div>
            <div class="dept-card" onclick="showDepartmentDetails('oncology')">
                <div class="dept-icon"><i class="fas fa-ribbon"></i></div>
                <h3>Oncology</h3>
                <p>Comprehensive cancer care including chemotherapy, radiation, and surgical oncology.</p>
                <span class="dept-link">Learn More <i class="fas fa-arrow-right"></i></span>
            </div>
            <div class="dept-card" onclick="showDepartmentDetails('ent')">
                <div class="dept-icon"><i class="fas fa-ear-listen"></i></div>
                <h3>ENT</h3>
                <p>Diagnosis and treatment of ear, nose, and throat disorders for all age groups.</p>
                <span class="dept-link">Learn More <i class="fas fa-arrow-right"></i></span>
            </div>
            <div class="dept-card" onclick="showDepartmentDetails('ophthalmology')">
                <div class="dept-icon"><i class="fas fa-eye"></i></div>
                <h3>Ophthalmology</h3>
                <p>Complete eye care services including cataract surgery and retina treatments.</p>
                <span class="dept-link">Learn More <i class="fas fa-arrow-right"></i></span>
            </div>
            <div class="dept-card" onclick="showDepartmentDetails('dermatology')">
                <div class="dept-icon"><i class="fas fa-allergies"></i></div>
                <h3>Dermatology</h3>
                <p>Skin care treatments, cosmetic procedures, and dermatological surgeries.</p>
                <span class="dept-link">Learn More <i class="fas fa-arrow-right"></i></span>
            </div>
            <div class="dept-card" onclick="showDepartmentDetails('radiology')">
                <div class="dept-icon"><i class="fas fa-x-ray"></i></div>
                <h3>Radiology</h3>
                <p>Advanced imaging services including MRI, CT scan, X-ray, and ultrasound.</p>
                <span class="dept-link">Learn More <i class="fas fa-arrow-right"></i></span>
            </div>
            <div class="dept-card" onclick="showDepartmentDetails('pathology')">
                <div class="dept-icon"><i class="fas fa-vial"></i></div>
                <h3>Pathology</h3>
                <p>Comprehensive laboratory services for accurate disease diagnosis.</p>
                <span class="dept-link">Learn More <i class="fas fa-arrow-right"></i></span>
            </div>
        </div>
    </section>

    <!-- Department Modal -->
    <div id="departmentModal" class="modal">
        <div class="modal-content">
            <span class="close-modal" onclick="closeDepartmentModal()">&times;</span>
            <div id="departmentDetails"></div>
        </div>
    </div>

    <!-- Doctor Section -->
    <section id="doctors" class="section">
        <h2 class="section-title">Our Specialist Doctors</h2>
        <p class="section-subtitle">Meet our team of experienced medical professionals</p>
        
        <!-- Department Filter -->
        <div class="doctor-filter">
            <button class="filter-btn active" onclick="filterDoctors('all')">All</button>
            <button class="filter-btn" onclick="filterDoctors('cardiology')">Cardiology</button>
            <button class="filter-btn" onclick="filterDoctors('neurology')">Neurology</button>
            <button class="filter-btn" onclick="filterDoctors('orthopedics')">Orthopedics</button>
            <button class="filter-btn" onclick="filterDoctors('pediatrics')">Pediatrics</button>
            <button class="filter-btn" onclick="filterDoctors('gynecology')">Gynecology</button>
        </div>
        
        <div class="doctor-container" id="doctorContainer">
            <!-- Doctor cards will be dynamically loaded -->
        </div>
    </section>

    <!-- Doctor Detail Modal -->
    <div id="doctorModal" class="modal">
        <div class="modal-content doctor-modal-content">
            <span class="close-modal" onclick="closeDoctorModal()">&times;</span>
            <div id="doctorDetails"></div>
        </div>
    </div>

    <!-- Emergency & Ambulance Services -->
    <section id="services" class="section emergency-section">
        <div class="emergency-grid">
            <div class="emergency-card">
                <div class="emergency-icon pulse">
                    <i class="fas fa-ambulance"></i>
                </div>
                <h3>24/7 Ambulance Service</h3>
                <p>Fully equipped ambulances with trained paramedics available round the clock for emergency patient transport.</p>
                <div class="emergency-features">
                    <span><i class="fas fa-check"></i> GPS Tracking</span>
                    <span><i class="fas fa-check"></i> Advanced Life Support</span>
                    <span><i class="fas fa-check"></i> Oxygen Equipped</span>
                    <span><i class="fas fa-check"></i> Trained Paramedics</span>
                </div>
                <a href="tel:+912402473399" class="btn emergency-btn">
                    <i class="fas fa-phone-alt"></i> Call Ambulance: 2473399
                </a>
            </div>
            <div class="emergency-card">
                <div class="emergency-icon pulse">
                    <i class="fas fa-hospital-alt"></i>
                </div>
                <h3>Emergency Department</h3>
                <p>Our emergency department is staffed 24/7 with experienced physicians and nurses ready to handle any medical emergency.</p>
                <div class="emergency-features">
                    <span><i class="fas fa-check"></i> Trauma Care</span>
                    <span><i class="fas fa-check"></i> Cardiac Emergency</span>
                    <span><i class="fas fa-check"></i> Stroke Response</span>
                    <span><i class="fas fa-check"></i> Pediatric Emergency</span>
                </div>
                <a href="#contact" class="btn emergency-btn">
                    <i class="fas fa-map-marker-alt"></i> Hospital Location
                </a>
            </div>
            <div class="emergency-card">
                <div class="emergency-icon">
                    <i class="fas fa-helicopter"></i>
                </div>
                <h3>Air Ambulance Coordination</h3>
                <p>For critical patients requiring rapid transport, we coordinate air ambulance services with partner aviation medical services.</p>
                <div class="emergency-features">
                    <span><i class="fas fa-check"></i> Rapid Response</span>
                    <span><i class="fas fa-check"></i> ICU on Wings</span>
                    <span><i class="fas fa-check"></i> Pan-India Service</span>
                    <span><i class="fas fa-check"></i> Specialist Teams</span>
                </div>
                <a href="tel:+912402473400" class="btn emergency-btn">
                    <i class="fas fa-phone-alt"></i> Helpline: 2473400
                </a>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="section gray-bg">
        <h2 class="section-title">Our Facility Gallery</h2>
        <p class="section-subtitle">Take a virtual tour of our world-class facilities</p>
        
        <div class="gallery-tabs">
            <button class="gallery-tab active" onclick="filterGallery('all')">All</button>
            <button class="gallery-tab" onclick="filterGallery('icu')">ICU</button>
            <button class="gallery-tab" onclick="filterGallery('ot')">Operation Theater</button>
            <button class="gallery-tab" onclick="filterGallery('rooms')">Patient Rooms</button>
            <button class="gallery-tab" onclick="filterGallery('diagnostic')">Diagnostics</button>
        </div>
        
        <div class="gallery-grid" id="galleryGrid">
            <!-- Gallery items will be dynamically loaded -->
        </div>
    </section>

    <!-- Gallery Lightbox -->
    <div id="lightbox" class="lightbox">
        <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
        <button class="lightbox-nav prev" onclick="navigateLightbox(-1)"><i class="fas fa-chevron-left"></i></button>
        <img id="lightboxImage" src="" alt="">
        <button class="lightbox-nav next" onclick="navigateLightbox(1)"><i class="fas fa-chevron-right"></i></button>
        <div class="lightbox-caption" id="lightboxCaption"></div>
    </div>
    <!-- Online Appointment Booking Section -->
    <section id="appointment" class="section">
        <h2 class="section-title">Book an Appointment</h2>
        <p class="section-subtitle">Schedule your visit with our expert doctors</p>
        
        <div class="appointment-container">
            <div class="appointment-info">
                <h3><i class="fas fa-calendar-check"></i> Why Book Online?</h3>
                <ul class="appointment-benefits">
                    <li><i class="fas fa-clock"></i> Save time with instant confirmation</li>
                    <li><i class="fas fa-user-md"></i> Choose your preferred doctor</li>
                    <li><i class="fas fa-bell"></i> Get SMS & Email reminders</li>
                    <li><i class="fas fa-history"></i> Track your appointment history</li>
                    <li><i class="fas fa-credit-card"></i> Pay online or at hospital</li>
                </ul>
                <div class="contact-quick">
                    <h4>Need Help?</h4>
                    <p><i class="fas fa-phone"></i> +91 (240) 2473399</p>
                    <p><i class="fas fa-envelope"></i> appointments@mithospital.com</p>
                </div>
            </div>
            <!-- book appointment ok   -->
            <div class="appointment-form-card">
<form action="appointment_process.php" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="apt-name"><i class="fas fa-user"></i> Patient Name *</label>
                            <input type="text" id="apt-name"  name="apt-name" required placeholder="Enter full name">
                        </div>
                        <div class="form-group">
                            <label for="apt-phone"><i class="fas fa-phone"></i> Phone Number *</label>
                            <input type="tel" id="apt-phone" name="apt-phone"  required placeholder="10-digit number" pattern="[0-9]{10}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="apt-email"><i class="fas fa-envelope"></i> Email Address</label>
                            <input type="email" id="apt-email" name="apt-email" placeholder="your@email.com">
                        </div>
                        <div class="form-group">
                            <label for="apt-age"><i class="fas fa-birthday-cake"></i> Age *</label>
                            <input type="number" id="apt-age" name="apt-age" required min="0" max="120" placeholder="Years">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="apt-gender"><i class="fas fa-venus-mars"></i> Gender *</label>
                            <select id="apt-gender" name="apt-gender" required>
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="apt-department"><i class="fas fa-sitemap"></i> Department *</label>
                            <select id="apt-department" name="apt-department" required onchange="loadDepartmentDoctors()">
                                <option value="">Select Department</option>
                                <option value="cardiology">Cardiology</option>
                                <option value="neurology">Neurology</option>
                                <option value="orthopedics">Orthopedics</option>
                                <option value="pediatrics">Pediatrics</option>
                                <option value="gynecology">Gynecology & Obstetrics</option>
                                <option value="surgery">General Surgery</option>
                                <option value="ent">ENT</option>
                                <option value="ophthalmology">Ophthalmology</option>
                                <option value="dermatology">Dermatology</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="apt-doctor"><i class="fas fa-user-md"></i> Select Doctor *</label>
                            <select id="apt-doctor" name="apt-doctor" required>
                                <option value="">Select Department First</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="apt-date"><i class="fas fa-calendar"></i> Preferred Date *</label>
                            <input type="date" id="apt-date"  name="apt-date" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="apt-time"><i class="fas fa-clock"></i> Preferred Time *</label>
                            <select id="apt-time" name="apt-time" required>
                                <option value="">Select Time Slot</option>
                                <option value="09:00">09:00 AM</option>
                                <option value="09:30">09:30 AM</option>
                                <option value="10:00">10:00 AM</option>
                                <option value="10:30">10:30 AM</option>
                                <option value="11:00">11:00 AM</option>
                                <option value="11:30">11:30 AM</option>
                                <option value="12:00">12:00 PM</option>
                                <option value="14:00">02:00 PM</option>
                                <option value="14:30">02:30 PM</option>
                                <option value="15:00">03:00 PM</option>
                                <option value="15:30">03:30 PM</option>
                                <option value="16:00">04:00 PM</option>
                                <option value="16:30">04:30 PM</option>
                                <option value="17:00">05:00 PM</option>
                                <option value="17:30">05:30 PM</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="apt-type"><i class="fas fa-stethoscope"></i> Visit Type *</label>
                            <select id="apt-type" name="apt-type"  required>
                                <option value="new">New Consultation</option>
                                <option value="followup">Follow-up Visit</option>
                                <option value="report">Report Review</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group full-width">
                        <label for="apt-symptoms"><i class="fas fa-notes-medical"></i> Symptoms/Reason for Visit</label>
                        <textarea id="apt-symptoms" name="apt-symptoms" rows="3" placeholder="Describe your symptoms or reason for appointment..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-block appointment-submit">
                        <i class="fas fa-calendar-check"></i> Confirm Appointment
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Patient Feedback and Ratings Section -->
    <section id="feedback" class="section gray-bg">
        <h2 class="section-title">Patient Reviews & Ratings</h2>
        <p class="section-subtitle">What our patients say about us</p>
        
        <div class="rating-summary">
            <div class="rating-big">
                <span id="average-rating-display">4.5</span>
                <div class="rating-stars" id="averageStars">★★★★★</div>
                <p>Based on <span id="totalReviews">0</span> reviews</p>
            </div>
            <div class="rating-bars">
                <div class="rating-bar-item">
                    <span>5 ★</span>
                    <div class="bar-container"><div class="bar" id="bar5" style="width: 70%"></div></div>
                    <span id="count5">0</span>
                </div>
                <div class="rating-bar-item">
                    <span>4 ★</span>
                    <div class="bar-container"><div class="bar" id="bar4" style="width: 20%"></div></div>
                    <span id="count4">0</span>
                </div>
                <div class="rating-bar-item">
                    <span>3 ★</span>
                    <div class="bar-container"><div class="bar" id="bar3" style="width: 5%"></div></div>
                    <span id="count3">0</span>
                </div>
                <div class="rating-bar-item">
                    <span>2 ★</span>
                    <div class="bar-container"><div class="bar" id="bar2" style="width: 3%"></div></div>
                    <span id="count2">0</span>
                </div>
                <div class="rating-bar-item">
                    <span>1 ★</span>
                    <div class="bar-container"><div class="bar" id="bar1" style="width: 2%"></div></div>
                    <span id="count1">0</span>
                </div>
            </div>
        </div>

        <div class="feedback-layout-container">
            <!-- Review Submission Form -->
            <div class="feedback-form-card">
                <h3><i class="fas fa-edit"></i> Share Your Experience</h3>
                <form id="review-submission-form" onsubmit="addPatientReview(event)">
                    <div class="form-group">
                        <label for="review-author">Your Name *</label>
                        <input type="text" id="review-author" placeholder="Enter your full name" required>
                    </div>
                    <div class="form-group">
                        <label for="review-department">Department Visited</label>
                        <select id="review-department">
                            <option value="">Select Department</option>
                            <option value="Cardiology">Cardiology</option>
                            <option value="Neurology">Neurology</option>
                            <option value="Orthopedics">Orthopedics</option>
                            <option value="Pediatrics">Pediatrics</option>
                            <option value="Gynecology">Gynecology</option>
                            <option value="General Surgery">General Surgery</option>
                            <option value="Emergency">Emergency</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Rate Your Experience *</label>
                        <div class="star-rating" id="starRating">
                            <i class="far fa-star" data-rating="1"></i>
                            <i class="far fa-star" data-rating="2"></i>
                            <i class="far fa-star" data-rating="3"></i>
                            <i class="far fa-star" data-rating="4"></i>
                            <i class="far fa-star" data-rating="5"></i>
                        </div>
                        <input type="hidden" id="review-stars" value="0" required>
                    </div>
                    <div class="form-group">
                        <label for="review-text">Your Feedback *</label>
                        <textarea id="review-text" rows="4" placeholder="Share your treatment experience..." required></textarea>
                    </div>
                    <button type="submit" class="btn submit-review-btn">
                        <i class="fas fa-paper-plane"></i> Submit Review
                    </button>
                </form>
            </div>

            <!-- Reviews List -->
            <div class="feedback-stream-card">
                <h3><i class="fas fa-comments"></i> Recent Patient Reviews</h3>
                <div id="reviews-display-list" class="reviews-list-container">
                    <!-- Dynamic Reviews -->
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <h2 class="section-title">Contact Us</h2>
        <p class="section-subtitle">We're here to help you</p>
        
        <div class="contact-container">
            <div class="contact-info-grid">
                <div class="contact-card">
                    <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h4>Our Location</h4>
                    <p>MIT Hospital Campus, Beed Bypass Road,<br>
                    Chhatrapati Sambhajinagar (Aurangabad),<br>
                    Maharashtra - 431010</p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
                    <h4>Phone Numbers</h4>
                    <p>Reception: +91 (240) 2473399<br>
                    Emergency: +91 (240) 2473400<br>
                    Appointments: +91 (240) 2473401</p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                    <h4>Email Address</h4>
                    <p>General: info@mithospital.com<br>
                    Appointments: appointments@mithospital.com<br>
                    Support: support@mithospital.com</p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon"><i class="fas fa-clock"></i></div>
                    <h4>Working Hours</h4>
                    <p>Emergency: 24/7<br>
                    OPD: Mon-Sat 9AM - 8PM<br>
                    Sunday: 10AM - 2PM</p>
                </div>
            </div>
            
            <div class="contact-form-map">
                <div class="contact-form-card">
                    <h3><i class="fas fa-envelope-open-text"></i> Send Us a Message</h3>
                    <form id="contactForm" onsubmit="submitContactForm(event)">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="contact-name">Your Name *</label>
                                <input type="text" id="contact-name" required placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <label for="contact-email">Email *</label>
                                <input type="email" id="contact-email" required placeholder="your@email.com">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="contact-phone">Phone</label>
                                <input type="tel" id="contact-phone" placeholder="Your phone number">
                            </div>
                            <div class="form-group">
                                <label for="contact-subject">Subject *</label>
                                <select id="contact-subject" required>
                                    <option value="">Select Subject</option>
                                    <option value="General Inquiry">General Inquiry</option>
                                    <option value="Appointment Query">Appointment Query</option>
                                    <option value="Feedback">Feedback</option>
                                    <option value="Complaint">Complaint</option>
                                    <option value="Career">Career Inquiry</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-message">Message *</label>
                            <textarea id="contact-message" rows="4" required placeholder="Write your message here..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-block">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>
                <div class="map-wrapper">
                    <iframe 
    src="https://www.google.com/maps?q=MIT%20Hospital,%20Beed%20Bypass%20Road,%20Aurangabad&output=embed" 
    width="100%" 
    height="100%" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy">
</iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Patient Portal Section -->
    <section id="patient-portal" class="section gray-bg">
        <h2 class="section-title">Patient Portal</h2>
        <p class="section-subtitle">Access your medical records and appointments</p>
        
        <!-- Authentication Block -->
        <div id="auth-container" class="form-box">
            <div class="tab-buttons">
                <button type="button" id="tab-login-btn" class="active-tab" onclick="switchTab('login')">
                    <i class="fas fa-sign-in-alt"></i> Login
                </button>
                <button type="button" id="tab-register-btn" onclick="switchTab('register')">
                    <i class="fas fa-user-plus"></i> Register
                </button>
            </div>
            
            <form id="login-form" onsubmit="handleLogin(event)">
                <h3>Patient Login</h3>
                <div class="form-group">
                    <label for="login-email"><i class="fas fa-envelope"></i> Email Address</label>
                    <input type="email" id="login-email" placeholder="example@mail.com" required>
                </div>
                <div class="form-group">
                    <label for="login-pass"><i class="fas fa-lock"></i> Password</label>
                    <input type="password" id="login-pass" placeholder="••••••••" required>
                </div>
                <div class="form-options">
                    <label class="checkbox-label">
                        <input type="checkbox" id="remember-me"> Remember me
                    </label>
                    <a href="#" class="forgot-link">Forgot Password?</a>
                </div>
                <button type="submit" class="btn btn-block">
                    <i class="fas fa-sign-in-alt"></i> Login
                </button>
            </form>
            
            <form id="register-form" onsubmit="handleRegister(event)" class="hidden">
                <h3>Patient Registration</h3>
                <div class="form-row">
                    <div class="form-group">
                        <label for="reg-name"><i class="fas fa-user"></i> Full Name *</label>
                        <input type="text" id="reg-name" placeholder="John Doe" required>
                    </div>
                    <div class="form-group">
                        <label for="reg-phone"><i class="fas fa-phone"></i> Phone *</label>
                        <input type="tel" id="reg-phone" placeholder="10-digit number" required pattern="[0-9]{10}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="reg-email"><i class="fas fa-envelope"></i> Email Address *</label>
                    <input type="email" id="reg-email" placeholder="example@mail.com" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="reg-pass"><i class="fas fa-lock"></i> Password *</label>
                        <input type="password" id="reg-pass" placeholder="Min 6 characters" required minlength="6">
                    </div>
                    <div class="form-group">
                        <label for="reg-confirm"><i class="fas fa-lock"></i> Confirm Password *</label>
                        <input type="password" id="reg-confirm" placeholder="Confirm password" required>
                    </div>
                </div>
                <div class="form-options">
                    <label class="checkbox-label">
                        <input type="checkbox" required> I agree to the Terms & Conditions
                    </label>
                </div>
                <button type="submit" class="btn btn-block">
                    <i class="fas fa-user-plus"></i> Create Account
                </button>
            </form>
        </div>

        <!-- Patient Dashboard -->
        <div id="profile-container" class="dashboard-container hidden">
            <div class="dashboard-sidebar">
                <div class="patient-info">
                    <div class="patient-avatar">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <h4 id="sidebar-patient-name">Patient</h4>
                    <p id="sidebar-patient-id">ID: MIT-XXXX</p>
                </div>
                <nav class="dashboard-nav">
                    <a href="#" class="active" onclick="showDashboardTab('overview')">
                        <i class="fas fa-home"></i> Overview
                    </a>
                    <a href="#" onclick="showDashboardTab('profile')">
                        <i class="fas fa-user"></i> My Profile
                    </a>
                    <a href="#" onclick="showDashboardTab('appointments')">
                        <i class="fas fa-calendar-check"></i> Appointments
                    </a>
                    <a href="#" onclick="showDashboardTab('records')">
                        <i class="fas fa-file-medical"></i> Medical Records
                    </a>
                    <a href="#" onclick="showDashboardTab('reports')">
                        <i class="fas fa-flask"></i> Lab Reports
                    </a>
                    <a href="#" onclick="showDashboardTab('bills')">
                        <i class="fas fa-file-invoice-dollar"></i> Bills & Payments
                    </a>
                    <a href="#" onclick="logout()" class="logout-link">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </nav>
            </div>
            
            <div class="dashboard-main">
                <!-- Overview Tab -->
                <div id="tab-overview" class="dashboard-tab active">
                    <h3><i class="fas fa-home"></i> Dashboard Overview</h3>
                    <div class="dashboard-stats">
                        <div class="dash-stat-card">
                            <i class="fas fa-calendar-check"></i>
                            <div class="stat-info">
                                <span class="stat-value" id="total-appointments">0</span>
                                <span class="stat-label">Total Appointments</span>
                            </div>
                        </div>
                        <div class="dash-stat-card">
                            <i class="fas fa-clock"></i>
                            <div class="stat-info">
                                <span class="stat-value" id="upcoming-appointments">0</span>
                                <span class="stat-label">Upcoming</span>
                            </div>
                        </div>
                        <div class="dash-stat-card">
                            <i class="fas fa-file-medical-alt"></i>
                            <div class="stat-info">
                                <span class="stat-value" id="total-records">0</span>
                                <span class="stat-label">Medical Records</span>
                            </div>
                        </div>
                        <div class="dash-stat-card">
                            <i class="fas fa-flask"></i>
                            <div class="stat-info">
                                <span class="stat-value" id="total-reports">0</span>
                                <span class="stat-label">Lab Reports</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="dashboard-cards-row">
                        <div class="dashboard-card">
                            <h4><i class="fas fa-calendar-alt"></i> Next Appointment</h4>
                            <div id="next-appointment-info">
                                <p class="no-data">No upcoming appointments</p>
                            </div>
                        </div>
                        <div class="dashboard-card">
                            <h4><i class="fas fa-bell"></i> Recent Activity</h4>
                            <div id="recent-activity">
                                <p class="no-data">No recent activity</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Profile Tab -->
                <div id="tab-profile" class="dashboard-tab">
                    <h3><i class="fas fa-user"></i> My Profile</h3>
                    <form id="profile-form" onsubmit="saveProfile(event)">
                        <div class="profile-section">
                            <h4>Personal Information</h4>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="prof-name">Full Name</label>
                                    <input type="text" id="prof-name" required>
                                </div>
                                <div class="form-group">
                                    <label for="prof-email">Email Address</label>
                                    <input type="email" id="prof-email" readonly class="disabled-input">
                                </div>
                                <div class="form-group">
                                    <label for="prof-phone">Phone Number</label>
                                    <input type="tel" id="prof-phone" placeholder="10-digit number">
                                </div>
                                <div class="form-group">
                                    <label for="prof-dob">Date of Birth</label>
                                    <input type="date" id="prof-dob">
                                </div>
                                <div class="form-group">
                                    <label for="prof-gender">Gender</label>
                                    <select id="prof-gender">
                                        <option value="">Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="prof-blood">Blood Group</label>
                                    <select id="prof-blood">
                                        <option value="">Select</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="profile-section">
                            <h4>Address Information</h4>
                            <div class="form-grid">
                                <div class="form-group full-width">
                                    <label for="prof-address">Street Address</label>
                                    <input type="text" id="prof-address" placeholder="Enter your address">
                                </div>
                                <div class="form-group">
                                    <label for="prof-city">City</label>
                                    <input type="text" id="prof-city" placeholder="City">
                                </div>
                                <div class="form-group">
                                    <label for="prof-state">State</label>
                                    <input type="text" id="prof-state" placeholder="State">
                                </div>
                                <div class="form-group">
                                    <label for="prof-pincode">PIN Code</label>
                                    <input type="text" id="prof-pincode" placeholder="6-digit PIN">
                                </div>
                            </div>
                        </div>
                        
                        <div class="profile-section">
                            <h4>Emergency Contact</h4>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="prof-emergency-name">Contact Name</label>
                                    <input type="text" id="prof-emergency-name" placeholder="Emergency contact name">
                                </div>
                                <div class="form-group">
                                    <label for="prof-emergency-relation">Relationship</label>
                                    <input type="text" id="prof-emergency-relation" placeholder="Relation">
                                </div>
                                <div class="form-group">
                                    <label for="prof-emergency-phone">Contact Phone</label>
                                    <input type="tel" id="prof-emergency-phone" placeholder="Phone number">
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn save-btn">
                            <i class="fas fa-save"></i> Save Changes
                        </button>
                    </form>
                </div>
                
                <!-- Appointments Tab -->
                <div id="tab-appointments" class="dashboard-tab">
                    <h3><i class="fas fa-calendar-check"></i> My Appointments</h3>
                    <div class="appointments-header">
                        <div class="filter-group">
                            <select id="apt-filter-status">
                                <option value="all">All Status</option>
                                <option value="upcoming">Upcoming</option>
                                <option value="completed">Completed</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>
                        <a href="#appointment" class="btn btn-sm">
                            <i class="fas fa-plus"></i> Book New
                        </a>
                    </div>
                    <div id="appointments-list" class="appointments-list">
                        <p class="no-data">No appointments found</p>
                    </div>
                </div>
                
                <!-- Medical Records Tab -->
                <div id="tab-records" class="dashboard-tab">
                    <h3><i class="fas fa-file-medical"></i> Medical Records</h3>
                    <div id="records-list" class="records-list">
                        <p class="no-data">No medical records available</p>
                    </div>
                </div>
                
                <!-- Lab Reports Tab -->
                <div id="tab-reports" class="dashboard-tab">
                    <h3><i class="fas fa-flask"></i> Lab Reports</h3>
                    <div id="reports-list" class="reports-list">
                        <p class="no-data">No lab reports available</p>
                    </div>
                </div>
                
                <!-- Bills Tab -->
                <div id="tab-bills" class="dashboard-tab">
                    <h3><i class="fas fa-file-invoice-dollar"></i> Bills & Payments</h3>
                    <div class="bills-summary">
                        <div class="bill-stat">
                            <span class="label">Total Due</span>
                            <span class="value" id="total-due">₹0</span>
                        </div>
                        <div class="bill-stat">
                            <span class="label">Last Payment</span>
                            <span class="value" id="last-payment">N/A</span>
                        </div>
                    </div>
                    <div id="bills-list" class="bills-list">
                        <p class="no-data">No bills found</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Admin Login Section -->
    <section id="admin-login" class="section">
        <h2 class="section-title">Admin Portal</h2>
        <div id="admin-auth-container" class="form-box admin-form">
            <form id="admin-login-form" onsubmit="handleAdminLogin(event)">
                <h3><i class="fas fa-user-shield"></i> Administrator Login</h3>
                <div class="form-group">
                    <label for="admin-username"><i class="fas fa-user"></i> Username</label>
                    <input type="text" id="admin-username" placeholder="Admin username" required>
                </div>
                <div class="form-group">
                    <label for="admin-password"><i class="fas fa-lock"></i> Password</label>
                    <input type="password" id="admin-password" placeholder="••••••••" required>
                </div>
                <button type="submit" class="btn btn-block admin-btn">
                    <i class="fas fa-sign-in-alt"></i> Login to Dashboard
                </button>
            </form>
        </div>
        
        <!-- Admin Dashboard -->
        <div id="admin-dashboard" class="admin-dashboard hidden">
            <div class="admin-header">
                <h3><i class="fas fa-tachometer-alt"></i> Admin Dashboard</h3>
                <button class="btn btn-danger" onclick="adminLogout()">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </div>
            
            <div class="admin-nav">
                <button class="admin-nav-btn active" onclick="showAdminTab('dashboard')">
                    <i class="fas fa-home"></i> Dashboard
                </button>
                <button class="admin-nav-btn" onclick="showAdminTab('patients')">
                    <i class="fas fa-users"></i> Patients
                </button>
                <button class="admin-nav-btn" onclick="showAdminTab('appointments')">
                    <i class="fas fa-calendar-check"></i> Appointments
                </button>
                <button class="admin-nav-btn" onclick="showAdminTab('doctors')">
                    <i class="fas fa-user-md"></i> Doctors
                </button>
                <button class="admin-nav-btn" onclick="showAdminTab('reviews')">
                    <i class="fas fa-star"></i> Reviews
                </button>
                <button class="admin-nav-btn" onclick="showAdminTab('contacts')">
                    <i class="fas fa-envelope"></i> Messages
                </button>
            </div>
            
            <!-- Admin Dashboard Tab -->
            <div id="admin-tab-dashboard" class="admin-tab active">
                <div class="admin-stats">
                    <div class="admin-stat-card">
                        <div class="stat-icon"><i class="fas fa-users"></i></div>
                        <div class="stat-info">
                            <span class="stat-value" id="admin-total-patients">0</span>
                            <span class="stat-label">Total Patients</span>
                        </div>
                    </div>
                    <div class="admin-stat-card">
                        <div class="stat-icon"><i class="fas fa-calendar-check"></i></div>
                        <div class="stat-info">
                            <span class="stat-value" id="admin-total-appointments">0</span>
                            <span class="stat-label">Appointments</span>
                        </div>
                    </div>
                    <div class="admin-stat-card">
                        <div class="stat-icon"><i class="fas fa-calendar-day"></i></div>
                        <div class="stat-info">
                            <span class="stat-value" id="admin-today-appointments">0</span>
                            <span class="stat-label">Today's Appointments</span>
                        </div>
                    </div>
                    <div class="admin-stat-card">
                        <div class="stat-icon"><i class="fas fa-star"></i></div>
                        <div class="stat-info">
                            <span class="stat-value" id="admin-total-reviews">0</span>
                            <span class="stat-label">Reviews</span>
                        </div>
                    </div>
                </div>
                
                <div class="admin-recent">
                    <div class="admin-card">
                        <h4><i class="fas fa-calendar-alt"></i> Recent Appointments</h4>
                        <div id="admin-recent-appointments"></div>
                    </div>
                    <div class="admin-card">
                        <h4><i class="fas fa-user-plus"></i> New Registrations</h4>
                        <div id="admin-recent-patients"></div>
                    </div>
                </div>
            </div>
            
            <!-- Admin Patients Tab -->
            <div id="admin-tab-patients" class="admin-tab">
                <div class="admin-table-header">
                    <h4>Registered Patients</h4>
                    <input type="text" id="patient-search" placeholder="Search patients..." onkeyup="searchPatients()">
                </div>
                <div class="table-responsive">
                    <table class="admin-table" id="patients-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody>

<?php
include "db.php";

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['phone']; ?></td>
</tr>
<?php
}
?>

</tbody>
                    </table>
                </div>
            </div>
            
            <!-- Admin Appointments Tab -->
            <div id="admin-tab-appointments" class="admin-tab">
                <div class="admin-table-header">
                    <h4>All Appointments</h4>
                    <div class="filter-group">
                        <select id="admin-apt-filter" onchange="filterAdminAppointments()">
                            <option value="all">All</option>
                            <option value="pending">Pending</option>
                            <option value="confirmed">Confirmed</option>
                            <option value="completed">Completed</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                        <input type="date" id="admin-apt-date" onchange="filterAdminAppointments()">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="admin-table" id="appointments-table">
                        <thead>
                            <tr>
                                <th>Apt. ID</th>
                                <th>Patient</th>
                                <th>Doctor</th>
                                <th>Department</th>
                                <th>Date & Time</th>
                                
                            </tr>
                        </thead>
                        <tbody>
<?php
include "db.php";

$sql = "SELECT * FROM appointments ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result))
{
?>
<tr>

    <!-- Apt. ID -->
    <td><?php echo $row['id']; ?></td>

    <!-- Patient -->
    <td>
        <?php echo $row['patient_name']; ?><br>
        <small><?php echo $row['phone']; ?></small>
    </td>

    <!-- Doctor -->
    <td><?php echo $row['doctor']; ?></td>

    <!-- Department -->
    <td><?php echo $row['department']; ?></td>

    <!-- Date & Time -->
    <td>
        <?php echo $row['appointment_date']; ?>
        <br>
        <small><?php echo $row['appointment_time']; ?></small>
    </td>

   
</tr>
<?php } ?>
</tbody>
                    </table>
                </div>
            </div>
            
            <!-- Admin Doctors Tab -->
            <div id="admin-tab-doctors" class="admin-tab">
                <div class="admin-table-header">
                    <h4>Doctor Management</h4>
                    <button class="btn btn-sm" onclick="showAddDoctorModal()">
                        <i class="fas fa-plus"></i> Add Doctor
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="admin-table" id="doctors-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Specialty</th>
                                <th>Department</th>
                                <th>Schedule</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="doctors-tbody">

<?php
include "db.php";

$sql = "SELECT * FROM doctors ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result))
{
?>
<tr>

    <td><?php echo $row['id']; ?></td>

    <td><?php echo $row['name']; ?></td>

    <td><?php echo $row['specialty']; ?></td>

    <td><?php echo $row['department']; ?></td>

    <td><?php echo $row['schedule']; ?></td>

    <td>
        <?php echo !empty($row['status']) ? $row['status'] : 'Active'; ?>
    </td>

    <td>
        <a href="edit_doctor.php?id=<?php echo $row['id']; ?>">
            Edit
        </a>
        |
        <a href="delete_doctor.php?id=<?php echo $row['id']; ?>"
           onclick="return confirm('Delete this doctor?')">
            Delete
        </a>
    </td>

</tr>
<?php } ?>

</tbody>
                    </table>
                </div>
            </div>
            
            <!-- Admin Reviews Tab -->
            <div id="admin-tab-reviews" class="admin-tab">
                <div class="admin-table-header">
                    <h4>Patient Reviews</h4>
                    <select id="admin-review-filter" onchange="filterAdminReviews()">
                        <option value="all">All Ratings</option>
                        <option value="5">5 Stars</option>
                        <option value="4">4 Stars</option>
                        <option value="3">3 Stars</option>
                        <option value="2">2 Stars</option>
                        <option value="1">1 Star</option>
                    </select>
                </div>
                <div id="admin-reviews-list" class="admin-reviews-list"></div>
            </div>
            
            <!-- Admin Contacts Tab -->
            <div id="admin-tab-contacts" class="admin-tab">
                <div class="admin-table-header">
                    <h4>Contact Messages</h4>
                    <select id="admin-contact-filter" onchange="filterAdminContacts()">
                        <option value="all">All Messages</option>
                        <option value="unread">Unread</option>
                        <option value="read">Read</option>
                    </select>
                </div>
                <div id="admin-contacts-list" class="admin-contacts-list"></div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="footer-top">
            <div class="footer-col">
                <div class="footer-logo">
                    <i class="fas fa-hospital"></i>
                    MIT<span>Hospital</span>
                </div>
                <p>MIT Hospital & Research Institute is committed to providing exceptional healthcare services with compassion and excellence.</p>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#departments">Departments</a></li>
                    <li><a href="#doctors">Our Doctors</a></li>
                    <li><a href="#appointment">Book Appointment</a></li>
                    <li><a href="#patient-portal">Patient Portal</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="#services">Emergency Care</a></li>
                    <li><a href="#services">Ambulance Service</a></li>
                    <li><a href="#departments">Diagnostic Services</a></li>
                    <li><a href="#">Health Checkups</a></li>
                    <li><a href="#">Pharmacy</a></li>
                    <li><a href="#">Insurance</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contact Info</h4>
                <ul class="contact-info">
                    <li><i class="fas fa-map-marker-alt"></i> Beed Bypass Road, Chhatrapati Sambhajinagar</li>
                    <li><i class="fas fa-phone"></i> +91 (240) 2473399</li>
                    <li><i class="fas fa-envelope"></i> info@mithospital.com</li>
                    <li><i class="fas fa-clock"></i> Emergency: 24/7</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 MIT Hospital & Research Institute. All rights reserved.</p>
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Sitemap</a>
            </div>
        </div>
    </footer>

    <!-- Toast Notification -->
    <div id="toast" class="toast"></div>

    <!-- Loading Spinner -->
    <div id="loading" class="loading-overlay hidden">
        <div class="spinner"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>
