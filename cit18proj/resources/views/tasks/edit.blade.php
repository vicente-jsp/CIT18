<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold mb-4 text-indigo-700">Edit Task</h1>
        <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-sm font-medium text-gray-700">Title:</label>
                <input type="text" name="title" value="{{ $task->title }}" required class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-400 shadow-sm">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Description:</label>
                <textarea name="description" class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-400 shadow-sm">{{ $task->description }}</textarea>
            </div>
            <div>
                <label class="inline-flex items-center">
                    <input type="hidden" name="is_completed" value="0"> 
                    <input type="checkbox" name="is_completed" value="1" class="form-checkbox text-indigo-600" {{ $task->is_completed ? 'checked' : '' }} onchange="this.form.submit()">
                    <span class="ml-2 text-gray-700">Completed</span>
                </label>
            </div>
            <button type="submit" class="w-full bg-indigo-600 text-white p-3 rounded-lg shadow-md hover:bg-indigo-700">Update</button>
        </form>
        <div class="mt-4 text-center">
            <a href="{{ route('tasks.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Back</a>
        </div>
    </div>
</body>
</html>
