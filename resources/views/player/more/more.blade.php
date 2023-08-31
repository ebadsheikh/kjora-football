@extends('player.layouts.master')
@section('content')
<div class="p-4 md:py-10 md:px-16 2xl:px-52">
    @include('player.dashboard.common_heading')
<section class="py-6">
                    <div class="px-2 pt-2 pb-6">
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 xl:gap-8 2xl:gap-24">
                            <div class="bg-white p-5 rounded-2xl h-[31.8rem] lg:h-auto">
                                <h1
                                    class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                                    payment</h1>
                                <div class="my-3 flex flex-col space-y-2 2xl:space-y-4">
                                    <div>
                                        <h1 class="uppercase block mb-1 2xl:mb-1.5 text-black text-xs font-bold px-5">merchant
                                            account</h1>
                                            <a href="{{Route('player.merchant.account')}}"> <button
                                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full text-left px-5 py-3 text-dark-gray text-opacity-40">Update merchant account</button> </a>
                                    </div>
                                    <div>
                                        <h1
                                            class="uppercase block mb-1 2xl:mb-1.5 text-black text-xs font-bold px-5">merchant
                                            details</h1>
                                            <a href="{{Route('player.payment.overview')}}"> <button
                                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full text-left px-5 py-3 text-dark-gray text-opacity-40">Update merchant overview</button> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white p-5 rounded-2xl h-[31.8rem] lg:h-auto">
                                <h1
                                    class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                                    security</h1>
                                <div class="my-3 flex flex-col space-y-2 2xl:space-y-4">
                                    <div>
                                        <h1
                                            class="uppercase block mb-1 2xl:mb-1.5 text-black text-xs font-bold px-5">
                                            Verification</h1>
                                        <a href="{{Route('player.verify.identity')}}"> <button
                                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full text-left px-5 py-3 text-dark-gray text-opacity-40">verified</button> </a>
                                    </div>
                                    <div>
                                        <h1
                                            class="uppercase block mb-1 2xl:mb-1.5 text-black text-xs font-bold px-5">
                                            Terms of
                                            services</h1>
                                        <a href="{{Route('player.more.terms')}}"> <button
                                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full text-left px-5 py-3 text-dark-gray text-opacity-40">Please
                                                read</button> </a>
                                    </div>
                                    <div>
                                        <h1
                                            class="uppercase block mb-1 2xl:mb-1.5 text-black text-xs font-bold px-5">
                                            Privacy policy
                                        </h1>
                                        <a href="{{Route('player.more.privacy.policy')}}"> <button
                                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full text-left px-5 py-3 text-dark-gray text-opacity-40">Please
                                                read</button> </a>
                                    </div>
                                    <div>
                                        <h1
                                            class="uppercase block mb-1 2xl:mb-1.5 text-black text-xs font-bold px-5">
                                            cookie use
                                        </h1>
                                        <a href="{{Route('player.more.cookie.use')}}"> <button
                                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full text-left px-5 py-3 text-dark-gray text-opacity-40">Please
                                                read</button> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white p-5 rounded-2xl">
                                <h1
                                    class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                                    account</h1>
                                <div class="my-3 flex flex-col space-y-2 2xl:space-y-4">
                                    <div>
                                        <label
                                            class="uppercase block mb-1 2xl:mb-1.5 text-black text-xs font-bold px-5">Update
                                            profile</label>
                                            <a href="{{Route('player.profile')}}"> <button
                                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full text-left px-5 py-3 text-dark-gray text-opacity-40">Update details</button> </a>
                                    </div>
                                    <div>
                                        <label
                                            class="uppercase block mb-1 2xl:mb-1.5 text-black text-xs font-bold px-5">Update
                                            password</label>
                                            <a href="{{Route('player.change.password')}}"> <button
                                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full text-left px-5 py-3 text-dark-gray text-opacity-40">Update password</button> </a>
                                    </div>
                                    <div>
                                        <label
                                            class="uppercase block mb-1 2xl:mb-1.5 text-black text-xs font-bold px-5">Update
                                            email</label>
                                            <a href="{{Route('player.email')}}"> <button
                                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full text-left px-5 py-3 text-dark-gray text-opacity-40">Update email</button> </a>
                                    </div>
                                    <div>
                                        <label
                                            class="uppercase block mb-1 2xl:mb-1.5 text-black text-xs font-bold px-5">update
                                            phone</label>
                                            <a href="{{Route('player.phone')}}">
                                                <button class="relative border border-border-gray border-opacity-40 text-xs rounded-full w-full text-left px-8 py-3 text-dark-gray text-opacity-40 ">+965 999230400
                                                    {{-- <span class="absolute top-3 left-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="19"
                                                            height="19" viewBox="0 0 34 34">
                                                            <defs>
                                                                <clipPath id="clip-path">
                                                                    <circle id="Ellipse_157" data-name="Ellipse 157"
                                                                        cx="17" cy="17" r="17" fill="#fff" />
                                                                </clipPath>
                                                            </defs>
                                                            <g id="Mask_Group_71" data-name="Mask Group 71"
                                                                clip-path="url(#clip-path)">
                                                                <image id="Image_60" data-name="Image 60" width="68"
                                                                    height="34" transform="translate(-7.807 0)"
                                                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAT4AAACfCAYAAABgD7XPAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQySURBVHhe7da9ql1FGMfhOQdDEkWIEIsgFiG9hWBhYSV4AQpioZcQi1xQekFvLk0M6tmeIXs0OZyPvfZeHzPv+zywWLOmXMWP/1n56rNd+fZpKffOS/lnVwCiO7t83tbu5y9KefpI/IDw/g9f9eWTUr57Zv0Bob0fvsb6AwK7PnyV9QcEdXP4GusPCObu8FXWHxDIYeFrrD8ggGnhq6w/YHDTw9dYf8Cgjg9fZf0BAzotfI31BwxknvBV1h8wiPnC11h/QOfmD19l/QEdWyZ8jfUHdGjZ8FXWH9CZ5cPXWH9AJ9YLX2X9AR1YN3yN9QdsaJvwVdYfsJHtwtdYf8DKtg9fZf0BK+ojfI31B6ygr/BV1h+wsP7C11h/wEL6DV9l/QEL6Dt8jfUHzGiM8FXWHzCTccLXWH/AicYLX2X9AScYM3yN9QccYezwVdYfMNH44WusP+BAccJXWX/AAWKFr7H+gFvEDF9l/QE3iBu+xvoDrogfvsr6A96RI3yN9QdcyhW+yvqD9PKFr7H+IK284ausP0gpd/ga6w9SEb7G+oM0hO8q6w/CE77rWH8QmvDdxvqDkITvLtYfhCN8h7L+IAzhm8L6gxCE7xjWHwxN+I5V1983j0u5eLW/AEYhfCf447ffy/c//rD/AkZxvn9zhD//frM/ASMRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSEb4TXDy4vz8BIzm7fHZvj0zx0/1H5dc3F+WD8mp/A4xC+I7w8uPPy9f3Piqvdxf7G2AkwjdBXXkvPvy0PCzn5S+/DYYlfAey8iAO4buDlQfxCN8trDyISfiuYeVBbMJ3hZUH8QnfnpUHeQjfJSsPckkdPisPckobPisP8koXPisPSBU+Kw+oUoTPygPeFT58Vh5wVdjwWXnATUKGz8oDbhMqfFYecIgw4bPygEMNHz4rD5hq6PBZecAxhgyflQecYrjwWXnAqYYJn5UHzGWI8Fl5wJy6Dp+VByyh2/BZecBSuguflQcsravwWXnAGroIn5UHrGnz8Fl5wNo2C5+VB2xlk/BZecCWVg2flQf0YLXwWXlALxYPn5UH9GbR8Fl5QI8WCZ+VB/Rs9vBZeUDvZguflQeMYpbwWXnASE4Kn5UHjOjo8Fl5wKgmh8/KA0Y3KXxWHhDBQeGz8oBI7gyflQdEc2P4rDwgqmvDZ+UBkb0XPisPyOC/8Fl5QBZnvzz4ZPf84WMrD0iilH8BVIW89eRor5oAAAAASUVORK5CYII=" />
                                                            </g>
                                                        </svg>
                                                    </span> --}}
                                                    {{-- <span class="absolute inset-y-5 right-3.5">
                                                        <img src="../../../assets/images/drop-arrow.svg" alt="">
                                                    </span> --}}
                                                </button>
                                            </a>
                                        {{-- <div class="relative items-center">
                                            <select
                                                class="appearance-none border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-8 rounded-full text-xs">
                                                <option selected>+8976 6535586456</option>
                                                <option value="US">One</option>
                                                <option value="CA">Two</option>
                                            </select>
                                            <span class="absolute top-3 left-2">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="19"
                                                    height="19" viewBox="0 0 34 34">
                                                    <defs>
                                                        <clipPath id="clip-path">
                                                            <circle id="Ellipse_157" data-name="Ellipse 157"
                                                                cx="17" cy="17" r="17" fill="#fff" />
                                                        </clipPath>
                                                    </defs>
                                                    <g id="Mask_Group_71" data-name="Mask Group 71"
                                                        clip-path="url(#clip-path)">
                                                        <image id="Image_60" data-name="Image 60" width="68"
                                                            height="34" transform="translate(-7.807 0)"
                                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAT4AAACfCAYAAABgD7XPAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQySURBVHhe7da9ql1FGMfhOQdDEkWIEIsgFiG9hWBhYSV4AQpioZcQi1xQekFvLk0M6tmeIXs0OZyPvfZeHzPv+zywWLOmXMWP/1n56rNd+fZpKffOS/lnVwCiO7t83tbu5y9KefpI/IDw/g9f9eWTUr57Zv0Bob0fvsb6AwK7PnyV9QcEdXP4GusPCObu8FXWHxDIYeFrrD8ggGnhq6w/YHDTw9dYf8Cgjg9fZf0BAzotfI31BwxknvBV1h8wiPnC11h/QOfmD19l/QEdWyZ8jfUHdGjZ8FXWH9CZ5cPXWH9AJ9YLX2X9AR1YN3yN9QdsaJvwVdYfsJHtwtdYf8DKtg9fZf0BK+ojfI31B6ygr/BV1h+wsP7C11h/wEL6DV9l/QEL6Dt8jfUHzGiM8FXWHzCTccLXWH/AicYLX2X9AScYM3yN9QccYezwVdYfMNH44WusP+BAccJXWX/AAWKFr7H+gFvEDF9l/QE3iBu+xvoDrogfvsr6A96RI3yN9QdcyhW+yvqD9PKFr7H+IK284ausP0gpd/ga6w9SEb7G+oM0hO8q6w/CE77rWH8QmvDdxvqDkITvLtYfhCN8h7L+IAzhm8L6gxCE7xjWHwxN+I5V1983j0u5eLW/AEYhfCf447ffy/c//rD/AkZxvn9zhD//frM/ASMRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSET4gHeED0hE+IB3hA9IRPiAd4QPSEb4TXDy4vz8BIzm7fHZvj0zx0/1H5dc3F+WD8mp/A4xC+I7w8uPPy9f3Piqvdxf7G2AkwjdBXXkvPvy0PCzn5S+/DYYlfAey8iAO4buDlQfxCN8trDyISfiuYeVBbMJ3hZUH8QnfnpUHeQjfJSsPckkdPisPckobPisP8koXPisPSBU+Kw+oUoTPygPeFT58Vh5wVdjwWXnATUKGz8oDbhMqfFYecIgw4bPygEMNHz4rD5hq6PBZecAxhgyflQecYrjwWXnAqYYJn5UHzGWI8Fl5wJy6Dp+VByyh2/BZecBSuguflQcsravwWXnAGroIn5UHrGnz8Fl5wNo2C5+VB2xlk/BZecCWVg2flQf0YLXwWXlALxYPn5UH9GbR8Fl5QI8WCZ+VB/Rs9vBZeUDvZguflQeMYpbwWXnASE4Kn5UHjOjo8Fl5wKgmh8/KA0Y3KXxWHhDBQeGz8oBI7gyflQdEc2P4rDwgqmvDZ+UBkb0XPisPyOC/8Fl5QBZnvzz4ZPf84WMrD0iilH8BVIW89eRor5oAAAAASUVORK5CYII=" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="absolute inset-y-5 right-3.5">
                                                <img src="../../../assets/images/drop-arrow.svg" alt="">
                                            </span>
                                        </div> --}}
                                    </div>
                                    <div>
                                        <label
                                            class="uppercase block mb-1 2xl:mb-1.5 text-black text-xs font-bold px-5">language</label>
                                        <div class="relative items-center">
                                            <select
                                                class="appearance-none border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                                <option selected>English</option>
                                                <option value="US">One</option>
                                                <option value="CA">Two</option>
                                            </select>
                                            <span class="absolute inset-y-5 right-3.5">
                                                <img src="../../../assets/images/drop-arrow.svg" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    {{-- <div>
                                        <label
                                            class="uppercase block mb-1 2xl:mb-1.5 text-black text-xs font-bold px-5">help</label>
                                            <a href="{{Route('player.help')}}"> <button
                                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full text-left px-5 py-3 text-dark-gray text-opacity-40">Briefly explain what happened</button> </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
</section>
</div>
<div class="hidden lg:block absolute bottom-5 left-5 z-50">
<a class="py-1 px-4 font-medium bg-black rounded-full text-white text-xs cursor-pointer" href="{{Route('logout')}}">
        Logout
</a>
</div>
<script>
var sideMenu = document.getElementById('side-menu');
function openMenu() {
    sideMenu.classList.remove('left-[-250px]');
    sideMenu.classList.add('left-0');
}

function closeMenu() {
    sideMenu.classList.remove('left-0');
    sideMenu.classList.add('left-[-250px]');
}
</script>
@endsection
