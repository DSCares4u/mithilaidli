@extends('home.homeBase')
@section('content')
    <div class="bg-[#353b48] h-full">
        <div class="main flex w-full py-20 h-screen ">
            <div class="w-1/2 px-6">
                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="carousel-item active duration-700 ease-in-out" data-carousel-item>
                            <img src="/logo/idli3.JPG"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="carousel-item duration-700 ease-in-out" data-carousel-item>
                            <img src="/logo/idli2.JPG"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="carousel-item duration-700 ease-in-out" data-carousel-item>
                            <img src="/logo/idli1.png"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 4 -->
                        <div class="carousel-item duration-700 ease-in-out" data-carousel-item>
                            <img src="/logo/idli1.png"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="carousel-item duration-700 ease-in-out" data-carousel-item>
                            <img src="/logo/idli2.JPG"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                            data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                            data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                            data-carousel-slide-to="4"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="w-1/2 px-6 ">
                <h3 class="text-6xl text-white font-bold leading-snug mb-3">
                    START YOUR DAY WITH OUR TASTY AND DELICIOUS MITHILA IDLI.
                </h3>
                <p class="text-white font-medium  border-t-2 border-yellow-600  pt-2">To create new entrepreneurs by opening
                    branches at different places and through it to provide employment to numerous youths.</p>
                <button
                    class="px-3 py-2 font-medium text-[#353b48] bg-yellow-600 hover:bg-yellow-700 hover:text-black mt-2 rounded-lg "><i
                        class="fa-solid fa-circle-arrow-right"></i> Enjoy Our Special Idlis</button>
            </div>
        </div>
        <div class="card flex gap-10 px-8">
            <div class="w-1/2 flex bg-black px-4 py-12 rounded-xl">
                <div class="w-3/4 text-white">
                    <h3 class="text-3xl font-semibold">THE GREAT TASTE FROM THE SOUTH INDIA</h3>
                    <p class="text-base">Best breakfast in the town</p>
                </div>
                <div class="w-1/4">
                    <img src="/logo/idli5.png" alt="" class="h-40 ">
                </div>
            </div>
            <div class="w-1/2 flex bg-black px-4 py-12 rounded-xl">
                <div class="w-3/4 text-white">
                    <h3 class="text-3xl font-semibold">SPEND YOUR DAY WITH A CUP OF HOT COFEE</h3>
                    <p class="text-base">perfect mode for the day</p>
                </div>
                <div class="w-1/4">
                    <img src="/logo/cofee.png" alt="" class="h-40">
                </div>
            </div>
        </div>
        <div class="main flex w-full py-20 h-screen px-20">
            <div class="w-1/2 px-6 rounded-xl"><img src="/logo/idli4.jpg" class="h-80 rounded-xl" alt="">
            </div>
            <div class="w-1/2 px-6 ">
                <h3 class="text-4xl text-white font-bold leading-snug mb-3">
                    FIND YOUR BEST TASTED FOOD & DRINK JUST IN ONE PLACE                </h3>
                <p class="text-white font-medium  border-t-2 border-yellow-600  pt-2">The taste of southexidli idli is because of these things that creep on everyone’s tongue and remind them constantly. There will be no oily feeling while tasting the Sambar and Chutney made from wet coconut, which gives a sweet taste to the tongue. People are fans of it.</p>
                <button
                    class="px-3 py-2 font-medium text-[#353b48] bg-yellow-600 hover:bg-yellow-700 hover:text-black mt-2 rounded-md "><i
                        class="fa-solid fa-circle-arrow-right"></i> About Us</button>
            </div>
        </div>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const items = document.querySelectorAll('[data-carousel-item]');
            let currentIndex = 0;

            function showItem(index) {
                items.forEach((item, i) => {
                    item.classList.toggle('hidden', i !== index);
                    item.classList.toggle('active', i === index);
                });
            }

            document.querySelector('[data-carousel-prev]').addEventListener('click', () => {
                currentIndex = (currentIndex > 0) ? currentIndex - 1 : items.length - 1;
                showItem(currentIndex);
            });

            document.querySelector('[data-carousel-next]').addEventListener('click', () => {
                currentIndex = (currentIndex < items.length - 1) ? currentIndex + 1 : 0;
                showItem(currentIndex);
            });

            document.querySelectorAll('[data-carousel-slide-to]').forEach((button, index) => {
                button.addEventListener('click', () => {
                    currentIndex = index;
                    showItem(currentIndex);
                });
            });
        });
    </script>
@endsection
