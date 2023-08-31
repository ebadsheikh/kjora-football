@extends('admin.layouts.app')
@section('content')
    <div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
        <form action="{{ Route('admin.store.verify') }}" method="POST" enctype="multipart/form-data">
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
                <div class="text-green-600 text-xs">
                    {{ session('success') }}
                </div>
            </div>
            @endif
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 2xl:gap-24 ">
                <div
                    class="bg-white px-5 py-12 lg:py-9 2xl:px-14 2xl:py-16 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                    <h1
                        class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                        verify identity</h1>
                    <div class="h-auto lg:h-64 xl:h-72 2xl:h-[21rem] md:px-6 pt-8 md:pt-32 lg:pt-24 xl:pt-36 2xl:pt-40">
                        <h1 class="text-black font-bold text-sm">Use a valid government-issued document</h1>
                        <p class="mt-2 lg:mt-2.5 xl:mt-2 text-xs">Only the following documents listed below will be
                            accepted, all other
                            documents will be rejected.</p>
                        <div class="mt-3">
                            <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">country
                                of issue</label>
                            <div class="relative items-center">
                                <select
                                    class="appearance-none border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-8 rounded-full text-xs" name="issued_country">
                                    @foreach ($country as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                <span class="absolute top-3 left-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="19" height="19" viewBox="0 0 34 34">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <circle id="Ellipse_157" data-name="Ellipse 157" cx="17"
                                                    cy="17" r="17" fill="#fff" />
                                            </clipPath>
                                        </defs>
                                        <g id="Mask_Group_71" data-name="Mask Group 71" clip-path="url(#clip-path)">
                                            <image id="Image_60" data-name="Image 60" width="68" height="34"
                                                transform="translate(-7.807 0)"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAT4AAACfCAYAAABgD7XPAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQySURBVHhe7da9ql1FGMfhOQdDEkWIEIsgFiG9hWBhYSV4AQpioZcQi1xQekFvLk0M6tmeIXs0OZyPvfZeHzPv+zywWLOmXMWP/1n56rNd+fZpKffOS/lnVwCiO7t83tbu5y9KefpI/IDw/g9f9eWTUr57Zv0Bob0fvsb6AwK7PnyV9QcEdXP4GusPCObu8FXWHxDIYeFrrD8ggGnhq6w/YHDTw9dYf8Cgjg9fZf0BAzotfI31BwxknvBV1h8wiPnC11h/QOfmD19l/QEdWyZ8jfUHdGjZ8FXWH9CZ5cPXWH9AJ9YLX2X9AR1YN3yN9QdsaJvwVdYfsJHtwtdYf8DKtg9fZf0BK+ojfI31B6ygr/BV1h+wsP7C11h/wEL6DV9l/QEL6Dt8jfUHzGiM8FXWHzCTccLXWH/AicYLX2X9AScYM3yN9QccYezwVdYfMNH44WusP+BAccJXWX/AAWKFr7H+gFvEDF9l/QE3iBu+xvoDrogfvsr6A96RI3yN9QdcyhW+yvqD9PKFr7H+IK284ausP0gpd/ga6w9SEb7G+oM0hO8q6w/CE77rWH8QmvDdxvqDkITvLtYfhCN8h7L+IAzhm8L6gxCE7xjWHwxN+I5V1983j0u5eLW/AEYhfCf447ffy/c//rD/AkZxvn9zhD//frM/ASMRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSEb4TXDy4vz8BIzm7fHZvj0zx0/1H5dc3F+WD8mp/A4xC+I7w8uPPy9f3Piqvdxf7G2AkwjdBXXkvPvy0PCzn5S+/DYYlfAey8iAO4buDlQfxCN8trDyISfiuYeVBbMJ3hZUH8QnfnpUHeQjfJSsPckkdPisPckobPisP8koXPisPSBU+Kw+oUoTPygPeFT58Vh5wVdjwWXnATUKGz8oDbhMqfFYecIgw4bPygEMNHz4rD5hq6PBZecAxhgyflQecYrjwWXnAqYYJn5UHzGWI8Fl5wJy6Dp+VByyh2/BZecBSuguflQcsravwWXnAGroIn5UHrGnz8Fl5wNo2C5+VB2xlk/BZecCWVg2flQf0YLXwWXlALxYPn5UH9GbR8Fl5QI8WCZ+VB/Rs9vBZeUDvZguflQeMYpbwWXnASE4Kn5UHjOjo8Fl5wKgmh8/KA0Y3KXxWHhDBQeGz8oBI7gyflQdEc2P4rDwgqmvDZ+UBkb0XPisPyOC/8Fl5QBZnvzz4ZPf84WMrD0iilH8BVIW89eRor5oAAAAASUVORK5CYII=" />
                                        </g>
                                    </svg>
                                </span>
                                <span class="absolute inset-y-5 right-3.5">
                                    <img src="../assets/images/drop-arrow.svg" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-8 xl:pt-4 md:px-5 lg:px-1 xl:px-5">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-2 2xl:gap-y-6">
                            <div class="form-check" style="cursor: pointer;" onclick="issueIdentity('passport')">
                                <input name="identity_type" id="identity_type" hidden>
                                {{-- <input
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-light-green checked:ring-2 checked:ring-light-green checked:border-white checked:border-3 focus:ring-light-green focus-ring-2 transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="radio" name="identity_type" value="passport" id="flexRadioDefault1" style="margin-left: 5px;"> --}}
                                <div class="col-span-1">
                                    <div class="bg-light-green rounded-lg h-32 lg:h-28 pt-5 pb-5" id="passport">
                                        <div class="flex justify-center">
                                            <img src="../assets/images/Icon awesome-passport.svg" alt="">
                                        </div>
                                        <h1 class="mt-1 font-medium text-xs text-white uppercase text-center">Passport</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="form-check" style="cursor: pointer;" onclick="issueIdentity('government_issue_id')">
                                {{-- <input
                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-light-green checked:ring-2 checked:ring-light-green checked:border-white checked:border-3 focus:ring-light-green focus-ring-2 transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                    type="radio" name="identity_type" value="government_issue_id" id="flexRadioDefault1"
                                    style="margin-left: 5px;"> --}}
                                <div class="col-span-1">
                                    <div class="bg-light-green rounded-lg h-32 lg:h-28 pt-5 pb-5" id="government_issue_id">
                                        <div class="flex justify-center">
                                            <img class="mt-1" src="../assets/images/Icon awesome-address-card.svg"
                                                alt="">
                                        </div>
                                        <h1 class="mt-2 font-medium text-xs text-white uppercase text-center">government
                                            issued id</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @error('identity_type')
                            @include('errors.required_field', ['message' => $message])
                        @enderror
                    </div>
                </div>
                <div
                    class="bg-white px-5 py-12 lg:py-9 2xl:px-14 2xl:py-16 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                    <h1
                        class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                        upload identity</h1>
                    <div class="h-auto lg:h-64 xl:h-72 2xl:h-[21rem] md:px-6 py-5">
                        <h1 class="text-black font-bold">Take selfie photo</h1>
                        <h1>Example</h1>
                        <div class="grid md:grid-cols-3 gap-x-4">
                            <div class="col-span-1">
                                <img src="../assets/images/profile-image.jpg" alt="">
                            </div>
                            <div class="col-span-2">
                                <div class="inline-flex">
                                    <img src="../assets/images/check-icon.svg" alt="">
                                    <span class="ml-2 text-xs">Take a selfie of yourself with a neutral
                                        expression</span>
                                </div>
                                <div class="inline-flex">
                                    <img src="../assets/images/check-icon.svg" alt="">
                                    <span class="ml-2 text-xs">Make sure your whole face is visible, centered and your
                                        eyes are open</span>
                                </div>
                                <div class="inline-flex">
                                    <img src="../assets/images/cross-icon.svg" alt="">
                                    <span class="ml-2 text-xs">Do not crop your ID or use screenshots of you ID</span>
                                </div>
                                <div class="inline-flex">
                                    <img src="../assets/images/cross-icon.svg" alt="">
                                    <span class="ml-2 text-xs">Do not hide or alter parts of your face (No hats/beauty
                                        images/filters/headgear)</span>
                                </div>
                            </div>
                        </div>
                        <p class="mt-2 text-black font-bold text-xs">File size must be between 10KB and 5120KB in
                            jpg/jpeg/png format.</p>
                    </div>
                    <div class="pt-8 xl:pt-4 md:px-5 lg:px-1 xl:px-5">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-2 2xl:gap-y-6">
                            <div class="col-span-1">
                                <input type="file" accept="image/*" onchange="showMyImage(this)" name="image" class="hidden" id="profile_image"/>
                                <img src="../assets/images/Group 2611.png" class="rounded-md w-full" style="height: 115px;" alt="" id="thumbnil">
                            </div>
                            <div class="col-span-1">
                                <input type="file" accept="image/*" onchange="showMyImageFront(this)" name="imageFront" class="hidden" id="profile_image_front"/>
                                <img src="../assets/images/Group 2613.png" class="rounded-md w-full" style="height: 115px;" alt="" id="thumbnilFront">
                            </div>
                        </div>
                    </div>
                    <div class="mt-8  ">
                        <button class="w-full bg-black text-white font-medium py-2 px-4 rounded-full" type="submit">
                            continue
                        </button>
                    </div>
                </div>
            </div>
    </div>
@endsection
@section('script')
<script>
    function issueIdentity($type){
        if($type=='passport'){
            $('#passport').addClass('border-2 border-black');
            $('#government_issue_id').removeClass('border-2 border-black');
            $('#identity_type').val('passport');
        }
        if($type=='government_issue_id'){
            $('#government_issue_id').addClass('border-2 border-black');
            $('#passport').removeClass('border-2 border-black');
            $('#identity_type').val('government_issue_id');
        }
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
@endsection
