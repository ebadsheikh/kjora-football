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
                    },
                    spacing: {
                        '89': '5.563',
                        '109': '109px',
                        '121': '31.563rem',
                        '400': '21.3rem',
                    },
                    opacity: {
                        '40': '0.4',
                    },
                    fontSize: {
                        'xxs': '10px',
                    },
                    placeholderColor: {
                        'dark-gray': '#373535',
                    },
                }
            }
        }
    </script>
    <title>Contact</title>
</head>

<body>
    <div class="bg-no-repeat bg-right bg-cover relative w-full min-h-screen block font-roboto"
        style="background-image: url('../assets/images/default-background.jpg');">
        @include('player.auth.top_nav')
        <div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
            <div class="grid lg:grid-cols-2 gap-8 2xl:gap-24">
                <div class="justify-self-end">
                    <span class="text-slate-50 text-3xl lg:text-3xl uppercase">welcome to</span>
                    <br>
                    <span class="text-slate-50 text-6xl font-bold uppercase">kjora</span>
                </div>
                <div class="rounded-2xl bg-white px-5 py-9 md:py-12 lg:pt-8 lg:pb-4 xl:py-12 2xl:px-14 h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                    <h1 class="uppercase text-sm sm:text-lg lg:text-2xl font-semibold text-center text-light-green">contact
                    </h1>
                    <div class="xl:px-6 py-5">
                        <div class="grid grid-cols-2 gap-3">
                            <div class="col-span-2 md:col-span-1">
                                <h1 class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">
                                    First name
                                </h1>
                                <h1
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 text-border-gray text-opacity-40">
                                    Enter first name</h1>
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <h1 class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">
                                    surname
                                </h1>
                                <h1
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 text-border-gray text-opacity-40">
                                    Enter surname</h1>
                            </div>
                            <div class="col-span-2">
                                <h1 class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">
                                    email
                                </h1>
                                <h1
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 text-border-gray text-opacity-40">
                                    Enter email</h1>
                            </div>
                            <div class="col-span-2">
                                <h1 class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">
                                    subject
                                </h1>
                                <h1
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 text-border-gray text-opacity-40">
                                    Enter subject</h1>
                            </div>
                            <div class="col-span-2">
                                <label for="message"
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Message</label>
                                <div class="relative">
                                    <textarea id="message"
                                        class="border border-border-gray border-opacity-40 resize-none h-40 text-xs rounded-md w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                        placeholder="Briefly explain what happened"></textarea>
                                    <div class="absolute bottom-[13px] right-2.5 ">
                                        <div>
                                            <button
                                                class="bg-black text-white p-2 rounded-full ease-linear transition-all duration-150"
                                                type="button"><img class="w-5 h-5" src="../assets/images/add-icon.svg" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <button class="w-full bg-black text-white mt-3 2xl:mt-6 mb-2 uppercase font-medium py-2 px-4 rounded-full"
                                type="button">
                                submit
                            </button>
                            </div>
                        </div>
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
