<?php

namespace App\Providers;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\View\Components\FooterOnlyLayout;
use App\View\Components\CommentSection;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('footer-only-layout', FooterOnlyLayout::class);
        Blade::component('comment-section', CommentSection::class);
        Blade::component('components.comment-section', 'comment-section');
        
    }
}
