<?php

namespace Modules\AdminShopProduct\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Modules\AdminShopProduct\Http\Requests\ShopProdustRequest;

class UpdateProductController extends BaseController
{

    /**
     * Сохранение отредактированного товара
     *
     * @param ShopProdustRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ShopProdustRequest $request, $id)
    {
        $save = $this->shopProductRepository->getId($id);
        $save->title = $request->title;
        $save->category_id = $request->category_id;
        $save->brand_id = $request->brand_id;
        $save->description = $request->description;
        $save->price = $request->price;
        $save->count = $request->count;
        $images = [];
        if ($request->hasFile('thumbnail')) {
            foreach ( $request->file('thumbnail') as $key => $value) {
                Storage::delete($save->thumbnail);
                $images[] = $value->store("app/images/product");
            }
        }
        $save->thumbnail = $images;
        $save->save();

        return redirect()->route('admin.products')->with('success', 'Товар успешно изменён');
    }
}
