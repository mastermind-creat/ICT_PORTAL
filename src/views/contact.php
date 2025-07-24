<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Contact Seme TVC ICT Portal for inquiries, support, or feedback. Reach out via our form, phone, or social media.">
    <meta name="keywords" content="Seme TVC, ICT Portal, Contact Us, Technical College, Kisumu, Kenya">
    <meta name="author" content="Seme TVC ICT Department">
    <title>Contact Us | Seme TVC ICT Portal</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/favicon.ico">
    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }

        /* Custom focus styles for accessibility */
        input:focus,
        textarea:focus,
        button:focus {
            outline: 2px solid #2563eb;
            outline-offset: 2px;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-900 antialiased">

    <!-- Header/Navbar -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <?php include __DIR__ . '/partials/navbar.php'; ?>
    </header>

    <!-- Hero Section -->
    <section
        class="w-full bg-gradient-to-br from-blue-700 via-blue-600 to-purple-700 py-20 px-4 text-white text-center">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">Contact Seme TVC ICT Portal</h1>
            <p class="text-base md:text-lg font-medium max-w-xl mx-auto">We're here to assist with any questions or
                support you need. Reach out today!</p>
        </div>
    </section>

    <!-- Contact Form & Info -->
    <section class="container mx-auto py-16 px-4 md:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">
            <!-- Contact Form -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-lg p-6 md:p-8">
                    <h2 class="text-2xl md:text-3xl font-semibold text-blue-800 mb-6">Send Us a Message</h2>
                    <form id="contact-form" class="space-y-6" autocomplete="off" aria-label="Contact Form">
                        <div>
                            <label for="fullname" class="block text-sm font-medium text-gray-700 mb-1">Full Name <span
                                    class="text-red-500">*</span></label>
                            <input id="fullname" name="fullname" type="text" required
                                class="w-full px-4 py-2.5 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:border-transparent transition placeholder-gray-400"
                                placeholder="Your Full Name" aria-required="true">
                            <p class="hidden text-red-600 text-sm mt-1" id="fullname-error">Please enter your full name.
                            </p>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address <span
                                    class="text-red-500">*</span></label>
                            <input id="email" name="email" type="email" required
                                class="w-full px-4 py-2.5 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:border-transparent transition placeholder-gray-400"
                                placeholder="you@example.com" aria-required="true">
                            <p class="hidden text-red-600 text-sm mt-1" id="email-error">Please enter a valid email
                                address.</p>
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                            <input id="subject" name="subject" type="text"
                                class="w-full px-4 py-2.5 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:border-transparent transition placeholder-gray-400"
                                placeholder="Subject of your message">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message <span
                                    class="text-red-500">*</span></label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-4 py-2.5 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:border-transparent transition placeholder-gray-400 resize-none"
                                placeholder="Your message..." aria-required="true"></textarea>
                            <p class="hidden text-red-600 text-sm mt-1" id="message-error">Please enter your message.
                            </p>
                        </div>
                        <div class="hidden text-green-600 text-sm" id="form-success">Message sent successfully!</div>
                        <button type="submit"
                            class="w-full py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-medium rounded-md shadow hover:from-blue-700 hover:to-purple-700 transition transform hover:scale-105 focus:ring-2 focus:ring-blue-600 focus:ring-offset-2">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
            <!-- Contact Info & Map -->
            <div class="lg:col-span-1 flex flex-col gap-8">
                <!-- Contact Info Card -->
                <div class="bg-blue-50 rounded-xl shadow p-6 flex-1 animate-fadeInRight">
                    <h3 class="text-xl font-semibold text-blue-800 mb-6">Contact Information</h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-blue-600 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H5a2 2 0 01-2-2V5zm0 8a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H5a2 2 0 01-2-2v-2zm8-8a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zm0 8a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                            <span class="text-gray-700">+234 800 000 0000</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-blue-600 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16 12H8m8 0a4 4 0 11-8 0 4 4 0 018 0zm2 4v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2" />
                            </svg>
                            <span class="text-gray-700">ict@semetvc.edu.ng</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-blue-600 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 12.414a2 2 0 00-2.828 0l-4.243 4.243A8 8 0 1117.657 16.657z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-gray-700">Seme TVC, ICT Department, Kisumu, Kenya</span>
                        </div>
                    </div>
                    <div class="mt-6">
                        <h4 class="font-semibold text-blue-800 mb-3">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="text-blue-600 hover:text-blue-800 transition transform hover:scale-110"
                                title="Facebook" aria-label="Follow us on Facebook">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M22.675 0h-21.35C.595 0 0 .592 0 1.326v21.348C0 23.408.595 24 1.325 24h11.495v-9.294H9.691v-3.622h3.129V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.918.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.406 24 24 23.408 24 22.674V1.326C24 .592 23.406 0 22.675 0" />
                                </svg>
                            </a>
                            <a href="#" class="text-blue-400 hover:text-blue-600 transition transform hover:scale-110"
                                title="Twitter" aria-label="Follow us on Twitter">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M24 4.557a9.93 9.93 0 0 1-2.828.775 4.932 4.932 0 0 0 2.165-2.724c-.951.564-2.005.974-3.127 1.195A4.916 4.916 0 0 0 16.616 3c-2.717 0-4.924 2.206-4.924 4.924 0 .386.045.763.127 1.124C7.728 8.797 4.1 6.87 1.671 3.149c-.423.722-.666 1.561-.666 2.475 0 1.708.87 3.216 2.188 4.099a4.904 4.904 0 0 1-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.936 4.936 0 0 1-2.224.084c.627 1.956 2.444 3.377 4.6 3.417A9.867 9.867 0 0 1 0 21.543a13.94 13.94 0 0 0 7.548 2.209c9.058 0 14.009-7.496 14.009-13.986 0-.21-.005-.423-.014-.634A10.012 10.012 0 0 0 24 4.557z" />
                                </svg>
                            </a>
                            <a href="#" class="text-pink-600 hover:text-pink-800 transition transform hover:scale-110"
                                title="Instagram" aria-label="Follow us on Instagram">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.334 3.608 1.308.974.974 1.246 2.241 1.308 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.334 2.633-1.308 3.608-.974.974-2.241 1.246-3.608 1.308-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.334-3.608-1.308-.974-.974-1.246-2.241-1.308-3.608C2.175 15.647 2.163 15.267 2.163 12s.012-3.584.07-4.85c.062-1.366.334-2.633 1.308-3.608.974-.974 2.241-1.246 3.608-1.308C8.416 2.175 8.796 2.163 12 2.163zm0-2.163C8.741 0 8.332.013 7.052.072 5.771.131 4.659.425 3.678 1.406c-.98.98-1.274 2.092-1.333 3.374C2.013 5.668 2 6.077 2 12c0 5.923.013 6.332.072 7.612.059 1.282.353 2.394 1.333 3.374.98.98 2.092 1.274 3.374 1.333C8.332 23.987 8.741 24 12 24s3.668-.013 4.948-.072c1.282-.059 2.394-.353 3.374-1.333.98-.98 1.274-2.092 1.333-3.374.059-1.28.072-1.689.072-7.612 0-5.923-.013-6.332-.072-7.612-.059-1.282-.353-2.394-1.333-3.374-.98-.98-2.092-1.274-3.374-1.333C15.668.013 15.259 0 12 0z" />
                                    <circle cx="12" cy="12" r="3.5" />
                                </svg>
                            </a>
                            <a href="#" class="text-blue-700 hover:text-blue-900 transition transform hover:scale-110"
                                title="LinkedIn" aria-label="Follow us on LinkedIn">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.268c-.966 0-1.75-.784-1.75-1.75s.784-1.75 1.75-1.75 1.75.784 1.75 1.75-.784 1.75-1.75 1.75zm13.5 11.268h-3v-5.604c0-1.337-.025-3.063-1.868-3.063-1.868 0-2.154 1.459-2.154 2.967v5.7h-3v-10h2.881v1.367h.041c.401-.761 1.379-1.563 2.841-1.563 3.039 0 3.6 2.001 3.6 4.601v5.595z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Google Map Card -->
                <div class="bg-white rounded-xl shadow overflow-hidden h-[300px] animate-fadeInUp">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.024964470727!2d34.4751872!3d-0.0903321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19d5538b9cf9a09d%3A0x96883cca5cc0c8fb!2sSeme%20Technical%20and%20Vocational%20College!5e0!3m2!1sen!2ske!4v1722170000000!5m2!1sen!2ske"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" title="Seme TVC Location Map"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <?php include __DIR__ . '/partials/footer.php'; ?>
    </footer>

    <!-- Animations -->
    <style>
        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(20px);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        .animate-fadeInRight {
            animation: fadeInRight 0.8s ease-out forwards;
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out forwards;
        }
    </style>

    <!-- Basic Form Validation Script -->
    <script>
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            let isValid = true;
            const fullname = document.getElementById('fullname');
            const email = document.getElementById('email');
            const message = document.getElementById('message');
            const successMsg = document.getElementById('form-success');

            // Reset error messages
            document.querySelectorAll('.text-red-600').forEach(el => el.classList.add('hidden'));

            // Validate fields
            if (!fullname.value.trim()) {
                document.getElementById('fullname-error').classList.remove('hidden');
                isValid = false;
            }
            if (!email.value.trim() || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
                document.getElementById('email-error').classList.remove('hidden');
                isValid = false;
            }
            if (!message.value.trim()) {
                document.getElementById('message-error').classList.remove('hidden');
                isValid = false;
            }

            if (isValid) {
                successMsg.classList.remove('hidden');
                this.reset();
                setTimeout(() => successMsg.classList.add('hidden'), 3000);
                // Add actual form submission logic here (e.g., AJAX to server)
            }
        });
    </script>
</body>

</html>