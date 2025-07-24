<?php
// This is the home view template for the home page.
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SEME TVC ICT PORTAL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <!-- Alpine.js for carousel -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Loader styles */
        #loader {
            position: fixed;
            z-index: 9999;
            inset: 0;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.5s;
        }

        #loader.hidden {
            opacity: 0;
            pointer-events: none;
        }

        /* Hide scrollbars for carousel */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* Animations (using Tailwind's animate utilities and custom keyframes) */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-40px);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(40px);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 1s both;
        }

        .animate-fadeInLeft {
            animation: fadeInLeft 1s both;
        }

        .animate-fadeInRight {
            animation: fadeInRight 1s both;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- Loader -->
    <div id="loader">
        <div class="flex flex-col items-center">
            <svg class="animate-spin h-12 w-12 text-blue-600 mb-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
            </svg>
            <span class="text-blue-700 font-semibold text-lg animate__animated animate__fadeIn">Loading SEME TVC ICT
                Portal...</span>
        </div>
    </div>

    <?php include __DIR__ . '/partials/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-blue-600 via-blue-500 to-purple-600 text-white overflow-hidden">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between py-20 px-4 md:px-8">
            <div class="md:w-1/2 animate-fadeInUp">
                <h1 class="text-4xl md:text-5xl font-extrabold mb-4 leading-tight drop-shadow-lg">
                    Empowering ICT Excellence at SEME TVC
                </h1>
                <p class="text-lg md:text-xl mb-8 font-medium drop-shadow">
                    Your gateway to digital learning and resources.
                </p>
                <div class="flex space-x-4">
                    <a href="register.php"
                        class="px-7 py-3 bg-white text-blue-700 font-semibold rounded-full shadow-lg hover:bg-blue-100 hover:scale-105 transition transform">Get
                        Started</a>
                    <a href="#about"
                        class="px-7 py-3 bg-blue-700 border border-white text-white font-semibold rounded-full shadow-lg hover:bg-blue-800 hover:scale-105 transition transform">Learn
                        More</a>
                </div>
            </div>
            <div class="md:w-1/2 mt-12 md:mt-0 flex justify-center animate-fadeInRight">
                <img src="https://img.freepik.com/free-vector/online-world-concept-illustration_114360-1435.jpg?w=600"
                    alt="Hero Illustration" class="w-full max-w-md rounded-2xl shadow-2xl border-4 border-white">
            </div>
        </div>
        <!-- Decorative SVG -->
        <svg class="absolute bottom-0 left-0 w-full" viewBox="0 0 1440 100" fill="none">
            <path fill="#f9fafb" fill-opacity="1" d="M0,64L1440,0L1440,320L0,320Z"></path>
        </svg>
    </section>

    <!-- About Section -->
    <section id="about" class="container mx-auto py-20 px-4 md:px-8 flex flex-col md:flex-row items-center gap-12">
        <div class="md:w-1/2 flex justify-center animate-fadeInLeft">
            <img src="https://img.freepik.com/free-vector/people-working-office_23-2148814710.jpg?w=600" alt="About ICT"
                class="w-full max-w-sm rounded-xl shadow-lg">
        </div>
        <div class="md:w-1/2 animate-fadeInUp">
            <h2 class="text-3xl md:text-4xl font-bold text-blue-700 mb-4">About the ICT Department</h2>
            <p class="text-lg text-gray-700 leading-relaxed">
                The SEME TVC ICT Department is dedicated to fostering digital literacy and technical excellence among
                students and staff. Our mission is to provide cutting-edge resources, hands-on training, and unwavering
                support, empowering our community to thrive in a rapidly evolving digital world. Join us as we shape the
                future of technology at SEME TVC!
            </p>
        </div>
    </section>

    <!-- Courses Section -->
    <section id="courses" class="bg-white py-20">
        <div class="container mx-auto px-4 md:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-700 mb-12">Our Courses</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Course 1 -->
                <div
                    class="bg-blue-50 rounded-xl shadow hover:shadow-xl transform hover:scale-105 transition p-6 flex flex-col items-center text-center animate-fadeInUp">
                    <img src="https://img.icons8.com/color/96/000000/source-code.png" alt="Web Development"
                        class="h-16 mb-4">
                    <h3 class="text-xl font-semibold text-blue-800 mb-2">Web Development</h3>
                    <p class="text-gray-600">Learn to build modern, responsive websites and web apps using HTML, CSS,
                        JavaScript, and more.</p>
                </div>
                <!-- Course 2 -->
                <div class="bg-blue-50 rounded-xl shadow hover:shadow-xl transform hover:scale-105 transition p-6 flex flex-col items-center text-center animate-fadeInUp"
                    style="animation-delay: 0.1s;">
                    <img src="https://img.icons8.com/color/96/000000/network-cable.png" alt="Networking"
                        class="h-16 mb-4">
                    <h3 class="text-xl font-semibold text-blue-800 mb-2">Networking</h3>
                    <p class="text-gray-600">Master the fundamentals of computer networks, protocols, and network
                        security.</p>
                </div>
                <!-- Course 3 -->
                <div class="bg-blue-50 rounded-xl shadow hover:shadow-xl transform hover:scale-105 transition p-6 flex flex-col items-center text-center animate-fadeInUp"
                    style="animation-delay: 0.2s;">
                    <img src="https://img.icons8.com/color/96/000000/lock--v1.png" alt="Cybersecurity"
                        class="h-16 mb-4">
                    <h3 class="text-xl font-semibold text-blue-800 mb-2">Cybersecurity</h3>
                    <p class="text-gray-600">Protect systems and data with hands-on training in cybersecurity
                        principles and practices.</p>
                </div>
                <!-- Course 4 -->
                <div class="bg-blue-50 rounded-xl shadow hover:shadow-xl transform hover:scale-105 transition p-6 flex flex-col items-center text-center animate-fadeInUp"
                    style="animation-delay: 0.3s;">
                    <img src="https://img.icons8.com/color/96/000000/artificial-intelligence.png" alt="Data Science"
                        class="h-16 mb-4">
                    <h3 class="text-xl font-semibold text-blue-800 mb-2">Data Science</h3>
                    <p class="text-gray-600">Explore data analysis, visualization, and machine learning with real-world
                        projects.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section id="resources" class="container mx-auto py-20 px-4 md:px-8">
        <h2 class="text-3xl md:text-4xl font-bold text-blue-700 mb-8 text-center">Resources</h2>
        <div class="flex flex-col md:flex-row justify-center items-center gap-6">
            <a href="#"
                class="flex items-center px-6 py-3 bg-blue-600 text-white rounded-full font-semibold shadow hover:bg-blue-700 transition">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 20h9"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m0 0H3"></path>
                </svg>
                E-Library
            </a>
            <a href="#"
                class="flex items-center px-6 py-3 bg-blue-100 text-blue-700 rounded-full font-semibold shadow hover:bg-blue-200 transition">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                    </path>
                </svg>
                Timetables
            </a>
            <a href="#"
                class="flex items-center px-6 py-3 bg-blue-100 text-blue-700 rounded-full font-semibold shadow hover:bg-blue-200 transition">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18.364 5.636l-1.414 1.414A9 9 0 105.636 18.364l1.414-1.414"></path>
                </svg>
                ICT Support
            </a>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-blue-50 py-16" id="testimonials"></section>
    </section>
    <div class="container mx-auto px-4 md:px-8">
        <h2 class="text-2xl md:text-3xl font-bold text-blue-700 mb-8 text-center">What Our Students Say</h2>
        <div x-data="{active: 0, testimonials: [
                {name: 'Amina Yusuf', photo: 'https://randomuser.me/api/portraits/women/44.jpg', feedback: 'The ICT Portal has made learning so much easier and fun! The resources are always up-to-date.'},
                {name: 'John Okoro', photo: 'https://randomuser.me/api/portraits/men/32.jpg', feedback: 'I love the support from the ICT team. They are always ready to help with any tech issues.'}
            ]}" class="relative max-w-xl mx-auto"></div>
        <!-- Carousel -->
        <div class="flex transition-all duration-500" :style="'transform: translateX(-' + (active * 100) + '%)'">
            <template x-for="(t, i) in testimonials" :key="i">
                <div class="w-full flex-shrink-0 px-2">
                    <div
                        class="bg-white rounded-lg shadow border p-6 flex flex-col items-center text-center animate-fadeInUp">
                        <img :src="t.photo" alt="" class="w-16 h-16 rounded-full mb-3 border-2 border-blue-200 shadow">
                        <p class="text-gray-700 mb-3 text-base italic">&ldquo;<span x-text="t.feedback"></span>&rdquo;
                        </p>
                        <span class="font-semibold text-blue-700 text-sm" x-text="t.name"></span>
                    </div>
                </div>
            </template>
        </div>
        <!-- Controls -->
        <div class="flex justify-center mt-4 space-x-2">
            <template x-for="(t, i) in testimonials" :key="i">
                <button @click="active = i" :class="{'bg-blue-600': active === i, 'bg-blue-200': active !== i}"
                    class="w-2.5 h-2.5 rounded-full transition"></button>
            </template>
        </div>
    </div>
    </div>
    </section>

    <?php include __DIR__ . '/partials/footer.php'; ?>

    <script>
        // Hide loader after page load
        window.addEventListener('load', function() {
            document.getElementById('loader').classList.add('hidden');
        });

        // Mobile menu toggle
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>