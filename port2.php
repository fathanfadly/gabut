<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Profesional</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Variabel CSS */
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
            --text-color: #333;
            --text-light: #777;
            --spacing: 8px;
            --spacing-double: 16px;
            --border-radius: 4px;
            --transition: all 0.3s ease;
        }

        /* Reset & Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: #f9f9f9;
        }

        a {
            text-decoration: none;
            color: var(--secondary-color);
            transition: var(--transition);
        }

        a:hover {
            color: var(--accent-color);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 var(--spacing-double);
        }

        section {
            padding: 5rem 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: var(--spacing);
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--secondary-color);
        }

        .btn {
            display: inline-block;
            padding: 12px 28px;
            background-color: var(--secondary-color);
            color: white;
            border-radius: var(--border-radius);
            font-weight: 600;
            transition: var(--transition);
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Header Styles */
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 0;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .logo span {
            color: var(--secondary-color);
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 2.5rem;
        }

        .nav-links a {
            color: var(--dark-color);
            font-weight: 600;
            font-size: 1.1rem;
        }

        .nav-links a:hover {
            color: var(--secondary-color);
        }

        .hamburger {
            display: none;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            padding-top: 10rem;
            padding-bottom: 5rem;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        .hero-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .hero-text {
            flex: 1;
            padding-right: 2rem;
        }

        .hero-text h1 {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
        }

        .hero-text p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: var(--text-light);
        }

        .hero-image {
            flex: 1;
            text-align: center;
        }

        .hero-image img {
            max-width: 100%;
            border-radius: 50%;
            border: 5px solid white;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        /* About Section */
        .about-content {
            display: flex;
            align-items: center;
            gap: 3rem;
        }

        .about-text {
            flex: 1;
        }

        .about-text h3 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
        }

        .about-text p {
            margin-bottom: 1.5rem;
            color: var(--text-light);
        }

        .about-skills {
            flex: 1;
        }

        .skill {
            margin-bottom: 1.5rem;
        }

        .skill-name {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
        }

        .skill-bar {
            height: 10px;
            background-color: #e0e0e0;
            border-radius: 10px;
            overflow: hidden;
        }

        .skill-level {
            height: 100%;
            background-color: var(--secondary-color);
            border-radius: 10px;
        }

        /* Portfolio Section */
        .portfolio {
            background-color: var(--light-color);
        }

        .portfolio-filters {
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 8px 20px;
            margin: 0 5px 10px;
            background: transparent;
            border: 2px solid var(--secondary-color);
            border-radius: 30px;
            color: var(--secondary-color);
            cursor: pointer;
            transition: var(--transition);
        }

        .filter-btn.active, .filter-btn:hover {
            background-color: var(--secondary-color);
            color: white;
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
        }

        .portfolio-item {
            background-color: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
        }

        .portfolio-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .portfolio-img {
            height: 200px;
            overflow: hidden;
        }

        .portfolio-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .portfolio-item:hover .portfolio-img img {
            transform: scale(1.1);
        }

        .portfolio-info {
            padding: 1.5rem;
        }

        .portfolio-info h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }

        .portfolio-info p {
            color: var(--text-light);
            margin-bottom: 1rem;
        }

        /* Experience Section */
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: var(--secondary-color);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }

        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }

        .timeline-item:nth-child(odd) {
            left: 0;
        }

        .timeline-item:nth-child(even) {
            left: 50%;
        }

        .timeline-content {
            padding: 20px;
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .timeline-content h3 {
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }

        .timeline-content .date {
            color: var(--secondary-color);
            font-weight: 600;
            margin-bottom: 0.5rem;
            display: block;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            background-color: white;
            border: 4px solid var(--secondary-color);
            border-radius: 50%;
            top: 15px;
            z-index: 1;
        }

        .timeline-item:nth-child(odd)::after {
            right: -13px;
        }

        .timeline-item:nth-child(even)::after {
            left: -13px;
        }

        /* Contact Section */
        .contact-content {
            display: flex;
            gap: 3rem;
        }

        .contact-info {
            flex: 1;
        }

        .contact-info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.5rem;
        }

        .contact-icon {
            margin-right: 1rem;
            width: 50px;
            height: 50px;
            background-color: var(--secondary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
        }

        .contact-text h3 {
            font-size: 1.2rem;
            margin-bottom: 0.3rem;
            color: var(--primary-color);
        }

        .contact-text p {
            color: var(--text-light);
        }

        .contact-form {
            flex: 1;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-control:focus {
            border-color: var(--secondary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        /* Footer */
        footer {
            background-color: var(--primary-color);
            color: white;
            padding: 3rem 0;
            text-align: center;
        }

        .social-links {
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 0.5rem;
            color: white;
            transition: var(--transition);
        }

        .social-link:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
        }

        .copyright {
            color: rgba(255, 255, 255, 0.7);
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .hero-content, .about-content, .contact-content {
                flex-direction: column;
            }
            
            .hero-text, .hero-image, .about-text, .about-skills, .contact-info, .contact-form {
                width: 100%;
                padding: 0;
            }
            
            .hero-text {
                margin-bottom: 3rem;
                text-align: center;
            }
            
            .timeline::after {
                left: 31px;
            }
            
            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }
            
            .timeline-item:nth-child(even) {
                left: 0;
            }
            
            .timeline-item::after {
                left: 18px;
            }
            
            .timeline-item:nth-child(odd)::after, .timeline-item:nth-child(even)::after {
                left: 18px;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 80px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 80px);
                background-color: white;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                transition: var(--transition);
            }
            
            .nav-links.active {
                left: 0;
            }
            
            .nav-links li {
                margin: 1.5rem 0;
            }
            
            .hamburger {
                display: block;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .hero-text h1 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header & Navigation -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">Port<span>folio</span></a>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#experience">Pengalaman</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Hai, Saya <span style="color: var(--secondary-color);">Nama Anda</span></h1>
                    <p>Saya adalah seorang Professional Web Developer dengan pengalaman lebih dari 5 tahun dalam mengembangkan website dan aplikasi web yang responsif dan modern.</p>
                    <a href="#contact" class="btn">Hubungi Saya</a>
                </div>
                <div class="hero-image">
                    <img src="https://placehold.co/400x400" alt="Profile Image">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>Tentang Saya</h2>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>Web Developer Profesional</h3>
                    <p>Saya memiliki passion dalam menciptakan website yang menarik, fungsional, dan user-friendly. Dengan keahlian dalam HTML, CSS, JavaScript, dan berbagai framework modern, saya siap membantu mewujudkan visi digital Anda.</p>
                    <p>Saya selalu berusaha untuk terus belajar dan mengembangkan skill saya agar dapat memberikan hasil terbaik untuk setiap project yang saya kerjakan.</p>
                    <a href="#" class="btn">Download CV</a>
                </div>
                <div class="about-skills">
                    <div class="skill">
                        <div class="skill-name">
                            <span>HTML/CSS</span>
                            <span>95%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 95%;"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill-name">
                            <span>JavaScript</span>
                            <span>90%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 90%;"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill-name">
                            <span>PHP</span>
                            <span>85%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 85%;"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill-name">
                            <span>React</span>
                            <span>80%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 80%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-title">
                <h2>Portfolio Saya</h2>
            </div>
            <div class="portfolio-filters">
                <button class="filter-btn active" data-filter="all">Semua</button>
                <button class="filter-btn" data-filter="web">Web Development</button>
                <button class="filter-btn" data-filter="app">App Design</button>
                <button class="filter-btn" data-filter="uiux">UI/UX</button>
            </div>
            <div class="portfolio-grid">
                <div class="portfolio-item" data-category="web">
                    <div class="portfolio-img">
                        <img src="https://placehold.co/600x400" alt="Project 1">
                    </div>
                    <div class="portfolio-info">
                        <h3>E-commerce Website</h3>
                        <p>Website e-commerce dengan fitur lengkap dan responsive design.</p>
                        <a href="#">Lihat Detail</a>
                    </div>
                </div>
                <div class="portfolio-item" data-category="app">
                    <div class="portfolio-img">
                        <img src="https://placehold.co/600x400" alt="Project 2">
                    </div>
                    <div class="portfolio-info">
                        <h3>Mobile App Design</h3>
                        <p>Desain aplikasi mobile untuk layanan kesehatan.</p>
                        <a href="#">Lihat Detail</a>
                    </div>
                </div>
                <div class="portfolio-item" data-category="uiux">
                    <div class="portfolio-img">
                        <img src="https://placehold.co/600x400" alt="Project 3">
                    </div>
                    <div class="portfolio-info">
                        <h3>UI/UX Dashboard</h3>
                        <p>Desain dashboard admin dengan user experience yang intuitif.</p>
                        <a href="#">Lihat Detail</a>
                    </div>
                </div>
                <div class="portfolio-item" data-category="web">
                    <div class="portfolio-img">
                        <img src="https://placehold.co/600x400" alt="Project 4">
                    </div>
                    <div class="portfolio-info">
                        <h3>Company Profile</h3>
                        <p>Website company profile untuk perusahaan konstruksi.</p>
                        <a href="#">Lihat Detail</a>
                    </div>
                </div>
                <div class="portfolio-item" data-category="app">
                    <div class="portfolio-img">
                        <img src="https://placehold.co/600x400" alt="Project 5">
                    </div>
                    <div class="portfolio-info">
                        <h3>Food Delivery App</h3>
                        <p>Aplikasi pemesanan makanan dengan fitur lengkap.</p>
                        <a href="#">Lihat Detail</a>
                    </div>
                </div>
                <div class="portfolio-item" data-category="uiux">
                    <div class="portfolio-img">
                        <img src="https://placehold.co/600x400" alt="Project 6">
                    </div>
                    <div class="portfolio-info">
                        <h3>Travel App Interface</h3>
                        <p>Desain interface untuk aplikasi travel dan booking.</p>
                        <a href="#">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="experience">
        <div class="container">
            <div class="section-title">
                <h2>Pengalaman Kerja</h2>
            </div>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Senior Web Developer</h3>
                        <span class="date">2020 - Sekarang</span>
                        <p>Perusahaan Teknologi ABC, Jakarta</p>
                        <p>Mengembangkan dan memelihara aplikasi web perusahaan, memimpin tim developer, dan menerapkan teknologi terbaru.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Web Developer</h3>
                        <span class="date">2018 - 2020</span>
                        <p>Startup XYZ, Bandung</p>
                        <p>Membangun website dari awal, mengimplementasikan fitur-fitur baru, dan optimasi performa website.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Junior Web Developer</h3>
                        <span class="date">2016 - 2018</span>
                        <p>Digital Agency DEF, Surabaya</p>
                        <p>Membantu dalam pengembangan website klien, maintenance website, dan belajar best practices dalam web development.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Web Designer</h3>
                        <span class="date">2015 - 2016</span>
                        <p>Freelance</p>
                        <p>Mendesain website untuk berbagai klien dengan fokus pada user experience dan aesthetic design.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Hubungi Saya</h2>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Lokasi</h3>
                            <p>Jakarta, Indonesia</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Telepon</h3>
                            <p>+62 812 3456 7890</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Email</h3>
                            <p>nama.anda@email.com</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subjek" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Pesan" required></textarea>
                        </div>
                        <button type="submit" class="btn">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="social-links">
                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="social-link"><i class="fab fa-github"></i></a>
            </div>
            <p class="copyright">&copy; 2023 Portfolio. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        // Navigation toggle
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');
        
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
        
        // Close mobile navigation when clicking on a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
            });
        });
        
        // Portfolio filtering
        const filterButtons = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                
                // Add active class to clicked button
                button.classList.add('active');
                
                // Get filter value
                const filterValue = button.getAttribute('data-filter');
                
                // Show/hide portfolio items based on filter
                portfolioItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>