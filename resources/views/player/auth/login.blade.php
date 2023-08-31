<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="shortcut icon" href="{{ asset('assets/images/kjora-new-logo.svg') }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/home-logo.jpeg') }}">
    <link rel="apple-touch-startup-image" href="{{ asset('assets/images/home-logo.jpeg') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('assets/images/home-logo.jpeg') }}"/>
    <meta name="apple-mobile-web-app-title" content="Kjora">
    <meta name="apple-mobile-web-app-capable" content="yes">
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
                        'border-gray': '#707070',
                    },
                    spacing: {
                        '89': '5.563',
                        '109': '109px',
                    },
                    fontSize: {
                        'xxs': '10px',
                    },
                    spacing: {
                        '89': '5.563rem',
                        '109': '6.813rem',
                        '121': '31.563rem',
                    },
                    placeholderColor: {
                        'dark-gray': '#373535',
                    },
                    placeholderOpacity: {
                        '40': '0.4',
                    },
                }
            }
        }
    </script>
    <title>Sign in</title>
</head>

<body class="relative to-black from-dark-green bg-gradient-to-t relative min-h-screen bg-no-repeat">
    @include('player.auth.top_nav')
    <div class="2xl:mt-48 py-12">
        <div class="grid justify-items-stretch md:justify-items-center">
            <div class="px-6">
                <div class="lg:mb-10 2xl:mb-10">
                    <span class="text-slate-50 text-3xl lg:text-3xl uppercase">welcome to</span>
                    <br>
                    <span class="text-slate-50 text-6xl font-bold uppercase">kjora</span>
                </div>
                <form class="py-3 md:w-[24rem] 2xl:w-121" method="POST" action="{{Route('check.login')}}">
                        @csrf
                        @if (session('error'))
                            <div class="text-xs pl-2 text-red-800" role="alert">
                                <p class="text-center">{{ session('error') }}</p>
                            </div>
                        @endif
                    <div class="mb-2 lg:mb-4">
                        <label class="block text-slate-50 text-xs tracking-wide font-semibold mb-1 lg:mb-2 px-2"
                            for="username">
                            Sign in
                        </label>
                        <input
                            class="appearance-none border text-xxs rounded-full w-full px-10 py-3 placeholder-dark-gray placeholder-opacity-40"
                            type="text" placeholder="Please enter username or email" v-model="form.email" name="email">
                            @error('email')
                                @include('errors.required_field', ['message' => $message])
                            @enderror
                    </div>
                    <div class="mb-2 lg:mb-4">
                        <label class="block text-slate-50 text-xs tracking-wide font-semibold mb-1 lg:mb-2 px-2"
                            for="password">
                            Password
                        </label>
                        <div class="relative">
                            <input
                                class="appearance-none rounded-full text-xxs w-full px-10 py-3 placeholder-dark-gray placeholder-opacity-40 mb-3"
                                type="password" placeholder="Please enter password" name="password" id="pass_log_id">
                                <div class="absolute top-2 right-3.5">
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                                </div>
                        </div>
                            @error('password')
                                @include('errors.required_field', ['message' => $message])
                            @enderror
                    </div>
                    <button
                        class="w-full bg-black text-white text-lg tracking-wide uppercase font-semibold py-2 px-5 rounded-full"
                        type="submit">
                        Sign In
                    </button>
                    <p class="mt-2 text-right font-medium text-xxs text-white ">
                       <a href="{{route('player-forgot-password')}}"> Forgot Password?</a>
                    </p>
                    <p class="mt-2 text-right font-medium text-xxs text-white ">
                        Don't have an account? <a href="{{Route('signup')}}" class="text-link-blue">Signup</a>
                    </p>
                </form>
            </div>
        </div>
        <div class="container py-5 px-2 md:px-10 2xl:px-20">
            <div class="flex space-x-3">
                <button class="rounded-full text-black bg-white px-4 py-2 inline-flex items-center"><img class="mr-2" src="../assets/images/apple-icon.svg" alt=""> App Store</button>
                <button class="rounded-full bg-black text-white px-4 py-2 inline-flex items-center"><img class="mr-2" src="../assets/images/play-icon.svg" alt=""> Google Play</button>
            </div>
            <div class="pl-11 flex justify-items-center space-x-2 mt-5">
                <button class="rounded-full  bg-white py-2 px-4 ">
                    <img src="../assets/images/facebook-icon.svg" alt="">
                </button>
                <button class="rounded-full  bg-white p-2 px-3">
                    <img src="../assets/images/linkedin-icon.svg" alt="">
                </button>
                <button class="rounded-full  bg-white p-2 ">
                    <img src="../assets/images/twitter-icon.svg" alt="">
                </button>
                <button class="rounded-full  bg-white p-2 ">
                    <img src="../assets/images/instagram-icon.svg" alt="">
                </button>
            </div>
        </div>
    </div>
    <div class="p-5">
        <footer class="absolute inset-x-0 bottom-3">
            <p class="text-center font-medium text-white text-xxs">
                Copyright &copy; 2022 Kjora. All rights reserved.
            </p>
        </footer>
    </div>
    <script>
        $(document).on('click', '.toggle-password', function() {

        $(this).toggleClass("fa-eye-slash");

        var input = $("#pass_log_id");
        input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
        });
    </script>
    <script>
        function toggleNavbar(collapseID) {
            document.getElementById(collapseID).classList.toggle("hidden");
            document.getElementById(collapseID).classList.toggle("flex");
        }
    </script>
        <script type="text/javascript">!function(e,t,n){function a(){var e=t.getElementsByTagName("script")[0],n=t.createElement("script");n.type="text/javascript",n.async=!0,n.src="https://beacon-v2.helpscout.net",e.parentNode.insertBefore(n,e)}if(e.Beacon=n=function(t,n,a){e.Beacon.readyQueue.push({method:t,options:n,data:a})},n.readyQueue=[],"complete"===t.readyState)return a();e.attachEvent?e.attachEvent("onload",a):e.addEventListener("load",a,!1)}(window,document,window.Beacon||function(){});
        </script><script type="text/javascript">window.Beacon('init', 'f3aa7107-d788-412a-ae85-d2cf1e2cdf8e')</script>

</body>

</html>
