<header class="bg-white shadow-md p-4">
    <h1 class="text-2xl font-bold text-indigo-700 text-center">Welcome to My Laravel App</h1>
    <nav class="mt-4">
        <ul class="flex justify-center space-x-6">
            <li><a href="{{ url('/') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition">Home</a></li>
            <li><a href="{{ url('/about') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition">About</a></li>
            <li><a href="{{ url('/contact') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition">Contact</a></li>
        </ul>
    </nav>
</header>
