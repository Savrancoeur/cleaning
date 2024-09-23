<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Include Vite CSS -->
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="bg-white shadow-lg rounded-lg p-8 w-full sm:w-96">
            <h2 class="text-2xl font-bold text-center text-primary mb-4">Create an Account</h2>

            <form action="{{ route('auth.register') }}" method="POST">
                @csrf
                <!-- Name Field -->
                <div class="form-control mb-4">
                    <label class="label" for="name">
                        <span class="label-text font-semibold text-gray-700">Name</span>
                    </label>
                    <input type="text" name="name" placeholder="Enter your name"
                        class="input input-bordered w-full focus:outline-none focus:border-primary" required />
                </div>

                <!-- Email Field -->
                <div class="form-control mb-4">
                    <label class="label" for="email">
                        <span class="label-text font-semibold text-gray-700">Email</span>
                    </label>
                    <input type="email" name="email" placeholder="Enter your email"
                        class="input input-bordered w-full focus:outline-none focus:border-primary" required />
                </div>

                <!-- Password Field -->
                <div class="form-control mb-6">
                    <label class="label" for="password">
                        <span class="label-text font-semibold text-gray-700">Password</span>
                    </label>
                    <input type="password" name="password" placeholder="Enter your password"
                        class="input input-bordered w-full focus:outline-none focus:border-primary" required />
                </div>

                <!-- Submit Button -->
                <div class="form-control">
                    <button type="submit" class="btn btn-primary w-full hover:bg-primary-focus">Register</button>
                </div>
            </form>


        </div>
    </div>

</body>

</html>
