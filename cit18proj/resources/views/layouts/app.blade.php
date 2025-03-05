<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-500 to-indigo-600 text-gray-900 min-h-screen flex flex-col">

    @include('partials.header')

    <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg mt-6 flex-grow">
        @yield('content')
    </div>

    @include('partials.footer')

</body>
</html>