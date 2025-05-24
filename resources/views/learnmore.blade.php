<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - NITAI Solutions</title>
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

        .premium-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .premium-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
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

    <!-- Hero Section -->
    <section class="relative min-h-screen pt-32 pb-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    Transforming <span class="gradient-text">HR Solutions</span> for Tomorrow
                </h1>
                <p class="text-xl text-gray-400 mb-8">
                    Empowering businesses and professionals with innovative HR solutions that drive growth and success
                </p>
                <div class="relative">
                    <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg" alt="Team Collaboration" class="rounded-xl shadow-2xl w-full" data-aos="zoom-in">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-3xl font-bold mb-6">Our <span class="gradient-text">Story</span></h2>
                    <p class="text-gray-400 mb-6">
                        NITAI Solutions was founded with a vision to revolutionize the HR industry through innovation and excellence. Based in Mumbai, we've established ourselves as a leading force in talent acquisition and HR services, serving clients across India.
                    </p>
                    <p class="text-gray-400">
                        Our journey is marked by a deep understanding of both employer and employee needs, allowing us to create perfect matches that drive organizational success. With a focus on technology-driven solutions and personalized service, we've helped numerous businesses build strong teams and achieve their goals.
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-4" data-aos="fade-left">
                    <img src="https://images.pexels.com/photos/1181605/pexels-photo-1181605.jpeg" alt="Professional Meeting" class="rounded-xl shadow-lg">
                    <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg" alt="Team Collaboration" class="rounded-xl shadow-lg mt-8">
                </div>
            </div>
        </div>
    </section>

    <!-- For Employers Section -->
    <section class="py-16 bg-gray-900/50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">
                For <span class="gradient-text">Employers</span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="premium-card p-6 rounded-xl" data-aos="fade-up">
                    <i class="fas fa-users text-4xl text-purple-400 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-4">Access Top Talent</h3>
                    <p class="text-gray-400">
                        Get access to pre-screened, qualified candidates who match your requirements perfectly. Our rigorous vetting process ensures you only meet the best fits for your organization.
                    </p>
                </div>
                <div class="premium-card p-6 rounded-xl" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-clock text-4xl text-blue-400 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-4">Time-Efficient Hiring</h3>
                    <p class="text-gray-400">
                        Save valuable time with our streamlined recruitment process. We handle everything from initial screening to final negotiations, allowing you to focus on your core business.
                    </p>
                </div>
                <div class="premium-card p-6 rounded-xl" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-chart-line text-4xl text-pink-400 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-4">Cost-Effective Solutions</h3>
                    <p class="text-gray-400">
                        Reduce hiring costs and improve ROI with our efficient recruitment solutions. Our flexible pricing models ensure you get the best value for your investment.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- For Candidates Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">
                For <span class="gradient-text">Candidates</span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="premium-card p-8 rounded-xl" data-aos="fade-right">
                    <h3 class="text-2xl font-bold mb-6">Career Growth Opportunities</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-purple-400"></i>
                            <span>Access to premium job opportunities across industries</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-purple-400"></i>
                            <span>Career guidance and professional development support</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-purple-400"></i>
                            <span>Personalized job matching based on your skills and preferences</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-purple-400"></i>
                            <span>Regular updates on relevant opportunities</span>
                        </li>
                    </ul>
                </div>
                <div class="premium-card p-8 rounded-xl" data-aos="fade-left">
                    <h3 class="text-2xl font-bold mb-6">Our Commitment</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-purple-400"></i>
                            <span>Confidential profile handling</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-purple-400"></i>
                            <span>Interview preparation support</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-purple-400"></i>
                            <span>Salary negotiation assistance</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-purple-400"></i>
                            <span>Long-term career planning guidance</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-gray-900/50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="stat-card p-6 rounded-xl text-center" data-aos="fade-up">
                    <i class="fas fa-users text-4xl text-purple-400 mb-4"></i>
                    <h3 class="text-3xl font-bold gradient-text">500+</h3>
                    <p class="text-gray-400">Successful Placements</p>
                </div>
                <div class="stat-card p-6 rounded-xl text-center" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-building text-4xl text-blue-400 mb-4"></i>
                    <h3 class="text-3xl font-bold gradient-text">30+</h3>
                    <p class="text-gray-400">Partner Companies</p>
                </div>
                <div class="stat-card p-6 rounded-xl text-center" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-chart-line text-4xl text-pink-400 mb-4"></i>
                    <h3 class="text-3xl font-bold gradient-text">95%</h3>
                    <p class="text-gray-400">Success Rate</p>
                </div>
                <div class="stat-card p-6 rounded-xl text-center" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-globe text-4xl text-green-400 mb-4"></i>
                    <h3 class="text-3xl font-bold gradient-text">10+</h3>
                    <p class="text-gray-400">Cities Covered</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">
                Why Choose <span class="gradient-text">NITAI Solutions?</span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="premium-card p-8 rounded-xl" data-aos="fade-up">
                    <i class="fas fa-chart-pie text-4xl text-purple-400 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-4">Industry Expertise</h3>
                    <p class="text-gray-400">
                        Deep understanding of various industries and their unique hiring needs. Our specialized teams ensure perfect matches for every role.
                    </p>
                </div>
                <div class="premium-card p-8 rounded-xl" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-users-gear text-4xl text-blue-400 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-4">Dedicated Team</h3>
                    <p class="text-gray-400">
                        Experienced professionals committed to your success. We provide personalized attention to every client and candidate.
                    </p>
                </div>
                <div class="premium-card p-8 rounded-xl" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-rocket text-4xl text-pink-400 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-4">Innovative Solutions</h3>
                    <p class="text-gray-400">
                        Cutting-edge technology and processes for better results. We leverage the latest tools to streamline recruitment.
                    </p>
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
    </script>
</body>
</html>






