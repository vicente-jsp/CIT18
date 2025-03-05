<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold mb-4 text-indigo-700">Task Details</h1>
        <p class="text-lg"><strong>Title:</strong> {{ $task->title }}</p>
        <p class="text-lg"><strong>Description:</strong> {{ $task->description }}</p>
        <p class="text-lg"><strong>Status:</strong> <span class="{{ $task->is_completed ? 'text-green-600' : 'text-red-600' }}">{{ $task->is_completed ? 'Completed' : 'Pending' }}</span></p>
        <div class="mt-4 space-x-2">
            <a href="{{ route('tasks.edit', $task->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600">Edit</a>
            <a href="{{ route('tasks.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Back</a>
        </div>
    </div>
</body>
</html>
