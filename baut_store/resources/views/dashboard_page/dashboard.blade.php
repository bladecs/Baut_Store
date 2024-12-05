<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWHf3jfanhudIWv5L7dT1uhA6sRYpzuOY&callback=console.debug&libraries=maps,marker&v=beta"></script>

</head>

<body>
    <div class="flex h-auto">
        <!-- Sidebar -->
        <div id="sidebar"
            class="bg-gray-800 text-white w-48 fixed top-0 left-0 h-full flex flex-col items-center transition-all duration-300">
            <div id="button_nav" class="w-full flex justify-end p-4">
                <button onclick="toggleSidebar()"
                    class="min-w-10 min-h-10 p-2 bg-gray-700 hover:bg-gray-600 focus:outline-none flex items-center justify-center rounded-lg">
                    &#9776;
                </button>
            </div>
            <!-- Garis pemisah -->
            <hr class="w-full border-gray-600 my-4">
            <!-- Navigation List -->
            <ul class="mt-2 space-y-4 flex flex-col items-start w-full">
                <li class="group relative w-full">
                    <a href="#product" class="flex items-center space-x-4 py-2 px-4 hover:bg-gray-700 rounded">
                        <span class="material-icons text-2xl">inventory_2</span>
                        <span class="menu-text">Product</span>
                    </a>
                </li>
                <li class="group relative w-full">
                    <a href="#calendars" class="flex items-center space-x-4 py-2 px-4 hover:bg-gray-700 rounded">
                        <span class="material-icons text-2xl">calendar_month</span>
                        <span class="menu-text">Calendar</span>
                    </a>
                </li>
                <li class="group relative w-full">
                    <a href="#info" class="flex items-center space-x-4 py-2 px-4 hover:bg-gray-700 rounded">
                        <span class="material-icons text-2xl">info</span>
                        <span class="menu-text">Info</span>
                    </a>
                </li>
                <li class="group relative w-full">
                    <a href="#contact" class="flex items-center space-x-4 py-2 px-4 hover:bg-gray-700 rounded">
                        <span class="material-icons text-2xl">contact_mail</span>
                        <span class="menu-text">Contact</span>
                    </a>
                </li>
                <li class="group relative w-full">
                    <a href="#feedback" class="flex items-center space-x-4 py-2 px-4 hover:bg-gray-700 rounded">
                        <span class="material-icons text-2xl">forum</span>
                        <span class="menu-text">Feedback</span>
                    </a>
                </li>
            </ul>
            <!-- Garis pemisah -->
            <hr class="w-full border-gray-600 my-4">
            <!-- Akun Dropdown -->
            <div class="mt-auto w-full">
                <details class="group relative">
                    <summary
                        class="flex items-center space-x-4 py-2 px-4 cursor-pointer hover:bg-gray-700 rounded focus:outline-none">
                        <span class="material-icons text-2xl">account_circle</span>
                        <span class="menu-text">Nama Akun</span>
                    </summary>
                    <div class="absolute left-0 bottom-full mb-2 bg-gray-700 text-white rounded shadow-md">
                        <a href="#profile" class="flex items-center px-4 py-2 hover:bg-gray-600">
                            <span class="material-icons text-2xl mr-4">person</span>
                            <span class="menu-text">Profile</span></a>
                        <a href="#logout" class="flex items-center px-4 py-2 hover:bg-gray-600">
                            <span class="material-icons text-2xl mr-4">logout</span>
                            <span class="menu-text">Logout</span>
                        </a>
                    </div>
                </details>
            </div>
        </div>

        <!-- Main Content -->
        <div class="min-h-full h-auto flex-1 ml-48 p-8 space-y-6 transition-all duration-300 bg-slate-100" id="content">
            <section id="product">
                <div class="w-full rounded-lg overflow-hidden shadow-lg p-4 bg-white">
                    <div class="py-4">
                        <h2 class="font-bold text-xl mb-2">Our Product</h2>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae
                            vestibulum.
                        </p>
                    </div>
                    <div
                        class="w-full flex flex-col sm:flex-row justify-between rounded-lg space-y-4 sm:space-y-0 sm:space-x-4">
                        <input type="search" name="search_produk" id="search_produk" placeholder="Search Produk"
                            class="p-2 rounded-md border border-gray-300 w-full sm:w-100 focus:outline-none" />
                        <div class="flex space-x-4">
                            <select name="filter1" id="filter1" class="p-2 rounded-md border border-gray-300 w-32">
                                <option value="">Filter 1</option>
                            </select>
                            <select name="filter2" id="filter2" class="p-2 rounded-md border border-gray-300 w-32">
                                <option value="">Filter 2</option>
                            </select>
                            <select name="filter3" id="filter3" class="p-2 rounded-md border border-gray-300 w-32">
                                <option value="">Filter 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 py-6">
                        <div class="w-full max-w-md rounded-md overflow-hidden shadow-lg mx-auto">
                            <img class="w-full" src="https://via.placeholder.com/400" alt="Image">
                            <div class="px-4 py-4">
                                <h2 class="font-bold text-xl mb-2">Card Title</h2>
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae
                                    vestibulum.
                                </p>
                            </div>
                            <div class="px-4 pb-4">
                                <button
                                    class="bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-600 transition-all duration-300">Read
                                    More</button>
                            </div>
                        </div>
                        <div class="w-full max-w-md rounded-md overflow-hidden shadow-lg mx-auto">
                            <img class="w-full" src="https://via.placeholder.com/400" alt="Image">
                            <div class="px-4 py-4">
                                <h2 class="font-bold text-xl mb-2">Card Title</h2>
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae
                                    vestibulum.
                                </p>
                            </div>
                            <div class="px-4 pb-4">
                                <button
                                    class="bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-600 transition-all duration-300">Read
                                    More</button>
                            </div>
                        </div>
                        <div class="w-full max-w-md rounded-md overflow-hidden shadow-lg mx-auto">
                            <img class="w-full" src="https://via.placeholder.com/400" alt="Image">
                            <div class="px-4 py-4">
                                <h2 class="font-bold text-xl mb-2">Card Title</h2>
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae
                                    vestibulum.
                                </p>
                            </div>
                            <div class="px-4 pb-4">
                                <button
                                    class="bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-600 transition-all duration-300">Read
                                    More</button>
                            </div>
                        </div>
                        <div class="w-full max-w-md rounded-md overflow-hidden shadow-lg mx-auto">
                            <img class="w-full" src="https://via.placeholder.com/400" alt="Image">
                            <div class="px-4 py-4">
                                <h2 class="font-bold text-xl mb-2">Card Title</h2>
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae
                                    vestibulum.
                                </p>
                            </div>
                            <div class="px-4 pb-4">
                                <button
                                    class="bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-600 transition-all duration-300">Read
                                    More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="calendars">
                <div class="w-full rounded-lg overflow-hidden shadow-lg p-4 bg-white">
                    <div class="py-4">
                        <h2 class="font-bold text-xl mb-2">Calendar Project</h2>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae
                            vestibulum.
                        </p>
                    </div>
                    <div class="flex space-x-4 mb-4 justify-end">
                        <h2 class="font-medium content-center">Fliter By : </h2>
                        <button id="dayButton"
                            class="p-2 rounded-md border border-gray-300 w-32 hover:bg-gray-800 hover:text-white transition-all duration-300"
                            onclick="changeCalendarView('day')">
                            Day
                        </button>
                        <button id="weekButton"
                            class="p-2 rounded-md border border-gray-300 w-32 hover:bg-gray-800 hover:text-white transition-all duration-300"
                            onclick="changeCalendarView('week')">
                            Week
                        </button>
                        <button id="monthButton"
                            class="p-2 rounded-md border border-gray-300 w-32 hover:bg-gray-800 hover:text-white transition-all duration-300"
                            onclick="changeCalendarView('month')">
                            Month
                        </button>
                    </div>
                    <div id="calendar" class="bg-gray-800 shadow-lg rounded-lg p-4 w-100">
                    </div>
                </div>
            </section>
            <section id="info">
                <div class="w-full rounded-lg overflow-hidden shadow-lg p-4 bg-white">
                    <div class="py-4">
                        <h2 class="font-bold text-xl mb-2">About Us</h2>
                        <img src="https://via.placeholder.com/400" alt="Image" class="w-full h-40">
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae
                            vestibulum.
                        </p>
                    </div>
                    <div class="pb-4">
                        <button
                            class="bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-600 transition-all duration-300">Read
                            More</button>
                    </div>
                </div>
            </section>
            <section id="contact">
                <div class="w-full rounded-lg overflow-hidden shadow-lg p-4 bg-white">
                    <div class="py-4">
                        <h2 class="font-bold text-xl mb-2">Contact Person</h2>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae
                            vestibulum.
                        </p>
                    </div>
                    <div class="w-full flex flex-row">
                        <div id="map" class="rounded-lg" style="width: 80%; height: auto;"></div>
                        <div class="mx-5 p-6 overflow-hidden bg-gray-800 rounded-lg shadow-xl">
                            <h2 class="text-white text-3xl mb-3 font-semibold">Contact Person</h2>
                        </div>
                    </div>
                </div>
            </section>
            <section id="feedback">
                <div class="w-full rounded-lg overflow-hidden shadow-lg p-4 bg-white">
                    <div class="py-4">
                        <h2 class="font-bold text-xl mb-2">Feedback</h2>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae
                            vestibulum.
                        </p>
                    </div>
                    <div class="w-full flex flex-row">
                        <img src="{{ asset('img/feedback.jpg') }}" alt="Image" class="w-96 h-96 rounded-xl">
                        <div class="mx-5 p-6 overflow-hidden bg-gray-800 rounded-lg shadow-xl">
                            <h2 class="text-white text-3xl mb-3 font-semibold">Form Feedback</h2>
                            <form action="#" method="post">
                                <label class="text-white" for="email">Email</label>
                                <input
                                    class="p-2 mb-2 rounded-md border border-gray-300 w-full sm:w-100 focus:outline-none"
                                    type="email" name="email" id="email" placeholder="input email">
                                <label class="text-white" for="feedback">Feedback</label>
                                <textarea
                                    class="p-2 rounded-md border border-gray-300 w-full h-40 sm:w-100 focus:outline-none"
                                    name="feedback" id="feedback" placeholder="masukan feedback anda"></textarea>
                                <button
                                    class="mt-3 py-2 px-6 rounded-lg bg-white text-gray-800 text-bold hover:bg-gray-300 hover:text-white"
                                    type="submit">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script>
        const toggleSidebar = () => {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');
            const button = document.getElementById('button_nav');
            const tooltip = document.getElementById('tooltip');
            const menuText = document.querySelectorAll('.menu-text');
            const tooltips = document.querySelectorAll('.tooltip');

            if (sidebar.classList.contains('w-48')) {
                // Switch sidebar Kecil
                sidebar.classList.remove('w-48');
                sidebar.classList.add('w-16');
                content.classList.remove('ml-48');
                content.classList.add('ml-16');
                button.classList.remove('justify-end');
                button.classList.add('justify-center');
                menuText.forEach((text) => (text.style.display = 'none'));
            } else {
                // Switch Sidebar Besar
                sidebar.classList.remove('w-16');
                sidebar.classList.add('w-48');
                content.classList.remove('ml-16');
                content.classList.add('ml-48');
                button.classList.remove('justify-center');
                button.classList.add('justify-end');
                menuText.forEach((text) => (text.style.display = 'inline'));
            }
        };
    </script>
    <script>
        const calendarElement = document.getElementById('calendar');
        const renderCalendar = (year, month) => {
            const daysInWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
            const date = new Date(year, month, 1);
            const currentMonth = date.getMonth();
            const currentYear = date.getFullYear();

            // Ambil hari terakhir di bulan
            const firstDayIndex = date.getDay();
            const lastDay = new Date(year, month + 1, 0).getDate();

            // Menggenerate bulan selanjutnya dan sebelumnya
            const prevMonth = month === 0 ? 11 : month - 1;
            const nextMonth = month === 11 ? 0 : month + 1;
            const prevYear = month === 0 ? year - 1 : year;
            const nextYear = month === 11 ? year + 1 : year;

            // Membangun HTML calendar
            calendarElement.innerHTML = `
        <div class="flex justify-between items-center mb-4">
          <button id="prev-btn" class="text-white hover:text-gray-800 font-bold">&lt;</button>
          <h2 class="text-xl font-semibold text-white">${date.toLocaleString('default', { month: 'long' })} ${year}</h2>
          <button id="next-btn" class="text-white hover:text-gray-800 font-bold">&gt;</button>
        </div>
        <div class="grid grid-cols-7 gap-2 text-center font-medium text-white">
          ${daysInWeek.map(day => `<div>${day}</div>`).join('')}
        </div>
        <div class="grid grid-cols-7 gap-2 mt-2">
          ${Array(firstDayIndex).fill('<div></div>').join('')}
          ${Array.from({ length: lastDay }, (_, i) => {
                const isToday =
                    new Date().getDate() === i + 1 &&
                    new Date().getMonth() === currentMonth &&
                    new Date().getFullYear() === currentYear;
                return `
              <div class="p-2 rounded-lg ${isToday ? 'bg-white text-gray-800 font-bold' : 'text-white hover:bg-white hover:text-gray-800 transition-all duration-300'
                    }">${i + 1}</div>
            `;
            }).join('')}
        </div>
      `;

            // Add event listeners untuk button navigation
            document.getElementById('prev-btn').addEventListener('click', () => {
                renderCalendar(prevYear, prevMonth);
            });
            document.getElementById('next-btn').addEventListener('click', () => {
                renderCalendar(nextYear, nextMonth);
            });
        };
        const today = new Date();
        renderCalendar(today.getFullYear(), today.getMonth());
    </script>
    <script>
        function initMap() {
            const location = { lat: -6.2088, lng: 106.8456 };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 12,
                center: location,
            });

            const marker = new google.maps.Marker({
                position: location,
                map: map,
            });
        }
        window.onload = initMap;
    </script>

</body>

</html>
