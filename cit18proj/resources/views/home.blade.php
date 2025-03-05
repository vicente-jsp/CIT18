@extends('layouts.app')  <!-- Extends the main layout -->

@section('title', 'Home Page')  <!-- Sets the page title -->

@section('content')
    <h2 class="text-2xl font-bold text-indigo-700">Home Page</h2>
    <p class="text-gray-700">Welcome to our home page! This content is inside the Blade template.</p>
    <a href="{{ route('tasks.index') }}" class="mt-4 inline-block bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">View Tasks</a>
@endsection
