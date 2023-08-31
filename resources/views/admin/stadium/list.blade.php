@extends('admin.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/custom/style/custom_calender_picker.css') }}">
@endsection
@section('content')
    <div class="p-4 md:py-10 md:px-16 2xl:px-52">
        <div class="p-3">
            <h1 class="uppercase text-white text-2xl font-semibold tracking-wide">stadium management</h1>
        </div>
        <div class="py-5">
            <div class="flex flex-wrap justify-end" id="tabs-id">
                <div class="flex space-x-2 items-center px-2 pt-2 pb-6">
                    <ul class="flex space-x-0.5">
                        <li class="-mb-px last:mr-0 flex-auto text-center">
                            <a class="cursor-pointer px-3 py-1.5 text-sm font-bold text-black bg-white border border-gray-200 rounded-md focus:z-10"
                               onclick="changeAtiveTab(event,'tab-profile')">
                                Grid
                            </a>
                        </li>
                        <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                            <a class="cursor-pointer px-3 py-1.5 text-sm font-bold text-black bg-white border border-gray-200 rounded-md focus:z-10"
                               onclick="changeAtiveTab(event,'tab-settings')">
                                Map
                            </a>
                        </li>
                    </ul>
                    <div class="inline-flex">
                        <button onclick="openDropdown(event,'exportdropdown-id')"
                                class="ease-linear transition-all duration-150 text-white bg-export-btn font-medium w-[7.3rem] rounded-lg text-sm px-3 py-1 text-center inline-flex items-center">
                            <img src="{{ asset('assets/images/Icons - Navigation icon (12 states).svg') }}"
                                 class="mr-2"/>Export
                            <img src="{{ asset('assets/images/Polygon 9.svg') }}" class="ml-2"/></button>
                        <div id="exportdropdown-id"
                             class="hidden bg-export-btn rounded-b-lg p-1 text-center w-[7.3rem] export-style z-40" >
                            <ul class="flex flex-col gap-y-2 ">
                                <li>
                                    <a href="{{ Route('admin.stadium.generate.pdf') }}"
                                       class="text-white font-medium uppercase text-xs ml-2">PDF</a>
                                </li>
                                <li>
                                    <a href="{{ Route('admin.stadium.generate.word') }}"
                                       class="text-white font-medium uppercase text-xs ml-2">Docx</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <img src="{{ asset('assets/images/Path 303.svg') }}" class="mr-1" alt="Logo"/>
                </div>
                <div class="w-full">
                    <div class="relative">
                        <div class="lg:px-4 py-5 flex-auto">
                            <div class="tab-content tab-space">
                                <div class="block" id="tab-profile">
                                    <div class=" py-5">
                                        <div class="px-4">
                                            <h1 class="uppercase text-white text-sm font-semibold tracking-wide">Total
                                                stadium ({{ $stadium_count }})
                                            </h1>
                                        </div>
                                        @if ($stadium->count() > 0)
                                            <div class="py-5 px-3md:py-3">
                                                <div class="grid lg:grid-cols-2 gap-4">
                                                    @foreach ($stadium as $stadiums)
                                                        <div class="group relative bg-white rounded-2xl">
                                                            <div class="flex flex-col-reverse md:flex md:flex-row">
                                                                <div class="w-full md:w-3/5 p-3">
                                                                    @if ($stadiums->status == 'Published')
                                                                        <button
                                                                            class="mb-2 rounded-full text-sm px-6 py-1 tracking-wide bg-yellow-btn text-slate-100 font-medium w-32"
                                                                            style="background-color: green;">
                                                                            Published
                                                                        </button>
                                                                    @else
                                                                        <button
                                                                            class="mb-2 rounded-full text-sm px-6 py-1 tracking-wide bg-yellow-btn text-slate-100 font-medium w-32"
                                                                            style="background-color: red;">
                                                                            Unpublished
                                                                        </button>
                                                                    @endif
                                                                    <a href="" class="flex items-center">
                                                                        <img
                                                                            src="{{ asset('assets/images/ground-photo.png') }}"
                                                                            class="rounded-full border-2 border-light-yellow mr-2 h-14"
                                                                            alt="Logo"/>
                                                                        <h1 class="text-black text-base md:text-xl font-bold">
                                                                            {{ $stadiums->name }}
                                                                        </h1>
                                                                    </a>
                                                                    <div class="my-3">
                                                                        <div class="flex justify-between">
                                                                            <div>
                                                                                <h1 class="capitalize text-gray-heading text-xs">
                                                                                    upcoming
                                                                                    matches</h1>
                                                                                <h2 class="text-black font-medium text-sm">
                                                                                    0</h2>
                                                                            </div>
                                                                            <div>
                                                                                <h1 class="capitalize text-gray-heading text-xs">
                                                                                    Played
                                                                                    matches
                                                                                </h1>
                                                                                <h2 class="text-black font-medium text-sm">
                                                                                    0</h2>
                                                                            </div>
                                                                            <div>
                                                                                <h1 class="capitalize text-gray-heading text-xs">
                                                                                    Pending
                                                                                    requests
                                                                                </h1>
                                                                                <h2 class="text-black font-medium text-sm">
                                                                                    0</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-2">
                                                                            <div class="flex items-center">
                                                                                <img src="{{ asset('assets/images/black-location.svg') }}" class="mr-1"/>
                                                                                    <h1 class="text-black text-xs font-normal">{{ $stadiums->address }}</h1>
                                                                            </div >
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="w-full md:w-2/5 p-3">
                                                                    <div id="map{{$stadiums->id}}{{$stadiums->name}}" class="w-full h-full object-cover"></div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="hidden group-hover:block absolute bottom-[1.25rem] right-1 px-5 py-2 rounded-2xl bg-black ">
                                                                <a href="{{ Route('admin.stadium.edit', $stadiums->id) }}"
                                                                   class="inline-flex space-x-2 items-center">
                                                                    <img
                                                                        src="{{ asset('assets/images/icons/Icon feather-eye.svg') }}"
                                                                        class="mr-1"
                                                                        alt="Logo"/>
                                                                    <h1 class="text-gray-200 font-normal text-base">
                                                                        Edit</h1>
                                                                </a>
                                                                {{-- <a href="#" class="inline-flex space-x-2 items-center">
                                                                <img src="{{asset('assets/images/trash-round.svg')}}" alt="">
                                                                <h1 class="text-gray-200 font-normal text-base">Delete</h1>
                                                                </a>--}}
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @else
                                            <div class="py-5 px-3 py-3 md:py-3">
                                                <h1 class="uppercase text-white text-sm font-semibold tracking-wide text-center">
                                                    No such data match</h1>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="hidden" id="tab-settings">
                                    <div class="bg-white rounded-3xl py-5">
                                        <div class="px-3 py-3 xl:px-12 md:py-3">
                                            <div id="map" style="width: 100%; height: 400px;"></div>
                                            <div id="infowindow-content">
                                                <img src="" width="16" height="16" id="place-icon">
                                                <span id="place-name" class="title"></span><br>
                                                <span id="place-address"></span>
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
        {{-- <div class="px-2 pt-2 pb-6">
            <div class="flex space-x-2 items-center px-2 pt-2 pb-6 justify-end">
                <ul class="flex space-x-0.5">
                    <li class="-mb-px last:mr-0 flex-auto text-center">
                        <a
                            class="cursor-pointer px-3 py-1.5 text-sm font-bold text-black bg-white border border-gray-200 rounded-md focus:z-10">
                            Grid
                        </a>
                    </li>
                    <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                        <a
                            class="cursor-pointer px-3 py-1.5 text-sm font-bold text-black bg-white border border-gray-200 rounded-md focus:z-10">
                            Map
                        </a>
                    </li>
                </ul>
                <button onclick="openDropdown(event,'exportdropdown-id')"
                    class="ease-linear transition-all duration-150 text-white bg-export-btn font-medium rounded-lg text-sm px-3 py-1 text-center inline-flex items-center">
                    <img src="{{ asset('assets/images/Icons - Navigation icon (12 states).svg') }}" class="mr-2" />Export
                    <img src="{{ asset('assets/images/Polygon 9.svg') }}" class="ml-2" /></button>
                <div id="exportdropdown-id"
                    class="hidden bg-export-btn rounded-lg z-50 p-1 mt-7 text-center w-[7rem] lg:w-[7.3rem]">
                    <ul class="flex flex-col gap-y-2">
                        <li>
                            <a href="{{ Route('admin.stadium.generate.pdf') }}"
                                class="text-white font-medium uppercase text-xs">PDF</a>
                        </li>
                        <li>
                            <a href="{{ Route('admin.stadium.generate.word') }}"
                                class="text-white font-medium uppercase text-xs">Docx</a>
                        </li>
                    </ul>
                </div>
                <img src="{{ asset('assets/images/Path 303.svg') }}" class="mr-1" alt="Logo" />
            </div>
            <section class="py-5">
            <div class="px-4">
                <h1 class="uppercase text-white text-sm font-semibold tracking-wide">Total stadium ({{ $stadium_count }})
                </h1>
            </div>
            @if ($stadium->count() > 0)
                <div class="py-5 px-3md:py-3">
                    <div class="grid lg:grid-cols-2 gap-4">
                        @foreach ($stadium as $stadiums)
                            <div class="group relative bg-white rounded-2xl">
                                <div class="flex flex-col-reverse md:flex md:flex-row">
                                    <div class="w-full md:w-3/5 p-3">
                                        @if ($stadiums->status == 'Published')
                                            <button
                                                class="mb-2 rounded-full text-sm px-6 py-1 tracking-wide bg-yellow-btn text-slate-100 font-medium w-32"
                                                style="background-color: green;">
                                                Published
                                            </button>
                                        @else
                                            <button
                                                class="mb-2 rounded-full text-sm px-6 py-1 tracking-wide bg-yellow-btn text-slate-100 font-medium w-32"
                                                style="background-color: red;">
                                                Unpublished
                                            </button>
                                        @endif
                                        <a href="" class="flex items-center">
                                            <img src="{{ asset('assets/images/ground-photo.png') }}"
                                                class="rounded-full border-2 border-light-yellow mr-2 h-14"
                                                alt="Logo" />
                                            <h1 class="text-black text-base md:text-xl font-bold">
                                                {{ $stadiums->name }}
                                            </h1>
                                        </a>
                                        <div class="my-3">
                                            <div class="flex justify-between">
                                                <div>
                                                    <h1 class="capitalize text-gray-heading text-xs">upcoming
                                                        matches</h1>
                                                    <h2 class="text-black font-medium text-sm">0</h2>
                                                </div>
                                                <div>
                                                    <h1 class="capitalize text-gray-heading text-xs">Played
                                                        matches
                                                    </h1>
                                                    <h2 class="text-black font-medium text-sm">0</h2>
                                                </div>
                                                <div>
                                                    <h1 class="capitalize text-gray-heading text-xs">Pending
                                                        requests
                                                    </h1>
                                                    <h2 class="text-black font-medium text-sm">0</h2>
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                                <a href="#" class="flex items-center">
                                                    <img src="{{ asset('assets/images/black-location.svg') }}"
                                                        class="mr-1" alt="Logo" />
                                                    <span class="text-black">
                                                        <div>
                                                            {{ $stadiums->address }}
                                                        </div>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full md:w-2/5 p-3">
                                        <img class="w-full h-full object-cover " src="{{ asset('assets/images/map1.png') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div
                                    class="hidden group-hover:block absolute bottom-[1.25rem] right-1 px-5 py-2 rounded-2xl bg-black ">
                                    <a href="{{ Route('admin.stadium.edit', $stadiums->id) }}"
                                        class="inline-flex space-x-2 items-center">
                                        <img src="{{ asset('assets/images/icons/Icon feather-eye.svg') }}" class="mr-1"
                                            alt="Logo" />
                                        <h1 class="text-gray-200 font-normal text-base">Edit</h1>
                                    </a>
                                    {{-- <a href="#" class="inline-flex space-x-2 items-center">
                                    <img src="{{asset('assets/images/trash-round.svg')}}" alt="">
                                    <h1 class="text-gray-200 font-normal text-base">Delete</h1>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="py-5 px-3 py-3 md:py-3">
                    <h1 class="uppercase text-white text-sm font-semibold tracking-wide text-center">No such data match</h1>
                </div>
            @endif
        </section>
        </div> --}}

        <div class="fixed bottom-5 right-3 lg:inset-y-2/3 lg:right-2 2xl:right-[6.5rem]">
            <div class="flex flex-col space-y-4">
                <button class="bg-light-yellow text-white p-4 rounded-full ease-linear transition-all duration-150"
                        style="background-color: green;" type="button">
                    <a href="{{ Route('admin.stadium.create') }}"><img class="w-5 h-5"
                                                                       src="{{ asset('assets/images/add-icon.svg') }}"
                                                                       alt=""></a>
                </button>
                <button class="bg-black text-white p-4 rounded-full ease-linear transition-all duration-150"
                        type="button"
                        onclick="toggleModal('modal-id')">
                    <img class="w-5 h-5" src="{{ asset('assets/images/filter-icon.svg') }}" alt="">
                </button>
            </div>
        </div>
        <div
            class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
            id="modal-id">
            <div class="relative my-auto mx-auto w-72 ">
                <!--content-->
                <div
                    class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-black outline-none focus:outline-none">
                    <!--header-->
                    <div class="flex items-start justify-between px-5 pt-2 rounded-t">
                        <h3 class="text-xs text-white font-semibold">
                            Filter by
                        </h3>
                        <button class="text-white float-right text-sm leading-none font-normal"
                                onclick="toggleModal('modal-id')">
                            x
                        </button>
                    </div>
                    <form action="{{ Route('admin.stadium.list') }}" method="get">
                        @csrf
                        <!--body-->
                        <div class="relative px-6 flex-auto">
                            <div class="pt-2 ">
                                <h1 class="text-white text-xs font-bold uppercase">location</h1>
                                <div class="mt-2">
                                    <input type="text" name="search_by_address"
                                           class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2.5 placeholder-border-gray text-border-gray"
                                           placeholder="Search by location">
                                </div>
                                <div class="mt-2">
                                    <div class="relative items-center">
                                        <select
                                            class="appearance-none border border-white bg-transparent text-xs font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5 placeholder-border-gray">
                                            <option selected>Distance</option>
                                            <option value="US">Faraway</option>
                                            <option value="CA">Nearby</option>
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
                                           class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2.5 placeholder-border-gray text-border-gray"
                                           placeholder="Search stadium by name">
                                </div>
                            </div>
                            <div class="pt-2 ">
                                <h1 class="text-white text-xs font-bold uppercase">Date</h1>
                                <div class="mt-2">
                                    <div class="relative items-center">
                                        <input type="text" id="stadium_start_date" autocomplete="off" name=""
                                               class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5 placeholder-border-gray"
                                               placeholder="Start Date">
                                        <span class="absolute top-2 right-3.5 date-icon-stadium-start">
                                            <img src="{{ asset('assets/images/white-calender-icon.svg') }}"
                                                 alt="">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2 ">
                                <h1 class="text-white text-xs font-bold uppercase">Status</h1>
                                <div class="mt-2">
                                    <div class="relative items-center">
                                        <select name="search_by_status"
                                                class="appearance-none border border-white bg-transparent text-xs font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5">
                                            <option value="" selected>See All</option>
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
                            <a href="{{url('admin/stadium/list')}}">
                            <button
                                class="w-full text-black font-bold bg-white uppercase text-sm px-6 py-3 rounded-full mr-1 mb-1 ease-linear transition-all duration-150"
                                type="submit">
                                Apply
                            </button>
                        </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/custom/script/custom_calender_picker.js') }}"></script>


    <!--Map grid tabs-->
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

    <script>
        var icon = "{{URL::asset('assets/images/camel.png')}}";
        function initMap() {
            var locations = @json($stadium);
            locations.forEach((element) => {
                showMap(element);
            });
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: true,
            });

            var infowindow = new google.maps.InfoWindow();

            var marker, i;
            var bounds = new google.maps.LatLngBounds();
            locations.forEach((element, index) => {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(element['latitude'], element['longitude']),
                    map: map,
                    icon: icon
                });
                bounds.extend(marker.getPosition());

                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infowindow.setContent(element['name']);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            });
            map.fitBounds(bounds);
        }

        function showMap(element) {
                var latlng = new google.maps.LatLng(element['latitude'], element['longitude']); // default location
                var myOptions = {
                    zoom: 16,
                    center: latlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                };

                var map = new google.maps.Map(document.getElementById('map'+element['id']+element['name']), myOptions);
                var infowindow = new google.maps.InfoWindow(),
                    marker, lat, lng;

                    lat = (element['latitude']);
                    lng = (element['longitude']);
                    name = (element['name']);

                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(lat, lng),
                        name: name,
                        map: map,
                        icon: icon
                    });
                    google.maps.event.addListener(marker, 'click', function (e) {
                        infowindow.setContent(this.name);
                        infowindow.open(map, this);
                    }.bind(marker));
        }

    </script>
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAP_API_KEY')}}&libraries=places&callback=initMap"></script>
@endsection
