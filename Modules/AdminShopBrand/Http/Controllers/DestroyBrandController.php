<?php

namespace Modules\AdminShopBrand\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Modules\AdminShopBrand\Entities\Brand;

class DestroyBrandController extends BaseController
{

    /**
     * Удаление бренда
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $delete = $this->shopBrandRepository->getId($id);

        Storage::delete($delete->thumbnail);

        Brand::destroy($id);

        return redirect()->route('admin.brands')->with('success', 'Бренд успешно удалён');
    }
}
