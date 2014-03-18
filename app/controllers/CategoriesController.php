<?php

class CategoriesController extends BaseController {

	/**
	 * Page Repository
	 *
	 * @var Page
	 */
	protected $post;

	public function __construct(Category $category)
	{
        $this->category = $category;
	}

    public function index($name = null)
    {
        if (!$name) return Redirect::to('blog');
        $category = Category::whereName($name)->with('posts')->first();
        return $category->posts;
    }
}
