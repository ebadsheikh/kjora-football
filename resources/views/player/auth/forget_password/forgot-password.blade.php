<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
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
    <title>Forgot Password</title>
</head>

<body>
    <div class="to-black from-dark-green bg-gradient-to-t bg-no-repeat relative w-full min-h-screen block font-roboto ">
        @include('player.auth.top_nav')
        <div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
            <div class="grid lg:grid-cols-2 gap-8 2xl:gap-24">
                <div class="justify-self-end">
                    <span class="text-slate-50 text-3xl lg:text-3xl uppercase">welcome Back to</span>
                    <br>
                    <span class="text-slate-50 text-6xl font-bold uppercase">kjora</span>
                </div>
                <div class="rounded-2xl bg-white py-12 2xl:pt-32 2xl:pb-28 h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                    <h1 class="uppercase text-sm sm:text-lg md:text-2xl font-semibold text-center text-light-green">
                        forgot password?</h1>

                        <p class="text-center px-3 text-xs lg:text-xxs xl:text-xs py-20 lg:pt-28 xl:pt-44 pb-12">Enter the email address associated
                            with
                            your account and
                            we'll
                            send you a link to reset your Password</p>
                            <div class="px-3 md:px-5 xl:px-12 2xl:px-20">
                        <form class="pt-2 px-4 lg:pt-6 pb-3 lg:pb-8 " method="POST" action="{{Route('player.check.email')}}">
                            @csrf
                            @if (session('success'))
                            <div class="p-2">
                                <div class="text-red-700" role="alert">
                                    {{ session('success') }}
                                </div>
                            </div>
                            @endif
                            @if (session('error'))
                            <div class="p-2">
                                <div class="text-red-700" role="alert">
                                    {{ session('error') }}
                                </div>
                            </div>
                            @endif
                            <div class="mb-2 lg:mb-4 2xl:mb-20">
                                <label class="uppercase block mb-1 text-light-green text-xs font-bold px-5">Email
                                    address</label>
                                <input type="text"
                                    class="appearance-none border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="Please enter email address" name="email" value="{{old('email')}}">
                                    @error('email')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                            </div>
                            <button
                                class="w-full  bg-black text-white font-medium uppercase py-2 px-4 rounded-full ease-linear transition-all duration-150"
                                type="submit">
                                send
                            </button>

                        </form>
                        <p class="mt-6 text-xxs text-center mt-2">Do you remember your password? <a href="{{Route('login')}}"
                                class="font-bold text-green-800 underline">Try signing in</a> </p>
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
