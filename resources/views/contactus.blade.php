    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us - NITAI Solutions Pvt. Ltd.</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Inter', sans-serif;
            }
        </style>
    </head>

    <body class="bg-white dark:bg-gray-900 text-gray-100 flex justify-center items-center min-h-screen p-4">
        
        <div class="bg-gray-800 rounded-lg shadow-md p-8 w-full max-w-md">
            <h1 class="text-2xl font-semibold text-purple-400 text-center mb-6">Contact Us</h1>
            <form action="/contact" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-gray-300 text-sm font-bold mb-2">Name:</label>
                    <input type="text" id="name" name="name" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-300 leading-tight focus:outline-none focus:shadow-outline bg-gray-700">
                </div>
                <div>
                    <label for="email" class="block text-gray-300 text-sm font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-300 leading-tight focus:outline-none focus:shadow-outline bg-gray-700">
                </div>
                <div>
                    <label for="number" class="block text-gray-300 text-sm font-bold mb-2">Phone Number:</label>
                    <input type="tel" id="number" name="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-300 leading-tight focus:outline-none focus:shadow-outline bg-gray-700">
                </div>
                <div>
                    <label for="location" class="block text-gray-300 text-sm font-bold mb-2">Location:</label>
                    <input type="text" id="location" name="location" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-300 leading-tight focus:outline-none focus:shadow-outline bg-gray-700">
                </div>
                <div>
                    <label for="purpose" class="block text-gray-300 text-sm font-bold mb-2">Purpose:</label>
                    <textarea id="purpose" name="purpose" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-300 leading-tight focus:outline-none focus:shadow-outline bg-gray-700"></textarea>
                </div>
                <button type="submit"  class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">
                    Submit
                </button>
            <a href="{{ url('/') }}" class="block text-center mt-4 text-purple-400 hover:underline">
                Go Back to Welcome Page
            </a>
            @if(session('success'))
        <div class="bg-green-500 text-white p-3 rounded-lg mb-4 text-center">
            {{ session('success') }}
        </div>
    @endif
            </form>
        </div>
    </body>
    </html>
