@extends('admin.layouts.app')
@section('content')
    <div class="container md:mx-auto">
        <div class="flex justify-center">
            <div class="w-11/12">
                <!-- view heading -->
                <div class="p-3">
                    <a href="#" class="flex items-center ">
                        <img src="{{ asset('assets/images/view-icon1.svg') }}" class="mr-1" alt="Logo" />
                        <span>
                            <h1 class="uppercase text-white text-lg font-semibold tracking-wide">view</h1>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <section class="py-6">
            <div class="container md:mx-auto">
                <div class="flex justify-center">
                    <div class="w-11/12 md:w-9/12 2xl:w-full">
                        <!-- dropdown button -->
                        <div class="p-2">
                            <div class="flex space-x-2 justify-end">
                                <div class="flex space-x-0.5">
                                    <button class="px-4 py-2 rounded-lg bg-light-green bg-opacity-20" type="button"
                                        onclick="toggleModal('modal-id')">
                                        <img src="{{ asset('assets/images/flag-icon.svg') }}" />
                                    </button>
                                    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                        id="modal-id">
                                        <div class="relative my-auto mx-2 md:mx-auto w-auto md:w-[23rem]">
                                            <!--content-->
                                            <div
                                                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                                <!--header-->
                                                <div class="flex justify-end px-3 py-1 rounded-t">
                                                    <button class="text-black float-right text-sm leading-none font-bold"
                                                        onclick="toggleModal('modal-id')">
                                                        x
                                                    </button>
                                                </div>
                                                <!--body-->
                                                <div class="relative px-3 pb-6">
                                                    <div class="flex justify-center">
                                                        <img class="w-14 h-14"
                                                            src="{{ asset('assets/images/blocked.svg') }}" alt="">
                                                    </div>
                                                    <div class="p-2">
                                                        <h3 class="text-xl text-light-green font-semibold">
                                                            OOPS!!
                                                        </h3>
                                                        <p class="text-xs py-1">
                                                            Your account is restricted for 45 days. We've temporarily limit
                                                            some of your accounts feature.
                                                        </p>
                                                    </div>
                                                    <div class="p-2">
                                                        <h3 class="text-xl text-light-green font-semibold">
                                                            What happened?
                                                        </h3>
                                                        <p class="text-xs py-1">
                                                            Due to negative activity on your account, chat messages
                                                            are currently limited because of player-reported chat logs.
                                                            The way out of the panalty box is to constantly communicate
                                                            without hate speech in chat. Communication in this chat is
                                                            unavailable.
                                                            Everyone deserves respect on Kjora. If you continue
                                                            communicating this
                                                            way, you'll continue to be chat restricted and risk account
                                                            suspensions.
                                                        </p>
                                                    </div>
                                                    <button
                                                        class="w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full"
                                                        type="button">
                                                        OK
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
                                    <div>
                                        <button onclick="openDropdown(event,'exportdropdown-id')"
                                            class="ease-linear transition-all duration-150 text-white bg-export-btn font-medium w-[7.3rem] rounded-lg text-sm px-3 py-1 text-center inline-flex items-center">
                                            <img src="{{ asset('assets/images/Icons - Navigation icon (12 states).svg') }}"
                                                class="mr-2" />Export
                                            <img src="{{ asset('assets/images/Polygon 9.svg') }}" class="ml-2" /></button>
                                        <div id="exportdropdown-id"
                                            class="hidden bg-export-btn rounded-b-lg p-1 text-center w-[7.3rem] export-style">
                                            <ul class="flex flex-col gap-y-2 ">
                                                <li>
                                                    <a href="#"
                                                        class="text-white font-medium uppercase text-xs ml-2">EXCEL</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ asset('assets/images/Path 303.svg') }}" class="mr-1" alt="Logo" />
                            </div>
                        </div>
                        <div class="py-2">
                            <div class="rounded-3xl px-5 py-8 bg-cover bg-center"
                                style="background-image: url('{{ asset('assets/images/default-card.png') }}');">
                                <div class="flex justify-between">
                                    <div>
                                        <a href="#" class="flex items-center">
                                            <img src="{{ asset('assets/images/profile-image.jpg') }}"
                                                class="rounded-full border-2 border-black mr-3 h-12 md:h-16 "
                                                alt="Logo" />
                                            <span class="self-center">
                                                <h1 class="text-white text-sm md:text-base md:leading-none">
                                                    Ahmad AlSheridah
                                                </h1>
                                                <h2
                                                    class="text-heading-white text-opacity-25 font-medium text-sm md:text-base">
                                                    @Ahmad123
                                                </h2>
                                                <div class="flex">
                                                    <svg class="w-3.5 h-3.5 md:w-4 md:h-4 text-rating-yellow"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg class="w-3.5 h-3.5 md:w-4 md:h-4 text-rating-yellow"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg class="w-3.5 h-3.5 md:w-4 md:h-4 text-rating-yellow"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg class="w-3.5 h-3.5 md:w-4 md:h-4 text-rating-yellow"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg class="w-3.5 h-3.5 md:w-4 md:h-4 text-rating-yellow"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <h1 class="text-xs text-rating-yellow">&nbsp 5.0</h1>
                                                </div>
                                            </span>
                                        </a>
                                    </div>
                                    <div>
                                        <h1 class="text-lg text-white font-semibold">$200</h1>
                                    </div>
                                </div>
                                <div class="my-3">
                                    <div class="flex justify-between md:justify-around">
                                        <div class="text-center">
                                            <h1 class="text-heading-white text-opacity-25 text-xs md:text-sm">Favourite
                                                club</h1>
                                            <img class="mx-auto" src="{{ asset('assets/images/country-logo4.svg') }}"
                                                alt="">
                                        </div>
                                        <div class="text-center">
                                            <h1 class="text-heading-white text-opacity-25 text-xs md:text-sm">Age</h1>
                                            <h2 class="text-white text-xs md:text-sm">22</h2>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="text-heading-white text-opacity-25 text-xs md:text-sm">Played</h1>
                                            <h2 class="text-white text-xs md:text-sm">2</h2>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="text-heading-white text-opacity-25 text-xs md:text-sm">Missed</h1>
                                            <h2 class="text-white text-xs md:text-sm">2</h2>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="text-heading-white text-opacity-25 text-xs md:text-sm">Position</h1>
                                            <h2 class="text-white text-xs md:text-sm">Defender</h2>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="mt-2">
                                    <a href="#" class="flex items-center">
                                        <img src="{{ asset('assets/images/white-location.svg') }}" class="mr-1"
                                            alt="Logo" />
                                        <span class="text-white ">
                                            <div>
                                                Adailiya
                                            </div>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- tabs starting -->

                        <div id="tabs-id">
                            <div class="rounded-full p-3 bg-heading-white bg-opacity-62 ">
                                <ul class="flex justify-center space-x-4">
                                    <li>
                                        <a class="uppercase text-base text-border-gray cursor-pointer font-medium"
                                            onclick="changeAtiveTab(event,'tab-profile')">
                                            Performance
                                        </a>
                                    </li>
                                    <li>
                                        <a class="uppercase text-base text-border-gray cursor-pointer font-medium"
                                            onclick="changeAtiveTab(event,'tab-settings')">
                                            photos
                                        </a>
                                    </li>
                                    <li>
                                        <a class="uppercase text-base text-border-gray cursor-pointer font-medium"
                                            onclick="changeAtiveTab(event,'tab-options')">
                                            videos
                                        </a>
                                    </li>
                                    <li>
                                        <a class="uppercase text-base text-border-gray cursor-pointer font-medium"
                                            onclick="changeAtiveTab(event,'tab-data')">
                                            Data
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="relative my-5 rounded">
                                <div class="tab-content tab-space">
                                    <div class="block" id="tab-profile">
                                        <div class="flex justify-center">
                                            <img src="{{ asset('assets/images/graph.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="hidden" id="tab-settings">
                                        <div class="grid md:grid-cols-4 lg:grid-cols-6 gap-x-2 gap-y-4">
                                            <div class="border-2 border-dark-green rounded-xl">
                                                <a href="{{ route('admin.report.management.reported.player.photo') }}">
                                                    <div class="relative">
                                                        <img class="rounded-xl"
                                                            src="{{ asset('assets/images/profile-photos.jpg') }}"
                                                            alt="">
                                                        <div class="absolute top-1.5 right-2">
                                                            <img src="{{ asset('assets/images/flag-icon.svg') }}" />
                                                        </div>
                                                        <div class="absolute bottom-1 right-1">
                                                            <img src="{{ asset('assets/images/view-icon2.svg') }}">
                                                            <h1 class="text-white text-sm">500</h1>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="border-2 border-dark-green rounded-xl">
                                                <a href="{{ route('admin.report.management.reported.player.photo') }}">
                                                    <div class="relative">
                                                        <img class="rounded-xl"
                                                            src="{{ asset('assets/images/profile-photos.jpg') }}"
                                                            alt="">
                                                        <div class="absolute top-1.5 right-2">
                                                            <img src="{{ asset('assets/images/flag-icon.svg') }}" />
                                                        </div>
                                                        <div class="absolute bottom-1 right-1">
                                                            <img src="{{ asset('assets/images/view-icon2.svg') }}">
                                                            <h1 class="text-white text-sm">500</h1>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden" id="tab-options">
                                        <div class="grid md:grid-cols-4 lg:grid-cols-6 gap-x-2 gap-y-4">
                                            <div class="border-2 border-dark-green rounded-xl">
                                                <a href="{{ route('admin.report.management.reported.player.photo') }}">
                                                    <div class="relative">
                                                        <img class="rounded-xl"
                                                            src="{{ asset('assets/images/profile-photos.jpg') }}"
                                                            alt="">
                                                        <div class="absolute top-1.5 right-2">
                                                            <img src="{{ asset('assets/images/flag-icon.svg') }}" />
                                                        </div>
                                                        <div class="absolute bottom-1 right-1">
                                                            <img src="{{ asset('assets/images/view-icon2.svg') }}">
                                                            <h1 class="text-white text-sm">500</h1>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="border-2 border-dark-green rounded-xl">
                                                <a href="{{ route('admin.report.management.reported.player.photo') }}">
                                                    <div class="relative">
                                                        <img class="rounded-xl"
                                                            src="{{ asset('assets/images/profile-photos.jpg') }}"
                                                            alt="">
                                                        <div class="absolute top-1.5 right-2">
                                                            <img src="{{ asset('assets/images/flag-icon.svg') }}" />
                                                        </div>
                                                        <div class="absolute bottom-1 right-1">
                                                            <img src="{{ asset('assets/images/view-icon2.svg') }}">
                                                            <h1 class="text-white text-sm">500</h1>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="border-2 border-dark-green rounded-xl">
                                                <a href="{{ route('admin.report.management.reported.player.photo') }}">
                                                    <div class="relative">
                                                        <img class="rounded-xl"
                                                            src="{{ asset('assets/images/profile-photos.jpg') }}"
                                                            alt="">
                                                        <div class="absolute top-1.5 right-2">
                                                            <img src="{{ asset('assets/images/flag-icon.svg') }}" />
                                                        </div>
                                                        <div class="absolute bottom-1 right-1">
                                                            <img src="{{ asset('assets/images/view-icon2.svg') }}">
                                                            <h1 class="text-white text-sm">500</h1>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden" id="tab-data">
                                        <div class="container mx-auto mt-12">
                                            <div class="flex justify-center">
                                                <div class="w-full md:w-2/3">
                                                    <div
                                                        class="grid md:grid-cols-2 gap-y-2 md:gap-y-4 gap-x-8 2xl:gap-x-24">
                                                        <div>
                                                            <h1
                                                                class="uppercase block mb-1 2xl:mb-1.5 text-white text-xs font-bold px-5">
                                                                Account Visit</h1>
                                                            <h1
                                                                class="border border-border-gray border-opacity-40 bg-heading-white bg-opacity-62 text-xs rounded-full w-full px-5 py-3 text-black ">
                                                                1001
                                                            </h1>
                                                        </div>
                                                        <div>
                                                            <h1
                                                                class="uppercase block mb-1 2xl:mb-1.5 text-white text-xs font-bold px-5">
                                                                Account status</h1>
                                                            <h1
                                                                class="border border-border-gray border-opacity-40 bg-heading-white bg-opacity-62 text-xs rounded-full w-full px-5 py-3 text-black ">
                                                                verified
                                                            </h1>
                                                        </div>
                                                        <div>
                                                            <h1
                                                                class="uppercase block mb-1 2xl:mb-1.5 text-white text-xs font-bold px-5">
                                                                Total photo</h1>
                                                            <h1
                                                                class="border border-border-gray border-opacity-40 bg-heading-white bg-opacity-62 text-xs rounded-full w-full px-5 py-3 text-black ">
                                                                1001
                                                            </h1>
                                                        </div>
                                                        <div>
                                                            <h1
                                                                class="uppercase block mb-1 2xl:mb-1.5 text-white text-xs font-bold px-5">
                                                                Total video</h1>
                                                            <h1
                                                                class="border border-border-gray border-opacity-40 bg-heading-white bg-opacity-62 text-xs rounded-full w-full px-5 py-3 text-black ">
                                                                1001
                                                            </h1>
                                                        </div>
                                                        <div>
                                                            <h1
                                                                class="uppercase block mb-1 2xl:mb-1.5 text-white text-xs font-bold px-5">
                                                                Total comment</h1>
                                                            <h1
                                                                class="border border-border-gray border-opacity-40 bg-heading-white bg-opacity-62 text-xs rounded-full w-full px-5 py-3 text-black ">
                                                                1001
                                                            </h1>
                                                        </div>
                                                        <div>
                                                            <h1
                                                                class="uppercase block mb-1 2xl:mb-1.5 text-white text-xs font-bold px-5">
                                                                Total reply</h1>
                                                            <h1
                                                                class="border border-border-gray border-opacity-40 bg-heading-white bg-opacity-62 text-xs rounded-full w-full px-5 py-3 text-black ">
                                                                1001
                                                            </h1>
                                                        </div>
                                                        <div>
                                                            <h1
                                                                class="uppercase block mb-1 2xl:mb-1.5 text-white text-xs font-bold px-5">
                                                                Total like</h1>
                                                            <h1
                                                                class="border border-border-gray border-opacity-40 bg-heading-white bg-opacity-62 text-xs rounded-full w-full px-5 py-3 text-black ">
                                                                1001
                                                            </h1>
                                                        </div>
                                                        <div>
                                                            <h1
                                                                class="uppercase block mb-1 2xl:mb-1.5 text-white text-xs font-bold px-5">
                                                                Total share</h1>
                                                            <h1
                                                                class="border border-border-gray border-opacity-40 bg-heading-white bg-opacity-62 text-xs rounded-full w-full px-5 py-3 text-black ">
                                                                1001
                                                            </h1>
                                                        </div>
                                                        <div>
                                                            <h1
                                                                class="uppercase block mb-1 2xl:mb-1.5 text-white text-xs font-bold px-5">
                                                                Total invite</h1>
                                                            <h1
                                                                class="border border-border-gray border-opacity-40 bg-heading-white bg-opacity-62 text-xs rounded-full w-full px-5 py-3 text-black ">
                                                                1001
                                                            </h1>
                                                        </div>
                                                        <div>
                                                            <h1
                                                                class="uppercase block mb-1 2xl:mb-1.5 text-white text-xs font-bold px-5">
                                                                Total hire</h1>
                                                            <h1
                                                                class="border border-border-gray border-opacity-40 bg-heading-white bg-opacity-62 text-xs rounded-full w-full px-5 py-3 text-black ">
                                                                1001
                                                            </h1>
                                                        </div>
                                                        <div>
                                                            <h1
                                                                class="uppercase block mb-1 2xl:mb-1.5 text-white text-xs font-bold px-5">
                                                                Total accept</h1>
                                                            <h1
                                                                class="border border-border-gray border-opacity-40 bg-heading-white bg-opacity-62 text-xs rounded-full w-full px-5 py-3 text-black ">
                                                                1001
                                                            </h1>
                                                        </div>
                                                        <div>
                                                            <h1
                                                                class="uppercase block mb-1 2xl:mb-1.5 text-white text-xs font-bold px-5">
                                                                Total reject</h1>
                                                            <h1
                                                                class="border border-border-gray border-opacity-40 bg-heading-white bg-opacity-62 text-xs rounded-full w-full px-5 py-3 text-black ">
                                                                1001
                                                            </h1>
                                                        </div>
                                                        <div>
                                                            <h1
                                                                class="uppercase block mb-1 2xl:mb-1.5 text-white text-xs font-bold px-5">
                                                                Total played</h1>
                                                            <h1
                                                                class="border border-border-gray border-opacity-40 bg-heading-white bg-opacity-62 text-xs rounded-full w-full px-5 py-3 text-black ">
                                                                1001
                                                            </h1>
                                                        </div>
                                                        <div>
                                                            <h1
                                                                class="uppercase block mb-1 2xl:mb-1.5 text-white text-xs font-bold px-5">
                                                                Total missed</h1>
                                                            <h1
                                                                class="border border-border-gray border-opacity-40 bg-heading-white bg-opacity-62 text-xs rounded-full w-full px-5 py-3 text-black ">
                                                                1001
                                                            </h1>
                                                        </div>
                                                        <div>
                                                            <h1
                                                                class="uppercase block mb-1 2xl:mb-1.5 text-white text-xs font-bold px-5">
                                                                Total send</h1>
                                                            <h1
                                                                class="border border-border-gray border-opacity-40 bg-heading-white bg-opacity-62 text-xs rounded-full w-full px-5 py-3 text-black ">
                                                                1001
                                                            </h1>
                                                        </div>
                                                        <div>
                                                            <h1
                                                                class="uppercase block mb-1 2xl:mb-1.5 text-white text-xs font-bold px-5">
                                                                Total receive</h1>
                                                            <h1
                                                                class="border border-border-gray border-opacity-40 bg-heading-white bg-opacity-62 text-xs rounded-full w-full px-5 py-3 text-black ">
                                                                1001
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="p-5">
            <footer class="absolute inset-x-0 bottom-3">
                <p class="text-center font-medium text-white text-xxs">
                    Copyright &copy; 2022 Kjora. All rights reserved.
                </p>
            </footer>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        function changeAtiveTab(event, tabID) {
            let element = event.target;
            while (element.nodeName !== "A") {
                element = element.parentNode;
            }
            ulElement = element.parentNode.parentNode;
            aElements = ulElement.querySelectorAll("li > a");
            tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
            for (let i = 0; i < aElements.length; i++) {
                tabContents[i].classList.remove("text-border-gray");
                tabContents[i].classList.remove("text-border-gray");
                tabContents[i].classList.add("text-black");
                tabContents[i].classList.add("text-black");
                tabContents[i].classList.add("hidden");
                tabContents[i].classList.remove("block");
            }
            element.classList.remove("text-border-gray");
            element.classList.remove("text-border-gray");
            element.classList.add("text-black");
            element.classList.add("text-black");
            document.getElementById(tabID).classList.remove("hidden");
            document.getElementById(tabID).classList.add("block");
        }
    </script>
@endsection
