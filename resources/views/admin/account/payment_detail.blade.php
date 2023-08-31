@extends('admin.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/custom/style/custom_calender_picker.css') }}">
@endsection
@section('content')
    <div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
        <form action="{{ route('admin.store.payment-detail') }}" method="POST" enctype="multipart/form-data">
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
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-4 lg:gap-x-8 2xl:gap-24">
                <div>
                </div>
                <div
                    class="bg-white px-5 py-9 md:py-12 lg:pt-12 lg:pb-5 xl:pt-12 xl:pb-[3.25rem] 2xl:pt-12 2xl:pb-[2.875rem] 2xl:px-14 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
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
                                    placeholder="please enter account full name" name="name" value="{{ old('name') }}">
                                @error('name')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">billing
                                    address</label>
                                <input type="text"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="please enter billing address" name="address" value="{{ old('address') }}">
                                @error('address')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">account
                                    number</label>
                                <input type="text"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="please enter account number" name="account_number"
                                    value="{{ old('account_number') }}">
                                @error('account_number')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">payment
                                    method</label>
                                <div class="relative items-center">
                                    <select
                                        class="appearance-none border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-8 rounded-full text-xs"
                                        name="payment_method">
                                        <option value="paypal" @if (old('payment_method') == 'paypal') {{ 'selected' }} @endif>
                                            Paypal</option>
                                        <option value="bank_account"
                                            @if (old('payment_method') == 'bank_account') {{ 'selected' }} @endif>Bank Account
                                        </option>
                                        <option value="amx" @if (old('payment_method') == 'amx') {{ 'selected' }} @endif>
                                            AMX</option>
                                        <option value="digital_wallet"
                                            @if (old('payment_method') == 'digital_wallet') {{ 'selected' }} @endif>Digital Wallet
                                        </option>
                                        <option value="debit_card"
                                            @if (old('payment_method') == 'debit_card') {{ 'selected' }} @endif>Debit Card
                                        </option>
                                        <option value="credit_card"
                                            @if (old('payment_method') == 'credit_card') {{ 'selected' }} @endif>Credit Card
                                        </option>
                                        <option value="mobile_payment"
                                            @if (old('payment_method') == 'mobile_payment') {{ 'selected' }} @endif>Mobile Payment
                                        </option>
                                        <option value="electronic_bank_transfer"
                                            @if (old('payment_method') == 'electronic_bank_transfer') {{ 'selected' }} @endif>Electronic Bank
                                            Transfer</option>
                                    </select>
                                    <span class="absolute inset-y-5 right-3.5">
                                        <img src="../assets/images/drop-arrow.svg" alt="">
                                    </span>
                                </div>
                                @error('payment_method')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">sort
                                    code</label>
                                <input type="number"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="please enter merchant IBAN number" name="sort_code">
                                @error('sort_code')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">swift
                                    code</label>
                                <input type="number"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="please enter swift code" name="swift_code">
                                @error('swift_code')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                            </div>
                        </div>
                        <div class="mt-2 2xl:mt-8">
                            <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">payment
                                date</label>
                                <div class="relative">
                                    <input type="text" id="payment_date" autocomplete="off"
                                        name="payment_date"
                                        class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                        placeholder="DD/MM/YY">
                                        <span class="absolute inset-y-2 right-3.5 date-icon-c">
                                            <img src="{{asset('assets/images/icons/black-calender-icon.svg')}}" alt="">
                                        </span>
                                        @error('payment_date')
                                            @include('errors.required_field', ['message' => $message])
                                        @enderror
                                </div>
                        </div>
                        <div class="mt-5">
                            <div class="form-check">
                                <input
                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-light-green checked:ring-2 checked:ring-light-green checked:border-white checked:border-3 focus:ring-light-green focus-ring-2 transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                    type="radio" id="flexRadioDefault1" name="confirm_payment_detail">
                                @error('confirm_payment_detail')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                                <label class="uppercase inline-flex text-light-green text-xxs md:text-xs font-bold "
                                    for="flexRadioDefault1">
                                    i confirm this is my payment details
                                </label>
                            </div>
                        </div>
                        <div class="mt-8 lg:mt-16 2xl:mt-20">
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
                                                class="w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full"
                                                type="submit">
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
        </form>
    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/custom/script/custom_calender_picker.js') }}"></script>
@endsection
