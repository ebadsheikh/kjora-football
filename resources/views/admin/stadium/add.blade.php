@extends('admin.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/custom/style/custom_calender_picker.css') }}">
    <link rel="stylesheet" href="{{asset('assets/custom/style/select-style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
@endsection
@section('content')
    <div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
        <form action="{{Route('admin.stadium.store')}}" method="POST" enctype="multipart/form-data">
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
                    <div class="bg-white px-5 py-9 md:py-12 lg:pt-8 lg:pb-[3.25rem] xl:pt-12 xl:pb-[3.25rem] 2xl:pt-16 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                        <h1
                            class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                            Add Stadium</h1>
                        <div class="md:px-6 lg:px-1 xl:px-6 py-5 h-auto xl:h-[25rem] 2xl:h-[28rem] ">
                            <div class="mt-2">
                                <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">stadium
                                    name</label>
                                <input type="text"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="Please enter stadium name" name="name" value="{{old('name')}}">
                                    @error('name')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                            </div>
                            <div class="mt-2">
                                <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">stadium
                                    address</label>
                                <input id="searchTextField" autocomplete="on" type="text"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="Please enter stadium address" name="address" value="{{old('address')}}">
                                    @error('address')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                            </div>
                            <div class="mt-2">
                                <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">
                                    Country</label>
                                    <select id="id_select2_example" class="appearance-none w-full" name="country_id">
                                        @foreach ($country as $item)
                                        <option data-img_src="{{ URL::asset($item->image) }}" value="{{ $item->id }}" @if (old('country_id') == $item->id) {{ 'selected' }}
                                    @endif>{{ $item->name }}</option>
                                    @endforeach
                                    </select>
                                    @error('country_id')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                            </div>
                            <div class="mt-2">
                                <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Date
                                    added</label>
                                <input type="text" id="stadiumDate" autocomplete="off"
                                    class="border border-border-gray border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="DD/MM/YY" name="show_date" value="{{old('date', \Carbon\Carbon::today()->format('d-m-Y'))}}" disabled>
                                   <input hidden name="date" value="{{\Carbon\Carbon::today()->format('d-m-Y')}}"/>
                                    @error('date')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                            </div>
                            <div class="mt-2">
                                <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">published
                                    by</label>
                                <input type="text"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    placeholder="@" value="@ {{session('name')}}" disabled>
                            </div>
                            <div class="mt-2">
                                <input type="hidden"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    name="latitude" id="latitude" value="{{old('latitude')}}">
                            </div>
                            <div class="mt-2">
                                <input type="hidden"
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    name="longitude" id="longitude"  value="{{old('longitude')}}">
                            </div>
                            {{--mt-8 2xl:mt-[6rem] --}}
                        </div>
                        <div class="mt-9">
                            <button
                                class="w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full ease-linear transition-all duration-150"
                                type="submit">
                                Add
                            </button>
                            <div class="hidden opacity-70 fixed inset-0 z-40 bg-modal-black" id="modal-id-backdrop"></div>
                        </div>
                    </div>
                    <div
                        class="bg-white px-5 py-9 md:py-12 lg:pt-8 lg:pb-[3.25rem] xl:pt-12 xl:pb-[3.25rem] 2xl:px-14 2xl:py-16 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                        <h1
                            class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                            Map view
                        </h1>
                        <div class="md:px-6 lg:px-1 xl:px-6 py-5 h-auto xl:h-[25rem] 2xl:h-[28rem]">
                            <div id="map" class="w-full h-96 lg:h-[19rem] xl:h-80 2xl:h-[25rem] object-cover"></div>
                            <div id="infowindow-content">
                                <img src="" width="16" height="16" id="place-icon">
                                <span id="place-name" class="title"></span><br>
                                <span id="place-address"></span>
                            </div>
                        </div>
                        <div class="md:px-6 lg:px-1 xl:px-6 mt-2 lg:mt-4">
                            <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">
                                status</label>
                            <div class="relative items-center">
                                <select
                                    class="appearance-none border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-5 rounded-full text-xs"
                                    name="status">
                                    <option selected value="Published">Published</option>
                                    <option value="Unpublished">Unpublished</option>
                                </select>
                                @error('status')
                                    @include('errors.required_field', ['message' => $message])
                                @enderror
                                <span class="absolute inset-y-5 right-3.5">
                                    <img src="{{ asset('assets/images/drop-arrow.svg') }}" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/custom/script/custom_calender_picker.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
    <script type="text/javascript">
        function custom_template(obj) {
            var data = $(obj.element).data();
            var text = $(obj.element).text();
            if (data && data['img_src']) {
                img_src = data['img_src'];
                template = $("<div><img src=\"" + img_src + "\" style=\"width:19px;height:19px;\"/><p style=\"font-size: 0.75rem; margin-left: 7px; line-height: 1rem; text-align:center; border-radius: 9999px; \">" + text + "</p></div>");
                return template;
            }
        }
        var options = {
            'templateSelection': custom_template,
            'templateResult': custom_template,
        }
        $('#id_select2_example').select2(options);
        $('.select2-container--default .select2-selection--single');

    </script>
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAP_API_KEY')}}&libraries=places&callback=initMap"></script>
    <script>
        var icon = "{{URL::asset('assets/images/camel.png')}}";
        function initialize() {
        var geocoder;
        var autocomplete;

        geocoder = new google.maps.Geocoder();
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: 29.378586,
                lng: 47.990341
            },
            zoom: 13
        });
        var input = document.getElementById('searchTextField');
        autocomplete = new google.maps.places.Autocomplete(input);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
            map: map,
            anchorPoint: new google.maps.Point(0, -29),
            draggable: true,
            icon:icon
        });

        autocomplete.addListener('place_changed', function() {
            infowindow.close();
            marker.setVisible(false);
            var place = autocomplete.getPlace();
            document.getElementById('latitude').value = place.geometry.location.lat();
                document.getElementById('longitude').value = place.geometry.location.lng();

            if (!place.geometry) {
                // User entered the name of a Place that was not suggested and
                // pressed the Enter key, or the Place Details request failed.
                window.alert("No details available for input: '" + place.name + "'");
                return;
            }

            // If the place has a geometry, then present it on a map.
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17); // Why 17? Because it looks good.
            }
            marker.setPosition(place.geometry.location);
            marker.setVisible(true);

            // var address = '';
            // if (place.address_components) {
            //     address = [
            //         (place.address_components[0] && place.address_components[0].short_name || ''),
            //         (place.address_components[1] && place.address_components[1].short_name || ''),
            //         (place.address_components[2] && place.address_components[2].short_name || '')
            //     ].join(' ');
            // }
            //
            // infowindowContent.children['place-icon'].src = place.icon;
            // infowindowContent.children['place-name'].textContent = place.name;
            // infowindowContent.children['place-address'].textContent = address;
            // infowindow.open(map, marker);

        });


        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endsection
