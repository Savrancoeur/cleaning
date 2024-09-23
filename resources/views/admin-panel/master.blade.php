<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Sweet Alert CDN Link --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @vite('resources/js/app.js')

    <style>
        body {
            padding: 3px;
        }

        .navbar {
            background-color: navy;
        }

        .sidenav {
            width: 200px;
            height: 100%;
            background-color: green;

            position: fixed;
            padding: 15px;

        }

        .sidenav a {
            display: block;
            font-size: 18px;

            text-decoration: none;
            color: #f4f4f4;
            padding: 6px;
        }


        .main {
            margin-left: 205px;
            font-size: 18px;
            padding: 20px;
        }

        .mainCol {
            padding: 0px;
            margin: 0px;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 5;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container-fluid mainCol">
        <div class="row ">
            <div class="col-md-12 mainCol">
                <!-- navigation section -->
                <nav class="navbar navbar-expand-lg  navbar-dark position-sticky">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{ url('/admin/dashboard') }}">MyanAnt Cleaning</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{-- {{ Auth::user()->name }} --}}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        {{-- <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item"
                                                onclick="return confirm('Are you sure you want to logout?')">Logout</button>
                                        </form> --}}
                                        <!-- <li><a class="dropdown-item" href="#">Logout</a></li> -->
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- side bar section -->
                <div class="sidenav">
                    <a href="{{ url('admin/dashboard') }}">Dashboard</a>
                    <a href="{{ url('admin/categories') }}">Category</a>
                    <a href="{{ url('admin/workers') }}">Workers</a>
                    <a href="{{ url('admin/orders') }}">Orders</a>
                </div>

                <!-- main content section -->
                <div class="main">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    @yield('javascript')

</body>

</html>
