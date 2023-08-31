<div class="relative w-full bg-white rounded-[3rem] w-full pt-2 px-8 lg:px-11">
    {{-- @foreach ($ad as $ads)
        <div class="slide relative">
            <div class="slider">
                <img class="w-full h-20 object-cover object-center" src="{{ URL::asset($ads->image) }}" alt="">
            </div>
        </div>
    @endforeach --}}

    <!----------HTML code starts here------->

    <div class="owl-carousel owl-theme owl-loaded owl-drag">

        <div class="owl-stage-outer">

            <div class="owl-stage"
                style="transform: translate3d(-1527px, 0px, 0px); transition: all 0.25s ease 0s; width: 3334px;">
                @foreach ($ad as $ads)
                <div class="owl-item" style="width: 445px; margin-right: 10px; background:powderblue;">
                    <div class="item">

                        <img class="w-full h-20 object-cover object-center" src="{{ URL::asset($ads->image) }}" alt="Photo">

                    </div>
                </div>
                @endforeach
            </div>
        </div>
        {{-- <div class="owl-nav disabled">

        </div> --}}

    </div>

    <!-- The dots -->
    {{-- <div class="absolute inset-x-0 bottom-2">
        <div class=" flex justify-center items-center space-x-2">
            <div class="dot w-1 h-1 md:w-1.5 md:h-1.5 rounded-full cursor-pointer" onclick="currentSlide(1)">
            </div>
            <div class="dot w-1 h-1 md:w-1.5 md:h-1.5 rounded-full cursor-pointer" onclick="currentSlide(2)">
            </div>
            <div class="dot w-1 h-1 md:w-1.5 md:h-1.5 rounded-full cursor-pointer" onclick="currentSlide(3)">
            </div>
            <div class="dot w-1 h-1 md:w-1.5 md:h-1.5 rounded-full cursor-pointer" onclick="currentSlide(4)">
            </div>
            <div class="dot w-1 h-1 md:w-1.5 md:h-1.5 rounded-full cursor-pointer" onclick="currentSlide(5)">
            </div>
        </div>
    </div> --}}
</div>
<script>
    var owl = $('.owl-carousel');
owl.owlCarousel({
    items:1,
  // items change number for slider display on desktop

    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true
});

</script>
