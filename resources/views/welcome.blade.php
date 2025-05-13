<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/lucide@latest"></script>
<script>
  lucide.createIcons();
</script>
<script>AOS.init();</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Nitai</title>
    <style>
        body {
            background-image: url('your-image.jpg'); /* Replace 'your-image.jpg' with your image URL */
            background-size: cover; /* Adjust as needed: cover, contain, etc. */
            background-repeat: no-repeat;
        }
        .text-box-overlay {
            background-color: rgba(255, 255, 255, 0.6); /* White with 60% opacity */
        }
    </style>
    <script>
  document.addEventListener("DOMContentLoaded", function () {
    AOS.init();
  });
</script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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
<section class="relative bg-white lg:grid lg:h-screen lg:place-content-center dark:bg-gray-900">
    <div class="absolute inset-0 bg-[url('/back.jpg')] bg-cover bg-center  z-0"></div>

    <div class="relative z-10 mx-auto w-screen max-w-screen-xl px-4 py-4 rounded-lg sm:py-8 lg:py-10 text-box-overlay">
        <div class="mx-auto max-w-prose text-center" >
            <h1 class="text-4xl font-bold  sm:text-5xl ">
                Connecting Talent with
                <strong class="text-indigo-600"> Opportunity! </strong>
            </h1>
            <p class="mt-4 text-base text-pretty  sm:text-lg/relaxed dark:text">
                we help you find the right fit for your career and business needs. Contact us today to discover your next opportunity!
            </p>
            <div class="mt-4 flex justify-center gap-4 sm:mt-6">
                <a class="inline-block rounded border border-indigo-600 bg-indigo-600 px-5 py-3 font-medium text-white shadow-sm transition-colors hover:bg-indigo-700" href="{{ url('/contact') }}">
                  Get Started
                </a>
                <button onclick="window.location.href='{{ url('learnmore') }}'">
                    <a class="inline-block rounded border border-gray-200 px-5 py-3 font-medium  shadow-sm transition-colors hover:bg-gray-50 hover:text-gray-900 dark:border-gray-700  dark:hover:bg-gray-800 dark:hover:text-white" href="#">
                        Learn More
                    </a>
                </button>
            </div>
        </div>
    </div>
</section>
<!-- <section class="relative bg-white lg:h-93 dark:bg-gray-900">
  <div class="max-w-screen-xl px-4 py-2 lg:px-8">
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 items-center">
      <div >
        <div class="max-w-lg">
          <h2 class="text-2xl font-semibold text-gray-900 sm:text-3xl">
            Heading Here
          </h2>
          <p class="mt-4 text-gray-100">
           Build connections and unlock opportunities with our innovative solutions. We are dedicated to helping you achieve your goals and reach new heights in your career.
          </p>
        </div>
      </div>

      <div>
        <img
          src="https://images.unsplash.com/photo-1731690415686-e68f78e2b5bd?q=80&w=2670&auto=format&fit=crop"
          class="rounded"
          data-aos="fade-left"
          data-aos-duration="1000"
        />
      </div>  
    </div>
  </div>
</section> -->
<section class="dark:bg-gray-900 py-16">
  <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-8">
    <div class="md:w-1/2 text-center md:text-left">
      <h2 class="text-4xl font-bold text-gray-100 mb-4" data-aos="fade-up">Enhanching<span class="text-blue-600"> Effectiveness</span></h2>
      <p class="text-gray-100 mb-8" data-aos="fade-up" data-aos-delay="200">Join our community and experience the benefits today!</p>
      <button  class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-full transition duration-300 ease-in-out">Connect with us!</button>
    </div>
    <div class="md:w-1/2">
      <img src="https://images.pexels.com/photos/323705/pexels-photo-323705.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Introducing Good Solution" class="rounded-lg shadow-lg">
    </div>
  </div>
<section class="bg-white dark:bg-gray-900 py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-semibold text-gray-100 text-center mb-12">Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center justify-center transition-transform transform hover:scale-105 hover:shadow-lg">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                    <i data-lucide="users" class="text-indigo-500 w-8 h-8"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">Permanent Staffing</h3>
                <p class="text-gray-600 text-center">End-to-end recruitment for long-term positions with our rigorous vetting process.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center justify-center transition-transform transform hover:scale-105 hover:shadow-lg">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                    <i data-lucide="clock" class="text-indigo-500 w-8 h-8"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">Contract Labour</h3>
                <p class="text-gray-600 text-center">Flexible workforce solutions tailored to your project requirements.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center justify-center transition-transform transform hover:scale-105 hover:shadow-lg">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                   <i data-lucide="briefcase" class="text-indigo-500 w-8 h-8"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">Payroll Services</h3>
                <p class="text-gray-600 text-center">Comprehensive payroll management with 100% compliance guarantee.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center justify-center transition-transform transform hover:scale-105 hover:shadow-lg">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                    <i data-lucide="search" class="text-indigo-500 w-8 h-8"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">Executive Research</h3>
                <p class="text-gray-600 text-center">C-suite and leadership hiring with discreet headhunting services.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center justify-center transition-transform transform hover:scale-105 hover:shadow-lg">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                    <i data-lucide="laptop" class="text-indigo-500 w-8 h-8"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">Tech Hiring</h3>
                <p class="text-gray-600 text-center">Specialized IT recruitment with technical assessment included.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center justify-center transition-transform transform hover:scale-105 hover:shadow-lg">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                    <i data-lucide="users" class="text-indigo-500 w-8 h-8"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">IT & Non-IT Hiring</h3>
                <p class="text-gray-600 text-center">Cross-industry recruitment solutions for all verticals.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center justify-center transition-transform transform hover:scale-105 hover:shadow-lg">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                    <i data-lucide="users" class="text-indigo-500 w-8 h-8"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">Bulk Hiring</h3>
                <p class="text-gray-600 text-center">Mass-recruitment drives with accelerated timelines.</p>
            </div>
        </div>
    </div>
</section>
<section class="dark:bg-gray-900 py-16">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-semibold text-gray-100 text-center mb-4">Testimonials</h2>
    <p class="text-gray-100 text-center mb-12">People love what we do and we want to let you know</p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-white rounded-lg shadow-md p-6 transition-transform transform hover:scale-105 hover:shadow-lg">
        <p class="text-gray-700 italic mb-4">"Since implementing Lando our business has seen significant growth."</p>
        <div class="flex items-center mb-4">
          <span class="text-blue-500 mr-1">★★★★★</span>
        </div>
        <p class="text-gray-800 font-semibold">Jack Sibire</p>
        <p class="text-gray-600 text-sm">Lead Manager, Growio</p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6 transition-transform transform hover:scale-105 hover:shadow-lg">
        <p class="text-gray-700 italic mb-4">"I recommend Lando to any business looking for improvement."</p>
        <div class="flex items-center mb-4">
          <span class="text-blue-500 mr-1">★★★★★</span>
        </div>
        <p class="text-gray-800 font-semibold">Adele Mouse</p>
        <p class="text-gray-600 text-sm">Product Manager, Mousio</p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6 transition-transform transform hover:scale-105 hover:shadow-lg">
        <p class="text-gray-700 italic mb-4">"I can't imagine running our company without it."</p>
        <div class="flex items-center mb-4">
          <span class="text-blue-500 mr-1">★★★★★</span>
        </div>
        <p class="text-gray-800 font-semibold">Ben Clock</p>
        <p class="text-gray-600 text-sm">CTO, Clockwork</p>
      </div>
    </div>
  </div>
</section>

<section class="bg-white dark:bg-gray-900 py-16">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-semibold text-gray-100 text-center mb-12">Contact Us</h2>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
      <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Get In Touch</h3>
        <div class="mb-4">
          <i data-lucide="map-pin" class="text-gray-600 w-5 h-5 inline-block mr-2"></i>
          <span class="text-gray-700">Mumbai, India</span>
        </div>
        <div class="mb-4">
          <i data-lucide="mail" class="text-gray-600 w-5 h-5 inline-block mr-2"></i>
          <span class="text-gray-700">nitaidata@email.com</span>
        </div>
        <div>
          <i data-lucide="phone" class="text-gray-600 w-5 h-5 inline-block mr-2"></i>
          <span class="text-gray-700">+91 9321628232</span>
        </div>
        <div class="mt-6">
         <iframe class="rounded-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241316.70220924992!2d72.71378715337056!3d19.0824819081059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1747121771037!5m2!1sen!2sin" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          
        </div>
      </div>

      <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Start a new journey with us!</h3>
       <p>
        Join our team and be part of a dynamic and innovative environment. We are always looking for talented individuals who are passionate about making a difference. If you are interested in joining us, please send your resume to 
         
      </p>
          <p>
            We are excited to hear from you and look forward to the opportunity to work together.
      </p>

       <br>
       <p>
          Enroll in our newsletter to stay updated with the latest news and opportunities. We value your privacy and will never share your information with third parties.
       </p>
      </div>
    </div>
  </div>
</section>
<div class="space-y-4 dark:bg-gray-900 py-16">
  <details
    class="group border-s-4 border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800 [&_summary::-webkit-details-marker]:hidden"
    open
  >
    <summary class="flex items-center justify-between gap-1.5 text-gray-900 dark:text-white">
      <h2 class="text-lg font-medium">What do we do?</h2>

      <svg
        class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180"
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
      >
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
      </svg>
    </summary>

    <p class="pt-4 text-gray-900 dark:text-white">
      We provide a range of services including permanent staffing, contract labour, payroll services, executive research, tech hiring, IT & non-IT hiring, and bulk hiring. Our goal is to connect talent with opportunity and help businesses thrive.
    </p>
  </details>

  <details
    class="group border-s-4 border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800 [&_summary::-webkit-details-marker]:hidden"
  >
    <summary class="flex items-center justify-between gap-1.5 text-gray-900 dark:text-white">
      <h2 class="text-lg font-medium">Why Us?</h2>

      <svg
        class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180"
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
      >
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
      </svg>
    </summary>

    <p class="pt-4 text-gray-900 dark:text-white">
     Choosing us means choosing a partner who is dedicated to your success. We have a proven track record of delivering results and our team of experts is always ready to assist you. Our commitment to quality and customer satisfaction sets us apart from the competition.
    </p>
  </details>

  <details
    class="group border-s-4 border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800 [&_summary::-webkit-details-marker]:hidden"
  >
    <summary class="flex items-center justify-between gap-1.5 text-gray-900 dark:text-white">
      <h2 class="text-lg font-medium">What to expect from us?</h2>

      <svg
        class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180"
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
      >
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
      </svg>
    </summary>

    <p class="pt-4 text-gray-900 dark:text-white">
     Our clients expect to help them find the right fit for your career and business needs. Contact us today to discover your next opportunity!
    </p>
  </details>
</div>

<footer class="bg-white dark:bg-gray-900">
  <div class="mx-auto max-w-screen-xl px-4 pt-16 pb-8 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-md">
      <strong class="block text-center text-xl font-bold text-gray-900 sm:text-3xl dark:text-white">
        Want us to email you with the latest blockbuster news?
      </strong>

      <form class="mt-6"  method="POST" action="{{ route('subscribe.store') }}">
        @csrf
        <div class="relative max-w-lg">
          <label class="sr-only" for="email"> Email </label>

          <input
            class="w-full rounded-full border-gray-200 bg-gray-100 p-4 pe-32 text-sm font-medium dark:border-gray-700 dark:bg-gray-800 dark:text-white"
            id="email"
            name="email"
            type="email"
            placeholder="john@doe.com"
          />

          <button
            class="absolute end-1 top-1/2 -translate-y-1/2 rounded-full bg-blue-600 px-5 py-3 text-sm font-medium text-white transition hover:bg-blue-700"
          >
            Subscribe
          </button>
        </div>
        @if ($errors->any())
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
@endif
        @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      </form>
    </div>

    <div class="mt-16 grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-32">
      <div class="mx-auto max-w-sm lg:max-w-none">
        <p class="mt-4 text-center text-gray-500 lg:text-left lg:text-lg dark:text-gray-400">
         Innovating solutions for a better tomorrow. We are dedicated to providing the best possible service and support, and we are always looking for ways to improve and innovate.
        </p>

        <div class="mt-6 flex justify-center gap-4 lg:justify-start">
          <a
            class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
            href="#"
            target="_blank"
            rel="noreferrer"
          >
            <span class="sr-only"> Facebook </span>

            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path
                fill-rule="evenodd"
                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                clip-rule="evenodd"
              />
            </svg>
          </a>

          <a
            class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
            href="#"
            target="_blank"
            rel="noreferrer"
          >
            <span class="sr-only"> Instagram </span>

            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path
                fill-rule="evenodd"
                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                clip-rule="evenodd"
              />
            </svg>
          </a>

          <a
            class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
            href="#"
            target="_blank"
            rel="noreferrer"
          >
            <span class="sr-only"> Twitter </span>

            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path
                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
              />
            </svg>
          </a>

          <a
            class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
            href="#"
            target="_blank"
            rel="noreferrer"
          >
            <span class="sr-only"> GitHub </span>

            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path
                fill-rule="evenodd"
                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                clip-rule="evenodd"
              />
            </svg>
          </a>

          <a
            class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
            href="#"
            target="_blank"
            rel="noreferrer"
          >
            <span class="sr-only"> Dribbble </span>

            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path
                fill-rule="evenodd"
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                clip-rule="evenodd"
              />
            </svg>
          </a>
        </div>
      </div>

      <div class="grid grid-cols-1 gap-8 text-center lg:grid-cols-3 lg:text-left">
        <div>
          <strong class="font-medium text-gray-900 dark:text-white"> Services </strong>

          <ul class="mt-6 space-y-1">
            <li>
              <a
                class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
                href="#"
              >
                Permanent Staffing
              </a>
            </li>

            <li>
              <a
                class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
                href="#"
              >
Contract Labour
              </a>
            </li>

            <li>
              <a
                class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
                href="#"
              >
Payroll Services
              </a>
            </li>

            <li>
              <a
                class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
                href="#"
              >
IT & Non-IT Hiring
              </a>
            </li>
          </ul>
        </div>

        <div>
          <strong class="font-medium text-gray-900 dark:text-white"> About </strong>

          <ul class="mt-6 space-y-1">




            <li>
              <a
                class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
                href="{{url('services')}}"
              >
                Detailed services
              </a>
            </li>

          </ul>
        </div>

        <div>
          <strong class="font-medium text-gray-900 dark:text-white"> Support </strong>

          <ul class="mt-6 space-y-1">
            <li>
              <a
                class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
                href="#"
              >
                FAQs
              </a>
            </li>

         
          </ul>
        </div>
      </div>
    </div>

<script src="https://unpkg.com/lucide-react@latest/umd/lucide-react.min.js"></script>
<script>
  lucide.createIcons();
</script>

    <div class="mt-16 border-t border-gray-100 pt-8 dark:border-gray-800">
      <p class="text-center text-xs/relaxed text-gray-500 dark:text-gray-400">
        © Company 2022. All rights reserved.

        <br />

        Created with
        <a
          href="#"
          class="text-gray-700 underline transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
          >Laravel</a
        >
        and
        <a
          href="#"
          class="text-gray-700 underline transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
          >Laravel Livewire</a
        >.
      </p>
    </div>
  </div>
</footer>
</body>
</html> 