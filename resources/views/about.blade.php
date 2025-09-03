<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Tracker</title>
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

<body class="bg-custom-color text-white min-h-screen flex flex-col w-full">
    @include('layout.navbar')
    <div class="container mx-auto p-4 bg-black border-2 rounded-lg shadow-lg my-10">
        <h1 class="text-4xl font-bold mb-4">About Task Tracker</h1>
        <p class="text-lg mb-4">Task Tracker is a web application designed to help you manage your tasks efficiently. With a user-friendly interface and powerful features, you can easily create, update, and delete tasks as needed.</p>
        <p class="text-lg mb-4">Our goal is to provide a seamless experience for users to keep track of their tasks and improve productivity.</p>
        <!-- description about the all features of Task Tracker in controller -->
        <p class="text-lg mb-4">Some of the key features include:</p>
        <ul class="list-disc list-inside mb-4">
            <li class="mb-2">Create, update, and delete tasks with ease</li>
            <li class="mb-2">Organize tasks into projects</li>
            <li class="mb-2">Earn points for completing tasks</li>
            <li class="mb-2">Add subtasks for better task management</li>
            <li class="mb-2">Set due dates and reminders</li>
            <li class="mb-2">Track progress with status updates</li>
        </ul>
    </div>

    @include('layout.footer')

</body>

</html>