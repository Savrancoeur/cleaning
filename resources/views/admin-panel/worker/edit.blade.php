@extends('admin-panel.master')
@section('title', 'Worker Update')
@section('content')

    <div class="container mx-auto px-4">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex justify-between items-center mb-4">
                <h5 class="text-xl font-bold">Worker Update Form</h5>
                <a href="{{ url('admin/workers') }}" class="btn btn-secondary">
                    <i class="fas fa-circle-arrow-left"></i> Back
                </a>
            </div>

            <form action="{{ url('admin/workers/' . $worker->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 @error('name') border-red-500 @enderror"
                        value="{{ $worker->name }}" placeholder="Enter worker name...">
                    @error('name')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 @error('email') border-red-500 @enderror"
                        value="{{ $worker->email }}" placeholder="Enter Worker email...">
                    @error('email')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="nrc" class="block text-sm font-medium text-gray-700">NRC</label>
                    <input type="text" name="nrc"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 @error('nrc') border-red-500 @enderror"
                        value="{{ $worker->nrc }}" placeholder="Enter Worker NRC...">
                    @error('nrc')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                    <input type="text" name="phone"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 @error('phone') border-red-500 @enderror"
                        value="{{ $worker->phone }}" placeholder="Enter Worker Phone Number...">
                    @error('phone')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select name="status"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 @error('status') border-red-500 @enderror">
                        <option value="">Select Status</option>
                        <option value="0" {{ old('status', $worker->status) == '0' ? 'selected' : '' }}>Active
                        </option>
                        <option value="1" {{ old('status', $worker->status) == '1' ? 'selected' : '' }}>Inactive
                        </option>
                    </select>
                    @error('status')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="start_date" class="block text-sm font-medium text-gray-700">Start Date</label>
                    <input type="date" name="start_date"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 @error('start_date') border-red-500 @enderror"
                        value="{{ old('start_date', $worker->start_date ? \Carbon\Carbon::parse($worker->start_date)->format('Y-m-d') : '') }}">
                    @error('start_date')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="btn btn-warning">
                        Update Worker
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
