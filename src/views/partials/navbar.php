<header class="sticky top-0 z-50 bg-white shadow transition-all">
    <nav class="container mx-auto flex items-center justify-between py-3 px-4 md:px-8">
        <div class="flex items-center space-x-3">
            <img src="https://img.icons8.com/color/48/000000/computer.png" alt="Logo" class="h-10 w-10">
            <span class="text-2xl font-extrabold text-blue-700 tracking-wide">SEME TVC ICT Portal</span>
        </div>
        <ul class="hidden md:flex items-center space-x-8 font-medium">
            <li><a href="#" class="hover:text-blue-600 transition">Home</a></li>
            <li><a href="#about" class="hover:text-blue-600 transition">About</a></li>
            <li><a href="#courses" class="hover:text-blue-600 transition">Courses</a></li>
            <li><a href="#resources" class="hover:text-blue-600 transition">Resources</a></li>
            <li><a href="#contact" class="hover:text-blue-600 transition">Contact</a></li>
        </ul>
        <a href="#"
            class="ml-4 px-5 py-2 bg-blue-600 text-white rounded-full font-semibold shadow hover:bg-blue-700 transition hidden md:inline-block">Login</a>
        <!-- Mobile menu button -->
        <div class="md:hidden flex items-center">
            <button id="menuBtn" class="focus:outline-none">
                <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </nav>
    <!-- Mobile menu -->
    <div id="mobileMenu" class="md:hidden bg-white shadow px-4 py-4 hidden">
        <ul class="space-y-3 font-medium">
            <li><a href="#" class="block hover:text-blue-600">Home</a></li>
            <li><a href="#about" class="block hover:text-blue-600">About</a></li>
            <li><a href="#courses" class="block hover:text-blue-600">Courses</a></li>
            <li><a href="#resources" class="block hover:text-blue-600">Resources</a></li>
            <li><a href="#contact" class="block hover:text-blue-600">Contact</a></li>
            <li><a href="#"
                    class="block mt-2 px-5 py-2 bg-blue-600 text-white rounded-full font-semibold shadow hover:bg-blue-700 transition">Login</a>
            </li>
        </ul>
    </div>
</header>