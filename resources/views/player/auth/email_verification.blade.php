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
    <title>Email verification</title>
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
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-4 lg:gap-x-8 2xl:gap-24">
                <div>
                </div>
                <div
                    class="rounded-2xl bg-white py-5 2xl:pt-32 2xl:pb-28 h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                    <h1 class="uppercase text-sm sm:text-lg md:text-2xl font-semibold text-center text-light-green">
                        Email verification</h1>
                        <form action="{{Route('player.check.email.verification', encrypt($user->email))}}" method="POST">
                                @csrf
                                @if (session('success'))
                                <div class="p-2">
                                    <div class="text-green-600 text-xs">
                                        {{ session('success') }}
                                    </div>
                                </div>
                                @endif
                                @if (session('error'))
                                <div class="p-2">
                                    <div class="text-red-700 text-xs" role="alert">
                                        {{ session('error') }}
                                    </div>
                                </div>
                                @endif
                            <div class="px-3 md:px-5 lg:px-5 xl:px-12 2xl:px-20">
                                <p class="text-center text-xs pt-44 lg:pt-28 xl:pt-44 pb-12">Please enter the 4 digit code sent
                                    to {{$user->email}}</p>
                                <div id="otp" class="flex flex-row justify-center text-center py-4 px-2">
                                    <input class="m-2 border h-14 w-14 bg-black text-slate-300 text-center form-control rounded"
                                        type="text" id="first" maxlength="1" name="email_verification_a"/>
                                    <input class="m-2 border h-14 w-14 bg-black text-slate-300 text-center form-control rounded"
                                        type="text" id="second" maxlength="1" name="email_verification_b"/>
                                    <input class="m-2 border h-14 w-14 bg-black text-slate-300 text-center form-control rounded"
                                        type="text" id="third" maxlength="1" name="email_verification_c"/>
                                    <input class="m-2 border h-14 w-14 bg-black text-slate-300 text-center form-control rounded"
                                        type="text" id="fourth" maxlength="1" name="email_verification_d"/>
                                </div> 
                                <button class="md:mt-20 xl:mt-10  w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full"
                                    type="submit" >
                                    verify
                                </button>

                            </div>
                        </form>
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
    <script type="text/javascript">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
    </script>
</body>

</html>
