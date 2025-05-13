<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
</head>
<body>
    
<header class="bg-white dark:bg-gray-900">
    <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
        <a class="block text-teal-600 dark:text-teal-300" href="#">

            <a class="h-8" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <img src="icon.jpg" alt="aogaigj"   class="h-9 w-9 rounded-lg object-cover">

</a>
        </a>

        <div class="flex flex-1 items-center justify-end md:justify-between">
            <nav aria-label="Global" class="hidden md:block">
                <ul class="flex items-center gap-6 text-sm">
                    <li>
                        <a class="text-xl font-bold text-yellow-500 transition hover:text-gray-500/75 dark:text-white dark:hover:text-white/75"
                           href="#">
                            NITAI Solutions Pvt. Ltd.
                        </a>
                    </li>
                <li>
                    <a
                      class="text-gray-500 transition hover:text-gray-500/75 dark:text-white dark:hover:text-white/75"
                      href="{{ url('/learnmore') }}"
                    >
                      About Us
                    </a>
                  </li>

             

                  <li>
                    <a
                      class="text-gray-500 transition hover:text-gray-500/75 dark:text-white dark:hover:text-white/75"
                      href="{{ url('/services') }}"
                    >
                      Services
                    </a>
                  </li>



                </ul>
            </nav>

            <div class="flex items-center gap-4">
                <div class="sm:flex sm:gap-4">
                    <a
                        class="block rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-teal-700 dark:hover:bg-teal-500"
                        href="{{ url('/contact') }}"
                    >
                        Contact Us!

                    </a>


                </div>

                <button
                    class="block rounded-sm bg-gray-100 p-2.5 text-gray-600 transition hover:text-gray-600/75 md:hidden dark:bg-gray-800 dark:text-white dark:hover:text-white/75"
                >
                    <span class="sr-only">Toggle menu</span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="size-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>
    <section class="bg-white dark:bg-gray-900 py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-semibold text-gray-100 text-center mb-12">Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center justify-center">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                    <i data-lucide="users" class="text-indigo-500 w-8 h-8"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">Permanent Staffing</h3>
                <p class="text-gray-600 text-center">End-to-end recruitment for long-term positions with our rigorous vetting process.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center justify-center">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                    <i data-lucide="clock" class="text-indigo-500 w-8 h-8"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">Contract Labour</h3>
                <p class="text-gray-600 text-center">Flexible workforce solutions tailored to your project requirements.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center justify-center">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                   <i data-lucide="briefcase" class="text-indigo-500 w-8 h-8"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">Payroll Services</h3>
                <p class="text-gray-600 text-center">Comprehensive payroll management with 100% compliance guarantee.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center justify-center">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                    <i data-lucide="search" class="text-indigo-500 w-8 h-8"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">Executive Research</h3>
                <p class="text-gray-600 text-center">C-suite and leadership hiring with discreet headhunting services.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center justify-center">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                    <i data-lucide="laptop" class="text-indigo-500 w-8 h-8"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">Tech Hiring</h3>
                <p class="text-gray-600 text-center">Specialized IT recruitment with technical assessment included.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center justify-center">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                    <i data-lucide="users" class="text-indigo-500 w-8 h-8"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">IT & Non-IT Hiring</h3>
                <p class="text-gray-600 text-center">Cross-industry recruitment solutions for all verticals.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center justify-center">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                    <i data-lucide="users" class="text-indigo-500 w-8 h-8"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">Bulk Hiring</h3>
                <p class="text-gray-600 text-center">Mass-recruitment drives with accelerated timelines.</p>
            </div>
        </div>
    </div>
</section>

<script src="https://unpkg.com/lucide-react@latest/umd/lucide-react.min.js"></script>
<script>
  lucide.createIcons();
</script>

</body>
</html>