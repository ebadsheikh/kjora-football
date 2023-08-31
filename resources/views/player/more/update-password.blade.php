@extends('player.layouts.master')
@section('content')
<div class="px-5 2xl:mx-32">
    <h1 class="uppercase text-white text-4xl md:text-5xl font-semibold tracking-wide">Account</h1>
</div>
<div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
    <div class="grid lg:grid-cols-2 gap-8 2xl:gap-24">
        <div>
        </div>
        <div class="rounded-2xl bg-white rounded-2xl py-10 px-3 h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
            <h1 class="uppercase text-sm sm:text-lg md:text-2xl font-semibold text-center text-light-green">
                Update Password</h1>
            <div class="md:px-5 lg:px-0 xl:px-5 2xl:px-14">
                <p class="text-center text-xxs xl:text-sm pt-20 md:pt-44 lg:py-24 xl:pt-28 pb-12">
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
                </p>
                <form class="pt-2 xl:px-4 lg:pt-6 pb-3 lg:pb-8 " action="{{Route('player.update.password')}}" method="POST">
                    @csrf

                    <div class="mb-2 lg:mb-4">
                        <label class="uppercase block mb-1 text-light-green text-xs font-bold px-5">Current Password</label>
                        <input type="text"
                            class="appearance-none border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                            placeholder="Please enter current password" name="current_password">
                            @error('current_password')
                                @include('errors.required_field', ['message' => $message])
                            @enderror
                    </div>
                    <div class="mb-2 lg:mb-4">
                        <label class="uppercase block mb-1 text-light-green text-xs font-bold px-5">New Password</label>
                        <input type="text"
                            class="appearance-none border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                            placeholder="Please enter new password" name="new_password">
                            @error('new_password')
                                @include('errors.required_field', ['message' => $message])
                            @enderror
                    </div>
                    <button
                        class="w-full mt-5 2xl:mt-[3.75rem] bg-black text-white font-medium uppercase py-2 px-4 rounded-full ease-linear transition-all duration-150"
                        type="submit">
                        continue
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
