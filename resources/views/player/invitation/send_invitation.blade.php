@extends('player.layouts.master')
@section('content')
<div class="p-4 md:py-10 md:px-16 2xl:px-52">
    <!--heading-->
    <div class="p-3">
        <h1 class="uppercase text-white text-3xl md:text-5xl font-bold tracking-wide">send invitation
        </h1>
    </div>
    <section class="py-6">
        <div class="px-2 pt-2 pb-6">
            <div class="grid lg:grid-cols-3 space-y-6 lg:space-x-16">
                <div class="lg:col-span-1 xl:px-6">
                    <div
                        class="border-0 rounded-3xl shadow-lg relative flex flex-col w-full bg-black outline-none focus:outline-none">
                        <!--body-->
                        <div class="py-4 px-3 md:px-6">
                            <div class="rounded-3xl h-48 my-4 py-4 bg-cover bg-center"
                                style="background-image: url('{{asset('assets/images/small-default.png')}}');">
                                <div class="pr-4 flex justify-between items-center">
                                    <div class="py-2 flex space-x-2 items-center">
                                        <img src="{{asset('assets/images/time-icon-white.svg')}}" alt="">
                                        <h1 class="text-xs text-white font-medium uppercase">
                                            09 june 2022, 03:00 PM</h1>
                                    </div>
                                    <div>
                                        <h1 class="text-xs font-medium bg-black p-2 rounded-full text-white">
                                            $200</h1>
                                    </div>
                                </div>
                                <div class="px-2">
                                    <div class=" flex justify-between">
                                        <div>
                                            <a href="#" class="flex items-center">
                                                <img src="{{asset('assets/images/avatar.png')}}"
                                                    class="rounded-full border-2 border-white mr-2 h-12"
                                                    alt="Logo" />
                                                <span class="self-center">
                                                    <h1 class="text-white text-xs font-semibold">
                                                        Ahmad
                                                        AlSheridah
                                                    </h1>
                                                    <h2
                                                        class="text-heading-white text-opacity-25 font-medium text-xs">
                                                        @Ahmad123
                                                    </h2>
                                                    <div class="flex items-center">
                                                        <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg class="w-2.5 h-2.5 text-rating-yellow"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <h1 class="text-xxs text-rating-yellow">
                                                            &nbsp
                                                            5.0</h1>
                                                    </div>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="text-center">
                                            <small
                                                class="text-white text-xs font-normal tracking-wide">Position</small>
                                            <h2
                                                class="text-heading-white text-opacity-25 font-normal text-xs tracking-wider">
                                                GoalKeeper</h2>
                                        </div>
                                    </div>
                                    <hr class=" mt-10">
                                </div>

                            </div>
                            <div class="pt-2 ">
                                <h1 class="text-white text-sm font-bold uppercase">Date</h1>
                                <div class="mt-2">
                                    <div class="relative items-center">
                                        <input type="text" id="invite_date" autocomplete="off"
                                            name="search_by_date_added"
                                            class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5 placeholder-border-gray"
                                            placeholder="DD/MM/YY">
                                            @error('date_of_birth')
                                                @include('errors.required_field', ['message' => $message])
                                            @enderror
                                        <span class="absolute top-2 right-3.5 date-icon-invite-date">
                                            <img src="{{ asset('assets/images/white-calender-icon.svg') }}" alt="">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2 ">
                                <h1 class="text-white text-sm font-bold uppercase">time</h1>
                                <div class="mt-2">
                                    <div class="relative items-center">
                                        <input type="time"
                                        class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2 placeholder-border-gray text-white"
                                        placeholder="Time">
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2 ">
                                <h1 class="text-white text-sm font-bold uppercase">stadium</h1>
                                <div class="mt-2">
                                    <div class="relative items-center">
                                        <select
                                            class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-2">
                                            <option selected value="">Select stadium</option>
                                            @foreach ($stadium as $item)
                                                <option value="{{ $item->id }}">{{ $item->name}}</option>
                                            @endforeach
                                        </select>
                                        <span class="absolute inset-y-4 right-3.5">
                                            <img src="{{asset('assets/images/Polygon 9.svg')}}" alt="">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2 ">
                                <h1 class="text-white text-sm font-bold uppercase">
                                    player price</h1>
                                <div class="mt-2">
                                    <input type="text"
                                        class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2 placeholder-border-gray text-white"
                                        placeholder="$200">
                                </div>
                            </div>
                            <div class="pt-2 ">
                                <h1 class="text-white text-sm font-bold uppercase">
                                    invitation fee</h1>
                                <div class="mt-2">
                                    <input type="text"
                                        class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2 placeholder-border-gray "
                                        placeholder="25%">
                                </div>
                            </div>
                            <div class="pt-2 ">
                                <h1 class="text-white text-sm font-bold uppercase">
                                    total</h1>
                                <div class="mt-2">
                                    <input type="text"
                                        class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2 placeholder-border-gray "
                                        placeholder="$225">
                                </div>
                            </div>
                            <button
                                class="w-full my-3 text-black font-bold bg-white uppercase text-sm px-6 py-3 rounded-full mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button" onclick="toggleModal('modal-id')">
                                next
                            </button>
                            <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                id="modal-id">
                                <div class="relative mx-auto my-auto w-72 md:w-80 lg:w-96">
                                    <!--content -->
                                    <div
                                        class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                        <!-- header-->
                                        <div class="flex justify-end px-3 py-1 rounded-t">
                                            <button
                                                class="text-black float-right text-lg leading-none font-normal"
                                                onclick="toggleModal('modal-id')">
                                                x
                                            </button>
                                        </div>
                                        <h3
                                            class="text-xl text-center text-light-green font-semibold uppercase">
                                            send invitation
                                        </h3>
                                        <!--body -->
                                        <div class="relative p-6 ">
                                            <div class="h-56 flex items-center">
                                                <p class="p-3 text-center text-xs">
                                                    Your invitation will be sent and you will
                                                    receive an email updating you on
                                                    the status of your request.
                                                </p>
                                            </div>
                                            <button
                                                class="w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full"
                                                type="button">
                                                OK
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden opacity-70 fixed inset-0 z-40 bg-modal-black"
                                id="modal-id-backdrop"></div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-2 relative h-80 lg:h-96 xl:h-[28rem]">
                    <img class="w-full h-full object-cover rounded-3xl" src="{{asset('assets/images/map1.png')}}" alt="">
                    {{-- <div class="fixed right-2 bottom-3 lg:absolute lg:bottom-14 lg:-right-12 xl:-right-16">
                        <button class="bg-light-green p-4 rounded-full ease-linear transition-all duration-150">
                            <a href="/user/add-stadium.html">
                                <img class="w-5 h-5" src="{{asset('assets/images/add-icon.svg')}}" alt="">
                            </a>
                        </button>
                    </div> --}}
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
<script src="{{ asset('assets/custom/script/custom_calender_picker.js') }}"></script>
@endsection
