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

    <!-- Drones Gallery Section -->
    <section id="drones" class="py-16 px-6 md:px-12 bg-white rounded-lg mt-8 mx-4 md:mx-auto max-w-6xl shadow-md">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Fleet of Drones</h2>
            <p class="text-lg text-gray-600 mb-12">Explore the advanced technology and capabilities of our diverse drone fleet, ready for any mission.</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Drone 1 -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <img src="https://placehold.co/600x400/E0E7FF/4F46E5?text=Drone+Model+A" alt="Drone Model A" class="w-full h-48 object-cover rounded-lg mb-4 shadow-md">
                    <h3 class="text-xl font-semibold mb-2 text-indigo-600">SkyEye Pro</h3>
                    <p class="text-gray-600 text-sm">Ideal for high-resolution aerial photography and cinematic videography. Features 8K camera and 45-min flight time.</p>
                </div>

                <!-- Drone 2 -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <img src="https://placehold.co/600x400/E0E7FF/4F46E5?text=Drone+Model+B" alt="Drone Model B" class="w-full h-48 object-cover rounded-lg mb-4 shadow-md">
                    <h3 class="text-xl font-semibold mb-2 text-indigo-600">AgriScan X1</h3>
                    <p class="text-gray-600 text-sm">Designed for precision agriculture with multi-spectral sensors for detailed crop analysis and health monitoring.</p>
                </div>

                <!-- Drone 3 -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <img src="https://placehold.co/600x400/E0E7FF/4F46E5?text=Drone+Model+C" alt="Drone Model C" class="w-full h-48 object-cover rounded-lg mb-4 shadow-md">
                    <h3 class="text-xl font-semibold mb-2 text-indigo-600">InspectMaster 3000</h3>
                    <p class="text-gray-600 text-sm">Robust and stable drone for industrial inspections, equipped with thermal and zoom capabilities.</p>
                </div>

                <!-- Drone 4 -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <img src="https://placehold.co/600x400/E0E7FF/4F46E5?text=Drone+Model+D" alt="Drone Model D" class="w-full h-48 object-cover rounded-lg mb-4 shadow-md">
                    <h3 class="text-xl font-semibold mb-2 text-indigo-600">TopoMapper 5G</h3>
                    <p class="text-gray-600 text-sm">Advanced mapping and surveying drone, capable of creating highly accurate 3D models and topographic maps.</p>
                </div>

                <!-- Drone 5 -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <img src="https://placehold.co/600x400/E0E7FF/4F46E5?text=Drone+Model+E" alt="Drone Model E" class="w-full h-48 object-cover rounded-lg mb-4 shadow-md">
                    <h3 class="text-xl font-semibold mb-2 text-indigo-600">EcoGuard</h3>
                    <p class="text-gray-600 text-sm">Specialized for environmental monitoring, with sensors for air quality, water analysis, and wildlife tracking.</p>
                </div>

                <!-- Drone 6 -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <img src="https://placehold.co/600x400/E0E7FF/4F46E5?text=Drone+Model+F" alt="Drone Model F" class="w-full h-48 object-cover rounded-lg mb-4 shadow-md">
                    <h3 class="text-xl font-semibold mb-2 text-indigo-600">RescueBot</h3>
                    <p class="text-gray-600 text-sm">Rapid deployment drone for emergency response, providing live video feeds and thermal imaging for critical situations.</p>
                </div>
            </div>
        </div>
    </section>


    <?php include 'footer.php'; ?>

</body>
</html>
