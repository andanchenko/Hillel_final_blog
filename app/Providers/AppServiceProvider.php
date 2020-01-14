<?php

namespace App\Providers;

use App\Sevices\CommentService;
use App\Sevices\CommentServiceInterface;
use App\Sevices\PostService;
use App\Sevices\PostServiceInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PostServiceInterface::class, PostService::class);
        $this->app->bind(CommentServiceInterface::class, CommentService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Illuminate\Support\Facades\View::composer(
            'layouts.header','App\Http\ViewComposers\CategoriesComposer'
        );
    }
}
