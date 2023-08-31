@extends('admin.layouts.app')
@section('content')
    <div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 2xl:gap-24 ">
            <div
                class="bg-white px-5 py-9 md:py-12 lg:pt-8 lg:pb-4 xl:py-12 2xl:px-14 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                <h1
                    class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                    card details</h1>
                <div class="xl:px-6 py-5">
                    <form action="{{ Route('admin.player.management.update.card.detail') }}" method="post">
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
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-2 2xl:gap-y-6">
                            <div class="col-span-2 md:col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Name</label>
                                <div class="relative items-center">
                                    <select name="first_name"
                                        class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                        <option {{ $card->first_name == '1' ? 'selected' : '' }} value="1" id="active-name">Active
                                        </option>
                                        <option {{ $card->first_name == '0' ? 'selected' : '' }} value="0" id="deactive-name">Deactivate
                                        </option>
                                    </select>
                                    <span class="absolute inset-y-5 right-3.5">
                                        <img src="{{ asset('assets/images/drop-arrow.svg') }}" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">SurName</label>
                                <div class="relative items-center">
                                    <select name="sur_name"
                                        class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                        <option {{ $card->sur_name == '1' ? 'selected' : '' }} value="1" id="active-sur-name">Active
                                        </option>
                                        <option {{ $card->sur_name == '0' ? 'selected' : '' }} value="0" id="deactive-sur-name">Deactivate
                                        </option>
                                    </select>
                                    <span class="absolute inset-y-5 right-3.5">
                                        <img src="{{ asset('assets/images/drop-arrow.svg') }}" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Rating</label>
                                <div class="relative items-center">
                                    <select name="rating"
                                        class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                        <option {{ $card->rating == '1' ? 'selected' : '' }} value="1" id="active-rating">Active
                                        </option>
                                        <option {{ $card->rating == '0' ? 'selected' : '' }} value="0" id="deactive-rating">Deactivate
                                        </option>
                                    </select>
                                    <span class="absolute inset-y-5 right-3.5">
                                        <img src="{{ asset('assets/images/drop-arrow.svg') }}" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Price</label>
                                <div class="relative items-center">
                                    <select name="price"
                                        class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                        <option {{ $card->price == '1' ? 'selected' : '' }} value="1" id="active-price">Active
                                        </option>
                                        <option {{ $card->price == '0' ? 'selected' : '' }} value="0" id="deactive-price">Deactivate
                                        </option>
                                    </select>
                                    <span class="absolute inset-y-5 right-3.5">
                                        <img src="{{ asset('assets/images/drop-arrow.svg') }}" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Age</label>
                                <div class="relative items-center">
                                    <select name="age"
                                        class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                        <option {{ $card->age == '1' ? 'selected' : '' }} value="1" id="active-age">Active</option>
                                        <option {{ $card->age == '0' ? 'selected' : '' }} value="0" id="deactive-age">Deactivate
                                        </option>
                                    </select>
                                    <span class="absolute inset-y-5 right-3.5">
                                        <img src="{{ asset('assets/images/drop-arrow.svg') }}" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">played</label>
                                <div class="relative items-center">
                                    <select name="played"
                                        class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                        <option {{ $card->played == '1' ? 'selected' : '' }} value="1" id="active-played">Active
                                        </option>
                                        <option {{ $card->played == '0' ? 'selected' : '' }} value="0" id="deactive-played">Deactivate
                                        </option>
                                    </select>
                                    <span class="absolute inset-y-5 right-3.5">
                                        <img src="{{ asset('assets/images/drop-arrow.svg') }}" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Missed</label>
                                <div class="relative items-center">
                                    <select name="missed"
                                        class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                        <option {{ $card->missed == '1' ? 'selected' : '' }} value="1" id="active-missed">Active
                                        </option>
                                        <option {{ $card->missed == '0' ? 'selected' : '' }} value="0" id="deactive-missed">Deactivate
                                        </option>
                                    </select>
                                    <span class="absolute inset-y-5 right-3.5">
                                        <img src="{{ asset('assets/images/drop-arrow.svg') }}" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">position</label>
                                <div class="relative items-center">
                                    <select name="position"
                                        class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                        <option {{ $card->position == '1' ? 'selected' : '' }} value="1" id="active-position">Active
                                        </option>
                                        <option {{ $card->position == '0' ? 'selected' : '' }} value="0" id="deactive-position">Deactivate
                                        </option>
                                    </select>
                                    <span class="absolute inset-y-5 right-3.5">
                                        <img src="{{ asset('assets/images/drop-arrow.svg') }}" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Favourite
                                    club</label>
                                <div class="relative items-center">
                                    <select name="favourite_club"
                                        class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                        <option {{ $card->favourite_club == '1' ? 'selected' : '' }} value="1" id="active-favourite">
                                            Active</option>
                                        <option {{ $card->favourite_club == '0' ? 'selected' : '' }} value="0" id="deactive-favourite">
                                            Deactivate</option>
                                    </select>
                                    <span class="absolute inset-y-5 right-3.5">
                                        <img src="{{ asset('assets/images/drop-arrow.svg') }}" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <label
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Location</label>
                                <div class="relative items-center">
                                    <select name="location"
                                        class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                        <option {{ $card->location == '1' ? 'selected' : '' }} value="1" id="active-location">Active
                                        </option>
                                        <option {{ $card->location == '0' ? 'selected' : '' }} value="0" id="deactive-location">Deactivate
                                        </option>
                                    </select>
                                    <span class="absolute inset-y-5 right-3.5">
                                        <img src="{{ asset('assets/images/drop-arrow.svg') }}" alt="">
                                    </span>
                                </div>
                            </div>
                            {{-- <div class="col-span-2">
                            <label
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Foot</label>
                            <div class="relative items-center">
                                <select
                                    class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs">
                                    <option >Active</option>
                                    <option value="US">Deactivate</option>
                                </select>
                                <span class="absolute inset-y-5 right-3.5">
                                    <img src="{{asset('assets/images/drop-arrow.svg')}}" alt="">
                                </span>
                            </div>
                        </div> --}}
                            <div class="col-span-2">
                                <button
                                    class="mt-2 w-full bg-black text-white font-medium py-2 px-4 rounded-full uppercase"
                                    type="submit">
                                    UPDATE
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div
                class="bg-white px-5 py-9 md:py-12 lg:pt-8 lg:pb-4 xl:py-12 2xl:px-14 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                <h1
                    class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                    card details</h1>
                <div class="md:px-6 lg:px-1 xl:px-6">
                    <div class="flex justify-center my-20">
                        <div class="rounded-3xl px-4 py-9 h-[13.813rem] w-80 bg-cover bg-center"
                            style="background-image: url('{{ asset('assets/images/small-default.png') }}');">
                            <div class="flex justify-between">
                                <div>
                                    <a href="#" class="flex items-center">
                                        <div class="rounded-full border-2 border-white bg-white mr-2 h-14 w-14"></div>
                                        <span class="self-center">
                                            <div style="display: flex;">
                                                <h1 class="text-white text-sm font-semibold display_name display_box_name">
                                                    Name
                                                </h1>
                                                <h1 class="hide_box_name hide_name"></h1>
                                                <h1 class="text-white text-sm font-semibold display_sur_name display_box_sur_name">
                                                    Surname
                                                </h1>
                                                <h1 class="hide_box_sur_name hide_sur_name"></h1>
                                            </div>
                                            <h2 class="text-heading-white text-opacity-25 font-medium text-sm">
                                                @Username Foot
                                            </h2>
                                            <div class="flex items-center display_rating display_box_rating">
                                                <svg class="w-3.5 h-3.5 text-rating-yellow" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg class="w-3.5 h-3.5 text-rating-yellow" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg class="w-3.5 h-3.5 text-rating-yellow" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg class="w-3.5 h-3.5 text-rating-yellow" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg class="w-3.5 h-3.5 text-rating-yellow" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <h1 class="text-xs text-rating-yellow">&nbsp 5.0</h1>
                                            </div>
                                            <span class="hide_box_rating hide_rating"></span>
                                        </span>
                                    </a>
                                </div>
                                <div>
                                    <small class="text-white font-semibold display_price display_box_price">Price</small>
                                    <small class="hide_box_sur_price hide_sur_price"></small>
                                </div>
                            </div>
                            <div class="my-3">
                                <div class="flex justify-between">
                                    <div class="text-center">
                                        <h1 class="text-heading-white text-opacity-25 text-sm">Age</h1>
                                        <h2 class="text-white text-sm display_age display_box_age">18</h2>
                                        <h2 class="hide_box_age hide_age"></h2>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="text-heading-white text-opacity-25 text-sm">Played
                                        </h1>
                                        <h2 class="text-white text-sm display_played display_box_played">5</h2>
                                        <h2 class="hide_box_played hide_played"></h2>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="text-heading-white text-opacity-25 text-sm">Missed
                                        </h1>
                                        <h2 class="text-white text-sm display_missed display_box_missed">1</h2>
                                        <h2 class="hide_box_missed hide_missed"></h2>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="text-heading-white text-opacity-25 text-sm">Position
                                        </h1>
                                        <h2 class="text-white text-sm display_position display_box_position">Goalkeeper</h2>
                                        <h2 class="hide_box_position hide_position"></h2>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="mt-2">
                                <a href="#" class="flex items-center">
                                    <img src="{{ asset('assets/images/white-location.svg') }}" class="mr-1"
                                        alt="Logo" />
                                    <span class="text-white">
                                        <div class="display_location display_box_location">
                                            Location
                                        </div>
                                        <span class="hide_box_location hide_location"></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
        $("select").change(function(){
            $( "select option:selected").each(function(){
                if($(this).attr("id")=="active-name"){
                    $(".hide_box_name").hide();
                    $(".display_name").show();
                }
                if($(this).attr("id")=="deactive-name"){
                    $(".display_box_name").hide();
                    $(".hide_name").show();
                }
                if($(this).attr("id")=="active-sur-name"){
                    $(".hide_box_sur_name").hide();
                    $(".display_sur_name").show();
                }
                if($(this).attr("id")=="deactive-sur-name"){
                    $(".display_box_sur_name").hide();
                    $(".hide_sur_name").show();
                }
                if($(this).attr("id")=="active-rating"){
                    $(".hide_box_rating").hide();
                    $(".display_rating").show();
                }
                if($(this).attr("id")=="deactive-rating"){
                    $(".display_box_rating").hide();
                    $(".hide_rating").show();
                }
                if($(this).attr("id")=="active-price"){
                    $(".hide_box_price").hide();
                    $(".display_price").show();
                }
                if($(this).attr("id")=="deactive-price"){
                    $(".display_box_price").hide();
                    $(".hide_price").show();
                }
                if($(this).attr("id")=="active-age"){
                    $(".hide_box_age").hide();
                    $(".display_age").show();
                }
                if($(this).attr("id")=="deactive-age"){
                    $(".display_box_age").hide();
                    $(".hide_age").show();
                }
                if($(this).attr("id")=="active-played"){
                    $(".hide_box_played").hide();
                    $(".display_played").show();
                }
                if($(this).attr("id")=="deactive-played"){
                    $(".display_box_played").hide();
                    $(".hide_played").show();
                }
                if($(this).attr("id")=="active-missed"){
                    $(".hide_box_missed").hide();
                    $(".display_missed").show();
                }
                if($(this).attr("id")=="deactive-missed"){
                    $(".display_box_missed").hide();
                    $(".hide_missed").show();
                }
                if($(this).attr("id")=="active-position"){
                    $(".hide_box_position").hide();
                    $(".display_position").show();
                }
                if($(this).attr("id")=="deactive-position"){
                    $(".display_box_position").hide();
                    $(".hide_position").show();
                }
                if($(this).attr("id")=="active-location"){
                    $(".hide_box_location").hide();
                    $(".display_location").show();
                }
                if($(this).attr("id")=="deactive-location"){
                    $(".display_box_location").hide();
                    $(".hide_location").show();
                }
            });
            }).change();
        });
    </script>
@endsection
