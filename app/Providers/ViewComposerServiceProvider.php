<?php

namespace App\Providers;


use App\FormaDePago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{

    public $paginate_limit;

    public function __construct()
    {
        $this->paginate_limit = 10;
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials.navigation', function ($view) {
            $view->with('url', true);
        });
        view()->composer('formasdepago.index', function ($view) {
            $view->with('formasdepago', FormaDePago::orderBy('created_at')->get());
        });
    }

    public function register()
    {


    }
}