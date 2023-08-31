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
                <div class="rounded-2xl bg-white py-5 2xl:pt-32 2xl:pb-28 h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                    <h1 class="uppercase text-sm sm:text-lg md:text-2xl font-semibold text-center text-light-green">
                        create new password</h1>
                    <div class="px-3 md:px-5 lg:px-5 xl:px-12 2xl:px-20">
                        <p class="text-center text-xs pt-44 lg:pt-28 xl:pt-44 pb-12">Please enter your  new password to reset. Make sure you remember this password .</p>
                        <form class="pt-2 px-4 lg:pt-6 pb-3 lg:pb-8 " action="{{Route('admin.update.phone.password', [encrypt($profile->phone), $profile->user_id])}}" method="POST">
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
                                <div class="text-red-700" role="alert">
                                    {{ session('error') }}
                                </div>
                            </div>
                            @endif
                            <div class="mb-2">
                                <label class="uppercase block mb-1 text-light-green text-xs font-bold px-5">new password</label>
                                <input type="text"
                                    class="appearance-none border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="Please enter new password" name="new_password" value="{{old('new_password')}}">
                                    @error('new_password')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                            </div>
                            <div class="mb-2">
                                <label class="uppercase block mb-1 text-light-green text-xs font-bold px-5">confirm password</label>
                                <input type="text"
                                    class="appearance-none border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="Please confirm password" name="confirm_password" value="{{old('confirm_password')}}">
                                    @error('confirm_password')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                            </div>
                            <button
                                class="md:mt-20 xl:mt-10 w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full ease-linear transition-all duration-150"
                                type="submit">
                                reset
                            </button>
                        </form>
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
