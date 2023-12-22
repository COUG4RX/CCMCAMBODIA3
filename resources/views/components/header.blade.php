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
                <div class="absolute inset-y-0 left-0 flex items-center">
                    <!-- Mobile menu button-->
                    <button type="button" class="xs:block sm:block md:hidden lg:hidden xl:hidden xxl:hidden relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false" id="toggle-sidebar">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <svg class=" h-7 w-7 text-white gap-3 bg-transparent" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" aria-hidden="true" id="menu-icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>

                <!-- Main Menu  -->
                <div class="flex flex-1 justify-between ps-0 ">
                    <div class="hidden md:block lg:block xl:block">
                        <div class="container flex gap-3">
                            <a href="{{route('homepage') }}" class="responsive-text-drop-down text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold  {{ isset($route_name[0]) && $route_name[0] == 'homepage' ? 'active' : '' }}" aria-current="page">Home</a>
                            <!-- About CCC -->
                            <div class="relative group dropdown">
                                <!-- Main Dropdown -->
                                <button class="responsive-text-drop-down text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold {{ isset($route_name[0]) && $route_name[0] == 'about' || isset($route_name[0]) && $route_name[0] == 'meeting' || isset($route_name[0]) && $route_name[0] == 'introduction' || isset($route_name[0]) && $route_name[0] == 'mandate' || isset($route_name[0]) && $route_name[0] == 'governance' || isset($route_name[0]) && $route_name[0] == 'role-and-responsi' || isset($route_name[0]) && $route_name[0] == 'core-principle' || isset($route_name[0]) && $route_name[0] == 'structure' || isset($route_name[0]) && $route_name[0] == 'office-bearers' || isset($route_name[0]) && $route_name[0] == 'secretariat' || isset($route_name[0]) && $route_name[0] == 'membership' || isset($route_name[0]) && $route_name[0] == 'right-of-members' ||  isset($route_name[0]) && $route_name[0] == 'responsibilities' ? 'active' : '' }}">
                                    About CCC <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <!-- Sub Dropdown -->
                                <div class="dropdown-menu absolute bg-white text-gray-800 border-gray-300 rounded-md shadow-lg  group-hover:block w-[280px] h-auto py-5 hidden">
                                    <a href="{{route('meeting')}}" class="block px-4"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 {{ isset($route_name[0]) && $route_name[0] == 'meeting' ? 'active' : '' }}"><span>Meeting</a>
                                    <a href="{{route('introduction')}}" class="block px-4 py-1 {{ isset($route_name[0]) && $route_name[0] == 'introduction' ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 ">introduction</span></a>
                                    <a href="{{route('mandate')}}" class="block px-4 py-1 {{ isset($route_name[0]) && $route_name[0] == 'mandate' ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1">Mandate</span></a>
                                    <a href="{{route('governance')}}" class="block px-4 py-1 {{ isset($route_name[0]) && $route_name[0] == 'governance' ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 ">governance</span></a>
                                    <a href="{{route('role-and-responsi')}}" class="block px-4 py-1 {{ isset($route_name[0]) && $route_name[0] == 'role-and-responsi' ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 ">Roles and Responsibility</span></a>
                                    <a href="{{route('core-principle')}}" class="block px-4 py-1 {{ isset($route_name[0]) && $route_name[0] == 'core-principle' ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 ">Core Principles</span></a>
                                    <a href="{{route('structure')}}" class="block px-4 py-1 {{ isset($route_name[0]) && $route_name[0] == 'structure' ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 ">Structure</span></a>
                                    <a href="{{route('office-bearers')}}" class="block px-4 py-1 {{ isset($route_name[0]) && $route_name[0] == 'office-bearers' ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 ">Office Bearers</span></a>
                                    <a href="{{route('secretariat')}}" class=" block px-4 py-1 {{ isset($route_name[0]) && $route_name[0] == 'secretariat' ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 ">Secretariat</span></a>
                                    <ul class="sub-dropdown flex justify-between">
                                        <li class="sub-dropdown-menu">
                                            <a href="#" class="block hover_drop relative z-[5] px-4 py-1 dropdown-hvr hover:ms-1 {{ isset($route_name[0]) && $route_name[0] == 'membership' || isset($route_name[0]) && $route_name[0] == 'right-of-members' ||  isset($route_name[0]) && $route_name[0] == 'responsibilities' ? 'active' : '' }}"><span class="hvr-color">Membership </span>
                                                <div class="angle-right-icon absolute top-1 right-0 me-5">
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </div>
                                                <ul class="double-sub-dropdown  w-[400px] absolute mt-1 left-[100%] top-[85%] bg-white text-gray-800 border-gray-300 rounded-md shadow-lg z-[10]">
                                                    <div class="item">
                                                        <a href="{{route('membership')}}" class="block px-4 py-1"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 {{ isset($route_name[0]) && $route_name[0] == 'membership'  ? 'active' : '' }}"><span>Membership</a>
                                                        <a href="{{route('right-of-members')}}" class="block px-4 py-1 {{ isset($route_name[0]) && $route_name[0] == 'right-of-members' ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 "><span>Right of Members</a>
                                                        <a href="{{route('responsibilities')}}" class="block px-4 py-1 pb-5 {{ isset($route_name[0]) && $route_name[0] == 'responsibilities'  ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 "><span>Responsibilities of the Members</a>
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
                                <button class="responsive-text-drop-down text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold {{ isset($route_name[0]) && $route_name[0] == 'committess' || isset($route_name[0]) && $route_name[0] == 'member-list' ||  isset($route_name[0]) && $route_name[0] == 'reference' ? 'active' : '' }}">
                                    Committess <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <!-- Sub Dropdown -->
                                <div class="dropdown-menu absolute bg-white text-gray-800 border-gray-300 rounded-md shadow-lg  group-hover:block w-[280px] h-auto py-3 hidden">
                                    <ul class="sub-dropdown flex justify-between">
                                        <li class="sub-dropdown-menu">
                                            <a href="#" class="block hover_drop relative z-[5] px-4 py-1 dropdown-hvr hover:ms-1 {{ isset($route_name[0]) && $route_name[0] == 'committess' || isset($route_name[0]) && $route_name[0] == 'member-list' ||  isset($route_name[0]) && $route_name[0] == 'reference' ? 'active' : '' }}"><span class="hvr-color">Oversight Committee </span>
                                                <div class="angle-right-icon absolute top-1 right-0 me-5">
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </div>
                                                <ul class="double-sub-dropdown  w-[400px] absolute left-[100%] top-[15%] bg-white text-gray-800 border-gray-300 rounded-md shadow-lg z-[10] ">
                                                    <div class="item">
                                                        <a href="{{route('member-list') }}" class="block px-4 pb-2"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 {{ isset($route_name[0]) && $route_name[0] == 'member-list' ? 'active' : '' }}"><span>CCC-OC Member List</a>
                                                        <a href="{{route('reference') }}" class="block px-4 pb-3 {{ isset($route_name[0]) && $route_name[0] == 'reference' ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>CCC-OC Terms of Reference</a>
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
                                <button class="responsive-text-drop-down text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold {{ isset($route_name[0]) && $route_name[0] == 'document' || isset($route_name[0]) && $route_name[0] == 'oversight-plan' ||  isset($route_name[0]) && $route_name[0] == 'manual' ||  isset($route_name[0]) && $route_name[0] == 'other'  || isset($route_name[0]) && $route_name[0] == 'ccc-oc' ||  isset($route_name[0]) && $route_name[0] == 'ccc' || isset($route_name[0]) && $route_name[0] == 'oversight-visit' || isset($route_name[0]) && $route_name[0] == 'retreat-report' ? 'active' : '' }}">
                                    Document <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <!-- Sub Dropdown -->
                                <div class="dropdown-menu hidden absolute bg-white text-gray-800 border-gray-300 rounded-md shadow-lg  group-hover:block w-[280px] h-auto py-3">
                                    <ul class="sub-dropdown flex justify-between">
                                        <li class="sub-dropdown-menu">
                                            <a href="#" class="block hover_drop relative z-[5] px-4 py-1 dropdown-hvr hover:ms-1 {{ isset($route_name[0]) && $route_name[0] == 'document' || isset($route_name[0]) && $route_name[0] == 'oversight-plan' ||  isset($route_name[0]) && $route_name[0] == 'manual' ||  isset($route_name[0]) && $route_name[0] == 'other'  ? 'active' : '' }}"><span class="hvr-color">CCC Document </span>
                                                <div class="angle-right-icon absolute top-1 right-0 me-5">
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </div>
                                                <ul class="double-sub-dropdown  w-[400px] absolute left-[100%] top-[15%] bg-white text-gray-800 border-gray-300 rounded-md shadow-lg z-[10] ">
                                                    <div class="item">
                                                        <a href="{{route('oversight-plan')}}" class="block px-4 pb-2 {{ isset($route_name[0]) && $route_name[0] == 'oversight-plan' ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>CCC Oversight Plan</a>
                                                        <a href="{{route('manual')}}" class="block px-4 pb-3 {{ isset($route_name[0]) && $route_name[0] == 'manual' ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>CCC Governance Manual 25072019_VH-br <span>9Aug2019</span></a>
                                                        <a href="{{route('other')}}" class="block px-4 pb-3 {{ isset($route_name[0]) && $route_name[0] == 'other'  ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>Others</a>
                                                    </div>
                                                </ul>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="sub-dropdown flex justify-between">
                                        <li class="sub-dropdown-menu">
                                            <a href="#" class="block hover_drop relative z-[5] px-4 py-1 dropdown-hvr hover:ms-1 {{ isset($route_name[0]) && $route_name[0] == 'meeting-minute' || isset($route_name[0]) && $route_name[0] == 'ccc-oc' ||  isset($route_name[0]) && $route_name[0] == 'ccc'  ? 'active' : '' }}"><span class="hvr-color">Meeting Minute </span>
                                                <div class="angle-right-icon absolute top-1 right-0 me-5">
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </div>
                                                <ul class="double-sub-dropdown  w-[400px] absolute left-[100%] top-[40%] bg-white text-gray-800 border-gray-300 rounded-md shadow-lg z-[10] ">
                                                    <div class="item">
                                                        <a href="{{route('ccc-oc')}}" class="block px-4 pb-2 {{ isset($route_name[0]) && $route_name[0] == 'ccc-oc'  ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>CCC-OC</a>
                                                        <a href="{{route('ccc')}}" class="block px-4 pb-3 {{ isset($route_name[0]) && $route_name[0] == 'ccc'  ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>CCC</a>
                                                    </div>
                                                </ul>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="sub-dropdown flex justify-between">
                                        <li class="sub-dropdown-menu">
                                            <a href="#" class="block hover_drop relative z-[5] px-4 py-1 dropdown-hvr hover:ms-1 {{ isset($route_name[0]) && $route_name[0] == 'oversight-visit' || isset($route_name[0]) && $route_name[0] == 'retreat-report' ? 'active' : '' }}"><span class="hvr-color">Reports </span>
                                                <div class="angle-right-icon absolute top-1 right-0 me-5">
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </div>
                                                <ul class="double-sub-dropdown  w-[400px] absolute left-[100%] top-[65%] bg-white text-gray-800 border-gray-300 rounded-md shadow-lg z-[10] ">
                                                    <div class="item">
                                                        <a href="{{route('oversight-visit')}}" class="block px-4 pb-2 {{ isset($route_name[0]) && $route_name[0] == 'oversight-visit'  ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>CCC-OC Oversight Visit</a>
                                                        <a href="{{route('retreat-report')}}" class="block px-4 pb-3 {{ isset($route_name[0]) && $route_name[0] == 'retreat-report'  ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>CCC Retreat Reports</a>
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
                                <button class="responsive-text-drop-down text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold {{ isset($route_name[0]) && $route_name[0] == 'tb-hiv' || isset($route_name[0]) && $route_name[0] == 'tb' ||  isset($route_name[0]) && $route_name[0] == 'hiv' || isset($route_name[0]) && $route_name[0] == 'malaria' || isset($route_name[0]) && $route_name[0] == 'rssh' || isset($route_name[0]) && $route_name[0] == 'multi-countries'  ? 'active' : '' }}">GFATM Grant
                                    <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <!-- Sub Dropdown -->
                                <div class="dropdown-menu absolute bg-white text-gray-800 border-gray-300 rounded-md shadow-lg  group-hover:block w-[280px] h-auto py-5 hidden">
                                    <a href="{{route('tb-hiv')}}" class="block px-4 {{ isset($route_name[0]) && $route_name[0] == 'tb-hiv'  ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 "><span>TB/HIV</a>
                                    <a href="{{route('tb')}}" class="block px-4 py-1 {{ isset($route_name[0]) && $route_name[0] == 'tb'  ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1">TB</span></a>
                                    <a href="{{route('hiv')}}" class="block px-4 py-1 {{ isset($route_name[0]) && $route_name[0] == 'hiv'  ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1">HIV</span></a>
                                    <a href="{{route('malaria')}}" class="block px-4 py-1 {{ isset($route_name[0]) && $route_name[0] == 'malaria'  ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 ">Malaria</span></a>
                                    <a href="{{route('rssh')}}" class="block px-4 py-1 {{ isset($route_name[0]) && $route_name[0] == 'rssh'  ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 ">RSSH</span></a>
                                    <a href="{{route('multi-countries')}}" class="block px-4 py-1 {{ isset($route_name[0]) && $route_name[0] == 'multi-countries'  ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 ">Multi-Countries TB Migrant</span></a>
                                </div>
                            </div>
                            <!-- Principal Recipients -->
                            <div class="relative group dropdown">
                                <!-- Main Dropdown -->
                                <button class="responsive-text-drop-down text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold {{ isset($route_name[0]) && $route_name[0] == 'pudr' || isset($route_name[0]) && $route_name[0] == 'management-letter' ||  isset($route_name[0]) && $route_name[0] == 'audit-report' || isset($route_name[0]) && $route_name[0] == 'unops-pudr' || isset($route_name[0]) && $route_name[0] == 'unops-management-letter' || isset($route_name[0]) && $route_name[0] == 'unops-audit-report'  ? 'active' : '' }}">
                                    Principal Recipients <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <!-- Sub Dropdown -->
                                <div class="dropdown-menu hidden absolute bg-white text-gray-800 border-gray-300 rounded-md shadow-lg  group-hover:block w-[280px] h-auto py-3">
                                    <ul class="sub-dropdown flex justify-between">
                                        <li class="sub-dropdown-menu">
                                            <a href="#" class="block hover_drop relative z-[5] px-4 py-1 dropdown-hvr hover:ms-1 {{ isset($route_name[0]) && $route_name[0] == 'pudr' || isset($route_name[0]) && $route_name[0] == 'management-letter' || isset($route_name[0]) && $route_name[0] == 'audit-report'  ? 'active' : '' }}"><span class="hvr-color">Principal Recipient <br> MEF/MoH-LIT</span>
                                                <div class="angle-right-icon absolute top-4 right-0 me-5">
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </div>
                                                <ul class="double-sub-dropdown  w-[400px] absolute left-[100%] top-[15%] bg-white text-gray-800 border-gray-300 rounded-md shadow-lg z-[10] ">
                                                    <div class="item">
                                                        <a href="{{route('pudr')}}" class="block px-4 pb-2 {{ isset($route_name[0]) && $route_name[0] == 'pudr'  ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>PUDR</a>
                                                        <a href="{{route('management-letter')}}" class="block px-4 pb-3 {{ isset($route_name[0]) && $route_name[0] == 'management-letter'  ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>Management Letter</a>
                                                        <a href="{{route('audit-report')}}" class="block px-4 pb-3 {{ isset($route_name[0]) && $route_name[0] == 'audit-report'  ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>Audit Report</a>
                                                    </div>
                                                </ul>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="sub-dropdown flex justify-between">
                                        <li class="sub-dropdown-menu">
                                            <a href="#" class="block hover_drop relative z-[5] px-4 py-1 dropdown-hvr hover:ms-1 {{ isset($route_name[0]) && $route_name[0] == 'unops-pudr' || isset($route_name[0]) && $route_name[0] == 'unops-management-letter' || isset($route_name[0]) && $route_name[0] == 'unops-audit-report'  ? 'active' : '' }}"><span class="hvr-color">Principal Recipient UNOPS</span>
                                                <div class="angle-right-icon absolute top-1 right-0 me-5">
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </div>
                                                <ul class="double-sub-dropdown  w-[400px] absolute left-[100%] top-[55%] bg-white text-gray-800 border-gray-300 rounded-md shadow-lg z-[10] ">
                                                    <div class="item">
                                                        <a href="{{route('unops-pudr')}}" class="block px-4 pb-2 {{ isset($route_name[0]) && $route_name[0] == 'unops-pudr'  ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>PUDR</a>
                                                        <a href="{{route('unops-management-letter')}}" class="block px-4 pb-3 {{ isset($route_name[0]) && $route_name[0] == 'unops-management-letter'  ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>Management Letter</a>
                                                        <a href="{{route('unops-audit-report')}}" class="block px-4 pb-3 {{ isset($route_name[0]) && $route_name[0] == 'unops-audit-report'  ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1"><span>Audit Report</a>
                                                    </div>
                                                </ul>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Activity -->
                            <a href="{{route('activity')}}" class="responsive-text-drop-down text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold {{ isset($route_name[0]) && $route_name[0] == 'activity'  ? 'active' : '' }}" aria-current="page">Activity</a>
                            <!-- Career  -->
                            <a href="{{route('career')}}" class="responsive-text-drop-down text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold {{ isset($route_name[0]) && $route_name[0] == 'career'  ? 'active' : '' }}" aria-current="page">Career</a>

                            <!-- Media  -->
                            <div class="relative group dropdown">
                                <!-- Main Dropdown -->
                                <button class="responsive-text-drop-down text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold {{ isset($route_name[0]) && $route_name[0] == 'news' || isset($route_name[0]) && $route_name[0] == 'video' || isset($route_name[0]) && $route_name[0] == 'gallary' || isset($route_name[0]) && $route_name[0] == 'view-detail-01' || isset($route_name[0]) && $route_name[0] == 'view-detail-02'  ? 'active' : '' }}">Media
                                    <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <!-- Sub Dropdown -->
                                <div class="dropdown-menu absolute bg-white text-gray-800 border-gray-300 rounded-md shadow-lg  group-hover:block w-[280px] h-auto py-3 hidden">
                                    <a href="{{route('news')}}" class="block px-4 py-1 {{ isset($route_name[0]) && $route_name[0] == 'news' || isset($route_name[0]) && $route_name[0] == 'view-detail-01' || isset($route_name[0]) && $route_name[0] == 'view-detail-02'  ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1 "><span>News</a>
                                    <a href="{{route('video')}}" class="block px-4 py-1 {{ isset($route_name[0]) && $route_name[0] == 'video'  ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1">Video</span></a>
                                    <a href="{{route('gallary')}}" class="block px-4 py-1 {{ isset($route_name[0]) && $route_name[0] == 'gallary'  ? 'active' : '' }}"><span class="dropdown-hvr hover:text-sky-400 hover:ms-1">Gallary</span></a>
                                </div>
                            </div>

                            <!-- Contact Us  -->
                            <a href="{{route('contact-us')}}" class="responsive-text-drop-down text-white hover:text-sky-400 rounded-md py-3 text-sm font-bold {{ isset($route_name[0]) && $route_name[0] == 'contact-us'  ? 'active' : '' }}" aria-current="page">Contact Us</a>

                        </div>
                    </div>
                </div>
                <!-- search bar  -->
                <div class="pt-2">
                    <div class="relative h-auto sm:right-0 justify-end">
                        <i id="search-icon" class="search-icon text-end w-8 cursor-pointer text-white fas fa-search relative z-[100] text-lg pe-2"></i>
                        <input id="search-bar" class="hidden absolute top-0 right-0 p-1 text-sm rounded-3xl ps-2 placeholder-gray-500 focus:outline-none z-[90]" type="text" placeholder="Search">
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="responsive-menu hidden z-[1200] h-[100%] relative" id="mobile-menu">
            <!-- Your sidebar content goes here -->
            <aside class="fixed bg-responsive-menu top-0 left-0 z-40 h-screen">


                <div class="w-[100%] xs:w-[80%] h-[100%] overflow-y-scroll relative">
                    <!-- close button  -->
                    <button type="button" class="left-[92%] bottom-[96%] xs:bottom-[97%] sm:bottom-[97%] xs:left-[93%] sm:left-[94%] z-[120] text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white absolute" aria-controls="mobile-menu" aria-expanded="false" id="close-sidebar">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-7 w-7 text-white xs:left-[60%]" style="font-weight: bold;" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                    <div class="banner-logo px-6  py-10 z-[100] w-[100%] relative" style="background-color: #5AACE2; ">
                    
                        <img src="{{asset('assets/img/Logo/logo-website.png')}}" alt="">
                    </div>

                    <!-- Responsive Menu  -->

                    <ul class="p-4 w-[100%]" style="background-color: #f5f5f5;">
                        <!-- Home  -->
                        <div>
                            <a href="{{ route('homepage') }}" class="pointer-event ">
                                <span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'homepage' ? 'active' : '' }}"><i class="fa-solid fa-house me-2 ms-1"></i></span>
                                <span class="{{ isset($route_name[0]) && $route_name[0] == 'homepage' ? 'active' : '' }}">Home</span>
                            </a>
                        </div>

                        <!-- drop-down responsive -->
                        <!-- About CCC  -->
                        <div class="dropdown mt-3 ">
                            <button class="btn btn-custom flex justify-between bg-none w-[100%] {{ isset($route_name[0]) && $route_name[0] == 'about' || isset($route_name[0]) && $route_name[0] == 'meeting' || isset($route_name[0]) && $route_name[0] == 'introduction' || isset($route_name[0]) && $route_name[0] == 'mandate' || isset($route_name[0]) && $route_name[0] == 'governance' || isset($route_name[0]) && $route_name[0] == 'role-and-responsi' || isset($route_name[0]) && $route_name[0] == 'core-principle' || isset($route_name[0]) && $route_name[0] == 'structure' || isset($route_name[0]) && $route_name[0] == 'office-bearers' || isset($route_name[0]) && $route_name[0] == 'secretariat' || isset($route_name[0]) && $route_name[0] == 'membership' || isset($route_name[0]) && $route_name[0] == 'right-of-members' ||  isset($route_name[0]) && $route_name[0] == 'responsibilities' ? 'active' : '' }}" id="rotateButton1" type="button" data-bs-toggle="dropdown">
                                <a href="#" class=""><i class="fa-solid fa-circle-info me-2"></i>
                                    <span class="text-gray-800 customize-icon w-[100%] {{ isset($route_name[0]) && $route_name[0] == 'about' || isset($route_name[0]) && $route_name[0] == 'meeting' || isset($route_name[0]) && $route_name[0] == 'introduction' || isset($route_name[0]) && $route_name[0] == 'mandate' || isset($route_name[0]) && $route_name[0] == 'governance' || isset($route_name[0]) && $route_name[0] == 'role-and-responsi' || isset($route_name[0]) && $route_name[0] == 'core-principle' || isset($route_name[0]) && $route_name[0] == 'structure' || isset($route_name[0]) && $route_name[0] == 'office-bearers' || isset($route_name[0]) && $route_name[0] == 'secretariat' || isset($route_name[0]) && $route_name[0] == 'membership' || isset($route_name[0]) && $route_name[0] == 'right-of-members' ||  isset($route_name[0]) && $route_name[0] == 'responsibilities' ? 'active' : '' }}">About CCC</span>
                                </a>
                                <div class="angle-right" id="icon1"><i class="fa-solid fa-angle-down"></i></div>
                            </button>
                            <ul class="dropdown-menu ms-4 " id="dNone1">
                                <li class="py-1 "><a class="dropdown-item" href="{{ route('meeting') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[0]) && $route_name[0] == 'meeting' ? 'active' : '' }}"></i> <span class="{{ isset($route_name[0]) && $route_name[0] == 'meeting' ? 'active' : '' }} text-gray-800">Meeting</span></a></li>
                                <li class="py-1"><a class="dropdown-item" href="{{ route('introduction') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[0]) && $route_name[0] == 'introduction' ? 'active' : '' }}"></i><span class="{{ isset($route_name[0]) && $route_name[0] == 'introduction' ? 'active' : '' }} text-gray-800">introduction</span> </a></li>
                                <li class="py-1"><a class="dropdown-item" href="{{ route('mandate') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[0]) && $route_name[0] == 'mandate' ? 'active' : '' }}"></i><span class="{{ isset($route_name[0]) && $route_name[0] == 'mandate' ? 'active' : '' }} text-gray-800">Mandate</span> </a></li>
                                <li class="py-1"><a class="dropdown-item" href="{{ route('governance') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[0]) && $route_name[0] == 'governance' ? 'active' : '' }}"></i><span class="{{ isset($route_name[0]) && $route_name[0] == 'governance' ? 'active' : '' }} text-gray-800">governance</span> </a></li>
                                <li class="py-1"><a class="dropdown-item" href="{{ route('role-and-responsi') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[0]) && $route_name[0] == 'role-and-responsi' ? 'active' : '' }}"></i><span class="{{ isset($route_name[0]) && $route_name[0] == 'role-and-responsi' ? 'active' : '' }} text-gray-800">Roles and Responsibility</span></a></li>
                                <li class="py-1"><a class="dropdown-item" href="{{ route('core-principle') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[0]) && $route_name[0] == 'core-principle' ? 'active' : '' }}"></i><span class="{{ isset($route_name[0]) && $route_name[0] == 'core-principle' ? 'active' : '' }} text-gray-800">Core Principles</span> </a></li>
                                <li class="py-1"><a class="dropdown-item" href="{{ route('structure') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[0]) && $route_name[0] == 'structure' ? 'active' : '' }}"></i><span class="{{ isset($route_name[0]) && $route_name[0] == 'structure' ? 'active' : '' }} text-gray-800">Structure</span> </a></li>
                                <li class="py-1"><a class="dropdown-item" href="{{ route('office-bearers') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[0]) && $route_name[0] == 'office-bearers' ? 'active' : '' }}"></i><span class="{{ isset($route_name[0]) && $route_name[0] == 'office-bearers' ? 'active' : '' }} text-gray-800">Office Bearers</span> </a></li>
                                <li class="py-1"><a class="dropdown-item" href="{{ route('secretariat') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[0]) && $route_name[0] == 'secretariat' ? 'active' : '' }}"></i><span class="{{ isset($route_name[0]) && $route_name[0] == 'secretariat' ? 'active' : '' }} text-gray-800">Secretariat</span> </a></li>
                                <li class="py-1"><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[0]) && $route_name[0] == 'membership' || isset($route_name[0]) && $route_name[0] == 'responsibility-of-member' ||  isset($route_name[0]) && $route_name[0] == 'right-of-members' ? 'active' : '' }}"></i><span class="{{ isset($route_name[0]) && $route_name[0] == 'membership' || isset($route_name[0]) && $route_name[0] == 'responsibility-of-member' ||  isset($route_name[0]) && $route_name[0] == 'right-of-members' ? 'active' : '' }} text-gray-800">Membership</span> </a>
                                    <ul class="ms-5">
                                        <li class="sub-dropdown-responsive py-1"><a href="{{ route('membership') }}" class=""> <span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'membership'  ? 'active' : '' }}"><i class="fa-regular fa-circle-dot"></i> Membership</span></a></li>
                                        <li class="sub-dropdown-responsive py-1 "><a href="{{ route('right-of-members') }}" class="text-gray-800"> <span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'right-of-members' ? 'active' : '' }}"><i class="fa-regular fa-circle-dot"></i> Right of Members</span></a></li>
                                        <li class="sub-dropdown-responsive py-1 "><a href="{{ route('responsibilities') }}" class="text-gray-800"> <span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'responsibilities' ? 'active' : '' }}"><i class="fa-regular fa-circle-dot"></i> Responsibilities of the Member</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <!-- Committees  -->
                        <div class="dropdown mt-3">
                            <button class="btn btn-custom flex justify-between bg-none w-[100%] {{ isset($route_name[0]) && $route_name[0] == 'committess' || isset($route_name[0]) && $route_name[0] == 'member-list' ||  isset($route_name[0]) && $route_name[0] == 'reference' ? 'active' : '' }}" id="rotateButton2" type="button" data-bs-toggle="dropdown">
                                <a href="#" class="{{ isset($route_name[0]) && $route_name[0] == 'about' ? 'active' : '' }} "><i class="fa-solid fa-box me-2"></i></i>
                                    <span class="text-gray-800 customize-icon w-[100%] {{ isset($route_name[0]) && $route_name[0] == 'committess' || isset($route_name[0]) && $route_name[0] == 'member-list' ||  isset($route_name[0]) && $route_name[0] == 'reference' ? 'active' : '' }}"> Committees</span>
                                </a>
                                <div class="angle-right" id="icon2"><i class="fa-solid fa-angle-down"></i></div>
                            </button>

                            <ul class="dropdown-menu ms-4 " id="dNone2">

                                <li class="py-1"><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[0]) && $route_name[0] == 'member-list' || isset($route_name[0]) && $route_name[0] == 'responsibility-of-member' ||  isset($route_name[0]) && $route_name[0] == 'right-member' || isset($route_name[0]) && $route_name[0] == 'reference' ? 'active' : '' }}"></i><span class="{{ isset($route_name[0]) && $route_name[0] == 'member-list' || isset($route_name[0]) && $route_name[0] == 'responsibility-of-member' ||  isset($route_name[0]) && $route_name[0] == 'reference' ? 'active' : '' }} text-gray-800">Oversight Committee</span> </a>
                                    <ul class="ms-5">
                                        <li class="sub-dropdown-responsive py-1"><a href="{{ route('member-list') }}" class=""> <span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'member-list' ? 'active' : '' }}"><i class="fa-regular fa-circle-dot"></i> CCC-OC Member list</span></a></li>
                                        <li class="sub-dropdown-responsive py-1"><a href="{{ route('reference') }}" class=" text-gray-800 "> <span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'reference' ? 'active' : '' }}"><i class="fa-regular fa-circle-dot"></i> CCC Term of Reference</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <!-- Document  -->
                        <div class="dropdown mt-3">
                            <button class="btn btn-custom flex justify-between bg-none w-[100%] {{ isset($route_name[0]) && $route_name[0] == 'document' || isset($route_name[0]) && $route_name[0] == 'oversight-plan' ||  isset($route_name[0]) && $route_name[0] == 'manual' ||  isset($route_name[0]) && $route_name[0] == 'other'  || isset($route_name[0]) && $route_name[0] == 'ccc-oc' ||  isset($route_name[0]) && $route_name[0] == 'ccc' || isset($route_name[0]) && $route_name[0] == 'oversight-visit' || isset($route_name[0]) && $route_name[0] == 'retreat-report' ? 'active' : '' }}" id="rotateButton3" type="button" data-bs-toggle="dropdown">
                                <a href="#" class="{{ isset($route_name[0]) && $route_name[0] == 'about' ? 'active' : '' }} "><i class="fa-solid fa-bookmark me-2"></i>
                                    <span class="text-gray-800 customize-icon w-[100%] {{ isset($route_name[0]) && $route_name[0] == 'document' || isset($route_name[0]) && $route_name[0] == 'oversight-plan' ||  isset($route_name[0]) && $route_name[0] == 'manual' ||  isset($route_name[0]) && $route_name[0] == 'other'  || isset($route_name[0]) && $route_name[0] == 'ccc-oc' ||  isset($route_name[0]) && $route_name[0] == 'ccc' || isset($route_name[0]) && $route_name[0] == 'oversight-visit' || isset($route_name[0]) && $route_name[0] == 'retreat-report' ? 'active' : '' }}"> Document </span>
                                </a>
                                <div class="angle-right" id="icon3"><i class="fa-solid fa-angle-down"></i></div>
                            </button>

                            <ul class="dropdown-menu ms-4 " id="dNone3">
                                <!-- CCC Document  -->
                                <li class="py-1"><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[0]) && $route_name[0] == 'document' || isset($route_name[0]) && $route_name[0] == 'oversight-plan' ||  isset($route_name[0]) && $route_name[0] == 'manual' ||  isset($route_name[0]) && $route_name[0] == 'other'  ? 'active' : '' }}"></i><span class="{{ isset($route_name[0]) && $route_name[0] == 'document' || isset($route_name[0]) && $route_name[0] == 'oversight-plan' ||  isset($route_name[0]) && $route_name[0] == 'manual' ||  isset($route_name[0]) && $route_name[0] == 'other'  ? 'active' : '' }} text-gray-800"> CCC Document</span> </a>
                                    <ul class="ms-5">
                                        <li class="sub-dropdown-responsive py-1"><a href="{{ route('oversight-plan') }}" class=""> <span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'oversight-plan'  ? 'active' : '' }}"><i class="fa-regular fa-circle-dot"></i> CCC Oversight Plan</span></a></li>
                                        <li class="sub-dropdown-responsive py-1 "><a href="{{ route('manual') }}" class="text-gray-800"> <span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'manual' ? 'active' : '' }}"><i class="fa-regular fa-circle-dot"></i> CCC Governance Manual 25072019_VH-9Aug2019</span></a></li>
                                        <li class="sub-dropdown-responsive py-1 "><a href="{{ route('other') }}" class=" text-gray-800"> <span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'other' ? 'active' : '' }}"><i class="fa-regular fa-circle-dot"></i> Other</span></a></li>
                                    </ul>
                                </li>

                                <!-- Meeting Minute  -->
                                <li class="py-1"><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[0]) && $route_name[0] == 'meeting-minute' || isset($route_name[0]) && $route_name[0] == 'ccc-oc' ||  isset($route_name[0]) && $route_name[0] == 'ccc'  ? 'active' : '' }}"></i><span class="{{ isset($route_name[0]) && $route_name[0] == 'meeting-minute' || isset($route_name[0]) && $route_name[0] == 'ccc-oc' ||  isset($route_name[0]) && $route_name[0] == 'ccc'  ? 'active' : '' }} text-gray-800"> Meeting Minute</span> </a>
                                    <ul class="ms-5">
                                        <li class="sub-dropdown-responsive py-1 "><a href="{{ route('ccc-oc') }}" class=""> <span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'ccc-oc'  ? 'active' : '' }}"><i class="fa-regular fa-circle-dot"></i> CCC-OC</span></a></li>
                                        <li class="sub-dropdown-responsive py-1 "><a href="{{ route('ccc') }}" class=""> <span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'ccc'  ? 'active' : '' }}"><i class="fa-regular fa-circle-dot"></i> CCC</span></a></li>
                                    </ul>
                                </li>

                                <!-- Reports  -->
                                <li class="py-1"><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[0]) && $route_name[0] == 'oversight-visit' || isset($route_name[0]) && $route_name[0] == 'retreat-report' ? 'active' : '' }}"></i><span class="{{ isset($route_name[0]) && $route_name[0] == 'oversight-visit' || isset($route_name[0]) && $route_name[0] == 'retreat-report' ? 'active' : '' }} text-gray-800"> Reports</span> </a>
                                    <ul class="ms-5">
                                        <li class="sub-dropdown-responsive py-1"><a href="{{ route('oversight-visit') }}" class=""> <span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'oversight-visit'  ? 'active' : '' }}"><i class="fa-regular fa-circle-dot"></i> CCC-OC Oversight Visit</span></a></li>
                                        <li class="sub-dropdown-responsive py-1 "><a href="{{ route('retreat-report') }}" class=" text-gray-800"> <span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'retreat-report'  ? 'active' : '' }}"><i class="fa-regular fa-circle-dot"></i> CCC Retreat Reports</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <!-- GFATM Grant -->
                        <div class="dropdown mt-3">
                            <button class="btn btn-custom flex justify-between bg-none w-[100%] {{ isset($route_name[0]) && $route_name[0] == 'tb-hiv' || isset($route_name[0]) && $route_name[0] == 'tb' ||  isset($route_name[0]) && $route_name[0] == 'hiv' || isset($route_name[0]) && $route_name[0] == 'malaria' || isset($route_name[0]) && $route_name[0] == 'rssh' || isset($route_name[0]) && $route_name[0] == 'multi-countries'  ? 'active' : '' }}" id="rotateButton4" type="button" data-bs-toggle="dropdown">
                                <a href="#" class="{{ isset($route_name[0]) && $route_name[0] == 'about' ? 'active' : '' }} "><i class="fa-solid fa-gift me-2"></i>
                                    <span class="text-gray-800 customize-icon w-[100%] {{ isset($route_name[0]) && $route_name[0] == 'tb-hiv' || isset($route_name[0]) && $route_name[0] == 'tb' ||  isset($route_name[0]) && $route_name[0] == 'hiv' || isset($route_name[0]) && $route_name[0] == 'malaria' || isset($route_name[0]) && $route_name[0] == 'rssh' || isset($route_name[0]) && $route_name[0] == 'multi-countries'  ? 'active' : '' }}">GFATM Grant </span>
                                </a>
                                <div class="angle-right" id="icon4"><i class="fa-solid fa-angle-down"></i></div>
                            </button>

                            <ul class="dropdown-menu ms-4 " id="dNone4">
                                <li class="py-1 "><a class="dropdown-item {{ isset($route_name[0]) && $route_name[0] == 'tb-hiv'  ? 'active' : '' }}" href="{{ route('tb-hiv') }}"><i class="fa-solid fa-angle-right me-2 "></i> <span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'tb-hiv'  ? 'active' : '' }}">TB/HIV</span></a></li>

                                <li class="py-1"><a class="dropdown-item {{ isset($route_name[0]) && $route_name[0] == 'tb'  ? 'active' : '' }}" href="{{ route('tb') }}"><i class="fa-solid fa-angle-right me-2 "></i><span class="text-gray-800 {{ isset($route_name[0]) &&   $route_name[0] == 'tb'  ? 'active' : '' }}">TB</span> </a></li>

                                <li class="py-1"><a class="dropdown-item {{ isset($route_name[0]) && $route_name[0] == 'hiv'  ? 'active' : '' }}" href="{{ route('hiv') }}"><i class="fa-solid fa-angle-right me-2 "></i><span class=" text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'hiv'  ? 'active' : '' }}">HIV</span> </a></li>

                                <li class="py-1"><a class="dropdown-item {{ isset($route_name[0]) && $route_name[0] == 'malaria'  ? 'active' : '' }}" href="{{ route('malaria') }}"><i class="fa-solid fa-angle-right me-2 "></i><span class=" text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'malaria'  ? 'active' : '' }}">Malaria</span> </a></li>

                                <li class="py-1"><a class="dropdown-item {{ isset($route_name[0]) && $route_name[0] == 'rssh'  ? 'active' : '' }}" href="{{ route('rssh') }}"><i class="fa-solid fa-angle-right me-2 "></i><span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'rssh'  ? 'active' : '' }}">RSSH</span></a></li>

                                <li class="py-1"><a class="dropdown-item {{ isset($route_name[0]) && $route_name[0] == 'multi-countries'  ? 'active' : '' }}" href="{{ route('multi-countries') }}"><i class="fa-solid fa-angle-right me-2 "></i><span class=" text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'multi-countries'  ? 'active' : '' }}">Multi-Countries TB Migrant</span> </a></li>

                            </ul>
                        </div>

                        <!-- Principle  -->
                        <div class="dropdown mt-3">
                            <button class="btn btn-custom flex justify-between bg-none w-[100%] {{ isset($route_name[0]) && $route_name[0] == 'pudr' || isset($route_name[0]) && $route_name[0] == 'management-letter' ||  isset($route_name[0]) && $route_name[0] == 'audit-report' || isset($route_name[0]) && $route_name[0] == 'unops-pudr' || isset($route_name[0]) && $route_name[0] == 'unops-management-letter' || isset($route_name[0]) && $route_name[0] == 'unops-audit-report'  ? 'active' : '' }}" id="rotateButton5" type="button" data-bs-toggle="dropdown">
                                <a href="#" class="{{ isset($route_name[0]) && $route_name[0] == 'about' ? 'active' : '' }} "><i class="fa-solid fa-book-bookmark me-2"></i>
                                    <span class="text-gray-800 customize-icon w-[100%] {{ isset($route_name[0]) && $route_name[0] == 'pudr' || isset($route_name[0]) && $route_name[0] == 'management-letter' ||  isset($route_name[0]) && $route_name[0] == 'audit-report' || isset($route_name[0]) && $route_name[0] == 'unops-pudr' || isset($route_name[0]) && $route_name[0] == 'unops-management-letter' || isset($route_name[0]) && $route_name[0] == 'unops-audit-report'  ? 'active' : '' }}"> Principal Recipients </span>
                                </a>
                                <div class="angle-right" id="icon5"><i class="fa-solid fa-angle-down"></i></div>
                            </button>

                            <ul class="dropdown-menu ms-4 " id="dNone5">
                                <!-- Principal Recipient MEF/MoH-LIT -->
                                <li class="py-1"><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[0]) && $route_name[0] == 'pudr' || isset($route_name[0]) && $route_name[0] == 'management-letter' || isset($route_name[0]) && $route_name[0] == 'audit-report'  ? 'active' : '' }}"></i><span class="{{ isset($route_name[0]) && $route_name[0] == 'pudr' || isset($route_name[0]) && $route_name[0] == 'management-letter' || isset($route_name[0]) && $route_name[0] == 'audit-report'  ? 'active' : '' }} text-gray-800"> Principal Recipient MEF/MoH-LIT</span> </a>
                                    <ul class="ms-5">
                                        <li class="sub-dropdown-responsive py-1 "><a href="{{ route('pudr') }}" class=""> <span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'pudr'  ? 'active' : '' }}"><i class="fa-regular fa-circle-dot"></i> PUDR</span></a></li>
                                        <li class="sub-dropdown-responsive py-1 "><a href="{{ route('management-letter') }}" class=" text-gray-800"> <span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'management-letter'  ? 'active' : '' }}"><i class="fa-regular fa-circle-dot"></i> Management Letter</span></a></li>
                                        <li class="sub-dropdown-responsive py-1 "><a href="{{ route('audit-report') }}" class=" text-gray-800"> <span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'audit-report'  ? 'active' : '' }}"><i class="fa-regular fa-circle-dot"></i> Audit Report</span></a></li>
                                    </ul>
                                </li>
                                <!-- Principal Recipient UNOPS -->
                                <li class="py-1"><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[0]) && $route_name[0] == 'unops-pudr' || isset($route_name[0]) && $route_name[0] == 'unops-management-letter' || isset($route_name[0]) && $route_name[0] == 'unops-audit-report'  ? 'active' : '' }}"></i><span class="{{ isset($route_name[0]) && $route_name[0] == 'unops-pudr' || isset($route_name[0]) && $route_name[0] == 'unops-management-letter' || isset($route_name[0]) && $route_name[0] == 'unops-audit-report'  ? 'active' : '' }} text-gray-800"> Principal Recipient UNOPS</span> </a>
                                    <ul class="ms-5">
                                        <li class="sub-dropdown-responsive py-1 "><a href="{{ route('unops-pudr') }}" class=""> <span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'unops-pudr'  ? 'active' : '' }}"><i class="fa-regular fa-circle-dot"></i> PUDR</span></a></li>

                                        <li class="sub-dropdown-responsive py-1 "><a href="{{ route('unops-management-letter') }}" class="text-gray-800"> <span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'unops-management-letter'  ? 'active' : '' }}"><i class="fa-regular fa-circle-dot"></i> Managemnet Letter</span></a></li>

                                        <li class="sub-dropdown-responsive py-1 "><a href="{{ route('unops-audit-report') }}" class="text-gray-800"> <span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'unops-audit-report'  ? 'active' : '' }}"><i class="fa-regular fa-circle-dot"></i> Audit Report</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <!-- Activity -->
                        <div class="ms-1 mt-3">
                            <a href="{{ route('activity') }}" class="pointer-event ">
                                <span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'activity' ? 'active' : '' }}"><i class="fa-solid fa-message me-2"></i></span>
                                <span class="{{ isset($route_name[0]) && $route_name[0] == 'activity' ? 'active' : '' }}">Activity</span>
                            </a>
                        </div>


                        <!-- Career  -->
                        <div class="mt-3 ms-1">
                            <a href="{{ route('career') }}" class="pointer-event ">
                                <span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'career' ? 'active' : '' }}"><i class="fa-solid fa-suitcase me-2"></i></span>
                                <span class="{{ isset($route_name[0]) && $route_name[0] == 'career' ? 'active' : '' }}">Career</span>
                            </a>
                        </div>

                        <!-- Media  -->
                        <div class="dropdown mt-3 ">
                            <button class="btn btn-custom flex justify-between bg-none w-[100%]" id="rotateButton6" type="button" data-bs-toggle="dropdown">
                                <a href="#" class="{{ isset($route_name[0]) && $route_name[0] == 'news' || isset($route_name[0]) && $route_name[0] == 'video' || isset($route_name[0]) && $route_name[0] == 'gallary' || isset($route_name[0]) && $route_name[0] == 'view-detail-01' || isset($route_name[0]) && $route_name[0] == 'view-detail-02'  ? 'active' : '' }} "><i class="fa-solid fa-desktop me-2"></i>
                                    <span class="text-gray-800 customize-icon w-[100%] {{ isset($route_name[0]) && $route_name[0] == 'news' || isset($route_name[0]) && $route_name[0] == 'video' || isset($route_name[0]) && $route_name[0] == 'gallary' || isset($route_name[0]) && $route_name[0] == 'view-detail-01' || isset($route_name[0]) && $route_name[0] == 'view-detail-02'  ? 'active' : '' }}"> Media </span>
                                </a>
                                <div class="angle-right" id="icon6"><i class="fa-solid fa-angle-down"></i></div>
                            </button>

                            <ul class="dropdown-menu ms-4 " id="dNone6">
                                <li class="py-1 "><a class="dropdown-item {{ isset($route_name[0]) && $route_name[0] == 'news' ? 'active' : '' }}" href="{{ route('news') }}"><i class="fa-solid fa-angle-right me-2 "></i> <span class=" text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'news' ? 'active' : '' }}"> News</span></a></li>
                                <li class="py-1"><a class="dropdown-item {{ isset($route_name[0]) && $route_name[0] == 'video' ? 'active' : '' }} " href="{{ route('video') }}"><i class="fa-solid fa-angle-right me-2 "></i><span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'video' ? 'active' : '' }} ">Video</span> </a></li>
                                <li class="py-1"><a class="dropdown-item {{ isset($route_name[0]) && $route_name[0] == 'gallary' ? 'active' : '' }} " href="{{ route('gallary') }}"><i class="fa-solid fa-angle-right me-2 "></i><span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'gallary' ? 'active' : '' }} ">Gallary</span> </a></li>
                            </ul>
                        </div>

                        <!-- Contact Us -->
                        <div class="mt-3 ms-1">
                            <a href="{{ route('contact-us') }}" class="pointer-event ">
                                <span class="text-gray-800 {{ isset($route_name[0]) && $route_name[0] == 'contact-us' ? 'active' : '' }}"><i class="fa-solid fa-user me-2"></i></span>
                                <span class="{{ isset($route_name[0]) && $route_name[0] == 'contact-us' ? 'active' : '' }}">Contact-Us</span>
                            </a>
                        </div><br><br><br><br>
                    </ul>
                </div>
            </aside>
        </div>
    </nav>
</header>


<script type="module">
    // rotate icon offcanvas menu
    document.addEventListener("DOMContentLoaded", function() {
        for (let i = 1; i <= 6; i++) {
            let rotateButton = document.getElementById(`rotateButton${i}`);
            let icon = document.getElementById(`icon${i}`);
            let dNone = document.getElementById(`dNone${i}`);

            // Add a check to ensure the elements exist
            if (rotateButton && icon && dNone) {
                rotateButton.addEventListener("click", function() {
                    icon.classList.toggle("rotated");
                    dNone.classList.toggle("dnone");
                });
            } else {
                console.log('Not working!!!');
            }
        }
    });

    // responsive menu 
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.getElementById('toggle-sidebar');
        const responsiveMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const searchIcon = document.getElementById('search-icon');
        const searchBar = document.getElementById('search-bar');
        const closeSidebarButton = document.getElementById('close-sidebar');
        const closeBtn = document.getElementById('close-btn');

        toggleButton.addEventListener('click', function() {
            responsiveMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            searchIcon.classList.toggle('hidden');
            searchBar.classList.toggle('hidden');
            document.body.classList.toggle('overflow-hidden');
        });
        closeSidebarButton.addEventListener('click', function() {
            responsiveMenu.classList.add('hidden');
            searchIcon.classList.remove('hidden');
            menuIcon.classList.remove('hidden');
            document.body.classList.remove('overflow-hidden');
        });
    });
    // search bar
    $(document).ready(function() {
        $("#search-icon").click(function(e) {
            e.stopPropagation();
            $(this).toggleClass("text-white text-black");
            $(this).toggleClass("bg-transparent bg-white rounded-2xl");
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