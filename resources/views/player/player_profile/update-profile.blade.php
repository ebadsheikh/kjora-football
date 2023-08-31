@extends('player.layouts.master')
@section('content')
<div class="px-5 2xl:mx-32">
    @include('player.dashboard.common_heading')
</div>
<div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-4 lg:gap-x-8 2xl:gap-24">
        <div>
        </div>
        <form action="{{Route('player.update.profile')}}" method="post" enctype="multipart/form-data">
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
            <div class="bg-white px-5 pt-12 pb-4 lg:py-9 2xl:px-14 2xl:py-16 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                <div class="relative">
                    <input type="file" accept="image/*" onchange="showMyImage(this)" name="imagePlayer"
                        class="hidden" id="profile_image" />
                    <img class="absolute border border-border-gray rounded-full -top-5 -right-2 md:-top-7 lg:-top-8 md:right-1 h-14 w-14 xl:h-20 xl:w-20"
                        id="thumbnil" src="{{ URL::asset($player->profile_image) }}" alt="image">
                        <input type="hidden" name="previous_img" value="{{ $player->profile_image }}">
                </div>
                @error('image')
                    @include('errors.required_field', ['message' => $message])
                @enderror
                <h1
                    class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                    Update profile</h1>
                <div class="xl:px-6 py-5">
                    <div class="grid grid-cols-1 md:grid-cols-2 md:gap-x-4 gap-y-2 2xl:gap-y-6">
                        <div class="col-span-1">
                            <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">First
                                name</label>
                            <input
                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                type="text" placeholder="Please enter first name" name="first_name" value="{{$player->first_name}}"
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
                                placeholder="Please enter surname" name="sur_name" value="{{$player->sur_name}}"
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
                                placeholder="Please enter email address" name="email" value="{{$player->email}}">
                            @error('email')
                                @include('errors.required_field', ['message' => $message])
                            @enderror
                        </div>
                        {{-- <div class="col-span-2 md:col-span-1">
                            <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Password</label>
                            <input type="text"
                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                placeholder="Password">
                        </div> --}}
                        <div class="col-span-2 md:col-span-1">
                            <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Choose
                                Country</label>
                                <select id="id_select2_example" class="appearance-none w-full" name="country_id">
                                    @foreach ($country as $item)
                                        <option
                                            data-img_src="{{ URL::asset($item->image) }}"
                                                value="{{ $item->id }}" @if ($player->country_id == $item->id)
                                                {{ 'selected' }}
                                            @endif>{{ $item->name }}
                                        </option>
                                    @endforeach
                                    </select>
                                    @error('country_id')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Favourite
                                Club</label>
                                <select id="id_select2_examples" class="appearance-none w-full" name="club_id">
                                    @foreach ($club as $item)
                                        <option
                                        data-img_src=" {{ URL::asset($item->image) }} "
                                            value="{{ $item->id }}" @if ($player->club_id == $item->id)
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
                                        placeholder="DD/MM/YY" value="{{ $player->date_of_birth }}" name="date_of_birth">
                                    @error('date_of_birth')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                                    <span class="absolute top-2 right-2 date-icon">
                                        <img src="{{ asset('assets/images/icons/black-calender-icon.svg') }}"
                                            alt="">
                                    </span>
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
                                                    value="{{ $player->phone_code }}"
                                                    @if ($player->country_id == $item->id) {{ 'selected' }} @endif>
                                                    {{ $item->code }}</option>
                                            @endforeach
                                        </select>
                                        <input type="number" id="hs-inline-leading-select-label"
                                                class="basis-4/5 py-[0.62rem] md:py-2.25 px-4 grow w-full rounded-l-none rounded-full border-y border-r border-border-gray border-opacity-40 text-sm outline-none"
                                                name="phone" value="{{$player->phone}}">
                                                    </div>
                                            @error('phone')
                                                @include('errors.required_field', ['message' => $message])
                                            @enderror
                                </div>
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Username</label>
                                <input type="text"
                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                placeholder="Enter username" name="user_name" value="{{$player->player_user_name }}">
                                @error('user_name')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row gap-x-5 lg:gap-x-2 ">
                        <div class="py-3 md:basis-1/4">
                            <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Gender</label>
                            <div class="flex items-center gap-x-2 lg:gap-x-0.5 xl:gap-x-2 2xl:gap-x-8">
                                @if ($player->gender == 'male')
                                    <div class="form-check">
                                        <input
                                            class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-light-green checked:ring-2 checked:ring-light-green checked:border-white checked:border-3 focus:ring-light-green focus-ring-2 transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                            type="radio" name="gender" value="male" id="flexRadioDefault1" checked>
                                        <label class="form-check-label inline-block text-gray-800 text-xxs xl:text-xs"
                                            for="flexRadioDefault1">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input
                                            class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-light-green checked:ring-2 checked:ring-light-green checked:border-white checked:border-3 focus:ring-light-green focus-ring-2 transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                            type="radio" name="gender" value="female" id="flexRadioDefault1">
                                        <label class="form-check-label inline-block text-gray-800 text-xxs xl:text-xs"
                                            for="flexRadioDefault1">
                                            Female
                                        </label>
                                    </div>
                                @else
                                    <div class="form-check">
                                        <input
                                            class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-light-green checked:ring-2 checked:ring-light-green checked:border-white checked:border-3 focus:ring-light-green focus-ring-2 transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                            type="radio" name="gender" value="male" id="flexRadioDefault1">
                                        <label class="form-check-label inline-block text-gray-800 text-xxs xl:text-xs"
                                            for="flexRadioDefault1">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input
                                            class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-light-green checked:ring-2 checked:ring-light-green checked:border-white checked:border-3 focus:ring-light-green focus-ring-2 transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                            type="radio" name="gender" value="female" id="flexRadioDefault1" checked>
                                        <label class="form-check-label inline-block text-gray-800 text-xxs xl:text-xs"
                                            for="flexRadioDefault1">
                                            Female
                                        </label>
                                    </div>
                                @endif

                            </div>
                        </div>
                        <div class="py-3 md:basis-3/4 ">
                            <div class="lg:float-right">
                                <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold ">Position</label>
                            <div class="flex gap-x-2 xl:gap-x-4 2xl:gap-x-8">
                                @foreach ($player_position as $positions)
                                    @if ($positions->id == $player->position_id)
                                        <div class="form-check">
                                            <input
                                                class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-light-green checked:ring-2 checked:ring-light-green checked:border-white checked:border-3 focus:ring-light-green focus-ring-2 transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                type="radio" name="position_id" value="{{$positions->id}}" id="flexRadioDefault1" checked>
                                            <label class="form-check-label inline-block text-gray-800 text-xxs xl:text-xs"
                                                for="flexRadioDefault1">
                                                {{$positions->name}}
                                            </label>
                                        </div>
                                    @else
                                        <div class="form-check">
                                            <input
                                                class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-light-green checked:ring-2 checked:ring-light-green checked:border-white checked:border-3 focus:ring-light-green focus-ring-2 transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                type="radio" name="position_id" value="{{$positions->id}}" id="flexRadioDefault1">
                                            <label class="form-check-label inline-block text-gray-800 text-xxs xl:text-xs"
                                                for="flexRadioDefault1">
                                                {{$positions->name}}
                                            </label>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 xl:mt-5 2xl:mt-2">
                        <button class="uppercase w-full bg-light-green text-white font-medium py-2 px-4 rounded-full" type="submit">
                            update
                        </button>
                    </div>
                    {{-- <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                        id="modal-id">
                        <div class="relative mx-auto lg:ml-auto lg:mr-10 xl:mr-40 w-72 md:w-80">
                            <!--content-->
                            <div
                                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                <!--header-->
                                <div class="flex justify-end px-3 py-1 rounded-t">
                                    <button class="text-black float-right text-lg leading-none font-normal"
                                        onclick="toggleModal('modal-id')">
                                        x
                                    </button>
                                </div>
                                <h3 class="text-2xl text-center text-light-green font-semibold uppercase">
                                    account
                                </h3>
                                <!--body-->
                                <div class="relative p-6 ">
                                    <div class="h-56 flex justify-center items-center">
                                        <p class="p-3 text-center text-xs">
                                            Congratulations your account has been successfully updated
                                        </p>
                                    </div>
                                    <button
                                        class="w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full"
                                        type="button">
                                        OK
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden opacity-70 fixed inset-0 z-40 bg-modal-black" id="modal-id-backdrop"></div> --}}
                </div>
            </div>
        </form>
    </div>
</div>
    <script src="{{ asset('assets/custom/script/custom_calender_picker.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
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
