@extends('admin.layouts.app')
@section('content')
    <div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 2xl:gap-24 ">
            <div
                class="bg-white px-5 py-9 md:py-12 lg:pt-4 lg:pb-[0.563rem] xl:pb-[1.55rem] 2xl:pt-14 2xl:pb-[3.25rem] h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem] rounded-2xl">
                <h1
                    class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                    reportee</h1>
                <div class="rounded-3xl h-[13.813rem] mx-auto my-2 w-auto md:w-80 p-4 bg-cover bg-center"
                    style="background-image: url('{{ asset('assets/images/small-default.png') }}');">
                    <div class="flex justify-between">
                        <div>
                            <a href="#" class="flex items-center">
                                <img src="{{ asset('assets/images/avatar.png') }}"
                                    class="rounded-full border-2 border-white mr-2 h-14" alt="Logo" />
                                <span class="self-center">
                                    <h1 class="text-white text-sm font-semibold">
                                        Ahmad AlSheridah
                                    </h1>
                                    <h2 class="text-heading-white text-opacity-25 font-medium text-sm">
                                        @Ahmad123
                                    </h2>
                                    <div class="flex items-center">
                                        <svg class="w-3.5 h-3.5 text-rating-yellow" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <svg class="w-3.5 h-3.5 text-rating-yellow" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <svg class="w-3.5 h-3.5 text-rating-yellow" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <svg class="w-3.5 h-3.5 text-rating-yellow" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <svg class="w-3.5 h-3.5 text-rating-yellow" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <h1 class="text-xs text-rating-yellow">&nbsp 5.0</h1>
                                    </div>
                                </span>
                            </a>
                        </div>
                        <div>
                            <small class="text-white font-semibold">$200</small>
                        </div>
                    </div>
                    <div class="my-3">
                        <div class="flex justify-between">
                            <div class="text-center">
                                <h1 class="text-heading-white text-opacity-25 text-sm">Age</h1>
                                <h2 class="text-white text-sm">22</h2>
                            </div>
                            <div class="text-center">
                                <h1 class="text-heading-white text-opacity-25 text-sm">Played
                                </h1>
                                <h2 class="text-white text-sm">2</h2>
                            </div>
                            <div class="text-center">
                                <h1 class="text-heading-white text-opacity-25 text-sm">Missed
                                </h1>
                                <h2 class="text-white text-sm">2</h2>
                            </div>
                            <div class="text-center">
                                <h1 class="text-heading-white text-opacity-25 text-sm">Position
                                </h1>
                                <h2 class="text-white text-sm">Defender</h2>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mt-2">
                        <a href="#" class="flex items-center">
                            <img src="{{ asset('assets/images/white-location.svg') }}" class="mr-1" alt="Logo" />
                            <span class="text-white">
                                <div>
                                    Adailiya
                                </div>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="py-2 md:px-6 lg:px-1 xl:px-6 2xl:py-6">
                    <div class="my-2 lg:mt-0 space-y-2">
                        <div>
                            <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">reason
                                of report</label>
                            <input type="text"
                                class="border border-border-gray border-opacity-40 text-sm text-center rounded-full w-full px-5 py-2.5 placeholder-dark-gray placeholder-opacity-40"
                                placeholder="Hate speech" disabled>
                        </div>
                        <div>
                            <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">number of
                                report</label>
                            <input type="text"
                                class="border border-border-gray border-opacity-40 text-sm text-center rounded-full w-full px-5 py-2.5 placeholder-dark-gray placeholder-opacity-40"
                                placeholder="1" disabled>
                        </div>
                        <div>
                            <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">date</label>
                            <input type="text"
                                class="border border-border-gray border-opacity-40 text-sm text-center rounded-full w-full px-5 py-2.5 placeholder-dark-gray placeholder-opacity-40"
                                placeholder="02/22/2022" disabled>
                        </div>
                        <div>
                            <label class="uppercase block  text-light-green text-xs font-bold px-5">Status</label>
                            <div class="relative items-center">
                                <select
                                    class="appearance-none border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-5 rounded-full text-xs"
                                    name="status">
                                    <option value="Sorted" selected>Sorted</option>
                                    <option value="Unsorted">Unsorted</option>
                                </select>
                                <span class="absolute inset-y-5 right-3.5">
                                    <img src="{{ asset('assets/images/drop-arrow.svg') }}" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="bg-white px-5 py-9 md:py-12 lg:pt-4 lg:pb-[0.563rem] xl:pb-[1.55rem] 2xl:pt-14 2xl:pb-[3.25rem] h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem] rounded-2xl">
                <h1
                    class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                    report</h1>
                <div class="rounded-3xl h-[13.813rem] mx-auto my-2 w-auto md:w-80 p-4 bg-cover bg-center"
                    style="background-image: url('{{ asset('assets/images/small-default.png') }}');">
                    <div class="flex justify-between">
                        <div>
                            <a href="#" class="flex items-center">
                                <img src="{{ asset('assets/images/avatar.png') }}"
                                    class="rounded-full border-2 border-white mr-2 h-14" alt="Logo" />
                                <span class="self-center">
                                    <h1 class="text-white text-sm font-semibold">
                                        Ahmad AlSheridah
                                    </h1>
                                    <h2 class="text-heading-white text-opacity-25 font-medium text-sm">
                                        @Ahmad123
                                    </h2>
                                    <div class="flex items-center">
                                        <svg class="w-3.5 h-3.5 text-rating-yellow" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <svg class="w-3.5 h-3.5 text-rating-yellow" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <svg class="w-3.5 h-3.5 text-rating-yellow" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <svg class="w-3.5 h-3.5 text-rating-yellow" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <svg class="w-3.5 h-3.5 text-rating-yellow" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <h1 class="text-xs text-rating-yellow">&nbsp 5.0</h1>
                                    </div>
                                </span>
                            </a>
                        </div>
                        <div>
                            <small class="text-white font-semibold">$200</small>
                        </div>
                    </div>
                    <div class="my-3">
                        <div class="flex justify-between">
                            <div class="text-center">
                                <h1 class="text-heading-white text-opacity-25 text-sm">Age</h1>
                                <h2 class="text-white text-sm">22</h2>
                            </div>
                            <div class="text-center">
                                <h1 class="text-heading-white text-opacity-25 text-sm">Played
                                </h1>
                                <h2 class="text-white text-sm">2</h2>
                            </div>
                            <div class="text-center">
                                <h1 class="text-heading-white text-opacity-25 text-sm">Missed
                                </h1>
                                <h2 class="text-white text-sm">2</h2>
                            </div>
                            <div class="text-center">
                                <h1 class="text-heading-white text-opacity-25 text-sm">Position
                                </h1>
                                <h2 class="text-white text-sm">Defender</h2>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mt-2">
                        <div class="flex justify-between">
                            <a href="#" class="flex items-center">
                                <img src="{{ asset('assets/images/white-location.svg') }}" class="mr-1"
                                    alt="Logo" />
                                <span class="text-white">
                                    <div>
                                        Adailiya
                                    </div>
                                </span>
                            </a>
                            <img src="{{ asset('assets/images/flag-icon.svg') }}" class="mr-1" alt="Logo" />
                        </div>
                    </div>
                </div>
                <div class="py-2 md:px-6 lg:px-1 xl:px-6 2xl:py-6">
                    <div class="my-2 lg:mt-0 space-y-2">
                        <div>
                            <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Total
                                reports</label>
                            <input type="text"
                                class="border border-border-gray border-opacity-40 text-sm text-center rounded-full w-full px-5 py-2.5 placeholder-dark-gray placeholder-opacity-40"
                                placeholder="1">
                        </div>
                        <div>
                            <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Panalty</label>
                            <div class="relative items-center">
                                <select
                                    class="appearance-none border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-5 rounded-full text-xs"
                                    name="status">
                                    <option value="One month" selected>One month</option>
                                    <option value="Three month">Three months</option>
                                    <option value="Six month">Six months</option>
                                </select>
                                <span class="absolute inset-y-5 right-3.5">
                                    <img src="{{ asset('assets/images/drop-arrow.svg') }}" alt="">
                                </span>
                            </div>
                        </div>
                        <div>
                            <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Status</label>
                            <div class="relative items-center">
                                <select
                                    class="appearance-none border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-5 rounded-full text-xs"
                                    name="status">
                                    <option value="Restrict" selected>Restrict</option>
                                    <option value="Unrestrict">Unrestrict</option>
                                </select>
                                <span class="absolute inset-y-5 right-3.5">
                                    <img src="{{ asset('assets/images/drop-arrow.svg') }}" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                    <button class="mt-4 w-full bg-black text-white font-medium uppercase py-2.5 px-4 rounded-full"
                            type="button" onclick="toggleModal('modal-id')">
                            Next
                        </button>
                        <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                            id="modal-id">
                            <div class="relative my-auto mx-2 md:mx-auto w-auto md:w-[23rem]">
                                <!--content-->
                                <div
                                    class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                    <!--header-->
                                    <div class="flex justify-end px-3 py-1 rounded-t">
                                        <button class="text-black float-right text-sm leading-none font-normal"
                                            onclick="toggleModal('modal-id')">
                                            x
                                        </button>
                                    </div>
                                    <!--body-->
                                    <div class="relative px-3 pb-6">
                                        <div class="flex justify-center">
                                            <img class="w-14 h-14" src="{{ asset('assets/images/blocked.svg') }}"
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
                                                class="resize-none h-28 appearance-none border border-border-gray border-opacity-40 text-xs rounded-xl w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                                placeholder="Please type report message here"></textarea>
                                        </div>
                                        <a href="{{ Route('admin.report.management.list') }}">
                                            <button
                                                class="w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full"
                                                type="button">
                                                Confirm
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden opacity-70 fixed inset-0 z-40 bg-modal-black" id="modal-id-backdrop"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
