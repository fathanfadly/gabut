<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syam Machdita - Full Stack Developer</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: #2d3748;
            background: #f7fafc;
        }

        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            z-index: 1000;
            padding: 1.5rem 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.25rem;
            font-weight: 800;
            color: #1a202c;
            letter-spacing: -0.5px;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2.5rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #4a5568;
            font-weight: 500;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: color 0.3s ease;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: #e53e3e;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .lang-switcher {
            display: flex;
            gap: 0.5rem;
        }

        .lang-switcher span {
            font-size: 0.8rem;
            color: #718096;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .lang-switcher span.active {
            color: #e53e3e;
            font-weight: 600;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            gap: 4rem;
        }

        .hero-content {
            padding-top: 100px;
        }

        .hero-greeting {
            font-size: 1.1rem;
            color: #718096;
            margin-bottom: 1rem;
            font-weight: 400;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            color: #1a202c;
        }

        .hero-title .highlight {
            color: #e53e3e;
        }

        .hero-subtitle {
            font-size: 1.1rem;
            color: #4a5568;
            margin-bottom: 2.5rem;
            line-height: 1.6;
            max-width: 400px;
        }

        .hero-cta {
            display: inline-block;
            background: #e53e3e;
            color: white;
            padding: 1rem 2rem;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .hero-cta:hover {
            background: #c53030;
            transform: translateY(-2px);
        }

       .hero-image {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            
            /* Tambahkan ini untuk atur ukuran */
            width:400px;     /* atau 100%, atau sesuai kebutuhan */
            height: 100px;    /* bisa juga pakai auto jika menyesuaikan konten */
            
            /* Optional: batas maksimal */
            max-width: 100%;
            max-height: 100vh;
            
            /* Optional: padding/margin agar tidak terlalu mepet */
            margin: 0 auto;
            padding: 1rem;
        }


        .hero-photo {
            width: 400px;
            height: 610px;
            background: linear-gradient(135deg, #252525ff 0%, #525151ff 100%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .hero-photo::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('sample.png');
            background-size: 1000px;
            background-position: center;
            background-repeat: no-repeat;
        }

        .photo-placeholder {
            color: white;
            font-size: 4rem;
            z-index: 2;
        }

        .hero-social {
            position: absolute;
            right: 2rem;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .social-link {
            width: 45px;
            height: 45px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: #4a5568;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: #e53e3e;
            color: white;
            transform: translateY(-2px);
        }

        /* About Section */
        .about {
            background: white;
            padding: 6rem 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: #1a202c;
            margin-bottom: 3rem;
            text-align: center;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 4rem;
            align-items: start;
        }

        .about-info {
            background: #f7fafc;
            padding: 2rem;
            border-radius: 15px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
        }

        .contact-item i {
            color: #e53e3e;
            width: 20px;
            font-size: 1.1rem;
        }

        .about-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #4a5568;
        }

        .about-text p {
            margin-bottom: 1.5rem;
        }

        /* Skills Section */
        .skills {
            padding: 6rem 0;
            background: #f7fafc;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .skill-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }

        .skill-card:hover {
            transform: translateY(-5px);
        }

        .skill-icon {
            width: 60px;
            height: 60px;
            background: #e53e3e;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .skill-icon i {
            color: white;
            font-size: 1.5rem;
        }

        .skill-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 1rem;
        }

        .skill-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .skill-tag {
            background: #fed7d7;
            color: #c53030;
            padding: 0.4rem 0.8rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        /* Experience Section */
        .experience {
            padding: 6rem 0;
            background: white;
        }

        .timeline {
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline-item {
            background: #f7fafc;
            padding: 2.5rem;
            border-radius: 15px;
            margin-bottom: 2rem;
            position: relative;
            border-left: 4px solid #e53e3e;
        }

        .timeline-date {
            color: #e53e3e;
            font-weight: 700;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
        }

        .timeline-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 0.5rem;
        }

        .timeline-company {
            color: #718096;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .timeline-description {
            color: #4a5568;
            line-height: 1.7;
        }

        /* Projects Section */
        .projects {
            padding: 6rem 0;
            background: #f7fafc;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .project-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-5px);
        }

        .project-image {
            height: 200px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
        }

        .project-content {
            padding: 2rem;
        }

        .project-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 1rem;
        }

        .project-description {
            color: #4a5568;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .tech-tag {
            background: #edf2f7;
            color: #4a5568;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* Footer */
        footer {
            background: #1a202c;
            color: white;
            padding: 4rem 0 2rem;
            text-align: center;
        }

        .footer-content {
            margin-bottom: 2rem;
        }

        .footer-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .footer-subtitle {
            color: #a0aec0;
            margin-bottom: 2rem;
        }

        .footer-social {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .footer-social .social-link {
            background: #2d3748;
            color: #a0aec0;
        }

        .footer-social .social-link:hover {
            background: #e53e3e;
            color: white;
        }

        .footer-bottom {
            border-top: 1px solid #2d3748;
            padding-top: 2rem;
            color: #718096;
            font-size: 0.9rem;
        }

        /* Mobile Responsiveness */
        @media (max-width: 968px) {
            .hero {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 2rem;
            }

            .hero-content {
                order: 2;
                padding-top: 2rem;
            }

            .hero-image {
                order: 1;
            }

            .hero-photo {
                width: 300px;
                height: 400px;
            }

            .hero-social {
                position: static;
                transform: none;
                flex-direction: row;
                justify-content: center;
                margin-top: 2rem;
            }

            .about-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .nav-links {
                display: none;
            }

            .hero-title {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .hero-photo {
                width: 250px;
                height: 350px;
            }

            .hero-title {
                font-size: 2rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .container {
                padding: 0 1rem;
            }

            .nav-container {
                padding: 0 1rem;
            }
        }

        /* Scroll animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <div class="logo">SYAM</div>
            <ul class="nav-links">
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#resume">Resume</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="nav-right">
                <div class="lang-switcher">
                    <span class="active">EN</span>
                    <span>|</span>
                    <span>ID</span>
                </div>
            </div>
        </div>
    </nav>
     <section class="hero-section">
    <!-- Blob Blur Background -->
    <div class="abstract-blobs">
      <div class="blob blob1"></div>
      <div class="blob blob2"></div>
      <div class="blob blob3"></div>
    </div>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <div class="hero-greeting">HELLO</div>
            <h1 class="hero-title">I'm <span class="highlight">Syam</span> Machdita</h1>
            <p class="hero-subtitle">I'm a Computer Science student specializing in full-stack development, passionate about creating innovative digital solutions.</p>
            <a href="#contact" class="hero-cta">DOWNLOAD CV</a>
        </div>
        <div class="hero-image">
            <div class="hero-photo">
                
            </div>
            <div class="hero-social">
                <a href="https://github.com/SyamMachdita" class="social-link" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
                <a href="mailto:samsumachdita@gmail.com" class="social-link">
                    <i class="fas fa-envelope"></i>
                </a>
                <a href="tel:+6282145159707" class="social-link">
                    <i class="fas fa-phone"></i>
                </a>
                <a href="#" class="social-link">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title fade-in">About Me</h2>
            <div class="about-grid fade-in">
                <div class="about-info">
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+62-821-4515-9707</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>samsumachdita@gmail.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="fab fa-github"></i>
                        <span>github.com/SyamMachdita</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Malang, Indonesia</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-university"></i>
                        <span>Bina Nusantara University</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-language"></i>
                        <span>English (Fluent), Indonesian</span>
                    </div>
                </div>
                <div class="about-text">
                    <p>Hello! I'm Syam, an adaptable individual who thrives in collaborative environments and has a strong passion for learning new things. Currently, I am a Computer Science student at Bina Nusantara University, specializing in full-stack development.</p>
                    
                    <p>I am committed to enhancing my technical skills and contributing effectively to innovative projects in the tech industry. My experience includes data analysis, dashboard development, and business process support, contributing to strategic decision-making through data-driven insights.</p>
                    
                    <p>During my internship at PT Telkomsel, I gained hands-on experience working with modern technologies and tools, developing interactive dashboards that help teams make data-driven decisions efficiently.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="services" class="skills">
        <div class="container">
            <h2 class="section-title fade-in">Skills & Technologies</h2>
            <div class="skills-grid fade-in">
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3 class="skill-title">UI/UX Design</h3>
                    <div class="skill-list">
                        <span class="skill-tag">User Interface</span>
                        <span class="skill-tag">User Experience</span>
                        <span class="skill-tag">Prototyping</span>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="skill-title">Frontend Development</h3>
                    <div class="skill-list">
                        <span class="skill-tag">HTML</span>
                        <span class="skill-tag">CSS</span>
                        <span class="skill-tag">JavaScript</span>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3 class="skill-title">Backend Development</h3>
                    <div class="skill-list">
                        <span class="skill-tag">PHP</span>
                        <span class="skill-tag">SQL</span>
                        <span class="skill-tag">Database Design</span>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="skill-title">Frameworks</h3>
                    <div class="skill-list">
                        <span class="skill-tag">Golang</span>
                        <span class="skill-tag">Flutter</span>
                        <span class="skill-tag">Laravel</span>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="skill-title">Data Analytics</h3>
                    <div class="skill-list">
                        <span class="skill-tag">Tableau</span>
                        <span class="skill-tag">Power BI</span>
                        <span class="skill-tag">Data Analysis</span>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="skill-title">Mobile Development</h3>
                    <div class="skill-list">
                        <span class="skill-tag">Flutter</span>
                        <span class="skill-tag">Cross-platform</span>
                        <span class="skill-tag">App Development</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="resume" class="experience">
        <div class="container">
            <h2 class="section-title fade-in">Experience & Education</h2>
            <div class="timeline fade-in">
                <div class="timeline-item">
                    <div class="timeline-date">2025</div>
                    <h3 class="timeline-title">Data Analyst Intern</h3>
                    <div class="timeline-company">PT Telekomunikasi Sellular (Telkomsel)</div>
                    <p class="timeline-description">Gained hands-on experience in data analysis, dashboard development, and business process support. Developed and maintained interactive dashboards using Tableau and Power BI, enabling teams to monitor key metrics, track performance, and make data-driven decisions efficiently.</p>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">2022 - Present</div>
                    <h3 class="timeline-title">Computer Science Student</h3>
                    <div class="timeline-company">Bina Nusantara University @Malang</div>
                    <p class="timeline-description">Majoring in Computer Science with focus on programming, algorithms, and software development, while strengthening logical thinking and problem-solving through mathematical and computational approaches.</p>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">2019 - 2022</div>
                    <h3 class="timeline-title">High School Graduate</h3>
                    <div class="timeline-company">Timpolmas Senior Highschool - IPA</div>
                    <p class="timeline-description">Specialized in natural sciences including biology, physics, and chemistry while strengthening skills in mathematical logic and scientific reasoning to solve real-world problems.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="portfolio" class="projects">
        <div class="container">
            <h2 class="section-title fade-in">Featured Projects</h2>
            <div class="projects-grid fade-in">
                <div class="project-card">
                    <div class="project-image">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Court.ly - Sports Booking App</h3>
                        <p class="project-description">Developing a sports field booking application to seamlessly connect users with field providers in an easy and efficient way.</p>
                        <div class="project-tech">
                            <span class="tech-tag">Flutter</span>
                            <span class="tech-tag">Mobile App</span>
                            <span class="tech-tag">Booking System</span>
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image">
                        <i class="fas fa-coffee"></i>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Rumah Akasha - Coffeeshop Website</h3>
                        <p class="project-description">Developed a comprehensive web application for a café enabling online orders, merchandise sales, and event management.</p>
                        <div class="project-tech">
                            <span class="tech-tag">Laravel</span>
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">E-commerce</span>
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Performance Dashboard</h3>
                        <p class="project-description">Created interactive dashboards using Tableau and Power BI for monitoring key metrics and enabling data-driven decisions.</p>
                        <div class="project-tech">
                            <span class="tech-tag">Tableau</span>
                            <span class="tech-tag">Power BI</span>
                            <span class="tech-tag">Data Visualization</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-content">
                <h2 class="footer-title">Let's Work Together</h2>
                <p class="footer-subtitle">I'm always interested in new opportunities and collaborations</p>
                <div class="footer-social">
                    <a href="mailto:samsumachdita@gmail.com" class="social-link">
                        <i class="fas fa-envelope"></i>
                    </a>
                    <a href="https://github.com/SyamMachdita" class="social-link" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="tel:+6282145159707" class="social-link">
                        <i class="fas fa-phone"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Tsalasa Machdita. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
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

        // Active navigation link
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-links a');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });
      // Close mobile menu when clicking outside
        document.addEventListener('click', function (e) {
            const navLinks = document.querySelector('.nav-links');
            const logo = document.querySelector('.logo');

            if (
                mobileMenuOpen &&
                !navLinks.contains(e.target) &&
                !logo.contains(e.target)
            ) {
                navLinks.style.display = 'none';
                mobileMenuOpen = false;
            }
        });

        // Reset menu display on window resize (optional)
        window.addEventListener('resize', function () {
            const navLinks = document.querySelector('.nav-links');
            if (window.innerWidth > 968) {
                navLinks.style.display = 'flex';
                navLinks.style.flexDirection = 'row';
                navLinks.style.position = 'static';
                navLinks.style.background = 'transparent';
                navLinks.style.boxShadow = 'none';
                navLinks.style.padding = '0';
                mobileMenuOpen = false;
            } else if (!mobileMenuOpen) {
                navLinks.style.display = 'none';
            }
        });
    </script>
</body>
</html>
