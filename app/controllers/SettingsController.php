<?php

class SettingsController extends BaseController {

	/**
	 * Page Repository
	 *
	 * @var Page
	 */
	protected $setting;

	public function __construct(Setting $setting)
	{
		$this->setting = $setting;
        $this->beforeFilter('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $settings = $this->setting->all();
        return View::make('settings.index', compact('settings'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('settings.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $creator = new Chassis\Setting\Creator($this);
        return $creator->create(Input::all());
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $updater = new Chassis\Setting\Updater($this);
        return $updater->update($id, array_except(Input::all(), '_method'));
	}
	/**
	 * Return a form for editing resource;
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function edit($id)
    {
        $setting = $this->setting->find($id);
        return View::make('settings.edit', compact('setting'));
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $setting = $this->setting->find($id)->delete();
        return Redirect::route('settings.index');
	}
}
