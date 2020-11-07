<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/home';

    protected $namespaceWeb = 'App\\Http\\Controllers\\Web';
    protected $namespaceApi = 'App\\Http\\Controllers\\Api';

    public function boot()
    {
        $this->configureRateLimiting();
        $this->routes(function() {
            $this->webRoutes();
            $this->apiRoutes();
        });
    }

    protected function webRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespaceWeb)
            ->group(base_path('routes/web.php'));
    }

    protected function apiRoutes()
    {
        //...
    }

    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
