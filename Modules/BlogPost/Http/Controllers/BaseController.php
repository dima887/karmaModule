<?php

namespace Modules\BlogPost\Http\Controllers;

use App\Http\Controllers\BaseBlogController;
use Modules\BlogPost\Http\Repositories\BlogPostRepository;

class BaseController extends BaseBlogController
{
    protected $blogPostRepository;

    public function __construct()
    {
        parent::__construct();

        $this->blogPostRepository = app(BlogPostRepository::class);
    }
}
