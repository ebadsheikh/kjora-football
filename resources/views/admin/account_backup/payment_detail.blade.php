@extends('admin.layouts.app')
@section('content')
    <div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-4 lg:gap-x-8 2xl:gap-24">
            <div>
            </div>
            <div class="bg-white px-5 py-9 md:py-12 lg:pt-12 lg:pb-5 xl:pt-12 xl:pb-[3.25rem] 2xl:pt-12 2xl:pb-[2.875rem] 2xl:px-14 rounded-2xl">
                <h1
                    class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                    payment details</h1>
                <div class="md:px-6 lg:px-1 xl:px-6 py-5">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-3 2xl:gap-y-6">
                        <div class="col-span-1">
                            <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">account
                                full name</label>
                            <input type="text"
                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                placeholder="please enter account full name">
                        </div>
                        <div class="col-span-1">
                            <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">billing
                                address</label>
                            <input type="text"
                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                placeholder="please enter billing address">
                        </div>
                        <div class="col-span-1">
                            <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">account
                                number</label>
                            <input type="text"
                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                placeholder="please enter account number">
                        </div>
                        <div class="col-span-1">
                            <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">payment
                                method</label>
                            <input type="text"
                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                placeholder="please select payment method">
                        </div>
                        <div class="col-span-1">
                            <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">sort
                                code</label>
                            <input type="text"
                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                placeholder="please enter merchant IBAN number">
                        </div>
                        <div class="col-span-1">
                            <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">swift
                                code</label>
                            <input type="text"
                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                placeholder="please enter swift code">
                        </div>
                    </div>
                    <div class="mt-2 2xl:mt-8">
                        <label
                            class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">payment
                            date</label>
                        <input type="text"
                            class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                            placeholder="DD/MM/YY">
                    </div>

                    <div class="mt-2 2xl:mt-8">
                        <p class="text-xxs uppercase font-medium">please <a href="/admin/verify-identity.html" class="text-link-blue"
                                href="#">upload
                                identity</a> </p>
                    </div>
                    <div class="mt-2">
                        <div class="form-check">
                            <input
                                class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-light-green checked:ring-2 checked:ring-light-green checked:border-white checked:border-3 focus:ring-light-green focus-ring-2 transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="uppercase inline-block text-light-green text-xs font-bold "
                                for="flexRadioDefault1">
                                i confirm this is my payment details
                            </label>
                        </div>
                    </div>
                    <div class="mt-8 lg:mt-16 xl:mt-12 2xl:mt-16">
                        <button
                    class="w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full ease-linear transition-all duration-150"
                    type="button" onclick="toggleModal('modal-id')">
                    next
                </button>
                <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                    id="modal-id">
                    <div class="relative mx-auto lg:ml-auto lg:mr-10 xl:mr-40 w-auto">
                        <!--content -->
                        <div
                            class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                            <!-- header-->
                            <div class="flex justify-end px-3 py-1 rounded-t">
                                <button class="text-border-gray float-right text-xl leading-none font-bold"
                                    onclick="toggleModal('modal-id')">
                                    x
                                </button>
                            </div>
                            <h3 class="text-2xl text-center text-light-green font-semibold">
                                Congratulations
                            </h3>
                            <!--body -->
                            <div class="relative p-6 ">
                                <div class="h-56 flex items-center">
                                    <p class="p-3 text-center text-xs">
                                        Admin account has been set successfully.Please sign in :)
                                    </p>
                                </div>
                                <button
                                    onclick="window.location='https://kjora.com/admin/dashboard';"
                                    class="w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full"
                                    type="button">
                                    OK
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden opacity-70 fixed inset-0 z-40 bg-modal-black" id="modal-id-backdrop"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
