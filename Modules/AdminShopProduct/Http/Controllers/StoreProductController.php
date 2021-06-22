<?php

namespace Modules\AdminShopProduct\Http\Controllers;

use Modules\AdminShopProduct\Entities\Product;
use Modules\AdminShopProduct\Http\Requests\ShopProdustRequest;

class StoreProductController extends BaseController
{
    /**
     * Сохранение нового товара
     *
     * @param ShopProdustRequest $request
     */
    public function store(ShopProdustRequest $request)
    {
        $data = new Product();
        $data->title = $request->title;
        $data->title = $request->title;
        $data->category_id = $request->category_id;
        $data->brand_id = $request->brand_id;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->count = $request->count;
        $images = [];
        if ($request->hasFile('thumbnail')) {
            foreach ( $request->file('thumbnail') as $key => $value) {
                $images[] = $value->store("app/images/product");
            }
        }
        $data->thumbnail = $images;
        $data->save();

        $request->session()->flash('success', 'Товар добавлен');
        return redirect()->route('admin.products');
    }
}
