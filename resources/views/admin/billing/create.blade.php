@extends('admin.layouts.app')
@section('content')
    <div class="py-12 px-5 md:mx-12 2xl:mx-32 2xl:mt-48">
        <form action="{{Route('admin.billing.store')}}" method="POST" enctype="multipart/form-data">
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
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 2xl:gap-24 ">
                <div
                    class="bg-white px-5 py-12 lg:py-9 2xl:px-14 2xl:py-16 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                    <h1
                        class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                        Add Billing</h1>
                    <div class="md:px-6 pt-8 md:pt-32 lg:py-24 xl:pt-36 2xl:pt-40">
                        <div class="mt-3">
                            <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Billing
                                Name</label>
                            <div class="relative items-center">
                                <input class="appearance-none border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-5 rounded-full text-xs" name="name" placeholder="Enter Billing" autocomplete="off">
                                @error('name')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 2xl:mt-5">
                        <button class="w-full bg-black text-white font-medium py-2 px-4 rounded-full uppercase" type="submit">
                            Add
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

