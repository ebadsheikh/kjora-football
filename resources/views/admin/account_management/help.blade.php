@extends('admin.layouts.app')
@section('content')
<div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
    <div class="grid lg:grid-cols-2 gap-8 2xl:gap-24">
        <div>
        </div>
        <div class="rounded-2xl bg-white h-fit pt-10 pb-14 px-3 md:px-5 lg:pt-14 lg:pb-[1.75rem] xl:px-12 xl:pb-11 2xl:py-20 h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
            <h1 class="uppercase text-sm sm:text-lg lg:text-2xl font-semibold text-center text-light-green">Help
            </h1>
            <div class="2xl:px-6">
                <div class="mt-2">
                    <label
                            class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">subject</label>
                        <input
                            class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                            type="text" placeholder="Enter subject">
                </div>
                <div class="mt-2">
                    <label
                            class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Minimum</label>
                        <input
                            class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                            type="text" placeholder="Enter minimum number">
                </div>
                <div class="mt-2">
                    <label
                            class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Maximum</label>
                        <input
                            class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                            type="text" placeholder="Enter maximum number">
                </div>
                <div class="mt-3">
                    <label for="message"
                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Message</label>
                    <div class="relative">
                        <textarea id="message"
                            class="border border-border-gray border-opacity-40 resize-none h-[10rem] 2xl:h-[12rem] text-xs rounded-3xl w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                            placeholder="Please write a message or briefly explain what happened"></textarea>
                    </div>
                </div>
                <a href="{{Route('admin.account.management.dashboard')}}">
                <button class="w-full bg-black text-white mt-8 mb-2 uppercase font-medium py-2 px-4 rounded-full"
                    type="button">
                    update
                </button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
