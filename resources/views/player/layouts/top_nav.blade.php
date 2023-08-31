<nav class="bg-transparent px-2 sm:px-4 py-4">
    <div class="flex items-center">
        <div class="basis-3/12 lg:basis-8/12">
            <div class="hidden w-full lg:block md:w-auto" id="example-collapse-navbar">
                <ul class="flex flex-col md:flex md:flex-row gap-x-10 float-right items-center">
                    <a href="{{ Route('player.dashboard') }}">
                        <li class="text-white text-sm font-bold inline-flex gap-2 uppercase items-center"><img
                                src="{{asset('assets/images/icons/nav-home.svg')}}" alt="">
                            <span>Home</span>
                        </li>
                    </a>
                    <a href="{{ Route('player.chat') }}">
                        <li class="text-white text-sm font-bold inline-flex gap-2 uppercase items-center"><img
                                src="{{asset('assets/images/icons/nav-chat.svg')}}" alt="">
                            <span>Chat</span>
                        </li>
                    </a>
                    <a href="{{ Route('player.favourite.view') }}">
                        <li class="text-white text-sm font-bold inline-flex gap-2 uppercase items-center">
                            <img src="{{asset('assets/images/icons/nav-heart-icon.svg')}}" alt="">
                            <span>Favourite</span>
                        </li>
                    </a>
                    <a href="{{ Route('player.invitation') }}">
                        <li class="text-white text-sm font-bold inline-flex gap-2 uppercase items-center"><img
                                src="{{asset('assets/images/icons/nav-invitation.svg')}}" alt="">
                            <span>Invitation</span>
                        </li>
                    </a>
                    <a href="{{ Route('player.more') }}">
                        <li class="text-white text-sm font-bold inline-flex gap-2 uppercase items-center"><img
                                src="{{asset('assets/images/icons/nav-more-icon.svg')}}" alt="">
                            <span>More</span>
                        </li>
                    </a>
                </ul>
            </div>
            <aside id="side-menu"
                class="md:hidden fixed top-0 border-2 border-dark-green left-[-250px] bg-black/40 h-full 2xl:h-screen z-50 bg-black flex flex-col text-white duration-300">
                <ul class=" flex flex-col gap-y-4 px-3 py-6 pb-16">
                    <a href="javascript:void(0)" class="absolute top-0 right-2 text-right text-lg"
                        onclick="closeMenu()">&times;</a>
                        <a href="{{ Route('player.dashboard') }}">
                            <li class="text-white text-sm font-bold inline-flex gap-2 uppercase"><img
                                    src="{{asset('assets/images/icons/nav-home.svg')}}">
                                Home
                            </li>
                        </a>
                        <a href="{{ Route('player.chat') }}">
                            <li class="text-white text-sm font-bold inline-flex gap-2 uppercase"><img
                                    src="{{asset('assets/images/icons/nav-chat.svg')}}">
                                Chat
                            </li>
                        </a>
                        <a href="{{ Route('player.favourite.view') }}">
                            <li class="text-white text-sm font-bold inline-flex gap-2 uppercase"><img
                                    src="{{asset('assets/images/icons/nav-heart-icon.svg')}}">
                                Favourite
                            </li>
                        </a>
                        <a href="{{ Route('player.invitation') }}">
                            <li class="text-white text-sm font-bold inline-flex gap-2 uppercase"><img
                                    src="{{asset('assets/images/icons/nav-invitation.svg')}}">
                                Invitation
                            </li>
                        </a>
                        <a href="{{ Route('player.more') }}">
                            <li class="text-white text-sm font-bold inline-flex gap-2 uppercase"><img
                                    src="{{asset('assets/images/icons/nav-more-icon.svg')}}">
                                More
                            </li>
                        </a>
                    <li class="absolute bottom-0 xl:bottom-3">
                        <a href="{{Route('logout')}}">
                            <p class="py-1 px-4 font-medium bg-black rounded-full text-white text-xs">Logout</p>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- This is used to open the menu -->
            <main class="md:hidden p-2">
                <span onclick="openMenu()"><svg class="w-6 h-6" fill="#ffffff" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg></span>
            </main>
        </div>
        <div class="basis-9/12 lg:basis-4/12">
            <ul class="flex items-center gap-2 md:gap-x-3 justify-end lg:justify-center">
                <li>
                    <div class="text-white font-semibold text-sm whitespace-nowrap flex gap-x-2 items-center">
                        <img src="{{ asset('assets/images/white-location.svg') }}" class="mr-1">
                        {{session('current_city')}}
                    </div>
                </li>
                <li>
                    <button typ="button">
                        <a href="{{Route('player.account')}}"
                            class="text-black bg-upgrade-btn uppercase font-semibold rounded-full text-xs md:text-sm p-1.5 md:px-4 py-1 text-center inline-flex items-center">
                            <img src="{{asset('assets/images/upgrade-star.svg')}}"
                                class="mr-0.5 w-3.5 h-3.5 md:w-5 md:h-5" />
                            Upgrade
                        </a>
                    </button>
                </li>
                <li>
                    @if (session('membership_type') == 'default')
                        <a href="{{Route('player.default.player', Session('player_id'))}}">
                            <img src="{{{URL::asset(Session('image'))}}}"
                                class="rounded-full md:mr-3 h-9 sm:h-9 w-9 border-2 border-dark-green" alt="Logo" />
                        </a>
                    @else
                        <a href="{{Route('player.golden.player', Session('player_id'))}}">
                            <img src="{{{URL::asset(Session('image'))}}}"
                                class="rounded-full md:mr-3 h-9 sm:h-9 w-9 border-2 border-dark-green" alt="Logo" />
                        </a>
                    @endif

                </li>
                <li>
                    <div id="notifydropdown-wrapper" class="inline-flex">
                        <button onclick="toggleMenu()"
                            class="ease-linear transition-all duration-150 ">
                            <img src="{{ asset('assets/images/icons/notification (1).svg')}}" class="mr-1"
                            alt="Logo" /> </button>
                        <div id="notifymenu" class="hidden bg-black z-50 py-2 rounded-xl p-2 mt-8 absolute w-30" style="margin-left: -94px">
                            <h1 class="text-light-green text-base uppercase font-semibold text-center">Notifications</h1>
                            <ul class="flex flex-col gap-y-2 py-2 px-2 h-52 overflow-y-auto">
                                <li>
                                    <div class="flex items-center">
                                        <img src="../assets/images/avatar.png"
                                            class="rounded-full mr-3 h-6 sm:h-9" alt="Logo" />
                                        <div class="self-center">
                                            <h1 class="text-white text-xs font-medium"><span class="text-light-green">Rashid </span> sent an email</h1>
                                            <small class="text-white font-semibold">2m ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <img src="../assets/images/avatar.png"
                                            class="rounded-full mr-3 h-6 sm:h-9" alt="Logo" />
                                        <div class="self-center">
                                            <h1 class="text-white text-xs font-medium"><span class="text-light-green">Ebad </span> sent a message</h1>
                                            <small class="text-white font-semibold">2m ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <img src="../assets/images/avatar.png"
                                            class="rounded-full mr-3 h-6 sm:h-9" alt="Logo" />
                                        <div class="self-center">
                                            <h1 class="text-white text-xs font-medium"><span class="text-light-green">Thamer </span> sent an invitation</h1>
                                            <small class="text-white font-semibold">2m ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <img src="../assets/images/avatar.png"
                                            class="rounded-full mr-3 h-6 sm:h-9" alt="Logo" />
                                        <div class="self-center">
                                            <h1 class="text-white text-xs font-medium"><span class="text-light-green">Ahmed </span> sent an email</h1>
                                            <small class="text-white font-semibold">2m ago</small>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
