@extends('admin.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/custom/style/custom_calender_picker.css') }}">
    <script src="https://kit.fontawesome.com/ae3393d1fa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/custom/style/text_editor.css') }}">
@endsection
@section('content')
    <div class="p-4 md:py-10 md:px-16 2xl:px-52">
        @include('admin.dashboard.common_heading')
        <div class="px-2 pt-2 pb-6">
            <div class="flex space-x-2 justify-end">
                <div>
                    <a href="{{ Route('admin.account.management.help') }}">
                        <img class="h-8 w-8" src="{{ asset('assets/images/icons/Help.svg') }}" alt="">
                    </a>
                </div>
                <div class="flex space-x-0.5">
                    <button onclick="openDropdown(event,'exportdropdown-id')"
                    class="ease-linear transition-all duration-150 text-white bg-export-btn font-medium w-[7.3rem] rounded-lg text-sm px-3 py-1 text-center inline-flex items-center ">
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
                <div class="px-3 py-3 md:px-12 md:py-3">
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-2 xl:gap-4 2xl:gap-8">
                        <div class="rounded-3xl border-2 border-border-gray border-opacity-40 py-9 px-4 cursor-pointer"
                            onclick="toggleModal('editmodal-id')">
                            <div class="flex items-center justify-between">
                                <div>
                                    <a href="#" class="flex items-center">
                                        <img class="mr-1" src="{{ asset('assets/images/yellow-dot.svg') }}"
                                            alt="">
                                        <h1 class="text-black text-sm font-semibold">
                                            Ticket# 2021-4635
                                        </h1>
                                    </a>
                                </div>
                                <div>
                                    <h2 class="text-gray-heading font-medium text-xxs">
                                        Asked 2 days ago
                                    </h2>
                                </div>
                            </div>
                            <div class="my-3">
                                <h1 class="text-light-green font-semibold uppercase text-base leading-tight">
                                    Ticket name</h1>
                                <p class="text-sm">Lorem ipsum dolor sit amet consectetur. dolor sit
                                    amet
                                </p>
                            </div>
                            <div class="flex justify-between items-center">
                                <div>
                                    <a href="#" class="flex items-center ">
                                        <img src="{{ asset('assets/images/ground-photo.png') }}"
                                            class="rounded-full border-2 border-white mr-2 h-9" alt="Logo" />
                                        <span class="self-center">
                                            <h2 class="text-black font-medium text-sm">Albert Jon
                                            </h2>
                                        </span>
                                    </a>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <img src="{{ asset('assets/images/message-icon.svg') }}" alt="Logo" />
                                    <span class="text-xs text-border-gray">2</span>
                                </div>
                            </div>
                        </div>
                        <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                            id="editmodal-id">
                            <div class="relative ml-auto w-72 md:w-2/5">
                                <!--content-->
                                <div
                                    class="border-0 h-screen overflow-y-auto relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                    <!--header-->
                                    <div class="flex justify-end px-3 py-1 rounded-t">
                                        <button class="text-black float-right text-lg leading-none font-normal"
                                            onclick="toggleModal('editmodal-id')">
                                            x
                                        </button>
                                    </div>
                                    <div class="relative px-6 pb-3">
                                        <div>
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <img src="{{ asset('assets/images/avatar.png') }}"
                                                        class="rounded-full border-2 border-white mr-2 h-14"
                                                        alt="Logo" />
                                                    <div>
                                                        <h1 class="text-black text-sm font-semibold">
                                                            Muneeba
                                                        </h1>
                                                        <h2 class="text-border-gray font-medium text-sm">
                                                            muneeba.admin@gmail.com
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h1 class="text-black text-xs font-semibold">12:15 pm</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <ul class="flex space-x-4">
                                                <li>
                                                    <button onclick="myFunction()"><img class="mx-auto"
                                                            src="{{ asset('assets/images/icons/reply-icon.svg') }}"
                                                            alt="">
                                                        <h1 class="text-black text-xs font-medium uppercase cursor-pointer">
                                                            reply</h1>
                                                    </button>
                                                </li>
                                                <li>
                                                    <img class="mx-auto"
                                                        src="{{ asset('assets/images/icons/forward-icon.svg') }}"
                                                        alt="">
                                                    <h1 class="text-black text-xs font-medium uppercase">
                                                        forward</h1>
                                                </li>
                                                <li>
                                                    <img class="mx-auto"
                                                        src="{{ asset('assets/images/icons/Icon feather-flag.svg') }}"
                                                        alt="">
                                                    <h1 class="text-black text-xs  font-medium uppercase">
                                                        flag</h1>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pt-5">
                                            <div>
                                                <label
                                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">status</label>
                                                <div class="relative items-center">
                                                    <select
                                                        class="appearance-none border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-8 rounded-full text-xs">
                                                        <option selected>sorted</option>
                                                        <option value="US">pending</option>
                                                        <option value="CA">unsorted</option>
                                                    </select>
                                                    <span class="absolute inset-y-5 right-3.5">
                                                        <img src="{{ asset('assets/images/drop-arrow.svg') }}"
                                                            alt="">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="pt-3">
                                                <label
                                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">subject</label>
                                                <input type="text"
                                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                                    placeholder="Ticket#2021-4635">
                                            </div>
                                            <div class="mt-3 pt-3 border h-[22rem] border-border-gray border-opacity-40 text-sm overflow-y-auto rounded-lg p-2">
                                                <p class="text-sm p-2">
                                                    Lorem ipsum dolor, sit amet consectetur adipisicing
                                                    elit. Dolores, quia accusamus odio eaque atque
                                                    temporibus praesentium labore, officiis rerum
                                                    provident explicabo vel sit veniam reiciendis.
                                                    Lorem ipsum dolor, sit amet consectetur adipisicing
                                                    elit. Dolores, quia accusamus odio eaque atque
                                                    temporibus praesentium labore, officiis rerum
                                                    provident explicabo vel sit veniam reiciendis.
                                                </p>
                                                <hr>
                                                <div class="text-blue-700 text-sm p-2">
                                                    <h1>Muneeba</h1>
                                                    <h1>Re: Issue with</h1>
                                                    <h1>To: @albertjohn</h1>
                                                    <h1>On 29 Aug 2022, at 23:42, @albertjohn wrote:</h1>
                                                    <p>ipsum dolor, sit amet consectetur adipisicing
                                                        elit. Dolores, quia accusamus odio eaque atque
                                                        temporibus praesentium labore, officiis rerum
                                                        provident explicabo vel sit veniam reiciendis.
                                                        Lorem ipsum dolor, sit amet consectetur adipisicing
                                                        elit. Dolores, quia accusamus odio eaque atque
                                                        temporibus praesentium labore, officiis rerum
                                                        provident explicabo vel sit veniam reiciendis.
                                                    </p>
                                                </div>
                                                <hr>
                                                <div class="text-blue-700 text-sm p-2">
                                                    <h1>Muneeba</h1>
                                                    <h1>Re: Issue with</h1>
                                                    <h1>To: @albertjohn</h1>
                                                    <h1>On 29 Aug 2022, at 23:42, @albertjohn wrote:</h1>
                                                    <p>ipsum dolor, sit amet consectetur adipisicing
                                                        elit. Dolores, quia accusamus odio eaque atque
                                                        temporibus praesentium labore, officiis rerum
                                                        provident explicabo vel sit veniam reiciendis.
                                                        Lorem ipsum dolor, sit amet consectetur adipisicing
                                                        elit. Dolores, quia accusamus odio eaque atque
                                                        temporibus praesentium labore, officiis rerum
                                                        provident explicabo vel sit veniam reiciendis.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="myDIV" style="display: none;">
                                            <div class="mt-3 flex items-center">
                                                <div class="flex-none w-9">
                                                    <img src="{{ asset('assets/images/icons/Icon open-plus.svg') }}"
                                                        alt="">
                                                </div>
                                                <div class="grow">
                                                    <div class="relative">
                                                        <input
                                                            class="border border-border-gray border-opacity-40 text-xs rounded-full appearance-none outline-none w-full p-3 "
                                                            type="text" placeholder="Type a message....">
                                                        <span class="absolute top-[0.3rem] right-2">
                                                            <button
                                                                class="bg-light-green p-2 rounded-full text-white text-xs"
                                                                type="button">
                                                                <img src="{{ asset('assets/images/send-icon.svg') }}"
                                                                    alt="">
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="editmodal-id-backdrop"></div>
                        <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="editmodal-id-backdrop"></div>
                        <div class="rounded-3xl border-2 border-border-gray border-opacity-40 py-9 px-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <a href="#" class="flex items-center">
                                        <img class="mr-1" src="{{ asset('assets/images/red-dot.svg') }}"
                                            alt="">
                                        <h1 class="text-black text-sm font-semibold">
                                            Ticket# 2021-4635
                                        </h1>
                                    </a>
                                </div>
                                <div>
                                    <h2 class="text-gray-heading font-medium text-xxs">
                                        Asked 2 days ago
                                    </h2>
                                </div>
                            </div>
                            <div class="my-3">
                                <h1 class="text-light-green font-semibold uppercase text-base leading-tight">
                                    Ticket name</h1>
                                <p class="text-sm">Lorem ipsum dolor sit amet consectetur. dolor sit
                                    amet
                                </p>
                            </div>
                            <div class="flex justify-between items-center">
                                <div>
                                    <a href="#" class="flex items-center ">
                                        <img src="{{ asset('assets/images/ground-photo.png') }}"
                                            class="rounded-full border-2 border-white mr-2 h-9" alt="Logo" />
                                        <span class="self-center">
                                            <h2 class="text-black font-medium text-sm">Albert Jon
                                            </h2>
                                        </span>
                                    </a>
                                </div>
                                <div class="flex space-x-2">
                                    <img src="{{ asset('assets/images/message-icon.svg') }}" alt="Logo" />
                                    <span class="text-xs text-border-gray">2</span>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-3xl border-2 border-border-gray border-opacity-40 py-9 px-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <a href="#" class="flex items-center">
                                        <img class="mr-1" src="{{ asset('assets/images/green-dot.svg') }}"
                                            alt="">
                                        <h1 class="text-black text-sm font-semibold">
                                            Ticket# 2021-4635
                                        </h1>
                                    </a>
                                </div>
                                <div>
                                    <h2 class="text-gray-heading font-medium text-xxs">
                                        Asked 2 days ago
                                    </h2>
                                </div>
                            </div>
                            <div class="my-3">
                                <h1 class="text-light-green font-semibold uppercase text-base leading-tight">
                                    Ticket name</h1>
                                <p class="text-sm">Lorem ipsum dolor sit amet consectetur. dolor sit
                                    amet
                                </p>
                            </div>
                            <div class="flex justify-between items-center">
                                <div>
                                    <a href="#" class="flex items-center ">
                                        <img src="{{ asset('assets/images/ground-photo.png') }}"
                                            class="rounded-full border-2 border-white mr-2 h-9" alt="Logo" />
                                        <span class="self-center">
                                            <h2 class="text-black font-medium text-sm">Albert Jon
                                            </h2>
                                        </span>
                                    </a>
                                </div>
                                <div class="flex space-x-2">
                                    <img src="{{ asset('assets/images/message-icon.svg') }}" alt="Logo" />
                                    <span class="text-xs text-border-gray">2</span>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-3xl border-2 border-border-gray border-opacity-40 py-9 px-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <a href="#" class="flex items-center">
                                        <img class="mr-1" src="{{ asset('assets/images/green-dot.svg') }}"
                                            alt="">
                                        <h1 class="text-black text-sm font-semibold">
                                            Ticket# 2021-4635
                                        </h1>
                                    </a>
                                </div>
                                <div>
                                    <h2 class="text-gray-heading font-medium text-xxs">
                                        Asked 2 days ago
                                    </h2>
                                </div>
                            </div>
                            <div class="my-3">
                                <h1 class="text-light-green font-semibold uppercase text-base leading-tight">
                                    Ticket name</h1>
                                <p class="text-sm">Lorem ipsum dolor sit amet consectetur. dolor sit
                                    amet
                                </p>
                            </div>
                            <div class="flex justify-between items-center">
                                <div>
                                    <a href="#" class="flex items-center ">
                                        <img src="{{ asset('assets/images/ground-photo.png') }}"
                                            class="rounded-full border-2 border-white mr-2 h-9" alt="Logo" />
                                        <span class="self-center">
                                            <h2 class="text-black font-medium text-sm">Albert Jon
                                            </h2>
                                        </span>
                                    </a>
                                </div>
                                <div class="flex space-x-2">
                                    <img src="{{ asset('assets/images/message-icon.svg') }}" alt="Logo" />
                                    <span class="text-xs text-border-gray">2</span>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-3xl border-2 border-border-gray border-opacity-40 py-9 px-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <a href="#" class="flex items-center">
                                        <img class="mr-1" src="{{ asset('assets/images/yellow-dot.svg') }}"
                                            alt="">
                                        <h1 class="text-black text-sm font-semibold">
                                            Ticket# 2021-4635
                                        </h1>
                                    </a>
                                </div>
                                <div>
                                    <h2 class="text-gray-heading font-medium text-xxs">
                                        Asked 2 days ago
                                    </h2>
                                </div>
                            </div>
                            <div class="my-3">
                                <h1 class="text-light-green font-semibold uppercase text-base leading-tight">
                                    Ticket name</h1>
                                <p class="text-sm">Lorem ipsum dolor sit amet consectetur. dolor sit
                                    amet
                                </p>
                            </div>
                            <div class="flex justify-between items-center">
                                <div>
                                    <a href="#" class="flex items-center ">
                                        <img src="{{ asset('assets/images/ground-photo.png') }}"
                                            class="rounded-full border-2 border-white mr-2 h-9" alt="Logo" />
                                        <span class="self-center">
                                            <h2 class="text-black font-medium text-sm">Albert Jon
                                            </h2>
                                        </span>
                                    </a>
                                </div>
                                <div class="flex space-x-2">
                                    <img src="{{ asset('assets/images/message-icon.svg') }}" alt="Logo" />
                                    <span class="text-xs text-border-gray">2</span>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-3xl border-2 border-border-gray border-opacity-40 py-9 px-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <a href="#" class="flex items-center">
                                        <img class="mr-1" src="{{ asset('assets/images/red-dot.svg') }}"
                                            alt="">
                                        <h1 class="text-black text-sm font-semibold">
                                            Ticket# 2021-4635
                                        </h1>
                                    </a>
                                </div>
                                <div>
                                    <h2 class="text-gray-heading font-medium text-xxs">
                                        Asked 2 days ago
                                    </h2>
                                </div>
                            </div>
                            <div class="my-3">
                                <h1 class="text-light-green font-semibold uppercase text-base leading-tight">
                                    Ticket name</h1>
                                <p class="text-sm">Lorem ipsum dolor sit amet consectetur. dolor sit
                                    amet
                                </p>
                            </div>
                            <div class="flex justify-between items-center">
                                <div>
                                    <a href="#" class="flex items-center ">
                                        <img src="{{ asset('assets/images/ground-photo.png') }}"
                                            class="rounded-full border-2 border-white mr-2 h-9" alt="Logo" />
                                        <span class="self-center">
                                            <h2 class="text-black font-medium text-sm">Albert Jon
                                            </h2>
                                        </span>
                                    </a>
                                </div>
                                <div class="flex space-x-2">
                                    <img src="{{ asset('assets/images/message-icon.svg') }}" alt="Logo" />
                                    <span class="text-xs text-border-gray">2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="fixed bottom-5 right-3 lg:inset-y-2/3 lg:right-2 2xl:right-[6.5rem]">
        <div class="flex flex-col space-y-4">
            <button class="bg-light-green text-white p-4 rounded-full ease-linear transition-all duration-150"
                type="button" onclick="toggleModal('addmodal-id')"><img class="w-5 h-5"
                    src="{{ asset('assets/images/add-icon.svg') }}" alt="">
            </button>
            <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                id="addmodal-id">
                <div class="relative my-auto mx-auto w-72 md:w-8/12">
                    <!--content-->
                    <div
                        class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                        <!--header-->
                        <div class="flex justify-end px-3 py-1 rounded-t">
                            <button class="text-black float-right text-lg leading-none font-normal"
                                onclick="toggleModal('addmodal-id')">
                                x
                            </button>
                        </div>
                        <h3 class="text-2xl text-center text-light-green font-semibold">
                            New message
                        </h3>
                        <!--body-->
                        <div class="relative p-6 ">
                            <div class="h-96 flex justify-center items-center">
                                <div onload="initDoc();" style="width: 100%;">
                                    {{-- <h3>Taken from: <a href="https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Editable_content#Differences_in_markup_generation" target="_blank">https://developer.mozilla.org/.../Editable_content</a></h3> --}}
                                    <div class=" space-y-2">
                                                <div>
                                                    <div class="relative items-center">
                                                        <h1 class="border-r border-border-gray border-opacity-40 text-xs absolute inset-y-0 left-0">To</h1>
                                                        <select class="appearance-none border-b border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-8 text-xs outline-none" name="country_id">
                                                            <option value="1">All players</option>
                                                            <option value="1">All admins</option>
                                                        </select>
                                                        <span class="absolute inset-y-5 right-3.5 ">
                                                            <img src="{{asset('assets/images/drop-arrow.svg')}}" alt="">
                                                        </span>
                                                    </div>
                                                </div>
                                        <div>
                                            <input type="text" class="border-b border-border-gray border-opacity-40 text-xs w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                                    placeholder="subject">
                                        </div>
                                    </div>
                                    <form name="compForm" method="post" action="sample.php"
                                        onsubmit="if(validateMode()){this.myDoc.value=oDoc.innerHTML;return true;}return false;" class="mt-2">
                                        <input type="hidden" name="myDoc">
                                        <div id="toolBar1">
                                            {{-- <select
                                                onchange="formatDoc('formatblock',this[this.selectedIndex].value);this.selectedIndex=0;">
                                                <option selected>- formatting -</option>
                                                <option value="h1">Title 1</option>
                                                <option value="h2">Title 2</option>
                                                <option value="h3">Title 3</option>
                                                <option value="h4">Title 4</option>
                                                <option value="h5">Title 5</option>
                                                <option value="h6">Subtitle</option>
                                                <option value="p">Paragraph</option>
                                                <option value="pre">Preformatted</option>
                                            </select> --}}


                                            {{-- <select
                                                onchange="formatDoc('backcolor',this[this.selectedIndex].value);this.selectedIndex=0;">
                                                <option class="heading" selected>- background -</option>
                                                <option value="red">Red</option>
                                                <option value="green">Green</option>
                                                <option value="black">Black</option>
                                            </select> --}}
                                        </div>
                                        <div id="toolBar2" class="flex border border-border-gray border-opacity-40 p-2 rounded-t-lg space-x-4">
                                            {{-- <select
                                                onchange="formatDoc('fontname',this[this.selectedIndex].value);this.selectedIndex=0;" class=" border border-dark-green border-opacity-40 rounded-md">
                                                <option class="heading" selected>Roboto</option>
                                                <option>Arial</option>
                                                <option>Arial Black</option>
                                                <option>Courier New</option>
                                                <option>Times New Roman</option>
                                            </select> --}}
                                            <select
                                                onchange="formatDoc('fontsize',this[this.selectedIndex].value);this.selectedIndex=0;" class=" border border-dark-green border-opacity-40 rounded-md">
                                                <option class="heading" selected>16 </option>
                                                <option value="1">8</option>
                                                <option value="2">10</option>
                                                <option value="3">14</option>
                                                <option value="4">16</option>
                                                <option value="5">20</option>
                                                <option value="6">22</option>
                                            </select>
                                            {{-- <img class="intLink" title="Clean" onclick="if(validateMode()&&confirm('Are you sure?')){oDoc.innerHTML=sDefTxt};" src="data:image/gif;base64,R0lGODlhFgAWAIQbAD04KTRLYzFRjlldZl9vj1dusY14WYODhpWIbbSVFY6O7IOXw5qbms+wUbCztca0ccS4kdDQjdTLtMrL1O3YitHa7OPcsd/f4PfvrvDv8Pv5xv///////////////////yH5BAEKAB8ALAAAAAAWABYAAAV84CeOZGmeaKqubMteyzK547QoBcFWTm/jgsHq4rhMLoxFIehQQSAWR+Z4IAyaJ0kEgtFoLIzLwRE4oCQWrxoTOTAIhMCZ0tVgMBQKZHAYyFEWEV14eQ8IflhnEHmFDQkAiSkQCI2PDC4QBg+OAJc0ewadNCOgo6anqKkoIQA7" /> --}}
                                            {{-- <img class="intLink" title="Print" onclick="printDoc();" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAABGdBTUEAALGPC/xhBQAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oEBxcZFmGboiwAAAAIdEVYdENvbW1lbnQA9syWvwAAAuFJREFUOMvtlUtsjFEUx//n3nn0YdpBh1abRpt4LFqtqkc3jRKkNEIsiIRIBBEhJJpKlIVo4m1RRMKKjQiRMJRUqUdKPT71qpIpiRKPaqdF55tv5vvusZjQTjOlseUkd3Xu/3dPzusC/22wtu2wRn+jG5So/OCDh8ycMJDflehMlkJkVK7KUYN+ufzA/RttH76zaVocDptRxzQtNi3mRWuPc+6cKtlXZ/sddP2uu9uXlmYXZ6Qm8v4Tz8lhF1H+zDQXt7S8oLMXtbF4e8QaFHjj3kbP2MzkktHpiTjp9VH6iHiA+whtAsX5brpwueMGdONdf/2A4M7ukDs1JW662+XkqTkeUoqjKtOjm2h53YFL15pSJ04Zc94wdtibr26fXlC2mzRvBccEbz2kiRFD414tKMlEZbVGT33+qCoHgha81SWYsew0r1uzfNylmtpx80pngQQ91LwVk2JGvGnfvZG6YcYRAT16GFtW5kKKfo1EQLtfh5Q2etT0BIWF+aitq4fDbk+ImYo1OxvGF03waFJQvBCkvDffRyEtxQiFFYgAZTHS0zwAGD7fG5TNnYNTp8/FzvGwJOfmgG7GOx0SAKKgQgDMgKBI0NJGMEImpGDk5+WACEwEd0ywblhGUZ4Hw5OdUekRBLT7DTgdEgxACsIznx8zpmWh7k4rkpJcuHDxCul6MDsmmBXDlWCH2+XozSgBnzsNCEE4euYV4pwCpsWYPW0UHDYBKSWu1NYjENDReqtKjwn2+zvtTc1vMSTB/mvev/WEYSlASsLimcOhOBJxw+N3aP/SjefNL5GePZmpu4kG7OPr1+tOfPyUu3BecWYKcwQcDFmwFKAUo90fhKDInBCAmvqnyMgqUEagQwCoHBDc1rjv9pIlD8IbVkz6qYViIBQGTJPx4k0XpIgEZoRN1Da0cij4VfR0ta3WvBXH/rjdCufv6R2zPgPH/e4pxSBCpeatqPrjNiso203/5s/zA171Mv8+w1LOAAAAAElFTkSuQmCC"> --}}
                                            {{-- <img class="intLink ml-1" title="Undo" onclick="formatDoc('undo');"
                                                src="data:image/gif;base64,R0lGODlhFgAWAOMKADljwliE33mOrpGjuYKl8aezxqPD+7/I19DV3NHa7P///////////////////////yH5BAEKAA8ALAAAAAAWABYAAARR8MlJq7046807TkaYeJJBnES4EeUJvIGapWYAC0CsocQ7SDlWJkAkCA6ToMYWIARGQF3mRQVIEjkkSVLIbSfEwhdRIH4fh/DZMICe3/C4nBQBADs=" />
                                            <img class="intLink" title="Redo" onclick="formatDoc('redo');"
                                                src="data:image/gif;base64,R0lGODlhFgAWAMIHAB1ChDljwl9vj1iE34Kl8aPD+7/I1////yH5BAEKAAcALAAAAAAWABYAAANKeLrc/jDKSesyphi7SiEgsVXZEATDICqBVJjpqWZt9NaEDNbQK1wCQsxlYnxMAImhyDoFAElJasRRvAZVRqqQXUy7Cgx4TC6bswkAOw==" /> --}}
                                            {{-- <img class="intLink" title="Remove formatting" onclick="formatDoc('removeFormat')" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAABGdBTUEAALGPC/xhBQAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAAd0SU1FB9oECQMCKPI8CIIAAAAIdEVYdENvbW1lbnQA9syWvwAAAuhJREFUOMtjYBgFxAB501ZWBvVaL2nHnlmk6mXCJbF69zU+Hz/9fB5O1lx+bg45qhl8/fYr5it3XrP/YWTUvvvk3VeqGXz70TvbJy8+Wv39+2/Hz19/mGwjZzuTYjALuoBv9jImaXHeyD3H7kU8fPj2ICML8z92dlbtMzdeiG3fco7J08foH1kurkm3E9iw54YvKwuTuom+LPt/BgbWf3//sf37/1/c02cCG1lB8f//f95DZx74MTMzshhoSm6szrQ/a6Ir/Z2RkfEjBxuLYFpDiDi6Af///2ckaHBp7+7wmavP5n76+P2ClrLIYl8H9W36auJCbCxM4szMTJac7Kza////R3H1w2cfWAgafPbqs5g7D95++/P1B4+ECK8tAwMDw/1H7159+/7r7ZcvPz4fOHbzEwMDwx8GBgaGnNatfHZx8zqrJ+4VJBh5CQEGOySEua/v3n7hXmqI8WUGBgYGL3vVG7fuPK3i5GD9/fja7ZsMDAzMG/Ze52mZeSj4yu1XEq/ff7W5dvfVAS1lsXc4Db7z8C3r8p7Qjf///2dnZGxlqJuyr3rPqQd/Hhyu7oSpYWScylDQsd3kzvnH738wMDzj5GBN1VIWW4c3KDon7VOvm7S3paB9u5qsU5/x5KUnlY+eexQbkLNsErK61+++VnAJcfkyMTIwffj0QwZbJDKjcETs1Y8evyd48toz8y/ffzv//vPP4veffxpX77z6l5JewHPu8MqTDAwMDLzyrjb/mZm0JcT5Lj+89+Ybm6zz95oMh7s4XbygN3Sluq4Mj5K8iKMgP4f0////fv77//8nLy+7MCcXmyYDAwODS9jM9tcvPypd35pne3ljdjvj26+H2dhYpuENikgfvQeXNmSl3tqepxXsqhXPyc666s+fv1fMdKR3TK72zpix8nTc7bdfhfkEeVbC9KhbK/9iYWHiErbu6MWbY/7//8/4//9/pgOnH6jGVazvFDRtq2VgiBIZrUTIBgCk+ivHvuEKwAAAAABJRU5ErkJggg=="> --}}
                                            <img class="intLink ml-2 " title="Bold" onclick="formatDoc('bold');"
                                                src="{{asset('assets/images/icons/bold-icon.svg')}}" />
                                            <img class="intLink " title="Italic" onclick="formatDoc('italic');"
                                                src="{{asset('assets/images/icons/italic-icon.svg')}}" />
                                            <img class="intLink " title="Underline" onclick="formatDoc('underline');"
                                                src="{{asset('assets/images/icons/underline-icon.svg')}}" />
                                            <select
                                                 onchange="formatDoc('forecolor',this[this.selectedIndex].value);this.selectedIndex=0;">
                                                <option class="heading" selected>- color -</option>
                                                <option value="red">Red</option>
                                                <option value="blue">Blue</option>
                                                <option value="green">Green</option>
                                                <option value="black">Black</option>
                                            </select>
                                            <img  src="{{asset('assets/images/icons/attatchment-icon.svg')}}" alt="">
                                            <img class="intLink " title="Hyperlink" onclick="var sLnk=prompt('Write the URL here','http:\/\/');if(sLnk&&sLnk!=''&&sLnk!='http://'){formatDoc('createlink',sLnk)}"
                                                src="{{asset('assets/images/icons/link-icon.svg')}}" />
                                            <img  src="{{asset('assets/images/icons/emoji-icon.svg')}}" alt="">
                                                {{-- <img class="intLink" title="Left align" onclick="formatDoc('justifyleft');"
                                                src="data:image/gif;base64,R0lGODlhFgAWAID/AMDAwAAAACH5BAEAAAAALAAAAAAWABYAQAIghI+py+0Po5y02ouz3jL4D4JMGELkGYxo+qzl4nKyXAAAOw==" />
                                            <img class="intLink" title="Center align"
                                                onclick="formatDoc('justifycenter');"
                                                src="data:image/gif;base64,R0lGODlhFgAWAID/AMDAwAAAACH5BAEAAAAALAAAAAAWABYAQAIfhI+py+0Po5y02ouz3jL4D4JOGI7kaZ5Bqn4sycVbAQA7" />
                                            <img class="intLink" title="Right align" onclick="formatDoc('justifyright');"
                                                src="data:image/gif;base64,R0lGODlhFgAWAID/AMDAwAAAACH5BAEAAAAALAAAAAAWABYAQAIghI+py+0Po5y02ouz3jL4D4JQGDLkGYxouqzl43JyVgAAOw==" /> --}}
                                            {{-- <img class="intLink" title="Numbered list" onclick="formatDoc('insertorderedlist');" src="data:image/gif;base64,R0lGODlhFgAWAMIGAAAAADljwliE35GjuaezxtHa7P///////yH5BAEAAAcALAAAAAAWABYAAAM2eLrc/jDKSespwjoRFvggCBUBoTFBeq6QIAysQnRHaEOzyaZ07Lu9lUBnC0UGQU1K52s6n5oEADs=" />
                                                <img class="intLink" title="Dotted list" onclick="formatDoc('insertunorderedlist');" src="data:image/gif;base64,R0lGODlhFgAWAMIGAAAAAB1ChF9vj1iE33mOrqezxv///////yH5BAEAAAcALAAAAAAWABYAAAMyeLrc/jDKSesppNhGRlBAKIZRERBbqm6YtnbfMY7lud64UwiuKnigGQliQuWOyKQykgAAOw==" /> --}}
                                            {{-- <img class="intLink" title="Quote" onclick="formatDoc('formatblock','blockquote');" src="data:image/gif;base64,R0lGODlhFgAWAIQXAC1NqjFRjkBgmT9nqUJnsk9xrFJ7u2R9qmKBt1iGzHmOrm6Sz4OXw3Odz4Cl2ZSnw6KxyqO306K63bG70bTB0rDI3bvI4P///////////////////////////////////yH5BAEKAB8ALAAAAAAWABYAAAVP4CeOZGmeaKqubEs2CekkErvEI1zZuOgYFlakECEZFi0GgTGKEBATFmJAVXweVOoKEQgABB9IQDCmrLpjETrQQlhHjINrTq/b7/i8fp8PAQA7" />
                                                <img class="intLink" title="Delete indentation" onclick="formatDoc('outdent');" src="data:image/gif;base64,R0lGODlhFgAWAMIHAAAAADljwliE35GjuaezxtDV3NHa7P///yH5BAEAAAcALAAAAAAWABYAAAM2eLrc/jDKCQG9F2i7u8agQgyK1z2EIBil+TWqEMxhMczsYVJ3e4ahk+sFnAgtxSQDqWw6n5cEADs=" />
                                                <img class="intLink" title="Add indentation" onclick="formatDoc('indent');" src="data:image/gif;base64,R0lGODlhFgAWAOMIAAAAADljwl9vj1iE35GjuaezxtDV3NHa7P///////////////////////////////yH5BAEAAAgALAAAAAAWABYAAAQ7EMlJq704650B/x8gemMpgugwHJNZXodKsO5oqUOgo5KhBwWESyMQsCRDHu9VOyk5TM9zSpFSr9gsJwIAOw==" />
                                                <img class="intLink" title="Hyperlink" onclick="var sLnk=prompt('Write the URL here','http:\/\/');if(sLnk&&sLnk!=''&&sLnk!='http://'){formatDoc('createlink',sLnk)}" src="data:image/gif;base64,R0lGODlhFgAWAOMKAB1ChDRLY19vj3mOrpGjuaezxrCztb/I19Ha7Pv8/f///////////////////////yH5BAEKAA8ALAAAAAAWABYAAARY8MlJq7046827/2BYIQVhHg9pEgVGIklyDEUBy/RlE4FQF4dCj2AQXAiJQDCWQCAEBwIioEMQBgSAFhDAGghGi9XgHAhMNoSZgJkJei33UESv2+/4vD4TAQA7" />
                                                <img class="intLink" title="Cut" onclick="formatDoc('cut');" src="data:image/gif;base64,R0lGODlhFgAWAIQSAB1ChBFNsRJTySJYwjljwkxwl19vj1dusYODhl6MnHmOrpqbmpGjuaezxrCztcDCxL/I18rL1P///////////////////////////////////////////////////////yH5BAEAAB8ALAAAAAAWABYAAAVu4CeOZGmeaKqubDs6TNnEbGNApNG0kbGMi5trwcA9GArXh+FAfBAw5UexUDAQESkRsfhJPwaH4YsEGAAJGisRGAQY7UCC9ZAXBB+74LGCRxIEHwAHdWooDgGJcwpxDisQBQRjIgkDCVlfmZqbmiEAOw==" />
                                                <img class="intLink" title="Copy" onclick="formatDoc('copy');" src="data:image/gif;base64,R0lGODlhFgAWAIQcAB1ChBFNsTRLYyJYwjljwl9vj1iE31iGzF6MnHWX9HOdz5GjuYCl2YKl8ZOt4qezxqK63aK/9KPD+7DI3b/I17LM/MrL1MLY9NHa7OPs++bx/Pv8/f///////////////yH5BAEAAB8ALAAAAAAWABYAAAWG4CeOZGmeaKqubOum1SQ/kPVOW749BeVSus2CgrCxHptLBbOQxCSNCCaF1GUqwQbBd0JGJAyGJJiobE+LnCaDcXAaEoxhQACgNw0FQx9kP+wmaRgYFBQNeAoGihCAJQsCkJAKOhgXEw8BLQYciooHf5o7EA+kC40qBKkAAAGrpy+wsbKzIiEAOw==" />
                                                <img class="intLink" title="Paste" onclick="formatDoc('paste');" src="data:image/gif;base64,R0lGODlhFgAWAIQUAD04KTRLY2tXQF9vj414WZWIbXmOrpqbmpGjudClFaezxsa0cb/I1+3YitHa7PrkIPHvbuPs+/fvrvv8/f///////////////////////////////////////////////yH5BAEAAB8ALAAAAAAWABYAAAWN4CeOZGmeaKqubGsusPvBSyFJjVDs6nJLB0khR4AkBCmfsCGBQAoCwjF5gwquVykSFbwZE+AwIBV0GhFog2EwIDchjwRiQo9E2Fx4XD5R+B0DDAEnBXBhBhN2DgwDAQFjJYVhCQYRfgoIDGiQJAWTCQMRiwwMfgicnVcAAAMOaK+bLAOrtLUyt7i5uiUhADs=" /> --}}
                                        </div>
                                        <div id="textBox" contenteditable="true" class="border border-dark-green border-opacity-40 p-2 outline-none">
                                            <p></p>
                                        </div>
                                        <p id="editMode" class="hidden"><input type="checkbox" name="switchMode"
                                                id="switchBox" onchange="setDocMode(this.checked);" /> <label
                                                for="switchBox">Show HTML</label></p>
                                        {{-- <p><input type="submit" value="Send" /></p> --}}
                                    </form>
                                </div>
                            </div>
                            {{-- <button class="w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full mt-7"
                                type="button">
                                OK
                            </button> --}}
                            <div class="flex justify-between">
                                <button class="bg-black text-white font-medium uppercase py-2 px-4 rounded-full mt-7 text-xs"
                                type="button">
                                send
                            </button>
                            <div class="flex space-x-2">
                                <button class=" bg-black text-white font-medium uppercase py-2 px-4 rounded-full mt-7 text-xs inline-flex items-center gap-x-2">
                                    <img src="{{asset('assets/images/icons/trash-round.svg')}}" alt="">
                                    Delete
                                </button>
                                <button class=" bg-black text-white font-medium uppercase py-2 px-4 rounded-full mt-7 text-xs"
                                type="button">
                                draft
                            </button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="addmodal-id-backdrop"></div>
            <button class="bg-black text-white p-4 rounded-full ease-linear transition-all duration-150" type="button"
                onclick="toggleModal('modal-id')">
                <img class="w-5 h-5" src="{{ asset('assets/images/filter-icon.svg') }}" alt="">
            </button>
        </div>
    </div>
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
        id="modal-id">
        <div class="relative my-auto mx-auto w-72">
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
                <div class="relative px-6 py-2 flex-auto">
                    <div class="pt-2 ">
                        <h1 class="text-white text-xs font-bold uppercase">Help</h1>
                        <div class="mt-2">
                            <div class="relative items-center">
                                <select
                                    class="appearance-none border border-white bg-transparent text-xs font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5">
                                    <option selected>Select status</option>
                                    <option value="US">New</option>
                                    <option value="CA">Pending</option>
                                    <option value="CA">Sorted</option>
                                    <option value="CA">Unsorted</option>
                                </select>
                                <span class="absolute inset-y-4 right-3.5">
                                    <img src="{{ asset('assets/images/Polygon 9.svg') }}" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 ">
                        <h1 class="text-white text-xs font-bold uppercase">Ticket number</h1>
                        <div class="mt-2">
                            <input type="text"
                                class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2.5 placeholder-border-gray text-border-gray"
                                placeholder="Search ticket number">
                        </div>
                    </div>
                    <div class="pt-2 ">
                        <h1 class="text-white text-xs font-bold uppercase">Date</h1>
                        <div class="mt-2">
                            <div class="relative items-center">
                                <input type="text" id="account_start_date" autocomplete="off"
                                    name="search_by_date_added"
                                    class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5 placeholder-border-gray"
                                    placeholder="Start Date">
                                <span class="absolute top-2 right-3.5 date-icon-account-start">
                                    <img src="{{ asset('assets/images/white-calender-icon.svg') }}" alt="">
                                </span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="relative items-center">
                                <input type="text" id="account_end_date" autocomplete="off"
                                    name="search_by_date_added"
                                    class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5 placeholder-border-gray"
                                    placeholder="End Date">
                                <span class="absolute top-2 right-3.5 date-icon-account-end">
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
    <script src="{{ asset('assets/custom/script/text_editor.js') }}"></script>
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
@endsection
