<?php

namespace Modules\BlogPost\Http\Controllers;

use Modules\BlogPost\Entities\Post;
use Modules\BlogPost\Http\Requests\PostRequest;

class StorePostController extends BaseController
{
    /**
     * Сохранение нового поста
     *
     * @param PostRequest $request
     * @param $user_id
     */
    public function store(PostRequest $request, $user_id)
    {
        $data = $request->all();

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('app/images/post');
        }

        $data['user_id'] = $user_id;

        Post::create($data);

        return redirect()->route('blog.post.create')->with('success', 'Пост опубликован');
    }

}
