<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use App\Http\Requests\Player\Profile\UpdateRequest;
use App\Http\Services\Media;
use App\Models\CardDetail;
use App\Models\Club;
use App\Models\Country;
use App\Models\LikeComment;
use App\Models\LikePhotoProfile;
use App\Models\LikeVideoComment;
use App\Models\LikeVideoProfile;
use App\Models\PhotoComment;
use App\Models\PhotoView;
use App\Models\PlayerManagement;
use App\Models\PlayerPhoto;
use App\Models\PlayerPosition;
use App\Models\PlayerVideo;
use App\Models\VideoComment;
use App\Models\VideoCommentReply;
use App\Models\VideoView;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PlayerController extends Controller
{
    public function update()
    {
        $player_position = PlayerPosition::all();
        $country = Country::all();
        $club = Club::all();
        $player = PlayerManagement::where('id', session('player_id'))->first();
        return view('player.player_profile.update-profile')
            ->with('player', $player)
            ->with('club', $club)
            ->with('country', $country)
            ->with('player_position', $player_position);
    }

    public function updateProfile(UpdateRequest $request)
    {
        try {
            $media = new Media();
            $player = PlayerManagement::where('id', session('player_id'))->first();
            $player->first_name = $request->first_name;
            $player->sur_name = $request->sur_name;
            $player->email = $request->email;
            $player->country_id = $request->country_id;
            $player->club_id = $request->club_id;
            $player->date_of_birth = $request->date_of_birth;
            $player->phone = $request->phone;
            $player->phone_code = $request->phone_code;
            $player->player_user_name = $request->user_name;
            $player->gender = $request->gender;
            $player->position_id = $request->position_id;
            $player->profile_image = $media->uploadPlayerProfile($request);
            if ($player->save()) {
                session([
                    'first_name' => $player->first_name,
                    'sur_name' => $player->sur_name,
                    'name' => $player->player_user_name
                ]);
            }


            return redirect()->route('player.more');
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }
    }

    public function defaultPlayer(Request $request, $id)
    {

        $currentURL = url()->current();
        $shareButtons = \Share::page(
            $currentURL,
            'Your share text comes here',
        )
            ->facebook()
            ->linkedin()
            ->twitter()
            // ->telegram()
            ->whatsapp();
        // ->reddit();
        if ($request->tab != null) {
            $tab = $request->tab;
        } else {
            $tab = 'tab-performance';
        }

        $card_detail = CardDetail::first();
        $player = PlayerManagement::with('position')->with('club')->where('id', $id)->first();
        $player_photo = PlayerPhoto::where('player_id', $id)->get();
        $player_video = PlayerVideo::where('player_id', $id)->get();
        return view('player.player_profile.default_player_profile')
            ->with('player', $player)
            ->with('player_photo', $player_photo)
            ->with('player_video', $player_video)
            ->with('card_detail', $card_detail)
            ->with('shareButtons', $shareButtons)
            ->with('tab', $tab);
    }

    public function storePlayerPhoto(Request $request)
    {

        $request->validate([
            'caption' => 'required',
            'image' => 'required',
        ]);

        try {
            $player = PlayerManagement::where('id', session('player_id'))->first();
            $media = new Media();
            $photo = $media->upload($request);

            $player = new PlayerPhoto();
            $player->photo = $photo;
            $player->player_id = session('player_id');
            $player->caption = $request->caption;
            $player->save();

            if ($player->membership_type == 'golden') {
                return redirect()->route('player.golden.player', ['id' => session('player_id'), 'tab' => 'tab-photos']);
            } else {
                return redirect()->route('player.default.player', ['id' => session('player_id'), 'tab' => 'tab-photos']);
            }
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }
    }

    public function storePlayerVideo(Request $request)
    {
        $request->validate([
            'caption_video' => 'required',
            'video' => 'required|mimes:mp4,mov,ogg,qt|video|duration_min:10|duration_max:59',
        ]);

        try {
            $player = PlayerManagement::where('id', session('player_id'))->first();
            $media = new Media();
            $video = $media->uploadVideo($request);

            $player_video = new PlayerVideo();
            $player_video->video = $video;
            $player_video->player_id = session('player_id');
            $player_video->caption = $request->caption_video;
            $player_video->save();

            if ($player->membership_type == 'golden') {
                return redirect()->route('player.golden.player', ['id' => session('player_id'), 'tab' => 'tab-videos']);
            } else {
                return redirect()->route('player.default.player', ['id' => session('player_id'), 'tab' => 'tab-videos']);
            }

        } catch (Exception $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }
    }

    public function goldenPlayer(Request $request, $id)
    {

        $currentURL = url()->current();
        $shareButtons = \Share::page(
            $currentURL,
            'Your share text comes here',
        )
            ->facebook()
            ->linkedin()
            ->twitter()
            // ->telegram()
            ->whatsapp();
        // ->reddit();
        if ($request->tab != null) {
            $tab = $request->tab;
        } else {
            $tab = 'tab-performance';
        }

        $card_detail = CardDetail::first();
        $player = PlayerManagement::with('position')->with('club')->where('id', $id)->first();
        // return response()->json($player);
        $player_photo = PlayerPhoto::where('player_id', $id)->get();
        $player_video = PlayerVideo::where('player_id', $id)->get();
        return view('player.player_profile.golden_player_profile')
            ->with('player', $player)
            ->with('player_photo', $player_photo)
            ->with('player_video', $player_video)
            ->with('card_detail', $card_detail)
            ->with('shareButtons', $shareButtons)
            ->with('tab', $tab);
    }

    public function playerVideo($id)
    {
        $currentURL = url()->current();
        $shareButtons = \Share::page(
            $currentURL,
            'Your share text comes here',
        )
            ->facebook()
            ->linkedin()
            ->twitter()
            ->whatsapp();
        $user_id = Session::get('player_id');
        $player_video = PlayerVideo::where('id', $id)->first();
        $is_view = VideoView::where('video_id', $id)->where('player_id', $user_id)->first();
        if(!$is_view){
            PlayerVideo::where('id', $id)->increment('views');
            VideoView::create([
                'video_id' => $id,
                'player_id' => $user_id
            ]);
        }
        $player_info = playerVideo::join('player_management', 'player_management.id', 'player_video.player_id')
            ->where('player_video.id', $id)
            ->select('player_management.*')->first();
        $comment = VideoComment::with(['reply', 'reply.replier','reply.likes', 'commentLike'])
            ->join('player_management', 'player_management.id', 'video_comments.player_id')
            ->where('video_id', $id)
            ->select('player_management.*', 'video_comments.*')
            ->orderBy('video_comments.created_at', 'ASC')->distinct()->get();
        $like_video_profile = LikeVideoProfile::where('profile_id', $id)->count();
        $profile_video_likes = LikeVideoComment::where('profile_id',$player_video->id)->get();

        return view('player.player_profile.player_video')
            ->with('player_video', $player_video)
            ->with('player_info', $player_info)
            ->with('comment', $comment)
            ->with('profile_video_likes', $profile_video_likes)
            ->with('like_video_profile', $like_video_profile)
            ->with('shareButtons', $shareButtons);
    }

    public function videoComment(Request $request)
    {
        $request->validate([
            'comment' => 'required'
        ]);

        try {
            $comment = new VideoComment();
            $comment->player_id = session('player_id');
            $comment->video_id = $request->video_id;
            $comment->comment = $request->comment;
            $comment->save();

            return back();
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }
    }

    public function playerPhoto($id)
    {
        $currentURL = url()->current();
        $shareButtons = \Share::page(
            $currentURL,
            'Your share text comes here',
        )
            ->facebook()
            ->linkedin()
            ->twitter()
            // ->telegram()
            ->whatsapp();
        // ->reddit();

        $user_id = Session::get('player_id');
        $player_photo = PlayerPhoto::where('id', $id)->first();
        //add view count
        $is_view = PhotoView::where('photo_id', $id)->where('player_id', $user_id)->first();
        if(!$is_view){
            PlayerPhoto::where('id', $id)->increment('views');
            PhotoView::create([
                'photo_id' => $id,
                'player_id' => $user_id
            ]);
        }
        $player_photo = PlayerPhoto::where('id', $id)->first();
        $player_info = PlayerPhoto::join('player_management', 'player_management.id', 'player_photos.player_id')
            ->where('player_photos.id', $id)
            ->select('player_management.*')->first();
        $user_id = Session::get('player_id');
        $comment = PhotoComment::with(['reply', 'reply.replier', 'reply.likes', 'commentLike'])
        ->join('player_management', 'player_management.id', 'photo_comments.player_id')
            ->where('photo_id', $id)
            ->select('player_management.*', 'photo_comments.*')
            ->orderBy('photo_comments.created_at', 'ASC')->distinct()->get();

        // return $comment;
        $profile_likes = LikePhotoProfile::where('profile_id', $id)->count();


        $comment_like = LikeComment::join('photo_comments', 'photo_comments.id', 'like_comments.comment_id')
        ->where('photo_comments.id', 'like_comments.comment_id')
        ->select('photo_comments.id', 'like_comments.comment_id')
        ->get();

        return view('player.player_profile.player_photo')
            ->with('player_photo', $player_photo)
            ->with('player_info', $player_info)
            ->with('comment', $comment)
            ->with('profile_likes', $profile_likes)
            ->with('comment_like', $comment_like)
            ->with('shareButtons', $shareButtons);
    }

    public function goldenPlayerProfile(Request $request)
    {
        $image = $request->player_img;
        if (isset($image)) {
            $image_name = $image->getClientOriginalName();
            $image_name = str_replace(" ", "_", time() . $image_name);
            $image_path = 'upload/image/';
            $image->move($image_path, $image_name);
            $image = $image_path . $image_name;
        }

        $player_profile_photo = PlayerManagement::where('id', session('player_id'))->first();
        $player_profile_photo->profile_image = $image;
        if ($player_profile_photo->save()) {
            session([
                'image' =>  $player_profile_photo->profile_image
            ]);
        }
        return response()->json($image);
    }

    public function defaultPlayerProfile(Request $request)
    {
        $image = $request->player_img;
        if (isset($image)) {
            $image_name = $image->getClientOriginalName();
            $image_name = str_replace(" ", "_", time() . $image_name);
            $image_path = 'upload/image/';
            $image->move($image_path, $image_name);
            $image = $image_path . $image_name;
        }

        $player_profile_photo = PlayerManagement::where('id', session('player_id'))->first();
        $player_profile_photo->profile_image = $image;
        if ($player_profile_photo->save()) {
            session([
                'image' =>  $player_profile_photo->profile_image
            ]);
        }
        return response()->json($image);
    }

    public function photoComment(Request $request)
    {
        $request->validate([
            'comment' => 'required'
        ]);

        try {
            $comment = new PhotoComment();
            $comment->player_id = session('player_id');
            $comment->photo_id = $request->photo_id;
            $comment->comment = $request->comment;
            $comment->save();

            return back();
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }
    }

    public function updateVideoCaption(Request $request, $id)
    {
        $request->validate([
            'caption' => 'required'
        ]);
        playerVideo::where('id', $id)->update([
            'caption' => $request->caption
        ]);

        return back();
    }

    public function updatePhotoCaption(Request $request, $id)
    {
        $request->validate([
            'caption' => 'required'
        ]);
        PlayerPhoto::where('id', $id)->update([
            'caption' => $request->caption
        ]);

        return back();
    }


    public function destroyGoldenPhoto($id, $player_id)
    {
        PlayerPhoto::where('id', $id)->delete();
        // return redirect()->route('player.golden.player', $player_id);
        return redirect()->route('player.golden.player', ['id' => session('player_id'), 'tab' => 'tab-photos']);
    }

    public function destroyDefaultPhoto($id, $player_id)
    {
        PlayerPhoto::where('id', $id)->delete();
        // return redirect()->route('player.default.player', $player_id);
        return redirect()->route('player.default.player', ['id' => session('player_id'), 'tab' => 'tab-photos']);
    }

    public function destroyGoldenVideo($id, $player_id)
    {
        PlayerVideo::where('id', $id)->delete();
        // return redirect()->route('player.golden.player', $player_id);
        return redirect()->route('player.golden.player', ['id' => session('player_id'), 'tab' => 'tab-videos']);
    }

    public function destroyDefaultVideo($id, $player_id)
    {
        PlayerVideo::where('id', $id)->delete();
        // return redirect()->route('player.default.player', $player_id);
        return redirect()->route('player.default.player', ['id' => session('player_id'), 'tab' => 'tab-videos']);
    }


}
