<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="{{ asset('assets/custom/style/select-style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
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
    <title>Forgot Password</title>
</head>

<body>
    <div class="to-black from-dark-green bg-gradient-to-t bg-no-repeat relative w-full min-h-screen block font-roboto ">
        <div class="flex justify-center pt-4 pb-2">
            <img class="w-24 h-24" src="{{asset('assets/images/kjora-new-logo.svg')}}" alt="">
        </div>
        <div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
            <div class="grid lg:grid-cols-2 gap-x-4 lg:gap-x-8 2xl:gap-24">
                <div>
                </div>
                <div class="rounded-2xl bg-white py-5 2xl:pt-32 2xl:pb-28 h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                    <h1 class="uppercase text-sm sm:text-lg md:text-2xl font-semibold text-center text-light-green">
                        forgot password?</h1>
                    <div class="px-3 md:px-5 lg:px-5 xl:px-12 2xl:px-20">
                        <p class="text-center text-xs pt-44 lg:pt-28 xl:pt-44 pb-12">Enter the phone number associated
                            with
                            your account and
                            we'll
                            send you a code to reset your Password</p>
                        <form class="pt-2 px-4 lg:pt-6 pb-3 lg:pb-8 " method="POST" action="{{Route('admin.get.phone-verification.code')}}">
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
                                <div class="flex items-center" id="phone_code">
                                    <select class="basis-1/5" id="phone_select2" name="country_code">
                                        @foreach ($country as $item)
                                                <option
                                                    data-img_src="{{ URL::asset($item->image) }}"
                                                    value="{{ $item->code }}" @if (old($item->name  == 'Kuwait'))
                                                    {{ 'selected' }}
                                                    @endif>{{ $item->code }}</option>
                                            @endforeach
                                    </select>
                                    <input type="number" id="hs-inline-leading-select-label" name="phone_number"
                                        class="basis-4/5 py-[0.62rem] md:py-2.5 px-4 grow w-full rounded-l-none rounded-full border-y border-r border-border-gray border-opacity-40 text-sm outline-none"
                                        >
                                        @error('new_password')
                                            @include('errors.required_field', ['message' => $message])
                                        @enderror
                                </div>
                                {{-- <div class="relative items-center">
                                    <input type="text" id="hs-inline-leading-select-label" name="phone_number" class="ml-7 py-3 px-4 pl-20 block w-full border border-gray-200 shadow-sm rounded-md text-sm" placeholder="+1 (000) 000-0000">
                                    <div class="absolute inset-y-0 left-0 flex items-center text-gray-500 pl-px ml-7">
                                        <select id="phone_select2" name="country_code" >
                                            @foreach ($country as $item)
                                                <option
                                                    data-img_src="{{ URL::asset($item->image) }}"
                                                    value="{{ $item->code }}" @if (old('country_id') == $item->id)
                                                    {{ 'selected' }}
                                                    @endif>{{ $item->code }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> --}}
                            </div>
                            <button
                                class="w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full ease-linear transition-all duration-150"
                                type="submit">
                                send
                            </button>
                        </form>
                        <p class="text-xxs text-center mt-2"><span
                                class="font-bold text-green-800 underline"><a href="{{route('admin.forgot-password')}}">Try another way</a></span> </p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
    <script type="text/javascript">
        function custom_template(obj) {
            var data = $(obj.element).data();
            var text = $(obj.element).text();
            if (data && data['img_src']) {
                img_src = data['img_src'];
                template = $("<div><img src=\"" + img_src + "\" style=\"width:19px;height:19px;\"/><p style=\"font-size: 1rem; margin-left: 7px; line-height: 1rem; text-align:center; border: 0px !important; \">" + text + "</p></div>");
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
</body>

</html>
