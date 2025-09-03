<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'custom-color': '#1c1c1e',
                    },
                },
            },
        }
    </script>
</head>

<body class="bg-custom-color text-white min-h-screen flex flex-col">
    @include('layout.navbar')
    <div class="container mx-auto my-10 p-4 bg-black border-2 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-3xl font-bold mb-4 text-center">Create an Account</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-bold mb-2">Name</label>
                <input type="text" id="name" name="name" class="w-full p-2 border border-gray-700 rounded" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full p-2 border border-gray-700 rounded" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full p-2 border border-gray-700 rounded" required>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Register</button>
        </form>
    </div>
    <footer class="bg-black text-white py-4 mt-10 h-16 fixed bottom-0 w-full">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 Mostafa Mahmoud. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>