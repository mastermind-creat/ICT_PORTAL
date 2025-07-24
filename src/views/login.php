<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login | SEME TVC ICT Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-100 via-purple-100 to-blue-200 flex items-center justify-center">
    <div
        class="absolute inset-0 bg-gradient-to-br from-blue-600 via-purple-600 to-blue-400 opacity-20 pointer-events-none">
    </div>
    <div class="relative z-10 w-full max-w-md mx-auto p-8 bg-white rounded-2xl shadow-xl">
        <div class="flex flex-col items-center mb-6">
            <img src="https://img.icons8.com/color/48/000000/computer.png" alt="Logo" class="h-12 mb-2">
            <span class="text-xl font-extrabold text-blue-700 tracking-wide">SEME TVC ICT Portal</span>
        </div>
        <h2 class="text-2xl font-bold text-gray-800 mb-2 text-center">Welcome Back</h2>
        <form class="space-y-5 mt-6">
            <div>
                <label class="block text-gray-700 font-medium mb-1" for="email">Email</label>
                <input id="email" name="email" type="email" required
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 transition placeholder-gray-400"
                    placeholder="you@example.com">
                <!-- Example error state: -->
                <!-- <p class="text-red-500 text-xs mt-1">Please enter a valid email.</p> -->
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-1" for="password">Password</label>
                <input id="password" name="password" type="password" required
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 transition placeholder-gray-400"
                    placeholder="********">
            </div>
            <div class="flex items-center justify-between">
                <label class="flex items-center text-sm text-gray-600">
                    <input type="checkbox" class="form-checkbox rounded text-blue-600 focus:ring-blue-500 transition">
                    <span class="ml-2">Remember Me</span>
                </label>
                <a href="#" class="text-sm text-blue-600 hover:underline hover:text-purple-600 transition">Forgot
                    Password?</a>
            </div>
            <button type="submit"
                class="w-full py-2.5 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-lg shadow hover:from-blue-700 hover:to-purple-700 transition transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Login
            </button>
        </form>
        <div class="mt-6 text-center text-sm text-gray-600">
            Don't have an account?
            <a href="register.php"
                class="text-blue-600 hover:underline hover:text-purple-600 transition font-medium">Register here.</a>
        </div>
    </div>
</body>

</html>