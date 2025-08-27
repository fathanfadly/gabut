<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fathan Fadly Hidayat - Portfolio</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-dark: #0f172a;
            --secondary-dark: #1e293b;
            --accent-blue: #3b82f6;
            --accent-cyan: #06b6d4;
            --text-primary: #f8fafc;
            --text-secondary: #cbd5e1;
            --text-muted: #94a3b8;
            --border-color: #334155;
            --card-bg: #1e293b;
            --hover-bg: #334155;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--primary-dark);
            color: var(--text-primary);
            line-height: 1.6;
            scroll-behavior: smooth;
        }

        /* Header */
        .header {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border-color);
            z-index: 1000;
            padding: 1rem 0;
        }

        .nav {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--accent-blue);
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            color: var(--text-secondary);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--accent-blue);
        }

        .contact-btn {
            background: var(--accent-blue);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .contact-btn:hover {
            background: #2563eb;
            transform: translateY(-2px);
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Hero Section */
        .hero {
            padding: 8rem 0 5rem;
            text-align: center;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--text-primary), var(--accent-cyan));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero .subtitle {
            font-size: 1.25rem;
            color: var(--accent-blue);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .hero .description {
            font-size: 1.1rem;
            color: var(--text-secondary);
            max-width: 700px;
            margin: 0 auto 2rem;
            line-height: 1.7;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 2rem;
        }

        .btn-primary {
            background: var(--accent-blue);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 0.5rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-secondary {
            background: transparent;
            color: var(--accent-blue);
            padding: 1rem 2rem;
            border: 2px solid var(--accent-blue);
            border-radius: 0.5rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary:hover, .btn-secondary:hover {
            transform: translateY(-2px);
        }

        .btn-secondary:hover {
            background: var(--accent-blue);
            color: white;
        }

        /* Section Styles */
        .section {
            padding: 5rem 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 3rem;
            color: var(--text-primary);
        }

        .section-subtitle {
            text-align: center;
            color: var(--text-muted);
            font-size: 1.1rem;
            margin-bottom: 3rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* About Section */
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .about-text h3 {
            font-size: 1.5rem;
            color: var(--accent-blue);
            margin-bottom: 1rem;
        }

        .about-text p {
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }

        .about-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
            margin-top: 2rem;
        }

        .stat-item {
            text-align: center;
            padding: 1.5rem;
            background: var(--card-bg);
            border-radius: 0.75rem;
            border: 1px solid var(--border-color);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: var(--accent-blue);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        /* Skills Section */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .skill-category {
            background: var(--card-bg);
            padding: 2rem;
            border-radius: 1rem;
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }

        .skill-category:hover {
            transform: translateY(-5px);
            border-color: var(--accent-blue);
        }

        .skill-category h3 {
            color: var(--accent-blue);
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        .skill-list {
            list-style: none;
        }

        .skill-list li {
            color: var(--text-secondary);
            margin-bottom: 0.5rem;
            padding-left: 1rem;
            position: relative;
        }

        .skill-list li::before {
            content: '▸';
            color: var(--accent-cyan);
            position: absolute;
            left: 0;
        }

        /* Projects Section */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .project-card {
            background: var(--card-bg);
            border-radius: 1rem;
            overflow: hidden;
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-10px);
            border-color: var(--accent-blue);
            box-shadow: 0 20px 40px rgba(59, 130, 246, 0.15);
        }

        .project-header {
            padding: 2rem;
            border-bottom: 1px solid var(--border-color);
        }

        .project-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }

        .project-description {
            color: var(--text-secondary);
            line-height: 1.6;
        }

        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            padding: 1.5rem 2rem;
        }

        .tech-tag {
            background: rgba(59, 130, 246, 0.1);
            color: var(--accent-blue);
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.85rem;
            font-weight: 500;
        }

        /* Experience Section */
        .experience-item {
            background: var(--card-bg);
            padding: 2rem;
            border-radius: 1rem;
            border: 1px solid var(--border-color);
            margin-bottom: 2rem;
            position: relative;
        }

        .experience-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 4px;
            background: var(--accent-blue);
            border-radius: 0 4px 4px 0;
        }

        .experience-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1rem;
        }

        .experience-title {
            color: var(--text-primary);
            font-size: 1.3rem;
            font-weight: 600;
        }

        .experience-company {
            color: var(--accent-blue);
            font-weight: 500;
        }

        .experience-period {
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        .experience-description {
            color: var(--text-secondary);
            line-height: 1.7;
        }

        .experience-description ul {
            margin-top: 1rem;
            padding-left: 1.5rem;
        }

        .experience-description li {
            margin-bottom: 0.5rem;
        }

        /* Contact Section */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            margin-top: 3rem;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.5rem;
            background: var(--card-bg);
            border-radius: 0.75rem;
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            border-color: var(--accent-blue);
            transform: translateX(10px);
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: var(--accent-blue);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
        }

        .contact-details h4 {
            color: var(--text-primary);
            margin-bottom: 0.25rem;
        }

        .contact-details p {
            color: var(--text-secondary);
        }

        .contact-form {
            background: var(--card-bg);
            padding: 2rem;
            border-radius: 1rem;
            border: 1px solid var(--border-color);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--text-secondary);
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            background: var(--primary-dark);
            border: 1px solid var(--border-color);
            border-radius: 0.5rem;
            color: var(--text-primary);
            font-size: 1rem;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--accent-blue);
        }

        .form-group textarea {
            resize: vertical;
            height: 120px;
        }

        /* Footer */
        .footer {
            background: var(--secondary-dark);
            padding: 2rem 0;
            text-align: center;
            border-top: 1px solid var(--border-color);
        }

        .footer p {
            color: var(--text-muted);
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: var(--card-bg);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-secondary);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: var(--accent-blue);
            color: white;
            transform: translateY(-3px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .about-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .contact-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .experience-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .container {
                padding: 0 1rem;
            }
        }

        /* Developer Ornaments */
        .code-decoration {
            position: absolute;
            font-family: 'Courier New', monospace;
            font-size: 1.2rem;
            color: var(--accent-blue);
            opacity: 0.1;
            pointer-events: none;
            z-index: -1;
        }

        .floating-code {
            position: fixed;
            font-family: 'Courier New', monospace;
            color: var(--accent-cyan);
            opacity: 0.05;
            pointer-events: none;
            z-index: -1;
            animation: float-code 20s infinite linear;
        }

        @keyframes float-code {
            0% {
                transform: translateY(100vh) rotate(0deg);
            }
            100% {
                transform: translateY(-100vh) rotate(360deg);
            }
        }

        /* Binary background */
        .binary-bg {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            opacity: 0.03;
            pointer-events: none;
        }

        .binary-text {
            position: absolute;
            font-family: 'Courier New', monospace;
            color: var(--accent-blue);
            font-size: 0.8rem;
            white-space: nowrap;
            animation: scroll-binary 15s linear infinite;
        }

        @keyframes scroll-binary {
            0% {
                transform: translateX(100vw);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        /* Geometric shapes */
        .geometric-shape {
            position: absolute;
            border: 2px solid var(--accent-blue);
            opacity: 0.1;
            pointer-events: none;
        }

        .shape-circle {
            border-radius: 50%;
            animation: rotate 20s linear infinite;
        }

        .shape-square {
            animation: pulse-shape 4s ease-in-out infinite;
        }

        .shape-triangle {
            width: 0;
            height: 0;
            border-left: 30px solid transparent;
            border-right: 30px solid transparent;
            border-bottom: 52px solid var(--accent-cyan);
            opacity: 0.1;
            animation: float 8s ease-in-out infinite;
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes pulse-shape {
            0%, 100% { transform: scale(1); opacity: 0.1; }
            50% { transform: scale(1.2); opacity: 0.2; }
        }

        /* Code bracket decorations */
        .bracket-decoration {
            position: absolute;
            font-size: 6rem;
            font-weight: bold;
            color: var(--accent-blue);
            opacity: 0.05;
            font-family: 'Courier New', monospace;
            pointer-events: none;
        }

        .bracket-left {
            left: -50px;
            top: 50%;
            transform: translateY(-50%);
        }

        .bracket-right {
            right: -50px;
            top: 50%;
            transform: translateY(-50%);
        }

        /* Terminal-like decorations */
        .terminal-decoration {
            position: absolute;
            background: rgba(15, 23, 42, 0.8);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 1rem;
            font-family: 'Courier New', monospace;
            font-size: 0.8rem;
            color: var(--accent-cyan);
            opacity: 0.6;
            pointer-events: none;
        }

        .terminal-header {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid var(--border-color);
        }

        .terminal-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin-right: 8px;
        }

        .dot-red { background: #ff5f56; }
        .dot-yellow { background: #ffbd2e; }
        .dot-green { background: #27ca3f; }

        .typing-indicator {
            animation: typing 2s infinite;
        }

        @keyframes typing {
            0%, 50% { opacity: 1; }
            51%, 100% { opacity: 0; }
        }

        /* CSS Grid pattern */
        .grid-pattern {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0.03;
            pointer-events: none;
            background-image: 
                linear-gradient(var(--accent-blue) 1px, transparent 1px),
                linear-gradient(90deg, var(--accent-blue) 1px, transparent 1px);
            background-size: 50px 50px;
        }

        /* Tech icons floating */
        .floating-tech-icon {
            position: absolute;
            font-size: 2rem;
            color: var(--accent-cyan);
            opacity: 0.1;
            animation: float-tech 15s ease-in-out infinite;
            pointer-events: none;
        }

        @keyframes float-tech {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            25% {
                transform: translateY(-20px) rotate(90deg);
            }
            50% {
                transform: translateY(0px) rotate(180deg);
            }
            75% {
                transform: translateY(20px) rotate(270deg);
            }
        }

        /* Cursor decoration */
        .cursor-decoration {
            position: fixed;
            width: 20px;
            height: 20px;
            border: 2px solid var(--accent-blue);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .cursor-trail {
            position: fixed;
            width: 6px;
            height: 6px;
            background: var(--accent-cyan);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9998;
            opacity: 0;
            transition: all 0.1s ease;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.6s ease forwards;
        }

        /* Scroll animations */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
        }

        /* Matrix rain effect */
        .matrix-rain {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
            opacity: 0.05;
        }

        .matrix-column {
            position: absolute;
            top: -100%;
            font-family: 'Courier New', monospace;
            color: var(--accent-cyan);
            font-size: 18px;
            line-height: 20px;
            animation: matrix-fall linear infinite;
        }

        @keyframes matrix-fall {
            to {
                transform: translateY(100vh);
            }
        }
        /* Contact Grid */
.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: start;
    margin-top: 3rem;
}

/* Contact Info Styles */
.contact-info {
    display: flex;
    flex-direction: column;
    gap: 2rem;
}

.contact-item {
    display: flex;
    align-items: flex-start;
    gap: 1.5rem;
    padding: 1.5rem;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 15px;
    border: 1px solid rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
}

.contact-item:hover {
    transform: translateY(-5px);
    background: rgba(255, 255, 255, 0.08);
    border-color: rgba(64, 156, 255, 0.3);
}

.contact-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #409cff, #1e40af);
    border-radius: 50%;
    font-size: 1.2rem;
    color: white;
    flex-shrink: 0;
}

.contact-details h4 {
    color: #409cff;
    margin: 0 0 0.5rem 0;
    font-size: 1.1rem;
    font-weight: 600;
}

.contact-details p {
    color: #94a3b8;
    margin: 0.25rem 0;
    font-size: 0.95rem;
}

/* Photo Frame Styles */
.photo-frame-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 2rem;
}

.photo-frame {
    position: relative;
    width: 300px;
    height: 400px;
}

.frame-border {
    position: relative;
    width: 100%;
    height: 100%;
    background: linear-gradient(145deg, #2a2a2a, #1a1a1a);
    border-radius: 20px;
    padding: 20px;
    box-shadow: 
        0 20px 40px rgba(0, 0, 0, 0.3),
        inset 0 1px 0 rgba(255, 255, 255, 0.1),
        inset 0 -1px 0 rgba(0, 0, 0, 0.5);
    overflow: hidden;
}

.frame-border::before {
    content: '';
    position: absolute;
    top: 10px;
    left: 10px;
    right: 10px;
    bottom: 10px;
    background: linear-gradient(145deg, #409cff, #1e40af);
    border-radius: 15px;
    opacity: 0.1;
    z-index: 1;
}

.profile-photo {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
    position: relative;
    z-index: 2;
    transition: all 0.3s ease;
    filter: grayscale(20%) contrast(1.1);
}

.profile-photo:hover {
    filter: grayscale(0%) contrast(1.2);
    transform: scale(1.02);
}

.frame-shadow {
    position: absolute;
    bottom: -20px;
    left: 20px;
    right: 20px;
    height: 20px;
    background: radial-gradient(ellipse, rgba(0, 0, 0, 0.3) 0%, transparent 70%);
    border-radius: 50%;
    z-index: 0;
}

.photo-caption {
    text-align: center;
    max-width: 300px;
}

.photo-caption h3 {
    color: #409cff;
    font-size: 1.5rem;
    margin: 0 0 0.5rem 0;
    font-weight: 600;
}

.photo-caption p {
    color: #94a3b8;
    font-size: 1rem;
    margin: 0;
    line-height: 1.5;
}

/* Responsive Design */
@media (max-width: 968px) {
    .contact-grid {
        grid-template-columns: 1fr;
        gap: 3rem;
        text-align: center;
    }
    
    .photo-frame {
        width: 250px;
        height: 350px;
    }
}

@media (max-width: 480px) {
    .contact-item {
        flex-direction: column;
        text-align: center;
        gap: 1rem;
    }
    
    .photo-frame {
        width: 200px;
        height: 280px;
    }
    
    .contact-grid {
        gap: 2rem;
    }
}

/* Animation for photo frame */
@keyframes photoFloat {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-10px);
    }
}

.photo-frame {
    animation: photoFloat 6s ease-in-out infinite;
}

/* Additional hover effects */
.photo-frame:hover {
    animation-play-state: paused;
}

.photo-frame:hover .frame-border {
    box-shadow: 
        0 30px 60px rgba(0, 0, 0, 0.4),
        0 0 30px rgba(64, 156, 255, 0.2),
        inset 0 1px 0 rgba(255, 255, 255, 0.2),
        inset 0 -1px 0 rgba(0, 0, 0, 0.5);
}
    </style>
</head>
<body>
    <!-- Matrix Rain Effect -->
    <div class="matrix-rain" id="matrix-rain"></div>

    <!-- Floating Code Elements -->
    <div class="floating-code" style="top: 10%; left: 5%; font-size: 1rem;">&lt;div&gt;</div>
    <div class="floating-code" style="top: 20%; right: 10%; font-size: 0.8rem; animation-delay: -5s;">function()</div>
    <div class="floating-code" style="top: 30%; left: 80%; font-size: 1.1rem; animation-delay: -10s;">{}</div>
    <div class="floating-code" style="top: 60%; left: 15%; font-size: 0.9rem; animation-delay: -7s;">console.log()</div>
    <div class="floating-code" style="top: 80%; right: 20%; font-size: 1rem; animation-delay: -12s;">const x =</div>

    <!-- Floating Tech Icons -->
    <div class="floating-tech-icon" style="top: 15%; left: 90%; animation-delay: -2s;">⚛️</div>
    <div class="floating-tech-icon" style="top: 45%; left: 5%; animation-delay: -8s;">🚀</div>
    <div class="floating-tech-icon" style="top: 70%; right: 5%; animation-delay: -4s;">💻</div>
    <div class="floating-tech-icon" style="top: 25%; right: 85%; animation-delay: -6s;">🔧</div>

    <!-- Custom Cursor -->
    <div class="cursor-decoration" id="cursor-decoration"></div>
    <div class="cursor-trail" id="cursor-trail"></div>

    <!-- Header -->
    <header class="header">
        <nav class="nav">
            <!-- Grid Pattern Background -->
            <div class="grid-pattern"></div>
            <div class="logo">FFH</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <a href="#contact" class="contact-btn">Get In Touch</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero" style="position: relative;">
        <!-- Binary Background -->
        <div class="binary-bg">
            <div class="binary-text" style="top: 10%; animation-delay: 0s;">01001000 01100101 01101100 01101100 01101111 00100000 01010111 01101111 01110010 01101100 01100100</div>
            <div class="binary-text" style="top: 30%; animation-delay: -5s;">01000110 01110010 01101111 01101110 01110100 00100000 01000101 01101110 01100100 00100000 01000100 01100101 01110110</div>
            <div class="binary-text" style="top: 50%; animation-delay: -10s;">01010010 01100101 01100001 01100011 01110100 00100000 01001010 01100001 01110110 01100001 01010011 01100011 01110010 01101001 01110000 01110100</div>
            <div class="binary-text" style="top: 70%; animation-delay: -15s;">01001000 01010100 01001101 01001100 00100000 01000011 01010011 01010011 00100000 01001010 01010011</div>
        </div>
        
        <!-- Geometric Shapes -->
        <div class="geometric-shape shape-circle" style="width: 100px; height: 100px; top: 20%; left: 80%;"></div>
        <div class="geometric-shape shape-square" style="width: 60px; height: 60px; top: 70%; left: 10%;"></div>
        <div class="shape-triangle" style="top: 30%; right: 15%;"></div>
        
        <!-- Code Brackets -->
        <div class="bracket-decoration bracket-left">{</div>
        <div class="bracket-decoration bracket-right">}</div>
        
        <div class="container">
            <h1 class="fade-in-up">Fathan Fadly Hidayat</h1>
            <p class="subtitle fade-in-up">Front-End Developer & Computer Science Student</p>
            <p class="description fade-in-up">
                A dedicated 5th semester Computer Science student at Binus University with expertise in front-end development. 
                I create innovative, responsive, and user-friendly web interfaces using modern technologies like HTML, CSS, JavaScript, and React.
            </p>
            <div class="hero-buttons fade-in-up">
                <a href="#projects" class="btn-primary">View My Work</a>
                <a href="#contact" class="btn-secondary">Contact Me</a>
            </div>
        </div>
        
        <!-- Terminal Decoration -->
        <div class="terminal-decoration" style="position: absolute; top: 15%; right: 50px; width: 300px;">
            <div class="terminal-header">
                <div class="terminal-dot dot-red"></div>
                <div class="terminal-dot dot-yellow"></div>
                <div class="terminal-dot dot-green"></div>
                <span style="margin-left: 10px; font-size: 0.7rem;">terminal</span>
            </div>
            <div>$ npm start</div>
            <div>$ Building for production...</div>
            <div>$ Server running on port 3000</div>
            <div class="typing-indicator">$ <span>|</span></div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <h2 class="section-title animate-on-scroll">About Me</h2>
            <div class="about-content">
                <div class="about-text animate-on-scroll">
                    <h3>Passionate Developer</h3>
                    <p>
                        I am Fathan Fadly Hidayat, a committed 5th semester student at Bina Nusantara University (Binus). 
                        I am eager to develop expertise and an innovative spirit, combining my academic knowledge with a passion 
                        for learning to contribute effectively and make a meaningful impact.
                    </p>
                    <p>
                        My objective is to leverage my expertise in front-end development, including HTML, CSS, JavaScript, 
                        and React, to create innovative, responsive, and user-friendly web interfaces. I aim to contribute to 
                        impactful projects that enhance the user experience while continuing to grow professionally in a dynamic 
                        and collaborative environment.
                    </p>
                </div>
                <div class="about-stats animate-on-scroll">
                    <div class="stat-item">
                        <div class="stat-number">5th</div>
                        <div class="stat-label">Semester Student</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">3+</div>
                        <div class="stat-label">Projects Completed</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">2022</div>
                        <div class="stat-label">Started at Binus</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">6+</div>
                        <div class="stat-label">Months in BNCC</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section" style="position: relative;">
        <!-- Code Decorations -->
        <div class="code-decoration" style="top: 10%; left: 5%; font-size: 2rem;">&lt;/&gt;</div>
        <div class="code-decoration" style="top: 20%; right: 10%; font-size: 1.5rem;">{ }</div>
        <div class="code-decoration" style="bottom: 20%; left: 10%; font-size: 3rem;">( )</div>
        <div class="code-decoration" style="bottom: 10%; right: 15%; font-size: 2rem;">[ ]</div>
        
        <div class="container">
            <h2 class="section-title animate-on-scroll">Skills & Technologies</h2>
            <p class="section-subtitle animate-on-scroll">
                Here are the technologies and tools I work with to create amazing web experiences.
            </p>
            <div class="skills-grid">
                <div class="skill-category animate-on-scroll" style="position: relative;">
                    <!-- Mini Terminal -->
                    <div class="terminal-decoration" style="position: absolute; top: -10px; right: -10px; width: 150px; font-size: 0.6rem;">
                        <div class="terminal-header">
                            <div class="terminal-dot dot-red" style="width: 6px; height: 6px;"></div>
                            <div class="terminal-dot dot-yellow" style="width: 6px; height: 6px;"></div>
                            <div class="terminal-dot dot-green" style="width: 6px; height: 6px;"></div>
                        </div>
                        <div>$ npm run dev</div>
                        <div>✓ Ready</div>
                    </div>
                    <h3><i class="fas fa-code"></i> Front-End Development</h3>
                    <ul class="skill-list">
                        <li>HTML5 & CSS3</li>
                        <li>JavaScript (ES6+)</li>
                        <li>React.js</li>
                        <li>Responsive Design</li>
                        <li>UI/UX Design Basics</li>
                    </ul>
                </div>
                <div class="skill-category animate-on-scroll">
                    <h3><i class="fas fa-server"></i> Back-End & Frameworks</h3>
                    <ul class="skill-list">
                        <li>Laravel Framework</li>
                        <li>Node.js</li>
                        <li>Python</li>
                        <li>MySQL Databases</li>
                        <li>RESTful APIs</li>
                    </ul>
                </div>
                <div class="skill-category animate-on-scroll">
                    <h3><i class="fas fa-laptop-code"></i> Programming Languages</h3>
                    <ul class="skill-list">
                        <li>C Programming</li>
                        <li>Java</li>
                        <li>JavaScript</li>
                        <li>Python</li>
                        <li>PHP</li>
                    </ul>
                </div>
                <div class="skill-category animate-on-scroll" style="position: relative;">
                    <!-- Geometric decoration -->
                    <div class="geometric-shape shape-circle" style="width: 40px; height: 40px; top: -20px; right: -20px;"></div>
                    <h3><i class="fas fa-tools"></i> Tools & Others</h3>
                    <ul class="skill-list">
                        <li>Git & GitHub</li>
                        <li>Web Performance Optimization</li>
                        <li>Responsive Design</li>
                        <li>Team Collaboration</li>
                        <li>Problem Solving</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Grid Pattern -->
        <div class="grid-pattern"></div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Featured Projects</h2>
            <p class="section-subtitle animate-on-scroll">
                Here are some of the projects I've worked on during my academic journey.
            </p>
            <div class="projects-grid">
                <div class="project-card animate-on-scroll">
                    <div class="project-header">
                        <h3 class="project-title">Barbershop Cashier System</h3>
                        <p class="project-description">
                            A comprehensive cashier program system developed for a barbershop using C programming language. 
                            The program aims to make it easier for admins to input data and manage transactions efficiently.
                        </p>
                    </div>
                    <div class="project-tech">
                        <span class="tech-tag">C Programming</span>
                        <span class="tech-tag">Data Management</span>
                        <span class="tech-tag">System Design</span>
                    </div>
                </div>
                
                <div class="project-card animate-on-scroll">
                    <div class="project-header">
                        <h3 class="project-title">Tebak Baku - Word Guessing Game</h3>
                        <p class="project-description">
                            A standard word guessing game developed using Java programming language. 
                            This collaborative project involved working with 4 team members to create an engaging gaming experience.
                        </p>
                    </div>
                    <div class="project-tech">
                        <span class="tech-tag">Java</span>
                        <span class="tech-tag">Game Development</span>
                        <span class="tech-tag">Team Collaboration</span>
                        <span class="tech-tag">Object-Oriented Programming</span>
                    </div>
                </div>
                
                <div class="project-card animate-on-scroll">
                    <div class="project-header">
                        <h3 class="project-title">Full-Stack Web Application</h3>
                        <p class="project-description">
                            A modern web application developed using React and Node.js for the front-end and back-end respectively. 
                            Laravel framework was utilized for enhanced website functionality and database management.
                        </p>
                    </div>
                    <div class="project-tech">
                        <span class="tech-tag">React.js</span>
                        <span class="tech-tag">Node.js</span>
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">Full-Stack Development</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Experience</h2>
            <div class="experience-item animate-on-scroll">
                <div class="experience-header">
                    <div>
                        <h3 class="experience-title">BNCC Member</h3>
                        <p class="experience-company">Bina Nusantara Computer Club</p>
                    </div>
                    <p class="experience-period">August 2022 – February 2023</p>
                </div>
                <div class="experience-description">
                    <p>Active member of the Bina Nusantara Computer Club, focusing on front-end development and collaborative projects.</p>
                    <ul>
                        <li>Collaborated in teams to develop user-friendly web interfaces using HTML, CSS, and JavaScript</li>
                        <li>Leveraged front-end frameworks such as React to build dynamic UI components</li>
                        <li>Attended internal trainings and shared knowledge on front-end development best practices</li>
                        <li>Gained expertise in responsive design and performance optimization techniques</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


<!-- Contact Section -->
<section id="contact" class="section">
    <div class="container">
        <h2 class="section-title animate-on-scroll">Get In Touch</h2>
        <p class="section-subtitle animate-on-scroll">
            I'm always open to discussing new opportunities and interesting projects.
        </p>
        <div class="contact-grid">
            <div class="contact-info animate-on-scroll">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Email</h4>
                        <p>fatannnfdly@gmail.com</p>
                        <p>fathan.hidayat@binus.ac.id</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Phone</h4>
                        <p>+62 85339074728</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Location</h4>
                        <p>Malang, 65125</p>
                        <p>East Java, Indonesia</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fab fa-linkedin"></i>
                    </div>
                    <div class="contact-details">
                        <h4>LinkedIn</h4>
                        <p>linkedin.com/in/fathanfadly</p>
                    </div>
                </div>
            </div>
            
            <!-- Photo Frame replacing the form -->
            <div class="photo-frame-container animate-on-scroll">
                <div class="photo-frame">
                    <div class="frame-border">
                        <img src="ta2.png" alt="Profile Photo" class="profile-photo">
                    </div>
                    <div class="frame-shadow"></div>
                </div>
                <div class="photo-caption">
                    <h3>Let's Connect</h3>
                    <p>Ready to bring ideas to life through design and code</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="social-links">
                <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-link"><i class="fas fa-envelope"></i></a>
            </div>
            <p>&copy; 2024 Fathan Fadly Hidayat. All rights reserved.</p>
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

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);

        // Observe all elements with animate-on-scroll class
        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });

        // Header background change on scroll
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(15, 23, 42, 0.98)';
            } else {
                header.style.background = 'rgba(15, 23, 42, 0.95)';
            }
        });

        // Contact form handling
        document.querySelector('.contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const name = formData.get('name');
            const email = formData.get('email');
            const subject = formData.get('subject');
            const message = formData.get('message');
            
            // Simple form validation
            if (!name || !email || !subject || !message) {
                alert('Please fill in all fields');
                return;
            }
            
            // Simulate form submission
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                alert('Thank you for your message! I will get back to you soon.');
                this.reset();
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            }, 2000);
        });

        // Typing effect for hero title
        function typeWriter(element, text, delay = 100) {
            let i = 0;
            element.textContent = '';
            
            function type() {
                if (i < text.length) {
                    element.textContent += text.charAt(i);
                    i++;
                    setTimeout(type, delay);
                }
            }
            type();
        }

        // Initialize typing effect when page loads
        window.addEventListener('load', () => {
            const heroTitle = document.querySelector('.hero h1');
            if (heroTitle) {
                typeWriter(heroTitle, 'Fathan Fadly Hidayat', 80);
            }
        });

        // Mobile menu toggle (if needed for responsive design)
        function toggleMobileMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('active');
        }

        // Add click handlers for project cards
        document.querySelectorAll('.project-card').forEach(card => {
            card.addEventListener('click', function() {
                const title = this.querySelector('.project-title').textContent;
                const description = this.querySelector('.project-description').textContent;
                
                // You can implement modal or redirect to project details
                console.log(`Clicked on project: ${title}`);
            });
        });

        // Skills progress animation
        function animateSkillBars() {
            const skillItems = document.querySelectorAll('.skill-list li');
            skillItems.forEach((item, index) => {
                setTimeout(() => {
                    item.style.opacity = '0';
                    item.style.transform = 'translateX(-20px)';
                    setTimeout(() => {
                        item.style.transition = 'all 0.5s ease';
                        item.style.opacity = '1';
                        item.style.transform = 'translateX(0)';
                    }, 50);
                }, index * 100);
            });
        }

        // Trigger skill animation when skills section is in view
        const skillsSection = document.querySelector('#skills');
        const skillsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateSkillBars();
                    skillsObserver.unobserve(entry.target);
                }
            });
        });

        if (skillsSection) {
            skillsObserver.observe(skillsSection);
        }

        // Add hover effects for contact items
        document.querySelectorAll('.contact-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateX(10px) scale(1.02)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateX(0) scale(1)';
            });
        });

        // Parallax effect for hero section
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero');
            const rate = scrolled * -0.5;
            
            if (hero) {
                hero.style.transform = `translateY(${rate}px)`;
            }
        });

        // Add active state to navigation based on scroll position
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section[id]');
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
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });

        // Add CSS for active nav link
        const style = document.createElement('style');
        style.textContent = `
            .nav-links a.active {
                color: var(--accent-blue);
                font-weight: 600;
            }
            
            .nav-links a.active::after {
                content: '';
                position: absolute;
                bottom: -5px;
                left: 0;
                width: 100%;
                height: 2px;
                background: var(--accent-blue);
            }
            
            .nav-links a {
                position: relative;
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>