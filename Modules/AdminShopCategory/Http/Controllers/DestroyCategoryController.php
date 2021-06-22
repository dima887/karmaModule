<?php

namespace Modules\AdminShopCategory\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Modules\AdminShopCategory\Entities\Category;

class DestroyCategoryController extends BaseController
{
    /**
     * Удаление категории
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $delete = $this->shopCategoryRepository->getEdit($id);

        Storage::delete($delete->thumbnail);

        Category::destroy($id);

        return redirect()->back()->with('success', 'Категория удалена');
    }
}
