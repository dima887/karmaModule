<?php

namespace Modules\ShopProduct\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Modules\ShopProduct\Entities\Review;
use Modules\ShopProduct\Http\Requests\ShopProdustRequest;

class StoreReviewController extends BaseController
{
    /**
     * @return RedirectResponse
     */
    public function store(ShopProdustRequest $request, $product_id, $user_id)
    {
        $review = $request->all();
        $review['product_id'] = $product_id;
        $review['user_id'] = $user_id;
        Review::create($review);

        return redirect()->back()->with('success', 'Отзыв успешно добавлен');
    }
}
