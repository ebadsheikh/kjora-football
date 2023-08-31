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
                        'light-green':'#006400',
                        'upgrade-btn': '#CCBE77',
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
            <a href="{{Route('admin.security.management.security')}}">
                <img class="h-7 w-7" src="/assets/images/icons/ic_network_locked_24px.svg" alt="">
            </a>
        </div>

        <img src="{{asset('assets/images/Path 303.svg')}}" class="mr-1" alt="Logo" />
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
