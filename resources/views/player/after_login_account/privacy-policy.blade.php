@extends('player.layouts.master')
@section('content')
<div class="px-5 2xl:mx-32">
</div>
<div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
    <div class="grid lg:grid-cols-2 gap-x-4 lg:gap-x-8 2xl:gap-24">
        <div>
        </div>
        <div class="rounded-2xl bg-white pt-10 pb-3.5 px-3 md:px-5 lg:px-5 xl:px-12 2xl:py-16 h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
            <h1 class="uppercase text-sm sm:text-lg lg:text-2xl font-semibold text-center text-light-green">Privacy policy</h1>
            <div class="border-2 relative border-slate-200 rounded-md mt-8 mb-2">
                <p class="p-3 text-sm overflow-y-auto h-auto h-[27rem]">
                    {{$policy->description}}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
