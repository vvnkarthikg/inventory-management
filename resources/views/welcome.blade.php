<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">

    <div class="text-center">
        <h1 class="text-4xl font-bold mb-6">Inventory Management System</h1>
        
        <div>
            <a href="{{ route('login') }}" class="inline-block px-6 py-3 bg-blue-500 text-white font-semibold rounded-lg mb-4 hover:bg-blue-600 transition duration-200">Login</a>
            <a href="{{ route('register') }}" class="inline-block px-6 py-3 bg-green-500 text-white font-semibold rounded-lg hover:bg-green-600 transition duration-200">Register</a>
        </div>
    </div>

</body>
</html>
