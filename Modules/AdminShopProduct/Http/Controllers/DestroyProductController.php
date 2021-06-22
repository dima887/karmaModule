<?php

namespace Modules\AdminShopProduct\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Modules\AdminShopProduct\Entities\Product;

class DestroyProductController extends BaseController
{


    /**
     * Удаление товара
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $delete = $this->shopProductRepository->getId($id);

        Storage::delete($delete->thumbnail);

        Product::destroy($id);

        return redirect()->back()->with('success', 'Товар удален');
    }
}
