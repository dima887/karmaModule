<?php

namespace Modules\BlogPost\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class BlogPostController extends BaseController
{
    /**
     * Просмотр поста
     *
     * @return Renderable
     */
    public function index($id)
    {

        $post = $this->blogPostRepository->getPostAllWithPaginate($id);

        $nextPost = $this->blogPostRepository->getNextPost($id);

        $prevPost = $this->blogPostRepository->getPrevPost($id);

        $post[0]->view += 1;
        $post[0]->update();
        return view('blogpost::index', compact('post', 'nextPost', 'prevPost'));
    }
}
