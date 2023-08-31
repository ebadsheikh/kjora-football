<div>
    <aside class="hidden md:block h-full 2xl:h-screen fixed top-0 border-2 border-dark-green bg-black/40">
        <ul class="flex flex-col gap-y-2 p-5 items-center h-screen scroll overflow-y-auto pb-16">
            <li class="{{ request()->routeIs('admin.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                <div class="flex">
                    <div class="w-full text-center">
                        <a href="{{ route('admin.dashboard') }}">
                            <img class="h-9 w-9 ease-linear transition-all duration-150 cursor-pointer"
                            src="{{ asset('assets/images/icons/home-icon.svg')}}"
                            onmouseover="openPopover(event,'popover-id')"
                            onmouseleave="openPopover(event,'popover-id')">
                        </a>
                        <div class="hidden mb-3 block z-50 rounded-lg" id="popover-id">
                            <div
                                class="bg-white text-black leading-normal font-semibold py-1 px-2 mb-0 uppercase text-xxs rounded-lg ">
                                Home
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @if (in_array('admin.account.*',session('access')) || session('role_type') == 'super_admin')
                <li class="{{ request()->routeIs('admin.account.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                    <div class="flex">
                        <div class="w-full text-center">
                            <a href="{{ route('admin.account.dashboard') }}">
                                <img class="h-8 w-8 ease-linear transition-all duration-150 cursor-pointer"
                                    src="{{ asset('assets/images/icons/account-icon.svg')}}"
                                    onmouseover="openPopover(event,'accountpopover-id')"
                                    onmouseleave="openPopover(event,'accountpopover-id')">
                            </a>
                            <div class="hidden mb-3 block z-50 rounded-lg" id="accountpopover-id">
                                <div
                                    class="bg-white text-black leading-normal font-semibold py-1 px-2 mb-0 uppercase text-xxs rounded-lg">
                                    Admin management
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endif
            @if (in_array('admin.verification.management.*',session('access')) || session('role_type') == 'super_admin')
                <li class="{{ request()->routeIs('admin.verification.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                    <div class="flex">
                        <div class="w-full text-center">
                            <a href="{{ Route('admin.verification.management.dashboard') }}">
                                <img class="h-8 w-8 ease-linear transition-all duration-150 cursor-pointer"
                                    src="{{ asset('assets/images/icons/ic_beenhere_24px.svg')}}"
                                    onmouseover="openPopover(event,'verifypopover-id')"
                                    onmouseleave="openPopover(event,'verifypopover-id')">
                            </a>
                            <div class="hidden mb-3 block z-50 rounded-lg" id="verifypopover-id">
                                <div
                                    class="bg-white text-black leading-normal font-semibold py-1 px-2 mb-0 uppercase text-xxs rounded-lg">
                                    verification management
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endif
            @if (in_array('admin.player.management.*',session('access')) || session('role_type') == 'super_admin')
                <li class="{{ request()->routeIs('admin.player.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                    <div class="flex">
                        <div class="w-full text-center">
                            <a href="{{ Route('admin.player.management.dashboard') }}">
                                <img class="bg-light-green rounded-full p-1 h-8 w-8 ease-linear transition-all duration-150 cursor-pointer"
                                    src="{{ asset('assets/images/icons/nav-stadium-icon.svg')}}"
                                    onmouseover="openPopover(event,'playerpopover-id')"
                                    onmouseleave="openPopover(event,'playerpopover-id')">
                            </a>
                            <div class="hidden mb-3 block z-50 rounded-lg" id="playerpopover-id">
                                <div
                                    class="bg-white text-black leading-normal font-semibold py-1 px-2 mb-0 uppercase text-xxs rounded-lg">
                                    Player management
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endif
            @if (in_array('admin.invitation.management.*',session('access')) || session('role_type') == 'super_admin')
                <li class="{{ request()->routeIs('admin.invitation.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                    <div class="flex">
                        <div class="w-full text-center">
                            <a href="{{ Route('admin.invitation.management.dashboard') }}">
                                <img class="h-8 w-8 ease-linear transition-all duration-150 cursor-pointer"
                                    src="{{ asset('assets/images/icons/Messages.svg')}}"
                                    onmouseover="openPopover(event,'invitepopover-id')"
                                    onmouseleave="openPopover(event,'invitepopover-id')" alt="">
                            </a>
                            <div class="hidden mb-3 block z-50 rounded-lg" id="invitepopover-id">
                                <div
                                    class="bg-white text-black leading-normal font-semibold py-1 px-2 mb-0 uppercase text-xxs rounded-lg">
                                    Invitation management
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endif
            @if (in_array('admin.stadium.*',session('access')) || session('role_type') == 'super_admin')
                <li class="{{ request()->routeIs('admin.stadium.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                    <div class="flex">
                        <div class="w-full text-center">
                            <a href="{{ route('admin.stadium.dashboard') }}">
                                <img class="bg-light-green rounded-full p-1 h-8 w-8 ease-linear transition-all duration-150 cursor-pointer"
                                    src="{{ asset('assets/images/icons/football-field.svg')}}"
                                    onmouseover="openPopover(event,'stadiumpopover-id')"
                                    onmouseleave="openPopover(event,'stadiumpopover-id')" alt="">
                            </a>
                            <div class="hidden mb-3 block z-50 rounded-lg" id="stadiumpopover-id">
                                <div
                                    class="bg-white text-black leading-normal font-semibold py-1 px-2 mb-0 uppercase text-xxs rounded-lg">
                                    stadium management
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endif
            @if (in_array('admin.upgrade.management.*',session('access')) || session('role_type') == 'super_admin')
                <li class="{{ request()->routeIs('admin.upgrade.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                    <div class="flex">
                        <div class="w-full text-center">
                            <a href="{{ Route('admin.upgrade.management.dashboard') }}">
                                <img class=" h-8 w-8 ease-linear transition-all duration-150 cursor-pointer"
                                    src="{{ asset('assets/images/icons/Icon material-stars.svg')}}"
                                    onmouseover="openPopover(event,'upgradepopover-id')"
                                    onmouseleave="openPopover(event,'upgradepopover-id')" alt="">
                            </a>
                            <div class="hidden mb-3 block z-50 rounded-lg" id="upgradepopover-id">
                                <div
                                    class="bg-white text-black leading-normal font-semibold py-1 px-2 mb-0 uppercase text-xxs rounded-lg">
                                    upgrade management
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endif
            @if (in_array('admin.rating.management.*',session('access')) || session('role_type') == 'super_admin')
                <li class="{{ request()->routeIs('admin.rating.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                    <div class="flex">
                        <div class="w-full text-center">
                            <a href="{{ Route('admin.rating.management.dashboard') }}">
                                <img class="h-8 w-8 bg-light-green p-1 rounded-full ease-linear transition-all duration-150 cursor-pointer"
                                    src="{{ asset('assets/images/icons/rating-icon1.png')}}"
                                    onmouseover="openPopover(event,'ratingpopover-id')"
                                    onmouseleave="openPopover(event,'ratingpopover-id')" alt="">
                            </a>
                            <div class="hidden mb-3 block z-50 rounded-lg" id="ratingpopover-id">
                                <div
                                    class="bg-white text-black leading-normal font-semibold py-1 px-2 mb-0 uppercase text-xxs rounded-lg">
                                    rating management
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endif
            @if (in_array('admin.report.management.*',session('access')) || session('role_type') == 'super_admin')
                <li class="{{ request()->routeIs('admin.report.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                    <div class="flex">
                        <div class="w-full text-center">
                            <a href="{{ Route('admin.report.management.dashboard') }}">
                                <img class="h-8 w-8 ease-linear transition-all duration-150 cursor-pointer"
                                src="{{ asset('assets/images/icons/Icon material-flag.svg')}}"
                                    onmouseover="openPopover(event,'reportpopover-id')"
                                    onmouseleave="openPopover(event,'reportpopover-id')" alt="">
                            </a>
                            <div class="hidden mb-3 block z-50 rounded-lg" id="reportpopover-id">
                                <div
                                    class="bg-white text-black leading-normal font-semibold py-1 px-2 mb-0 uppercase text-xxs rounded-lg">
                                    report management
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endif
            @if (in_array('admin.chat.management.*',session('access')) || session('role_type') == 'super_admin')
                <li class="{{ request()->routeIs('admin.chat.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                    <div class="flex">
                        <div class="w-full text-center">
                            <a href="{{ Route('admin.chat.management.dashboard') }}">
                                <img class="h-8 w-8 ease-linear transition-all duration-150 cursor-pointer"
                                src="{{ asset('assets/images/icons/Chat.svg')}}"
                                    onmouseover="openPopover(event,'chatpopover-id')"
                                    onmouseleave="openPopover(event,'chatpopover-id')" alt="">
                            </a>
                            <div class="hidden mb-3 block z-50 rounded-lg" id="chatpopover-id">
                                <div
                                    class="bg-white text-black leading-normal font-semibold py-1 px-2 mb-0 uppercase text-xxs rounded-lg">
                                    chat management
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endif
            @if (in_array('admin.account.management.*',session('access')) || session('role_type') == 'super_admin')
                <li class="{{ request()->routeIs('admin.account.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                    <div class="flex">
                        <div class="w-full text-center">
                            <a href="{{Route('admin.account.management.dashboard')}}">
                                <img class="h-8 w-8 ease-linear transition-all duration-150 cursor-pointer"
                                src="{{ asset('assets/images/icons/Help.svg')}}"
                                    onmouseover="openPopover(event,'helppopover-id')"
                                    onmouseleave="openPopover(event,'helppopover-id')" alt="">
                            </a>
                            <div class="hidden mb-3 block z-50 rounded-lg" id="helppopover-id">
                                <div
                                    class="bg-white text-black leading-normal font-semibold py-1 px-2 mb-0 uppercase text-xxs rounded-lg">
                                    help management
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endif
            @if (in_array('admin.ad.management.*',session('access')) || session('role_type') == 'super_admin')
                <li class="{{ request()->routeIs('admin.ad.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                    <div class="flex">
                        <div class="w-full text-center">
                            <a href="{{ Route('admin.ad.management.dashboard') }}">
                                <img class="h-8 w-8 ease-linear transition-all duration-150 cursor-pointer"
                                src="{{ asset('assets/images/icons/ic_brightness_auto_24px.svg')}}"
                                    onmouseover="openPopover(event,'adpopover-id')"
                                    onmouseleave="openPopover(event,'adpopover-id')" alt="">
                            </a>
                            <div class="hidden mb-3 block z-50 rounded-lg" id="adpopover-id">
                                <div
                                    class="bg-white text-black leading-normal font-semibold py-1 px-2 mb-0 uppercase text-xxs rounded-lg">
                                    ad management
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endif
            @if (in_array('admin.payment.management.*',session('access')) || session('role_type') == 'super_admin')
                <li class="{{ request()->routeIs('admin.payment.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                    <div class="flex">
                        <div class="w-full text-center">
                            <a href="{{Route('admin.payment.management.dashboard')}}">
                                <img class="h-8 w-8 ease-linear transition-all duration-150 cursor-pointer"
                                src="{{asset('assets/images/icons/ic_monetization_on_24px.svg')}}"
                                    onmouseover="openPopover(event,'paymentpopover-id')"
                                    onmouseleave="openPopover(event,'paymentpopover-id')" alt="">
                            </a>
                            <div class="hidden mb-3 block z-50 rounded-lg" id="paymentpopover-id">
                                <div
                                    class="bg-white text-black leading-normal font-semibold py-1 px-2 mb-0 uppercase text-xxs rounded-lg">
                                    payment management
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endif
            @if (in_array('admin.security.management.*',session('access')) || session('role_type') == 'super_admin')
                <li class="{{ request()->routeIs('admin.security.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                    <div class="flex">
                        <div class="w-full text-center">
                            <a href="{{Route('admin.security.management.dashboard')}}">
                                <img class="h-8 w-8 ease-linear transition-all duration-150 cursor-pointer"
                                src="{{ asset('assets/images/icons/ic_network_locked_24px.svg')}}"
                                    onmouseover="openPopover(event,'securitypopover-id')"
                                    onmouseleave="openPopover(event,'securitypopover-id')" alt="">
                            </a>
                            <div class="hidden mb-3 block z-50 rounded-lg" id="securitypopover-id">
                                <div
                                    class="bg-white text-black leading-normal font-semibold py-1 px-2 mb-0 uppercase text-xxs rounded-lg">
                                    security management
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endif
            @if (in_array('admin.app.management.*',session('access')) || session('role_type') == 'super_admin')
                <li class="{{ request()->routeIs('admin.app.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                    <div class="flex">
                            <div class="w-full text-center">
                                <a href="{{Route('admin.app.management.dashboard')}}">
                                    <img class="h-8 w-8 ease-linear transition-all duration-150 cursor-pointer"
                                    src="{{ asset('assets/images/icons/Mobile.svg')}}"
                                        onmouseover="openPopover(event,'apppopover-id')"
                                        onmouseleave="openPopover(event,'apppopover-id')" alt="">
                                </a>
                                <div class="hidden mb-3 block z-50 rounded-lg" id="apppopover-id">
                                    <div
                                        class="bg-white text-black leading-normal font-semibold py-1 px-2 mb-0 uppercase text-xxs rounded-lg">
                                        app management
                                    </div>
                                </div>
                            </div>
                    </div>
                </li>
            @endif
            @if (in_array('admin.notification.management.*',session('access')) || session('role_type') == 'super_admin')
                <li class="{{ request()->routeIs('admin.notification.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                    <div class="flex">
                        <div class="w-full text-center">
                            <a href="{{Route('admin.notification.management.dashboard')}}">
                                <img class="h-8 w-8 ease-linear transition-all duration-150 cursor-pointer"
                                src="{{ asset('assets/images/icons/notification-icon.svg')}}"
                                    onmouseover="openPopover(event,'notifypopover-id')"
                                    onmouseleave="openPopover(event,'notifypopover-id')" alt="">
                            </a>
                            <div class="hidden mb-3 block z-50 rounded-lg" id="notifypopover-id">
                                <div
                                    class="bg-white text-black leading-normal font-semibold py-1 px-2 mb-0 uppercase text-xxs rounded-lg">
                                    notification management
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endif
            @if (in_array('admin.setting.management.*',session('access')) || session('role_type') == 'super_admin')
                <li class="{{ request()->routeIs('admin.setting.management.dashboard') ? 'bg-gray-500 rounded-lg p-1 border-2 border-dark-green' : '' }}">
                    <div class="flex">
                        <div class="w-full text-center">
                            <a href="{{ Route('admin.setting.management.dashboard') }}">
                                <img class="h-8 w-8 ease-linear transition-all duration-150 cursor-pointer"
                                src="{{ asset('assets/images/icons/Web.svg')}}"
                                    onmouseover="openPopover(event,'settingpopover-id')"
                                    onmouseleave="openPopover(event,'settingpopover-id')" alt="">
                            </a>
                            <div class="hidden mb-3 block z-50 rounded-lg" id="settingpopover-id">
                                <div
                                    class="bg-white text-black leading-normal font-semibold py-1 px-2 mb-0 uppercase text-xxs rounded-lg">
                                    setting management
                                </div>
                            </div>
                        </div>
                    </div>
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
</div>

