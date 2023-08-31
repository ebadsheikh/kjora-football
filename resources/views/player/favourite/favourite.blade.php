@extends('player.layouts.master')
@section('content')
    <div class="p-4 md:pt-10 md:px-16 2xl:px-52">
        <div class="grid md:grid-cols-2 px-2 md:items-center">
            <div class="p-3">
                <h1 class="uppercase text-white text-5xl font-bold tracking-wide">Favourite</h1>
            </div>
        </div>
        <div class="py-6">
            <div class="pt-2 pb-6">
                <div class="bg-white rounded-3xl pt-5 pb-10 relative">
                    <div class="px-3 py-3 xl:px-12 md:py-3">
                        @if (count($favorite) == 0)
                            <p class="flex justify-center mx-auto my-52">You don't have any favourites yet</p>
                            @else
                            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 xl:justify-items-center">
                                @foreach ($favorite as $players)
                                    @if ($players->user_id == session('player_id'))
                                        @if ($players->membership_type == 'golden')
                                            <div class="rounded-3xl h-[13.813rem] xl:w-80 relative px-4 py-9 bg-cover bg-center"
                                                style="background-image: url('{{ asset('assets/images/small-gold.png') }}');">
                                                <div class="flex justify-between">
                                                    <div>
                                                        <a href="{{ Route('player.golden.player', $players->id) }}"
                                                            class="flex items-center">
                                                            <img src="{{ URL::asset($players->profile_image) }}"
                                                                class="rounded-full border-2 border-black mr-3 h-14 w-14"
                                                                alt="Logo" />
                                                            <span class="self-center">
                                                                <h1 class="text-black text-sm font-semibold">
                                                                    @if ($card_detail->first_name == 1)
                                                                        {{ $players->first_name }}
                                                                    @endif
                                                                    @if ($card_detail->sur_name == 1)
                                                                        {{ $players->sur_name }}
                                                                    @endif
                                                                </h1>
                                                                <h2 class="text-gray-heading font-medium text-sm">
                                                                    <span>@</span>{{ $players->player_user_name }}
                                                                </h2>
                                                                @if ($card_detail->rating == 1)
                                                                    <div class="flex items-center">
                                                                        <svg class="w-3.5 h-3.5 text-light-green"
                                                                            fill="currentColor" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                            </path>
                                                                        </svg>
                                                                        <svg class="w-3.5 h-3.5 text-light-green"
                                                                            fill="currentColor" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                            </path>
                                                                        </svg>
                                                                        <svg class="w-3.5 h-3.5 text-light-green"
                                                                            fill="currentColor" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                            </path>
                                                                        </svg>
                                                                        <svg class="w-3.5 h-3.5 text-light-green"
                                                                            fill="currentColor" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                            </path>
                                                                        </svg>
                                                                        <svg class="w-3.5 h-3.5 text-light-green"
                                                                            fill="currentColor" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                            </path>
                                                                        </svg>
                                                                        <h1 class="text-xs text-light-green">
                                                                            &nbsp 5.0</h1>
                                                                    </div>
                                                                @endif
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div>
                                                        @if ($card_detail->price == 1)
                                                            <small class="text-black font-semibold">$200</small>
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
                                                                    {{ $players->name }}
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
                                                                {{ $players->current_address }}
                                                            </h1>
                                                        @endif
                                                    </div>
                                                    @if ($players->id !== session('player_id'))
                                                        <a href="{{ Route('player.send.invitation') }}">
                                                            <h1 class="text-white text-xs">Send
                                                                Invitation >></h1>
                                                        </a>
                                                    @endif
                                                </div>
                                                @if ($players->id !== session('player_id'))
                                                    <div class="absolute bottom-2.5 right-2.5">
                                                        <img src="{{ asset('assets/images/empty-flag.svg') }}" onclick="toggleModal('flagmodal-id')" alt="">
                                                    </div>
                                                @endif
                                                <div class="absolute -top-px -right-px ">
                                                    <div class="relative">

                                                        @if ($players->is_favorite == 1)
                                                            <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                alt="">
                                                            <img class="absolute top-2 right-1.5 cursor-pointer"
                                                                src="{{ asset('assets/images/heart-icon.svg') }}" />
                                                        @else
                                                            @if ($players->id !== session('player_id'))
                                                                <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                    alt="">
                                                                <img class="absolute top-2 right-1.5 cursor-pointer"
                                                                    onclick="Unfavorite('{{ $players->id }}','{{ Session::get('player_id') }}')"
                                                                    src="{{ asset('assets/images/heart-icon.svg') }}" />
                                                                {{-- @else
                                                            <img
                                                                class="absolute top-2 right-1.5 cursor-pointer"
                                                                src="{{ asset('assets/images/empty-heart.svg') }}"/> --}}
                                                            @endif
                                                        @endif
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
                                                                    <span>@</span>{{ $players->player_user_name }}
                                                                </h2>
                                                                @if ($card_detail->rating == 1)
                                                                    <div class="flex items-center">
                                                                        <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                            fill="currentColor" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                            </path>
                                                                        </svg>
                                                                        <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                            fill="currentColor" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                            </path>
                                                                        </svg>
                                                                        <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                            fill="currentColor" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                            </path>
                                                                        </svg>
                                                                        <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                            fill="currentColor" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                            </path>
                                                                        </svg>
                                                                        <svg class="w-3.5 h-3.5 text-rating-yellow"
                                                                            fill="currentColor" viewBox="0 0 20 20"
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
                                                        </a>
                                                    </div>
                                                    <div>
                                                        @if ($card_detail->price == 1)
                                                            <small class="text-white font-semibold">$200</small>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="my-3">
                                                    <div class="flex justify-between">
                                                        <div class="text-center">
                                                            @if ($card_detail->age == 1)
                                                                <h1 class="text-heading-white text-opacity-25 text-sm">
                                                                    Age</h1>

                                                                <h2 class="text-white text-sm">
                                                                    {{ get_age_from_birth_date($players->date_of_birth) }}
                                                                </h2>
                                                            @endif
                                                        </div>
                                                        <div class="text-center">
                                                            @if ($card_detail->played == 1)
                                                                <h1 class="text-heading-white text-opacity-25 text-sm">
                                                                    Played
                                                                </h1>

                                                                <h2 class="text-white text-sm">2
                                                                </h2>
                                                            @endif
                                                        </div>
                                                        <div class="text-center">
                                                            @if ($card_detail->missed == 1)
                                                                <h1 class="text-heading-white text-opacity-25 text-sm">
                                                                    Missed
                                                                </h1>

                                                                <h2 class="text-white text-sm">2
                                                                </h2>
                                                            @endif
                                                        </div>
                                                        <div class="text-center">
                                                            @if ($card_detail->position == 1)
                                                                <h1 class="text-heading-white text-opacity-25 text-sm">
                                                                    Position
                                                                </h1>

                                                                <h2 class="text-white text-sm">
                                                                    {{ $players->name }}
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
                                                                {{ $players->current_address }}
                                                            </h1>
                                                        @endif
                                                    </div>
                                                    @if ($players->id !== session('player_id'))
                                                        <a href="{{ Route('player.send.invitation') }}">
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
                                                        @if ($players->is_favorite == 1)
                                                            <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                alt="">
                                                            <img class="absolute top-2 right-1.5 cursor-pointer"
                                                                src="{{ asset('assets/images/heart-icon.svg') }}" />
                                                        @else
                                                            @if ($players->id !== session('player_id'))
                                                                <img src="{{ asset('assets/images/icons/white-heart-bg.svg') }}"
                                                                    alt="">
                                                                <img class="absolute top-2 right-1.5 cursor-pointer"
                                                                    onclick="Unfavorite('{{ $players->id }}','{{ Session::get('player_id') }}')"
                                                                    src="{{ asset('assets/images/heart-icon.svg') }}" />
                                                                {{-- @else
                                                            <img
                                                                class="absolute top-2 right-1.5 cursor-pointer"
                                                                src="{{ asset('assets/images/empty-heart.svg') }}"/> --}}
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                                    id="flagmodal-id">
                                                    <div class="relative my-auto mx-2 md:mx-auto w-80">
                                                        <!--content-->
                                                        <div
                                                            class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                                            <!--header-->
                                                            <div class="flex justify-end px-3 py-1 rounded-t">
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
                                                                <div class="flex flex-col space-y-2 justify-center my-3">
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
                        @endif
                    </div>
                </div>
                {{$favorite->links()}}
            </div>
        </div>
        {{-- </div>
                </div>
            </div> --}}
    </div>
    </div>
    <div class="fixed bottom-20 right-5 2xl:bottom-[6.75rem] 2xl:right-[2.5rem]">
        <button class="bg-black text-white p-5 rounded-full ease-linear transition-all duration-150" type="button"
            onclick="toggleModal('modal-id')">
            <img class="w-5 h-5" src="{{ asset('assets/images/filter-icon.svg') }}" alt="">
        </button>
    </div>
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
        id="modal-id">
        <div class="relative my-auto mx-auto w-80">
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
                            <input type="range"
                                class="appearance-none bg-white text-sm font-medium rounded-full text-center w-full h-0.5 accent-light-green hover:accent-light-green">
                        </div>
                    </div>
                    <div class="pt-2 ">
                        <h1 class="text-white text-xs font-bold uppercase">Rating</h1>
                        <div class="mt-2 border border-white pt-1 pb-3 px-4 rounded-full">
                            <input type="range"
                                class="appearance-none bg-white text-sm font-medium rounded-full text-center w-full h-0.5 accent-light-green hover:accent-light-green">
                        </div>
                    </div>
                    <div class="pt-2 ">
                        <h1 class="text-white text-xs font-bold uppercase">Price</h1>
                        <div class="mt-2 border border-white pt-1 pb-3 px-4 rounded-full">
                            <input type="range"
                                class="appearance-none bg-white text-sm font-medium rounded-full text-center w-full h-0.5 accent-light-green hover:accent-light-green">
                        </div>
                    </div>

                    <div class="pt-2 ">
                        <h1 class="text-white text-xs font-bold uppercase">Location</h1>
                        <div class="mt-2">
                            <div class="relative items-center">
                                <input type="text"
                                    class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2.5 placeholder-border-gray "
                                    placeholder="Use current location">
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="relative items-center">
                                <select
                                    class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5">
                                    <option selected>Distance</option>
                                    <option value="US">Nearby</option>
                                    <option value="CA">Faraway</option>
                                </select>
                                <span class="absolute inset-y-4 right-3.5">
                                    <img src="{{ asset('assets/images/Polygon 9.svg') }}" alt="">
                                </span>
                            </div>

                        </div>
                    </div>
                    <div class="pt-2 ">
                        <h1 class="text-white text-xs font-bold uppercase">search</h1>
                        <div class="mt-2">
                            <input type="text"
                                class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2.5 placeholder-border-gray "
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
                                    <img src="{{ asset('assets/images/Polygon 9.svg') }}" alt="">
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

    <script>
        function Unfavorite(id, user_id) {

            $.ajax({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                },

                url: "{{ URL::to('/player/unfavorite') }}",

                data: {

                    fav_id: id,

                    user_id: user_id

                },

                method: 'POST',

                success: function(response) {

                    // console.log(response)
                    if (response == 1) {
                        window.location.href = "{{ url('/player/favourite/view') }}";
                    }
                },
            });

        }
    </script>

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
    </script>
@endsection
