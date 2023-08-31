@extends('player.layouts.master')
@section('content')
<div class="p-4 md:py-10 md:px-16 2xl:px-52">
    <div class="flex justify-center">
        <div class="w-11/12">
            <!--heading -->
            <div class="p-3">
                <h1 class="uppercase text-white text-xl md:text-5xl font-semibold tracking-wide">Payment</h1>
            </div>
            <!--Button-->
            <div>
                <a href="{{Route('player.merchant.account')}}">
                    <button
                    class="mt-6 bg-heading-white bg-opacity-62 text-black font-extrabold uppercase py-2 px-5 rounded-full ease-linear transition-all duration-150"
                    type="button">Merchant account
                </button>
                </a>
            </div>
            <div class="float-right">
                <img class="h-52 w-52" src="{{asset('assets/images/payment-graph.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
    <div class="p-4 md:pb-10 md:px-16 2xl:px-52">
                <div class="px-2 pt-2 pb-6">
                    <!-- tabs starting -->
                    <div id="payment-tabs-id">
                        <div class="rounded-full p-3 w-full bg-heading-white bg-opacity-62 ">
                            <ul class="flex justify-center space-x-4">
                                <li>
                                    <a class="uppercase text-sm md:text-base text-border-gray cursor-pointer font-medium"
                                        onclick="changeAtiveTab(event,'tab-overview')">
                                        overview
                                    </a>
                                </li>
                                <li>
                                    <a class="uppercase text-sm md:text-base text-border-gray cursor-pointer font-medium"
                                        onclick="changeAtiveTab(event,'tab-send')">
                                        send
                                    </a>
                                </li>
                                <li>
                                    <a class="uppercase text-sm md:text-base text-border-gray cursor-pointer font-medium"
                                        onclick="changeAtiveTab(event,'tab-receive')">
                                        receive
                                    </a>
                                </li>
                                <li>
                                    <a class="uppercase text-sm md:text-base text-border-gray cursor-pointer font-medium"
                                        onclick="changeAtiveTab(event,'tab-upgrade')">
                                        Upgrade
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="relative my-5 rounded">
                            <div class="tab-content tab-space">
                                <div class="block" id="tab-overview">
                                    <div>
                                        <div class="px-2 pt-4 flex space-x-2 items-center">
                                            <img src="{{asset('assets/images/white-calender-icon.svg')}}"
                                                alt="">
                                            <h1 class="text-sm text-white font-bold uppercase">6
                                                april 2022</h1>
                                        </div>
                                        <div class="px-2 pt-1 flex space-x-2 items-center">
                                            <img src="{{asset('assets/images/time-icon-white.svg')}}" alt="">
                                            <h1 class="text-sm text-white font-medium uppercase">
                                                03:00 PM</h1>
                                        </div>
                                    </div>
                                    <div class="px-2 pt-6 pb-4">
                                        <h1
                                            class="uppercase text-white text-sm font-semibold tracking-wide">
                                            Total invites (7)</h1>
                                    </div>
                                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-2 gap-y-4">
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-14"
                                                            alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Ahmad AlSheridah
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/green-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-14"
                                                            alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Ahmad AlSheridah
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/red-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-14"
                                                            alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Ahmad AlSheridah
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/green-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-14"
                                                            alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Ahmad AlSheridah
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/red-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/user-star.svg')}}"
                                                            class="rounded-full border-2 border-black mr-2 h-14" alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Upgrade
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/yellow-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-14"
                                                            alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Ahmad AlSheridah
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/green-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-14"
                                                            alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Ahmad AlSheridah
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/red-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/user-star.svg')}}"
                                                            class="rounded-full border-2 border-black mr-2 h-14" alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Upgrade
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/yellow-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden" id="tab-send">
                                    <div>
                                        <div class="px-2 pt-4 flex space-x-2 items-center">
                                            <img src="{{asset('assets/images/white-calender-icon.svg')}}"
                                                alt="">
                                            <h1 class="text-sm text-white font-bold uppercase">6
                                                april 2022</h1>
                                        </div>
                                        <div class="px-2 pt-1 flex space-x-2 items-center">
                                            <img src="{{asset('assets/images/time-icon-white.svg')}}" alt="">
                                            <h1 class="text-sm text-white font-medium uppercase">
                                                03:00 PM</h1>
                                        </div>
                                    </div>
                                    <div class="px-2 pt-6 pb-4">
                                        <h1
                                            class="uppercase text-white text-sm font-semibold tracking-wide">
                                            Total invites (7)</h1>
                                    </div>
                                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-2 gap-y-4">
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-14"
                                                            alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Ahmad AlSheridah
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/red-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-14"
                                                            alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Ahmad AlSheridah
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/red-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-14"
                                                            alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Ahmad AlSheridah
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/red-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-14"
                                                            alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Ahmad AlSheridah
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/red-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-14"
                                                            alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Ahmad AlSheridah
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/red-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-14"
                                                            alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Ahmad AlSheridah
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/red-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden" id="tab-receive">
                                    <div>
                                        <div class="px-2 pt-4 flex space-x-2 items-center">
                                            <img src="{{asset('assets/images/white-calender-icon.svg')}}"
                                                alt="">
                                            <h1 class="text-sm text-white font-bold uppercase">6
                                                april 2022</h1>
                                        </div>
                                        <div class="px-2 pt-1 flex space-x-2 items-center">
                                            <img src="{{asset('assets/images/time-icon-white.svg')}}" alt="">
                                            <h1 class="text-sm text-white font-medium uppercase">
                                                03:00 PM</h1>
                                        </div>
                                    </div>
                                    <div class="px-2 pt-6 pb-4">
                                        <h1
                                            class="uppercase text-white text-sm font-semibold tracking-wide">
                                            Total invites (7)</h1>
                                    </div>
                                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-2 gap-y-4">
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-14"
                                                            alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Ahmad AlSheridah
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/green-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-14"
                                                            alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Ahmad AlSheridah
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/green-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-14"
                                                            alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Ahmad AlSheridah
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/green-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-14"
                                                            alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Ahmad AlSheridah
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/green-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-14"
                                                            alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Ahmad AlSheridah
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/green-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/avatar.png')}}"
                                                            class="rounded-full border-2 border-light-green mr-2 h-14"
                                                            alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Ahmad AlSheridah
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/green-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden" id="tab-upgrade">
                                    <div>
                                        <div class="px-2 pt-4 flex space-x-2 items-center">
                                            <img src="{{asset('assets/images/white-calender-icon.svg')}}"
                                                alt="">
                                            <h1 class="text-sm text-white font-bold uppercase">6
                                                april 2022</h1>
                                        </div>
                                        <div class="px-2 pt-1 flex space-x-2 items-center">
                                            <img src="{{asset('assets/images/time-icon-white.svg')}}" alt="">
                                            <h1 class="text-sm text-white font-medium uppercase">
                                                03:00 PM</h1>
                                        </div>
                                    </div>
                                    <div class="px-2 pt-6 pb-4">
                                        <h1
                                            class="uppercase text-white text-sm font-semibold tracking-wide">
                                            Total invites (7)</h1>
                                    </div>
                                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-2 gap-y-4">
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/user-star.svg')}}"
                                                            class="rounded-full border-2 border-black mr-2 h-14" alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Upgrade
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/yellow-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/user-star.svg')}}"
                                                            class="rounded-full border-2 border-black mr-2 h-14" alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Upgrade
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/yellow-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/user-star.svg')}}"
                                                            class="rounded-full border-2 border-black mr-2 h-14" alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Upgrade
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/yellow-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/user-star.svg')}}"
                                                            class="rounded-full border-2 border-black mr-2 h-14" alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Upgrade
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/yellow-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/user-star.svg')}}"
                                                            class="rounded-full border-2 border-black mr-2 h-14" alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Upgrade
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/yellow-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-[2.5rem] px-4 py-5 bg-cover bg-center bg-black">
                                            <div class="flex justify-between">
                                                <div>
                                                    <a href="#" class="flex items-center">
                                                        <img src="{{asset('assets/images/user-star.svg')}}"
                                                            class="rounded-full border-2 border-black mr-2 h-14" alt="Logo" />
                                                        <span class="self-center">
                                                            <h1
                                                                class="text-light-green text-xs xl:text-sm font-semibold">
                                                                Upgrade
                                                            </h1>
                                                            <h2
                                                                class="text-white font-medium text-xs xl:text-sm">
                                                                @Ahmad123
                                                            </h2>
                                                            <h2
                                                                class="text-heading-white text-opacity-25 font-medium text-xs xl:text-sm">
                                                                05 January 2021 | 02:00 PM
                                                            </h2>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inline-flex items-center space-x-2">
                                                    <img src="{{asset('assets/images/yellow-arrow.svg')}}"
                                                        alt="Logo" />
                                                    <h1 class="text-white text-sm font-semibold">$200</h1>
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
    <script type="text/javascript">
        function changeAtiveTab(event, tabID) {
            let element = event.target;
            while (element.nodeName !== "A") {
                element = element.parentNode;
            }
            ulElement = element.parentNode.parentNode;
            aElements = ulElement.querySelectorAll("li > a");
            tabContents = document.getElementById("payment-tabs-id").querySelectorAll(".tab-content > div");
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
@endsection
