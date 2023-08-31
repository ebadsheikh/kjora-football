@extends('admin.layouts.app')
@section('content')
    <div class="py-12 px-5 md:mx-12 2xl:mx-32 2xl:mt-48">
        <form action="{{Route('admin.labels.update', $labels->id)}}" method="POST" enctype="multipart/form-data">
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
                    <div class="bg-white px-5 py-9 lg:p-4  2xl:pt-6 h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem] rounded-2xl">
                        <h1
                            class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                            update Label</h1>
                        <div class="xl:px-6 py-5 md:py-40">
                            <div class="grid items-center grid-cols-1 md:grid-cols-2 md:gap-x-4 gap-y-2 2xl:gap-y-6">
                                <div class="col-span-2 md:col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Label</label>
                                    <input class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                        type="text" placeholder="IT ANALYST" name="name" value="{{old('name', $labels->name)}}">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Status</label>
                                        <div class="relative items-center">
                                            <select
                                                class="appearance-none border border-border-gray border-opacity-40 bg-white text-gray-400 w-full py-3 px-5 rounded-full text-xs" name="status">
                                                <option  {{ ($labels->status) == 'Activate' ? 'selected' : '' }} value="Activate">Activate</option>
                                                <option {{ ($labels->status) == 'Deactivate' ? 'selected' : '' }} value="Deactivate">Deactivate</option>
                                            </select>
                                            <span class="absolute inset-y-5 right-3.5">
                                                <img src="{{asset('assets/images/drop-arrow.svg')}}" alt="">
                                            </span>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10 lg:mt-16 xl:mt-20 2xl:mt-36">
                            <button class="uppercase w-full bg-black text-white font-medium py-2 px-4 rounded-full" type="submit">
                                Update
                            </button>
                        </div>
                    </div>
                    <div class="bg-white px-5 py-9 lg:p-4  2xl:pt-6 h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem] rounded-2xl">
                        <h1
                            class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                            Update Labels</h1>
                        <div class="xl:px-6 py-5">
                            <div class="flex justify-center">
                                <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
@endsection
@section('script')
<script>
    var xValues = ["Activate", "Deactivate"];
    var yValues = [{{$count_activate}},{{$count_deactivate}}];
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
          text: "Total number of label "+{{$count_labels}}
        }
      }
    });
    </script>
@endsection
