@extends('admin.layouts.master')
@section('tailwind_script')
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'roboto': ['Roboto', 'sans-serif']
                    },
                    colors: {
                        'dark-green': '#084108',
                        'link-blue': '#0783FF',
                        'border-gray': '#707070',
                        'rating-yellow': '#EAC600',
                        'heading-white': '#FFFFFF',
                        'export-btn': '#152E03',
                        'gray-heading': '#656565',
                        'yellow-btn': '#FFC400',
                        'green-btn': '#029302',
                        'blue-btn': '#1E90D8',
                        'light-green': '#006400',
                        'ball-green': '#094509',
                    },
                    fontSize: {
                        'xxs': '10px',
                    },
                    spacing: {
                        '89': '5.563rem',
                        '109': '6.813rem',
                        '121': '31.563rem',
                    },
                }
            }
        }
    </script>
@endsection

@section('side_nav')
    @include('admin.layouts.side_nav')
@endsection

@section('top_nav')
    @include('admin.layouts.top_nav')
@endsection

@section('content')
    <div class="p-4 md:py-10 md:px-16">
        @include('admin.dashboard.common_heading')
        <div class="flex space-x-2 items-center justify-end pt-6">
            <div>
                <a href="{{ Route('admin.player.management.card.detail') }}">
                    <img class="bg-light-green rounded-full p-1 h-8 w-8"
                        src="{{ asset('assets/images/icons/nav-stadium-icon.svg') }}" alt="">
                </a>
            </div>
            <div class="flex space-x-0.5 ">
                <button onclick="openDropdown(event,'exportdropdown-id')"
                    class="ease-linear transition-all duration-150 text-white bg-export-btn font-medium w-[7.3rem] rounded-lg text-sm px-3 py-1 text-center inline-flex items-center">
                    <img src="{{ asset('assets/images/Icons - Navigation icon (12 states).svg') }}"
                        class="mr-2" />Export
                <img src="{{asset('assets/images/Polygon 9.svg')}}" class="ml-2" /></button>
                <div id="exportdropdown-id" class="hidden bg-export-btn rounded-b-lg p-1 z-50 text-center w-[7.3rem] export-style">
                    <ul class="flex flex-col gap-y-2 ">
                        <li>
                            <a href="{{Route('admin.player.management.export')}}" class="text-white font-medium uppercase text-xs ml-2">EXCEL</a>
                        </li>
                        <li>
                            <a href="{{Route('admin.player.management.download')}}" class="text-white font-medium uppercase text-xs ml-2">PDF</a>
                        </li>
                    </ul>
                </div>
            </div>
            <img src="{{ asset('assets/images/Path 303.svg') }}" class="mr-1" alt="Logo" />
        </div>
        <section class="pt-6">
            <div class="bg-white rounded-3xl py-5 h-96">
                <div class="xl:px-96 py-5">
                    <div class="flex justify-center">
                        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="fixed bottom-5 right-3 lg:inset-y-2/3 lg:right-2">
        <button class="bg-black text-white p-4 rounded-full ease-linear transition-all duration-150" type="button"
            onclick="toggleModal('modal-id')">
            <img class="w-5 h-5" src="{{ asset('assets/images/filter-icon.svg') }}" alt="">
        </button>
    </div>
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
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
                    <button class="text-white float-right text-lg leading-none font-thin" onclick="toggleModal('modal-id')">
                        x
                    </button>
                </div>
                <!--body-->
                <div class="relative px-6 flex-auto">
                    <div class="pt-2 ">
                        <h1 class="text-white text-xs font-bold uppercase">Age</h1>
                        <div class="mt-2 border border-white pt-1 pb-3 px-4 rounded-full">
                            <div>
                                <div class="values">
                                  <span id="age1">
                                    18
                                  </span>
                                  <span id="age2">
                                    60
                                  </span>
                                </div>
                                <div class="container">
                                  <div class="ageslider-track"></div>
                                  <input type="range" min="18" max="60" value="18" step="1" id="ageslider-1" oninput="ageslideOne()">
                                  <input type="range" min="18" max="60" value="60" step="1" id="ageslider-2" oninput="ageslideTwo()">
                                </div>
                              </div>
                        </div>
                    </div>
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
                                  <input type="range" min="0" max="5" value="0" step="0.1" id="slider-1" oninput="slideOne()">
                                  <input type="range" min="0" max="5" value="5" step="0.1" id="slider-2" oninput="slideTwo()">
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="pt-2 ">
                        <h1 class="text-white text-xs font-bold uppercase">Price</h1>
                        <div class="mt-2 border border-white pt-1 pb-3 px-4 rounded-full">
                            <div>
                                <div class="values">
                                  <span id="price1">
                                    1
                                  </span>
                                  <span id="price2">
                                    5000
                                  </span>
                                </div>
                                <div class="container">
                                  <div class="priceslider-track"></div>
                                  <input type="range" min="1" max="5000" value="1" step="1" id="priceslider-1" oninput="priceslideOne()">
                                  <input type="range" min="1" max="5000" value="5000" step="1" id="priceslider-2" oninput="priceslideTwo()">
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="pt-2 ">
                        <h1 class="text-white text-xs font-bold uppercase">search</h1>
                        <div class="mt-2">
                            <input type="text"
                                class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2.5 placeholder-border-gray text-border-gray"
                                placeholder="Search player by name">
                        </div>
                    </div>
                    <div class="pt-2 ">
                        <h1 class="text-white text-xs font-bold uppercase">location</h1>
                        <div class="mt-2">
                            <div class="relative items-center">
                                <select
                                    class="appearance-none border border-white bg-transparent text-xs font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5">
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
                        <h1 class="text-white text-xs font-bold uppercase">position</h1>
                        <div class="mt-2">
                            <div class="relative items-center">
                                <select
                                    class="appearance-none border border-white bg-transparent text-xs font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5">
                                    <option selected>All positions</option>
                                    <option value="GoalKeeper">GoalKeeper</option>
                                    <option value="Midfilder">Midfilder</option>
                                    <option value="forwarder">Forwarder</option>
                                    <option value="Midfilder">Midfilder</option>
                                    <option value="Defender">Defender</option>
                                </select>
                                <span class="absolute inset-y-4 right-3.5">
                                    <img src="{{ asset('assets/images/Polygon 9.svg') }}" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 ">
                        <h1 class="text-white text-xs font-bold uppercase">Date</h1>
                        <div class="mt-2">
                            <div class="relative items-center date-icon-player-start">
                                <input type="text" id="player_start_date" autocomplete="off" name="search_by_date_added"
                                    class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5 placeholder-border-gray" placeholder="Start Date">
                                    <span class="absolute top-2 right-3.5">
                                        <img src="{{asset('assets/images/white-calender-icon.svg')}}" alt="">
                                    </span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="relative items-center">
                                <input type="text" id="player_end_date" autocomplete="off" name="search_by_date_added"
                                    class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-2.5 placeholder-border-gray" placeholder="End Date">
                                    <span class="absolute top-2 right-3.5 date-icon-player-end">
                                        <img src="{{asset('assets/images/white-calender-icon.svg')}}" alt="">
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--footer-->
                <div class="p-6 rounded-b">
                    <a href="{{url('admin/player-management/list')}}">
                        <button
                            class="w-full text-black font-bold bg-white uppercase text-sm px-6 py-3 rounded-full mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button"
                            >
                            Apply
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden opacity-72 fixed inset-0 z-40 bg-modal-black" id="modal-id-backdrop"></div>

@endsection
@section('footer')
    @include('admin.layouts.footer')
@endsection
@section('script')

<script src="{{ asset('assets/custom/script/custom_calender_picker.js') }}"></script>
    <script type="text/javascript">
        function agerangeSlide(value) {
            document.getElementById('agerangeValue').innerHTML = value;
        }
    </script>
    <script type="text/javascript">
        function pricerangeSlide(value) {
            document.getElementById('pricerangeValue').innerHTML = value;
        }
    </script>
    <script type="text/javascript">
        function ratingrangeSlide(value) {
            document.getElementById('ratingrangeValue').innerHTML = value;
        }
    </script>
    <script type="text/javascript">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
    </script>
    <script>
        var xValues = ["Players", "GoalKeeper", "Defender", "Midfielder", "Forward", "Active", "Inavtive", "Country",
            "Gender"
        ];
        var yValues = [3, 2, 1, 5, 6, 4, 3, 1, 2];
        var barColors = [
            "#b91d47",
            "#00aba9",
            "#2b5797",
            "#e8c3b9",
            "#1e7145",
            "#D8816E",
            "#71D86E",
            "#D8D36E",
            "#B06ED8"
        ];

        new Chart("myChart", {
            type: "doughnut",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "Total Number Of Player Is 6"
                }
            }
        });
    </script>
    <script src="{{ asset('assets/custom/script/custom_range.js') }}"></script>
    <script src="{{ asset('assets/custom/script/custom_age.js') }}"></script>
    <script src="{{ asset('assets/custom/script/custom_price.js') }}"></script>

@endsection
