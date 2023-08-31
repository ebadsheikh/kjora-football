<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ekv51HH9tfHapTn6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YBvMvm6Zrr3tWAgs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forgot-password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forgot-password-phone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forgot-password-phone',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/get-phone-verification-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.get.phone-verification.code',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/check-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.check.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/return-login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.return.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/check/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.check.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/country/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/country/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/country/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/country/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.test',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/club/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.club.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/club/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.club.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/club/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.club.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/billing/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.billing.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/billing/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.billing.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/billing/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.billing.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/position/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.position.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/position/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.position.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/position/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.position.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/player-position/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.player.position.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/player-position/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.player.position.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/player-position/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.player.position.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/account/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.account.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store/account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.store.account',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store/contract' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.store.contract',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.store.verify',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store/payment-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.store.payment-detail',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create/privacy_policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.create.privacy_policy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create/terms_and_conditions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.create.terms_and_conditions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create/cookie_use' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.create.cookie_use',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/view/privacy_policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.view.privacy_policy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/view/terms_and_conditions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.view.terms_and_conditions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/view/cookie_use' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.view.cookie_use',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.create.account',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create-contract' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.create.contract',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/verify-identity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.create.verify',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.create.payment_detail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/stadium/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.stadium.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/stadium/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.stadium.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/stadium/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.stadium.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/stadium/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.stadium.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/stadium/view/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.stadium.view.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/stadium/generate/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.stadium.generate.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/stadium/generate/word' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.stadium.generate.word',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/stadium/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.stadium.export',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/ad-management/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ad.management.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/ad-management/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ad.management.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/ad-management/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ad.management.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/ad-management/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ad.management.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/player-management/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.player.management.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/player-management/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.player.management.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/player-management/player-photo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.player.management.player.photo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/player-management/player-video' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.player.management.player.video',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/player-management/card-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.player.management.card.detail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/player-management/update/card/detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.player.management.update.card.detail',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/player-management/view/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.player.management.view.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/player-management/view/excel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.player.management.view.excel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/player-management/generate/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.player.management.generate.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/player-management/generate/word' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.player.management.generate.word',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/player-management/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.player.management.export',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/player-management/download' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.player.management.download',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/upgrade-management/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.upgrade.management.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/upgrade-management/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.upgrade.management.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/upgrade-management/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.upgrade.management.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/upgrade-management/upgrade/account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.upgrade.management.upgrade.account',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/security-management/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.security.management.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/security-management/security' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.security.management.security',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/security-management/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.security.management.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/security-management/privacy/policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.security.management.privacy.policy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/security-management/term-service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.security.management.term.service',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/security-management/cookies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.security.management.cookies',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/invitation-management/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.invitation.management.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/invitation-management/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.invitation.management.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/invitation-management/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.invitation.management.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/invitation-management/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.invitation.management.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/invitation-management/view/pdf/invite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.invitation.management.view.pdf.invite',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/invitation-management/view/excel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.invitation.management.view.excel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/invitation-management/generate/pdf/invite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.invitation.management.generate.pdf.invite',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/invitation-management/generate/word/invite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.invitation.management.generate.word.invite',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/invitation-management/view/pdf/hire' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.invitation.management.view.pdf.hire',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/invitation-management/generate/pdf/hire' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.invitation.management.generate.pdf.hire',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/invitation-management/generate/word/hire' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.invitation.management.generate.word.hire',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/invitation-management/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.invitation.management.export',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report-management/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.management.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report-management/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.management.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report-management/report-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.management.report.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report-management/report-profile-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.management.report.profile.detail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report-management/reported-player-photo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.management.reported.player.photo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report-management/report-chat-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.management.report.chat.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report-management/report-chat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.management.report.chat',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report-management/view/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.management.view.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report-management/view/excel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.management.view.excel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report-management/generate/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.management.generate.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report-management/generate/word' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.management.generate.word',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report-management/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.management.export',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chat-management/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.chat.management.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chat-management/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.chat.management.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chat-management/chat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.chat.management.chat',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/rating-management/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating.management.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/rating-management/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating.management.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/rating-management/normal/rating' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating.management.normal.rating',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/rating-management/golden/rating' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating.management.golden.rating',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/rating-management/update/rating' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating.management.update.rating',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/rating-management/manage/rating' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating.management.manage.rating',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/rating-management/rating' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating.management.rating',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/rating-management/update/labels' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating.management.update.labels',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/rating-management/view/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating.management.view.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/rating-management/view/excel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating.management.view.excel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/rating-management/generate/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating.management.generate.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/rating-management/generate/word' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating.management.generate.word',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/rating-management/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating.management.export',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/help-management/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.account.management.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/help-management/help' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.account.management.help',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/help-management/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.account.management.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/verification-management/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.verification.management.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/verification-management/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.verification.management.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/verification-management/view/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.verification.management.view.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/verification-management/view/excel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.verification.management.view.excel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/verification-management/generate/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.verification.management.generate.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/verification-management/generate/word' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.verification.management.generate.word',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/verification-management/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.verification.management.export',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/app-management/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.app.management.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-management/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.management.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting-management/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.management.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/labels/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.labels.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/labels/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.labels.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/labels/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.labels.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.superadmin.account',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.superadmin.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notification-management/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notification.management.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notification-management/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notification.management.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notification-management/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notification.management.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/signup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'signup',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/check/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'check.register',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/forget/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player-forgot-password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player-check-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.check.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player-return-login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.return.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/check/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'check.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/terms-and-condition' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.terms',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/privacy-policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.privacy.policy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/cookie-use' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.cookie.use',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/more/terms-and-condition' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.more.terms',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/more/privacy-policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.more.privacy.policy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/more/cookie-use' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.more.cookie.use',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/verify-identity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.verify.identity',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/store/verify/identity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.store.identity',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/more' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.more',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/chat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.chat',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/invitation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.invitation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/send/invitation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.send.invitation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/upgrade/account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.account',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/merchant-account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.merchant.account',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/payment-overview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.payment.overview',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.email',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/update/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.update.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/phone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.phone',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/update/phone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.update.phone',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.change.password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/update/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.update.password',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/help' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.help',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/store/photo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.store.photo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/store/video' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.store.video',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/store/comment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.store.comment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/photo/store/comment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.photo.store.comment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/update/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.update.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/store/like' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.store.like',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/store/like/video' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.store.like.video',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/store/reply/like' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.store.reply.like',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/store/photo/like' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.store.photo.like',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/store/reply' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.store.reply',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/store/photo/reply' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.store.photo.reply',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/store/profile/like' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.store.profile.like',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/store/photo/profile/like' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.store.photo.profile.like',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/location' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.location',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/favourite/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.favourite.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/favorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.favorite',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/unfavorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.unfavorite',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/social-share' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verify-email-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JRiReFiwBuhrxSLt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/emoji' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::azyyrgfQZDz307cp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/admin/(?|email\\-verification/([^/]++)(*:45)|c(?|heck\\-(?|email\\-verification/([^/]++)(*:93)|phone\\-verification\\-code/([^/]++)(*:134))|reate\\-new\\-password/([^/]++)(*:172)|ountry/(?|edit/([^/]++)(*:203)|update/([^/]++)(*:226))|lub/(?|edit/([^/]++)(*:255)|update/([^/]++)(*:278)))|update\\-p(?|assword/([^/]++)(*:316)|hone\\-password/([^/]++)/([^/]++)(*:356))|p(?|hone/create/password/([^/]++)(*:398)|osition/(?|edit/([^/]++)(*:430)|update/([^/]++)(*:453))|layer\\-(?|position/(?|edit/([^/]++)(*:497)|update/([^/]++)(*:520))|management/(?|default\\-account/([^/]++)(*:568)|golden\\-member/([^/]++)(*:599)|normal\\-profile/([^/]++)(*:631)|update/account/([^/]++)(*:662))))|billing/(?|edit/([^/]++)(*:697)|update/([^/]++)(*:720))|stadium/(?|edit/([^/]++)(*:753)|update/([^/]++)(*:776)|delete/([^/]++)(*:799))|ad\\-management/(?|edit/([^/]++)(*:839)|update/([^/]++)(*:862))|verification\\-management/(?|account/([^/]++)(*:915)|update/account/([^/]++)(*:946))|labels/(?|edit/([^/]++)(*:978)|update/([^/]++)(*:1001)))|/player(?|\\-(?|email\\-verification/([^/]++)(*:1055)|c(?|heck\\-email\\-verification/([^/]++)(*:1102)|reate\\-new\\-password/([^/]++)(*:1140)))|/(?|default/profile/(?|([^/]++)(*:1182)|photo(*:1196))|golden/profile/(?|([^/]++)(*:1232)|photo(*:1246))|video/(?|([^/]++)(*:1273)|golden/delete/([^/]++)/([^/]++)(*:1313)|default/delete/([^/]++)/([^/]++)(*:1354))|photo/(?|([^/]++)(*:1381)|golden/delete/([^/]++)/([^/]++)(*:1421)|default/delete/([^/]++)/([^/]++)(*:1462))|update/(?|video/caption/([^/]++)(*:1504)|photo/caption/([^/]++)(*:1535))))|/changed\\-password/([^/]++)(*:1574))/?$}sDu',
    ),
    3 => 
    array (
      45 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.verification',
          ),
          1 => 
          array (
            0 => 'email',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      93 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.check.email.verification',
          ),
          1 => 
          array (
            0 => 'email',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      134 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.check.phone.verification',
          ),
          1 => 
          array (
            0 => 'phone',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      172 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.new.password',
          ),
          1 => 
          array (
            0 => 'email',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      203 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.edit',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.update',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      255 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.club.edit',
          ),
          1 => 
          array (
            0 => 'club',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      278 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.club.update',
          ),
          1 => 
          array (
            0 => 'club',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      316 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update.password',
          ),
          1 => 
          array (
            0 => 'email',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      356 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update.phone.password',
          ),
          1 => 
          array (
            0 => 'phone',
            1 => 'user_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      398 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.phone.new.password',
          ),
          1 => 
          array (
            0 => 'phone',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      430 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.position.edit',
          ),
          1 => 
          array (
            0 => 'position',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      453 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.position.update',
          ),
          1 => 
          array (
            0 => 'position',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      497 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.player.position.edit',
          ),
          1 => 
          array (
            0 => 'playerPosition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      520 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.player.position.update',
          ),
          1 => 
          array (
            0 => 'playerPosition',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      568 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.player.management.default.account',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      599 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.player.management.golden.member',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      631 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.player.management.normal.profile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      662 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.player.management.account.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      697 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.billing.edit',
          ),
          1 => 
          array (
            0 => 'billing',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      720 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.billing.update',
          ),
          1 => 
          array (
            0 => 'billing',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      753 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.stadium.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      776 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.stadium.update',
          ),
          1 => 
          array (
            0 => 'stadium',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      799 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.stadium.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      839 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ad.management.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      862 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ad.management.update',
          ),
          1 => 
          array (
            0 => 'ad',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      915 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.verification.management.account',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      946 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.verification.management.update.account',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      978 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.labels.edit',
          ),
          1 => 
          array (
            0 => 'labels',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1001 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.labels.update',
          ),
          1 => 
          array (
            0 => 'labels',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1055 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.email.verification',
          ),
          1 => 
          array (
            0 => 'email',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1102 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.check.email.verification',
          ),
          1 => 
          array (
            0 => 'email',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1140 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.new.password',
          ),
          1 => 
          array (
            0 => 'email',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1182 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.default.player',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1196 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.default.profile.photo',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1232 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.golden.player',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1246 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.golden.profile.photo',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1273 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.video',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1313 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.video.golden.delete',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'player_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1354 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.video.default.delete',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'player_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1381 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.photo',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1421 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.photo.golden.delete',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'player_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1462 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.photo.default.delete',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'player_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1504 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.update.video.caption',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1535 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.update.photo.caption',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1574 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'changed.password',
          ),
          1 => 
          array (
            0 => 'email',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::Ekv51HH9tfHapTn6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::Ekv51HH9tfHapTn6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YBvMvm6Zrr3tWAgs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000004cd0000000000000000";}";s:4:"hash";s:44:"Z2sA4KsWQe33MwsFM/KGwSW0ZXqv/jQU9aaOimTZl/8=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::YBvMvm6Zrr3tWAgs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthController@login',
        'as' => 'admin.login',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.forgot-password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthController@forgotPassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthController@forgotPassword',
        'as' => 'admin.forgot-password',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.forgot-password-phone' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forgot-password-phone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthController@forgotPasswordPhoneView',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthController@forgotPasswordPhoneView',
        'as' => 'admin.forgot-password-phone',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.get.phone-verification.code' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/get-phone-verification-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthController@getPhoneVerificationCode',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthController@getPhoneVerificationCode',
        'as' => 'admin.get.phone-verification.code',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.check.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/check-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthController@checkEmail',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthController@checkEmail',
        'as' => 'admin.check.email',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.verification' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/email-verification/{email}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthController@emailVerify',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthController@emailVerify',
        'as' => 'admin.email.verification',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.check.email.verification' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/check-email-verification/{email}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthController@checkVerificationCode',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthController@checkVerificationCode',
        'as' => 'admin.check.email.verification',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.check.phone.verification' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/check-phone-verification-code/{phone}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthController@verifyPhone',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthController@verifyPhone',
        'as' => 'admin.check.phone.verification',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.new.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-new-password/{email}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthController@newPassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthController@newPassword',
        'as' => 'admin.new.password',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update.password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/update-password/{email}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthController@updatePassword',
        'as' => 'admin.update.password',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.phone.new.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/phone/create/password/{phone}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthController@phoneNewPassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthController@phoneNewPassword',
        'as' => 'admin.phone.new.password',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update.phone.password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/update-phone-password/{phone}/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthController@updatePasswordByPhoneVerification',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthController@updatePasswordByPhoneVerification',
        'as' => 'admin.update.phone.password',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.return.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/return-login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthController@returnLogin',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthController@returnLogin',
        'as' => 'admin.return.login',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.check.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/check/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthController@checkLogin',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthController@checkLogin',
        'as' => 'admin.check.login',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthController@logout',
        'as' => 'admin.logout',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@index',
        'as' => 'admin.dashboard',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/country/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@index',
        'as' => 'admin.country.view',
        'namespace' => NULL,
        'prefix' => 'admin/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/country/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@create',
        'as' => 'admin.country.create',
        'namespace' => NULL,
        'prefix' => 'admin/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/country/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@store',
        'as' => 'admin.country.store',
        'namespace' => NULL,
        'prefix' => 'admin/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/country/edit/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@edit',
        'as' => 'admin.country.edit',
        'namespace' => NULL,
        'prefix' => 'admin/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/country/update/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@update',
        'as' => 'admin.country.update',
        'namespace' => NULL,
        'prefix' => 'admin/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.test' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/country/test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@test',
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@test',
        'as' => 'admin.country.test',
        'namespace' => NULL,
        'prefix' => 'admin/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.club.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/club/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ClubController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ClubController@index',
        'as' => 'admin.club.view',
        'namespace' => NULL,
        'prefix' => 'admin/club',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.club.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/club/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ClubController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ClubController@create',
        'as' => 'admin.club.create',
        'namespace' => NULL,
        'prefix' => 'admin/club',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.club.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/club/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ClubController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ClubController@store',
        'as' => 'admin.club.store',
        'namespace' => NULL,
        'prefix' => 'admin/club',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.club.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/club/edit/{club}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ClubController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ClubController@edit',
        'as' => 'admin.club.edit',
        'namespace' => NULL,
        'prefix' => 'admin/club',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.club.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/club/update/{club}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ClubController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ClubController@update',
        'as' => 'admin.club.update',
        'namespace' => NULL,
        'prefix' => 'admin/club',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.billing.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/billing/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BillingController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\BillingController@index',
        'as' => 'admin.billing.view',
        'namespace' => NULL,
        'prefix' => 'admin/billing',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.billing.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/billing/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BillingController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BillingController@create',
        'as' => 'admin.billing.create',
        'namespace' => NULL,
        'prefix' => 'admin/billing',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.billing.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/billing/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BillingController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\BillingController@store',
        'as' => 'admin.billing.store',
        'namespace' => NULL,
        'prefix' => 'admin/billing',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.billing.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/billing/edit/{billing}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BillingController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\BillingController@edit',
        'as' => 'admin.billing.edit',
        'namespace' => NULL,
        'prefix' => 'admin/billing',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.billing.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/billing/update/{billing}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BillingController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BillingController@update',
        'as' => 'admin.billing.update',
        'namespace' => NULL,
        'prefix' => 'admin/billing',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.position.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/position/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PositionController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PositionController@index',
        'as' => 'admin.position.view',
        'namespace' => NULL,
        'prefix' => 'admin/position',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.position.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/position/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PositionController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\PositionController@create',
        'as' => 'admin.position.create',
        'namespace' => NULL,
        'prefix' => 'admin/position',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.position.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/position/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PositionController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\PositionController@store',
        'as' => 'admin.position.store',
        'namespace' => NULL,
        'prefix' => 'admin/position',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.position.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/position/edit/{position}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PositionController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\PositionController@edit',
        'as' => 'admin.position.edit',
        'namespace' => NULL,
        'prefix' => 'admin/position',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.position.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/position/update/{position}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PositionController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PositionController@update',
        'as' => 'admin.position.update',
        'namespace' => NULL,
        'prefix' => 'admin/position',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.player.position.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/player-position/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlayerPositionController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlayerPositionController@index',
        'as' => 'admin.player.position.view',
        'namespace' => NULL,
        'prefix' => 'admin/player-position',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.player.position.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/player-position/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlayerPositionController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlayerPositionController@create',
        'as' => 'admin.player.position.create',
        'namespace' => NULL,
        'prefix' => 'admin/player-position',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.player.position.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/player-position/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlayerPositionController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlayerPositionController@store',
        'as' => 'admin.player.position.store',
        'namespace' => NULL,
        'prefix' => 'admin/player-position',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.player.position.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/player-position/edit/{playerPosition}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlayerPositionController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlayerPositionController@edit',
        'as' => 'admin.player.position.edit',
        'namespace' => NULL,
        'prefix' => 'admin/player-position',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.player.position.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/player-position/update/{playerPosition}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlayerPositionController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlayerPositionController@update',
        'as' => 'admin.player.position.update',
        'namespace' => NULL,
        'prefix' => 'admin/player-position',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.account.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/account/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfileController@accountDashboard',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfileController@accountDashboard',
        'as' => 'admin.account.dashboard',
        'namespace' => NULL,
        'prefix' => 'admin/account',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.store.account' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store/account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfileController@storeAccount',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfileController@storeAccount',
        'as' => 'admin.store.account',
        'namespace' => NULL,
        'prefix' => 'admin/store',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.store.contract' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store/contract',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfileController@storeContract',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfileController@storeContract',
        'as' => 'admin.store.contract',
        'namespace' => NULL,
        'prefix' => 'admin/store',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.store.verify' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfileController@storeVerification',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfileController@storeVerification',
        'as' => 'admin.store.verify',
        'namespace' => NULL,
        'prefix' => 'admin/store',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.store.payment-detail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store/payment-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentDetailController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentDetailController@store',
        'as' => 'admin.store.payment-detail',
        'namespace' => NULL,
        'prefix' => 'admin/store',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.create.privacy_policy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create/privacy_policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfileController@createPrivacyPolicy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfileController@createPrivacyPolicy',
        'as' => 'admin.create.privacy_policy',
        'namespace' => NULL,
        'prefix' => 'admin/create',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.create.terms_and_conditions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create/terms_and_conditions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfileController@createTerms',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfileController@createTerms',
        'as' => 'admin.create.terms_and_conditions',
        'namespace' => NULL,
        'prefix' => 'admin/create',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.create.cookie_use' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create/cookie_use',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfileController@createCookies',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfileController@createCookies',
        'as' => 'admin.create.cookie_use',
        'namespace' => NULL,
        'prefix' => 'admin/create',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.view.privacy_policy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/view/privacy_policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfileController@viewPrivacyPolicy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfileController@viewPrivacyPolicy',
        'as' => 'admin.view.privacy_policy',
        'namespace' => NULL,
        'prefix' => 'admin/view',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.view.terms_and_conditions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/view/terms_and_conditions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfileController@viewTerms',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfileController@viewTerms',
        'as' => 'admin.view.terms_and_conditions',
        'namespace' => NULL,
        'prefix' => 'admin/view',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.view.cookie_use' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/view/cookie_use',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfileController@viewCookies',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfileController@viewCookies',
        'as' => 'admin.view.cookie_use',
        'namespace' => NULL,
        'prefix' => 'admin/view',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.create.account' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfileController@createAccount',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfileController@createAccount',
        'as' => 'admin.create.account',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.create.contract' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create-contract',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfileController@createContract',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfileController@createContract',
        'as' => 'admin.create.contract',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.create.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/verify-identity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfileController@createVerification',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfileController@createVerification',
        'as' => 'admin.create.verify',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.create.payment_detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentDetailController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentDetailController@index',
        'as' => 'admin.create.payment_detail',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.stadium.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/stadium/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StadiumController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\StadiumController@index',
        'as' => 'admin.stadium.dashboard',
        'namespace' => NULL,
        'prefix' => 'admin/stadium',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.stadium.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/stadium/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StadiumController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\StadiumController@create',
        'as' => 'admin.stadium.create',
        'namespace' => NULL,
        'prefix' => 'admin/stadium',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.stadium.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/stadium/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StadiumController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\StadiumController@store',
        'as' => 'admin.stadium.store',
        'namespace' => NULL,
        'prefix' => 'admin/stadium',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.stadium.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/stadium/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StadiumController@list',
        'controller' => 'App\\Http\\Controllers\\Admin\\StadiumController@list',
        'as' => 'admin.stadium.list',
        'namespace' => NULL,
        'prefix' => 'admin/stadium',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.stadium.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/stadium/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StadiumController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\StadiumController@edit',
        'as' => 'admin.stadium.edit',
        'namespace' => NULL,
        'prefix' => 'admin/stadium',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.stadium.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/stadium/update/{stadium}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StadiumController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\StadiumController@update',
        'as' => 'admin.stadium.update',
        'namespace' => NULL,
        'prefix' => 'admin/stadium',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.stadium.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/stadium/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StadiumController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\StadiumController@destroy',
        'as' => 'admin.stadium.delete',
        'namespace' => NULL,
        'prefix' => 'admin/stadium',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.stadium.view.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/stadium/view/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StadiumController@viewPDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\StadiumController@viewPDF',
        'as' => 'admin.stadium.view.pdf',
        'namespace' => NULL,
        'prefix' => 'admin/stadium',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.stadium.generate.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/stadium/generate/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StadiumController@generatePDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\StadiumController@generatePDF',
        'as' => 'admin.stadium.generate.pdf',
        'namespace' => NULL,
        'prefix' => 'admin/stadium',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.stadium.generate.word' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/stadium/generate/word',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StadiumController@generateDocx',
        'controller' => 'App\\Http\\Controllers\\Admin\\StadiumController@generateDocx',
        'as' => 'admin.stadium.generate.word',
        'namespace' => NULL,
        'prefix' => 'admin/stadium',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.stadium.export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/stadium/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StadiumController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\StadiumController@export',
        'as' => 'admin.stadium.export',
        'namespace' => NULL,
        'prefix' => 'admin/stadium',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ad.management.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/ad-management/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdManagementController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdManagementController@index',
        'as' => 'admin.ad.management.dashboard',
        'namespace' => NULL,
        'prefix' => 'admin/ad-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ad.management.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/ad-management/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdManagementController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdManagementController@create',
        'as' => 'admin.ad.management.create',
        'namespace' => NULL,
        'prefix' => 'admin/ad-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ad.management.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/ad-management/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdManagementController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdManagementController@store',
        'as' => 'admin.ad.management.store',
        'namespace' => NULL,
        'prefix' => 'admin/ad-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ad.management.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/ad-management/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdManagementController@list',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdManagementController@list',
        'as' => 'admin.ad.management.list',
        'namespace' => NULL,
        'prefix' => 'admin/ad-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ad.management.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/ad-management/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdManagementController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdManagementController@edit',
        'as' => 'admin.ad.management.edit',
        'namespace' => NULL,
        'prefix' => 'admin/ad-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ad.management.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/ad-management/update/{ad}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdManagementController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdManagementController@update',
        'as' => 'admin.ad.management.update',
        'namespace' => NULL,
        'prefix' => 'admin/ad-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.player.management.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/player-management/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@index',
        'as' => 'admin.player.management.dashboard',
        'namespace' => NULL,
        'prefix' => 'admin/player-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.player.management.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/player-management/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@list',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@list',
        'as' => 'admin.player.management.list',
        'namespace' => NULL,
        'prefix' => 'admin/player-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.player.management.default.account' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/player-management/default-account/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@defaultAccount',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@defaultAccount',
        'as' => 'admin.player.management.default.account',
        'namespace' => NULL,
        'prefix' => 'admin/player-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.player.management.golden.member' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/player-management/golden-member/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@goldenMember',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@goldenMember',
        'as' => 'admin.player.management.golden.member',
        'namespace' => NULL,
        'prefix' => 'admin/player-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.player.management.player.photo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/player-management/player-photo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@playerPhoto',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@playerPhoto',
        'as' => 'admin.player.management.player.photo',
        'namespace' => NULL,
        'prefix' => 'admin/player-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.player.management.player.video' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/player-management/player-video',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@playerVideo',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@playerVideo',
        'as' => 'admin.player.management.player.video',
        'namespace' => NULL,
        'prefix' => 'admin/player-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.player.management.normal.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/player-management/normal-profile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@normalProfile',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@normalProfile',
        'as' => 'admin.player.management.normal.profile',
        'namespace' => NULL,
        'prefix' => 'admin/player-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.player.management.account.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/player-management/update/account/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@updateAccount',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@updateAccount',
        'as' => 'admin.player.management.account.update',
        'namespace' => NULL,
        'prefix' => 'admin/player-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.player.management.card.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/player-management/card-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@cardDetail',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@cardDetail',
        'as' => 'admin.player.management.card.detail',
        'namespace' => NULL,
        'prefix' => 'admin/player-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.player.management.update.card.detail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/player-management/update/card/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@updateCard',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@updateCard',
        'as' => 'admin.player.management.update.card.detail',
        'namespace' => NULL,
        'prefix' => 'admin/player-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.player.management.view.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/player-management/view/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@viewPDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@viewPDF',
        'as' => 'admin.player.management.view.pdf',
        'namespace' => NULL,
        'prefix' => 'admin/player-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.player.management.view.excel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/player-management/view/excel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@viewExcel',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@viewExcel',
        'as' => 'admin.player.management.view.excel',
        'namespace' => NULL,
        'prefix' => 'admin/player-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.player.management.generate.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/player-management/generate/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@generatePDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@generatePDF',
        'as' => 'admin.player.management.generate.pdf',
        'namespace' => NULL,
        'prefix' => 'admin/player-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.player.management.generate.word' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/player-management/generate/word',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@generateDocx',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@generateDocx',
        'as' => 'admin.player.management.generate.word',
        'namespace' => NULL,
        'prefix' => 'admin/player-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.player.management.export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/player-management/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@export',
        'as' => 'admin.player.management.export',
        'namespace' => NULL,
        'prefix' => 'admin/player-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.player.management.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/player-management/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@download',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlayerManagementController@download',
        'as' => 'admin.player.management.download',
        'namespace' => NULL,
        'prefix' => 'admin/player-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.upgrade.management.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/upgrade-management/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubscriptionController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubscriptionController@index',
        'as' => 'admin.upgrade.management.dashboard',
        'namespace' => NULL,
        'prefix' => 'admin/upgrade-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.upgrade.management.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/upgrade-management/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubscriptionController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubscriptionController@store',
        'as' => 'admin.upgrade.management.store',
        'namespace' => NULL,
        'prefix' => 'admin/upgrade-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.upgrade.management.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/upgrade-management/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubscriptionController@list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubscriptionController@list',
        'as' => 'admin.upgrade.management.list',
        'namespace' => NULL,
        'prefix' => 'admin/upgrade-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.upgrade.management.upgrade.account' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/upgrade-management/upgrade/account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubscriptionController@upgradeAccount',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubscriptionController@upgradeAccount',
        'as' => 'admin.upgrade.management.upgrade.account',
        'namespace' => NULL,
        'prefix' => 'admin/upgrade-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.security.management.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/security-management/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SecurityManagementController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SecurityManagementController@index',
        'as' => 'admin.security.management.dashboard',
        'namespace' => NULL,
        'prefix' => 'admin/security-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.security.management.security' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/security-management/security',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SecurityManagementController@security',
        'controller' => 'App\\Http\\Controllers\\Admin\\SecurityManagementController@security',
        'as' => 'admin.security.management.security',
        'namespace' => NULL,
        'prefix' => 'admin/security-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.security.management.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/security-management/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SecurityManagementController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SecurityManagementController@store',
        'as' => 'admin.security.management.store',
        'namespace' => NULL,
        'prefix' => 'admin/security-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.security.management.privacy.policy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/security-management/privacy/policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SecurityManagementController@privacyPolicy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SecurityManagementController@privacyPolicy',
        'as' => 'admin.security.management.privacy.policy',
        'namespace' => NULL,
        'prefix' => 'admin/security-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.security.management.term.service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/security-management/term-service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SecurityManagementController@termOfService',
        'controller' => 'App\\Http\\Controllers\\Admin\\SecurityManagementController@termOfService',
        'as' => 'admin.security.management.term.service',
        'namespace' => NULL,
        'prefix' => 'admin/security-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.security.management.cookies' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/security-management/cookies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SecurityManagementController@cookies',
        'controller' => 'App\\Http\\Controllers\\Admin\\SecurityManagementController@cookies',
        'as' => 'admin.security.management.cookies',
        'namespace' => NULL,
        'prefix' => 'admin/security-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.invitation.management.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/invitation-management/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@index',
        'as' => 'admin.invitation.management.dashboard',
        'namespace' => NULL,
        'prefix' => 'admin/invitation-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.invitation.management.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/invitation-management/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@list',
        'controller' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@list',
        'as' => 'admin.invitation.management.list',
        'namespace' => NULL,
        'prefix' => 'admin/invitation-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.invitation.management.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/invitation-management/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@edit',
        'as' => 'admin.invitation.management.edit',
        'namespace' => NULL,
        'prefix' => 'admin/invitation-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.invitation.management.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/invitation-management/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@update',
        'as' => 'admin.invitation.management.update',
        'namespace' => NULL,
        'prefix' => 'admin/invitation-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.invitation.management.view.pdf.invite' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/invitation-management/view/pdf/invite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@viewPDFInvite',
        'controller' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@viewPDFInvite',
        'as' => 'admin.invitation.management.view.pdf.invite',
        'namespace' => NULL,
        'prefix' => 'admin/invitation-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.invitation.management.view.excel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/invitation-management/view/excel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@viewExcelInvite',
        'controller' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@viewExcelInvite',
        'as' => 'admin.invitation.management.view.excel',
        'namespace' => NULL,
        'prefix' => 'admin/invitation-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.invitation.management.generate.pdf.invite' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/invitation-management/generate/pdf/invite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@generatePDFInvite',
        'controller' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@generatePDFInvite',
        'as' => 'admin.invitation.management.generate.pdf.invite',
        'namespace' => NULL,
        'prefix' => 'admin/invitation-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.invitation.management.generate.word.invite' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/invitation-management/generate/word/invite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@generateDocxInvite',
        'controller' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@generateDocxInvite',
        'as' => 'admin.invitation.management.generate.word.invite',
        'namespace' => NULL,
        'prefix' => 'admin/invitation-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.invitation.management.view.pdf.hire' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/invitation-management/view/pdf/hire',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@viewPDFHire',
        'controller' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@viewPDFHire',
        'as' => 'admin.invitation.management.view.pdf.hire',
        'namespace' => NULL,
        'prefix' => 'admin/invitation-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.invitation.management.generate.pdf.hire' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/invitation-management/generate/pdf/hire',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@generatePDFHire',
        'controller' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@generatePDFHire',
        'as' => 'admin.invitation.management.generate.pdf.hire',
        'namespace' => NULL,
        'prefix' => 'admin/invitation-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.invitation.management.generate.word.hire' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/invitation-management/generate/word/hire',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@generateDocxHire',
        'controller' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@generateDocxHire',
        'as' => 'admin.invitation.management.generate.word.hire',
        'namespace' => NULL,
        'prefix' => 'admin/invitation-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.invitation.management.export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/invitation-management/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\InvitationManagementController@export',
        'as' => 'admin.invitation.management.export',
        'namespace' => NULL,
        'prefix' => 'admin/invitation-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.management.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report-management/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@index',
        'as' => 'admin.report.management.dashboard',
        'namespace' => NULL,
        'prefix' => 'admin/report-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.management.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report-management/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@list',
        'as' => 'admin.report.management.list',
        'namespace' => NULL,
        'prefix' => 'admin/report-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.management.report.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report-management/report-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@reportedProfile',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@reportedProfile',
        'as' => 'admin.report.management.report.profile',
        'namespace' => NULL,
        'prefix' => 'admin/report-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.management.report.profile.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report-management/report-profile-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@reportProfileDetail',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@reportProfileDetail',
        'as' => 'admin.report.management.report.profile.detail',
        'namespace' => NULL,
        'prefix' => 'admin/report-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.management.reported.player.photo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report-management/reported-player-photo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@reportedPlayerPhoto',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@reportedPlayerPhoto',
        'as' => 'admin.report.management.reported.player.photo',
        'namespace' => NULL,
        'prefix' => 'admin/report-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.management.report.chat.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report-management/report-chat-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@reportChatList',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@reportChatList',
        'as' => 'admin.report.management.report.chat.list',
        'namespace' => NULL,
        'prefix' => 'admin/report-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.management.report.chat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report-management/report-chat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@reportChat',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@reportChat',
        'as' => 'admin.report.management.report.chat',
        'namespace' => NULL,
        'prefix' => 'admin/report-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.management.view.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report-management/view/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@viewPDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@viewPDF',
        'as' => 'admin.report.management.view.pdf',
        'namespace' => NULL,
        'prefix' => 'admin/report-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.management.view.excel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report-management/view/excel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@viewExcel',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@viewExcel',
        'as' => 'admin.report.management.view.excel',
        'namespace' => NULL,
        'prefix' => 'admin/report-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.management.generate.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report-management/generate/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@generatePDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@generatePDF',
        'as' => 'admin.report.management.generate.pdf',
        'namespace' => NULL,
        'prefix' => 'admin/report-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.management.generate.word' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report-management/generate/word',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@generateDocx',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@generateDocx',
        'as' => 'admin.report.management.generate.word',
        'namespace' => NULL,
        'prefix' => 'admin/report-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.management.export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report-management/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportManagementController@export',
        'as' => 'admin.report.management.export',
        'namespace' => NULL,
        'prefix' => 'admin/report-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.chat.management.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chat-management/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatManagementController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatManagementController@index',
        'as' => 'admin.chat.management.dashboard',
        'namespace' => NULL,
        'prefix' => 'admin/chat-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.chat.management.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chat-management/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatManagementController@list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatManagementController@list',
        'as' => 'admin.chat.management.list',
        'namespace' => NULL,
        'prefix' => 'admin/chat-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.chat.management.chat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chat-management/chat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatManagementController@chat',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatManagementController@chat',
        'as' => 'admin.chat.management.chat',
        'namespace' => NULL,
        'prefix' => 'admin/chat-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.rating.management.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/rating-management/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@index',
        'as' => 'admin.rating.management.dashboard',
        'namespace' => NULL,
        'prefix' => 'admin/rating-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.rating.management.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/rating-management/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@list',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@list',
        'as' => 'admin.rating.management.list',
        'namespace' => NULL,
        'prefix' => 'admin/rating-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.rating.management.normal.rating' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/rating-management/normal/rating',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@normalRating',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@normalRating',
        'as' => 'admin.rating.management.normal.rating',
        'namespace' => NULL,
        'prefix' => 'admin/rating-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.rating.management.golden.rating' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/rating-management/golden/rating',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@goldenRating',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@goldenRating',
        'as' => 'admin.rating.management.golden.rating',
        'namespace' => NULL,
        'prefix' => 'admin/rating-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.rating.management.update.rating' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/rating-management/update/rating',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@updateRating',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@updateRating',
        'as' => 'admin.rating.management.update.rating',
        'namespace' => NULL,
        'prefix' => 'admin/rating-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.rating.management.manage.rating' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/rating-management/manage/rating',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@manageRating',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@manageRating',
        'as' => 'admin.rating.management.manage.rating',
        'namespace' => NULL,
        'prefix' => 'admin/rating-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.rating.management.rating' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/rating-management/rating',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@rating',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@rating',
        'as' => 'admin.rating.management.rating',
        'namespace' => NULL,
        'prefix' => 'admin/rating-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.rating.management.update.labels' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/rating-management/update/labels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@updateLabels',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@updateLabels',
        'as' => 'admin.rating.management.update.labels',
        'namespace' => NULL,
        'prefix' => 'admin/rating-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.rating.management.view.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/rating-management/view/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@viewPDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@viewPDF',
        'as' => 'admin.rating.management.view.pdf',
        'namespace' => NULL,
        'prefix' => 'admin/rating-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.rating.management.view.excel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/rating-management/view/excel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@viewExcel',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@viewExcel',
        'as' => 'admin.rating.management.view.excel',
        'namespace' => NULL,
        'prefix' => 'admin/rating-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.rating.management.generate.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/rating-management/generate/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@generatePDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@generatePDF',
        'as' => 'admin.rating.management.generate.pdf',
        'namespace' => NULL,
        'prefix' => 'admin/rating-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.rating.management.generate.word' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/rating-management/generate/word',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@generateDocx',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@generateDocx',
        'as' => 'admin.rating.management.generate.word',
        'namespace' => NULL,
        'prefix' => 'admin/rating-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.rating.management.export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/rating-management/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingManagementController@export',
        'as' => 'admin.rating.management.export',
        'namespace' => NULL,
        'prefix' => 'admin/rating-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.account.management.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/help-management/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountManagementController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountManagementController@index',
        'as' => 'admin.account.management.dashboard',
        'namespace' => NULL,
        'prefix' => 'admin/help-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.account.management.help' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/help-management/help',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountManagementController@help',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountManagementController@help',
        'as' => 'admin.account.management.help',
        'namespace' => NULL,
        'prefix' => 'admin/help-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.account.management.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/help-management/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountManagementController@list',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountManagementController@list',
        'as' => 'admin.account.management.list',
        'namespace' => NULL,
        'prefix' => 'admin/help-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.verification.management.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/verification-management/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VerificationManagementController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\VerificationManagementController@index',
        'as' => 'admin.verification.management.dashboard',
        'namespace' => NULL,
        'prefix' => 'admin/verification-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.verification.management.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/verification-management/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VerificationManagementController@list',
        'controller' => 'App\\Http\\Controllers\\Admin\\VerificationManagementController@list',
        'as' => 'admin.verification.management.list',
        'namespace' => NULL,
        'prefix' => 'admin/verification-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.verification.management.account' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/verification-management/account/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VerificationManagementController@manageAccount',
        'controller' => 'App\\Http\\Controllers\\Admin\\VerificationManagementController@manageAccount',
        'as' => 'admin.verification.management.account',
        'namespace' => NULL,
        'prefix' => 'admin/verification-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.verification.management.update.account' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/verification-management/update/account/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VerificationManagementController@updateAccount',
        'controller' => 'App\\Http\\Controllers\\Admin\\VerificationManagementController@updateAccount',
        'as' => 'admin.verification.management.update.account',
        'namespace' => NULL,
        'prefix' => 'admin/verification-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.verification.management.view.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/verification-management/view/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VerificationManagementController@viewPDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\VerificationManagementController@viewPDF',
        'as' => 'admin.verification.management.view.pdf',
        'namespace' => NULL,
        'prefix' => 'admin/verification-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.verification.management.view.excel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/verification-management/view/excel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VerificationManagementController@viewExcel',
        'controller' => 'App\\Http\\Controllers\\Admin\\VerificationManagementController@viewExcel',
        'as' => 'admin.verification.management.view.excel',
        'namespace' => NULL,
        'prefix' => 'admin/verification-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.verification.management.generate.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/verification-management/generate/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VerificationManagementController@generatePDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\VerificationManagementController@generatePDF',
        'as' => 'admin.verification.management.generate.pdf',
        'namespace' => NULL,
        'prefix' => 'admin/verification-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.verification.management.generate.word' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/verification-management/generate/word',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VerificationManagementController@generateDocx',
        'controller' => 'App\\Http\\Controllers\\Admin\\VerificationManagementController@generateDocx',
        'as' => 'admin.verification.management.generate.word',
        'namespace' => NULL,
        'prefix' => 'admin/verification-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.verification.management.export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/verification-management/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VerificationManagementController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\VerificationManagementController@export',
        'as' => 'admin.verification.management.export',
        'namespace' => NULL,
        'prefix' => 'admin/verification-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.app.management.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/app-management/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AppManagementController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppManagementController@index',
        'as' => 'admin.app.management.dashboard',
        'namespace' => NULL,
        'prefix' => 'admin/app-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.management.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-management/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentManagementController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentManagementController@index',
        'as' => 'admin.payment.management.dashboard',
        'namespace' => NULL,
        'prefix' => 'admin/payment-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.management.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting-management/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingManagementController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingManagementController@index',
        'as' => 'admin.setting.management.dashboard',
        'namespace' => NULL,
        'prefix' => 'admin/setting-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.labels.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/labels/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LabelsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\LabelsController@index',
        'as' => 'admin.labels.view',
        'namespace' => NULL,
        'prefix' => 'admin/labels',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.labels.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/labels/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LabelsController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\LabelsController@create',
        'as' => 'admin.labels.create',
        'namespace' => NULL,
        'prefix' => 'admin/labels',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.labels.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/labels/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LabelsController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\LabelsController@store',
        'as' => 'admin.labels.store',
        'namespace' => NULL,
        'prefix' => 'admin/labels',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.labels.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/labels/edit/{labels}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LabelsController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\LabelsController@edit',
        'as' => 'admin.labels.edit',
        'namespace' => NULL,
        'prefix' => 'admin/labels',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.labels.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/labels/update/{labels}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LabelsController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\LabelsController@update',
        'as' => 'admin.labels.update',
        'namespace' => NULL,
        'prefix' => 'admin/labels',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.superadmin.account' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SuperAdminAccountController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SuperAdminAccountController@index',
        'as' => 'admin.superadmin.account',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.superadmin.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SuperAdminAccountController@updateAccount',
        'controller' => 'App\\Http\\Controllers\\Admin\\SuperAdminAccountController@updateAccount',
        'as' => 'admin.superadmin.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notification.management.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notification-management/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationManagementController@dashboard',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationManagementController@dashboard',
        'as' => 'admin.notification.management.dashboard',
        'namespace' => NULL,
        'prefix' => 'admin/notification-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notification.management.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notification-management/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationManagementController@list',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationManagementController@list',
        'as' => 'admin.notification.management.list',
        'namespace' => NULL,
        'prefix' => 'admin/notification-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notification.management.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/notification-management/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'SuperAdmin',
          2 => 'IsAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationManagementController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationManagementController@update',
        'as' => 'admin.notification.management.update',
        'namespace' => NULL,
        'prefix' => 'admin/notification-management',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'signup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'signup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\AuthController@signup',
        'controller' => 'App\\Http\\Controllers\\Player\\AuthController@signup',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'signup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'check.register' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'check/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\AuthController@checkRegister',
        'controller' => 'App\\Http\\Controllers\\Player\\AuthController@checkRegister',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'check.register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player-forgot-password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/forget/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\AuthController@forgotPassword',
        'controller' => 'App\\Http\\Controllers\\Player\\AuthController@forgotPassword',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'player-forgot-password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.check.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player-check-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\AuthController@checkEmail',
        'controller' => 'App\\Http\\Controllers\\Player\\AuthController@checkEmail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'player.check.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.email.verification' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player-email-verification/{email}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\AuthController@emailVerify',
        'controller' => 'App\\Http\\Controllers\\Player\\AuthController@emailVerify',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'player.email.verification',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.check.email.verification' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player-check-email-verification/{email}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\AuthController@checkVerificationCode',
        'controller' => 'App\\Http\\Controllers\\Player\\AuthController@checkVerificationCode',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'player.check.email.verification',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.new.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player-create-new-password/{email}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\AuthController@newPassword',
        'controller' => 'App\\Http\\Controllers\\Player\\AuthController@newPassword',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'player.new.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'changed.password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'changed-password/{email}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\AuthController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\Player\\AuthController@updatePassword',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'changed.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.return.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player-return-login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\AuthController@returnLogin',
        'controller' => 'App\\Http\\Controllers\\Player\\AuthController@returnLogin',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'player.return.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\Player\\AuthController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'check.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'check/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\AuthController@checkLogin',
        'controller' => 'App\\Http\\Controllers\\Player\\AuthController@checkLogin',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'check.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\AuthController@about',
        'controller' => 'App\\Http\\Controllers\\Player\\AuthController@about',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\AuthController@contact',
        'controller' => 'App\\Http\\Controllers\\Player\\AuthController@contact',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\Player\\AuthController@logout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.terms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/terms-and-condition',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PrivacyController@terms',
        'controller' => 'App\\Http\\Controllers\\Player\\PrivacyController@terms',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'player.terms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.privacy.policy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/privacy-policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PrivacyController@PrivacyPolicy',
        'controller' => 'App\\Http\\Controllers\\Player\\PrivacyController@PrivacyPolicy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'player.privacy.policy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.cookie.use' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/cookie-use',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PrivacyController@Cookies',
        'controller' => 'App\\Http\\Controllers\\Player\\PrivacyController@Cookies',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'player.cookie.use',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\DashboardController@dashboard',
        'controller' => 'App\\Http\\Controllers\\Player\\DashboardController@dashboard',
        'as' => 'player.dashboard',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.more.terms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/more/terms-and-condition',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PrivacyController@moreTerms',
        'controller' => 'App\\Http\\Controllers\\Player\\PrivacyController@moreTerms',
        'as' => 'player.more.terms',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.more.privacy.policy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/more/privacy-policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PrivacyController@morePrivacyPolicy',
        'controller' => 'App\\Http\\Controllers\\Player\\PrivacyController@morePrivacyPolicy',
        'as' => 'player.more.privacy.policy',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.more.cookie.use' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/more/cookie-use',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PrivacyController@moreCookies',
        'controller' => 'App\\Http\\Controllers\\Player\\PrivacyController@moreCookies',
        'as' => 'player.more.cookie.use',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.verify.identity' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/verify-identity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PrivacyController@verifyIdentity',
        'controller' => 'App\\Http\\Controllers\\Player\\PrivacyController@verifyIdentity',
        'as' => 'player.verify.identity',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.store.identity' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/store/verify/identity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PrivacyController@storePlayerVerification',
        'controller' => 'App\\Http\\Controllers\\Player\\PrivacyController@storePlayerVerification',
        'as' => 'player.store.identity',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.more' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/more',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\MoreController@index',
        'controller' => 'App\\Http\\Controllers\\Player\\MoreController@index',
        'as' => 'player.more',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.chat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/chat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\ChatController@chat',
        'controller' => 'App\\Http\\Controllers\\Player\\ChatController@chat',
        'as' => 'player.chat',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.invitation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/invitation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\InvitationController@invitation',
        'controller' => 'App\\Http\\Controllers\\Player\\InvitationController@invitation',
        'as' => 'player.invitation',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.send.invitation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/send/invitation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\InvitationController@sendInvitation',
        'controller' => 'App\\Http\\Controllers\\Player\\InvitationController@sendInvitation',
        'as' => 'player.send.invitation',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.account' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/upgrade/account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\UpgradeAccountController@upgradeAccount',
        'controller' => 'App\\Http\\Controllers\\Player\\UpgradeAccountController@upgradeAccount',
        'as' => 'player.account',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.merchant.account' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/merchant-account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PaymentController@merchantAccount',
        'controller' => 'App\\Http\\Controllers\\Player\\PaymentController@merchantAccount',
        'as' => 'player.merchant.account',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.payment.overview' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/payment-overview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PaymentController@paymentOverview',
        'controller' => 'App\\Http\\Controllers\\Player\\PaymentController@paymentOverview',
        'as' => 'player.payment.overview',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.email' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\AccountController@email',
        'controller' => 'App\\Http\\Controllers\\Player\\AccountController@email',
        'as' => 'player.email',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.update.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/update/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\AccountController@updateEmail',
        'controller' => 'App\\Http\\Controllers\\Player\\AccountController@updateEmail',
        'as' => 'player.update.email',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.phone' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/phone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\AccountController@phone',
        'controller' => 'App\\Http\\Controllers\\Player\\AccountController@phone',
        'as' => 'player.phone',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.update.phone' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/update/phone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\AccountController@updatePhone',
        'controller' => 'App\\Http\\Controllers\\Player\\AccountController@updatePhone',
        'as' => 'player.update.phone',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.change.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\AccountController@playerPassword',
        'controller' => 'App\\Http\\Controllers\\Player\\AccountController@playerPassword',
        'as' => 'player.change.password',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.update.password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/update/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\AccountController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\Player\\AccountController@updatePassword',
        'as' => 'player.update.password',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.help' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/help',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\AccountController@help',
        'controller' => 'App\\Http\\Controllers\\Player\\AccountController@help',
        'as' => 'player.help',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PlayerController@update',
        'controller' => 'App\\Http\\Controllers\\Player\\PlayerController@update',
        'as' => 'player.profile',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.default.player' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/default/profile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PlayerController@defaultPlayer',
        'controller' => 'App\\Http\\Controllers\\Player\\PlayerController@defaultPlayer',
        'as' => 'player.default.player',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.store.photo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/store/photo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PlayerController@storePlayerPhoto',
        'controller' => 'App\\Http\\Controllers\\Player\\PlayerController@storePlayerPhoto',
        'as' => 'player.store.photo',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.store.video' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/store/video',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PlayerController@storePlayerVideo',
        'controller' => 'App\\Http\\Controllers\\Player\\PlayerController@storePlayerVideo',
        'as' => 'player.store.video',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.golden.player' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/golden/profile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PlayerController@goldenPlayer',
        'controller' => 'App\\Http\\Controllers\\Player\\PlayerController@goldenPlayer',
        'as' => 'player.golden.player',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.video' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/video/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PlayerController@playerVideo',
        'controller' => 'App\\Http\\Controllers\\Player\\PlayerController@playerVideo',
        'as' => 'player.video',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.photo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/photo/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PlayerController@playerPhoto',
        'controller' => 'App\\Http\\Controllers\\Player\\PlayerController@playerPhoto',
        'as' => 'player.photo',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.store.comment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/store/comment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PlayerController@videoComment',
        'controller' => 'App\\Http\\Controllers\\Player\\PlayerController@videoComment',
        'as' => 'player.store.comment',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.photo.store.comment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/photo/store/comment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PlayerController@photoComment',
        'controller' => 'App\\Http\\Controllers\\Player\\PlayerController@photoComment',
        'as' => 'player.photo.store.comment',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.update.profile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/update/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PlayerController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\Player\\PlayerController@updateProfile',
        'as' => 'player.update.profile',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.golden.profile.photo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/golden/profile/photo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PlayerController@goldenPlayerProfile',
        'controller' => 'App\\Http\\Controllers\\Player\\PlayerController@goldenPlayerProfile',
        'as' => 'player.golden.profile.photo',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.default.profile.photo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/default/profile/photo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PlayerController@defaultPlayerProfile',
        'controller' => 'App\\Http\\Controllers\\Player\\PlayerController@defaultPlayerProfile',
        'as' => 'player.default.profile.photo',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.update.video.caption' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/update/video/caption/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PlayerController@updateVideoCaption',
        'controller' => 'App\\Http\\Controllers\\Player\\PlayerController@updateVideoCaption',
        'as' => 'player.update.video.caption',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.update.photo.caption' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/update/photo/caption/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PlayerController@updatePhotoCaption',
        'controller' => 'App\\Http\\Controllers\\Player\\PlayerController@updatePhotoCaption',
        'as' => 'player.update.photo.caption',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.photo.golden.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/photo/golden/delete/{id}/{player_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PlayerController@destroyGoldenPhoto',
        'controller' => 'App\\Http\\Controllers\\Player\\PlayerController@destroyGoldenPhoto',
        'as' => 'player.photo.golden.delete',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.photo.default.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/photo/default/delete/{id}/{player_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PlayerController@destroyDefaultPhoto',
        'controller' => 'App\\Http\\Controllers\\Player\\PlayerController@destroyDefaultPhoto',
        'as' => 'player.photo.default.delete',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.video.golden.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/video/golden/delete/{id}/{player_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PlayerController@destroyGoldenVideo',
        'controller' => 'App\\Http\\Controllers\\Player\\PlayerController@destroyGoldenVideo',
        'as' => 'player.video.golden.delete',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.video.default.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/video/default/delete/{id}/{player_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PlayerController@destroyDefaultVideo',
        'controller' => 'App\\Http\\Controllers\\Player\\PlayerController@destroyDefaultVideo',
        'as' => 'player.video.default.delete',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.store.like' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/store/like',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\LikeCommentsController@storeLikes',
        'controller' => 'App\\Http\\Controllers\\Player\\LikeCommentsController@storeLikes',
        'as' => 'player.store.like',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.store.like.video' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/store/like/video',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\LikeCommentsController@storeVideoLikes',
        'controller' => 'App\\Http\\Controllers\\Player\\LikeCommentsController@storeVideoLikes',
        'as' => 'player.store.like.video',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.store.reply.like' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/store/reply/like',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\LikeCommentsController@storeReplyLikes',
        'controller' => 'App\\Http\\Controllers\\Player\\LikeCommentsController@storeReplyLikes',
        'as' => 'player.store.reply.like',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.store.photo.like' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/store/photo/like',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\LikeCommentsController@storePhotoLikes',
        'controller' => 'App\\Http\\Controllers\\Player\\LikeCommentsController@storePhotoLikes',
        'as' => 'player.store.photo.like',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.store.reply' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/store/reply',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\VideoCommentReplyController@storeReply',
        'controller' => 'App\\Http\\Controllers\\Player\\VideoCommentReplyController@storeReply',
        'as' => 'player.store.reply',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.store.photo.reply' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/store/photo/reply',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\PhotoCommentReplyController@storePhotoReply',
        'controller' => 'App\\Http\\Controllers\\Player\\PhotoCommentReplyController@storePhotoReply',
        'as' => 'player.store.photo.reply',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.store.profile.like' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/store/profile/like',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\LikeVideoProfileController@storeProfileLikes',
        'controller' => 'App\\Http\\Controllers\\Player\\LikeVideoProfileController@storeProfileLikes',
        'as' => 'player.store.profile.like',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.store.photo.profile.like' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/store/photo/profile/like',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\LikePhotoProfileController@storePhotoProfileLikes',
        'controller' => 'App\\Http\\Controllers\\Player\\LikePhotoProfileController@storePhotoProfileLikes',
        'as' => 'player.store.photo.profile.like',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.location' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/location',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\LocationController@location',
        'controller' => 'App\\Http\\Controllers\\Player\\LocationController@location',
        'as' => 'player.location',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.favourite.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/favourite/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\FavoriteController@index',
        'controller' => 'App\\Http\\Controllers\\Player\\FavoriteController@index',
        'as' => 'player.favourite.view',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.favorite' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/favorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\FavoriteController@favorite',
        'controller' => 'App\\Http\\Controllers\\Player\\FavoriteController@favorite',
        'as' => 'player.favorite',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.unfavorite' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/unfavorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\FavoriteController@unfavorite',
        'controller' => 'App\\Http\\Controllers\\Player\\FavoriteController@unfavorite',
        'as' => 'player.unfavorite',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/social-share',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'IsPlayer',
        ),
        'uses' => 'App\\Http\\Controllers\\Player\\SocialShareController@index',
        'controller' => 'App\\Http\\Controllers\\Player\\SocialShareController@index',
        'as' => 'player.',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JRiReFiwBuhrxSLt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify-email-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JRiReFiwBuhrxSLt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin.mail.email_verification_code',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::azyyrgfQZDz307cp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'emoji',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::azyyrgfQZDz307cp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'player.player_profile.emoji',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
