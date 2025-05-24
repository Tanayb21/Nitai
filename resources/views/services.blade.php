<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - NITAI Solutions</title>
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

        .gradient-text {
            background: linear-gradient(45deg, #60a5fa, #8b5cf6, #ec4899);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: gradient 5s ease infinite;
            background-size: 200% 200%;
        }

        .service-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            background: rgba(255, 255, 255, 0.1);
        }

        .service-icon {
            background: linear-gradient(45deg, #6d28d9, #7c3aed, #8b5cf6);
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon {
            transform: scale(1.1) rotate(5deg);
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
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

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: 1rem;
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body class="text-gray-100">
    <div class="moving-background"></div>

    <!-- Header -->
    <header class="fixed w-full top-0 z-50 bg-gray-900/90 backdrop-blur-md">
        <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
            <a class="flex items-center gap-2" href="{{ url('/') }}">
                <img src="https://i.imgur.com/YxQJw8X.png" alt="Nitai Solutions" class="h-9 w-9 rounded-lg object-cover">
                <span class="text-xl font-bold gradient-text">NITAI Solutions</span>
            </a>

            <div class="flex flex-1 items-center justify-end md:justify-between">
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
                    </ul>
                </nav>

                <div class="flex items-center gap-4">
                    <a class="bg-gradient-to-r from-purple-500 to-indigo-600 hover:from-purple-600 hover:to-indigo-700 text-white font-medium px-5 py-2.5 rounded-full transition-all duration-300 transform hover:scale-105"
                       href="{{ url('/contact') }}">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section class="min-h-screen pt-32 pb-16 relative overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    Our Premium <span class="gradient-text">Services</span>
                </h1>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                    Elevating businesses through innovative HR solutions and exceptional talent acquisition
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Permanent Staffing -->
                <div class="service-card rounded-xl p-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-icon w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-users text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4 text-white">Permanent Staffing</h3>
                    <p class="text-gray-300 mb-4">End-to-end recruitment for long-term positions with our rigorous vetting process.</p>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-400"></i>
                            <span>Comprehensive candidate screening</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-400"></i>
                            <span>Skill assessment & verification</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-400"></i>
                            <span>Cultural fit evaluation</span>
                        </li>
                    </ul>
                </div>

                <!-- Contract Labour -->
                <div class="service-card rounded-xl p-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-icon w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-clock text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4 text-white">Contract Labour</h3>
                    <p class="text-gray-300 mb-4">Flexible workforce solutions tailored to your project requirements.</p>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-400"></i>
                            <span>Short & long-term contracts</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-400"></i>
                            <span>Scalable team solutions</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-400"></i>
                            <span>Project-based staffing</span>
                        </li>
                    </ul>
                </div>

                <!-- Payroll Services -->
                <div class="service-card rounded-xl p-8" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-icon w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-file-invoice-dollar text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4 text-white">Payroll Services</h3>
                    <p class="text-gray-300 mb-4">Comprehensive payroll management with 100% compliance guarantee.</p>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-400"></i>
                            <span>Automated payroll processing</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-400"></i>
                            <span>Tax compliance & filing</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-400"></i>
                            <span>Employee benefits management</span>
                        </li>
                    </ul>
                </div>

                <!-- Executive Search -->
                <div class="service-card rounded-xl p-8" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-icon w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-search text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4 text-white">Executive Search</h3>
                    <p class="text-gray-300 mb-4">C-suite and leadership hiring with discreet headhunting services.</p>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-400"></i>
                            <span>Leadership talent acquisition</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-400"></i>
                            <span>Industry-specific expertise</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-400"></i>
                            <span>Confidential search process</span>
                        </li>
                    </ul>
                </div>

                <!-- Tech Hiring -->
                <div class="service-card rounded-xl p-8" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-icon w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-laptop-code text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4 text-white">Tech Hiring</h3>
                    <p class="text-gray-300 mb-4">Specialized IT recruitment with technical assessment included.</p>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-400"></i>
                            <span>Technical skill evaluation</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-400"></i>
                            <span>Code assessment</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-400"></i>
                            <span>Tech stack matching</span>
                        </li>
                    </ul>
                </div>

                <!-- IT & Non-IT Hiring -->
                <div class="service-card rounded-xl p-8" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-icon w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-network-wired text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4 text-white">IT & Non-IT Hiring</h3>
                    <p class="text-gray-300 mb-4">Cross-industry recruitment solutions for all verticals.</p>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-400"></i>
                            <span>Multi-domain expertise</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-400"></i>
                            <span>Industry-specific hiring</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-400"></i>
                            <span>Role-based recruitment</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Features Section -->
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-bold mb-6">
                    Why Choose <span class="gradient-text">NITAI Solutions?</span>
                </h2>
                <p class="text-gray-400 mb-12 max-w-2xl mx-auto">
                    Experience excellence in HR solutions with our comprehensive approach
                </p>

                <div class="feature-grid">
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                        <i class="fas fa-chart-line text-4xl text-purple-400 mb-4"></i>
                        <h3 class="text-xl font-semibold mb-2">Data-Driven Approach</h3>
                        <p class="text-gray-400">Leverage analytics and insights for better hiring decisions</p>
                    </div>

                    <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                        <i class="fas fa-shield-alt text-4xl text-blue-400 mb-4"></i>
                        <h3 class="text-xl font-semibold mb-2">Quality Assurance</h3>
                        <p class="text-gray-400">Rigorous screening and verification processes</p>
                    </div>

                    <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                        <i class="fas fa-clock text-4xl text-pink-400 mb-4"></i>
                        <h3 class="text-xl font-semibold mb-2">Quick Turnaround</h3>
                        <p class="text-gray-400">Efficient processes to meet your timeline</p>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center mt-20" data-aos="fade-up">
                <h2 class="text-3xl font-bold mb-6">
                    Ready to <span class="gradient-text">Transform</span> Your HR?
                </h2>
                <p class="text-gray-400 mb-8 max-w-2xl mx-auto">
                    Let's discuss how our premium services can elevate your business
                </p>
                <a href="{{ url('/contact') }}"
                   class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-500 to-indigo-600 hover:from-purple-600 hover:to-indigo-700 text-white font-medium px-8 py-3 rounded-full transition-all duration-300 transform hover:scale-105">
                    Get Started Now
                    <i class="fas fa-arrow-right"></i>
                </a>
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
    </script>
</body>
</html>