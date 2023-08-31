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
                        'export-btn': '#152E03',
                        'ball-green': '#094509',
                        'heading-white': '#FFFFFF',
                        'gray-heading': '#656565',
                        'yellow-btn': '#FFC400',
                        'green-btn': '#029302',
                        'blue-btn': '#1E90D8',
                        'light-green':'#006400',
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
                <a href="{{route('admin.position.view')}}">
                    <img class="h-7 w-7" src="{{ asset('assets/images/icons/account-icon.svg') }}" alt="">
                </a>
            </div>
            <div class="flex space-x-0.5">
                <button onclick="openDropdown(event,'exportdropdown-id')"
                    class="ease-linear transition-all duration-150 text-white bg-export-btn font-medium rounded-lg w-[7.3rem] text-sm px-3 py-1 text-center inline-flex items-center">
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
        <a href="{{ route('admin.create.account') }}">
            <button class="bg-light-green p-4 rounded-full ease-linear transition-all duration-150" type="button">
                <img class="w-5 h-5" src="{{ asset('assets/images/add-icon.svg') }}" alt="">
            </button>
        </a>
    </div>
@endsection

@section('footer')
    @include('admin.layouts.footer')
@endsection

@section('script')
        <script type="text/javascript">
            function toggleModal(modalID) {
                document.getElementById(modalID).classList.toggle("hidden");
                document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
                document.getElementById(modalID).classList.toggle("flex");
                document.getElementById(modalID + "-backdrop").classList.toggle("flex");
            }
        </script>
        <script>
            var xValues = ["Admin", "Country", "Active", "Inactive", "Gender"];
            var yValues = [2, 3, 5, 4, 6];
            var barColors = [
                "#b91d47",
                "#00aba9",
                "#2b5797",
                "#e8c3b9",
                "#1e7145"
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
                        text: "Total Number Of Admin Is 8"
                    }
                }
            });
        </script>
    @endsection
