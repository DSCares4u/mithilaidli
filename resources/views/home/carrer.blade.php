@extends('home.homebase')
@section('content')
<div class="bg-gray-100 text-gray-800">
    <main class="container mx-auto px-6 py-12">
        <section class="text-center">
            <h2 class="text-4xl font-semibold text-gray-900">Our Story</h2>
            <p class="mt-4 text-lg text-gray-600">Discover the journey behind Mithila Idli and our passion for authentic South Indian cuisine.</p>
        </section>
        <div class="flex mt-12">
            <div class=" w-3/4 " id="callingHire">
                <div class="card w-3/4 mb-4 capitalize">
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
                </div>
                <div class="card w-3/4 mb-4 capitalize">
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
                </div>
                <div class="card w-3/4 mb-4 capitalize">
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
                </div>
            </div>
        </div>
    </main>
</div>
    {{-- <script>
        $(document).ready(function() {
            let callingSarkariJobs = () => {
                $.ajax({
                        type: "GET",
                        url: "{{ route('role.index') }}",
                        success: function(response) {
                            let table = $("#callingHire");
                            table.empty();
                            let data = response.data;

                            data.forEach((job) => {

                                // Check if the user is logged in
                                @auth
                                let logIn = true; // User is logged in
                                @else
                                    let logIn = false; // User is not logged in
                                @endauth
                                if (!logIn) {
                                    if (job.isApproved == true) {
                                        // Generate logo using the first letter of the job name if no logo is provided
                                        let logo = job.hire.logo ? ` <img src="/image/company/logo/${job.hire.logo}" class="rounded w-12 h-12" alt="">` : `<div class="generated-logo rounded w-12 h-12 flex items-center justify-center bg-gray-300 text-white font-bold text-xl">${job.hire.company_name.charAt(0)}</div>`;

                                    table.append(`
                                            <div class="card w-3/4 mb-4 capitalize">
                                                <div class="block max-w-full p-4 bg-white border border-purple-300 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                                    <div class="flex justify-between">
                                                        <div class="flex gap-5">
                                                            <div class="logo">
                                                                ${logo}
                                                            </div>
                                                            <div class="name flex-col flex">
                                                                <h5 class="font-semibold text-black">${job.title}</h5>
                                                                <p class="text-gray-500 text-sm capitalize">${job.hire.company_name}</p>
                                                                <p class="text-gray-500 text-xs capitalize">${job.hire.city},${job.hire.state}</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <p class="text-gray-600 text-sm"><strong class="text-red-600">Opening Date: </strong>${job.hire.date_of_start}</p>
                                                            <p class="text-gray-600 text-sm"><strong class="text-blue-600">Website: </strong><a target="_blank" href='${job.hire.website}' class='lowercase hover:underline'>${job.hire.website}</a></p>
                                                            <div class="mb-2">
                                                                <h5 class="text-sm font-normal flex gap-2"><p class='font-semibold text-gray-500'>No. of Post: </p><p class="text-sm">${job.no_of_post}</p></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="body mt-2 mb-2">
                                                        <h5 class="text-sm font-normal text-gray-500 flex gap-2"><p class='font-semibold text-gray-500'>Job Profile: </p><p class="text-sm">${job.profile}</p></h5>
                                                    </div>
                                                    <div class="mb-2 mt-2">
                                                        <h5 class="text-sm font-normal text-gray-500 flex gap-2"><p class='font-semibold text-gray-500'>Job Type: </p><p class="text-sm">${job.type}</p></h5>
                                                    </div>
                                                    <div class="main flex justify-start text-gray-500">
                                                        <div class="mb-2">
                                                            <h5 class="text-sm font-normal flex gap-2"><p class='font-semibold text-gray-500'>Experience: </p><p class="text-sm">${job.min_experience}-${job.max_experience} Years</p></h5>
                                                        </div>
                                                    </div>
                                                    <div class="main flex justify-start text-gray-500">
                                                        <div class="mb-2">
                                                            <h5 class="text-sm font-normal flex gap-2"><p class='font-semibold text-gray-500'>Language Required: </p><p class="text-sm">${job.preferred_lang}</p></h5>
                                                        </div>
                                                    </div>
                                                    <div class="main flex justify-start text-gray-500">
                                                        <div class="mb-2">
                                                            <h5 class="text-sm font-normal flex gap-2"><p class='font-semibold text-gray-500'>Qualification: </p><p class="text-sm">${job.qualification}</p></h5>
                                                        </div>
                                                    </div>
                                                    <div class="main flex justify-start text-gray-500">
                                                        <div class="mb-2">
                                                            <h5 class="text-sm font-normal flex gap-2"><p class='font-semibold text-gray-500'>Salary: </p><p><i class="fa-solid fa-indian-rupee-sign fa-xs"></i>${job.min_salary}</p> -<p><i class="fa-solid fa-indian-rupee-sign fa-xs"></i>${job.max_salary}</p></h5>
                                                        </div>
                                                    </div>
                                                    <hr class="bg-gray-500">
                                                    <div class="footer flex gap-6 font-medium mt-2 capitalize text-xs">
                                                        <p class="description line-clamp-2">${job.hire.description}</p>
                                                        <button class="toggleButton text-blue-500"><i class="fa-solid fa-angle-down"></i></button>
                                                    </div>
                                                    <div class="button flex gap-5 mt-5">
                                                        <a href="/viewPrivateJobForm/${job.id}" class="bg-green-600 rounded hover:bg-green-700 text-center text-white py-1 w-1/2">Apply For Job</a>
                                                        <button class="share-btn rounded text-green-700 border border-green-700 text-center px-auto flex justify-center py-1 w-1/2" data-share-url="/viewPrivateJobForm/${job.id}"><img src="/icons/share.png" class="h-6 mr-1" alt="">Share</button>
                                                    </div>
                                                </div>
                                            </div>
                                        `);
                                    }
                                } else {

                                    // Check if the user has already applied for this job
                                    $.ajax({
                                        type: "GET",
                                        url: `/checkApplicationStatus/${job.id}`, // The endpoint
                                        success: function(applicationResponse) {
                                            let applyButton;
                                            if (applicationResponse.already_applied) {
                                                alert('true');
                                                applyButton =
                                                    `<button class="bg-gray-600 rounded text-center text-white py-1 w-1/2" disabled>Already Applied</button>`;
                                            } else {
                                                applyButton =
                                                    `<a href="/viewPrivateJobForm/${job.id}" class="bg-green-600 rounded hover:bg-green-700 text-center text-white py-1 w-1/2">Apply For Job</a>`;
                                            }

                                            if (job.isApproved == true) {
                                                 // Generate logo using the first letter of the job name if no logo is provided
                                                let logo = job.hire.logo ? ` <img src="/image/company/logo/${job.hire.logo}" class="rounded w-12 h-12" alt="">` : `<div class="generated-logo rounded w-12 h-12 flex items-center justify-center bg-gray-300 text-white font-bold text-xl">${job.hire.company_name.charAt(0)}</div>`;

                                                table.append(`
                                                    <div class="card w-3/4 mb-4 capitalize">
                                                        <div class="block max-w-full p-4 bg-white border border-purple-300 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                                            <div class="flex justify-between">
                                                                <div class="flex gap-5">
                                                                    <div class="logo">
                                                                        ${logo}
                                                                    </div>
                                                                    <div class="name flex flex-col">
                                                                        <h5 class="font-semibold text-black">${job.title}</h5>
                                                                        <p class="text-gray-500 text-sm capitalize">${job.hire.company_name}</p>
                                                                        <p class="text-gray-500 text-xs capitalize">${job.hire.city},${job.hire.state}</p>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <p class="text-gray-600 text-sm"><strong class="text-red-600">Opening Date: </strong>${job.hire.date_of_start}</p>
                                                                    <p class="text-gray-600 text-sm"><strong class="text-blue-600">Website: </strong><a target="_blank" href='${job.hire.website}' class='lowercase hover:underline'>${job.hire.website}</a></p>
                                                                    <div class="mb-2">
                                                                        <h5 class="text-sm font-normal flex gap-2"><p class='font-semibold text-gray-500'>No. of Post: </p><p class="text-sm">${job.no_of_post}</p></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="body mt-2 mb-2">
                                                                <h5 class="text-sm font-normal text-gray-500 flex gap-2"><p class='font-semibold text-gray-500'>Job Profile: </p><p class="text-sm">${job.profile}</p></h5>
                                                            </div>
                                                            <div class="mb-2 mt-2">
                                                                <h5 class="text-sm font-normal text-gray-500 flex gap-2"><p class='font-semibold text-gray-500'>Job Type: </p><p class="text-sm">${job.type}</p></h5>
                                                            </div>
                                                            <div class="main flex justify-start text-gray-500">
                                                                <div class="mb-2">
                                                                    <h5 class="text-sm font-normal flex gap-2"><p class='font-semibold text-gray-500'>Experience: </p><p class="text-sm">${job.min_experience}-${job.max_experience} Years</p></h5>
                                                                </div>
                                                            </div>
                                                            <div class="main flex justify-start text-gray-500">
                                                                <div class="mb-2">
                                                                    <h5 class="text-sm font-normal flex gap-2"><p class='font-semibold text-gray-500'>Language Required: </p><p class="text-sm">${job.preferred_lang}</p></h5>
                                                                </div>
                                                            </div>
                                                            <div class="main flex justify-start text-gray-500">
                                                                <div class="mb-2">
                                                                    <h5 class="text-sm font-normal flex gap-2"><p class='font-semibold text-gray-500'>Qualification: </p><p class="text-sm">${job.qualification}</p></h5>
                                                                </div>
                                                            </div>
                                                            <div class="main flex justify-start text-gray-500">
                                                                <div class="mb-2">
                                                                    <h5 class="text-sm font-normal flex gap-2"><p class='font-semibold text-gray-500'>Salary: </p><p><i class="fa-solid fa-indian-rupee-sign fa-xs"></i>${job.min_salary}</p> -<p><i class="fa-solid fa-indian-rupee-sign fa-xs"></i>${job.max_salary}</p></h5>
                                                                </div>
                                                            </div>
                                                            <hr class="bg-gray-500">
                                                            <div class="footer flex gap-6 font-medium mt-2 capitalize text-xs">
                                                                <p class="description line-clamp-2">${job.hire.description}</p>
                                                                <button class="toggleButton text-blue-500"><i class="fa-solid fa-angle-down"></i></button>
                                                            </div>
                                                            <div class="button flex gap-5 mt-5">
                                                                ${applyButton}
                                                                <button class="share-btn rounded text-green-700 border border-green-700 text-center px-auto flex justify-center py-1 w-1/2" data-share-url="/viewPrivateJobForm/${job.id}"><img src="/icons/share.png" class="h-6 mr-1" alt="">Share</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                `);
                                            }
                                        },
                                        error: function(xhr, status, error) {
                                            console.error(
                                                'Error checking application status:',
                                                error);
                                        }
                                    });
                                }
                            });

                        $(".share-btn").on("click", function() {
                            let shareUrl = $(this).data("share-url");
                            if (navigator.share) {
                                navigator.share({
                                    title: 'Job Opportunity',
                                    url: shareUrl,
                                }).then(() => {
                                    console.log('Thanks for sharing!');
                                }).catch(console.error);
                            } else {
                                // Fallback for browsers that do not support the Web Share API
                                prompt("Copy this link to share:", shareUrl);
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
        };

        // Toggle button functionality
        $(document).on('click', '.toggleButton', function() {
            const description = $(this).siblings('.description');
            if (description.hasClass('line-clamp-2')) {
                description.removeClass('line-clamp-2');
                $(this).html('<i class="fa-solid fa-angle-up"></i>');
            } else {
                description.addClass('line-clamp-2');
                $(this).html('<i class="fa-solid fa-angle-down"></i>');
            }
        });

        callingSarkariJobs();
        });
    </script> --}}
@endsection