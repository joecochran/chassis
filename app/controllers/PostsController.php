<?php

class PostsController extends BaseController {

	protected $post;

	public function __construct(Post $post)
	{
        $this->post = $post;
        $this->beforeFilter('auth', array('except' => array('show', 'index')));
	}
	public function index()
	{
        $posts = $this->post
            ->orderBy('created_at', 'desc')
            ->with('category')
            ->paginate(5);
		return View::make('posts.index', compact('posts'));
	}
	public function archive($year, $month = null)
	{
        if ($month) {
            $posts = Post::whereRaw('MONTH(created_at) = ? ', array($month))
                ->whereRaw('YEAR(created_at) = ?', array($year))
                ->orderBy('created_at', 'desc')->paginate(5);
        } else {
            $posts = Post::whereRaw('YEAR(created_at) = ?', array($year))
                ->orderBy('created_at', 'desc')
                ->paginate(5);
        }
        return View::make('posts.index', compact('posts'));
	}
    
    public function create()
	{
		return View::make('posts.create');
	}

	public function store()
	{
        $creator = new Chassis\Post\Creator($this);
        return $creator->create(Input::all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$post = $this->post->whereSlug($slug)->with('category')->with('tags')->firstOrFail();
		return View::make('posts.show', compact('post'));
        // return $post;
	}
    public function admin()
    {
        $posts = $this->post->orderBy('created_at', 'desc')->with('category')->with('tags')->paginate(10);
        return View::make('posts.admin', compact('posts'));
        // return $posts;
    }
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = $this->post->with('category')->with('tags')->find($id);
        // return $post;
		if (is_null($post))
		{
			return Redirect::route('posts.index');
		}

		return View::make('posts.edit', compact('post'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        dd(Input::all());
        $updater = new Chassis\Post\Updater($this);
        return $updater->update($id, Input::all());
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->post->find($id)->delete();

		return Redirect::route('s.index');
	}
}
