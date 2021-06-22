<?php


namespace Modules\AdminShopProduct\Observers;


use Illuminate\Support\Str;
use Modules\AdminShopProduct\Entities\Product;

class ProductObserver
{
    /**
     * Обработка перед добавлением записи
     *
     * @param Product $product
     */
    public function creating(Product $product)
    {
        $this->setSlug($product);

    }

    /**
     * Обработка перед обновлением записи
     *
     * @param Product $product
     */
    public function updating(Product $product)
    {
        $this->setSlug($product);
    }

    /**
     * Handle the Product "created" event.
     *
     * @param Product $product
     * @return void
     */
    public function created(Product $product)
    {
        //
    }

    /**
     * Handle the Product "updated" event.
     *
     * @param Product $product
     * @return void
     */
    public function updated(Product $product)
    {
        //
    }

    /**
     * Handle the Product "deleted" event.
     *
     * @param Product $product
     * @return void
     */
    public function deleted(Product $product)
    {
        //
    }

    /**
     * Handle the Product "restored" event.
     *
     * @param Product $product
     * @return void
     */
    public function restored(Product $product)
    {
        //
    }

    /**
     * Handle the Product "force deleted" event.
     *
     * @param Product $product
     * @return void
     */
    public function forceDeleted(Product $product)
    {
        //
    }

    protected function setSlug(Product $product)
    {
        return $product['slug'] = Str::slug($product['title'], '-');
    }
}
