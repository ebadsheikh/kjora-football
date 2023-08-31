@extends('player.layouts.master')
@section('content')
    <div class="container md:mx-auto">
        <div class="flex justify-center">
            <div class="w-11/12">
                <!--heading -->
                <div class="p-1">
                    <h1 class="uppercase text-white text-2xl md:text-5xl font-semibold tracking-wide">photo
                    </h1>
                </div>
            </div>
        </div>
        <section class="py-6">
            <div class="container md:mx-auto">
                <div class="flex justify-center">
                    <div class="w-11/12 2xl:w-full">
                        <div class="bg-white rounded-3xl">
                            <div class="p-3 md:px-6 py-6 md:px-10 md:py-10">
                                <div class="border border-border-gray rounded-3xl">
                                    <div class="grid grid-cols-1 lg:grid-cols-2">
                                        <!-- caption begining -->
                                        <div class="p-4">
                                            <div>
                                                <img class="h-56 md:h-96 w-full rounded-3xl object-cover"
                                                    src="{{ URL::asset($player_photo->photo) }}" alt="">
                                            </div>
                                            <div class="flex justify-between pt-3 pb-1">
                                                <div class="flex ">
                                                    <img src="{{ URL::asset($player_info->profile_image) }}"
                                                        class="rounded-full border-4 border-dark-green mr-3 h-12 w-12"
                                                        alt="Logo" />
                                                    <div>
                                                        <input type="hidden" value="{{ $player_info->membership_type }}"
                                                            name="player_type">
                                                        @if ($player_info->membership_type == 'golden')
                                                            <a href="{{ route('player.golden.player', $player_info->id) }}"
                                                                class="flex items-center">
                                                                <span class="self-center">
                                                                    <h1 class="text-black text-base font-bold">
                                                                        {{ $player_info->first_name }}
                                                                        {{ $player_info->sur_name }}
                                                                    </h1>
                                                                    <h2 class="text-gray-heading font-medium text-sm">
                                                                        <span>@</span>{{ $player_info->player_user_name }}
                                                                    </h2>
                                                                </span>
                                                                <img src="{{ asset('assets/images/star-icon.svg') }}"
                                                                    class=" ml-3 mb-5" alt="Logo" />
                                                            </a>
                                                        @else
                                                            <a href="{{ route('player.default.player', $player_info->id) }}"
                                                                class="flex items-center">
                                                                <span class="self-center">
                                                                    <h1 class="text-black text-base font-bold">
                                                                        {{ $player_info->first_name }}
                                                                        {{ $player_info->sur_name }}
                                                                    </h1>
                                                                    <h2 class="text-gray-heading font-medium text-sm">
                                                                        <span>@</span>{{ $player_info->player_user_name }}
                                                                    </h2>
                                                                </span>
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex items-center cursor-pointer"
                                                        onclick="openDropdown(event,'accountdropdown-id')">
                                                        <img class="w-5 h-5"
                                                            src="{{ asset('assets/images/player-photo-more-icon.svg') }}">
                                                    </div>
                                                    <div class="hidden bg-border-gray pt-1 pb-px px-4 list-none text-left rounded-full"
                                                        id="accountdropdown-id">
                                                        <ul class="flex gap-x-4">
                                                            @if ($player_info->id == session('player_id'))
                                                                <li>
                                                                    <button type="button"
                                                                        onclick="toggleModal('modal-id')">
                                                                        <img class="w-5 h-5 cursor-pointer"
                                                                            src="{{ asset('assets/images/white-pencil.svg') }}">
                                                                    </button>
                                                                </li>
                                                                <li>
                                                                    @if ($player_info->membership_type == 'golden')
                                                                        <a
                                                                            href="{{ Route('player.photo.golden.delete', [$player_photo->id, $player_info->id]) }}">
                                                                            <img class="w-5 h-5 cursor-pointer"
                                                                                src="{{ asset('assets/images/white-trash-round.svg') }}">
                                                                        </a>
                                                                    @else
                                                                        <a
                                                                            href="{{ Route('player.photo.default.delete', [$player_photo->id, $player_info->id]) }}">
                                                                            <img class="w-5 h-5 cursor-pointer"
                                                                                src="{{ asset('assets/images/white-trash-round.svg') }}">
                                                                        </a>
                                                                    @endif

                                                                </li>
                                                                <li>
                                                                    <div class="group relative">
                                                                        <img class="w-5 h-5 cursor-pointer"
                                                                            src="{{ asset('assets/images/white-share-icon.svg') }}">
                                                                        <div
                                                                            class="hidden group-hover:block absolute bottom-[-0.5rem] -right-4">
                                                                            <div
                                                                                class="py-1 px-2 flex gap-x-2 w-36 rounded-full bg-border-gray">
                                                                                <div class="social-btn-sp flex">
                                                                                    {!! $shareButtons !!}
                                                                                    <img class="w-3 h-3 mt-1.5 ml-1"
                                                                                        src="{{ asset('assets/images/white-link-icon.svg') }}"
                                                                                        onclick="Copy();" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @else
                                                                <li>
                                                                    <img src="{{ asset('assets/images/empty-flag.svg') }}"
                                                                        class="cursor-pointer"
                                                                        onclick="toggleModal('flagmodal-id')">
                                                                </li>
                                                                <li>
                                                                    <div class="group relative">
                                                                        <img class="w-5 h-5 cursor-pointer"
                                                                            src="{{ asset('assets/images/white-share-icon.svg') }}">
                                                                        <div
                                                                            class="hidden group-hover:block absolute bottom-[-0.5rem] -right-4">
                                                                            <div
                                                                                class="py-1 px-2 flex gap-x-2 w-36 rounded-full bg-border-gray">
                                                                                <div class="social-btn-sp flex">
                                                                                    {!! $shareButtons !!}
                                                                                    <img class="w-3 h-3 mt-1.5 ml-1"
                                                                                        src="{{ asset('assets/images/white-link-icon.svg') }}"
                                                                                        onclick="Copy();" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                                    id="modal-id">
                                                    <div class="relative mx-auto w-72 md:w-80">
                                                        <!--content -->
                                                        <div
                                                            class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                                            <!-- header-->
                                                            <div class="flex justify-end px-3 py-1 rounded-t">
                                                                <button
                                                                    class="text-black float-right text-lg leading-none font-normal"
                                                                    onclick="toggleModal('modal-id')">
                                                                    x
                                                                </button>
                                                            </div>
                                                            <h3 class="text-2xl text-center text-light-green font-semibold">
                                                                Edit Caption
                                                            </h3>
                                                            <!--body -->
                                                            <form
                                                                action="{{ Route('player.update.photo.caption', $player_photo->id) }}"
                                                                method="POST">
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
                                                                <div class="relative p-6 ">
                                                                    <div class="h-56 flex items-center">
                                                                        <div class="w-full">
                                                                            <label
                                                                                class="uppercase block mb-1 2xl:mb-1.5 text-light-green text-xs font-bold px-5">Caption</label>
                                                                            <input
                                                                                class="border border-border-gray border-opacity-40 text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                                                                type="text" name="caption"
                                                                                value="{{ $player_photo->caption }}">
                                                                            @error('caption')
                                                                                @include('errors.required_field',
                                                                                    ['message' => $message])
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <button
                                                                        class="w-full bg-black text-white font-medium uppercase py-2 px-4 rounded-full"
                                                                        type="submit">
                                                                        Update
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hidden opacity-70 fixed inset-0 z-40 bg-modal-black"
                                                    id="modal-id-backdrop"></div>
                                                <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                                    id="flagmodal-id">
                                                    <div class="relative my-auto mx-2 md:mx-auto w-80">
                                                        <!--content-->
                                                        <div
                                                            class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                                            <!--header-->
                                                            <div class="flex justify-end px-3 py-1 rounded-t">
                                                                <button
                                                                    class="text-black float-right text-lg leading-none font-medium"
                                                                    onclick="toggleModal('flagmodal-id')">
                                                                    x
                                                                </button>
                                                            </div>
                                                            <!--body-->
                                                            <div class="relative px-3 md:px-5 pb-6">
                                                                <h3
                                                                    class="text-xl text-light-green text-center font-semibold uppercase">
                                                                    report
                                                                </h3>
                                                                <div class="flex flex-col space-y-2 justify-center my-3">
                                                                    <input type="text"
                                                                        class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                                                        placeholder="spam">
                                                                    <input type="text"
                                                                        class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                                                        placeholder="Hate speech or uncivil">
                                                                    <input type="text"
                                                                        class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                                                        placeholder="sexual activity">
                                                                    <input type="text"
                                                                        class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                                                        placeholder="scam or fraud">
                                                                    <input type="text"
                                                                        class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                                                        placeholder="bullying or harrasment">
                                                                    <input type="text"
                                                                        class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                                                        placeholder="violence or threats">
                                                                    <input type="text"
                                                                        class="border border-border-gray text-center border-opacity-40 uppercase text-xs rounded-full w-full px-5 py-3 placeholder-dark-gray placeholder-opacity-40"
                                                                        placeholder="racism, discrimination or insults">
                                                                </div>
                                                                <button
                                                                    class="w-full bg-black text-white text-sm font-medium uppercase py-2 px-4 rounded-full"
                                                                    type="button">
                                                                    update
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hidden opacity-25 fixed inset-0 z-40 bg-black"
                                                    id="flagmodal-id-backdrop"></div>
                                            </div>
                                            <div class="flex items-center justify-between ml-16">
                                                <h1 class="pr-2 text-xs text-gray-heading">
                                                    {{ $player_photo->created_at->diffForHumans() }}
                                                    |
                                                    {{ $player_photo->created_at->format('H:i') }}</h1>
                                                <div class="flex items-center">
                                                    <h1 class="text-sm mr-1" id="total_profile_like">
                                                        {{$profile_likes}}</h1>
                                                        <img class="w-4 h-4" src="{{session('profile_like') == $player_photo->id ? asset('assets/images/heart-icon.svg') : asset('assets/images/empty-heart.svg')}}"
                                                        id="like_proile"
                                                        onclick="isProfileLike('{{ Session::get('player_id') }}','{{ $player_photo->id }}','like_profile_{{$player_photo->id}}')" />
                                                </div>
                                            </div>
                                            <div class="py-1 ml-16">
                                                <p class="text-xs break-words">{{ $player_photo->caption }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="lg:border-l-2">
                                            <div class="px-2 pt-4 pb-2 border-b-2 flex items-center justify-between">
                                                <h1 class="text-sm ">comments {{ count($comment) }}</h1>
                                            </div>
                                            <div>
                                                <div class="p-2 space-y-4 h-[31rem] overflow-y-auto scroll">
                                                    @foreach ($comment as $key => $comments)
                                                        <div class="w-auto">
                                                            <div class="flex">
                                                                <div class="">
                                                                    <img src="{{ URL::asset($comments->profile_image) }}"
                                                                        class="rounded-full border-2 object-cover border-dark-green mr-2 h-8 md:h-10 w-8 md:w-10"
                                                                        alt="Logo" />
                                                                </div>
                                                                <div class="w-full">
                                                                    <div class="flex flex-col">
                                                                        <a href="#"
                                                                            class="static md:relative flex items-center">
                                                                            <h1 class="text-black text-base font-bold">
                                                                                {{ $comments->first_name }}
                                                                                {{ $comments->sur_name }}
                                                                            </h1>
                                                                            <img src="{{ asset('assets/images/comment-dot.svg') }}"
                                                                                class="mx-2" alt="">
                                                                            <h2
                                                                                class="text-gray-heading text-xs font-medium">
                                                                                <span>@</span>{{ $comments->player_user_name }}
                                                                            </h2>
                                                                            <h1
                                                                                class="hidden md:block md:absolute md:top-0.5 md:right-0 pr-2 text-xs text-gray-heading">
                                                                                {{ $comments->created_at->diffForHumans() }}
                                                                                |
                                                                                {{ $comments->created_at->format('H:i') }}
                                                                            </h1>
                                                                        </a>
                                                                        <h1 class="md:hidden text-xs text-gray-heading">
                                                                            {{ $comments->created_at->diffForHumans() }}
                                                                            |
                                                                            {{ $comments->created_at->format('H:i') }}
                                                                        </h1>
                                                                        <div class="py-1">
                                                                            <p class="text-xs">
                                                                                {{ strip_tags($comments->comment) }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="relative flex space-x-2">
                                                                            <button type="button"
                                                                                    id="comment_like_{{$comments->id}}"
                                                                                    onclick="isFavorite('{{ Session::get('player_id') }}','{{ $comments->id }}','{{ $comments->photo_id }}','like_comment_{{$comments->id}}')"
                                                                                class="text-black inline-flex text-xs font-medium">
                                                                                {{count($comments->commentlike)}} Likes</button>
                                                                            <button type="button"
                                                                                class="text-black text-xs font-medium"
                                                                                onclick="reply({{ $key }})">Reply</button>
                                                                            {{-- <img src="{{$comments->is_favorite == 1 ? asset('assets/images/heart-icon.svg') : asset('assets/images/empty-heart.svg')}}"
                                                                                    id="like_comment_{{$comments->id}}"
                                                                                    onclick="isFavorite('{{ Session::get('player_id') }}','{{ $comments->id }}','{{ $comments->photo_id }}','like_comment_{{$comments->id}}')"
                                                                                    class="absolute bottom-1 right-1"
                                                                                    alt="Logo" /> --}}
                                                                        </div>
                                                                        @foreach ($comments->reply as $replies)
                                                                            <div class="w-auto mt-3">
                                                                                <div class="flex">
                                                                                    <div>
                                                                                        <img src="{{ URL::asset($replies['replier']->profile_image) }}"
                                                                                            class="rounded-full border-2 object-cover border-dark-green mr-2 h-8 md:h-10 w-8 md:w-10"
                                                                                            alt="Logo" />
                                                                                    </div>
                                                                                    <div class="w-full">
                                                                                        <div class="flex flex-col">
                                                                                            <a href="#"
                                                                                                class="static md:relative flex items-center">
                                                                                                <h1
                                                                                                    class="text-black text-base font-bold">
                                                                                                    {{ $replies['replier']->first_name }}
                                                                                                    {{ $replies['replier']->sur_name }}
                                                                                                </h1>
                                                                                                <img src="{{ asset('assets/images/comment-dot.svg') }}"
                                                                                                    class="mx-2"
                                                                                                    alt="">
                                                                                                <h2
                                                                                                    class="text-gray-heading text-xs font-medium">
                                                                                                    <span>@</span>{{ $replies['replier']->player_user_name }}
                                                                                                </h2>
                                                                                                <h1
                                                                                                    class="hidden md:block md:absolute md:top-0.5 md:right-0 pr-2 text-xs text-gray-heading">
                                                                                                    {{ $replies->created_at->diffForHumans() }}
                                                                                                    |
                                                                                                    {{ $replies->created_at->format('H:i') }}
                                                                                                </h1>
                                                                                            </a>
                                                                                            <h1
                                                                                                class="md:hidden text-xs text-gray-heading">
                                                                                                {{ $replies->created_at->diffForHumans() }}
                                                                                                |
                                                                                                {{ $replies->created_at->format('H:i') }}
                                                                                            </h1>
                                                                                            <div class="py-1">
                                                                                                <p
                                                                                                    class="text-xs break-all">
                                                                                                    {{ strip_tags($replies->reply) }}
                                                                                                </p>
                                                                                            </div>
                                                                                            <div
                                                                                                class="relative flex space-x-2">
                                                                                                <button type="button"
                                                                                                        id="like_reply_{{$replies->id}}"
                                                                                                        onclick="isReplyLike('{{ Session::get('player_id') }}','{{ $replies->id }}','like_comment_{{$replies->id}}')"
                                                                                                    class="text-black inline-flex text-xs font-medium">
                                                                                                    {{count($replies->likes)}} Likes</button>
                                                                                                <button type="button"
                                                                                                    class="text-black text-xs font-medium"
                                                                                                    onclick="reply({{ $key }})">Reply</button>
                                                                                                {{-- <img src="{{ $replies->isAuthUserLikedPost() ? asset('assets/images/heart-icon.svg') : asset('assets/images/empty-heart.svg') }}"
                                                                                                    id="like_comment_{{ $replies->id }}"
                                                                                                    onclick="isReplyLike('{{ Session::get('player_id') }}','{{ $replies->id }}','like_comment_{{ $replies->id }}')"
                                                                                                    class="absolute bottom-1 right-1"
                                                                                                    alt="Logo" /> --}}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                        <div class="vol relative hidden"
                                                                            id="show_reply{{ $key }}">
                                                                            <form
                                                                                action="{{ Route('player.store.photo.reply') }}"
                                                                                method="post">
                                                                                @csrf
                                                                                @if (session('success'))
                                                                                    <div class="p-2">
                                                                                        <div
                                                                                            class="text-green-600 text-xs">
                                                                                            {{ session('success') }}
                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                                @if (session('error'))
                                                                                    <div class="p-2">
                                                                                        <div class="text-red-700 text-xs"
                                                                                            role="alert">
                                                                                            {{ session('error') }}
                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                                <div class="mt-2 flex">
                                                                                    <img src="{{ URL::asset(Session('image')) }}"
                                                                                        class="rounded-full border-2 object-cover border-dark-green mr-2 h-8 md:h-10 w-8 md:w-10"alt="Logo" />
                                                                                    <textarea class="mr-2 grow p-2 h-9 text-xs border-2 rounded-full resize-none scroll" placeholder="write a message.."
                                                                                        name="reply"></textarea>
                                                                                    <button type="submit"
                                                                                        class="absolute inset-y-0 right-3 md:right-4 text-sm font-semibold text-golden-yellow">
                                                                                        Post</button>
                                                                                    <input type="hidden"
                                                                                        value="{{ $comments->id }}"
                                                                                        name="comment_id">
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <form action="{{ Route('player.photo.store.comment') }}" method="post">
                                                    @csrf
                                                    @if (session('success'))
                                                        <div class="p-7">
                                                            <div class="alert alert-success  text-white">
                                                                {{ session('success') }}
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @if (session('error'))
                                                        <div class="p-7">
                                                            <div class="alert alert-danger">
                                                                {{ session('error') }}
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <div class="pl-2 pr-10 py-2 border-t-2 relative">
                                                        <textarea class="w-full outline-none whitespace-normal resize-none" id="mytextarea" placeholder="write a message.."
                                                            name="comment"></textarea>
                                                        </textarea>
                                                        <input type="hidden" value="{{ $player_photo->id }}"
                                                            name="photo_id">
                                                        @error('comment')
                                                            @include('errors.required_field', [
                                                                'message' => $message,
                                                            ])
                                                        @enderror
                                                        <button type="submit"
                                                            class="absolute top-6 right-2 text-sm font-semibold text-golden-yellow">Post</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        tinymce.init({
            selector: "#mytextarea",
            forced_root_block: false,
            plugins: "emoticons",
            toolbar: "emoticons",
            max_height: 125,
            max_width: 460,
            toolbar_location: "bottom",
            menubar: false,
            statusbar: false
        });
    </script>

    <script>
        function Copy() {
            var dummy = document.createElement('input'),
                text = window.location.href;
            document.body.appendChild(dummy);
            dummy.value = text;
            dummy.select();
            document.execCommand('copy');
            document.body.removeChild(dummy);
        }
    </script>

<script>
    function isProfileLike(user_id, profile_id, image_id) {
        // console.log(image_id);
        //     var image_path = document.getElementById('like_profile_2').src;
        //     var index = image_path.lastIndexOf("/") + 1;
        //     var filename = image_path.substr(index);
        //     if(filename == 'empty-heart.svg'){
        //         is_favourite = 1;
        //     }else{
        //         is_favourite = 0;
        //     }
            total_profile_like = document.getElementById("total_profile_like");
            $.ajax({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                },

                url: "{{ URL::to('/player/store/photo/profile/like') }}",

                data: {

                    user_id: user_id,

                    profile_id: profile_id
                },

                method: 'POST',

                success: function(response) {
                    console.log(response.count)
                    if (response.count) {
                        $("#like_proile").attr('src',"{{ asset('assets/images/heart-icon.svg') }}");
                    }else{
                        $("#like_proile").attr('src',"{{ asset('assets/images/empty-heart.svg') }}");

                    }

                    total_profile_like.innerHTML = 0;

                        total_profile_like.innerHTML = response.count;



                },

            });
        }
</script>

<script>
    function isFavorite(user_id, comment_id, photo_id, image_id) {
            $.ajax({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                },

                url: "{{ URL::to('/player/store/like') }}",

                data: {

                    user_id: user_id,

                    comment_id: comment_id,

                    photo_id: photo_id
                },

                method: 'POST',

                success: function(response) {
                    console.log(response)
                    document.getElementById("comment_like_"+comment_id).innerHTML = response.comment_like + ' Likes';

                },

            });
        }
</script>

<script>
    function isReplyLike(user_id, reply_id, image_id) {
            // var image_path = document.getElementById(image_id).src;
            // var index = image_path.lastIndexOf("/") + 1;
            // var filename = image_path.substr(index);
            // if(filename == 'empty-heart.svg'){
            //     is_favourite = 1;
            // }else{
            //     is_favourite = 0;
            // }
            // total_profile_like = document.getElementById("total_profile_like");
            // comment_like = document.getElementById("comment_like");
            $.ajax({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                },

                url: "{{ URL::to('/player/store/photo/like') }}",

                data: {

                    user_id: user_id,

                    reply_id: reply_id
                },

                method: 'POST',

                success: function(response) {
                    console.log(response)
                    document.getElementById("like_reply_"+reply_id).innerHTML = response.reply_like + ' Likes';
                    // if (is_favourite) {
                    //     $("#"+image_id).attr('src',"{{ asset('assets/images/heart-icon.svg') }}");
                    // }else{
                    //     $("#"+image_id).attr('src',"{{ asset('assets/images/empty-heart.svg') }}");

                    // }
                    // total_profile_like.innerHTML = response.count;
                    // comment_like.innerHTML = response.comment_like;

                },

            });
        }
</script>

    <script>
        function reply(id) {
            document.getElementById("show_reply" + id).classList.remove("hidden");

        }
    </script>
@endsection
