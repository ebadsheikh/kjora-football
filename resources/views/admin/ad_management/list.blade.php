@extends('admin.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/custom/style/custom_calender_picker.css') }}">
@endsection
@section('content')
    <div class="container md:mx-auto">
        <div class="flex justify-center">
            <div class="w-11/12">
                <!--heading -->
                <div class="p-3">
                    <h1 class="uppercase text-white text-2xl font-semibold tracking-wide">ad management</h1>
                </div>
            </div>
        </div>
        <section class="py-6">
            <div class="container md:mx-auto">
                @if ($ad->count() > 0)
                    <div class="flex justify-center">
                        <div class="w-11/12 2xl:w-full">
                            @if (session('success'))
                            <div class="p-2">
                                <div class="text-green-600 text-xs">
                                    {{ session('success') }}
                                </div>
                            </div>
                            @endif
                            @if (session('error'))
                            <div class="p-2">
                                <div class="text-red-700 text-xs" role="alert">
                                    {{ session('error') }}
                                </div>
                            </div>
                            @endif
                            <div class="px-2 pt-2 pb-6">
                                <div class="flex justify-between items-center">
                                    <h1 class="uppercase text-white text-sm font-semibold tracking-wide">
                                        Total ads ({{ $ad_count }})</h1>
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
                                                    <a href="#"
                                                        class="text-white font-medium uppercase text-xs ml-2">EXCEl</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <img src="{{ asset('assets/images/Path 303.svg') }}" class="mr-1"
                                            alt="Logo" />
                                    </div>
                                </div>
                            </div>
                            <div class="my-3">
                                <div class="px-3 py-3">
                                    <div class="grid lg:grid-cols-2 gap-4">
                                        @foreach ($ad as $ads)
                                            <a href="{{ Route('admin.ad.management.edit', $ads->id) }}">
                                                <div class="bg-lime-200 h-48 rounded-lg">
                                                    <img src="{{ URL::asset($ads->image) }}" alt="img"
                                                        class="object-cover object-center h-48 rounded-lg"
                                                        style="width: 100%">
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="flex justify-center">
                        <div class="w-11/12 2xl:w-full">
                            @if (session('success'))
                                <div class="p-7">
                                    <div class="alert alert-success  text-white">
                                        {{ session('success') }}
                                    </div>
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="p-7">
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                </div>
                            @endif
                            <div class="px-2 pt-2 pb-6">
                                <div class="flex justify-between items-center">
                                    <h1 class="uppercase text-white text-sm font-semibold tracking-wide">
                                        Total ads ({{ $ad_count }})</h1>
                                </div>
                                <div class="my-3">
                                    <div class="px-3 py-3">
                                        <h1 class="uppercase text-white text-sm font-semibold tracking-wide text-center">No
                                            such data match</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

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
    <div class="fixed bottom-8 right-3">
        <div class="flex flex-col space-y-4">
            <button class="bg-light-green text-white p-4 rounded-full ease-linear transition-all duration-150"
                type="button">
                <a href="{{ Route('admin.ad.management.create') }}"><img class="w-5 h-5"
                        src="{{ asset('assets/images/add-icon.svg') }}" alt=""></a>
            </button>
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
                    <button class="text-white float-right text-sm leading-none font-thin" onclick="toggleModal('modal-id')">
                        x
                    </button>
                </div>
                <form action="{{ Route('admin.ad.management.list') }}" method="get">
                    <!--body-->
                    <div class="relative px-6 flex-auto">
                        <div class="pt-2 ">
                            <h1 class="text-white text-xs font-bold uppercase">Visibility</h1>
                            <div class="mt-2">
                                <div class="relative items-center">
                                    <select name="search_by_visibility"
                                        class="appearance-none border border-white bg-transparent text-xs font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5">
                                        <option value="" disabled selected>Select visibility</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>

                                    <span class="absolute inset-y-4 right-3.5">
                                        <img src="{{ asset('assets/images/Polygon 9.svg') }}" alt="">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-2 ">
                            <h1 class="text-white text-xs font-bold uppercase">search</h1>
                            <div class="mt-2">
                                <input type="text" name="search_by_name"
                                    class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2.5 placeholder-border-gray text-white text-border-gray"
                                    placeholder="Search ad name">
                            </div>
                        </div>
                        <div class="pt-2 ">
                            <h1 class="text-white text-xs font-bold uppercase">Date</h1>
                            <div class="mt-2">
                                <div class="relative items-center">
                                    <input type="text" id="adDateAdded" autocomplete="off"
                                        name="search_by_date_added"
                                        class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5 placeholder-border-gray"
                                        placeholder="Start Date">
                                    <span class="absolute top-2 right-3.5 date-icon">
                                        <img src="{{ asset('assets/images/white-calender-icon.svg') }}" alt="">
                                    </span>
                                </div>

                            </div>
                            <div class="mt-2">
                                <div class="relative items-center">
                                    <input type="text" id="adDateEnded" autocomplete="off"
                                        name="search_by_date_ended"
                                        class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5 placeholder-border-gray"
                                        placeholder="End Date">
                                    <span class="absolute top-2 right-3.5 date-icon">
                                        <img src="{{ asset('assets/images/white-calender-icon.svg') }}" alt="">
                                    </span>
                                </div>

                            </div>
                        </div>
                        <div class="pt-2 ">
                            <h1 class="text-white text-xs font-bold uppercase">status</h1>
                            <div class="mt-2">
                                <div class="relative items-center">
                                    <select
                                        class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-2"
                                        name="search_by_status">
                                        <option value="" disabled selected>Select status</option>
                                        <option value="Published">Published</option>
                                        <option value="Unpublished">Unpublished</option>
                                    </select>
                                    <span class="absolute inset-y-4 right-3.5">
                                        <img src="{{ asset('assets/images/Polygon 9.svg') }}" alt="">
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--footer-->
                    <div class="p-6 rounded-b">
                        <button
                            class="w-full text-black font-bold bg-white uppercase text-sm px-6 py-2.5 rounded-full mr-1 mb-1 ease-linear transition-all duration-150"
                            type="submit">
                            Apply
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
    <script type="text/javascript">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
    </script>
@endsection
@section('script')
    <script src="{{ asset('assets/custom/script/custom_calender_picker.js') }}"></script>
@endsection
