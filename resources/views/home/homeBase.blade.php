<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title>Mithila idli</title>
    
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
    <nav class="bg-[#f39c12] shadow-lg">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4 items-center">
                            <a href="/" class="text-white hover:text-black px-3 py-2 rounded-md text-base font-medium transition duration-300">Home</a>
                            <a href="/whyus" class="text-white hover:text-black px-3 py-2 rounded-md text-base font-medium transition duration-300">Why Us</a>
                            <a href="/brand-story" class="text-white hover:text-black px-3 py-2 rounded-md text-base font-medium transition duration-300">Brand Story</a>
                            <a href="/carrer" class="text-white hover:text-black px-3 py-2 rounded-md text-base font-medium transition duration-300">Careers</a>
                            <a href="/franchise-query" class="text-white hover:text-black px-3 py-2 rounded-md text-base font-medium transition duration-300">Franchise Query</a>
                            <a href="#" class="text-white hover:text-black px-3 py-2 rounded-md text-base font-medium transition duration-300">Cart Locator</a>
                            <a href="/blog" class="text-white hover:text-black px-3 py-2 rounded-md text-base font-medium transition duration-300">Blogs</a>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink-0">
                    <a href="/order-now">
                        <button class="px-4 py-2 font-medium text-[#6ab04c] bg-white hover:text-black rounded-lg transition duration-300">
                            <i class="fas fa-cart-plus mr-2"></i>Order Now
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @section('content')
    @show

<footer class="bg-gray-900 text-gray-400 py-12">
    <div class="container mx-auto px-4 md:px-5">
        <div class="flex justify-between">
            <!-- About Us Section -->
            <div class="w-full md:w-1/4 mb-6">
                <h4 class="text-white text-lg mb-4">About Us</h4>
                <p class="text-gray-400">Welcome to our Mithila Idli ! We offer the finest cuisine with fresh ingredients and a welcoming atmosphere.</p>
            </div>

            <!-- Quick Links Section -->
            <div class="w-full md:w-1/4 mb-6">
                <h4 class="text-white text-lg mb-4">Quick Links</h4>
                <ul class="list-none">
                    <li><a href="#" class="hover:text-white">Home</a></li>
                    <li><a href="#" class="hover:text-white">Menu</a></li>
                    <li><a href="#" class="hover:text-white">About</a></li>
                    <li><a href="#" class="hover:text-white">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Us Section -->
            <div class="w-full md:w-1/4 mb-6">
                <h4 class="text-white text-lg mb-4">Contact Us</h4>
                <p><i class="fas fa-map-marker-alt mr-2"></i>Panchwati Chowk, Purnea, Bihar</p>
                <p><i class="fas fa-phone mr-2"></i>(123) 456-7890</p>
                <p><i class="fas fa-envelope mr-2"></i>info@mithilaidli.com</p>
            </div>

            <!-- Social Media Section -->
            <div class="w-full md:w-1/4 mb-6">
                <h4 class="text-white text-lg mb-4">Follow Us</h4>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <div class="mt-8 border-t border-gray-700 pt-6 text-center">
            <p>&copy; 2024 Mithila Idli. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>

</html>
