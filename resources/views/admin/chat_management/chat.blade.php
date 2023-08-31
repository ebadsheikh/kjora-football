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
                                    <button onclick="openDropdown(event,'exportdropdown-id')"
                                        class="ease-linear transition-all duration-150 text-white bg-export-btn font-medium w-[7.3rem] rounded-lg text-sm px-3 py-1 text-center inline-flex items-center">
                                        <img src="{{ asset('assets/images/Icons - Navigation icon (12 states).svg') }}"
                                            class="mr-2" />Export
                                        <img src="{{ asset('assets/images/Polygon 9.svg') }}" class="ml-2" /></button>
                                    <div id="exportdropdown-id"
                                        class="hidden bg-export-btn rounded-b-lg p-1 text-center w-[7.3rem] export-style">
                                        <ul class="flex flex-col gap-y-2 ">
                                            <li>
                                                <a href="#" class="text-white font-medium uppercase text-xs">EXCEL</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <img src="{{ asset('assets/images/Path 303.svg') }}" class="mr-1" alt="Logo" />
                            </div>
                        </div>
                        <div class="bg-heading-white bg-opacity-62 rounded-3xl">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
                                <div class="col-span-1 lg:col-span-1 p-2 ">
                                    <div class="p-2 ">
                                        <div class="mt-2 flex flex-col space-y-2 overflow-y-auto h-96">
                                            <div class="rounded-xl p-4 bg-cover bg-center"
                                                style="background-image: url('{{ asset('assets/images/bg-chat.png') }}');">
                                                <div class="flex justify-between items-center">
                                                    <div>
                                                        <a href="#" class="flex items-center">
                                                            <img src="{{ asset('assets/images/avatar.png') }}"
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
                                                        <h1 class="text-heading-white text-opacity-25 text-xs font-medium">
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
                                <div class="md:col-span-1 lg:col-span-2 md:border-l-2 border-border-gray relative">
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
                                        <button onclick="myFunction()"
                                            class="border-l-2 border-border-gray py-4 p-2 items-center"><img
                                                src="{{ asset('assets/images/search-icon.svg') }}" /></button>
                                    </div>
                                    <div class="w-full overflow-y-auto h-96 px-4 pt-4 pb-14 md:pb-8">
                                        <h1 class="text-center text-xs text-border-gray py-1">Today 01/01/2022
                                        </h1>
                                        <ul class="space-y-2">
                                            <li class="flex justify-start">
                                                <div>
                                                    <div class="block">
                                                        <div class="flex items-center space-x-2">
                                                            <img src="{{ asset('assets/images/avatar.png') }}"
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
                                                        <div class="bg-light-green px-3 py-2 rounded-lg rounded-br-none">
                                                            <h1 class="text-white text-xs">No Lorem, ipsum dolor.
                                                            </h1>
                                                        </div>
                                                        <img src="{{ asset('assets/images/avatar.png') }}"
                                                            class="rounded-full border-2 border-light-green  h-8 w-8"
                                                            alt="Logo" />
                                                    </div>
                                                    <h1 class="mt-1 text-right mr-11 text-border-gray text-xs">12:00 |
                                                        <span class="text-light-green">R</span>
                                                    </h1>
                                                </div>
                                            </li>
                                            <li class="flex justify-start">
                                                <div>
                                                    <div class="block">
                                                        <div class="flex items-center space-x-2">
                                                            <img src="{{ asset('assets/images/avatar.png') }}"
                                                                class="rounded-full border-2 border-light-green h-8 w-8"
                                                                alt="Logo" />
                                                            <div>
                                                                <div
                                                                    class="bg-white px-3 py-2 border-t rounded-lg rounded-bl-none">
                                                                    <h1 class="text-black text-xs ">..?</h1>
                                                                </div>
                                                            </div>

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
                                                        <div class="bg-light-green px-3 py-2 rounded-lg rounded-br-none">
                                                            <h1 class="text-white text-xs">No Lorem, ipsum dolor.
                                                            </h1>
                                                        </div>
                                                        <img src="{{ asset('assets/images/avatar.png') }}"
                                                            class="rounded-full border-2 border-light-green  h-8 w-8"
                                                            alt="Logo" />
                                                    </div>
                                                    <h1 class="mt-1 text-right mr-11 text-border-gray text-xs">12:00 |
                                                        <span class="text-light-green">R</span>
                                                    </h1>
                                                </div>
                                            </li>
                                            <li class="flex justify-start">
                                                <div>
                                                    <div class="block">
                                                        <div class="flex items-center space-x-2">
                                                            <img src="{{ asset('assets/images/avatar.png') }}"
                                                                class="rounded-full border-2 border-light-green h-8 w-8"
                                                                alt="Logo" />
                                                            <div>
                                                                <div
                                                                    class="bg-white px-3 py-2 border-t rounded-lg rounded-bl-none">
                                                                    <h1 class="text-black text-xs ">Lorem ipsum dolor sit.
                                                                    </h1>
                                                                </div>
                                                            </div>

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
                                                            <img src="{{ asset('assets/images/avatar.png') }}"
                                                                class="rounded-full border-2 border-light-green h-8 w-8"
                                                                alt="Logo" />
                                                            <div>
                                                                <div
                                                                    class="bg-white px-3 py-2 border-t rounded-lg rounded-bl-none">
                                                                    <h1 class="text-black text-xs ">Lorem ipsum dolor sit
                                                                        amet consectetur.</h1>
                                                                </div>
                                                            </div>

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
                                                        <div class="bg-light-green px-3 py-2 rounded-lg rounded-br-none">
                                                            <h1 class="text-white text-xs">No Lorem, ipsum dolor.
                                                            </h1>
                                                        </div>
                                                        <img src="{{ asset('assets/images/avatar.png') }}"
                                                            class="rounded-full border-2 border-light-green  h-8 w-8"
                                                            alt="Logo" />
                                                    </div>
                                                    <h1 class="mt-1 text-right mr-11 text-border-gray text-xs">12:00 |
                                                        <span class="text-light-green">R</span>
                                                    </h1>
                                                </div>
                                            </li>
                                            <li class="flex justify-end">
                                                <div>
                                                    <div class="flex items-center space-x-2">
                                                        <div class="bg-light-green px-3 py-2 rounded-lg rounded-br-none">
                                                            <h1 class="text-white text-xs">No Lorem, ipsum dolor.
                                                            </h1>
                                                        </div>
                                                        <img src="{{ asset('assets/images/avatar.png') }}"
                                                            class="rounded-full border-2 border-light-green  h-8 w-8"
                                                            alt="Logo" />
                                                    </div>
                                                    <h1 class="mt-1 text-right mr-11 text-border-gray text-xs">12:00 |
                                                        <span class="text-light-green">R</span>
                                                    </h1>
                                                </div>
                                            </li>
                                            <li class="flex justify-start">
                                                <div>
                                                    <div class="block">
                                                        <div class="flex items-center space-x-2">
                                                            <img src="{{ asset('assets/images/avatar.png') }}"
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
                                                            <img src="{{ asset('assets/images/avatar.png') }}"
                                                                class="rounded-full border-2 border-light-green h-8 w-8"
                                                                alt="Logo" />
                                                            <div>
                                                                <div
                                                                    class="bg-white px-3 py-2 border-t rounded-lg rounded-bl-none">
                                                                    <h1 class="text-black text-xs ">Lorem ipsum dolor sit
                                                                        amet consectetur.</h1>
                                                                </div>
                                                            </div>

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
                                                        <div class="bg-light-green px-3 py-2 rounded-lg rounded-br-none">
                                                            <h1 class="text-white text-xs">No Lorem, ipsum dolor.
                                                            </h1>
                                                        </div>
                                                        <img src="{{ asset('assets/images/avatar.png') }}"
                                                            class="rounded-full border-2 border-light-green  h-8 w-8"
                                                            alt="Logo" />
                                                    </div>
                                                    <h1 class="mt-1 text-right mr-11 text-border-gray text-xs">12:00 |
                                                        <span class="text-light-green">R</span>
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

    </div>
@endsection
<script>
    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
