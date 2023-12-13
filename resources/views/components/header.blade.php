<?php
$route_name = request()->route()->getName();
$route_name = explode('.', $route_name);
$route_prefix = $route_name[0];
?>

<header>
    <div class="banner container-fluid">
        <div class="banner-content container grid grid-cols-3 gap-10 m-auto justify-between">
            <div class="website-logo col-span-2 col">
                <img src="{{asset('assets/img/Logo/logo-website.png')}}" alt="">
            </div>
            <div class="language flex items-center justify-end">
                <a href="#" class="english text-red-600"><span>English</span></a>
                <span class="px-3 text-gray-600"> | </span>
                <a href="#" class="khmer text-indigo-800 hover:text-red-600"><span>ខ្មែរ</span></a>
            </div>
        </div>
    </div>

    <nav class="navbar header">
        <div class="navbar-menu m-auto px-2 sm:px-6 lg:px-8 ">
            <div class="relative container m-auto flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 w-[100%] items-center justify-between ps-0">
                    <div class="hidden sm:block">
                        <div class="container flex gap-3">
                            <a href="{{route('homepage') }}" class="text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold  isset($route_name[1]) && $route_name[1] == 'homepage' ? 'active' : ''  }}" aria-current="page">Home</a>
                            <!-- About CCC -->
                            <div class="relative group dropdown">
                                <!-- Main Dropdown -->
                                <button class=" text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold {{ isset($route_name[0]) && $route_name[0] == 'about' ? 'active' : '' }}">
                                    About CCC <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <!-- Sub Dropdown -->
                                <div class="dropdown-menu absolute bg-white text-gray-800 border-gray-300 rounded-md shadow-lg  group-hover:block w-[280px] h-auto py-5 hidden">
                                    <a href="{{route('meeting')}}" class="block px-4"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 {{ isset($route_name[1]) && $route_name[1] == 'meeting' ? 'active' : '' }}"><span>Meeting</a>
                                    <a href="{{route('introduction')}}" class="block px-4 py-1"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1">introduction</span></a>
                                    <a href="{{route('mandate')}}" class="block px-4 py-1"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1">Mandate</span></a>
                                    <a href="{{route('governance')}}" class="block px-4 py-1"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 ">governance</span></a>
                                    <a href="{{route('role-and-responsi')}}" class="block px-4 py-1"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 ">Roles and Responsibility</span></a>
                                    <a href="{{route('core-principle')}}" class="block px-4 py-1"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 ">Core Principles</span></a>
                                    <a href="{{route('structure')}}" class="block px-4 py-1"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 ">Structure</span></a>
                                    <a href="{{route('office-bearers')}}" class="block px-4 py-1"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 ">Office Bearers</span></a>
                                    <a href="{{route('secretariat')}}" class=" block px-4 py-1"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 ">Secretariat</span></a>
                                    <ul class="sub-dropdown flex justify-between">
                                        <li class="sub-dropdown-menu">
                                            <a href="#" class="block hover_drop relative z-[5] px-4 py-1 dropdown-hvr hover:ms-1 "><span class="hvr-color">Membership </span>
                                                <div class="angle-right-icon absolute top-1 right-0 me-5">
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </div>
                                                <ul class="double-sub-dropdown  w-[400px] absolute mt-1 left-[100%] top-[85%] bg-white text-gray-800 border-gray-300 rounded-md shadow-lg z-[10]">
                                                    <div class="item">
                                                        <a href="{{route('membership')}}" class="block px-4 py-1"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 "><span>Membership</a>
                                                        <a href="{{route('right-of-members')}}" class="block px-4 py-1"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 "><span>Right of Members</a>
                                                        <a href="{{route('responsibilities')}}" class="block px-4 py-1 pb-5"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 "><span>Responsibilities of the Members</a>
                                                    </div>
                                                </ul>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Committess -->
                            <div class="relative group dropdown">
                                <!-- Main Dropdown -->
                                <button class=" text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold">
                                    Committess <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <!-- Sub Dropdown -->
                                <div class="dropdown-menu absolute bg-white text-gray-800 border-gray-300 rounded-md shadow-lg  group-hover:block w-[280px] h-auto py-3 hidden">
                                    <ul class="sub-dropdown flex justify-between">
                                        <li class="sub-dropdown-menu">
                                            <a href="#" class="block hover_drop relative z-[5] px-4 py-1 dropdown-hvr hover:ms-1 "><span class="hvr-color">Oversight Committee </span>
                                                <div class="angle-right-icon absolute top-1 right-0 me-5">
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </div>
                                                <ul class="double-sub-dropdown  w-[400px] absolute left-[100%] top-[15%] bg-white text-gray-800 border-gray-300 rounded-md shadow-lg z-[10] ">
                                                    <div class="item">
                                                        <a href="{{route('member-list') }}" class="block px-4 pb-2"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>CCC-OC Member List</a>
                                                        <a href="{{route('reference') }}" class="block px-4 pb-3"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>CCC-OC Terms of Reference</a>
                                                    </div>

                                                </ul>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Document -->
                            <div class="relative group dropdown">
                                <!-- Main Dropdown -->
                                <button class=" text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold">
                                    Document <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <!-- Sub Dropdown -->
                                <div class="dropdown-menu hidden absolute bg-white text-gray-800 border-gray-300 rounded-md shadow-lg  group-hover:block w-[280px] h-auto py-3">
                                    <ul class="sub-dropdown flex justify-between">
                                        <li class="sub-dropdown-menu">
                                            <a href="#" class="block hover_drop relative z-[5] px-4 py-1 dropdown-hvr hover:ms-1 "><span class="hvr-color">CCC Document </span>
                                                <div class="angle-right-icon absolute top-1 right-0 me-5">
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </div>
                                                <ul class="double-sub-dropdown  w-[400px] absolute left-[100%] top-[15%] bg-white text-gray-800 border-gray-300 rounded-md shadow-lg z-[10] ">
                                                    <div class="item">
                                                        <a href="{{route('oversight-plan')}}" class="block px-4 pb-2"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>CCC Oversight Plan</a>
                                                        <a href="{{route('manual')}}" class="block px-4 pb-3 "><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>CCC Governance Manual 25072019_VH-br <span>9Aug2019</span></a>
                                                        <a href="{{route('other')}}" class="block px-4 pb-3"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>Others</a>
                                                    </div>
                                                </ul>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="sub-dropdown flex justify-between">
                                        <li class="sub-dropdown-menu">
                                            <a href="#" class="block hover_drop relative z-[5] px-4 py-1 dropdown-hvr hover:ms-1 "><span class="hvr-color">Meeting Minute </span>
                                                <div class="angle-right-icon absolute top-1 right-0 me-5">
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </div>
                                                <ul class="double-sub-dropdown  w-[400px] absolute left-[100%] top-[40%] bg-white text-gray-800 border-gray-300 rounded-md shadow-lg z-[10] ">
                                                    <div class="item">
                                                        <a href="{{route('ccc-oc')}}" class="block px-4 pb-2"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>CCC-OC</a>
                                                        <a href="{{route('ccc')}}" class="block px-4 pb-3"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>CCC</a>
                                                    </div>
                                                </ul>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="sub-dropdown flex justify-between">
                                        <li class="sub-dropdown-menu">
                                            <a href="#" class="block hover_drop relative z-[5] px-4 py-1 dropdown-hvr hover:ms-1 "><span class="hvr-color">Reports </span>
                                                <div class="angle-right-icon absolute top-1 right-0 me-5">
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </div>
                                                <ul class="double-sub-dropdown  w-[400px] absolute left-[100%] top-[65%] bg-white text-gray-800 border-gray-300 rounded-md shadow-lg z-[10] ">
                                                    <div class="item">
                                                        <a href="{{route('oversight-visit')}}" class="block px-4 pb-2"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>CCC-OC Oversight Visit</a>
                                                        <a href="{{route('retreat-report')}}" class="block px-4 pb-3"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>CCC Retreat Reports</a>
                                                    </div>
                                                </ul>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- GFATM Grant -->
                            <div class="relative group dropdown">
                                <!-- Main Dropdown -->
                                <button class=" text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold">GFATM Grant
                                    <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <!-- Sub Dropdown -->
                                <div class="dropdown-menu absolute bg-white text-gray-800 border-gray-300 rounded-md shadow-lg  group-hover:block w-[280px] h-auto py-5 hidden">
                                    <a href="{{route('tb-hiv')}}" class="block px-4"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 "><span>TB/HIV</a>
                                    <a href="{{route('tb')}}" class="block px-4 py-1"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1">TB</span></a>
                                    <a href="{{route('hiv')}}" class="block px-4 py-1"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1">HIV</span></a>
                                    <a href="{{route('malaria')}}" class="block px-4 py-1"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 ">Malaria</span></a>
                                    <a href="{{route('rssh')}}" class="block px-4 py-1"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 ">RSSH</span></a>
                                    <a href="{{route('multi-countries')}}" class="block px-4 py-1"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 ">Multi-Countries TB Migrant</span></a>
                                </div>
                            </div>
                            <!-- Principal Recipients -->
                            <div class="relative group dropdown">
                                <!-- Main Dropdown -->
                                <button class=" text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold">
                                    Principal Recipients <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <!-- Sub Dropdown -->
                                <div class="dropdown-menu hidden absolute bg-white text-gray-800 border-gray-300 rounded-md shadow-lg  group-hover:block w-[280px] h-auto py-3">
                                    <ul class="sub-dropdown flex justify-between">
                                        <li class="sub-dropdown-menu">
                                            <a href="#" class="block hover_drop relative z-[5] px-4 py-1 dropdown-hvr hover:ms-1 "><span class="hvr-color">Principal Recipient <br> MEF/MoH-LIT</span>
                                                <div class="angle-right-icon absolute top-4 right-0 me-5">
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </div>
                                                <ul class="double-sub-dropdown  w-[400px] absolute left-[100%] top-[15%] bg-white text-gray-800 border-gray-300 rounded-md shadow-lg z-[10] ">
                                                    <div class="item">
                                                        <a href="{{route('pudr')}}" class="block px-4 pb-2"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>PUDR</a>
                                                        <a href="{{route('management-letter')}}" class="block px-4 pb-3"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>Management Letter</a>
                                                        <a href="{{route('audit-report')}}" class="block px-4 pb-3"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>Audit Report</a>
                                                    </div>
                                                </ul>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="sub-dropdown flex justify-between">
                                        <li class="sub-dropdown-menu">
                                            <a href="#" class="block hover_drop relative z-[5] px-4 py-1 dropdown-hvr hover:ms-1 "><span class="hvr-color">Principal Recipient UNOPS</span>
                                                <div class="angle-right-icon absolute top-1 right-0 me-5">
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </div>
                                                <ul class="double-sub-dropdown  w-[400px] absolute left-[100%] top-[55%] bg-white text-gray-800 border-gray-300 rounded-md shadow-lg z-[10] ">
                                                    <div class="item">
                                                        <a href="{{route('unops-pudr')}}" class="block px-4 pb-2"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>PUDR</a>
                                                        <a href="{{route('unops-management-letter')}}" class="block px-4 pb-3"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>Management Letter</a>
                                                        <a href="{{route('unops-audit-report')}}" class="block px-4 pb-3"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>Audit Report</a>
                                                    </div>
                                                </ul>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Activity -->
                            <a href="{{route('activity')}}" class="text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold" aria-current="page">Activity</a>
                            <!-- Career  -->
                            <a href="{{route('career')}}" class="text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold" aria-current="page">Career</a>

                            <!-- Media  -->
                            <div class="relative group dropdown">
                                <!-- Main Dropdown -->
                                <button class=" text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold">Media
                                    <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <!-- Sub Dropdown -->
                                <div class="dropdown-menu absolute bg-white text-gray-800 border-gray-300 rounded-md shadow-lg  group-hover:block w-[280px] h-auto py-3 hidden">
                                    <a href="{{route('news')}}" class="block px-4 py-1"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 "><span>News</a>
                                    <a href="{{route('video')}}" class="block px-4 py-1"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1">Video</span></a>
                                    <a href="{{route('gallary')}}" class="block px-4 py-1"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1">Gallary</span></a>
                                </div>
                            </div>

                            <!-- Contact Us  -->
                            <a href="{{route('contact-us')}}" class="text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold me-40" aria-current="page">Contact Us</a>

                            <!-- search bar  -->
                            <div class="mx-auto text-end m-auto">
                                <div class="relative">
                                    <i id="search-icon" class="cursor-pointer text-white fas fa-search relative z-[100] text-lg pe-2"></i>
                                    <input id="search-bar" class="hidden absolute top-0 right-0 p-1 text-sm rounded-3xl ps-2 placeholder-gray-500 focus:outline-none z-[90]" type="text" placeholder="Search">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <!--
            Dropdown menu, show/hide based on menu state.
            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"-->
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
                <a href="#" class="text-white  hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
                <a href="#" class="text-white  hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
                <a href="#" class="text-white  hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
            </div>
        </div>
    </nav>
</header>


<script type="module">
    // search bar
    $(document).ready(function() {
        $("#search-icon").click(function(e) {
            e.stopPropagation();
            $(this).toggleClass("text-white text-black");
            $("#search-bar").toggleClass("show");
            $("#search-bar").animate({
                width: 'toggle',
            }, 350);
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Toggle mobile menu visibility
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    });
</script>