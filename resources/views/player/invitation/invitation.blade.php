@extends('player.layouts.master')
@section('content')
    <div class=" pt-4 px-4 md:pt-10 md:px-16 2xl:px-52">
        <div class="p-3">
            <h1 class="uppercase text-white text-5xl font-bold tracking-wide">Invitation</h1>
        </div>
        <div class="pt-6">
            <div class="px-2 pt-2 pb-6">
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
                                        <div class="bg-white rounded-3xl py-5 h-[68rem] relative">
                                            <div>
                                                <div class="px-4 pt-3 flex space-x-2 items-center">
                                                    <img src="../assets/images/calendar-icon.svg" alt="">
                                                    <h1 class="text-sm text-black font-bold uppercase">6
                                                        april 2022</h1>
                                                </div>
                                                <div class="pt-1 flex space-x-2 items-center">
                                                    <img src="../assets/images/time-icon.svg" alt="">
                                                    <h1 class="text-sm text-black font-medium uppercase">
                                                        03:00 PM</h1>
                                                </div>
                                            </div>
                                            <div class="px-3 py-3 xl:px-12 md:py-3">
                                                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 xl:justify-items-center">
                                                    <div class="rounded-3xl h-[13.813rem] xl:w-80 px-4 py-9 bg-cover bg-center cursor-pointer"
                                                        style="background-image: url('../assets/images/small-default.png');"
                                                        onclick="toggleModal('profilemodal-id')">
                                                        <div class="flex justify-between">
                                                            <div>
                                                                <a href="#" class="flex items-center">
                                                                    <img src="../assets/images/avatar.png"
                                                                        class="rounded-full border-2 border-white mr-2 h-14"
                                                                        alt="Logo" />
                                                                    <span class="self-center">
                                                                        <h1 class="text-white text-sm font-semibold">
                                                                            Ahmad AlSheridah
                                                                        </h1>
                                                                        <h2
                                                                            class="text-heading-white text-opacity-25 font-medium text-sm">
                                                                            @Ahmad123
                                                                        </h2>
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
                                                                            <h1 class="text-xs text-rating-yellow">
                                                                                &nbsp 5.0</h1>
                                                                        </div>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="text-center">
                                                                <small
                                                                    class="text-white font-normal tracking-wide">Position</small>
                                                                <h2
                                                                    class="text-heading-white text-opacity-25 font-normal text-xs tracking-wider">
                                                                    GoalKeeper</h2>
                                                            </div>
                                                        </div>
                                                        <hr class="mt-12">
                                                        <div class="mt-2">
                                                            <a href="#" class="flex items-start">
                                                                <img src="../assets/images/white-location.svg"
                                                                    class="mr-1" alt="Logo" />
                                                                <div>
                                                                    <h1 class="text-white capitalize text-xs">
                                                                        Jabar Al-Ahmed Al-Sabah
                                                                        international stadium</h1>
                                                                    <h1 class="text-heading-white text-opacity-25 text-xs">
                                                                        sami Ahmed Al munayes ST, Al
                                                                        kuwayt, Kuwait</h1>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="absolute right-5 bottom-5 flex space-x-2 justify-end">
                                                <li class="text-black text-sm font-semibold bg-white drop-shadow-xl py-2 px-3 rounded"><a href="#">1</a></li>
                                                <li class="text-black text-sm font-semibold bg-white drop-shadow-xl py-2 px-3 rounded"><a href="#">2</a></li>
                                                <li class="text-black text-sm font-semibold bg-white drop-shadow-xl py-2 px-3 rounded"><a href="#">3</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hidden" id="tab-settings">
                                        <div class="bg-white rounded-3xl py-5 h-[68rem] relative">
                                            <div>
                                                <div class="px-4 pt-3 flex space-x-2 items-center">
                                                    <img src="../assets/images/calendar-icon.svg" alt="">
                                                    <h1 class="text-sm text-black font-bold uppercase">
                                                        8
                                                        april 2022</h1>
                                                </div>
                                                <div class="pt-1 flex space-x-2 items-center">
                                                    <img src="../assets/images/time-icon.svg" alt="">
                                                    <h1 class="text-sm text-black font-medium uppercase">
                                                        03:00 PM</h1>
                                                </div>
                                            </div>
                                            <div class="px-3 py-3 xl:px-12 md:py-3">
                                                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 xl:justify-items-center">
                                                    <div class="rounded-3xl h-[13.813rem] xl:w-80 px-4 py-9 bg-cover bg-center"
                                                        style="background-image: url('../assets/images/small-gold.png');">
                                                        <div class="flex justify-between">
                                                            <div>
                                                                <a href="#" class="flex items-center">
                                                                    <img src="../assets/images/avatar.png"
                                                                        class="rounded-full border-2 border-black mr-3 h-14"
                                                                        alt="Logo" />
                                                                    <span class="self-center">
                                                                        <h1 class="text-black text-sm font-semibold">
                                                                            Ahmad AlSheridah
                                                                        </h1>
                                                                        <h2 class="text-gray-heading font-medium text-sm">
                                                                            @Ahmad123
                                                                        </h2>
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
                                                                            <h1 class="text-xs text-light-green">
                                                                                &nbsp 5.0</h1>
                                                                        </div>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="text-center">
                                                                <small
                                                                    class="text-black font-normal tracking-wide">Position</small>
                                                                <h2
                                                                    class="text-border-gray font-medium text-xs tracking-wider">
                                                                    GoalKeeper</h2>
                                                            </div>
                                                        </div>
                                                        <hr class="mt-12 text-heading-white">
                                                        <div class="mt-2">
                                                            <a href="#" class="flex items-start">
                                                                <img src="../assets/images/black-location.svg"
                                                                    class="mr-1" alt="Logo" />
                                                                <div>
                                                                    <h1 class="text-black capitalize text-xs">
                                                                        Jabar Al-Ahmed Al-Sabah
                                                                        international stadium</h1>
                                                                    <h1 class="text-gray-heading text-xs">
                                                                        sami Ahmed Al munayes ST, Al
                                                                        kuwayt, Kuwait</h1>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="absolute right-5 bottom-5 flex space-x-2 justify-end">
                                                <li class="text-black text-sm font-semibold bg-white drop-shadow-xl py-2 px-3 rounded"><a href="#">1</a></li>
                                                <li class="text-black text-sm font-semibold bg-white drop-shadow-xl py-2 px-3 rounded"><a href="#">2</a></li>
                                                <li class="text-black text-sm font-semibold bg-white drop-shadow-xl py-2 px-3 rounded"><a href="#">3</a></li>
                                            </ul>
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
@endsection
