@extends('admin.layouts.app')
@section('content')
    <div class="container md:mx-auto">
        <div class="flex justify-center">
            <div class="w-11/12">
                <!--heading -->
                <div class="p-3">
                    <a href="#" class="flex items-center ">
                        <img src="{{ asset('assets/images/view-icon1.svg') }}" class="mr-1" />
                        <span>
                            <h1 class="uppercase text-white text-lg md:text-2xl font-semibold tracking-wide">photo
                            </h1>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <section class="py-6">
            <div class="container md:mx-auto">
                <div class="flex justify-center">
                    <div class="w-11/12 2xl:w-full">
                        <div class="px-2 pt-2 pb-6">
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
                                                    <button class="text-black float-right text-lg leading-none"
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
                                                        <input type="text"
                                                            class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                                            placeholder="Your account is restricted now">
                                                    </div>
                                                    <div class="p-2">
                                                        <h3 class="text-xl text-light-green font-semibold">
                                                            What happened?
                                                        </h3>
                                                        <textarea
                                                            class="resize-none h-28 appearance-none border border-border-gray border-opacity-40 text-xs rounded-xl w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                                            placeholder="Please type report message here"></textarea>
                                                    </div>
                                                    <button
                                                        class="w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full"
                                                        type="button">
                                                        report
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
                                                        class="text-white font-medium uppercase text-xs">EXCEL</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ asset('assets/images/Path 303.svg') }}" class="mr-1" alt="Logo" />
                            </div>
                        </div>
                        <div class="bg-white rounded-3xl">
                            <div class="px-6 py-6 md:px-10 md:py-10">
                                <div class="border border-border-gray rounded-3xl">
                                    <div class="grid grid-cols-1 lg:grid-cols-2">
                                        <!-- caption begining -->
                                        <div class="p-4">
                                            <div class="relative">
                                                <img class="h-42 w-full rounded-3xl object-cover"
                                                    src="{{ asset('assets/images/player-photo.png') }}" alt="">
                                                <div class="absolute top-2 right-3.5">
                                                    <img src="{{ asset('assets/images/flag-icon.svg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="flex-col md:flex md:flex-row py-3">
                                                <img src="{{ asset('assets/images/avatar.png') }}"
                                                    class="rounded-full border-4 border-dark-green mr-3 h-12"
                                                    alt="Logo" />
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <span class="self-center">
                                                            <h1 class="text-black text-base font-bold">
                                                                Ahmad AlSheridah
                                                            </h1>
                                                            <h2 class="text-gray-heading font-medium text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                        </span>
                                                        <img src="{{ asset('assets/images/star-icon.svg') }}"
                                                            class=" ml-3 mb-5" alt="Logo" />
                                                    </a>
                                                    <h1 class="pr-2 text-xs mt-3 text-gray-heading">2 days
                                                        ago | 12:20 PM</h1>
                                                    <div class="py-1">
                                                        <p class="text-xs">Lorem ipsum dolor sit amet consectetur,
                                                            adipisicing elit.
                                                            Dolores accusamus aspernatur aperiam.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lg:border-l-2">
                                            <div class="px-2 pt-4 pb-2 border-b-2 flex justify-between">
                                                <h1 class="text-sm ">comments 5</h1>
                                                <div class="flex items-center">
                                                    <h1 class="text-sm">20</h1>
                                                    <img src="{{ asset('assets/images/like (1).svg') }}"
                                                        class="ml-1 mb-1" alt="Logo" />
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div class="space-y-4 h-[28rem] 2xl:h-[32rem] overflow-y-auto">
                                                    <div class="w-auto">
                                                        <div class="flex">
                                                            <div class="">
                                                                <img src="{{ asset('assets/images/avatar.png') }}"
                                                                    class="rounded-full border-2 object-cover border-dark-green mr-2 h-8 md:h-10"
                                                                    alt="Logo" />
                                                            </div>
                                                            <div class="grow">
                                                                <div class="flex flex-col">
                                                                    <a href="#"
                                                                        class="static md:relative flex items-center">
                                                                        <h1 class="text-black text-base font-bold">
                                                                            Ahmad
                                                                        </h1>
                                                                        <img src="{{ asset('assets/images/comment-dot.svg') }}"
                                                                            class="mx-2" alt="">
                                                                        <h2 class="text-gray-heading text-xs font-medium">
                                                                            @Ahmad1234
                                                                        </h2>
                                                                        <h1
                                                                            class="hidden md:block md:absolute md:top-0.5 md:right-0 pr-2 text-xs text-gray-heading">
                                                                            2 days
                                                                            ago | 12:20 PM</h1>
                                                                    </a>
                                                                    <h1 class="md:hidden text-xs text-gray-heading">
                                                                        2 days
                                                                        ago | 12:20 PM</h1>
                                                                    <div class="py-1">
                                                                        <p class="text-xs">Lorem ipsum dolor sit
                                                                            amet consectetur.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-auto">
                                                        <div class="flex">
                                                            <img src="{{ asset('assets/images/avatar.png') }}"
                                                                class="rounded-full border-2 object-cover border-dark-green mr-2 h-8 md:h-10"
                                                                alt="Logo" />
                                                            <div class="grow">
                                                                <div class="flex flex-col">
                                                                    <a href="#"
                                                                        class="static md:relative flex items-center">
                                                                        <h1 class="text-black text-base font-bold">
                                                                            Ahmad
                                                                        </h1>
                                                                        <img src="{{ asset('assets/images/comment-dot.svg') }}"
                                                                            class="mx-2" alt="">
                                                                        <h2 class="text-gray-heading text-xs font-medium">
                                                                            @Ahmad1234
                                                                        </h2>
                                                                        <h1
                                                                            class="hidden md:block md:absolute md:top-0.5 md:right-0 pr-2 text-xs text-gray-heading">
                                                                            2 days
                                                                            ago | 12:20 PM</h1>
                                                                    </a>
                                                                    <h1 class="md:hidden text-xs text-gray-heading">
                                                                        2
                                                                        days
                                                                        ago | 12:20 PM</h1>
                                                                    <div class="py-1">
                                                                        <p class="text-xs">Lorem ipsum dolor sit
                                                                            amet consectetur. Lorem ipsum dolor sit
                                                                            amet consectetur.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-auto">
                                                        <div class="flex">
                                                            <img src="{{ asset('assets/images/avatar.png') }}"
                                                                class="rounded-full border-2 object-cover border-dark-green mr-2 h-8 md:h-10"
                                                                alt="Logo" />
                                                            <div class="grow">
                                                                <div class="flex flex-col">
                                                                    <a href="#"
                                                                        class="static md:relative flex items-center">
                                                                        <h1 class="text-black text-base font-bold">
                                                                            Ahmad
                                                                        </h1>
                                                                        <img src="{{ asset('assets/images/comment-dot.svg') }}"
                                                                            class="mx-2" alt="">
                                                                        <h2 class="text-gray-heading text-xs font-medium">
                                                                            @Ahmad1234
                                                                        </h2>
                                                                        <h1
                                                                            class="hidden md:block md:absolute md:top-0.5 md:right-0 pr-2 text-xs text-gray-heading">
                                                                            2 days
                                                                            ago | 12:20 PM</h1>
                                                                    </a>
                                                                    <h1 class="md:hidden text-xs text-gray-heading">
                                                                        2
                                                                        days
                                                                        ago | 12:20 PM</h1>
                                                                    <div class="py-1">
                                                                        <p class="text-xs">Lorem ipsum dolor sit
                                                                            amet consectetur. Lorem ipsum dolor sit
                                                                            amet consectetur. Lorem ipsum dolor sit
                                                                            amet consectetur. Lorem ipsum dolor sit
                                                                            amet consectetur.
                                                                        </p>
                                                                    </div>
                                                                    <div class="mt-2 flex">
                                                                        <img src="{{ asset('assets/images/avatar.png') }}"
                                                                            class="rounded-full border-2 object-cover border-dark-green mr-2 h-8 md:h-10"
                                                                            alt="Logo" />
                                                                        <div class="grow">
                                                                            <div class="flex flex-col">
                                                                                <a href="#"
                                                                                    class="static md:relative flex items-center">
                                                                                    <h1
                                                                                        class="text-black text-base font-bold">
                                                                                        Ahmad
                                                                                    </h1>
                                                                                    <img src="{{ asset('assets/images/comment-dot.svg') }}"
                                                                                        class="mx-2" alt="">
                                                                                    <h2
                                                                                        class="text-gray-heading text-xs font-medium">
                                                                                        @Ahmad1234
                                                                                    </h2>
                                                                                    <h1
                                                                                        class="hidden md:block md:absolute md:top-0.5 md:right-0 pr-2 text-xs text-gray-heading">
                                                                                        2 days
                                                                                        ago | 12:20 PM</h1>
                                                                                </a>
                                                                                <h1
                                                                                    class="md:hidden text-xs text-gray-heading">
                                                                                    2 days
                                                                                    ago | 12:20 PM</h1>
                                                                                <div class="py-1">
                                                                                    <p class="text-xs">Lorem
                                                                                        ipsum dolor
                                                                                        sit
                                                                                        amet consectetur. Lorem
                                                                                        ipsum
                                                                                        dolor sit
                                                                                        amet consectetur. Lorem
                                                                                        ipsum
                                                                                        dolor sit
                                                                                        amet consectetur. Lorem
                                                                                        ipsum
                                                                                        dolor sit
                                                                                        amet consectetur.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-auto">
                                                        <div class="flex">
                                                            <img src="{{ asset('assets/images/avatar.png') }}"
                                                                class="rounded-full border-2 object-cover border-dark-green mr-2 h-8 md:h-10"
                                                                alt="Logo" />
                                                            <div class="grow">
                                                                <div class="flex flex-col">
                                                                    <a href="#"
                                                                        class="static md:relative flex items-center">
                                                                        <h1 class="text-black text-base font-bold">
                                                                            Ahmad
                                                                        </h1>
                                                                        <img src="{{ asset('assets/images/comment-dot.svg') }}"
                                                                            class="mx-2" alt="">
                                                                        <h2 class="text-gray-heading text-xs font-medium">
                                                                            @Ahmad1234
                                                                        </h2>
                                                                        <h1
                                                                            class="hidden md:block md:absolute md:top-0.5 md:right-0 pr-2 text-xs text-gray-heading">
                                                                            2 days
                                                                            ago | 12:20 PM</h1>
                                                                    </a>
                                                                    <h1 class="md:hidden text-xs text-gray-heading">
                                                                        2
                                                                        days
                                                                        ago | 12:20 PM</h1>
                                                                    <div class="py-1">
                                                                        <p class="text-xs">Lorem ipsum dolor sit
                                                                            amet consectetur.
                                                                        </p>
                                                                    </div>
                                                                    <h1 class="mt-2 text-xs text-gray-heading">view
                                                                        2
                                                                        replies</h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-auto">
                                                        <div class="flex">
                                                            <img src="{{ asset('assets/images/avatar.png') }}"
                                                                class="rounded-full border-2 object-cover border-dark-green mr-2 h-8 md:h-10"
                                                                alt="Logo" />
                                                            <div class="grow">
                                                                <div class="flex flex-col">
                                                                    <a href="#"
                                                                        class="static md:relative flex items-center">
                                                                        <h1 class="text-black text-base font-bold">
                                                                            Ahmad
                                                                        </h1>
                                                                        <img src="{{ asset('assets/images/comment-dot.svg') }}"
                                                                            class="mx-2" alt="">
                                                                        <h2 class="text-gray-heading text-xs font-medium">
                                                                            @Ahmad1234
                                                                        </h2>
                                                                        <h1
                                                                            class="hidden md:block md:absolute md:top-0.5 md:right-0 pr-2 text-xs text-gray-heading">
                                                                            2 days
                                                                            ago | 12:20 PM</h1>
                                                                    </a>
                                                                    <h1 class="md:hidden text-xs text-gray-heading">
                                                                        2
                                                                        days
                                                                        ago | 12:20 PM</h1>
                                                                    <div class="py-1">
                                                                        <p class="text-xs">Lorem ipsum dolor sit
                                                                            amet consectetur.
                                                                        </p>
                                                                    </div>
                                                                    <h1 class="mt-2 text-xs text-gray-heading">view
                                                                        2
                                                                        replies</h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-auto">
                                                        <div class="flex">
                                                            <img src="{{ asset('assets/images/avatar.png') }}"
                                                                class="rounded-full border-2 object-cover border-dark-green mr-2 h-8 md:h-10"
                                                                alt="Logo" />
                                                            <div class="grow">
                                                                <div class="flex flex-col">
                                                                    <a href="#"
                                                                        class="static md:relative flex items-center">
                                                                        <h1 class="text-black text-base font-bold">
                                                                            Ahmad
                                                                        </h1>
                                                                        <img src="{{ asset('assets/images/comment-dot.svg') }}"
                                                                            class="mx-2" alt="">
                                                                        <h2 class="text-gray-heading text-xs font-medium">
                                                                            @Ahmad1234
                                                                        </h2>
                                                                        <h1
                                                                            class="hidden md:block md:absolute md:top-0.5 md:right-0 pr-2 text-xs text-gray-heading">
                                                                            2 days
                                                                            ago | 12:20 PM</h1>
                                                                    </a>
                                                                    <h1 class="md:hidden text-xs text-gray-heading">
                                                                        2
                                                                        days
                                                                        ago | 12:20 PM</h1>
                                                                    <div class="py-1">
                                                                        <p class="text-xs">Lorem ipsum dolor sit
                                                                            amet consectetur. Lorem ipsum dolor sit
                                                                            amet consectetur. Lorem ipsum dolor sit
                                                                            amet consectetur. Lorem ipsum dolor sit
                                                                            amet consectetur.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-auto">
                                                        <div class="flex">
                                                            <img src="{{ asset('assets/images/avatar.png') }}"
                                                                class="rounded-full border-2 object-cover border-dark-green mr-2 h-8 md:h-10"
                                                                alt="Logo" />
                                                            <div class="grow">
                                                                <div class="flex flex-col">
                                                                    <a href="#"
                                                                        class="static md:relative flex items-center">
                                                                        <h1 class="text-black text-base font-bold">
                                                                            Ahmad
                                                                        </h1>
                                                                        <img src="{{ asset('assets/images/comment-dot.svg') }}"
                                                                            class="mx-2" alt="">
                                                                        <h2 class="text-gray-heading text-xs font-medium">
                                                                            @Ahmad1234
                                                                        </h2>
                                                                        <h1
                                                                            class="hidden md:block md:absolute md:top-0.5 md:right-0 pr-2 text-xs text-gray-heading">
                                                                            2 days
                                                                            ago | 12:20 PM</h1>
                                                                    </a>
                                                                    <h1 class="md:hidden text-xs text-gray-heading">
                                                                        2
                                                                        days
                                                                        ago | 12:20 PM</h1>
                                                                    <div class="py-1">
                                                                        <p class="text-xs">Lorem ipsum dolor sit
                                                                            amet consectetur. Lorem ipsum dolor sit
                                                                            amet consectetur. Lorem ipsum dolor sit
                                                                            amet consectetur. Lorem ipsum dolor sit
                                                                            amet consectetur.
                                                                        </p>
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
            </div>
        </section>
    </div>
@endsection
