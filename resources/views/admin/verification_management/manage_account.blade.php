@extends('admin.layouts.app')
@section('content')
    <form action="{{ Route('admin.verification.management.update.account', $player_verify_account->id) }}" method="post">
        @csrf
        <div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 2xl:gap-24 ">
                <div
                    class="bg-white px-5 py-9 md:py-12 lg:pt-12 lg:pb-4 xl:py-12 2xl:px-14 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                    <div class="relative">
                        <img class="absolute border-2 border-dark-green rounded-full -top-5 -right-2 md:-top-7 lg:-top-8 md:right-1 h-14 w-14 xl:h-20 xl:w-20"
                            src="{{ asset('assets/images/avatar.png') }}" alt="">
                    </div>
                    <h1
                        class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                        Verification</h1>
                    <div class="xl:px-6 py-5 lg:h-[26.25rem] 2xl:h-[31rem]">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-2 2xl:gap-y-6">
                            <div class="col-span-1">
                                <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">First
                                    name</label>
                                <input
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    type="text" placeholder="Enter first name"
                                    value="{{ $player_verify_account->first_name }}" disabled>

                            </div>
                            <div class="col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Surname</label>
                                <input type="text"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="Enter surname" value="{{ $player_verify_account->sur_name }}" disabled>
                            </div>
                            <div class="col-span-1">
                                <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Email
                                    address</label>
                                <input type="text"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="Enter email address" value="{{ $player_verify_account->email }}" disabled>
                            </div>
                            <div class="col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Password</label>
                                <input type="text"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="Password" disabled>
                            </div>
                            <div class="col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Choose
                                    Country</label>
                                <div class="relative items-center">
                                    <select disabled
                                        class="appearance-none border border-border-gray border-opacity-40 bg-white text-black w-full py-3 px-8 rounded-full text-xs"
                                        name="country_id">
                                        @foreach ($country as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $player_verify_account->country_id == $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
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
                                </div>
                            </div>
                            <div class="col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Favourite
                                    Club</label>
                                <div class="relative items-center">
                                    <select disabled
                                        class="appearance-none border border-border-gray border-opacity-40 bg-white text-black w-full py-3 px-8 rounded-full text-xs">
                                        @foreach ($club as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $player_verify_account->club_id == $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="absolute top-3 left-2">
                                        <img width="19" height="19"
                                            src="{{ asset('assets/images/country-logo4.svg') }}" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="col-span-1">
                                <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Date
                                    of
                                    birth</label>
                                <input type="text"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="DD/MM/YY" value="{{ $player_verify_account->date_of_birth }}" disabled>
                            </div>
                            <div class="col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Phone</label>
                                <div class="relative items-center">
                                    <input type="tel"
                                        class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-8 py-3 placeholder-dark-gray placeholder-opacity-40"
                                        placeholder="Enter Phone" value="{{ $player_verify_account->phone }}" disabled>
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
                                </div>
                            </div>
                            <div class="col-span-2">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Username</label>
                                <input type="text"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="Enter username" value="{{ $player_verify_account->player_user_name }}"
                                    disabled>
                            </div>
                            <div class="col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Gender</label>
                                <div class="form-check px-5">
                                    <input disabled checked
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-400 bg-white checked:bg-light-green checked:ring-2 checked:ring-light-green checked:border-white checked:border-3 focus:ring-light-green focus-ring-2 transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label inline-block text-gray-800 text-xs"
                                        for="flexRadioDefault1">
                                        {{ $player_verify_account->gender }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">position</label>
                                <div class="form-check px-5">
                                    <input disabled checked
                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-400 bg-white checked:bg-light-green checked:ring-2 checked:ring-light-green checked:border-white checked:border-3 focus:ring-light-green focus-ring-2 transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label inline-block text-gray-800 text-xs"
                                        for="flexRadioDefault1">
                                        {{ $player_verify_account->position['name'] }}
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button
                        class="w-full my-2 bg-black text-white font-medium uppercase py-2 px-4 rounded-full ease-linear transition-all duration-150"
                        type="submit">Update</button>
                </div>
                <div
                    class="bg-white px-5 py-9 md:py-12 lg:pt-12 lg:pb-4 xl:py-12 2xl:px-14 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                    <h1
                        class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                        Verification</h1>
                    <div class="xl:px-6 py-5 lg:h-[24.75rem] 2xl:h-[29.25rem]">
                        <!-- Implement the carousel -->
                        <div>
                            <div class="relative w-full">
                                <div class="slide relative">
                                    <img class="w-full h-[300px] xl:h-[350px] 2xl:h-[388px] rounded-2xl object-cover"
                                        src="{{ asset('assets/images/profile-photos.jpg') }}" alt="">
                                </div>
                                <div class="slide relative">
                                    <img class="w-full h-[300px] xl:h-[350px] 2xl:h-[388px] rounded-2xl object-cover"
                                        src="{{ asset('assets/images/player-photo.png') }}" alt="">
                                </div>

                                <!-- The previous button -->
                                <a class="absolute left-2 top-1/2 px-4 py-2 rounded-full -translate-y-1/2 bg-black text-white cursor-pointer"
                                    onclick="moveSlide(-1)">❮</a>

                                <!-- The next button -->
                                <a class="absolute right-2 top-1/2 px-4 py-2 rounded-full -translate-y-1/2 bg-black text-white cursor-pointer"
                                    onclick="moveSlide(1)">❯</a>

                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <label
                            class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">status</label>
                        <div class="relative items-center">
                            <select
                                class="appearance-none text-center border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-8 rounded-full text-xs"
                                name="status">
                                <option {{ $player_verify_account->status == 'Verified' ? 'selected' : '' }}
                                    value="Verified">Verified</option>
                                <option {{ $player_verify_account->status == 'Pending' ? 'selected' : '' }}
                                    value="Pending">
                                    Pending</option>
                                <option {{ $player_verify_account->status == 'Declined' ? 'selected' : '' }}
                                    value="Declined">Declined</option>
                            </select>
                            <span class="absolute inset-y-5 right-3.5">
                                <img src="{{ asset('assets/images/drop-arrow.svg') }}" alt="">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('script')
    <script>
        // set the default active slide to the first one
        let slideIndex = 1;
        showSlide(slideIndex);

        // change slide with the prev/next button
        function moveSlide(moveStep) {
            showSlide(slideIndex += moveStep);
        }

        function showSlide(n) {
            let i;
            const slides = document.getElementsByClassName("slide");

            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }

            // hide all slides
            for (i = 0; i < slides.length; i++) {
                slides[i].classList.add('hidden');
            }

            // show the active slide
            slides[slideIndex - 1].classList.remove('hidden');
        }
    </script>
@endsection
