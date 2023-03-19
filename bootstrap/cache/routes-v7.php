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
            '_route' => 'generated::Il6Bs2HEl7nsLPKl',
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
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wZwMyRp4WBdtJ2Qw',
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
      '/api/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FEGMe3IaXTLlidKd',
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
      '/api/general-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2cSjnSrww2CgfLoc',
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
      '/api/get-social-icons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CT3DV9wzFLvMWINg',
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
      '/api/get-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z21U1bakdugPgEYu',
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
      '/api/get-country' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RpgLzSe72Kcacwuy',
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
      '/api/get-connection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0PiO5nauZD6Q3st2',
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
      '/api/crete-first-card' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7qaWLjIQfrbsWHkR',
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
      '/api/my-card' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hbQfUMRiN8HsV3iZ',
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
      '/api/crete-card' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Uv6ewGZuyEbKeqlb',
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
      '/api/add-icons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::81vrOv2bFa6XHrCI',
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
      '/api/make-card-live' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ns8ZOMs82zN6r0jU',
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
      '/api/insights' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WULVvTzF3f1kYzfD',
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
      '/api/support-mail-send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fJcGGXG2NUBJVZ40',
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
      '/api/user-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q0DhQiDcLwpPSo9j',
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
      '/api/billing-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EKTmaELP5dRh6BiO',
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
      '/api/update-billing-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k1lqWqfbXJfuwcrT',
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
      '/api/user-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CjUGFyZ5PGIXBWHz',
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
      '/api/user-profile-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6HVIaXOujQoLyoro',
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
      '/api/cancel-plan/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zwlq1PaRG6jGKhQ6',
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
      '/api/password-reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZQMZ9U0VjwUSWTM4',
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
      '/api/account-delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::azq0H9jZ0FRPnO6a',
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
      '/api/push-notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uPk9KOzH6S3Al7Tx',
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
      '/api/stripe-checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3bNdTJBoyWLEugwb',
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
      '/api/user-invoice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::opM3W4gc55rV2nIB',
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
      '/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HW2k3cpfAsmI8dMS',
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
      '/ask-me' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.ask',
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
            '_route' => 'home',
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
      '/rss/rss.xml' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rss',
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
      '/privacy-policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy-policy',
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
      '/terms-conditions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'terms-conditions',
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
      '/about-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about-us',
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
      '/pricing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pricing',
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
      '/contact-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact-us',
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
            '_route' => 'contact-us.post',
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
      '/help' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'help',
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
      '/tutorials' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tutorials',
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
      '/disclaimer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'disclaimer',
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
      '/shop' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop',
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
      '/cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cart',
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
      '/add-to-cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'addtocart',
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
      '/update-cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.cart',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/remove-from-cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'remove.from.cart',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/check/coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'check.coupon',
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
      '/remove/coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'remove.coupon',
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
      '/products/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.checkout',
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
      '/products/transection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.orderCheckout',
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
      '/data-deletion-instructions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'data-deletion-instructions',
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
      '/post-register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post-register',
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
      '/post-login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post-login',
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
      '/login' => 
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QKeGovoOOCv3wFzK',
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
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZuAOHf9NiDuDj4Hd',
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
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
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
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
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
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CxZ1OBmGohwwOyhs',
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
      '/user/card/init-card' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.card.init-card',
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
      '/user/card/upload_avatar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.card.upload_avatar',
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
      '/user/card' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.card',
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
      '/user/card/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.card.create',
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
      '/user/card/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.card.store',
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
      '/user/card/store-first-card' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.card.store-first-card',
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
      '/user/card/change-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.card.change-status',
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
      '/user/card/sicon_update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.card.sicon_update',
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
      '/user/card/sicon_create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.card.sicon_create',
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
      '/user/card/color-highlighter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.card.color-highlighter',
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
      '/user/card/sicon_edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.card.sicon_edit',
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
      '/user/card/sicon_remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.card.sicon_remove',
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
      '/user/card/add_icon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.card.add_icon',
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
      '/user/insights' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.insights',
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
      '/user/card/view/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.card.view.history',
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
      '/user/card/download/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.card.download.history',
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
      '/user/qr/download/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.qr.download.history',
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
      '/user/setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.setting',
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
      '/user/plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.plans',
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
      '/user/suggest-feature' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.suggest-feature',
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
      '/user/free-marketing-material' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.free-marketing-material',
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
      '/user/calculator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.calculator',
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
      '/user/my-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.myorder',
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
      '/user/cancel-plan/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.cancel-plan.stripe',
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
      '/user/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.checkout',
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
      '/user/checkout/paypal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.checkout.post-transection',
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
      '/user/checkout/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payment.stripe',
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
      '/user/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.transactions',
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
      '/user/all-invoice/download' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.all-invoice.download',
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
      '/user/card/crop-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.card.crop-image',
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
      '/user/card/crop-upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.card.crop-upload',
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
      '/user/billing-info/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.billing-info.update',
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
      '/user/payment-info/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payment-info.update',
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
      '/user/profile-info/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile-info.update',
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
      '/user/support/send-mail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.support.send-mail',
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
      '/user/support/feature-request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.support.feature-request',
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
      '/user/crm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.crm',
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
      '/user/crm/bulk-export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.crm.bulk-export',
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
      '/user/deletion-request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.deletion-request',
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
      '/user/card/sicon_sorting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.sicon.sorting',
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
      '/user/review' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.review',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.review.store',
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
      '/user/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.password.reset',
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
      '/user/reset/new/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.reset.new.password',
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
      '/user/notification-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.notification-status',
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
      '/user/morgaged-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.morgaged.email',
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
      '/user/equal-housing-view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.equal.housing.update',
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
      '/user/user-disclaimer-view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.disclaimer.update',
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
      '/user/user-nmls-view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.nmls.update',
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
      '/user/user-nmls-add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.nmls.add',
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
      '/user/user-credit-auth-view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.credit_auth.update',
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
      '/user/user-quick-application-view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.quick.application.update',
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
      '/delete-account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.delete-account',
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
      '/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.change-password',
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
      '/change-password/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.change-password.update',
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
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
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
      '/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile',
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
      '/getConnect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getConnect',
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
      '/credit-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'credit-report',
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
      '/quick-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quick-report',
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
      '/admin/themes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.themes',
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
      '/admin/plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plans',
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
      '/admin/add-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.add.plan',
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
      '/admin/save-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.save.plan',
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
      '/admin/update-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update.plan',
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
      '/admin/delete-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delete.plan',
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
      '/admin/plan-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plan-list',
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
      '/admin/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users',
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
      '/admin/update-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update.user',
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
      '/admin/update-user-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update.user.plan',
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
      '/admin/update-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update.status',
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
      '/admin/delete-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delete.user',
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
      '/admin/user/trash-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.trash-list',
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
      '/admin/review' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.review.index',
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
      '/admin/review/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.review.create',
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
      '/admin/review/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.review.store',
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
      '/admin/payment-methods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.methods',
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
      '/admin/delete-payment-method' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delete.payment.method',
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
      '/admin/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.transactions',
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
      '/admin/account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.account',
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
      '/admin/edit-account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.edit.account',
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
      '/admin/update-account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update.account',
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
      '/admin/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.change.password',
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
      '/admin/update-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update.password',
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
      '/admin/custom-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.custom-page.list',
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
      '/admin/custom-page/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.custom-page.create',
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
      '/admin/custom-page/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.custom-page.store',
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
      '/admin/ajax/text-editor/image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.text-editor.image',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ajax.text-editor.image',
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
      '/admin/pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pages',
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
      '/admin/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings',
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
      '/admin/change-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.change.settings',
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
      '/admin/tax-setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax.setting',
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
      '/admin/update-tex-setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update.tax.setting',
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
      '/admin/update-email-setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update.email.setting',
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
      '/admin/test-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.test.email',
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
      '/admin/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.clear',
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
      '/admin/contacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact',
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
      '/admin/contacts/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.destroy',
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
      '/admin/blogs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog',
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
      '/admin/blog/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.create',
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
      '/admin/blog/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.store',
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
      '/admin/blog/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.',
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
      '/admin/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.index',
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
      '/admin/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.create',
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
      '/admin/category/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.store',
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
      '/admin/category/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::xwBEyorFFH3gHsa0',
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
      '/admin/subscribers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subscriber.index',
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
      '/admin/user-guides' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.guide',
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
      '/admin/user-guide/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.guide.create',
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
      '/admin/user-guide/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.guide.store',
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
      '/admin/user/guide/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::ustzira3zpCZwECN',
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
      '/admin/social-icon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social-icon.index',
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
      '/admin/social-icon/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social-icon.create',
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
      '/admin/social-icon/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social-icon.store',
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
      '/admin/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.list',
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
      '/admin/faq/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.create',
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
      '/admin/faq/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.store',
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
      '/admin/cards' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cards',
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
      '/admin/card/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.card.trash',
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
      '/admin/email-template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.template',
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
      '/admin/email-template/sort-code/doc' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.template.sortCodes',
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
      '/admin/admin-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admin-users',
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
      '/admin/admin-users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admin-users.create',
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
      '/admin/admin-users/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admin-users.store',
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
      '/admin/marketing-material' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.materials',
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
      '/admin/marketing-material/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.material.create',
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
      '/admin/marketing-material/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.material.store',
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
      '/admin/product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.index',
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
      '/admin/product/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.create',
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
      '/admin/product/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.store',
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
      '/admin/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.orders',
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
      '/admin/coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.index',
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
      '/admin/coupon/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.create',
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
      '/admin/coupon/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.store',
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
      '/admin/tutorial-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tutorialcategory.index',
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
      '/admin/tutorial-category/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tutorialcategory.store',
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
      '/admin/tutorials' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tutorials.index',
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
      '/admin/tutorials/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tutorials.create',
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
      '/admin/tutorials/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tutorials.store',
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
    ),
    2 => 
    array (
      0 => '{^(?|/a(?|pi/(?|update\\-(?|card/([^/]++)(*:42)|icons/([^/]++)(*:63))|remove\\-icons/([^/]++)(*:93)|qr/([^/]++)(*:111)|([^/]++)(*:127))|sk/([^/]++)(*:147)|dd\\-to\\-cart/([^/]++)(*:176)|uth/([^/]++)/callback(*:205))|/l(?|anguage/([^/]++)(*:235)|ogin/([^/]++)(*:256))|/qr/([^/]++)(*:277)|/pa(?|ge/([^/]++)(*:302)|ssword/reset/([^/]++)(*:331))|/tutorials/details/([^/]++)(*:367)|/shop/details/([^/]++)(*:397)|/user/(?|c(?|ard/(?|check_link/([^/]++)(*:444)|([^/]++)/(?|view(*:468)|edit(*:480)|update(*:494)|delete(*:508)))|rm/(?|([^/]++)/(?|view(*:540)|edit(*:552)|download(*:568)|update(*:582)|send\\-mail(*:600))|download\\-csv/([^/]++)(*:631)))|invoice/(?|([^/]++)(*:660)|download/([^/]++)(*:685))|free\\-marketing\\-material\\-details/([^/]++)(*:737)|p(?|lan\\-invoice/([^/]++)(*:770)|assword/password\\-reset/([^/]++)(*:810))|review/([^/]++)(*:834))|/download/([^/]++)(*:861)|/([^/]++)(*:878)|/admin/(?|t(?|heme/([^/]++)/update(*:920)|ransaction\\-status/([^/]++)/([^/]++)(*:964)|utorial(?|\\-category/(?|update/([^/]++)(*:1011)|delete/([^/]++)(*:1035))|s/(?|edit/([^/]++)(*:1063)|update/([^/]++)(*:1087)|delete/([^/]++)(*:1111))))|e(?|dit\\-(?|plan/([^/]++)(*:1148)|user/([^/]++)(*:1170))|mail\\-template/(?|edit/([^/]++)(*:1211)|update/([^/]++)(*:1235)))|s(?|hareable\\-update/([^/]++)(*:1275)|ocial\\-icon/([^/]++)/(?|edit(*:1312)|update(*:1327)|delete(*:1342))|tatus\\-update/([^/]++)/([^/]++)(*:1383))|p(?|lan/([^/]++)/([^/]++)/get(?|stripe(*:1431)|paypal(*:1446))|age/([^/]++)(?|(*:1471)|/update(*:1487))|roduct/(?|edit/([^/]++)(*:1520)|update/([^/]++)(*:1544)|delete/([^/]++)(*:1568)|images/(?|([^/]++)(*:1595)|upload/([^/]++)(*:1619)|delete/([^/]++)(*:1643))))|view\\-(?|user/([^/]++)(*:1677)|invoice/([^/]++)(*:1702))|c(?|hange\\-user\\-plan/([^/]++)(*:1742)|ustom\\-page/([^/]++)/(?|edit(*:1779)|view(*:1792)|update(*:1807)|delete(*:1822))|a(?|tegory/([^/]++)/(?|edit(*:1859)|update(*:1874))|rd/(?|edit/([^/]++)(*:1903)|delete/([^/]++)(*:1927)|change\\-status/([^/]++)(*:1959)|active/([^/]++)(*:1983)))|oupon/(?|edit/([^/]++)(*:2016)|update/([^/]++)(*:2040)|delete/([^/]++)(*:2064)))|a(?|ctive\\-user/([^/]++)(*:2099)|dmin\\-users/([^/]++)/(?|edit(*:2136)|update(*:2151)))|login\\-as/([^/]++)(*:2180)|review/([^/]++)/(?|edit(*:2212)|update(*:2227)|status\\-update/([^/]++)(*:2259)|delete(*:2274))|blog/([^/]++)/(?|edit(*:2305)|update(*:2320))|user\\-guide/(?|view/([^/]++)(*:2358)|edit/([^/]++)(*:2380)|update/([^/]++)(*:2404))|faq/([^/]++)/(?|edit(*:2434)|view(*:2447)|update(*:2462)|delete(*:2477))|marketing\\-material/(?|edit/([^/]++)(*:2523)|update/([^/]++)(*:2547)|delete/([^/]++)(*:2571))|order(?|s/(?|edit/([^/]++)(*:2607)|update/([^/]++)(*:2631)|invoice/([^/]++)(*:2656))|/status/change/([^/]++)(*:2689))))/?$}sDu',
    ),
    3 => 
    array (
      42 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iKbwlKA5YoI1QKPX',
          ),
          1 => 
          array (
            0 => 'businessCard',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      63 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lE9OyGROViwe7m5i',
          ),
          1 => 
          array (
            0 => 'icon',
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
      93 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6ZlM7fDt7xtprDBg',
          ),
          1 => 
          array (
            0 => 'icon_id',
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
      111 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UEIKgbYP1mJvQYBd',
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
      127 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aXgID6eV6QO2jKWf',
          ),
          1 => 
          array (
            0 => 'cardUrl',
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
      147 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::B9sHHenAMI2NByhM',
          ),
          1 => 
          array (
            0 => 'question',
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
      176 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.to.cart',
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
      205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social.login.callback',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
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
      235 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vbl9Mvro4W5zVtyR',
          ),
          1 => 
          array (
            0 => 'locale',
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
      256 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social.login',
          ),
          1 => 
          array (
            0 => 'provider',
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
      277 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'qr',
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
      302 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page',
          ),
          1 => 
          array (
            0 => 'slug',
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
      331 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
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
      367 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tutorials.details',
          ),
          1 => 
          array (
            0 => 'slug',
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
      397 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.details',
          ),
          1 => 
          array (
            0 => 'product',
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
      444 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.card.check_link',
          ),
          1 => 
          array (
            0 => 'text',
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
      468 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.card.view',
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
          5 => false,
          6 => NULL,
        ),
      ),
      480 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.card.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      494 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.card.update',
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
          5 => false,
          6 => NULL,
        ),
      ),
      508 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.card.delete',
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
          5 => false,
          6 => NULL,
        ),
      ),
      540 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.crm.details',
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
          5 => false,
          6 => NULL,
        ),
      ),
      552 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.crm.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      568 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.crm.download',
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
          5 => false,
          6 => NULL,
        ),
      ),
      582 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.crm.update',
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
          5 => false,
          6 => NULL,
        ),
      ),
      600 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.connection.reply-mail',
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
          5 => false,
          6 => NULL,
        ),
      ),
      631 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.crm.download-csv',
          ),
          1 => 
          array (
            0 => 'name',
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
      660 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.orders.invoice',
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
      685 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.invoice.download',
          ),
          1 => 
          array (
            0 => 'transection_id',
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
      737 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.marketing.materials.details',
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
      770 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.planinvoice',
          ),
          1 => 
          array (
            0 => 'transection_id',
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
      810 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.password.password-reset',
          ),
          1 => 
          array (
            0 => 'token',
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
      834 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.review.update',
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
      861 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'download.vCard',
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
      878 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'card.preview',
          ),
          1 => 
          array (
            0 => 'cardurl',
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
      920 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.theme.update',
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
          5 => false,
          6 => NULL,
        ),
      ),
      964 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.trans.status',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'status',
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
      1011 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tutorialcategory.update',
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
      1035 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tutorialcategory.delete',
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
      1063 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tutorials.edit',
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
      1087 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tutorials.update',
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
      1111 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tutorials.delete',
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
      1148 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.edit.plan',
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
      1170 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.edit.user',
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
      1211 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.templateedit',
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
      1235 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.templateupdate',
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
      1275 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shareable-update',
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
      1312 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social-icon.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1327 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social-icon.update',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1342 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social-icon.destroy',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1383 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.material.status',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'status',
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
      1431 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plan.getstripe',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'period',
          ),
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
      1446 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plan.getpaypal',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'period',
          ),
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
      1471 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.edit.home',
          ),
          1 => 
          array (
            0 => 'home',
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
      1487 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update.home',
          ),
          1 => 
          array (
            0 => 'home',
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
      1520 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.edit',
          ),
          1 => 
          array (
            0 => 'product',
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
      1544 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.update',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1568 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.delete',
          ),
          1 => 
          array (
            0 => 'product',
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
      1595 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.images',
          ),
          1 => 
          array (
            0 => 'product',
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
      1619 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.images.upload',
          ),
          1 => 
          array (
            0 => 'product',
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
      1643 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.images.delete',
          ),
          1 => 
          array (
            0 => 'productImage',
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
      1677 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.view.user',
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
      1702 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.view.invoice',
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
      1742 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.change.user.plan',
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
      1779 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.custom-page.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1792 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.custom-page.view',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1807 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.custom-page.update',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1822 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.custom-page.delete',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1859 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1874 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.update',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1903 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.card.edit',
          ),
          1 => 
          array (
            0 => 'card_id',
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
      1927 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.card.delete',
          ),
          1 => 
          array (
            0 => 'card_id',
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
      1959 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.card.change-status',
          ),
          1 => 
          array (
            0 => 'card_id',
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
      1983 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.card.active',
          ),
          1 => 
          array (
            0 => 'card_id',
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
      2016 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.edit',
          ),
          1 => 
          array (
            0 => 'coupon',
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
      2040 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.update',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2064 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.delete',
          ),
          1 => 
          array (
            0 => 'coupon',
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
      2099 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update.active-user',
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
      2136 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admin-users.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      2151 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admin-users.update',
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
          5 => false,
          6 => NULL,
        ),
      ),
      2180 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login-as.user',
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
      2212 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.review.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      2227 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.review.update',
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
          5 => false,
          6 => NULL,
        ),
      ),
      2259 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.review.status-update',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'status',
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
      2274 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.review.delete',
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
          5 => false,
          6 => NULL,
        ),
      ),
      2305 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      2320 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.update',
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
          5 => false,
          6 => NULL,
        ),
      ),
      2358 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.guide.view',
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
      2380 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.guide.edit',
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
      2404 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.guide.update',
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
      2434 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      2447 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.view',
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
          5 => false,
          6 => NULL,
        ),
      ),
      2462 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.update',
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
          5 => false,
          6 => NULL,
        ),
      ),
      2477 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.delete',
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
          5 => false,
          6 => NULL,
        ),
      ),
      2523 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.material.edit',
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
      2547 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.material.update',
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
      2571 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.material.delete',
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
      2607 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.orders.edit',
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
      2631 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.orders.update',
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
      2656 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.orders.invoice',
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
      2689 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.status',
          ),
          1 => 
          array (
            0 => 'order',
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
    'generated::Il6Bs2HEl7nsLPKl' => 
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
        'as' => 'generated::Il6Bs2HEl7nsLPKl',
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
    'generated::wZwMyRp4WBdtJ2Qw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\Api\\AuthController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::wZwMyRp4WBdtJ2Qw',
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
    'generated::FEGMe3IaXTLlidKd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AuthController@register',
        'controller' => 'App\\Http\\Controllers\\Api\\AuthController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::FEGMe3IaXTLlidKd',
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
    'generated::2cSjnSrww2CgfLoc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@getSettings',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@getSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::2cSjnSrww2CgfLoc',
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
    'generated::CT3DV9wzFLvMWINg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get-social-icons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@getSocialIcons',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@getSocialIcons',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::CT3DV9wzFLvMWINg',
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
    'generated::z21U1bakdugPgEYu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@planList',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@planList',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::z21U1bakdugPgEYu',
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
    'generated::RpgLzSe72Kcacwuy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get-country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@clountyList',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@clountyList',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::RpgLzSe72Kcacwuy',
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
    'generated::0PiO5nauZD6Q3st2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/get-connection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@getConnect',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@getConnect',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0PiO5nauZD6Q3st2',
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
    'generated::7qaWLjIQfrbsWHkR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/crete-first-card',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CardController@storefirstCard',
        'controller' => 'App\\Http\\Controllers\\Api\\CardController@storefirstCard',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::7qaWLjIQfrbsWHkR',
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
    'generated::hbQfUMRiN8HsV3iZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/my-card',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CardController@myCard',
        'controller' => 'App\\Http\\Controllers\\Api\\CardController@myCard',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::hbQfUMRiN8HsV3iZ',
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
    'generated::Uv6ewGZuyEbKeqlb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/crete-card',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CardController@postStore',
        'controller' => 'App\\Http\\Controllers\\Api\\CardController@postStore',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Uv6ewGZuyEbKeqlb',
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
    'generated::iKbwlKA5YoI1QKPX' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/update-card/{businessCard}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CardController@postUpdate',
        'controller' => 'App\\Http\\Controllers\\Api\\CardController@postUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::iKbwlKA5YoI1QKPX',
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
    'generated::81vrOv2bFa6XHrCI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/add-icons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CardController@addCardIcon',
        'controller' => 'App\\Http\\Controllers\\Api\\CardController@addCardIcon',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::81vrOv2bFa6XHrCI',
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
    'generated::lE9OyGROViwe7m5i' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/update-icons/{icon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CardController@siconUpdate',
        'controller' => 'App\\Http\\Controllers\\Api\\CardController@siconUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::lE9OyGROViwe7m5i',
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
    'generated::6ZlM7fDt7xtprDBg' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/remove-icons/{icon_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CardController@removeCardIcon',
        'controller' => 'App\\Http\\Controllers\\Api\\CardController@removeCardIcon',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::6ZlM7fDt7xtprDBg',
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
    'generated::ns8ZOMs82zN6r0jU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/make-card-live',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CardController@getChangeCardStatus',
        'controller' => 'App\\Http\\Controllers\\Api\\CardController@getChangeCardStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ns8ZOMs82zN6r0jU',
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
    'generated::WULVvTzF3f1kYzfD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/insights',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@getInsights',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@getInsights',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::WULVvTzF3f1kYzfD',
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
    'generated::fJcGGXG2NUBJVZ40' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/support-mail-send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@sendSupportMail',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@sendSupportMail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::fJcGGXG2NUBJVZ40',
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
    'generated::q0DhQiDcLwpPSo9j' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@userplan',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@userplan',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::q0DhQiDcLwpPSo9j',
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
    'generated::EKTmaELP5dRh6BiO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/billing-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@userBillingInfo',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@userBillingInfo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::EKTmaELP5dRh6BiO',
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
    'generated::k1lqWqfbXJfuwcrT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/update-billing-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@userBillingInfoUpdate',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@userBillingInfoUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::k1lqWqfbXJfuwcrT',
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
    'generated::CjUGFyZ5PGIXBWHz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@userProfile',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@userProfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::CjUGFyZ5PGIXBWHz',
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
    'generated::6HVIaXOujQoLyoro' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user-profile-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@profileUpdate',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@profileUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::6HVIaXOujQoLyoro',
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
    'generated::zwlq1PaRG6jGKhQ6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/cancel-plan/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SubscriptionController@cancelCurrentPlan',
        'controller' => 'App\\Http\\Controllers\\Api\\SubscriptionController@cancelCurrentPlan',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::zwlq1PaRG6jGKhQ6',
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
    'generated::ZQMZ9U0VjwUSWTM4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/password-reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@passwordReset',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@passwordReset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ZQMZ9U0VjwUSWTM4',
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
    'generated::azq0H9jZ0FRPnO6a' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/account-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@postDeletionRequest',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@postDeletionRequest',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::azq0H9jZ0FRPnO6a',
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
    'generated::uPk9KOzH6S3Al7Tx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/push-notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@putNitificationStatus',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@putNitificationStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::uPk9KOzH6S3Al7Tx',
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
    'generated::3bNdTJBoyWLEugwb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/stripe-checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\StripeController@stripeCheckout',
        'controller' => 'App\\Http\\Controllers\\Api\\StripeController@stripeCheckout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::3bNdTJBoyWLEugwb',
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
    'generated::opM3W4gc55rV2nIB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user-invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@userInvoice',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@userInvoice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::opM3W4gc55rV2nIB',
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
    'generated::UEIKgbYP1mJvQYBd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/qr/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@getQRImage',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@getQRImage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::UEIKgbYP1mJvQYBd',
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
    'generated::aXgID6eV6QO2jKWf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{cardUrl}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@getPreview',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@getPreview',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::aXgID6eV6QO2jKWf',
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
    'generated::HW2k3cpfAsmI8dMS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:571:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:352:"function () {
    \\Illuminate\\Support\\Facades\\Artisan::call(\'cache:clear\');
    \\Illuminate\\Support\\Facades\\Artisan::call(\'view:clear\');
    \\Illuminate\\Support\\Facades\\Artisan::call(\'route:clear\');
    \\Illuminate\\Support\\Facades\\Artisan::call(\'config:cache\');
    \\Illuminate\\Support\\Facades\\Artisan::call(\'config:clear\');
    return \'DONE\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008140000000000000000";}";s:4:"hash";s:44:"z2UBp/hn33kpAeKlVAiTi+RIRwjrmzd90W+Lv8yBBBc=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HW2k3cpfAsmI8dMS',
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
    'generated::vbl9Mvro4W5zVtyR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'language/{locale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:349:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:130:"function ($locale) {
    \\app()->setLocale($locale);
    \\session()->put(\'locale\', $locale);
    return \\redirect()->back();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008160000000000000000";}";s:4:"hash";s:44:"Y8naytDjKn7i4mz/sBGaO7D4bD+rEx5LZOPrX2u0lFk=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::vbl9Mvro4W5zVtyR',
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
    'generated::B9sHHenAMI2NByhM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ask/{question}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:539:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:320:"function ($question) {
    $result = \\OpenAI\\Laravel\\Facades\\OpenAI::completions()->create([
        \'model\' => \'text-davinci-003\',
        \'prompt\' => $question,
        \'max_tokens\' => 20,
        \'temperature\' => 0,
        \'n\' => 2,

    ]);

    return \\response()->json($result[\'choices\'][0][\'text\']);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008180000000000000000";}";s:4:"hash";s:44:"WkKmenasn0dwzVpViQEGuGfuv9B+mf7IsZeQrIkPVrw=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::B9sHHenAMI2NByhM',
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
    'user.ask' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ask-me',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@ask',
        'controller' => 'App\\Http\\Controllers\\HomeController@ask',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.ask',
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
    'home' => 
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
        'as' => 'home',
        'uses' => 'App\\Http\\Controllers\\HomeController@getIndex',
        'controller' => 'App\\Http\\Controllers\\HomeController@getIndex',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'qr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'qr/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'qr',
        'uses' => 'App\\Http\\Controllers\\HomeController@getQRImage',
        'controller' => 'App\\Http\\Controllers\\HomeController@getQRImage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'rss' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rss/rss.xml',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'rss',
        'uses' => 'App\\Http\\Controllers\\HomeController@rss',
        'controller' => 'App\\Http\\Controllers\\HomeController@rss',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'privacy-policy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'privacy-policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'privacy-policy',
        'uses' => 'App\\Http\\Controllers\\HomeController@getPrivacyPolicy',
        'controller' => 'App\\Http\\Controllers\\HomeController@getPrivacyPolicy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'terms-conditions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'terms-conditions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'terms-conditions',
        'uses' => 'App\\Http\\Controllers\\HomeController@getTermsCondition',
        'controller' => 'App\\Http\\Controllers\\HomeController@getTermsCondition',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'about-us' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'about-us',
        'uses' => 'App\\Http\\Controllers\\HomeController@getAboutUs',
        'controller' => 'App\\Http\\Controllers\\HomeController@getAboutUs',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'pricing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pricing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'pricing',
        'uses' => 'App\\Http\\Controllers\\HomeController@getPricing',
        'controller' => 'App\\Http\\Controllers\\HomeController@getPricing',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'contact-us' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'contact-us',
        'uses' => 'App\\Http\\Controllers\\HomeController@getContact',
        'controller' => 'App\\Http\\Controllers\\HomeController@getContact',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'contact-us.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'contact-us.post',
        'uses' => 'App\\Http\\Controllers\\HomeController@contactUs',
        'controller' => 'App\\Http\\Controllers\\HomeController@contactUs',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'help' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'help',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'help',
        'uses' => 'App\\Http\\Controllers\\HomeController@getHelp',
        'controller' => 'App\\Http\\Controllers\\HomeController@getHelp',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'tutorials' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tutorials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'tutorials',
        'uses' => 'App\\Http\\Controllers\\HomeController@tutorials',
        'controller' => 'App\\Http\\Controllers\\HomeController@tutorials',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'disclaimer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'disclaimer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'disclaimer',
        'uses' => 'App\\Http\\Controllers\\HomeController@getDisclaimer',
        'controller' => 'App\\Http\\Controllers\\HomeController@getDisclaimer',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'page/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'page',
        'uses' => 'App\\Http\\Controllers\\HomeController@getPage',
        'controller' => 'App\\Http\\Controllers\\HomeController@getPage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'tutorials.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tutorials/details/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'tutorials.details',
        'uses' => 'App\\Http\\Controllers\\HomeController@tutorialDetails',
        'controller' => 'App\\Http\\Controllers\\HomeController@tutorialDetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'shop' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shop',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'shop',
        'uses' => 'App\\Http\\Controllers\\ShopController@index',
        'controller' => 'App\\Http\\Controllers\\ShopController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'product.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shop/details/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'product.details',
        'uses' => 'App\\Http\\Controllers\\ShopController@details',
        'controller' => 'App\\Http\\Controllers\\ShopController@details',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
        'product' => 'product_slug',
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'cart',
        'uses' => 'App\\Http\\Controllers\\ProductController@cart',
        'controller' => 'App\\Http\\Controllers\\ProductController@cart',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'add.to.cart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-to-cart/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'add.to.cart',
        'uses' => 'App\\Http\\Controllers\\ProductController@addToCart',
        'controller' => 'App\\Http\\Controllers\\ProductController@addToCart',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'addtocart' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'add-to-cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'addtocart',
        'uses' => 'App\\Http\\Controllers\\ProductController@addToCartPost',
        'controller' => 'App\\Http\\Controllers\\ProductController@addToCartPost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'update.cart' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'update-cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'update.cart',
        'uses' => 'App\\Http\\Controllers\\ProductController@update',
        'controller' => 'App\\Http\\Controllers\\ProductController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'remove.from.cart' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'remove-from-cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'remove.from.cart',
        'uses' => 'App\\Http\\Controllers\\ProductController@remove',
        'controller' => 'App\\Http\\Controllers\\ProductController@remove',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'check.coupon' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'check/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'check.coupon',
        'uses' => 'App\\Http\\Controllers\\ProductController@checkCoupon',
        'controller' => 'App\\Http\\Controllers\\ProductController@checkCoupon',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'remove.coupon' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'remove/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'remove.coupon',
        'uses' => 'App\\Http\\Controllers\\ProductController@removeCoupon',
        'controller' => 'App\\Http\\Controllers\\ProductController@removeCoupon',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'product.checkout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'product.checkout',
        'uses' => 'App\\Http\\Controllers\\ProductCheckoutController@checkout',
        'controller' => 'App\\Http\\Controllers\\ProductCheckoutController@checkout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'product.orderCheckout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/transection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'product.orderCheckout',
        'uses' => 'App\\Http\\Controllers\\ProductCheckoutController@orderCheckout',
        'controller' => 'App\\Http\\Controllers\\ProductCheckoutController@orderCheckout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'data-deletion-instructions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'data-deletion-instructions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'data-deletion-instructions',
        'uses' => 'App\\Http\\Controllers\\HomeController@getdDataDeletion',
        'controller' => 'App\\Http\\Controllers\\HomeController@getdDataDeletion',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'social.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'social.login',
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthController@redirectToProvider',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthController@redirectToProvider',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'social.login.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/{provider}/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'social.login.callback',
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthController@handleProviderCallback',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthController@handleProviderCallback',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'post-register' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'post-register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'post-register',
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthController@postRegister',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthController@postRegister',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'post-login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'post-login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'post-login',
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthController@postLogin',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthController@postLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
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
    'generated::QKeGovoOOCv3wFzK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QKeGovoOOCv3wFzK',
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
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
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
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
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
    'generated::ZuAOHf9NiDuDj4Hd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZuAOHf9NiDuDj4Hd',
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
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
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
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
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
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
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
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
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
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
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
    'generated::CxZ1OBmGohwwOyhs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CxZ1OBmGohwwOyhs',
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
    'user.card.init-card' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/card/init-card',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.card.init-card',
        'uses' => 'App\\Http\\Controllers\\User\\CardController@getInitCard',
        'controller' => 'App\\Http\\Controllers\\User\\CardController@getInitCard',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.card.upload_avatar' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/card/upload_avatar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.card.upload_avatar',
        'uses' => 'App\\Http\\Controllers\\User\\CardController@uploadCardAvatar',
        'controller' => 'App\\Http\\Controllers\\User\\CardController@uploadCardAvatar',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.card.check_link' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/card/check_link/{text}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.card.check_link',
        'uses' => 'App\\Http\\Controllers\\User\\CardController@checkPerLink',
        'controller' => 'App\\Http\\Controllers\\User\\CardController@checkPerLink',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.card' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/card',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.card',
        'uses' => 'App\\Http\\Controllers\\User\\CardController@getIndex',
        'controller' => 'App\\Http\\Controllers\\User\\CardController@getIndex',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.card.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/card/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.card.create',
        'uses' => 'App\\Http\\Controllers\\User\\CardController@getCreate',
        'controller' => 'App\\Http\\Controllers\\User\\CardController@getCreate',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.card.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/card/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.card.store',
        'uses' => 'App\\Http\\Controllers\\User\\CardController@postStore',
        'controller' => 'App\\Http\\Controllers\\User\\CardController@postStore',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.card.store-first-card' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/card/store-first-card',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.card.store-first-card',
        'uses' => 'App\\Http\\Controllers\\User\\CardController@storeFirstCard',
        'controller' => 'App\\Http\\Controllers\\User\\CardController@storeFirstCard',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.card.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/card/{id}/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.card.view',
        'uses' => 'App\\Http\\Controllers\\User\\CardController@getView',
        'controller' => 'App\\Http\\Controllers\\User\\CardController@getView',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.card.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/card/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.card.edit',
        'uses' => 'App\\Http\\Controllers\\User\\CardController@getEdit',
        'controller' => 'App\\Http\\Controllers\\User\\CardController@getEdit',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.card.change-status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/card/change-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.card.change-status',
        'uses' => 'App\\Http\\Controllers\\User\\CardController@getChangeCardStatus',
        'controller' => 'App\\Http\\Controllers\\User\\CardController@getChangeCardStatus',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.card.sicon_update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/card/sicon_update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.card.sicon_update',
        'uses' => 'App\\Http\\Controllers\\User\\CardController@siconUpdate',
        'controller' => 'App\\Http\\Controllers\\User\\CardController@siconUpdate',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.card.sicon_create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/card/sicon_create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.card.sicon_create',
        'uses' => 'App\\Http\\Controllers\\User\\CardController@getSiconCreateForm',
        'controller' => 'App\\Http\\Controllers\\User\\CardController@getSiconCreateForm',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.card.color-highlighter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/card/color-highlighter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.card.color-highlighter',
        'uses' => 'App\\Http\\Controllers\\User\\CardController@colorHighlighter',
        'controller' => 'App\\Http\\Controllers\\User\\CardController@colorHighlighter',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.card.sicon_edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/card/sicon_edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.card.sicon_edit',
        'uses' => 'App\\Http\\Controllers\\User\\CardController@siconEdit',
        'controller' => 'App\\Http\\Controllers\\User\\CardController@siconEdit',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.card.sicon_remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/card/sicon_remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.card.sicon_remove',
        'uses' => 'App\\Http\\Controllers\\User\\CardController@siconRemove',
        'controller' => 'App\\Http\\Controllers\\User\\CardController@siconRemove',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.card.add_icon' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/card/add_icon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.card.add_icon',
        'uses' => 'App\\Http\\Controllers\\User\\CardController@addCardIcon',
        'controller' => 'App\\Http\\Controllers\\User\\CardController@addCardIcon',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.card.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/card/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.card.update',
        'uses' => 'App\\Http\\Controllers\\User\\CardController@postUpdate',
        'controller' => 'App\\Http\\Controllers\\User\\CardController@postUpdate',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.card.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/card/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.card.delete',
        'uses' => 'App\\Http\\Controllers\\User\\CardController@getDelete',
        'controller' => 'App\\Http\\Controllers\\User\\CardController@getDelete',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.insights' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/insights',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.insights',
        'uses' => 'App\\Http\\Controllers\\User\\DashboardControler@getInsights',
        'controller' => 'App\\Http\\Controllers\\User\\DashboardControler@getInsights',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.card.view.history' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/card/view/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.card.view.history',
        'uses' => 'App\\Http\\Controllers\\User\\DashboardControler@viewHistory',
        'controller' => 'App\\Http\\Controllers\\User\\DashboardControler@viewHistory',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.card.download.history' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/card/download/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.card.download.history',
        'uses' => 'App\\Http\\Controllers\\User\\DashboardControler@downloadHistory',
        'controller' => 'App\\Http\\Controllers\\User\\DashboardControler@downloadHistory',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.qr.download.history' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/qr/download/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.qr.download.history',
        'uses' => 'App\\Http\\Controllers\\User\\DashboardControler@qrdownloadHistory',
        'controller' => 'App\\Http\\Controllers\\User\\DashboardControler@qrdownloadHistory',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.setting' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.setting',
        'uses' => 'App\\Http\\Controllers\\User\\DashboardControler@getSetting',
        'controller' => 'App\\Http\\Controllers\\User\\DashboardControler@getSetting',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.plans' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.plans',
        'uses' => 'App\\Http\\Controllers\\User\\DashboardControler@getPlanList',
        'controller' => 'App\\Http\\Controllers\\User\\DashboardControler@getPlanList',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.suggest-feature' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/suggest-feature',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.suggest-feature',
        'uses' => 'App\\Http\\Controllers\\User\\DashboardControler@suggestFeature',
        'controller' => 'App\\Http\\Controllers\\User\\DashboardControler@suggestFeature',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.free-marketing-material' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/free-marketing-material',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.free-marketing-material',
        'uses' => 'App\\Http\\Controllers\\User\\DashboardControler@getFreeMarketing',
        'controller' => 'App\\Http\\Controllers\\User\\DashboardControler@getFreeMarketing',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.calculator' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/calculator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.calculator',
        'uses' => 'App\\Http\\Controllers\\User\\DashboardControler@getCalculator',
        'controller' => 'App\\Http\\Controllers\\User\\DashboardControler@getCalculator',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.myorder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/my-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.myorder',
        'uses' => 'App\\Http\\Controllers\\User\\DashboardControler@myOrder',
        'controller' => 'App\\Http\\Controllers\\User\\DashboardControler@myOrder',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.orders.invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/invoice/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.orders.invoice',
        'uses' => 'App\\Http\\Controllers\\User\\DashboardControler@invoice',
        'controller' => 'App\\Http\\Controllers\\User\\DashboardControler@invoice',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.marketing.materials.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/free-marketing-material-details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.marketing.materials.details',
        'uses' => 'App\\Http\\Controllers\\User\\DashboardControler@marketingMaterialDetails',
        'controller' => 'App\\Http\\Controllers\\User\\DashboardControler@marketingMaterialDetails',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.cancel-plan.stripe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/cancel-plan/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.cancel-plan.stripe',
        'uses' => 'App\\Http\\Controllers\\User\\StripeController@cancelCurrentPlan',
        'controller' => 'App\\Http\\Controllers\\User\\StripeController@cancelCurrentPlan',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.checkout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.checkout',
        'uses' => 'App\\Http\\Controllers\\User\\CheckoutController@checkout',
        'controller' => 'App\\Http\\Controllers\\User\\CheckoutController@checkout',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.checkout.post-transection' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/checkout/paypal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.checkout.post-transection',
        'uses' => 'App\\Http\\Controllers\\User\\CheckoutController@postTransection',
        'controller' => 'App\\Http\\Controllers\\User\\CheckoutController@postTransection',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payment.stripe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/checkout/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.payment.stripe',
        'uses' => 'App\\Http\\Controllers\\User\\StripeController@stripeCheckout',
        'controller' => 'App\\Http\\Controllers\\User\\StripeController@stripeCheckout',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.transactions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.transactions',
        'uses' => 'App\\Http\\Controllers\\User\\TransactionController@getIndex',
        'controller' => 'App\\Http\\Controllers\\User\\TransactionController@getIndex',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.planinvoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/plan-invoice/{transection_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.planinvoice',
        'uses' => 'App\\Http\\Controllers\\User\\TransactionController@getInvoice',
        'controller' => 'App\\Http\\Controllers\\User\\TransactionController@getInvoice',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.invoice.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/invoice/download/{transection_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.invoice.download',
        'uses' => 'App\\Http\\Controllers\\User\\TransactionController@getInvoicePDF',
        'controller' => 'App\\Http\\Controllers\\User\\TransactionController@getInvoicePDF',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.all-invoice.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/all-invoice/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.all-invoice.download',
        'uses' => 'App\\Http\\Controllers\\User\\TransactionController@getAllInvoicePDF',
        'controller' => 'App\\Http\\Controllers\\User\\TransactionController@getAllInvoicePDF',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.card.crop-image' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/card/crop-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.card.crop-image',
        'uses' => 'App\\Http\\Controllers\\User\\CardController@cropImage',
        'controller' => 'App\\Http\\Controllers\\User\\CardController@cropImage',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.card.crop-upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/card/crop-upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.card.crop-upload',
        'uses' => 'App\\Http\\Controllers\\User\\CardController@cropImageUpload',
        'controller' => 'App\\Http\\Controllers\\User\\CardController@cropImageUpload',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.billing-info.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/billing-info/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.billing-info.update',
        'uses' => 'App\\Http\\Controllers\\User\\UserController@putUpdateBilling',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@putUpdateBilling',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payment-info.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payment-info/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.payment-info.update',
        'uses' => 'App\\Http\\Controllers\\User\\UserController@putUpdatePayment',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@putUpdatePayment',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile-info.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile-info/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.profile-info.update',
        'uses' => 'App\\Http\\Controllers\\User\\UserController@profileUpdate',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@profileUpdate',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.support.send-mail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/support/send-mail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.support.send-mail',
        'uses' => 'App\\Http\\Controllers\\User\\UserController@sendSupportMail',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@sendSupportMail',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.support.feature-request' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/support/feature-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.support.feature-request',
        'uses' => 'App\\Http\\Controllers\\User\\UserController@sendRequestToFeature',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@sendRequestToFeature',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.crm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/crm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.crm',
        'uses' => 'App\\Http\\Controllers\\User\\ConnectionController@getIndex',
        'controller' => 'App\\Http\\Controllers\\User\\ConnectionController@getIndex',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.crm.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/crm/{id}/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.crm.details',
        'uses' => 'App\\Http\\Controllers\\User\\ConnectionController@getView',
        'controller' => 'App\\Http\\Controllers\\User\\ConnectionController@getView',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.crm.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/crm/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.crm.edit',
        'uses' => 'App\\Http\\Controllers\\User\\ConnectionController@getEdit',
        'controller' => 'App\\Http\\Controllers\\User\\ConnectionController@getEdit',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.crm.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/crm/{id}/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.crm.download',
        'uses' => 'App\\Http\\Controllers\\User\\ConnectionController@getDownloadVcf',
        'controller' => 'App\\Http\\Controllers\\User\\ConnectionController@getDownloadVcf',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.crm.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/crm/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.crm.update',
        'uses' => 'App\\Http\\Controllers\\User\\ConnectionController@putUpdate',
        'controller' => 'App\\Http\\Controllers\\User\\ConnectionController@putUpdate',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.connection.reply-mail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/crm/{id}/send-mail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.connection.reply-mail',
        'uses' => 'App\\Http\\Controllers\\User\\ConnectionController@sendConnectReplyEmail',
        'controller' => 'App\\Http\\Controllers\\User\\ConnectionController@sendConnectReplyEmail',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.crm.bulk-export' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/crm/bulk-export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.crm.bulk-export',
        'uses' => 'App\\Http\\Controllers\\User\\ConnectionController@getExportCsv',
        'controller' => 'App\\Http\\Controllers\\User\\ConnectionController@getExportCsv',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.crm.download-csv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/crm/download-csv/{name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.crm.download-csv',
        'uses' => 'App\\Http\\Controllers\\User\\ConnectionController@getDownloadCsv',
        'controller' => 'App\\Http\\Controllers\\User\\ConnectionController@getDownloadCsv',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.deletion-request' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/deletion-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.deletion-request',
        'uses' => 'App\\Http\\Controllers\\User\\UserController@postDeletionRequest',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@postDeletionRequest',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.sicon.sorting' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/card/sicon_sorting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.sicon.sorting',
        'uses' => 'App\\Http\\Controllers\\User\\UserController@siconSorting',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@siconSorting',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.review' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.review',
        'uses' => 'App\\Http\\Controllers\\User\\UserController@getReview',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@getReview',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.review.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.review.store',
        'uses' => 'App\\Http\\Controllers\\User\\UserController@storeReview',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@storeReview',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.review.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/review/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.review.update',
        'uses' => 'App\\Http\\Controllers\\User\\UserController@updateReview',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@updateReview',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.password.reset',
        'uses' => 'App\\Http\\Controllers\\User\\UserController@passwordReset',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@passwordReset',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.password.password-reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/password/password-reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.password.password-reset',
        'uses' => 'App\\Http\\Controllers\\User\\UserController@getresetPassword',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@getresetPassword',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.reset.new.password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/reset/new/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.reset.new.password',
        'uses' => 'App\\Http\\Controllers\\User\\UserController@resetNewPassword',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@resetNewPassword',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.notification-status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/notification-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.notification-status',
        'uses' => 'App\\Http\\Controllers\\User\\UserController@putNitificationStatus',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@putNitificationStatus',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.morgaged.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/morgaged-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.morgaged.email',
        'uses' => 'App\\Http\\Controllers\\User\\UserController@mortgagedEmail',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@mortgagedEmail',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.equal.housing.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/equal-housing-view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.equal.housing.update',
        'uses' => 'App\\Http\\Controllers\\User\\UserController@equalhousingShow',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@equalhousingShow',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.disclaimer.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/user-disclaimer-view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.disclaimer.update',
        'uses' => 'App\\Http\\Controllers\\User\\UserController@userdisclaimerShow',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@userdisclaimerShow',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.nmls.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/user-nmls-view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.nmls.update',
        'uses' => 'App\\Http\\Controllers\\User\\UserController@userNmlsShow',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@userNmlsShow',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.nmls.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/user-nmls-add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.nmls.add',
        'uses' => 'App\\Http\\Controllers\\User\\UserController@userNmlsAdd',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@userNmlsAdd',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.credit_auth.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/user-credit-auth-view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.credit_auth.update',
        'uses' => 'App\\Http\\Controllers\\User\\UserController@usercraditAuthShow',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@usercraditAuthShow',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.quick.application.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/user-quick-application-view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.quick.application.update',
        'uses' => 'App\\Http\\Controllers\\User\\UserController@quickApplication',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@quickApplication',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '/user',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.delete-account' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delete-account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.delete-account',
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthController@getDeactivationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthController@getDeactivationForm',
        'namespace' => 'App\\Http\\Controllers\\Auth',
        'prefix' => '',
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
    'user.change-password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.change-password',
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthController@getChangePassword',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthController@getChangePassword',
        'namespace' => 'App\\Http\\Controllers\\Auth',
        'prefix' => '',
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
    'user.change-password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'change-password/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'user.change-password.update',
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthController@putChangePassword',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthController@putChangePassword',
        'namespace' => 'App\\Http\\Controllers\\Auth',
        'prefix' => '',
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
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'dashboard',
        'uses' => 'App\\Http\\Controllers\\Auth\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Auth\\DashboardController@index',
        'namespace' => 'App\\Http\\Controllers\\Auth',
        'prefix' => '',
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
    'profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'profile',
        'uses' => 'App\\Http\\Controllers\\Auth\\DashboardController@profile',
        'controller' => 'App\\Http\\Controllers\\Auth\\DashboardController@profile',
        'namespace' => 'App\\Http\\Controllers\\Auth',
        'prefix' => '',
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
    'getConnect' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'getConnect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@getConnect',
        'controller' => 'App\\Http\\Controllers\\HomeController@getConnect',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'getConnect',
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
    'credit-report' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'credit-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@creditReport',
        'controller' => 'App\\Http\\Controllers\\HomeController@creditReport',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'credit-report',
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
    'quick-report' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'quick-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@quickReport',
        'controller' => 'App\\Http\\Controllers\\HomeController@quickReport',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'quick-report',
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
    'download.vCard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'download/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@downloadVcard',
        'controller' => 'App\\Http\\Controllers\\HomeController@downloadVcard',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'download.vCard',
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
    'card.preview' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{cardurl}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'card.preview',
        'uses' => 'App\\Http\\Controllers\\HomeController@getPreview',
        'controller' => 'App\\Http\\Controllers\\HomeController@getPreview',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
    'admin.themes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/themes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ThemeController@themes',
        'controller' => 'App\\Http\\Controllers\\Admin\\ThemeController@themes',
        'as' => 'admin.themes',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.theme.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/theme/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ThemeController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ThemeController@update',
        'as' => 'admin.theme.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plans' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@plans',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@plans',
        'as' => 'admin.plans',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.add.plan' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/add-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@addPlan',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@addPlan',
        'as' => 'admin.add.plan',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.save.plan' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/save-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@savePlan',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@savePlan',
        'as' => 'admin.save.plan',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.edit.plan' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-plan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@editPlan',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@editPlan',
        'as' => 'admin.edit.plan',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shareable-update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/shareable-update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@shareableUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@shareableUpdate',
        'as' => 'admin.shareable-update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update.plan' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/update-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@updatePlan',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@updatePlan',
        'as' => 'admin.update.plan',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plan.getstripe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/plan/{id}/{period}/getstripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@getstripe',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@getstripe',
        'as' => 'admin.plan.getstripe',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plan.getpaypal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/plan/{id}/{period}/getpaypal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@createPaypalPlan',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@createPaypalPlan',
        'as' => 'admin.plan.getpaypal',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delete.plan' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/delete-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@deletePlan',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@deletePlan',
        'as' => 'admin.delete.plan',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plan-list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/plan-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.plan-list',
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@getPlanList',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@getPlanList',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@users',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@users',
        'as' => 'admin.users',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.edit.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@editUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@editUser',
        'as' => 'admin.edit.user',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update.user' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/update-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@updateUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@updateUser',
        'as' => 'admin.update.user',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.view.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/view-user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@viewUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@viewUser',
        'as' => 'admin.view.user',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.change.user.plan' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/change-user-plan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@ChangeUserPlan',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@ChangeUserPlan',
        'as' => 'admin.change.user.plan',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update.user.plan' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/update-user-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@UpdateUserPlan',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@UpdateUserPlan',
        'as' => 'admin.update.user.plan',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/update-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@updateStatus',
        'as' => 'admin.update.status',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update.active-user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/active-user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@activeStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@activeStatus',
        'as' => 'admin.update.active-user',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delete.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/delete-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@deleteUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@deleteUser',
        'as' => 'admin.delete.user',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login-as.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login-as/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@authAs',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@authAs',
        'as' => 'admin.login-as.user',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.trash-list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/trash-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@getTrashList',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@getTrashList',
        'as' => 'admin.user.trash-list',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.review.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReviewController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReviewController@index',
        'as' => 'admin.review.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.review.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/review/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReviewController@getCreate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReviewController@getCreate',
        'as' => 'admin.review.create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.review.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/review/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReviewController@postStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReviewController@postStore',
        'as' => 'admin.review.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.review.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/review/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReviewController@getEdit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReviewController@getEdit',
        'as' => 'admin.review.edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.review.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/review/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReviewController@putUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReviewController@putUpdate',
        'as' => 'admin.review.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.review.status-update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/review/{id}/status-update/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReviewController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReviewController@updateStatus',
        'as' => 'admin.review.status-update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.review.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/review/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReviewController@getDelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReviewController@getDelete',
        'as' => 'admin.review.delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.methods' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-methods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentMethodController@paymentMethods',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentMethodController@paymentMethods',
        'as' => 'admin.payment.methods',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delete.payment.method' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/delete-payment-method',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentMethodController@deletePaymentMethod',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentMethodController@deletePaymentMethod',
        'as' => 'admin.delete.payment.method',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.transactions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TransactionsController@indexTransactions',
        'controller' => 'App\\Http\\Controllers\\Admin\\TransactionsController@indexTransactions',
        'as' => 'admin.transactions',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.trans.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/transaction-status/{id}/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TransactionsController@transactionStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\TransactionsController@transactionStatus',
        'as' => 'admin.trans.status',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.view.invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/view-invoice/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TransactionsController@viewInvoice',
        'controller' => 'App\\Http\\Controllers\\Admin\\TransactionsController@viewInvoice',
        'as' => 'admin.view.invoice',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.account' => 
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
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountController@account',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountController@account',
        'as' => 'admin.account',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.edit.account' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountController@editAccount',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountController@editAccount',
        'as' => 'admin.edit.account',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update.account' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/update-account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountController@updateAccount',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountController@updateAccount',
        'as' => 'admin.update.account',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.change.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountController@changePassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountController@changePassword',
        'as' => 'admin.change.password',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
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
      'uri' => 'admin/update-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountController@updatePassword',
        'as' => 'admin.update.password',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.custom-page.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/custom-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.custom-page.list',
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomPageController@getIndex',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomPageController@getIndex',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.custom-page.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/custom-page/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.custom-page.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomPageController@getCreate',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomPageController@getCreate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.custom-page.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/custom-page/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.custom-page.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomPageController@postStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomPageController@postStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.custom-page.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/custom-page/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.custom-page.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomPageController@getEdit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomPageController@getEdit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.custom-page.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/custom-page/{id}/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.custom-page.view',
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomPageController@getView',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomPageController@getView',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.custom-page.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/custom-page/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.custom-page.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomPageController@putUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomPageController@putUpdate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.custom-page.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/custom-page/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.custom-page.delete',
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomPageController@getDelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomPageController@getDelete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.text-editor.image' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/ajax/text-editor/image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.text-editor.image',
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomPageController@postEditorImageUpload',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomPageController@postEditorImageUpload',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pages' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@pages',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@pages',
        'as' => 'admin.pages',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.edit.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page/{home}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@editHomePage',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@editHomePage',
        'as' => 'admin.edit.home',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update.home' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page/{home}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@updateHomePage',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@updateHomePage',
        'as' => 'admin.update.home',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@settings',
        'as' => 'admin.settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.change.settings' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@changeSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@changeSettings',
        'as' => 'admin.change.settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tax.setting' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tax-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@taxSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@taxSetting',
        'as' => 'admin.tax.setting',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update.tax.setting' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/update-tex-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@updateTaxSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@updateTaxSetting',
        'as' => 'admin.update.tax.setting',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update.email.setting' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/update-email-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@updateEmailSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@updateEmailSetting',
        'as' => 'admin.update.email.setting',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.test.email' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/test-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@testEmail',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@testEmail',
        'as' => 'admin.test.email',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.clear' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@clear',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@clear',
        'as' => 'admin.clear',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@ContactMsg',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@ContactMsg',
        'as' => 'admin.contact',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@ContactDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@ContactDestroy',
        'as' => 'admin.contact.destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@Index',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@Index',
        'as' => 'admin.blog',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@Create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@Create',
        'as' => 'admin.blog.create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@Store',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@Store',
        'as' => 'admin.blog.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@Edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@Edit',
        'as' => 'admin.blog.edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@Update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@Update',
        'as' => 'admin.blog.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@Delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@Delete',
        'as' => 'admin.',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ajax.text-editor.image' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/ajax/text-editor/image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.ajax.text-editor.image',
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@textEditorImageUpload',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@textEditorImageUpload',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@Index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@Index',
        'as' => 'admin.category.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@Create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@Create',
        'as' => 'admin.category.create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/category/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@Store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@Store',
        'as' => 'admin.category.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@Edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@Edit',
        'as' => 'admin.category.edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/category/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@Update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@Update',
        'as' => 'admin.category.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::xwBEyorFFH3gHsa0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@Delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@Delete',
        'as' => 'admin.generated::xwBEyorFFH3gHsa0',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subscriber.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscribers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@SubscriberList',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@SubscriberList',
        'as' => 'admin.subscriber.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.guide' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user-guides',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@userGuide',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@userGuide',
        'as' => 'admin.user.guide',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.guide.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user-guide/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@userGuideCreate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@userGuideCreate',
        'as' => 'admin.user.guide.create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.guide.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user-guide/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@userGuideStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@userGuideStore',
        'as' => 'admin.user.guide.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.guide.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user-guide/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@userGuideView',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@userGuideView',
        'as' => 'admin.user.guide.view',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.guide.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user-guide/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@userGuideEdit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@userGuideEdit',
        'as' => 'admin.user.guide.edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.guide.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user-guide/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@userGuideUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@userGuideUpdate',
        'as' => 'admin.user.guide.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::ustzira3zpCZwECN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/guide/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@DeleteUserGuide',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@DeleteUserGuide',
        'as' => 'admin.generated::ustzira3zpCZwECN',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social-icon.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social-icon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialIconController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialIconController@index',
        'as' => 'admin.social-icon.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social-icon.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social-icon/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialIconController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialIconController@create',
        'as' => 'admin.social-icon.create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social-icon.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/social-icon/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialIconController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialIconController@store',
        'as' => 'admin.social-icon.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social-icon.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social-icon/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialIconController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialIconController@edit',
        'as' => 'admin.social-icon.edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social-icon.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/social-icon/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialIconController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialIconController@update',
        'as' => 'admin.social-icon.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social-icon.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social-icon/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialIconController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialIconController@destroy',
        'as' => 'admin.social-icon.destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.faq.list',
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@getIndex',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@getIndex',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faq/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.faq.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@getCreate',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@getCreate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/faq/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.faq.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@postStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@postStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faq/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.faq.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@getEdit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@getEdit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faq/{id}/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.faq.view',
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@getView',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@getView',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/faq/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.faq.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@putUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@putUpdate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faq/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.faq.delete',
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@getDelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@getDelete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cards' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CardController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CardController@index',
        'as' => 'admin.cards',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.card.trash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/card/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CardController@getTrashList',
        'controller' => 'App\\Http\\Controllers\\Admin\\CardController@getTrashList',
        'as' => 'admin.card.trash',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.card.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/card/edit/{card_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CardController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CardController@edit',
        'as' => 'admin.card.edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.card.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/card/delete/{card_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CardController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\CardController@delete',
        'as' => 'admin.card.delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.card.change-status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/card/change-status/{card_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CardController@changeStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\CardController@changeStatus',
        'as' => 'admin.card.change-status',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.card.active' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/card/active/{card_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CardController@activeCard',
        'controller' => 'App\\Http\\Controllers\\Admin\\CardController@activeCard',
        'as' => 'admin.card.active',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/email-template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplateController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplateController@index',
        'as' => 'admin.email.template',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.templateedit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/email-template/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplateController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplateController@edit',
        'as' => 'admin.email.templateedit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.templateupdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/email-template/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplateController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplateController@update',
        'as' => 'admin.email.templateupdate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.template.sortCodes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/email-template/sort-code/doc',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplateController@sortCodeDoc',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplateController@sortCodeDoc',
        'as' => 'admin.email.template.sortCodes',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.admin-users' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.admin-users',
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountController@getAdminUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountController@getAdminUser',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.admin-users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin-users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.admin-users.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountController@getCreate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountController@getCreate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.admin-users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin-users/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.admin-users.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountController@postStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountController@postStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.admin-users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin-users/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.admin-users.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountController@getEdit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountController@getEdit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.admin-users.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin-users/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.admin-users.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountController@putUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountController@putUpdate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.materials' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marketing-material',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.marketing.materials',
        'uses' => 'App\\Http\\Controllers\\Admin\\MarketingMaterialsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\MarketingMaterialsController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.material.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marketing-material/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.marketing.material.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\MarketingMaterialsController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\MarketingMaterialsController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.material.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/marketing-material/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.marketing.material.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\MarketingMaterialsController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\MarketingMaterialsController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.material.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marketing-material/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.marketing.material.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\MarketingMaterialsController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\MarketingMaterialsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.material.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/marketing-material/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.marketing.material.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\MarketingMaterialsController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\MarketingMaterialsController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.material.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marketing-material/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.marketing.material.delete',
        'uses' => 'App\\Http\\Controllers\\Admin\\MarketingMaterialsController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\MarketingMaterialsController@delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.material.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/status-update/{id}/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.marketing.material.status',
        'uses' => 'App\\Http\\Controllers\\Admin\\MarketingMaterialsController@status',
        'controller' => 'App\\Http\\Controllers\\Admin\\MarketingMaterialsController@status',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.product.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.product.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/product/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.product.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/edit/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.product.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/product/update/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.product.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/product/delete/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.product.delete',
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.images' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/images/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.product.images',
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@images',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@images',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.images.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/product/images/upload/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.product.images.upload',
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@imagesUpload',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@imagesUpload',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.images.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/product/images/delete/{productImage}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.product.images.delete',
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@imagesDelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@imagesDelete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.orders',
        'uses' => 'App\\Http\\Controllers\\Admin\\OrdersController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrdersController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.orders.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/orders/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.orders.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\OrdersController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrdersController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.orders.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/orders/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.orders.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\OrdersController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrdersController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.orders.invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/orders/invoice/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.orders.invoice',
        'uses' => 'App\\Http\\Controllers\\Admin\\OrdersController@invoice',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrdersController@invoice',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.order.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/order/status/change/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.order.status',
        'uses' => 'App\\Http\\Controllers\\Admin\\OrdersController@statusChange',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrdersController@statusChange',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.coupon.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.coupon.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.coupon.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/coupon/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.coupon.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.coupon.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/coupon/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.coupon.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.coupon.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/coupon/edit/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.coupon.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.coupon.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/coupon/update/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.coupon.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.coupon.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/coupon/delete/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.coupon.delete',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tutorialcategory.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tutorial-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.tutorialcategory.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\TutorialCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\TutorialCategoryController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tutorialcategory.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tutorial-category/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.tutorialcategory.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\TutorialCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\TutorialCategoryController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tutorialcategory.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tutorial-category/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.tutorialcategory.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\TutorialCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\TutorialCategoryController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tutorialcategory.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tutorial-category/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.tutorialcategory.delete',
        'uses' => 'App\\Http\\Controllers\\Admin\\TutorialCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\TutorialCategoryController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tutorials.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tutorials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.tutorials.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\TutorialController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\TutorialController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tutorials.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tutorials/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.tutorials.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\TutorialController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\TutorialController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tutorials.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tutorials/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.tutorials.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\TutorialController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\TutorialController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tutorials.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tutorials/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.tutorials.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\TutorialController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\TutorialController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tutorials.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tutorials/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.tutorials.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\TutorialController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\TutorialController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tutorials.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tutorials/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'as' => 'admin.tutorials.delete',
        'uses' => 'App\\Http\\Controllers\\Admin\\TutorialController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\TutorialController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
          'locale' => '[a-zA-Z]{2}',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-zA-Z]{2}',
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
