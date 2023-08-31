@extends('admin.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/custom/style/custom_calender_picker.css') }}">
@endsection
@section('content')
    <div class="p-4 md:py-10 md:px-16 2xl:px-52">
        <!--heading -->
        <div class="p-3">
            <h1 class="uppercase text-white text-2xl font-semibold tracking-wide">verification management</h1>
        </div>
        <div class="px-2 pt-2 pb-6">
            <div class="flex space-x-2 justify-end">
                    <button onclick="openDropdown(event,'exportdropdown-id')"
                        class="ease-linear transition-all duration-150 text-white bg-export-btn font-medium w-[7.3rem] rounded-lg text-sm px-3 py-1 text-center inline-flex items-center">
                        <img src="{{ asset('assets/images/Icons - Navigation icon (12 states).svg') }}"
                            class="mr-2" />Export
                        <img src="{{ asset('assets/images/Polygon 9.svg') }}" class="ml-2" /></button>
                    <div id="exportdropdown-id"
                        class="hidden bg-export-btn rounded-b-lg p-1 text-center w-[7.3rem] export-style">
                        <ul class="flex flex-col gap-y-2">
                            <li>
                                <a href="{{ Route('admin.verification.management.generate.pdf') }}"
                                    class="text-white font-medium uppercase text-xs ml-2">PDF</a>
                            </li>
                            <li>
                                <a href="{{ Route('admin.verification.management.generate.word') }}"
                                    class="text-white font-medium uppercase text-xs ml-2">Docx</a>
                            </li>
                        </ul>
                    </div>
                <img src="{{ asset('assets/images/Path 303.svg') }}" class="mr-1" alt="Logo" />
            </div>
            <section class="py-5">
                <div class="bg-white rounded-3xl py-5 ">
                    <div class="py-3 px-12">
                        <h1 class="uppercase text-black text-sm font-semibold tracking-wide">Total (7)</h1>
                    </div>
                    <div class="px-3 py-3 xl:px-12 md:py-3">
                        <div
                            class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-2 xl:gap-4 2xl:gap-8 xl:justify-items-center">
                            @if (count($verify) > 0)
                                @foreach ($verify as $verifies)
                                    @if ($verifies->membership_type == 'golden')
                                        <div class="rounded-3xl h-[13.813rem] xl:w-80 px-4 py-9 bg-cover bg-center"
                                            style="background-image: url('{{ asset('assets/images/small-gold.png') }}');">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="{{ Route('admin.verification.management.account', $verifies->id) }}"
                                                        class="flex items-center">
                                                        <img src="{{ asset('assets/images/avatar.png') }}"
                                                            class="rounded-full border-2 border-black mr-3 h-14"
                                                            alt="Logo" />
                                                        <span class="self-center">
                                                            <h1 class="text-black text-sm font-semibold">
                                                                @if ($card_detail->first_name == 1)
                                                                    {{ $verifies->first_name }}
                                                                @endif
                                                                @if ($card_detail->sur_name == 1)
                                                                    {{ $verifies->sur_name }}
                                                                @endif
                                                            </h1>
                                                            <h2 class="text-gray-heading font-medium text-sm">
                                                                <span>@</span>{{ $verifies->player_user_name }}
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
                                                                    <h1 class="text-xs text-light-green">&nbsp 5.0</h1>
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
                                                        <h1 class="text-light-green text-sm">Age</h1>

                                                            <h2 class="text-black text-sm">22</h2>
                                                        @endif
                                                    </div>
                                                    <div class="text-center">
                                                        @if ($card_detail->played == 1)
                                                        <h1 class="text-light-green text-sm">Played</h1>

                                                            <h2 class="text-black text-sm">2</h2>
                                                        @endif
                                                    </div>
                                                    <div class="text-center">
                                                        @if ($card_detail->missed == 1)
                                                        <h1 class="text-light-green text-sm">Missed</h1>

                                                            <h2 class="text-black text-sm">2</h2>
                                                        @endif
                                                    </div>
                                                    <div class="text-center">
                                                        @if ($card_detail->position == 1)
                                                        <h1 class="text-light-green text-sm">Position</h1>

                                                            <h2 class="text-black text-sm">{{ $verifies->position['name'] }}
                                                            </h2>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="text-heading-white">
                                            <div class="mt-2">
                                                <div class="flex justify-between">
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{ asset('assets/images/black-location.svg') }}"
                                                            class="mr-1" alt="Logo" />
                                                        <span class="text-black">
                                                            <div>
                                                                @if ($card_detail->location == 1)
                                                                Adailiya
                                                                @endif
                                                            </div>
                                                        </span>
                                                    </a>
                                                    @if ($verifies->status == 'Verified')
                                                        <img src="{{ asset('assets/images/verified.svg') }}" class="mr-1"
                                                            alt="Logo" />
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="rounded-3xl h-[13.813rem] xl:w-80 px-4 py-9 bg-cover bg-center"
                                            style="background-image: url('{{ asset('assets/images/small-default.png') }}');">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="{{ Route('admin.verification.management.account', $verifies->id) }}"
                                                        class="flex items-center">
                                                        <img src="{{ asset('assets/images/avatar.png') }}"
                                                            class="rounded-full border-2 border-white mr-2 h-14"
                                                            alt="Logo" />
                                                        <span class="self-center">
                                                            <h1 class="text-white text-sm font-semibold">
                                                                @if ($card_detail->first_name == 1)
                                                                    {{ $verifies->first_name }}
                                                                @endif
                                                                @if ($card_detail->sur_name == 1)
                                                                    {{ $verifies->sur_name }}
                                                                @endif
                                                            </h1>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-sm">
                                                                <span>@</span>{{ $verifies->player_user_name }}
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
                                                                    <h1 class="text-xs text-rating-yellow">&nbsp 5.0</h1>
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
                                                        <h1 class="text-heading-white text-opacity-25 text-sm">Age</h1>

                                                            <h2 class="text-white text-sm">22</h2>
                                                        @endif
                                                    </div>
                                                    <div class="text-center">
                                                        @if ($card_detail->played == 1)
                                                        <h1 class="text-heading-white text-opacity-25 text-sm">Played
                                                        </h1>

                                                            <h2 class="text-white text-sm">2</h2>
                                                        @endif
                                                    </div>
                                                    <div class="text-center">
                                                        @if ($card_detail->missed == 1)
                                                        <h1 class="text-heading-white text-opacity-25 text-sm">Missed
                                                        </h1>

                                                            <h2 class="text-white text-sm">2</h2>
                                                        @endif
                                                    </div>
                                                    <div class="text-center">
                                                        @if ($card_detail->position == 1)
                                                        <h1 class="text-heading-white text-opacity-25 text-sm">Position
                                                        </h1>

                                                            <h2 class="text-white text-sm">{{ $verifies->position['name'] }}
                                                            </h2>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="mt-2">
                                                <div class="flex justify-between">
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{ asset('assets/images/white-location.svg') }}"
                                                            class="mr-1" alt="Logo" />
                                                        <span class="text-white">
                                                            <div>
                                                                @if ($card_detail->location == 1)
                                                                Adailiya
                                                                @endif
                                                            </div>
                                                        </span>
                                                    </a>
                                                    @if ($verifies->status == 'Verified')
                                                        <img src="{{ asset('assets/images/verified.svg') }}"
                                                            class="mr-1" alt="Logo" />
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <div class="rounded-3xl px-4 py-9 bg-cover bg-center">
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
            </section>
            <div class="fixed bottom-5 right-3 lg:inset-y-2/3 lg:right-2 2xl:right-[6.5rem] ">
                <button class="bg-black text-white p-4 rounded-full ease-linear transition-all duration-150"
                    type="button" onclick="toggleModal('modal-id')">
                    <img class="w-5 h-5" src="{{ asset('assets/images/filter-icon.svg') }}" alt="">
                </button>
            </div>
            <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                id="modal-id">
                <div class="relative my-auto mx-auto w-80">
                    <!--content-->
                    <form action="{{ Route('admin.verification.management.list') }}" method="get">
                        <div
                            class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-black outline-none focus:outline-none">
                            <!--header-->
                            <div class="flex items-start justify-between px-5 pt-2 rounded-t">
                                <h3 class="text-xs text-white font-semibold">
                                    Filter by
                                </h3>
                                <button type="button" class="text-white float-right text-sm leading-none font-thin"
                                    onclick="toggleModal('modal-id')">
                                    x
                                </button>
                            </div>
                            <!--body-->
                            <div class="relative px-6 pt-4 flex-auto">
                                <div class="pt-2">
                                    <h1 class="text-white text-xs font-bold uppercase">search</h1>
                                    <div class="mt-2">
                                        <input type="text"
                                            class="border border-white bg-transparent text-sm font-medium rounded-full  text-center w-full px-5 py-2.5 placeholder-border-gray text-border-gray"
                                            placeholder="Search name or username" name="search_by_name">
                                    </div>
                                </div>
                                <div class="pt-2 ">
                                    <h1 class="text-white text-xs font-bold uppercase">Date</h1>
                                    <div class="mt-2">
                                        <div class="relative items-center">
                                            <input type="text" id="verification_start_date" autocomplete="off"
                                                name="search_by_date_added"
                                                class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5 placeholder-border-gray"
                                                placeholder="Start Date">
                                            <span class="absolute top-2 right-3.5 date-icon date-icon-verification-start">
                                                <img src="{{ asset('assets/images/white-calender-icon.svg') }}"
                                                    alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="relative items-center">
                                            <input type="text" id="verification_end_date" autocomplete="off"
                                                name="search_by_date_ended"
                                                class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5 placeholder-border-gray"
                                                placeholder="End Date">
                                            <span class="absolute top-2 right-3.5 date-icon date-icon-verification-end">
                                                <img src="{{ asset('assets/images/white-calender-icon.svg') }}"
                                                    alt="">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <h1 class="text-white text-xs font-bold uppercase">status</h1>
                                    <div class="relative items-center mt-2">
                                        <select
                                            class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-2 text-white"
                                            name="search_by_status">
                                            <option value="" selected>All Status</option>
                                            <option value="Verified">Verified</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Declined">Declined</option>
                                        </select>
                                        <span class="absolute inset-y-4 right-3.5">
                                            <img src="{{ asset('assets/images/Polygon 9.svg') }}" alt="">
                                        </span>
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
                        </div>
                    </form>
                </div>
            </div>
            <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
        </div>
    @endsection
    @section('script')
        <script type="text/javascript">
            function toggleModal(modalID) {
                document.getElementById(modalID).classList.toggle("hidden");
                document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
                document.getElementById(modalID).classList.toggle("flex");
                document.getElementById(modalID + "-backdrop").classList.toggle("flex");
            }
        </script>
        <script src="{{ asset('assets/custom/script/custom_calender_picker.js') }}"></script>
    @endsection
