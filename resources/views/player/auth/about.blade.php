<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
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
                        'modal-black': '#212121',
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
                    spacing: {
                        '400': '21.3rem',
                    },
                    borderWidth: {
                        '3': '3px',
                    },
                }
            }
        }
    </script>
    <title>About</title>
</head>

<body>
    <div class="to-black from-dark-green bg-gradient-to-t bg-no-repeat relative w-full min-h-screen block font-roboto ">
        @include('player.auth.top_nav')
        <div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
            <div class="grid lg:grid-cols-2 gap-8 2xl:gap-24">
                <div class="justify-self-end">
                    <span class="text-slate-50 text-3xl lg:text-3xl uppercase">welcome to</span>
                    <br>
                    <span class="text-slate-50 text-6xl font-bold uppercase">kjora</span>
                </div>
                <div
                    class="rounded-2xl bg-white px-5 py-9 md:py-12 lg:pt-12 lg:pb-4 xl:py-12 2xl:px-14 h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                    <h1 class="uppercase text-sm sm:text-lg lg:text-2xl font-semibold text-center text-light-green">
                        about</h1>
                    <div class="border-2 border-slate-200 rounded-md mt-8 mb-2">
                        <p class="p-5 text-sm overflow-y-auto h-96 xl:h-[27rem] 2xl:h-[32rem]">
                            Kjora is a platform that aims to promote playing football for both retiring professionals
                            and amateurs through enhanced hiring based on player position as a lucrative second career.
                            The platform is an unconventional business wherein it does not own any club or has hired
                            players on its payroll. Kjora develops, markets, and operates a Website and Mobile app.
                        </p>
                    </div>
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
    </div>
</body>

</html>
