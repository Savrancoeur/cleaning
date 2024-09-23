@extends('admin-panel.master')
@section('title', 'Category Update')
@section('content')

    <div class="container mx-auto px-4">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex justify-between items-center mb-4">
                <h5 class="text-xl font-bold">Category Update Form</h5>
                <a href="{{ url('admin/categories') }}" class="btn btn-secondary">
                    <i class="fas fa-circle-arrow-left"></i> Back
                </a>
            </div>

            <form action="{{ url('admin/categories/' . $category->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 @error('name') border-red-500 @enderror"
                        value="{{ $category->name }}" placeholder="Enter category name...">
                    @error('name')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="btn btn-warning">
                        Update Category
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
