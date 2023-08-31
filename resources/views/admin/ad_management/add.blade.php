@extends('admin.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/custom/style/custom_calender_picker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/custom/style/select-style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
@endsection
@section('content')
    <div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
        <form action="{{ Route('admin.ad.management.store') }}" method="POST" enctype="multipart/form-data">
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
                    class="bg-white px-5 py-9 md:py-12 lg:p-8 xl:pt-8 xl:pb-6 2xl:pt-16 2xl:pb-[4.75rem] rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                    <h1
                        class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                        ADD ad</h1>
                    <div class="md:px-6 lg:px-1 xl:px-6 pt-5">
                        <form>
                            <div class="grid grid-cols-2 gap-2 h-auto lg:h-96">
                                <div class="col-span-2">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">ad
                                        name</label>
                                    <input type="text"
                                        class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                        placeholder="Please enter ad name" name="name" value="{{ old('name') }}">
                                    @error('name')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">link</label>
                                    <input type="text"
                                        class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                        placeholder="https://" name="link" value="{{ old('link') }}">
                                    @error('link')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">
                                        Country</label>
                                    <select id="id_select2_example" class="appearance-none w-full" name="country_id">
                                        @foreach ($country as $item)
                                            <option data-img_src="{{ URL::asset($item->image) }}"
                                                value="{{ $item->id }}"
                                                @if (old('country_id') == $item->id) {{ 'selected' }} @endif>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('country_id')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Date
                                        added</label>
                                    <div class="relative">
                                        <input type="text" id="adDateAdded" autocomplete="off"
                                            class="border border-border-gray border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                            placeholder="DD/MM/YY" name="date_added" value="{{ old('date_added') }}">
                                        <span class="absolute inset-y-2 right-3.5 date-icon-added">
                                            <img src="{{ asset('assets/images/icons/black-calender-icon.svg') }}"
                                                alt="">
                                        </span>
                                    </div>
                                    @error('date_added')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Date
                                        ended</label>
                                    <div class="relative">
                                        <input type="text" id="adDateEnded" autocomplete="off"
                                            class="border border-border-gray border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                            placeholder="DD/MM/YY" name="date_ended" value="{{ old('date_ended') }}">
                                        <span class="absolute inset-y-2 right-3.5 date-icon-ended">
                                            <img src="{{ asset('assets/images/icons/black-calender-icon.svg') }}"
                                                alt="">
                                        </span>
                                    </div>
                                    @error('date_ended')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">cost</label>
                                    <input type="number"
                                        class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                        placeholder="" name="cost" value="{{ old('cost') }}">
                                    @error('cost')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Extra
                                        cost</label>
                                    <input type="number"
                                        class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                        placeholder="" name="extra_cost" value="{{ old('extra_cost') }}">
                                    @error('extra_cost')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                                </div>
                                <div class="col-span-2">
                                    <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">
                                        Visibility</label>
                                    <div class="relative items-center">
                                        <select
                                            class="appearance-none border border-border-gray border-opacity-40 bg-white w-full py-3 px-8 rounded-full text-xs"
                                            name="visibility">
                                            <option selected value="1" class="text-gray-400">1</option>
                                            <option value="2" class="text-gray-400">2</option>
                                            <option value="3" class="text-gray-400">3</option>
                                            <option value="4" class="text-gray-400">4</option>
                                            <option value="5" class="text-gray-400">5</option>
                                        </select>
                                        <span class="absolute inset-y-5 right-3.5">
                                            <img src="{{ asset('assets/images/drop-arrow.svg') }}" alt="">
                                        </span>
                                        @error('visibility')
                                            @include('errors.required_field', ['message' => $message])
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-2 mt-3 md:mt-12 lg:mt-[4.2rem] xl:mt-20">
                                    <button
                                        class="w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full ease-linear transition-all duration-150"
                                        type="submit">
                                        add
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div
                    class="bg-white px-5 py-9 md:py-12 lg:py-8 xl:pt-8 xl:pb-6 2xl:pt-16 2xl:pb-[4.75rem] rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                    <h1
                        class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                        add ad
                    </h1>
                    <div class="md:px-6 lg:px-1 xl:px-6 mt-5 h-auto lg:h-96">
                        <div class="flex justify-center my-3">
                            <button
                                class=" bg-light-green text-white p-4 rounded-full ease-linear transition-all duration-150"
                                type="button">
                                <input type="file" accept="image/*" onchange="showMyImage(this)" name="image"
                                    class="hidden" id="profile_image" />
                                <img class="w-5 h-5" src="{{ asset('assets/images/add-icon.svg') }}" alt=""
                                    id="thumbnil">
                            </button>
                        </div>
                        @error('image')
                            @include('errors.required_field', ['message' => $message])
                        @enderror
                        <div class="md:px-6 lg:px-1 xl:px-6 py-5">
                            <img class="h-42 lg:h-[15rem] xl:h-[18rem] 2xl:h-72 rounded-lg object-cover"
                                src="{{ asset('assets/images/BLANK_ICON.png') }}" style="width: 100%;" id="thumbnilabc">
                        </div>
                    </div>
                    <div class="md:px-6 lg:px-1 xl:px-6 mt-2 lg:my-3 xl:mt-6 2xl:mt-11">
                        <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">
                            status</label>
                        <div class="relative items-center">
                            <select
                                class="appearance-none border border-border-gray border-opacity-40 bg-white w-full py-3 px-5 rounded-full text-xs"
                                name="status">
                                <option class="text-gray-400" selected value="Published">Published</option>
                                <option class="text-gray-400" value="Unpublished">Unpublished</option>
                            </select>
                            @error('status')
                                @include('errors.required_field', ['message' => $message])
                            @enderror
                            <span class="absolute inset-y-5 right-3.5">
                                <img src="{{ asset('assets/images/drop-arrow.svg') }}" alt="">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/custom/script/custom_calender_picker.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
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
        $('#id_select2_example').select2(options);
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
                var img = document.getElementById("thumbnilabc");
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

        $('#thumbnilFront').click(function() {
            $('#profile_image_front').click();
        });

        function showMyImageFront(fileInput) {
            var files = fileInput.files;
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var imageType = /image.*/;
                if (!file.type.match(imageType)) {
                    continue;
                }
                var img = document.getElementById("thumbnilFront");
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
        function showMyImageBack(fileInput) {
            var files = fileInput.files;
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var imageType = /image.*/;
                if (!file.type.match(imageType)) {
                    continue;
                }
                var img = document.getElementById("thumbnilBack");
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
