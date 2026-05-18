<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SprayDrone</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Google Fonts - Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="antialiased text-gray-800 pt-20">

    <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white py-20 px-6 md:px-12 text-center rounded-lg mt-8 mx-4 md:mx-auto max-w-6xl">
        <div class="container mx-auto">
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-4 drop-shadow-lg">
                Elevate Your Perspective with SkyHigh Drones
            </h1>
            <p class="text-lg md:text-xl mb-8 opacity-90">
                Cutting-edge drone technology for aerial photography, surveying, inspections, and more.
            </p>
            <a href="#contact" class="inline-block bg-white text-indigo-700 hover:bg-indigo-100 font-bold py-3 px-8 rounded-full shadow-lg transition-all duration-300 transform hover:scale-105">
                Get a Quote
            </a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 px-6 md:px-12 bg-white rounded-lg mt-8 mx-4 md:mx-auto max-w-6xl shadow-md">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12">Why Choose SkyHigh Drones?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="bg-gray-50 p-8 rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="flex justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Advanced Technology</h3>
                    <p class="text-gray-600">Equipped with the latest sensors and AI for superior performance and data accuracy.</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="flex justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Reliable & Safe</h3>
                    <p class="text-gray-600">Our drones undergo rigorous testing to ensure maximum safety and operational reliability.</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="flex justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c1.657 0 3 .895 3 2s-1.343 2-3 2-3 .895-3 2 1.343 2 3 2m0-8c1.11 0 2.08.402 2.592 1L12 20l-4.592-8.592A2 2 0 0112 8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Expert Team</h3>
                    <p class="text-gray-600">Certified pilots and experienced technicians dedicated to your project's success.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 px-6 md:px-12 bg-gray-100 rounded-lg mt-8 mx-4 md:mx-auto max-w-6xl shadow-md">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-indigo-600">Aerial Photography & Videography</h3>
                    <p class="text-gray-600">Stunning high-resolution images and cinematic videos for real estate, events, and marketing.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-indigo-600">Precision Agriculture</h3>
                    <p class="text-gray-600">Crop monitoring, health analysis, and yield optimization with multi-spectral imaging.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-indigo-600">Infrastructure Inspection</h3>
                    <p class="text-gray-600">Safe and efficient inspection of bridges, power lines, wind turbines, and more.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-indigo-600">Mapping & Surveying</h3>
                    <p class="text-gray-600">Accurate topographic maps, 3D models, and volumetric calculations for construction and mining.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-indigo-600">Environmental Monitoring</h3>
                    <p class="text-gray-600">Monitoring wildlife, forest health, and environmental changes with advanced sensors.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-indigo-600">Emergency Response Support</h3>
                    <p class="text-gray-600">Providing crucial aerial intelligence for search and rescue, disaster assessment, and fire fighting.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action / Contact Section -->
    <section id="contact" class="bg-gradient-to-r from-purple-600 to-indigo-700 text-white py-20 px-6 md:px-12 text-center rounded-lg mt-8 mx-4 md:mx-auto max-w-6xl">
        <div class="container mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 drop-shadow-lg">Ready to Elevate Your Project?</h2>
            <p class="text-lg md:text-xl mb-10 opacity-90">
                Contact us today for a free consultation and discover how drone technology can benefit you.
            </p>
            <a href="mailto:info@skyhighdrones.com" class="inline-block bg-white text-purple-700 hover:bg-purple-100 font-bold py-3 px-8 rounded-full shadow-lg transition-all duration-300 transform hover:scale-105">
                Email Us
            </a>
            <span class="mx-4 text-white opacity-80">or</span>
            <a href="tel:+1234567890" class="inline-block bg-white text-purple-700 hover:bg-purple-100 font-bold py-3 px-8 rounded-full shadow-lg transition-all duration-300 transform hover:scale-105">
                Call Us
            </a>
        </div>
    </section>

    <?php include 'footer.php'; ?>

</body>
</html>
