<?php

namespace Modules\AdminShopBrand\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Modules\AdminShopBrand\Entities\Brand;
use Modules\AdminShopBrand\Http\Requests\ShopBrandRequest;

class StoreBrandController extends BaseController
{

    /**
     * Сохранение нового бренда
     *
     * @param ShopBrandRequest $request
     * @return RedirectResponse
     */
    public function store(ShopBrandRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store("app/images/brand");
        }
        Brand::create($data);

        $request->session()->flash('success', 'Бренд добавлен');
        return redirect()->route('admin.brands');
    }
}
