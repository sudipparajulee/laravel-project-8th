@extends('layouts.master')
@section('content')
    <div>
        <h1 class="text-4xl text-center mt-10">Welcome to Our Website</h1>
        <p class="text-center mt-4">This is a simple welcome page using Tailwind CSS.</p>
        <div class="flex justify-center mt-10">
            <button class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition duration-300">Get Started</button>
        </div>
    </div>
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Latest Blog Posts</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <article class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://via.placeholder.com/400x200" alt="Blog post" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Blog Post Title 1</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.</p>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Read More</a>
                    </div>
                </article>
                <article class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://via.placeholder.com/400x200" alt="Blog post" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Blog Post Title 2</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.</p>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Read More</a>
                    </div>
                </article>
                <article class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://via.placeholder.com/400x200" alt="Blog post" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Blog Post Title 3</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.</p>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Read More</a>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection
