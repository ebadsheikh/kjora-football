@extends('player.layouts.master')
@section('content')
<div class="px-5 2xl:mx-32">
    <h1 class="uppercase text-white text-4xl md:text-5xl font-semibold tracking-wide">Payment</h1>
</div>
<div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-4 lg:gap-x-8 2xl:gap-24">
        <div>
        </div>
        <div class="bg-white px-5 py-12 lg:py-9 2xl:px-14 2xl:py-16 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
            <h1
                class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                merchant account</h1>
            <form class="md:px-6 lg:px-1 xl:px-6 py-5">
                <div class="grid md:grid-cols-2 gap-x-4 gap-y-3 2xl:gap-y-6">
                    <div class="col-span-2 md:col-span-1">
                        <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">
                            full name</label>
                        <input type="text"
                            class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                            placeholder="please enter full name">
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">
                            email address</label>
                        <input type="text"
                            class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                            placeholder="please enter email address">
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <label
                            class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">phone
                            number</label>
                        <div class="relative items-center">
                            <select
                                class="appearance-none border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-8 rounded-full text-xs">
                                <option selected>+965</option>
                                <option value="US">One</option>
                                <option value="CA">Two</option>
                            </select>
                            <span class="absolute top-3 left-2">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="19" height="19"
                                    viewBox="0 0 34 34">
                                    <defs>
                                        <clipPath id="clip-path">
                                            <circle id="Ellipse_157" data-name="Ellipse 157" cx="17" cy="17"
                                                r="17" fill="#fff" />
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
                                <img src="/assets/images/drop-arrow.svg" alt="">
                            </span>
                        </div>
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <label
                            class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">isdn
                            code</label>
                        <input type="text"
                            class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                            placeholder="please enter ISDN code">
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <label
                            class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">merchant
                            iban no</label>
                        <input type="text"
                            class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                            placeholder="please enter merchant IBAN number">
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <label
                            class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">swift
                            code</label>
                        <input type="text"
                            class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                            placeholder="please enter swift code">
                    </div>
                    <div class="col-span-2">
                        <label
                            class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">account
                            title name</label>
                        <input type="text"
                            class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                            placeholder="Please enter account name">
                    </div>
                    <div class="col-span-2">
                        <label
                            class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">payment
                            type</label>
                        <div class="flex gap-5 px-5">
                            <div class="form-check">
                                <input
                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-light-green checked:ring-2 checked:ring-light-green checked:border-white checked:border-3 focus:ring-light-green focus-ring-2 transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                    type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label
                                    class="form-check-label inline-block text-gray-800 text-xxs md:text-xs uppercase"
                                    for="flexRadioDefault1">
                                    knet
                                </label>
                            </div>
                            <div class="form-check">
                                <input
                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-light-green checked:ring-2 checked:ring-light-green checked:border-white checked:border-3 focus:ring-light-green focus-ring-2 transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                    type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label
                                    class="form-check-label inline-block text-gray-800 text-xxs md:text-xs uppercase"
                                    for="flexRadioDefault1">
                                    credit
                                </label>
                            </div>
                            <div class="form-check">
                                <input
                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-light-green checked:ring-2 checked:ring-light-green checked:border-white checked:border-3 focus:ring-light-green focus-ring-2 transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                    type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label
                                    class="form-check-label inline-block text-gray-800 text-xxs md:text-xs uppercase"
                                    for="flexRadioDefault1">
                                    bookey
                                </label>
                            </div>
                            <div class="form-check">
                                <input
                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-light-green checked:ring-2 checked:ring-light-green checked:border-white checked:border-3 focus:ring-light-green focus-ring-2 transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                    type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label
                                    class="form-check-label inline-block text-gray-800 text-xxs md:text-xs uppercase"
                                    for="flexRadioDefault1">
                                    amex
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 lg:mt-16 xl:mt-12 2xl:mt-16">
                    <button
                        class="w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full ease-linear transition-all duration-150"
                        type="button" onclick="toggleModal('modal-id')">
                        update
                    </button>
                    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                        id="modal-id">
                        <div class="relative mx-auto lg:ml-auto lg:mr-10 xl:mr-40 w-auto">
                            <!--content -->
                            <div
                                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                <!-- header-->
                                <div class="flex justify-end px-3 py-1 rounded-t">
                                    <button class="text-black float-right text-lg leading-none font-normal"
                                        onclick="toggleModal('modal-id')">
                                        x
                                    </button>
                                </div>
                                <h3 class="text-xl text-center text-light-green font-semibold uppercase">
                                    update merchant account
                                </h3>
                                <!--body -->
                                <div class="relative p-6 ">
                                    <div class="h-56 flex items-center">
                                        <p class="p-3 text-center text-xs">
                                            Your merchant account has been successfully updated
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
                    <div class="hidden opacity-70 fixed inset-0 z-40 bg-modal-black" id="modal-id-backdrop">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
