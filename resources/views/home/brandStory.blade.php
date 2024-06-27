@extends('home.homeBase')
@section('content')

<div class="bg-gray-100 text-gray-800">
    <main class="container mx-auto px-6 py-12">
        <section class="text-center">
            <h2 class="text-4xl font-semibold text-gray-900">Our Story</h2>
            <p class="mt-4 text-lg text-gray-600">Discover the journey behind Mithila Idli and our passion for authentic South Indian cuisine.</p>
        </section>

        <section class="mt-12">
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="path/to/image1.jpg" alt="Founders" class="h-48 w-full object-cover rounded-lg">
                    <h3 class="mt-4 text-xl font-semibold text-gray-900">Our Beginnings</h3>
                    <p class="mt-2 text-gray-600">Our journey started in a small kitchen with a big dream: to bring the authentic taste of Idlis to everyone.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="path/to/image2.jpg" alt="Traditional Recipes" class="h-48 w-full object-cover rounded-lg">
                    <h3 class="mt-4 text-xl font-semibold text-gray-900">Traditional Recipes</h3>
                    <p class="mt-2 text-gray-600">We stay true to our roots by using traditional recipes passed down through generations.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="path/to/image3.jpg" alt="Fresh Ingredients" class="h-48 w-full object-cover rounded-lg">
                    <h3 class="mt-4 text-xl font-semibold text-gray-900">Fresh Ingredients</h3>
                    <p class="mt-2 text-gray-600">Our commitment to quality starts with using the freshest ingredients in all our dishes.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="path/to/image4.jpg" alt="Community" class="h-48 w-full object-cover rounded-lg">
                    <h3 class="mt-4 text-xl font-semibold text-gray-900">Community Love</h3>
                    <p class="mt-2 text-gray-600">Our success is built on the love and support of our community, who inspire us every day.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="path/to/image5.jpg" alt="Innovation" class="h-48 w-full object-cover rounded-lg">
                    <h3 class="mt-4 text-xl font-semibold text-gray-900">Innovation</h3>
                    <p class="mt-2 text-gray-600">While we honor tradition, we also embrace innovation to bring new and exciting flavors to our customers.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="path/to/image6.jpg" alt="Our Future" class="h-48 w-full object-cover rounded-lg">
                    <h3 class="mt-4 text-xl font-semibold text-gray-900">Our Future</h3>
                    <p class="mt-2 text-gray-600">As we grow, we remain dedicated to our mission of sharing the joy of authentic Idlis with the world.</p>
                </div>
            </div>
        </section>
    </main>
</div>

@endsection