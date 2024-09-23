@extends('admin-panel.master')
@section('title', 'Dashboard')

@section('content')
    <div class="container mx-auto px-4">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Dashboard</h1>

            <p class="text-gray-700 mb-4">
                Welcome to the dashboard! Here you can manage your categories, workers, and orders effectively.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-green-100 rounded-lg p-4 shadow">
                    <h2 class="text-xl font-semibold mb-2">Total Categories</h2>
                    <p class="text-2xl font-bold">{{ $categories->count() }}</p>
                </div>

                <div class="bg-blue-100 rounded-lg p-4 shadow">
                    <h2 class="text-xl font-semibold mb-2">Total Workers</h2>
                    <p class="text-2xl font-bold">{{ $workers->count() }}</p>
                </div>

                <div class="bg-yellow-100 rounded-lg p-4 shadow">
                    <h2 class="text-xl font-semibold mb-2">Total Orders</h2>
                    <p class="text-2xl font-bold">{{ $orders->count() }}</p>
                </div>
            </div>

            <div class="mt-6">
                <h2 class="text-xl font-semibold mb-2">Recent Activity</h2>
                <ul class="list-disc pl-5">
                    <li class="text-gray-700">New worker added: John Doe</li>
                    <li class="text-gray-700">Category updated: Cleaning Supplies</li>
                    <li class="text-gray-700">Order completed: #12345</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
