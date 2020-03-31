<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (config('app.env') !== 'production') {
            DB::listen(function ($query) {
                $sql = $query->sql;
                for ($i = 0; $i < count($query->bindings); $i++) {
                    $sql = preg_replace("/\?/", $query->bindings[$i], $sql, 1);
                }
                Log::info($sql);
            });
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (request()->isSecure()) {
            URL::forceScheme('https');
        }
        Paginator::defaultView('vendor.pagination.original');
    }
}
