<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class BlogController extends BaseController
{
    /**
     * Главная сираница блога, просмотр всех постов
     *
     * @return Renderable
     */
    public function index()
    {
        $categoryLimitThree = $this->blogRepository->getCategoryPopularLimit(3);

        $post = $this->blogRepository->getPostAllWithPaginate(2);

        $postPopular = $this->blogRepository->getPostPopular(3);

        $category = $this->blogRepository->getCategoryAndCountPost();

        return view('blog::index', compact('categoryLimitThree', 'post', 'postPopular', 'category'));
    }
}
