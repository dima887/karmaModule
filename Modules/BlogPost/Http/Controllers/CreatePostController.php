<?php

namespace Modules\BlogPost\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class CreatePostController extends BaseController
{
    /**
     * Создание поста
     *
     * @return Renderable
     */
    public function create()
    {
        $category = $this->blogPostRepository->getCategory();

        return view('blogpost::createPost', compact('category'));
    }
}
