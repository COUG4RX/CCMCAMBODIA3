<?php
$route_name = request()->route()->getName();
$route_name = explode('.', $route_name);
$route_prefix = $route_name[0];
?>

<header>
    <!-- banner  -->
    <div class="banner container-fluid bg-white">
        <div class="banner-content container grid grid-cols-3 sm:grid-cols-3 lg:gap-10 m-auto h-auto justify-between">
            <div class="website-logo col-span-3 px-14 py-5 sm:col-span-3 md:col-span-3 lg:col-span-2 xl:col-span-2 sm:px-8 xs:px-10 lg:py-5">
                <img src="{{asset('assets/img/Logo/logo-website.png')}}" alt="">
            </div>
            <div class="language flex justify-center col-span-3  pb-5 sm:col-span-3 sm:justify-center sm:items-center md:justify-center md:items-center lg:col-span-1 lg:justify-end lg:items-center sm:pb-3 xl:col-span-1 xl:justify-end">
                <a href="#" class="english text-red-600"><span>English</span></a>
                <span class="px-3 text-gray-600"> | </span>
                <a href="#" class="khmer text-indigo-800 hover:text-red-600"><span>ខ្មែរ</span></a>
            </div>
        </div>
    </div>

    <!-- navbar  -->
    <nav class="navbar" id="navbar">
        <div class="navbar-menu m-auto px-2 sm:px-6 lg:px-8 ">
            <div class="relative container m-auto flex h-16 items-center justify-betwee">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

                    <!-- Mobile menu button-->
                    <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false" id="toggle-sidebar">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-7 w-7 text-white gap-3 bg-transparent" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" aria-hidden="true" id="menu-icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>

                </div>
                <div class="flex flex-1 justify-between ps-0 ">
                    <div class="hidden md:block lg:block xl:block">
                        <div class="container flex gap-3">
                            <a href="{{route('homepage') }}" class="responsive-text-drop-down text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold  isset($route_name[1]) && $route_name[1] == 'homepage' ? 'active' : ''  }}" aria-current="page">Home</a>
                            <!-- About CCC -->
                            <div class="relative group dropdown">
                                <!-- Main Dropdown -->
                                <button class="responsive-text-drop-down text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold {{ isset($route_name[0]) && $route_name[0] == 'about' ? 'active' : '' }}">
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
                                <button class="responsive-text-drop-down text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold">
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
                                <button class="responsive-text-drop-down text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold">
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
                                <button class="responsive-text-drop-down text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold">GFATM Grant
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
                                <button class="responsive-text-drop-down text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold">
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
                            <a href="{{route('activity')}}" class="responsive-text-drop-down text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold" aria-current="page">Activity</a>
                            <!-- Career  -->
                            <a href="{{route('career')}}" class="responsive-text-drop-down text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold" aria-current="page">Career</a>

                            <!-- Media  -->
                            <div class="relative group dropdown">
                                <!-- Main Dropdown -->
                                <button class="responsive-text-drop-down text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold">Media
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
                            <a href="{{route('contact-us')}}" class="responsive-text-drop-down text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold" aria-current="page">Contact Us</a>

                        </div>
                    </div>
                </div>
                <!-- search bar  -->
                <div class="pt-2">
                    <div class="relative h-auto sm:right-0 justify-end">
                        <i id="search-icon" class="search-icon cursor-pointer text-white fas fa-search relative z-[100] text-lg pe-2"></i>
                        <input id="search-bar" class="hidden absolute top-0 right-0 p-1 text-sm rounded-3xl ps-2 placeholder-gray-500 focus:outline-none z-[90]" type="text" placeholder="Search">
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->

        <div class="responsive-menu hidden z-[1200]" id="mobile-menu">
            <!-- Your sidebar content goes here -->
            <aside class="fixed bg-responsive-menu  top-0 left-0 z-40 h-screen">
                <!-- <div class="menu-responsive-cover"> -->
                <!-- close button  -->
                <button type="button" class="absolute right-28 p-2 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false" id="close-sidebar">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-7 w-7 text-white" style="font-weight: bold;" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                <div class="banner-logo px-20 w-[80%] py-10 z-[1200]" style="background-color: #5AACE2;">
                    <img src="{{asset('assets/img/Logo/logo-website.png')}}" alt="">
                </div>

                <ul class="p-4 w-[80%] h-[100%]" style="background-color: #f5f5f5;">
                    <div class="dropdown-offcanvas">
                        <a href="{{ route('homepage') }}" class="pointer-event {{ isset($route_name[0]) && $route_name[0] == 'homepage' ? 'active' : '' }}">
                            <img src="asset('assets/feather/home.svg')"></img>
                            <span class="text-gray-800"></span> Home
                        </a>
                    </div>

                    <!-- drop-down responsive -->
                    <!-- About CCC  -->
                    <div class="dropdown mt-3">
                        <button class="btn btn-custom flex bg-none" id="rotateButton" type="button" data-bs-toggle="dropdown">
                            <a href="#" class="{{ isset($route_name[0]) && $route_name[0] == 'about' ? 'active' : '' }} "><i class="fa-solid fa-circle-info me-2"></i>
                                <span class="text-gray-800">About CCC </span>
                                <span class="angle-right left-64" id="icon"><i class="fa-solid fa-angle-down"></i></span>
                            </a>
                        </button>

                        <ul class="dropdown-menu ms-4 " id="dNone">
                            <li class="py-1 "><a class="dropdown-item" href="{{ route('meeting') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'meeting' ? 'active' : '' }}"></i> <span class="{{ isset($route_name[1]) && $route_name[1] == 'meeting' ? 'active' : '' }} text-gray-800">Meeting</span></a></li>
                            <li class="py-1"><a class="dropdown-item" href="{{ route('introduction') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'introduction' ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'introduction' ? 'active' : '' }} text-gray-800">introduction</span> </a></li>
                            <li class="py-1"><a class="dropdown-item" href="{{ route('mandate') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'mandate' ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'mandate' ? 'active' : '' }} text-gray-800">Mandate</span> </a></li>
                            <li class="py-1"><a class="dropdown-item" href="{{ route('governance') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'governance' ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'governance' ? 'active' : '' }} text-gray-800">governance</span> </a></li>
                            <li class="py-1"><a class="dropdown-item" href="{{ route('role-and-responsi') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'role-and-responsibility' ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'role-and-responsibility' ? 'active' : '' }} text-gray-800">Roles and Responsibility</span></a></li>
                            <li class="py-1"><a class="dropdown-item" href="{{ route('core-principle') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'core-principle' ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'core-principle' ? 'active' : '' }} text-gray-800">Core Principles</span> </a></li>
                            <li class="py-1"><a class="dropdown-item" href="{{ route('structure') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'structure' ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'structure' ? 'active' : '' }} text-gray-800">Structure</span> </a></li>
                            <li class="py-1"><a class="dropdown-item" href="{{ route('office-bearers') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'office-bearers' ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'office-bearers' ? 'active' : '' }} text-gray-800">Office Bearers</span> </a></li>
                            <li class="py-1"><a class="dropdown-item" href="{{ route('secretariat') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'secretariat' ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'secretariat' ? 'active' : '' }} text-gray-800">Secretariat</span> </a></li>
                            <li class="py-1"><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'membership' || isset($route_name[1]) && $route_name[1] == 'responsibility-of-member' ||  isset($route_name[1]) && $route_name[1] == 'right-member' ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'membership' || isset($route_name[1]) && $route_name[1] == 'responsibility-of-member' ||  isset($route_name[1]) && $route_name[1] == 'right-member' ? 'active' : '' }} text-gray-800">Membership</span> </a>
                                <ul class="ms-5">
                                    <li class="py-1 {{ isset($route_name[1]) && $route_name[1] == 'membership'  ? 'active' : '' }}"><a href="{{ route('membership') }}" class="{{ isset($route_name[1]) && $route_name[1] == 'membership'  ? 'active' : '' }}"> <span class="text-gray-800">Membership</span></a></li>
                                    <li class="py-1 {{ isset($route_name[1]) && $route_name[1] == 'right-member' ? 'active' : '' }}"><a href="{{ route('right-of-members') }}" class="{{ isset($route_name[1]) && $route_name[1] == 'right-member' ? 'active' : '' }} text-gray-800"> <span class="text-gray-800">Right of Members</span></a></li>
                                    <li class="py-1 {{ isset($route_name[1]) && $route_name[1] == 'responsibilities' ? 'active' : '' }}"><a href="{{ route('responsibilities') }}" class="{{ isset($route_name[1]) && $route_name[1] == 'responsibility-of-member' ? 'active' : '' }} text-gray-800"> <span class="text-gray-800">Responsibilities of the Member</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <li><a href="#" class="block p-2">Menu Item 1</a></li>
                    <li><a href="#" class="block p-2">Menu Item 2</a></li>
                    <li><a href="#" class="block p-2">Menu Item 3</a></li>

                </ul>
                <!-- </div> -->
            </aside>
        </div>

    </nav>

</header>


<script type="module">
    // responsive menu 
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.getElementById('toggle-sidebar');
        const responsiveMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const searchIcon = document.getElementById('search-icon');
        const closeSidebarButton = document.getElementById('close-sidebar');

        toggleButton.addEventListener('click', function() {
            responsiveMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            searchIcon.classList.toggle('hidden');
            document.body.classList.toggle('overflow-hidden');
        });
        closeSidebarButton.addEventListener('click', function() {
            responsiveMenu.classList.add('hidden');
            menuIcon.classList.remove('hidden');
            document.body.classList.remove('overflow-hidden');
        });

    });
    // feather icon
    document.addEventListener("DOMContentLoaded", function() {
        feather.replace({
            id: "activity",
            class: "feather"
        });
    });

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

    // menu scroll animation
    document.addEventListener('DOMContentLoaded', function() {
        var navbar = document.getElementById('navbar');

        // Add scroll event listener
        window.addEventListener('scroll', function() {
            // Check if the scroll position is less than 200px
            if (window.scrollY < 200) {
                // Remove the navbar-scroll class if present
                navbar.classList.remove('navbar-scroll');
            } else {
                // Add the navbar-scroll class if scroll position is 200px or more
                navbar.classList.add('navbar-scroll');
            }
        });
    });
</script>