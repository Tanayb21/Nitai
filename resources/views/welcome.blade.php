<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Nitai Solutions - Premium HR Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1a1c2c 0%, #2d3748 100%);
            overflow-x: hidden;
        }

        .animated-gradient {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        .gradient-text {
            background: linear-gradient(45deg, #60a5fa, #8b5cf6, #ec4899);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: gradient 5s ease infinite;
            background-size: 200% 200%;
        }

        .moving-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(45deg, #1a1c2c, #2d3748);
            overflow: hidden;
        }

        .moving-background::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(139, 92, 246, 0.1) 0%, rgba(30, 64, 175, 0.1) 100%);
            animation: rotate 30s linear infinite;
        }

        .moving-background::after {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(236, 72, 153, 0.1) 0%, rgba(67, 56, 202, 0.1) 100%);
            animation: rotate 45s linear infinite reverse;
        }

        @keyframes rotate {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .premium-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .premium-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            background: rgba(255, 255, 255, 0.1);
        }

        .nav-link {
            position: relative;
            text-decoration: none;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background: linear-gradient(90deg, #60a5fa, #8b5cf6);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .hero-button {
            background: linear-gradient(45deg, #6d28d9, #7c3aed, #8b5cf6);
            transition: all 0.3s ease;
        }

        .hero-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(139, 92, 246, 0.4);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 2rem;
            text-align: center;
            border-radius: 1rem;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.1);
        }

        /* Mobile menu styles */
        .mobile-menu {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(17, 24, 39, 0.95);
            backdrop-filter: blur(8px);
            z-index: 40;
            padding: 6rem 1.5rem 2rem;
        }

        .mobile-menu.active {
            display: block;
        }

        .menu-backdrop {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 30;
            display: none;
        }

        .menu-backdrop.active {
            display: block;
        }

        @media (max-width: 768px) {
            .hero-section {
                padding-top: 8rem;
                text-align: center;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
<body class="text-gray-100">
    <div class="moving-background"></div>

    <!-- Header -->
    <header class="fixed w-full top-0 z-50 bg-gray-900/90 backdrop-blur-md">
        <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
            <a class="flex items-center gap-2" href="#">
                <img src="{{ asset('logo.png') }}" alt="Nitai Solutions" class="h-9 w-9 rounded-lg object-cover">
                <span class="text-xl font-bold gradient-text">NITAI Solutions</span>
            </a>

            <div class="flex flex-1 items-center justify-end md:justify-between">
                <!-- Desktop Navigation -->
                <nav aria-label="Global" class="hidden md:block">
                    <ul class="flex items-center gap-8 text-sm">
                        <li>
                            <a class="nav-link text-gray-300 transition hover:text-white" href="{{ url('/') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <a class="nav-link text-gray-300 transition hover:text-white" href="{{ url('/learnmore') }}">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a class="nav-link text-gray-300 transition hover:text-white" href="{{ url('/services') }}">
                                Services
                            </a>
                        </li>
                        <li>
                            <a class="nav-link text-gray-300 transition hover:text-white" href="#vision">
                                Our Vision
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="text-gray-300 hover:text-white md:hidden">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <div class="flex items-center gap-4">
                    <a class="hero-button hidden rounded-full px-5 py-2.5 text-sm font-medium text-white md:block"
                       href="{{ url('/contact') }}">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu">
        <button id="close-menu" class="absolute top-4 right-4 text-gray-300 hover:text-white">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <nav class="flex flex-col items-center gap-6">
            <a href="{{ url('/') }}" class="text-lg font-medium text-white hover:text-purple-400 transition">Home</a>
            <a href="{{ url('/learnmore') }}" class="text-lg font-medium text-white hover:text-purple-400 transition">About Us</a>
            <a href="{{ url('/services') }}" class="text-lg font-medium text-white hover:text-purple-400 transition">Services</a>
            <a href="#vision" class="text-lg font-medium text-white hover:text-purple-400 transition">Our Vision</a>
            <a href="{{ url('/contact') }}" class="hero-button rounded-full px-8 py-3 text-lg font-medium text-white">Contact Us</a>
        </nav>
    </div>
    <div id="menu-backdrop" class="menu-backdrop"></div>

    <!-- Hero Section -->
    <section class="hero-section relative min-h-screen pt-32 pb-16 overflow-hidden">
        <div class="relative z-10 mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:items-center">
            <div class="max-w-3xl text-center lg:text-left" data-aos="fade-right">
                <h1 class="text-4xl font-extrabold sm:text-5xl lg:text-6xl">
                    Transforming
                    <span class="gradient-text block">Human Resources</span>
                    For Tomorrow
                </h1>
                <p class="mt-6 text-base sm:text-lg text-gray-300 sm:text-xl/relaxed">
                    Empowering businesses with innovative HR solutions. We connect exceptional talent with outstanding opportunities, driving growth and success.
                </p>
                <div class="mt-8 flex flex-wrap gap-4 justify-center lg:justify-start">
                    <a href="{{ url('/contact') }}"
                       class="hero-button rounded-full px-6 sm:px-8 py-3 text-sm font-medium inline-flex items-center gap-2 w-full sm:w-auto justify-center">
                        Get Started
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="{{ url('/learnmore') }}"
                       class="rounded-full border border-white/25 px-6 sm:px-8 py-3 text-sm font-medium hover:bg-white/10 transition-colors inline-flex items-center gap-2 w-full sm:w-auto justify-center">
                        Learn More
                        <i class="fas fa-info-circle"></i>
                    </a>
                </div>
            </div>
            <div class="hidden lg:block lg:w-2/3" data-aos="fade-left">
                <video autoplay loop muted playsinline class="w-full h-[500px] object-cover">
                    <source src="{{ asset('hrsolutions.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 relative">
        <div class="container mx-auto px-4">
            <div class="stats-grid">
                <div class="stat-card" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-users text-4xl text-purple-400 mb-4"></i>
                    <h3 class="text-3xl font-bold gradient-text">500+</h3>
                    <p class="text-gray-400">Successful Placements</p>
                </div>
                <div class="stat-card" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-building text-4xl text-blue-400 mb-4"></i>
                    <h3 class="text-3xl font-bold gradient-text">30+</h3>
                    <p class="text-gray-400">Partner Companies</p>
                </div>
                <div class="stat-card" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-chart-line text-4xl text-pink-400 mb-4"></i>
                    <h3 class="text-3xl font-bold gradient-text">95%</h3>
                    <p class="text-gray-400">Success Rate</p>
                </div>
                <div class="stat-card" data-aos="fade-up" data-aos-delay="400">
                    <i class="fas fa-globe text-4xl text-green-400 mb-4"></i>
                    <h3 class="text-3xl font-bold gradient-text">10+</h3>
                    <p class="text-gray-400">Cities Covered</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Section -->
    <section id="vision" class="py-16 relative">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold mb-4">
                    Our <span class="gradient-text">Vision</span>
                </h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    To revolutionize the HR industry through innovation, integrity, and excellence, creating lasting partnerships that drive mutual success.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="premium-card p-8 rounded-xl" data-aos="fade-right">
                    <h3 class="text-2xl font-bold mb-4 gradient-text">Why Choose Us?</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-purple-400"></i>
                            <span>Industry-leading expertise and proven track record</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-purple-400"></i>
                            <span>Customized solutions for your unique needs</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-purple-400"></i>
                            <span>Comprehensive HR services under one roof</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-purple-400"></i>
                            <span>Dedicated support and consultation</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-purple-400"></i>
                            <span>Advanced technology integration</span>
                        </li>
                    </ul>
                </div>
                <div data-aos="fade-left">
                    <img src="{{ asset('whychooseus.jpg') }}" alt="Why Choose Us" class="rounded-xl shadow-2xl w-full h-[400px] object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900/90 backdrop-blur-md py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-xl font-semibold mb-4 gradient-text">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ url('/') }}" class="text-gray-400 hover:text-white transition">Home</a></li>
                        <li><a href="{{ url('/learnmore') }}" class="text-gray-400 hover:text-white transition">About Us</a></li>
                        <li><a href="{{ url('/services') }}" class="text-gray-400 hover:text-white transition">Services</a></li>
                        <li><a href="{{ url('/contact') }}" class="text-gray-400 hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-4 gradient-text">Services</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Permanent Staffing</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Contract Labour</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Payroll Services</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Executive Search</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-4 gradient-text">Contact</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-envelope text-purple-400"></i>
                            <a href="mailto:operations@nitaisolutions.co.in" class="text-gray-400 hover:text-white transition">operations@nitaisolutions.co.in</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-phone text-purple-400"></i>
                            <span class="text-gray-400">+91 9373015503</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-location-dot text-purple-400"></i>
                            <span class="text-gray-400">Mumbai, Maharashtra, India</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-4 gradient-text">Follow Us</h4>
                    <div class="flex gap-4">
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-linkedin text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-twitter text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-facebook text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p class="text-gray-400">&copy; 2024 NITAI Solutions. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Mobile menu functionality
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const closeMenuButton = document.getElementById('close-menu');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuBackdrop = document.getElementById('menu-backdrop');
        const mobileMenuLinks = mobileMenu.getElementsByTagName('a');

        function toggleMenu() {
            mobileMenu.classList.toggle('active');
            menuBackdrop.classList.toggle('active');
            document.body.classList.toggle('overflow-hidden');
        }

        mobileMenuButton.addEventListener('click', toggleMenu);
        closeMenuButton.addEventListener('click', toggleMenu);
        menuBackdrop.addEventListener('click', toggleMenu);

        // Close menu when clicking on links
        Array.from(mobileMenuLinks).forEach(link => {
            link.addEventListener('click', toggleMenu);
        });

        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html> 