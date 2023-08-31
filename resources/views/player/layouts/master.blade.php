<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:site_name" content="KJORA" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/custom/style/custom_range.css') }}">
    <link rel="stylesheet" href="{{asset('assets/custom/style/slider-style.css')}}">
    <link rel="shortcut icon" href="{{ asset('assets/images/kjora-new-logo.svg') }}" />
    <meta name="apple-mobile-web-app-title" content="KJORA">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/kjora-new-logo.svg') }}">
    <link rel="apple-touch-startup-image" href="{{ asset('assets/images/kjora-new-logo.svg') }}" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/kjora-new-logo.svg') }}" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Kjora">
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css"
        rel="stylesheet">
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css"
        rel="stylesheet">
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
    <link rel="stylesheet" href="{{asset('assets/custom/style/select-style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/custom/style/emoji.css')}}">
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
                        'light-green': '#006400',
                        'golden-yellow': '#CCBE77',
                        'photo-overlay': '#212121 ',
                        'border-gray': '#707070',
                        'ball-green': '#094509',
                        'rating-yellow': '#EAC600',
                        'heading-white': '#FFFFFF',
                        'gray-heading': '#656565',
                        'dark-gray': '#373535',
                        'upgrade-btn': '#CCBE77',
                        'modal-black': '#212121',
                    },
                    opacity: {
                        '62': '0.62',
                    },
                    fontSize: {
                        'xxs': '10px',
                    },
                    spacing: {
                        '89': '5.563rem',
                        '109': '6.813rem',
                        '121': '31.563rem',
                        '400': '21.3rem',
                    },
                    maxWidth: {
                        '10': '10rem',
                    }

                }
            }
        }
    </script>
    <script src="https://cdn.tiny.cloud/1/s1nd0ng3otpvcgqtrlimb9ld6q54a3f64uncmj8nc4fmaxqd/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <style>
        .verify-img img{
            border-radius: 7px;
            width: 100%;
            height: 115px;
        }
        .gm-style-iw-c {
            max-height: none !important;
        }

        .gm-style-iw-d {
            max-height: none !important;
        }
        .gm-style .gm-style-iw-c{
            background-color: transparent !important;
            box-shadow: none !important;
        }

        .gm-style-iw-d{
            overflow: hidden !important;
        }

        .gm-style-iw-d >button>span{
            display: none !important;
        }

        .gm-style-iw-tc{
            display: none !important;
        }
        .scroll::-webkit-scrollbar {
            display: none;
        }
        .gm-ui-hover-effect{
            display: none !important;
        }
        #accountdropdown-id{
            inset: 4px 4px auto auto !important;
        }
    </style>
    <style>
        .social-btn-sp #social-links {
            margin: 0 auto;
            max-width: 500px;
        }
        .social-btn-sp #social-links ul li {
            display: inline-block;
            padding: 0px 5px;
        }
        .social-btn-sp #social-links ul li a {
            color: #ffffff;
            margin: 1px;
            font-size: 14px;
        }
        table #social-links{
            display: inline-table;
        }
        table #social-links ul li{
            display: inline;
        }
        table #social-links ul li a{
            padding: 5px;
            border: 1px solid #ccc;
            margin: 1px;
            font-size: 15px;
            background: #e3e3ea;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
    <link rel="stylesheet" href="{{ asset('assets/custom/style/select-style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="{{ asset('assets/custom/style/custom_calender_picker.css') }}">
    <title>Home</title>
</head>

<body class="bg-no-repeat bg-right-top bg-cover font-roboto bg-ball-green relative"
    style="background-image: url('https://kjora.devatease.com/assets/images/bg-ball.png'); height: 500px;"
    cz-shortcut-listen="true">
    <div class="min-h-full md:min-h-screen relative">
        @include('player.layouts.top_nav')
        {{-- <div> --}}
        <footer class="absolute p-3 inset-x-0 bottom-2">
            <p class="text-center font-medium text-white text-xxs">
                Copyright © 2022 Kjora. All rights reserved.
            </p>
        </footer>
        @yield('content')

    </div>
    <script type="text/javascript">!function(e,t,n){function a(){var e=t.getElementsByTagName("script")[0],n=t.createElement("script");n.type="text/javascript",n.async=!0,n.src="https://beacon-v2.helpscout.net",e.parentNode.insertBefore(n,e)}if(e.Beacon=n=function(t,n,a){e.Beacon.readyQueue.push({method:t,options:n,data:a})},n.readyQueue=[],"complete"===t.readyState)return a();e.attachEvent?e.attachEvent("onload",a):e.addEventListener("load",a,!1)}(window,document,window.Beacon||function(){});
    </script><script type="text/javascript">window.Beacon('init', 'f3aa7107-d788-412a-ae85-d2cf1e2cdf8e')</script>

    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
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
    {{-- slider --}}
    <script>
        // set the default active slide to the first one
        let slideIndex = 1;
        showSlide(slideIndex);

        // change slide with the prev/next button
        function moveSlide(moveStep) {
            showSlide(slideIndex += moveStep);
        }

        // change slide with the dots
        function currentSlide(n) {
            showSlide(slideIndex = n);
        }

        function showSlide(n) {
            let i;
            const slides = document.getElementsByClassName("slide");
            const dots = document.getElementsByClassName('dot');

            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }

            // hide all slides
            for (i = 0; i < slides.length; i++) {
                slides[i].classList.add('hidden');
            }
            // remove active status from all dots
            for (i = 0; i < dots.length; i++) {
                dots[i].classList.remove('bg-black');
                dots[i].classList.add('bg-border-gray');
            }

            // show the active slide
            slides[slideIndex - 1].classList.remove('hidden');

            // highlight the active dot
            dots[slideIndex - 1].classList.remove('bg-border-gray');
            dots[slideIndex - 1].classList.add('bg-black')
        }
    </script>
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
        window.onclick = function(event) {
            var dropdownWrapper = document.getElementById('notifydropdown-wrapper');
            if (!dropdownWrapper.contains(event.target) && !menu.classList.contains('hidden')) {
                menu.classList.add('hidden');
            }
        }
    </script>
    <script>
        function openDropdown(event, accountdropdownID) {
            let element = event.target;
            while (element.nodeName !== "DIV") {
                element = element.parentNode;
            }
            var popper = Popper.createPopper(element, document.getElementById(accountdropdownID), {
                placement: 'left'
            });
            document.getElementById(accountdropdownID).classList.toggle("hidden");
            document.getElementById(accountdropdownID).classList.toggle("block");
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
    <script type="text/javascript">
        function custom_template(obj) {
            var data = $(obj.element).data();
            var text = $(obj.element).text();
            if (data && data['img_src']) {
                img_src = data['img_src'];
                template = $("<div><img src=\"" + img_src +
                    "\" style=\"width:19px;height:19px;\"/><p style=\"font-size: 1rem; margin-left: 7px; line-height: 1rem; text-align:center; border: 0px !important; \">" +
                    text + "</p></div>");
                return template;
            }
        }
        var phone_options = {
            'templateSelection': custom_template,
            'templateResult': custom_template,
            'width': '100px'
        }
        $('#phone_select2').select2(phone_options);
    </script>
    <script type="text/javascript">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
    </script>
    <script type="text/javascript">
        function toggleModal(flagmodalID) {
            document.getElementById(flagmodalID).classList.toggle("hidden");
            document.getElementById(flagmodalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(flagmodalID).classList.toggle("flex");
            document.getElementById(flagmodalID + "-backdrop").classList.toggle("flex");
        }
    </script>
    <script>
        function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
</body>

</html>
