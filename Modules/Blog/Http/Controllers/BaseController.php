<?php

namespace Modules\Blog\Http\Controllers;

use App\Http\Controllers\BaseBlogController;
use Modules\Blog\Http\Repositories\BlogRepository;

class BaseController extends BaseBlogController
{
    protected $blogRepository;

    public function __construct()
    {
        parent::__construct();

        $this->blogRepository = app(BlogRepository::class);
    }
}
