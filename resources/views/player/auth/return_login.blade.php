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
                }
            }
        }
    </script>
    <title>Return to login</title>
</head>

<body>
    <div class="to-black from-dark-green bg-gradient-to-t bg-no-repeat relative w-full min-h-screen block font-roboto ">
        <nav class="bg-transparent py-2.5">
            <div class="flex justify-center">
                <div class="py-2">
                    <img class="w-24 h-24" src="{{asset('assets/images/kjora-new-logo.svg')}}" alt="">
                </div>
            </div>
        </nav>
        <div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
            <div class="grid lg:grid-cols-2 gap-x-4 lg:gap-x-8 2xl:gap-24">
                <div>
                </div>
                <div
                    class="rounded-2xl bg-white py-5 2xl:pt-32 2xl:pb-28 h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                    <h1 class="uppercase text-sm sm:text-lg md:text-2xl font-semibold text-center text-light-green">
                        successfull reset</h1>
                    <div class="px-3 md:px-5 lg:px-5 xl:px-12 2xl:px-20">
                        <p class="text-center text-xs py-44 lg:py-44 xl:py-48 pb-12">Your password has been successfully reset</p>
                        <a href="{{Route('login')}}">
                            <button
                                class="md:mt-20 xl:mt-10 w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full ease-linear transition-all duration-150"
                                type="button">
                                login
                            </button>
                        </a>
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
