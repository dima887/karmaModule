<?php

namespace Modules\ShopProduct\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class ShopProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index($id, $slug)
    {
        $product = $this->shopProductRepository->getProductById($slug);

        $review = $this->shopProductRepository->getReview($id);

        $reviewCountAndAverage = $this->shopProductRepository->getReviewAverageAndCount($id);

        $countReviewByRating = $this->shopProductRepository->getCountReviewByRating($id);

        $product[0]->view += 1;
        $product[0]->update();

        return view('shopproduct::index', compact('product', 'review', 'reviewCountAndAverage', 'countReviewByRating'));
    }
}
