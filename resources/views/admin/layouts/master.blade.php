<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="{{asset('assets/custom/style/custom_range.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/custom/style/custom_calender_picker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/custom/style/scrollbar.css')}}">
    <link rel="shortcut icon" href="{{ asset('assets/images/kjora-new-logo.svg') }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/home-logo.jpeg') }}">
    <link rel="apple-touch-startup-image" href="{{ asset('assets/images/home-logo.jpeg') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('assets/images/home-logo.jpeg') }}"/>
    <meta name="apple-mobile-web-app-title" content="Kjora">
    <meta name="apple-mobile-web-app-capable" content="yes">
    @yield('tailwind_script')
    <title>Dashboard</title>
    <style>
        .export-style{
            inset: -5px auto auto 0px !important;
        }
        .custom-dropdown-style{
            inset: -11px auto auto 0px !important;
        }
    </style>
</head>

<body class="bg-no-repeat bg-right-top bg-cover font-roboto bg-ball-green "  style="background-image: url('{{asset('assets/images/bg-ball.png')}}'); height: 500px;" cz-shortcut-listen="true">
<div class="min-h-full md:min-h-screen relative">
    <!-- Sidebar -->
    <div class="flex">
        @yield('side_nav')
        <div class="w-full md:ml-20">
            <!--Top menu-->
            @yield('top_nav')
            @yield('content')
        </div>
    </div>
    @yield('footer')
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="{{asset('assets/custom/script/tooltip.js')}}"></script>


    <!--Notification dropdown script-->
    <script>
        var menu = document.getElementById("notifymenu");
        // open/close the menu when the user clicks on the button
        function toggleMenu() {
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        }
        // close the menu when the user clicks outside of it
        window.onclick = function (event) {
            var dropdownWrapper = document.getElementById('notifydropdown-wrapper');
            if (!dropdownWrapper.contains(event.target) && !menu.classList.contains('hidden')) {
                menu.classList.add('hidden');
            }
        }
    </script>
    <script>
        var sideMenu = document.getElementById('side-menu');
        function openMenu() {
            sideMenu.classList.remove('left-[-250px]');
            sideMenu.classList.add('left-0');
        }

        function closeMenu() {
            sideMenu.classList.remove('left-0');
            sideMenu.classList.add('left-[-250px]');
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
    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
    <script>
        function openDropdown(event, exportdropdownID) {
            let element = event.target;
            while (element.nodeName !== "BUTTON") {
                element = element.parentNode;
            }
            var popper = Popper.createPopper(element, document.getElementById(exportdropdownID), {
                placement: 'bottom-start'
            });
            document.getElementById(exportdropdownID).classList.toggle("hidden");
            document.getElementById(exportdropdownID).classList.toggle("block");
        }
    </script>
    <script>
        function openDropdown(event, accountdropdownID) {
            let element = event.target;
            while (element.nodeName !== "DIV") {
                element = element.parentNode;
            }
            var popper = Popper.createPopper(element, document.getElementById(accountdropdownID), {
                placement: 'bottom-start'
            });
            document.getElementById(accountdropdownID).classList.toggle("hidden");
            document.getElementById(accountdropdownID).classList.toggle("block");
        }
    </script>
    @yield('script')
</body>

</html>
