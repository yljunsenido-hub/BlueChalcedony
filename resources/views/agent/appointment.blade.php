<x-app-layout>
    <x-slot name="header">

        <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3 pb-4">
            <div class="text-blue-900 text-4xl font-bold rounded-lg p-2 pl-1">
                Appointment Schedule
            </div>

            <div class="bg-blue-900 text-white shadow-lg rounded-sm p-2 mb-3"></div>

            <!-- Main Content Area -->

            <div class="flex flex-wrap justify-center gap-4 w-full">
                <!-- Calendar -->
                
                    <style>

                        header .calendar-navigation {
                            display: flex;
                        }

                        header .calendar-navigation span {
                            height: 38px;
                            width: 38px;
                            margin: 0 1px;
                            cursor: pointer;
                            text-align: center;
                            line-height: 38px;
                            border-radius: 50%;
                            user-select: none;
                            color: #aeabab;
                            font-size: 1.9rem;
                        }

                        .calendar-navigation span:last-child {
                            margin-right: -10px;
                        }

                        header .calendar-navigation span:hover {
                            background: #f2f2f2;
                        }

                        header .calendar-current-date {
                            font-weight: 500;
                            font-size: 1.45rem;
                        }

                        .calendar-body {
                            padding: 20px;
                        }

                        .calendar-body ul {
                            list-style: none;
                            flex-wrap: wrap;
                            display: flex;
                            text-align: center;
                        }

                        .calendar-body .calendar-dates {
                            margin-bottom: 20px;
                        }

                        .calendar-body li {
                            width: calc(100% / 7);
                            font-size: 1.07rem;
                            color: #414141;
                        }

                        .calendar-body .calendar-weekdays li {
                            cursor: default;
                            font-weight: 500;
                        }

                        .calendar-body .calendar-dates li {
                            margin-top: 30px;
                            position: relative;
                            z-index: 1;
                            cursor: pointer;
                        }

                        .calendar-dates li.inactive {
                            color: #aaa;
                        }

                        .calendar-dates li.active {
                            color: #fff;
                        }

                        .calendar-dates li::before {
                            position: absolute;
                            content: "";
                            z-index: -1;
                            top: 50%;
                            left: 50%;
                            width: 40px;
                            height: 40px;
                            border-radius: 50%;
                            transform: translate(-50%, -50%);
                        }

                        .calendar-dates li.active::before {
                            background: #6332c5;
                        }

                        .calendar-dates li:not(.active):hover::before {
                            background: #e4e1e1;
                        }
                    </style>

<script>
       function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            const content = document.getElementById("main-content");

            if (sidebar.classList.contains("hide")) {
                sidebar.classList.remove("hide");
                content.classList.remove("shift"); // Shift content when sidebar is visible
            } else {
                sidebar.classList.add("hide");
                content.classList.add("shift"); // Shift content when sidebar is hidden
            }
        }

        let currentOpenDropdown = null;

        function toggleDropdown(dropdownId) {
            const dropdown = document.getElementById(dropdownId);

            if (currentOpenDropdown && currentOpenDropdown !== dropdown) {
                currentOpenDropdown.classList.remove('show');
                currentOpenDropdown.style.maxHeight = '0';
                currentOpenDropdown.style.opacity = '0';
            }

            if (dropdown.classList.contains('show')) {
                dropdown.classList.remove('show');
                dropdown.style.maxHeight = '0';
                dropdown.style.opacity = '0';
            } else {
                dropdown.classList.add('show');
                dropdown.style.maxHeight = '500px';
                dropdown.style.opacity = '1';
            }

            currentOpenDropdown = dropdown.classList.contains('show') ? dropdown : null;
        }
        
    </script>


                    <div class="flex-1 w-1/6">
                        <div class="calendar-container w-full rounded-xl border-2 border-gray-300 mb-4">
                        <header class="calendar-header bg-blue-900 flex rounded-t-xl items-center justify-between py-3 px-4 text-yellow-300">
                        <p class="calendar-current-date"></p>   
                        <div class="calendar-navigation flex items-center pr-3">
                            <span id="calendar-prev" class="material-symbols-rounded bg-yellow-400 "> <!-- Added mr-2 for right margin -->
                                <svg class="h-9 w-9 text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"/>
                                    <polyline points="15 6 9 12 15 18" />
                                </svg>
                            </span>
                            <span id="calendar-next" class="material-symbols-rounded bg-yellow-400">
                                <svg class="h-9 w-10 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6" />
                                </svg>
                            </span>
                        </div>
                        </header>

                                <div class="calendar-body border bg-white border-gray-400 ml-4 mb-4 mt-4 mr-4 rounded-xl">
                                    <ul class="calendar-weekdays">
                                        <li>Sun</li>
                                        <li>Mon</li>
                                        <li>Tue</li>
                                        <li>Wed</li>
                                        <li>Thu</li>
                                        <li>Fri</li>
                                        <li>Sat</li>
                                    </ul>
                                    <ul class="calendar-dates"></ul>
                                </div>
                            </div>

                    <script> 
                        let date = new Date();
                        let year = date.getFullYear();
                        let month = date.getMonth();

                        const day = document.querySelector(".calendar-dates");

                        const currdate = document
                            .querySelector(".calendar-current-date");

                        const prenexIcons = document
                            .querySelectorAll(".calendar-navigation span");

                        // Array of month names
                        const months = [
                            "January",
                            "February",
                            "March",
                            "April",
                            "May",
                            "June",
                            "July",
                            "August",
                            "September",
                            "October",
                            "November",
                            "December"
                        ];

                        // Function to generate the calendar
                        const manipulate = () => {

                            // Get the first day of the month
                            let dayone = new Date(year, month, 1).getDay();

                            // Get the last date of the month
                            let lastdate = new Date(year, month + 1, 0).getDate();

                            // Get the day of the last date of the month
                            let dayend = new Date(year, month, lastdate).getDay();

                            // Get the last date of the previous month
                            let monthlastdate = new Date(year, month, 0).getDate();

                            // Variable to store the generated calendar HTML
                            let lit = "";

                            // Loop to add the last dates of the previous month
                            for (let i = dayone; i > 0; i--) {
                                lit +=
                                    `<li class="inactive">${monthlastdate - i + 1}</li>`;
                            }

                            // Loop to add the dates of the current month
                            for (let i = 1; i <= lastdate; i++) {

                                // Check if the current date is today
                                let isToday = i === date.getDate()
                                    && month === new Date().getMonth()
                                    && year === new Date().getFullYear()
                                    ? "active"
                                    : "";
                                lit += `<li class="${isToday}">${i}</li>`;
                            }

                            // Loop to add the first dates of the next month
                            for (let i = dayend; i < 6; i++) {
                                lit += `<li class="inactive">${i - dayend + 1}</li>`
                            }

                            // Update the text of the current date element 
                            // with the formatted current month and year
                            currdate.innerText = `${months[month]} ${year}`;

                            // update the HTML of the dates element 
                            // with the generated calendar
                            day.innerHTML = lit;
                        }

                        manipulate();

                        // Attach a click event listener to each icon
                        prenexIcons.forEach(icon => {

                            // When an icon is clicked
                            icon.addEventListener("click", () => {

                                // Check if the icon is "calendar-prev"
                                // or "calendar-next"
                                month = icon.id === "calendar-prev" ? month - 1 : month + 1;

                                // Check if the month is out of range
                                if (month < 0 || month > 11) {

                                    // Set the date to the first day of the 
                                    // month with the new year
                                    date = new Date(year, month, new Date().getDate());

                                    // Set the year to the new year
                                    year = date.getFullYear();

                                    // Set the month to the new month
                                    month = date.getMonth();
                                }

                                else {

                                    // Set the date to the current date
                                    date = new Date();
                                }

                                // Call the manipulate function to 
                                // update the calendar display
                                manipulate();
                            });
                        });

                    </script>


                    <div class="mt-3 flex space-x-3">
                        <div class="bg-blue-900 rounded-xl w-1/2 p-1 flex items-center justify-between px-3 py-2">
                            <p class="text-lg text-white font-semibold">Time Slots</p>
                            <button class="flex items-center justify-center w-7 h-7 bg-yellow-400 text-white rounded-md hover:bg-yellow-600 transition duration-200">
                                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2a1 1 0 011 1v8h8a1 1 0 110 2h-8v8a1 1 0 11-2 0v-8H3a1 1 0 110-2h8V3a1 1 0 011-1z" />
                                </svg>
                            </button>
                        </div>
                        <div class="bg-blue-900 rounded-xl w-1/2 p-1 flex items-center justify-between px-3 py-2    ">
                            <p class="text-lg text-white font-semibold">Appointment Schedule</p>
                            <button class="flex items-center justify-center w-7 h-7 bg-yellow-400 text-white rounded-md hover:bg-yellow-600 transition duration-200">
                                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2a1 1 0 011 1v8h8a1 1 0 110 2h-8v8a1 1 0 11-2 0v-8H3a1 1 0 110-2h8V3a1 1 0 011-1z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- table -->
                <div class="flex-1 w-5/6 p-5 bg-white rounded-md shadow-md border border-gray-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <label for="entries" class="mr-2 text-sm text-gray-600">Show entries:</label>
                            <select id="entries" class="border border-gray-300 rounded-md p-1 text-sm">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                        <div class="flex items-center">
                            <label for="search" class="mr-2 text-sm text-gray-600">Search:</label>
                            <input type="text" id="search" class="px-3 py-1 border border-gray-300 rounded-md shadow-sm text-sm" placeholder="Search...">
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-300">
                            <thead>
                                <tr class="bg-gray-200 text-black uppercase text-sm leading-normal">
                                    <th class="py-3 px-6  border-r border-gray-300 text-left">ID</th>
                                    <th class="py-3 px-6  border-r border-gray-300 text-left">DATE TIME</th>
                                    <th class="py-3 px-6  border-r border-gray-300 text-left">NAMES</th>
                                    <th class="py-3 px-6  border-r border-gray-300 text-left">EMAIL</th>
                                    <th class="py-3 px-6  border-r border-gray-300 text-left">CONTACT NO.-unit</th>
                                    <th class="py-3 px-6  border-r border-gray-300 text-left">ACTION</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                                <tr class="border-b border-gray-300 hover:bg-gray-100 ">
                                    <td class="py-3 px-6 border-r"></td>
                                    <td class="py-3 px-6 border-r"></td>
                                    <td class="py-3 px-6 border-r"></td>
                                    <td class="py-3 px-6 border-r"></td>
                                    <td class="py-3 px-6 border-r"></td>
                                    <td class="py-3 px-6 border-r"></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
