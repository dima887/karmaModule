<?php

namespace Modules\AdminShopCategory\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateCategoryController extends BaseController
{

    /**
     * Сохранение отредактированной категории
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {

        $save = $this->shopCategoryRepository->getEdit($id);
        $save->category = $request->category;
        if ($request->hasFile('thumbnail')) {
            Storage::delete($save->thumbnail);
            $save['thumbnail'] = $request->file('thumbnail')->store("app/images/brand");
        }else{
            $save['thumbnail'] = null;
        }

        $save->save();

        return redirect()->route('admin.categories')->with('success', 'Категория успешно отредактирована');
    }
}
