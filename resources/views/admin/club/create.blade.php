@extends('admin.layouts.app')
@section('content')
    <div class="py-12 px-5 md:mx-12 2xl:mx-32 2xl:mt-48">
        <form action="{{Route('admin.club.store')}}" method="POST" enctype="multipart/form-data">
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
                    class="bg-white px-5 py-12 lg:py-9 2xl:px-14 2xl:py-16 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                    <h1
                        class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                        Add Club</h1>
                    <div class="md:px-6 pt-8 md:pt-32 lg:py-24 xl:pt-36 2xl:pt-40">
                        <div class="mt-3">
                            <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">
                                Country Name</label>
                            <div class="relative items-center">
                                <select
                                    class="appearance-none border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-5 rounded-full text-xs" name="country_id">
                                    @foreach ($country as $item)
                                    <option value="{{ $item->id }}">{{ $item->name}}</option>
                                    @endforeach
                                </select>
                                <span class="absolute inset-y-5 right-3.5">
                                    <img src="{{asset('assets/images/drop-arrow.svg')}}" alt="">
                                </span>
                                @error('country_id')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                            </div>
                        </div>
                        <div class="mt-3">
                            <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Club
                                Name</label>
                            <div class="relative items-center">
                                <input class="appearance-none border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-5 rounded-full text-xs" name="name" placeholder="Enter Club" autocomplete="off">
                                @error('name')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                            </div>
                        </div>
                        <div class="mt-3">
                            <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">
                                status</label>
                            <div class="relative items-center">
                                <select
                                    class="appearance-none border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-5 rounded-full text-xs" name="status">
                                    <option value="published" selected>Published</option>
                                    <option value="unpublished">Unpublished</option>
                                </select>
                                <span class="absolute inset-y-5 right-3.5">
                                    <img src="{{asset('assets/images/drop-arrow.svg')}}" alt="">
                                </span>
                                @error('status')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 2xl:mt-5">
                        <button class="w-full bg-black text-white font-medium py-2 px-4 rounded-full" type="submit">
                            Add
                        </button>
                    </div>
                </div>
                <div
                    class="bg-white px-5 py-12 lg:py-9 2xl:px-14 2xl:py-16 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                    <h1
                        class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                        Add Club</h1>
                    <div class="md:px-6 pt-8 md:pt-32 lg:pt-36 xl:pt-44 2xl:pt-52">
                        <div class="flex justify-center my-3">
                            {{-- <button
                                class=" bg-light-green text-white p-4 rounded-full ease-linear transition-all duration-150"
                                type="button"> --}}
                                <div class="relative">
                                    <input type="file" accept="image/*" onchange="showMyImage(this)" name="image" class="hidden" id="profile_image"/>
                                    <img class="w-12 h-12 -top-5 -right-2 md:-top-7 lg:-top-8 md:right-1" src="{{asset('assets/images/add_icon.png')}}" alt="image" id="thumbnil">
                                </div>
                            {{-- </button> --}}
                        </div>
                        @error('image')
                            @include('errors.required_field', ['message' => $message])
                        @enderror
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
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
        var img=document.getElementById("thumbnil");
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
        var img=document.getElementById("thumbnilFront");
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
    var img=document.getElementById("thumbnilBack");
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
