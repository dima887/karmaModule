<?php


namespace Modules\BlogPost\Http\Repositories;


use App\Http\Repositories\CoreRepository;
use Modules\BlogPost\Entities\Category;
use Modules\BlogPost\Entities\Post;

class BlogPostRepository extends CoreRepository
{

    protected function getModelClass()
    {
        return Post::class;
    }

    /**
     * Получить все категории относящиеся к блогу
     */
    public function getCategory()
    {
        $category = Category::query()
            ->select('id', 'category')
            ->toBase()
            ->where('type', '1')
            ->get();

        return $category;
    }

    /**
     * Получить вес посты с пагинацией, автором, категорией, количеством комментариев
     */
    public function getPostAllWithPaginate($id)
    {
        $post = Post::query()
            ->with('category', 'user')
            ->withCount('comments')
            ->where('posts.id', '=', $id)
        ->get();

        return $post;
    }

    /**
     * Получить следующий пост
     */
    public function getNextPost($id)
    {
        $nextPost = Post::query()
            ->select('posts.id', 'posts.title', 'posts.thumbnail')
            ->where('posts.id', '>', $id)
            ->toBase()
            ->first();

        return $nextPost;
    }

    /**
     * Получить предыдущий пост
     */
    public function getPrevPost($id)
    {
        $prevPost = Post::query()
            ->select('posts.id', 'posts.title', 'posts.thumbnail')
            ->where('posts.id', '<', $id)
            ->toBase()
            ->first();

        return $prevPost;
    }
}
