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
            <div class="flex space-x-0.5">
                <button onclick="openDropdown(event,'exportdropdown-id')"
                            class="ease-linear transition-all duration-150 text-white bg-export-btn font-medium w-[7.3rem] rounded-lg text-sm px-3 py-1 text-center inline-flex items-center">
                            <img src="{{ asset('assets/images/Icons - Navigation icon (12 states).svg') }}"
                                class="mr-2" />Export
                            <img src="{{ asset('assets/images/Polygon 9.svg') }}" class="ml-2" /></button>
                        <div id="exportdropdown-id"
                            class="hidden bg-export-btn rounded-b-lg p-1 z-50 text-center w-[7.3rem] export-style">
                            <ul class="flex flex-col gap-y-2">
                                <li>
                                    <a href="{{ Route('admin.player.management.generate.pdf') }}"
                                        class="text-white font-medium uppercase text-xs ml-2">PDF</a>
                                </li>
                                <li>
                                    <a href="{{ Route('admin.player.management.generate.word') }}"
                                        class="text-white font-medium uppercase text-xs ml-2">Docx</a>
                                </li>
                            </ul>
                        </div>
            </div>
            <img src="{{ asset('assets/images/Path 303.svg') }}" class="mr-1" alt="Logo" />
        </div>
        <section class="pt-6">
            <div class="bg-white rounded-3xl p-7 h-96">
                <div class="grid md:grid-cols-3 gap-4">

                </div>
            </div>
        </section>
    </div>

@endsection
@section('footer')
    @include('admin.layouts.footer')
@endsection
@section('script')
@endsection
