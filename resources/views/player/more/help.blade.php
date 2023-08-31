@extends('player.layouts.master')
@section('content')
<div class="px-5 2xl:mx-32">
    <h1 class="uppercase text-white text-4xl md:text-5xl font-semibold tracking-wide">Account</h1>
</div>
<div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
    <div class="grid lg:grid-cols-2 gap-8 2xl:gap-24">
        <div>
        </div>
        <div
            class="rounded-2xl bg-white rounded-2xl bg-white py-10 px-3 xl:px-12 h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
            <h1 class="uppercase text-sm sm:text-lg lg:text-2xl font-semibold text-center text-dark-green">Help
            </h1>
            <form>
                <div class="2xl:px-6">
                    <div class="my-3">
                        <h1 class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">
                            subject
                        </h1>
                        <input type="text" class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40 outline-none focus:outline-none" placeholder="Enter subject">
                    </div>
                    <div class="mt-3">
                        <label for="message"
                            class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Message</label>
                            <div class="relative">
                                <textarea
                                    class="border border-border-gray border-opacity-40 resize-none h-[17.826rem] 2xl:h-[24.25rem] text-xs rounded-md w-full p-5 placeholder-dark-gray placeholder-opacity-40 outline-none focus:outline-none"
                                    placeholder="Please write a message or briefly explain what happened"></textarea>
                                    <div class="absolute bottom-[13px] right-1.5 ">
                                        <div class="flex flex-col space-y-2 ">
                                            <button
                                                class="bg-black text-white p-2 rounded-full ease-linear transition-all duration-150"
                                                type="button"><img class="w-5 h-5" src="{{asset('assets/images/add-icon.svg')}}"
                                                    alt="">
                                            </button>
                                            <button
                                                class="bg-black text-white p-2 rounded-full ease-linear transition-all duration-150">
                                                <img class="w-5 h-5" src="{{asset('assets/images/camera-icon1.svg')}}" alt="">
                                            </button>
                                        </div>
                                    </div>
                            </div>
                    </div>
                    <button
                        class="w-full bg-black text-white mt-8 mb-2 uppercase font-medium py-2 px-4 rounded-full"
                        type="button">
                        submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
