@extends('admin.layouts.app')
@section('style')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
@endsection
@section('content')
    <div class="py-12 px-5 lg:px-16  2xl:mx-32 2xl:mt-48">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 2xl:gap-24 ">
            <div
                class="bg-white px-5 py-9 lg:p-4  2xl:pt-6 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem] ">
                <h1
                    class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                    View Club</h1>
                <div class="xl:px-6 py-5 overflow-y-auto h-[30rem] ">
                    @if ($club->count() > 0)
                    <div class="grid items-center grid-cols-1 md:grid-cols-2 md:gap-x-4 gap-y-2 2xl:gap-y-6">
                        @foreach ($club as $item)
                        <div class="col-span-2 md:col-span-1">
                            <h1
                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">
                                club</h1>
                            <a href="{{ Route('admin.club.edit', $item->id) }}">
                                <div class=" border border-border-gray border-opacity-40 rounded-full w-full px-5 py-3 hover:bg-light-green hover:bg-opacity-40">
                                    <div class="flex space-x-2 items-center">
                                        <img class="w-5 h-5 p-px"
                                        src="{{ URL::asset($item->image) }}" alt="">
                                        <h1 class="text-xs text-dark-gray text-opacity-40">{{ $item->name }}</h1>
                                    </div>
                                </div>
                            </a>
                        </div>
                            <div class="col-span-2 md:col-span-1">
                                <h1
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">
                                    Status</h1>
                                    <a href="{{ Route('admin.club.edit', $item->id) }}">
                                    @if ($item->status == 'published')
                                        <h1
                                            class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                            Published
                                        </h1>
                                    @else
                                        <h1
                                            class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                            Unpublished
                                        </h1>
                                    @endif

                                </a>
                            </div>
                        @endforeach
                    </div>
                    @else
                    <div class="grid items-center grid-cols-1 md:grid-cols-1 md:gap-x-4 gap-y-2 2xl:gap-y-6">
                        <h1 class="uppercase text-sm font-semibold tracking-wide text-center">No such data match</h1>
                    </div>
                    @endif

                </div>
            </div>
            <div
                class="bg-white px-5 py-9 lg:p-4  2xl:pt-6 h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem] rounded-2xl">
                <h1
                    class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                    View Club</h1>
                <div class="xl:px-6 py-5">
                    <div class="flex justify-center">
                        <div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed bottom-5 right-3 lg:inset-y-2/3 lg:right-2 2xl:right-[6.5rem]">
        <div class="flex flex-col space-y-4">
            <a href="{{ Route('admin.club.create') }}">
                <button class="bg-light-green p-4 rounded-full ease-linear transition-all duration-150" type="button">
                    <img class="w-5 h-5" src="{{ asset('assets/images/add-icon.svg') }}" alt="">
                </button>
            </a>
            <button class="bg-black text-white p-4 rounded-full ease-linear transition-all duration-150"
                type="button" onclick="toggleModal('modal-id')">
                <img class="w-5 h-5" src="{{asset('assets/images/filter-icon.svg')}}" alt="">
            </button>
        </div>
    </div>
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
        id="modal-id">
        <div class="relative my-auto mx-auto w-72">
            <!--content-->
            <div
                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-black outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between px-5 pt-2 rounded-t">
                    <h3 class="text-xs text-white font-semibold">
                        Filter by
                    </h3>
                    <button class="text-white float-right text-sm leading-none font-thin"
                        onclick="toggleModal('modal-id')">
                        x
                    </button>
                </div>
                <form action="{{Route('admin.club.view')}}" method="get">
                    <!--body-->
                    <div class="relative px-6 flex-auto">
                        <div class="pt-2 ">
                            <h1 class="text-white text-xs font-bold uppercase">search</h1>
                            <div class="mt-2">
                                <input type="text" name="search_by_name"
                                    class="border border-white bg-transparent text-sm font-medium rounded-full text-center w-full px-5 py-2.5 placeholder-border-gray text-white text-border-gray"
                                    placeholder="Search club name">
                            </div>
                        </div>
                        <div class="pt-2 ">
                            <h1 class="text-white text-xs font-bold uppercase">status</h1>
                            <div class="mt-2">
                                <div class="relative items-center">
                                    <select
                                        class="appearance-none border border-white bg-transparent text-sm font-medium rounded-full text-border-gray text-center w-full px-5 py-2 placeholder-border-gray" name="search_by_status">
                                        <option value="">Select status</option>
                                        <option value="published">published</option>
                                        <option value="unpublished">unpublished</option>
                                    </select>
                                    <span class="absolute inset-y-4 right-3.5">
                                        <img src="{{asset('assets/images/Polygon 9.svg')}}" alt="">
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--footer-->
                    <div class="p-6 rounded-b">
                        <button
                            class="w-full text-black font-bold bg-white uppercase text-sm px-6 py-2.5 rounded-full mr-1 mb-1 ease-linear transition-all duration-150"
                            type="submit">
                            Apply
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
@endsection
@section('script')
<script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Contry', 'no'],
      ['Published',{{$count_published}}],
      ['Unpublished',{{$count_unpublished}}],
    ]);

    var options = {
      title:'Total number of club '+{{$count_club}}
    };

    var chart = new google.visualization.BarChart(document.getElementById('myChart'));
      chart.draw(data, options);
    }
    </script>
@endsection
