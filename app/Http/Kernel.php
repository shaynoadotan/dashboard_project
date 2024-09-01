<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        // Handles CORS Pre-Flight requests and sets CORS headers
        \Fruitcake\Cors\HandleCors::class,
        // Handles all Trust Proxies logic
        \App\Http\Middleware\TrustProxies::class,
        // Handles Firewall IP ranges and IP Whitelisting
        \Illuminate\Http\Middleware\TrustHosts::class,
        // Prevents Laravel from sending HTTP responses if the request is closed
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
        // Verifies that the application is not in maintenance mode
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        // Parses the incoming request data
        \Illuminate\Http\Middleware\HandleCors::class,
        // Encrypts cookies before they are sent to the browser
        \App\Http\Middleware\EncryptCookies::class,
        // Manages Laravel sessions (Session, Cookies)
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        // Initializes the session
        \Illuminate\Session\Middleware\StartSession::class,
        // Provides support for multi-language applications
        \App\Http\Middleware\Localization::class,
        // Fills the `$request->user()` with the authenticated user
        \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        // Provides support for Application Service Providers
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
        // Filters out requests that should be throttled
        \Illuminate\Routing\Middleware\ThrottleRequests::class,
        // Cleans all strings in requests by trimming them
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            // Encrypts cookies
            \App\Http\Middleware\EncryptCookies::class,
            // Manages Laravel sessions (Session, Cookies)
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            // Initializes the session
            \Illuminate\Session\Middleware\StartSession::class,
            // Shares error messages with views
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            // Verifies the CSRF token
            \App\Http\Middleware\VerifyCsrfToken::class,
            // Binds models to route parameters
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            // Adds throttling for API routes
            'throttle:api',
            // Binds models to route parameters
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        // Authenticates users for specific routes
        'auth' => \App\Http\Middleware\Authenticate::class,
        // Redirects authenticated users away from specific routes
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        // Caches routes to improve performance
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        // Authorizes the user against permissions
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        // Ensures the user is a guest
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        // Checks if the user is an admin
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        // Throttles requests based on IP address
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        // Ensures the user is authenticated
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
    ];
}
