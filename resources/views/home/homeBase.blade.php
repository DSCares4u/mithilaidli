<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    .carousel-item {
        display: none;
    }

    .carousel-item.active {
        display: block;
    }
</style>
</head>
<body>
  <nav class="bg-green-600">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed. -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    <!-- Icon when menu is open. -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class=" flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="hidden sm:block sm:ml-6 ">
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-yellow-400 px-3 py-2 rounded-md text-base font-medium">Home</a>
                        <a href="#" class="text-gray-300 hover:text-yellow-400 px-3 py-2 rounded-md text-base font-medium">Why Us</a>
                        <a href="#" class="text-gray-300 hover:text-yellow-400 px-3 py-2 rounded-md text-base font-medium">Brand Story</a>
                        <a href="#" class="text-gray-300 hover:text-yellow-400 px-3 py-2 rounded-md text-base font-medium">Careers</a>
                        <a href="#" class="text-gray-300 hover:text-yellow-400 px-3 py-2 rounded-md text-base font-medium">Franchise Query</a>
                        <a href="#" class="text-gray-300 hover:text-yellow-400 px-3 py-2 rounded-md text-base font-medium">Vendor Locator</a>
                        <a href="#" class="text-gray-300 hover:text-yellow-400 px-3 py-2 rounded-md text-base font-medium">Blogs</a>
                        <a href="#" class="text-gray-300 hover:text-yellow-400 px-3 py-2 rounded-md text-base font-medium">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Why Us</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Brand Story</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Careers</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Franchise Query</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Vendor Locator</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact Us</a>
        </div>
    </div>
</nav>

<script>
    // Toggle the mobile menu
    document.querySelector('button[aria-controls="mobile-menu"]').addEventListener('click', function() {
        var mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>


@section('content')
@show

</body>
</html>