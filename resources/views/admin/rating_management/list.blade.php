@extends('admin.layouts.app')
@section('style')
<link rel="stylesheet" href="{{asset('assets/custom/style/custom_range.css')}}">
@endsection
@section('content')
    <div class="p-4 md:py-10 md:px-16 2xl:px-52">
        <div class="p-3">
            <h1 class="uppercase text-white text-2xl font-semibold tracking-wide">Rating management</h1>
        </div>
        <section class="py-5">
            <div class="pb-5">
                <div class="flex space-x-2 md:justify-end">
                    <div class="flex space-x-0.5">
                        <button onclick="openDropdown(event,'exportdropdown-id')"
                        class="ease-linear transition-all duration-150 text-white bg-export-btn font-medium w-[7.3rem] rounded-lg text-sm px-3 py-1 text-center inline-flex items-center">
                        <img src="{{ asset('assets/images/Icons - Navigation icon (12 states).svg') }}"
                            class="mr-2" />Export
                        <img src="{{asset('assets/images/Polygon 9.svg')}}" class="ml-2" /></button>
                        <div id="exportdropdown-id" class="hidden bg-export-btn rounded-b-lg p-1 text-center w-[7.3rem] export-style">
                            <ul class="flex flex-col gap-y-2">
                                <li>
                                    <a href="{{Route('admin.rating.management.generate.pdf')}}" class="text-white font-medium uppercase text-xs ml-2">PDF</a>
                                </li>
                                <li>
                                    <a href="{{Route('admin.rating.management.generate.word')}}" class="text-white font-medium uppercase text-xs ml-2">Docx</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <img src="{{ asset('assets/images/Path 303.svg') }}" class="mr-1" alt="Logo" />
                </div>
            </div>
            <div class="bg-white rounded-3xl py-5 px-3 py-3 md:py-3">
                <div class="py-3 px-12">
                    <h1 class="uppercase text-black text-sm font-semibold tracking-wide">Total (7)</h1>
                </div>
                <div class="px-3 py-3 md:px-12 md:py-3">
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-2 xl:gap-4 2xl:gap-8 xl:justify-items-center">
                        @foreach ($rating as $ratings)
                        @if ($ratings->membership_type == 'golden')
                            <div class="rounded-3xl h-[13.813rem] xl:w-80 px-4 py-9 bg-cover bg-center "
                                style="background-image: url('{{ asset('assets/images/small-gold.png') }}');">
                                <div>
                                    <a href="" class="flex items-center">
                                        <img src="{{ asset('assets/images/avatar.png') }}"
                                            class="rounded-full border-2 border-black mr-3 h-14" alt="Logo" />
                                        <span class="self-center">
                                            <h1 class="text-black text-sm font-semibold">
                                               {{$ratings->first_name}} {{$ratings->sur_name}}
                                            </h1>
                                            <h2 class="text-gray-heading font-medium text-sm">
                                                @Ahmad123
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
                                <div class="mt-14">
                                    <hr class="text-heading-white">
                                </div>
                            </div>
                        @else
                            <div class="rounded-3xl h-[13.813rem] xl:w-80 px-4 py-9 bg-cover bg-center"
                                style="background-image: url('{{ asset('assets/images/small-default.png') }}');">
                                <div>
                                    <a href="" class="flex items-center">
                                        <img src="{{ asset('assets/images/avatar.png') }}"
                                            class="rounded-full border-2 border-white mr-2 h-14" alt="Logo" />
                                        <span class="self-center">
                                            <h1 class="text-white text-sm font-semibold">
                                                {{$ratings->first_name}} {{$ratings->sur_name}}
                                            </h1>
                                            <h2 class="text-heading-white text-opacity-25 font-medium text-sm">
                                                @Ahmad123
                                            </h2>
                                            <div class="flex items-center">
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
                                <div class="mt-14">
                                    <hr>
                                </div>
                            </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="fixed bottom-5 right-3 lg:inset-y-2/3 lg:right-2 2xl:right-[6.5rem]">
        <button class="bg-black text-white p-4 rounded-full ease-linear transition-all duration-150" type="button"
            onclick="toggleModal('modal-id')">
            <img class="w-5 h-5" src="{{ asset('assets/images/filter-icon.svg') }}" alt="">
        </button>
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
                    <button class="text-white float-right text-sm leading-none font-thin"
                        onclick="toggleModal('modal-id')">
                        x
                    </button>
                </div>
                <form action="{{Route('admin.rating.management.list')}}" method="GET">
                    <!--body-->
                    <div class="relative px-6 flex-auto">
                        <div class="pt-2 ">
                            <h1 class="text-white text-xs font-bold uppercase">Rating</h1>
                            <div class="mt-2 border border-white pt-1 pb-3 px-4 rounded-full">
                                <div>
                                    <div class="values">
                                    <span id="range1">
                                        0
                                    </span>
                                    <span id="range2">
                                        5
                                    </span>
                                    </div>
                                    <div class="container">
                                    <div class="slider-track"></div>
                                    <input type="range" min="0" max="5" value="0" step="0.1" id="slider-1" oninput="slideOne()" name="search_by_start_rate">
                                    <input type="range" min="0" max="5" value="5" step="0.1" id="slider-2" oninput="slideTwo()" name="search_by_end_rate">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-2 ">
                            <h1 class="text-white text-xs font-bold uppercase">Card</h1>
                            <div class="mt-2">
                                <div class="relative items-center">
                                    <select
                                        class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-3">
                                        <option selected>Select card</option>
                                        <option value="US">Golden card</option>
                                        <option value="US">Default card</option>
                                    </select>
                                    <span class="absolute inset-y-5 right-3.5">
                                        <img src="{{ asset('assets/images/Polygon 9.svg') }}" alt="">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--footer-->
                    <div class="p-6 rounded-b">
                        <button
                            class="w-full text-black font-bold bg-white uppercase text-sm px-6 py-3 rounded-full mr-1 mb-1 ease-linear transition-all duration-150"
                            type="submit" onclick="toggleModal('modal-id')">
                            Apply
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="hidden opacity-70 fixed inset-0 z-40 bg-modal-black" id="modal-id-backdrop"></div>
@endsection

@section('script')
<script src="{{ asset('assets/custom/script/custom_range.js') }}"></script>
@endsection
