<?php

use App\Http\Controllers\Admin\AccountManagementController;
use App\Http\Controllers\Admin\AdManagementController;
use App\Http\Controllers\Admin\AppManagementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController as AdminAuth;
use App\Http\Controllers\Admin\BillingController as AdminBillingController;
use App\Http\Controllers\Admin\ChatManagementController;
use App\Http\Controllers\Admin\ClubController as AdminClubController;
use App\Http\Controllers\Admin\CountryController as AdminCountryController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\InvitationManagementController;
use App\Http\Controllers\Admin\LabelsController;
use App\Http\Controllers\Admin\NotificationManagementController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\StadiumController;
use App\Http\Controllers\Admin\PaymentDetailController;
use App\Http\Controllers\Admin\PaymentManagementController;
use App\Http\Controllers\Admin\PlayerManagementController;
use App\Http\Controllers\Admin\PlayerPositionController;
use App\Http\Controllers\Admin\PositionController as AdminPositionController;
use App\Http\Controllers\Admin\RatingManagementController;
use App\Http\Controllers\Admin\ReportManagementController;
use App\Http\Controllers\Admin\SecurityManagementController;
use App\Http\Controllers\Admin\SubscriptionController;
use App\Http\Controllers\Admin\VerificationManagementController;
use App\Http\Controllers\Admin\SettingManagementController;
use App\Http\Controllers\Admin\SuperAdminAccountController;
use App\Http\Controllers\Player\AuthController;
use App\Http\Controllers\Player\ChatController;
use App\Http\Controllers\Player\DashboardController;
use App\Http\Controllers\Player\FavouriteController;
use App\Http\Controllers\Player\InvitationController;
use App\Http\Controllers\Player\MoreController;
use App\Http\Controllers\Player\PaymentController;
use App\Http\Controllers\Player\UpgradeAccountController;
use App\Http\Controllers\Player\PrivacyController;
use App\Http\Controllers\Player\AccountController;
use App\Http\Controllers\Player\FavoriteController;
use App\Http\Controllers\Player\LikeCommentsController;
use App\Http\Controllers\Player\LikePhotoProfileController;
use App\Http\Controllers\Player\LikeVideoProfileController;
use App\Http\Controllers\Player\LocationController;
use App\Http\Controllers\Player\PhotoCommentReplyController;
use App\Http\Controllers\Player\PlayerController;
use App\Http\Controllers\Player\SocialShareController;
use App\Http\Controllers\Player\VideoCommentReplyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


/*
|--------------------------------------------------------------------------
| Web Routes Admin Authentication
|--------------------------------------------------------------------------
*/



Route::prefix('admin')
        ->name('admin.')
        ->group(function () {
            Route::controller(AdminAuth::class)
            ->group(function () {
                Route::get('login','login')->name('login');
                Route::get('forgot-password','forgotPassword')->name('forgot-password');
                Route::get('forgot-password-phone','forgotPasswordPhoneView')->name('forgot-password-phone');
                Route::post('get-phone-verification-code', 'getPhoneVerificationCode')->name('get.phone-verification.code');
                Route::post('check-email','checkEmail')->name('check.email');
                Route::get('email-verification/{email}','emailVerify')->name('email.verification');
                Route::post('check-email-verification/{email}','checkVerificationCode')->name('check.email.verification');
                Route::post('check-phone-verification-code/{phone}','verifyPhone')->name('check.phone.verification');
                Route::get('create-new-password/{email}','newPassword')->name('new.password');
                Route::post('update-password/{email}','updatePassword')->name('update.password');
                Route::get('phone/create/password/{phone}', 'phoneNewPassword')->name('phone.new.password');
                Route::post('update-phone-password/{phone}/{user_id}','updatePasswordByPhoneVerification')->name('update.phone.password');
                Route::get('return-login','returnLogin')->name('return.login');
                Route::post('check/login','checkLogin')->name('check.login');
                Route::get('logout','logout')->name('logout');
            });

        Route::group(['middleware' => ['SuperAdmin', 'IsAdmin']], function () {


        Route::get('dashboard', [AdminDashboard::class, 'index'])->name('dashboard');
        /*
        |--------------------------------------------------------------------------
        | Web Routes Country
        |--------------------------------------------------------------------------
        */
        Route::prefix('country')
        ->name('country.')
        ->controller(AdminCountryController::class)
        ->group(function () {
            Route::get('view', 'index')->name('view');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{country}', 'edit')->name('edit');
            Route::post('update/{country}', 'update')->name('update');
            Route::get('test', 'test')->name('test');
        });

        /*
        |--------------------------------------------------------------------------
        | Web Routes Club
        |--------------------------------------------------------------------------
        */
        Route::prefix('club')
        ->name('club.')
        ->controller(AdminClubController::class)
        ->group(function () {
            Route::get('view', 'index')->name('view');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{club}', 'edit')->name('edit');
            Route::post('update/{club}', 'update')->name('update');
        });

        /*
        |--------------------------------------------------------------------------
        | Web Routes Billing
        |--------------------------------------------------------------------------
        */
        Route::prefix('billing')
        ->name('billing.')
        ->controller(AdminBillingController::class)
        ->group(function () {
            Route::get('view', 'index')->name('view');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{billing}', 'edit')->name('edit');
            Route::post('update/{billing}', 'update')->name('update');
        });

        /*
        |--------------------------------------------------------------------------
        | Web Routes Position
        |--------------------------------------------------------------------------
        */
        Route::prefix('position')
        ->name('position.')
        ->controller(AdminPositionController::class)
        ->group(function () {
            Route::get('view', 'index')->name('view');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{position}', 'edit')->name('edit');
            Route::post('update/{position}', 'update')->name('update');
        });

        /*
        |--------------------------------------------------------------------------
        | Web Routes Player Position
        |--------------------------------------------------------------------------
        */
        Route::prefix('player-position')
        ->name('player.position.')
        ->controller(PlayerPositionController::class)
        ->group(function () {
            Route::get('view', 'index')->name('view');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{playerPosition}', 'edit')->name('edit');
            Route::post('update/{playerPosition}', 'update')->name('update');
        });

        /*
        |--------------------------------------------------------------------------
        | Web Routes Account
        |--------------------------------------------------------------------------
        */
        Route::prefix('account')
        ->name('account.')
        ->controller(AdminProfileController::class)
        ->group(function () {
            Route::get('dashboard', 'accountDashboard')->name('dashboard');
        });

        /*
        |--------------------------------------------------------------------------
        | Web Routes Admin Registration
        |--------------------------------------------------------------------------
        */
        Route::prefix('store')
        ->name('store.')
        ->controller(AdminProfileController::class)
        ->group(function () {
            Route::post('account', [AdminProfileController::class, 'storeAccount'])->name('account');
            Route::post('contract', [AdminProfileController::class, 'storeContract'])->name('contract');
            Route::post('verify', [AdminProfileController::class, 'storeVerification'])->name('verify');
            Route::post('payment-detail', [PaymentDetailController::class, 'store'])->name('payment-detail');
        });

        Route::prefix('create')
        ->name('create.')
        ->controller(AdminProfileController::class)
        ->group(function () {
            Route::get('privacy_policy', [AdminProfileController::class, 'createPrivacyPolicy'])->name('privacy_policy');
            Route::get('terms_and_conditions', [AdminProfileController::class, 'createTerms'])->name('terms_and_conditions');
            Route::get('cookie_use', [AdminProfileController::class, 'createCookies'])->name('cookie_use');
        });

        Route::prefix('view')
        ->name('view.')
        ->controller(AdminProfileController::class)
        ->group(function () {
            Route::get('privacy_policy', [AdminProfileController::class, 'viewPrivacyPolicy'])->name('privacy_policy');
            Route::get('terms_and_conditions', [AdminProfileController::class, 'viewTerms'])->name('terms_and_conditions');
            Route::get('cookie_use', [AdminProfileController::class, 'viewCookies'])->name('cookie_use');
        });


        Route::get('create-account', [AdminProfileController::class, 'createAccount'])->name('create.account');
        Route::get('create-contract', [AdminProfileController::class, 'createContract'])->name('create.contract');
        Route::get('verify-identity', [AdminProfileController::class, 'createVerification'])->name('create.verify');
        Route::get('payment-detail', [PaymentDetailController::class, 'index'])->name('create.payment_detail');


        /*
        |--------------------------------------------------------------------------
        | Web Routes Stadium
        |--------------------------------------------------------------------------
        */
        Route::prefix('stadium')
        ->name('stadium.')
        ->controller(StadiumController::class)
        ->group(function () {
            Route::get('dashboard', 'index')->name('dashboard');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('list', 'list')->name('list');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{stadium}', 'update')->name('update');
            Route::delete('delete/{id}', 'destroy')->name('delete');
            Route::get('view/pdf', 'viewPDF')->name('view.pdf');
            Route::get('generate/pdf', 'generatePDF')->name('generate.pdf');
            Route::get('generate/word', 'generateDocx')->name('generate.word');
            Route::get('export', 'export')->name('export');
        });

        /*
        |--------------------------------------------------------------------------
        | Web Routes Ad Management
        |--------------------------------------------------------------------------
        */
        Route::prefix('ad-management')
        ->name('ad.management.')
        ->controller(AdManagementController::class)
        ->group(function () {
            Route::get('dashboard', 'index')->name('dashboard');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('list', 'list')->name('list');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{ad}', 'update')->name('update');

        });

        /*
        |--------------------------------------------------------------------------
        | Web Routes Player Management
        |--------------------------------------------------------------------------
        */
        Route::prefix('player-management')
        ->name('player.management.')
        ->controller(PlayerManagementController::class)
        ->group(function () {
            Route::get('dashboard', 'index')->name('dashboard');
            Route::get('list', 'list')->name('list');
            Route::get('default-account/{id}', 'defaultAccount')->name('default.account');
            Route::get('golden-member/{id}', 'goldenMember')->name('golden.member');
            Route::get('player-photo', 'playerPhoto')->name('player.photo');
            Route::get('player-video', 'playerVideo')->name('player.video');
            Route::get('normal-profile/{id}', 'normalProfile')->name('normal.profile');
            Route::post('update/account/{id}', 'updateAccount')->name('account.update');
            Route::get('card-detail', 'cardDetail')->name('card.detail');
            Route::post('update/card/detail', 'updateCard')->name('update.card.detail');
            Route::get('view/pdf', 'viewPDF')->name('view.pdf');
            Route::get('view/excel', 'viewExcel')->name('view.excel');
            Route::get('generate/pdf', 'generatePDF')->name('generate.pdf');
            Route::get('generate/word', 'generateDocx')->name('generate.word');
            Route::get('export', 'export')->name('export');
            Route::get('download', 'download')->name('download');
        });

        /*
        |--------------------------------------------------------------------------
        | Web Routes Upgarde Management
        |--------------------------------------------------------------------------
        */
        Route::prefix('upgrade-management')
        ->name('upgrade.management.')
        ->controller(SubscriptionController::class)
        ->group(function () {
            Route::get('dashboard', 'index')->name('dashboard');
            Route::post('store', 'store')->name('store');
            Route::get('list', 'list')->name('list');
            Route::get('upgrade/account', 'upgradeAccount')->name('upgrade.account');
        });

        /*
        |--------------------------------------------------------------------------
        | Web Routes Security Management
        |--------------------------------------------------------------------------
        */
        Route::prefix('security-management')
        ->name('security.management.')
        ->controller(SecurityManagementController::class)
        ->group(function () {
            Route::get('dashboard', 'index')->name('dashboard');
            Route::get('security', 'security')->name('security');
            Route::post('store', 'store')->name('store');
            Route::get('privacy/policy', 'privacyPolicy')->name('privacy.policy');
            Route::get('privacy/policy', 'privacyPolicy')->name('privacy.policy');
            Route::get('term-service', 'termOfService')->name('term.service');
            Route::get('cookies', 'cookies')->name('cookies');
        });

        /*
        |--------------------------------------------------------------------------
        | Web Routes Invitation Management
        |--------------------------------------------------------------------------
        */
        Route::prefix('invitation-management')
        ->name('invitation.management.')
        ->controller(InvitationManagementController::class)
        ->group(function () {
            Route::get('dashboard', 'index')->name('dashboard');
            Route::get('list', 'list')->name('list');
            Route::get('edit', 'edit')->name('edit');
            Route::post('update', 'update')->name('update');
            Route::get('view/pdf/invite', 'viewPDFInvite')->name('view.pdf.invite');
            Route::get('view/excel', 'viewExcelInvite')->name('view.excel');
            Route::get('generate/pdf/invite', 'generatePDFInvite')->name('generate.pdf.invite');
            Route::get('generate/word/invite', 'generateDocxInvite')->name('generate.word.invite');
            Route::get('view/pdf/hire', 'viewPDFHire')->name('view.pdf.hire');
            Route::get('generate/pdf/hire', 'generatePDFHire')->name('generate.pdf.hire');
            Route::get('generate/word/hire', 'generateDocxHire')->name('generate.word.hire');
            Route::get('export', 'export')->name('export');
        });

        /*
        |--------------------------------------------------------------------------
        | Web Routes Report Management
        |--------------------------------------------------------------------------
        */
        Route::prefix('report-management')
        ->name('report.management.')
        ->controller(ReportManagementController::class)
        ->group(function () {
            Route::get('dashboard', 'index')->name('dashboard');
            Route::get('list', 'list')->name('list');
            Route::get('report-profile', 'reportedProfile')->name('report.profile');
            Route::get('report-profile-detail', 'reportProfileDetail')->name('report.profile.detail');
            Route::get('reported-player-photo', 'reportedPlayerPhoto')->name('reported.player.photo');
            Route::get('report-chat-list', 'reportChatList')->name('report.chat.list');
            Route::get('report-chat', 'reportChat')->name('report.chat');
            Route::get('view/pdf', 'viewPDF')->name('view.pdf');
            Route::get('view/excel', 'viewExcel')->name('view.excel');
            Route::get('generate/pdf', 'generatePDF')->name('generate.pdf');
            Route::get('generate/word', 'generateDocx')->name('generate.word');
            Route::get('export', 'export')->name('export');
        });

        /*
        |--------------------------------------------------------------------------
        | Web Routes Chat Management
        |--------------------------------------------------------------------------
        */
        Route::prefix('chat-management')
        ->name('chat.management.')
        ->controller(ChatManagementController::class)
        ->group(function () {
            Route::get('dashboard', 'index')->name('dashboard');
            Route::get('list', 'list')->name('list');
            Route::get('chat', 'chat')->name('chat');
        });

        /*
        |--------------------------------------------------------------------------
        | Web Routes Rating Management
        |--------------------------------------------------------------------------
        */
        Route::prefix('rating-management')
        ->name('rating.management.')
        ->controller(RatingManagementController::class)
        ->group(function () {
            Route::get('dashboard', 'index')->name('dashboard');
            Route::get('list', 'list')->name('list');
            Route::get('normal/rating', 'normalRating')->name('normal.rating');
            Route::get('golden/rating', 'goldenRating')->name('golden.rating');
            Route::post('update/rating', 'updateRating')->name('update.rating');
            Route::get('manage/rating', 'manageRating')->name('manage.rating');
            Route::get('rating', 'rating')->name('rating');
            Route::post('update/labels', 'updateLabels')->name('update.labels');
            Route::get('view/pdf', 'viewPDF')->name('view.pdf');
            Route::get('view/excel', 'viewExcel')->name('view.excel');
            Route::get('generate/pdf', 'generatePDF')->name('generate.pdf');
            Route::get('generate/word', 'generateDocx')->name('generate.word');
            Route::get('export', 'export')->name('export');
        });

        /*
        |--------------------------------------------------------------------------
        | Web Routes Account Management
        |--------------------------------------------------------------------------
        */
        Route::prefix('help-management')
        ->name('account.management.')
        ->controller(AccountManagementController::class)
        ->group(function () {
            Route::get('dashboard', 'index')->name('dashboard');
            Route::get('help', 'help')->name('help');
            Route::get('list', 'list')->name('list');
        });

        /*
        |--------------------------------------------------------------------------
        | Web Routes Verification Management
        |--------------------------------------------------------------------------
        */
        Route::prefix('verification-management')
        ->name('verification.management.')
        ->controller(VerificationManagementController::class)
        ->group(function () {
            Route::get('dashboard', 'index')->name('dashboard');
            Route::get('list', 'list')->name('list');
            Route::get('account/{id}', 'manageAccount')->name('account');
            Route::post('update/account/{id}', 'updateAccount')->name('update.account');
            Route::get('view/pdf', 'viewPDF')->name('view.pdf');
            Route::get('view/excel', 'viewExcel')->name('view.excel');
            Route::get('generate/pdf', 'generatePDF')->name('generate.pdf');
            Route::get('generate/word', 'generateDocx')->name('generate.word');
            Route::get('export', 'export')->name('export');
        });

        /*
        |--------------------------------------------------------------------------
        | Web Routes App Management
        |--------------------------------------------------------------------------
        */
        Route::prefix('app-management')
        ->name('app.management.')
        ->controller(AppManagementController::class)
        ->group(function () {
            Route::get('dashboard', 'index')->name('dashboard');
        });

        /*
        |--------------------------------------------------------------------------
        | Web Routes Payment Management
        |--------------------------------------------------------------------------
        */
        Route::prefix('payment-management')
        ->name('payment.management.')
        ->controller(PaymentManagementController::class)
        ->group(function () {
            Route::get('dashboard', 'index')->name('dashboard');
        });

        /*
        |--------------------------------------------------------------------------
        | Web Routes Setting Management
        |--------------------------------------------------------------------------
        */
        Route::prefix('setting-management')
        ->name('setting.management.')
        ->controller(SettingManagementController::class)
        ->group(function () {
            Route::get('dashboard', 'index')->name('dashboard');
        });

        /*
        |--------------------------------------------------------------------------
        | Web Routes Labels
        |--------------------------------------------------------------------------
        */
        Route::prefix('labels')
        ->name('labels.')
        ->controller(LabelsController::class)
        ->group(function () {
            Route::get('view', 'index')->name('view');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{labels}', 'edit')->name('edit');
            Route::post('update/{labels}', 'update')->name('update');
        });

        /*
        |--------------------------------------------------------------------------
        | Web Routes Labels
        |--------------------------------------------------------------------------
        */
        Route::name('superadmin.')
        ->controller(SuperAdminAccountController::class)
        ->group(function () {
            Route::get('account', 'index')->name('account');
            Route::post('update', 'updateAccount')->name('update');
        });

        /*
        |--------------------------------------------------------------------------
        | Web Routes Setting Management
        |--------------------------------------------------------------------------
        */
        Route::prefix('notification-management')
        ->name('notification.management.')
        ->controller(NotificationManagementController::class)
        ->group(function () {
            Route::get('dashboard', 'dashboard')->name('dashboard');
            Route::get('list', 'list')->name('list');
            Route::post('update', 'update')->name('update');
        });
});

});


        /*
        |--------------------------------------------------------------------------
        | Web Routes Player Auth
        |--------------------------------------------------------------------------
        */
        Route::controller(AuthController::class)
        ->group(function () {
            Route::get('signup', 'signup')->name('signup');
            Route::post('check/register', 'checkRegister')->name('check.register');

            Route::get('player/forget/password', 'forgotPassword')->name('player-forgot-password');
            Route::post('player-check-email','checkEmail')->name('player.check.email');
            Route::get('player-email-verification/{email}','emailVerify')->name('player.email.verification');
            Route::post('player-check-email-verification/{email}','checkVerificationCode')->name('player.check.email.verification');
            Route::get('player-create-new-password/{email}','newPassword')->name('player.new.password');
            Route::post('changed-password/{email}','updatePassword')->name('changed.password');
            Route::get('player-return-login','returnLogin')->name('player.return.login');

            Route::get('/', 'login')->name('login');
            Route::post('check/login', 'checkLogin')->name('check.login');

            Route::get('about', 'about')->name('about');
            Route::get('contact', 'contact')->name('contact');
            Route::get('logout', 'logout')->name('logout');
        });


        Route::controller(PrivacyController::class)->group(function(){
            Route::get('player/terms-and-condition','terms')->name('player.terms');
            Route::get('player/privacy-policy','PrivacyPolicy')->name('player.privacy.policy');
            Route::get('player/cookie-use','Cookies')->name('player.cookie.use');

        });
        Route::group(['middleware' => ['IsPlayer']], function () {
        Route::prefix('player')
           ->name('player.')
            ->group(function () {
                Route::controller(DashboardController::class)
                ->group(function () {
                    Route::get('dashboard','dashboard')->name('dashboard');
                });
                Route::controller(PrivacyController::class)->group(function(){
                    Route::get('more/terms-and-condition','moreTerms')->name('more.terms');
                    Route::get('more/privacy-policy','morePrivacyPolicy')->name('more.privacy.policy');
                    Route::get('more/cookie-use','moreCookies')->name('more.cookie.use');
                    Route::get('verify-identity', 'verifyIdentity')->name('verify.identity');
                    Route::post('store/verify/identity', 'storePlayerVerification')->name('store.identity');

                });
                    Route::controller(MoreController::class)
                        ->group(function () {
                        Route::get('more','index')->name('more');
                });
                    Route::controller(ChatController::class)
                        ->group(function () {
                        Route::get('chat','chat')->name('chat');
                });
                    Route::controller(InvitationController::class)
                        ->group(function () {
                        Route::get('invitation','invitation')->name('invitation');
                        Route::get('send/invitation','sendInvitation')->name('send.invitation');
                });

                    Route::controller(UpgradeAccountController::class)
                        ->group(function () {
                        Route::get('upgrade/account','upgradeAccount')->name('account');
                });

                    Route::controller(PaymentController::class)->group(function(){
                        Route::get('merchant-account', 'merchantAccount')->name('merchant.account');
                        Route::get('payment-overview', 'paymentOverview')->name('payment.overview');
                });



                    Route::controller(AccountController::class)->group(function(){
                        Route::get('email', 'email')->name('email');
                        Route::post('update/email', 'updateEmail')->name('update.email');
                        Route::get('phone', 'phone')->name('phone');
                        Route::post('update/phone', 'updatePhone')->name('update.phone');
                        Route::get('password', 'playerPassword')->name('change.password');
                        Route::post('update/password', 'updatePassword')->name('update.password');
                        Route::get('help', 'help')->name('help');
                });
                    Route::controller(PlayerController::class)->group(function(){
                        Route::get('profile', 'update')->name('profile');
                        Route::get('default/profile/{id}', 'defaultPlayer')->name('default.player');
                        Route::post('store/photo', 'storePlayerPhoto')->name('store.photo');
                        Route::post('store/video', 'storePlayerVideo')->name('store.video');
                        Route::get('golden/profile/{id}', 'goldenPlayer')->name('golden.player');
                        Route::get('video/{id}', 'playerVideo')->name('video');
                        Route::get('photo/{id}', 'playerPhoto')->name('photo');
                        Route::post('store/comment', 'videoComment')->name('store.comment');
                        Route::post('photo/store/comment', 'photoComment')->name('photo.store.comment');
                        Route::post('update/profile', 'updateProfile')->name('update.profile');
                        Route::post('golden/profile/photo', 'goldenPlayerProfile')->name('golden.profile.photo');
                        Route::post('default/profile/photo', 'defaultPlayerProfile')->name('default.profile.photo');
                        Route::post('update/video/caption/{id}', 'updateVideoCaption')->name('update.video.caption');
                        Route::post('update/photo/caption/{id}', 'updatePhotoCaption')->name('update.photo.caption');
                        Route::get('photo/golden/delete/{id}/{player_id}', 'destroyGoldenPhoto')->name('photo.golden.delete');
                        Route::get('photo/default/delete/{id}/{player_id}', 'destroyDefaultPhoto')->name('photo.default.delete');
                        Route::get('video/golden/delete/{id}/{player_id}', 'destroyGoldenVideo')->name('video.golden.delete');
                        Route::get('video/default/delete/{id}/{player_id}', 'destroyDefaultVideo')->name('video.default.delete');

                });

                Route::controller(LikeCommentsController::class)->group(function(){
                    Route::post('store/like', 'storeLikes')->name('store.like');
                    Route::post('store/like/video', 'storeVideoLikes')->name('store.like.video');
                    Route::post('store/reply/like', 'storeReplyLikes')->name('store.reply.like');
                    Route::post('store/photo/like', 'storePhotoLikes')->name('store.photo.like');
                });

                Route::controller(VideoCommentReplyController::class)->group(function(){
                    Route::post('store/reply', 'storeReply')->name('store.reply');
                });

                Route::controller(PhotoCommentReplyController::class)->group(function(){
                    Route::post('store/photo/reply', 'storePhotoReply')->name('store.photo.reply');
                });

                Route::controller(LikeVideoProfileController::class)->group(function(){
                    Route::post('store/profile/like', 'storeProfileLikes')->name('store.profile.like');
                });

                Route::controller(LikePhotoProfileController::class)->group(function(){
                    Route::post('store/photo/profile/like', 'storePhotoProfileLikes')->name('store.photo.profile.like');
                });

                    Route::controller(LocationController::class)->group(function(){
                        Route::post('location', 'location')->name('location');
                    });

                Route::controller(FavoriteController::class)->group(function(){
                    Route::get('favourite/view','index')->name('favourite.view');
                    Route::post('favorite', 'favorite')->name('favorite');
                    Route::post('unfavorite', 'unfavorite')->name('unfavorite');
            });

            Route::get('social-share', [SocialShareController::class, 'index']);

        });
    });

    Route::view('verify-email-code', 'admin.mail.email_verification_code');

    Route::view('emoji', 'player.player_profile.emoji');
