<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevFolio - Fathan Fadly Hidayat</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* --- General Styles --- */
        :root {
            --primary-blue: #0078ff;
            --dark-background: #000;
            --light-background: #fff;
            --text-dark: #333;
            --text-light: #f4f4f4;
            --text-gray: #4e4e4e;
            --navbar-bg: rgba(0, 0, 0, 0.9);
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-dark);
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #f7f7f7;
            overflow-x: hidden;
        }

        .container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 15px;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* --- Header & Navbar --- */
        #header {
            background-color: var(--navbar-bg);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 18px 0;
            z-index: 999;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }
        
        #header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
            color: var(--light-background);
            letter-spacing: 1px;
            margin: 0;
            transition: color 0.3s;
        }

        .logo:hover {
            color: var(--primary-blue);
        }

        .navbar ul {
            margin: 0;
            padding: 0;
            display: flex;
            list-style: none;
        }

        .navbar li {
            margin-left: 30px;
        }

        .navbar li a {
            color: var(--light-background);
            font-size: 1rem;
            font-weight: 400;
            position: relative;
            transition: color 0.3s;
            text-transform: uppercase;
        }

        .navbar li a:hover,
        .navbar .active {
            color: var(--primary-blue);
        }

        .navbar li a::after {
            content: '';
            position: absolute;
            width: 0%;
            height: 2px;
            background: var(--primary-blue);
            bottom: -5px;
            left: 0;
            transition: width 0.3s;
        }

        .navbar li a:hover::after,
        .navbar .active::after {
            width: 100%;
        }
        
        /* --- Hero Section --- */
        #hero {
            width: 100%;
            height: 100vh;
            background: url('https://images.unsplash.com/photo-1605379399642-870262d3d051?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center/cover;
            background-color: var(--dark-background);
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            color: var(--light-background);
        }

        #hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            padding: 20px;
        }

        #hero h1 {
            font-size: 4.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        #hero p {
            font-size: 1.5rem;
            font-weight: 400;
            color: rgba(255, 255, 255, 0.8);
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        /* --- About Section --- */
        #about {
            padding: 80px 0;
        }

        .box-shadow-full {
            background: var(--light-background);
            padding: 50px;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.06), 0 2px 5px 0 rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            align-items: flex-start;
        }

        .about-left, .about-right {
            flex: 1;
            min-width: 300px;
        }

        .about-left {
            text-align: left;
        }

        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid var(--primary-blue);
            margin-bottom: 25px;
            display: block;
            margin-left: 0;
        }

        .about-info p {
            margin: 8px 0;
            color: var(--text-dark);
        }

        .about-info .title-s {
            font-weight: 600;
            color: var(--text-dark);
            min-width: 80px;
            display: inline-block;
        }

        .about-info span:not(.title-s) {
            color: var(--text-gray);
        }

        .skill-mf {
            margin-top: 30px;
            text-align: left;
        }

        .skill-mf .title-s {
            font-size: 1.2rem;
            margin-bottom: 15px;
            display: block;
        }

        .progress-bar-container {
            margin-bottom: 15px;
        }

        .progress-bar-container span {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            margin-bottom: 5px;
            color: var(--text-gray);
        }

        .progress {
            height: 0.7rem;
            background-color: #e9ecef;
            border-radius: 5px;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            background-color: var(--primary-blue);
            transition: width 0.8s ease-in-out;
        }

        .about-right .title-box-2 {
            margin-bottom: 30px;
        }

        .about-right .title-box-2 h5 {
            font-size: 2rem;
            position: relative;
            padding-bottom: 15px;
            margin: 0;
            color: var(--text-dark);
        }

        .about-right .title-box-2 h5:after {
            content: '';
            position: absolute;
            display: block;
            width: 100px;
            height: 3px;
            background: var(--primary-blue);
            bottom: 0;
            left: 0;
        }

        .about-right p {
            color: var(--text-gray);
            margin-bottom: 1rem;
        }

        /* --- Project Section --- */
        #projects {
            padding: 80px 0;
            text-align: center;
        }
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 50px;
            position: relative;
            display: inline-block;
        }
        .section-title::after {
            content: '';
            position: absolute;
            display: block;
            width: 80px;
            height: 3px;
            background: var(--primary-blue);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }
        .project-item {
            background: var(--light-background);
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 1px 1px 0 rgba(0,0,0,0.06), 0 2px 5px 0 rgba(0,0,0,0.2);
            border-radius: 5px;
            text-align: left;
        }
        .project-item h4 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: var(--primary-blue);
        }
        .project-item p {
            color: var(--text-gray);
            font-size: 1rem;
        }

        /* --- Contact Section --- */
        #contact {
            padding: 80px 0;
            background-color: var(--light-background);
            text-align: center;
        }
        .contact-info {
            padding-top: 20px;
        }
        .contact-info p {
            margin: 10px 0;
            color: var(--text-gray);
        }

        /* --- Responsive Design --- */
        @media (max-width: 992px) {
            #hero h1 { font-size: 3.5rem; }
            #hero p { font-size: 1.2rem; }
            .navbar li { margin-left: 15px; }
            .box-shadow-full { flex-direction: column; padding: 30px; }
            .about-left, .about-right { min-width: unset; width: 100%; }
            .profile-img { margin: 0 auto 25px auto; }
            .about-left { text-align: center; }
            .about-info, .skill-mf { text-align: center; }
            .about-info p, .skill-mf p { text-align: left; padding-left: 20px; padding-right: 20px; }
            .about-right .title-box-2 h5:after { left: 50%; transform: translateX(-50%); }
            .project-item { text-align: center; }
        }

        @media (max-width: 768px) {
            #header .container { flex-direction: column; text-align: center; }
            .navbar ul { flex-wrap: wrap; justify-content: center; margin-top: 15px; }
            .navbar li { margin: 5px 10px; }
            #hero h1 { font-size: 2.5rem; }
            #hero p { font-size: 1rem; }
        }
    </style>
</head>
<body>

    <header id="header">
        <div class="container">
            <h1 class="logo"><a href="#hero">Develio</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link active" href="#hero">HOME</a></li>
                    <li><a class="nav-link" href="#about">ABOUT</a></li>
                    <li><a class="nav-link" href="#projects">PROJECTS</a></li>
                    <li><a class="nav-link" href="#contact">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="hero">
        <div class="hero-content">
            <h1>I am Fathan Fadly Hidayat</h1>
            <p>Front End Developer people ;)</p>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="box-shadow-full">
                <div class="about-left">
                    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?q=80&w=150&auto=format&fit=crop" alt="Profile Picture" class="profile-img">
                    <div class="about-info">
                        <p><span class="title-s">Name: </span> <span>Fathan Fadly Hidayat</span></p>
                        <p><span class="title-s">Profile: </span> <span>Front-end Developer</span></p>
                        <p><span class="title-s">Email: </span> <span>fatannnfdly@gmail.com</span></p>
                        <p><span class="title-s">Phone: </span> <span>+62-85339074728</span></p>
                    </div>
                    <div class="skill-mf">
                        <p class="title-s">Skill</p>
                        <div class="progress-bar-container">
                            <span>HTML</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 85%;"></div>
                            </div>
                        </div>
                        <div class="progress-bar-container">
                            <span>CSS3</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 75%;"></div>
                            </div>
                        </div>
                        <div class="progress-bar-container">
                            <span>React</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 70%;"></div>
                            </div>
                        </div>
                        <div class="progress-bar-container">
                            <span>JavaScript</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 65%;"></div>
                            </div>
                        </div>
                        <div class="progress-bar-container">
                            <span>Laravel</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 50%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-right">
                    <div class="title-box-2">
                        <h5>About me</h5>
                    </div>
                    <p>
                        [cite_start]Fathan Fadly Hidayat adalah mahasiswa semester 5 yang berkomitmen di Bina Nusantara University (Binus)[cite: 5]. [cite_start]Dia bertujuan untuk memanfaatkan keahliannya dalam pengembangan front-end, termasuk HTML, CSS, JavaScript, dan React, untuk menciptakan antarmuka web yang inovatif, responsif, dan mudah digunakan[cite: 2].
                    </p>
                    <p>
                        [cite_start]Sebagai anggota BNCC (Bina Nusantara Computer Club), Fathan berkolaborasi dalam tim untuk mengembangkan antarmuka web yang ramah pengguna menggunakan HTML, CSS, dan JavaScript[cite: 17]. [cite_start]Dia juga memanfaatkan framework front-end seperti React untuk membangun komponen UI yang dinamis[cite: 18].
                    </p>
                    <p>
                        [cite_start]Dia sangat antusias untuk mengembangkan keahlian dan semangat inovatif, dengan menggabungkan pengetahuan akademisnya dengan passion untuk belajar guna berkontribusi secara efektif dan memberikan dampak yang berarti[cite: 6].
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <h2 class="section-title">Projects</h2>
            <div class="project-item">
                <h4>Project - Making a cashier system using C programming</h4>
                <p>Developing a cashier program system at a barbershop using C programming language. [cite_start]The program aims to make it easier for admins to input data[cite: 37, 38, 39].</p>
            </div>
            <div class="project-item">
                <h4>Project - Tebak Baku</h4>
                [cite_start]<p>Developing a standard word guessing game using Java programming[cite: 40, 41]. [cite_start]This project involved collaborating with 4 team members in developing the game[cite: 42].</p>
            </div>
            <div class="project-item">
                <h4>Project - Web Programming</h4>
                <p>Developing a web application using React and Node.js. [cite_start]Laravel was used as a framework in accessing the website[cite: 43, 44].</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2 class="section-title">Contact</h2>
            <div class="contact-info">
                <p>Email: <a href="mailto:fatannnfdly@gmail.com">fatannnfdly@gmail.com</a></p>
                <p>Phone: +62-85339074728</p>
                <p>LinkedIn: <a href="www.linkedin.com/in/fathanfadly" target="_blank">www.linkedin.com/in/fathanfadly</a></p>
                <p>Address: Malang, 65125</p>
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.nav-link');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= (sectionTop - sectionHeight / 3)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>