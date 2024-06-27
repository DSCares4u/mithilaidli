@extends('home.homeBase')
@section('content')
    <div class="bg-gray-100 text-gray-800">
        <main class="container mx-auto px-6 py-12">
            <section class="text-center">
                <h2 class="text-4xl font-semibold text-gray-900">Our Blog</h2>
                <p class="mt-4 text-lg text-gray-600">Explore our latest articles, recipes, and tips on South Indian cuisine.
                </p>
            </section>

            <section class="mt-12">
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img src="path/to/blog1.jpg" alt="Blog 1" class="h-48 w-full object-cover rounded-lg">
                        <h3 class="mt-4 text-xl font-semibold text-gray-900">The History of Idli</h3>
                        <p class="mt-2 text-gray-600">Discover the rich history of Idli, from its origins to its popularity
                            in modern cuisine.</p>
                        <a href="/blog/the-history-of-idli" class="mt-4 inline-block text-indigo-600 hover:underline">Read
                            More</a>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img src="path/to/blog2.jpg" alt="Blog 2" class="h-48 w-full object-cover rounded-lg">
                        <h3 class="mt-4 text-xl font-semibold text-gray-900">5 Delicious Idli Recipes</h3>
                        <p class="mt-2 text-gray-600">Try these 5 unique and delicious Idli recipes that are sure to impress
                            your family and friends.</p>
                        <a href="/blog/5-delicious-idli-recipes"
                            class="mt-4 inline-block text-indigo-600 hover:underline">Read More</a>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img src="path/to/blog3.jpg" alt="Blog 3" class="h-48 w-full object-cover rounded-lg">
                        <h3 class="mt-4 text-xl font-semibold text-gray-900">Health Benefits of Idli</h3>
                        <p class="mt-2 text-gray-600">Learn about the numerous health benefits of including Idlis in your
                            diet.</p>
                        <a href="/blog/health-benefits-of-idli"
                            class="mt-4 inline-block text-indigo-600 hover:underline">Read More</a>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img src="path/to/blog4.jpg" alt="Blog 4" class="h-48 w-full object-cover rounded-lg">
                        <h3 class="mt-4 text-xl font-semibold text-gray-900">Perfect Idli Batter Tips</h3>
                        <p class="mt-2 text-gray-600">Get the best tips and tricks for making the perfect Idli batter every
                            time.</p>
                        <a href="/blog/perfect-idli-batter-tips"
                            class="mt-4 inline-block text-indigo-600 hover:underline">Read More</a>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img src="path/to/blog5.jpg" alt="Blog 5" class="h-48 w-full object-cover rounded-lg">
                        <h3 class="mt-4 text-xl font-semibold text-gray-900">Idli Varieties Around India</h3>
                        <p class="mt-2 text-gray-600">Explore the different varieties of Idli from various regions of India.
                        </p>
                        <a href="/blog/idli-varieties-around-india"
                            class="mt-4 inline-block text-indigo-600 hover:underline">Read More</a>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img src="path/to/blog6.jpg" alt="Blog 6" class="h-48 w-full object-cover rounded-lg">
                        <h3 class="mt-4 text-xl font-semibold text-gray-900">Idli Making Equipment Guide</h3>
                        <p class="mt-2 text-gray-600">A comprehensive guide to the best equipment for making Idlis at home.
                        </p>
                        <a href="/blog/idli-making-equipment-guide"
                            class="mt-4 inline-block text-indigo-600 hover:underline">Read More</a>
                    </div>
                </div>
            </section>
        </main>
    </div>
@endsection
