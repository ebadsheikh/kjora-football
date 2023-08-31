@extends('player.layouts.master')
@section('content')
    <div class="container md:mx-auto">
        <div class="flex justify-center">
            <div class="w-11/12 md:w-9/12">
                <div>
                    <!-- view heading -->
                    @include('player.dashboard.common_heading')
                </div>
            </div>
        </div>
        <section class="py-6">
            <div class="container md:mx-auto">
                <div class="flex justify-center">
                    <div class="w-11/12  md:w-9/12">
                        <div class="py-2">
                            <div class="rounded-3xl px-5 py-8 bg-cover bg-center"
                                style="background-image: url('{{ asset('assets/images/gold-card.png') }}');">
                                <div class="flex justify-between">
                                    <div>
                                        <div class="flex items-center">
                                            @if ($player->id == session('player_id'))
                                                <div>
                                                    <input type="file" accept="image/*" onchange="showMyPhoto(this)"
                                                        name="player_photo" class="hidden" id="profile_photo" />
                                                    <img class="cursor-pointer object-cover rounded-full border-2 border-black mr-3 h-12 w-12 md:h-16 md:w-16"
                                                        id="thumbnil_photo" src="{{ URL::asset($player->profile_image) }}"
                                                        style="object-fit: cover;" alt="image">
                                                </div>
                                            @else
                                                <div>
                                                    <img class="cursor-pointer object-cover rounded-full border-2 border-black mr-3 h-12 w-12 md:h-16 md:w-16"
                                                        src="{{ URL::asset($player->profile_image) }}"
                                                        style="object-fit: cover;" alt="image">
                                                </div>
                                            @endif
                                            <span class="self-center">
                                                <h1 class="text-black text-sm md:text-base md:leading-none font-semibold">
                                                    @if ($card_detail->first_name == 1)
                                                        {{ $player->first_name }}
                                                    @endif
                                                    @if ($card_detail->sur_name == 1)
                                                        {{ $player->sur_name }}
                                                    @endif
                                                </h1>
                                                <h2 class="text-gray-heading font-medium text-sm md:text-base">
                                                    <span>@</span>{{ $player->player_user_name }}
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
                                        </div>
                                    </div>
                                    <div>
                                        @if ($card_detail->price == 1)
                                            <h1 class="text-lg text-black font-semibold">$200</h1>
                                        @endif
                                    </div>
                                </div>
                                <div class="my-3">
                                    <div class="flex lg:mx-20 justify-between">
                                        @if ($card_detail->favourite_club == 1)
                                            <div class="text-center">
                                                <h1 class="text-light-green text-xs md:text-sm">Favourite club</h1>
                                                {{-- <img class="mx-auto" src="{{asset('assets/images/country-logo4.svg')}}" alt=""> --}}
                                                <div class='group relative'>
                                                    <img class="mx-auto cursor-pointer h-6 w-6 md:h-8 md:w-8 "
                                                        src="{{ URL::asset($player->club['image']) }}" alt="">
                                                    <h1
                                                        class="hidden group-hover:block bg-white text-black font-semibold text-xxs rounded py-px absolute inset-x-0 bottom-[-17px]">
                                                        {{ $player->club['name'] }} </h1>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="text-center">
                                            <h1 class="text-light-green text-xs md:text-sm">Age</h1>
                                            @if ($card_detail->age == 1)
                                                <h2 class="text-black text-xs md:text-sm">
                                                    {{ get_age_from_birth_date($player->date_of_birth) }}</h2>
                                            @endif
                                        </div>
                                        <div class="text-center">
                                            <h1 class="text-light-green text-xs md:text-sm">Played</h1>
                                            @if ($card_detail->played == 1)
                                                <h2 class="text-black text-xs md:text-sm">2</h2>
                                            @endif
                                        </div>
                                        <div class="text-center">
                                            <h1 class="text-light-green text-xs md:text-sm">Missed</h1>
                                            @if ($card_detail->missed == 1)
                                                <h2 class="text-black text-xs md:text-sm">2</h2>
                                            @endif
                                        </div>
                                        <div class="text-center">
                                            <h1 class="text-light-green text-xs md:text-sm">Position</h1>
                                            @if ($card_detail->position == 1)
                                                <h2 class="text-black text-xs md:text-sm">{{ $player->position['name'] }}
                                                </h2>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-7">
                                <div class="mt-2 flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/images/black-location.svg') }}" class="mr-1"
                                            alt="Logo" />
                                        @if ($card_detail->location == 1)
                                            <h1 class="text-black text-xxs md:text-xs">
                                                {{ $player->current_city }} , {{ $player->current_state }} ,
                                                {{ $player->current_country }}
                                            </h1>
                                        @endif
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        @if (session('player_id') !== $player->id)
                                            <a href="{{ Route('player.send.invitation') }}"
                                                class="text-black text-xxs md:text-xs">Send invitation >></a>
                                        @endif
                                        <button class="ease-linear transition-all duration-150" type="button"
                                            onclick="openDropdown(event,'dropdown-id')">
                                            <div class="flex items-center">
                                                <img class="w-5 h-5"
                                                    src="{{ asset('assets/images/black-share-icon.svg') }}" alt="">
                                            </div>
                                        </button>
                                    </div>
                                    <div class="hidden bg-black rounded-full text-base z-50 float-left py-[3px] px-2 list-none text-left rounded-xl  shadow-lg mt-1"
                                        id="dropdown-id">
                                        <ul class="flex gap-x-2">
                                            <div class="social-btn-sp flex">
                                                {!! $shareButtons !!}
                                                <img class="w-3 h-3 mt-1.5 ml-1"
                                                    src="{{ asset('assets/images/white-link-icon.svg') }}"
                                                    onclick="Copy();" />
                                            </div>
                                            {{-- <li class="inline-flex items-center space-x-3">
                                                <img class="w-4 h-4"
                                                    src="{{ asset('assets/images/white-facebook-icon.svg') }}" />
                                            </li>
                                            <li class="inline-flex items-center space-x-3">
                                                <img class="w-4 h-4"
                                                    src="{{ asset('assets/images/white-insta-icon.svg') }}">
                                            </li>
                                            <li class="inline-flex items-center space-x-3">
                                                <img class="w-4 h-4"
                                                    src="{{ asset('assets/images/white-linkedin-icon.svg') }}">
                                            </li>
                                            <li class="inline-flex items-center space-x-3">
                                                <img class="w-4 h-4"
                                                    src="{{ asset('assets/images/white-link-icon.svg') }}">
                                            </li>
                                            <li class="inline-flex items-center space-x-3">
                                                <img class="w-4 h-4"
                                                    src="{{ asset('assets/images/white-twitter-icon.svg') }}">
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- tabs starting -->

                        <div id="tabs-id">
                            <div class="rounded-full p-3 bg-heading-white bg-opacity-62 ">
                                <ul class="flex justify-center space-x-4">
                                    <li >
                                        <a class="uppercase text-base text-border-gray cursor-pointer font-medium {{ isset($tab) ? ($tab == 'tab-performance' ? 'text-black' : '') : 'text-border-gray'}}"
                                            onclick="changeAtiveTab(event,'tab-performance')">
                                            Performance
                                        </a>
                                    </li>
                                    <li >
                                        <a class="uppercase text-base text-border-gray cursor-pointer font-medium {{ (isset($tab) && $tab == 'tab-photos') ? 'text-black' : 'text-border-gray'}}"
                                            onclick="changeAtiveTab(event,'tab-photos')">
                                            photos
                                        </a>
                                    </li>
                                    <li>
                                        <a class="uppercase text-base text-border-gray cursor-pointer font-medium {{ (isset($tab) && $tab == 'tab-videos') ? 'text-black' : 'text-border-gray'}}"
                                            onclick="changeAtiveTab(event,'tab-videos')">
                                            videos
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="relative my-5 rounded">
                                <div class="tab-content tab-space">
                                    <div class="{{ isset($tab) ? ($tab == 'tab-performance' ? 'block' : 'hidden relative') : 'block'}}" id="tab-performance">
                                        <div class="flex justify-center">
                                            <img src="{{ asset('assets/images/graph.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="{{ (isset($tab) && $tab == 'tab-photos') ? 'block' : 'hidden relative '}}" id="tab-photos">
                                        <div class="grid md:grid-cols-4 lg:grid-cols-6 gap-y-4">
                                            @foreach ($player_photo as $item)
                                                <a href="{{ Route('player.photo', $item->id) }}">
                                                    <div class="col-span-1 group border-2 border-dark-green rounded-xl relative cursor-pointer">
                                                        <div
                                                            class="hidden group-hover:block absolute inset-0 bg-photo-overlay bg-opacity-60 rounded-xl">
                                                        </div>
                                                        <img class="rounded-xl h-40 w-full object-cover"
                                                            src="{{ URL::asset($item->photo) }}" alt="">
                                                        <div class="hidden group-hover:block absolute inset-x-0 bottom-1">
                                                            <div class="flex justify-between items-center gap-2">
                                                                <h1 class="text-white text-xxs px-1 truncate">Lorem ipsum
                                                                    dolor
                                                                    sit amet consectetur adipisicing.</h1>
                                                                <div class="pr-1">
                                                                    <img
                                                                        src="{{ asset('assets/images/view-icon2.svg') }}">
                                                                        <h1 class="text-white text-center text-xxs">{{$item->views}}</h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            @endforeach
                                        </div>
                                        @if (session('player_id') == $player->id)
                                            {{-- fixed bottom-8 right-3 md:absolute md:right-[-4rem] md:bottom-16 --}}
                                            <div class="fixed bottom-20 right-5 2xl:bottom-[6.75rem] 2xl:right-[2.5rem]">
                                                <button
                                                    class="bg-golden-yellow text-white h-[60px] min-w-[60px] p-5 rounded-full ease-linear transition-all duration-150"
                                                    type="button" onclick="toggleModal('photomodal-id')">
                                                    <img class="w-5 h-5" src="{{ asset('assets/images/add-icon.svg') }}"
                                                        alt="">
                                                </button>
                                            </div>
                                        @endif
                                        <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                            id="photomodal-id">
                                            <div class="relative my-auto mx-auto w-[19rem] md:w-[30rem] 2xl:w-[42rem]">
                                                <!--content-->
                                                <div
                                                    class="border-0 rounded-2xl shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                                    <!--header-->
                                                    <div class="flex justify-between px-5 pt-2">
                                                        <div>
                                                        </div>
                                                        <button
                                                            class="text-black text-right text-xl leading-none font-normal"
                                                            onclick="toggleModal('photomodal-id')">
                                                            x
                                                        </button>
                                                    </div>
                                                    <!--body-->
                                                    <div class="relative px-6 py-2 flex-auto">
                                                        <form action="{{ Route('player.store.photo') }}" method="post"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            @if (session('success'))
                                                                <div class="p-2">
                                                                    <div class="text-green-600 text-xs">
                                                                        {{ session('success') }}
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            @if (session('error'))
                                                                <div class="p-2">
                                                                    <div class="text-red-700 text-xs" role="alert">
                                                                        {{ session('error') }}
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            <div>
                                                                <h1
                                                                    class="uppercase text-sm sm:text-lg lg:text-2xl font-semibold text-center text-light-green">
                                                                    UPLOAD
                                                                </h1>
                                                                <div class="my-3">
                                                                    <label
                                                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Caption</label>
                                                                    <input
                                                                        class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                                                        type="text" placeholder="Please write caption"
                                                                        name="caption" value="{{ old('caption') }}">
                                                                    @error('caption')
                                                                        @include('errors.required_field', [
                                                                            'message' => $message,
                                                                        ])
                                                                    @enderror
                                                                </div>
                                                                <div class="mt-3">
                                                                    <div class="flex flex-col justify-center space-y-4">
                                                                        <div class="mx-auto">
                                                                            <button
                                                                                class=" bg-light-green text-white p-4 rounded-full ease-linear transition-all duration-150"
                                                                                type="button">
                                                                                <input type="file" accept="image/*"
                                                                                    onchange="showMyImage(this)"
                                                                                    name="image" class="hidden"
                                                                                    id="profile_image"
                                                                                    value="{{ old('image') }}" />
                                                                                <img class="w-5 h-5"
                                                                                    src="{{ asset('assets/images/add-icon.svg') }}"
                                                                                    alt="" id="thumbnil">
                                                                            </button>
                                                                        </div>
                                                                        <img class="mx-auto rounded-lg object-cover w-40 h-40"
                                                                            src="{{ asset('assets/images/BLANK_ICON.png') }}"
                                                                            alt="" id="thumbnilabc">
                                                                    </div>
                                                                    @error('image')
                                                                        @include('errors.required_field', [
                                                                            'message' => $message,
                                                                        ])
                                                                    @enderror
                                                                </div>
                                                                <button
                                                                    class="w-full bg-black text-white mt-8 mb-2 uppercase font-medium py-2 px-4 rounded-full"
                                                                    type="submit">
                                                                    upload
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hidden opacity-25 fixed inset-0 z-40 bg-black"
                                            id="photomodal-id-backdrop"></div>
                                    </div>
                                    <div class="{{ (isset($tab) && $tab == 'tab-videos') ? 'block' : 'hidden relative '}}" id="tab-videos">
                                        <div class="grid md:grid-cols-4 xl:grid-cols-6 gap-y-4">
                                            @foreach ($player_video as $item)
                                                <div class="col-span-1 group border-2 border-dark-green rounded-xl relative cursor-pointer">
                                                    <div>
                                                        <div
                                                            class="hidden group-hover:block absolute inset-0 bg-photo-overlay bg-opacity-60 rounded-xl">
                                                        </div>
                                                        <video class="rounded-xl h-40 w-full object-cover" preload="metadata">
                                                            <source src="{{ URL::asset($item->video) }}#t=0.1"
                                                                type="video/mp4">
                                                        </video>
                                                        <div class="hidden group-hover:block absolute left-[45%] md:left-[40%] bottom-[41%]">
                                                            <a href="{{ Route('player.video', $item->id) }}">
                                                                <img src="{{ asset('assets/images/play-icons.svg') }}">
                                                            </a>
                                                        </div>
                                                        <div class="hidden group-hover:block absolute inset-x-0 bottom-1">
                                                            <div class="flex justify-between items-center gap-2">
                                                                <h1 class="text-white text-xxs px-1 truncate">Lorem ipsum
                                                                    dolor
                                                                    sit
                                                                    amet consectetur adipisicing.</h1>
                                                                <div class="pr-1">
                                                                    <img
                                                                        src="{{ asset('assets/images/view-icon2.svg') }}">
                                                                        <h1 class="text-white text-center text-xxs">{{$item->views}}</h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        @if (session('player_id') == $player->id)
                                            <div class="fixed bottom-20 right-5 2xl:bottom-[6.75rem] 2xl:right-[2.5rem]">
                                                <button
                                                    class="bg-golden-yellow text-white h-[60px] min-w-[60px] p-5 rounded-full ease-linear transition-all duration-150"
                                                    type="button" onclick="toggleModal('videomodal-id')">
                                                    <img class="w-5 h-5" src="{{ asset('assets/images/add-icon.svg') }}"
                                                        alt="">
                                                </button>
                                            </div>
                                        @endif
                                        <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                            id="videomodal-id">
                                            <div class="relative my-auto mx-auto w-[19rem] md:w-[30rem] 2xl:w-[42rem]">
                                                <!--content-->
                                                <div
                                                    class="border-0 rounded-2xl shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                                    <!--header-->
                                                    <div class="flex justify-between px-5 pt-2">
                                                        <div>
                                                        </div>
                                                        <button
                                                            class="text-black text-right text-xl leading-none font-normal"
                                                            onclick="toggleModal('videomodal-id')">
                                                            x
                                                        </button>
                                                    </div>
                                                    <!--body-->
                                                    <div class="relative px-6 py-2 flex-auto">
                                                        <form action="{{ Route('player.store.video') }}" method="post"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            @if (session('success'))
                                                                <div class="p-2">
                                                                    <div class="text-green-600 text-xs">
                                                                        {{ session('success') }}
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            @if (session('error'))
                                                                <div class="p-2">
                                                                    <div class="text-red-700 text-xs" role="alert">
                                                                        {{ session('error') }}
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            <div>
                                                                <h1
                                                                    class="uppercase text-sm sm:text-lg lg:text-2xl font-semibold text-center text-light-green">
                                                                    UPLOAD Video
                                                                </h1>
                                                                <div class="my-3">
                                                                    <label
                                                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Caption</label>
                                                                    <input
                                                                        class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                                                        type="text" placeholder="Please write caption"
                                                                        name="caption_video"
                                                                        value="{{ old('caption_video') }}">
                                                                    @error('caption_video')
                                                                        @include('errors.required_field', [
                                                                            'message' => $message,
                                                                        ])
                                                                    @enderror
                                                                </div>
                                                                <div class="mt-3">
                                                                    <div class="flex flex-col justify-center space-y-4">
                                                                        <div class="mx-auto">
                                                                            <button
                                                                                class=" bg-light-green text-white p-4 rounded-full ease-linear transition-all duration-150"
                                                                                type="button">
                                                                                <input type="file" accept="video/*"
                                                                                    onchange="showMyVideo(this)"
                                                                                    name="video" class="hidden"
                                                                                    id="profile_video" />
                                                                                <img class="w-5 h-5"
                                                                                    src="{{ asset('assets/images/add-icon.svg') }}"
                                                                                    alt="" id="thumbnil_video">
                                                                            </button>
                                                                        </div>
                                                                        @error('video')
                                                                            @include('errors.required_field',
                                                                                [
                                                                                    'message' => $message,
                                                                                ])
                                                                        @enderror
                                                                        {{-- <img class="mx-auto rounded-lg object-cover w-40 h-40"
                                                                        src="{{asset('assets/images/player-photo.png')}}"
                                                                        alt="" id="thumbnilvideo"> --}}
                                                                        <div class="mx-auto  w-40 h-40">
                                                                            <video
                                                                                class="w-40 h-40 hidden rounded-lg object-cover"
                                                                                id="video_show_here" controls>
                                                                                <source src="movie.mp4" type="video/mp4"
                                                                                    id="video_here">
                                                                            </video>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button
                                                                    class="w-full bg-black text-white mt-8 mb-2 uppercase font-medium py-2 px-4 rounded-full"
                                                                    type="submit">
                                                                    upload
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hidden opacity-25 fixed inset-0 z-40 bg-black"
                                            id="videomodal-id-backdrop"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>

    @if (count($errors) > 0)
        <script>
            document.getElementById('tab-settings').classList.remove("hidden");
            document.getElementById('tab-profile').classList.add("hidden");
            document.getElementById('tab-options').classList.add("hidden");
            document.getElementById('photomodal-id').classList.toggle("hidden");
            document.getElementById('photomodal-id' + "-backdrop").classList.toggle("hidden");
            document.getElementById('photomodal-id').classList.toggle("flex");
            document.getElementById('photomodal-id' + "-backdrop").classList.toggle("flex");
        </script>
    @endif

    @if (count($errors->get('video')) > 0)
        <script>
            document.getElementById('tab-options').classList.remove("hidden");
            document.getElementById('tab-profile').classList.add("hidden");
            document.getElementById('tab-settings').classList.add("hidden");
            document.getElementById('videomodal-id').classList.toggle("hidden");
            document.getElementById('videomodal-id' + "-backdrop").classList.toggle("hidden");
            document.getElementById('videomodal-id').classList.toggle("flex");
            document.getElementById('videomodal-id' + "-backdrop").classList.toggle("flex");
        </script>
    @endif
    @if (count($errors->get('caption_video')) > 0)
        <script>
            document.getElementById('tab-options').classList.remove("hidden");
            document.getElementById('tab-profile').classList.add("hidden");
            document.getElementById('tab-settings').classList.add("hidden");
            document.getElementById('videomodal-id').classList.toggle("hidden");
            document.getElementById('videomodal-id' + "-backdrop").classList.toggle("hidden");
            document.getElementById('videomodal-id').classList.toggle("flex");
            document.getElementById('videomodal-id' + "-backdrop").classList.toggle("flex");
        </script>
    @endif

    <script>
        function openDropdown(event, dropdownID) {
            let element = event.target;
            while (element.nodeName !== "BUTTON") {
                element = element.parentNode;
            }
            var popper = Popper.createPopper(element, document.getElementById(dropdownID), {
                placement: 'top'
            });
            document.getElementById(dropdownID).classList.toggle("hidden");
            document.getElementById(dropdownID).classList.toggle("block");
        };
    </script>
    <script>
        $('#thumbnil').click(function() {
            $('#profile_image').click();
        });

        function showMyImage(fileInput) {
            var files = fileInput.files;
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var imageType = /image.*/;
                if (!file.type.match(imageType)) {
                    continue;
                }
                var img = document.getElementById("thumbnilabc");
                img.file = file;
                var reader = new FileReader();
                reader.onload = (function(aImg) {
                    return function(e) {
                        aImg.src = e.target.result;
                    };
                })(img);
                reader.readAsDataURL(file);
            }
        }
    </script>
    <script>
        $('#thumbnil_photo').click(function() {
            $('#profile_photo').click();
        });

        function showMyPhoto(fileInput) {
            var files = fileInput.files;
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var imageType = /image.*/;
                if (!file.type.match(imageType)) {
                    continue;
                }
                var img = document.getElementById("thumbnil_photo");
                img.file = file;
                var reader = new FileReader();
                reader.onload = (function(aImg) {
                    return function(e) {
                        aImg.src = e.target.result;
                    };
                })(img);
                reader.readAsDataURL(file);

            }

            postData = new FormData();
            postData.append("player_img", files[0]);
            $.ajax({
                enctype: 'multipart/form-data',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '{{ route('player.golden.profile.photo') }}',
                data: postData,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function(data) {},
                error: function(error) {
                    console.log(error);
                }
            });

        }
    </script>
    <script>
        $(document).on("change", "#profile_video", function(evt) {
            var $source = $('#video_here');
            $source[0].src = URL.createObjectURL(this.files[0]);
            $source.parent()[0].load();
        });
    </script>

    <script>
        $('#thumbnil_video').click(function() {
            $('#profile_video').click();
        });

        function showMyVideo(fileInput) {
            document.getElementById('video_show_here').classList.remove("hidden");
            document.getElementById('video_show_here').classList.add("block");
            var files = fileInput.files;
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var imageType = /video.*/;
                if (!file.type.match(imageType)) {
                    continue;
                }
                var img = document.getElementById("thumbnilvideo");
                img.file = file;
                var reader = new FileReader();
                reader.onload = (function(aImg) {
                    return function(e) {
                        aImg.src = e.target.result;
                    };
                })(img);
                reader.readAsDataURL(file);
            }
        }
    </script>
    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
    <script>
        function openDropdown(event, dropdownID) {
            let element = event.target;
            while (element.nodeName !== "BUTTON") {
                element = element.parentNode;
            }
            var popper = Popper.createPopper(element, document.getElementById(dropdownID), {
                placement: 'top'
            });
            document.getElementById(dropdownID).classList.toggle("hidden");
            document.getElementById(dropdownID).classList.toggle("block");
        };
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
                aElements[i].classList.remove("text-border-gray");
                aElements[i].classList.add("text-black");
                aElements[i].classList.remove("text-black");
                aElements[i].classList.add("text-border-gray");
                tabContents[i].classList.add("hidden");
                tabContents[i].classList.remove("block");
            }
            element.classList.remove("text-border-gray");
            element.classList.add("text-black");
            document.getElementById(tabID).classList.remove("hidden");
            document.getElementById(tabID).classList.add("block");
        }
    </script>
    <script type="text/javascript">
        function toggleModal(photomodalID) {
            document.getElementById(photomodalID).classList.toggle("hidden");
            document.getElementById(photomodalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(photomodalID).classList.toggle("flex");
            document.getElementById(photomodalID + "-backdrop").classList.toggle("flex");
        }
    </script>
    <script type="text/javascript">
        function toggleModal(videomodalID) {
            document.getElementById(videomodalID).classList.toggle("hidden");
            document.getElementById(videomodalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(videomodalID).classList.toggle("flex");
            document.getElementById(videomodalID + "-backdrop").classList.toggle("flex");
        }
    </script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#inputImage').change(function() {
            let reader = new FileReader();

            reader.onload = (e) => {
                $('#preview-image').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });
    </script>
    <script>
        function Copy() {
            var dummy = document.createElement('input'),
                text = window.location.href;
            document.body.appendChild(dummy);
            dummy.value = text;
            dummy.select();
            document.execCommand('copy');
            document.body.removeChild(dummy);
        }
    </script>
@endsection
