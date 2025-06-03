<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="flex-grow"> <!-- Add padding-top to avoid overlap with sticky navbar -->
            <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-2">
                <div class="content" id="main-content">
            <style>
            .carousel {
                position: relative;
                width: 100%;
                overflow: hidden;
                margin: auto;
            }

            .carousel-inner {
                display: flex;
                transition: transform 0.5s ease-in-out;
                width: fit-content;
            }

            .carousel-item {
                min-width: 800px;
                height: 300px;
            }

            .carousel-button {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                z-index: 2;
                background-color: rgba(0, 0, 0, 0.5);
                border: none;
                color: white;
                font-size: 24px;
                cursor: pointer;
                padding: 10px;
            }

            .carousel-button.left {
                left: 10px;
            }

            .carousel-button.right {
                right: 10px;
            }
            </style>

            <div class="carousel">
                <div class="carousel-inner" id="carousel-inner">
                    <!-- Will be cloned dynamically -->
                </div>
                <button class="carousel-button left" onclick="prevSlide()">&#10094;</button>
                <button class="carousel-button right" onclick="nextSlide()">&#10095;</button>
            </div>

            <script>
            const images = [
                'https://picsum.photos/800/300?image=1',
                'https://picsum.photos/800/300?image=2',
                'https://picsum.photos/800/300?image=3'
            ];

            const carouselInner = document.getElementById('carousel-inner');

            // Clone images to enable infinite scroll
            function setupCarousel() {
                // Clone last to beginning
                const firstClone = document.createElement('div');
                firstClone.className = 'carousel-item';
                firstClone.innerHTML = `<img src="${images[images.length - 1]}" alt="Clone Last">`;
                carouselInner.appendChild(firstClone);

                // Add original slides
                images.forEach((src, i) => {
                    const item = document.createElement('div');
                    item.className = 'carousel-item';
                    item.innerHTML = `<img src="${src}" alt="Image ${i + 1}">`;
                    carouselInner.appendChild(item);
                });

                // Clone first to end
                const lastClone = document.createElement('div');
                lastClone.className = 'carousel-item';
                lastClone.innerHTML = `<img src="${images[0]}" alt="Clone First">`;
                carouselInner.appendChild(lastClone);
            }

            setupCarousel();

            let currentIndex = 1; // Start at first real image
            const totalSlides = images.length + 2; // include clones

            function updateSlide(transition = true) {
                if (transition) {
                    carouselInner.style.transition = 'transform 0.5s ease-in-out';
                } else {
                    carouselInner.style.transition = 'none';
                }
                carouselInner.style.transform = `translateX(-${currentIndex * 800}px)`;
            }

            function nextSlide() {
                if (currentIndex >= totalSlides - 1) return;
                currentIndex++;
                updateSlide();
            }

            function prevSlide() {
                if (currentIndex <= 0) return;
                currentIndex--;
                updateSlide();
            }

            // Handle wrap-around
            carouselInner.addEventListener('transitionend', () => {
                if (currentIndex === totalSlides - 1) {
                    currentIndex = 1;
                    updateSlide(false); // jump to first real
                }
                if (currentIndex === 0) {
                    currentIndex = totalSlides - 2;
                    updateSlide(false); // jump to last real
                }
            });

            // Auto loop like ferris wheel
            setInterval(() => {
                nextSlide();
            }, 3000);

            // Initial slide position
            window.onload = () => {
                updateSlide(false);
            };
            </script>


            <!-- Production Month-to-Date -->
            <div class="bg-blue-900 text-white text-center py-4 mt-4 rounded-md">
                Production Month-to-Date as of February 24, 2025
            </div>
            
            <!-- Statistics Cards -->
            <div class="flex flex-wrap justify-center gap-4 mt-4">

        <!-- First Row -->
        <div class="flex flex-wrap justify-center gap-4 w-full">
            <div class="transition duration-300 ease-in-out transform hover:scale-105 flex-1 w-1/2 bg-gradient-to-b from-[rgb(180,215,243)] to-[rgb(217,228,237)] rounded-xl shadow-xl p-8 border-[rgb(0,133,235)] border-b-8 flex items-center">
                <div class="flex items-center justify-center bg-[rgb(0,133,235)] w-32 h-32 rounded-full" style="background-image: url('{{ asset('images/personal_white.png')}}'); background-size: 50%; background-repeat: no-repeat; background-position: center;"></div>
                <div class="flex flex-col ml-6"> <!-- Added flex and margin-left -->
                    <div>    
                        <p class="text-3xl font-bold">Personal</p>
                    </div>
                    <div class="mt-2 flex">
                        <div>
                            <p class="font-medium text-gray-800 mt-2">Issued</p>
                            <p class="font-medium text-gray-800">NAP</p>
                            <p class="font-bold">TOTAL MTD</p>
                            <p class="font-bold">YTD</p>
                            <p class="font-bold">YTD-NON-PULSE CC</p>
                            <p class="font-bold">YTD PULSE CC</p>
                        </div>   
                        <div class="ml-16">
                            <p class="font-bold mt-2">₱ <span class="font-normal">00.00</span></p>
                            <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                            <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                            <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                            <p class="font-bold"><span class="font-normal">00.00</span></p>
                            <p class="font-bold"><span class="font-normal">00.00</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="transition duration-300 ease-in-out transform hover:scale-105 flex-1 w-1/2 bg-gradient-to-b from-[rgb(152,242,236)] to-[rgb(234,244,243)] rounded-xl shadow-xl p-8 border-[rgb(7,190,178)] border-b-8 flex items-center">
                <div class="flex items-center justify-center bg-[rgb(7,190,178)]  w-32 h-32 rounded-full" style="background-image: url('{{ asset('images/Sub-unit_white.png')}}'); background-size: 50%; background-repeat: no-repeat; background-position: center;"></div>
                <div class="flex flex-col ml-6"> <!-- Added flex and margin-left -->
                    <div >
                        <p class="text-3xl font-bold">Sub-Unit</p>
                    </div>
                    <div class="mt-2 h-24 flex">
                        <div>
                            <p class="font-medium text-gray-800">Issued</p>
                            <p class="font-medium text-gray-800">Pending Issuance</p>
                            <p class="font-bold">TOTAL MTD</p>
                        </div>
                        <div class="ml-16">
                            <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                            <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                            <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                        </div>
                    </div>
                </div>    
            </div>
        </div>

        <!-- Second Row -->
        <div class="flex flex-wrap justify-center gap-4 w-full mt">
            <div class="transition duration-300 ease-in-out transform hover:scale-105 flex-1 w-1/2 bg-gradient-to-b from-[rgb(129,180,216)] to-[rgb(230,235,238)] rounded-xl shadow-xl p-8 border-[rgb(25,138,219)] border-b-8 flex items-center">
                <div class="flex items-center justify-center bg-[rgb(25,138,219)]  w-32 h-32 rounded-full" style="background-image: url('{{ asset('images/Unit_white.png')}}'); background-size: 50%; background-repeat: no-repeat; background-position: center;"></div>
                <div class="flex flex-col ml-6"> <!-- Added flex and margin-left -->
                    <div class="mb-2">
                        <p class="text-3xl font-bold">Unit</p>
                    </div>
                    <div class="mt-2 h-24 flex">
                        <div>
                            <p class="font-medium text-gray-800">Issued</p>
                            <p class="font-medium text-gray-800">Pending Issuance</p>
                            <p class="font-bold">TOTAL MTD</p>
                        </div>
                        <div class="ml-16">
                            <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                            <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                            <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="transition duration-300 ease-in-out transform hover:scale-105 flex-1 w-1/2 bg-gradient-to-b from-[rgb(121,198,204)] to-[rgb(255,255,255)] rounded-xl shadow-xl p-8 border-[rgb(7,167,178)] border-b-8 flex items-center">
                <div class="flex items-center justify-center bg-[rgb(7,167,178)]  w-32 h-32 rounded-full" style="background-image: url('{{ asset('images/branch_white.png')}}'); background-size: 50%; background-repeat: no-repeat; background-position: center;"></div> 
                <div class="flex flex-col ml-6"> <!-- Added flex and margin-left -->
                    <div  class="mb-2">
                        <p class="text-3xl font-bold">Branch</p>
                    </div>
                    <div class="mt-2 h-24 flex">
                        <div>
                            <p class="font-medium text-gray-800">Issued</p>
                            <p class="font-medium text-gray-800">Pending Issuance</p>
                            <p class="font-bold">TOTAL MTD</p>
                        </div>
                        <div class="ml-16">
                            <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                            <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                            <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>

            <!-- Incentive and Recognition Section -->
            <div class="mx-auto mt-12 mb-4 rounded-xl border border-gray-300">
                <div class="bg-blue-900 text-white uppercase text-center p-4 text-md rounded-xl mx-2 my-2">
                    Incentive and Recognition
                </div>

                <div class="flex space-x-4 p-3">
                <div class="w-1/2 overflow-hidden">
                <table class="table-auto w-full border border-gray-300 rounded-xl shadow-md">
                    <thead>
                        <tr class="bg-blue-900 text-white uppercase text-sm leading-normal">
                            <th scope="col" colspan="2" class="px-3 py-3 text-left border-b border-gray-400">TO-GO's</th>
                        </tr>
                        <tr class="bg-gray-200 text-black uppercase text-sm leading-normal">
                            <th scope="col" class="py-3 text-left px-3 border-b border-gray-400 border-r border-gray-400">Incentive</th>
                            <th scope="col" class="py-3 text-left px-3 border-b border-gray-400">To-go</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white border-b">
                        <tr class="border-b border-gray-300 hover:bg-gray-100 hover:text-blue-900">
                            <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">BRANCH ACHIEVER</td>
                            <td class="py-3 px-3 border-b border-gray-300">250,000 APE; 8 CC;</td>
                        </tr>
                        <tr class="border-b border-gray-300 hover:bg-gray-100 hover:text-blue-900">
                            <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">SECTORAL ACHIEVER</td>
                            <td class="py-3 px-3 border-b border-gray-300">500,000 APE; 10 CC;</td>
                        </tr>
                        <tr class="border-b border-gray-300 hover:bg-gray-100 hover:text-blue-900">
                            <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">NATIONAL ACHIEVER</td>
                            <td class="py-3 px-3 border-b border-gray-300">750,000 APE; 12 CC;</td>
                        </tr>
                        <tr class="border-b border-gray-300 hover:bg-gray-100 hover:text-blue-900">
                            <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">SENIOR ACHIEVER</td>
                            <td class="py-3 px-3 border-b border-gray-300">1,500,000 APE; 18 CC;</td>
                        </tr>
                        <tr class="border-b border-blue-900 border-b-4 hover:bg-gray-100 hover:text-blue-900"> <!-- Changed here -->
                            <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">ELITE ACHIEVER</td>
                            <td class="py-3 px-3 border-b border-gray-300">2,500,000 APE; 21 CC;</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="w-1/2 overflow-hidden">
                <table class="table-auto w-full border border-gray-300 rounded-xl shadow-md">
                    <thead>
                        <tr class="bg-blue-900 text-white uppercase text-sm leading-normal">
                            <th scope="col" colspan="4" class="py-3 px-3 text-left">TOP AGENTS MTD as of MAR. 02 BRANCH WIDE</th>
                        </tr>
                        <tr class="bg-gray-200 text-black uppercase text-sm leading-normal">
                            <th scope="col" class="py-3 text-left px-3 border-b border-gray-400 border-r border-gray-400">Rank</th>
                            <th scope="col" class="py-3 text-left px-3 border-b border-gray-400 border-r border-gray-400">Unit</th>
                            <th scope="col" class="py-3 text-left px-3 border-b border-gray-400 border-r border-gray-400">Name</th>
                            <th scope="col" class="py-3 text-left px-3 border-b border-gray-400">APE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b hover:bg-gray-200 hover:text-blue-900">
                            <th scope="row" class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">1</th>
                            <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">BLUE CHALCEDONY DIRECT</td>
                            <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">Christine Mercado &nbsp;&nbsp; == $0</td>
                            <td class="py-3 px-3 border-b border-gray-300 ">26,613.00</td>
                        </tr>
                        <tr class="border-b border-blue-900 border-b-4 hover:bg-gray-100 hover:text-blue-900">
                            <th scope="row" class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">2</th>
                            <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">ANOTHER UNIT</td>
                            <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">John Doe &nbsp;&nbsp; == $0</td>
                            <td class="py-3 px-3 border-b border-gray-300">20,000.00</td>
                        </tr>
                    </tbody>                
                </table>
            </div>
        </div>

        <div class="flex space-x-4 p-3">
            <div class="w-1/2 overflow-hidden">
                <table class="table-auto w-full border border-gray-300 rounded-xl shadow-md">
                    <thead>
                        <tr class="bg-blue-900 text-white uppercase text-sm leading-normal">
                            <th scope="col" colspan="4" class="py-3 text-left px-6">TOP UNIT MTD as of MAR. 02 - BRANCH WIDE</th>
                        </tr>
                        <tr class="bg-gray-200 text-black uppercase text-sm leading-normal">
                            <th scope="col" class="py-3 px-3 border-b border-gray-400 border-r border-gray-400 ">Rank</th>
                            <th scope="col" class="py-3 text-left px-3 border-b border-gray-400 border-r border-gray-400">Unit</th>
                            <th scope="col" class="py-3 text-left px-3 border-b border-gray-400">APE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-blue-900 border-b-4 hover:bg-gray-200 hover:text-blue-900">
                            <th scope="row" class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">1</th>
                            <td class="py-3 text-left px-3 border-b border-gray-400 border-r border-gray-400">BRANCH ACHIEVER</td>
                            <td class="py-3 text-left px-3 border-b border-gray-400">250,000 APE; 8 CC;</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="w-1/2 overflow-hidden">
                <table class="table-auto w-full border border-gray-300 rounded-xl shadow-md">
                    <thead>
                        <tr class="bg-blue-900 text-white uppercase text-sm leading-normal">
                            <th scope="col" colspan="4" class="py-3 text-left px-3">TOP ROOKIES MTD as of MAR. 02 - BRANCH WIDE</th>
                        </tr>
                        <tr class="bg-gray-200 text-black uppercase text-sm leading-normal">
                            <th scope="col" class="py-3 px-3 border-b border-gray-400 border-r border-gray-400">Rank</th>
                            <th scope="col" class="py-3 text-left px-3 border-b border-gray-400 border-r border-gray-400">Unit</th>
                            <th scope="col" class="py-3 text-left px-3 border-b border-gray-400 border-r border-gray-400">Name</th>
                            <th scope="col" class="py-3 text-left px-3 border-b border-gray-400">APE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b hover:bg-gray-200 hover:text-blue-900">
                            <th scope="row" class="py-3 px-3 border-b border-gray-200 border-r border-gray-300">1</th>
                            <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300">BLUE CHALCEDONY SAMPLE</td>
                            <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300">NAME</td>
                            <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">0</td>
                        </tr>
                        <tr class="border-b border-blue-900 border-b-4 hover:bg-gray-200 hover:text-blue-900">
                            <th scope="row" class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">2</th>
                            <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300">ANOTHER UNIT</td>
                            <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300">SAMPLE</td>
                            <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">20,000.00</td>
                        </tr>
                    </tbody>                
                </table>
            </div>
        </div>
    </div>

        <!-- Chart -->
        <div class="border border-gray-300 text-white uppercase text-center text-md rounded-xl">
            <div class="bg-blue-900 text-white uppercase text-center p-4 text-md rounded-xl mx-2 my-2">
                Production Year-to-Date 2025
            </div>
                
            <div class="flex space-x-4 mb-1 p-3">
                <div class="w-1/2 bg-white overflow-hidden">
                    <div class="bg-white text-center bg-blue-900 py-3 text-black rounded-t-2xl border-2">Branch Monthly Production</div>
                    <div class="w-full bg-gray-200 rounded-b-2xl p-4 border border-gray-400">
                        <canvas id="myChart1"></canvas>
                    </div>
                </div>
                    
                <div class="w-1/2 overflow-hidden">
                    <div class="bg-white text-center bg-blue-900 py-3 text-black rounded-t-2xl border-2">Unit Monthly Production</div>
                    <div class="w-full bg-gray-200 rounded-b-2xl p-4 border border-gray-400">
                        <canvas id="myChart2" ></canvas>
                    </div>
                </div>
            </div>

            <div class="flex space-x-4 p-3">
                <div class="w-1/2 overflow-hidden">
                    <div class="bg-white text-center bg-blue-900 py-3 text-black rounded-t-2xl border-2">Branch Monthly Production</div>
                    <div class="w-full bg-gray-200 rounded-b-2xl p-4 border border-gray-400">
                        <canvas id="myChart3"></canvas>
                    </div>
                </div>

                <div class="w-1/2 bg-white overflow-hidden">
                    <div class="bg-white text-center bg-blue-900 py-3 text-black rounded-t-2xl border-2">Branch Monthly Production</div>
                    <div class="w-full bg-gray-200 rounded-b-2xl p-4 border border-gray-400">
                        <canvas id="myChart4"></canvas>
                    </div>
                </div>
            </div>
            </div>

            <!-- Production Summary -->
            <div class="container bg-gray-100 mx-auto w-9xl mb-1 mt-5 border border-gray-300 rounded-xl">
            <div class="bg-blue-900 text-white uppercase text-center p-3 text-md rounded-xl mx-3 my-3">
                Production Summary
            </div>

            <div class="m-3">
                <div class="m-3 text-black  text-center font-bold rounded-lg">
                    ISSUED
                </div>  

                    <table class="p-5 mr-5 mb-2 table-auto w-full border border-gray-300 rounded-lg shadow-md">
                        <thead>
                            <tr class="bg-gray-200 text-black uppercase text-sm leading-normal">
                                <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 font-bold">MONTH</td>
                                <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 font-bold">TOTAL APE</td>
                                <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 font-bold">NAP</td>
                                <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 font-bold">TOTAL CC</td>
                                <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 font-bold">TOTAL PULSE CASE</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b hover:text-blue-900">
                                <td class="py-3 px-6 hover:bg-gray-100 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">100</td>
                                <td class="py-3 px-6 hover:bg-gray-100 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">100</td>
                                <td class="py-3 px-6 hover:bg-gray-100 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">250,000.00</td>
                                <td class="py-3 px-6 hover:bg-gray-100 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">50,000.00</td>
                                <td class="py-3 px-6 hover:bg-gray-100 border-b border-gray-300 border-r border-gray-300 bg-white">10</td>
                            </tr>
                            <tr class="border-b hover:text-blue-900">
                                <td class="py-3 px-6 hover:bg-gray-100 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">150</td>
                                <td class="py-3 px-6 hover:bg-gray-100 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">100</td>
                                <td class="py-3 px-6 hover:bg-gray-100 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">300,000.00</td>
                                <td class="py-3 px-6 hover:bg-gray-100 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">75,000.00</td>
                                <td class="py-3 px-6 hover:bg-gray-100 border-b border-gray-300 border-r border-gray-300 bg-white">15</td>
                            </tr>
                            <tr class="border-b hover:text-blue-900">
                                <td class="py-3 px-6 hover:bg-gray-100 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">200</td>
                                <td class="py-3 px-6 hover:bg-gray-100 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">100</td>
                                <td class="py-3 px-6 hover:bg-gray-100 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">500,000.00</td>
                                <td class="py-3 px-6 hover:bg-gray-100 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">100,000.00</td>
                                <td class="py-3 px-6 hover:bg-gray-100 border-b border-gray-300 border-r border-gray-300 bg-white">20</td>
                            </tr>
                        <tr class="border-b hover:text-blue-900">
                                <td class="py-3 px-6 hover:bg-gray-100 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">250</td>
                                <td class="py-3 px-6 hover:bg-gray-100 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">100</td>
                                <td class="py-3 px-6 hover:bg-gray-100 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">600,000.00</td>
                                <td class="py-3 px-6 hover:bg-gray-100 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">125,000.00</td>
                                <td class="py-3 px-6 hover:bg-gray-100 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">25</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
                </div>


    <script>
        function getRandomColor() {
        const letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 10)]; // Changed to 16 to include all hex digits
        }
        return color;
    }

        // Function to randomize bar colors
        function randomizeBarColors(chart) {
            chart.data.datasets[0].backgroundColor = Array.from({ length: 6 }, () => getRandomColor());
            chart.update(); // Update the chart to reflect the new colors
        }

            // First Bar Chart Data
            const ctx1 = document.getElementById('myChart1').getContext('2d');
            const myChart1 = new Chart(ctx1, {
                type: 'bar', // Changed to 'bar'
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Sales in USD',
                        data: [654, 434, 800, 500, 343, 765, 234, 423, 654, 876, 543, 765],
                        backgroundColor: Array.from({ length: 12 }, () => getRandomColor()), // Random colors for bars
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Call the function to randomize colors once
            randomizeBarColors(myChart1);



        // Second Line Chart Data
            const ctx2 = document.getElementById('myChart2').getContext('2d');
            const myChart2 = new Chart(ctx2, {
                type: 'bar', // Changed to 'bar'
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Sales in USD',
                        data: [232, 434, 600, 500, 343, 765, 554, 423, 654, 876, 522, 765],
                        backgroundColor: Array.from({ length: 12 }, () => getRandomColor()), // Random colors for bars
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Call the function to randomize colors once
            randomizeBarColors(myChart2);

        // third Line Chart Data
        const ctx3 = document.getElementById('myChart3').getContext('2d');
            const myChart3 = new Chart(ctx3, {
                type: 'bar', // Changed to 'bar'
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Sales in USD',
                        data: [232, 434, 600, 500, 343, 765, 554, 423, 654, 876, 522, 765],
                        backgroundColor: Array.from({ length: 12 }, () => getRandomColor()), // Random colors for bars
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Call the function to randomize colors once
            randomizeBarColors(myChart3);

        // fourth Line Chart Data
        const ctx4 = document.getElementById('myChart4').getContext('2d');
            const myChart4 = new Chart(ctx4, {
                type: 'bar', // Changed to 'bar'
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Sales in USD',
                        data: [232, 434, 600, 500, 343, 765, 554, 423, 654, 876, 522, 765],
                        backgroundColor: Array.from({ length: 12 }, () => getRandomColor()), // Random colors for bars
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Call the function to randomize colors once
            randomizeBarColors(myChart4);
    </script>
        </div>
    </div>
        </div>
</x-app-layout>
