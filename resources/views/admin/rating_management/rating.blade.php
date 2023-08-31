@extends('admin.layouts.app')
@section('content')
<form method="POST" action="{{Route('admin.rating.management.update.labels')}}">
<div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 2xl:gap-24 ">

        <div class="bg-white px-5 py-9 md:py-12 lg:pt-12 lg:pb-[3.375rem] xl:pt-[3.35rem] xl:pb-[3.75rem] 2xl:px-14 2xl:pt-16 2xl:pb-[4.25rem] rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
            <h1
                class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                Rating</h1>
            <div class="md:px-6 lg:px-1 xl:px-6 py-9">

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
                    <div class="grid grid-cols-2 gap-2 h-auto lg:h-[25rem]" id="goalkeeper">
                        @foreach ($goalkeeper_labels as $item)
                        <div class="col-span-2 md:col-span-1 mt-4">
                            <input type="text" class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5 outline-none" value="{{$item->name}}" name="goalkeeper_name[]">
                            <input type="hidden" value="{{$item->id}}" name="goalkeeper_id[]">
                            @error('name')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                            <div class="relative items-center">
                                <select
                                    class="appearance-none border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-5 rounded-full text-xs" name="goalkeeper_status[]">
                                    <option  {{ ($item->status) == 'Activate' ? 'selected' : '' }} value="Activate">Activate</option>
                                    <option {{ ($item->status) == 'Deactivate' ? 'selected' : '' }} value="Deactivate">Deactivate</option>
                                </select>
                                <span class="absolute inset-y-5 right-3.5">
                                    <img src="{{asset('assets/images/drop-arrow.svg')}}" alt="">
                                </span>
                            </div>
                                @error('status')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                            {{-- <input type="text" class="appearance-none border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-5 rounded-full text-xs"
                            name="{{$item->slug}}" disabled> --}}
                        </div>
                        @endforeach
                        {{-- <div class="mt-3">
                            <input type="text" class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5" value="Tesing">
                            <div class="relative items-center">
                                <select
                                    class="appearance-none border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-5 rounded-full text-xs" name="status">
                                    <option value="Activate" selected>Activate</option>
                                    <option value="Deactivate">Deactivate</option>
                                </select>
                                <span class="absolute inset-y-5 right-3.5">
                                    <img src="{{asset('assets/images/drop-arrow.svg')}}" alt="">
                                </span>
                            </div>
                        </div> --}}
                    </div>
                    <div class="grid grid-cols-2 gap-2 h-auto lg:h-[25rem]" id="standard" style="display: none;">
                        @foreach ($standard_labels as $item)
                        <div class="col-span-2 md:col-span-1 mt-4">
                            <input type="text" class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5 outline-none" value="{{$item->name}}" name="standard_name[]">
                            <input type="hidden" value="{{$item->id}}" name="standard_id[]">
                            @error('name')
                                @include('errors.required_field', ['message' => $message])
                            @enderror
                            <div class="relative items-center">
                                <select
                                    class="appearance-none border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-5 rounded-full text-xs" name="standard_status[]">
                                    <option  {{ ($item->status) == 'Activate' ? 'selected' : '' }} value="Activate">Activate</option>
                                    <option {{ ($item->status) == 'Deactivate' ? 'selected' : '' }} value="Deactivate">Deactivate</option>
                                </select>
                                <span class="absolute inset-y-5 right-3.5">
                                    <img src="{{asset('assets/images/drop-arrow.svg')}}" alt="">
                                </span>
                            </div>
                                @error('status')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                            {{-- <input type="text" class="appearance-none border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-5 rounded-full text-xs"
                            name="{{$item->slug}}" disabled> --}}
                        </div>
                        @endforeach
                        {{-- <div class="mt-3">
                            <input type="text" class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5" value="Tesing">
                            <div class="relative items-center">
                                <select
                                    class="appearance-none border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-5 rounded-full text-xs" name="status">
                                    <option value="Activate" selected>Activate</option>
                                    <option value="Deactivate">Deactivate</option>
                                </select>
                                <span class="absolute inset-y-5 right-3.5">
                                    <img src="{{asset('assets/images/drop-arrow.svg')}}" alt="">
                                </span>
                            </div>
                        </div> --}}
                    </div>
                    <div class="mt-2 2xl:mt-7">
                        {{-- <a href="{{Route('admin.rating.management.dashboard')}}"> --}}
                            <button
                                class="w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full ease-linear transition-all duration-150"
                                type="submit">
                                confirm
                            </button>
                        {{-- </a> --}}
                    </div>

            </div>
        </div>
        <div class="bg-white px-5 py-9 md:py-12 lg:pt-12 lg:pb-[3.375rem] xl:pt-[3.35rem] xl:pb-[3.75rem] 2xl:px-14 2xl:pt-16 2xl:pb-[4.25rem] rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
            <h1
                class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                Rating
            </h1>
            <div class="md:px-6 lg:px-1 xl:px-6 py-9">
                <div class="h-auto lg:h-[23.5rem] 2xl:h-[25rem]">
                    <div class="flex justify-center">
                        <img class="w-auto h-[19rem] 2xl:h-80" src="{{asset('assets/images/graph.png')}}" alt="">
                    </div>
                </div>
                <div class="mt-2 xl:mt-3 2xl:mt-2">
                    <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Positions</label>
                    <div class="relative items-center">
                        <select
                            id="position"
                            class="appearance-none border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-5 rounded-full text-xs" name="type">
                            <option value="Goalkeeper" selected>Goalkeeper</option>
                            <option value="Standard">Standard</option>
                        </select>
                        <span class="absolute inset-y-5 right-3.5">
                            <img src="{{asset('assets/images/drop-arrow.svg')}}" alt="">
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</form>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $("#position").change(function(){
                $(this).find("option:selected").each(function(){
                    var optionValue = $(this).attr("value");
                    if(optionValue == 'Goalkeeper'){
                        $("#goalkeeper").show();
                        $("#standard").hide();
                    } else{
                        $("#goalkeeper").hide();
                        $("#standard").show();
                    }
                });
            }).change();
        });
    </script>
@endsection
