@extends('home.homebase')
@section('content')
    <!-- Cart Locator Content -->
    <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg mt-6 mb-5">
        <div class="heading mb-6 text-center">
            <h2 class="text-3xl font-semibold text-gray-800">Find a Mithila idli Cart Near You</h2>
            <p class="text-gray-600 mt-2">Locate our delicious idli carts using the map below or enter your location for
                directions.</p>
        </div>
        <div class="flex flex-wrap justify-center">
            <div class="w-full lg:w-2/3 mb-8">
                <!-- Map Embed -->
                <div class="map-container w-full h-96 bg-gray-200 rounded-lg shadow-md overflow-hidden">
                    <iframe class="w-full h-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.4729236097845!2d-122.406417684676!3d37.78583417975609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808581d74b4d5b73%3A0xa4b3a7e3d57f4f!2sUnion%20Square!5e0!3m2!1sen!2sus!4v1622195123443!5m2!1sen!2sus"
                        frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="w-full lg:w-1/3 mt-10 lg:mt-0 lg:ml-10">
                <!-- Location Input -->
                <div class="bg-white border p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-800">Enter Your Location</h3>
                    <form id="locationForm" class="mt-4">
                        <div class="mb-4">
                            <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                            <input type="text" id="location" name="location"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="flex justify-end">
                            <button type="submit"
                                class="px-4 py-2 bg-[#0be881] text-white rounded-lg hover:bg-green-600">Find Cart</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function initMap() {
            const map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 37.774929, lng: -122.419416 },
                zoom: 13
            });
    
            const carts = [
                { lat: 37.785834, lng: -122.406417, name: "Union Square Cart" },
                { lat: 37.774929, lng: -122.419416, name: "Market Street Cart" }
                // Add more cart locations here
            ];
    
            carts.forEach(cart => {
                new google.maps.Marker({
                    position: { lat: cart.lat, lng: cart.lng },
                    map: map,
                    title: cart.name
                });
            });
    
            const geocoder = new google.maps.Geocoder();
    
            document.getElementById('locationForm').addEventListener('submit', function(event) {
                event.preventDefault();
                const location = document.getElementById('location').value;
                geocodeAddress(geocoder, map, location);
            });
        }
    
        function geocodeAddress(geocoder, map, address) {
            geocoder.geocode({ 'address': address }, function(results, status) {
                if (status === 'OK') {
                    map.setCenter(results[0].geometry.location);
                    new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location
                    });
                } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            });
        }
    </script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap" async defer></script>
    
@endsection

