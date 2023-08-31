@extends('admin.layouts.app')
@section('content')
<div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
    <div class="grid justify-center">
        <div class="bg-white p-5 rounded-2xl h-[31.8rem] 2xl:h-[35rem]">
            <div class="w-[20rem] md:w-[21rem] relative bg-white rounded-2xl">
                <h1
                    class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                    security</h1>
                    <div class="my-16 flex flex-col space-y-2 2xl:space-y-4">
                        <div>
                            <h1 class="uppercase block mb-1 2xl:mb-1.5 text-black text-xs font-bold px-5">Terms of
                                services</h1>
                                <a href="{{Route('admin.security.management.term.service')}}">
                                    <div
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full text-left px-5 py-3 text-dark-gray text-opacity-40">Please
                                    read</div>
                                </a>
                        </div>
                        <div>
                            <h1 class="uppercase block mb-1 2xl:mb-1.5 text-black text-xs font-bold px-5">Privacy policy
                            </h1>
                            <a href="{{Route('admin.security.management.privacy.policy')}}">
                                <div
                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full text-left px-5 py-3 text-dark-gray text-opacity-40">Please
                                read</div>
                            </a>
                        </div>
                        <div>
                            <h1 class="uppercase block mb-1 2xl:mb-1.5 text-black text-xs font-bold px-5">cookie use
                            </h1>
                            <a href="{{Route('admin.security.management.cookies')}}">
                                <div
                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full text-left px-5 py-3 text-dark-gray text-opacity-40">Please
                                read</div>
                            </a>
                        </div>
                    </div>
                    <div class="fixed bottom-8 right-3 md:absolute md:right-[-6rem] md:bottom-16">
                        <button class="bg-light-green text-white p-4 rounded-full ease-linear transition-all duration-150"
                            type="button" onclick="toggleModal('modal-id')">
                            <img class="w-5 h-5" src="{{asset('assets/images/add-icon.svg')}}" alt="">
                        </button>
                    </div>
                    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                        id="modal-id">
                        <div class="relative my-auto mx-auto w-96 md:w-[30rem] 2xl:w-[42rem]">
                            <!--content-->
                            <div
                                class="border-0 rounded-2xl shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                <!--header-->
                                <div class="flex justify-between px-5 pt-2">
                                    <div>
                                    </div>
                                    <button class="text-dark-gray text-right text-xl leading-none font-medium"
                                        onclick="toggleModal('modal-id')">
                                        x
                                    </button>
                                </div>
                                <!--body-->
                                <div class="relative px-6 py-2 flex-auto">
                                    <form action="{{Route('admin.security.management.store')}}" method="POST">
                                        @csrf
                                        @if (session('success'))
                                        <div class="p-7">
                                            <div class="alert alert-success  text-white">
                                                {{ session('success') }}
                                            </div>
                                        </div>
                                        @endif
                                        @if (session('error'))
                                        <div class="p-7">
                                            <div class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        </div>
                                        @endif
                                        <div>
                                            <h1
                                                class="uppercase text-sm sm:text-lg lg:text-2xl font-semibold text-center text-dark-green">
                                                update security
                                            </h1>
                                            <div class="my-3">
                                                <label
                                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">select
                                                    security update</label>
                                                <div class="relative items-center">
                                                    <select name="policy_type"
                                                        class="appearance-none border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-8 rounded-full text-xs">
                                                        <option value="term_and_condition" selected>Terms of service</option>
                                                        <option value="privacy_policy">Privacy policy</option>
                                                        <option value="cookie_use">cookie use</option>
                                                    </select>
                                                    <span class="absolute inset-y-5 right-3.5">
                                                        <img src="{{asset('assets/images/drop-arrow.svg')}}" alt="">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="border-2 relative border-slate-200 rounded-md mt-8 mb-2">
                                                <p class="absolute left-4 -top-2  uppercase text-xxs text-green-800 font-medium bg-white px-2">
                                                    updated {{ date('d-m-Y', strtotime($policy->updated_at)) }}</p>
                                                    <textarea name="description" class="p-3 text-sm h-48 2xl:h-96 overflow-y-auto w-full resize-none outline-none">
                                                    </textarea>
                                                    @error('description')
                                                        @include('errors.required_field', ['message' => $message])
                                                    @enderror
                                                <p>
                                                </p>
                                            </div>
                                            <button
                                                class="w-full bg-black text-white mt-8 mb-2 uppercase font-medium py-2 px-4 rounded-full"
                                                type="submit">
                                                update
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
                </div>
        </div>
    </div>
</div>
@endsection
