@extends('admin.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/custom/style/custom_calender_picker.css') }}">
@endsection
@section('content')
    <div class="py-12 px-5 2xl:mx-32 2xl:mt-48">
        <form action="{{Route('admin.store.contract')}}" method="POST" enctype="multipart/form-data">
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
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 2xl:gap-24">
                    <div class="bg-white px-5 py-9 md:py-5 xl:pt-6 xl:pb-8 2xl:pt-[2.8rem] 2xl:pb-10 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                        <h1
                            class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green 2xl:mb-3">
                            create contract</h1>
                        <div class="md:px-6 lg:px-0 xl:px-6 py-5">
                            <div class="grid grid-cols-1 md:grid-cols-2 grid-rows-4 gap-x-4 gap-y-2 2xl:gap-y-6">
                                <div class="col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">date
                                        of
                                        employment</label>
                                        <div class="relative">
                                            <input type="text" id="date_of_employment" autocomplete="off"
                                                name="date_of_employment"
                                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                                placeholder="DD/MM/YY">
                                                <span class="absolute inset-y-2 right-3.5 date-icon-a">
                                                    <img src="{{asset('assets/images/icons/black-calender-icon.svg')}}" alt="">
                                                </span>
                                                @error('date_of_employment')
                                                    @include('errors.required_field', ['message' => $message])
                                                @enderror
                                        </div>
                                </div>
                                <div class="col-span-1">
                                    <label class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">end
                                        of
                                        employment</label>
                                        <div class="relative">
                                            <input type="text" id="end_of_employment" autocomplete="off"
                                                name="end_of_employment"
                                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                                placeholder="DD/MM/YY">
                                                <span class="absolute inset-y-2 right-3.5 date-icon-b">
                                                    <img src="{{asset('assets/images/icons/black-calender-icon.svg')}}" alt="">
                                                </span>
                                                @error('end_of_employment')
                                                    @include('errors.required_field', ['message' => $message])
                                                @enderror
                                        </div>
                                </div>
                                <div class="col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">salary</label>
                                    <input type="number"
                                        name="salary"
                                        class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                        placeholder="$">
                                        @error('salary')
                                            @include('errors.required_field', ['message' => $message])
                                        @enderror
                                </div>
                                <div class="col-span-1">
                                    <label
                                        class="uppercase  block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">billing</label>
                                    <div class="relative items-center">
                                        <select
                                            class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs" name="billing_id">
                                            @foreach ($billing as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('billing_id')
                                            @include('errors.required_field', ['message' => $message])
                                        @enderror
                                        <span class="absolute inset-y-5 right-3.5">
                                            <img src="../assets/images/drop-arrow.svg" alt="">
                                        </span>
                                    </div>
                                </div>
                                <div class="col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">deadline</label>
                                        <div class="relative">
                                            <input type="text" id="deadline" autocomplete="off"
                                                name="deadline"
                                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                                placeholder="DD/MM/YY">
                                                <span class="absolute inset-y-2 right-3.5 date-icon-c">
                                                    <img src="{{asset('assets/images/icons/black-calender-icon.svg')}}" alt="">
                                                </span>
                                                @error('deadline')
                                                    @include('errors.required_field', ['message' => $message])
                                                @enderror
                                        </div>
                                </div>
                                <div class="col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">incomplete
                                        work</label>
                                    <input type="number"
                                        name="incomplete_work"
                                        class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                        placeholder="$">
                                        @error('incomplete_work')
                                            @include('errors.required_field', ['message' => $message])
                                        @enderror
                                </div>
                                <div class="col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">public
                                        holidays</label>
                                        <div class="relative items-center">
                                            <select class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 rounded-full text-xs"
                                            name="public_holiday_applicability">
                                                <option value="include">Include</option>
                                                <option value="exclude">Exclude</option>
                                            </select>
                                            <span class="absolute inset-y-5 right-3.5">
                                                <img src="../assets/images/drop-arrow.svg" alt="">
                                            </span>
                                        </div>
                                        @error('public_holiday_applicability')
                                            @include('errors.required_field', ['message' => $message])
                                        @enderror
                                </div>
                                <div class="col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">public
                                        holiday extras</label>
                                    <input type="text"
                                        name="public_holiday_extras"
                                        class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                        placeholder="$">
                                        @error('public_holiday_extras')
                                            @include('errors.required_field', ['message' => $message])
                                        @enderror
                                </div>
                                <div class="col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">leave
                                        entitlements</label>
                                    <input type="number"
                                        name="leave_entitlements"
                                        class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                        placeholder="Days">
                                        @error('leave_entitlements')
                                            @include('errors.required_field', ['message' => $message])
                                        @enderror
                                </div>
                                <div class="col-span-1">
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">sick
                                        leave
                                        entitlements</label>
                                    <input type="number"
                                        name="sick_leave_entitlements"
                                        class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                        placeholder="Days">
                                        @error('sick_leave_entitlements')
                                            @include('errors.required_field', ['message' => $message])
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white px-5 py-9 md:py-5 xl:pt-6 xl:pb-8 2xl:pt-[2.8rem] 2xl:pb-10 rounded-2xl h-auto lg:h-[36.125rem] xl:h-[37.125rem] 2xl:h-[43.5rem]">
                        <h1
                            class="uppercase text-sm sm:text-lg md:text-3xl lg:text-2xl text-center font-semibold text-light-green">
                            create contract</h1>
                        <div class="md:px-6 lg:px-0 xl:px-6 py-5">
                            <div class="grid gap-y-2 2xl:gap-y-6">
                                <div>
                                    <label
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">select
                                        position</label>
                                    <div class="relative items-center">
                                        <select
                                            class="appearance-none border border-border-gray bg-white border-opacity-40 text-gray-400 w-full py-3 px-5 capitalize rounded-full text-xs" name="position_id">
                                        @foreach ($position as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                        </select>
                                        @error('position_id')
                                            @include('errors.required_field', ['message' => $message])
                                        @enderror
                                        <span class="absolute inset-y-5 right-3.5">
                                            <img src="../assets/images/drop-arrow.svg" alt="">
                                        </span>
                                    </div>
                                </div>
                                <div>
                                    <label for="message"
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-2">access</label>
                                    <div class="pl-3 grid grid-cols-1 md:grid-cols-3 gap-y-4 md:gap-y-2">
                                        <div class="col-span-1">
                                            <div class="flex mb-1">
                                                <input id="default-checkbox" type="checkbox" value="admin.dashboard" name="access[]"
                                                    class="w-4 h-4 text-light-green accent-light-green bg-gray-100 rounded border-gray-100 focus:outline-none" checked disabled>
                                                <label for="default-checkbox"
                                                    class="ml-2 uppercase text-xs lg:text-2xs xl:text-xxs 2xl:text-xs form-check-label inline-block text-gray-900">overview</label>
                                            </div>
                                            <div class="flex mb-1">
                                                <input id="default-checkbox" type="checkbox" value="admin.account.*" name="access[]"
                                                    class="w-4 h-4 text-light-green accent-light-green bg-gray-100 rounded border-gray-100 focus:outline-none">
                                                <label for="default-checkbox"
                                                    class="ml-2 uppercase text-xs lg:text-2xs xl:text-xxs 2xl:text-xs form-check-label inline-block text-gray-900">admin
                                                    management</label>
                                            </div>
                                            <div class="flex mb-1">
                                                <input id="default-checkbox" type="checkbox" value="admin.player.management.*" name="access[]"
                                                    class="w-4 h-4 text-light-green accent-light-green bg-gray-100 rounded border-gray-100 focus:outline-none">
                                                <label for="default-checkbox"
                                                    class="ml-2 uppercase text-xs lg:text-2xs xl:text-xxs 2xl:text-xs form-check-label inline-block text-gray-900">player
                                                    management</label>
                                            </div>
                                            <div class="flex mb-1">
                                                <input id="default-checkbox" type="checkbox" value="admin.invitation.management.*" name="access[]"
                                                    class="w-4 h-4 text-light-green accent-light-green bg-gray-100 rounded border-gray-100 focus:outline-none">
                                                <label for="default-checkbox"
                                                    class="ml-2 uppercase text-xs lg:text-2xs xl:text-xxs 2xl:text-xs form-check-label inline-block text-gray-900">invitation
                                                    management</label>
                                            </div>
                                            <div class="flex mb-1">
                                                <input id="default-checkbox" type="checkbox" value="admin.rating.management.*" name="access[]"
                                                    class="w-4 h-4 text-light-green accent-light-green bg-gray-100 rounded border-gray-100 focus:outline-none">
                                                <label for="default-checkbox"
                                                    class="ml-2 uppercase text-xs lg:text-2xs xl:text-xxs 2xl:text-xs form-check-label inline-block text-gray-900">rating
                                                    management</label>
                                            </div>

                                        </div>
                                        <div class="col-span-1">
                                            <div class="flex mb-1">
                                                <input id="default-checkbox" type="checkbox" value="admin.stadium.*" name="access[]"
                                                    class="w-4 h-4 text-light-green accent-light-green bg-gray-100 rounded border-gray-100 focus:outline-none">
                                                <label for="default-checkbox"
                                                    class="ml-2 uppercase text-xs lg:text-2xs xl:text-xxs 2xl:text-xs form-check-label inline-block text-gray-900">stadium
                                                    management</label>
                                            </div>
                                            <div class="flex mb-1">
                                                <input id="default-checkbox" type="checkbox" value="admin.chat.management.*" name="access[]"
                                                    class="w-4 h-4 text-light-green accent-light-green bg-gray-100 rounded border-gray-100 focus:outline-none">
                                                <label for="default-checkbox"
                                                    class="ml-2 uppercase text-xs lg:text-2xs xl:text-xxs 2xl:text-xs form-check-label inline-block text-gray-900">chat
                                                    management</label>
                                            </div>
                                            <div class="flex mb-1">
                                                <input id="default-checkbox" type="checkbox" value="admin.report.management.*" name="access[]"
                                                    class="w-4 h-4 text-light-green accent-light-green bg-gray-100 rounded border-gray-100 focus:outline-none">
                                                <label for="default-checkbox"
                                                    class="ml-2 uppercase text-xs lg:text-2xs xl:text-xxs 2xl:text-xs form-check-label inline-block text-gray-900">report
                                                    management</label>
                                            </div>
                                            <div class="flex mb-1">
                                                <input id="default-checkbox" type="checkbox" value="admin.payment.management.*" name="access[]"
                                                    class="w-4 h-4 text-light-green accent-light-green bg-gray-100 rounded border-gray-100 focus:outline-none">
                                                <label for="default-checkbox"
                                                    class="ml-2 uppercase text-xs lg:text-2xs xl:text-xxs 2xl:text-xs form-check-label inline-block text-gray-900">payment
                                                    management</label>
                                            </div>
                                            <div class="flex mb-1">
                                                <input id="default-checkbox" type="checkbox" value="admin.verification.management.*" name="access[]"
                                                    class="w-4 h-4 text-light-green accent-light-green bg-gray-100 rounded border-gray-100 focus:outline-none">
                                                <label for="default-checkbox"
                                                    class="ml-2 uppercase text-xs lg:text-2xs xl:text-xxs 2xl:text-xs form-check-label inline-block text-gray-900">verification
                                                    management</label>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="flex mb-1">
                                                <input id="default-checkbox" type="checkbox" value="admin.upgrade.management.*" name="access[]"
                                                    class="w-4 h-4 text-light-green accent-light-green bg-gray-100 rounded border-gray-100 focus:outline-none">
                                                <label for="default-checkbox"
                                                    class="ml-2 uppercase text-xs lg:text-2xs xl:text-xxs 2xl:text-xs form-check-label inline-block text-gray-900">upgrade
                                                    management</label>
                                            </div>
                                            <div class="flex mb-1">
                                                <input id="default-checkbox" type="checkbox" value="admin.ad.management.*" name="access[]"
                                                    class="w-4 h-4 text-light-green accent-light-green bg-gray-100 rounded border-gray-100 focus:outline-none">
                                                <label for="default-checkbox"
                                                    class="ml-2 uppercase text-xs lg:text-2xs xl:text-xxs 2xl:text-xs form-check-label inline-block text-gray-900">ad
                                                    management</label>
                                            </div>
                                            <div class="flex mb-1">
                                                <input id="default-checkbox" type="checkbox" value="admin.account.management.*" name="access[]"
                                                    class="w-4 h-4 text-light-green accent-light-green bg-gray-100 rounded border-gray-100 focus:outline-none">
                                                <label for="default-checkbox"
                                                    class="ml-2 uppercase text-xs lg:text-2xs xl:text-xxs 2xl:text-xs form-check-label inline-block text-gray-900">help
                                                    management</label>
                                            </div>
                                            <div class="flex mb-1">
                                                <input id="default-checkbox" type="checkbox" value="admin.notification.management.*" name="access[]"
                                                    class="w-4 h-4 text-light-green accent-light-green bg-gray-100 rounded border-gray-100 focus:outline-none">
                                                <label for="default-checkbox"
                                                    class="ml-2 uppercase text-xs lg:text-2xs xl:text-xxs 2xl:text-xs form-check-label inline-block text-gray-900">notification
                                                    management</label>
                                            </div>
                                            <div class="flex mb-1">
                                                <input id="default-checkbox" type="checkbox" value="admin.app.management.*" name="access[]"
                                                    class="w-4 h-4 text-light-green accent-light-green bg-gray-100 rounded border-gray-100 focus:outline-none">
                                                <label for="default-checkbox"
                                                    class="ml-2 uppercase text-xs lg:text-2xs xl:text-xxs 2xl:text-xs form-check-label inline-block text-gray-900">application
                                                    management</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label for="message"
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Role</label>
                                    <textarea id="message"
                                        name="role"
                                        class="h-20 resize-none border border-border-gray border-opacity-40 text-xs rounded-3xl w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                        placeholder="please enter role"></textarea>
                                        @error('role')
                                            @include('errors.required_field', ['message' => $message])
                                        @enderror
                                </div>
                                <div>
                                    <label for="message"
                                        class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Remarks</label>
                                    <textarea id="message"
                                        name="remarks"
                                        class="h-20 resize-none border border-border-gray border-opacity-40 text-xs rounded-3xl w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                        placeholder="please let us know if you have any remarks"></textarea>
                                        @error('remarks')
                                            @include('errors.required_field', ['message' => $message])
                                        @enderror
                                </div>
                                <div>
                                    <button class=" w-full bg-black text-white font-medium py-2 px-4 rounded-full"
                                        type="submit">
                                        Next
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/custom/script/custom_calender_picker.js') }}"></script>
@endsection
