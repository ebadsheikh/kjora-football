@extends('admin.layouts.app')
@section('content')
<div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
    <div class="grid lg:grid-cols-2 gap-x-4 lg:gap-x-8 2xl:gap-24">
        <div>
        </div>
        <div class="rounded-2xl bg-white pt-10 pb-3.5 px-3 md:px-5 lg:px-5 xl:px-12 2xl:py-28 h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
            <h1 class="uppercase text-sm sm:text-lg lg:text-2xl font-semibold text-center text-green-800">Terms
                of service</h1>
            <div class="border-2 relative border-slate-200 rounded-md mt-8 mb-2">
                <p class="absolute left-4 -top-2  uppercase text-xxs text-green-800 font-medium bg-white px-2">
                    updated {{date('d-m-Y', strtotime($term->updated_at))}}</p>
                <p class="p-3 text-sm h-400 2xl:h-[25.5rem] overflow-y-auto">
                    {{$term->description}}
                </p>
            </div>
            <a href="{{route('admin.create.cookie_use')}}">
            <button
                class="w-full  mt-3 bg-black text-white font-medium uppercase py-2 px-4 rounded-full ease-linear transition-all duration-150"
                type="button">
                next
            </button>
            </a>
        </div>
    </div>
</div>
@endsection
