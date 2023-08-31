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
                <a class="text-white bg-light-green p-1 rounded-full font-medium"
                        href="{{Route('admin.rating.management.manage.rating')}}">
                        5.0
                    </a>
            </div>
            <div class="flex space-x-0.5">
                <button type="button"
                    class="px-3 py-1 text-sm font-bold text-black bg-white border border-gray-200 rounded-md focus:z-10 ">
                    Map
                </button>
                <button type="button"
                    class="px-3 py-1 text-sm font-bold text-black bg-white border border-gray-200 rounded-md focus:z-10 ">
                    Grid
                </button>
                <button
                    class="text-white bg-border-gray font-medium rounded-lg text-sm px-4 py-1 text-center inline-flex items-center"
                    type="button"><img src="{{asset('assets/images/Icons - Navigation icon (12 states).svg')}}" class="mr-2" />
                    Export
                    <img src="{{asset('assets/images/Polygon 9.svg')}}" class="ml-2" />
                </button>
            </div>
            <img src="{{ asset('assets/images/Path 303.svg') }}" class="mr-1" alt="Logo" />
        </div>
        <section class="pt-6">
            <div class="bg-white rounded-3xl py-5 h-96">
                <div class="xl:px-96 py-5">
                    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                </div>
            </div>
        </section>
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
            var xValues = ["1 Star", "2 Star", "3 Star", "4 Star", "5 Star"];
            var yValues = [2, 3, 1, 5, 2];
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
                        text: "Total number of rating 2"
                    }
                }
            });
        </script>
    @endsection
