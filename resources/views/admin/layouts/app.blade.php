<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="{{ asset('assets/images/kjora-new-logo.svg') }}"/>
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/home-logo.jpeg') }}">
    <link rel="apple-touch-startup-image" href="{{ asset('assets/images/home-logo.jpeg') }}"/>
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('assets/images/home-logo.jpeg') }}"/>
    <meta name="apple-mobile-web-app-title" content="Kjora">
    <meta name="apple-mobile-web-app-capable" content="yes">


    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
            -webkit-appearance: textfield;
        }

        .export-style {
            inset: -5px auto auto 0px !important;
        }

        .custom-dropdown-style {
            inset: -11px auto auto 0px !important;
        }

        .gm-style-iw-c {
            max-height: none !important;
        }

        .gm-style-iw-d {
            max-height: none !important;
        }
    </style>
    @yield('style')

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'roboto': ['Roboto', 'sans-serif']
                    },
                    colors: {
                        'dark-green': '#084108',
                        'link-blue': '#0783FF',
                        'light-green': '#006400',
                        'ball-green': '#094509',
                        'border-gray': '#707070',
                        'export-btn': '#152E03',
                        'photo-overlay': '#212121 ',
                        'upgrade-btn': '#CCBE77',
                        'rating-yellow': '#EAC600',
                        'modal-black': '#212121',
                        'heading-white': '#FFFFFF',
                        'gray-heading': '#656565',
                    },
                    spacing: {
                        '89': '5.563',
                        '109': '109px',
                    },
                    fontSize: {
                        'xxs': '10px',
                        '2xs': '8px',
                    },
                    spacing: {
                        '89': '5.563rem',
                        '109': '6.813rem',
                        '121': '31.563rem',
                        '400': '24.5rem',
                    },
                    placeholderColor: {
                        'dark-gray': '#373535',
                    },
                    opacity: {
                        '62': '0.62',
                    },
                    placeholderOpacity: {
                        '40': '0.4',
                    },
                    borderOpacity: {
                        '40': '0.4',
                    },
                    borderWidth: {
                        '3': '3px',
                    },
                }
            }
        }
    </script>

    <title>Kjora</title>
</head>

<body class="bg-no-repeat bg-right-top bg-cover font-roboto bg-ball-green"
      style="background-image: url('{{asset('assets/images/bg-ball.png')}}'); height: 500px;" cz-shortcut-listen="true">
<div class="relative">
    <nav class="bg-transparent border-gray-200 px-2 sm:px-4 py-2.5">
        <div class="grid grid-cols-3 items-center 2xl:mx-2">
            <div class="col-span-1">
                <div class="flex items-center">
                    <div class="bg-gray-500 p-1 rounded-xl">
                        <a href="{{route('admin.dashboard')}}">
                            <img class="h-9 w-9" src="{{asset('assets/images/icons/home-icon.svg')}}" alt="">
                        </a>
                    </div>
                    <div class="hidden relative md:block ml-12">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="search-navbar"
                               class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-full border border-gray-300 sm:text-sm "
                               placeholder="Search here...">
                    </div>
                </div>
            </div>

            <div class="col-span-1">
                <div class="flex justify-center">
                    <div class="py-2">
                        <img class="w-24 h-24" src="{{asset('assets/images/kjora-new-logo.svg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="flex justify-end">
                    <button class="md:hidden ease-linear transition-all duration-150" type="button"
                            onclick="openDropdown(event,'dropdown-id')">
                        <div class="flex items-center">
                            <img src="{{asset('assets/images/profile-image.jpg')}}" class="rounded-full w-9 h-9"
                                 alt="Logo"/>
                        </div>
                    </button>
                    <div
                        class="hidden bg-black text-base z-50 float-left py-2 list-none text-left rounded-xl p-2 shadow-lg mt-1"
                        id="dropdown-id">
                        {{-- <div class="flex items-center py-2">
                            <img src="{{asset('assets/images/profile-image.jpg')}}" class="rounded-full mr-3 h-6 sm:h-9"
                                alt="Logo" />
                            <div class="text-left">
                                <h4 class="uppercase text-white font-bold tracking-wide">{{session('name')}}</h4>
                            </div>
                        </div>
                        <hr> --}}
                        <ul class="flex flex-col gap-y-2 py-2 px-2">
                            <li class="inline-flex items-center space-x-3">
                                <img class="w-6 h-6" src="{{asset('assets/images/icons/account-icon.svg')}} ">
                                <a href="{{Route('admin.superadmin.account')}}" class="flex items-center">
                                    <h1 class="text-white font-medium uppercase text-xs">
                                        Account</h1>
                                </a>
                            </li>
                            <li class="inline-flex items-center space-x-3">
                                <img class="w-6 h-6" src="{{asset('assets/images/white-location.svg')}}"/>
                                <a href="#" class="flex items-center">
                                    <h1 class="text-white font-medium uppercase text-xs">Adailiya</h1>
                                </a>
                            </li>
                            <li class="inline-flex items-center space-x-3">
                                <img class="w-6 h-6" src="{{asset('assets/images/icons/chat-nav.svg')}}" alt="">
                                <h1 class="text-white font-medium uppercase text-xs">Messages</h1>
                            </li>
                            <li class="inline-flex items-center space-x-3">
                                <img class="w-6 h-6" src="{{asset('assets/images/icons/notification (1).svg')}}" alt="">
                                <h1 class="text-white font-medium uppercase text-xs">notification</h1>
                            </li>
                        </ul>
                    </div>
                    <div class="hidden w-full lg:block md:w-auto" id="mobile-menu">
                        <ul
                            class="flex flex-col items-center mt-4 md:flex-row md:space-x-4 md:mt-0 md:text-sm md:font-medium">
                            <li>
                                <a href="#" class="flex items-center">
                                    <img src="{{asset('assets/images/location.svg')}}" class="mr-1" alt="Logo"/>
                                    <span class="self-center text-white font-semibold whitespace-nowrap">
                                            <div>
                                                Adailiya
                                            </div>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('assets/images/icons/chat-nav.svg')}}" class="mr-1" alt="Logo"/>
                                </a>
                            </li>
                            <li>
                                <div id="notifydropdown-wrapper" class="inline-flex">
                                    <button onclick="toggleMenu()"
                                            class="ease-linear transition-all duration-150 ">
                                        <img src="{{ asset('assets/images/icons/notification (1).svg') }}" class="mr-1"
                                             alt="Logo"/></button>
                                    <div id="notifymenu"
                                         class="hidden bg-black z-50 py-2 rounded-xl p-2 mt-8 absolute w-30"
                                         style="margin-left: -94px">
                                        <h1 class="text-light-green text-base uppercase font-semibold text-center">
                                            Notifications</h1>
                                        <ul class="flex flex-col gap-y-2 py-2 px-2 h-52 overflow-y-auto">
                                            <li>
                                                <div class="flex items-center">
                                                    <img src="{{ asset('assets/images/avatar.png') }}"
                                                         class="rounded-full mr-3 h-6 sm:h-9" alt="Logo"/>
                                                    <div class="self-center">
                                                        <h1 class="text-white text-xs font-medium"><span
                                                                class="text-light-green">Rashid </span> sent an email
                                                        </h1>
                                                        <small class="text-white font-semibold">2m ago</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="flex items-center">
                                                    <img src="{{ asset('assets/images/avatar.png') }}"
                                                         class="rounded-full mr-3 h-6 sm:h-9" alt="Logo"/>
                                                    <div class="self-center">
                                                        <h1 class="text-white text-xs font-medium"><span
                                                                class="text-light-green">Ebad </span> sent a message
                                                        </h1>
                                                        <small class="text-white font-semibold">2m ago</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="flex items-center">
                                                    <img src="{{ asset('assets/images/avatar.png') }}"
                                                         class="rounded-full mr-3 h-6 sm:h-9" alt="Logo"/>
                                                    <div class="self-center">
                                                        <h1 class="text-white text-xs font-medium"><span
                                                                class="text-light-green">Thamer </span> sent an
                                                            invitation</h1>
                                                        <small class="text-white font-semibold">2m ago</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="flex items-center">
                                                    <img src="{{ asset('assets/images/avatar.png') }}"
                                                         class="rounded-full mr-3 h-6 sm:h-9" alt="Logo"/>
                                                    <div class="self-center">
                                                        <h1 class="text-white text-xs font-medium"><span
                                                                class="text-light-green">Ahmed </span> sent an email
                                                        </h1>
                                                        <small class="text-white font-semibold">2m ago</small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex">
                                    {{-- <button class="flex items-center cursor-pointer" onclick="openDropdown(event,'accountdropdown-id')">
                                        <img src="{{asset('assets/images/profile-image.jpg')}}"
                                        class="rounded-full mr-3 h-6 sm:h-9" alt="Logo" />
                                        <h4 class="uppercase text-white font-bold tracking-wide">{{ session('name') }}
                                        </h4>
                                    </button> --}}
                                    <div class="flex items-center cursor-pointer"
                                         onclick="openDropdown(event,'accountdropdown-id')">
                                        <img src="{{asset('assets/images/profile-image.jpg')}}"
                                             class="rounded-full mr-3 h-6 sm:h-9" alt="Logo"/>
                                        <span class="self-center text-white font-semibold whitespace-nowrap">
                                                <div>
                                                    <h4 class="uppercase text-white font-bold tracking-wide">{{ session('name') }}
                                                    </h4>
                                                </div>
                                            </span>
                                    </div>
                                    <div
                                        class="hidden bg-black text-base z-50 float-left py-2 list-none text-left rounded-xl p-2 shadow-lg "
                                        id="accountdropdown-id">
                                        <ul class="flex flex-col gap-y-2 py-2 px-2">
                                            <li class="inline-flex items-center space-x-3">
                                                <img class="w-6 h-6"
                                                     src="{{asset('assets/images/icons/account-icon.svg')}} ">
                                                <a href="{{Route('admin.superadmin.account')}}"
                                                   class="flex items-center">
                                                    <h1 class="text-white font-medium uppercase text-xs">
                                                        Account</h1>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="flex justify-end">
                    <button data-collapse-toggle="mobile-menu" type="button"
                        class="inline-flex items-center text-sm text-gray-500 rounded-lg lg:hidden"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="hidden w-full lg:block md:w-auto" id="mobile-menu">
                        <ul
                            class="flex flex-col items-center mt-4 md:flex-row md:space-x-4 md:mt-0 md:text-sm md:font-medium">
                            <li>
                                <a href="#" class="flex items-center">
                                    <img src="{{asset('assets/images/location.svg')}}" class="mr-1" alt="Logo" />
                                    <span class="self-center text-white font-semibold whitespace-nowrap">
                                        <div>
                                            Adailiya
                                        </div>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="30.505" height="29.157"
                                        viewBox="0 0 30.505 29.157">
                                        <g id="Group_15" data-name="Group 15" transform="translate(-28 -4.032)">
                                            <g id="Group_14" data-name="Group 14" transform="translate(28 4.032)">
                                                <path id="Path_30" data-name="Path 30"
                                                    d="M9.663,24.791h8.62a.663.663,0,0,0,0-1.326H9.663a.663.663,0,1,0,0,1.326Z"
                                                    transform="translate(-3.032 -17.431)" fill="#fff" />
                                                <path id="Path_31" data-name="Path 31"
                                                    d="M26.9,29.465H9.663a.663.663,0,1,0,0,1.326H26.9a.663.663,0,1,0,0-1.326Z"
                                                    transform="translate(-3.032 -19.452)" fill="#fff" />
                                                <path id="Path_32" data-name="Path 32"
                                                    d="M26.9,35.465H9.663a.663.663,0,0,0,0,1.326H26.9a.663.663,0,0,0,0-1.326Z"
                                                    transform="translate(-3.032 -21.474)" fill="#fff" />
                                                <path id="Subtraction_2" data-name="Subtraction 2"
                                                    d="M8.62,29.157a.671.671,0,0,1-.239-.044.659.659,0,0,1-.424-.619V21.863H3.932A3.936,3.936,0,0,1,0,17.931V3.913A3.938,3.938,0,0,1,3.543,0H27.286A3.932,3.932,0,0,1,30.5,3.866V15.837l0,0v1.972l0,0v.075a3.936,3.936,0,0,1-3.932,3.931l-11.024.045L9.111,28.94A.667.667,0,0,1,8.62,29.157ZM9.947,1.293h0l-6.013.013A2.61,2.61,0,0,0,1.326,3.913V17.931a2.609,2.609,0,0,0,2.606,2.606H8.62a.664.664,0,0,1,.663.663v5.579l5.477-6.026a.663.663,0,0,1,.488-.217l11.319-.046a2.61,2.61,0,0,0,2.608-2.606V3.865A2.609,2.609,0,0,0,26.57,1.26L9.948,1.294Z"
                                                    transform="translate(0 0)" fill="#fff" />
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="26.687" height="29.539"
                                        viewBox="0 0 26.687 29.539">
                                        <g id="Group_16" data-name="Group 16" transform="translate(-86 -7.232)">
                                            <g id="notification_1_" data-name="notification (1)"
                                                transform="translate(86 7.232)">
                                                <g id="Group_9" data-name="Group 9" transform="translate(0 4.308)">
                                                    <g id="Group_8" data-name="Group 8">
                                                        <path id="Path_27" data-name="Path 27"
                                                            d="M42.745,95.274l2.114-3.522a10.47,10.47,0,0,0,1.49-5.383V83.282a8.615,8.615,0,1,1,17.231,0v3.086a10.47,10.47,0,0,0,1.49,5.383l2.114,3.522a.615.615,0,0,1-.528.932H43.273a.615.615,0,0,1-.528-.932Zm22.826-.3-1.554-2.591a11.69,11.69,0,0,1-1.666-6.016V83.282a7.385,7.385,0,0,0-14.769,0v3.086a11.7,11.7,0,0,1-1.665,6.016L44.36,94.975H65.571Z"
                                                            transform="translate(-42.657 -74.667)" fill="#fff" />
                                                    </g>
                                                </g>
                                                <g id="Group_11" data-name="Group 11" transform="translate(9.847)">
                                                    <g id="Group_10" data-name="Group 10" transform="translate(0)">
                                                        <path id="Path_28" data-name="Path 28"
                                                            d="M215.795,0a2.464,2.464,0,0,1,2.462,2.462V4.923a.615.615,0,0,1-1.231,0V2.462a1.231,1.231,0,0,0-2.462,0V4.923a.615.615,0,0,1-1.231,0V2.462A2.464,2.464,0,0,1,215.795,0Z"
                                                            transform="translate(-213.333)" fill="#fff" />
                                                    </g>
                                                </g>
                                                <g id="Group_13" data-name="Group 13"
                                                    transform="translate(9.229 24.616)">
                                                    <g id="Group_12" data-name="Group 12" transform="translate(0)">
                                                        <path id="Path_29" data-name="Path 29"
                                                            d="M203.082,426.983a.616.616,0,0,1,1.063.623,1.846,1.846,0,1,0,3.2,0,.616.616,0,0,1,1.063-.623,3.078,3.078,0,1,1-5.324,0Z"
                                                            transform="translate(-202.666 -426.68)" fill="#fff" />
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="Rectangle_68" data-name="Rectangle 68"
                                                transform="translate(100.687 8.232)" fill="#094609" stroke="#fff"
                                                stroke-width="1">
                                                <rect width="12" height="12" rx="5" stroke="none" />
                                                <rect x="0.5" y="0.5" width="11" height="11" rx="4.5" fill="none" />
                                            </g>
                                            <text id="_2" data-name="2" transform="translate(108.687 17.232)"
                                                fill="#fff" font-size="8" font-family="Roboto-Regular, Roboto">
                                                <tspan x="-4.492" y="0">2</tspan>
                                            </text>
                                        </g>
                                    </svg></a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center">
                                    <img src="{{asset('assets/images/profile-image.jpg')}}"
                                        class="rounded-full mr-3 h-6 sm:h-9" alt="Logo" />
                                    <span class="self-center text-white font-semibold whitespace-nowrap">
                                        <div>
                                            <h4 class="uppercase text-white font-bold tracking-wide">{{session('name')}}</h4>
                                        </div>
                                        {{-- <div>
                                            Admin
                                        </div>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </nav>
    @yield('content')
    <div class="py-5">
        <footer class="absolute inset-x-0 bottom-3">
            <p class="text-center font-medium text-white text-xxs">
                Copyright &copy; 2022 Kjora. All rights reserved.
            </p>
        </footer>
    </div>
    {{-- <div class="fixed bottom-5 right-3 ">
        <button class="bg-black text-white p-4 rounded-full ease-linear transition-all duration-150" type="button"
            onclick="toggleModal('modal-id')">
            <img class="w-5 h-5" src="{{asset('assets/images/filter-icon.svg')}}" alt="">
        </button>
    </div> --}}
    <div
        class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
        id="modal-id">
        <div class="relative my-auto mx-auto w-72 md:w-80">
            <!--content-->
            <div
                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-black outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between px-5 pt-2 rounded-t">
                    <h3 class="text-xs text-white font-semibold">
                        Filter by
                    </h3>
                    <button class="text-white float-right text-xl leading-none font-thin"
                            onclick="toggleModal('modal-id')">
                        x
                    </button>
                </div>
                <!--body-->
                <div class="relative px-6 flex-auto">
                    <div class="py-4 ">
                        <h1 class="text-white text-sm font-bold uppercase">country</h1>
                        <div class="mt-2">
                            <input type="text"
                                   class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2.5 placeholder-border-gray "
                                   placeholder="Search by country name">
                        </div>
                    </div>
                </div>
                <!--footer-->
                <div class="p-6 rounded-b">
                    <button
                        class="w-full text-black font-bold bg-white uppercase text-sm px-6 py-3 rounded-full mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button" onclick="toggleModal('modal-id')">
                        Apply
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
</div>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> --}}
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

@yield('script')

<script>
    function openDropdown(event, accountdropdownID) {
        let element = event.target;
        while (element.nodeName !== "DIV") {
            element = element.parentNode;
        }
        var popper = Popper.createPopper(element, document.getElementById(accountdropdownID), {
            placement: 'bottom-start'
        });
        document.getElementById(accountdropdownID).classList.toggle("hidden");
        document.getElementById(accountdropdownID).classList.toggle("block");
    }
</script>

<script type="text/javascript">
    function toggleModal(modalID) {
        document.getElementById(modalID).classList.toggle("hidden");
        document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalID).classList.toggle("flex");
        document.getElementById(modalID + "-backdrop").classList.toggle("flex");
    }
</script>
<script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
<!--Notification dropdown script-->
<script type="text/javascript">
    var menu = document.getElementById("notifymenu");

    // open/close the menu when the user clicks on the button
    function toggleMenu() {
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
        } else {
            menu.classList.add('hidden');
        }
    }

    // close the menu when the user clicks outside of it
    window.onclick = function (event) {
        var dropdownWrapper = document.getElementById('notifydropdown-wrapper');
        if (!dropdownWrapper.contains(event.target) && !menu.classList.contains('hidden')) {
            menu.classList.add('hidden');
        }
    }
</script>
</body>

</html>
