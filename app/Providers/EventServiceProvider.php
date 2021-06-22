<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Modules\AdminShopBrand\Entities\Brand;
use Modules\AdminShopBrand\Observers\BrandObserver;
use Modules\AdminShopCategory\Entities\Category;
use Modules\AdminShopCategory\Observers\CategoryObserver;
use Modules\AdminShopProduct\Entities\Product;
use Modules\AdminShopProduct\Observers\ProductObserver;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Category::observe(CategoryObserver::class);
        Brand::observe(BrandObserver::class);
        Product::observe(ProductObserver::class);
    }
}
