@extends('admin.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/custom/style/custom_calender_picker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/custom/style/select-style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
@endsection
@section('content')
    <div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
        <form action="{{ Route('admin.store.account') }}" method="POST" enctype="multipart/form-data">
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
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 2xl:gap-24 ">
                <div
                    class="bg-white px-5 py-9 md:py-12 lg:pt-12 lg:pb-4 xl:py-12 2xl:px-14 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem] ">
                    <div class="relative">
                        <input type="file" accept="image/*" onchange="showMyImage(this)" name="image" class="hidden"
                            id="profile_image" />
                        <img class="absolute border border-border-gray rounded-full -top-5 -right-2 md:-top-7 lg:-top-8 md:right-1 h-14 w-14 xl:h-20 xl:w-20"
                            id="thumbnil" src="{{ asset('assets/images/profile-image.jpg') }}" alt="image">
                    </div>
                    <h1
                        class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                        create admin account</h1>
                    <div class="xl:px-6 py-5 h-auto lg:h-[29rem] xl:h-[30rem] 2xl:h-[35rem] overflow-y-auto">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-2 2xl:gap-y-6">
                            <div class="col-span-1">
                                <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">First
                                    Name</label>
                                <input
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    type="text" placeholder="Enter first name" name="first_name"
                                    onkeypress="return (event.charCode > 64 &&
                                    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"
                                    value="{{ old('first_name') }}">
                                @error('first_name')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Surname</label>
                                <input type="text"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="Enter surname" name="sur_name"
                                    onkeypress="return (event.charCode > 64 &&
                                    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"
                                    value="{{ old('sur_name') }}">
                                @error('sur_name')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Email
                                    address</label>
                                <input type="text"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="Enter email address" name="email" value="{{ old('email') }}">
                                @error('email')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Password</label>
                                <div class="relative">
                                    <input type="password" id="pass_log_id"
                                        class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                        placeholder="Password" name="password">
                                    <div class="absolute top-2 right-3.5">
                                        <span toggle="#password-field"
                                            class="fa fa-fw fa-eye field_icon toggle-password"></span>
                                    </div>
                                </div>
                                @error('password')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Choose
                                    Country</label>
                                <select id="id_select2_example" class="appearance-none w-full" name="country_id">
                                    @foreach ($country as $item)
                                        <option data-img_src="{{ URL::asset($item->image) }}" value="{{ $item->id }}"
                                            @if ($item->name == 'Kuwait') {{ 'selected' }} @endif>
                                            {{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('country_id')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Favourite
                                    Club</label>
                                <div class="col-span-1">
                                    <select id="id_select2_examples" class="appearance-none w-full"
                                        name="favourite_club_id">
                                        @foreach ($club as $item)
                                            <option data-img_src=" {{ URL::asset($item->image) }} "
                                                value="{{ $item->id }}"
                                                @if (old('favourite_club_id') == $item->id) {{ 'selected' }} @endif>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('favourite_club_id')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-1">
                                <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Date
                                    of birth</label>
                                <div class="relative items-center">
                                    <input type="text" id="date_of_birth" autocomplete="off"
                                        class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                        placeholder="DD/MM/YY" value="{{ old('date_of_birth') }}" name="date_of_birth">
                                    @error('date_of_birth')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                                    <span class="absolute top-2 right-2 date-icon">
                                        <img src="{{ asset('assets/images/icons/black-calender-icon.svg') }}"
                                            alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Phone</label>
                                <div class="col-span-1">
                                    <div class="flex items-center" id="phone_code">
                                        <select class="basis-1/5" id="phone_select2"
                                            name="hs-inline-leading-select-country">
                                            @foreach ($country as $item)
                                                <option data-img_src="{{ URL::asset($item->image) }}"
                                                    value="{{ $item->id }}"
                                                    @if (old('country_id') == $item->id) {{ 'selected' }} @endif>
                                                    {{ $item->code }}</option>
                                            @endforeach
                                        </select>
                                        <input type="number" id="hs-inline-leading-select-label" name="inline-add-on"
                                            class="basis-4/5 py-[0.62rem] md:py-2.5 px-4  block w-full rounded-l-none rounded-full border-y border-r border-border-gray border-opacity-40 text-sm"
                                            >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 2xl:mt-6">
                            <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Username</label>
                            <input type="text"
                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                placeholder="Enter username" name="user_name" value="{{ old('user_name') }}">
                            @error('user_name')
                                @include('errors.required_field', ['message' => $message])
                            @enderror
                        </div>
                        <div class="py-3">
                            <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Gender</label>
                            <div class="flex gap-5">
                                <div class="form-check">
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
                        <p class="text-xs">By signing up, you agreed to the <span class="text-link-blue"><a
                                    href="{{ route('admin.view.terms_and_conditions') }}">Term
                                    of
                                    Services</a></span> and <span class="text-link-blue"><a
                                    href="{{ route('admin.view.privacy_policy') }}">Privacy Policy</a></span>
                            including <span class="text-link-blue"><a href="{{ route('admin.view.cookie_use') }}">Cookie
                                    Use</a></span> </p>
                    </div>
                </div>
                <div
                    class="bg-white px-5 py-9 md:py-12 lg:pt-12 lg:pb-4 xl:py-12 2xl:px-14 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                    <h1
                        class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                        create admin account</h1>
                    <div class="xl:px-6 py-5">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-2 2xl:gap-y-6">
                            <div class="col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">qualification</label>
                                <input type="text"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="Enter qualification" name="qualification"
                                    value="{{ old('qualification') }}">
                                @error('qualification')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">institution</label>
                                <input type="text"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="Enter surname" name="institution" value="{{ old('institution') }}">
                                @error('institution')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                            </div>
                        </div>
                        <div class="mt-2 2xl:mt-6">
                            <label for="message"
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Experience</label>
                            <textarea id="message"
                                class="resize-none h-20 lg:h-24 overscroll-y-auto border border-border-gray border-opacity-40 text-xs rounded-3xl w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                placeholder="Enter experience" name="experience">{{ old('experience') }}</textarea>

                        </div>
                        @error('experience')
                            @include('errors.required_field', ['message' => $message])
                        @enderror
                        <div class="mt-2 2xl:mt-6">
                            <label for="message"
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Skills</label>
                            <textarea id="message"
                                class="resize-none h-20 lg:h-24 overscroll-y-auto border border-border-gray border-opacity-40 text-xs rounded-3xl w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                placeholder="Enter skills" name="skills">{{ old('skills') }}</textarea>
                            @error('skills')
                                @include('errors.required_field', ['message' => $message])
                            @enderror
                        </div>

                        <div class="mt-8 lg:mt-12 xl:mt-16 2xl:mt-24">
                            <button class="w-full bg-black text-white font-medium py-2 px-4 rounded-full uppercase"
                                type="submit">
                                Next
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        $(document).on('click', '.toggle-password', function() {

            $(this).toggleClass("fa-eye-slash");

            var input = $("#pass_log_id");
            input.attr('type') === 'password' ? input.attr('type', 'text') : input.attr('type', 'password')
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
    <script type="text/javascript">
        function custom_template(obj) {
            var data = $(obj.element).data();
            var text = $(obj.element).text();
            if (data && data['img_src']) {
                img_src = data['img_src'];
                template = $("<div><img src=\"" + img_src +
                    "\" style=\"width:19px;height:19px;\"/><p style=\" font-size: 0.75rem; margin-left: 7px; line-height: 1rem; text-align:center;  \">" +
                    text + "</p></div>");
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
                template = $("<div><img src=\"" + img_src +
                    "\" style=\"width:19px;height:19px;\"/><p style=\"font-size: 0.75rem; margin-left: 7px; line-height: 1rem; text-align:center; border-radius: 9999px; \">" +
                    text + "</p></div>");
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
                    "\" style=\"width:19px;height:19px;\"/><p style=\"font-size: 1rem; margin-left: 7px; line-height: 1rem; text-align:center; \">" +
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
@endsection
@section('script')
    <script src="{{ asset('assets/custom/script/custom_calender_picker.js') }}"></script>
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
@endsection
