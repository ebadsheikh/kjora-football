@extends('admin.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/custom/style/custom_range.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/custom/style/custom_calender_picker.css') }}">
@endsection
@section('content')
    <div class="p-4 md:py-10 md:px-16 2xl:px-52">
        <div class="p-3">
            <h1 class="uppercase text-white text-2xl font-semibold tracking-wide">player management</h1>
        </div>
        <div class="py-5">
            <div class="flex flex-wrap justify-end" id="tabs-id">
                <div class="flex space-x-2 items-center px-2 pt-2 pb-6">
                    <ul class="flex space-x-0.5">
                        <li class="-mb-px last:mr-0 flex-auto text-center">
                            <a class="cursor-pointer px-3 py-1.5 text-sm font-bold text-black bg-white border border-gray-200 rounded-md focus:z-10"
                               onclick="changeAtiveTab(event,'tab-profile')">
                                Grid
                            </a>
                        </li>
                        <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                            <a class="cursor-pointer px-3 py-1.5 text-sm font-bold text-black bg-white border border-gray-200 rounded-md focus:z-10"
                               onclick="changeAtiveTab(event,'tab-settings')">
                                Map
                            </a>
                        </li>
                    </ul>
                    <div class="inline-flex">
                        <button onclick="openDropdown(event,'exportdropdown-id')"
                                class="ease-linear transition-all duration-150 text-white bg-export-btn font-medium w-[7.3rem] rounded-lg text-sm px-3 py-1 text-center inline-flex items-center">
                            <img src="{{ asset('assets/images/Icons - Navigation icon (12 states).svg') }}"
                                 class="mr-2"/>Export
                            <img src="{{ asset('assets/images/Polygon 9.svg') }}" class="ml-2"/></button>
                        <div id="exportdropdown-id"
                             class="hidden bg-export-btn rounded-b-lg p-1 z-50 text-center w-[7.3rem] export-style">
                            <ul class="flex flex-col gap-y-2">
                                <li>
                                    <a href="{{ Route('admin.player.management.generate.pdf') }}"
                                       class="text-white font-medium uppercase text-xs ml-2">PDF</a>
                                </li>
                                <li>
                                    <a href="{{ Route('admin.player.management.generate.word') }}"
                                       class="text-white font-medium uppercase text-xs ml-2">Docx</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <img src="{{ asset('assets/images/Path 303.svg') }}" class="mr-1" alt="Logo"/>
                </div>
                <div class="w-full">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 rounded">
                        <div class="lg:px-4 py-5 flex-auto">
                            <div class="tab-content tab-space">
                                <div class="block" id="tab-profile">
                                    <div class="bg-white rounded-3xl py-5">
                                        <div class="px-3 py-3 xl:px-12 md:py-3">
                                            {{-- grid md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-2 xl:gap-4 2xl:gap-8 --}}
                                            <div
                                                class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-2 xl:gap-4 2xl:gap-8 xl:justify-items-center">
                                                @foreach ($player as $players)
                                                    @if ($players->membership_type == 'golden')
                                                        <div
                                                            class="group relative h-[13.813rem] xl:w-80 rounded-3xl px-4 py-9 bg-cover bg-center"
                                                            style="background-image: url('{{ asset('assets/images/small-gold.png') }}');">
                                                            <div class="flex justify-between">
                                                                <div class="flex items-center">
                                                                    <img src="{{URL::asset($players->profile_image)}}"
                                                                         class="rounded-full border-2 border-black mr-3 h-14 w-14"
                                                                         alt="Logo"/>
                                                                    <span class="self-center">
                                                                            <h1 class="text-black text-sm font-semibold">
                                                                                @if ($card_detail->first_name == 1)
                                                                                    {{ $players->first_name }}
                                                                                @endif
                                                                                @if ($card_detail->sur_name == 1)
                                                                                    {{ $players->sur_name }}
                                                                                @endif
                                                                            </h1>
                                                                            <h2
                                                                                class="text-gray-heading font-medium text-sm">

                                                                                <span>@</span>{{ $players->player_user_name}}
                                                                            </h2>
                                                                            @if ($card_detail->rating == 1)
                                                                            <div class="flex items-center">
                                                                                    <svg
                                                                                        class="w-3.5 h-3.5 text-light-green"
                                                                                        fill="currentColor"
                                                                                        viewBox="0 0 20 20"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <svg
                                                                                        class="w-3.5 h-3.5 text-light-green"
                                                                                        fill="currentColor"
                                                                                        viewBox="0 0 20 20"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <svg
                                                                                        class="w-3.5 h-3.5 text-light-green"
                                                                                        fill="currentColor"
                                                                                        viewBox="0 0 20 20"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <svg
                                                                                        class="w-3.5 h-3.5 text-light-green"
                                                                                        fill="currentColor"
                                                                                        viewBox="0 0 20 20"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <svg
                                                                                        class="w-3.5 h-3.5 text-light-green"
                                                                                        fill="currentColor"
                                                                                        viewBox="0 0 20 20"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <h1 class="text-xs text-light-green">&nbsp
                                                                                        5.0
                                                                                    </h1>
                                                                                </div>
                                                                        @endif
                                                                        </span>
                                                                </div>
                                                                <div>
                                                                    @if ($card_detail->price == 1)
                                                                        <small
                                                                            class="text-black font-semibold">$200</small>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="my-3">
                                                                <div class="flex justify-between">
                                                                    <div class="text-center">
                                                                        @if ($card_detail->age == 1)
                                                                            <h1 class="text-light-green text-sm">
                                                                                Age</h1>

                                                                            <h2 class="text-black text-sm">{{get_age_from_birth_date($players->date_of_birth)}}</h2>
                                                                        @endif
                                                                    </div>
                                                                    <div class="text-center">
                                                                        @if ($card_detail->played == 1)
                                                                            <h1 class="text-light-green text-sm">
                                                                                Played</h1>

                                                                            <h2 class="text-black text-sm">2</h2>
                                                                        @endif
                                                                    </div>
                                                                    <div class="text-center">
                                                                        @if ($card_detail->missed == 1)
                                                                            <h1 class="text-light-green text-sm">
                                                                                Missed</h1>

                                                                            <h2 class="text-black text-sm">2</h2>
                                                                        @endif
                                                                    </div>
                                                                    <div class="text-center">
                                                                        @if ($card_detail->position == 1)
                                                                            <h1 class="text-light-green text-sm">
                                                                                Position
                                                                            </h1>
                                                                            <h2 class="text-black text-sm">

                                                                                {{ $players->position['name'] }}</h2>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr class="text-heading-white">
                                                            <div class="mt-2">
                                                                <div class="flex items-center max-w-10">
                                                                    <img
                                                                        src="{{ asset('assets/images/black-location.svg') }}"
                                                                        class="mr-1" alt="Logo"/>
                                                                    @if ($card_detail->location == 1)
                                                                        <h1 class="text-black text-xs truncate">
                                                                            {{ $players->current_address }}
                                                                        </h1>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="hidden group-hover:block absolute bottom-[1.25rem] right-1 px-5 py-2 rounded-2xl bg-black ">
                                                                <a href="{{ Route('admin.player.management.golden.member', $players->id) }}"
                                                                   class="inline-flex space-x-2 items-center">
                                                                    <img
                                                                        src="{{ asset('assets/images/icons/Icon feather-eye.svg') }}"
                                                                        class="mr-1" alt="Logo"/>
                                                                    <h1 class="text-gray-200 font-normal text-base">
                                                                        view
                                                                    </h1>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div
                                                            class=" group relative h-[13.813rem] xl:w-80 rounded-3xl px-4 py-9 bg-cover bg-center"
                                                            style="background-image: url('{{ asset('assets/images/small-default.png') }}');">
                                                            <div class="flex justify-between">
                                                                <div>
                                                                    <div class="flex items-center">
                                                                        <img
                                                                            src="{{URL::asset($players->profile_image)}}"
                                                                            class="rounded-full border-2 border-white mr-2 h-14 w-14"
                                                                            alt="Logo"/>
                                                                        <span class="self-center">
                                                                            <h1 class="text-white text-sm font-semibold">
                                                                                @if ($card_detail->first_name == 1)
                                                                                    {{ $players->first_name }}
                                                                                @endif
                                                                                @if ($card_detail->sur_name == 1)
                                                                                    {{ $players->sur_name }}
                                                                                @endif
                                                                            </h1>
                                                                            <h2
                                                                                class="text-heading-white text-opacity-25 font-medium text-sm">
                                                                                <span>@</span>{{ $players->player_user_name}}
                                                                            </h2>
                                                                            @if ($card_detail->rating == 1)
                                                                                <div class="flex items-center">
                                                                                    <svg
                                                                                        class="w-3.5 h-3.5 text-rating-yellow"
                                                                                        fill="currentColor"
                                                                                        viewBox="0 0 20 20"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <svg
                                                                                        class="w-3.5 h-3.5 text-rating-yellow"
                                                                                        fill="currentColor"
                                                                                        viewBox="0 0 20 20"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <svg
                                                                                        class="w-3.5 h-3.5 text-rating-yellow"
                                                                                        fill="currentColor"
                                                                                        viewBox="0 0 20 20"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <svg
                                                                                        class="w-3.5 h-3.5 text-rating-yellow"
                                                                                        fill="currentColor"
                                                                                        viewBox="0 0 20 20"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <svg
                                                                                        class="w-3.5 h-3.5 text-rating-yellow"
                                                                                        fill="currentColor"
                                                                                        viewBox="0 0 20 20"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <h1 class="text-xs text-rating-yellow">
                                                                                        &nbsp 5.0</h1>
                                                                                </div>
                                                                            @endif
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    @if ($card_detail->sur_name == 1)
                                                                        <small
                                                                            class="text-white font-semibold">$200</small>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="my-3">
                                                                <div class="flex justify-between">
                                                                    <div class="text-center">
                                                                        @if ($card_detail->age == 1)
                                                                            <h1
                                                                                class="text-heading-white text-opacity-25 text-sm">
                                                                                Age</h1>

                                                                            <h2 class="text-white text-sm">{{get_age_from_birth_date($players->date_of_birth)}}</h2>
                                                                        @endif
                                                                    </div>
                                                                    <div class="text-center">
                                                                        @if ($card_detail->played == 1)
                                                                            <h1
                                                                                class="text-heading-white text-opacity-25 text-sm">
                                                                                Played
                                                                            </h1>

                                                                            <h2 class="text-white text-sm">2</h2>
                                                                        @endif
                                                                    </div>
                                                                    <div class="text-center">
                                                                        @if ($card_detail->missed == 1)
                                                                            <h1
                                                                                class="text-heading-white text-opacity-25 text-sm">
                                                                                Missed
                                                                            </h1>

                                                                            <h2 class="text-white text-sm">2</h2>
                                                                        @endif
                                                                    </div>
                                                                    <div class="text-center">
                                                                        @if ($card_detail->position == 1)
                                                                            <h1
                                                                                class="text-heading-white text-opacity-25 text-sm">
                                                                                Position
                                                                            </h1>

                                                                            <h2 class="text-white text-sm">
                                                                                {{ $players->position['name'] }}</h2>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="mt-2">
                                                                <div class="flex items-center max-w-10">
                                                                    <img
                                                                        src="{{ asset('assets/images/white-location.svg') }}"
                                                                        class="mr-1" alt="Logo"/>
                                                                    @if ($card_detail->location == 1)
                                                                        <h1 class="text-white text-xs truncate">
                                                                            {{ $players->current_address }}
                                                                        </h1>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="hidden group-hover:block absolute bottom-[1.25rem] right-1 px-5 py-2 rounded-2xl bg-black ">
                                                                <a href="{{ Route('admin.player.management.default.account', $players->id) }}"
                                                                   class="inline-flex space-x-2 items-center">
                                                                    <img
                                                                        src="{{ asset('assets/images/icons/Icon feather-eye.svg') }}"
                                                                        class="mr-1" alt="Logo"/>
                                                                    <h1 class="text-gray-200 font-normal text-base">view
                                                                    </h1>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden" id="tab-settings">
                                    <div class="bg-white rounded-3xl py-5">
                                        <div class="px-3 py-3 xl:px-12 md:py-3">
                                            <div id="map" style="width: 100%; height: 400px;"></div>
                                            <div id="infowindow-content">
                                                <img src="" width="16" height="16" id="place-icon">
                                                <span id="place-name" class="title"></span><br>
                                                <span id="place-address"></span>
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
    <div class="fixed bottom-5 right-3 lg:inset-y-2/3 lg:right-2 2xl:right-[6.5rem]">
        <button class="bg-black text-white p-4 rounded-full ease-linear transition-all duration-150" type="button"
                onclick="toggleModal('modal-id')">
            <img class="w-5 h-5" src="{{ asset('assets/images/filter-icon.svg') }}" alt="">
        </button>
    </div>
    <div
        class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
        id="modal-id">
        <div class="relative my-auto mx-auto w-72 ">
            <!--content-->
            <div
                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-black outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between px-5 pt-2 rounded-t">
                    <h3 class="text-xs text-white font-semibold">
                        Filter by
                    </h3>
                    <button class="text-white float-right text-lg leading-none font-thin"
                            onclick="toggleModal('modal-id')">
                        x
                    </button>
                </div>
                <!--body-->
                <div class="relative px-6 flex-auto">
                    <div class="pt-2 ">
                        <h1 class="text-white text-xs font-bold uppercase">Age</h1>
                        <div class="mt-2 border border-white pt-1 pb-3 px-4 rounded-full">
                            <div>
                                <div class="values">
                                    <span id="age1">
                                        18
                                    </span>
                                    <span id="age2">
                                        60
                                    </span>
                                </div>
                                <div class="container">
                                    <div class="ageslider-track"></div>
                                    <input type="range" min="18" max="60" value="18" step="1"
                                           id="ageslider-1" oninput="ageslideOne()">
                                    <input type="range" min="18" max="60" value="60" step="1"
                                           id="ageslider-2" oninput="ageslideTwo()">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 ">
                        <h1 class="text-white text-xs font-bold uppercase">Rating</h1>
                        <div class="mt-2 border border-white pt-1 pb-3 px-4 rounded-full">
                            <div>
                                <div class="values">
                                    <span id="range1">
                                        0
                                    </span>
                                    <span id="range2">
                                        5
                                    </span>
                                </div>
                                <div class="container">
                                    <div class="slider-track"></div>
                                    <input type="range" min="0" max="5" value="0" step="0.1"
                                           id="slider-1" oninput="slideOne()">
                                    <input type="range" min="0" max="5" value="5" step="0.1"
                                           id="slider-2" oninput="slideTwo()">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 ">
                        <h1 class="text-white text-xs font-bold uppercase">Price</h1>
                        <div class="mt-2 border border-white pt-1 pb-3 px-4 rounded-full">
                            <div>
                                <div class="values">
                                    <span id="price1">
                                        1
                                    </span>
                                    <span id="price2">
                                        5000
                                    </span>
                                </div>
                                <div class="container">
                                    <div class="priceslider-track"></div>
                                    <input type="range" min="1" max="5000" value="1" step="1"
                                           id="priceslider-1" oninput="priceslideOne()">
                                    <input type="range" min="1" max="5000" value="5000" step="1"
                                           id="priceslider-2" oninput="priceslideTwo()">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 ">
                        <h1 class="text-white text-xs font-bold uppercase">search</h1>
                        <div class="mt-2">
                            <input type="text"
                                   class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2.5 placeholder-border-gray text-border-gray"
                                   placeholder="Search player by name">
                        </div>
                    </div>
                    <div class="pt-2 ">
                        <h1 class="text-white text-xs font-bold uppercase">location</h1>
                        <div class="mt-2">
                            <div class="relative items-center">
                                <select
                                    class="appearance-none border border-white bg-transparent text-xs font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5">
                                    <option selected>Distance</option>
                                    <option value="US">Faraway</option>
                                    <option value="CA">Nearby</option>
                                </select>
                                <span class="absolute inset-y-4 right-3.5">
                                    <img src="{{ asset('assets/images/Polygon 9.svg') }}" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 ">
                        <h1 class="text-white text-xs font-bold uppercase">position</h1>
                        <div class="mt-2">
                            <div class="relative items-center">
                                <select
                                    class="appearance-none border border-white bg-transparent text-xs font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5">
                                    <option selected>All positions</option>
                                    <option value="GoalKeeper">GoalKeeper</option>
                                    <option value="Midfilder">Midfilder</option>
                                    <option value="forwarder">Forwarder</option>
                                    <option value="Midfilder">Midfilder</option>
                                    <option value="Defender">Defender</option>
                                </select>
                                <span class="absolute inset-y-4 right-3.5">
                                    <img src="{{ asset('assets/images/Polygon 9.svg') }}" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 ">
                        <h1 class="text-white text-xs font-bold uppercase">Date</h1>
                        <div class="mt-2">
                            <div class="relative items-center">
                                <input type="text" id="player_start_date" autocomplete="off"
                                       name="search_by_date_added"
                                       class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5 placeholder-border-gray"
                                       placeholder="Start Date">
                                <span class="absolute top-2 right-3.5 date-icon-player-start">
                                    <img src="{{ asset('assets/images/white-calender-icon.svg') }}" alt="">
                                </span>
                            </div>

                        </div>
                        <div class="mt-2">
                            <div class="relative items-center">
                                <input type="text" id="player_end_date" autocomplete="off"
                                       name="search_by_date_added"
                                       class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5 placeholder-border-gray"
                                       placeholder="End Date">
                                <span class="absolute top-2 right-3.5 date-icon-player-end">
                                    <img src="{{ asset('assets/images/white-calender-icon.svg') }}" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--footer-->
                <div class="p-6 rounded-b">
                    <a href="{{url('admin/player-management/list')}}">
                        <button
                            class="w-full text-black font-bold bg-white uppercase text-sm px-6 py-3 rounded-full mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button"
                        >
                            Apply
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden opacity-70 fixed inset-0 z-40 bg-modal-black" id="modal-id-backdrop"></div>
    <script src="{{ asset('assets/custom/script/custom.js') }}"></script>
    <script src="{{ asset('assets/custom/script/custom_range.js') }}"></script>
    <script src="{{ asset('assets/custom/script/custom_age.js') }}"></script>
    <script src="{{ asset('assets/custom/script/custom_price.js') }}"></script>
@endsection

@section('script')
    <script src="{{ asset('assets/custom/script/custom_calender_picker.js') }}"></script>
    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>

    <!--Map grid tabs-->
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
                aElements[i].classList.remove("text-black");
                aElements[i].classList.remove("bg-white");
                aElements[i].classList.add("text-border-gray");
                aElements[i].classList.add("bg-white");
                tabContents[i].classList.add("hidden");
                tabContents[i].classList.remove("block");
            }
            element.classList.remove("text-border-gray");
            element.classList.remove("bg-white");
            element.classList.add("text-black");
            element.classList.add("bg-white");
            document.getElementById(tabID).classList.remove("hidden");
            document.getElementById(tabID).classList.add("block");
        }
    </script>

    <script>
        function initMap() {
            const icon = "{{URL::asset('assets/images/purple_pinpoint.png')}}";
            let players = @json($player);
            const map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: true,
            });

            let infowindow = new google.maps.InfoWindow();

            let marker, i;
            const bounds = new google.maps.LatLngBounds();
            players.forEach((element, index) => {
                if (element['currrent_latitude'] !== 0 && element['current_longitude'] !== 0) {
                    const player_age = calculateAge(element['age']);
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(element['currrent_latitude'], element['current_longitude']),
                        map: map,
                        icon: icon
                    });

                    bounds.extend(marker.getPosition());

                    google.maps.event.addListener(marker, 'click', (function (marker, i) {
                        return function () {
                            let contentString;
                            if (element['membership_type'] === 'golden') {
                                contentString =
                                    '<div class="group relative h-[13.813rem] xl:w-80 rounded-3xl px-4 py-9 bg-cover bg-center" style="background-image: url({{URL::asset("assets/images/small-gold.png")}})">' +
                                    '<div class="flex justify-between">' +
                                    '<div class="flex items-center">' +
                                    '<img src="{{URL::asset('')}}' + element["profile_image"] + '" class="rounded-full border-2 border-black mr-3 h-14 w-14" alt="Logo"/>' +
                                    '<span class="self-center">' +
                                    '<h1 class="text-black text-sm font-semibold">' +
                                    '@if ($card_detail->first_name == 1)' + element['first_name'] + '@endif' +
                                    '@if ($card_detail->sur_name == 1)' + element['sur_name'] + '@endif' +
                                    '</h1>' +
                                    '<h2 class="text-gray-heading font-medium text-sm">' +
                                    '<span>@</span>' + element['player_user_name'] + '</h2>' +
                                    '@if ($card_detail->rating == 1)' +
                                    '<div class="flex items-center">' +
                                    '<svg class="w-3.5 h-3.5 text-light-green" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">' +
                                    '<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">' +
                                    '</path>' +
                                    '</svg>' +
                                    '<svg class="w-3.5 h-3.5 text-light-green" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">' +
                                    '<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">' +
                                    '</path>' +
                                    '</svg>' +
                                    '<svg class="w-3.5 h-3.5 text-light-green" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">' +
                                    '<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">' +
                                    '</path>' +
                                    '</svg>' +
                                    '<svg class="w-3.5 h-3.5 text-light-green" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">' +
                                    '<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">' +
                                    '</path>' +
                                    '</svg>' +
                                    '<svg class="w-3.5 h-3.5 text-light-green" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">' +
                                    '<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">' +
                                    '</path>' +
                                    '</svg>' +
                                    '<h1 class="text-xs text-light-green">&nbsp 5.0</h1>' +
                                    '</div>' +
                                    '@endif' +
                                    '</span>' +
                                    '</div>' +
                                    '<div>' +
                                    '@if ($card_detail->price == 1)' +
                                    '<small class="text-black font-semibold">$200</small>' +
                                    '@endif' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="my-3">' +
                                    '<div class="flex justify-between">' +
                                    '<div class="text-center">' +
                                    '@if ($card_detail->age == 1)' +
                                    '<h1 class="text-light-green text-sm">Age</h1>' +
                                    '<h2 class="text-black text-sm">' + player_age + '</h2>' +
                                    '@endif' +
                                    '</div>' +
                                    '<div class="text-center">' +
                                    '@if ($card_detail->played == 1)' +
                                    '<h1 class="text-light-green text-sm">Played</h1>' +
                                    '<h2 class="text-black text-sm">2</h2>' +
                                    '@endif' +
                                    '</div>' +
                                    '<div class="text-center">' +
                                    '@if ($card_detail->missed == 1)' +
                                    '<h1 class="text-light-green text-sm">Missed</h1>' +
                                    '<h2 class="text-black text-sm">2</h2>' +
                                    '@endif' +
                                    '</div>' +
                                    '<div class="text-center">' +
                                    '@if ($card_detail->position == 1)' +
                                    '<h1 class="text-light-green text-sm">Position</h1>' +
                                    '<h2 class="text-black text-sm">' + element['position']['name'] + '</h2>' +
                                    '@endif' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '<hr class="text-heading-white">' +
                                    '<div class="mt-2">' +
                                    '<div class="flex items-center max-w-10">' +
                                    '<img src="{{ asset('assets/images/black-location.svg') }}" class="mr-1" alt="Logo"/>' +
                                    '@if ($card_detail->location == 1)' +
                                    '<h1 class="text-black text-xs truncate">' + element['current_address'] + '</h1>' +
                                    '@endif' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="hidden group-hover:block absolute bottom-[1.25rem] right-1 px-5 py-2 rounded-2xl bg-black ">' +
                                    '<a href="{{ url('admin/player-management/golden-member') }}/' + element['id'] + '" class="inline-flex space-x-2 items-center">' +
                                    '<img src="{{ asset('assets/images/icons/Icon feather-eye.svg') }}" class="mr-1" alt="Logo"/>' +
                                    '<h1 class="text-gray-200 font-normal text-base">view</h1>' +
                                    '</a>' +
                                    '</div>' +
                                    '</div>';
                            } else {
                                 contentString =
                                    '<div class=" group relative h-[13.813rem] xl:w-80 rounded-3xl px-4 py-9 bg-cover bg-center" style="background-image: url({{URL::asset("assets/images/small-default.png")}})">' +
                                    '<div class="flex justify-between"><div>' +
                                    '<div class="flex items-center">' +
                                    '<img src="{{URL::asset('')}}' + element["profile_image"] + '" class="rounded-full border-2 border-white mr-2 h-14 w-14" alt="Logo" />' +
                                    '<span class="self-center">' +
                                    '<h1 class="text-white text-sm font-semibold">' +
                                    '@if ($card_detail->first_name == 1)' + element['first_name'] + '@endif' +
                                    '@if ($card_detail->sur_name == 1)' + element['sur_name'] + '@endif' +
                                    '</h1>' +
                                    '<h2 class="text-heading-white text-opacity-25 font-medium text-sm">' +
                                    '<span>@</span>' + element['player_user_name'] + '</h2>' +
                                    '@if ($card_detail->rating == 1)' +
                                    '<div class="flex items-center">' +
                                    '<svg class="w-3.5 h-3.5 text-rating-yellow" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">' +
                                    '<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">' +
                                    '</path>' +
                                    '</svg>' +
                                    '<svg class="w-3.5 h-3.5 text-rating-yellow" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">' +
                                    '<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">' +
                                    '</path>' +
                                    '</svg>' +
                                    '<svg class="w-3.5 h-3.5 text-rating-yellow" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">' +
                                    '<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">' +
                                    '</path>' +
                                    '</svg>' +
                                    '<svg class="w-3.5 h-3.5 text-rating-yellow" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">' +
                                    '<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">' +
                                    '</path>' +
                                    '</svg>' +
                                    '<svg class="w-3.5 h-3.5 text-rating-yellow" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">' +
                                    '<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">' +
                                    '</path>' +
                                    '</svg>' +
                                    '<h1 class="text-xs text-rating-yellow">5.0</h1>' +
                                    '</div>' +
                                    '@endif' +
                                    '</span>' +
                                    '</div>' +
                                    '</div>' +
                                    '<div>' +
                                    '@if ($card_detail->sur_name == 1)' +
                                    '<small class="text-white font-semibold">$200</small>' +
                                    '@endif' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="my-3">' +
                                    '<div class="flex justify-between">' +
                                    '<div class="text-center">' +
                                    '@if ($card_detail->age == 1)' +
                                    '<h1 class="text-heading-white text-opacity-25 text-sm">Age</h1>' +
                                    '<h2 class="text-white text-sm">' + player_age + '</h2>' +
                                    '@endif' +
                                    '</div>' +
                                    '<div class="text-center">' +
                                    '@if ($card_detail->played == 1)' +
                                    '<h1 class="text-heading-white text-opacity-25 text-sm">Played</h1>' +
                                    '<h2 class="text-white text-sm">2</h2>' +
                                    '@endif' +
                                    '</div>' +
                                    '<div class="text-center">' +
                                    '@if ($card_detail->missed == 1)' +
                                    '<h1 class="text-heading-white text-opacity-25 text-sm">Missed</h1>' +
                                    '<h2 class="text-white text-sm">2</h2>' +
                                    '@endif' +
                                    '</div>' +
                                    '<div class="text-center">' +
                                    '@if ($card_detail->position == 1)' +
                                    '<h1 class="text-heading-white text-opacity-25 text-sm">Position</h1>' +
                                    '<h2 class="text-white text-sm">' + element['position']['name'] + '</h2>' +
                                    '@endif' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '<hr>' +
                                    '<div class="mt-2">' +
                                    '<div class="flex items-center max-w-10">' +
                                    '<img src="{{ asset('assets/images/white-location.svg') }}"class="mr-1" alt="Logo" />' +
                                    '@if ($card_detail->location == 1)' +
                                    '<h1 class="text-white text-xs truncate">' + element['current_address'] + '</h1>' +
                                    '@endif' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="hidden group-hover:block absolute bottom-[1.25rem] right-1 px-5 py-2 rounded-2xl bg-black ">' +
                                    '<a href={{ url('admin/player-management/default-account') }}/' + element['id'] + '" class="inline-flex space-x-2 items-center">' +
                                    '<img src="{{ asset('assets/images/icons/Icon feather-eye.svg') }}" class="mr-1" alt="Logo" />' +
                                    '<h1 class="text-gray-200 font-normal text-base">view</h1>' +
                                    '</a>' +
                                    '</div>' +
                                    '</div>';
                            }
                            infowindow = new google.maps.InfoWindow({
                                content: contentString,
                                ariaLabel: "Uluru",
                            });
                            infowindow.open(map, marker);
                        }
                    })(marker, i));
                }
            });
            map.fitBounds(bounds);

        }
    </script>

    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAP_API_KEY')}}&libraries=places&callback=initMap"></script>
@endsection
