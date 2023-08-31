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
                        'ball-green': '#094509',
                        'light-green': '#006400',
                        'export-btn': '#152E03',
                        'border-gray': '#707070',
                        'rating-yellow': '#EAC600',
                        'heading-white': '#FFFFFF',
                        'gray-heading': '#656565',
                        'yellow-btn': '#FFC400',
                        'green-btn': '#029302',
                        'blue-btn': '#1E90D8',
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
            <div class="flex space-x-0.5">
                <button onclick="openDropdown(event,'exportdropdown-id')"
                    class="ease-linear transition-all duration-150 text-white bg-export-btn font-medium w-[7.3rem] rounded-lg text-sm px-3 py-1 text-center inline-flex items-center">
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
            <img src="../assets/images/Path 303.svg" class="mr-1" alt="Logo" />
        </div>
        <section class="pt-6">
            <div class="bg-white rounded-3xl py-5 h-96">
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
@endsection
