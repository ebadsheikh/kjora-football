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
    <div class="flex space-x-2 items-center justify-end">
        <div>
            <a href="{{Route('admin.notification.management.list')}}">
                <img class="h-8 w-8 ease-linear transition-all duration-150 cursor-pointer" src="{{asset('assets/images/icons/notification-icon.svg')}}" >
            </a>
        </div>
        {{-- <div class="flex space-x-0.5">
            <button type="button"
                class="px-3 py-1 text-sm font-bold text-black bg-white border border-gray-200 rounded-md focus:z-10 ">
                Map
            </button>
            <button type="button"
                class="px-3 py-1 text-sm font-bold text-black bg-white border border-gray-200 rounded-md focus:z-10 ">
                Grid
            </button>
        </div> --}}
        <img src="{{asset('assets/images/Path 303.svg')}}" class="mr-1" alt="Logo" />
    </div>
    <section class="pt-6">
        <div class="bg-white rounded-3xl py-5 h-96">
        </div>
    </section>
</div>
@endsection
