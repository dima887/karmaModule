<?php


namespace Modules\Blog\Http\Repositories;


use App\Http\Repositories\CoreRepository;
use Illuminate\Support\Facades\DB;
use Modules\Blog\Entities\Category;
use Modules\Blog\Entities\Post;

class BlogRepository extends CoreRepository
{

    protected function getModelClass()
    {
        return Post::class;
    }

    /**
     * Получить популярные категории с наибольшим количеством постов
     */
    public function getCategoryPopularLimit($limit = null)
    {
        $categoryLimitThree = Category::query()
            ->join('posts', 'posts.category_id', '=', 'categories.id')
            ->select('categories.thumbnail', 'categories.slug', 'categories.category',
                DB::raw('COUNT(categories.id) as countPost'))
            ->where('categories.type', 1)
            ->limit($limit)
            ->toBase()
            ->orderBy('countPOST', 'DESC')
            ->groupBy('categories.thumbnail', 'categories.slug', 'categories.category')
            ->get();


        return $categoryLimitThree;
    }

    /**
     * Получить все посты
     */
    public function getPostAllWithPaginate($perPage = null)
    {
        $post = Post::query()
            ->join('categories', 'categories.id', '=',  'posts.category_id')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->leftJoin('comments', 'comments.post_id', '=', 'posts.id')
            ->select('posts.id', 'posts.title', 'posts.thumbnail', 'posts.updated_at',
                'posts.view', 'users.name', 'categories.category',
                DB::raw('COUNT(comments.comment) as countComment'))
            ->orderBy('posts.updated_at','desc')
            ->toBase()
            ->groupBy('posts.id', 'posts.title', 'posts.thumbnail', 'posts.updated_at',
                'posts.view', 'users.name', 'categories.category')
            ->paginate($perPage);

        return $post;
    }

    /**
     * Получить популярные посты
     */
    public function getPostPopular($count = null)
    {
        $postPopular = Post::query()
            ->select('id', 'thumbnail', 'title', 'updated_at')
            ->limit($count)
            ->orderByDesc('view')
            ->toBase()
            ->get();

        return $postPopular;
    }

    /**
     * Получить категории и количество постов относящиеся к каждой категории
     */
    public function getCategoryAndCountPost()
    {
        $category = Category::query()
            ->join('posts', 'posts.category_id','=', 'categories.id')
            ->select('categories.id', 'categories.category',
            DB::raw('COUNT(posts.id) as countPost'))
            ->toBase()
            ->groupBy('categories.id', 'categories.category')
            ->get();

        return $category;
    }
}
