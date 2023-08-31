@extends('admin.layouts.app')
@section('content')
    <div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 2xl:gap-24 ">
            <div
                class="bg-white px-5 py-9 lg:p-4  2xl:pt-6 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem] ">
                <h1
                    class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                    View Billing</h1>
                <div class="xl:px-6 py-5 overflow-y-auto h-[30rem] ">
                    <div class="grid items-center grid-cols-1 md:grid-cols-2 md:gap-x-4 gap-y-2 2xl:gap-y-6">
                        @foreach ($billing as $item)
                            <div class="col-span-2 md:col-span-1">
                                <h1
                                    class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold
                            px-5">
                                Billing</h1>
                                <a href="{{ Route('admin.billing.edit', $item->id) }}">
                                    <h1
                                        class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 text-dark-gray text-opacity-40">
                                        {{ $item->name }}
                                    </h1>
                                </a>
                            </div>
                            <div class="col-span-2 md:col-span-1">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div
                class="bg-white px-5 py-9 lg:p-4  2xl:pt-6 h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem] rounded-2xl">
                <h1
                    class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                    View Billing</h1>
                <div class="xl:px-6 py-5">
                    {{-- <canvas id="myChart" style="width:100%;max-width:600px"></canvas> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="fixed bottom-5 right-3 lg:inset-y-2/3 lg:right-2">
        <a href="{{ Route('admin.billing.create') }}">
            <button class="bg-light-green p-4 rounded-full ease-linear transition-all duration-150" type="button">
                <img class="w-5 h-5" src="{{ asset('assets/images/add-icon.svg') }}" alt="">
            </button>
        </a>
    </div>
@endsection
{{-- @section('script')
    <script>
        var xValues = ["Published", "Unpublished"];
        var yValues = [{{ $count_published }}, {{ $count_unpublished }}];
        var barColors = [
            "#1e7145",
            "#b91d47",
        ];

        new Chart("myChart", {
            type: "doughnut",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "Total Number Of Club Is " + {{ $count_club }}
                }
            }
        });
    </script>
@endsection --}}
