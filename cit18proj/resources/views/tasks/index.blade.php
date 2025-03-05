<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-500 to-indigo-600 text-gray-900 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg">
        <h1 class="text-3xl font-bold text-center text-indigo-700 mb-6">Task List</h1>
        <a href="{{ route('tasks.create') }}" class="block text-center mb-4 bg-indigo-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-indigo-700 transition">Create New Task</a>
        <ul class="space-y-4">
            @foreach ($tasks as $task)
                <li class="flex justify-between items-center p-4 bg-gray-100 border-l-4 rounded-md shadow-sm {{ $task->is_completed ? 'border-green-500' : 'border-red-500' }}">
                    <span class="font-medium text-lg">{{ $task->title }} - <span class="{{ $task->is_completed ? 'text-green-600' : 'text-red-600' }}">{{ $task->is_completed ? 'Completed' : 'Pending' }}</span></span>
                    <div class="space-x-2">
                        <a href="{{ route('tasks.show', $task->id) }}" class="text-blue-600 hover:text-blue-800 font-semibold">View</a>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="text-yellow-600 hover:text-yellow-800 font-semibold">Edit</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800 font-semibold">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>