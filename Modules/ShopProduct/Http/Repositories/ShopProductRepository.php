<?php


namespace Modules\ShopProduct\Http\Repositories;


use App\Http\Repositories\CoreRepository;
use Illuminate\Support\Facades\DB;
use Modules\ShopProduct\Entities\Product;
use Modules\ShopProduct\Entities\Review;

class ShopProductRepository extends CoreRepository
{

    protected function getModelClass()
    {
        return Product::class;
    }

    /**
     * Получить товар вместе с категорией и брендом
     */
    public function getProductById($slug)
    {
        $product = Product::query()
            ->with('category', 'brand')
            ->where('slug', '=', "$slug")
            ->get();
        return $product;
    }


    /**
     * Получить отзывы к товару
     *
     * @param $id
     * @return \Illuminate\Support\Collection
     */
    public function getReview($id)
    {
        $review = Review::query()
            ->toBase()
            ->join('users', 'reviews.user_id', '=', 'users.id')
            ->select('reviews.review', 'reviews.rating', 'users.name')
            ->where('reviews.product_id', '=', "$id")
            ->orderByDesc('reviews.id')
            ->get();

        return $review;
    }

    /**
     * Получить количество отзывов для товара и средний рейтинг
     *
     * @param $id
     * @return array
     */
    public function getReviewAverageAndCount($id)
    {
        $reviewCountAndAverage = DB::select("SELECT ROUND(AVG(rating), 1) as averageReview, COUNT(id) as countReview FROM reviews WHERE product_id = $id");

        return $reviewCountAndAverage;
    }

    /**
     * Получить количество отзывов по каждому рейтингу к товару
     *
     * @param $id
     * @return array
     */
    public function getCountReviewByRating($id)
    {
        $countReviewByRating = [];
        for ($i = 1; $i <= 5; $i++) {
            $countReviewByRating[$i] = Review::query()
                ->where('rating', '=', $i)
                ->where('product_id', '=', $id)
                ->count('id');
        }

        return $countReviewByRating;
    }
}
