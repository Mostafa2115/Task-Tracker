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
    <div class="container mx-auto my-10 p-4 bg-black border-2 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-3xl font-bold mb-4 text-center">Edit Task</h2>
        <form action="{{ route('tasks.update', $task) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block text-sm font-bold mb-2">Task Title</label>
                <input type="text" name="title" id="title" class="form-input w-full bg-gray-800 border border-gray-700 rounded-lg py-2 px-4" value="{{ $task->title }}" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-bold mb-2">Description</label>
                <textarea name="description" id="description" class="form-input w-full bg-gray-800 border border-gray-700 rounded-lg py-2 px-4" required>{{ $task->description }}</textarea>
            </div>
            <div class="mb-4">
                <label for="due_date" class="block text-sm font-bold mb-2">Due Date</label>
                <input type="date" name="due_date" id="due_date" class="form-input w-full bg-gray-800 border border-gray-700 rounded-lg py-2 px-4" value="{{ $task->due_date }}" required>
            </div>
            <div class="mb-4">
                <label for="priority" class="block text-sm font-bold mb-2">Priority</label>
                <select name="priority" id="priority" class="form-select w-full bg-gray-800 border border-gray-700 rounded-lg py-2 px-4" required>
                    <option value="low" {{ $task->priority == 'low' ? 'selected' : '' }}>Low</option>
                    <option value="medium" {{ $task->priority == 'medium' ? 'selected' : '' }}>Medium</option>
                    <option value="high" {{ $task->priority == 'high' ? 'selected' : '' }}>High</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Task</button>
        </form>
    </div>
    @include('layout.footer')
</body>

</html>