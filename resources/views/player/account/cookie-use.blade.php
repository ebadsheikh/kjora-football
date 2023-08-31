<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/custom/style/custom_calender_picker.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
    <link rel="stylesheet" href="{{asset('assets/custom/style/select-style.css')}}">
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
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
                        '400': '21.3rem',
                    },
                    placeholderColor: {
                        'dark-gray': '#373535',
                    },
                    placeholderOpacity: {
                        '40': '0.4',
                    },
                    borderOpacity: {
                        '40': '0.4',
                    },
                    borderWidth: {
                        '3': '3px',
                    },

                }
            }
        }
    </script>
    <title>Create account</title>
</head>

<body>
    <div class="to-black from-dark-green bg-gradient-to-t bg-no-repeat relative w-full min-h-screen block font-roboto">
        @include('player.auth.top_nav')
        <div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
            <div class="grid lg:grid-cols-2 gap-x-4 lg:gap-x-8 2xl:gap-24">
                <div>
                </div>
                <div class="rounded-2xl bg-white pt-10 pb-3.5 px-3 md:px-5 lg:px-5 xl:px-12 2xl:py-16 h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                    <h1 class="uppercase text-sm sm:text-lg lg:text-2xl font-semibold text-center text-light-green">Cookie use</h1>
                    <div class="border-2 relative border-slate-200 rounded-md mt-8 mb-2">
                        <p class="p-3 text-sm overflow-y-auto h-auto h-[27rem]">
                            {{$cookies->description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5">
            <footer class="absolute inset-x-0 bottom-3">
                <p class="text-center font-medium text-white text-xxs">
                    Copyright &copy; 2022 Kjora. All rights reserved.
                </p>
            </footer>
        </div>
    </div>
</body>

</html>


