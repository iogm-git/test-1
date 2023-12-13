<?php

namespace App\Providers;

use App\Models\ms_customer;
use App\Models\ms_item;
use App\Models\ms_salesman;
use App\Models\ms_user;
use App\Models\tx_sales;
use App\Models\tx_sub_sales;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
        Route::model('user', ms_user::class);
        Route::model('item', ms_item::class);
        Route::model('salesman', ms_salesman::class);
        Route::model('customer', ms_customer::class);
        Route::model('tx-sales', tx_sales::class);
        Route::model('tx-sub-sales', tx_sub_sales::class);
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
