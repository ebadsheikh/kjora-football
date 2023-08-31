@extends('player.layouts.master')
@section('content')
<div class="px-5 2xl:mx-32">
    <h1 class="uppercase text-white text-4xl md:text-5xl font-semibold tracking-wide">upgrade</h1>
</div>
<div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-8 lg:gap-x-8 2xl:gap-x-24">
        <div
            class="rounded-2xl bg-white px-5 py-9 md:py-12 lg:pt-8 lg:pb-4 xl:py-12 2xl:px-14 h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
            <h1
                class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                upgrade</h1>
            <div class="md:px-6 lg:px-1 xl:px-6 py-5 2xl:py-[3.25rem]">
                <div class="flex justify-center">
                    <div class="space-y-2">
                        <div class="flex items-center">
                            <img src="{{asset('assets/images/check-icon.svg')}}" alt="">
                            <span class="ml-2 text-xs">Lorem ipsum dolor sit.</span>
                        </div>
                        <div class="flex items-center">
                            <img src="{{asset('assets/images/check-icon.svg')}}" alt="">
                            <span class="ml-2 text-xs">Lorem ipsum dolor sit.</span>
                        </div>
                        <div class="flex items-center">
                            <img src="{{asset('assets/images/check-icon.svg')}}" alt="">
                            <span class="ml-2 text-xs">Lorem ipsum dolor sit.</span>
                        </div>
                        <div class="flex items-center">
                            <img src="{{asset('assets/images/check-icon.svg')}}" alt="">
                            <span class="ml-2 text-xs">Lorem ipsum dolor sit.</span>
                        </div>
                    </div>
                </div>
                <div class="mt-4 lg:mt-10 xl:mt-7 2xl:mt-14">
                    <h1 class="uppercase text-black text-base font-bold">Choose plan</h1>
                    <div class="my-2 space-y-2">
                        <h1 class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">one
                            month
                        </h1>
                        <div class="relative">
                            <input class="sr-only peer" type="radio" value="yes" name="answer" id="answer_yes">
                            <label
                                class="flex border border-border-gray text-left border-opacity-40 text-xs rounded-full w-full px-5 py-3 text-black cursor-pointer"
                                for="answer_yes">$10</label>
                            <div class="absolute hidden w-5 h-5 peer-checked:block top-2.5 right-3">
                                <img src="{{asset('assets/images/selected-plan.svg')}}" alt="">
                            </div>
                        </div>
                        <h1 class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Two
                            month
                        </h1>
                        <div class="relative">
                            <input class="sr-only peer" type="radio" value="no" name="answer" id="answer_no">
                            <label
                                class="flex border border-border-gray text-left border-opacity-40 text-xs rounded-full w-full px-5 py-3 text-black cursor-pointer"
                                for="answer_no">$30</label>

                            <div class="absolute hidden w-5 h-5 peer-checked:block top-2.5 right-3">
                                <img src="{{asset('assets/images/selected-plan.svg')}}" alt="">
                            </div>
                        </div>
                        <h1 class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Three
                            month
                        </h1>
                        <div class="relative">
                            <input class="sr-only peer" type="radio" value="maybe" name="answer"
                                id="answer_maybe">
                            <label
                                class="flex border border-border-gray text-left border-opacity-40 text-xs rounded-full w-full px-5 py-3 text-black cursor-pointer"
                                for="answer_maybe">$50</label>
                            <div class="absolute hidden w-5 h-5 peer-checked:block top-2.5 right-3">
                                <img src="{{asset('assets/images/selected-plan.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <button
                        class="mt-3 lg:mt-7 xl:mt-6 2xl:mt-11 w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full ease-linear transition-all duration-150"
                        type="button" onclick="toggleModal('modal-id')">
                        upgrade
                    </button>
                    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                        id="modal-id">
                        <div class="relative mx-auto lg:ml-auto lg:mr-10 xl:mr-40 w-auto">
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
                                <h3 class="text-2xl text-center text-light-green font-semibold">
                                    Payment method
                                </h3>
                                <!--body-->
                                <div class="relative p-6 ">
                                    <div class="h-56 flex justify-center items-center">
                                        <div class="flex gap-x-3">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-light-green checked:ring-2 checked:ring-light-green checked:border-white checked:border-3 focus:ring-light-green focus-ring-2 transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label
                                                    class="form-check-label inline-block text-gray-800 text-xs uppercase"
                                                    for="flexRadioDefault1">
                                                    knet
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-light-green checked:ring-2 checked:ring-light-green checked:border-white checked:border-3 focus:ring-light-green focus-ring-2 transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label
                                                    class="form-check-label inline-block text-gray-800 text-xs uppercase"
                                                    for="flexRadioDefault1">
                                                    credit
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-light-green checked:ring-2 checked:ring-light-green checked:border-white checked:border-3 focus:ring-light-green focus-ring-2 transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label
                                                    class="form-check-label inline-block text-gray-800 text-xs uppercase"
                                                    for="flexRadioDefault1">
                                                    bookey
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-light-green checked:ring-2 checked:ring-light-green checked:border-white checked:border-3 focus:ring-light-green focus-ring-2 transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label
                                                    class="form-check-label inline-block text-gray-800 text-xs uppercase"
                                                    for="flexRadioDefault1">
                                                    amex
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <button
                                        class="w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full"
                                        type="button">
                                        Continue
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden opacity-70 fixed inset-0 z-40 bg-modal-black" id="modal-id-backdrop">
                    </div>
                </div>
            </div>
        </div>
        <div
            class="rounded-2xl bg-white px-5 py-9 md:py-12 lg:pt-8 lg:pb-4 xl:py-12 2xl:px-14 h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
            <h1
                class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                upgrade
            </h1>
            <div class="md:px-6 lg:px-1 xl:px-6">
                <div class="flex justify-center my-20">
                    <div class="rounded-3xl h-[13.813rem] w-80 relative px-4 py-9 bg-cover bg-center"
                        style="background-image: url('{{asset('assets/images/small-gold.png')}}');">
                        <div class="absolute top-3 right-3">
                            <img src="{{asset('assets/images/upgrade-star.svg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
