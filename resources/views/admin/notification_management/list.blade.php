@extends('admin.layouts.app')
@section('content')
<div class="container md:mx-auto">
    <div class="flex justify-center">
        <div class="w-11/12">
            <!--heading -->
            <div class="p-3">
                <h1 class="uppercase text-white text-2xl font-semibold tracking-wide">notification management</h1>
            </div>
        </div>
    </div>
    <section class="py-6">
        <div class="container md:mx-auto">
            <div class="flex justify-center">
                <div class="w-11/12 2xl:w-full">
                    <div class="bg-white rounded-3xl py-5">
                        <div class="px-3 py-3 xl:px-12 md:py-3">
                            <form action="{{Route('admin.notification.management.update')}}" method="post">
                                @csrf
                                <div class="grid grid-cols-4 gap-x-2 gap-y-3 2xl:gap-y-5">
                                    @foreach ($notification as $item)
                                        <div class="col-span-4 md:col-span-1">
                                            <label
                                                class="uppercase  block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">{{$item->type}}</label>
                                                <input type="hidden" value="{{$item->id}}" name="id[]">
                                            <div class="relative items-center">
                                                <select name="status[]"
                                                    class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                                    <option {{ ($item->status) == 'Active' ? 'selected' : '' }} value="Active">Active</option>
                                                    <option {{ ($item->status) == 'Deactive' ? 'selected' : '' }} value="Deactive">Deactive</option>
                                                </select>
                                                <span class="absolute inset-y-5 right-3.5">
                                                    <img src="{{asset('assets/images/drop-arrow.svg')}}" alt="">
                                                </span>
                                                @error('status')
                                                    @include('errors.required_field', ['message' => $message])
                                                @enderror
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-start-2 col-span-2">
                                            <button class="uppercase mt-4 w-full bg-black text-white font-medium py-2 px-4 rounded-full" type="submit">
                                                update
                                            </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="p-5">
        <footer class="absolute inset-x-0 bottom-3">
            <p class="text-center font-medium text-white text-xxs">
                Copyright &copy; 2022 Kjora. All rights reserved.
            </p>
        </footer>
    </div>
</div>
@endsection
