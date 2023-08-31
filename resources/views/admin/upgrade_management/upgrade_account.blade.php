@extends('admin.layouts.app')
@section('content')
<div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 2xl:gap-24 ">
        <div class="bg-white px-5 py-9 lg:p-4  2xl:pt-6 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
            <h1
                class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                upgrade</h1>
            <div class="xl:px-6 py-5 overflow-y-auto h-[30rem]">
                <form action="{{Route('admin.upgrade.management.store')}}" method="POST" enctype="multipart/form-data" id="frmPayPal1">
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
                            <div class="description_field">
                                <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">
                                    Description
                                </label>
                                @if (count($subscription->subscriptionInfo) > 0)
                                    @foreach ($subscription->subscriptionInfo as $key => $info)
                                    <div id="remove_description_{{$key}}">
                                        <input id="description_{{$key}}" class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40 mb-3"
                                        type="text" placeholder="Text" onblur="validate([this.id])" name="description[]" value="{{$info->description}}" minlength="3" maxlength="30">
                                            <button type="button" onclick="remove(['remove_description_{{$key}}'])" style="float:right;">
                                                <img src="{{asset("assets/images/icons/black-trash-round.svg")}}" style="height:20px;" alt="">
                                            </button>
                                        @error('description')
                                            @include('errors.required_field', ['message' => $message])
                                        @enderror
                                    </div>
                                    @endforeach
                                @else
                                    <input
                                        class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                        type="text" id="description_01" onblur="validate([this.id, 'description_error_01'])" placeholder="Text" name="description[]" minlength="3" maxlength="30">
                                        <div id="description_error_01" class="alert alert-danger text-xs pl-2 text-red-800 hidden">Minimum 3 characters and Maximum 30 characters allowed</div>
                                        @error('description')
                                            @include('errors.required_field', ['message' => $message])
                                        @enderror
                                @endif
                            </div>
                            @if (count($subscription->subscriptionInfo) < 5)
                                <div class="row mt-4 mb-4">
                                    <div class="col-md-12">
                                        <button type="button" id="description" class="uppercase bg-gray-200 font-medium p-2 inline-flex text-xs items-center gap-2 float-right rounded-lg">
                                            Add <img src="{{asset('assets/images/drop-arrow.svg')}}" alt="">
                                        </button>
                                    </div>
                                </div>
                            @else
                                <div class="row mt-4 mb-4"></div>
                            @endif
                        <h1 class="uppercase text-black text-base font-bold mt-20">Choose plan</h1>
                        <div class="my-2 space-y-2">
                            <div>
                                <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">one
                                    month
                                </label>
                                <input class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                        type="number" placeholder="" name="one_month" value="{{old('one_month', !empty($subscription) ? $subscription->one_month : '')}}">
                                    @error('one_month')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                            </div>
                            <div>
                                <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Two
                                    month
                                </label>
                                <input
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    type="number" placeholder="" name="two_month" value="{{old('two_month', !empty($subscription) ? $subscription->two_month : '')}}">
                                    @error('two_month')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                            </div>
                            <div>
                                <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Three
                                    month
                                </label>
                                    <input
                                    class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                    type="number" placeholder="" name="three_month" value="{{old('three_month', !empty($subscription) ? $subscription->three_month : '')}}">
                                    @error('three_month')
                                        @include('errors.required_field', ['message' => $message])
                                    @enderror
                            </div>
                        </div>
                        <button
                            class="mt-3 w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full ease-linear transition-all duration-150"
                            type="submit">
                            update
                        </button>
                </form>
            </div>
        </div>
        <div class="bg-white px-5 py-9 lg:p-4  2xl:pt-6 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
            <h1
                class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                upgrade
            </h1>
            <div class="md:px-6 lg:px-1 xl:px-6">
                <div class="flex justify-center my-20">
                    <div class="rounded-3xl h-[13.813rem] w-80 relative px-4 py-9 bg-cover bg-center"
                        style="background-image: url('{{asset('assets/images/small-gold.png')}}');">
                        <div class="absolute top-3 right-3">
                            <img src="{{asset('assets/images/upgrade-star.svg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function(){
        var count = 1;

      $("#description").click(function(){
        var temp = (Math.random() + 1).toString(36).substring(7);
        if(count < 5) {
        //<div><button type="button" onclick="removeDescription()"><img src="{{asset("assets/images/icons/dash.png")}}" style="height:20px;" alt=""></button></div>
        $(".description_field").append('<div id="remove_description_'+temp+'"><input id="description_'+temp+'" onblur="validate([\'description_'+temp+'\',\'description_error__'+temp+'\'])" class="mt-2 border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40" type="text" minlength="3" maxlength="30" placeholder="Text" name="description[]" value="">@error("description")@include("errors.required_field", ["message" => $message])@enderror<div class="px-3 py-3"><button type="button" onclick="remove([\'remove_description_'+temp+'\'])" style="float:right;"><img src="{{asset("assets/images/icons/black-trash-round.svg")}}" style="height:20px;" alt=""></button></div></div><div id="description_error__'+temp+'" class="alert alert-danger text-xs pl-2 text-red-800 hidden">Minimum 3 characters and Maximum 30 characters allowed</div>');
            count++;
            }
        else{
            alert('Only 5 items allowed');  //remove click listener.
        }
    });

    });

    // function removeDescription(){
    //     $("info").remove();
    //   }

    function validate(arr) {
  var x = $("#"+arr[0]).val().length;
        if(x < 3 || x >= 30){
            $("#"+arr[1]).removeClass('hidden');
            $("#"+arr[1]).addClass('block');
        }else{
            $("#"+arr[1]).removeClass('block');
            $("#"+arr[1]).addClass('hidden');
        }
}

function remove(arr){
  var y =  $("#"+arr[0]).val();
  if(y > 0){
    $("#"+arr[0]).remove();
  }else{
    $("#"+arr[0]).remove();
  }
}
</script>
@endsection
