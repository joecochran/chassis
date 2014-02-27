<?php

class PagesController extends BaseController {

	/**
	 * Page Repository
	 *
	 * @var Page
	 */
	protected $page;

	public function __construct(Page $page)
	{
        $this->page = $page;
        $this->beforeFilter('auth', array('except' => array('show', '')));

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pages = $this->page->orderBy('title', 'asc')->get();
		return View::make('pages.index', compact('pages'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pages.create');
	}

	public function store()
	{
        $creator = new Harlo\Page\Creator($this);
        return $creator->create(Input::all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug = 'home')
	{
		$page = $this->page->whereSlug($slug)->firstOrFail();
		return View::make('pages.show', compact('page', 'pages', 'settings'));
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
        // dd(Input::all());
        $updater = new Harlo\Page\Updater($this);
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


    // Success Functions for listener

    public function pageCreationFails($errors)
    {
        return Redirect::route('pages.create')->withInput()->withErrors($validation);
    }

    public function pageCreateUpdateSucceeds()
    {
        return Redirect::route('pages.index');
    }

    public function pageUpdateFails($errors)
    {
		return Redirect::route('pages.edit', $id)->withInput()->withErrors($validation);
    }
}
