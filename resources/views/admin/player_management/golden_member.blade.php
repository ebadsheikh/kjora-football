@extends('admin.layouts.app')
@section('content')
<div class="container md:mx-auto">
    <div class="flex justify-center">
        <div class="w-11/12">
            <!-- view heading -->
            <div class="p-3">
                <a href="#" class="flex items-center ">
                    <img src="{{asset('assets/images/view-icon1.svg')}}" class="mr-1" />
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
                            <div class="inline-flex">
                                <button onclick="openDropdown(event,'exportdropdown-id')"
                                    class="ease-linear transition-all duration-150 text-white bg-export-btn font-medium w-[7.3rem] rounded-lg text-sm px-3 py-1 text-center inline-flex items-center">
                                    <img src="{{ asset('assets/images/Icons - Navigation icon (12 states).svg') }}"
                                        class="mr-2" />Export
                                    <img src="{{ asset('assets/images/Polygon 9.svg') }}" class="ml-2" /></button>
                                <div id="exportdropdown-id"
                                    class="hidden bg-export-btn rounded-b-lg p-1 text-center w-[7.3rem] export-style">
                                    <ul class="flex flex-col gap-y-2">
                                        <li>
                                            <a href="#"
                                                class="text-white font-medium uppercase text-xs ml-2">PDF</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="text-white font-medium uppercase text-xs ml-2">Docx</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <img src="{{asset('assets/images/Path 303.svg')}}" class="mr-1" alt="Logo" />
                        </div>
                    </div>
                    <div class="py-2">
                        <div class="rounded-3xl px-5 py-8 bg-cover bg-center"
                            style="background-image: url('{{asset('assets/images/gold-card.png')}}');">
                            <div class="flex justify-between">
                                <div>
                                    <a href="" class="flex items-center">
                                        <img src="{{asset('assets/images/profile-image.jpg')}}"
                                            class="rounded-full border-2 border-black mr-3 h-12 md:h-16 "
                                            alt="Logo" />
                                        <span class="self-center">
                                            <h1
                                                class="text-black text-sm md:text-base md:leading-none font-semibold">
                                                @if ($card_detail->first_name == 1)
                                                    {{$golden_account->first_name}}
                                                @endif
                                                @if ($card_detail->sur_name == 1)
                                                    {{$golden_account->sur_name}}
                                                @endif
                                            </h1>
                                            <h2 class="text-gray-heading font-medium text-sm md:text-base">
                                                <span>@</span>{{$golden_account->player_user_name}}
                                            </h2>
                                            @if ($card_detail->rating == 1)
                                                <div class="flex">
                                                    <svg class="w-3.5 h-3.5 md:w-4 md:h-4 text-light-green"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg class="w-3.5 h-3.5 md:w-4 md:h-4 text-light-green"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg class="w-3.5 h-3.5 md:w-4 md:h-4 text-light-green"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg class="w-3.5 h-3.5 md:w-4 md:h-4 text-light-green"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg class="w-3.5 h-3.5 md:w-4 md:h-4 text-light-green"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <h1 class="text-xs text-light-green">&nbsp 5.0</h1>
                                                </div>
                                            @endif
                                        </span>
                                    </a>
                                </div>
                                <div>
                                    @if ($card_detail->price == 1)
                                        <h1 class="text-lg text-black font-semibold">$200</h1>
                                    @endif
                                </div>
                            </div>
                            <div class="my-3">
                                <div class="flex justify-between md:justify-around">
                                    <div class="text-center">
                                        @if ($card_detail->favourite_club == 1)
                                        <h1 class="text-light-green text-xs md:text-sm">Favourite club</h1>
                                            {{-- <img class="mx-auto" src="{{asset('assets/images/country-logo4.svg')}}" alt=""> --}}
                                            <div class='group relative'>
                                                <img class="mx-auto cursor-pointer" src="{{ asset('assets/images/country-logo4.svg') }}"
                                            alt="">
                                                <h1 class="hidden group-hover:block bg-white text-black font-semibold text-xxs rounded py-px absolute inset-x-0 bottom-[-17px]">Manchester city </h1>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        @if ($card_detail->age == 1)
                                        <h1 class="text-light-green text-xs md:text-sm">Age</h1>

                                            <h2 class="text-black text-xs md:text-sm">{{ get_age_from_birth_date($golden_account->date_of_birth) }}</h2>
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        @if ($card_detail->played == 1)
                                        <h1 class="text-light-green text-xs md:text-sm">Played</h1>

                                            <h2 class="text-black text-xs md:text-sm">2</h2>
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        @if ($card_detail->missed == 1)
                                        <h1 class="text-light-green text-xs md:text-sm">Missed</h1>

                                            <h2 class="text-black text-xs md:text-sm">2</h2>
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        @if ($card_detail->position == 1)
                                        <h1 class="text-light-green text-xs md:text-sm">Position</h1>

                                            <h2 class="text-black text-xs md:text-sm">{{$golden_account->position['name']}}</h2>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-7">
                            <div class="mt-2 flex justify-between items-center">
                                <a href="#" class="flex items-center">
                                    <img src="{{asset('assets/images/black-location.svg')}}" class="mr-1" alt="Logo" />
                                    @if ($card_detail->location == 1)
                                        <h1 class="text-black text-xs" >{{$golden_account->current_address}}</h1>
                                    @endif
                                </a>
                                <a href="{{Route('admin.player.management.normal.profile', $golden_account->id)}}">
                                    <h1 class="text-white bg-black p-2 rounded-full font-semibold  text-xxs uppercase">Update</h1>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- tabs starting -->

                    <div id="tabs-id">
                        <div class="rounded-full p-3 bg-heading-white bg-opacity-62 ">
                            <ul class="flex justify-center space-x-4">
                                <li>
                                    <a class="uppercase text-xs md:text-base text-border-gray cursor-pointer font-medium"
                                        onclick="changeAtiveTab(event,'tab-profile')">
                                        Performance
                                    </a>
                                </li>
                                <li>
                                    <a class="uppercase text-xs md:text-base text-border-gray cursor-pointer font-medium"
                                        onclick="changeAtiveTab(event,'tab-settings')">
                                        photos
                                    </a>
                                </li>
                                <li>
                                    <a class="uppercase text-xs md:text-base text-border-gray cursor-pointer font-medium"
                                        onclick="changeAtiveTab(event,'tab-options')">
                                        videos
                                    </a>
                                </li>
                                <li>
                                    <a class="uppercase text-xs md:text-base text-border-gray cursor-pointer font-medium"
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
                                        <img src="{{asset('assets/images/graph.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="hidden" id="tab-settings">
                                    <div class="grid md:grid-cols-4 lg:grid-cols-6 gap-x-2 gap-y-4">
                                        @foreach ($player_photo as $item)
                                            <div
                                                class="group border-2 border-dark-green rounded-xl  relative cursor-pointer">
                                                <div
                                                    class="hidden group-hover:block absolute inset-0 bg-photo-overlay bg-opacity-60 rounded-xl">
                                                </div>
                                                <img class="rounded-xl h-40 w-full object-cover"
                                                    src="{{ URL::asset($item->photo) }}" alt="">
                                                <div class="hidden group-hover:block absolute inset-x-0 bottom-1">
                                                    <div class="flex justify-between items-center gap-2">
                                                        <h1 class="text-white text-xxs px-1 truncate">{{$item->caption}}</h1>
                                                        <div class="pr-1">
                                                            <img src="{{ asset('assets/images/view-icon2.svg') }}">
                                                            <h1 class="text-white text-xxs">500</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="hidden" id="tab-options">
                                    <div class="grid md:grid-cols-4 lg:grid-cols-6 gap-x-2 gap-y-4">
                                        @foreach ($player_video as $item)
                                            <div
                                                class="group border-2 border-dark-green rounded-xl  relative cursor-pointer">
                                                <div
                                                    class="hidden group-hover:block absolute inset-0 bg-photo-overlay bg-opacity-60 rounded-xl">
                                                </div>
                                                <video class="rounded-xl h-40 w-full object-cover">
                                                    <source src="{{ URL::asset($item->video) }}" type="video/mp4">
                                                </video>
                                                {{-- <div class="hidden group-hover:block absolute top-14 left-14">
                                                    <a href="{{Route('player.video', $item->id)}}">
                                                        <img src="{{ asset('assets/images/play-icons.svg') }}">
                                                    </a>
                                                </div> --}}
                                                <div class="hidden group-hover:block absolute inset-x-0 bottom-1">
                                                    <div class="flex justify-between items-center gap-2">
                                                        <h1 class="text-white text-xxs px-1 truncate">{{$item->caption}}</h1>
                                                        <div class="pr-1">
                                                            <img src="{{ asset('assets/images/view-icon2.svg') }}">
                                                            <h1 class="text-white text-xxs">500</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="hidden" id="tab-data">
                                    <div class="container mx-auto mt-12">
                                        <div class="flex justify-between">
                                            <div></div>
                                            <div>
                                                <button
                                                    class="text-white uppercase gap-2 text-xs font-medium bg-border-gray w-[5.5rem] inline-flex p-2 items-center rounded-lg"
                                                    type="button" onclick="openDropdown(event,'activedropdown-id')">
                                                    Activate
                                                    <img src="{{asset('assets/images/Polygon 9.svg')}}" alt="">
                                                </button>
                                                <div class="hidden uppercase z-50 bg-border-gray border py-1 px-2 rounded-b-lg w-[5.5rem] border-border-gray rounded-lg mt-2 custom-dropdown-style"
                                                    id="activedropdown-id">
                                                    <a href="#"
                                                        class="text-center text-xs font-medium text-white">
                                                        Deactivate
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
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
