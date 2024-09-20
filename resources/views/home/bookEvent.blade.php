@extends('home.homeBase')
@section('title', 'Event booking')
@section('content')
    <div class="bg-gray-200 flex justify-center items-center px-10 h-screen">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
            <h2 class="text-2xl font-bold mb-6 text-center">Online Event Booking Form</h2>
            <form action="#" method="POST" class="space-y-4" id="addData">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" id="name" name="name"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <p id="error-name" class="text-red-500 text-xs font-semibold error-message"></p>
                </div>
                <div>
                    <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile Number</label>
                    <input type="tel" id="mobile" name="mobile" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <p id="error-mobile" class="text-red-500 text-xs font-semibold error-message"></p>
                </div>
                <div>
                    <label for="event_type" class="block text-sm font-medium text-gray-700">Booking For</label>
                    <select name="event_type" id="event_type" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="">Select Event Type</option>
                        <option value="weedding party">Weedding Party</option>
                        <option value="birthday party">Birthday Party</option>
                        <option value="Anniversary party">Anniversary Party</option>
                        <option value="kitty party">Kitty Party</option>
                        <option value="office party">Office Party</option>
                        <option value="other event">Any Other Event</option>
                    </select>                        
                    <p id="error-event_type" class="text-red-500 text-xs font-semibold error-message"></p>
                </div>
                <div>
                    <label for="booking_date" class="block text-sm font-medium text-gray-700">Booking Date</label>
                    <input type="date" id="booking_date" name="booking_date" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <p id="error-booking_date" class="text-red-500 text-xs font-semibold error-message"></p>
                </div>
                <div>
                    <label for="address" class="block text-sm font-medium text-gray-700">Event Venue</label>
                    <textarea id="address" name="address" rows="2" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                    <p id="error-address" class="text-red-500 text-xs font-semibold error-message"></p>
                </div>
                <div>
                    <label for="quantity" class="block text-sm font-medium text-gray-700">Approx Quantity (1 Plate = 2 piece idli)</label>
                    <input type="number" id="quantity" name="quantity" min="1"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <p id="error-quantity" class="text-red-500 text-xs font-semibold error-message"></p>
                </div>
                <div class="flex justify-between items-center">
                    <label class="flex items-center text-sm font-medium text-gray-700">
                        <input type="checkbox" name="terms" class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                        <span class="ml-2">I agree to the terms and conditions</span>
                    </label>
                </div>
                <div>
                    <button type="submit"
                        class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Confirm
                        Order</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Insert application details
            $("#addData").submit(function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "{{ route('book.event.store') }}",
                    data: formData,
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        swal("Thanking You", response.message, "success");
                        $("#addData").trigger("reset");
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
        })
    </script>
@endsection
