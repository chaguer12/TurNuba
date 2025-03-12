<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Turnuba - Easy Haircut Appointments</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">
    
    <!-- Hero Section -->
    <section class="bg-blue-600 text-white text-center py-20 px-6">
        <h1 class="text-4xl font-bold">Book Your Haircut Instantly</h1>
        <p class="mt-4 text-lg">Just scan the QR code at your favorite salon and get your appointment in seconds.</p>
        <button class="mt-6 bg-white text-blue-600 px-6 py-3 rounded-full font-semibold shadow-md hover:bg-gray-200">
            Learn More
        </button>
    </section>
    
    <!-- How It Works -->
<section class="py-20 px-6 text-center">
    <h2 class="text-3xl font-bold text-gray-800">How It Works</h2>
    <div class="mt-8 flex flex-col md:flex-row gap-8 justify-center">
        <div class="bg-white p-6 rounded-lg shadow-md w-80">
            <img src="{{ Vite::asset('resources/images/scan_qr.jpg') }}" 
                 alt="Scan QR" 
                 class="mx-auto w-full h-48 object-cover rounded-lg">
            <h3 class="mt-4 text-xl font-semibold">Scan the QR Code</h3>
            <p class="mt-2 text-gray-600">Visit a salon and scan the unique QR code.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md w-80">
            <img src="{{ Vite::asset('resources/images/select_barber.jpg') }}" 
                 alt="Select Barber" 
                 class="mx-auto w-full h-48 object-cover rounded-lg">
            <h3 class="mt-4 text-xl font-semibold">Choose Your Barber</h3>
            <p class="mt-2 text-gray-600">Pick your preferred barber and time slot.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md w-80">
            <img src="{{ Vite::asset('resources/images/relax.jpg') }}" 
                 alt="Confirm Booking" 
                 class="mx-auto w-full h-48 object-cover rounded-lg">
            <h3 class="mt-4 text-xl font-semibold">Confirm & Relax</h3>
            <p class="mt-2 text-gray-600">Get instant confirmation and show up on time!</p>
        </div>
    </div>
</section>

    
    <!-- For Barbers & Admins -->
    <section class="bg-gray-800 text-white text-center py-20 px-6">
        <h2 class="text-3xl font-bold">For Barbers & Salon Owners</h2>
        <p class="mt-4 text-lg">Manage appointments, reduce wait times, and grow your business effortlessly.</p>
        <button class="mt-6 bg-blue-500 px-6 py-3 rounded-full font-semibold shadow-md hover:bg-blue-700">
            Get Started
        </button>
    </section>
    
    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 text-center py-6">
        <p>&copy; 2025 Turnuba. All Rights Reserved.</p>
    </footer>
    
</body>
</html>
