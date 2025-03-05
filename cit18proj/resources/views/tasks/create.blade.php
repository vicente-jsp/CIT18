<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-500 to-indigo-600 text-gray-900 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md border-t-4 border-indigo-500">
        <h1 class="text-3xl font-bold text-center text-indigo-700 mb-6">Create Task</h1>
        <form action="{{ route('tasks.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700">Title:</label>
                <input type="text" name="title" required class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-400 shadow-sm">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Description:</label>
                <textarea name="description" class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-400 shadow-sm"></textarea>
            </div>
            <button type="submit" class="w-full bg-indigo-600 text-white p-3 rounded-lg shadow-md hover:bg-indigo-700 transition">Save</button>
        </form>
    </div>
</body>
</html>
