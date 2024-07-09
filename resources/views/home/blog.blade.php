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
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3" id="callingData"></div>
            </section>
        </main>
    </div>

    <script>
        $(document).ready(function() {
            // Function to fetch and display YouTube video data
            let fetchYouTubeData = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('blog.index') }}", // Replace with your route to fetch YouTube video data
                    success: function(response) {
                        let card = $("#callingData");
                        card.empty();
                        let videos = response.data;
                        videos.forEach((video) => {
                            card.append(`
                                <div class="bg-white p-4 rounded-lg shadow-lg">
                                    <div class='text-center'>
                                        <iframe width="100%" height="315" src="${getYouTubeEmbedUrl(video.link)}" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <h3 class="mt-4 text-xl font-semibold text-gray-900">${video.title}</h3>
                                    <p class="mt-2 text-gray-600">${video.description}</p>
                                    <a href="${video.link}" target="_blank" rel="noopener noreferrer" class="mt-4 inline-block text-indigo-600 hover:underline">Watch on YouTube</a>
                                </div>
                            `);
                            console.log(getYouTubeEmbedUrl(video.link));
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            };
    
            // Function to get YouTube embed URL
            function getYouTubeEmbedUrl(link) {
                let videoId = getYouTubeVideoId(link);
                return `https://www.youtube.com/embed/${videoId}?autoplay=0&enablejsapi=1&controls=1&fs=1&rel=0&modestbranding=1&iv_load_policy=3`;
            }
    
            // Helper function to extract YouTube video ID
            function getYouTubeVideoId(url) {
                if (url.includes('/shorts/')) {
                    // If URL contains '/shorts/', extract video ID from shorts link
                    let videoId = url.match(/\/shorts\/([a-zA-Z0-9_-]{11})/);
                    if (videoId) {
                        return videoId[1];
                    }
                } else if (url.includes('youtu.be/')) {
                    // If URL contains 'youtu.be/', extract video ID from regular YouTube link
                    let videoId = url.match(/youtu\.be\/([a-zA-Z0-9_-]{11})/);
                    if (videoId) {
                        return videoId[1];
                    }
                } else if (url.includes('/embed/')) {
                    // If URL contains '/embed/', extract video ID from embed link
                    let parts = url.split('/');
                    let videoId = parts[parts.length - 1];
                    return videoId;
                } else {
                    // Default: extract video ID from regular YouTube link
                    let parts = url.split('/');
                    let videoId = parts[parts.length - 1];
                    return videoId;
                }
                return null; // Return null if no valid ID found
            }
    
            // Initial call to fetch YouTube data
            fetchYouTubeData();
        });
    </script>
    

 {{-- code working but only for y-shorts  --}}
    {{-- <script>
        $(document).ready(function() {
            // Function to fetch and display YouTube video data
            let fetchYouTubeData = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('blog.index') }}", // Replace with your route to fetch YouTube video data
                    success: function(response) {
                        let card = $("#callingData");
                        card.empty();
                        let videos = response.data;
                        videos.forEach((video) => {
                            card.append(`
                                <div class="bg-white p-4 rounded-lg shadow-lg">
                                    <div class='text-center'>
                                        <iframe width="100%" height="315" src="${getYouTubeEmbedUrl(video.link)}" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <h3 class="mt-4 text-xl font-semibold text-gray-900">${video.title}</h3>
                                    <p class="mt-2 text-gray-600">${video.description}</p>
                                    <a href="${video.link}" target="_blank" rel="noopener noreferrer" class="mt-4 inline-block text-indigo-600 hover:underline">Watch on YouTube</a>
                                </div>
                            `);
                            console.log(getYouTubeEmbedUrl(video.link));
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            };

            // Function to get YouTube embed URL
            function getYouTubeEmbedUrl(link) {
                let videoId = getYouTubeVideoId(link);
                return `https://www.youtube.com/embed/${videoId}?autoplay=0&enablejsapi=1&controls=1&fs=1&rel=0&modestbranding=1&iv_load_policy=3`;
            }

            // Helper function to extract YouTube video ID
            function getYouTubeVideoId(url) {
                if (url.includes('/shorts/')) {
                    // If URL contains '/shorts/', extract video ID from shorts link
                    let videoId = url.match(/\/shorts\/([a-zA-Z0-9_-]{11})/)[1];
                    return videoId;
                } else if (url.includes('youtu.be/')) {
                    // If URL contains 'youtu.be/', extract video ID from regular YouTube link
                    let videoId = url.match(/youtu\.be\/([a-zA-Z0-9_-]{11})/)[1];
                    return videoId;
                } else if (url.includes('/embed/')) {
                    const parts = url.split('/'); // Split URL by '/'
                    const videoId = parts[parts.length - 1]; // Last part of the URL is the video ID
                    return videoId;
                } else {
                    const parts = url.split('/'); // Split URL by '/'
                    const videoId = parts[parts.length - 1]; // Last part of the URL is the video ID
                    return videoId;
                }
            }

            // Initial call to fetch YouTube data
            fetchYouTubeData();
        });
    </script> --}}


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
