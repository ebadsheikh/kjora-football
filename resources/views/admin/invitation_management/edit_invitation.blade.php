@extends('admin.layouts.app')
@section('content')
<div class="container md:mx-auto">
    <div class="flex justify-center">
        <div class="w-11/12">
            <!--heading-->
            <div class="py-3">
                <h1 class="uppercase text-white text-3xl md:text-5xl font-bold tracking-wide">send invitation
                </h1>
            </div>
        </div>
    </div>
    <section class="py-6">
        <div class="container md:mx-auto">
            <div class="flex justify-center">
                <div class="md:w-11/12 2xl:w-full">
                    <div class="px-2 pt-2 pb-6">
                        <div class="grid lg:grid-cols-3 space-y-6 lg:space-x-16">
                            <div class="lg:col-span-1 xl:px-6">
                                <div
                                    class="border-0 rounded-3xl flex flex-col bg-black lg:h-[30.125rem] xl:h-[34.125rem] 2xl:h-[35rem]">
                                    <!--body-->
                                    <form action="{{Route('admin.invitation.management.update')}}" method="post">
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
                                        <div class="py-4 px-3 md:px-6">
                                            <div class="rounded-3xl h-[13.813rem] my-4 py-4 bg-cover bg-center"
                                                style="background-image: url('{{asset('assets/images/small-default.png')}}');">
                                                <div class="pr-4 flex justify-between items-center">
                                                    <div class="py-2 flex space-x-2 items-center">
                                                        <img src="{{asset('assets/images/time-icon-white.svg')}}" alt="">
                                                        <h1 class="text-xs text-white font-medium uppercase">
                                                            09 june 2022, 03:00 PM</h1>
                                                    </div>
                                                    <div>
                                                        <h1
                                                            class="text-xs font-medium bg-black p-2 rounded-full text-white">
                                                            $200</h1>
                                                    </div>
                                                </div>
                                                <div class="px-2">
                                                    <div class=" flex justify-between">
                                                        <div>
                                                        </div>
                                                        <div class="text-center">
                                                            <small
                                                                class="text-white text-xs font-normal tracking-wide">Position</small>
                                                        </div>
                                                    </div>
                                                    <hr class=" mt-10">
                                                </div>

                                            </div>
                                            {{-- <div class="pt-2 ">
                                                <h1 class="text-white text-sm font-bold uppercase">
                                                    player price</h1>
                                                <div class="mt-2">
                                                    <input type="text"
                                                        class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2.5 placeholder-border-gray "
                                                        placeholder="$200">
                                                </div>
                                            </div> --}}
                                            <div class="pt-15">
                                                <div class="pt-2 ">
                                                    <h1 class="text-white text-sm font-bold uppercase">
                                                        invitation fee</h1>
                                                    <div class="mt-2">
                                                        <input type="text"
                                                            class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2.5 placeholder-border-gray text-white"
                                                            placeholder="25%" name="value" value="{{$invitation_fee->value}}">
                                                            @error('value')
                                                                @include('errors.required_field', ['message' => $message])
                                                            @enderror
                                                    </div>
                                                </div>
                                                {{-- <div class="pt-2 ">
                                                    <h1 class="text-white text-sm font-bold uppercase">
                                                        total</h1>
                                                    <div class="mt-2">
                                                        <input type="text"
                                                            class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2.5 placeholder-border-gray "
                                                            placeholder="$225">
                                                    </div>
                                                </div> --}}
                                                <button
                                                    class="w-full my-3 text-black font-bold bg-white uppercase text-sm px-6 py-3 rounded-full mr-1 mb-1 ease-linear transition-all duration-150"
                                                    type="submit">
                                                    confirm
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
