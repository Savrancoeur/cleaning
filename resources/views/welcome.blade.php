<!-- resources/views/index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyanAnt Cleaning</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Include Vite CSS -->
</head>

<body class="bg-gray-50">

    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-sky-600 to-green-500 shadow-md p-4 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="h-10 rounded-xl">
            <!-- Replace with your actual logo path -->
            <span class="text-xl font-bold text-gray-800">MyanAnt Cleaning</span>
        </div>
        <div class="space-x-4">
            <button class="btn btn-primary" id="orderBtn">Order</button>
            <a href="#" class="text-gray-600">Login</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="  bg-slate-800 mx-auto p-6">
        <section class="text-center mt-10 ">
            <h1 class="text-4xl font-bold text-white mb-4 ">Welcome to Our Cleaning Services</h1>
            <p class="text-white mb-8">Professional maid and deep cleaning services for your home and office. We
                make sure your space is spotless and hygienic.</p>
            <button class="btn btn-accent hover:bg-gradient-to-t hover:from-pink-500 hover:to-yellow-500"
                id="orderBtnMain">Order Now</button>
        </section>

        <!-- Services Section -->
        <section class="mt-16 p-8 bg-white shadow-md rounded-lg">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Why Choose Our Cleaning Services?</h2>
            <p class="text-gray-600 mb-6">
                We understand that maintaining a clean and tidy environment is essential for your health and well-being.
                That's why we offer tailored cleaning solutions designed to fit your needs, whether you need regular
                assistance or a one-time deep clean.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Maid  Service -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md transition hover:shadow-lg">
                    <h3 class="text-2xl font-semibold text-primary mb-4">✨ Maid Service</h3>
                    <p class="text-gray-600 mb-4">
                        Our experienced maids offer regular, thorough, and professional cleaning for your home or
                        office. We handle all the everyday chores, from dusting to mopping, so you can enjoy a sparkling
                        clean space without lifting a finger.
                    </p>
                    <ul class="list-disc list-inside text-gray-600">
                        <li>Daily, weekly, or bi-weekly schedules</li>
                        <li>Expert dusting, vacuuming, and polishing</li>
                        <li>Kitchen, bathroom, and living area cleaning</li>
                        <li>Personalized cleaning plans to suit your needs</li>
                    </ul>
                    <div class="mt-4">
                        <button class="btn btn-secondary">Learn More</button>
                    </div>
                </div>

                <!-- Deep Cleaning Service -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md transition hover:shadow-lg">
                    <h3 class="text-2xl font-semibold text-accent mb-4">🧹 Deep Cleaning Service</h3>
                    <p class="text-gray-600 mb-4">
                        Our deep cleaning service goes beyond the surface to remove hidden dirt, grime, and allergens.
                        We meticulously clean every corner, ensuring a healthier and more refreshing environment for you
                        and your family.
                    </p>
                    <ul class="list-disc list-inside text-gray-600">
                        <li>Comprehensive cleaning of hard-to-reach areas</li>
                        <li>Deep kitchen and bathroom sanitization</li>
                        <li>Window, wall, and baseboard cleaning</li>
                        <li>Perfect for seasonal cleaning or move-in/move-out</li>
                    </ul>
                    <div class="mt-4">
                        <button class="btn btn-accent">Explore Deep Cleaning</button>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Modal -->
    <div class="modal" id="orderModal">
        <div class="modal-box">
            <h3 class="font-bold text-lg">Place Your Order</h3>
            <form id="orderForm" action="{{ route('order.store') }}" method="POST">
                @csrf
                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text">Name</span>
                    </label>
                    <input type="text" name="name" placeholder="Enter your name" class="input input-bordered"
                        required>
                </div>
                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text">Category</span>
                    </label>
                    <select class="select select-bordered" required>
                        <option disabled selected>Select a service</option>
                        <option value="maid">Maid</option>
                        <option value="deep-cleaning">Deep Cleaning</option>
                    </select>
                </div>
                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text">Address</span>
                    </label>
                    <input type="text" name="address" placeholder="Enter your address" class="input input-bordered"
                        required>
                </div>
                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text">Remark</span>
                    </label>
                    <textarea name="remark" class="textarea textarea-bordered" placeholder="Any additional details"></textarea>
                </div>
                <div class="modal-action">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn" id="closeModal">Close</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Include Vite JavaScript -->
    <script>
        // Handle modal open
        document.getElementById('orderBtn').onclick = function() {
            document.getElementById('orderModal').classList.add('modal-open');
        };
        document.getElementById('orderBtnMain').onclick = function() {
            document.getElementById('orderModal').classList.add('modal-open');
        };
        // Handle modal close
        document.getElementById('closeModal').onclick = function() {
            document.getElementById('orderModal').classList.remove('modal-open');
        };
    </script>
</body>

</html>
