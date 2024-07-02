@extends('admin.adminBase')
@section('content')
    <div class=" flex flex-col  mt-20  justify-between mb-5 ">
        <p class="text-lg font-semibold ">Average Rating of <span id="counting"></span> People is <span>4.5</span></p>
        {{-- <h1 class="text-lg font-semibold  py-2">Ratings (<span id="counting">0</span>)</h1> --}}
    </div>
    <div class="overflow-x-auto">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Id</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Name</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Mobile</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Rating</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Comment</th>
                    </tr>
                </thead>
                <tbody id="callingData"></tbody>
                <tfoot>
                    <tr>
                        <th colspan="10" class="p-3 flex items-center justify-center">
                            <div id="pagination" class=""></div>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    {{-- edit modal --}}
    <div id="default-modal" class="fixed inset-0 z-50 overflow-y-auto hidden" aria-hidden="true">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                role="dialog" aria-modal="true" aria-labelledby="editHirePlanModalLabel">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <h5 class="text-lg font-semibold mb-4">Edit Hire Plan</h5>
                    <form id="editForm" method="POST" enctype="multipart/form-data">
                        <input type="hidden" id="id" name="id">
                        <div class="flex gap-2 mb-4">
                            <div class="w-1/2">
                                <label for="Name" class="block text-sm font-medium text-gray-700">Plan's Name</label>
                                <input type="text" id="name" name="name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="features" class="block text-sm font-medium text-gray-700">Features</label>
                            <textarea name="features" id="features" rows="3"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required></textarea>
                        </div>
                        <div class="mb-4 w-1/2">
                            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                            <input type="number" id="price" name="price"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required placeholder="e.g. 1500">
                        </div>
                        <div class="flex justify-between">
                            <button type="submit"
                                class="inline-block px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Save
                                changes</button>
                            <button type="button" id="cancelEdit"
                                class="inline-block px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">Cancel</button>
                            <button type="button" id="delete"
                                class="delete-btn inline-block px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        $(document).ready(function() {
            // Function to fetch and display appointment
            let callingData = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('rate.index') }}",
                    success: function(response) {
                        let table = $("#callingData");
                        table.empty();
                        let data = response.data;

                        // Update appointment count
                        let total = data.length;
                        $("#counting").html(total);

                        avg = data.rate + total;
                        $("average").html(avg);

                        // alert(avg);

                        data.forEach((data) => {
                            table.append(`
                                <tr class="mt-5">
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.id}</td> 
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.name}</td> 
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.mobile}</td> 
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.rate}</td> 
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.comment}</td> 
                                </tr>    
                            `);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            }
            callingData();
        });
    </script>
@endsection
