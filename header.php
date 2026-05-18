<!-- Header Section -->
<header class="bg-white shadow-sm py-4 px-6 md:px-12 rounded-b-lg fixed top-0 w-full z-50">
    <nav class="container mx-auto flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <!-- Drone Icon SVG -->
            <img src="./images/ikon.png" alt="ikon" class="h-8 w-8">
            <a href="index.php#" class="text-2xl font-bold text-gray-900 rounded-md">Spray Drone</a>
        </div>
        <div class="hidden md:flex space-x-8">
            <a href="index.php#features" class="text-gray-600 hover:text-indigo-600 transition-colors duration-200 rounded-md">Features</a>
            <a href="index.php#services" class="text-gray-600 hover:text-indigo-600 transition-colors duration-200 rounded-md">Services</a>
            <a href="drones.php" class="text-gray-600 hover:text-indigo-600 transition-colors duration-200 rounded-md">Our Drones</a>
            <a href="index.php#contact" class="text-gray-600 hover:text-indigo-600 transition-colors duration-200 rounded-md">Contact</a>
        </div>
        <button id="menu-btn" class="md:hidden p-2 rounded-md text-gray-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </nav>

    <!-- Mobile Menu Content -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 mt-4 pb-4">
        <a href="index.php#features" class="block py-3 px-2 text-gray-600 hover:text-indigo-600 transition-colors">Features</a>
        <a href="index.php#services" class="block py-3 px-2 text-gray-600 hover:text-indigo-600 transition-colors">Services</a>
        <a href="drones.php" class="block py-3 px-2 text-gray-600 hover:text-indigo-600 transition-colors">Our Drones</a>
        <a href="index.php#contact" class="block py-3 px-2 text-gray-600 hover:text-indigo-600 transition-colors">Contact</a>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btn = document.getElementById('menu-btn');
            const menu = document.getElementById('mobile-menu');

            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        });
    </script>
</header>
