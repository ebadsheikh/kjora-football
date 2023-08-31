@extends('admin.layouts.app')
@section('content')
<div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 2xl:gap-24 ">
        <div
            class="bg-white px-5 py-9 md:py-12 lg:pt-8 lg:pb-4 xl:py-12 2xl:px-14 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
            <h1
                class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                card details</h1>
            <div class="xl:px-6 py-5">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-2 2xl:gap-y-6">
                    <div class="col-span-2 md:col-span-1">
                        <label
                            class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Name</label>
                        <div class="relative items-center">
                            <select
                                class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                <option selected>Active</option>
                                <option value="US">Deactivate</option>
                            </select>
                            <span class="absolute inset-y-5 right-3.5">
                                <img src="../assets/images/drop-arrow.svg" alt="">
                            </span>
                        </div>
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <label
                            class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">SurName</label>
                        <div class="relative items-center">
                            <select
                                class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                <option selected>Active</option>
                                <option value="US">Deactivate</option>
                            </select>
                            <span class="absolute inset-y-5 right-3.5">
                                <img src="../assets/images/drop-arrow.svg" alt="">
                            </span>
                        </div>
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <label
                            class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Rating</label>
                        <div class="relative items-center">
                            <select
                                class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                <option selected>Active</option>
                                <option value="US">Deactivate</option>
                            </select>
                            <span class="absolute inset-y-5 right-3.5">
                                <img src="../assets/images/drop-arrow.svg" alt="">
                            </span>
                        </div>
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <label
                            class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Price</label>
                        <div class="relative items-center">
                            <select
                                class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                <option selected>Active</option>
                                <option value="US">Deactivate</option>
                            </select>
                            <span class="absolute inset-y-5 right-3.5">
                                <img src="../assets/images/drop-arrow.svg" alt="">
                            </span>
                        </div>
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <label
                            class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Age</label>
                        <div class="relative items-center">
                            <select
                                class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                <option selected>Active</option>
                                <option value="US">Deactivate</option>
                            </select>
                            <span class="absolute inset-y-5 right-3.5">
                                <img src="../assets/images/drop-arrow.svg" alt="">
                            </span>
                        </div>
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <label
                            class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">played</label>
                        <div class="relative items-center">
                            <select
                                class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                <option selected>Active</option>
                                <option value="US">Deactivate</option>
                            </select>
                            <span class="absolute inset-y-5 right-3.5">
                                <img src="../assets/images/drop-arrow.svg" alt="">
                            </span>
                        </div>
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <label
                            class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Missed</label>
                        <div class="relative items-center">
                            <select
                                class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                <option selected>Active</option>
                                <option value="US">Deactivate</option>
                            </select>
                            <span class="absolute inset-y-5 right-3.5">
                                <img src="../assets/images/drop-arrow.svg" alt="">
                            </span>
                        </div>
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <label
                            class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">position</label>
                        <div class="relative items-center">
                            <select
                                class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                <option selected>Active</option>
                                <option value="US">Deactivate</option>
                            </select>
                            <span class="absolute inset-y-5 right-3.5">
                                <img src="../assets/images/drop-arrow.svg" alt="">
                            </span>
                        </div>
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <label
                            class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Favourite club</label>
                        <div class="relative items-center">
                            <select
                                class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                <option selected>Active</option>
                                <option value="US">Deactivate</option>
                            </select>
                            <span class="absolute inset-y-5 right-3.5">
                                <img src="../assets/images/drop-arrow.svg" alt="">
                            </span>
                        </div>
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <label
                            class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Location</label>
                        <div class="relative items-center">
                            <select
                                class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                <option selected>Active</option>
                                <option value="US">Deactivate</option>
                            </select>
                            <span class="absolute inset-y-5 right-3.5">
                                <img src="../assets/images/drop-arrow.svg" alt="">
                            </span>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <label
                            class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Foot</label>
                        <div class="relative items-center">
                            <select
                                class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                <option selected>Active</option>
                                <option value="US">Deactivate</option>
                            </select>
                            <span class="absolute inset-y-5 right-3.5">
                                <img src="../assets/images/drop-arrow.svg" alt="">
                            </span>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <button class="mt-2 w-full bg-black text-white font-medium py-2 px-4 rounded-full" type="button">
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="bg-white px-5 py-9 md:py-12 lg:pt-8 lg:pb-4 xl:py-12 2xl:px-14 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
            <h1
                class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                card details</h1>
                <div class="md:px-6 lg:px-1 xl:px-6">
                    <div class="flex justify-center my-20">
                        <div class="rounded-3xl px-4 py-9 h-[13.813rem] w-80 bg-cover bg-center"
                                    style="background-image: url('../assets/images/small-default.png');">
                                    <div class="flex justify-between">
                                        <div>
                                            <a href="#" class="flex items-center">
                                                <div class="rounded-full border-2 border-white bg-white mr-2 h-14 w-14"></div>
                                                <span class="self-center">
                                                    <h1 class="text-white text-sm font-semibold">
                                                        Name Surname
                                                    </h1>
                                                    <h2
                                                        class="text-heading-white text-opacity-25 font-medium text-sm">
                                                        @Username  Foot
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
                                                        <h1 class="text-xs text-rating-yellow">&nbsp 5.0</h1>
                                                    </div>
                                                </span>
                                            </a>
                                        </div>
                                        <div>
                                            <small class="text-white font-semibold">Price</small>
                                        </div>
                                    </div>
                                    <div class="my-3">
                                        <div class="flex justify-between">
                                            <div class="text-center">
                                                <h1 class="text-heading-white text-opacity-25 text-sm">Age</h1>
                                            </div>
                                            <div class="text-center">
                                                <h1 class="text-heading-white text-opacity-25 text-sm">Played
                                                </h1>
                                            </div>
                                            <div class="text-center">
                                                <h1 class="text-heading-white text-opacity-25 text-sm">Missed
                                                </h1>
                                            </div>
                                            <div class="text-center">
                                                <h1 class="text-heading-white text-opacity-25 text-sm">Position
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="mt-2">
                                        <a href="#" class="flex items-center">
                                            <img src="../assets/images/white-location.svg" class="mr-1"
                                                alt="Logo" />
                                            <span class="text-white">
                                                <div>
                                                    Location
                                                </div>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
