<div>
    <h1 class="uppercase text-white text-2xl font-thin tracking-wide">welcome to backoffice,</h1>

    <h1 class="uppercase text-white text-3xl font-bold tracking-wide">{{session('name')}}</h1>

    <h1 class="uppercase text-white text-xl font-normal tracking-wide">{{\Carbon\Carbon::now()->isoFormat('MMMM Do YYYY')}}</h1>
</div>