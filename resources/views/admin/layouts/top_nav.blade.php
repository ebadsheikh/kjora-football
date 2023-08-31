<nav class="bg-transparent border-gray-200 px-3 sm:px-4 py-2.5">
    <div class="flex justify-between items-center">
        <aside id="side-menu"
            class="md:hidden fixed top-0 border-2 border-dark-green left-[-250px] bg-black/40 h-full 2xl:h-screen z-50 bg-black flex flex-col text-white duration-300">
            <ul class=" flex flex-col gap-y-2 p-5 items-center h-screen no-scrollbar overflow-y-auto pb-16">
                <a href="javascript:void(0)" class="absolute top-0 right-2 text-right text-lg"
                    onclick="closeMenu()">&times;</a>
                <li class="{{ request()->routeIs('admin.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <img class="h-8 w-8" src="{{ asset('assets/images/icons/home-icon.svg') }}" alt="">
                    </a>
                </li>
                @if (in_array('admin.account.*',session('access')) || session('role_type') == 'super_admin')
                    <li class="{{ request()->routeIs('admin.account.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                        <a href="{{ route('admin.account.dashboard') }}">
                            <img class="h-8 w-8" src="{{ asset('assets/images/icons/account-icon.svg') }}" alt="">
                        </a>
                    </li>
                @endif
                @if (in_array('admin.verification.management.*',session('access')) || session('role_type') == 'super_admin')
                    <li class="{{ request()->routeIs('admin.verification.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                        <a href="{{ Route('admin.verification.management.dashboard') }}">
                            <img class="h-8 w-8" src="{{ asset('assets/images/icons/ic_beenhere_24px.svg') }}"
                                alt="">
                        </a>
                    </li>
                @endif
                @if (in_array('admin.player.management.*',session('access')) || session('role_type') == 'super_admin')
                    <li class="{{ request()->routeIs('admin.player.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                        <a href="{{ Route('admin.player.management.dashboard') }}">
                            <img class="bg-light-green rounded-full p-1 h-8 w-8"
                                src="{{ asset('assets/images/icons/nav-stadium-icon.svg') }}" alt="">
                        </a>
                    </li>
                @endif
                @if (in_array('admin.invitation.management.*',session('access')) || session('role_type') == 'super_admin')
                    <li class="{{ request()->routeIs('admin.invitation.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                        <a href="{{ Route('admin.invitation.management.dashboard') }}">
                            <img class="h-8 w-8" src="{{ asset('assets/images/icons/Messages.svg') }}" alt="">
                        </a>
                    </li>
                @endif
                @if (in_array('admin.stadium.*',session('access')) || session('role_type') == 'super_admin')
                    <li class="{{ request()->routeIs('admin.stadium.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                        <a href="{{ route('admin.stadium.dashboard') }}">
                            <img class="bg-light-green rounded-full p-1 h-8 w-8"
                                src="{{ asset('assets/images/icons/football-field.svg') }}" alt="">
                        </a>
                    </li>
                @endif
                @if (in_array('admin.upgrade.management.*',session('access')) || session('role_type') == 'super_admin')
                    <li class="{{ request()->routeIs('admin.upgrade.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                        <a href="{{ Route('admin.upgrade.management.dashboard') }}">
                            <img class="h-8 w-8" src="{{ asset('assets/images/icons/Icon material-stars.svg') }}"
                                alt="">
                        </a>
                    </li>
                @endif
                @if (in_array('admin.rating.management.*',session('access')) || session('role_type') == 'super_admin')
                    <li class="{{ request()->routeIs('admin.rating.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                        <a class="text-white bg-light-green p-1 rounded-full font-medium"
                            href="{{ Route('admin.rating.management.dashboard') }}">
                            5.0
                        </a>
                    </li>
                @endif
                @if (in_array('admin.report.management.*',session('access')) || session('role_type') == 'super_admin')
                    <li class="{{ request()->routeIs('admin.report.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                        <a href="{{ Route('admin.report.management.dashboard') }}">
                            <img class="h-8 w-8" src="{{ asset('assets/images/icons/Icon material-flag.svg') }}"
                                alt="">
                        </a>
                    </li>
                @endif
                @if (in_array('admin.chat.management.*',session('access')) || session('role_type') == 'super_admin')
                    <li class="{{ request()->routeIs('admin.chat.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                        <a href="{{ Route('admin.chat.management.dashboard') }}">
                            <img class="h-8 w-8" src="{{ asset('assets/images/icons/Chat.svg') }}" alt="">
                        </a>
                    </li>
                @endif
                @if (in_array('admin.account.management.*',session('access')) || session('role_type') == 'super_admin')
                    <li class="{{ request()->routeIs('admin.account.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                        <a href="{{ Route('admin.account.management.dashboard') }}">
                            <img class="h-8 w-8" src="{{ asset('assets/images/icons/Help.svg') }}" alt="">
                        </a>
                    </li>
                @endif
                @if (in_array('admin.ad.management.*',session('access')) || session('role_type') == 'super_admin')
                    <li class="{{ request()->routeIs('admin.ad.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                        <a href="{{ Route('admin.ad.management.dashboard') }}">
                            <img class="h-8 w-8" src="{{ asset('assets/images/icons/ic_brightness_auto_24px.svg') }}"
                                alt="">
                        </a>
                    </li>
                @endif
                @if (in_array('admin.payment.management.*',session('access')) || session('role_type') == 'super_admin')
                    <li class="{{ request()->routeIs('admin.payment.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                        <a href="{{ Route('admin.payment.management.dashboard') }}">
                            <img class="h-8 w-8" src="{{ asset('assets/images/icons/ic_monetization_on_24px.svg') }}"
                                alt="">
                        </a>
                    </li>
                @endif
                @if (in_array('admin.security.management.*',session('access')) || session('role_type') == 'super_admin')
                    <li class="{{ request()->routeIs('admin.security.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                        <a href="{{Route('admin.security.management.dashboard')}}">
                            <img class="h-8 w-8" src="{{ asset('assets/images/icons/ic_network_locked_24px.svg')}}"
                                alt="">
                        </a>
                    </li>
                @endif
                @if (in_array('admin.app.management.*',session('access')) || session('role_type') == 'super_admin')
                    <li class="{{ request()->routeIs('admin.app.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                        <a href="{{Route('admin.app.management.dashboard')}}">
                            <img class="h-8 w-8" src="{{ asset('assets/images/icons/Mobile.svg') }}" alt="">
                        </a>
                    </li>
                @endif
                @if (in_array('admin.notification.management.*',session('access')) || session('role_type') == 'super_admin')
                    <li class="{{ request()->routeIs('admin.app.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                        <a href="{{Route('admin.notification.management.dashboard')}}">
                            <img class="h-8 w-8" src="{{ asset('assets/images/icons/notification-icon.svg') }}"
                                alt="">
                        </a>
                    </li>
                @endif
                @if (in_array('admin.setting.management.*',session('access')) || session('role_type') == 'super_admin')
                    <li class="{{ request()->routeIs('admin.setting.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                        <a href="{{ Route('admin.setting.management.dashboard') }}">
                            <img class="h-8 w-8" src="{{ asset('assets/images/icons/Web.svg') }}" alt="">
                        </a>
                    </li>
                @endif
                <li class="absolute bottom-0 xl:bottom-3">
                    <div>
                        <a href="{{ route('admin.logout') }}"
                            class="bg-black opacity-100 py-1 px-2 text-white text-xs rounded-full">logout</a>
                    </div>
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
        <!--Search bar-->
        <div>
            <input type="text" id="search-navbar"
                class="block px-4 py-1.5 md:py-2 w-[13rem] md:w-full text-gray-900 bg-gray-50 rounded-full border border-gray-300 sm:text-sm"
                placeholder="Search here...">
        </div>
        <!--Profile dropdown for mobile-->
        <div class="flex">
            <button class="md:hidden ease-linear transition-all duration-150" type="button"
                onclick="openDropdown(event,'dropdown-id')">
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/profile-image.jpg') }}" class="rounded-full w-9 h-9"
                        alt="Logo" />
                </div>
            </button>
            <div class="hidden bg-black text-base z-50 float-left py-2 list-none text-left rounded-xl p-2 shadow-lg mt-1"
                id="dropdown-id"> 
                <ul class="flex flex-col gap-y-2 py-2 px-2">
                    <li class="inline-flex items-center space-x-3">
                        <img class="w-6 h-6" src="{{asset('assets/images/icons/account-icon.svg')}} ">
                        <a href="{{Route('admin.superadmin.account')}}" class="flex items-center">
                            <h1 class="text-white font-medium uppercase text-xs">
                                Account</h1>
                        </a>
                    </li>
                    <li class="inline-flex items-center space-x-3">
                        <img class="w-6 h-6" src="{{ asset('assets/images/white-location.svg') }}" />
                        <a href="#" class="flex items-center">
                            <h1 class="text-white font-medium uppercase text-xs">Adailiya</h1>
                        </a>
                    </li>
                    <li class="inline-flex items-center space-x-3">
                        <img class="w-6 h-6" src="{{ asset('assets/images/icons/chat-nav.svg') }}" alt="">
                        <h1 class="text-white font-medium uppercase text-xs">Messages</h1>
                    </li>
                    <li class="inline-flex items-center space-x-3">
                        <img class="w-6 h-6" src="{{ asset('assets/images/icons/notification (1).svg') }}"
                            alt="">
                        <h1 class="text-white font-medium uppercase text-xs">notification</h1>
                    </li>

                </ul>
            </div>
            <div class="hidden w-full lg:block md:w-auto" id="mobile-menu">
                <ul class="flex flex-col items-center mt-4 md:flex-row md:space-x-4 md:mt-0 md:text-sm md:font-medium">
                    <li>
                        <a href="#" class="flex items-center">
                            <img src="{{ asset('assets/images/location.svg') }}" class="mr-1" alt="Logo" />
                            <span class="self-center text-white font-semibold whitespace-nowrap">
                                <div>
                                    Adailiya
                                </div>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/images/icons/chat-nav.svg') }}" class="mr-1"
                                alt="Logo" />
                        </a>
                    </li>
                    {{-- <li>
                        <a href="#">
                            <img src="{{ asset('assets/images/icons/notification (1).svg') }}" class="mr-1"
                                alt="Logo" />
                        </a>
                    </li> --}}
                    <li>
                        <div id="notifydropdown-wrapper" class="inline-flex">
                            <button onclick="toggleMenu()"
                                class="ease-linear transition-all duration-150 ">
                                <img src="{{ asset('assets/images/icons/notification (1).svg') }}" class="mr-1"
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
                    <li>
                        <div class="flex">
                            <div class="flex items-center cursor-pointer"
                                onclick="openDropdown(event,'accountdropdown-id')">
                                <img src="{{asset('assets/images/profile-image.jpg')}}"
                                    class="rounded-full mr-3 h-6 sm:h-9" alt="Logo" />
                                <span class="self-center text-white font-semibold whitespace-nowrap">
                                    <div>
                                        <h4 class="uppercase text-white font-bold tracking-wide">{{ session('name') }}
                                        </h4>
                                    </div>
                                </span>
                            </div>
                            <div class="hidden bg-black text-base z-50 float-left py-2 list-none text-left rounded-xl p-2 shadow-lg "
                                id="accountdropdown-id">
                                <ul class="flex flex-col gap-y-2 py-2 px-2">
                                    <li class="inline-flex items-center space-x-3">
                                        <img class="w-6 h-6" src="{{asset('assets/images/icons/account-icon.svg')}} ">
                                        <a href="{{Route('admin.superadmin.account')}}" class="flex items-center">
                                            <h1 class="text-white font-medium uppercase text-xs">
                                                Account</h1>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
