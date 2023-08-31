@extends('admin.layouts.app')
@section('content')
<div class="container md:mx-auto">
    <div class="flex justify-center">
        <div class="w-11/12">
            <!--heading -->
            <div class="p-3">
                <a href="#" class="flex items-center ">
                    <img src="{{asset('assets/images/view-icon1.svg')}}" class="mr-1" />
                    <span>
                        <h1 class="uppercase text-white text-lg md:text-2xl font-semibold tracking-wide">view
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
                                    <img src="{{asset('assets/images/flag-icon.svg')}}" />
                                </button>
                                <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                    id="modal-id">
                                    <div class="relative my-auto mx-2 md:mx-auto w-auto md:w-[23rem]">
                                        <!--content-->
                                        <div
                                            class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                            <!--header-->
                                            <div class="flex justify-end px-3 py-1 rounded-t">
                                                <button
                                                    class="text-black float-right text-lg leading-none"
                                                    onclick="toggleModal('modal-id')">
                                                    x
                                                </button>
                                            </div>
                                            <!--body-->
                                            <div class="relative px-3 pb-6">
                                                <div class="flex justify-center">
                                                    <img class="w-14 h-14" src="{{asset('assets/images/blocked.svg')}}"
                                                        alt="">
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
                                                    class="h-28 appearance-none border border-border-gray border-opacity-40 text-xs rounded-xl w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                                    placeholder="Please type report message here"></textarea>
                                                </div>
                                                <!-- <div class="p-2">
                                                    <h3 class="text-xl text-light-green font-semibold">
                                                        OOPS!!
                                                    </h3>
                                                    <p class="text-xs py-1">
                                                        Your account is restricted for 45 days. We've
                                                        temporarily limit some of your accounts feature.
                                                    </p>
                                                </div>
                                                <div class="p-2">
                                                    <h3 class="text-xl text-light-green font-semibold">
                                                        What happened?
                                                    </h3>
                                                    <p class="text-xs py-1">
                                                        Due to negative activity on your account, chat messages
                                                        are currently limited because of player-reported chat
                                                        logs.
                                                        The way out of the panalty box is to constantly
                                                        communicate
                                                        without hate speech in chat. Communication in this chat
                                                        is unavailable.
                                                        Everyone deserves respect on Kjora. If you continue
                                                        communicating this
                                                        way, you'll continue to be chat restricted and risk
                                                        account suspensions.
                                                    </p>
                                                </div> -->
                                                <button
                                                    class="w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full"
                                                    type="button">
                                                    report
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden opacity-25 fixed inset-0 z-40 bg-black"
                                    id="modal-id-backdrop"></div>
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
                            <img src="{{asset('assets/images/Path 303.svg')}}" class="mr-1" alt="Logo" />
                        </div>
                    </div>
                    <div class="bg-heading-white bg-opacity-62 rounded-3xl">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
                            <div class="col-span-1 lg:col-span-1 p-2 ">
                                <div class="p-2 ">
                                    <div class="mt-2 flex flex-col space-y-2">
                                        <div class="rounded-xl p-4 bg-cover bg-center"
                                            style="background-image: url('{{asset('assets/images/bg-chat.png')}}');">
                                            <div class="flex justify-between items-center">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-white mr-2 h-10"
                                                            alt="Logo" />
                                                        <span class="self-center">
                                                            <h1 class="text-white text-sm font-semibold">
                                                                Ahmad AlSheridah
                                                            </h1>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div>
                                                    <h1
                                                        class="text-heading-white text-opacity-25 text-xs font-medium">
                                                        2 hours</h1>
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                                <h1 class="text-white text-xs font-normal">Everyone is
                                                    waiting</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="md:col-span-1 lg:col-span-2 md:border-l-2 border-border-gray">
                                <div
                                    class=" border-t-2 md:border-t-0 border-b-2 border-border-gray flex justify-between">
                                    <div class="p-2">
                                        <a href="#" class="flex items-center">
                                            <img src="{{asset('assets/images/avatar.png')}}"
                                                class="rounded-full border-2 border-light-green mr-2 h-10"
                                                alt="Logo" />
                                            <span class="self-center">
                                                <h1 class="text-light-green text-sm font-semibold">
                                                    Ahmad AlSheridah
                                                </h1>
                                                <h2 class="text-border-gray font-medium text-sm">
                                                    @Ahmad123
                                                </h2>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="border-l-2 border-border-gray p-2 flex space-x-4 items-center">
                                        <img src="{{asset('assets/images/search-icon.svg')}}" />
                                        <img src="{{asset('assets/images/flag-icon.svg')}}" />
                                    </div>
                                </div>
                                <div class="w-full overflow-y-auto h-96 px-4 py-4 md:pb-8">
                                    <h1 class="text-center text-xs text-border-gray py-1">Today 01/01/2022
                                    </h1>
                                    <ul class="space-y-2">
                                        <li class="flex justify-start">
                                            <div>
                                                <div class="block">
                                                    <div class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-8 w-8"
                                                            alt="Logo" />
                                                        <div>
                                                            <div
                                                                class="bg-white px-3 py-2 border-t rounded-lg rounded-bl-none">
                                                                <h1 class="text-black text-xs">Hey
                                                                </h1>
                                                                <h1 class="text-black text-xs">Are
                                                                    you
                                                                    there?</h1>
                                                            </div>
                                                            <h1 class="mt-1 text-border-gray text-xs">
                                                                12:00 | <span class="text-light-green">R</span>
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex justify-end">
                                            <div>
                                                <div
                                                    class="bg-light-green px-3 py-2 rounded-lg rounded-br-none">
                                                    <h1 class="text-white text-xs">No</h1>
                                                </div>
                                                <h1 class="mt-1 text-border-gray text-xs">12:00 |
                                                    <span class="text-light-green">R</span>
                                                </h1>
                                            </div>
                                        </li>
                                        <li class="flex justify-start">
                                            <div>
                                                <div class="block">
                                                    <div class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-8 w-8"
                                                            alt="Logo" />
                                                        <div>
                                                            <div
                                                                class="bg-white px-3 py-2 border-t rounded-lg rounded-bl-none">
                                                                <h1 class="text-black text-xs">..?
                                                                </h1>
                                                            </div>
                                                            <h1 class="mt-1 text-border-gray text-xs">
                                                                12:00 | <span class="text-light-green">R</span>
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex justify-end">
                                            <div>
                                                <div
                                                    class="relative max-w-xl bg-light-green px-3 py-2 rounded-lg rounded-br-none">
                                                    <h1 class="text-white text-xs">JK! i'm on my way
                                                    </h1>
                                                </div>
                                                <h1 class="mt-1 text-border-gray text-xs">12:00 |
                                                    <span class="text-light-green">R</span>
                                                </h1>
                                            </div>
                                        </li>
                                        <li class="flex justify-start">
                                            <div>
                                                <div class="block">
                                                    <div class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-8 w-8"
                                                            alt="Logo" />
                                                        <div>
                                                            <div
                                                                class="bg-white px-3 py-2 border-t rounded-lg rounded-bl-none">
                                                                <h1 class="text-black text-xs">Ok,
                                                                    waiting</h1>
                                                            </div>
                                                            <h1 class="mt-1 text-border-gray text-xs">
                                                                12:00 | <span class="text-light-green">R</span>
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex justify-start">
                                            <div>
                                                <div class="block">
                                                    <div class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-8 w-8"
                                                            alt="Logo" />
                                                        <div>
                                                            <div
                                                                class="bg-white px-3 py-2 border-t rounded-lg rounded-bl-none">
                                                                <h1 class="text-black text-xs">Where
                                                                    are you? It's been 2 hours</h1>
                                                            </div>
                                                            <h1 class="mt-1 text-border-gray text-xs">
                                                                02:00 | <span class="text-light-green">R</span>
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex justify-end">
                                            <div>
                                                <div
                                                    class="relative max-w-xl bg-light-green px-3 py-2 rounded-lg rounded-br-none">
                                                    <span class="text-white text-xs">Traffic..</span>
                                                </div>
                                                <h1 class="mt-1 text-border-gray text-xs">
                                                    02:00 | <span class="text-light-green">R</span>
                                                </h1>
                                            </div>
                                        </li>
                                        <li class="flex justify-end">
                                            <div>
                                                <div
                                                    class="bg-light-green p-1 rounded-lg rounded-br-none">
                                                    <img class="w-40" src="{{asset('assets/images/player-photo.png')}}"
                                                        alt="">
                                                </div>
                                                <h1 class="mt-1 text-border-gray text-xs">
                                                    02:00 | <span class="text-light-green">R</span>
                                                </h1>
                                            </div>
                                        </li>
                                        <li class="flex justify-start">
                                            <div>
                                                <div class="block">
                                                    <div class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-8 w-8"
                                                            alt="Logo" />
                                                        <div>
                                                            <div
                                                                class="bg-white px-3 py-2 border-t rounded-lg rounded-bl-none">
                                                                <span>🙄</span>
                                                            </div>
                                                            <h1 class="mt-1 text-border-gray text-xs">
                                                                02:00 | <span class="text-light-green">R</span>
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex justify-start">
                                            <div>
                                                <div class="block">
                                                    <div class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-8 w-8"
                                                            alt="Logo" />
                                                        <div>
                                                            <div
                                                                class="bg-white px-3 py-2 rounded-lg rounded-bl-none">
                                                                <h1 class="text-black text-xs">Hey
                                                                </h1>
                                                                <h1 class="text-black text-xs">Are
                                                                    you
                                                                    there?</h1>
                                                            </div>
                                                            <h1 class="mt-1 text-border-gray text-xs">
                                                                12:00 | <span class="text-light-green">R</span>
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex justify-end">
                                            <div>
                                                <div
                                                    class="relative max-w-xl bg-light-green px-3 py-2 rounded-lg rounded-br-none">
                                                    <span class="text-white text-xs">Traffic..</span>
                                                </div>
                                                <h1 class="mt-1 text-border-gray text-xs">
                                                    02:00 | <span class="text-light-green">R</span>
                                                </h1>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pb-5">
                                    <div class="border-border-gray border-t-2 pb-1"></div>
                                    <div class="border-border-gray border-b-2 pb-1"></div>
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
