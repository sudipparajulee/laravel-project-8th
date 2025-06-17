@extends('layouts.master')
@section('content')
    {{-- Login Form  --}}
    <div class="container mx-auto px-4 py-16">
        <h1 class="text-4xl font-bold text-center mb-8">Login</h1>
        <form action="/login" method="POST" class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">
            @csrf
            <div class="mb-6">
                <label for="email" class="block text-gray-700 mb-2">Email</label>
                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 mb-2">Password</label>
                <input type="password" id="password" name="password" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition duration-300 w-full">Login</button>
        </form>
        <div class="text-center mt-4">
            <p class="text-gray-600">Don't have an account? <a href="/register" class="text-blue-600 hover:text-blue-800 font-medium">Register</a></p>
        </div>
    </div>
    {{-- End of Login Form --}}
@endsection
