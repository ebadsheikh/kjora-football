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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="{{asset('assets/custom/style/select-style.css')}}">
    <link rel="shortcut icon" href="{{ asset('assets/images/kjora-new-logo.svg') }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/home-logo.jpeg') }}">
    <link rel="apple-touch-startup-image" href="{{ asset('assets/images/home-logo.jpeg') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('assets/images/home-logo.jpeg') }}"/>
    <meta name="apple-mobile-web-app-title" content="Kjora">
    <meta name="apple-mobile-web-app-capable" content="yes">
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
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 2xl:gap-24 ">
                <div class="justify-self-end">
                    <span class="text-slate-50 text-3xl lg:text-3xl uppercase">welcome Back to</span>
                    <br>
                    <span class="text-slate-50 text-6xl font-bold uppercase">kjora</span>
                </div>
                <form action="{{ Route('check.register') }}" method="post" enctype="multipart/form-data">
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
                        <input type="hidden" value="1" id="check_error"/>
                    @else
                        <input type="hidden" value="0" id="check_error"/>
                    @endif
                    <div class="bg-white px-5 py-9 md:py-12 lg:pt-12 lg:pb-4 xl:py-12 2xl:px-14 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem] rounded-2xl">
                        <div class="relative">
                            <input type="file" accept="image/*" onchange="showMyImage(this)" name="image"
                                class="hidden" id="profile_image" />
                            <img class="absolute border border-border-gray rounded-full -top-5 -right-2 md:-top-7 lg:-top-8 md:right-1 h-14 w-14 xl:h-20 xl:w-20"
                                id="thumbnil" src="{{ asset('assets/images/profile-image.jpg') }}" style="object-fit: cover;" alt="image">
                        </div>
                        @error('image')
                            @include('errors.required_field', ['message' => $message])
                        @enderror
                        <h1
                            class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                            create an account</h1>
                        <div class="xl:px-6 py-5 h-auto lg:h-[29rem] xl:h-[30rem] 2xl:h-[35rem] overflow-y-auto overflow-x-hidden">
                            <div class="grid grid-cols-1 md:grid-cols-2 md:gap-x-4 gap-y-2 2xl:gap-y-4">
                                <div class="col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">First
                                        name</label>
                                    <input
                                        class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                        type="text" placeholder="Please enter first name" name="first_name"
                                        value="{{ old('first_name') }}"
                                        onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                                    @error('first_name')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Surname</label>
                                    <input type="text"
                                        class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                        placeholder="Please enter surname" name="sur_name" value="{{ old('sur_name') }}"
                                        onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                                    @error('sur_name')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Email
                                        address</label>
                                    <input type="text"
                                        class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                        placeholder="Please enter email address" name="email"
                                        value="{{ old('email') }}" id="contact-email" onblur="validateEmail()" >
                                        <span id="email-error" class="alert alert-danger text-xs pl-2 text-red-800"></span>
                                    @error('email')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Password</label>
                                        <div class="relative">
                                            <input type="password"
                                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                                placeholder="Please enter password" name="password" id="pass_log_id">
                                                <div class="absolute top-2 right-3.5">
                                                    <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                                                </div>
                                        </div>
                                    @error('password')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Choose
                                        Country</label>
                                    <div class="relative items-center">
                                        <select id="id_select2_example" class="appearance-none w-full" name="country_id">
                                            @foreach ($country as $item)
                                            <option
                                            data-img_src="{{ URL::asset($item->image) }}"
                                                value="{{ $item->id }}" @if ( $item->name == 'Kuwait')
                                                {{ 'selected' }}
                                        @endif>{{ $item->name }}</option>
                                        @endforeach
                                        </select>
                                        @error('country_id')
                                            @include('errors.required_field', ['message' => $message])
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Favourite
                                        Club</label>
                                        <select id="id_select2_examples" class="appearance-none w-full" name="club_id">
                                            @foreach ($club as $item)
                                                <option
                                                data-img_src=" {{ URL::asset($item->image) }} "
                                                    value="{{ $item->id }}" @if (old('club_id') == $item->id)
                                                    {{ 'selected' }}
                                            @endif>{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('club_id')
                                            @include('errors.required_field', ['message' => $message])
                                        @enderror
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Date
                                        of
                                        birth</label>
                                    <div class="relative items-center">
                                        <input type="text" id="date_of_birth" autocomplete="off"
                                            class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                            placeholder="DD/MM/YY" value="{{ old('date_of_birth') }}"
                                            name="date_of_birth">
                                        <span class="absolute top-2 right-2 date-icon">
                                            <img src="{{ asset('assets/images/icons/black-calender-icon.svg') }}"
                                                alt="">
                                        </span>
                                        @error('date_of_birth')
                                            @include('errors.required_field', ['message' => $message])
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Phone</label>
                                        <div class="col-span-1">
                                            <div class="flex items-center" id="phone_code">
                                                <select class="basis-1/5" id="phone_select2"
                                                    name="phone_code">
                                                    @foreach ($country as $item)
                                                        <option data-img_src="{{ URL::asset($item->image) }}"
                                                            value="{{ $item->code }}"
                                                            @if ($item->name  == 'Kuwait') {{ 'selected' }} @endif>
                                                            {{ $item->code }}</option>
                                                    @endforeach
                                                </select>
                                                <input type="number" id="hs-inline-leading-select-label" name="phone"
                                                    class="basis-4/5 py-[0.62rem] md:py-2.5 px-4  block w-full rounded-l-none rounded-full border-y border-r border-border-gray border-opacity-40 text-sm">
                                            </div>
                                                    @error('phone')
                                                        @include('errors.required_field', ['message' => $message])
                                                    @enderror
                                                    @error('phone_merge')
                                                        @include('errors.required_field', ['message' => $message])
                                                    @enderror
                                        </div>
                                </div>
                                <div class="col-span-2">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Username</label>
                                        <div class="relative">
                                        <div class="absolute top-2 left-3.5">
                                            <span>@</span>
                                        </div>
                                        <input type="text"
                                        class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                        placeholder="" name="player_user_name" style="padding-left: 30px;"
                                        value="{{ old('player_user_name',) }}"
                                        >
                                        </div>
                                    @error('player_user_name')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Gender</label>
                                    <div class="flex items-center gap-x-2">
                                        <div class="form-check px-5">
                                            <input
                                                class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-light-green checked:ring-2 checked:ring-light-green checked:border-white checked:border-3 focus:ring-light-green focus-ring-2 transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                type="radio" name="gender" value="male" id="flexRadioDefault1"
                                                {{ old('gender') == 'male' ? 'checked' : '' }}>
                                            <label class="form-check-label inline-block text-gray-800 text-xs"
                                                for="flexRadioDefault1">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input
                                                class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-light-green checked:ring-2 checked:ring-light-green checked:border-white checked:border-3 focus:ring-light-green focus-ring-2 transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                type="radio" name="gender" value="female" id="flexRadioDefault1"
                                                {{ old('gender') == 'female' ? 'checked' : '' }}>
                                            <label class="form-check-label inline-block text-gray-800 text-xs"
                                                for="flexRadioDefault1">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                    @error('gender')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Position</label>
                                    <div class="flex gap-x-2 pl-5">
                                        @foreach ($player_position as $item)
                                            <div class="form-check ">
                                                <input
                                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-light-green checked:ring-2 checked:ring-light-green checked:border-white checked:border-3 focus:ring-light-green focus-ring-2 transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="radio" name="position_id" value="{{ $item->id }}"
                                                    id="flexRadioDefault1">
                                                <label
                                                    class="form-check-label inline-block text-gray-800 text-xxs xl:text-xs"
                                                    for="flexRadioDefault1">
                                                    {{ $item->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                    @error('position_id')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                                </div>
                            </div>
                            <p class="text-xxs xl:text-xs py-3.5">By signing up, you agreed to the <a
                                    href="{{Route('player.terms')}}"><span
                                        class="text-link-blue">Term of Services</span></a> and <a
                                    href="{{Route('player.privacy.policy')}}"><span
                                        class="text-link-blue">Privacy Policy</span></a>
                                including <a href="{{Route('player.cookie.use')}}"><span
                                        class="text-link-blue">Cookie Use</span></a> </p>
                            <div class="mt-3 xl:mt-7 2xl:mt-9">

                                <button class="w-full bg-black text-white font-medium py-2 px-4 rounded-full"
                                    type="submit">
                                    Sign up
                                </button>
                            </div>
                        </div>
                        @if(session()->has('message'))
                                {{-- <div class=" justify-center items-center" > --}}
                                    {{-- mx-auto my-auto lg:ml-auto lg:mr-10 xl:mr-40 --}}
                                    {{-- <div class="fixed inset-y-0 right-0 w-auto md:w-80">
                                        <!--content-->
                                        <div class="border-0 rounded-lg shadow-lg w-full bg-white">
                                            <!--header-->
                                            <div class="flex justify-end px-3 py-1 rounded-t">
                                                <a href="{{Route('signup')}}">
                                                    <button class="text-black float-right text-lg leading-none font-normal" type="button"
                                                        >
                                                        x
                                                    </button>
                                                </a>
                                            </div>
                                            <h3 class="text-2xl text-center text-light-green font-semibold">
                                                Congratulations
                                            </h3>
                                            <!--body-->
                                            <div class="p-6 ">
                                                <div class="h-56 flex justify-center items-center">
                                                    <p class="p-3 text-center text-xs">
                                                        You are now registered. Thankyou for signing up
                                                    </p>
                                                </div>
                                                <a href="{{Route('login')}}">
                                                    <button
                                                        class="w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full"
                                                        type="button">
                                                        OK
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div> --}}
                                {{-- </div> --}}
                                {{-- <div class="hidden opacity-70 fixed inset-0 z-40 bg-modal-black" id="modal-id-backdrop">
                                </div> --}}
                            @endif
                    </div>

                </form>
            </div>
        </div>
        @if(session()->has('message'))
        <div class="fixed top-1/2 left-1/2 lg:left-2/3 lg:-translate-x-0 z-50 -translate-y-1/2 -translate-x-1/2 ">
            <div class="border-0 rounded-lg shadow-lg bg-white  w-[17rem] md:w-80" >
                <!--header-->
                <div class="flex justify-end px-3 py-1 rounded-t">
                    <a href="{{Route('signup')}}">
                        <button class="text-black float-right text-lg leading-none font-normal" type="button"
                            >
                            x
                        </button>
                    </a>
                </div>
                <h3 class="text-2xl text-center text-light-green font-semibold">
                    Congratulations
                </h3>
                <!--body-->
                <div class="p-6 ">
                    <div class="h-56 flex justify-center items-center">
                        <p class="py-3 px-2 text-center text-xs">
                            You are now registered. Thankyou for signing up
                        </p>
                    </div>
                    <a href="{{Route('login')}}">
                        <button
                            class="w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full"
                            type="button">
                            OK
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="opacity-70 fixed inset-0 bg-modal-black">
        @endif
        <div class="py-5">
            <footer class="absolute inset-x-0 bottom-3">
                <p class="text-center font-medium text-white text-xxs">
                    Copyright &copy; 2022 Kjora. All rights reserved.
                </p>
            </footer>
        </div>
    </div>
    <script src="{{ asset('assets/custom/script/custom_calender_picker.js') }}"></script>
    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
    <script>
        $(document).on('click', '.toggle-password', function() {

        $(this).toggleClass("fa-eye-slash");

        var input = $("#pass_log_id");
        input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
        });
    </script>
    <script type="text/javascript">
        function custom_template(obj) {
            var data = $(obj.element).data();
            var text = $(obj.element).text();
            if (data && data['img_src']) {
                img_src = data['img_src'];
                template = $("<div><img src=\"" + img_src + "\" style=\"width:19px;height:19px;\"/><p style=\"font-size: 0.75rem; margin-left: 7px; line-height: 1rem; text-align:center; border-radius: 9999px; \">" + text + "</p></div>");
                return template;
            }
        }
        var options = {
            'templateSelection': custom_template,
            'templateResult': custom_template,
        }
        $('#id_select2_example').select2(options);
        $('.select2-container--default .select2-selection--single');

    </script>

    <script type="text/javascript">
        function custom_template(obj) {
            var data = $(obj.element).data();
            var text = $(obj.element).text();
            if (data && data['img_src']) {
                img_src = data['img_src'];
                template = $("<div><img src=\"" + img_src + "\" style=\"width:19px;height:19px;\"/><p style=\"font-size: 0.75rem; margin-left: 7px; line-height: 1rem; text-align:center; border-radius: 9999px; \">" + text + "</p></div>");
                return template;
            }
        }
        var options = {
            'templateSelection': custom_template,
            'templateResult': custom_template,
        }
        $('#id_select2_examples').select2(options);
        $('.select2-container--default .select2-selection--single');

    </script>
<script type="text/javascript">
    function custom_template(obj) {
        var data = $(obj.element).data();
        var text = $(obj.element).text();
        if (data && data['img_src']) {
            img_src = data['img_src'];
            template = $("<div><img src=\"" + img_src +
                "\" style=\"width:19px;height:19px;\"/><p style=\"font-size: 0.75rem; margin-left: 7px; line-height: 1rem; text-align:center; \">" +
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
    <script>
        $('#thumbnil').click(function() {
            $('#profile_image').click();
        });

        function showMyImage(fileInput) {
            var files = fileInput.files;
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var imageType = /image.*/;
                if (!file.type.match(imageType)) {
                    continue;
                }
                var img = document.getElementById("thumbnil");
                img.file = file;
                var reader = new FileReader();
                reader.onload = (function(aImg) {
                    return function(e) {
                        aImg.src = e.target.result;
                    };
                })(img);
                reader.readAsDataURL(file);
            }
        }
    </script>

    <script>
        var emailError = document.getElementById('email-error');
        function validateEmail(){
            var email = document.getElementById('contact-email').value;

            if (email.length == 0) {
                emailError.innerHTML = 'The Email field is required'
                return false;
            }

            if (!email.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
                emailError.innerHTML = 'Email Invalid'
                return false;
            }
            emailError.innerHTML = ''
            return true;
        }
    </script>
</body>

</html>
