<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Sweet Alert CDN Link --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            padding: 0;
        }
    </style>
</head>

<body class="bg-gray-200">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-green-700 p-6 text-white shadow-lg">
            <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="h-[120px] rounded-xl mb-">
            <nav>
                <a href="{{ url('admin/dashboard') }}"
                    class="block py-2 px-4 rounded-lg hover:bg-green-800">Dashboard</a>
                <a href="{{ url('admin/categories') }}"
                    class="block py-2 px-4 rounded-lg hover:bg-green-800">Category</a>
                <a href="{{ url('admin/workers') }}" class="block py-2 px-4 rounded-lg hover:bg-green-800">Workers</a>
                <a href="{{ url('admin/orders') }}" class="block py-2 px-4 rounded-lg hover:bg-green-800">Orders</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            <nav class="bg-gray-800 text-white p-4 shadow-md flex justify-between items-center">
                <a href="{{ url('/admin/dashboard') }}" class="text-xl font-bold">MyanAnt Cleaning</a>
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn m-1 flex items-center">
                        {{ Auth::user()->name ?? 'User' }}
                        <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box w-52 p-2 shadow z-[1]">
                        <form action="{{ route('auth.logout') }}" method="POST">
                            @csrf
                            <li>
                                <button type="submit" class="btn btn-error w-full">Logout</button>
                            </li>
                        </form>
                    </ul>
                </div>
            </nav>


            <!-- Main Content Section -->
            <main class="flex-1 p-6 overflow-y-auto">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    @yield('javascript')
</body>

</html>
