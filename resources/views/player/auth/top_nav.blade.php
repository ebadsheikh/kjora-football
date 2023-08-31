<nav class="bg-transparent border-gray-200 px-2 sm:px-4 py-2.5">
    <div class="grid grid-cols-3 items-center 2xl:mx-2">
        <div class="col-span-1">
        </div>
        <div class="col-span-1">
            <div class="flex justify-center">
                <div class="py-2">
                    <img class="w-24 h-24" src="{{asset('assets/images/kjora-new-logo.svg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="col-span-1">
            <div class="flex justify-end">
                <div class="hidden w-full lg:block md:w-auto">
                    <ul
                        class="flex flex-col items-center mt-4 md:flex-row md:space-x-14 md:mt-0 md:text-sm md:font-medium">
                        <li class="{{ request()->routeIs('login') ? 'underline decoration-4 decoration-dark-green underline-offset-8' : '' }}">
                            <a class="text-white font-bold uppercase text-lg" href="{{Route('login')}}">home</a>
                        </li>
                        <li class="{{request()->routeIs('about') ? 'underline decoration-4 decoration-dark-green underline-offset-8' : '' }}">
                            <a class="text-white font-bold uppercase text-lg" href="{{Route('about')}}">about</a>
                        </li>
                        {{-- <li class="{{request()->routeIs('contact') ? 'underline decoration-4 decoration-dark-green underline-offset-8' : '' }}">
                            <a class="text-white font-bold uppercase text-lg" href="{{Route('contact')}}">contact</a>
                        </li> --}}
                    </ul>
                </div>
                <div class="md:hidden p-2">
                    <span onclick="openMenu()"><svg class="w-6 h-6" fill="#ffffff" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg></span>
                </div>
                <aside id="login-menu"
                class="md:hidden fixed top-0 border-2 border-dark-green left-[-250px] bg-black/40 h-full 2xl:h-screen z-50 bg-black flex flex-col text-white duration-300">
                <ul class=" flex flex-col gap-y-4 px-3 py-6 pb-16">
                    <a href="javascript:void(0)" class="absolute top-0 right-2 text-right text-lg"
                        onclick="closeMenu()">&times;</a>
                        <li>
                            <a class="text-white font-bold uppercase text-lg " href="{{Route('login')}}">home</a>
                        </li>
                        <li>
                            <a class="text-white font-bold uppercase text-lg" href="{{Route('about')}}">about</a>
                        </li>
                        {{-- <li>
                            <a class="text-white font-bold uppercase text-lg" href="{{Route('contact')}}">contact</a>
                        </li> --}}
                </ul>
            </aside>
            </div>
        </div>
    </div>
</nav>
<script>
    var sideMenu = document.getElementById('login-menu');
    function openMenu() {
        sideMenu.classList.remove('left-[-250px]');
        sideMenu.classList.add('left-0');
    }

    function closeMenu() {
        sideMenu.classList.remove('left-0');
        sideMenu.classList.add('left-[-250px]');
    }
</script>
