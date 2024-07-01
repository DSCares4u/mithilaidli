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

        .modal {
            transition: opacity 0.25s ease;
        }

        body.modal-active {
            overflow-x: hidden;
            overflow-y: visible !important;
        }

        .vertical-text {
            writing-mode: vertical-rl;
            text-orientation: mixed;
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
                            <a href="/"
                                class="text-white hover:text-black px-3 py-2 rounded-md text-base font-medium transition duration-300">Home</a>
                            <a href="/whyus"
                                class="text-white hover:text-black px-3 py-2 rounded-md text-base font-medium transition duration-300">Why
                                Us</a>
                            <a href="/brand-story"
                                class="text-white hover:text-black px-3 py-2 rounded-md text-base font-medium transition duration-300">Brand
                                Story</a>
                            <a href="/carrer"
                                class="text-white hover:text-black px-3 py-2 rounded-md text-base font-medium transition duration-300">Careers</a>
                            <a href="/franchise-query"
                                class="text-white hover:text-black px-3 py-2 rounded-md text-base font-medium transition duration-300">Franchise
                                Query</a>
                            <a href="/cart-locator"
                                class="text-white hover:text-black px-3 py-2 rounded-md text-base font-medium transition duration-300">Cart
                                Locator</a>
                            <a href="/blog-page"
                                class="text-white hover:text-black px-3 py-2 rounded-md text-base font-medium transition duration-300">Blogs</a>
                        </div>
                    </div>
                </div>
                <div class="flex gap-5">
                    <a href="/book-event">
                        <button
                            class="px-4 py-2 font-medium text-[#6ab04c] bg-white hover:text-black rounded-lg transition duration-300">
                            <i class="fa-solid fa-gift mr-2"></i>Book An Event
                        </button>
                    </a>
                    <a href="/order-now">
                        <button
                            class="px-4 py-2 font-medium text-[#6ab04c] bg-white hover:text-black rounded-lg transition duration-300">
                            <i class="fas fa-cart-plus mr-2"></i>Order Now
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Rating Work  --}}
    <!-- Rate Us Button -->
    <div class="fixed top-1/2 right-0 transform -translate-y-1/2 z-20">
        <button id="rateUsButton" class="bg-yellow-300 hover:bg-yellow-500 text-white px-2 py-6 rounded-l-lg shadow vertical-text">
            Rate Us
        </button>
    </div>

    <div id="rateUsModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 z-30 flex items-center justify-center modal">
        <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all max-w-lg w-full p-6">
            <div class="text-right">
                <button id="closeModal" class="text-gray-500 text-4xl">&times;</button>
            </div>
            <h2 class="text-2xl mb-4">Rate Us</h2>
            <form id="rateUsForm" class="space-y-4">
                <!-- Rating Stars -->
                <div>
                    <label class="block mb-2">Rating:</label>
                    <div class="flex space-x-1">
                        <button type="button" class="rating-star p-8 text-4xl hover:text-yellow-400" data-rating="1">&#9733;</button>
                        <button type="button" class="rating-star p-8 text-4xl hover:text-yellow-400" data-rating="2">&#9733;</button>
                        <button type="button" class="rating-star p-8 text-4xl hover:text-yellow-400" data-rating="3">&#9733;</button>
                        <button type="button" class="rating-star p-8 text-4xl hover:text-yellow-400" data-rating="4">&#9733;</button>
                        <button type="button" class="rating-star p-8 text-4xl hover:text-yellow-400" data-rating="5">&#9733;</button>
                    </div>
                    <p id="error-rate" class="text-red-500 text-xs font-semibold error-message"></p>
                </div>
                <!-- Name -->
                <div>
                    <label for="name" class="block mb-2">Name:</label>
                    <input type="text" id="name" name="name" class="w-full border rounded p-2">
                    <p id="error-name" class="text-red-500 text-xs font-semibold error-message"></p>
                </div>
                <!-- Mobile -->
                <div>
                    <label for="mobile" class="block mb-2">Mobile:</label>
                    <input type="tel" id="mobile" name="mobile" class="w-full border rounded p-2">
                    <p id="error-mobile" class="text-red-500 text-xs font-semibold error-message"></p>
                </div>
                <!-- Comment -->
                <div>
                    <label for="comment" class="block mb-2">Comment (Optional) :</label>
                    <textarea id="comment" name="comment" rows="3" class="w-full border rounded p-2"></textarea>
                </div>
    
                <!-- Submit Button -->
                <div class="text-right">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded shadow">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
    <script>
        // Get elements
        const rateUsButton = document.getElementById('rateUsButton');
        const rateUsModal = document.getElementById('rateUsModal');
        const closeModal = document.getElementById('closeModal');
        const ratingStars = document.querySelectorAll('.rating-star');
        let selectedRating = 0;
    
        // Show modal
        rateUsButton.addEventListener('click', () => {
            rateUsModal.classList.remove('hidden');
            document.body.classList.add('modal-active');
        });
    
        // Hide modal
        closeModal.addEventListener('click', () => {
            rateUsModal.classList.add('hidden');
            document.body.classList.remove('modal-active');
        });
    
        // Select rating
        ratingStars.forEach(star => {
            star.addEventListener('click', () => {
                selectedRating = star.getAttribute('data-rating');
                ratingStars.forEach(s => s.classList.remove('text-yellow-500'));
                for (let i = 0; i < selectedRating; i++) {
                    ratingStars[i].classList.add('text-yellow-500');
                }
            });
        });
    
        // Submit form
        document.getElementById('rateUsForm').addEventListener('submit', function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            formData.append('rate', selectedRating);
            $.ajax({
                type: "POST",
                url: "{{ route('rate.store') }}",
                data: formData,
                dataType: "JSON",
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    swal("Thanking So Much", response.message, "success");
                    $("#rateUsForm").trigger("reset");
                    setTimeout(function() {
                        window.open("/", "_self");
                    }, 4000);
                },
                error: function(xhr) {
                    $('.error-message').html('');
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        $('.error-message').html(''); // Clear previous error messages
                        $.each(errors, function(key, value) {
                            $('#error-' + key).html(value[0]).show();
                        });
                    } else {
                        alert('An error occurred. Please try again.');
                    }
                }
            });
        });
    </script>
    

    @section('content')
    @show

    <footer class="bg-gray-900 text-gray-400 py-12">
        <div class="container mx-auto px-4 md:px-5">
            <div class="flex justify-between">
                <!-- About Us Section -->
                <div class="w-full md:w-1/4 mb-6">
                    <h4 class="text-white text-lg mb-4">About Us</h4>
                    <p class="text-gray-400">Welcome to our Mithila Idli ! We offer the finest cuisine with fresh
                        ingredients and a welcoming atmosphere.</p>
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
                        <a href="#" class="text-gray-400 hover:text-white"><i
                                class="fab fa-facebook-f"></i></a>
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
