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
        $name = replace_dash($name); 
        $tag = Tag::whereName($name)->with('posts')->first();
        $posts = $tag->posts()->paginate(5);
		return View::make('posts.index', compact('posts'))->with('category',$tag);
    }
}
