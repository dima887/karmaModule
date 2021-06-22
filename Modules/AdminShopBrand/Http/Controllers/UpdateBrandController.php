<?php

namespace Modules\AdminShopBrand\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Modules\AdminShopBrand\Http\Requests\ShopBrandRequest;

class UpdateBrandController extends BaseController
{

    /**
     * Сохранение отредактированного бренда
     *
     * @param ShopBrandRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(ShopBrandRequest $request, $id)
    {
        $save = $this->shopBrandRepository->getId($id);
        $save->brand = $request->brand;
        if ($request->hasFile('thumbnail')) {
            Storage::delete($save->thumbnail);
            $save['thumbnail'] = $request->file('thumbnail')->store("app/images/brand");
        }
        $save->save();

        return redirect()->route('admin.brands')->with('success', 'Бренд изменён');
    }
}
