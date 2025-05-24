<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - NITAI Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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

        .gradient-border {
            position: relative;
            background: linear-gradient(60deg, #5f3dc4, #7048e8, #845ef7);
            padding: 1px;
            border-radius: 0.5rem;
        }

        .input-gradient {
            background: linear-gradient(145deg, #2d3748 0%, #1a202c 100%);
            transition: all 0.3s ease;
        }

        .input-gradient:focus {
            transform: scale(1.01);
            box-shadow: 0 0 15px rgba(139, 92, 246, 0.3);
        }

        .submit-button {
            background: linear-gradient(45deg, #6d28d9, #7c3aed, #8b5cf6);
            transition: all 0.3s ease;
        }

        .submit-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(139, 92, 246, 0.4);
        }

        .contact-info {
            background: linear-gradient(165deg, rgba(55, 65, 81, 0.7), rgba(17, 24, 39, 0.7));
            backdrop-filter: blur(10px);
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
    </style>
</head>
<body class="min-h-screen p-0 text-gray-100">
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

    <div class="container mx-auto max-w-6xl pt-24">
        <div class="text-center mb-12" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Get in <span class="gradient-text">Touch</span>
            </h1>
            <p class="text-xl text-gray-400">Let's discuss how we can help you achieve your goals</p>
        </div>

        <div class="flex flex-wrap justify-center items-start gap-8 px-4">
            <!-- Contact Form -->
            <div class="gradient-border w-full max-w-md" data-aos="fade-up">
                <div class="bg-gray-800 rounded-lg p-8">
                    <h2 class="text-3xl font-bold text-center mb-2 bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">Contact Us</h2>
                    <p class="text-center text-gray-400 mb-6">We'd love to hear from you!</p>
                    
                    <form action="/contact" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="name" class="block text-gray-300 text-sm font-medium mb-2">
                                <i class="fas fa-user mr-2"></i>Name
                            </label>
                            <input type="text" id="name" name="name" required 
                                class="input-gradient w-full px-4 py-2 rounded-lg border border-gray-600 text-gray-300 focus:outline-none focus:border-purple-500">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-gray-300 text-sm font-medium mb-2">
                                <i class="fas fa-envelope mr-2"></i>Email
                            </label>
                            <input type="email" id="email" name="email" required 
                                class="input-gradient w-full px-4 py-2 rounded-lg border border-gray-600 text-gray-300 focus:outline-none focus:border-purple-500">
                        </div>
                        
                        <div>
                            <label for="number" class="block text-gray-300 text-sm font-medium mb-2">
                                <i class="fas fa-phone mr-2"></i>Phone Number
                            </label>
                            <input type="tel" id="number" name="number" 
                                class="input-gradient w-full px-4 py-2 rounded-lg border border-gray-600 text-gray-300 focus:outline-none focus:border-purple-500">
                        </div>
                        
                        <div>
                            <label for="location" class="block text-gray-300 text-sm font-medium mb-2">
                                <i class="fas fa-location-dot mr-2"></i>Location
                            </label>
                            <input type="text" id="location" name="location" 
                                class="input-gradient w-full px-4 py-2 rounded-lg border border-gray-600 text-gray-300 focus:outline-none focus:border-purple-500">
                        </div>
                        
                        <div>
                            <label for="purpose" class="block text-gray-300 text-sm font-medium mb-2">
                                <i class="fas fa-message mr-2"></i>Purpose
                            </label>
                            <textarea id="purpose" name="purpose" rows="4"
                                class="input-gradient w-full px-4 py-2 rounded-lg border border-gray-600 text-gray-300 focus:outline-none focus:border-purple-500"></textarea>
                        </div>
                        
                        <button type="submit" class="submit-button w-full py-3 px-4 rounded-lg text-white font-semibold">
                            <i class="fas fa-paper-plane mr-2"></i>Send Message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="contact-info w-full max-w-md p-8 rounded-lg" data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-2xl font-semibold mb-6 text-purple-400">Get in Touch</h2>
                
                <div class="space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="bg-purple-600 p-3 rounded-full">
                            <i class="fas fa-envelope text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-purple-400">Email</h3>
                            <p class="text-gray-300">operations@nitaisolutions.co.in</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="bg-purple-600 p-3 rounded-full">
                            <i class="fas fa-phone text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-purple-400">Phone</h3>
                            <p class="text-gray-300">+91 9373015503</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="bg-purple-600 p-3 rounded-full">
                            <i class="fas fa-location-dot text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-purple-400">Location</h3>
                            <p class="text-gray-300">Mumbai, Maharashtra, India</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="bg-purple-600 p-3 rounded-full">
                            <i class="fas fa-clock text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-purple-400">Business Hours</h3>
                            <p class="text-gray-300">Mon - Sat: 9:00 AM - 6:00 PM</p>
                        </div>
                    </div>

                    <div class="pt-6">
                        <h3 class="text-lg font-medium text-purple-400 mb-4">Connect With Us</h3>
                        <div class="flex gap-4">
                            <a href="#" class="bg-gray-700 p-3 rounded-full hover:bg-purple-600 transition-colors">
                                <i class="fab fa-linkedin-in text-white"></i>
                            </a>
                            <a href="#" class="bg-gray-700 p-3 rounded-full hover:bg-purple-600 transition-colors">
                                <i class="fab fa-twitter text-white"></i>
                            </a>
                            <a href="#" class="bg-gray-700 p-3 rounded-full hover:bg-purple-600 transition-colors">
                                <i class="fab fa-facebook-f text-white"></i>
                            </a>
                            <a href="#" class="bg-gray-700 p-3 rounded-full hover:bg-purple-600 transition-colors">
                                <i class="fab fa-instagram text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900/90 backdrop-blur-md py-12 mt-20">
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

    @if(session('success'))
    <div class="fixed bottom-4 right-4 bg-green-500 text-white p-4 rounded-lg shadow-lg" 
         data-aos="fade-left">
        <div class="flex items-center">
            <i class="fas fa-check-circle mr-2"></i>
            {{ session('success') }}
        </div>
    </div>
    @endif

    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
    </script>
</body>
</html>
