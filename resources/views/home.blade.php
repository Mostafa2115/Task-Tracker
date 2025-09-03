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
    @if(Auth::user())
    <p class="text-4xl font-bold mb-8 mx-auto my-4">Welcome {{ Auth::user()->name }} </p>
    @else
    <p class="text-4xl font-bold mb-8 mx-auto my-4">Welcome Guest</p>
    @endif
    <p class="text-lg mb-2 mx-auto">Your Points: <span class="font-bold">
            @if(Auth::user())
            {{ Auth::user()->points }}
            @else
            0
            @endif
        </span></p>
    <div class="container my-10 mx-auto p-4 bg-black border-2 rounded-lg shadow-lg block justify-center">
        <h2 class="text-3xl font-bold mb-4">My Tasks</h2>
        @if(Auth::user())
        <a href="/tasks/add">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">Add Task</button>
        </a>
        @endif
        <table class="min-w-full bg-white border-2 rounded-lg shadow-lg text-black">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b border-gray-700">#</th>
                    <th class="py-2 px-4 border-b border-gray-700">Task</th>
                    <th class="py-2 px-4 border-b border-gray-700">Priority</th>
                    <th class="py-2 px-4 border-b border-gray-700">Due Date</th>
                    <th class="py-2 px-4 border-b border-gray-700">Description</th>
                    <th class="py-2 px-4 border-b border-gray-700">Status</th>
                    <th class="py-2 px-4 border-b border-gray-700">Actions</th>
                </tr>
            </thead>
            @if(!Auth::user() || Auth::user()->tasks->isEmpty())
            <tbody>
                <tr>
                    <td colspan="7" class="py-2 px-4 text-center border-b border-gray-700">No tasks found.</td>
                </tr>
            </tbody>
            @else
            <tbody>
                @foreach(Auth::user()->tasks as $task)
                <tr>
                    <td class="py-2 px-4 border-b text-center border-gray-700">{{ $loop->index + 1 }}</td>
                    <td class="py-2 px-4 border-b text-center border-gray-700">{{ $task->title }}</td>
                    <td class="py-2 px-4 border-b text-center border-gray-700">{{ $task->priority }}</td>
                    <td class="py-2 px-4 border-b text-center border-gray-700">{{ $task->due_date }}</td>
                    <td class="py-2 px-4 border-b text-center border-gray-700">{{ $task->description }}</td>
                    <td class="py-2 px-4 border-b text-center border-gray-700">
                        <form action="{{ route('tasks.markAsCompleted', $task->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Complete</button>
                        </form>
                    </td>
                    <td class="py-2 px-4 border-b text-center border-gray-700">
                        <a class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded" href="{{ route('tasks.edit', $task) }}">Edit</a>
                        <form action="{{ route('tasks.delete', $task) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            @endif
        </table>
    </div>
    @include('layout.footer')

</body>

</html>