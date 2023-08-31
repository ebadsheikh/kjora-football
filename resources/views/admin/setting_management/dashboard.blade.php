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
            <img src="{{ asset('assets/images/Path 303.svg') }}" class="mr-1" alt="Logo" />
        </div>
        <section class="pt-6">
            <div class="bg-white rounded-3xl p-7 h-96">
                <div class="grid md:grid-cols-3 gap-4">
                    <div>
                        <a href="#">
                            <button
                                class="w-full text-white font-bold bg-black uppercase text-sm px-6 py-2.5 rounded-full mr-1 mb-1 ease-linear transition-all duration-150">
                                language
                            </button>
                        </a>
                    </div>
                    <div>
                        <a href="{{Route('admin.country.view')}}">
                            <button
                                class="w-full text-white font-bold bg-black uppercase text-sm px-6 py-2.5 rounded-full mr-1 mb-1 ease-linear transition-all duration-150">
                                country
                            </button>
                        </a>
                    </div>
                    <div>
                        <a href="{{Route('admin.club.view')}}">
                            <button
                                class="w-full text-white font-bold bg-black uppercase text-sm px-6 py-2.5 rounded-full mr-1 mb-1 ease-linear transition-all duration-150">
                                club
                            </button>
                        </a>
                    </div>
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
