<?php

class TagsController extends BaseController {

	/**
	 * Page Repository
	 *
	 * @var Page
	 */
	protected $post;

	public function __construct(Tag $tag)
	{
        $this->tag = $tag;
	}

    public function index($name = null)
    {
        if (!$name) return Redirect::to('blog');
        $tag = Tag::whereName($name)->with('posts')->first();
		return View::make('posts.index');
    }
}
