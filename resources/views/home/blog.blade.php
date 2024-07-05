@extends('home.homeBase')
@section('content')
    <div class="bg-gray-100 text-gray-800">
        <main class="container mx-auto px-6 py-12">
            <section class="text-center">
                <h2 class="text-4xl font-semibold text-gray-900">Our Blog</h2>
                <p class="mt-4 text-lg text-gray-600">Explore our latest articles, recipes, and tips on South Indian cuisine.
                </p>
            </section>

            <section class="mt-12 ">
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3"  id="callingData"></div>
            </section>
        </main>
    </div>


    <script>
        $(document).ready(function() {
            // Function to fetch and display blog data
            let fetchBlogData = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('blog.index') }}",
                    success: function(response) {
                        let card = $("#callingData");
                        card.empty();
                        let data = response.data;
                        data.forEach((data) => {
                            card.append(`
                                <div class="bg-white p-4 rounded-lg shadow-lg">
                                    <div class='text-center'>
                                        <iframe width="100%" height="315" src="${data.link}" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <h3 class="mt-4 text-xl font-semibold text-gray-900">${data.title}</h3>
                                    <p class="mt-2 text-gray-600">${data.description}</p>
                                    <a href="${data.link}" target="_blank" rel="noopener noreferrer" class="mt-4 inline-block text-indigo-600 hover:underline">Read More</a>
                                </div>
                            `);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            };
    
            // Initial call to fetch blog data
            fetchBlogData();
        });
    </script>
    

    {{-- below code is working properly  --}}

    {{-- <script>
        $(document).ready(function() {
            // Function to fetch and display appointment
            let callingData = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('blog.index') }}",
                    success: function(response) {
                        let card = $("#callingData");
                        card.empty();
                        let data = response.data;
                        data.forEach((data) => {
                            card.append(`
                                <div class="bg-white p-4 rounded-lg shadow-lg ">
                                    <div class='text-center'>
                                        <img src="/blog/image/${data.image}" alt="Blog 1" class="h-64 w-full object-cover rounded-lg mx-auto">
                                    </div>
                                    <h3 class="mt-4 text-xl font-semibold text-gray-900">${data.title}</h3>
                                    <p class="mt-2 text-gray-600">${data.description}</p>
                                    <a href="${data.link}" target="_blank" rel="noopener noreferrer" class="mt-4 inline-block text-indigo-600 hover:underline">Read More</a>
                                </div>
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
    </script> --}}
@endsection
