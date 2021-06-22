<?php

namespace Modules\AdminShopCategory\Observers;

use Illuminate\Support\Str;
use Modules\AdminShopCategory\Entities\Category;

class CategoryObserver
{
    /**
     * Обработка перед добавлением записи
     *
     * @param Category $category
     */
    public function creating(Category $category)
    {
        $this->setSlug($category);
        $this->setType($category);

    }

    /**
     * Обработка перед обновлением записи
     *
     * @param Category $category
     */
    public function updating(Category $category)
    {
        $this->setSlug($category);
        $this->setType($category);
    }

    /**
     * Handle the Category "created" event.
     *
     * @param Category $category
     * @return void
     */
    public function created(Category $category)
    {
        //
    }

    /**
     * Handle the Category "updated" event.
     *
     * @param Category $category
     * @return void
     */
    public function updated(Category $category)
    {
        //
    }

    /**
     * Handle the Category "deleted" event.
     *
     * @param Category $category
     * @return void
     */
    public function deleted(Category $category)
    {
        //
    }

    /**
     * Handle the Category "restored" event.
     *
     * @param Category $category
     * @return void
     */
    public function restored(Category $category)
    {
        //
    }

    /**
     * Handle the Category "force deleted" event.
     *
     * @param Category $category
     * @return void
     */
    public function forceDeleted(Category $category)
    {
        //
    }

    protected function setSlug(Category $category)
    {
        return $category['slug'] = Str::slug($category['category'], '-');
    }

    protected function setType(Category $category)
    {
        return $category['type'] = 0;
    }
}
