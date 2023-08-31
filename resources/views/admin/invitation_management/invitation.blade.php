@extends('admin.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/custom/style/custom_calender_picker.css') }}">
@endsection
@section('content')
    <div class="p-4 md:py-10 md:px-16 2xl:px-52">
        <div class="p-3">
            <h1 class="uppercase text-white text-2xl font-semibold tracking-wide">invitation</h1>
        </div>
        <section class="py-5">
            <div class="flex flex-wrap justify-end" id="tabs-id">
                <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 px-1 md:px-4 flex-row">
                    <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                        <a class="cursor-pointer text-xs font-bold uppercase w-28 md:w-48 py-3 shadow-lg rounded-full block leading-normal text-black bg-white"
                            onclick="changeAtiveTab(event,'tab-profile')">
                            Invitation
                        </a>
                    </li>
                    <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                        <a class="cursor-pointer text-xs font-bold uppercase w-28 md:w-48 py-3 shadow-lg rounded-full block leading-normal text-black bg-slate-50"
                            onclick="changeAtiveTab(event,'tab-settings')">
                            Hire
                        </a> 
                    </li>
                </ul>
                <div class="w-full">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 rounded">
                        <div class="lg:px-4 py-5 flex-auto">
                            <div class="tab-content tab-space">
                                <div class="block" id="tab-profile">
                                    <div class="px-2 pt-2 pb-6">
                                        <div class="flex space-x-2 justify-end">
                                            <div class="flex space-x-0.5">
                                                <ul id="tabs-map-grid-invitation" class="flex space-x-0.5">
                                                    <li
                                                        class="px-4 py-1 text-sm font-bold bg-white border border-gray-200 rounded-md focus:z-10">
                                                        <a id="default-tab" href="#first">Grid</a>
                                                    </li>
                                                    <li
                                                        class="px-4 py-1 text-sm font-bold bg-white border border-gray-200 rounded-md focus:z-10">
                                                        <a href="#second">Map</a>
                                                    </li>
                                                </ul>
                                                <button onclick="openDropdown(event,'exportdropdown-id')"
                                                    class="ease-linear transition-all duration-150 text-white bg-export-btn font-medium w-[7.3rem] rounded-lg text-sm px-3 py-1 text-center inline-flex items-center">
                                                    <img src="{{ asset('assets/images/Icons - Navigation icon (12 states).svg') }}"
                                                        class="mr-2" />Export
                                                    <img src="{{asset('assets/images/Polygon 9.svg')}}" class="ml-2" /></button>
                                                    <div id="exportdropdown-id" class="hidden bg-export-btn rounded-b-lg p-1 text-center w-[7.3rem] export-style">
                                                        <ul class="flex flex-col gap-y-2">
                                                            <li>
                                                                <a href="{{Route('admin.invitation.management.generate.pdf.invite')}}" class="text-white font-medium uppercase text-xs ml-2">PDF</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{Route('admin.invitation.management.generate.word.invite')}}" class="text-white font-medium uppercase text-xs ml-2">Docx</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            <img src="{{ asset('assets/images/Path 303.svg') }}" class="mr-1"
                                                    alt="Logo" />
                                        </div>
                                    </div>
                                    <div id="tab-contents">
                                        <div class="bg-white rounded-3xl py-5" id="first">
                                            <div>
                                                <div class="px-4 pt-3 flex space-x-2 items-center">
                                                    <img src="{{ asset('assets/images/calendar-icon.svg') }}"
                                                        alt="">
                                                    <h1 class="text-sm text-black font-bold uppercase">
                                                        {{ \Carbon\Carbon::today()->format('d-m-Y') }}</h1>
                                                </div>
                                                <div class="pt-1 flex space-x-2 items-center">
                                                    <img src="{{ asset('assets/images/time-icon.svg') }}" alt="">
                                                    <h1 class="text-sm text-black font-medium uppercase">
                                                        {{ \Carbon\Carbon::now()->toTimeString() }} </h1>
                                                </div>
                                            </div>
                                            <div class="py-3 px-3 xl:px-12">
                                                <h1 class="uppercase text-black text-sm font-semibold tracking-wide">
                                                    Total invites ({{ $invite_count }})</h1>
                                            </div>
                                            <div class="px-3 py-3 xl:px-12 md:py-3">
                                                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-2 xl:gap-4 2xl:gap-8 xl:justify-items-center">
                                                    @if (count($invite) > 0)
                                                        @foreach ($invite as $invites)
                                                            <div class="rounded-3xl relative h-[13.813rem] xl:w-80 px-4 py-9 bg-cover bg-center cursor-pointer"
                                                                style="background-image: url('{{ asset('assets/images/small-default.png') }}');"
                                                                onclick="toggleModal('profilemodal-id{{ $invites->id }}')">
                                                                <div class="flex justify-between">
                                                                    <div>
                                                                        <a href="#" class="flex items-center">
                                                                            <img src="{{ URL::asset($invites['inviteTo'][0]['profile_image']) }}"
                                                                                class="rounded-full border-2 border-white mr-2 h-14 w-14"
                                                                                alt="Logo" />
                                                                            <span class="self-center">
                                                                                <h1
                                                                                    class="text-white text-sm font-semibold">
                                                                                    @if ($card_detail->first_name == 1)
                                                                                        {{ $invites['inviteTo'][0]['first_name'] }}
                                                                                    @endif
                                                                                    @if ($card_detail->sur_name == 1)
                                                                                        {{ $invites['inviteTo'][0]['sur_name'] }}
                                                                                    @endif
                                                                                </h1>
                                                                                <h2
                                                                                    class="text-heading-white text-opacity-25 font-medium text-sm">
                                                                                    <span>@</span>{{ $invites['inviteTo'][0]['player_user_name'] }}
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
                                                                                        <h1 class="text-xs text-rating-yellow">
                                                                                            &nbsp 5.0</h1>
                                                                                    </div>
                                                                                @endif
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="text-center">
                                                                        <small
                                                                            class="text-white font-normal tracking-wide">Position</small>
                                                                        @if ($card_detail->position == 1)
                                                                            <h2
                                                                                class="text-heading-white text-opacity-25 font-normal text-xs tracking-wider">
                                                                                {{ $invites['inviteTo'][0]['position']['name'] }}
                                                                            </h2>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <hr class="mt-12">
                                                                <div class="mt-2">
                                                                    <a href="#" class="flex items-start">
                                                                        <img src="{{ asset('assets/images/white-location.svg') }}"
                                                                            class="mr-1" alt="Logo" />
                                                                        <div>
                                                                            @if ($card_detail->location == 1)
                                                                                <h1 class="text-white capitalize text-xs">
                                                                                    Jabar Al-Ahmed Al-Sabah
                                                                                    international stadium</h1>
                                                                            @endif
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!--Profile model starts-->
                                                            <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                                                id="profilemodal-id{{ $invites->id }}">
                                                                <div class="relative my-auto mx-auto w-72 ">
                                                                    <div
                                                                        class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-black outline-none focus:outline-none ">
                                                                        <!--header-->
                                                                        <div
                                                                            class="flex items-start justify-end px-5 pt-2 rounded-t">

                                                                            <button
                                                                                class="text-white float-right text-sm leading-none font-thin"
                                                                                onclick="toggleModal('profilemodal-id{{ $invites->id }}')">
                                                                                x
                                                                            </button>
                                                                        </div>
                                                                        <!--body-->
                                                                        <div class="relative px-6 flex-auto">
                                                                            <div class="pt-2">
                                                                                <h1
                                                                                    class="text-white text-sm font-bold uppercase">
                                                                                    Invitation</h1>
                                                                                <div class="rounded-3xl mt-2 p-2 border-2">
                                                                                    <a href="#"
                                                                                        class="flex items-center">
                                                                                        <img src="{{ URL::asset($invites['inviteFrom'][0]['profile_image']) }}"
                                                                                            class="rounded-full border-2 border-white mr-7 h-12 w-12"
                                                                                            alt="Logo" />
                                                                                        <div>
                                                                                            <h1
                                                                                                class="text-white text-xs font-semibold">
                                                                                                @if ($card_detail->first_name == 1)
                                                                                                    {{ $invites['inviteFrom'][0]['first_name'] }}
                                                                                                @endif
                                                                                                @if ($card_detail->sur_name == 1)
                                                                                                    {{ $invites['inviteFrom'][0]['sur_name'] }}
                                                                                                @endif
                                                                                            </h1>
                                                                                            <h2
                                                                                                class="text-heading-white text-opacity-25 font-medium text-xs">
                                                                                                <span>@</span>{{ $invites['inviteFrom'][0]['player_user_name'] }}
                                                                                            </h2>
                                                                                            @if ($card_detail->rating == 1)
                                                                                                <div class="flex items-center">
                                                                                                    <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                                                                        fill="currentColor"
                                                                                                        viewBox="0 0 20 20"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                                                                        fill="currentColor"
                                                                                                        viewBox="0 0 20 20"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                                                                        fill="currentColor"
                                                                                                        viewBox="0 0 20 20"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                                                                        fill="currentColor"
                                                                                                        viewBox="0 0 20 20"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                                                                        fill="currentColor"
                                                                                                        viewBox="0 0 20 20"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    <h1
                                                                                                        class="text-xxs text-rating-yellow">
                                                                                                        &nbsp
                                                                                                        5.0</h1>
                                                                                                </div>
                                                                                            @endif
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="pt-2">
                                                                                <h1
                                                                                    class="text-white text-sm font-bold uppercase">
                                                                                    Hire</h1>
                                                                                <div class="rounded-3xl mt-2 p-2 border-2">
                                                                                    <a href="#"
                                                                                        class="flex items-center">
                                                                                        <img src="{{ URL::asset($invites['inviteTo'][0]['profile_image']) }}"
                                                                                            class="rounded-full border-2 border-white mr-7 h-12 w-12"
                                                                                            alt="Logo" />
                                                                                        <div>
                                                                                            <h1
                                                                                                class="text-white text-xs font-semibold">
                                                                                                @if ($card_detail->first_name == 1)
                                                                                                    {{ $invites['inviteTo'][0]['first_name'] }}
                                                                                                @endif
                                                                                                @if ($card_detail->sur_name == 1)
                                                                                                    {{ $invites['inviteTo'][0]['sur_name'] }}
                                                                                                @endif
                                                                                            </h1>
                                                                                            <h2
                                                                                                class="text-heading-white text-opacity-25 font-medium text-xs">
                                                                                                <span>@</span>{{ $invites['inviteTo'][0]['player_user_name'] }}
                                                                                            </h2>
                                                                                            @if ($card_detail->rating == 1)
                                                                                                <div class="flex items-center">
                                                                                                    <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                                                                        fill="currentColor"
                                                                                                        viewBox="0 0 20 20"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                                                                        fill="currentColor"
                                                                                                        viewBox="0 0 20 20"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                                                                        fill="currentColor"
                                                                                                        viewBox="0 0 20 20"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                                                                        fill="currentColor"
                                                                                                        viewBox="0 0 20 20"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                                                                        fill="currentColor"
                                                                                                        viewBox="0 0 20 20"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    <h1
                                                                                                        class="text-xxs text-rating-yellow">
                                                                                                        &nbsp
                                                                                                        5.0</h1>
                                                                                                </div>
                                                                                            @endif
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="pt-2 ">
                                                                                <h1
                                                                                    class="text-white text-xs font-bold uppercase">
                                                                                    Date</h1>
                                                                                <div class="mt-2">
                                                                                    <input type="text"
                                                                                        class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2 placeholder-border-gray text-border-gray "
                                                                                        placeholder="DD/MM/YY">
                                                                                </div>
                                                                            </div>
                                                                            <div class="pt-2 ">
                                                                                <h1
                                                                                    class="text-white text-xs font-bold uppercase">
                                                                                    time</h1>
                                                                                <div class="mt-2">
                                                                                    <input type="text"
                                                                                        class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2.5 placeholder-border-gray text-border-gray "
                                                                                        placeholder="Use current location">
                                                                                </div>
                                                                            </div>
                                                                            <div class="pt-2 ">
                                                                                <h1
                                                                                    class="text-white text-xs font-bold uppercase">
                                                                                    stadium</h1>
                                                                                <div class="mt-2">
                                                                                    <input type="text"
                                                                                        class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2.5 placeholder-border-gray text-border-gray "
                                                                                        placeholder="Al-Had Stadium">
                                                                                </div>
                                                                            </div>
                                                                            <div class="pt-2 ">
                                                                                <h1
                                                                                    class="text-white text-xs font-bold uppercase">
                                                                                    player price</h1>
                                                                                <div class="mt-2">
                                                                                    <input type="text"
                                                                                        class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2.5 placeholder-border-gray text-border-gray "
                                                                                        placeholder="$10">
                                                                                </div>
                                                                            </div>
                                                                            <div class="pt-2 ">
                                                                                <h1
                                                                                    class="text-white text-xs font-bold uppercase">
                                                                                    invitation fee</h1>
                                                                                <div class="mt-2">
                                                                                    <input type="text"
                                                                                        class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2.5 placeholder-border-gray text-border-gray "
                                                                                        placeholder="$104">
                                                                                </div>
                                                                            </div>
                                                                            <div class="pt-2 ">
                                                                                <h1
                                                                                    class="text-white text-xs font-bold uppercase">
                                                                                    total</h1>
                                                                                <div class="mt-2">
                                                                                    <input type="text"
                                                                                        class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2.5 placeholder-border-gray text-border-gray "
                                                                                        placeholder="$140">
                                                                                </div>
                                                                            </div>
                                                                            <div class="py-6">
                                                                                <button
                                                                                    class="w-full text-black font-bold bg-white uppercase text-sm px-6 py-3 rounded-full mr-1 mb-1 ease-linear transition-all duration-150"
                                                                                    type="button"
                                                                                    onclick="toggleModal('profilemodal-id')">
                                                                                    Ok
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="hidden opacity-25 fixed inset-0 z-40 bg-black"
                                                                id="profilemodal-id-backdrop"></div>
                                                            <!--Profile model ends-->
                                                        @endforeach
                                                    @else
                                                        <div class="rounded-3xl relative h-[13.813rem] xl:w-80 px-4 py-9 bg-cover bg-center">
                                                            <div class="my-3">
                                                                <div class="px-3 py-3">
                                                                    <h1
                                                                        class="uppercase text-black text-sm font-semibold tracking-wide text-center">
                                                                        No such data match</h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hidden bg-teal-700 rounded-3xl py-5 h-96" id="second">
                                            <h1>Map Tab</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden" id="tab-settings" >
                                    <div class="px-2 pt-2 pb-6">
                                        <div class="flex space-x-2 justify-end">
                                            <div class="flex space-x-0.5">
                                                {{-- <button type="button"
                                                    class="px-4 py-1 text-sm font-bold text-black bg-white border border-gray-200 rounded-md focus:z-10 ">
                                                    Map
                                                </button>
                                                <button type="button"
                                                    class="px-4 py-1 text-sm font-bold text-black bg-white border border-gray-200 rounded-md focus:z-10 ">
                                                    Grid
                                                </button> --}}
                                                <ul id="tabs-map-grid-hire" class="flex space-x-0.5">
                                                    <li
                                                        class="px-4 py-1 text-sm font-bold bg-white border border-gray-200 rounded-md focus:z-10">
                                                        <a id="defaulty-tab" href="#third">Grid</a>
                                                    </li>
                                                    <li
                                                        class="px-4 py-1 text-sm font-bold bg-white border border-gray-200 rounded-md focus:z-10">
                                                        <a href="#fourth">Map</a>
                                                    </li>
                                                </ul>
                                                <button onclick="openDropdownHire(event,'exportdropdown-id-hire')"
                                                    class="ease-linear transition-all duration-150 text-white bg-export-btn font-medium w-[7.3rem] rounded-lg text-sm px-3 py-1 text-center inline-flex items-center">
                                                    <img src="{{ asset('assets/images/Icons - Navigation icon (12 states).svg') }}"
                                                        class="mr-2" />Export
                                                    <img src="{{asset('assets/images/Polygon 9.svg')}}" class="ml-2" /></button>
                                                    <div id="exportdropdown-id-hire" class="hidden bg-export-btn rounded-b-lg p-1 text-center w-[7.3rem] export-style">
                                                        <ul class="flex flex-col gap-y-2">
                                                            <li>
                                                                <a href="{{Route('admin.invitation.management.generate.pdf.hire')}}" class="text-white font-medium uppercase text-xs ml-2">PDF</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{Route('admin.invitation.management.generate.word.hire')}}" class="text-white font-medium uppercase text-xs ml-2">Docx</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            <img src="{{ asset('assets/images/Path 303.svg') }}" class="mr-1"
                                                    alt="Logo" />
                                        </div>
                                    </div>
                                    <div id="tab-content">
                                        <div class="bg-white rounded-3xl py-5" id="third">
                                            <div>
                                                <div class="px-4 pt-3 flex space-x-2 items-center">
                                                    <img src="{{ asset('assets/images/calendar-icon.svg') }}"
                                                        alt="">
                                                    <h1 class="text-sm text-black font-bold uppercase">
                                                        {{ \Carbon\Carbon::today()->format('d-m-Y') }}</h1>
                                                </div>
                                                <div class="pt-1 flex space-x-2 items-center">
                                                    <img src="{{ asset('assets/images/time-icon.svg') }}"
                                                        alt="">
                                                    <h1 class="text-sm text-black font-medium uppercase">
                                                        {{ \Carbon\Carbon::now()->toTimeString() }}</h1>
                                                </div>
                                            </div>
                                            <div class="py-3 px-3 xl:px-12">
                                                <h1 class="uppercase text-black text-sm font-semibold tracking-wide">
                                                    Total Hire ({{ $hire_count }})</h1>
                                            </div>
                                            <div class="px-3 py-3 xl:px-12 md:py-3">
                                                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-2 xl:gap-4 2xl:gap-8 xl:justify-items-center">
                                                    @if (count($hire) > 0)
                                                        @foreach ($hire as $hires)
                                                            <div class="rounded-3xl h-[13.813rem] xl:w-80 px-4 py-9 bg-cover bg-center"
                                                                style="background-image: url('{{ asset('assets/images/small-gold.png') }}');"
                                                                onclick="toggleModal('profilemodal-id-hire{{ $hires->id }}')">
                                                                <div class="flex justify-between">
                                                                    <div>
                                                                        <a href="#" class="flex items-center">
                                                                            <img src="{{ URL::asset($hires['hireTo'][0]['profile_image']) }}"
                                                                                class="rounded-full border-2 border-black mr-3 h-14 w-14"
                                                                                alt="Logo" />
                                                                            <span class="self-center">
                                                                                <h1
                                                                                    class="text-black text-sm font-semibold">
                                                                                    @if ($card_detail->first_name == 1)
                                                                                        {{  $hires['hireTo'][0]['first_name'] }}
                                                                                    @endif
                                                                                    @if ($card_detail->sur_name == 1)
                                                                                        {{  $hires['hireTo'][0]['sur_name'] }}
                                                                                    @endif
                                                                                </h1>
                                                                                <h2
                                                                                    class="text-gray-heading font-medium text-sm">
                                                                                    <span>@</span>{{  $hires['hireTo'][0]['player_user_name'] }}
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
                                                                    <div class="text-center">
                                                                        <small
                                                                            class="text-black font-normal tracking-wide">Position</small>
                                                                            @if ($card_detail->position == 1)
                                                                                <h2
                                                                                    class="text-border-gray font-medium text-xs tracking-wider">
                                                                                    {{ $hires['hireTo'][0]['position']['name'] }}
                                                                                </h2>
                                                                            @endif

                                                                    </div>
                                                                </div>
                                                                <hr class="mt-12 text-heading-white">
                                                                <div class="mt-2">
                                                                    <a href="#" class="flex items-start">
                                                                        <img src="{{ asset('assets/images/black-location.svg') }}"
                                                                            class="mr-1" alt="Logo" />
                                                                        <div>
                                                                            @if ($card_detail->location == 1)
                                                                                <h1 class="text-black capitalize text-xs">
                                                                                    Jabar Al-Ahmed Al-Sabah
                                                                                    international stadium</h1>
                                                                            @endif
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!--Profile model starts-->
                                                            <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                                                id="profilemodal-id-hire{{ $hires->id }}">
                                                                <div class="relative my-auto mx-auto w-72 ">
                                                                    <div
                                                                        class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-black outline-none focus:outline-none ">
                                                                        <!--header-->
                                                                        <div
                                                                            class="flex items-start justify-end px-5 pt-2 rounded-t">
                                                                            <button
                                                                                class="text-white float-right text-sm leading-none font-thin"
                                                                                onclick="toggleModal('profilemodal-id-hire{{ $hires->id }}')">
                                                                                x
                                                                            </button>
                                                                        </div>
                                                                        <!--body-->
                                                                        <div class="relative px-6 flex-auto">
                                                                            <div class="pt-2">
                                                                                <h1
                                                                                    class="text-white text-sm font-bold uppercase">
                                                                                    Hire</h1>
                                                                                <div
                                                                                    class="rounded-3xl mt-2 p-2 border-2">
                                                                                    <a href="#"
                                                                                        class="flex items-center">
                                                                                        <img src="{{ URL::asset($hires['hireTo'][0]['profile_image']) }}"
                                                                                            class="rounded-full border-2 border-white mr-7 h-12 w-12"
                                                                                            alt="Logo" />
                                                                                        <div>
                                                                                            <h1
                                                                                                class="text-white text-xs font-semibold">
                                                                                                @if ($card_detail->first_name == 1)
                                                                                                    {{ $hires['hireTo'][0]['first_name'] }}
                                                                                                @endif
                                                                                                @if ($card_detail->sur_name == 1)
                                                                                                    {{ $hires['hireTo'][0]['sur_name'] }}
                                                                                                @endif
                                                                                            </h1>
                                                                                            <h2
                                                                                                class="text-heading-white text-opacity-25 font-medium text-xs">
                                                                                                <span>@</span>{{ $hires['hireTo'][0]['player_user_name'] }}
                                                                                            </h2>
                                                                                            @if ($card_detail->location == 1)
                                                                                                <div
                                                                                                    class="flex items-center">
                                                                                                    <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                                                                        fill="currentColor"
                                                                                                        viewBox="0 0 20 20"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                                                                        fill="currentColor"
                                                                                                        viewBox="0 0 20 20"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                                                                        fill="currentColor"
                                                                                                        viewBox="0 0 20 20"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                                                                        fill="currentColor"
                                                                                                        viewBox="0 0 20 20"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                                                                        fill="currentColor"
                                                                                                        viewBox="0 0 20 20"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    <h1
                                                                                                        class="text-xxs text-rating-yellow">
                                                                                                        &nbsp
                                                                                                        5.0</h1>
                                                                                                </div>
                                                                                            @endif
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="pt-2">
                                                                                <h1
                                                                                    class="text-white text-sm font-bold uppercase">
                                                                                    Invitation</h1>
                                                                                <div
                                                                                    class="rounded-3xl mt-2 p-2 border-2">
                                                                                    <a href="#"
                                                                                        class="flex items-center">
                                                                                        <img src="{{ URL::asset($hires['hireFrom'][0]['profile_image']) }}"
                                                                                            class="rounded-full border-2 border-white mr-7 h-12 w-12"
                                                                                            alt="Logo" />
                                                                                        <div>
                                                                                            <h1
                                                                                                class="text-white text-xs font-semibold">
                                                                                                @if ($card_detail->first_name == 1)
                                                                                                    {{ $hires['hireFrom'][0]['first_name'] }}
                                                                                                @endif
                                                                                                @if ($card_detail->sur_name == 1)
                                                                                                    {{ $hires['hireFrom'][0]['sur_name'] }}
                                                                                                @endif
                                                                                            </h1>
                                                                                            <h2
                                                                                                class="text-heading-white text-opacity-25 font-medium text-xs">
                                                                                                <span>@</span>{{ $hires['hireFrom'][0]['player_user_name'] }}
                                                                                            </h2>
                                                                                            @if ($card_detail->rating == 1)
                                                                                                <div
                                                                                                    class="flex items-center">
                                                                                                    <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                                                                        fill="currentColor"
                                                                                                        viewBox="0 0 20 20"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                                                                        fill="currentColor"
                                                                                                        viewBox="0 0 20 20"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                                                                        fill="currentColor"
                                                                                                        viewBox="0 0 20 20"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                                                                        fill="currentColor"
                                                                                                        viewBox="0 0 20 20"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                                                                        fill="currentColor"
                                                                                                        viewBox="0 0 20 20"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    <h1
                                                                                                        class="text-xxs text-rating-yellow">
                                                                                                        &nbsp
                                                                                                        5.0</h1>
                                                                                                </div>
                                                                                            @endif
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="pt-2 ">
                                                                                <h1
                                                                                    class="text-white text-xs font-bold uppercase">
                                                                                    Date</h1>
                                                                                <div class="mt-2">
                                                                                    <input type="text"
                                                                                        class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2 placeholder-border-gray text-border-gray"
                                                                                        placeholder="DD/MM/YY">
                                                                                </div>
                                                                            </div>
                                                                            <div class="pt-2 ">
                                                                                <h1
                                                                                    class="text-white text-xs font-bold uppercase">
                                                                                    stadium</h1>
                                                                                <div class="mt-2">
                                                                                    <input type="text"
                                                                                        class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2.5 placeholder-border-gray text-border-gray"
                                                                                        placeholder="Al-Had Stadium">
                                                                                </div>
                                                                            </div>
                                                                            <div class="pt-2 ">
                                                                                <h1
                                                                                    class="text-white text-xs font-bold uppercase">
                                                                                    player price</h1>
                                                                                <div class="mt-2">
                                                                                    <input type="text"
                                                                                        class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2.5 placeholder-border-gray text-border-gray"
                                                                                        placeholder="$10">
                                                                                </div>
                                                                            </div>
                                                                            <div class="pt-2 ">
                                                                                <h1
                                                                                    class="text-white text-xs font-bold uppercase">
                                                                                    invitation fee</h1>
                                                                                <div class="mt-2">
                                                                                    <input type="text"
                                                                                        class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2.5 placeholder-border-gray text-border-gray"
                                                                                        placeholder="25%">
                                                                                </div>
                                                                            </div>
                                                                            <div class="pt-2 ">
                                                                                <h1
                                                                                    class="text-white text-xs font-bold uppercase">
                                                                                    total</h1>
                                                                                <div class="mt-2">
                                                                                    <input type="text"
                                                                                        class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2.5 placeholder-border-gray text-border-gray"
                                                                                        placeholder="$140">
                                                                                </div>
                                                                            </div>
                                                                            <div class="py-6">
                                                                                <button
                                                                                    class="w-full text-black font-bold bg-white uppercase text-sm px-6 py-3 rounded-full mr-1 mb-1 ease-linear transition-all duration-150"
                                                                                    type="button"
                                                                                    onclick="toggleModal('profilemodal-id')">
                                                                                    Ok
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="hidden opacity-25 fixed inset-0 z-40 bg-black"
                                                                id="profilemodal-id-backdrop"></div>
                                                            <!--Profile model ends-->
                                                        @endforeach
                                                    @else
                                                        <div class="rounded-3xl h-[13.813rem] xl:w-80 px-4 py-9 bg-cover bg-center">
                                                            <div class="my-3">
                                                                <div class="px-3 py-3">
                                                                    <h1
                                                                        class="uppercase text-black text-sm font-semibold tracking-wide text-center">
                                                                        No such data match</h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                        <div class="hidden bg-teal-700 rounded-3xl py-5 h-96" id="fourth">
                                            <h1>fourth tab</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

    {{-- bottom-5 right-3 md:inset-y-2/4 xl:right-14 2xl:right-[28rem] --}}
    <div class="fixed bottom-5 right-3 lg:inset-y-2/3 lg:right-2 2xl:right-[6.5rem]">
        <button class="bg-black text-white p-4 rounded-full ease-linear transition-all duration-150" type="button"
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
                    <button class="text-white float-right text-sm leading-none font-thin"
                        onclick="toggleModal('modal-id')">
                        x
                    </button>
                </div>
                <form action="{{ Route('admin.invitation.management.list') }}" method="get">
                    <!--body-->
                    <div class="relative px-6 flex-auto">
                        <div class="pt-2 ">
                            <h1 class="text-white text-sm font-bold uppercase">Date</h1>
                            <div class="mt-2">
                                <div class="relative items-center">
                                    <input type="text" id="invitation_start_date" autocomplete="off"
                                        name="search_by_date_added"
                                        class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray placeholder-border-gray  text-center w-full px-5 py-2.5"
                                        placeholder="Start Date">
                                    <span class="absolute top-2 right-3.5 date-icon-invitation-start">
                                        <img src="{{ asset('assets/images/white-calender-icon.svg') }}" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="relative items-center">
                                    <input type="text" id="invitation_end_date" autocomplete="off"
                                        name="search_by_date_ended"
                                        class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray placeholder-border-gray  text-center w-full px-5 py-2.5"
                                        placeholder="End Date">
                                    <span class="absolute top-2 right-3.5 date-icon-invitation-end">
                                        <img src="{{ asset('assets/images/white-calender-icon.svg') }}" alt="">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--footer-->
                    <div class="p-6 rounded-b">
                        <button
                            class="w-full text-black font-bold bg-white uppercase text-sm px-6 py-3 rounded-full mr-1 mb-1 ease-linear transition-all duration-150"
                            type="submit">
                            Apply
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/custom/script/custom_calender_picker.js') }}"></script>
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
    <!--Map grid tabs-->
    <script>
        let tabsContainer = document.querySelector("#tabs-map-grid-invitation");

        let tabTogglers = tabsContainer.querySelectorAll("#tabs-map-grid-invitation a");

        console.log(tabTogglers);

        tabTogglers.forEach(function (toggler) {
            toggler.addEventListener("click", function (e) {
                e.preventDefault();

                let tabName = this.getAttribute("href");

                let tabContents = document.querySelector("#tab-contents");

                for (let i = 0; i < tabContents.children.length; i++) {

                    tabTogglers[i].parentElement.classList.remove("text-border-gray" ); tabContents.children[i].classList.remove("hidden");
                    if ("#" + tabContents.children[i].id === tabName) {
                        continue;
                    }
                    tabContents.children[i].classList.add("hidden");

                }
                e.target.parentElement.classList.add( "text-border-gray");
            });
        });
    </script>
    <script>
        let tabsContainers = document.querySelector("#tabs-map-grid-hire");

        let tabToggler = tabsContainers.querySelectorAll("#tabs-map-grid-hire a");

        console.log(tabToggler);

        tabToggler.forEach(function (toggler) {
            toggler.addEventListener("click", function (e) {
                e.preventDefault();

                let tabName = this.getAttribute("href");

                let tabContents = document.querySelector("#tab-content");

                for (let i = 0; i < tabContents.children.length; i++) {

                    tabToggler[i].parentElement.classList.remove("text-border-gray" ); tabContents.children[i].classList.remove("hidden");
                    if ("#" + tabContents.children[i].id === tabName) {
                        continue;
                    }
                    tabContents.children[i].classList.add("hidden");

                }
                e.target.parentElement.classList.add( "text-border-gray");
            });
        });
    </script>
@endsection
<!--Profile modal script-->
<script type="text/javascript">
    function toggleModal(profilemodalID) {
        document.getElementById(profilemodalID).classList.toggle("hidden");
        document.getElementById(profilemodalID + "-backdrop").classList.toggle("hidden");
        document.getElementById(profilemodalID).classList.toggle("flex");
        document.getElementById(profilemodalID + "-backdrop").classList.toggle("flex");
    }
</script>
<!--Profile modal script ends-->
