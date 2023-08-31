@extends('admin.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/custom/style/custom_calender_picker.css') }}">
@endsection
@section('content')
<div class="p-4 md:py-10 md:px-16 2xl:px-52">
    <div class="p-3">
        <h1 class="uppercase text-white text-2xl font-semibold tracking-wide">Chat management</h1>
    </div>
    <div class="px-2 pt-2 pb-6">
        <div class="flex space-x-2 justify-end">
            <div class="flex space-x-0.5">
                <button onclick="openDropdown(event,'exportdropdown-id')"
                    class="ease-linear transition-all duration-150 text-white bg-export-btn font-medium w-[7.3rem] rounded-lg text-sm px-3 py-1 text-center inline-flex items-center">
                    <img src="{{ asset('assets/images/Icons - Navigation icon (12 states).svg') }}"
                        class="mr-2" />Export
                <img src="{{asset('assets/images/Polygon 9.svg')}}" class="ml-2" /></button>
                <div id="exportdropdown-id" class="hidden bg-export-btn rounded-b-lg p-1 text-center w-[7.3rem] export-style">
                    <ul class="flex flex-col gap-y-2 ">
                        <li>
                            <a href="#" class="text-white font-medium uppercase text-xs ml-2">EXCEL</a>
                        </li>
                    </ul>
                </div>
            </div>
            <img src="{{ asset('assets/images/Path 303.svg') }}" class="mr-1" alt="Logo" />
        </div>
    </div>
    <section class="py-5">
        <div class="bg-white rounded-3xl py-5">
            <div class="py-3 px-12">
                <h1 class="uppercase text-black text-sm font-semibold tracking-wide">Total (7)</h1>
            </div>
            <div class="px-3 py-3 xl:px-12 md:py-3">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-4 lg:gap-2 xl:gap-4">
                    <div class="rounded-xl p-4 bg-cover bg-center"
                        style="background-image: url('{{asset('assets/images/bg-chat.png')}}');">
                        <div class="flex justify-between items-center">
                            <div>
                                {{-- its redirect to chat_management chat which we check in backend  --}}
                                <a href="{{Route('admin.chat.management.chat')}}" class="flex items-center">
                                    <img src="{{asset('assets/images/avatar.png')}}"
                                        class="rounded-full border-2 border-white mr-2 h-10"
                                        alt="Logo" />
                                    <span class="self-center">
                                        <h1 class="text-white text-sm font-semibold">
                                            Ahmad AlSheridah
                                        </h1>
                                        <h2 class="text-heading-white text-opacity-25 font-medium text-sm">
                                            @Ahmad123
                                        </h2>
                                    </span>
                                </a>
                            </div>
                            <div>
                                <h1 class="text-heading-white text-opacity-25 text-xs font-medium">2 hours
                                </h1>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="flex justify-between">
                                <h1 class="text-white text-xs font-normal">Everyone is waiting</h1>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl p-4 bg-cover bg-center"
                        style="background-image: url('{{asset('assets/images/bg-chat.png')}}');">
                        <div class="flex justify-between items-center">
                            <div>
                                {{-- its redirect to chat_management chat which we check in backend  --}}
                                <a href="{{Route('admin.chat.management.chat')}}" class="flex items-center">
                                    <img src="{{asset('assets/images/avatar.png')}}"
                                        class="rounded-full border-2 border-white mr-2 h-10"
                                        alt="Logo" />
                                    <span class="self-center">
                                        <h1 class="text-white text-sm font-semibold">
                                            Ahmad AlSheridah
                                        </h1>
                                        <h2 class="text-heading-white text-opacity-25 font-medium text-sm">
                                            @Ahmad123
                                        </h2>
                                    </span>
                                </a>
                            </div>
                            <div>
                                <h1 class="text-heading-white text-opacity-25 text-xs font-medium">2 hours
                                </h1>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="flex justify-between">
                                <h1 class="text-white text-xs font-normal">Everyone is waiting</h1>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl p-4 bg-cover bg-center"
                        style="background-image: url('{{asset('assets/images/bg-chat.png')}}');">
                        <div class="flex justify-between items-center">
                            <div>
                                {{-- its redirect to chat_management chat which we check in backend  --}}
                                <a href="{{Route('admin.chat.management.chat')}}" class="flex items-center">
                                    <img src="{{asset('assets/images/avatar.png')}}"
                                        class="rounded-full border-2 border-white mr-2 h-10"
                                        alt="Logo" />
                                    <span class="self-center">
                                        <h1 class="text-white text-sm font-semibold">
                                            Ahmad AlSheridah
                                        </h1>
                                        <h2 class="text-heading-white text-opacity-25 font-medium text-sm">
                                            @Ahmad123
                                        </h2>
                                    </span>
                                </a>
                            </div>
                            <div>
                                <h1 class="text-heading-white text-opacity-25 text-xs font-medium">2 hours
                                </h1>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="flex justify-between">
                                <h1 class="text-white text-xs font-normal">Everyone is waiting</h1>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl p-4 bg-cover bg-center"
                        style="background-image: url('{{asset('assets/images/bg-chat.png')}}');">
                        <div class="flex justify-between items-center">
                            <div>
                                {{-- its redirect to chat_management chat which we check in backend  --}}
                                <a href="{{Route('admin.chat.management.chat')}}" class="flex items-center">
                                    <img src="{{asset('assets/images/avatar.png')}}"
                                        class="rounded-full border-2 border-white mr-2 h-10"
                                        alt="Logo" />
                                    <span class="self-center">
                                        <h1 class="text-white text-sm font-semibold">
                                            Ahmad AlSheridah
                                        </h1>
                                        <h2 class="text-heading-white text-opacity-25 font-medium text-sm">
                                            @Ahmad123
                                        </h2>
                                    </span>
                                </a>
                            </div>
                            <div>
                                <h1 class="text-heading-white text-opacity-25 text-xs font-medium">2 hours
                                </h1>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="flex justify-between">
                                <h1 class="text-white text-xs font-normal">Everyone is waiting</h1>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl p-4 bg-cover bg-center"
                        style="background-image: url('{{asset('assets/images/bg-chat.png')}}');">
                        <div class="flex justify-between items-center">
                            <div>
                                {{-- its redirect to chat_management chat which we check in backend  --}}
                                <a href="{{Route('admin.chat.management.chat')}}" class="flex items-center">
                                    <img src="{{asset('assets/images/avatar.png')}}"
                                        class="rounded-full border-2 border-white mr-2 h-10"
                                        alt="Logo" />
                                    <span class="self-center">
                                        <h1 class="text-white text-sm font-semibold">
                                            Ahmad AlSheridah
                                        </h1>
                                        <h2 class="text-heading-white text-opacity-25 font-medium text-sm">
                                            @Ahmad123
                                        </h2>
                                    </span>
                                </a>
                            </div>
                            <div>
                                <h1 class="text-heading-white text-opacity-25 text-xs font-medium">2 hours
                                </h1>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="flex justify-between">
                                <h1 class="text-white text-xs font-normal">Everyone is waiting</h1>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl p-4 bg-cover bg-center"
                        style="background-image: url('{{asset('assets/images/bg-chat.png')}}');">
                        <div class="flex justify-between items-center">
                            <div>
                                {{-- its redirect to chat_management chat which we check in backend  --}}
                                <a href="{{Route('admin.chat.management.chat')}}" class="flex items-center">
                                    <img src="{{asset('assets/images/avatar.png')}}"
                                        class="rounded-full border-2 border-white mr-2 h-10"
                                        alt="Logo" />
                                    <span class="self-center">
                                        <h1 class="text-white text-sm font-semibold">
                                            Ahmad AlSheridah
                                        </h1>
                                        <h2 class="text-heading-white text-opacity-25 font-medium text-sm">
                                            @Ahmad123
                                        </h2>
                                    </span>
                                </a>
                            </div>
                            <div>
                                <h1 class="text-heading-white text-opacity-25 text-xs font-medium">2 hours
                                </h1>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="flex justify-between">
                                <h1 class="text-white text-xs font-normal">Everyone is waiting</h1>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl p-4 bg-cover bg-center"
                        style="background-image: url('{{asset('assets/images/bg-chat.png')}}');">
                        <div class="flex justify-between items-center">
                            <div>
                                {{-- its redirect to chat_management chat which we check in backend  --}}
                                <a href="{{Route('admin.chat.management.chat')}}" class="flex items-center">
                                    <img src="{{asset('assets/images/avatar.png')}}"
                                        class="rounded-full border-2 border-white mr-2 h-10"
                                        alt="Logo" />
                                    <span class="self-center">
                                        <h1 class="text-white text-sm font-semibold">
                                            Ahmad AlSheridah
                                        </h1>
                                        <h2 class="text-heading-white text-opacity-25 font-medium text-sm">
                                            @Ahmad123
                                        </h2>
                                    </span>
                                </a>
                            </div>
                            <div>
                                <h1 class="text-heading-white text-opacity-25 text-xs font-medium">2 hours
                                </h1>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="flex justify-between">
                                <h1 class="text-white text-xs font-normal">Everyone is waiting</h1>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl p-4 bg-cover bg-center"
                        style="background-image: url('{{asset('assets/images/bg-chat.png')}}');">
                        <div class="flex justify-between items-center">
                            <div>
                                {{-- its redirect to chat_management chat which we check in backend  --}}
                                <a href="{{Route('admin.chat.management.chat')}}" class="flex items-center">
                                    <img src="{{asset('assets/images/avatar.png')}}"
                                        class="rounded-full border-2 border-white mr-2 h-10"
                                        alt="Logo" />
                                    <span class="self-center">
                                        <h1 class="text-white text-sm font-semibold">
                                            Ahmad AlSheridah
                                        </h1>
                                        <h2 class="text-heading-white text-opacity-25 font-medium text-sm">
                                            @Ahmad123
                                        </h2>
                                    </span>
                                </a>
                            </div>
                            <div>
                                <h1 class="text-heading-white text-opacity-25 text-xs font-medium">2 hours
                                </h1>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="flex justify-between">
                                <h1 class="text-white text-xs font-normal">Everyone is waiting</h1>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl p-4 bg-cover bg-center"
                        style="background-image: url('{{asset('assets/images/bg-chat.png')}}');">
                        <div class="flex justify-between items-center">
                            <div>
                                {{-- its redirect to chat_management chat which we check in backend  --}}
                                <a href="{{Route('admin.chat.management.chat')}}" class="flex items-center">
                                    <img src="{{asset('assets/images/avatar.png')}}"
                                        class="rounded-full border-2 border-white mr-2 h-10"
                                        alt="Logo" />
                                    <span class="self-center">
                                        <h1 class="text-white text-sm font-semibold">
                                            Ahmad AlSheridah
                                        </h1>
                                        <h2 class="text-heading-white text-opacity-25 font-medium text-sm">
                                            @Ahmad123
                                        </h2>
                                    </span>
                                </a>
                            </div>
                            <div>
                                <h1 class="text-heading-white text-opacity-25 text-xs font-medium">2 hours
                                </h1>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="flex justify-between">
                                <h1 class="text-white text-xs font-normal">Everyone is waiting</h1>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl p-4 bg-cover bg-center"
                        style="background-image: url('{{asset('assets/images/bg-chat.png')}}');">
                        <div class="flex justify-between items-center">
                            <div>
                                {{-- its redirect to chat_management chat which we check in backend  --}}
                                <a href="{{Route('admin.chat.management.chat')}}" class="flex items-center">
                                    <img src="{{asset('assets/images/avatar.png')}}"
                                        class="rounded-full border-2 border-white mr-2 h-10"
                                        alt="Logo" />
                                    <span class="self-center">
                                        <h1 class="text-white text-sm font-semibold">
                                            Ahmad AlSheridah
                                        </h1>
                                        <h2 class="text-heading-white text-opacity-25 font-medium text-sm">
                                            @Ahmad123
                                        </h2>
                                    </span>
                                </a>
                            </div>
                            <div>
                                <h1 class="text-heading-white text-opacity-25 text-xs font-medium">2 hours
                                </h1>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="flex justify-between">
                                <h1 class="text-white text-xs font-normal">Everyone is waiting</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    <div class="fixed bottom-5 right-3 lg:inset-y-2/3 lg:right-2 2xl:right-[6.5rem]">
        <button class="bg-black text-white p-4 rounded-full ease-linear transition-all duration-150" type="button"
            onclick="toggleModal('modal-id')">
            <img class="w-5 h-5" src="{{asset('assets/images/filter-icon.svg')}}" alt="">
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
                <!--body-->
                <div class="relative px-6 pt-4 flex-auto">
                    <div class="pt-2 ">
                        <h1 class="text-white text-xs font-bold uppercase">Status</h1>
                        <div class="mt-2">
                            <div class="relative items-center">
                                <select
                                    class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-2">
                                    <option selected>Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                                <span class="absolute inset-y-4 right-3.5">
                                    <img src="{{asset('assets/images/Polygon 9.svg')}}" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 ">
                        <h1 class="text-white text-xs font-bold uppercase">Date</h1>
                        <div class="mt-2">
                            <div class="relative items-center">
                                <input type="text" id="chat_start_date" autocomplete="off" name=""
                                    class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5 placeholder-border-gray" placeholder="Start Date">
                                <span class="absolute top-2 right-3.5 date-icon-chat-start">
                                    <img src="{{asset('assets/images/white-calender-icon.svg')}}" alt="">
                                </span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="relative items-center">
                                <input type="text" id="chat_end_date" autocomplete="off" name=""
                                    class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5 placeholder-border-gray" placeholder="End Date">
                                <span class="absolute top-2 right-3.5 date-icon-chat-end">
                                    <img src="{{asset('assets/images/white-calender-icon.svg')}}" alt="">
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
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
@endsection
@section('script')
    <script src="{{ asset('assets/custom/script/custom_calender_picker.js') }}"></script>
@endsection
