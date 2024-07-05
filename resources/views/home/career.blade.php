@extends('home.homebase')
@section('content')
<div class="bg-gray-100 text-gray-800">
    <main class="container mx-auto px-6 py-12">
        <section class="text-center">
            <h2 class="text-4xl font-semibold text-gray-900">Our Story</h2>
            <p class="mt-4 text-lg text-gray-600">Discover the journey behind Mithila Idli and our passion for authentic South Indian cuisine.</p>
        </section>
        <div class="flex mt-12">
            <div class=" w-3/4 " id="callingData">
                {{-- <div class="card w-3/4 mb-4 capitalize">
                    <div
                        class="block max-w-full p-4 bg-white border border-purple-300 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <div class="flex justify-between">
                            <div class="flex gap-5">
                                <div class="logo">
                                    <img src="/logo/cofee.png" class="rounded w-20 h-20" alt="">
                                </div>
                                <div class="name flex-col flex">
                                    <h5 class="font-semibold text-black">Telecaller</h5>
                                    <p class="text-gray-500 text-sm capitalize">Mkdf</p>
                                    <p class="text-gray-500 text-xs capitalize">Purnea, Bihar</p>
                                </div>
                            </div>
                            <div>
                                <p class="text-gray-600 text-sm"><strong class="text-red-600">Opening Date:
                                    </strong>12-02-2024</p>
                                <p class="text-gray-600 text-sm"><strong class="text-blue-600">Website: </strong><a
                                        target="_blank" href='${job.hire.website}'
                                        class='lowercase hover:underline'>www.abc.com</a></p>
                                <div class="mb-2">
                                    <h5 class="text-sm font-normal flex gap-2">
                                        <p class='font-semibold text-gray-500'>No. of Post: </p>
                                        <p class="text-sm">20</p>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="body mt-2 mb-2">
                            <h5 class="text-sm font-normal text-gray-500 flex gap-2">
                                <p class='font-semibold text-gray-500'>Job Profile: </p>
                                <p class="text-sm">Telecaller</p>
                            </h5>
                        </div>
                        <div class="mb-2 mt-2">
                            <h5 class="text-sm font-normal text-gray-500 flex gap-2">
                                <p class='font-semibold text-gray-500'>Job Type: </p>
                                <p class="text-sm">Permanent</p>
                            </h5>
                        </div>
                        <div class="main flex justify-start text-gray-500">
                            <div class="mb-2">
                                <h5 class="text-sm font-normal flex gap-2">
                                    <p class='font-semibold text-gray-500'>Experience: </p>
                                    <p class="text-sm">0-3 Years</p>
                                </h5>
                            </div>
                        </div>
                        <div class="main flex justify-start text-gray-500">
                            <div class="mb-2">
                                <h5 class="text-sm font-normal flex gap-2">
                                    <p class='font-semibold text-gray-500'>Language Required: </p>
                                    <p class="text-sm">English & Hindi</p>
                                </h5>
                            </div>
                        </div>
                        <div class="main flex justify-start text-gray-500">
                            <div class="mb-2">
                                <h5 class="text-sm font-normal flex gap-2">
                                    <p class='font-semibold text-gray-500'>Qualification: </p>
                                    <p class="text-sm">Graduated</p>
                                </h5>
                            </div>
                        </div>
                        <div class="main flex justify-start text-gray-500">
                            <div class="mb-2">
                                <h5 class="text-sm font-normal flex gap-2">
                                    <p class='font-semibold text-gray-500'>Salary: </p>
                                    <p><i class="fa-solid fa-indian-rupee-sign fa-xs"></i>10000</p> -<p><i
                                            class="fa-solid fa-indian-rupee-sign fa-xs"></i>20000</p>
                                </h5>
                            </div>
                        </div>
                        <hr class="bg-gray-500">
                        <div class="footer flex gap-6 font-medium mt-2 capitalize text-xs">
                            <p class="description line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum magni, repellat asperiores nulla error incidunt necessitatibus, exercitationem fuga dicta dolor optio voluptatum accusamus fugit eveniet, maxime quos soluta. Harum cum ea enim necessitatibus a in numquam laudantium? Ad aliquam qui dignissimos vero illo dolor, praesentium commodi sequi eos quo voluptatem a, eligendi vitae quaerat minus nisi assumenda laudantium. Fuga, laborum minima doloremque temporibus accusamus placeat delectus explicabo dignissimos doloribus, animi magni praesentium. Rem distinctio unde nemo voluptate mollitia temporibus, incidunt excepturi vitae odit! Ea odio eveniet impedit dolorem tenetur quos porro, dolores iste eum in, laboriosam deserunt delectus inventore nihil.</p>
                            <button class="toggleButton text-blue-500"><i class="fa-solid fa-angle-down"></i></button>
                        </div>
                        <div class="button flex gap-5 mt-5">
                            <a href="/viewPrivateJobForm/${job.id}"
                                class="bg-green-600 rounded hover:bg-green-700 text-center text-white py-1 w-1/2">Apply For
                                Job</a>
                            <button
                                class="share-btn rounded text-green-700 border border-green-700 text-center px-auto flex justify-center py-1 w-1/2"
                                data-share-url="/viewPrivateJobForm/${job.id}"><img src="/icons/share.png" class="h-6 mr-1"
                                    alt="">Share</button>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </main>
</div>
<script>
    $(document).ready(function() {
        // Function to fetch and display appointment
        let callingData = () => {
            $.ajax({
                type: "GET",
                url: "{{ route('career.index') }}",
                success: function(response) {
                    let card = $("#callingData");
                    card.empty();
                    let data = response.data;

                    data.forEach((data) => {
                        card.append(`
                        <div class="card w-3/4 mb-4 capitalize">
                            <div
                                class="block max-w-full p-4 bg-white border border-purple-300 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                <div class="flex justify-between">
                                    <div class="flex gap-5">
                                        <div class="logo">
                                            <img src="/career/image/${data.image}" class="rounded w-20 h-20" alt="">
                                        </div>
                                        <div class="name flex-col flex">
                                            <h5 class="font-semibold text-black">${data.title}</h5>
                                            <p class="text-gray-500 text-sm capitalize">${data.company}</p>
                                            <p class="text-gray-500 text-xs capitalize">${data.city},${data.state}</p>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="text-gray-600 text-sm"><strong class="text-red-600">Opening Date:
                                            </strong>12-02-2024</p>
                                        <p class="text-gray-600 text-sm"><strong class="text-blue-600">Website: </strong><a
                                                target="_blank" href='${data.website}'
                                                class='lowercase hover:underline'>${data.website}</a></p>
                                        <div class="mb-2">
                                            <h5 class="text-sm font-normal flex gap-2">
                                                <p class='font-semibold text-gray-500'>No. of Post: </p>
                                                <p class="text-sm">${data.no_of_post}</p>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="body mt-2 mb-2">
                                    <h5 class="text-sm font-normal text-gray-500 flex gap-2">
                                        <p class='font-semibold text-gray-500'>Job Profile: </p>
                                        <p class="text-sm">${data.profile}</p>
                                    </h5>
                                </div>
                                <div class="mb-2 mt-2">
                                    <h5 class="text-sm font-normal text-gray-500 flex gap-2">
                                        <p class='font-semibold text-gray-500'>Job Type: </p>
                                        <p class="text-sm">${data.job_type}</p>
                                    </h5>
                                </div>
                                <div class="main flex justify-start text-gray-500">
                                    <div class="mb-2">
                                        <h5 class="text-sm font-normal flex gap-2">
                                            <p class='font-semibold text-gray-500'>Experience: </p>
                                            <p class="text-sm">${data.min_experience}-${data.max_experience} Years</p>
                                        </h5>
                                    </div>
                                </div>
                                <div class="main flex justify-start text-gray-500">
                                    <div class="mb-2">
                                        <h5 class="text-sm font-normal flex gap-2">
                                            <p class='font-semibold text-gray-500'>Language Required: </p>
                                            <p class="text-sm">${data.language}</p>
                                        </h5>
                                    </div>
                                </div>
                                <div class="main flex justify-start text-gray-500">
                                    <div class="mb-2">
                                        <h5 class="text-sm font-normal flex gap-2">
                                            <p class='font-semibold text-gray-500'>Qualification: </p>
                                            <p class="text-sm">${data.qualification}</p>
                                        </h5>
                                    </div>
                                </div>
                                <div class="main flex justify-start text-gray-500">
                                    <div class="mb-2">
                                        <h5 class="text-sm font-normal flex gap-2">
                                            <p class='font-semibold text-gray-500'>Salary: </p>
                                            <p><i class="fa-solid fa-indian-rupee-sign fa-xs"></i>${data.min_salary}</p> -<p><i
                                                    class="fa-solid fa-indian-rupee-sign fa-xs"></i>${data.max_salary}</p>
                                        </h5>
                                    </div>
                                </div>
                                <hr class="bg-gray-500">
                                <div class="footer flex gap-6 font-medium mt-2 capitalize text-xs">
                                    <p class="description line-clamp-2">${data.description}</p>
                                    <button class="toggleButton text-blue-500"><i class="fa-solid fa-angle-down"></i></button>
                                </div>
                                <div class="button flex gap-5 mt-5">
                                    <a href="/career-applied/${data.id}"
                                        class="bg-green-600 rounded hover:bg-green-700 text-center text-white py-1 w-1/2">Apply For
                                        Job</a>
                                    <button
                                        class="share-btn rounded text-green-700 border border-green-700 text-center px-auto flex justify-center py-1 w-1/2"
                                        data-share-url="/career-applied/${data.id}"><img src="/icons/share.png" class="h-6 mr-1"
                                            alt="">Share</button>
                                </div>
                            </div>
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
</script>
@endsection
