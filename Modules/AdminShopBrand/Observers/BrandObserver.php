<?php

namespace Modules\AdminShopBrand\Observers;

use Illuminate\Support\Str;
use Modules\AdminShopBrand\Entities\Brand;

class BrandObserver
{
    /**
     * Обработка перед добавлением записи
     *
     * @param Brand $brand
     */
    public function creating(Brand $brand)
    {
        $this->setSlug($brand);

    }

    /**
     * Обработка перед обновлением записи
     *
     * @param Brand $brand
     */
    public function updating(Brand $brand)
    {
        $this->setSlug($brand);
    }

    /**
     * Handle the Brand "created" event.
     *
     * @param Brand $brand
     * @return void
     */
    public function created(Brand $brand)
    {
        //
    }

    /**
     * Handle the Brand "updated" event.
     *
     * @param Brand $brand
     * @return void
     */
    public function updated(Brand $brand)
    {
        //
    }

    /**
     * Handle the Brand "deleted" event.
     *
     * @param Brand $brand
     * @return void
     */
    public function deleted(Brand $brand)
    {
        //
    }

    /**
     * Handle the Brand "restored" event.
     *
     * @param Brand $brand
     * @return void
     */
    public function restored(Brand $brand)
    {
        //
    }

    /**
     * Handle the Brand "force deleted" event.
     *
     * @param Brand $brand
     * @return void
     */
    public function forceDeleted(Brand $brand)
    {
        //
    }

    protected function setSlug(Brand $brand)
    {
        return $brand['slug'] = Str::slug($brand['brand'], '-');
    }
}
