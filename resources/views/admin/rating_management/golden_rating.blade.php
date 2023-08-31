@extends('admin.layouts.app')
@section('content')
    <div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 2xl:gap-24 ">
            <div
                class="rounded-2xl bg-white px-5 py-9 md:py-12 lg:pt-8 lg:pb-4 xl:py-12 2xl:px-14 h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                <h1
                    class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                    Rating</h1>
                <div class="md:px-6 lg:px-1 xl:px-6 py-5 lg:py-9">
                    <form method="POST" action="{{ Route('admin.rating.management.update.rating') }}">
                        @csrf
                        <div class="grid grid-cols-2 gap-2 2xl:gap-y-6">
                            <div class="col-span-2 md:col-span-1">
                                <label>
                                    <div class="flex items-center px-4 mb-1">
                                        <img class="w-5 h-5" src="{{ asset('assets/images/green-filled-star.svg') }}"
                                            alt="">
                                            <img class="w-5 h-5" src="{{ asset('assets/images/green-filled-star.svg') }}"
                                            alt="">
                                            <img class="w-5 h-5" src="{{ asset('assets/images/green-filled-star.svg') }}"
                                            alt="">
                                            <img class="w-5 h-5" src="{{ asset('assets/images/green-filled-star.svg') }}"
                                            alt="">
                                            <img class="w-5 h-5" src="{{ asset('assets/images/green-filled-star.svg') }}"
                                            alt="">
                                    </div>
                                </label>
                                <input type="text"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="" value="{{ $first_price->rating }}" disabled>
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Price
                                </label>
                                <input type="number"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="" value="{{ old('first_price', $first_price->price) }}" name="first_price">
                                    @error('first_price')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <label>
                                    <div class="flex items-center px-4 mb-1">
                                        <img class="w-5 h-5" src="{{ asset('assets/images/green-filled-star.svg') }}"
                                            alt="">
                                            <img class="w-5 h-5" src="{{ asset('assets/images/green-filled-star.svg') }}"
                                            alt="">
                                            <img class="w-5 h-5" src="{{ asset('assets/images/green-filled-star.svg') }}"
                                            alt="">
                                            <img class="w-5 h-5" src="{{ asset('assets/images/green-filled-star.svg') }}"
                                            alt="">
                                            <img class="w-5 h-5" src="{{ asset('assets/images/green-empty-star.svg') }}"
                                            alt="">
                                    </div>
                                </label>
                                <input type="text"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="" value="{{ $second_price->rating }}" disabled>
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Price
                                </label>
                                <input type="number"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="" value="{{ old('second_price', $second_price->price) }}"
                                    name="second_price">
                                    @error('second_price')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <label>
                                    <div class="flex items-center px-4 mb-1">
                                        <img class="w-5 h-5" src="{{ asset('assets/images/green-filled-star.svg') }}"
                                            alt="">
                                            <img class="w-5 h-5" src="{{ asset('assets/images/green-filled-star.svg') }}"
                                            alt="">
                                            <img class="w-5 h-5" src="{{ asset('assets/images/green-filled-star.svg') }}"
                                            alt="">
                                            <img class="w-5 h-5" src="{{ asset('assets/images/green-empty-star.svg') }}"
                                            alt="">
                                            <img class="w-5 h-5" src="{{ asset('assets/images/green-empty-star.svg') }}"
                                            alt="">
                                    </div>
                                </label>
                                <input type="text"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="" value="{{ $third_price->rating }}" disabled>
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Price
                                </label>
                                <input type="number"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="" value="{{ old('third_price', $third_price->price) }}" name="third_price">
                                    @error('third_price')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <label>
                                    <div class="flex items-center px-4 mb-1">
                                        <img class="w-5 h-5" src="{{ asset('assets/images/green-filled-star.svg') }}"
                                            alt="">
                                            <img class="w-5 h-5" src="{{ asset('assets/images/green-filled-star.svg') }}"
                                            alt="">
                                            <img class="w-5 h-5" src="{{ asset('assets/images/green-empty-star.svg') }}"
                                            alt="">
                                            <img class="w-5 h-5" src="{{ asset('assets/images/green-empty-star.svg') }}"
                                            alt="">
                                            <img class="w-5 h-5" src="{{ asset('assets/images/green-empty-star.svg') }}"
                                            alt="">
                                    </div>
                                </label>
                                <input type="text"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="" value="{{ $fourth_price->rating }}" disabled>
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Price
                                </label>
                                <input type="number"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="" value="{{ old('fourth_price', $fourth_price->price) }}"
                                    name="fourth_price">
                                    @error('fourth_price')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <label>
                                    <div class="flex items-center px-4 mb-1">
                                        <img class="w-5 h-5" src="{{ asset('assets/images/green-filled-star.svg') }}"
                                            alt="">
                                        <img class="w-5 h-5" src="{{ asset('assets/images/green-empty-star.svg') }}"
                                            alt="">
                                            <img class="w-5 h-5" src="{{ asset('assets/images/green-empty-star.svg') }}"
                                            alt="">
                                            <img class="w-5 h-5" src="{{ asset('assets/images/green-empty-star.svg') }}"
                                            alt="">
                                            <img class="w-5 h-5" src="{{ asset('assets/images/green-empty-star.svg') }}"
                                            alt="">
                                    </div>
                                </label>
                                <input type="text"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="" value="{{ $fifth_price->rating }}" disabled>
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Price
                                </label>
                                <input type="number"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="" value="{{ old('fifth_price', $fifth_price->price) }}"
                                    name="fifth_price">
                                    @error('fifth_price')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                            </div>
                            <div class="col-span-2 mt-4">
                                <button
                                    class="w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full ease-linear transition-all duration-150"
                                    type="submit">
                                    Next
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div
                class="rounded-2xl bg-white px-5 py-9 md:py-12 lg:pt-8 lg:pb-4 xl:py-12 2xl:px-14 h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                <h1
                    class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                    rating
                </h1>
                <div class="md:px-6 lg:px-1 xl:px-6">
                    <div class="flex justify-center my-20">
                        <div class="rounded-3xl h-[13.813rem] w-80 px-4 py-9 bg-cover bg-center"
                            style="background-image: url('{{ asset('assets/images/small-gold.png') }}');">
                            <div>
                                <a href="#" class="flex items-center">
                                    <div src="{{ asset('assets/images/avatar.png') }}"
                                        class="rounded-full bg-light-green mr-2 w-14 h-14" alt="Logo"></div>
                                    <span class="self-center">
                                        <h2 class="text-black font-medium text-sm">
                                            @username
                                        </h2>
                                        <div class="flex items-center">
                                            <svg class="w-3.5 h-3.5 text-light-green" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg class="w-3.5 h-3.5 text-light-green" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg class="w-3.5 h-3.5 text-light-green" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg class="w-3.5 h-3.5 text-light-green" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg class="w-3.5 h-3.5 text-light-green" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <h1 class="text-xs text-light-green">&nbsp 5.0</h1>
                                        </div>
                                    </span>
                                </a>
                            </div>
                            <div class="mt-16">
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
