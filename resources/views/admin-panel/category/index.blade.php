@extends('admin-panel.master')
@section('title', 'Project Index')
@section('content')
    <div class="container mx-auto px-4">
        <div class="bg-white rounded-lg shadow-lg p-6 mb-4">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Categories</h1>
                <a href="{{ url('admin/categories/create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Create New Category
                </a>
            </div>

            @if (Session('successMsg'))
                <div class="alert alert-success mb-4 p-4 bg-green-100 text-green-700 rounded">
                    <strong>{{ Session('successMsg') }}</strong>
                    <button type="button" class="close" aria-label="Close"
                        onclick="this.parentElement.style.display='none';">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($categories as $category)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $category->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $category->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <form action="{{ url('admin/categories/' . $category->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-secondary"
                                        title="edit">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>

                                    <button type="submit" class="btn btn-sm btn-danger" title="delete"
                                        onclick="return confirm('Are you sure you want to delete?')">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="pagination">
            {{ $categories->links() }}
        </div>
    </div>
@endsection
