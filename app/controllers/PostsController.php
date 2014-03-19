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
        $posts = $this->post->with('category')->paginate(5);
		return View::make('posts.index', compact('posts'));
	}
	public function archive($month, $year)
	{
        // return 'this is an archive';
        $posts = Post::raw_where('MONTH(created_at) = ? ', array($month))->raw_where('YEAR(created_at) = ?', array($year))->get();
        // $most_recent = News::order_by('id', 'desc')->first();
        $blog = Post::order_by('created_at', 'desc')->get();
        $months = array();
        foreach ($blog as $post){
            $months[date('F Y', strtotime($post->created_at))] = date('m/Y', strtotime($post->created_at));
        }        
        // return View::make('posts.index', compact('posts','months'));
        return $posts;
	}
    
    public function create()
	{
		return View::make('pages.create');
	}

	public function store()
	{
        $creator = new Chassis\Page\Creator($this);
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
		$post = $this->post->whereSlug($slug)->firstOrFail();
		// return View::make('posts.show', compact('post'));
        return $post;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$page = $this->page->find($id);

		if (is_null($page))
		{
			return Redirect::route('pages.index');
		}

		return View::make('pages.edit', compact('page'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $updater = new Chassis\Page\Updater($this);
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
		$this->page->find($id)->delete();

		return Redirect::route('pages.index');
	}
}
