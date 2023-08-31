@extends('player.layouts.master')
@section('content')
    <div class="pt-4 px-4 md:pt-10 md:px-16 2xl:px-52">
        <div class="grid md:grid-cols-2 px-2 md:items-center">
            @include('player.dashboard.common_heading')
            <div class="md:pl-5 w-80 lg:w-[30rem] lg:w-[40rem]">
                <!-- Implement the carousel-->
                @include('player.dashboard.common_ad')
            </div>
        </div>
        <div class="pt-6">
            <div class="pt-2 pb-6">
                <div class="flex flex-wrap" id="tabs-id">
                    <div class="w-full">
                        <ul class="flex mb-0 list-none overflow-x-auto scroll md:flex-wrap pt-3 pb-4 flex-row">
                            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                                <a class="text-xs w-[8rem] md:w-auto font-bold uppercase px-3 md:px-5 py-3 shadow-lg rounded-full block leading-normal text-black bg-white cursor-pointer"
                                    onclick="changeAtiveTab(event,'tab-positions')">
                                    all positions
                                </a>
                            </li>
                            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                                <a class="text-xs w-[8rem] md:w-auto font-bold uppercase px-5 py-3 shadow-lg rounded-full block leading-normal text-border-gray bg-slate-50 cursor-pointer"
                                    onclick="changeAtiveTab(event,'tab-goalkeeper')">
                                    goalkeeper
                                </a>
                            </li>
                            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                                <a class="text-xs w-[8rem] md:w-auto font-bold uppercase px-5 py-3 shadow-lg rounded-full block leading-normal text-border-gray bg-slate-50 cursor-pointer"
                                    onclick="changeAtiveTab(event,'tab-defender')">
                                    Defender
                                </a>
                            </li>
                            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                                <a class="text-xs w-[8rem] md:w-auto font-bold uppercase px-5 py-3 shadow-lg rounded-full block leading-normal text-border-gray bg-slate-50 cursor-pointer"
                                    onclick="changeAtiveTab(event,'tab-midfielder')">
                                    midfielder
                                </a>
                            </li>
                            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                                <a class="text-xs w-[8rem] md:w-auto font-bold uppercase px-5 py-3 shadow-lg rounded-full block leading-normal text-border-gray bg-slate-50 cursor-pointer"
                                    onclick="changeAtiveTab(event,'tab-forward')">
                                    forward
                                </a>
                            </li>
                        </ul>
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 rounded">
                            <div class="py-5 flex-auto">
                                <div class="tab-content tab-space">
                                    <div class="block" id="tab-positions">
                                        <div class="px-2 pt-2 pb-6">
                                            <div class="flex space-x-2 justify-end">
                                                <ul class="flex space-x-0.5" id="tabs-map-grid">
                                                    <li
                                                        class="px-4 py-1 text-sm font-bold bg-white border border-gray-200 rounded-md focus:z-10">
                                                        <a id="default-tab" href="#first">Grid</a>
                                                    </li>
                                                    <li
                                                        class="px-4 py-1 text-sm font-bold bg-white border border-gray-200 rounded-md focus:z-10">
                                                        <a href="#second">Map</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="tab-contents">
                                            <div class="bg-white rounded-3xl pt-5 pb-10 relative" id="first">
                                                <div class="px-3 py-3 xl:px-12 md:py-3">
                                                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-2 xl:gap-4 2xl:gap-8 xl:justify-items-center">
                                                        @foreach ($player as $players)
                                                            @if ($players->membership_type == 'golden')
                                                                <div class="rounded-3xl h-[13.813rem] xl:w-80 relative px-4 py-9 bg-cover bg-center"
                                                                    style="background-image: url('{{ asset('assets/images/small-gold.png') }}');">
                                                                    <div class="flex justify-between">
                                                                        <div>
                                                                            <a href="{{ Route('player.golden.player', $players->id) }}"
                                                                                class="flex items-center">
                                                                                <img src="{{ URL::asset($players->profile_image) }}"
                                                                                    class="object-cover rounded-full border-2 border-black mr-3 h-14 w-14"
                                                                                    alt="Logo" />
                                                                                <span class="self-center">
                                                                                    <h1
                                                                                        class="text-black text-sm font-semibold">
                                                                                        @if ($card_detail->first_name == 1)
                                                                                            {{ $players->first_name }}
                                                                                        @endif
                                                                                        @if ($card_detail->sur_name == 1)
                                                                                            {{ $players->sur_name }}
                                                                                        @endif
                                                                                    </h1>
                                                                                    <h2
                                                                                        class="text-gray-heading font-medium text-sm">
                                                                                        <span>@</span>{{ $players->player_user_name }}
                                                                                    </h2>
                                                                                    @if ($card_detail->rating == 1)
                                                                                        <div class="flex items-center">
                                                                                            <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <h1
                                                                                                class="text-xs text-light-green">
                                                                                                &nbsp 5.0</h1>
                                                                                        </div>
                                                                                    @endif
                                                                                </span>
                                                                            </a>
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
                                                                                        <h2 class="text-black text-sm">
                                                                                            {{ get_age_from_birth_date($players->date_of_birth) }}
                                                                                        </h2>
                                                                                @endif
                                                                            </div>
                                                                            <div class="text-center">
                                                                                @if ($card_detail->played == 1)
                                                                                <h1 class="text-light-green text-sm">
                                                                                    Played</h1>
                                                                                        <h2 class="text-black text-sm">2
                                                                                        </h2>
                                                                                    @endif
                                                                            </div>
                                                                            <div class="text-center">
                                                                                @if ($card_detail->missed == 1)
                                                                                <h1 class="text-light-green text-sm">
                                                                                    Missed</h1>

                                                                                        <h2 class="text-black text-sm">2
                                                                                        </h2>
                                                                                    @endif
                                                                            </div>
                                                                            <div class="text-center">
                                                                                @if ($card_detail->position == 1)
                                                                                <h1 class="text-light-green text-sm">
                                                                                    Position</h1>

                                                                                        <h2 class="text-black text-sm">
                                                                                            {{ $players->position['name'] }}
                                                                                        </h2>
                                                                                    @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="text-heading-white">
                                                                    <div class="mt-2 flex justify-between">
                                                                        <div class="flex items-center max-w-10">
                                                                            <img src="{{ asset('assets/images/black-location.svg') }}"
                                                                                class="mr-1" alt="Logo" />
                                                                                @if ($card_detail->location == 1)
                                                                                    @if ($players->current_country)
                                                                                        <h1 class="text-black text-xs truncate">
                                                                                            {{ $players->current_city }} , {{ $players->current_state }} , {{ $players->current_country }}
                                                                                        </h1>
                                                                                    @endif
                                                                                @endif
                                                                        </div>
                                                                        @if ($players->id !== session('player_id'))
                                                                            <a
                                                                                href="{{ Route('player.send.invitation') }}">
                                                                                <h1 class="text-white text-xs">Send
                                                                                    Invitation >></h1>
                                                                            </a>
                                                                        @endif
                                                                    </div>
                                                                    @if ($players->id !== session('player_id'))
                                                                        <div class="absolute bottom-2.5 right-2.5">
                                                                            <img src="{{ asset('assets/images/empty-flag.svg') }}"
                                                                                    onclick="toggleModal('flagmodal-id')"
                                                                                alt="">
                                                                        </div>
                                                                    @endif
                                                                    <div class="absolute -top-px -right-px ">
                                                                        <div class="relative">
                                                                            {{-- @if ($players->is_favorite == 1) --}}
                                                                            @if ($players->id !== session('player_id'))
                                                                                <div id="is_favourite{{$players->id}}" class="">
                                                                                    <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                                        alt="">
                                                                                    <img id="favourite_image_{{$players->id}}" class="absolute top-2 right-1.5 cursor-pointer"
                                                                                    onclick="isFavorite('{{ $players->id }}','{{ Session::get('player_id') }}','{{ $players->position_id }}','favourite_image_{{$players->id}}')"
                                                                                        src="{{$players->is_favorite == 1 ? asset('assets/images/heart-icon.svg') : asset('assets/images/empty-heart.svg')}}" />
                                                                                </div>
                                                                            @endif
                                                                            {{-- @else
                                                                                @if ($players->id !== session('player_id'))
                                                                                    <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                                        alt="">
                                                                                    <img class="absolute top-2 right-1.5 cursor-pointer"
                                                                                        onclick="MakeFavorite('{{ $players->id }}','{{ Session::get('player_id') }}','{{ $players->position_id }}')"
                                                                                        src="{{ asset('assets/images/empty-heart.svg') }}" />
                                                                                @endif
                                                                            @endif --}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <div class="rounded-3xl h-[13.813rem] xl:w-80 relative px-4 py-9 bg-cover bg-center"
                                                                    style="background-image: url('{{ asset('assets/images/small-default.png') }}');">
                                                                    <div class="flex justify-between">
                                                                        <div>
                                                                            <a href="{{ Route('player.default.player', $players->id) }}"
                                                                                class="flex items-center">
                                                                                <img src="{{ URL::asset($players->profile_image) }}"
                                                                                    class="rounded-full border-2 border-white mr-2 h-14 w-14"
                                                                                    alt="Logo" />
                                                                                <span class="self-center">
                                                                                    <h1
                                                                                        class="text-white text-sm font-semibold">
                                                                                        @if ($card_detail->first_name == 1)
                                                                                            {{ $players->first_name }}
                                                                                        @endif
                                                                                        @if ($card_detail->sur_name == 1)
                                                                                            {{ $players->sur_name }}
                                                                                        @endif
                                                                                       </h1>
                                                                                    <h2
                                                                                        class="text-heading-white text-opacity-25 font-medium text-sm">
                                                                                            <span>@</span>{{ $players->player_user_name }}
                                                                                    </h2>
                                                                                    @if ($card_detail->rating == 1)
                                                                                        <div class="flex items-center">
                                                                                            <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <h1
                                                                                                class="text-xs text-rating-yellow">
                                                                                                &nbsp 5.0</h1>
                                                                                        </div>
                                                                                    @endif
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <div>
                                                                            @if ($card_detail->price == 1)
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

                                                                                        <h2 class="text-white text-sm">
                                                                                            {{ get_age_from_birth_date($players->date_of_birth) }}
                                                                                        </h2>
                                                                                    @endif
                                                                            </div>
                                                                            <div class="text-center">
                                                                                @if ($card_detail->played == 1)
                                                                                <h1
                                                                                    class="text-heading-white text-opacity-25 text-sm">
                                                                                    Played
                                                                                </h1>

                                                                                    <h2 class="text-white text-sm">2
                                                                                    </h2>
                                                                                @endif
                                                                            </div>
                                                                            <div class="text-center">
                                                                                @if ($card_detail->missed == 1)
                                                                                <h1
                                                                                    class="text-heading-white text-opacity-25 text-sm">
                                                                                    Missed
                                                                                </h1>

                                                                                    <h2 class="text-white text-sm">2
                                                                                    </h2>
                                                                                @endif
                                                                            </div>
                                                                            <div class="text-center">
                                                                                @if ($card_detail->position == 1)
                                                                                <h1
                                                                                    class="text-heading-white text-opacity-25 text-sm">
                                                                                    Position
                                                                                </h1>
                                                                                    <h2 class="text-white text-sm">
                                                                                        {{ $players->position['name'] }}
                                                                                    </h2>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="mt-2 flex justify-between">
                                                                        <div class="flex items-center max-w-10">
                                                                            <img src="{{ asset('assets/images/white-location.svg') }}"
                                                                                class="mr-1" alt="Logo" />
                                                                                @if ($card_detail->location == 1)
                                                                                    @if ($players->current_country)
                                                                                        <h1 class="text-white text-xs truncate">
                                                                                            {{ $players->current_city }} , {{ $players->current_state }} , {{ $players->current_country }}
                                                                                        </h1>
                                                                                    @endif
                                                                                @endif
                                                                        </div>
                                                                        @if ($players->id !== session('player_id'))
                                                                            <a
                                                                                href="{{ Route('player.send.invitation') }}">
                                                                                <h1 class="text-white text-xs">Send
                                                                                    Invitation >></h1>
                                                                            </a>
                                                                        @endif
                                                                    </div>
                                                                    @if ($players->id !== session('player_id'))
                                                                        <div class="absolute bottom-2.5 right-2.5">
                                                                            <img class="cursor-pointer"
                                                                                src="{{ asset('assets/images/empty-flag.svg') }}"
                                                                                onclick="toggleModal('flagmodal-id')">
                                                                        </div>
                                                                    @endif
                                                                    <div class="absolute -top-px -right-px ">
                                                                        <div class="relative">
                                                                            @if ($players->id !== session('player_id'))
                                                                                <div id="is_favourite{{$players->id}}" class="">
                                                                                    <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                                        alt="">
                                                                                    <img id="favourite_image_{{$players->id}}" class="absolute top-2 right-1.5 cursor-pointer"
                                                                                    onclick="isFavorite('{{ $players->id }}','{{ Session::get('player_id') }}','{{ $players->position_id }}','favourite_image_{{$players->id}}')"
                                                                                        src="{{$players->is_favorite == 1 ? asset('assets/images/heart-icon.svg') : asset('assets/images/empty-heart.svg')}}" />
                                                                                </div>
                                                                            @endif
                                                                        {{-- @else
                                                                            @if ($players->id !== session('player_id'))
                                                                                <div id="empty" class="">
                                                                                    <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                                        alt="">
                                                                                    <img class="absolute top-2 right-1.5 cursor-pointer"
                                                                                        onclick="MakeFavorite('{{ $players->id }}','{{ Session::get('player_id') }}','{{ $players->position_id }}')"
                                                                                        src="{{ asset('assets/images/empty-heart.svg') }}" />
                                                                                </div>
                                                                            @endif --}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                                                        id="flagmodal-id">
                                                                        <div class="relative my-auto mx-2 md:mx-auto w-80">
                                                                            <!--content-->
                                                                            <div
                                                                                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                                                                <!--header-->
                                                                                <div
                                                                                    class="flex justify-end px-3 py-1 rounded-t">
                                                                                    <button
                                                                                        class="text-black float-right text-lg leading-none font-medium"
                                                                                        onclick="toggleModal('flagmodal-id')">
                                                                                        x
                                                                                    </button>
                                                                                </div>
                                                                                <!--body-->
                                                                                <div class="relative px-3 md:px-5 pb-6">
                                                                                    <h3
                                                                                        class="text-xl text-light-green text-center font-semibold uppercase">
                                                                                        report
                                                                                    </h3>
                                                                                    <div
                                                                                        class="flex flex-col space-y-2 justify-center my-3">
                                                                                        <button
                                                                                            class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                            spam
                                                                                        </button>
                                                                                        <button
                                                                                            class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                            Hate
                                                                                            speech or
                                                                                            uncivil
                                                                                        </button>
                                                                                        <button
                                                                                            class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                            sexual
                                                                                            activity
                                                                                        </button>
                                                                                        <button
                                                                                            class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                            scam
                                                                                            or fraud
                                                                                        </button>
                                                                                        <button
                                                                                            class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                            bullying
                                                                                            or harrasment
                                                                                        </button>
                                                                                        <button
                                                                                            class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                            violence
                                                                                            or threats
                                                                                        </button>
                                                                                        <button
                                                                                            class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                            racism,
                                                                                            discrimination or
                                                                                            insults
                                                                                        </button>
                                                                                    </div>
                                                                                    <button
                                                                                        class="w-full bg-black text-white text-sm font-medium uppercase py-2 px-4 rounded-full"
                                                                                        type="button">
                                                                                        report
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black"
                                                                        id="flagmodal-id-backdrop"></div>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                                {{-- {{$player->links()}} --}}
                                                {{-- <ul class=" absolute right-5 bottom-3  md:bottom-5 flex space-x-2 justify-end">
                                                    <li class="text-black text-sm font-semibold bg-white drop-shadow-xl py-2 px-3 rounded"><a href="#">1</a></li>
                                                    <li class="text-black text-sm font-semibold bg-white drop-shadow-xl py-2 px-3 rounded"><a href="#">2</a></li>
                                                    <li class="text-black text-sm font-semibold bg-white drop-shadow-xl py-2 px-3 rounded"><a href="#">3</a></li>
                                                </ul> --}}
                                            </div>
                                            <div class="hidden" id="second">
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
                                    <div class="hidden" id="tab-goalkeeper">
                                        <div class="px-2 pt-2 pb-6">
                                            <div class="flex space-x-2 justify-end">
                                                <ul id="tabs-map-grid-goalkeeper" class="flex space-x-0.5">
                                                    <li
                                                        class="px-4 py-1 text-sm font-bold bg-white border border-gray-200 rounded-md focus:z-10">
                                                        <a id="defaulty-tab" href="#third">Grid</a>
                                                    </li>
                                                    <li
                                                        class="px-4 py-1 text-sm font-bold bg-white border border-gray-200 rounded-md focus:z-10">
                                                        <a href="#fourth">Map</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="tab-contentgoalkeeper">
                                            <div class="bg-white rounded-3xl pt-5 pb-10 relative" id="third">
                                                <div class="px-3 py-3 xl:px-12 md:py-3">
                                                    <div
                                                        class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-2 xl:gap-4 2xl:gap-8 xl:justify-items-center">
                                                        @foreach ($goal_keeper as $goal_keepers)
                                                            @if ($goal_keepers->position['name'] == 'Goalkeeper')
                                                                @if ($goal_keepers->membership_type == 'golden')
                                                                    <div class="rounded-3xl h-[13.813rem] xl:w-80 relative px-4 py-9 bg-cover bg-center"
                                                                        style="background-image: url('{{ asset('assets/images/small-gold.png') }}');">
                                                                        <div class="flex justify-between">
                                                                            <div>
                                                                                <a href="{{ Route('player.golden.player', $goal_keepers->id) }}"
                                                                                    class="flex items-center">
                                                                                    <img src="{{ URL::asset($goal_keepers->profile_image) }}"
                                                                                        class="object-cover rounded-full border-2 border-black mr-3 h-14 w-14"
                                                                                        alt="Logo" />
                                                                                    <span class="self-center">
                                                                                        <h1
                                                                                            class="text-black text-sm font-semibold">
                                                                                            @if ($card_detail->first_name == 1)
                                                                                                {{ $goal_keepers->first_name }}
                                                                                            @endif
                                                                                            @if ($card_detail->sur_name == 1)
                                                                                                {{ $goal_keepers->sur_name }}
                                                                                            @endif
                                                                                        </h1>
                                                                                        <h2
                                                                                            class="text-gray-heading font-medium text-sm">
                                                                                            <span>@</span>{{ $goal_keepers->player_user_name }}
                                                                                        </h2>
                                                                                        @if ($card_detail->rating == 1)
                                                                                            <div class="flex items-center">
                                                                                                <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                    fill="currentColor"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                                <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                    fill="currentColor"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                                <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                    fill="currentColor"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                                <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                    fill="currentColor"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                                <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                    fill="currentColor"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                                <h1
                                                                                                    class="text-xs text-light-green">
                                                                                                    &nbsp 5.0</h1>
                                                                                            </div>
                                                                                        @endif
                                                                                    </span>
                                                                                </a>
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

                                                                                        <h2 class="text-black text-sm">
                                                                                            {{ get_age_from_birth_date($goal_keepers->date_of_birth) }}

                                                                                    </h2>
                                                                                    @endif
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    @if ($card_detail->played == 1)
                                                                                    <h1 class="text-light-green text-sm">
                                                                                        Played</h1>

                                                                                            <h2 class="text-black text-sm">2
                                                                                            </h2>
                                                                                        @endif
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    @if ($card_detail->missed == 1)
                                                                                    <h1 class="text-light-green text-sm">
                                                                                        Missed</h1>

                                                                                            <h2 class="text-black text-sm">2
                                                                                            </h2>
                                                                                        @endif
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    @if ($card_detail->position == 1)
                                                                                    <h1 class="text-light-green text-sm">
                                                                                        Position</h1>

                                                                                            <h2 class="text-black text-sm">
                                                                                                {{ $goal_keepers->position['name'] }}
                                                                                            </h2>
                                                                                        @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="text-heading-white">
                                                                        <div class="mt-2 flex justify-between">
                                                                            <div class="flex items-center max-w-10">
                                                                                <img src="{{ asset('assets/images/black-location.svg') }}"
                                                                                    class="mr-1" alt="Logo" />
                                                                                    @if ($card_detail->location == 1)
                                                                                        <h1 class="text-black text-xs truncate">
                                                                                            {{ $goal_keepers->current_city }} , {{ $goal_keepers->current_state }} , {{ $goal_keepers->current_country }}
                                                                                        </h1>
                                                                                    @endif
                                                                            </div>
                                                                            @if ($goal_keepers->id !== session('player_id'))
                                                                                <a
                                                                                    href="{{ Route('player.send.invitation') }}">
                                                                                    <h1 class="text-white text-xs">Send
                                                                                        Invitation >></h1>
                                                                                </a>
                                                                            @endif
                                                                        </div>
                                                                        @if ($goal_keepers->id !== session('player_id'))
                                                                            <div class="absolute bottom-2.5 right-2.5">
                                                                                <img src="{{ asset('assets/images/empty-flag.svg') }}"
                                                                                    alt="">
                                                                            </div>
                                                                        @endif
                                                                        <div class="absolute -top-px -right-px ">
                                                                            <div class="relative">
                                                                                @if ($goal_keepers->id !== session('player_id'))
                                                                                    <div id="is_favourite{{$goal_keepers->id}}" class="">
                                                                                        <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                                            alt="">
                                                                                        <img id="favourite_image_goalkeeper_{{$goal_keepers->id}}" class="absolute top-2 right-1.5 cursor-pointer"
                                                                                        onclick="isFavorite('{{ $goal_keepers->id }}','{{ Session::get('player_id') }}','{{ $goal_keepers->position_id }}','favourite_image_goalkeeper_{{$goal_keepers->id}}')"
                                                                                            src="{{$goal_keepers->is_favorite == 1 ? asset('assets/images/heart-icon.svg') : asset('assets/images/empty-heart.svg')}}" />
                                                                                    </div>
                                                                                @endif
                                                                                {{-- @else
                                                                                    @if ($goal_keepers->id !== session('player_id'))
                                                                                        <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                                            alt="">
                                                                                        <img class="absolute top-2 right-1.5 cursor-pointer"
                                                                                            onclick="MakeFavorite('{{ $goal_keepers->id }}','{{ Session::get('player_id') }}','{{ $goal_keepers->position_id }}')"
                                                                                            src="{{ asset('assets/images/empty-heart.svg') }}" /> --}}
                                                                                        {{-- @else
                                                                                        <img
                                                                                            class="absolute top-2 right-1.5 cursor-pointer"
                                                                                            src="{{ asset('assets/images/empty-heart.svg') }}"/> --}}
                                                                                    {{-- @endif
                                                                                @endif  --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @else
                                                                    <div class="rounded-3xl h-[13.813rem] xl:w-80 relative px-4 py-9 bg-cover bg-center"
                                                                        style="background-image: url('{{ asset('assets/images/small-default.png') }}');">
                                                                        <div class="flex justify-between">
                                                                            <div>
                                                                                <a href="{{ Route('player.default.player', $goal_keepers->id) }}"
                                                                                    class="flex items-center">
                                                                                    <img src="{{ URL::asset($goal_keepers->profile_image) }}"
                                                                                        class="rounded-full border-2 border-white mr-2 h-14 w-14"
                                                                                        alt="Logo" />
                                                                                    <span class="self-center">
                                                                                        <h1
                                                                                            class="text-white text-sm font-semibold">
                                                                                            @if ($card_detail->first_name == 1)
                                                                                                {{ $goal_keepers->first_name }}
                                                                                            @endif
                                                                                            @if ($card_detail->sur_name == 1)
                                                                                                {{ $goal_keepers->sur_name }}
                                                                                            @endif
                                                                                        </h1>
                                                                                        <h2
                                                                                            class="text-heading-white text-opacity-25 font-medium text-sm">
                                                                                                <span>@</span>{{ $goal_keepers->player_user_name }}
                                                                                        </h2>
                                                                                        @if ($card_detail->rating == 1)
                                                                                            <div class="flex items-center">
                                                                                                <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                    fill="currentColor"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                                <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                    fill="currentColor"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                                <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                    fill="currentColor"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                                <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                    fill="currentColor"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                                <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                    fill="currentColor"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                                <h1
                                                                                                    class="text-xs text-rating-yellow">
                                                                                                    &nbsp 5.0</h1>
                                                                                            </div>
                                                                                        @endif
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                            <div>
                                                                                @if ($card_detail->price == 1)
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

                                                                                            <h2 class="text-white text-sm">
                                                                                                {{ get_age_from_birth_date($goal_keepers->date_of_birth) }}
                                                                                            </h2>
                                                                                        @endif
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    @if ($card_detail->played == 1)
                                                                                    <h1
                                                                                        class="text-heading-white text-opacity-25 text-sm">
                                                                                        Played
                                                                                    </h1>

                                                                                        <h2 class="text-white text-sm">2
                                                                                        </h2>
                                                                                    @endif
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    @if ($card_detail->missed == 1)
                                                                                    <h1
                                                                                        class="text-heading-white text-opacity-25 text-sm">
                                                                                        Missed
                                                                                    </h1>

                                                                                        <h2 class="text-white text-sm">2
                                                                                        </h2>
                                                                                    @endif
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    @if ($card_detail->position == 1)
                                                                                    <h1
                                                                                        class="text-heading-white text-opacity-25 text-sm">
                                                                                        Position
                                                                                    </h1>

                                                                                        <h2 class="text-white text-sm">
                                                                                            {{ $goal_keepers->position['name'] }}
                                                                                        </h2>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="mt-2 flex justify-between">
                                                                            <div class="flex items-center max-w-10">
                                                                                <img src="{{ asset('assets/images/white-location.svg') }}"
                                                                                    class="mr-1" alt="Logo" />
                                                                                    @if ($card_detail->location == 1)
                                                                                        <h1 class="text-white text-xs truncate">
                                                                                            {{ $goal_keepers->current_city }} , {{ $goal_keepers->current_state }} , {{ $goal_keepers->current_country }}
                                                                                        </h1>
                                                                                    @endif
                                                                            </div>
                                                                            @if ($goal_keepers->id !== session('player_id'))
                                                                                <a
                                                                                    href="{{ Route('player.send.invitation') }}">
                                                                                    <h1 class="text-white text-xs">Send
                                                                                        Invitation >></h1>
                                                                                </a>
                                                                            @endif
                                                                        </div>
                                                                        @if ($goal_keepers->id !== session('player_id'))
                                                                            <div class="absolute bottom-2.5 right-2.5">
                                                                                <img class="cursor-pointer"
                                                                                    src="{{ asset('assets/images/empty-flag.svg') }}"
                                                                                    onclick="toggleModal('flagmodal-id')">
                                                                            </div>
                                                                        @endif
                                                                        <div class="absolute -top-px -right-px ">
                                                                            <div class="relative">
                                                                                @if ($goal_keepers->id !== session('player_id'))
                                                                                    <div id="is_favourite{{$goal_keepers->id}}" class="">
                                                                                        <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                                            alt="">
                                                                                        <img id="favourite_image_goalkeeper_{{$goal_keepers->id}}" class="absolute top-2 right-1.5 cursor-pointer"
                                                                                        onclick="isFavorite('{{ $goal_keepers->id }}','{{ Session::get('player_id') }}','{{ $goal_keepers->position_id }}','favourite_image_goalkeeper_{{$goal_keepers->id}}')"
                                                                                            src="{{$goal_keepers->is_favorite == 1 ? asset('assets/images/heart-icon.svg') : asset('assets/images/empty-heart.svg')}}" />
                                                                                    </div>
                                                                                @endif
                                                                                {{-- @else
                                                                                    @if ($goal_keepers->id !== session('player_id'))
                                                                                        <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                                            alt="">
                                                                                        <img class="absolute top-2 right-1.5 cursor-pointer"
                                                                                            onclick="MakeFavorite('{{ $goal_keepers->id }}','{{ Session::get('player_id') }}','{{ $goal_keepers->position_id }}')"
                                                                                            src="{{ asset('assets/images/empty-heart.svg') }}" /> --}}
                                                                                        {{-- @else
                                                                                        <img
                                                                                            class="absolute top-2 right-1.5 cursor-pointer"
                                                                                            src="{{ asset('assets/images/empty-heart.svg') }}"/> --}}
                                                                                    {{-- @endif
                                                                                @endif --}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                                                            id="flagmodal-id">
                                                                            <div class="relative my-auto mx-2 md:mx-auto w-80">
                                                                                <!--content-->
                                                                                <div
                                                                                    class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                                                                    <!--header-->
                                                                                    <div
                                                                                        class="flex justify-end px-3 py-1 rounded-t">
                                                                                        <button
                                                                                            class="text-black float-right text-lg leading-none font-medium"
                                                                                            onclick="toggleModal('flagmodal-id')">
                                                                                            x
                                                                                        </button>
                                                                                    </div>
                                                                                    <!--body-->
                                                                                    <div class="relative px-3 md:px-5 pb-6">
                                                                                        <h3
                                                                                            class="text-xl text-light-green text-center font-semibold uppercase">
                                                                                            report
                                                                                        </h3>
                                                                                        <div
                                                                                            class="flex flex-col space-y-2 justify-center my-3">
                                                                                            <button
                                                                                                class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                                spam
                                                                                            </button>
                                                                                            <button
                                                                                                class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                                Hate
                                                                                                speech or
                                                                                                uncivil
                                                                                            </button>
                                                                                            <button
                                                                                                class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                                sexual
                                                                                                activity
                                                                                            </button>
                                                                                            <button
                                                                                                class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                                scam
                                                                                                or fraud
                                                                                            </button>
                                                                                            <button
                                                                                                class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                                bullying
                                                                                                or harrasment
                                                                                            </button>
                                                                                            <button
                                                                                                class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                                violence
                                                                                                or threats
                                                                                            </button>
                                                                                            <button
                                                                                                class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                                racism,
                                                                                                discrimination or
                                                                                                insults
                                                                                            </button>
                                                                                        </div>
                                                                                        <button
                                                                                            class="w-full bg-black text-white text-sm font-medium uppercase py-2 px-4 rounded-full"
                                                                                            type="button">
                                                                                            report
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="hidden opacity-25 fixed inset-0 z-40 bg-black"
                                                                            id="flagmodal-id-backdrop"></div>
                                                                    </div>
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                                {{-- {{$goal_keeper->links()}} --}}

                                                {{-- <ul class=" absolute right-5 bottom-3  md:bottom-5 flex space-x-2 justify-end">
                                                    <li class="text-black text-sm font-semibold bg-white drop-shadow-xl py-2 px-3 rounded"><a href="#">1</a></li>
                                                    <li class="text-black text-sm font-semibold bg-white drop-shadow-xl py-2 px-3 rounded"><a href="#">2</a></li>
                                                    <li class="text-black text-sm font-semibold bg-white drop-shadow-xl py-2 px-3 rounded"><a href="#">3</a></li>
                                                </ul> --}}
                                            </div>
                                            <div class="hidden" id="fourth">
                                                <div class="bg-white rounded-3xl py-5">
                                                    <div class="px-3 py-3 xl:px-12 md:py-3">
                                                        <div id="goalkeeper_map" style="width: 100%; height: 400px;"></div>
                                                        {{-- <div id="infowindow-content">
                                                            <img src="" width="16" height="16" id="place-icon">
                                                            <span id="place-name" class="title"></span><br>
                                                            <span id="place-address"></span>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden" id="tab-defender">
                                        <div class="px-2 pt-2 pb-6">
                                            <div class="flex space-x-2 justify-end">
                                                <ul id="tabs-map-grid-defender" class="flex space-x-0.5">
                                                    <li
                                                        class="px-4 py-1 text-sm font-bold bg-white border border-gray-200 rounded-md focus:z-10">
                                                        <a id="defender-tab" href="#fifth">Grid</a>
                                                    </li>
                                                    <li
                                                        class="px-4 py-1 text-sm font-bold bg-white border border-gray-200 rounded-md focus:z-10">
                                                        <a href="#sixth">Map</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="tab-contentdefender">
                                            <div class="bg-white rounded-3xl py-5 pt-5 pb-10 relative" id="fifth">
                                                <div class="px-3 py-3 xl:px-12 md:py-3">
                                                    <div
                                                        class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-2 xl:gap-4 2xl:gap-8 xl:justify-items-center">
                                                        @foreach ($defender as $defenders)
                                                            @if ($defenders->position['name'] == 'Defender')
                                                                @if ($defenders->membership_type == 'golden')
                                                                    <div class="rounded-3xl h-[13.813rem] xl:w-80 relative px-4 py-9 bg-cover bg-center"
                                                                        style="background-image: url('{{ asset('assets/images/small-gold.png') }}');">
                                                                        <div class="flex justify-between">
                                                                            <div>
                                                                                <a href="{{ Route('player.golden.player', $defenders->id) }}"
                                                                                    class="flex items-center">
                                                                                    <img src="{{ URL::asset($defenders->profile_image) }}"
                                                                                        class="object-cover rounded-full border-2 border-black mr-3 h-14 w-14"
                                                                                        alt="Logo" />
                                                                                    <span class="self-center">
                                                                                        <h1
                                                                                            class="text-black text-sm font-semibold">
                                                                                            @if ($card_detail->first_name == 1)
                                                                                                {{ $defenders->first_name }}
                                                                                            @endif
                                                                                            @if ($card_detail->sur_name == 1)
                                                                                                {{ $defenders->sur_name }}
                                                                                            @endif
                                                                                        </h1>
                                                                                        <h2
                                                                                            class="text-gray-heading font-medium text-sm">
                                                                                            <span>@</span>{{ $defenders->player_user_name }}
                                                                                        </h2>
                                                                                        @if ($card_detail->rating == 1)
                                                                                            <div class="flex items-center">
                                                                                                <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                    fill="currentColor"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                                <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                    fill="currentColor"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                                <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                    fill="currentColor"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                                <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                    fill="currentColor"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                                <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                    fill="currentColor"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                                <h1
                                                                                                    class="text-xs text-light-green">
                                                                                                    &nbsp 5.0</h1>
                                                                                            </div>
                                                                                        @endif
                                                                                    </span>
                                                                                </a>
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

                                                                                        <h2 class="text-black text-sm">
                                                                                            {{ get_age_from_birth_date($defenders->date_of_birth) }}

                                                                                    </h2>
                                                                                    @endif
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    @if ($card_detail->played == 1)
                                                                                    <h1 class="text-light-green text-sm">
                                                                                        Played</h1>

                                                                                            <h2 class="text-black text-sm">2
                                                                                            </h2>
                                                                                        @endif
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    @if ($card_detail->missed == 1)
                                                                                    <h1 class="text-light-green text-sm">
                                                                                        Missed</h1>

                                                                                            <h2 class="text-black text-sm">2
                                                                                            </h2>
                                                                                        @endif
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    @if ($card_detail->position == 1)
                                                                                    <h1 class="text-light-green text-sm">
                                                                                        Position</h1>

                                                                                            <h2 class="text-black text-sm">
                                                                                                {{ $defenders->position['name'] }}
                                                                                            </h2>
                                                                                        @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="text-heading-white">
                                                                        <div class="mt-2 flex justify-between">
                                                                            <div class="flex items-center max-w-10">
                                                                                <img src="{{ asset('assets/images/black-location.svg') }}"
                                                                                    class="mr-1" alt="Logo" />
                                                                                    @if ($card_detail->location == 1)
                                                                                        <h1 class="text-black text-xs truncate">
                                                                                            {{ $defenders->current_city }} , {{ $defenders->current_state }} , {{ $defenders->current_country }}
                                                                                        </h1>
                                                                                    @endif
                                                                            </div>
                                                                            @if ($defenders->id !== session('player_id'))
                                                                                <a
                                                                                    href="{{ Route('player.send.invitation') }}">
                                                                                    <h1 class="text-white text-xs">Send
                                                                                        Invitation >></h1>
                                                                                </a>
                                                                            @endif
                                                                        </div>
                                                                        @if ($defenders->id !== session('player_id'))
                                                                            <div class="absolute bottom-2.5 right-2.5">
                                                                                <img src="{{ asset('assets/images/empty-flag.svg') }}"
                                                                                    alt="">
                                                                            </div>
                                                                        @endif
                                                                        <div class="absolute -top-px -right-px ">
                                                                            <div class="relative">
                                                                                @if ($defenders->id !== session('player_id'))
                                                                                    <div id="is_favourite{{$defenders->id}}" class="">
                                                                                        <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                                            alt="">
                                                                                        <img id="favourite_image_defender_{{$defenders->id}}" class="absolute top-2 right-1.5 cursor-pointer"
                                                                                        onclick="isFavorite('{{ $defenders->id }}','{{ Session::get('player_id') }}','{{ $defenders->position_id }}','favourite_image_defender_{{$defenders->id}}')"
                                                                                            src="{{$defenders->is_favorite == 1 ? asset('assets/images/heart-icon.svg') : asset('assets/images/empty-heart.svg')}}" />
                                                                                    </div>
                                                                                @endif
                                                                                {{-- @else
                                                                                    @if ($defenders->id !== session('player_id'))
                                                                                        <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                                            alt="">
                                                                                        <img class="absolute top-2 right-1.5 cursor-pointer"
                                                                                            onclick="MakeFavorite('{{ $defenders->id }}','{{ Session::get('player_id') }}','{{ $defenders->position_id }}')"
                                                                                            src="{{ asset('assets/images/empty-heart.svg') }}" /> --}}
                                                                                        {{-- @else
                                                                                        <img
                                                                                            class="absolute top-2 right-1.5 cursor-pointer"
                                                                                            src="{{ asset('assets/images/empty-heart.svg') }}"/> --}}
                                                                                    {{-- @endif
                                                                                @endif --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @else
                                                                    <div class="rounded-3xl h-[13.813rem] xl:w-80 relative px-4 py-9 bg-cover bg-center"
                                                                        style="background-image: url('{{ asset('assets/images/small-default.png') }}');">
                                                                        <div class="flex justify-between">
                                                                            <div>
                                                                                <a href="{{ Route('player.default.player', $defenders->id) }}"
                                                                                    class="flex items-center">
                                                                                    <img src="{{ URL::asset($defenders->profile_image) }}"
                                                                                        class="rounded-full border-2 border-white mr-2 h-14 w-14"
                                                                                        alt="Logo" />
                                                                                    <span class="self-center">
                                                                                        <h1
                                                                                            class="text-white text-sm font-semibold">
                                                                                            @if ($card_detail->first_name == 1)
                                                                                                {{ $defenders->first_name }}
                                                                                            @endif
                                                                                            @if ($card_detail->sur_name == 1)
                                                                                                {{ $defenders->sur_name }}
                                                                                            @endif
                                                                                        </h1>
                                                                                        <h2
                                                                                            class="text-heading-white text-opacity-25 font-medium text-sm">
                                                                                                <span>@</span>{{ $defenders->player_user_name }}
                                                                                        </h2>
                                                                                        @if ($card_detail->rating == 1)
                                                                                            <div class="flex items-center">
                                                                                                <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                    fill="currentColor"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                                <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                    fill="currentColor"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                                <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                    fill="currentColor"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                                <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                    fill="currentColor"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                                <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                    fill="currentColor"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                                <h1
                                                                                                    class="text-xs text-rating-yellow">
                                                                                                    &nbsp 5.0</h1>
                                                                                            </div>
                                                                                        @endif
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                            <div>
                                                                                @if ($card_detail->price == 1)
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

                                                                                            <h2 class="text-white text-sm">
                                                                                                {{ get_age_from_birth_date($defenders->date_of_birth) }}
                                                                                            </h2>
                                                                                        @endif
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    @if ($card_detail->played == 1)
                                                                                    <h1
                                                                                        class="text-heading-white text-opacity-25 text-sm">
                                                                                        Played
                                                                                    </h1>

                                                                                        <h2 class="text-white text-sm">2
                                                                                        </h2>
                                                                                    @endif
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    @if ($card_detail->missed == 1)
                                                                                    <h1
                                                                                        class="text-heading-white text-opacity-25 text-sm">
                                                                                        Missed
                                                                                    </h1>

                                                                                        <h2 class="text-white text-sm">2
                                                                                        </h2>
                                                                                    @endif
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    @if ($card_detail->position == 1)
                                                                                    <h1
                                                                                        class="text-heading-white text-opacity-25 text-sm">
                                                                                        Position
                                                                                    </h1>

                                                                                        <h2 class="text-white text-sm">
                                                                                            {{ $defenders->position['name'] }}
                                                                                        </h2>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="mt-2 flex justify-between">
                                                                            <div class="flex items-center max-w-10">
                                                                                <img src="{{ asset('assets/images/white-location.svg') }}"
                                                                                    class="mr-1" alt="Logo" />
                                                                                    @if ($card_detail->location == 1)
                                                                                        <h1 class="text-white text-xs truncate">
                                                                                            {{ $defenders->current_city }} , {{ $defenders->current_state }} , {{ $defenders->current_country }}
                                                                                        </h1>
                                                                                    @endif
                                                                            </div>
                                                                            @if ($defenders->id !== session('player_id'))
                                                                                <a
                                                                                    href="{{ Route('player.send.invitation') }}">
                                                                                    <h1 class="text-white text-xs">Send
                                                                                        Invitation >></h1>
                                                                                </a>
                                                                            @endif
                                                                        </div>
                                                                        @if ($defenders->id !== session('player_id'))
                                                                            <div class="absolute bottom-2.5 right-2.5">
                                                                                <img class="cursor-pointer"
                                                                                    src="{{ asset('assets/images/empty-flag.svg') }}"
                                                                                    onclick="toggleModal('flagmodal-id')">
                                                                            </div>
                                                                        @endif
                                                                        <div class="absolute -top-px -right-px ">
                                                                            <div class="relative">
                                                                                @if ($defenders->id !== session('player_id'))
                                                                                    <div id="is_favourite{{$defenders->id}}" class="">
                                                                                        <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                                            alt="">
                                                                                        <img id="favourite_image_defender_{{$defenders->id}}" class="absolute top-2 right-1.5 cursor-pointer"
                                                                                        onclick="isFavorite('{{ $defenders->id }}','{{ Session::get('player_id') }}','{{ $defenders->position_id }}','favourite_image_defender_{{$defenders->id}}')"
                                                                                            src="{{$defenders->is_favorite == 1 ? asset('assets/images/heart-icon.svg') : asset('assets/images/empty-heart.svg')}}" />
                                                                                    </div>
                                                                                @endif
                                                                                {{-- @else
                                                                                    @if ($defenders->id !== session('player_id'))
                                                                                        <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                                            alt="">
                                                                                        <img class="absolute top-2 right-1.5 cursor-pointer"
                                                                                            onclick="MakeFavorite('{{ $defenders->id }}','{{ Session::get('player_id') }}','{{ $defenders->position_id }}')"
                                                                                            src="{{ asset('assets/images/empty-heart.svg') }}" /> --}}
                                                                                        {{-- @else
                                                                                        <img
                                                                                            class="absolute top-2 right-1.5 cursor-pointer"
                                                                                            src="{{ asset('assets/images/empty-heart.svg') }}"/> --}}
                                                                                    {{-- @endif
                                                                                @endif --}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                                                            id="flagmodal-id">
                                                                            <div class="relative my-auto mx-2 md:mx-auto w-80">
                                                                                <!--content-->
                                                                                <div
                                                                                    class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                                                                    <!--header-->
                                                                                    <div
                                                                                        class="flex justify-end px-3 py-1 rounded-t">
                                                                                        <button
                                                                                            class="text-black float-right text-lg leading-none font-medium"
                                                                                            onclick="toggleModal('flagmodal-id')">
                                                                                            x
                                                                                        </button>
                                                                                    </div>
                                                                                    <!--body-->
                                                                                    <div class="relative px-3 md:px-5 pb-6">
                                                                                        <h3
                                                                                            class="text-xl text-light-green text-center font-semibold uppercase">
                                                                                            report
                                                                                        </h3>
                                                                                        <div
                                                                                            class="flex flex-col space-y-2 justify-center my-3">
                                                                                            <button
                                                                                                class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                                spam
                                                                                            </button>
                                                                                            <button
                                                                                                class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                                Hate
                                                                                                speech or
                                                                                                uncivil
                                                                                            </button>
                                                                                            <button
                                                                                                class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                                sexual
                                                                                                activity
                                                                                            </button>
                                                                                            <button
                                                                                                class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                                scam
                                                                                                or fraud
                                                                                            </button>
                                                                                            <button
                                                                                                class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                                bullying
                                                                                                or harrasment
                                                                                            </button>
                                                                                            <button
                                                                                                class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                                violence
                                                                                                or threats
                                                                                            </button>
                                                                                            <button
                                                                                                class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                                racism,
                                                                                                discrimination or
                                                                                                insults
                                                                                            </button>
                                                                                        </div>
                                                                                        <button
                                                                                            class="w-full bg-black text-white text-sm font-medium uppercase py-2 px-4 rounded-full"
                                                                                            type="button">
                                                                                            report
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="hidden opacity-25 fixed inset-0 z-40 bg-black"
                                                                            id="flagmodal-id-backdrop"></div>
                                                                    </div>
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                                {{-- {{$defender->links()}} --}}
                                                {{-- <ul class=" absolute right-5 bottom-3  md:bottom-5 flex space-x-2 justify-end">
                                                    <li class="text-black text-sm font-semibold bg-white drop-shadow-xl py-2 px-3 rounded"><a href="#">1</a></li>
                                                    <li class="text-black text-sm font-semibold bg-white drop-shadow-xl py-2 px-3 rounded"><a href="#">2</a></li>
                                                    <li class="text-black text-sm font-semibold bg-white drop-shadow-xl py-2 px-3 rounded"><a href="#">3</a></li>
                                                </ul> --}}
                                            </div>
                                            <div class="hidden" id="sixth">
                                                <div class="bg-white rounded-3xl py-5">
                                                    <div class="px-3 py-3 xl:px-12 md:py-3">
                                                        <div id="defender_map" style="width: 100%; height: 400px;"></div>
                                                        {{-- <div id="infowindow-content">
                                                            <img src="" width="16" height="16" id="place-icon">
                                                            <span id="place-name" class="title"></span><br>
                                                            <span id="place-address"></span>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden" id="tab-midfielder">
                                        <div class="px-2 pt-2 pb-6">
                                            <div class="flex space-x-2 justify-end">
                                                <ul id="tabs-map-grid-fielder" class="flex space-x-0.5">
                                                    <li
                                                        class="px-4 py-1 text-sm font-bold bg-white border border-gray-200 rounded-md focus:z-10">
                                                        <a id="fielder-tab" href="#seventh">Grid</a>
                                                    </li>
                                                    <li
                                                        class="px-4 py-1 text-sm font-bold bg-white border border-gray-200 rounded-md focus:z-10">
                                                        <a href="#eight">Map</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="tab-contentfielder">
                                            <div class="bg-white rounded-3xl pt-5 pb-10 relative" id="seventh">
                                                <div class="px-3 py-3 xl:px-12 md:py-3">
                                                    <div
                                                        class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-2 xl:gap-4 2xl:gap-8 xl:justify-items-center">
                                                        @foreach ($mid_fielder as $mid_fielders)
                                                            @if ($mid_fielders->position['name'] == 'Midfielder')
                                                            @if ($mid_fielders->membership_type == 'golden')
                                                                <div class="rounded-3xl h-[13.813rem] xl:w-80 relative px-4 py-9 bg-cover bg-center"
                                                                    style="background-image: url('{{ asset('assets/images/small-gold.png') }}');">
                                                                    <div class="flex justify-between">
                                                                        <div>
                                                                            <a href="{{ Route('player.golden.player', $mid_fielders->id) }}"
                                                                                class="flex items-center">
                                                                                <img src="{{ URL::asset($mid_fielders->profile_image) }}"
                                                                                    class="object-cover rounded-full border-2 border-black mr-3 h-14 w-14"
                                                                                    alt="Logo" />
                                                                                <span class="self-center">
                                                                                    <h1
                                                                                        class="text-black text-sm font-semibold">
                                                                                        @if ($card_detail->first_name == 1)
                                                                                            {{ $mid_fielders->first_name }}
                                                                                        @endif
                                                                                        @if ($card_detail->sur_name == 1)
                                                                                            {{ $mid_fielders->sur_name }}
                                                                                        @endif
                                                                                    </h1>
                                                                                    <h2
                                                                                        class="text-gray-heading font-medium text-sm">
                                                                                        <span>@</span>{{ $mid_fielders->player_user_name }}
                                                                                    </h2>
                                                                                    @if ($card_detail->rating == 1)
                                                                                        <div class="flex items-center">
                                                                                            <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <h1
                                                                                                class="text-xs text-light-green">
                                                                                                &nbsp 5.0</h1>
                                                                                        </div>
                                                                                    @endif
                                                                                </span>
                                                                            </a>
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

                                                                                    <h2 class="text-black text-sm">
                                                                                        {{ get_age_from_birth_date($mid_fielders->date_of_birth) }}

                                                                                </h2>
                                                                                @endif
                                                                            </div>
                                                                            <div class="text-center">
                                                                                @if ($card_detail->played == 1)
                                                                                <h1 class="text-light-green text-sm">
                                                                                    Played</h1>

                                                                                        <h2 class="text-black text-sm">2
                                                                                        </h2>
                                                                                    @endif
                                                                            </div>
                                                                            <div class="text-center">
                                                                                @if ($card_detail->missed == 1)
                                                                                <h1 class="text-light-green text-sm">
                                                                                    Missed</h1>

                                                                                        <h2 class="text-black text-sm">2
                                                                                        </h2>
                                                                                    @endif
                                                                            </div>
                                                                            <div class="text-center">
                                                                                @if ($card_detail->position == 1)
                                                                                <h1 class="text-light-green text-sm">
                                                                                    Position</h1>

                                                                                        <h2 class="text-black text-sm">
                                                                                            {{ $mid_fielders->position['name'] }}
                                                                                        </h2>
                                                                                    @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="text-heading-white">
                                                                    <div class="mt-2 flex justify-between">
                                                                        <div class="flex items-center max-w-10">
                                                                            <img src="{{ asset('assets/images/black-location.svg') }}"
                                                                                class="mr-1" alt="Logo" />
                                                                                @if ($card_detail->location == 1)
                                                                                    <h1 class="text-black text-xs truncate">
                                                                                        {{ $mid_fielders->current_city }} , {{ $mid_fielders->current_state }} , {{ $mid_fielders->current_country }}
                                                                                    </h1>
                                                                                @endif
                                                                        </div>
                                                                        @if ($mid_fielders->id !== session('player_id'))
                                                                            <a
                                                                                href="{{ Route('player.send.invitation') }}">
                                                                                <h1 class="text-white text-xs">Send
                                                                                    Invitation >></h1>
                                                                            </a>
                                                                        @endif
                                                                    </div>
                                                                    @if ($mid_fielders->id !== session('player_id'))
                                                                        <div class="absolute bottom-2.5 right-2.5">
                                                                            <img src="{{ asset('assets/images/empty-flag.svg') }}"
                                                                                alt="">
                                                                        </div>
                                                                    @endif
                                                                    <div class="absolute -top-px -right-px ">
                                                                        <div class="relative">
                                                                            @if ($mid_fielders->id !== session('player_id'))
                                                                                <div id="is_favourite{{$mid_fielders->id}}" class="">
                                                                                    <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                                        alt="">
                                                                                    <img id="favourite_image_mid_{{$mid_fielders->id}}" class="absolute top-2 right-1.5 cursor-pointer"
                                                                                    onclick="isFavorite('{{ $mid_fielders->id }}','{{ Session::get('player_id') }}','{{ $mid_fielders->position_id }}','favourite_image_mid_{{$mid_fielders->id}}')"
                                                                                        src="{{$mid_fielders->is_favorite == 1 ? asset('assets/images/heart-icon.svg') : asset('assets/images/empty-heart.svg')}}" />
                                                                                </div>
                                                                            @endif
                                                                            {{-- @else
                                                                                @if ($mid_fielders->id !== session('player_id'))
                                                                                    <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                                        alt="">
                                                                                    <img class="absolute top-2 right-1.5 cursor-pointer"
                                                                                        onclick="MakeFavorite('{{ $mid_fielders->id }}','{{ Session::get('player_id') }}','{{ $mid_fielders->position_id }}')"
                                                                                        src="{{ asset('assets/images/empty-heart.svg') }}" /> --}}
                                                                                    {{-- @else
                                                                                    <img
                                                                                        class="absolute top-2 right-1.5 cursor-pointer"
                                                                                        src="{{ asset('assets/images/empty-heart.svg') }}"/> --}}
                                                                                {{-- @endif
                                                                            @endif --}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <div class="rounded-3xl h-[13.813rem] xl:w-80 relative px-4 py-9 bg-cover bg-center"
                                                                    style="background-image: url('{{ asset('assets/images/small-default.png') }}');">
                                                                    <div class="flex justify-between">
                                                                        <div>
                                                                            <a href="{{ Route('player.default.player', $mid_fielders->id) }}"
                                                                                class="flex items-center">
                                                                                <img src="{{ URL::asset($mid_fielders->profile_image) }}"
                                                                                    class="rounded-full border-2 border-white mr-2 h-14 w-14"
                                                                                    alt="Logo" />
                                                                                <span class="self-center">
                                                                                    <h1
                                                                                        class="text-white text-sm font-semibold">
                                                                                        @if ($card_detail->first_name == 1)
                                                                                            {{ $mid_fielders->first_name }}
                                                                                        @endif
                                                                                        @if ($card_detail->sur_name == 1)
                                                                                            {{ $mid_fielders->sur_name }}
                                                                                        @endif
                                                                                    </h1>
                                                                                    <h2
                                                                                        class="text-heading-white text-opacity-25 font-medium text-sm">
                                                                                            <span>@</span>{{ $mid_fielders->player_user_name }}
                                                                                    </h2>
                                                                                    @if ($card_detail->rating == 1)
                                                                                        <div class="flex items-center">
                                                                                            <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <h1
                                                                                                class="text-xs text-rating-yellow">
                                                                                                &nbsp 5.0</h1>
                                                                                        </div>
                                                                                    @endif
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <div>
                                                                            @if ($card_detail->price == 1)
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

                                                                                        <h2 class="text-white text-sm">
                                                                                            {{ get_age_from_birth_date($mid_fielders->date_of_birth) }}
                                                                                        </h2>
                                                                                    @endif
                                                                            </div>
                                                                            <div class="text-center">
                                                                                @if ($card_detail->played == 1)
                                                                                <h1
                                                                                    class="text-heading-white text-opacity-25 text-sm">
                                                                                    Played
                                                                                </h1>

                                                                                    <h2 class="text-white text-sm">2
                                                                                    </h2>
                                                                                @endif
                                                                            </div>
                                                                            <div class="text-center">
                                                                                @if ($card_detail->missed == 1)
                                                                                <h1
                                                                                    class="text-heading-white text-opacity-25 text-sm">
                                                                                    Missed
                                                                                </h1>

                                                                                    <h2 class="text-white text-sm">2
                                                                                    </h2>
                                                                                @endif
                                                                            </div>
                                                                            <div class="text-center">
                                                                                @if ($card_detail->position == 1)
                                                                                <h1
                                                                                    class="text-heading-white text-opacity-25 text-sm">
                                                                                    Position
                                                                                </h1>

                                                                                    <h2 class="text-white text-sm">
                                                                                        {{ $mid_fielders->position['name'] }}
                                                                                    </h2>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="mt-2 flex justify-between">
                                                                        <div class="flex items-center max-w-10">
                                                                            <img src="{{ asset('assets/images/white-location.svg') }}"
                                                                                class="mr-1" alt="Logo" />
                                                                                @if ($card_detail->location == 1)
                                                                                    <h1 class="text-white text-xs truncate">
                                                                                        {{ $mid_fielders->current_city }} , {{ $mid_fielders->current_state }} , {{ $mid_fielders->current_country }}
                                                                                    </h1>
                                                                                @endif
                                                                        </div>
                                                                        @if ($mid_fielders->id !== session('player_id'))
                                                                            <a
                                                                                href="{{ Route('player.send.invitation') }}">
                                                                                <h1 class="text-white text-xs">Send
                                                                                    Invitation >></h1>
                                                                            </a>
                                                                        @endif
                                                                    </div>
                                                                    @if ($mid_fielders->id !== session('player_id'))
                                                                        <div class="absolute bottom-2.5 right-2.5">
                                                                            <img class="cursor-pointer"
                                                                                src="{{ asset('assets/images/empty-flag.svg') }}"
                                                                                onclick="toggleModal('flagmodal-id')">
                                                                        </div>
                                                                    @endif
                                                                    <div class="absolute -top-px -right-px ">
                                                                        <div class="relative">
                                                                            @if ($mid_fielders->id !== session('player_id'))
                                                                                <div id="is_favourite{{$mid_fielders->id}}" class="">
                                                                                    <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                                        alt="">
                                                                                    <img id="favourite_image_mid_{{$mid_fielders->id}}" class="absolute top-2 right-1.5 cursor-pointer"
                                                                                    onclick="isFavorite('{{ $mid_fielders->id }}','{{ Session::get('player_id') }}','{{ $mid_fielders->position_id }}','favourite_image_mid_{{$mid_fielders->id}}')"
                                                                                        src="{{$mid_fielders->is_favorite == 1 ? asset('assets/images/heart-icon.svg') : asset('assets/images/empty-heart.svg')}}" />
                                                                                </div>
                                                                            @endif
                                                                            {{-- @else
                                                                                @if ($mid_fielders->id !== session('player_id'))
                                                                                    <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                                        alt="">
                                                                                    <img class="absolute top-2 right-1.5 cursor-pointer"
                                                                                        onclick="MakeFavorite('{{ $mid_fielders->id }}','{{ Session::get('player_id') }}','{{ $mid_fielders->position_id }}')"
                                                                                        src="{{ asset('assets/images/empty-heart.svg') }}" /> --}}
                                                                                    {{-- @else
                                                                                    <img
                                                                                        class="absolute top-2 right-1.5 cursor-pointer"
                                                                                        src="{{ asset('assets/images/empty-heart.svg') }}"/> --}}
                                                                                {{-- @endif
                                                                            @endif --}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                                                        id="flagmodal-id">
                                                                        <div class="relative my-auto mx-2 md:mx-auto w-80">
                                                                            <!--content-->
                                                                            <div
                                                                                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                                                                <!--header-->
                                                                                <div
                                                                                    class="flex justify-end px-3 py-1 rounded-t">
                                                                                    <button
                                                                                        class="text-black float-right text-lg leading-none font-medium"
                                                                                        onclick="toggleModal('flagmodal-id')">
                                                                                        x
                                                                                    </button>
                                                                                </div>
                                                                                <!--body-->
                                                                                <div class="relative px-3 md:px-5 pb-6">
                                                                                    <h3
                                                                                        class="text-xl text-light-green text-center font-semibold uppercase">
                                                                                        report
                                                                                    </h3>
                                                                                    <div
                                                                                        class="flex flex-col space-y-2 justify-center my-3">
                                                                                        <button
                                                                                            class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                            spam
                                                                                        </button>
                                                                                        <button
                                                                                            class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                            Hate
                                                                                            speech or
                                                                                            uncivil
                                                                                        </button>
                                                                                        <button
                                                                                            class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                            sexual
                                                                                            activity
                                                                                        </button>
                                                                                        <button
                                                                                            class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                            scam
                                                                                            or fraud
                                                                                        </button>
                                                                                        <button
                                                                                            class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                            bullying
                                                                                            or harrasment
                                                                                        </button>
                                                                                        <button
                                                                                            class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                            violence
                                                                                            or threats
                                                                                        </button>
                                                                                        <button
                                                                                            class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                            racism,
                                                                                            discrimination or
                                                                                            insults
                                                                                        </button>
                                                                                    </div>
                                                                                    <button
                                                                                        class="w-full bg-black text-white text-sm font-medium uppercase py-2 px-4 rounded-full"
                                                                                        type="button">
                                                                                        report
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black"
                                                                        id="flagmodal-id-backdrop"></div>
                                                                </div>
                                                            @endif
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                                {{-- {{$mid_fielder->links()}} --}}
                                                {{-- <ul class=" absolute right-5 bottom-3  md:bottom-5 flex space-x-2 justify-end">
                                                    <li class="text-black text-sm font-semibold bg-white drop-shadow-xl py-2 px-3 rounded"><a href="#">1</a></li>
                                                    <li class="text-black text-sm font-semibold bg-white drop-shadow-xl py-2 px-3 rounded"><a href="#">2</a></li>
                                                    <li class="text-black text-sm font-semibold bg-white drop-shadow-xl py-2 px-3 rounded"><a href="#">3</a></li>
                                                </ul> --}}
                                            </div>
                                            <div class="hidden" id="eight">
                                                <div class="bg-white rounded-3xl py-5">
                                                    <div class="px-3 py-3 xl:px-12 md:py-3">
                                                        <div id="midfielder_map" style="width: 100%; height: 400px;"></div>
                                                        {{-- <div id="infowindow-content">
                                                            <img src="" width="16" height="16" id="place-icon">
                                                            <span id="place-name" class="title"></span><br>
                                                            <span id="place-address"></span>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden" id="tab-forward">
                                        <div class="px-2 pt-2 pb-6">
                                            <div class="flex space-x-2 justify-end">
                                                <ul id="tabs-map-grid-forward" class="flex space-x-0.5">
                                                    <li
                                                        class="px-4 py-1 text-sm font-bold bg-white border border-gray-200 rounded-md focus:z-10">
                                                        <a id="forward-tab" href="#nine">Grid</a>
                                                    </li>
                                                    <li
                                                        class="px-4 py-1 text-sm font-bold bg-white border border-gray-200 rounded-md focus:z-10">
                                                        <a href="#ten">Map</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="tab-contentforward">
                                            <div class="bg-white rounded-3xl py-5 pt-5 pb-10 relative" id="nine">
                                                <div class="px-3 py-3 xl:px-12 md:py-3">
                                                    <div
                                                        class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-2 xl:gap-4 2xl:gap-8 xl:justify-items-center">
                                                        @foreach ($forward as $forwards)
                                                            @if ($forwards->position['name'] == 'Forward')
                                                            @if ($forwards->membership_type == 'golden')
                                                                <div class="rounded-3xl h-[13.813rem] xl:w-80 relative px-4 py-9 bg-cover bg-center"
                                                                    style="background-image: url('{{ asset('assets/images/small-gold.png') }}');">
                                                                    <div class="flex justify-between">
                                                                        <div>
                                                                            <a href="{{ Route('player.golden.player', $forwards->id) }}"
                                                                                class="flex items-center">
                                                                                <img src="{{ URL::asset($forwards->profile_image) }}"
                                                                                    class="object-cover rounded-full border-2 border-black mr-3 h-14 w-14"
                                                                                    alt="Logo" />
                                                                                <span class="self-center">
                                                                                    <h1
                                                                                        class="text-black text-sm font-semibold">
                                                                                        @if ($card_detail->first_name == 1)
                                                                                            {{ $forwards->first_name }}
                                                                                        @endif
                                                                                        @if ($card_detail->sur_name == 1)
                                                                                            {{ $forwards->sur_name }}
                                                                                        @endif
                                                                                    </h1>
                                                                                    <h2
                                                                                        class="text-gray-heading font-medium text-sm">
                                                                                        <span>@</span>{{ $forwards->player_user_name }}
                                                                                    </h2>
                                                                                    @if ($card_detail->rating == 1)
                                                                                        <div class="flex items-center">
                                                                                            <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-light-green"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <h1
                                                                                                class="text-xs text-light-green">
                                                                                                &nbsp 5.0</h1>
                                                                                        </div>
                                                                                    @endif
                                                                                </span>
                                                                            </a>
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

                                                                                    <h2 class="text-black text-sm">
                                                                                        {{ get_age_from_birth_date($forwards->date_of_birth) }}

                                                                                </h2>
                                                                                @endif
                                                                            </div>
                                                                            <div class="text-center">
                                                                                @if ($card_detail->played == 1)
                                                                                <h1 class="text-light-green text-sm">
                                                                                    Played</h1>

                                                                                        <h2 class="text-black text-sm">2
                                                                                        </h2>
                                                                                    @endif
                                                                            </div>
                                                                            <div class="text-center">
                                                                                @if ($card_detail->missed == 1)
                                                                                <h1 class="text-light-green text-sm">
                                                                                    Missed</h1>

                                                                                        <h2 class="text-black text-sm">2
                                                                                        </h2>
                                                                                    @endif
                                                                            </div>
                                                                            <div class="text-center">
                                                                                @if ($card_detail->position == 1)
                                                                                <h1 class="text-light-green text-sm">
                                                                                    Position</h1>

                                                                                        <h2 class="text-black text-sm">
                                                                                            {{ $forwards->position['name'] }}
                                                                                        </h2>
                                                                                    @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="text-heading-white">
                                                                    <div class="mt-2 flex justify-between">
                                                                        <div class="flex items-center max-w-10">
                                                                            <img src="{{ asset('assets/images/black-location.svg') }}"
                                                                                class="mr-1" alt="Logo" />
                                                                                @if ($card_detail->location == 1)
                                                                                    <h1 class="text-black text-xs truncate">
                                                                                        {{ $forwards->current_city }} , {{ $forwards->current_state }} , {{ $forwards->current_country }}
                                                                                    </h1>
                                                                                @endif
                                                                        </div>
                                                                        @if ($forwards->id !== session('player_id'))
                                                                            <a
                                                                                href="{{ Route('player.send.invitation') }}">
                                                                                <h1 class="text-white text-xs">Send
                                                                                    Invitation >></h1>
                                                                            </a>
                                                                        @endif
                                                                    </div>
                                                                    @if ($forwards->id !== session('player_id'))
                                                                        <div class="absolute bottom-2.5 right-2.5">
                                                                            <img src="{{ asset('assets/images/empty-flag.svg') }}"
                                                                                alt="">
                                                                        </div>
                                                                    @endif
                                                                    <div class="absolute -top-px -right-px ">
                                                                        <div class="relative">
                                                                            @if ($forwards->id !== session('player_id'))
                                                                                <div id="is_favourite{{$forwards->id}}" class="">
                                                                                    <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                                        alt="">
                                                                                    <img id="favourite_image_forward_{{$forwards->id}}" class="absolute top-2 right-1.5 cursor-pointer"
                                                                                    onclick="isFavorite('{{ $forwards->id }}','{{ Session::get('player_id') }}','{{ $forwards->position_id }}','favourite_image_forward_{{$forwards->id}}')"
                                                                                        src="{{$forwards->is_favorite == 1 ? asset('assets/images/heart-icon.svg') : asset('assets/images/empty-heart.svg')}}" />
                                                                                </div>
                                                                            @endif
                                                                            {{-- @else
                                                                                @if ($forwards->id !== session('player_id'))
                                                                                    <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                                        alt="">
                                                                                    <img class="absolute top-2 right-1.5 cursor-pointer"
                                                                                        onclick="MakeFavorite('{{ $forwards->id }}','{{ Session::get('player_id') }}','{{ $forwards->position_id }}')"
                                                                                        src="{{ asset('assets/images/empty-heart.svg') }}" /> --}}
                                                                                    {{-- @else
                                                                                    <img
                                                                                        class="absolute top-2 right-1.5 cursor-pointer"
                                                                                        src="{{ asset('assets/images/empty-heart.svg') }}"/> --}}
                                                                                {{-- @endif
                                                                            @endif --}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <div class="rounded-3xl h-[13.813rem] xl:w-80 relative px-4 py-9 bg-cover bg-center"
                                                                    style="background-image: url('{{ asset('assets/images/small-default.png') }}');">
                                                                    <div class="flex justify-between">
                                                                        <div>
                                                                            <a href="{{ Route('player.default.player', $forwards->id) }}"
                                                                                class="flex items-center">
                                                                                <img src="{{ URL::asset($forwards->profile_image) }}"
                                                                                    class="rounded-full border-2 border-white mr-2 h-14 w-14"
                                                                                    alt="Logo" />
                                                                                <span class="self-center">
                                                                                    <h1
                                                                                        class="text-white text-sm font-semibold">
                                                                                        @if ($card_detail->first_name == 1)
                                                                                            {{ $forwards->first_name }}
                                                                                        @endif
                                                                                        @if ($card_detail->sur_name == 1)
                                                                                            {{ $forwards->sur_name }}
                                                                                        @endif
                                                                                    </h1>
                                                                                    <h2
                                                                                        class="text-heading-white text-opacity-25 font-medium text-sm">
                                                                                            <span>@</span>{{ $forwards->player_user_name }}
                                                                                    </h2>
                                                                                    @if ($card_detail->rating == 1)
                                                                                        <div class="flex items-center">
                                                                                            <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <h1
                                                                                                class="text-xs text-rating-yellow">
                                                                                                &nbsp 5.0</h1>
                                                                                        </div>
                                                                                    @endif
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <div>
                                                                            @if ($card_detail->price == 1)
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

                                                                                        <h2 class="text-white text-sm">
                                                                                            {{ get_age_from_birth_date($forwards->date_of_birth) }}
                                                                                        </h2>
                                                                                    @endif
                                                                            </div>
                                                                            <div class="text-center">
                                                                                @if ($card_detail->played == 1)
                                                                                <h1
                                                                                    class="text-heading-white text-opacity-25 text-sm">
                                                                                    Played
                                                                                </h1>

                                                                                    <h2 class="text-white text-sm">2
                                                                                    </h2>
                                                                                @endif
                                                                            </div>
                                                                            <div class="text-center">
                                                                                @if ($card_detail->missed == 1)
                                                                                <h1
                                                                                    class="text-heading-white text-opacity-25 text-sm">
                                                                                    Missed
                                                                                </h1>

                                                                                    <h2 class="text-white text-sm">2
                                                                                    </h2>
                                                                                @endif
                                                                            </div>
                                                                            <div class="text-center">
                                                                                @if ($card_detail->position == 1)
                                                                                <h1
                                                                                    class="text-heading-white text-opacity-25 text-sm">
                                                                                    Position
                                                                                </h1>

                                                                                    <h2 class="text-white text-sm">
                                                                                        {{ $forwards->position['name'] }}
                                                                                    </h2>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="mt-2 flex justify-between">
                                                                        <div class="flex items-center max-w-10">
                                                                            <img src="{{ asset('assets/images/white-location.svg') }}"
                                                                                class="mr-1" alt="Logo" />
                                                                                @if ($card_detail->location == 1)
                                                                                    <h1 class="text-white text-xs truncate">
                                                                                        {{ $forwards->current_city }} , {{ $forwards->current_state }} , {{ $forwards->current_country }}
                                                                                    </h1>
                                                                                @endif
                                                                        </div>
                                                                        @if ($forwards->id !== session('player_id'))
                                                                            <a
                                                                                href="{{ Route('player.send.invitation') }}">
                                                                                <h1 class="text-white text-xs">Send
                                                                                    Invitation >></h1>
                                                                            </a>
                                                                        @endif
                                                                    </div>
                                                                    @if ($forwards->id !== session('player_id'))
                                                                        <div class="absolute bottom-2.5 right-2.5">
                                                                            <img class="cursor-pointer"
                                                                                src="{{ asset('assets/images/empty-flag.svg') }}"
                                                                                onclick="toggleModal('flagmodal-id')">
                                                                        </div>
                                                                    @endif
                                                                    <div class="absolute -top-px -right-px ">
                                                                        <div class="relative">
                                                                            @if ($forwards->id !== session('player_id'))
                                                                                <div id="is_favourite{{$forwards->id}}" class="">
                                                                                    <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                                        alt="">
                                                                                    <img id="favourite_image_forward_{{$forwards->id}}" class="absolute top-2 right-1.5 cursor-pointer"
                                                                                    onclick="isFavorite('{{ $forwards->id }}','{{ Session::get('player_id') }}','{{ $forwards->position_id }}','favourite_image_forward_{{$forwards->id}}')"
                                                                                        src="{{$forwards->is_favorite == 1 ? asset('assets/images/heart-icon.svg') : asset('assets/images/empty-heart.svg')}}" />
                                                                                </div>
                                                                            @endif
                                                                            {{-- @else
                                                                                @if ($forwards->id !== session('player_id'))
                                                                                    <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                                        alt="">
                                                                                    <img class="absolute top-2 right-1.5 cursor-pointer"
                                                                                        onclick="MakeFavorite('{{ $forwards->id }}','{{ Session::get('player_id') }}','{{ $forwards->position_id }}')"
                                                                                        src="{{ asset('assets/images/empty-heart.svg') }}" /> --}}
                                                                                    {{-- @else
                                                                                    <img
                                                                                        class="absolute top-2 right-1.5 cursor-pointer"
                                                                                        src="{{ asset('assets/images/empty-heart.svg') }}"/> --}}
                                                                                {{-- @endif
                                                                            @endif --}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                                                        id="flagmodal-id">
                                                                        <div class="relative my-auto mx-2 md:mx-auto w-80">
                                                                            <!--content-->
                                                                            <div
                                                                                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                                                                <!--header-->
                                                                                <div
                                                                                    class="flex justify-end px-3 py-1 rounded-t">
                                                                                    <button
                                                                                        class="text-black float-right text-lg leading-none font-medium"
                                                                                        onclick="toggleModal('flagmodal-id')">
                                                                                        x
                                                                                    </button>
                                                                                </div>
                                                                                <!--body-->
                                                                                <div class="relative px-3 md:px-5 pb-6">
                                                                                    <h3
                                                                                        class="text-xl text-light-green text-center font-semibold uppercase">
                                                                                        report
                                                                                    </h3>
                                                                                    <div
                                                                                        class="flex flex-col space-y-2 justify-center my-3">
                                                                                        <button
                                                                                            class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                            spam
                                                                                        </button>
                                                                                        <button
                                                                                            class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                            Hate
                                                                                            speech or
                                                                                            uncivil
                                                                                        </button>
                                                                                        <button
                                                                                            class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                            sexual
                                                                                            activity
                                                                                        </button>
                                                                                        <button
                                                                                            class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                            scam
                                                                                            or fraud
                                                                                        </button>
                                                                                        <button
                                                                                            class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                            bullying
                                                                                            or harrasment
                                                                                        </button>
                                                                                        <button
                                                                                            class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                            violence
                                                                                            or threats
                                                                                        </button>
                                                                                        <button
                                                                                            class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                                                                            racism,
                                                                                            discrimination or
                                                                                            insults
                                                                                        </button>
                                                                                    </div>
                                                                                    <button
                                                                                        class="w-full bg-black text-white text-sm font-medium uppercase py-2 px-4 rounded-full"
                                                                                        type="button">
                                                                                        report
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black"
                                                                        id="flagmodal-id-backdrop"></div>
                                                                </div>
                                                            @endif
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>

                                                {{-- {{$forward->links()}} --}}
                                                {{-- <ul class=" absolute right-5 bottom-3  md:bottom-5 flex space-x-2 justify-end">
                                                    <li class="text-black text-sm font-semibold bg-white drop-shadow-xl py-2 px-3 rounded"><a href="#">1</a></li>
                                                    <li class="text-black text-sm font-semibold bg-white drop-shadow-xl py-2 px-3 rounded"><a href="#">2</a></li>
                                                    <li class="text-black text-sm font-semibold bg-white drop-shadow-xl py-2 px-3 rounded"><a href="#">3</a></li>
                                                </ul> --}}
                                            </div>
                                            <div class="hidden" id="ten">
                                                <div class="bg-white rounded-3xl py-5">
                                                    <div class="px-3 py-3 xl:px-12 md:py-3">
                                                        <div id="forward_map" style="width: 100%; height: 400px;"></div>
                                                        {{-- <div id="infowindow-content">
                                                            <img src="" width="16" height="16" id="place-icon">
                                                            <span id="place-name" class="title"></span><br>
                                                            <span id="place-address"></span>
                                                        </div> --}}
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
        </div>
    </div>
    {{-- bottom-5 right-3 lg:inset-y-2/3 lg:right-2 2xl:right-[6.5rem] --}}
    <div class="fixed bottom-20 right-5 2xl:bottom-[6.75rem] 2xl:right-[2.5rem]">
        <button class="bg-black text-white p-5 rounded-full ease-linear transition-all duration-150 z-50" type="button"
            onclick="toggleModal('modal-id')">
            <img class="w-5 h-5" src="../assets/images/filter-icon.svg" alt="">
        </button>
    </div>
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
        id="modal-id">
        <div class="relative my-auto mx-auto w-72">
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
                        <h1 class="text-white text-xs font-bold uppercase">Location</h1>
                        <div class="mt-2">
                            <div class="relative items-center">
                                <select
                                    class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5">
                                    <option selected>Distance</option>
                                    <option value="US">Faraway</option>
                                    <option value="CA">Nearby</option>
                                </select>
                                <span class="absolute inset-y-4 right-3.5">
                                    <img src="../assets/images/Polygon 9.svg" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 ">
                        <h1 class="text-white text-xs font-bold uppercase">search</h1>
                        <div class="mt-2">
                            <input type="text"
                                class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5 placeholder-border-gray"
                                placeholder="Search player by username">
                        </div>
                    </div>
                    <div class="pt-2 ">
                        <h1 class="text-white text-xs font-bold uppercase">position</h1>
                        <div class="mt-2">
                            <div class="relative items-center">
                                <select
                                    class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5">
                                    <option selected>All positions</option>
                                    <option value="US">Goalkeeper</option>
                                    <option value="CA">Defender</option>
                                    <option value="CA">Midfielder</option>
                                    <option value="CA">Forward</option>
                                </select>
                                <span class="absolute inset-y-4 right-3.5">
                                    <img src="../assets/images/Polygon 9.svg" alt="">
                                </span>
                            </div>
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
    <div class="hidden opacity-70 fixed inset-0 z-40 bg-modal-black" id="modal-id-backdrop"></div>

    <script src="{{ asset('assets/custom/script/custom.js') }}"></script>
    <script src="{{ asset('assets/custom/script/map_grid.js') }}"></script>
    <script src="{{ asset('assets/custom/script/custom_range.js') }}"></script>
    <script src="{{ asset('assets/custom/script/custom_age.js') }}"></script>
    <script src="{{ asset('assets/custom/script/custom_price.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_API_KEY') }}&callback=initMap" async
        defer></script>
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
                aElements[i].classList.add("bg-slate-50");
                tabContents[i].classList.add("hidden");
                tabContents[i].classList.remove("block");
            }
            element.classList.remove("text-border-gray");
            element.classList.remove("bg-slate-50");
            element.classList.add("text-black");
            element.classList.add("bg-white");
            document.getElementById(tabID).classList.remove("hidden");
            document.getElementById(tabID).classList.add("block");
        }

        function initMap() {
            var currWindow = false;
            let currentLatitude = 0;
            let currentLongitude = 0;
            if ("geolocation" in navigator) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    currentLatitude = position.coords.latitude;
                    currentLongitude = position.coords.longitude;
                    var google_map_position = new google.maps.LatLng(currentLatitude, currentLongitude);
                    var google_maps_geocoder = new google.maps.Geocoder();
                    google_maps_geocoder.geocode({
                            'latLng': google_map_position
                        },
                        function(results, status) {
                            if (results[0]) {
                                var city = "";
                                var state = "";
                                var country = "";
                                var zipcode = "";
                                var address = "";

                                var address_components = results[0].address_components;
                                address = results[0]['formatted_address'];
                                for (var i = 0; i < address_components.length; i++) {
                                    if (address_components[i].types[0] === "administrative_area_level_1" &&
                                        address_components[i].types[1] === "political") {
                                        state = address_components[i].long_name;
                                    }
                                    if (address_components[i].types[0] === "locality" && address_components[i]
                                        .types[1] === "political") {
                                        city = address_components[i].long_name;
                                    }else if(address_components[i].types[0] === "postal_town"){
                                        city = address_components[i].long_name;
                                    }

                                    if (address_components[i].types[0] === "postal_code" && zipcode == "") {
                                        zipcode = address_components[i].long_name;

                                    }

                                    if (address_components[i].types[0] === "country") {
                                        country = address_components[i].long_name;

                                    }

                                    if (address_components[i].types[0] === "address") {
                                        address = address_components[i].long_name;

                                    }
                                }
                                console.log(address_components)
                                $.ajax({

                                    headers: {

                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                                    },

                                    url: "{{ URL::to('/player/location') }}",

                                    data: {
                                        city: city,
                                        state: state,
                                        country: country,
                                        zipcode: zipcode,
                                        address: address,
                                        latitude: currentLatitude,
                                        longitude: currentLongitude,
                                    },

                                    method: 'POST',

                                    success: function(response) {
                                        console.log(response)
                                    },

                                });
                            } else {
                                window.alert('No results found');
                            }
                        }
                    );
                });
            }

            //start pinpoint code
            const icon = "{{URL::asset('assets/images/purple_pinpoint.png')}}";
            const my_icon = "{{URL::asset('assets/images/my_pinpoint.png')}}";
            var players = @json($player);
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: true,
            });
            myLocationOnMap(currentLatitude,currentLongitude,map);
            var infowindow = new google.maps.InfoWindow();

            var marker, i;
            var bounds = new google.maps.LatLngBounds();
            players.forEach((element, index) => {
                if(element['currrent_latitude'] != 0 && element['current_longitude'] != 0){
                    player_age = calculateAge(element['age']);
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(element['currrent_latitude'], element['current_longitude']),
                        map: map,
                        icon: icon,

                    });

                    bounds.extend(marker.getPosition());

                    google.maps.event.addListener(marker, 'click', (function (marker, i) {
                        return function () {
                            if(infowindow){
                            infowindow.close();
                        }
                            let contentString = infoWindowContent(element);

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


            //start pinpoint code goalkeeper

            var goalkeeper_map = new google.maps.Map(document.getElementById('goalkeeper_map'), {
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: true,
            });
            myLocationOnMap(currentLatitude,currentLongitude,goalkeeper_map);
            var goalkeeper_marker, goalkeeper_i;
            var goalkeeper_bounds = new google.maps.LatLngBounds();
            players.forEach((element, index) => {
                if(element['currrent_latitude'] != 0 && element['current_longitude'] != 0){
                    player_age = calculateAge(element['age']);
                    if(element['position']['name'] == "Goalkeeper"){
                        goalkeeper_marker = new google.maps.Marker({
                        position: new google.maps.LatLng(element['currrent_latitude'], element['current_longitude']),
                        map: goalkeeper_map,
                        icon: icon
                    });
                    goalkeeper_bounds.extend(goalkeeper_marker.getPosition());

                    google.maps.event.addListener(goalkeeper_marker, 'click', (function (goalkeeper_marker, goalkeeper_i) {
                        return function () {
                            if(infowindow){
                            infowindow.close();
                        }
                            let contentString = infoWindowContent(element);
                            infowindow = new google.maps.InfoWindow({
                                content: contentString,
                                ariaLabel: "Uluru",
                            });
                            infowindow.open(goalkeeper_map, goalkeeper_marker);
                        }
                    })(goalkeeper_marker, goalkeeper_i));
                    }
                }
            });
            goalkeeper_map.fitBounds(goalkeeper_bounds);



            //start pinpoint code defender
            var defender_map = new google.maps.Map(document.getElementById('defender_map'), {
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: true,
            });
            myLocationOnMap(currentLatitude,currentLongitude,defender_map);
            var defender_marker, defender_i;
            var defender_bounds = new google.maps.LatLngBounds();
            players.forEach((element, index) => {
                if(element['currrent_latitude'] != 0 && element['current_longitude'] != 0){
                    player_age = calculateAge(element['age']);
                    if(element['position']['name'] == "Defender"){
                        defender_marker = new google.maps.Marker({
                        position: new google.maps.LatLng(element['currrent_latitude'], element['current_longitude']),
                        map: defender_map,
                        icon: icon
                    });
                    defender_bounds.extend(defender_marker.getPosition());
                    google.maps.event.addListener(defender_marker, 'click', (function (defender_marker, defender_i) {
                        return function () {
                            if(infowindow){
                            infowindow.close();
                        }
                            let contentString = infoWindowContent(element);
                            infowindow = new google.maps.InfoWindow({
                                content: contentString,
                                ariaLabel: "Uluru",
                            });
                            infowindow.open(defender_map, defender_marker);
                        }
                    })(defender_marker, defender_i));
                    }
                }
            });
            defender_map.fitBounds(defender_bounds);


            //start pinpoint code midfielder

            var midfielder_map = new google.maps.Map(document.getElementById('midfielder_map'), {
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: true,
            });
            myLocationOnMap(currentLatitude,currentLongitude,midfielder_map);
            var midfielder_marker, midfielder_i;
            var midfielder_bounds = new google.maps.LatLngBounds();
            players.forEach((element, index) => {
                if(element['currrent_latitude'] != 0 && element['current_longitude'] != 0){
                    player_age = calculateAge(element['age']);
                    if(element['position']['name'] == "Midfielder"){
                        midfielder_marker = new google.maps.Marker({
                        position: new google.maps.LatLng(element['currrent_latitude'], element['current_longitude']),
                        map: midfielder_map,
                        icon: icon
                    });
                    midfielder_bounds.extend(midfielder_marker.getPosition());

                    google.maps.event.addListener(midfielder_marker, 'click', (function (midfielder_marker, midfielder_i) {
                        return function () {
                            if(infowindow){
                            infowindow.close();
                        }
                            let contentString = infoWindowContent(element);
                            infowindow = new google.maps.InfoWindow({
                                content: contentString,
                                ariaLabel: "Uluru",
                            });
                            infowindow.open(midfielder_map, midfielder_marker);
                        }
                    })(midfielder_marker, midfielder_i));

                    }
                }
            });
            midfielder_map.fitBounds(midfielder_bounds);


            //start pinpoint code forward

            var forward_map = new google.maps.Map(document.getElementById('forward_map'), {
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: true,
            });
            myLocationOnMap(currentLatitude,currentLongitude,forward_map);
            var forward_marker, forward_i;
            var forward_bounds = new google.maps.LatLngBounds();
            players.forEach((element, index) => {
                if(element['currrent_latitude'] != 0 && element['current_longitude'] != 0){
                    player_age = calculateAge(element['age']);
                    if(element['position']['name'] == "Forward"){
                        forward_marker = new google.maps.Marker({
                        position: new google.maps.LatLng(element['currrent_latitude'], element['current_longitude']),
                        map: forward_map,
                        icon: icon
                    });
                    forward_bounds.extend(forward_marker.getPosition());
                    google.maps.event.addListener(forward_marker, 'click', (function (forward_marker, forward_i) {
                        return function () {
                            if(infowindow){
                            infowindow.close();
                        }
                            let contentString = infoWindowContent(element);
                            infowindow = new google.maps.InfoWindow({
                                content: contentString,
                                ariaLabel: "Uluru",
                            });
                            infowindow.open(forward_map, forward_marker);
                        }
                    })(forward_marker, forward_i));
                    }
                }
            });
            forward_map.fitBounds(forward_bounds);
        }

        function infoWindowContent(element){
            let contentStringCreation;
            if (element['membership_type'] === 'golden') {
                contentStringCreation =
                    '<div class="h-[13.813rem] xl:w-80 rounded-3xl px-4 py-9 bg-cover bg-center" style="background-image: url({{URL::asset("assets/images/small-gold.png")}})">' +
                    '<div class="flex justify-between">' +
                    '<a href="{{ url('player/golden/profile') }}/' + element['id'] + '">' + '<div class="flex items-center">' +
                    '<img src="{{URL::asset('')}}' + element["profile_image"] + '" class="object-cover rounded-full border-2 border-black mr-3 h-14 w-14" alt="Logo"/>' +
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
                    '</div>' + '</a>' +
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
                    '<h1 class="text-black text-xs truncate">' + element['current_city'] + ',' + element['current_state'] + '</h1>' +
                    '@endif' +
                    '</div>' +
                    '</div>' +
                    '</div>';
            }
            else {
                contentStringCreation =
                    '<div class="h-[13.813rem] xl:w-80 rounded-3xl px-4 py-9 bg-cover bg-center" style="background-image: url({{URL::asset("assets/images/small-default.png")}})">' +
                    '<div class="flex justify-between"><div>' +
                    '<a href="{{ url('player/default/profile') }}/' + element['id'] + '">' + '<div class="flex items-center">' +
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
                    '</div>' + '</a>' +
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
                    '<h1 class="text-white text-xs truncate">' + element['current_address'] + ',' + element['current_state'] + ',' + element['current_country'] + '</h1>' +
                    '@endif' +
                    '</div>' +
                    '</div>' +
                    '</div>';
            }

            return contentStringCreation;
        }

        function myLocationOnMap(latitude = 0, longitude = 0, map) {
            if(latitude !== 0 && longitude !== 0){
                new google.maps.Marker({
                    position: new google.maps.LatLng(latitude, longitude),
                    map: map,
                    icon: my_icon
                });
            }

        }
    </script>

    <script>

        function isFavorite(id, user_id, player_position_id, image_id) {
            var image_path = document.getElementById(image_id).src;
            var index = image_path.lastIndexOf("/") + 1;
            var filename = image_path.substr(index);
            if(filename == 'empty-heart.svg'){
                is_favourite = 1;
            }else{
                is_favourite = 0;
            }
            $.ajax({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                },

                url: "{{ URL::to('/player/favorite') }}",

                data: {

                    player_id: id,

                    user_id: user_id,

                    player_position_id: player_position_id
                },

                method: 'POST',

                success: function(response) {
                    if (is_favourite) {
                        $("#"+image_id).attr('src',"{{ asset('assets/images/heart-icon.svg') }}");
                    }else{
                        $("#"+image_id).attr('src',"{{ asset('assets/images/empty-heart.svg') }}");

                    }
                },

            });
        }
    </script>
<script>
    window.onload=function(){
      $('.slider').slick({
      autoplay:true,
      autoplaySpeed:1500,
      arrows:true,
      centerMode:true,
      slidesToShow:3,
      slidesToScroll:2
      });
    };
    </script>
@endsection
