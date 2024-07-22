@extends('home.homebase')
@section('content')
    <!-- Cart Locator Content -->
    <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg mt-6 mb-5">
        <div class="heading mb-6 text-center">
            <h2 class="text-3xl font-semibold text-gray-800">Find a Mithila idli Cart Near You</h2>
            <p class="text-gray-600 mt-2">Locate our delicious idli carts using the given location below or call us directly.</p>
        </div>
        <div class="flex flex-wrap justify-center">
            {{-- <div class="w-full lg:w-2/3 mb-8">
                <div class="map-container w-full h-96 bg-gray-200 rounded-lg shadow-md overflow-hidden">
                    <iframe class="w-full h-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.4729236097845!2d-122.406417684676!3d37.78583417975609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808581d74b4d5b73%3A0xa4b3a7e3d57f4f!2sUnion%20Square!5e0!3m2!1sen!2sus!4v1622195123443!5m2!1sen!2sus"
                        frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div> --}}
            <div class="w-full lg:w-1/3 mt-10 lg:mt-0 lg:ml-10">
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img src="/logo/cart-1.jpg" alt="Founders" class="h-48 w-full object-cover rounded-lg">
                        <h3 class="mt-4 text-xl font-semibold text-gray-900">Near Astha Mandir</h3>
                        <p class="mt-2 text-gray-600">Astha Mandir, Taxi stand, Purnea, Bihar</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img src="/logo/cart-2.jpg" alt="Traditional Recipes" class="h-48 w-full object-cover rounded-lg">
                        <h3 class="mt-4 text-xl font-semibold text-gray-900">Polytechnic Chowk</h3>
                        <p class="mt-2 text-gray-600">Polytechnic Chowk, Purnea, Bihar</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img src="/logo/cart-3.jpg" alt="Traditional Recipes" class="h-48 w-full object-cover rounded-lg">
                        <h3 class="mt-4 text-xl font-semibold text-gray-900">Line Bazar Chowk</h3>
                        <p class="mt-2 text-gray-600">Line Bazar Chowk Purnea, Bihar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap" async defer>
    </script>
@endsection
