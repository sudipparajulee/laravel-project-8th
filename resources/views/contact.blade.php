@extends('layouts.master')
@section('content')
<div class="container mx-auto px-4 py-16">
    <h1 class="text-4xl font-bold text-center mb-8">Contact Us</h1>
    <form action="/contact" method="POST" class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">
        @csrf
        <div class="mb-6">
            <label for="name" class="block text-gray-700 mb-2">Name</label>
            <input type="text" id="name" name="name" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
        </div>
        <div class="mb-6">
            <label for="email" class="block text-gray-700 mb-2">Email</label>
            <input type="email" id="email" name="email" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
        </div>
        <div class="mb-6">
            <label for="message" class="block text-gray-700 mb-2">Message</label>
            <textarea id="message" name="message" rows="4" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-600"></textarea>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition duration-300 w-full">Send Message</button>
    </form>
</div>
@endsection
