<div>
    <!--heading-->
    <div class="py-3">
        <h1 class="uppercase text-white text-2xl md:text-3xl font-normal tracking-wide">Hello,
        </h1>
        <h1 class="uppercase text-white text-5xl font-bold tracking-wide">{{session('first_name')}} {{session('sur_name')}}</h1>
        <h1 class="uppercase text-white text-2xl md:text-3xl font-normal tracking-wide">
            {{\Carbon\Carbon::now()->isoFormat('MMMM Do YYYY')}}
        </h1>
    </div>
</div>
