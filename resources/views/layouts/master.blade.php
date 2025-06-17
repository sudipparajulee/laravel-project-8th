<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our First Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="flex justify-between py-2 px-20 bg-blue-600 text-white">
        <h2 class="text-2xl font-bold">LOGO</h2>
        <div class="flex gap-4">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
            <a href="/login">Login</a>
        </div>
    </nav>
    @yield('content')
    <footer>
        <div class="bg-gray-800 text-white text-center py-4 mt-10">
            <p>&copy; 2023 Your Company. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
