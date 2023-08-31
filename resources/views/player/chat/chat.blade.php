@extends('player.layouts.master')
@section('content')
<div class="container md:mx-auto">
    <div class="flex justify-center">
        <div class="w-11/12">
            <!--heading -->
            <div class="p-3">
                <h1 class="uppercase text-white text-2xl md:text-6xl font-semibold tracking-wide">Chat
                </h1>
            </div>
        </div>
    </div>
    <section class="py-6">
        <div class="container md:mx-auto">
            <div class="flex justify-center">
                <div class="w-11/12 2xl:w-full">
                    <div class="bg-heading-white bg-opacity-62 rounded-3xl">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
                            <div class="col-span-1 lg:col-span-1 p-2 ">
                                <div class="px-2 ">
                                    <div class="relative">
                                        <input type="text" id="search-navbar"
                                            class="block py-3 pl-10 w-full text-gray-900 bg-white rounded-full border border-gray-300 sm:text-sm outline-none"
                                            placeholder="Search or start chat..">
                                        <img class="absolute left-3 top-3"
                                            src="{{asset('assets/images/search-icon.svg')}}" />
                                    </div>
                                    <div class="mt-2 flex flex-col space-y-2 scroll overflow-y-auto h-96">
                                        <div class="rounded-xl relative p-4 bg-cover bg-center"
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
                                            <div class="flex justify-between items-center mt-2">
                                                <h1 class="text-white text-xs font-normal">Everyone is
                                                    waiting</h1>
                                                    <img src="{{asset('assets/images/trash-round.svg')}}"/>
                                            </div>
                                            <div class="absolute top-1 right-1">
                                                <h1 class="text-light-green px-2 py-1 bg-white rounded-full text-xs font-medium">5</h1>
                                            </div>
                                        </div>
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
                                            <div class="flex justify-between items-center mt-2">
                                                <h1 class="text-white text-xs font-normal">Sure</h1>
                                                    <img src="{{asset('assets/images/trash-round.svg')}}"/>
                                            </div>
                                        </div>
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
                                            <div class="flex justify-between items-center mt-2">
                                                <h1 class="text-white text-xs font-normal">Everyone is
                                                    waiting</h1>
                                                    <img src="{{asset('assets/images/trash-round.svg')}}"/>
                                            </div>
                                        </div>
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
                                            <div class="flex justify-between items-center mt-2">
                                                <h1 class="text-white text-xs font-normal">Everyone is
                                                    waiting</h1>
                                                    <img src="{{asset('assets/images/trash-round.svg')}}"/>
                                            </div>
                                        </div>
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
                                            <div class="flex justify-between items-center mt-2">
                                                <h1 class="text-white text-xs font-normal">Everyone is
                                                    waiting</h1>
                                                    <img src="{{asset('assets/images/trash-round.svg')}}"/>
                                            </div>
                                        </div>
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
                                            <div class="flex justify-between items-center mt-2">
                                                <h1 class="text-white text-xs font-normal">Everyone is
                                                    waiting</h1>
                                                    <img src="{{asset('assets/images/trash-round.svg')}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="md:col-span-1 lg:col-span-2 md:border-l-2 border-border-gray">
                                <div class="relative h-16 border-t-2 md:border-t-0 border-b-2 border-border-gray flex items-center">
                                    <div class="p-2 flex absolute left-0 z-0">
                                        <a href="#" class="flex items-center">
                                            <img src="{{ asset('assets/images/avatar.png') }}"
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
                                    <div class="grow z-40 mx-2">
                                        <input id="myDIV"
                                            class=" outline-none hidden border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3  placeholder-dark-gray placeholder-opacity-40"
                                            type="text" placeholder="Search..">
                                    </div>
                                    <div class="border-l-2 border-border-gray p-2 flex space-x-4 items-center">
                                        <button onclick="myFunction()" ><img
                                                src="{{ asset('assets/images/search-icon.svg') }}" /></button>
                                        <img src="{{asset('assets/images/empty-flag.svg')}}" />
                                    </div>
                                </div>
                                <div class="w-full overflow-y-auto scroll h-96 px-4 pt-4 pb-14 md:pb-8">
                                    <h1 class="text-center text-xs text-border-gray py-1">Today 01/01/2022
                                    </h1>
                                    <ul class="space-y-2">
                                        <li class="flex justify-start">
                                            <div>
                                                <div class="block">
                                                    <div class="flex items-center space-x-2">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green h-8 w-8"
                                                            alt="Logo" />
                                                        <div>
                                                            <div
                                                                class="bg-white px-3 py-2 border-t rounded-lg rounded-bl-none">
                                                                <h1 class="text-black text-xs ">Hey <br>Are
                                                                    you
                                                                    there?</h1>
                                                            </div>
                                                        </div>
                                                        <img src="{{asset('assets/images/send-icon2.svg')}}" alt="">
                                                    </div>
                                                    <h1 class="mt-1 ml-10 text-border-gray text-xs">
                                                        12:00 | <span class="text-light-green">R</span>
                                                    </h1>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex justify-end">
                                            <div>
                                                <div class="flex items-center space-x-2">
                                                    <div
                                                        class="bg-light-green px-3 py-2 rounded-lg rounded-br-none">
                                                        <h1 class="text-white text-xs">No Lorem, ipsum dolor.
                                                        </h1>
                                                    </div>
                                                    <img src="/assets/images/more-icon.svg')}}" alt="">
                                                </div>
                                                <h1 class="mt-1 text-right mr-3 text-border-gray text-xs">12:00
                                                    |
                                                    <span class="text-light-green">R</span>
                                                </h1>
                                            </div>
                                        </li>
                                        <li class="flex justify-start">
                                            <div>
                                                <div class="block">
                                                    <div class="flex items-center space-x-2">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green h-8 w-8"
                                                            alt="Logo" />
                                                        <div>
                                                            <div
                                                                class="bg-white px-3 py-2 border-t rounded-lg rounded-bl-none">
                                                                <h1 class="text-black text-xs ">..?</h1>
                                                            </div>
                                                        </div>
                                                        <img src="/assets/images/send-icon2.svg')}}" alt="">
                                                    </div>
                                                    <h1 class="mt-1 ml-10 text-border-gray text-xs">
                                                        12:00 | <span class="text-light-green">R</span>
                                                    </h1>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex justify-end">
                                            <div>
                                                <div class="flex items-center space-x-2">
                                                    <div
                                                        class="bg-light-green px-3 py-2 rounded-lg rounded-br-none">
                                                        <h1 class="text-white text-xs">JK, I'm on my way
                                                        </h1>
                                                    </div>
                                                    <img src="/assets/images/more-icon.svg')}}" alt="">
                                                </div>
                                                <h1 class="mt-1 text-right mr-3 text-border-gray text-xs">12:00
                                                    |
                                                    <span class="text-light-green">R</span>
                                                </h1>
                                            </div>
                                        </li>
                                        <li class="flex justify-start">
                                            <div>
                                                <div class="block">
                                                    <div class="flex items-center space-x-2">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green h-8 w-8"
                                                            alt="Logo" />
                                                        <div>
                                                            <div
                                                                class="bg-white px-3 py-2 border-t rounded-lg rounded-bl-none">
                                                                <h1 class="text-black text-xs ">Lorem ipsum
                                                                    dolor sit.</h1>
                                                            </div>
                                                        </div>
                                                        <img src="/assets/images/send-icon2.svg')}}" alt="">
                                                    </div>
                                                    <h1 class="mt-1 ml-10 text-border-gray text-xs">
                                                        12:00 | <span class="text-light-green">R</span>
                                                    </h1>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex justify-start">
                                            <div>
                                                <div class="block">
                                                    <div class="flex items-center space-x-2">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green h-8 w-8"
                                                            alt="Logo" />
                                                        <div>
                                                            <div
                                                                class="bg-white px-3 py-2 border-t rounded-lg rounded-bl-none">
                                                                <h1 class="text-black text-xs ">Lorem ipsum
                                                                    dolor sit amet consectetur.</h1>
                                                            </div>
                                                        </div>
                                                        <img src="/assets/images/send-icon2.svg')}}" alt="">
                                                    </div>
                                                    <h1 class="mt-1 ml-10 text-border-gray text-xs">
                                                        12:00 | <span class="text-light-green">R</span>
                                                    </h1>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex justify-end">
                                            <div>
                                                <div class="flex items-center space-x-2">
                                                    <div
                                                        class="bg-light-green px-3 py-2 rounded-lg rounded-br-none">
                                                        <h1 class="text-white text-xs">Traffic
                                                        </h1>
                                                    </div>
                                                    <img src="/assets/images/more-icon.svg')}}" alt="">
                                                </div>
                                                <h1 class="mt-1 text-right mr-3 text-border-gray text-xs">12:00
                                                    |
                                                    <span class="text-light-green">R</span>
                                                </h1>
                                            </div>
                                        </li>
                                        <li class="flex justify-end">
                                            <div>
                                                <div class="flex items-center space-x-2">
                                                    <div class="bg-light-green p-1 rounded-lg rounded-br-none">
                                                        <img class="w-40"
                                                            src="{{asset('assets/images/player-photo.png')}}" alt="">
                                                    </div>
                                                    <img src="/assets/images/more-icon.svg')}}" alt="">
                                                </div>
                                                <h1 class="mt-1 text-border-gray text-xs">
                                                    02:00 | <span class="text-light-green">R</span>
                                                </h1>
                                            </div>
                                        </li>
                                        <li class="flex justify-start">
                                            <div>
                                                <div class="block">
                                                    <div class="flex items-center space-x-2">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green h-8 w-8"
                                                            alt="Logo" />
                                                        <div>
                                                            <div
                                                                class="bg-white px-3 py-2 border-t rounded-lg rounded-bl-none">
                                                                <h1 class="text-black text-xs ">Hey <br>Are
                                                                    you
                                                                    there?</h1>
                                                            </div>
                                                        </div>
                                                        <img src="/assets/images/send-icon2.svg')}}" alt="">
                                                    </div>
                                                    <h1 class="mt-1 ml-10 text-border-gray text-xs">
                                                        12:00 | <span class="text-light-green">R</span>
                                                    </h1>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex justify-start">
                                            <div>
                                                <div class="block">
                                                    <div class="flex items-center space-x-2">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green h-8 w-8"
                                                            alt="Logo" />
                                                        <div>
                                                            <div
                                                                class="bg-white px-3 py-2 border-t rounded-lg rounded-bl-none">
                                                                <h1 class="text-black text-xs ">Lorem ipsum
                                                                    dolor sit amet consectetur.</h1>
                                                            </div>
                                                        </div>
                                                        <img src="/assets/images/send-icon2.svg')}}" alt="">
                                                    </div>
                                                    <h1 class="mt-1 ml-10 text-border-gray text-xs">
                                                        12:00 | <span class="text-light-green">R</span>
                                                    </h1>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex justify-end">
                                            <div>
                                                <div class="flex items-center space-x-2">
                                                    <div
                                                        class="bg-light-green px-3 py-2 rounded-lg rounded-br-none">
                                                        <h1 class="text-white text-xs">Traffic
                                                        </h1>
                                                    </div>
                                                    <img src="/assets/images/more-icon.svg')}}" alt="">
                                                </div>
                                                <h1 class="mt-1 text-right mr-3 text-border-gray text-xs">12:00
                                                    |
                                                    <span class="text-light-green">R</span>
                                                </h1>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <div class="border-border-gray border-t-2 pb-1"></div>
                                    <div class="border-border-gray border-b-2 pb-1"></div>
                                </div>
                                <div>
                                    <div class="relative">
                                        <div class="absolute top-4 left-2">
                                            <img  src="{{asset('assets/images/Icon feather-smile.png')}}" alt="">
                                        </div>
                                        <input
                                            class="rounded-b-3xl md:rounded-bl-none md:rounded-br-3xl appearance-none outline-none w-full px-10 py-3 "
                                            type="text" placeholder="Type a message....">
                                        <span class="absolute top-2 right-2">
                                            <button class="bg-black p-2 rounded-full text-white text-xs"
                                                type="button">
                                                <img src="{{asset('assets/images/send-icon.svg')}}" alt="">
                                            </button>
                                        </span>
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
